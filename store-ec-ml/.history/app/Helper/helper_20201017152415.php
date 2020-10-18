<?php 
//make function to get folder css aco
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}

