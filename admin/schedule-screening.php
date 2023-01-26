<!DOCTYPE html>
<html lang="en">
<head>
    <title>Schedule Screening</title>
<?php include('../pages/layouts/admin_header.php'); ?>


    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
<!-- --------------------Add Screening----------- -->
<section name="A10-AddScreening" class="A10-AddScreening">
    <div class="A01-title">
        <h1>Add Screening Schedule</h1>
    </div>

    <div class="A10-Container">
        <div class="A10-MovieSelection">
            <h3>Choose Movie</h3>
            <input type="text" class="A10-txtMovie" placeholder="Enter Movie Title" autocomplete="off">
        </div>

        <div class="A10-MovieHallSelection">
            <h3>Choose Movie Hall</h3>
            <select name="A10-MovieHall" id="A10-MovieHall">
                <option value="LightScreen-1">LightScreen 1</option>
                <option value="LightScreen-2">LightScreen 2</option>
                <option value="LightScreen-3">LightScreen 3</option>
            </select>
        </div>

        <div class="flexbox">
            <div class="A10-Date">
                <h3>Date</h3>
                <input type="date" class="A10-txtDate">
            </div>
            <div class="A10-Time">
                <h3>Time</h3>
                <div class="flexbox">
                    <input type="time" class="A10-txtTime_from">
                    <h3> to </h3>
                    <input type="time" class="A10-txtTime_to">
    
                </div>                
            </div>
        </div>

        <div class="A10-Notes">
            <h3>Notes</h3>
            <textarea name="text" class="A10-txtNotes" placeholder="Enter Notes"></textarea>
        </div>

        <div class="A10-Buttons">
            <button type="button" class="A10-Cancel">Cancel</button>
            <button type="button" class="A10-Confirm">Add Screening</button>
        </div>
    </div>

</section>
</body>
</html>