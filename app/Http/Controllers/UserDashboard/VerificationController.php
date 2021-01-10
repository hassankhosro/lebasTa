<?php

namespace App\Http\Controllers\UserDashboard;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\VerificationRequest;
use Illuminate\Support\Facades\Session;

class VerificationController extends Controller
{

     /**
     * Show and send first code and verification view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        if (\Auth::user()->status != 1) {
            if ($user->sms_date >= Carbon::now()->subMinutes(10)->timestamp) {
                $finishingTime = Carbon::parse($user->sms_date)->addMinutes(10)->timestamp . '000';
                return view('admin.verification', compact('finishingTime'));
            }
            $code = mt_rand(1111, 9999);
            $user->update(['sms_date' => now(), 'sms_code' => $code]);
            $finishingTime = Carbon::parse($user->sms_date)->addMinutes(10)->timestamp . '000';
            // $client = new Client();
            // $res = $client->request('POST', 'https://rest.payamak-panel.com/api/SendSMS/SendSMS', [
            //   'form_params' => [
            //     'username' => 'riecocompany',
            //     'password' => 'ali021ALI)@!',
            //     'to' => $user->mobile,
            //     'from' => '10001010111',
            //     'text' => "کد تایید: $code | امید شاپ",
            //   ]
            // ]);
            alert()->success('کد پیامک شد', 'کد تایید ارسال شد.')->autoclose(5000);
            return view('admin.verification', compact('finishingTime'));
        } 
        else{
            return view('admin.verification');
        }
    }



    /**
     * Send new verification code and verify mobilePhone.
     *
     * @return redirectBack
     */
    public function sms(VerificationRequest $request)
    {

      $user = \Auth::user();
      if($request->verification_code == null){
        if (\Auth::user()->status != 1) {
            if ($user->sms_date >= Carbon::now()->subMinutes(10)->timestamp) {
                $finishingTime = Carbon::parse($user->sms_date)->addMinutes(10)->timestamp . '000';
                alert()->error('کد تایید قبلا ارسال شده است')->autoclose(8000);
                return view('admin.verification', compact('finishingTime'));
            }
            $code = mt_rand(1111, 9999);
            $user->update(['sms_date' => now(), 'sms_code' => $code]);
            $finishingTime = Carbon::parse($user->sms_date)->addMinutes(10)->timestamp . '000';
            // $client = new Client();
            // $res = $client->request('POST', 'https://rest.payamak-panel.com/api/SendSMS/SendSMS', [
            //   'form_params' => [
            //     'username' => 'riecocompany',
            //     'password' => 'ali021ALI)@!',
            //     'to' => $user->mobile,
            //     'from' => '10001010111',
            //     'text' => "کد تایید: $code | امید شاپ",
            //   ]
            // ]);
            alert()->success('کد پیامک شد', 'کد تایید ارسال شد.')->autoclose(5000);
            return view('admin.verification', compact('finishingTime'));
        } 
    }
        if($request->verification_code){
          if($request->verification_code == $user->sms_code){
            $user->update(['status' => 1]);
            alert()->success('موبایل شما تایید شد.')->autoclose(5000);
            return view('admin.verification');
        }else{
            alert()->error('کد وارد شده نادرست است.')->autoclose(5000);
            return view('admin.verification');
        }
        }
    }


}
