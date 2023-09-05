<?php

// 1.YouTube_Thumnail_Generatot

$video_url = "https://youtu.be/vz_BeFHb2aQ?si=cY2PhyJSit7Y9BWj";
function thumbnail($video_url){
    $youtube_Api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
    
    $main_url = explode("?si",$video_url)[0];
    $url_Array = explode('/',$main_url);
    $video_id = end($url_Array);

    $image_url = str_replace("<insert-youtube-video-id-here>", $video_id, $youtube_Api);

    echo '<img src ="'.$image_url.'" ><br>';
}
    thumbnail($video_url);

    // <!-- Validate user file explode method -->

    $file = "test.jpeg.jpg.csv.png.zip";
    $ext = explode(".", $file);
    print_r($ext);

    $ext_1 = explode(".",$file)[3];
    print_r("<br>$ext_1 <br>");
    $ext_2 = explode(".",$file)[5];
    print_r("$ext_2 <br>");
    
    
    if($ext = "csv" && "zip"){
        echo "The file is uploaded.";
    }
    else{
        echo "The file is not uploaded.";
    }
?>
