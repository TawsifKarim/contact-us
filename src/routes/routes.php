<?php

Route::group(['namespace' => 'Tawsif\Contact\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('/contact-us', ['uses' => 'ContactController@contactUs', 'as' => 'contact_us.show_form']);
    Route::post('/contact-us', ['uses' => 'ContactController@saveMessage', 'as' => 'contact_us.save_message']);
});
