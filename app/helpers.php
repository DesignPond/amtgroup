<?php

function translate($string){

    if(\Session::get('locale') == 'de'){
        $string = str_replace("Étude","Anwaltskanzlei", $string);
        return str_replace("(ip-legal)","<br>(ip-legal)", $string);
    }

    if(\Session::get('locale') == 'en'){
        return str_replace("Étude","Law firm", $string);
    }

    return $string;
}
