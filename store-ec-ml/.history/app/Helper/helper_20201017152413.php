<?php 
//make function to get folder css ac
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}

