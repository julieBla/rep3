<?php
$page="home";
if (isset ($_GET['p'])){
    $page=$_GET['p']; 
}

if ($page === 'home'){
    require 'home.php'; 
}