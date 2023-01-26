<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Tickets</title>
<?php include(dirname(__FILE__) . '/layouts/header.php') ?>

<!-- --------------sidebar----------------- -->
<section name="U08-Sidebar" class="U08-Sidebar">
    <button type="button" class="U08-sidebar_item active"><div class="selected on"></div><a href="#">My Tickets</a></button>
    <button type="button" class="U08-sidebar_item"><div class="selected"></div><a href="#">Purchase History</a></button>
    <button type="button" class="U08-sidebar_item"><div class="selected"></div><a href="#">Account Information</a></button>
</section>

<!-- ---------------user tickets---------------- -->
<section name="U08-UserTickets" class="U08-UserTickets">
    <div class="U07-title">
        <h1>My Tickets</h1>
    </div>

    <div class="U08-Container">
        <div class="U08-Table">
            <div class="U08-Category">
                <table>
                    <tr>
                        <th class="U08-Category_item">Movie</th>
                        <th class="U08-Category_item">Tickets</th>
                        <th class="U08-Category_item">Date Purchased</th>
                        <th class="U08-Category_item">Schedule</th>
                        <th class="U08-Category_item">Movie Hall</th>
                        <th class="U08-Category_item">Status</th>
                    </tr>
                </table>
            </div>

            <div class="U08-Data">
                <table>
                    <tr>
                        <td class="U08-Data_item">Avatar 2</td>
                        <td class="U08-Data_item"><ul>
                            <li>Adult: 1x</li>
                            <li>Child: 2px</li>
                            <li>Senior: 0x</li>
                        </ul></td>
                        <td class="U08-Data_item">12/05/2022 <br> 11:35 PM</td>
                        <td class="U08-Data_item">12/24/2022 <br> 2:00 PM - 5:00 PM</td>
                        <td class="U08-Data_item">LightScreen 1</td>
                        <td class="U08-Data_item">
                            <div class="U08-Status">
                                <p>pending</p>
                                <button class="U08-Status_Confirm">view voucher</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="U08-Data">
                <table>
                    <tr>
                        <td class="U08-Data_item">Avatar 2</td>
                        <td class="U08-Data_item"><ul>
                            <li>Adult: 1x</li>
                            <li>Child: 2px</li>
                            <li>Senior: 0x</li>
                        </ul></td>
                        <td class="U08-Data_item">12/05/2022 <br> 11:35 PM</td>
                        <td class="U08-Data_item">12/24/2022 <br> 2:00 PM - 5:00 PM</td>
                        <td class="U08-Data_item">LightScreen 1</td>
                        <td class="U08-Data_item">
                            <div class="U08-Status">
                                <p>pending</p>
                                <button class="U08-Status_Confirm">view voucher</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
</section>
    