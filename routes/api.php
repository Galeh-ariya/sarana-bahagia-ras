<?php

use App\Http\Controllers\Api\NSFPController;
use App\Http\Controllers\Api\SuratJalanController;
use App\Http\Resources\DatatableCollection;
use App\Http\Resources\DatatableResource;
use App\Models\NSFP;
use Illuminate\Http\Request;
use App\Http\Resources\SuratJalanCollection;
use App\Models\SuratJalan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('generate-nsfp', [NSFPController::class, 'generate'])->name('api.nsfp.generate');
Route::get('/nsfpcolection', [NSFPController::class,'data'])->name('nsfp.data');


Route::post('/surat_jalan', [SuratJalanController::class, 'dataTable'])->name('suratJalan.data');
