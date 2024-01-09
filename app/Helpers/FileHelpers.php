<?php
namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileHelpers
{
    public static function fileUpdate($page, Request $request)
    {
        $originalName = $request->file('filepath')->getClientOriginalName();
        $extension = $request->file('filepath')->getClientOriginalExtension();
        $words = explode(' ', pathinfo($originalName, PATHINFO_FILENAME));
        $uniqueWords = array_unique($words);
        $cleanFileName = implode(' ', $uniqueWords);
        $file_name = Str::slug($cleanFileName) . '-' . time() . '.' . $extension;
        
        if(isset($file_name)){
            $dir = "uploads/".$file_name;
        }
        else
        {
            $dir = "uploads/".$file_name;
        }
        // Store the image only if a file is provided
        $file = $request->file('filepath')->storeAs($dir);

        return $file;
    }
}