<?php 
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}

function getIcon(){
    return app()->getLocale() === "en"?'<i class="fal fa-angle-right"></i>':'<i class="fal fa-angle-left"></i>';
}