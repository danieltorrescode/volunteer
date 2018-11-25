<?php

namespace App\Http\Controllers;

use App\Volunteer;
use App\Activity;
use Illuminate\Http\Request;
use App\Http\Requests\VolunteersRequest;
class VolunteersController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			// dd(Activity::find(2)->volunteers);
			// dd(Volunteer::find(1)->activity_data);
			$volunteers = Volunteer::with('activity_data')->orderBy('id', 'ASC')->paginate(5);
      return view('volunteers.index')->with('volunteers', $volunteers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolunteersRequest $request)
    {
			$volunteer = new Volunteer($request->except(['password_confirmation']));
      $response = $volunteer->save();
      return redirect()->action('VolunteersController@index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
			$volunteer = Volunteer::with('activity_data')->find($id);
			$activities = Activity::get();
			$context = [
				'volunteer'=>$volunteer,
				'activities'=>$activities
			];

      return view('volunteers.edit')->with($context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VolunteersRequest $request, $id)
    {
			//dd($id);
      $volunteer = Volunteer::find($id);
      //$volunteer->fill($request->all());    Hace lo mismo que los 3 de abajo
      $volunteer->firstName = $request->firstName;
      $volunteer->lastName = $request->lastName;
      $volunteer->email = $request->email;
      // $volunteer->password = $request->password;
			$volunteer->description = $request->description;
      $volunteer->activity = $request->activity;
      $volunteer->save();
      return redirect()->route('volunteers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			$volunteer = Volunteer::find($id);
      $volunteer->delete();
      return redirect()->route('volunteers.index');
    }
}
