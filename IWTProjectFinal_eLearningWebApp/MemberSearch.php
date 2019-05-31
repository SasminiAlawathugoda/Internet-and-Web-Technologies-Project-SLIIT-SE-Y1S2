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
    <title>Search</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="header">
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

<h2>Searched Content</h2>
<table border="0" cellspacing="6" cellpadding="6">
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Description</th>
    </tr>

    <?php
    $search = $_POST['searchtxt'];
    $selectString = "SELECT * FROM Store WHERE MatName like '%$search%'";
    $query = mysql_query($selectString);
    while ($row = mysql_fetch_array($query))
    {
        ?>
        <tr>
            <td><?php echo $row['MatName']; ?></td>
            <td><?php echo $row['Category']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Description']; ?></td>


        <?php
        echo "<td>"."<a class='manMat' href = MemberCartDB.php?".$row['MaterialID'];
        echo "><input type='button' value='Add to Cart'></a></td></tr>";
    }
    ?>
</table>

<footer>
    <p>You are Logged in as Member</p>
</footer>
</body>
</html>