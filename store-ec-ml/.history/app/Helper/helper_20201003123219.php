<?php 
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}

function getIcon(){
    return app()->getLocale()
}