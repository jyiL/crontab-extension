<?php

use Dcat\Admin\Crontab\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::resource('auth/crontabs', Controllers\CrontabController::class);
Route::resource('auth/crontab-logs', Controllers\CrontabLogController::class);
