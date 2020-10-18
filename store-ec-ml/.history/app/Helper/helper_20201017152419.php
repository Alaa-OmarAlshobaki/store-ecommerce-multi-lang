<?php 
//make function to get folder css acording 
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}

