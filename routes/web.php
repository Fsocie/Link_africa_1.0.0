<?php

use App\Http\Controllers\AllCategorieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact',[App\Http\Controllers\ContactUsController::class, 'contactUs'])->name('contact');
Route::get('/all-categorie',[App\Http\Controllers\AllCategorieController::class, 'allCategorie'])->name('allCat');
Route::get('/all-sub-categorie',[App\Http\Controllers\AllSubCategoryController::class, 'allSubCategorie'])->name('allSubCat');
Route::get('/sub-categorie/{categorie_id}',[App\Http\Controllers\SubCategoryController::class, 'subCategorie'])->name('subCat');
Route::get('/sub-categorie-entreprise/{sousCategorie_id}',[App\Http\Controllers\EntrepriseController::class, 'entreprise'])->name('entreprise');
Route::get('/emploi-togo',[App\Http\Controllers\ProfilController::class, 'profil'])->name('emploi');
Route::get('/affaire',[App\Http\Controllers\AffaireController::class, 'affaire'])->name('affaire');
Route::get('/proil-entreprise/{entreprise_id}',[App\Http\Controllers\ProfilEntrepriseController::class, 'profilEntreprise'])->name('profil-entreprise');
