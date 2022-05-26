<!DOCTYPE html>
<html>
<head>
    <!-- <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <title>Page Title</title>
    <!-- <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/brython@3.8.10/brython.min.js"> </script> 
    <script src="https://cdn.jsdelivr.net/npm/brython@3.8.10/brython_stdlib.js"> </script> -->
    <?php
        echo shell_exec("fuelpricedata.py");
    ?>
</head>
<body>
    
</body>
</html>