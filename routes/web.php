<?php

use App\Http\Controllers\ContactController;
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

 Route::get('/clear',function(){
        //\Artisan::call('key:generate');
        \Artisan::call('route:clear');
        \Artisan::call('cache:clear');
    });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

// Route::get('/contact-us', function () {
//     return view('contact');
// })->name('contact');

Route::group(['prefix' => "treatment"], function () {
    Route::get('/joint-pain', function () {
        return view('treatment.joint-pain'); //treatmeant/abc//joint-pain
    })->name('joint_pain');

    Route::get('/arthroscopy-surgery', function () {
        return view('treatment.arthroscopy-surgery');
    })->name('arthroscopy_surgery');

    Route::get('/joint-pain-clinic', function () {
        return view('treatment.joint-pain-clinic');
    })->name('joint_pain_clinic');

    Route::get('/trauma-fracture-surgery', function () {
        return view('treatment.trauma-fracture-surgery');
    })->name('trauma_fracture_surgery');

    
    Route::get('/spine-surgery', function () {
        return view('treatment.spine-surgery');
    })->name('spine_surgery');

 
    Route::get('/joint-replacement-surgery', function () {
        return view('treatment.joint-replacement-surgery');
    })->name('joint_replacement_surgery');

    Route::get('/sports-injuries', function () {
        return view('treatment.sports-injuries');
    })->name('sports_injuries');
    
    Route::get('/knee-replacement', function () {
        return view('treatment.knee-replacement');
    })->name('knee-replacement');
    Route::get('/hip-replacement', function () {
        return view('treatment.hip-replacement');
    })->name('hip-replacement');

});


// Route::group(['prefix' => "gallery"], function () {
    Route::get('gallery', function () {
        return view('gallery'); 
    })->name('gallery');
    
    Route::get('Clinic', function () {
        return view('clinic'); 
    })->name('clinic');
    
    Route::get('testimonials', function () {
        return view('testimonials'); 
    })->name('testimonials');

   

// });
//Route::get('/signin', 'SigninController@abc');



Route::get('/demo', function () {

    echo "hello words";

});

Route::post('/test', function () {


    echo "hello new words";
});
Route::any('/test', function () {


    echo "hello new words";
});
Route::any('/test/new', function () {


    return view('demo');
});
Route::any('/speciality/ortho', function () {


    return view('ortho');
});



Route::any('/speciality/eye/cornea', function () {

    return view('opthal');
});
Route::any('/hair/prp', function () {
    return view('hairprp');
});

Route::get('book-appointment', function () {
    return view('book-appointment');
})->name('book-appointment');

//Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');
Route::get('/book-appointment',[ContactController::class, 'bookAppointment'])->name('book-appointment');
Route::get('/contact-us',[ContactController::class, 'viewForm'])->name('contact');
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');
