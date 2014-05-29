<div class="row">
    	<div class="span9">
        	<?php
$action=$_REQUEST['action'];
if ($action=="")    
    {
    ?>

    <?php
    } 
else                
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"http://www.ohjonathan.com/#contact\">the 

form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Contact Form Submission";
        mail("ohjon93@uw.edu", $subject, $message, $from);
        echo "Email sent! Please allow up to 48 hours for a reply. I will do my best to follow up within that time. Thank you! <a href=\"http://www.ohjonathan.com/#contact\">Back to Website</a>";
        }
    }  
?>
         