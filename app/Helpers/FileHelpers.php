<?php
namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileHelpers
{
    public static function fileUpdate(Request $request)
    {
        // Check if a file is provided in the request
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $originalName = $request->file('image')->getClientOriginalName();
            $extension = $request->file('image')->getClientOriginalExtension();
            $words = explode(' ', pathinfo($originalName, PATHINFO_FILENAME));
            $uniqueWords = array_unique($words);
            $cleanFileName = implode(' ', $uniqueWords);
            $file_name = Str::slug($cleanFileName) . '-' . time() . '.' . $extension;

            // Determine the directory based on your criteria
            $dir = "uploads/" . $file_name;

            // Store the image
            $file = $request->file('image')->storeAs($dir);

            return $file;
        } else {
            // Handle the case where no valid file is provided
            return null;
        }
    }
}