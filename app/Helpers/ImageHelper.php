<?php
function getImagePath($image_path) {
    if (substr($image_path, 0, strlen("https://via.placeholder.com")) === "https://via.placeholder.com") {
        return $image_path;
    } else {
        return env("APP_IMAGE_PATH")  . "/storage/" . $image_path;
    }
}
?>