# Pulse gallery interface
Create a html/css/js gallery and easly integrate it with Pulse CMS.

![Inteface stack position](http://tarqez.github.io/pulsecms-gallery-interface/pgi.jpg)

Save time, keep code clean and maintainable by means of this simple interface.

## Usage
Drop _pgi.php_ in _inc/plugins_ folder of your Pulse installation directory and include it in your gallery plug-in script

    require '/../plugins/pgi.php';  

Instantiate the class

    $myImages = new Gallery($tag_var1, $path);

Use at your disposal the arrays _$myImages->src, $myImages->caption_. A suggestion can help

    for ($i=0; $i < $n; $i++) {
        echo "<img src='{$myImages->src[$i]}' alt='{$myImages->caption[$i]}'>"
    }
