<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookingform</title>

</head>

<style>
     
 /* @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap'); */
*{
    margin: 0;
    padding: 0;
}

.main_bg{
    background-image: url(wp2665743.jpg);
    background-repeat: no-repeat;
    
    background-size: 150%;
    max-width: 1280px;
    height: 800px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}
.form{
    width: 650px;
}

.form-text{
    text-align: center;
    margin: 0 0 40px 0;
}
.form-text h1 span img{
    margin: 0 10px;

}
.form-text h1{
    color: white;
    /* font-family: 'Akaya Telivigala'; */
    font-size: 40px;
    margin-bottom: 20px;
}
.form-text p{
    color: white;
    /* font-family: 'Akaya Telivigala'; */
    font-size: large;
}

.main-form div{
    margin: 10px 10px;
    width: 300px;
    display: inline-block;
}
.main-form div input {
    width: 100%;
    /* font-family: 'Akaya Telivigala'; */
    background: none;
    border: 1px solid white;
    font-size: 20px;
    color: white;
    outline: none;
    padding: 6px 0 3px 10px;
    margin-top: 20px;
    border-radius: 10px;
}
.main-form div select{
    width: 104%;
    /* font-family: 'Akaya Telivigala'; */
    background: none;
    border: 1px solid white;
    font-size: 20px;
    border-radius: 20px;
    color: gray;
    outline: none;
    padding: 3px 0 3px 10px;
    margin-top: 10px;
}
.main-form div span{
    width: 100%;
    /* font-family: 'Akaya Telivigala'; */
    color: white;
    font-size: 25px;
}

#submit{
    width: 100%;
    text-align: center;
}
#submit input{
    width: 100%;
    /* font-family: 'Akaya Telivigala'; */
    background: none;
    border: 1px solid white;
    font-size: 20px;
    color: white;
    outline: none;
    padding: 6px 0 3px 10px;
    margin-top: 20px;
    border-radius: 10px;
    width: 200px;
    background-color: rgb(105, 91, 91);
    color: white;
    transition: all .3s;
}
#submit input:hover{
    /* font-family: 'Akaya Telivigala'; */
    width: 200px;
    background-color: black;
    color: white;
}
#submit input:active{
    font-size: 19px;
    background-color: rgb(96, 83, 75) ;
    color: #fff;
}
.alert{
  position: absolute;
  top:1%;
  left: 10%;
  background-color: #29d9d5;
  color: #fff;
  display: inline-block;
  width: 300px;
  padding: 5px10px;
  /* border: 2px solid ; */
}

@media screen and (max-width:710px) {
    .main-form{
        text-align: center;
    }
}
@media screen and (max-width:710px) {
    .main-bg{
        background-size: 150%;
    max-width: 1280px;
    height: 800px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    }
}

/* .button{
    width:200px;
} */
.butt {
    position: absolute;
    top: 90%;
    left: 43%;
    display: inline-block;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>

<body class="main_bg">

    <div class="form">
          <?php
   if(isset($_SESSION['status'])){
        ?> 
        <div class="alert">
       <?php echo $_SESSION['status'];?>
        </div>
        <?php
        unset ($_SESSION['status']);
    } 

   ?>
        <div class="form-text">
            <h1>Book Now</h1>
            <p>Online  booking comes with great advantages for travellers.</p>
        </div>
        <div class="main-form">
            <form action="connecting1.php" method="post" onsubmit="required()">
                
                <div>
                    <span>Full name</span>
                    <input type="text" name="fullname" id="fullname" placeholder="Write your name here..."required >
                </div>
                <div>
                    <span>email ID</span>
                    <input type="email" name="email" id="email" placeholder="Write your email here..."required> 
                </div>

                <div>
                
                    <span>Your Tour </span>
                    <select name="place" id="place">
                        <option value="Brazil"><--Brazil---></option>
                    </select>
                </div>
               
                <div>
                    <span>locality ?</span>
                    <input type="text" name="locality" id="locality" placeholder="your address"required>
                </div>
                <div>
                    <span>date ?</span>
                    <input type="date" name="dates" id="dates"required>
                </div>
                <div>
                    <span>Your phone number ?</span>
                    <input type="number" name="number" id="number" placeholder="Write your number here..." required>
                </div>
                <div>
                    <span>Aadhar card number</span>
                    <input type="number" name="aadhar" id="aadhar" placeholder="Write your number here..." required>
                </div>
                <div>
                    <span>Number of person ?</span>
                    <input type="number" name="person" id="person" placeholder="Write your number here..." required>
                
                </div>
     
                <div id="submit">
                    <!-- <button value="SUBMIT" id="submit" onclick="squbmit()">SUBMIT</button> -->
                    <!-- <input type="submit" name="submit" value="Submit" /> -->
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
                        
        </div>
    </div>
    <!-- <form class="button"><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Kak2KNFNMbwdi1" async> </script> </form>  -->

</body>

</html>