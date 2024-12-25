<?php
 


    $title = "Yeni bir mesajın var!";
    $message ="Mesajı okumak için hemen uygulamaya dön!";
    $url = "test";

	$heading = [
        "en" => $title,
    ];
    $content = [
        "en" => $message,
    ];
    
    $app_id = '3d355d93-b21a-45e1-b63e-b4e292ded46f';
    $rest_api_key = 'MzMyMTA1OGQtMzhhMi00M2MyLWE2NzktZmU1NjZhZmQzZGJh';

    $fields = [
        'app_id' => $app_id,
        'included_segments' => array('All'), // array('Test')
        'data' => [ 'foo' => 'bar' ],
        'contents' => $content,
        'headings' => $heading,
    ];

    if (isset($url)) {
		$fields['url'] = $url;
	}
    if($_SESSION['user'] != 'demo@admin.com'){
    if (isset($_FILES['image']) && file_exists($_FILES['image']['tmp_name'])) {

        move_uploaded_file($_FILES['image']['tmp_name'], '../../upload/onesignal.png');

      
    }
    
    $sendContent = json_encode($fields, JSON_UNESCAPED_UNICODE);
    // print_r($sendContent);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER,
                        array('Content-Type: application/json; charset=utf-8',
                                'Authorization: Basic '.$rest_api_key
                        ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $sendContent);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);
}
     print_r($response);
    echo "Başarılı.";

 
?>