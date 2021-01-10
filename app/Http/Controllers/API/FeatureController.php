<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\Feature;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;

class FeatureController extends BaseController
{
    public function getCategoryFeatures($cat_id){
        $features = Category::find($cat_id)->features;
        return $this->sendResponse(new Feature($features), 'Features Gotten successfully.');

    }
}
