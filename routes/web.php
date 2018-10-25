<?php

Route::get('/', 'IndexController');

Route::get('/{name}', 'DogController@info');
