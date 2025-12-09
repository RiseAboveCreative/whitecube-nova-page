<?php

namespace Whitecube\NovaPage\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\JsonResponse;

class FilterController extends Controller
{

    /**
     * List the actions for the given resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(collect());
    }

}
