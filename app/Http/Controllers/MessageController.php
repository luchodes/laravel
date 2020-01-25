<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


//use Illuminate\Http\Request;

class MessageController extends Controller
{
	public function store(/*Request $request*/)
	{
		//return 'Procesar el formulario';
		//return $request->get('name');
		//return request('name');
		$msg = request()->validate([ //envia estos datos al messageReceived
			'name'=>'required',
			'email'=>'required|email',
			'subject'=>'required',
			'content'=>'required|min:3'
		], [
			'name.required' => __('Necesito tu nombre')
		]);

		//enviar emails--------------------------------

		Mail::to('luchodestrollerda2306@gmail.com')->queue(new MessageReceived($msg));//pasa los datos del contructor al mailable

		// return new MessageReceived($msg);

		return 'Mensaje Enviado';
	}
}
