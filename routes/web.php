<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
  return view('welcome');
});

Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified',
])->group(function () {
  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard')->middleware('subscribed');
});

Route::get('/subscribe', function (Request $request) {
  $checkout = $request->user()->currentTeam->checkout('')
    ->returnTo(route('dashboard'));

  return view('subscribe', ['checkout' => $checkout]);
})->name('subscribe');
