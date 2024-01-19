<?php
namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileHelpers
{
    public static function fileUpdate(Request $request)
    {
        $originalName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();
        $words = explode(' ', pathinfo($originalName, PATHINFO_FILENAME));
        $uniqueWords = array_unique($words);
        $cleanFileName = implode(' ', $uniqueWords);
        $file_name = Str::slug($cleanFileName) . '-' . time() . '.' . $extension;
        // Your condition here to determine the folder based on your criteria
        if(isset($file_name)) {
            $dir = "uploads/".$file_name;        }
        else
        {
            $dir = "uploads/".$file_name;
        }

        // Store the image only if a file is provided
        $file = $request->file('image')->storeAs($dir);
        
        return $file;
    }
}