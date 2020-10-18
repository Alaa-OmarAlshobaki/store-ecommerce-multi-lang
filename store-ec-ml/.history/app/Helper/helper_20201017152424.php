<?php 
//make function to get folder css according 
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}

