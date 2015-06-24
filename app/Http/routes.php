<?php

Route::get('/', function()
{
    return view('index');
});

Route::get('login/{name}', function($name)
{
    auth()->logout();

    $name = ucfirst(strtolower($name));

    $user = App\User::where('name', $name)->firstOrFail();

    auth()->login($user);

    return redirect()->back();
});

Route::get('logout', function()
{
    auth()->logout();

    return redirect()->back();
});

Route::get('page/backend', [
    'middleware' => 'role:admin',
    function()
    {
        return view('page');
    }
]);

Route::get('page/administration', [
    'middleware' => 'role:admin,manager',
    function()
    {
        return view('page');
    }
]);

Route::get('page/work', [
    'middleware' => 'role:staff,manager',
    function()
    {
        return view('page');
    }
]);

Route::get('page/member', [
    'middleware' => 'role:member',
    function()
    {
        return view('page');
    }
]);
