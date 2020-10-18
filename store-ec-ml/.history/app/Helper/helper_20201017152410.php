<?php 
//make function to get folder 
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}

