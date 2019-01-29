<?php /* Template Name: loginPage */ 

session_start();

if (isset($_GET['err'])) {
    $e = $_GET['err'];
    if ($e == 1) {
        echo "<script>alert('Wrong Username or Password');</script>";
        echo "<noscript>Wrong Username or Password</noscript>";
    } elseif ($e == 2) {
        echo "<script>alert('You are not allowed to be there.');</script>";
    } elseif ($e == 0) {
        session_destroy();
    }
}

if (isset($_SESSION['uname'])) {
    header("location: http://archaea.sith.itb.ac.id/admin-page/");
}
?>

<!DOCTYPE html>
<html>
<head>

	<title>Log In</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/assets/login.css" >

</head>
<body>

	 <div class="log_reg">

        <h1>LOG IN</h1>

        <form method="POST">
            
            <table>
                <tr>
                    <td><label for="uname">Username</label></td>
                    <td><input type="text" name="uname" id="uname"></td>
                </tr>
                <tr>
                    <td><label for="pass">Password</label></td>
                    <td><input type="password" name="pass" id="pass"></td>
                </tr>
            </table>

            <br>

            <input type="submit" name="login" value="LOGIN">
        
        </form>
</body>
</html>