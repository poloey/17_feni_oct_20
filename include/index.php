<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require 'header.php';
require 'navbar.php';
require 'body.php';
require 'footer.php';
$friends = ['tanim', 'hayder', 'mamun'];
for ($i = 0; $i < count($friends); $i++) {
    echo $friends[$i] . '<br>'  ;
}


?>
    
</body>
</html>