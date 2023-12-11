<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Goat;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/goats', function() {
    return Goat::all();
});

Route::get('/goat/{id}', function($id) {
    return Goat::find($id);
});

Route::post('/goats', function() {

    //request()->validate([
    $validator = Validator::make(request()->all(), [
        'price' => 'required|integer',
        'name' => 'required|min:5|max:25',
        'color' => 'required',
        'birthday'=> 'required|date',
    ]);

    if ($validator->fails())  {
        return response()->json([
            'message' => $validator->messages()
        ], 422);
    }

    $g=new Goat();
    $g->name = request()->name;
    $g->price = request()->price;
    $g->color = request()->color;
    $g->sex = request()->sex == 'Mr.' ? true : false ;
    $g->birthday = request()->birthday;
    $g->user_id = request()->user_id;
    $g->save();

    return response()->json([
        'message' => 'Goat created'
    ], 201);
});