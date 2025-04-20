<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;  // Import the Contact model
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function send(Request $request)
{
    // Validate the form inputs
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'project' => 'required',
        'subject' => 'required',
        'message' => 'required',
        'g-recaptcha-response' => 'required' // Validate reCAPTCHA response
    ]);

    if ($validator->fails()) {
        return response()->json(['success' => false, 'errors' => $validator->errors()]);
    }

    // Verify reCAPTCHA
    $secret = env('RECAPTCHA_SECRET_KEY'); // Get your secret key from environment variables
    $response = $request->input('g-recaptcha-response');
    $remoteIp = $request->ip();

    $captchaResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}&remoteip={$remoteIp}");
    $captchaResponseKeys = json_decode($captchaResponse, true);

    if (intval($captchaResponseKeys['success']) !== 1) {
        return response()->json(['success' => false, 'error' => 'CAPTCHA verification failed.']);
    }

    // Proceed with saving data...
    // Generate a unique ID in a series (e.g., C00001, C00002)
    $lastContact = Contact::latest()->first();
    $newUniqueId = 'C' . str_pad(($lastContact ? $lastContact->id + 1 : 1), 5, '0', STR_PAD_LEFT);

    // Save data to the database
    $contact = new Contact();
    $contact->unique_id = $newUniqueId;
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->phone = $request->phone;
    $contact->project = $request->project;
    $contact->subject = $request->subject;
    $contact->message = $request->message;
    $contact->save();

    // Optionally, send an email
    try {
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('your-email@example.com')
                    ->subject($request->subject)
                    ->from($request->email, $request->name);
        });

        return response()->json(['success' => true, 'unique_id' => $newUniqueId]);

    } catch (\Exception $e) {
        return response()->json(['success' => false, 'error' => $e->getMessage()]);
    }
}


}
