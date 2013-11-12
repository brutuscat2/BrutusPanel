<?PHP
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}
?>
<html>
    <body>
        Login Successful
    </body>
</html>

