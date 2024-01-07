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
    background-image: url('des-6.jpg');
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
            <h3>Maldive</h3>
            <p>Last Edit : 4/10/2022</p>
            <p>Tourism is the largest economic industry in the Maldives, as it plays an important role in earning foreign exchange revenues and employing 25,000 people in the tertiary sector of the country. The archipelago of the Maldives is the main source of attraction to many tourists visiting the island country.

The tourism industry is especially vulnerable to climate change: as one of the island nations expected to be most impacted by climate change, sea level rise and subsequent increased extreme weather, coastal flooding, and coral bleaching damage the natural attractions that bring many of the tourists to the country.</p>
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
        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Kbv33hyJPh4wkB" async> </script> </form>
                
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