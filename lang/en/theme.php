<?php
use Illuminate\Support\Facades\Auth;

$path = resource_path('themes/');
//$theme = $path.'theme1.php';

if(Auth::user()){
    $theme_file = Auth::user()->theme??'theme1';
    $ptof = $path.$theme_file.'.php';
    if (file_exists($ptof)) {
        return (include $ptof);
    }
}
