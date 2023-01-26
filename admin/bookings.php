<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookings</title>
<?php include('../pages/layouts/admin_header.php'); ?>



    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="#">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
<!-- --------------------bookings----------- -->
<section name="A04-Bookings" class="A04-Bookings">
    <div class="A01-title">
        <h1>Bookings</h1>
    </div>

    <div class="A04-Container">
        <div class="A04-Buttons">
            <div class="A04-AddEdit">
                <!-- <button type="button" class="A04-Add">Add Screening</button>
                <button type="button" class="A04-Edit">Edit Screening</button> -->
                <div class="A04-InviDiv"></div>
                <div class="A04-InviDiv"></div>
            </div>
            <div class="A04-SearchSort">
                <select name="A04-Sort" id="A04-Sort">
                   <option value="all">All</option>
                   <option value="name">Name</option>
                   <option value="movie">Movie</option>
                   <option value="showtime">ShowTime</option>
                   <option value="moviehall">MovieHall</option>
                   <option value="status">Status</option>

                </select>
                <form action="#" class="A04-Search">
                    <input type="text" class="A04-txtSearchvalue" placeholder="search">
                    <i class="fa-solid fa-magnifying-glass A04"></i>
                </form>
            </div>
        </div>

        <div class="A04-Table">
            <div class="A04-Category">
                <table>
                    <tr>
                        <th class="A04-Category_item">Name</th>
                        <th class="A04-Category_item">Tickets</th>
                        <th class="A04-Category_item">Movie</th>
                        <th class="A04-Category_item">Showtime</th>
                        <th class="A04-Category_item">Movie Hall</th>
                        <th class="A04-Category_item">Status</th>
                    </tr>
                </table>
            </div>

            <div class="A04-Data">
                <table>
                    <tr>
                        <td class="A04-Data_item">Light Yagami</td>
                        <td class="A04-Data_item"><ul>
                            <li>Adult: 1x</li>
                            <li>Child: 2px</li>
                            <li>Senior: 0x</li>
                            <li>Date: 12/02/2022</li>
                        </ul></td>
                        <td class="A04-Data_item">Avatar 2</td>
                        <td class="A04-Data_item">12/24/2022 <br> 2:00 PM - 5:00 PM</td>
                        <td class="A04-Data_item">LightScreen 1</td>
                        <td class="A04-Data_item">
                            <div class="A04-BookStatus">
                                <p>pending</p>
                                <button class="A04-BookConfirm"><i class="fa-solid fa-check A04"></i></button>
                                <button class="A04-BookCancel"><i class="fa-solid fa-ban A04"></i></button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>


            <div class="A04-Data">
                <table>
                    <tr>
                        <td class="A04-Data_item">Emma G. Neishun</td>
                        <td class="A04-Data_item"><ul>
                            <li>Adult: 5x</li>
                            <li>Child: 0px</li>
                            <li>Senior: 0x</li>
                            <li>Date: 12/07/2022</li>
                        </ul></td>
                        <td class="A04-Data_item">Partners in Crime</td>
                        <td class="A04-Data_item">12/25/2022 <br> 2:00 PM - 5:00 PM</td>
                        <td class="A04-Data_item">LightScreen 1</td>
                        <td class="A04-Data_item">
                            <div class="A04-BookStatus">
                                <p>confirmed</p>
                                <button class="A04-BookConfirm"><i class="fa-solid fa-check A04"></i></button>
                                <button class="A04-BookCancel"><i class="fa-solid fa-ban A04"></i></button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

    </div>

</section>
</body>
</html>