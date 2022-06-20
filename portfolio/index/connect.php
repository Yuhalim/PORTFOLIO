<?php
$conn = mysqli_connect('localhost', 'root', '', 'portfolio_db');
if($conn===false){
    die("error" .mysqli_connect_error());

}