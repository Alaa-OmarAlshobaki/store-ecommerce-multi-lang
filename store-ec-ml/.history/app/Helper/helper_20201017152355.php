<?php 
//
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}

