<?php


//require Mysql connection
require('./Database/DBController.php');


//require Product Class
require('./Database/Product.php');

//DBController object
$db = new DBController();

//Product Object
$product = new Product($db);


