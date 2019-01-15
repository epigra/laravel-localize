<?php


Route::get('locale/{locale}', function ($locale) {

    if (!in_array($locale, config('app.locales')))
        return redirect()->back()->withErrors("No language");

    session()->put('locale', $locale);
    app()->setLocale($locale);

    return redirect()->back();
})->name('locale');
