<?php

namespace App\Http\Controllers;

use App\ContactForm;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public $current_page;

    public function sendMail(Request $request)
    {
        $form = new ContactForm();
        $form->fill($request->all());
        $view = new Contact($form);

        $headers = "From: no-reply@lahaltebienetre.fr\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        //Mail::to('contact@lahaltebienetre.fr')->send($view);
        try{
            mail('contact@lahaltebienetre.fr','Nouveau contact;',$view->render(),$headers);
            return redirect()->route('welcome');
        } catch(\Exception $e){
            return redirect()->route('welcome');
        }
    }
}
