<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BuildingController extends Controller
{
    public function index()
    {
        $data['buildings'] = Building::all();

        return view('portal.building.index', $data);
    }

    public function create()
    {
        return view('portal.building.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $building = new Building();
        $building->name = $request['name'];
        $building->save();

        Session::flash('success', 'Added');
        return redirect()->route('portal.building.index');
    }

    public function show(Building $building)
    {
        return view('portal.building.show', compact('building'));
    }

    public function edit(Building $building)
    {
        return view('portal.building.edit', compact('building'));
    }

    public function update(Request $request, Building $building)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $building->name = $request['name'];
        $building->save();

        Session::flash('success', 'Updated');
        return redirect()->route('portal.building.index');
    }

    public function destroy(Building $building)
    {
        $building->delete();

        Session::flash('success', 'Deleted');
        return redirect()->back();
    }
}
