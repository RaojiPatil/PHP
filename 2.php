<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Feed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 


$fields = "media_url";
$token = "IGQVJWYmVCSFl3M0NDeGVnN0ZAiM1RvTTZAwT1k2Q1hxd2JtaEpYWWJSeUcySHpWN0ZAJcHdSLXNxY2VKRFg2d1JEZADFWVC0xZAVdveGpqRS1mdVI5RGNBenRoS1Y3WkVFZAXVlTkdnX0U1MFVGSFdYenA5NwZDZD";
$limit = 8;
$json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
$json_feed = file_get_contents($json_feed_url);
$contents = json_decode($json_feed, 512);


foreach($contents["data"] as $post){
    $media_url = isset($post["media_url"]) ? $post["media_url"] :"";
    echo "<div class='post_container'>
            <div>";
            echo "<img src='{$media_url}' />";
           echo "</div>
        </div> ";
}


?>
</body>
</html>