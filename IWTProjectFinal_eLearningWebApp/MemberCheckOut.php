<?php
session_start();
$total = $_SESSION['cartTot'];
$rows = $_SESSION['rows'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Cart</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="header" style="padding-bottom: 1%">
    <div class="headerLeft">
        <table>
            <tr>
                <td><img src="Logo.png "></td>
            </tr>
        </table>
    </div>

    <form name="Right Panel" method="post" action="MemberSearch.php">
        <table class="rightButtons">
            <tr>
                <td><a href="LogoutDB.php" style="text-decoration: none"><input type="button" value="Log Out"></a></td>
            </tr>

            <tr>
                <td><input type="text" placeholder="Search" name="searchtxt"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Search"></td>
            </tr>
        </table>
    </form>

    <div class="headLine">
        E-Learning Academy
    </div>

    <nav>
        <a href="MemberHomepagePhp.php" class="a">Home</a>
        <a href="MemberStore.php" class="a">Store</a>
        <a href="MemberCart.php" class="a">My Cart</a>
        <a href="MemberMyProfile.php" class="a">My Profile</a>
    </nav>
</div>

<h3>Bill Summary</h3>

<table style="border-bottom: black solid; margin-bottom: 1%">
    <tr>
        <td><B>Total Items &nbsp;&nbsp;&nbsp;: </B><?php echo $rows?></td>
    </tr>
    <tr>
        <td><B>Total Amount :</B> Rs.<?php echo $total?></td>
    </tr>
</table>

<table cellpadding="8">
    <form name="Checkout" method="post" action="MemberCheckoutValidation.php">
        <tr>
            <td>Choose Card Type</td>
            <td><input type="radio" name="CardType" value="CC"> Credit Card
                <input type="radio" name="CardType" value="DC"> Debit Card
            </td>
        </tr>
        <tr>
            <td>Enter PIN Number</td>
            <td><input type="text" name="PINNo" placeholder="1234"></td>
        </tr>

        <tr>
            <td><input type="submit" value="Pay"></td>
            <td><input type="reset" value="Reset"></td>
        </tr>
    </form>
</table>

