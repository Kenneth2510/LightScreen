<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ticket Summary</title>
<?php include(dirname(__FILE__) . '/layouts/header.php') ?>



    <!-- -----------------Ticket Summary------------------- -->
    <section name="U05-TicketSummary" class="U05-TicketSummary">
        <div class="U00-title">
            <h1>Ticket Summary</h1>
        </div>

        <div class="U05-Container">
            
            <div class="U05-MovieDetails">
                <h1>Interstellar</h1>
                <ul>
                    <li>January 03, 2022</li>
                    <li>2:00 PM - 5:00 PM</li>
                    <li>LightScreen 1</li>
                </ul>
            </div>

            <div class="U05-Ticket">
                <table>
                    <tr>
                        <td class="U05-Ticket_Data">General Admission</td>
                        <td class="U05-Ticket_Data">
                            <h3>P300</h3> <br>
                            <p>P100 Handling Charge</p>
                        </td>
                        <td class="U05-Ticket_Data">Adult</td>
                        <td class="U05-Ticket_Data">Seat Number : C6</td>
                        <td class="U05-Ticket_Data"><button type="button" class="U05-btnSeatMap">Seat Map</button></td>
                        <td class="U05-Ticket_Data">
                            <h3>P300</h3> <br>
                            <p>+P100</p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="flexbox sb">
                <div class="U05-InviDiv"></div>
                <div class="U05-PriceSummary">
                    <div class="U05-TicketPrice">
                        <h4>Ticket Price</h4>
                        <h3>P300</h3>
                    </div>
    
                    <div class="U05-HandlingAmountPrice">
                        <h4>Handling Amount</h4>
                        <h3>P100</h3>
                    </div>
    
                    <div class="U05-TotalPrice">
                        <h4>Total</h4>
                        <h3>P400</h3>
                    </div>
                </div>
            </div>

            <div class="U05-PaymentMethods">
                <h3>Choose Payment Methods:</h3>
                <div class="flexbox">
                    <div class="U05-Payment">VISA</div>
                    <div class="U05-Payment">GCASH</div>
                    <div class="U05-Payment">PAYMAYA</div>
                    <div class="U05-Payment">GRABPAY</div>
                </div>
            </div>

            <div class="U05-Agree_Consent">
                <h3>Before proceesing to payment, please read the full <a href="#">Terms & Condtions</a> and <a href="#">Data Privacy Policy.</a></h3>
                <div class="U05-Terms_Conditions">
                    <input type="checkbox" class="U05-checkTerms_Conditions">
                    <p>I agree to the <a href="#">Terms & Condtions</a> and <a href="#">Data Privacy Policy.</a></p>
                </div>
                <div class="U05-Consent">
                    <input type="checkbox" class="U05-checkConsent">
                    <p>I consent to receive information about LightScreen, products and services, promotional offers, contests, newsletters or 
                        other activities that may be of interest to me. I understand that SM Lifestyle, Inc. will respect my wishes if I elect not to 
                        receive future correspondence about these activities. With each communication I receive, I will have the opportunity to
                        indicate if I do not want to receive future communications.</p>
                </div>
            </div>

            <div class="flexbox sb">
                <div class="U05-InviDiv"></div>
                <div class="U05-Buttons">
                    <button type="button" class="U05-btnReturn">Return</button>
                    <input type="submit" class="U05-btnProceed" value="Proceed">
                </div>
            </div>
        </div>
    </section>

    <?php include(dirname(__FILE__) . '/layouts/footer.php') ?>

