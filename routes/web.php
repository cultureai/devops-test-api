<?php

use App\Models\TestValue;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

Route::get('api/secret', function (): JsonResponse {
    return response()->json([
        'secret' => TestValue::query()->value('value'),
    ]);
});