<!DOCTYPE html>
<html lang="en">
<head>
    <title>Screenings</title>
<?php include('../pages/layouts/admin_header.php'); ?>


    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="#">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
    <!-- --------------------screening----------- -->
    <section name="A03-Screening" class="A03-Screening">
        <div class="A01-title">
            <h1>Screenings</h1>
        </div>

        <div class="A03-Container">
            <div class="A03-Buttons">
                <div class="A03-AddEdit">
                    <button type="button" class="A03-Add"  onclick="window.location.href='./schedule-screening.php'">Add Screening</button>
                    <button type="button" class="A03-Edit"  onclick="window.location.href='./schedule-screening.php'">Edit Screening</button>
                </div>
                <div class="A03-SearchSort">
                    <select name="A03-Sort" id="A03-Sort">
                        <option value="All">All</option>
                        <option value="Movie">Movie</option>
                        <option value="Showtime">Showtime</option>
                        <option value="MovieHall">MovieHall</option>
                    </select>
                    <form action="#" class="A03-Search">
                        <input type="text" class="A03-txtSearchvalue" placeholder="search">
                        <i class="fa-solid fa-magnifying-glass A03"></i>
                    </form>
                </div>
            </div>

            <div class="A03-Table">
                <div class="A03-Category">
                    <table>
                        <tr>
                            <th class="A03-Category_item"></th>
                            <th class="A03-Category_item">Movie</th>
                            <th class="A03-Category_item">Schedule</th>
                            <th class="A03-Category_item">Movie Hall</th>
                            <th class="A03-Category_item">Date Added</th>
                        </tr>
                    </table>
                </div>

                <div class="A03-Data">
                    <table>
                        <tr>
                            <td class="A03-Data_item"><img src="sampleposter.png"></td>
                            <td class="A03-Data_item">Avatar 2</td>
                            <td class="A03-Data_item">12/19/2022 <br> 7:00 AM - 10:00 AM</td>
                            <td class="A03-Data_item">LightScreen 1</td>
                            <td class="A03-Data_item">12/19/2022</td>
                        </tr>
                    </table>
                </div>

                <div class="A03-Data">
                    <table>
                        <tr>
                            <td class="A03-Data_item"><img src="sampleposter.png"></td>
                            <td class="A03-Data_item">Avatar 2</td>
                            <td class="A03-Data_item">12/19/2022 <br> 7:00 AM - 10:00 AM</td>
                            <td class="A03-Data_item">LightScreen 1</td>
                            <td class="A03-Data_item">12/19/2022</td>
                        </tr>
                    </table>
                </div>

                <div class="A03-Data">
                    <table>
                        <tr>
                            <td class="A03-Data_item"><img src="sampleposter.png"></td>
                            <td class="A03-Data_item">Avatar 2</td>
                            <td class="A03-Data_item">12/19/2022 <br> 7:00 AM - 10:00 AM</td>
                            <td class="A03-Data_item">LightScreen 1</td>
                            <td class="A03-Data_item">12/19/2022</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </section>

</body>
</html>
