<!DOCTYPE html>
<html lang="en">
<head>
    <title>Users</title>
<?php include('../pages/layouts/admin_header.php'); ?>


    <!-- --------------sidebar----------------- -->
    <section name="A01-Sidebar" class="A01-Sidebar">
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./dashboard.php">Dashboard</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./now-showing.php">Now Showing</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./screening.php">Screening</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./bookings.php">Bookings</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./movies.php">Movies</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./moviehalls.php">Movie Hall</a></button>
        <button type="button" class="A01-sidebar_item active"><div class="selected on"></div><a href="#">User</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="./statistics.php">Statistics</a></button>
        <button type="button" class="A01-sidebar_item"><div class="selected"></div><a href="#">Logout</a></button>
    </section>
<!-- --------------------users----------- -->
<section name="A07-Users" class="A07-Users">
    <div class="A01-title">
        <h1>Users</h1>
    </div>

    <div class="A07-Container">
        <div class="A07-Buttons">
            <div class="A07-AddEdit">
                <button type="button" class="A07-Add" onclick="window.location.href='./add-user.php'">Add User</button>
                <button type="button" class="A07-Edit" onclick="window.location.href='./add-user.php'">Edit User</button>
            </div>
            <div class="A07-SearchSort">
                <select name="A07-Sort" id="A07-Sort">
                   <option value="all">All</option>
                   <option value="name">First Name</option>
                   <option value="name">Last Name</option>
                   <option value="name">Birthday</option>
                   <option value="name">Email</option>
                   <option value="name">Contact No.</option>
                </select>
                <form action="#" class="A07-Search">
                    <input type="text" class="A07-txtSearchvalue" placeholder="search">
                    <i class="fa-solid fa-magnifying-glass A07"></i>
                </form>
            </div>
        </div>

        <div class="A07-Table">
            <div class="A07-Category">
                <table>
                    <tr>
                        <th class="A07-Category_item">Name</th>
                        <th class="A07-Category_item">Birthday</th>
                        <th class="A07-Category_item">Email</th>
                        <th class="A07-Category_item">Contact No.</th>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

            <div class="A07-Data">
                <table>
                    <tr>
                        <td class="A07-Data_item">Emma G. Neishun</td>
                        <td class="A07-Data_item">10/25/2001</td>
                        <td class="A07-Data_item">emmagneishun@email.com</td>
                        <td class="A07-Data_item">09999999999</td>
                    </tr>
                </table>
            </div>

    </div>
</section>
</body>
</html>