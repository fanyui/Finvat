<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Account;
use App\Client;
use App\Bank;
use App\Transaction;
use App\Plan;
use App\Gateway;
use App\GatewayParsed;

use Auth;

class HomeController extends Controller
{

    /**
     * Where to redirect users after successfully working on the callback information.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * variable to hold the api  code.
     *
     * @var string
     */
    protected $api_code = 'znkopjzxxbnoqrqq';


    /**
     * holds the api id of key
     *
     * @var string
     */
    protected $api_id = 'fi1513';

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function regist(Request $request)
    {
        return $request->all();
    }

    public function configuration($value='')
    {
        return view('dashboard.configuration');
    }

    public function account($value='')
    {
      $account = Account::get();
      // $account = Account::where("client_id", auth()->user()->id)->get();
        return view('dashboard.account')->with("accounts", $account);
    }

    protected function getAuthString( )
    {
      return "Unnax ".base64_encode( $this->api_id.":".$this->api_code);
    }

    public function accountDetails(Request $request, $id)
    {
      
      $account = Account::where("id", $id)->get();
      // $account = Account::where("client_id", auth()->user()->id)->get();
        return view('dashboard.accountdetails')->with("account", $account);
    }

    public function deleteAccount(Request $request, $id)
    {
        Account::find($id)->delete();

        return "account deleted successfully";
    }


    // finanial position method
    public function financialPosition(Request $request)
    {
      $account = Account::get();
      if(empty($account))
        return redirect('/home');
      
      return view("dashboard.finantialPosition");
    }

    //financial plan  method 
    public function financialPlan(Request $request)
    {
      $account = Account::get();
      if(empty($account))
        return redirect('/home');

      return view("dashboard.finantialPlan");
    }


    public function addAccount($value='')
    {

      $requestCode = strtotime("now");
      //array of data params to be sent inthe body of the request
       $data = array(
        'merchant_id'      => 'fi1513',
        'merchant_signature'    => sha1($this->api_id . $requestCode . $this->api_code),
        // 'merchant_signature'    => "198273ac249f7b9de717e3bdbb3e2f86598ec263",
        // 'request_code'       => "1543963806041",
        'request_code'       => $requestCode,
        // 'callback_url'       => "http://finvat.com/account/fitnance/callback",
        'callback_url'       => route('fitnance-callback', ["user" => auth()->user()->id]),
        'callback_ok'       => route('account'),

      );
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://integration.unnax.com/api/v3/reader/lockstep/init/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
          "content-type: application/json", "Authorization: ".$this->getAuthString( )
        ),
      ));

      $result = "";
      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } 
      else {
         $result = json_decode($response, true);
        // echo $result['widget_url'];

      }
      return view('dashboard.addaccount')->with("response",$result);
    }

    // profile setting page eg setting password etc
    public function profile($value='')
    {
        $user = auth()->user();
        return view('dashboard.profile')->with("user", $user);
    }

    // Update password 
    public function updatePasword(Request $request)
    {
      if(!Hash::check($request->old_password, Auth::user()->password)){
        return redirect()->back()->with("message","Your current password doesn't match with the password you provided. Try again");
      }

      if(strcmp($request->old_password, $request->confirm_password) == 0){
        return redirect()->back()->with("message","New password cannot be thesame as current password please choose a different password ");
      }




        $data = $request->validate([

          'old_password' => 'required',
          'new_password' => 'required',
          'confirm_password' => 'required',
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->new_password);
        $user->save();

        $user->save();
        return back()->with("message","Your password has been updated successfully. ");
    }


  





    // public function decryption()
    // {
    //     $key = "znkopjzxxbnoqrqq";
    //     $iv_info = "fi1513";

    //     $size = 16;
    //     $padding = '$';


    //     $password = substr(str_pad($key, $size, $padding), 0, $size);
    //     $iv= substr(str_pad($iv_info, $size, $padding), 0, $size);
    //     $method='aes-128-cbc';
    //     $decoded_data= base64_decode($this->data);

    //     $decryptedMessage = openssl_decrypt($decoded_data , $method, $password, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);
    //     $response = rtrim($decryptedMessage, "$");
    //      $jsonDecodeResponse = json_decode($response);
    //      // foreach ($jsonDecodeResponse->accounts as $key => $obj) {
    //      //   echo $obj->currency;
    //      // }

    //      $this->gatewayIn($jsonDecodeResponse);

    //       //invoke the customer creation method to handling creation of clients
    //         $this->createClients($jsonDecodeResponse->customers);

    //         $this->createAccount($jsonDecodeResponse->summary->by_account);
    //         $this->createBank($jsonDecodeResponse->summary->by_bank);

    //         $this->createLoans($jsonDecodeResponse->loans);

    //         $this->createTransaction($jsonDecodeResponse->statements);


    //         //return $jsonDecodeResponse->customers; this qill return the full customers representation
    //         //return $jsonDecodeResponse->customers;
    //     return $response;
    //     echo( rtrim($decryptedMessage, "$"));

    //    while ($msg = openssl_error_string())
    //         echo $msg . "<br />\n";
    //     // die;
    //    echo $decryptedMessage;
    // }





public function getClients()
{
  return Client::get();
}















}
