<html>
<body>
    
<?php

    require('/twilio-php/Services/Twilio.php');

$timer = 0;
   
if( $_SERVER['REQUEST_METHOD']== 'POST'){

$message = $_POST['message'];


$http = new Services_Twilio_TinyHttp('https://api.twilio.com', array('curlopts' => array(
    CURLOPT_SSL_VERIFYPEER => false
)));

$account_sid = 'ACfa5a532073c835aeb8b602a8cefa2076'; 
$auth_token = '0df022b50f4e256a6df3bf0eaf314abc'; 
$client = new Services_Twilio($account_sid, $auth_token,'3.12.8',$http); 


 

try{
$client->account->messages->sendMessage(
	 "+15168304525", 
     "+13478379966", 
	 $message); 
    
    echo "Message is sent </br>";
    
    echo "You will be redirected to the main page shortly";


    }
    
     

    catch(Exception $e){
        echo 'cauth exception'.$e->getMessage();
    }

    header("refresh:5 ,url=http://localhost:81/website");
}
?>



</body>
</html>