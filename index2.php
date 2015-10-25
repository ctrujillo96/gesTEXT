<html>
<body>

<?php

$FromNumber = "+16618789934"; // number that will send
$ToNumber = "+16614354567"; // number that will recieve 
$Msg = "Are you ok?";  

    require 'twilio-php/Services/Twilio.php';

    $AccountSid = "ACe167dbf897aa6db7ccfd739adef4ebcb";
    $AuthToken = "1d0e07a5866263b49d9736f8050a64f7";

    $client = new Services_Twilio($AccountSid, $AuthToken);

    $bSuccess = $client->account->sms_messages->create(
        
        $FromNumber, 	
        $ToNumber,           
        $Msg			
    );


    echo "Sent message to $ToNumber";
?>
</body>
</html>