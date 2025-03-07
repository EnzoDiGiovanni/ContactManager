<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'first_name' => 'required|string|max:255',
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', Rule::unique('contacts', 'email')],
                'phone' => 'required|string|max:255',
                'entreprise' => 'string|max:255',
            ],
        );



        $contact = Contact::create($validated);

        return redirect()->route('contacts.index')->with('status', "Un contact a été crée !");
    }

    /**
     * Display the specified resource.
     */

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact("contact"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate(
            [
                'first_name' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('contacts', 'email')->ignore($contact),
                ],
                'phone' => 'required|string|max:255',
                'entreprise' => 'string|max:255'
            ],
        );


        $contact->update($validated);


        return redirect()->route('contacts.index')->with('status', "Contact modifié !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('status', "Contact supprimé !");
    }
}