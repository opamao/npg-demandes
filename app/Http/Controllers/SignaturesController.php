<?php

namespace App\Http\Controllers;

use App\Models\Signatures;
use Illuminate\Http\Request;

class SignaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $signature = Signatures::all();

        return view('signature.signature-list', compact('signature'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles = [
            'libelle' => 'required',
            'signature' => 'required',
        ];
        $customMessages = [
            'libelle.required' => __('messages.libelle_signature'),
            'signature.required' => __('messages.charge_signature'),
        ];
        $request->validate($roles, $customMessages);

        $fileSignatureExtension = $request->file('signature')->getClientOriginalName();
        $imageSignature = 'signature_logo_' . time() . '_' . $fileSignatureExtension;
        $request->file('signature')->move(public_path('/signatures'), $imageSignature);

        $signature = new Signatures();
        $signature->signature_name = $request->libelle;
        $signature->signature = $imageSignature;

        if ($signature->save()) {
            return back()->with('succes',  __('messages.success_signature') . $request->libelle);
        } else {
            return back()->withErrors([__('messages.errors_signature')]);
        }
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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $signe = Signatures::findOrFail($id);
        $imagePath = public_path('signatures/'.$signe->signature);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $signe->delete();

        return back()->with('succes', __('messages.delete_signature'));
    }
}
