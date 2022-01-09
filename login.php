<?php session_start(); /* Starts the session */
/* Check Login form submitted */
if(isset($_POST['Submit'])){
    
/* Define username and associated password array */
$logins = array('user1' => 'Password1','user2' => 'Password2');

/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$Username]) && $logins[$Username] == $Password){
    
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:esp-outputs.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */
$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    	<title>Log In</title>
      	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  		<meta name="robots" content="noindex" />
		<link rel="icon" href="" sizes="32x32" />
		<link rel="icon" href="" sizes="192x192" />
		<link rel="apple-touch-icon" href="" />
		<meta name="msapplication-TileImage" content="" />
		<link rel="shortcut icon" type="image/x-icon" href=""> 

<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


.bg-image {
  /* The image used */
  background-image: url("");
  

  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.box{
  width: 280px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: rgba(0,0,0,0.82);
  text-align: center;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 244px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}
.eye{
	position: absolute;
	color: white;
}
</style>

</head>
<body>
<div class="bg-image"></div>
<form class="box" action="" method="post">
  <h1>Login - Farm 1</h1>
      <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
      <?php } ?>
  <input type="text" name="Username" placeholder="Username">
  <input type="password" name="Password" placeholder="Password">
  <input type="submit" name="Submit" value="Login">
</form>
</body>
</html>
