<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaperResource;
use App\Models\Paper;
use Illuminate\Http\Request;
use App\Models\User;
class ApiPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paper = Paper::with('Author')->get();
        //$user = [1,2,3];
        //return response()->json($user);
        return PaperResource::collection($paper);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$paper = new Paper;
        $paper->paper_name = $request->get('paper_name');
        $paper->paper_type = $request->get('paper_type');;

        $paper->save();

        $user = User::findOrFail($request->user_id);
        $paper->teacher()->attach($user);

        return 'Success';*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$paper = Paper::findOrFail($id);
        /*$teacher = User::findOrFail($id);
        $teacher =$teacher->paper;
        return response()->json($teacher);*/
        $paper = Paper::findOrFail($id);
        return new PaperResource($paper);
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
        //
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
    }
}
