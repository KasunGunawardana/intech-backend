<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

use App\Models\Enquiry;

// use App\Http\Requests\ContactFormRequest;

class MailController extends Controller
{
    public function sentEmail(Request $request) {

        $data = $request->only(['name', 'email', 'number', 'subject', 'message']);

        $details = [
            'name' => $data['name'],
            'email' => $data['email'],
            'number' => $data['number'],
            'subject' => $data['subject'],
            'message' => $data['message'],
        ];

        Enquiry::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'number' => $data['number'],
            'subject' => $data['subject'],
            'message' => $data['message'],
        ]);

        Mail::to('email@email.com')->send(new SendMail($details));

        // Mail::send('templates.contact', [
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'number' => $data['number'],
        //     'subject' => $data['subject'],
        //     'message' => $data['message']
        // ], function ($mail) use($request){
        //     $mail->from('inquire.intechcollege@gmail.com', $request->name);
        //     $mail->to('inquire.intechcollege@gmail.com')->subject('Enquiry From INTECH Contact Form');
        // });

        session()->flash('success', 'Message has been sent successfully.');

        return redirect(route('contact-view'));

    }

    public function index() {
        return view('enquiries.index')->with('inquiries', Enquiry::all());
    }

    public function show($id)
    {
        $enquiry = Enquiry::find($id);

        $enquiry->increment('views');
        
        return view('enquiries.popupex')->with('inquiry', $enquiry);
    }

    public function destroy($id)
    {
        $enquiry = Enquiry::find($id);

        $enquiry->delete();

        session()->flash('success', 'Enquiry deleted successfully');

        return redirect(route('enquiries.index'));
    }

    public function exportCsv(Request $request)
    {
    $fileName = 'intech_web_enquiries.csv';
    $inquiries = Enquiry::all();

            $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0"
            );

            $columns = array('ID', 'Name', 'Email', 'Number', 'Subject', 'Message', 'Received Date');

            $callback = function() use($inquiries, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);

                foreach ($inquiries as $inquiry) {
                    $row['ID']  = $inquiry->id;
                    $row['Name']    = $inquiry->name;
                    $row['Email']    = $inquiry->email;
                    $row['Number']    = $inquiry->number;
                    $row['Subject']  = $inquiry->subject;
                    $row['Message']  = $inquiry->message;
                    $row['Received Date']  = $inquiry->created_at;

                    fputcsv($file, array($row['ID'], $row['Name'], $row['Email'], $row['Number'], $row['Subject'], $row['Message'], $row['Received Date']));
                }

                fclose($file);
            };

            return response()->stream($callback, 200, $headers);
        }
}
