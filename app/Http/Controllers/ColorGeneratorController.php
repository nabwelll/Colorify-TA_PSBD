<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ColorGeneratorController extends Controller
{
    public function index()
    {
        return view('color-generator');
    }

    public function generatePalette(Request $request)
    {
        try {
            $color = $request->color;
           
            if (!preg_match('/^#[a-fA-F0-9]{6}$/', $color)) {
                return response()->json([
                    'error' => 'Invalid color format. Please use hex color (e.g. #EB3DAE)',
                ], 400);
            }

            // Get color name first
            $colorNameUrl = 'https://palettespro.com/api/v1/color-name';
            $colorNameResponse = Http::withoutVerifying()->get($colorNameUrl, [
                'color' => $color
            ]);

            if (!$colorNameResponse->successful()) {
                throw new \Exception('Failed to fetch color name');
            }

            $colorData = $colorNameResponse->json();
            $colorLabel = $colorData['closest_color']['label'] ?? 'Unknown Color';

            // Then get the palette
            $paletteUrl = 'https://palettespro.com/api/v1/gradient-stops';
            $paletteResponse = Http::withoutVerifying()->get($paletteUrl, [
                'color' => $color,
                'count' => 11
            ]);
           
            if (!$paletteResponse->successful()) {
                throw new \Exception('Failed to fetch palette');
            }
           
            $paletteData = $paletteResponse->json();
           
            return response()->json([
                'palette' => $paletteData['to_dark'] ?? [],
                'colorName' => $colorLabel
            ]);
        } catch (\Exception $e) {
            \Log::error('Palette generation error: ' . $e->getMessage());
            return response()->json([
                'error' => 'An error occurred while generating the palette.',
            ], 500);
        }
    }
}