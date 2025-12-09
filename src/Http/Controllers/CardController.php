<?php

namespace Whitecube\NovaPage\Http\Controllers;

use Illuminate\Routing\Controller;
use Whitecube\NovaPage\Pages\Manager;
use Laravel\Nova\Http\Requests\NovaRequest;
use Illuminate\Http\JsonResponse;

class CardController extends Controller
{

    /**
     * List the cards for the given resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Manager $manager, NovaRequest $request): JsonResponse
    {
        return response()->json($manager->availableCards($request));
    }

}
