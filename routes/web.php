<?php

use Illuminate\Support\Facades\Route;

Route::get('/change-locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'et'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});

Route::livewire('/', 'home-page')->name('home');
Route::livewire('/about', 'about-page')->name('about');
Route::livewire('/services', 'services-page')->name('services');
Route::livewire('/products', 'products-page')->name('products');
Route::livewire('/team', 'team-page')->name('team');
Route::livewire('/contact', 'contact-page')->name('contact');
