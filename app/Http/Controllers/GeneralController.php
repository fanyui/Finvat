<?php

namespace App\Http\Controllers;

use App\CallBack;
use App\User;
use App\Account;
use App\Client;
use App\Bank;
use App\Transaction;
use App\Plan;
use App\Gateway;
use App\GatewayParsed;

use Illuminate\Http\Request;

class GeneralController extends Controller
{


    protected $data= "";

    public function welcome(Request $request)
    {
    	//return view('register-success');
    	return view('welcome');
    }

    public function registerSuccess(Request $request)
    {
    	return view('register-success');
    }



       public function handleFitnanceCallback(Request $request, $user)
    {

        //this is just to check if the callback response is actually reaching here 

        $cb = new CallBack();
        $cb->callback = $request->response_id;
        $cb->save();

//this should save the data part of the response to the gatway in object for further usage
        $gateway = new Gateway();
        $gateway->response = $request->data;
        $gateway->user = $user;
        $gateway->save();

        $this->data = $request->data;

        $key = "znkopjzxxbnoqrqq";
        $iv_info = "fi1513";

        $size = 16;
        $padding = '$';


        $password = substr(str_pad($key, $size, $padding), 0, $size);
        $iv= substr(str_pad($iv_info, $size, $padding), 0, $size);
        $method='aes-128-cbc';
        $decoded_data= base64_decode($request->data);

        $decryptedMessage = openssl_decrypt($decoded_data , $method, $password, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);
        $response = rtrim($decryptedMessage, "$");
         $jsonDecodeResponse = json_decode($response);
         // foreach ($jsonDecodeResponse->accounts as $key => $obj) {
         //   echo $obj->currency;
         // }

        // $this->gatewayIn($jsonDecodeResponse);

          //invoke the customer creation method to handling creation of clients
        $this->createClients($jsonDecodeResponse->customers);

        $this->createAccount($jsonDecodeResponse->summary->by_account);
        $this->createBank($jsonDecodeResponse->summary->by_bank);

        $this->createLoans($jsonDecodeResponse->loans);

        $this->createTransaction($jsonDecodeResponse->statements);


            //return $jsonDecodeResponse->customers; this qill return the full customers representation
            //return $jsonDecodeResponse->customers;
        return $response;
        echo( rtrim($decryptedMessage, "$"));

       while ($msg = openssl_error_string())
            echo $msg . "<br />\n";
        // die;
       echo $decryptedMessage;
    
    }



    public function decryption()
    {
        $key = "znkopjzxxbnoqrqq";
        $iv_info = "fi1513";

        $size = 16;
        $padding = '$';


        $password = substr(str_pad($key, $size, $padding), 0, $size);
        $iv= substr(str_pad($iv_info, $size, $padding), 0, $size);
        $method='aes-128-cbc';
        $decoded_data= base64_decode($this->data);

        $decryptedMessage = openssl_decrypt($decoded_data , $method, $password, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);
        $response = rtrim($decryptedMessage, "$");
         $jsonDecodeResponse = json_decode($response);
         // foreach ($jsonDecodeResponse->accounts as $key => $obj) {
         //   echo $obj->currency;
         // }

        // $this->gatewayIn($jsonDecodeResponse);

          //invoke the customer creation method to handling creation of clients
        $this->createClients($jsonDecodeResponse->customers);

        $this->createAccount($jsonDecodeResponse->summary->by_account);
        $this->createBank($jsonDecodeResponse->summary->by_bank);

        $this->createLoans($jsonDecodeResponse->loans);

        $this->createTransaction($jsonDecodeResponse->statements);


            //return $jsonDecodeResponse->customers; this qill return the full customers representation
            //return $jsonDecodeResponse->customers;
        return $response;
        echo( rtrim($decryptedMessage, "$"));

       while ($msg = openssl_error_string())
            echo $msg . "<br />\n";
        // die;
       echo $decryptedMessage;
    }



	//does the creation of a client from  a customer object from the respose
	protected function createClients($customers)
	{

	  foreach ($customers as $key => $customer) {
	        /* we are in possesion of a customer object other wise known as a client
	          Remove all the required fields from the response data and store in the client table
	          Unrequired fields present in the response will not be touched.
	        */

	          $client = new Client();
	          $client->user_id =  auth()->user()->id;
	          $client->name = $customer->names;
	          $client->phone = $customer->phones;

	          $client->birthDate =$customer->birth_date;
	          $client->address = $customer->address;
	          $client->number = $customer->document;
	          $client->_id  = $customer->_id;

	          $client->save();

	          // echo( $customer->address[0]);
	         }
	 
	}


	//does the creation of an account from  account object from the respose
	protected function createAccount($accounts)
	{

	  foreach ($accounts as $key => $account) {
	        /* we are in possesion of a account object 
	          Remove all the required fields from the response data and store in the account table
	          Unrequired fields present in the response will not be touched.
	        */

	          $acc = new Account();

	          $acc->start_date  = $account->start_date;
	          $acc->end_date  = $account->end_date;
	          // $acc->entity = $account->entity;

	          // $acc->last_updated =$account->last_updated;
	          $acc->current_balance = $account->current_balance;
	          $acc->currency  = $account->currency;

	          // $acc->label_account = $account->document;
	          // $acc->creation_date =$account->creation_date;
	          $acc->first_movement  = $account->first_statement_date;
	          $acc->last_movement  = $account->last_statement_date;
	          // $acc->iban_number  = $account->_id;


	          $acc->by_month  = $account->by_month; //this is an array of objects take note
	          $acc->total  = $account->total; //this is an array of objects take note


	          $acc->save();

	         }
	 
	}



//create banks 

//does the creation of an account from  account object from the respose
	protected function createBank($banks)
	{

	  foreach ($banks as $key => $bank) {
	        /* we are in possesion of a bank object 
	          Remove all the required fields from the response data and store in the bank table
	          Unrequired fields present in the response will not be touched.
	        */

	          $banc = new Bank();

	          $banc->start_date  = $bank->start_date;
	          $banc->end_date  = $bank->end_date;
	          // $banc->entity = $bank->entity;

	          // $banc->last_updated =$bank->last_updated;
	          $banc->current_balance = $bank->current_balance;
	          $banc->currency  = $bank->currency;

	          // $banc->label_bank = $bank->document;
	          // $banc->creation_date =$bank->creation_date;
	          $banc->first_movement  = $bank->first_statement_date;
	          $banc->last_movement  = $bank->last_statement_date;
	          $banc->banks  = $bank->banks;


	          $banc->by_month  = $bank->by_month; //this is an array of objects take note
	          $banc->total  = $bank->total; //this is an array of objects take note


	          $banc->save();

	         }
	 
	}


	public function gatewayIn($response)
	{
	  $gatway = new Gateway();
	  $gatway->response = $response->customers;

	  $gatway->save();
	}


	public function createLoans($loans)
	{
	  foreach ($loans as $key => $loan) {
	    $ln = new Loan();
	    $ln->type= $loan->type;
	    $ln->bank_id= $loan->bank_id;
	    $ln->account= $loan->account;
	    $ln->bank_name= $loan->bank_name;
	    $ln->name= $loan->name;
	    $ln->creation_date= $loan->creation_date;
	    $ln->expiration_date= $loan->expiration_date;
	    $ln->currency= $loan->currency;
	    $ln->outstanding_capital= $loan->outstanding_capital;
	    $ln->initial_capital= $loan->initial_capital;
	    $ln->interest= $loan->interest;
	    $ln->period= $loan->period;
	    $ln->pending_grace_periods= $loan->pending_grace_periods;
	    $ln->pending_amortization_periods= $loan->pending_amortization_periods;
	    $ln->next_receipt= $loan->next_receipt;
	    $ln->next_receipt_amount= $loan->next_receipt_amount;
	    $ln->last_update= $loan->last_update;
	    $ln->customers= $loan->customers;
	  }
	}



	public function createTransaction($statements){
		  foreach ($statements as $key => $transaction) {
		    $transactn = new Transaction();
		    $transactn->transaction_date = $transaction->deposit_date;
		    $transactn->transaction_value = $transaction->value_date;
		    $transactn->transaction_amount = $transaction->amount;
		    $transactn->transaction_balance = $transaction->balance;
		    $transactn->transactions_currency = $transaction->currency;
		    $transactn->transaction_entity = $transaction->bank_name;
		    // $transactn->transaction_iban = $transaction->balance;
		    $transactn->transaction_office = $transaction->office;
		    $transactn->transaction_description = $transaction->bank_reference;
		    // $transactn->parent_category = $transaction->parent_category;
		    // $transactn->child_category = $transaction->child_category;
		    $transactn->bank_id = $transaction->bank_id;
		    $transactn->account = $transaction->account;
		                // $table->string('bank_id'); //foriegn key  from bank
		            // $table->string('account_id');//forign key from client
		            // $table->string('client_id');//forign key from client

		    $transactn->save();
		    // dd("transaction id id ". $transactn->id);

		  }
		}
	       

	    
	}
