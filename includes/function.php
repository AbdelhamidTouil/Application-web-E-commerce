<?php
ob_start();
session_start();
require('config.php');
/******************/
function redirect($location)
{
    header("location:".$location);
}
/******************/
function query($sql)
{
    global $connexion;
    return mysqli_query($connexion,$sql);
}

/*function escape_string()
{
    global $connexion;
    return mysqli_real_escape_string($connexion,$string);

}
*/
function fetch_array($result)
{
    return mysqli_fetch_array($result);
}


function logout()
{
    $_SESSION['logged'] = false;
    session_destroy();
    redirect('index.php');
}

function empty_cart($id,$price)
{

    unset($_SESSION['products_'.$id]);
    $_SESSION['count'] -= 1;
    $_SESSION['totaux'] -= $price;
    redirect('cart.php');

}





?>