<?php
// specify the URL of the HTML directory
$url = "data/";

// get the contents of the directory
$dir_contents = scandir($url);

// filter out non-HTML files and dot directories
$html_files = array_filter($dir_contents, function($file) {
  return preg_match('/\.html$/', $file) && !in_array($file, ['.', '..']);
});

// choose a random HTML file to load and delete
$random_file = $html_files[array_rand($html_files)];
$random_file_path = $url . $random_file;

// get the contents of the file
$file_contents = file_get_contents($random_file_path);

// output the contents of the file
echo $file_contents;

// delete the file from the directory
unlink($random_file_path);
?>