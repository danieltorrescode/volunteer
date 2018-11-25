<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ActivitiesRequest;
use App\Activity;
use App\Community;
use Faker\Factory as Faker;

class ActivitiesController extends Controller
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
      /*
      FACILITA LA OBSERVACION DE LOS CAMPOS CREADOS POR FAKER
      $faker = Faker::create();
      echo $faker->name;
      echo $faker->company;
      echo $faker->sentence($nbWords = 6, $variableNbWords = true);
      exit();
      */
      $activity = Activity::with('communities','volunteers')->orderBy('id', 'ASC')->paginate(5);
			// dd($activity);
      return view('activities.index')->with('activities', $activity);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('activities.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ActivitiesRequest $request)
  {
      //
      // dd($request->all());

      $activity = new Activity($request->all());
      $response = $activity->save();
      return redirect()->action('ActivitiesController@index');;

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
			$activity = Activity::find($id);
      $activity_communities = Activity::find($id)->communities;
			// dd($activity_communities);
			$communities = Community::get();
			$context = [
				'activity'=>$activity,
				'activity_communities'=>$activity_communities,
				'communities'=>$communities
			];

      return view('activities.edit')->with($context);
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
      // dd(Community::find($request->communities));
      $activity = Activity::find($id);
      //$activity->fill($request->all());    Hace lo mismo que los 3 de abajo
      $activity->name = $request->name;
      $activity->description = $request->description;
			$activity->save();

			$activity->communities()->detach();
			$communities = Community::find($request->communities);

			if($communities){
				$activity->communities()->saveMany($communities);
			}

      return redirect()->route('activities.index');

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
      $activity = Activity::find($id);
      $activity->delete();
      return redirect()->route('activities.index');
  }
}
