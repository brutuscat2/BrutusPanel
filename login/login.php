
<?PHP
// Remember to chmod this file to 700.
// Edit this part
session_start();
ob_start();
$host       = "localhost";
$username   = "root";
$password   = "";
$db_name    = "brutuspanel_logindata";
// Do not edit beyond this point
$tbl_name   = "bp_userdata";

mysql_connect("$host", "$username", "$password") or die ("cannot connect"$
mysql_select_db("$db_name") or die ("cannot select DB");

username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string(md5($_POST['password']));
$username = stripslashes($username);
$password = stripslashes($password);

$sql = "SELECT * FROM $tbl_name WHERE username = '$username'
and password = '$password'";
$result = mysql_query($sql);

$count = mysql_num_rows($result);

if($count == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('location:redirect.php');
}
else {
    echo 'Wrong Username or Password';
}
ob_end_flush();
?>






