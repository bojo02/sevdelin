<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PartnerVideoController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ReachController;
use App\Http\Controllers\QuestionController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::post('/presentation', [PageController::class, 'presentation'])->name('presentation');

Route::post('/subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe');

Route::get('/unsubscribe/{id}', [SubscribeController::class, 'unsubscribe'])->name('unsubscribe');

Route::get('/partner', [PageController::class, 'partner'])->name('partner');

Route::get('/unhappy', [PageController::class, 'unhappy'])->name('unhappy');

Route::post('reaches/store/found', [ReachController::class, 'storeFound'])->name('reachStore');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [PageController::class, 'admin_dashboard'])->name('dashboard');

    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/home/edit', [AdminController::class, 'editHome'])->name('home.edit');

    Route::post('/home/store', [AdminController::class, 'homeStore'])->name('home.store');

    Route::get('/presentation/edit', [AdminController::class, 'presentationEdit'])->name('presentation.edit');

    Route::post('/presentation/store', [AdminController::class, 'presentationStore'])->name('presentation.store');

    Route::get('/unhappy/edit', [AdminController::class, 'unhappyEdit'])->name('unhappy.edit');

    Route::post('/unhappy/store', [AdminController::class, 'unhappyStore'])->name('unhappy.store');

    Route::get('/partner/edit', [AdminController::class, 'partnerEdit'])->name('partner.edit');

    Route::post('/partner/store', [AdminController::class, 'partnerStore'])->name('partner.store');

    Route::get('reaches/on', [ReachController::class, 'on'])->name('reaches.on');

    Route::get('reaches/off', [ReachController::class, 'off'])->name('reaches.off');

    Route::get('reaches/founds/destroy', [ReachController::class, 'destroyAllData'])->name('destroy.all.data');

    Route::resource('reaches', ReachController::class);

    Route::get('export', [EmailController::class, 'export'])->name('export');

    Route::resource('regions', RegionController::class);

    Route::resource('locations', LocationController::class);

    Route::resource('rates', RateController::class);

    Route::resource('video', VideoController::class);

    Route::resource('partner-video', PartnerVideoController::class);

    Route::resource('promotions', PromotionController::class);

    Route::resource('questions', QuestionController::class);
});

require __DIR__.'/auth.php';

Route::get('/register', function(){
    return redirect(route('login'));
})->name('register');

Route::get('/home', function(){
    return redirect(route('dashboard'));
});

