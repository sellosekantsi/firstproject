<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    protected $tutor;

    public function __construct()
    {
        $this->tutor = new Tutor();
    }

    /**
     * Display a listing of the tutors.
     */
   public function index()
{
    $tutors = $this->tutor->paginate(10);
    return view('pages.index', compact('tutors'));
}

    /**
     * Show the form for creating a new tutor.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created tutor in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date|',
            'phone' => 'required|string|max:255',
        ]);

        $tutor = $this->tutor->create($validatedData);
        return redirect()->route('tutor.show', $tutor->id)
            ->with('success', 'Tutor created successfully.');
    }

    /**
     * Display the specified tutor.
     */
    public function show(string $id)
    {
        $tutor = $this->tutor->findOrFail($id);
        return view('pages.show', compact('tutor'));
    }

    /**
     * Show the form for editing the specified tutor.
     */
    public function edit(string $id)
    {
        $tutor = $this->tutor->findOrFail($id);
        return view('pages.edit', compact('tutor'));
    }

    /**
     * Update the specified tutor in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tutor,email,' . $id,
            'subject' => 'required|string|max:255',
            'hourly_rate' => 'required|numeric|min:0',
        ]);

        $tutor = $this->tutor->findOrFail($id);
        $tutor->update($validatedData);
        return redirect()->route('totur.show', $tutor->id)
            ->with('success', 'Tutor updated successfully.');
    }

    /**
     * Remove the specified tutor from storage.
     */
    public function destroy(string $id)
    {
        $tutor = $this->tutor->findOrFail($id);
        $tutor->delete();
        return redirect()->route('tutor.index')
            ->with('success', 'Tutor deleted successfully.');
    }
}