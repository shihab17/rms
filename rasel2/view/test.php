<!DOCTYPE html>
<html>
<style>
    body {
  
        color: yellow;
        background: url('luck.jpg') no-repeat center center/cover;
        

    }
    </style>
    
<body>

<h2>Its Just A rendom Luck. Use Your Coupon As soon As possible  .</h2>

<p id="demo"></p>

<script>
var myJSON = '{"Perchantage":"10% OFF  ", "coupon": "Coupon Is Takoya21"  , "Ttime":"Max use time 1 hour"}';
var myObj = JSON.parse(myJSON);
document.getElementById("demo").innerHTML = myObj.Perchantage + myObj.coupon  ;


</script>


</body>
</html>