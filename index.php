<? include('db_connection.php')?>
<?
// Pull messages (for push messages please go to settings of the number) 


// Send Message 
$my_apikey = "TRSWIZZRXTRNUNZH380O"; 
$destination = "79102577553"; 
$message = "0000"; 
$api_url = "http://panel.apiwha.com/send_message.php"; 
$api_url .= "?apikey=". urlencode ($my_apikey); 
$api_url .= "&number=". urlencode ($destination); 
$api_url .= "&text=". urlencode ($message); 
$my_result_object = json_decode(file_get_contents($api_url, false)); 
echo "<br>Result: ". $my_result_object->success; 
echo "<br>Description: ". $my_result_object->description; 
echo "<br>Code: ". $my_result_object->result_code; 


?>

<? include('header.php')?>
<? include('body.php')?>
<? include('footer.php')?>

