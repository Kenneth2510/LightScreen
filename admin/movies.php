<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movies</title>
<?php include('../pages/layouts/admin_header.php'); ?>


    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="#">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./users.php">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
<!-- --------------------movies----------- -->
<section name="A05-Movies" class="A05-Movies">
    <div class="A01-title">
        <h1>Movies</h1>
    </div>

    <div class="A05-Container">
        <div class="A05-Buttons">
            <div class="A05-AddEdit">
                <button type="button" class="A05-Add" onclick="window.location.href='./add-movie.php'">Add Movie</button>
                <button type="button" class="A05-Edit" onclick="window.location.href='./add-movie.php'">Edit Movie</button>
            </div>
            <div class="A05-SearchSort">
                <select name="A05-Sort" id="A05-Sort">
                   <option value="all">All</option>
                   <option value="name">Name</option>
                   <option value="movie">Movie</option>
                   <option value="showtime">ShowTime</option>
                   <option value="moviehall">MovieHall</option>
                   <option value="status">Status</option>
                    <!-- to be changed -->
                </select>
                <form action="#" class="A05-Search">
                    <input type="text" class="A05-txtSearchvalue" placeholder="search">
                    <i class="fa-solid fa-magnifying-glass A05"></i>
                </form>
            </div>
        </div>

        <div class="A05-Table">
            <div class="A05-Category">
                <table>
                    <tr>
                        <th class="A05-Category_item"></th>
                        <th class="A05-Category_item">Movie</th>
                        <th class="A05-Category_item">Duration</th>
                        <th class="A05-Category_item">Genre</th>
                        <th class="A05-Category_item">Category</th>
                        <th class="A05-Category_item">Status</th>
                    </tr>
                </table>
            </div>

            <div class="A05-Data">
                <table>
                    <tr>
                        <td class="A05-Data_item"><img src="sampleposter.png"></td>
                        <td class="A05-Data_item">Avatar 2</td>
                        <td class="A05-Data_item">3hrs 12mins</td>
                        <td class="A05-Data_item"><ul>
                            <li>Action</li>
                            <li>Adventure</li>
                            <li>Drama</li>
                        </ul></td>
                        <td class="A05-Data_item">PG-13</td>
                        <td class="A05-Data_item">Active</td>
                    </tr>
                </table>
            </div>

            <div class="A05-Data">
                <table>
                    <tr>
                        <td class="A05-Data_item"><img src="sampleposter.png"></td>
                        <td class="A05-Data_item">Avatar 2</td>
                        <td class="A05-Data_item">3hrs 12mins</td>
                        <td class="A05-Data_item"><ul>
                            <li>Action</li>
                            <li>Adventure</li>
                            <li>Drama</li>
                        </ul></td>
                        <td class="A05-Data_item">PG-13</td>
                        <td class="A05-Data_item">Active</td>
                    </tr>
                </table>
            </div>

            <div class="A05-Data">
                <table>
                    <tr>
                        <td class="A05-Data_item"><img src="sampleposter.png"></td>
                        <td class="A05-Data_item">Avatar 2</td>
                        <td class="A05-Data_item">3hrs 12mins</td>
                        <td class="A05-Data_item"><ul>
                            <li>Action</li>
                            <li>Adventure</li>
                            <li>Drama</li>
                        </ul></td>
                        <td class="A05-Data_item">PG-13</td>
                        <td class="A05-Data_item">Active</td>
                    </tr>
                </table>
            </div>

            <div class="A05-Data">
                <table>
                    <tr>
                        <td class="A05-Data_item"><img src="sampleposter.png"></td>
                        <td class="A05-Data_item">Avatar 2</td>
                        <td class="A05-Data_item">3hrs 12mins</td>
                        <td class="A05-Data_item"><ul>
                            <li>Action</li>
                            <li>Adventure</li>
                            <li>Drama</li>
                        </ul></td>
                        <td class="A05-Data_item">PG-13</td>
                        <td class="A05-Data_item">Active</td>
                    </tr>
                </table>
            </div>

    </div>
</section>
</body>
</html>