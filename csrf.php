<?php
	if (!isset($_COOKIE["cookie_token"]))
		{     
			$token = md5(uniqid(rand(), TRUE));
			setcookie("cookie_token", $token, time() + 60 * 60 * 24);
			echo $token;  
		}
	else 
		{  
			echo $_COOKIE["cookie_token"];
		}
?>