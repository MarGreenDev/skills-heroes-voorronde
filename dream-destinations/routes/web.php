<?php

use App\Http\Controllers\DestinationController;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;

Route::get('/', [DestinationController::class, 'index']);

Route::get('/destination/{destination}', function (Destination $destination) {
    return view('destination', [
        'destination' => $destination
    ]);
})->name('destination');
