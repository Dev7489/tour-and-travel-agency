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
    background-image: url('des-7.jpg');
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
            <h3>Thailand</h3>
            <p>Last Edit : 4/10/2022</p>

            <p>Tourism is an economic contributor to the Kingdom of Thailand. Estimates of tourism revenue directly contributing to the GDP of 12 trillion baht range from one trillion baht (2013) 2.53 trillion baht (2016), the equivalent of 9% to 17.7% of GDP.[1][2] When including indirect travel and tourism receipts, the 2014 total is estimated to be the equivalent of 19.3% (2.3 trillion baht) of Thailand's GDP.[3]: 1  The actual contribution of tourism to GDP is lower than these percentages because GDP is measured in value added not revenue. The valued added of the Thailand's tourism industry is not known (value added is revenue less purchases of inputs). According to the secretary-general of the Office of the National Economic and Social Development Council in 2019, the government projects that the tourism sector will account for 30% of GDP by 2030, up from 20% in 2019.[4]

Tourism worldwide in 2017 accounted for 10.4% of global GDP and 313 million jobs, or 9.9% of total employment.[5]: 1  Most governments view tourism as an easy moneymaker and a shortcut to economic development. Tourism success is measured by the number of visitors.[6]

The Tourism Authority of Thailand (TAT), a state enterprise under the Ministry of Tourism and Sports, uses the slogan "Amazing Thailand" to promote Thailand internationally.[7] In 2015, this was supplemented by a "Discover Thainess" campaign.[8]</p>
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
        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Kbv47gRAVMhsG0" async> </script> </form>
                
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