<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add User</title>
<?php include('../pages/layouts/admin_header.php'); ?>


    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
<!-- --------------------Add Movie Hall----------- -->
<section name="A12-AddUser" class="A12-AddUser">
    <div class="A01-title">
        <h1>Add User</h1>
    </div>

    <div class="A12-Container">

        <form action="#" method="GET" class="A12-InputData">
            <div class="flexbox">
                <div class="A12-Username_Password">
                    <h3>Username and Password</h3>
                    <label class="A12-Username">Username</label> <br>
                    <input type="text" class="A12-txtUsername" placeholder="Username" autocomplete="off"><br><br>
                    <label class="A12-Password">Password</label><br>
                    <input type="password" class="A12-txtPassword" placeholder="Password"><br><br>
                    <label class="A12-Password_Confirm">Confirm Password</label><br>
                    <input type="password" class="A12-txtPassword_Confirm" placeholder="Confirm Password"><br><br>
                </div>
                <div class="A12-Personal_Information">
                    <h3>Personal Information</h3>
                    <label class="A12-FirstName">First Name</label><br>
                    <input type="text" class="A12-txtFirstName" placeholder="First Name" autocomplete="off"><bR><br>
                    <label class="A12-LastName">Last Name</label><br>
                    <input type="text" class="A12-txtLastName" placeholder="Last Name"><br><br>
                    <label class="A12-Birthday">Birthday</label><br>
                    <input type="date" class="A12-txtBirthday"> <br><br>
                </div>
            </div>
    
            <div class="A12-ContactInfo">
                <h3>Contact Information</h3>
                    <label class="A12-Email">Email</label><br>
                    <input type="email" class="A12-txtEmail" placeholder="Email Address"><br><br>
                    <label class="A12-Mobile">Mobile Number</label><br>
                    <input type="text" class="A12-txtMobile" placeholder="Mobile Number"><br>
            </div>
    
           
            <div class="A12-Buttons">
                <button type="button" class="A12-Cancel">Cancel</button>
                <button type="button" class="A12-Confirm">Add Movie Hall</button>
            </div>
            </form>



    </div>    
</section>
</body>
</html>