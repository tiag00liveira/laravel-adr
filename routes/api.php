<?php

// use Illuminate\Http\Request;

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('/users', App\Modules\User\Actions\CreateUserAction::class);
Route::get('/users', App\Modules\User\Actions\ListUserAction::class);
