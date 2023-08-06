<?php
    namespace App\Lib;
    
    use Illuminate\Support\Facades\Storage;

    class My_func {
        public static function Donwload() {
            $file_path = 'public/malware.exe';
            $file_name = 'malware.exe';

            $mimeType = Storage::mimeType($file_path);
            $headers = [['Content-Type' => $mimeType]];
            return Storage::download($file_path, $file_name, $headers);
        }
    }