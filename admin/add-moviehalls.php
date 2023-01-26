<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Movie Halls</title>
<?php include('../pages/layouts/admin_header.php'); ?>


    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
<!-- --------------------Add Movie Hall----------- -->
<section name="A11-AddMovieHall" class="A11-AddMovieHall">
    <div class="A01-title">
        <h1>Add Movie Hall</h1>
    </div>

    <div class="A11-Container">
        <div class="A11-MovieHallName">
            <h3>Movie Hall Name</h3>
            <input type="text" class="A11-txtMovieHallName" placeholder="Enter Movie Hall name" autocomplete="off">
        </div>

        <div class="A11-Capacity">
            <h3>Number of Seats</h3>
            <input type="number" class="A11-CapacityNum" placeholder="00" min="0" max="100">
        </div>

        <div class="flexbox">
            <div class="A11-LayoutSelection">
                <h3>Layout</h3>
                <select name="A11-Layout" id="A11-Layout">
                    <option value="Layout-A">Layout A</option>
                    <option value="Layout-B">Layout B</option>
                    <option value="Layout-C">Layout C</option>
                </select>
            </div>
            <div class="A11-LayoutPreview">
                <h3>Preview</h3>
                <div class="A11-Preview">Layout Preview</div>
            </div>
        </div>

        <div class="A11-Buttons">
            <button type="button" class="A11-Cancel">Cancel</button>
            <button type="button" class="A11-Confirm">Add Movie Hall</button>
        </div>
    </div>
</section>
</body>
</html>