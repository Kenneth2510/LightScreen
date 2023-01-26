<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ticket Processing</title>
<?php include(dirname(__FILE__) . '/layouts/header.php') ?>


    <!-- -----------------Ticket Process------------------- -->
    <section name="U04-TicketProcess" class="U04-TicketProcess">
        <div class="U04-Container">

            <div class="U04-MovieDetails">
                <div class="U04-MoviePoster"></div>
                <div class="U04-MovieTextDetails">
                    <div class="U04-TextDetails">
                        <h1>Interstellar</h1>
                        <p>showing on <b>03 jan 2022 11:00 AM</b></p>
                        <p>Movie Hall - <b>LightScreen 1</b></p>
                    </div>
                    <div class="U04-MovieSynopsis">
                        <h3>Synopsis</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate auctor metus, sit amet tristique massa mollis at. 
                            Pellentesque metus mauris, malesuada at malesuada vel, rhoncus sit amet ex. Maecenas porttitor mollis pulvinar. 
                            Donec lobortis nisi at elit posuere, quis imperdiet nulla suscipit. Sed pharetra leo mattis risus volutpat porttitor. 
                            Phasellus non turpis dignissim, dignissim neque semper, finibus diam. Nam a odio pretium, interdum mi ornare, laoreet urna. 
                            Pellentesque id augue nec justo congue feugiat. Vivamus nec orci eget nisl tempus elementum. Sed sed elementum nisi, a vehicula sapien. 
                            Nullam massa est, varius eget lacinia quis, blandit sit amet ex.</p>
                    </div>
                    <div class="U04-BuyTicketDescription">
                        <h3>buy tickets</h3>
                        <p>Select the number and type of tickets you wish to buy. Please note seats are reserved on a best available basis.
                            You can buy a maximum of 5 tickets per transaction. All voucher tickets will require proof of identification when 
                            collecting tickets or having tickets checked by ushers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="U04-TicketingPanel">
                <div class="U04-TicketTable">
                    <table class="U04-Table">
                        <tr>
                            <th class="U04-TicketTable-Category">Tickets</th>
                            <th class="U04-TicketTable-Category">Quantity</th>
                            <th class="U04-TicketTable-Category">Total</th>
                        </tr>
                        <tr>
                            <td class="U04-TicketTable-Data">General Admission</td>
                            <td class="U04-TicketTable-Data">
                                <input type="number" class="U04-TicketNum" placeholder="00" min="0" max="100">
                            </td>
                            <td class="U04-TicketTable-Data">P100.00</td>
                        </tr>
                    </table>
                </div>
                <div class="U04-Next">
                    <button type="button" class="U04-btnNext">Next</button>
                </div>
                
            </div>

            <div class="U04-SeatSelection">
                <div class="U04-SeatCategories">
                    <h3>Select Seats</h3>
                    <div class="U04-Categories">        
                        <div class="U04-Seat-Available">
                            <div class="U04-Available available"></div>
                            <p>available</p>
                        </div>
                        <div class="U04-Seat-Selected">
                            <div class="U04-Selected selected"></div>
                            <p>selected</p>
                        </div>

                        <div class="U04-Seat-Unavailable">
                            <div class="U04-Unavailable unavailable"></div>
                            <p>unavailable</p>
                        </div>
                    </div>
                </div>

                <div class="U04-MovieHallMap">
                    <div class="center">
                        <div class="U04-Screen">screen</div>
                    </div>

                    <div class="flexbox">
                        <div class="U04-SeatRows">
                            <h3>A</h3>
                            <h3>B</h3>
                            <h3>C</h3> 
                            <h3>D</h3>
                            <h3>E</h3>
                            <h3>F</h3>
                            <h3>G</h3>
                            <h3>H</h3>
                        </div>

                        <div class="U04-Seats">
                            
                            <div class="U04-Seats-LeftSide">
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo selected"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo unavailable"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                            </div>
                            
                            <div class="U04-Seats-Center">
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>

                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>

                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>

                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>

                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
    
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
                            </div>


                            <div class="U04-Seats-RightSide">
                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>

                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>

                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>

                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>

                                <div class="U04-SeatColumns">
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                    <div class="U04-SeatNo"></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="U04-Proceed">
                    <button type="button" class="U04-btnProceed">Proceed</button>
                </div>
            </div>


        
        </div>
    </section>


    <?php include(dirname(__FILE__) . '/layouts/footer.php') ?>
