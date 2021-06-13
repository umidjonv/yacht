@php
header("Content-Type:text/html; charset=euc-kr;");
/*
****************************************************************************************
* <Authentication Result Parameter>
    ****************************************************************************************
    */
    $authResultCode = $model['AuthResultCode'];		// authentication result code 0000:success
    $authResultMsg = $model['AuthResultMsg'];		// authentication result message
    $nextAppURL = $model['NextAppURL'];				// authorization request URL
    $txTid = $model['TxTid'];						// transaction ID
    $authToken = $model['AuthToken'];				// authentication TOKEN
    $payMethod = $model['PayMethod'];				// payment method
    $mid = $model['MID'];							// merchant id
    $moid = $model['Moid'];							// order number
    $amt = $model['Amt'];							// Amount of payment
    $reqReserved = $model['ReqReserved'];			// mall custom field
    $netCancelURL = $model['NetCancelURL'];			// netCancelURL

    /*
    ****************************************************************************************
    * <authorization parameters init>
        ****************************************************************************************
        */
        $response = "";

        if($authResultCode === "0000"){
        /*
        ****************************************************************************************
        * <Hash encryption> (do not modify)
            ****************************************************************************************
            */
            $ediDate = date("YmdHis");
            $merchantKey = "EYzu8jGGMfqaDEp76gSckuvnaHHu+bC4opsSN6lHv3b2lurNYkVXrZ7Z1AoqQnXI3eLuaUFyoRNC6FkrzVjceg==";
            $signData = bin2hex(hash('sha256', $authToken . $mid . $amt . $ediDate . $merchantKey, true));

            try{
            $data = Array(
            'TID' => $txTid,
            'AuthToken' => $authToken,
            'MID' => $mid,
            'Amt' => $amt,
            'EdiDate' => $ediDate,
            'SignData' => $signData
            );
            /*
            ****************************************************************************************
            * <authorization request>
                * authorization through server to server communication.
                ****************************************************************************************
                */
                $response = reqPost($data, $nextAppURL);
                redirect('/client/mobile/payment/success')->with(['responseData'=>$response]);
                }catch(Exception $e){
                $e->getMessage();
                $data = Array(
                'TID' => $txTid,
                'AuthToken' => $authToken,
                'MID' => $mid,
                'Amt' => $amt,
                'EdiDate' => $ediDate,
                'SignData' => $signData,
                'NetCancel' => '1'
                );
                /*
                *************************************************************************************
                * <NET CANCEL>
                    * If an exception occurs during communication, cancelation is recommended
                    *************************************************************************************
                    */
                    $response = reqPost($data, $netCancelURL);
                    jsonRespDump($response);
                    }

                    }else{
                    //When authentication fail
                    $ResultCode = $authResultCode;
                    $ResultMsg = $authResultMsg;
                    }

                    // API CALL foreach example
                    function jsonRespDump($resp){
                    $resp_utf = iconv("EUC-KR", "UTF-8", $resp);
                    $respArr = json_decode($resp_utf);
                    foreach ( $respArr as $key => $value ){
                    if($key == "Data"){
                    echo decryptDump ($value, $merchantKey)."<br />";
                    }else{
                    echo "$key=". iconv("UTF-8", "EUC-KR", $value)."<br />";
                    }
                    }
                    }

                    //Post api call
                    function reqPost(Array $data, $url){
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);					//connection timeout 15
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));	//POST data
                    curl_setopt($ch, CURLOPT_POST, true);
                    $response = curl_exec($ch);
                    curl_close($ch);
                    return $response;
                    }

                    @endphp
