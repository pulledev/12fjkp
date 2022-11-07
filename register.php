<?php
//class autoloader & <head>
require __DIR__ . "/init.php";

Head::printHead("Registrieren -12fjkp", "style/register.css");

?>
<body>
<h1>Registrieren</h1>
<form action="#" method="post">
    <input type="text" placeholder="username" name="usr" required>
    <input type="text" placeholder="ts3_id" name="ts3" required>
    <input type="text" placeholder="discord_name" name="discord" required>
    <input type="password" placeholder="password" name="password" required>
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST["submit"])){
    //Data will be convertet into normal variables
    $username = $_POST["usr"];
    $ts3 = $_POST["ts3"];
    $dc = $_POST["discord"];
    $password_raw = $_POST["password"];
    //password is now hashed
    $password = AdminPanelServices::getInstance()->getTools()->hashString($password_raw);
    //data will be stored in database
    AdminPanelServices::getInstance()->getMariadb()->registerMember($username,$ts3, $dc,$password);
}
?>
</body>
