<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Feedback;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Vendor;
use App\User;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class PaymentController extends Controller
{


    public function index($id)
    {
        $user = Auth::user();
        $vendor= Vendor::where('UserId', $user->id)->first();
        $reservation = Reservation::with('product')->find($id);


        return view('client.mobile.payment.index')->with(['user'=>$user, 'reservation'=>$reservation, 'vendor'=>$vendor]);
    }

    public function complete(Request $request)
    {
        $model = $request->all();

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
        $netCancelURL = $model['NetCancelURL'];

        /****************************************************************************************
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
                $response = $this->reqPost($data, $nextAppURL);
                $result = $this->jsonRespDump($response, $merchantKey);

                return view('client.mobile.payment.success')->with(['result'=>$result]);
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
                $response = $this->reqPost($data, $netCancelURL);
                $result = $this->jsonRespDump($response, $merchantKey);

                return view('client.mobile.payment.success')->with(['result'=>$result]);
            }

        }else{
            //When authentication fail
            $ResultCode = $authResultCode;
            $ResultMsg = $authResultMsg;
            return view('client.mobile.payment.success')->with(['result'=>$authResultCode. ' '. $authResultMsg]);
        }



    }

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

    function jsonRespDump($resp, $merchantKey){
        $resp_utf = iconv("EUC-KR", "UTF-8", $resp);
        $respArr = json_decode($resp_utf);
        $resultArray = array();
        foreach ( $respArr as $key => $value ){
            if($key == "Data"){
                $resultArray[] = decryptDump ($value, $merchantKey);
            }else{
                 $resultArray[$key] = iconv("UTF-8", "EUC-KR", $value);
            }
        }
        return $resultArray;
    }
    public function success(Request $request)
    {
        return view('client.mobile.payment.success')->with(['model'=>$request->all()]);
    }

    function paymentSuccess($id)
    {
        $reservation = Reservation::find($id);
        $reservation->IsPayed = true;
        //$reservation->
    }

    


}
