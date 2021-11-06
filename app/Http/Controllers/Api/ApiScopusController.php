<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\User;
class ApiScopusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$teacher = Teacher::all()->makeHidden(['created_at','updated_at']);;
        //return response()->json($teacher);
        $user = User::with('Paper')->get();
        //$user = [1,2,3];
        //return response()->json($user);
        return TeacherResource::collection($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = User::findOrFail($id);
        return new TeacherResource($teacher);

    }
    /*public function show(User $user)
    {
        return response()->json($user);
        //$teacher = Teacher::with('Paper')->findOrFail($teacher);
        //return $User;
        //return TeacherResource::collection($teacher);
    }*/

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
