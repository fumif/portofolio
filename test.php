<?php
$filetype = wp_check_filetype('image.jpg');
echo $filetype['ext']; // will output jpg
?>