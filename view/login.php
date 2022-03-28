<?php
    include('header.php');
?>
<div class="container text-light">
    <p>Login page</p>
    <div class="ms-auto">
        <form class="col">
            <div class="input-field">
                <input class="form-control" name="email" type="email" id="email"/>
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input class="form-control" name="password" type="password" id="password"/>
                <label for="password">Password</label>
            </div>
            <input class="btn btn-dark" type="submit" name="submitLogin" id="submitLogin"/>
        </form>
    </div>
</div>
<?php
    include('footer.php');
?>
