<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <!-- The navigation menu -->
<div class="navbar">
    <a class="active" href="#">Home</a>
    <a href="#">Search</a>
    <a href="#">Contact</a>
    <a href="#">Login</a>
  </div>
  <?php
        $time = mktime(12, 10, 50, 10, 30, 2022);
        echo "Nastaveny cas: " . date("d.m.Y", $time);
    ?>
</body>
</html>