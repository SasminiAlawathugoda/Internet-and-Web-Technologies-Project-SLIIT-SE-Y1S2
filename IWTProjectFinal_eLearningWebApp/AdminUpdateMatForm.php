<?php
    $matID = $_SERVER['QUERY_STRING'];
    session_start();
    $_SESSION['materialIDUp'] = $matID;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Material</title>
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


    <table class="rightButtons">
        <tr>
            <td><a href="LogoutDB.php" style="text-decoration: none"><input type="button" value="Log Out"></a></td>
        </tr>

        <tr>
            <td><input type="text" placeholder="Search"></td>
        </tr>
    </table>

    <div class="headLine">
E-Learning Academy
</div>

    <nav>
        <a href="AdminHomepage.html" class="a">Home</a>
        <a href="AdminManageMaterials.php" class="a">Manage Materials</a>
        <a href="AdminViewUsers.php" class="a">View Users</a>
        <a href="AdminActivityLog.php" class="a">Activity Log</a>
    </nav>

</div>

<form name="UpdateForm" method="post" action="AdminUpdateMatDB.php">
    <table>
        <tr>
            <td>Name</td><td><input type="text" name="FMatname"></td>
        </tr>
        <tr>
            <td>Description</td><td><input type="text" name="FMatDes"></td>
        </tr>

        <tr>
            <td>Price</td><td><input type="text" name="Fprice"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <input type="radio" name="FCategory" value="Maths"> Maths
                <input type="radio" name="FCategory" value="Science"> Science
                <input type="radio" name="FCategory" value="English"> English
            </td>
        </tr>

        <tr>
            <td><input type="submit" value="Update"></td>
            <td><input type="reset" value="Reset"></td>
        </tr>
    </table>
</form>

<?php
    mysql_close();
    ?>

<footer>
You are Logged in as Admin
</footer>
</body>
</html>