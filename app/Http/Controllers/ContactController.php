<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactEmail;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request){
    		$contact = [];

            $token = $request->get('g-recaptcha-response');

            if($token){
            $client = new Client();
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify',[
                'form_params' => array(
                                'secret'=>'6Ld90XYUAAAAAETwmQxNukB9QenZTaApcElJC0tR',
                                'response'=>$token
                             )
            ]);
            $result = json_decode($response->getBody()->getContents());
            
            if($result->success){
    		$contact['name'] = $request->get('name');
    		$contact['email'] = $request->get('email');
    		$contact['subject'] = $request->get('subject');
    		$contact['message'] = $request->get('message');

    		//insert into database
            $insert = Contact::create(
              $request->input() 
            );
 
    		Mail::to(config('mail.from.address'))->send(new ContactEmail($contact));

    		flash('Poruka poslata! Message sent!')->success();

    		return redirect()->back();
             }else{
                flash('Kliknite na kvadratić Nisam robot!! Click on recaptcha square!!')->error();
                 return redirect()->back()->withInput();
             }

           }else{
            flash('Kliknite na kvadratć Nisam robot! Click on recaptcha square!!')->error();
            return redirect()->back()->withInput();
           }
    }
}
