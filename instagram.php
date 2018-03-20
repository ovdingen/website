<?php
function instaHtml($access_token, $instagram_uid) {
$photo_count=3;
             
$json_link="https://api.instagram.com/v1/users/$instagram_uid/media/recent/?";
$json_link.="access_token=$access_token&count=3";

$json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

$returncontent = "";

foreach ($obj['data'] as $post) {
     
    $pic_text=$post['caption']['text'];
    $pic_link=$post['link'];
    $pic_like_count=$post['likes']['count'];
    $pic_comment_count=$post['comments']['count'];
    $pic_src=str_replace("https://", "https://", $post['images']['standard_resolution']['url']);
    $pic_created_time=date("j F, Y", $post['caption']['created_time']);
    $pic_created_time=date("j F, Y", strtotime($pic_created_time . " +0 days"));
     
    $returncontent .= "<div class='col s4'>";
    $returncontent .= "<a href='{$pic_link}' target='_blank'>";
    $returncontent .= "<img class='responsive-img' src='{$pic_src}' alt='{$pic_text}'>";
    $returncontent .= "</a>";
    $returncontent .= "<p class='light center'>";
    $returncontent .= "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a><br>";
    $returncontent .= "<i class='fas fa-heart red-text'></i> {$pic_like_count}";
    $returncontent .= " | <i class='fas fa-comments'></i> {$pic_comment_count}<br><!--{$pic_text}-->";
    $returncontent .= "</p>";
    $returncontent .= "</div>";
}
return $returncontent;
}
?>
