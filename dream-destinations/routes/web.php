<?php

use App\Http\Controllers\DestinationController;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;

Route::get('/', [DestinationController::class, 'index']);
