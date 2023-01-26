<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
<?php include('../pages/layouts/admin_header.php'); ?>



    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="#">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
    <!-- -------------dashboard---------------- -->
    <section name="A01-Dashboard" class="A01-Dashboard">
        <div class="A01-title">
            <h1>Dashboard</h1>
        </div>
        <div class="A01-Container">
            <div class="A01-Dailyinfo">
                <div class="A01-dailystat"><p>Number of Movie Showing</p></div>
                <div class="A01-dailystat"><p>Number of Booking today</p></div>
                <div class="A01-dailystat"><p>Number of Active Movie Halls</p></div>
                <div class="A01-dailystat"><p>Number of Pending Bookings</p></div>
            </div>
            <div class="flexbox">
                <div class="A01-MovieSched">
                    <div class="A01-NowShowingMovie"><p>Now Showing Movies</p></div>
                    <div class="A01-UpcomingMovieSched"><p>Upcoming Movies</p></div>
                </div>
                <div class="A01-datetime">
                    <div class="A01-Time">Time</div>
                    <div class="A01-Calendar">Calendar</div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>