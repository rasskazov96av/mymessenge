<!DOCTYPE html>
<html>
<head>
  <title>Отправление, пожалуйста подождите...</title>
  <meta http-equiv="refresh" content="0; url=http://mssg.gq/PERMANENT/successful.html">
</head>
<body>

</body>
</html>
<?php
 	$name = $_POST['name']; // input name
 	$phone = $_POST['phone']; // input phone

	$message = "Новая заявка с instagram".PHP_EOL."Имя: ".$name.PHP_EOL."Телефон: ".$phone;

	send(181522726,$message); // id беседы с заказчиком

	function send($id , $message) {
    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
      'user_id' => $id,    // Кому отправляем
      'message' => $message,   // Что отправляем
      'access_token' => '114df0e60c31c0a22bcaf63f109f792eebc12c8b46079e48a2d6d48b5d9d3156ba7d66b7ac4a0e47a50a6',  
      'v' => '5.62',
    );

    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-type: application/x-www-form-urlencoded',
          'content' => http_build_query($params)
        )
    )));
	}
?>
