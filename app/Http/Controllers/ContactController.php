<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        /* CRUD - read */
        $contacts = Contact::all();
        return view('contacts.index', ['contacts' => $contacts]);
    }

    public function add() {
        return view('contacts.create');
    }

    public function create(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'phone_num' => 'required'
        ]);

        /* CRUD - create*/
        $new_contact = Contact::create($data);
        return redirect(route('contact.index'));
    }

    public function edit(Contact $contact ) {
        return view('contacts.edit', ['contact' => $contact]);
    }

    public function update(Contact $contact, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'phone_num' => 'required'
        ]);

        /* CRUD - update */
        $contact->update($data);
        return redirect(route('contact.index'))->with('success', 'Contact updated successfully!');
    }

    public function delete(Contact $contact) {
        /* CRUD - */
        $contact->delete();
        return redirect(route('contact.index'))->with('success', 'Contact deleted successfully!');
    }

    public function search_contact(Request $request) {
        return view('contacts.search');
    }

    public function search(Request $request) {
        $query = $request->input('query');
        $result = Contact::where('name', 'like', '%' . $query . '%')->get();
        return redirect(route('contact.index'))->with('success', $result);
    }
}
