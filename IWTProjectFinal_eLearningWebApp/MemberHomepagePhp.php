<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Homepage</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="header" style="margin-bottom: 5%">
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
<?php
date_default_timezone_set('Asia/Colombo');
$date = date('H');
?>
    <h2 style="text-align: center">Welcome Back!</h2>
<?php
    if ($date < 12 )
    {
        ?>
        <h3 style="text-align: center">Good Morning!</h3>
<?php
    }
    else if ( $date = 12 ) {
        ?>
        <h3 style="text-align: center">Have a Nice Day!</h3>
        <?php
    }
    else
    {
        ?>
        <h3 style="text-align: center">Good Evening!</h3>
<?php
    }
?>

<footer style="margin-top: 5%">
    <p>You are Logged in as Member</p>
</footer>
</body>
</html>