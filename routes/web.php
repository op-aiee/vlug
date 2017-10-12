<?php

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'guest.home']);
