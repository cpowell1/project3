<?php

Route::get('/', 'IndexController');

Route::get('/info-process', 'DogController@infoProcess');

Route::get('/your-results', 'DogController@infoSubmitted');
