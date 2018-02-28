<?php
$message="wht a wonderrfull evning";

// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://api.cognitive.microsoft.com/bing/v7.0/spellcheck/');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Ocp-Apim-Subscription-Key' => '48c9010e5fff4d75a1c8f411c0af6b6e',
);

$request->setHeader($headers);
$parameters = array(
    // Request parameters
    'mode' => 'spell',
    'mkt' => 'en-us',
);
$url->setQueryVariables($parameters);
$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody("Text=".$messageText);
try
{
    $response = $request->send();
    $input=json_decode (($response->getBody()),true);
 
   print_r($input);
   echo "<br><br>";
   //start finding tokens and suggestions
   foreach($input as $key_name => $key_value) {
        
         if($key_name=="flaggedTokens"){
                      foreach($key_value as $key_name2 => $key_value2) {
                        
                           echo $key_value2['token'];
                           foreach($key_value2 as $key_name3 => $key_value3) {          
                              if($key_name3=="suggestions"){       
                                    foreach($key_value3 as $key_name4 => $key_value4) {
                                        echo " ".$key_value4['suggestion']."<br>";
                                        $messageText =preg_replace('/\b'.$key_value2['token'].'\b/', $key_value4['suggestion'], $messageText);

                                    }
                               }

                          }
                      }


         }          
   }
 
    // echo $message; 
}
catch (HttpException $ex)
{
    echo $ex;
}

?>
</body>
</html>