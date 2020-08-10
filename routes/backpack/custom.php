<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('blog', 'BlogCrudController');
    Route::crud('buyrequest', 'BuyrequestCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('company', 'CompanyCrudController');
    Route::crud('investment', 'InvestmentCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('subcategory', 'SubcategoryCrudController');
    Route::crud('tag', 'TagCrudController');
}); // this should be the absolute last line of this file