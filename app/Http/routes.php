<?php

Route::get('/', 'LaravelCont@anasayfa');

Route::get('/hakkimizda', 'LaravelCont@hakkimizda');

Route::get('/iletisim', 'LaravelCont@iletisim');

Route::get('/parametreDenemesi/{id?}', 'LaravelCont@parametreDenemesi');
