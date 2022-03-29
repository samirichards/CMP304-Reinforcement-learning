<?php
    include('header.php');
?>
<div class="container text-light">
    <br/>
    <br/>
    <div class="row m-auto justify-content-md-center">
        <form name="regForm" id="regForm" class="col-md-auto container">
            <h4>Create your Account</h4>
            <br/>
            <div class="input-field m-2">
                <label class="mdc-text-field mdc-text-field--outlined">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                        <span class="mdc-notched-outline__notch">
                            <span class="mdc-floating-label" id="email-label">Email</span>
                        </span>
                        <span class="mdc-notched-outline__trailing"></span>
                    </span>
                    <input  name="email" type="email" id="email" class="mdc-text-field__input" aria-labelledby="email-label">
                </label>
            </div>
            <div class="input-field m-2">
                <label class="mdc-text-field mdc-text-field--outlined">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                        <span class="mdc-notched-outline__notch">
                            <span class="mdc-floating-label" id="emailConf-label">Confirm your Email</span>
                        </span>
                        <span class="mdc-notched-outline__trailing"></span>
                    </span>
                    <input  name="emailConf" type="email" id="emailConf" class="mdc-text-field__input" aria-labelledby="emailConf-label">
                </label>
            </div>
            <div class="input-field m-2">
                <label class="mdc-text-field mdc-text-field--outlined">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                        <span class="mdc-notched-outline__notch">
                            <span class="mdc-floating-label" id="firstName-label">First Name</span>
                        </span>
                        <span class="mdc-notched-outline__trailing"></span>
                    </span>
                    <input  name="firstName" type="text" id="firstName" class="mdc-text-field__input" aria-labelledby="firstName-label">
                </label>
            </div>
            <div class="input-field m-2">
                <label class="mdc-text-field mdc-text-field--outlined">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                        <span class="mdc-notched-outline__notch">
                            <span class="mdc-floating-label" id="lastName-label">Last Name</span>
                        </span>
                        <span class="mdc-notched-outline__trailing"></span>
                    </span>
                    <input  name="lastName" type="text" id="lastName" class="mdc-text-field__input" aria-labelledby="lastName-label">
                </label>
            </div>
            <div class="input-field m-2">
                <label class="mdc-text-field mdc-text-field--outlined">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                        <span class="mdc-notched-outline__notch">
                            <span class="mdc-floating-label" id="password-label">Password</span>
                        </span>
                        <span class="mdc-notched-outline__trailing"></span>
                    </span>
                    <input  name="password" type="password" id="password" class="mdc-text-field__input" aria-labelledby="password-label">
                </label>
            </div>
            <div class="input-field m-2">
                <label class="mdc-text-field mdc-text-field--outlined">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                        <span class="mdc-notched-outline__notch">
                            <span class="mdc-floating-label" id="passwordConf-label">Confirm your Password</span>
                        </span>
                        <span class="mdc-notched-outline__trailing"></span>
                    </span>
                    <input  name="passwordConf" type="password" id="passwordConf" class="mdc-text-field__input" aria-labelledby="passwordConf-label">
                </label>
            </div>
            <input class="btn btn-dark" type="submit" id="submitReg"/>
        </form>
    </div>
</div>
<?php
    include('footer.php');
?>
