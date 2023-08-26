<?php

namespace App\Http\Controllers;
use App\Models\Email;
use Illuminate\Http\Request;
use DB;
use Auth;
class SendingMailController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth')->except(['index','store']);

    }
     
    public function index()
    {
    if(Auth::check()){
        $emails = Email::latest()->paginate(6);
        return view('backend.emails.index',compact('emails'));
        
    }
    else{
        return view('frontend.contacts.index');
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('frontend.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'telefon' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ],
     [
        'firstname.required' => 'Detta fält är obligatoriskt (förnamn)',
        'lastname.required' => 'Detta fält är obligatoriskt (efternamn)',
        'email.required' => 'Detta fält är obligatoriskt (e-post)',
        'telefon.required' => 'Detta fält är obligatoriskt (telefon)',
        'subject.required' => 'Detta fält är obligatoriskt (telefon)',
        'message.required' => 'Detta fält är obligatoriskt (meddelande)',
    ]);
        
       
          Email::create($request->all());
         return redirect()->route('contacts.index')->with('success','Ditt meddelande har nu skickats, vi återkommer till dig inom kort.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $email = Email::findOrFail($id);
            return view('backend.emails.show',compact('email'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //      $email = Email::findOrFail($id);
    //     return view('backend.emails.edit',compact('email'));
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Email $email)
    // {
    //       $request->validate([
    //         'firstname' => 'required',
    //         'lastname' => 'required',
    //         'email' => 'required',
    //         'telefon' => 'required',
    //         'subject' => 'required',
    //         'message' => 'required',

    //     ],
    //  [
    //     'firstname.required' => 'Detta fält är obligatoriskt (förnamn)',
    //     'lastname.required' => 'Detta fält är obligatoriskt (efternamn)',
    //     'email.required' => 'Detta fält är obligatoriskt (e-post)',
    //     'telefon.required' => 'Detta fält är obligatoriskt (telefon)',
    //     'telefon.subject' => 'Detta fält är obligatoriskt (telefon)',
    //     'message.required' => 'Detta fält är obligatoriskt (meddelande)',
    // ]);
    //  $email->update($request->all());
    // return redirect()->route('emails.index')->with('danger','Ett meddelande uppdaterades');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $email = Email::findOrFail($id);
    $email->delete();
    return redirect()->route('sending.index')->with('danger','Ett meddelande har nu raderats');
    }
}
