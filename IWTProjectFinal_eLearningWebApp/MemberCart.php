<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "sliit";
$database = "IWTProject";


if(!mysql_connect($host, $user, $pass,$database) || !mysql_select_db($database))
{
    die(mysql_error());
}

$uname = $_SESSION['userNameTemp'];
$tempCart = "CART$uname";
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

<h2>Materials in the Store</h2>
<table border="0" cellspacing="6" cellpadding="6">
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Description</th>
    </tr>

    <?php
    $total = 0;
    $selectString = "SELECT * FROM $tempCart ";
    $query = mysql_query($selectString);
    while ($row = mysql_fetch_array($query))
    {
    ?>
        <tr>
            <td><?php echo $row['MatName']; ?></td>
            <td><?php echo $row['Category'];?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <?php
            echo "<td>"."<a class='manMat' href = MemberDelCartDB.php?".$row['MaterialID'];
            echo "><input type='button' value='Remove'></a></td>";?>
        </tr>

        <?php
        $price = $row['Price'];
        $total += $price;
    }
    ?>

    <tr>
        <td><a href="MemberCheckOut.php" style="text-decoration: none"><input type="button" value="Proceed to CheckOut"></a></td>
    </tr>

    <?php
    $_SESSION['cartTot'] = $total;
    $rows = mysql_num_rows($query);
    $_SESSION['rows'] = $rows;
    ?>
</table>



<footer>
    You are Logged in as Member
</footer>
</body>
</html>


