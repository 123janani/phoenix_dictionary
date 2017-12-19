<?php
    include "simple_html_dom.php";

   $html = file_get_html('http://www.fb.com/');

// Find all images 
foreach($html->find('img') as $element) 
       echo $element->src . '<br>';

// Find all links 
foreach($html->find('a') as $element) 
       echo $element->href . '<br>';
    $image_count = 10; //Enter the amount of images to be shown
    $i = 0;
    
    foreach($images as $image){
        if($i == $image_count) break;
        $i++;
        // DO with the image whatever you want here (the image element is '$image'):
        echo $image;
    }
