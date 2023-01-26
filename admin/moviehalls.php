<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Halls</title>
<?php include('../pages/layouts/admin_header.php'); ?>


    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="#">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
<!-- --------------------movie halls----------- -->
<section name="A06-MovieHalls" class="A06-MovieHalls">
    <div class="A01-title">
        <h1>Movie Halls</h1>
    </div>

    <div class="A06-Container">
        <div class="A06-Buttons">
            <div class="A06-AddEdit">
                <button type="button" class="A06-Add"  onclick="window.location.href='./add-moviehalls.php'">Add Movie</button>
                <button type="button" class="A06-Edit"  onclick="window.location.href='./add-moviehalls.php'">Edit Movie</button>
            </div>
            <div class="A06-SearchSort">
                <select name="A06-Sort" id="A06-Sort">
                   <option value="all">All</option>
                   <option value="name">Name</option>
                   <option value="status">Status</option>

                </select>
                <form action="#" class="A06-Search">
                    <input type="text" class="A06-txtSearchvalue" placeholder="search">
                    <i class="fa-solid fa-magnifying-glass A06"></i>
                </form>
            </div>
        </div>

        <div class="A06-Table">
            <div class="A06-Category">
                <table>
                    <tr>
                        <th class="A06-Category_item">Movie Halls</th>
                        <th class="A06-Category_item">Total Capacity</th>
                        <th class="A06-Category_item">Status</th>
                    </tr>
                </table>
            </div>

            <div class="A06-Data">
                <table>
                    <tr>
                        <td class="A06-Data_item">LightScreen 1</td>
                        <td class="A06-Data_item">80 seats</td>
                        <td class="A06-Data_item">active</td>
                    </tr>
                </table>
            </div>

            <div class="A06-Data">
                <table>
                    <tr>
                        <td class="A06-Data_item">LightScreen 2</td>
                        <td class="A06-Data_item">80 seats</td>
                        <td class="A06-Data_item">showing</td>
                    </tr>
                </table>
            </div>

            <div class="A06-Data">
                <table>
                    <tr>
                        <td class="A06-Data_item">LightScreen 3</td>
                        <td class="A06-Data_item">80 seats</td>
                        <td class="A06-Data_item">active</td>
                    </tr>
                </table>
            </div>

            
    </div>
</section>
</body>
</html>