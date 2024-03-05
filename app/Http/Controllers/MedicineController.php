<?php

namespace App\Http\Controllers;

use App\Models\Madicine;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $madicines = Madicine::all();
        return Inertia::render(
            'Madicine/Index',
            [
                'madicines' => $madicines
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render(
            'Madicine/Create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required'
        ]);
        Madicine::create([
            'name' => $request->title,
            'category_id' => $request->content
        ]);
        sleep(1);

        return redirect()->route('blogs.index')->with('message', 'Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Madicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Madicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Madicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $medicine = Madicine::findOrFail($id);
    $test = $medicine->delete();
    // dd($test);

    return redirect()->route('madicine.index')->with('message', 'Medicine deleted successfully');
}
}
