<?php
	// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
	require_once 'HTTP/Request2.php';
	    
	// $message="Manager James Muhati allegedly among 6 top IEBC officials sent on compulsory leave by the electoral commission!
	// Proposed line-up:
	// 1.Patrick Odame to replace Immaculate Kassait as Director Voter Registration and Electoral Operations";
    //$messageText="I had a wonderful experience!";
    $message_key_phrases='';
	$request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/text/analytics/v2.0');
	$url = $request->getUrl();
  
	$headers = array(
	    // Request headers
	    'Content-Type' => 'application/json',
	    'Ocp-Apim-Subscription-Key' => '7f354671cad444c2a6a10dfe7c8f08d7',
	);

	$request->setHeader($headers);

	$parameters = array(
	    // Request parameters
         
	);

	$url->setQueryVariables($parameters);

	$request->setMethod(HTTP_Request2::METHOD_POST);

	// Request body
	$request->setBody("{
		  'documents': [
		    {
		      'language': 'en',
		      'id': 'string',
		      'text': '".$messageText."'
		    }
		  ]
		}");

	try
	{
	     $response = $request->send();
	     // echo $response->getBody();

	     $input_array=json_decode (($response->getBody()),true);
 
    //     print_r($input_array);

         $input_array2= $input_array['documents'];
         $input_array3 =$input_array2['0'];
         $input_array4 =$input_array3['keyPhrases'];

         $messageText=implode(" ",$input_array4);
         // echo $message_key_phrases;
	}
	catch (HttpException $ex)
	{
	    echo $ex;
	}

?>