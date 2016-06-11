# Pulse photo interface
Easly create a gallery plug-in based on _Pulse Photo functionality (back-end uploading, re-sorting and captioning)_ with this interface that provides php sorted arrays of photos and captions.

Save time, keep code clean and personalize your gallery focusing mostly on the html/css/js part.

![Inteface stack position](http://tarqez.github.io/pulsate/interface.jpg)
## Usage
Drop _pupin.php_ in _inc/plugins_ folder of your Pulse installation directory and include it in your gallery plug-in php script

    require './inc/plugins/pupin.php';  

Instantiate the class

    $myImages = new Gallery($tag_var1, $path);

Develop the plug-in considering at your disposal the php arrays _$myImages->src, $myImages->caption_. A suggestion can help

    $n = count($myImages->src);
    for ($i=0; $i < $n; $i++) {
        echo "<img src='{$myImages->src[$i]}' alt='{$myImages->caption[$i]}'>"
    }
## Features
* __filters__ all __non png, jpeg, gif__ image files uploaded in the gallery folder
* __arrays are sorted__ according to the drag & drop image sorting feature of Pulse
* __adds to the end of arrays__ uploaded and not ordered images
* $myImages->src array __provides full path__ to images, no path-prefix needed
