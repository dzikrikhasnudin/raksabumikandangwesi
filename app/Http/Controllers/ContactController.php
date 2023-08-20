<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function create()
    {
        return view('frontpage.kontak');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'email:dns|required',
            'subject' => 'string|required|max:254',
            'message' => 'required'
        ]);

        Contact::create($data);

        return redirect()->route('contact.success');
    }

    public function show($id)
    {
        $contact = Contact::find($id);

        return view('contacts.detail', compact('contact'));
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();
        Alert::toast('Pesan berhasil dihapus', 'success');

        return back();
    }

    public function success()
    {

        return view('contacts.success');
    }
}
