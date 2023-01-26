<!DOCTYPE html>
<html lang="en">
<head>
    <title>Now Showing</title>
<?php include('../pages/layouts/admin_header.php'); ?>



    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="#">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
    <!-- ---------------now showing---------------- -->
    <section name="A02-NowShowing" class="A02-NowShowing">
        <div class="A01-title">
            <h1>Now Showing</h1>
        </div>

        <div class="A02-Container">
            <div class="A02-Category">
                <table>
                    <tr>
                        <th class="A02-Category_item">Movie</th>
                        <th class="A02-Category_item">Schedule</th>
                        <th class="A02-Category_item">Movie Hall</th>
                        <th class="A02-Category_item">Status</th>
                    </tr>
                </table>
            </div>

            <div class="A02-Data">
                <table>
                    <tr>
                        <td class="A02-Data_item">Avatar 2</td>
                        <td class="A02-Data_item">7:00 AM - 10:00 AM</td>
                        <td class="A02-Data_item">LightScreen 1</td>
                        <td class="A02-Data_item">Finished</td>
                    </tr>
                </table>
            </div>

            <div class="A02-Data">
                <table>
                    <tr>
                        <td class="A02-Data_item">Pursuit of Happiness</td>
                        <td class="A02-Data_item">2:00 PM - 5:00 PM</td>
                        <td class="A02-Data_item">LightScreen 2</td>
                        <td class="A02-Data_item">Showing</td>
                    </tr>
                </table>
            </div>

            <div class="A02-Data">
                <table>
                    <tr>
                        <td class="A02-Data_item">Black Adam</td>
                        <td class="A02-Data_item">7:00 PM - 10:00 PM</td>
                        <td class="A02-Data_item">LightScreen 3</td>
                        <td class="A02-Data_item">Upcoming</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>


</body>
</html>