# Pulse gallery interface
Create a html/css/js gallery and easly integrate it with Pulse CMS. Save time, keep code clean and maintainable by means of this simple interface.

![Inteface stack position](http://tarqez.github.io/pulsecms-gallery-interface/pgi.jpg)
## Usage
Drop _pgi.php_ in _inc/plugins_ folder of your Pulse installation directory and include it in your gallery plug-in script

    require '/../plugins/pgi.php';  

Instantiate the class

    $myImages = new Gallery($tag_var1, $path);

Use at your disposal the arrays _$myImages->src, $myImages->caption_. A suggestion can help

    $n = count($myImages->src);
    for ($i=0; $i < $n; $i++) {
        echo "<img src='{$myImages->src[$i]}' alt='{$myImages->caption[$i]}'>"
    }
## Features
* __filter__ all __non png, jpeg, gif__ image files uploaded in the gallery folder
* __arrays are sorted__ according to the drag & drop image ordering feature of Pulse
* __add to the end of arrays__ uploaded and not ordered images
* $myImages->src array __provides full path__ to images, no path-prefix needed
