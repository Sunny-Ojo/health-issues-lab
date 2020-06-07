<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    //
    public function issues()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://priaid-symptom-checker-v1.p.rapidapi.com/issues?language=en-gb",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: priaid-symptom-checker-v1.p.rapidapi.com",
                "x-rapidapi-key: " . env('RAPID_API_KEY'),
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response, true);

        }
        return view('medical.issues')->with('data', $data);
    }
    public function result(Request $request)
    {

        $this->validate($request, [
            'issue' => 'required',
        ]);
        $issue_id = $request->issue;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://priaid-symptom-checker-v1.p.rapidapi.com/issues/" . $issue_id . "/info?language=en-gb",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: priaid-symptom-checker-v1.p.rapidapi.com",
                "x-rapidapi-key: " . env('RAPID_API_KEY'),
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response, true);

        }
        return view('medical.result')->with('data', $data);
    }
    public function contact(ContactRequest $request)
    {
        $contact = $request->validated();
        $to = 'njokusunnyojo@gmail.com';
        $email = $request->email;
        $subject = $request->subject;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: ' . $request->name . '  <healthlab.com>' . "\r\n";

        $txt = $request->message;
        $txt = str_replace("\n.", "\n..", $txt);
        $txt = wordwrap($txt, 70);

        $send = mail($email, $subject, $txt, $headers);

        if ($send) {
            $request->session()->flash('success', 'Thank you contacting us, your message was sent successful.');
            return redirect('/me');
        } elseif (Contact::create($contact)) {
            $request->session()->flash('success', 'Thank you contacting us, your message was sent successful.');
            return redirect('/me');
        } else {
            $request->session()->flash('success', 'Sorry, Something went wrong, please try again.');
            return redirect('/me');
        }
    }

}