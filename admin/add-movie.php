<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Movie</title>
<?php include('../pages/layouts/admin_header.php'); ?>


    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
<!-- --------------------Add Movie----------- -->
<section name="A09-AddMovie" class="A09-AddMovie">
    <div class="A01-title">
        <h1>Add Movie</h1>
    </div>

    <div class="A09-Container">
        <form action="#" class="A09-AddMovie_input"></form>
        <div class="A09-MovieTitle">
            <h3>Movie Title</h3>
            <input type="text" class="A09-txtTitle" placeholder="Enter Title" autocomplete="off">
        </div>

        <div class="A09-MovieDescription">
            <h3>Movie Description</h3>
            <textarea class="A09-txtDescription" placeholder="Enter Description"></textarea>
        </div>

        <div class="A09-Duration_Date">
            <div class="A09-Duration">
                <h3>Duration</h3>
                <div class="flexbox">
                    <input type="number" class="A09-txtTime_hr" placeholder="hr" autocomplete="off">
                    <h3> : </h3>
                    <input type="number" class="A09-txtTime_min" placeholder="min" autocomplete="off">
                </div>
                
            </div>
    
            <div class="A09-ReleaseDate">
                <h3>Release Date</h3>
                <input type="date" class="A09-txtDate">
            </div>
        </div>
        
        <div class="A09-Casts">
            <h3>Casts</h3>
            <input type="text" class="A09-txtCasts" placeholder="Enter Casts" autocomplete="off">
        </div>

        <div class="A09-Director">
            <h3>Director</h3>
            <input type="text" class="A09-txtDirector" placeholder="Enter Director" autocomplete="off">
        </div>

        <div class="flexbox">
            <div class="A09-Genre">
                <h3>Genre</h3>
                <input type="text" class="A09-txtGenre" placeholder="Enter Genre" autocomplete="off">
            </div>

            <div class="A09-Category">
                <h3>Category</h3>
                <input type="text" class="A09-txtCategory" placeholder="Enter Category" autocomplete="off">
            </div>
        </div>

        <div class="A09-MoviePoster">
            <h3>Movie Poster</h3>
            <input type="file" class="A09-fileMoviePoster">
        </div>

        <div class="A09-MovieTrailer">
            <h3>Movie Trailer</h3>
            <input type="file" class="A09-fileMovieTrailer">
        </div>

        <div class="A09-Buttons">
            <button type="button" class="A09-Cancel">Cancel</button>
            <button type="button" class="A09-Confirm">Add Movie</button>
        </div>
    </div>

</section>
</body>
</html>