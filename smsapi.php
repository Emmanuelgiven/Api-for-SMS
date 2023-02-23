//send a verification code via an sms
       $messge = 'Your verification code is '.' '.$code;
       function SendSMS($username,$password,$sender,$number,$message) {
            	$url = "www.egosms.co/api/v1/plain/?";
            $parameters="number=[number]&message=[message]&username=[username]&password=[password]&sender=[sender]";
            $parameters = str_replace("[message]", urlencode($message), $parameters);
            $parameters = str_replace("[sender]", urlencode($sender),$parameters);
            $parameters = str_replace("[number]", urlencode($number),$parameters);
            $parameters = str_replace("[username]", urlencode($username),$parameters);
            $parameters = str_replace("[password]", urlencode($password),$parameters);
            $live_url="http://".$url.$parameters;
            $parse_url=file($live_url);
            $response = $parse_url[0];
            return $response;
            }
            $username ="xxxxxxxxxx";
            $password ="xxxxxxxx";
            $sender ="xxxxxxx";
            $number =$business_phone;
            $message =$messge;
            $success = SendSMS($username,$password,$sender,$number,$message);
