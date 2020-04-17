<?php

use Yimijianfang\Crontab\Http\Controllers\CrontabController;
use Yimijianfang\Crontab\Http\Controllers\CrontabLogController;

Route::resource('crontabs', CrontabController::class);
Route::resource('crontabLogs', CrontabLogController::class);
Route::any('crontabs/checkSchedule', CrontabController::class .'@checkSchedule');