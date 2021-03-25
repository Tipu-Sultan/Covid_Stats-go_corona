<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="../link/style.css" />
 <title>User_Profile</title>
</head>
<body>

<div id="center">
<div id="center-set"><P style="text-align: center; background-color: green; color: #fff;">Data provided by Tipu-Sultan </P>
<div id="signup">
<div id="signup-st">
<div align="center">
<?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Login Here</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
}
?>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password:</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Login" id="st-btn"/></div>
</form>

</div>
</div>
</div>
</div>
</body>
</html>
