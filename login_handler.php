<?php 

global $wpdb;

// if (isset($_COOKIE['admin'])) {
//     header("location: ")
// }
    if (isset($_POST['uname']) && isset($_POST['pass'])) {
        print_r($_POST); die;
        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $result = $wpdb->get_results("SELECT id FROM admin_rapot WHERE username='$uname' AND password='$pass'");

        if ($row = mysqll_fetch_assoc($result)) {
            header("location: http://archaea.sith.itb.ac.id/admin-page/")
        } else {
            echo "<script>alert('Wrong Username or Password');</script>";
            echo "<noscript>Wrong Username or Password</noscript>";
        }

    } 
?>