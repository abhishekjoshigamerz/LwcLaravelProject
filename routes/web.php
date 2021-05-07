<?php

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

Route::any('/', 'HomeController\HomeController@index');
Route::any('/aboutus','HomeController\HomeController@about');
Route::any('/convertpdf','AdminController\AdminController@convertfiletoHtml');
Route::any('/team','HomeController\HomeController@team');

//Route::any('/comics/{id}','HomeController\HomeController@languageresult');
//Route::any('/comics/{subject}/comiccollection','HomeController\HomeController@comicscollection');
Route::any('/class','HomeController\HomeController@class');
Route::any('/class/{class}','HomeController\HomeController@languageresult');


Route::any('/classes/class5','HomeController\HomeController@class5pdf');
Route::any('/class5getlanguage/{id}','HomeController\HomeController@class5pdflanguage');
Route::any('/comics/{class}/{subject}','HomeController\HomeController@languageresult');
Route::any('/class/{class}/{subject}/{language}/{subsubject}','HomeController\HomeController@comicscollection');
Route::any('/classes/class5/{subject}/{language}/','HomeController\HomeController@comicscollection2');
Route::any('/comicread/{comictitle}','HomeController\HomeController@readcomicpage');
Route::any('/downloadcomics','HomeController\HomeController@downloadcomics');
Route::any('/contactus','HomeController\HomeController@contactus');
Route::any('/buildinpublic','HomeController\HomeController@buildinpublic');
Route::post('/sendmessage','HomeController\HomeController@sendmessage');
Route::any('/search','HomeController\HomeController@searchresult');


Route::any('/resources/students','HomeController\HomeController@studentresources');
Route::any('/resources/teachers','HomeController\HomeController@teacherresources');
//Front end routes

Route::any('/videotocomics/{class}','HomeController\HomeController@videotocomics');
Route::any('/videotocomics/{class}/{subject}/{language}/{subsubject}','HomeController\HomeController@videotocomics2');
Route::any('/comicread/pdfcomics/readpdfcomics/likes/{id}','HomeController\HomeController@likeadder');
Route::any('comicread/pdfcomics/videotocomics/likes/{id}','HomeController\HomeController@likeaddervideotocomics');
Route::any('/talkingcomics','TalkingComicsController\TalkingComicsController@showfront');

Route::get('comicread/pdfcomics/{pdfcomicsname}','HomeController\HomeController@viewpdf');
//AdminPanel Routes

Route::get('/videotocomics','HomeController\HomeController@videotoc');

Route::get('/videotocomics/{class}/{comics}','HomeController\HomeController@showvideotocomics');


//for quiz

Route::any('quiz','QuizController\QuizController@showfront');
Route::any('quizgetsubject/{class}','QuizController\QuizController@getsubject');
Route::any('quizgetlanguage/{class}/{subject}','QuizController\QuizController@showlanguage');

Route::any('quizgetlanguage/{class}/{subject}/{language}','QuizController\QuizController@showlessons');

Route::any('quiz/{class}/{subject}/{language}/{lesson}','QuizController\QuizController@showquiz');





Route::any('adminpanelroute/login', 'LoginController\LoginController@index');

Route::post('adminpanelroute/verification','LoginController\LoginController@CheckLogin');

Route::middleware(['CheckLogin'])->group(function () {
    Route::any('adminpanel/dashboard','AdminController\AdminController@index');

    Route::any('adminpanel/uploadpdfcomics','AdminController\AdminController@uploadpdf');
    Route::any('adminpanel/createpdf','AdminController\AdminController@createpdf');

    Route::any('adminpanel/deletepdf/{$id}','AdminController\AdminController@deletepdf');

    Route::any('adminpanel/comics','AdminController\AdminController@showcomics');
    Route::any('adminpanel/addcomics','AdminController\AdminController@addcomics');
    Route::post('adminpanel/createcomics','AdminController\AdminController@store');
    Route::any('adminpanel/deletecomics/{id}','AdminController\AdminController@destroy');
    
    Route::any('adminpanel/viewpdfcomics','AdminController\AdminController@viewcomics');
    Route::any('adminpanel/deletepdfcomics/{id}','AdminController\AdminController@pdfdestroy');
    
    Route::any('adminpanel/importpdf','ImportController\ImportController@index');
    Route::post('adminpanel/importpdf/import','ImportController\ImportController@import');
    Route::any('adminpanel/editpdfcomics/{id}','AdminController\AdminController@editpdfcomics');

    Route::post('adminpanel/updatepdfcomics','AdminController\AdminController@editpdfcomicstore');
    //Ajax for dynamic subject options

    Route::any('/adminpanel/ajax/subject/{id}','AdminController\AdminController@myformAjax');

    //Adding class
    Route::any('adminpanel/class','ClassController\ClassController@index');
    Route::any('adminpanel/addclass','ClassController\ClassController@create');
    Route::post('adminpanel/addclass/store','ClassController\ClassController@store');
    Route::any('adminpanel/deleteclass/{id}','ClassController\ClassController@destroy');

    //Adding subject
    Route::any('adminpanel/subject','SubjectController\SubjectController@index');
    Route::any('adminpanel/addsubjects','SubjectController\SubjectController@create');
    Route::post('adminpanel/addsubject/store','SubjectController\SubjectController@store');
    Route::any('adminpanel/deletesubject/{id}','SubjectController\SubjectController@destroy');

    Route::any('adminpanel/v2c','VideoToController\VideoToController@index');
    Route::any('adminpanel/v2cadd','VideoToController\VideoToController@create');
    Route::post('adminpanel/v2cimports','ImportController\ImportController@importvideoToComics');

    Route::any('adminpanel/v2cedit/{id}','VideoToController\VideoToController@edit');
    Route::post('adminpanel/v2ceditstore','VideoToController\VideoToController@update');

    Route::post('adminpanel/v2cmassdelete','VideoToController\VideoToController@massdelete');
    Route::any('adminpanel/v2cdelete/{id}','VideoToController\VideoToController@destroy');
    //
    Route::post('adminpanel/multiplerecordsdelete','AdminController\AdminController@multipledelete');
    //Adding Quiz Page
    Route::any('adminpanel/quiz','QuizController\QuizController@index');

    Route::any('adminpanel/importquiz/import','QuizController\QuizController@store');
    Route::any('adminpanel/deletequiz/{id}','QuizController\QuizController@destroy');

    Route::any('adminpanel/talkingcomics','TalkingComicsController\TalkingComicsController@index');
    Route::any('adminpanel/importtalkcomics/import','TalkingComicsController\TalkingComicsController@store');
    Route::any('adminpanel/deletetalkcomics/{id}','TalkingComicsController\TalkingComicsController@destroy');

});


Route::any('logout','LoginController\LoginController@logout');
