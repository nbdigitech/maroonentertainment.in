include 'path/to/mailin-api/sms_api.php';

    $mailin = new MailinSms('32fTpO1KwhY7Pnyc');

    $mailin->addTo('33XXXXXXXXXX')

        ->setFrom('Maroon Entertainment') // If numeric, then maximum length is 17 characters and if alphanumeric maximum length is 11 characters.
        ->setText('Text message to send') // 160 characters per SMS.
        ->setTag('Your tag name')

        ->setType('') // Two possible values: marketing or transactional.
        ->setCallback('http://callbackurl.com/');

    $res = $mailin->send();

    
        Successful SMS sent message will be returned as:
            {"status":"OK","number_sent":1,"to":"00XXXXXXXX","remaining_credit":9525,"reference":{"1":"cz2tjvs79vm079hpa"}}
        Error will be returned as:
            {"status":"KO","description":"Invalid telephone number."}
    
