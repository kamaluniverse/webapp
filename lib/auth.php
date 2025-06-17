<?php
$db_servername = "localhost";
$db_username = "shadow";
$db_password = "iamshadow";
$db_name = "lahtp";
$db_conn = null;
$salt = "ninjawar";
function get_db_connection(){
   global $db_servername ;
   global $db_username;
   global $db_password;
    global $db_name;
  global $db_conn;
    if($db_conn != null){
        return $db_conn;
    }else{
        // Create connection
$db_conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

// Check connection
if (!$db_conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    return $db_conn;
}
}
}

function hash_password($password){
    global $salt;
    return md5($salt.$password);
}

function sign_up($username, $password){
        $db_connn = get_db_connection();
        $hash_password = hash_password($password);
        $otp = rand(000000, 999999);
        $query = "INSERT INTO `lahtp`.`auth` (`username`, `password`, `otp`) VALUES ('$username', '$hash_password', '$otp');";
        if(mysqli_query($db_connn, $query)){
            return 1;
        }else{
            return 0;
        }
    }