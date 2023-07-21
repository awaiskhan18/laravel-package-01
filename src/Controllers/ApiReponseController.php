<?php

namespace Awaisahmadkhan200\ApiResp\Controllers;

use App\Http\Controllers\Controller;

class ApiReponseController extends Controller
{

    public function greeting()
    {
        return 'Hi, this is your awesome package!!!!';
    }

    public function greeter($sal)
    {
        return 'Hi '.$sal.',';
    }
}
