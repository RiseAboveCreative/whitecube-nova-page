<?php

namespace Whitecube\NovaPage\Http\Controllers\Option;

use Illuminate\Routing\Controller;
use Whitecube\NovaPage\Pages\Manager;
use Laravel\Nova\Http\Requests\ResourceIndexRequest;
use Illuminate\Http\JsonResponse;

class CountController extends Controller
{
    /**
     * Get the resource count for a given query.
     *
     * @param  \Laravel\Nova\Http\Requests\ResourceIndexRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(ResourceIndexRequest $request, Manager $manager): JsonResponse
    {
        return response()->json([
            'count' => $manager->queryResourcesCount($request, 'option')
        ]);
    }
}
