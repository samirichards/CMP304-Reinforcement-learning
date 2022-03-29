<?php
    require_once '../controller/connection.php';
    session_start();
    $conn = getDatabaseConnection();
    $errors = [];
    $data = [];

    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required.';
    }

    if (empty($_POST['password'])) {
        $errors['password'] = 'Password is required.';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {

        $sqlSelect = "SELECT * FROM CMP304_Shop_Users WHERE email=?";	//select to check if correct login
        $stmtSelect = $conn->prepare($sqlSelect);									//prepare select
        $stmtSelect->bind_param("s", $_POST["email"]);						//bind parameters to select statement
        $stmtSelect->execute(); 													//execute select statement
        $result = $stmtSelect->get_result();

        if ($result->num_rows > 0) { 								//if there is comments
            while($row = $result->fetch_assoc()) { 					//output row
                if(password_verify($_POST["password"], $row["passwordHash"])) {
                    $_SESSION['uID'] = $row["id"];
                    $_SESSION['login_error'] = '';
                    $_SESSION['email'] = $row["email"];
                    $_SESSION['firstName'] = $row["firstName"];
                    $_SESSION['lastName'] = $row["lastName"];
                    $_SESSION['isAdmin'] = $row["isAdmin"];
                    $_SESSION["loggedIn"] = true;
                    $data['success'] = true;
                    $data['message'] = 'Success!';
                }
                else{
                    $data['success'] = false;
                    $errors["serverError"] = "Password incorrect";
                    $data['errors'] = $errors;
                }
            }
        }
        else{
            $data['success'] = false;
            $errors["serverError"] = "User not found";
            $data['errors'] = $errors;
        }
    }

    echo json_encode($data);