# Pulsate

Empower [Pulse CMS](https://pulsecms.com) with this simple PHP interface that gives you direct access to images of a gallery when creating a new custom tag.

Drop __pulsate.php__ file inside __inc/plugins__ folder of your installation directory, afterward start writing your custom tag plug-in with these two lines of code to get access to ordered arrays of images and captions.

    require_once './inc/plugins/pulsate.php';  
    $myImages = new Gallery($tag_var1, $path);
    
    // later in your plug-in code, make use of the arrays
    // $myImages->src
    // $myImages->caption

Easily create your plug-in focusing mostly on the _HTML/CSS/js_ part. Save time, keep code clean and make beautiful your gallery thanks to Pulsate interface.

Once your tag is ready, use the Pulse Admin panel to name the gallery and manage its images such as uploading, re-sorting and captioning them, later put that name in the custom tag.

Take a look at what [plug-ins](http://www.pulsate.eu) you can realize.

## Features
* filters out **non-** png, jpeg and gif files contained in the gallery folder
* sorts arrays according to the order given to the gallery
* adds to the array end images uploaded and not sorted
* **$myImages->src** array provides a full path to images, no path-prefix needed
