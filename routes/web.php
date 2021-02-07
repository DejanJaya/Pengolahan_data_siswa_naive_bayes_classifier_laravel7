<?php

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


Route::get('/', 'SiteController@home');
Route::get('/register', 'SiteController@register');
Route::post('/postregister', 'SiteController@postregister');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

	Route::get('/siswa', 'SiswaController@index');
	// Route::post('/siswa/create', 'SiswaController@create');
	// Route::get('/siswa/edit/{siswa}', 'SiswaController@edit');
	// Route::post('/siswa/update/{siswa}', 'SiswaController@update');
	Route::get('/siswa/delete/{siswa}', 'SiswaController@delete');
	Route::post('/siswa/import', 'SiswaController@importexcel')->name('siswa.import');
	Route::get('/siswa/datanilai', 'SiswaController@datanilai');
	Route::post('/nilai/import', 'NilaiController@importexcel')->name('nilai.import');
	Route::get('/perhitungan/1516', 'PerhitunganController@perhitungan1516');
	Route::get('/perhitungan/1617', 'PerhitunganController@perhitungan1617');
	Route::get('/perhitungan/1718', 'PerhitunganController@perhitungan1718');
	Route::get('/perhitungan/1819', 'PerhitunganController@perhitungan1819');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,kepsek']], function () {
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/siswa/analisisnilai', 'SiswaController@analisisNilai');
	Route::get('/siswa/analisisnilai1617', 'SiswaController@analisisNilai1617');
	Route::get('/siswa/analisisnilai1718', 'SiswaController@analisisNilai1718');
	Route::get('/siswa/analisisnilai1819', 'SiswaController@analisisNilai1819');
	Route::get('/rekap/ratarata', 'RekapController@rata2nilai');
	Route::get('/rekap/minmax', 'RekapController@tinggirendah');
	Route::get('/rekap/nilai', 'RekapController@nilai');
	Route::get('/rekap/probabilitas', 'RekapController@probabilitas');
	Route::get('/rekap/jk', 'RekapController@jk');
});

Route::group(['middleware' => ['auth', 'checkRole:siswa']], function () {
	Route::get('/profilsaya', 'SiswaController@profilsaya');
});

Route::get('getdatasiswa', [
	'uses' => 'SiswaController@getdatasiswa',
	'as' => 'ajax.get.data.siswa',
]);

Route::get('/{slug}', [
	'uses' => 'SiteController@singlepost',
	'as' => 'site.single.post'
]);
