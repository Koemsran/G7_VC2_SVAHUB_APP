<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        return view('setting.fields.index', compact('fields'));
    }

    public function create()
    {
        return view('setting.fields.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'field_name' => 'required|string|max:255',
            'field_location' => 'required|string|max:255',
            'field_type' => 'required|string|max:255',
            'field_size' => 'required|integer',
            'number_of_players' => 'required|integer',
            'lighting_availability' => 'required|string|max:255',
        ]);

        Field::create($request->all());

        return redirect()->route('admin.fields.index')->with('success', 'Field created successfully.');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $field = Field::findOrFail($id);
        return view('admin.fields.edit', compact('field'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'field_name' => 'required|string|max:255',
            'field_location' => 'required|string|max:255',
            'field_type' => 'required|string|max:255',
            'field_size' => 'required|string|max:255',
            'number_of_players' => 'required|integer',
            'lighting_availability' => 'required|boolean',
        ]);

        $field = Field::findOrFail($id);
        $field->update($request->all());

        return redirect()->route('admin.fields.index')->with('success', 'Field updated successfully');
    }



    public function destroy($id)
    {
        $field = Field::findOrFail($id);
        $field->delete();

        return redirect()->route('admin.fields.index')->with('success', 'Field deleted successfully.');
    }
}
