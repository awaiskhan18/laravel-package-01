<?php

use awaisahmadkhan200\ApiResp\Controllers\ApiReponseController as ARC;


Route::get('greeting', [ARC::class, 'greeting']);
Route::get('greeter/{sal?}', [ARC::class, 'greeter']);

