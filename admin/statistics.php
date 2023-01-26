<!DOCTYPE html>
<html lang="en">
<head>
    <title>Statistics</title>
<?php include('../pages/layouts/admin_header.php'); ?>



    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="#">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
<!-- --------------------statistics----------- -->
<section name="A08-Statistics" class="A08-Statistics">
    <div class="A01-title">
        <h1>Statistics</h1>
    </div>

    <div class="A08-Container">
        <div class="flexbox A08-Stat1">
            <div class="A08-ScreeningsReport">
                <h3>Number of Screenings</h3>
                <div class="A08-ScreeningNum">Average Daily Screenings</div>
                <div class="A08-ScreeningNum">Monthly Screenings</div>
                <div class="A08-ScreeningNum">Total Screenings</div>
            </div>

            <div class="A08-SalesReport">
                <h3>Sales Report</h3>
                <div class="A08-SalesNum">Average Daily Sales</div>
                <div class="A08-SalesNum">Monthly Sales</div>
                <div class="A08-SalesNum">Total Sales</div>
            </div>
        </div>

        <div class="A08-Stat2">
            <h3>Highest Grossing Movie</h3>
            <div class="flexbox">
                <div class="A08-HighestGrossingGraph">Highest Grossing Movies Graph</div>

                <div class="A08-HighestGrossingMovie">
                    <div class="A08-HGTop3">Top 1</div>
                    <div class="A08-HGTop3">Top 2</div>
                    <div class="A08-HGTop3">Top 3</div>
                </div>
            </div>
        </div>

        <div class="A08-TopRatedMovies">
            <h3>Top Rated Movies</h3>
            <div class="A08-TopRatedMoviesGraph">Top Rated Movies</div>
        </div>
        
        <div class="A08-Stat3">
            <div class="flexbox">
                <div class="A08-MovieGoers">
                    <h3>Movie Goers</h3>
                    <div class="A08-MovieGoersNum">Number of Movie Goers</div>
                </div>
                
                <div class="A08-Refunds">
                    <h3>Refunds and Cancellations</h3>
                    <div class="A08-RefundNum">Number of Refunds made</div>
                </div>
            </div>       
        </div>
         

        <div class="flexbox A08-Stat4">
            <div class="A08-NowShowing_Upcoming">
                <div class="A08-NowShowing">Now Showing</div>
                <div class="A08-Upcoming">Upcoming</div>
            </div>
            <div class="A08-DateTime">
                <div class="A08-Time">Time</div>
                <div class="A08-Calendar">Calendar</div>
            </div>
        </div>
    </div>


</section>
</body>
</html>
