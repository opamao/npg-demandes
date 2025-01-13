<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SignaturesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/l', function () {
    return view('welcome');
});
Route::get('forgot', function () {
    return view('auth.forgot-password');
});

Route::get('index', function () {
    return view('dashboard.index');
});
Route::get('dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('companies', function () {
    return view('dashboard.companies');
});
Route::resource('customers', CustomersController::class);
Route::get('add-customer', function () {
    return view('customers.add-customer');
});
Route::get('edit-customer', function () {
    return view('customers.edit-customer');
});
Route::get('customer-details', function () {
    return view('customers.customer-details');
});
Route::get('product-list', function () {
    return view('products.product-list');
});
Route::get('add-products', function () {
    return view('products.add-products');
});
Route::get('edit-products', function () {
    return view('products.edit-products');
});
Route::get('category', function () {
    return view('products.category');
});
Route::get('units', function () {
    return view('products.units');
});
Route::get('inventory', function () {
    return view('inventory.inventory');
});
Route::resource('signature-list', SignaturesController::class);
Route::get('invoices', function () {
    return view('invoices.invoices');
});
Route::get('add-invoice', function () {
    return view('invoices.add-invoice');
});
Route::get('edit-invoice', function () {
    return view('invoices.edit-invoice');
});
Route::get('invoice-details', function () {
    return view('invoices.invoice-details');
});
Route::get('invoice-details-admin', function () {
    return view('invoices.invoice-details-admin');
});
Route::get('invoices-paid', function () {
    return view('invoices.invoices-paid');
});
Route::get('invoices-overdue', function () {
    return view('invoices.invoices-overdue');
});
Route::get('invoices-draft', function () {
    return view('invoices.invoices-draft');
});
Route::get('invoices-recurring', function () {
    return view('invoices.invoices-recurring');
});
Route::get('invoices-refunded', function () {
    return view('invoices.invoices-refunded');
});
Route::get('invoices-unpaid', function () {
    return view('invoices.invoices-unpaid');
});
Route::get('invoices-cancelled', function () {
    return view('invoices.invoices-cancelled');
});
Route::get('credit-notes', function () {
    return view('credit.credit-notes');
});
Route::get('quotations', function () {
    return view('quotations.quotations');
});
Route::get('add-quotations', function () {
    return view('quotations.add-quotations');
});
Route::get('edit-quotations', function () {
    return view('quotations.edit-quotations');
});
Route::get('delivery-challans', function () {
    return view('quotations.delivery-challans');
});
Route::get('add-delivery-challans', function () {
    return view('quotations.add-delivery-challans');
});
Route::get('edit-delivery-challans', function () {
    return view('quotations.edit-delivery-challans');
});
Route::resource('users', UsersController::class);
Route::get('roles-permission', function () {
    return view('users.roles-permission');
});
Route::get('permission', function () {
    return view('users.permission');
});
Route::get('delete-account-request', function () {
    return view('users.delete-account-request');
});
Route::get('free-report', function () {
    return view('repports.free-report');
});
Route::get('gadget-report', function () {
    return view('repports.gadget-report');
});
Route::get('order-report', function () {
    return view('repports.order-report');
});
Route::get('delivery-report', function () {
    return view('repports.delivery-report');
});
Route::get('profile', function () {
    return view('profile.profile');
});
Route::get('settings', function () {
    return view('profile.settings');
});

Route::fallback(function () {
    return response()->view('layouts.error-404');
});

Route::post('language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');
