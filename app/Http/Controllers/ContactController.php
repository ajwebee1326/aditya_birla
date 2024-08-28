<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Exports\ContactsExport;
use Maatwebsite\Excel\Facades\Excel;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->alert('Welcome to the contact page', 'This is the contact page', 'info');
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $specialty = $request->specialty;
        if($specialty == 'other'){
            $rules = [
                'name' => 'required|alpha',
                'email' => 'required|email|unique:contacts',
                'phone' => 'required|digits_between:10,13|unique:contacts',
                'specialty' => 'required',
                'message' => 'required',
            ];
        }else{
            $rules = [
                'name' => 'required|alpha',
                'email' => 'required|email|unique:contacts',
                'phone' => 'required|digits_between:10,13|unique:contacts',
                'specialty' => 'required',
            ];
        }

        $messages = [
            'name.required' => 'Please enter your name.',
            'name.alpha' => 'Name must contain only alphabets.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'The email address must be a valid email format.',
            'phone.required' => 'Please enter your phone number.',
            'phone.digits_between' => 'Phone number must be between 7 and 12 digits.',
            'email.unique' => 'Email is already registered.',
            'phone.unique' => 'Number is already registered.',
            'message.required' => 'Please enter your message.',
        ];

        // Validate the request
        $request->validate($rules, $messages);

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->specialty = $request->specialty;
        $contact->message = $request->message;
       
        try{
            
            if ($request->hasFile('file')) {
                $file = $request->file->store('files');
                $contact->file = $file;
            }

            $contact->save();

            return redirect()->route('viewIndex');

        }catch(\Exception $e){
            return redirect()->back();
        }

    }

    public function thankyou()
    {
        return view('frontend.thankyou'); 
    }

    public function checkEmail(Request $request){
        $email = $request->email;
        $contact = Contact::where('email', $email)->first();
        if($contact){
            return response()->json(['status' => 'true', 'message' => 'The email address is already registered.']);
        }
        return response()->json(['status' => 'false', 'message' => 'The email address is available.']);
    }

    public function checkPhone(Request $request){
        $phone = $request->phone;
        $contact = Contact::where('phone', $phone)->first();
        if($contact){
            return response()->json(['status' => 'true', 'message' => 'The phone number is already registered.']);
        }
        return response()->json(['status' => 'false', 'message' => 'The phone number is available.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        try {
            $contact->delete();
            return redirect()->route('admin.contact')->with('success', 'Contact deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.contact')->with('error', 'An error occurred. Please try again later.');
        }
    }

    public function export(){
        return Excel::download(new ContactsExport, 'contacts.xlsx');
    }

    public function changeLeadType(Request $request){
        $contact = Contact::find($request->id);
        $contact->lead_type = $request->type;
        $contact->save();
        return response()->json(['status' => 'success', 'message' => 'Lead type updated successfully.']);   
        
    }

}
