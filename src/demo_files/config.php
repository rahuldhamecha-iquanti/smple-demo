<?php
session_start();
$currentCampaign = 'hilton_bau_q1_2024';
$d_path = get_template_directory_uri() . '/'.$currentCampaign;

$urlPath = array_filter(explode("/",parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)));
$page_url = intval(end($urlPath));
if(is_int($page_url)){
    $page_url = $page_url == 0 ? 1 : $page_url;
}
else{
    header('Location: ' . get_site_url() . '/hilton-404');
    exit();
}

global $post;
$post_slug = $post->post_name;

$test_url = intval($page_url) + 1;

$query = $_SERVER['QUERY_STRING'];
$queryDisect01 = explode("&", $query);
$queryDisect = str_replace('%25', '%', $queryDisect01);
$adobe_mc = $queryDisect[0];
$v1 = $queryDisect[1];
if (!empty($adobe_mc)) {
    $eidInject = '?' . $adobe_mc . '&' . $v1;
} else {
    $eidInject = '';
}

//check for domain
$server = $_SERVER['HTTP_HOST'] === "apply.americanexpress.com" ? "" : "stage/";
$findURL = $_SERVER['HTTP_HOST'] === "apply.americanexpress.com" ? true : false ;

?>