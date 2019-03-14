<?php

namespace Tawsif\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tawsif\Contact\Models\ContactUs;

class ContactController extends Controller
{
    /**
     * ContactController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contactUs()
    {
        return view('contact::contact_us');
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function saveMessage(Request $request)
    {
        $validator = Validator::make($request->all(), config('contact_us.validation_rules'),
            config('contact_us.validation_fail_messages'));

        if($validator->fails()) return redirect()->back()->withErrors($validator);

        ContactUs::create([
           'first_name' => $request->first_name,
           'last_name'  => $request->last_name,
           'email'      => $request->email,
           'phone'      => $request->phone == null ? null : $request->phone,
           'message'    => $request->message
        ]);

        //send email + //block spam
        $message = config('contact_us.submit_message');
        return redirect()->back()->with('MessageReceived', $message);
    }
}
