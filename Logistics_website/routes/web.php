<?php

use Illuminate\Support\Facades\Route;
use App\Http\Contrllers\shipmentController;

Route::get('/', function () {return view ('pages.home');});

//Backend

Route::get('/feedback', function () { return view('Back-end.feedback');});

Route::get('/shipment', function () {return view('Back-end.Shipment');});

//end of backend


//Additional

Route::get('/ship', function () { return view('additional.ship');});

Route::get('/plane', function () {return view('additional.plane');});

Route::get('/Transport', function () {return view('additional.Transportation');});

Route::get('/Truck', function () {return view('additional.Truck');});

//end of Additional


//Sub pages

Route::get('/about', function () { return view('sub_pages.About');});

Route::get('/service', function () {return view('sub_pages.service');});

Route::get('/members', function () {return view('sub_pages.ourpeople');});

Route::get('/career', function () { return view('sub_pages.career');});

Route::get('/faq', function () {return view('sub_pages.faq');});

Route::get('/contact', function () {return view('sub_pages.contact');});

//End of sub pages

//Services

Route::get('/truck', function () { return view('Services.trucking');});

Route::get('/air', function () { return view('Services.airtransportation');});

Route::get('/marine', function () { return view('Services.marine');});

Route::get('/moving', function () {return view('Services.moving');});

Route::get('/shipping', function () {return view('Services.shipping');});

Route::get('/transport', function () { return view('Services.transportation');});

//End of services




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
