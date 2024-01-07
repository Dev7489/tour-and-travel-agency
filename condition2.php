<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>term and condition</title>
    <!-- <link rel="stylesheet" href="css/style2.css"> -->
    <style>
        body{
    margin: 0;
    padding: 0;
    background-image: url('des-3.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    opacity: .7;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    scroll-behavior: smooth;
}
.term-box{
    max-width: 460px;
    border-radius: 10px;
    background-color: black;
    color: white;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding: 60px 30px;
}
.term-text{
    padding: 0 20px;
    height: 400px;
    overflow-y: auto;
    font-size: 15px;
    /* font-weight: 500; */
    color: white;
}
.term-text::-webkit-scrollbar{
    width: 2px;
    background: black;
}
.term-text::-webkit-scrollbar-thumb{
    background: #29d9d5;
}
.term-text h3{
    text-transform: uppercase;
}
.term-box h4{
    font-size: 12px;
    text-align: center;
}
.term-box h4 span{
    color: gray;
}
.button{
    display: flex;
    padding: 0 20px;
    justify-content: space-between;
}
.btn{
    height: 50px;
    width: calc(50% - 6px);
    border-radius: 6px;
    font-size: 19px;
}
.PaymentButton--light.svelte-ekc7fv.svelte-ekc7fv {
    color: #072654;
}
.PaymentButton.svelte-ekc7fv.svelte-ekc7fv {
   
    position: relative;
    display: inline-block;
    min-width: 180px  !important;
    height: 47px  !important;
    padding: 0;
    border-radius: 3px;
    text-align: center;
    font-style: italic;
    font-family: Muli,helvetica,sans-serif;
    font-display: swap;
    overflow: hidden;
    border: 1px solid transparent;
    outline: none;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
    text-decoration: none;
}
.red-btn{
    background-color: #29d9d5;
}
.btn:hover{
    border: green;
    cursor: pointer;
}

    </style>
</head>

<body>
    <div class="term-box">
        <div class="term-text">
            <h3>New york</h3>
            <p>Last Edit : 4/10/2022</p>

            <p>New York City received a ninth consecutive annual record of approximately 65.2 million tourists in 2018, counting not just overnight visitors but anyone visiting for the day from over 50 miles away, including commuters. Overall the city welcomed 37.9 million visitors who stayed overnight in 2018, of which 13.6 million were international.[2] Major destinations include the Empire State Building, Ellis Island, the Statue of Liberty on Liberty Island, Broadway theatre productions, Central Park, Times Square, Coney Island, the Financial District, museums, and sports stadiums. Other major visitor activities include luxury shopping along Fifth and Madison Avenues; entertainment events such as the Tribeca Film Festival; Randalls Island music festivals such as Governors Ball, Panorama and Electric Zoo; and free performances in Central Park at Summerstage and Delacorte Theater. Many New York City ethnic enclaves, such as Jackson Heights, Flushing, and Brighton Beach are major shopping destinations for first and second generation Americans.

New York City has over 28,000 acres (110 km2) of parkland and 14 linear miles (22 km) of public beaches.[3][4] Manhattan's Central Park, designed by Frederick Law Olmsted and Calvert Vaux, is the most visited city park in the United States.[5] Prospect Park in Brooklyn, also designed by Olmsted and Vaux, has a 90-acre (36 ha) meadow.[6] Flushing Meadows–Corona Park in Queens, the city's fourth-largest, was the setting for the 1939 World's Fair and 1964 World's Fair.</p>
            <h3>The Booking:</h3>
            <p>
                Your contract is with Pioneer Journeys Pvt. Ltd. A contract exists between us when we have confirmed you on our tour of your choice and we have received your signed booking form and deposits. All the relevant section must be correctly and fully completed. We can only accept booking form signed as this confirms that you and other people on the tour accept our booking terms and condition and are entering into the contract.</p>
                <h3>Deposit:</h3>
            <p>
                Upon completion of the signed booking form a deposit of 50% of the tour cost per person, be paid to the company.</p>

                <h3>Payments:</h3>
            <p>
                For the services contracted, 50% advance payment should be made to hold the booking on a confirmed basis and the balance amount can be paid at least 7 days prior to your date of departure from your country. We hold the right to decide upon the amount to be paid as an advance payment, based on the nature of services and the time left for the commencement of the services. Apart from the above in some cases like special train journeys, hotel or resort bookings during the peak season (X-Mas, New Year) full payment is required to be sent in advance</p>
        </div>
        <h4>agree to the <span>term and condition</span>I need the this Notice</h4>
        <div class="button">
        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KbuB438fAIqWzE" async> </script> </form>
                
            <!-- <button class="btn red-btn" onclick="fun()" >Accept</button> -->

            <button class="btn gray-btn"onclick="func()">Decline</button>

        </div>
    </div>
</body>
<script>
    // function fun()
    // {
    //     window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform.php";
    // }
    function func()
    {
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/index.php#book-form"
    }
</script>

</html>