<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{  
    
    function bookAppointment(Request $request){
        Session::put('cr_honey', Str::random(mt_rand(32,256)));
        return view('book-appointment');
    }
    function viewForm(Request $request){
        Session::put('cr_honey', Str::random(mt_rand(32,256)));
        return view('contact');
    }
    
    public function sendEmail(Request $request){
        $cr_honey_field = Session::get('cr_honey');
        if ($request->has($cr_honey_field)===false) {
             return redirect()->back()->with('error', 'invalid request.');
        }
        if ($request->has($cr_honey_field)===true && empty($request->post($cr_honey_field))===false) {
             return redirect()->back()->with('error', 'invalid request.');
        }
        
        $validator = Validator::make($request->all(), [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'mail' => 'required|email',
            'phone' => ['required', 'numeric','digits:10','regex:/^[5-9][0-9]{9}$/'],
            'msg' => 'required|max:1024',
        ], [
        'phone.numeric' => 'This is not a valid phone number.',
        'phone.digits' => 'This is not a valid phone number.',
        'phone.regex' => 'This is not a valid phone number.',
    ]);
        $validator->setAttributeNames([
                'fname' => 'first name',
                'lname' => 'last name',
                'mail' => 'email',
                'msg' => 'message',
            ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
        $data=[
            "fname"=>$request->post('fname'),
            "lname"=>$request->post('lname'),
            "mail"=>$request->post('mail'),
            "phone"=>$request->post('phone'), 
            "msg"=>$request->post('msg'),
        ];
        $recipient = 'dev@geekletters.com';
        $subject = 'Dr. Dhruv Patel Appointment Form';      

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($recipient, $subject) {
            $message->to($recipient)
                    ->subject($subject);
        });

        return redirect()->back()->with('success', 'We have received your query. thank you');
   
        // dd($data);
        // echo "next";         
    }            
}
