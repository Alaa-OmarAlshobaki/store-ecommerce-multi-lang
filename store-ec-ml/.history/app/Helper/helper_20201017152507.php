<?php 
//make function to get folder css according language
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}

//make constance to pag

