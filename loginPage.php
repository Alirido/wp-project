<?php /* Template Name: loginPage */ ?>

<!DOCTYPE html>
<html>
<head>

	<title>Log In</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/login.css" >

</head>
<body>

	 <div class="log_reg">

        <h1>LOG IN</h1>

        <form name="regis" method="POST" onsubmit="return validateRegister()" action="backend/_register.php">
            
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

            <br><br>

            <input type="submit" name="register" value="REGISTER">
        
        </form>
</body>
</html>