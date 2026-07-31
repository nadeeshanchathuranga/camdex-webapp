<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApplyNowController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'communication_medium' => 'required|in:english,sinhala',
        ]);

        $lmsUrl = rtrim(config('services.lms.url'), '/') . '/student/register';

        try {
            $response = Http::withHeaders([
                'X-API-Key' => config('services.lms.key'),
            ])->acceptJson()->timeout(15)->post($lmsUrl, $validated);
        } catch (ConnectionException $e) {
            Log::error('LMS student registration unreachable', ['message' => $e->getMessage()]);

            return response()->json([
                'status' => 'error',
                'message' => 'We could not reach the application service. Please try again shortly.',
            ], 502);
        }

        if ($response->status() === 422) {
            return response()->json([
                'status' => 'error',
                'errors' => $response->json('errors', []),
            ], 422);
        }

        if ($response->failed()) {
            Log::error('LMS student registration failed', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'We could not submit your application right now. Please try again shortly.',
            ], 502);
        }

        return response()->json([
            'status' => 'success',
            'message' => "Thanks! Your application has been received — we'll be in touch shortly.",
        ], 201);
    }
}
