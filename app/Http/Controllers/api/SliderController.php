<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResource;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SliderController extends Controller
{
    public function index() {
        $sliders = Slider::query()->get();
        return new ApiResource($sliders);
    }
}
