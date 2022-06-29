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

Route::get('/recherche',[App\Http\Controllers\HomeController::class, 'recherche'])->name('recherche');

Route::get('/contact',[App\Http\Controllers\ContactUsController::class, 'contactUs'])->name('contact');

Route::post('/contact',[App\Http\Controllers\ContactUsController::class, 'storeContactForm'])->name('contact.store');

Route::get('/all-categorie',[App\Http\Controllers\AllCategorieController::class, 'allCategorie'])->name('allCat');

Route::get('/all-sub-categorie',[App\Http\Controllers\AllSubCategoryController::class, 'allSubCategorie'])->name('allSubCat');

Route::get('/sub-categorie/{categorie_id}',[App\Http\Controllers\SubCategoryController::class, 'subCategorie'])->name('subCat');

Route::get('/sub-categorie-entreprise/{sousCategorie_id}',[App\Http\Controllers\EntrepriseController::class, 'entreprise'])->name('entreprise');

Route::get('/professionnel',[App\Http\Controllers\ProfilController::class, 'profil'])->name('professionnel');

Route::get('/affaire',[App\Http\Controllers\AffaireController::class, 'affaire'])->name('affaire');

Route::get('/proil-entreprise/{entreprise_id}',[App\Http\Controllers\ProfilEntrepriseController::class, 'profilEntreprise'])->name('profil-entreprise');

Route::post('/proil-entreprise/{entreprise_id}',[App\Http\Controllers\ProfilEntrepriseController::class, 'mail'])->name('profil-entreprise-mail');

//<<<<<<< Alsace-7004

Route::get('login',[App\Http\Controllers\AuthController::class,'login'])->name('UsersLogin');
Route::get('register',[App\Http\Controllers\AuthController::class,'register'])->name('UsersRegister');
Route::get('entreprise',[App\Http\Controllers\EntrepriseController::class,'index'])->name('entreprises');
Route::POST('entreprise',[App\Http\Controllers\EntrepriseController::class,'store'])->name('entreprise.store');
Route::post('authenticate',[App\Http\Controllers\AuthController::class,'authenticate'])->name('authenticate');

Route::get('profile',[App\Http\Controllers\AuthController::class,'userProfile'])->name('user.profile');

Route::get('UserEdit',[App\Http\Controllers\AuthController::class,'userEdit'])->name('user.edit');
Route::put('UserUpdate/{id}/update',[App\Http\Controllers\AuthController::class,'userUpdate'])->name('user.update');
Route::post('logout',[App\Http\Controllers\AuthController::class,'logout'])->name('logout');
Route::post('users',[App\Http\Controllers\AuthController::class,'registerUser'])->name('registerUser');
//=======
Route::post('/entreprise/{id}',[App\Http\Controllers\AvisController::class, 'avis'])->name('entreprise-avis');
//>>>>>>> main
