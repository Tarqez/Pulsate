# Pulse photo interface
Easly create a gallery plug-in based on Pulse Photo functionality (back-end uploading, re-sorting and captioning) with this interface that provides php sorted arrays of photos and captions.

Save time, keep code clean and personalize your gallery focusing only on the html/css/js part.

![Inteface stack position](http://tarqez.github.io/pulse-photo-interface/pgi.jpg)
## Usage
Drop _pupin.php_ in _inc/plugins_ folder of your Pulse installation directory and include it in your gallery plug-in script

    require './inc/plugins/pupin.php';  

Instantiate the class

    $myImages = new Gallery($tag_var1, $path);

Use at your disposal the sorted arrays _$myImages->src, $myImages->caption_. A suggestion can help

    $n = count($myImages->src);
    for ($i=0; $i < $n; $i++) {
        echo "<img src='{$myImages->src[$i]}' alt='{$myImages->caption[$i]}'>"
    }
## Features
* __filter__ all __non png, jpeg, gif__ image files uploaded in the gallery folder
* __arrays are sorted__ according to the drag & drop image sorting feature of Pulse
* __add to the end of arrays__ uploaded and not ordered images
* $myImages->src array __provides full path__ to images, no path-prefix needed
