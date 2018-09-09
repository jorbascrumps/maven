<?php

if (!function_exists('thumbnail'))
{
    function thumbnail ($path)
    {
        $fullPath = public_path($path);
        $fileParts = (object) pathinfo($fullPath);
        $data = base64_encode(file_get_contents("$fileParts->dirname/{$fileParts->filename}_thumb.$fileParts->extension"));

        return "data:image/$fileParts->extension;base64,$data";
    }
}
