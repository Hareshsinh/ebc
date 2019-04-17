<?php
Route::group(['middleware' => 'web'], function () {
    Route::resource('ebusinesscard', 'vcian\ebusinesscard\EBusinessCardController');
});
