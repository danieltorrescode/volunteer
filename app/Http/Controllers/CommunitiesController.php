<?php

namespace App\Http\Controllers;

use App\Community;
use App\Activity;
use Illuminate\Http\Request;

class CommunitiesController extends Controller
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
      $community = Community::with('activities')->orderBy('id', 'ASC')->paginate(5);

      return view('communities.index')->with('communities', $community);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('communities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			// dd($request->all());
      $community = new Community($request->all());
      $response = $community->save();
      return redirect()->action('CommunitiesController@index');
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
			$community = Community::find($id);
			$activities = Activity::get();
			$context = [
				'community'=>$community,
				'activities'=>$activities
			];

			// dd($community->pivot);

      return view('communities.edit')->with($context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
			$community = Community::find($id);
			//$community->fill($request->all());
			// dd($request->all());
			// dd($activity);

      $community->name = $request->name;
      $community->lider_name = $request->lider_name;
      $community->lider_phone = $request->lider_phone;
      $community->direction = $request->direction;
      $community->description = $request->description;
			$community->save();
      return redirect()->route('communities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			//
      $community = Community::find($id);
      $community->delete();
      return redirect()->route('communities.index');
    }
}
