<?php

// Get a list of all the video files in the 'videos' directory
$videos = glob('uploads/*.{MP4,mp4}', GLOB_BRACE);

// Loop through the list of videos and embed each one in the page
foreach ($videos as $video) {
    echo '<video src="'.$video.'" style="position: ; top: 50px; left: 50px;" width="640" height="360" controls>';
    echo 'Your browser does not support the video tag.';
    echo '</video><br>';
}

?>
