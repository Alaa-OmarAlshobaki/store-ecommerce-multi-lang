<?php 
//make function to get folder css according language
function getFolder(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}
//make function to get folder bootstrap according language
function getFolderBootstrap(){
    return app()->getLocale() === "en"?'css':'css_rtl';
}
//make function to get folder bootstrap according language
function getFolderPlugins(){
    return app()->getLocale() === "en"?'plugins':'plugins_rtl';
}


//make constance to paginate
define('PAGINATION_COUNT',15);