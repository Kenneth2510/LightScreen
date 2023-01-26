<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Information</title>
<?php include(dirname(__FILE__) . '/layouts/header.php') ?>

<!-- --------------sidebar----------------- -->
<section name="U08-Sidebar" class="U08-Sidebar">
    <button type="button" class="U08-sidebar_item"><div class="selected"></div><a href="#">My Tickets</a></button>
    <button type="button" class="U08-sidebar_item"><div class="selected"></div><a href="#">Purchase History</a></button>
    <button type="button" class="U08-sidebar_item active"><div class="selected on"></div><a href="#">Account Information</a></button>
</section>

<!-- ---------------user info---------------- -->
<section name="U10-UserInfo" class="U10-UserInfo">
    <div class="U07-title">
        <h1>Account Information</h1>
    </div>

    <div class="U10-Container">
        <div class="U10-PersonalInfo">
            <h3>Personal Information</h3>
            <h4>First Name</h4>
            <p>First Name</p>

            <h4>Last Name</h4>
            <p>Last Name</p>

            <h4>Birthday</h4>
            <p>MM/DD/YYYY</p>
        </div>

        <div class="U10-ContactInfo">
            <h3>Contact Information</h3>
            <h4>Email Address</h4>
            <p>Email Address</p>

            <h4>Mobile Number</h4>
            <p>Mobile Number</p>
        </div>

        <div class="U10-Username_Password">
            <h3>Username and Password</h3>
            <h4>Username</h4>
            <p>Username</p>

            <h4>Password</h4>
            <p>Password</p>
        </div>

        <div class="flexbox sb">
            <div class="InviDiv"></div>
            <div class="U10-Buttons">
                <button type="button" class="U10-btnCancel">Cancel</button>
                <button type="button" class="U10-btnEdit">Edit</button>
            </div>
        </div>
    </div>
</section>
</body>
</html>
    