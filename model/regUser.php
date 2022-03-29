<?php
    require_once '../controller/connection.php';
    $conn = getDatabaseConnection();

    function isEmailPresent($email, $conn){
        $sqlSelect = "SELECT * FROM `CMP304_Shop_Users` WHERE email like ?";
        $stmtSelect = $conn->prepare($sqlSelect);
        $stmtSelect->bind_param("s", $email);
        $stmtSelect->execute();
        $result =$stmtSelect->get_result();

        return $result->num_rows > 0;
    }

    $errors = [];
    $data = [];

    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required.';
    }
    if (empty($_POST['emailConf'])) {
        $errors['emailConf'] = 'Confirm Email is required.';
    }

    if ($_POST['emailConf'] != $_POST['email']) {
        $errors['emailMismatch'] = 'Email address does not match';
    }

    if (empty($_POST['firstName'])) {
        $errors['firstName'] = 'First Name is required.';
    }
    if (empty($_POST['lastName'])) {
        $errors['lastName'] = 'Last Name is required.';
    }

    if (empty($_POST['password'])) {
        $errors['password'] = 'Password is required.';
    }

    if (empty($_POST['passwordConf'])) {
        $errors['passwordConf'] = 'Confirm password is required.';
    }

    if ($_POST['password'] != $_POST['passwordConf']) {
        $errors['passwordMismatch'] = 'Passwords do not match';
    }

    if (isEmailPresent($_POST['email'], $conn)){
        $errors["userAlreadyExists"] = "User already exists with that email address";
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $sqlInsert = "INSERT INTO CMP304_Shop_Users (firstName, lastName, email, passwordHash) VALUES (?, ?, ?, ?)";
        $stmtInsert =$conn->prepare($sqlInsert);
        $stmtInsert->bind_param("ssss", $_POST["firstName"], $_POST["lastName"], $_POST["email"], password_hash($_POST['password'], PASSWORD_DEFAULT));

        if($stmtInsert->execute()){
            $data['success'] = true;
            $data['message'] = 'Success!';
        }
        else{
            $data['success'] = false;
            $errors["serverError"] = "User account could not be created";
            $data['errors'] = $errors;
        }
    }

    echo json_encode($data);