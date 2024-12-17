<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\FullCalenderController;
  
Route::controller(FullCalenderController::class)->group(function(){
    Route::get('fullcalender', 'index');
    Route::post('fullcalenderAjax', 'ajax');
});
