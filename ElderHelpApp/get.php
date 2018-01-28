<?php
	// Require the bundled autoload file - the path may need to change
	// based on where you downloaded and unzipped the SDK
 	 require 'database.php';
  	$db = getDB();
  	$id = $request->getParam('id');

	date_default_timezone_set('America/New_York');
	$date = date('h:i', time());

    //echo("<script>console.log('PHP: ".$date."');</script>");
	$query = "SELECT * FROM Elders WHERE ID = '$id'";

	$stmt = $db->prepare($query);
	$stmt->execute();
   	$output = $stmt->fetchAll();


    $count = array();
    echo(json_encode($output));

    $i=0;
    $id2=0;
    $name2="";
    $product2="";
    $dosage2=0;
    $dose2="";
    $frequency2="";
    $phone2="";
    $start2="";

    foreach($output as $x)
    {
          //$ratings2[] = $y;
        $id = $x['ID'];
        $id2 = $id;
        $name = $x['name'];
        $name2 = $name;
        $product = $x['product'];
        $product2 = $product;
        $dosage = $x['dosage'];
        $dosage2 = $dosage;
        $dose = $x['dose'];
        $dose2 = $dose;
        $frequency = $x['frequency'];
        $frequency2 = $frequency;
        $phone = $x['phone'];
    	echo("<script>console.log('PHP: ".$phone."');</script>");
        $start = $x['start'];          
        $i++;
      
    }



    //TESTING
    echo "<script type='text/javascript'>alert('$id2');</script>";
    //echo("<script>console.log('PHP: ".$start."');</script>");
	//Display the contents of data

	require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

	// Use the REST API Client to make requests to the Twilio REST API
	use Twilio\Rest\Client;

	// Your Account SID and Auth Token from twilio.com/console
	$sid = 'ACc2ab37dcc6575a7bb3cace812ff249f1';
	$token = '7fb6753bcf08ffde9a28209aef12e461';
	$client = new Client($sid, $token);

	// Use the client to do fun stuff like send text messages!

    echo("<script>console.log('PHP: ".$name."');</script>");
    if($frequency==="once a day") {
        $temp = '+' . $phone;
        $output = 'Take ' . $dosage . 'of ' . $product;
	$client->messages->create(
	    // the number you'd like to send the message to
	    $temp,
	    array(
	        // A Twilio phone number you purchased at twilio.com/console
	        'from' => '+14387956891',
	        // the body of the text message you'd like to send
	        'body' => $output
	    )
	);
}
?>