<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Resources\Meson;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;

class MesonController extends BaseController
{
    public function getUserMesons(){
        $user = auth('api')->user();
        $mesons = $user->mesons;
        return $this->sendResponse(new Meson($mesons), 'Mesons Gotten successfully.');

    }
}
