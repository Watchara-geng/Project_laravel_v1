<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\AuthController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::prefix('auth')->group(function () {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::get('refresh', 'AuthController@refresh');
    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('user', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');
    });
});/*

//Route::apiResource('teachers', ApiTeacherController::class);
//Route::resource('teachers', [App\Http\Controllers\Api\ApiTeacherController::class, 'index']);
//Route::apiResource('teachers', App\Http\Controllers\Api\ApiTeacherController::class);
/*Route::get('login',function(){
    abort(401);
})->name('login');

Route::post('login',function(){
    $cretentails = request()->only(['email','password']);
    if (!auth()->validate($cretentails)){
        abort(401);
    }else{
        $User = User::where('email',$cretentails['email'])->first();
        $User->tokens()->delete();
        $token = $User->createToken('postman');
        return response()->json(['token'=>$token->plainTextToken]);
    }

});

Route::group(['middleware' =>'auth:sanctum'],function(){

    Route::apiResource('teachers', ApiTeacherController::class);
    Route::apiResource('papers', ApiPaperController::class);
});
*/
Route::apiResource('teachers', ApiTeacherController::class);
Route::apiResource('papers', ApiPaperController::class);
Route::apiResource('scopus', ApiScopusController::class);
