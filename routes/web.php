<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\siteController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Backend\CertificateController;
use App\Http\Controllers\Backend\CountDownController;
use App\Http\Controllers\Backend\courseController;
use App\Http\Controllers\Backend\sliderController;
use App\Http\Controllers\Backend\galleryController;
use App\Http\Controllers\Backend\messageController;
use App\Http\Controllers\Backend\noticeController;
use App\Http\Controllers\Backend\TeacherController;
use App\Http\Controllers\Frontend\certifiController;
use App\Http\Controllers\Frontend\CourseController as ForntendCourseController;

Route::get('/', function () {
    return view('welcome');
});

/*
** Forntend Route
*/

Route::get('/', [siteController::class, 'index'])->name('home');
Route::get('/download', [siteController::class, 'download'])->name('download');
Route::get('/gallery', [siteController::class, 'gallery'])->name('gallery');
Route::get('/notice', [siteController::class, 'notice'])->name('notice');
Route::get('/single-notice/{id}', [siteController::class, 'single_notice'])->name('single-notice');
Route::get('/about-us', [siteController::class, 'about_us'])->name('about');
Route::get('/single-techer/{id}', [siteController::class, 'single_teacher'])->name('single-teacher');
Route::get('/contact-us', [siteController::class, 'contact'])->name('contact');
Route::post('/contact-form', [siteController::class, 'contact_form'])->name('contact-form');
