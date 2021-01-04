<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takoya Food</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
<form id="form" action="action.php" method="GET">
<section id="home">
        <h1 class="h-primary">Welcome to Takoya Food</h1>
        <p>We Try To provide You Best Food. </p>
        <p>When you Hungry Just Click . </p>
        <a class="btn" href="javascript:void(0)" onclick="click_here()">Hungry</a>
        <script>
            function click_here(){
                jQuery.ajax({
                    url:'get.php',
                    type: 'post',
                    success :function(result){
                        alert(result);
                    }
                })


            }
        </script>

    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="../img/1.png" alt="">
                <h2 class="h-secondary center">Food Catering</h2>
                <p class="center">This is dummy Text .</p>
            </div>
            <div class="box">
                <img src="../img/2.jpg" alt="">
                <h2 class="h-secondary center">Table booking</h2>
                <p class="center">This is dummy Text.</p>
            </div>
            <div class="box">
                <img src="../img/3.png" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">This is dummy Text.</p>
            </div>
        </div>
    </section>
</form>
</body>
</html>
<?php
include 'footer.php';
?>