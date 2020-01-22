<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


//use Illuminate\Http\Request;

class MessagesController extends Controller
{
	public function store(/*Request $request*/)
	{
		//return 'Procesar el formulario';
		//return $request->get('name');
		//return request('name');
		request()->validate([
			'name'=>'required',
			'email'=>'required|email',
			'subject'=>'required',
			'content'=>'required|min:3'
		], [
			'name.required' => __('Necesito tu nombre')
		]);

		//enviar emails--------------------------------

		Mail::to('luchodestrollerda2306@gmail.com')->send(new MessageReceived);

		return 'Mensaje Enviado';
	}
}
