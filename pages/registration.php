<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
<?php include(dirname(__FILE__) . '/layouts/header.php') ?>

    <!-- --------------------Registration----------- -->
<section name="U07-Registration" class="U07-Registration">
    <div class="U07-title">
        <h1>Registration</h1>
    </div>

    <div class="U07-Container">
        <form action="#" method="GET" class="U07-InputData">
        <div class="flexbox">
            <div class="U07-Username_Password">
                <h3>Username and Password</h3>
                <label class="U07-Username">Username</label> <br>
                <input type="text" class="U07-txtUsername" placeholder="Username" autocomplete="off"><br><br>
                <label class="U07-Password">Password</label><br>
                <input type="password" class="U07-txtPassword" placeholder="Password"><br><br>
                <label class="U07-Password_Confirm">Confirm Password</label><br>
                <input type="password" class="U07-txtPassword_Confirm" placeholder="Confirm Password"><br><br>
            </div>
            <div class="U07-Personal_Information">
                <h3>Personal Information</h3>
                <label class="U07-FirstName">First Name</label><br>
                <input type="text" class="U07-txtFirstName" placeholder="First Name" autocomplete="off"><bR><br>
                <label class="U07-LastName">Last Name</label><br>
                <input type="text" class="U07-txtLastName" placeholder="Last Name"><br><br>
                <label class="U07-Birthday">Birthday</label><br>
                <input type="date" class="U07-txtBirthday"> <br><br>
            </div>
        </div>

        <div class="U07-ContactInfo">
            <h3>Contact Information</h3>
                <label class="U07-Email">Email</label><br>
                <input type="email" class="U07-txtEmail" placeholder="Email Address"><br><br>
                <label class="U07-Mobile">Mobile Number</label><br>
                <input type="text" class="U07-txtMobile" placeholder="Mobile Number"><br>
        </div>

        <div class="U07-Agree_Consent">
            <div class="U07-Terms_Conditions">
                <input type="checkbox" class="U07-checkTerms_Conditions">
                <p>I agree to the <a href="#">Terms & Condtions</a> and <a href="#">Data Privacy Policy</a>.</a></p>
            </div>
            <div class="U07-Consent">
                <input type="checkbox" class="U07-checkConsent">
                <p>I consent to receive information about LightScreen, products and services, promotional offers, contests, newsletters or 
                    other activities that may be of interest to me. I understand that SM Lifestyle, Inc. will respect my wishes if I elect not to 
                    receive future correspondence about these activities. With each communication I receive, I will have the opportunity to
                    indicate if I do not want to receive future communications.</p>
            </div>
        </div>

       
        <div class="flexbox sb">
            <div class="U07-InviDiv"></div>
            <div class="U07-Buttons">
                <button type="button" class="U07-btnCancel">Cancel</button>
                <input type="submit" class="U07-btnRegister" value="Register">
            </div>
        </div>
        </form>
    </div>
</section>
