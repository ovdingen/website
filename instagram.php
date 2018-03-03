<?php
$photo_count=3;
             
$json_link="https://api.instagram.com/v1/users/$instagram_uid/media/recent/?";
$json_link.="access_token=$access_token&count=3";

$json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

foreach ($obj['data'] as $post) {
     
    $pic_text=$post['caption']['text'];
    $pic_link=$post['link'];
    $pic_like_count=$post['likes']['count'];
    $pic_comment_count=$post['comments']['count'];
    $pic_src=str_replace("https://", "https://", $post['images']['standard_resolution']['url']);
    $pic_created_time=date("j F, Y", $post['caption']['created_time']);
    $pic_created_time=date("j F, Y", strtotime($pic_created_time . " +0 days"));
     
    echo "<div class='col s4'>";        
        echo "<a href='{$pic_link}' target='_blank'>";
            echo "<img class='responsive-img' src='{$pic_src}' alt='{$pic_text}'>";
        echo "</a>";
        echo "<p class='light center'>";
            echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a><br>";
            echo "<i class='fas fa-heart red-text'></i> {$pic_like_count}";
            echo " | <i class='fas fa-comments'></i> {$pic_comment_count}<br><!--{$pic_text}-->";
        echo "</p>";
    echo "</div>";
}
?>