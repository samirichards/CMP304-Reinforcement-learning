<?php
    include('header.php');
?>
<div class="container text-light">
    <br/>
    <br/>
    <div class="row m-auto justify-content-md-center">
        <form name="loginForm" id="loginForm" class="col-md-auto container">
            <h4>Sign In</h4>
            <br/>
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
        <div class="col-md-auto container">
            <br/>
            <br/>
            <p>Join Mist and discover thousands of games to play.</p>
            <p>It's free and easy to use</p>
            <a class="btn btn-outline-dark text-white" href="register.php">Join Mist</a>
        </div>
    </div>
</div>
<?php
    include('footer.php');
?>
