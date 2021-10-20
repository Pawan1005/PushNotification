<?php
function sendNotification() {
    $url ="http://fcm.googleleapis.com/fcm/send";

    $fields=array(
        "to"=>$_REQUEST['Token'],
        "notification"=> array(
            "body"=>$_REQUEST['message'],
            "title"=>$_REQUEST['title'],
            "icon"=>$_REQUEST['icon'],
            "click_action"=>"http://google.com"
        )
    );

    $header=array(
        'Authorization: key=AAAA5EiYF3k:APA91bEMbU4740xC5PO3dOUgiQJU1fCt9lyUoGD9SGy2vbLYsSTtPxgxh56A7lL-Qi42rduCV6bzzlAkigN0HKIxgOTLgfs5cRRnuKfLbKgvkpp4u9w9IY-etM06rN-sfojt36ncCrV7'
        'Content-Type:application/json'  
    );
    $ch=curl_init();
    curl_setopt($ch, option: CURLOPT_URL,$url);
    curl_setopt($ch, option: CURLOPT_POST,value:true);
    curl_setopt($ch, option: CURLOPT_HTTPHEADER,$header);
    curl_setopt($ch, option: CURLOPT_RETURNTRANSFER, value:true);
    curl_setopt($ch, option: CURLOPT_POSTFIELDS, json_encode($fields));
    $result=curl_exec($ch);
    print_r($result);
    curl_close($ch);
}

sendNotification();