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
    background-image:url('des-1.jpg');
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
            <h3>Alaska</h3>
            <p>Last Edit : 4/10/2022</p>
    
            <p>The experience aboard one of our Alaska cruises is tailored to you. The all-inclusive experience leads to the relaxation knowing that you have endless opportunities to participate in adventure without worrying about bringing a wallet or hurting your vacation budget.

With flexible itineraries and adventures abound, your chances for exploration are endless. We know that Alaska is often a bucket list trip, and we want to make it one step better than your expectation. Your dream trip will be that and more with our crew aboard one of our ships.

The benefit of a small ship cruise means we can get you into exclusive bays and coves that large ships simply do not have access to. Get away from the crowds and see the Alaska landscape as if you were the only one around.

Relax on deck and fish for that night’s dinner, or help reel in the crab pots to live out your Deadliest Catch fantasies. Get off the boat and into one of our kayaks to experience the point of view of the abundant sea life and bring sea level to eye level.

Excursions are all included with your trip. Head to the beach and take a hike, beach comb, or discover the amazing and miniature worlds of tidal pools. Kayak when you want, relax with wine and a book when you want (no need to wait for dinner to get that complimentary beverage). This is your vacation – enjoy it at your leisure!</p>

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
            
        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Kak2KNFNMbwdi1" async> </script> </form>
                
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