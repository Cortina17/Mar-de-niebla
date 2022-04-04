<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ResourceCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['resources'] = Resource::orderBy('id', 'desc')->paginate(5);
        return view('resources.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile("img")) {
            $file = $request->file("img");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("img/"), $imageName);

            $resource = new Resource([

                $user = Auth::user()->id,
                $location = Location::all(),
                $location->id = $request->location,

                "name" => $request->name,
                "description" => $request->description,
                "img" => $imageName,
                "user_id" => $user,
                "location_id" => $location->id,

            ]);
        }
        $resource->save();

        return redirect('home')
            ->with('success', 'Resource has been created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource = Resource::find($id);
        return view('show', compact('resource'));

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
    }


    public function destroy(Resource $resource)
    {
        $resource->reservas()->delete();
        $resource->delete();
        $message = 'El recurso "' . $resource->name . '" ha sido borrado con éxito';
        Session::flash('message', $message);
        return redirect()->route('dashboard');
    }
}
