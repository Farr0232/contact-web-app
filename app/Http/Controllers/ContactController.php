<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
/**
 * Summary of ContactController
 */
class ContactController extends Controller
{
    public function index () {
        $contacts = Contact::all();
        $sort = $contacts->sortBy([
            ['last_name', 'asc']
        ]);
        $sort->values()->all();

        $search = request('search');
        if ($search) {
            $sort = Contact::where('first_name', 'like', "%{$search}%")
            ->orWhere('last_name', 'like', "%{$search}%")
            ->get();
        } else {
            $contacts = Contact::all();
        }

        return view('contact', ['contacts' => $sort]);
    }
    
    public function view ($id) {
        $contact = Contact::find($id);
        return view('details', ['contacts' => $contact]);
    }

    public function store () {
        $contacts = new Contact();
        $contacts->first_name = request('first_name');
        $contacts->last_name = request('last_name');
        $contacts->email = request('email');
        $contacts->save();

        return redirect('/');

    }


    public function destroy ($id) {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/');
    }

    public function edit ($id) {
        $contact = Contact::find($id);

        return view('edit', ['contact' => $contact]);

    }

    public function update ($id) {
        $contact = Contact::find($id);
        $contact->first_name = request('first_name');
        $contact->last_name = request('last_name');
        $contact->email = request('email');

        $contact->save();

        return redirect("/contacts/{$contact->id}");
    }
}
