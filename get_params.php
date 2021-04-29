<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"  href="css/style5.css">
    </head>
    <body>
         <section class="center">
         <?php
                $un=$_GET["userName"];
                $ps=$_GET["password"];
                $num =(int)$ps;
                $sum=0;
                $rem=0; 
                for ($i =0; $i<=strlen($num);$i++){                                   
                $rem=$num%10; 
                $sum = $sum + $rem; 
                $num=$num/10; 
                } 
                $dig=(string)$ps;
        
                if($dig[0]==0){
                    echo"<h1> Thanks for NOTHING!</h1>".$un."<h2> You didnt donate money for this cute panda!</h2>";
                    echo "<h4>If your password starts with zero you cannot donate.</h4>";
                }

                else{
                    //The amount of money will be calaculated: the sum of digits in the password+ the lenth of your user name
                $sum=$sum+strlen($un); 
               
                echo "<h1> Thank you ".$un." !For donating and makes the world a better place for pandas.<br>You are AWESOME!</h1>";
                echo"<h2> You have donated generously ".$sum."$!<br><h2>
                <h4>Your donation is calculated by adding the number of digits in your password and number of letters in your name</h4>";
                }
                ?>
        </section> 
          <div class="head">
          </div>
          <div class="ear1"></div>
          <div class="ear2"></div>
          <div class="ear3"></div>
          <div class="ear4"></div>
          <div class="eye1"></div>
          <div class="eye2"></div>
          <div class="eye3"></div>
          <div class="eye4"></div>
          <div class="eye5"></div>
          <div class="eye6"></div>
          <div class="eye7"></div>
          <div class="eye8"></div>
          <div class="nose1"></div>
          <div class="nose2"></div>
          <div class="mouth1"    ></div>
          <div class="mouth2"></div>
          <div class="mouth3"></div>
          <div class="hand1"></div>
          <div class="hand2"></div>
          <div class="hand3"></div>
          <div class="hand4"></div>
          <div class="hand5"></div>
          <div class="hand6"></div>
          <div class="leg1"></div>
          <div class="leg2"></div>
          <div class="leg3"></div>
          <div class="leg4"></div>
          <div class="leg5"></div>
          <div class="leg6"></div>
          <div class="leg7"></div>
          <div class="leg8"></div>
          <div class="leg9"></div>
          <div class="leg10"></div>
          <div class="body1"></div>
          <div class="body2"></div>
          <div class="heart1"></div>
          <div class="heart2"></div>
          <div class="heart3"></div>
             
    </body>
</html>

