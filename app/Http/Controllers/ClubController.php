<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Club;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator as Paginator;

class ClubController extends Controller {

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$currentPage = 1;
		$totalPerPage = 10;

		// force current page to 5
		
		$input = $request->all();
		$q = Club::query();
	/*	
		if(!empty($input['apodo']))
		{
		 $q->where('apodo','like','%'.$input['apodo'].'%');
        }
     */
		if(!empty($input['page']))
		{
		 $currentPage = $input['page'];
		}
		Paginator::currentPageResolver(function() use ($currentPage) {
		    return $currentPage;
		});
		$clubs = $q->orderBy('id','asc')->paginate($totalPerPage);
		$count = $clubs->count();
	
		return view('clubs.index', compact('clubs','count','current'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clubs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
	   $this->validate($request, [
	    'nombre' => 'required|unique:clubs|alpha|max:50',
	    'ubicacion' => 'required|alpha|max:50',
	    'categoria' => 'required|string|max:50',
        'fechanacimiento' => 'required|date|before:today',
//	    'avatar' => 'mimes:jpeg,bmp,png,svg|between:1,2000',
	    'biografia' => 'string',
	    'URL' => 'url|max:255'
	   ]);
		$club = new Club();

		$club->nombre           = $request->input("nombre");
		$club->ubicacion        = $request->input("ubicacion");
		$club->categoria        = $request->input("categoria");
        $club->fechaNacimiento  = $request->input("fechanacimiento");
		$club->biografia        = $request->input("biografia");
		$club->url              = $request->input("URL");


//		$club->imagen           = $request->file('avatar')->store('avatars');

		$club->save();

		return redirect()->route('clubs.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$club = Club::findOrFail($id);

		return view('clubs.show', compact('club'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$club = Club::findOrFail($id);

		return view('clubs.edit', compact('club'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
	   $this->validate($request, [
	    'nombre' => 'required|alpha|max:50',
            'fechanacimiento' => 'required|date|before:today'
	   ]);
		$club = Club::findOrFail($id);

		$club->nombre = $request->input("nombre");
        $club->fechaNacimiento = $request->input("fechanacimiento");

		$club->save();

		return redirect()->route('clubs.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$club = Club::findOrFail($id);
		$club->delete();

		return redirect()->route('clubs.index')->with('message', 'Item deleted successfully.');
	}

}
