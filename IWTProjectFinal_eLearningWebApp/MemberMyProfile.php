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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
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

<h2>Your Profile</h2>
<table border="0" cellspacing="6" cellpadding="6">
    <tr>



    </tr>

    <?php
    $username =  $_SESSION['userNameTemp'];
    $selectString = "SELECT * FROM User WHERE Username = '$username'";
    $query = mysql_query($selectString);
    while ($row = mysql_fetch_array($query)) {

        ?>
        <tr>
            <td><b>User ID</b></td><td><?php echo $row['User_ID']; ?></td></tr>
        <tr><td><b>Username</b></td><td><?php echo $row['Username']; ?></td></tr>
        <tr><td><b>Password</b></td><td><?php echo $row['Email']; ?></td></tr>

        <?php
    }
    ?>
</table>

<footer>
    You are Logged in as Member
</footer>
</body>
</html>


