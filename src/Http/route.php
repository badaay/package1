<?php

// Route::get('package1', function(){
// 	return "here is My Todo List";
// });
Route::get('package1', 'baday\package1\Http\Controller\Package1Controller@index');