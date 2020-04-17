<?php

use ArrowJustDoIt\Crontab\Http\Controllers\CrontabController;
use ArrowJustDoIt\Crontab\Http\Controllers\CrontabLogController;

Route::resource('crontabs', CrontabController::class);
Route::resource('crontabLogs', CrontabLogController::class);
Route::any('crontabs/checkSchedule', CrontabController::class .'@checkSchedule');