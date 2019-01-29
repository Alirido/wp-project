<?php /* Template Name: loginPage */ 

global $wpdb;

if (isset($_COOKIE['admin'])) {
    header("location: ")
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

        <form name="regis" method="POST" onsubmit="return validateRegister()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            <table>
                <tr>
                    <td><label for="uname">Username</label></td>
                    <td><input type="text" name="uname" id="uname"></td>
                </tr>
                <tr>
                    <td><label for="pass">Password</label></td>
                    <td><input type="Password" name="pass" id="pass"></td>
                </tr>
            </table>

            <br>

            <input type="submit" name="register" value="LOGIN">
        
        </form>
</body>
</html>