<?php
$input_username = $_POST['input_username'];
$input_pass = $_POST['input_pass'];
$input_Token = $_POST['input_Token'];
        
   
            if ($input_Token == $_COOKIE["cookie_token"])
			{                        
				echo "Token valid <br>";
					if($input_username == "admin" && $input_pass == "admin123")
					{   
						echo "Login Successfully!";
					}
					else
					{
						echo "Invalid Credentials. Try again!";
					}
            }  
			else 
			{
				echo "Invalid Token";
			}
?>