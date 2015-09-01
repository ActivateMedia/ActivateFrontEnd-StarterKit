ActivateFrontEnd-StarterKit
===========================

One Page or Mini-Site

This is the perfect starter-kit to build **responsive** mini-sites and templates.

### Technologies (all libs updated on August 2015)
* Bootstrap 3.3.5
* Font Awesome 4.4.0
* jQuery 1.1.13
* Animate.css
* LESS

### File system
It follows the templating model so the single pages are page-name.php files, and the sections are php file located in the **tpl** (template) folder (eg. ind.head.php, inc.header.php, inc.navigation.php, inc.footer.php, etc) which in general are common for all the static pages.

### Optimization
Use the **config.php** file to store content such as title, metadata, links, etc.
The **compiler.php** file handle the generation of the CSS (from LESS) and minified JavaScript code. If you want to add a new *.js file, you have to add the filename to the array called $ugilyjs located in compiler.php

#### Images
Use lazy images and try to reduce the quality of jpg using Photoshop Save for Web & png with transparency with [ImageAlpha](http://pngmini.com).

#### Bootstrap
**Disable** the LESS @import in /less/bootstrap-3.3.5/bootstrap.less that **you do not need.** Also **disable** the bootstrap JavaScript files import in compiler.php that **you do not need.**

#### Animations
The project includes Animate.css and a custom jQuery function to trigger the animations.
```
toggleAnimation(target, animationName);
```
```
$(function(){
  $('#button').click(function(e){ 
    toggleAnimation('#button', 'shake');
  });
});
```

#### htaccess
Use the **.htaccess** to optimize the content delivery. Apache modules required: *mod_headers.c*, *mod_expires.c*, *mod_deflate.c*.

#### robots.txt
The default robots.txt file will disallow Search Engines to index the website. Leave this on the development server/domain but **remember to delete it on the live site**.

#### Favicon
Use http://realfavicongenerator.net to generate the multi device favicons. (See tpl/inc.head.favicons.php).

-------

### Requirements
[lessc](http://lesscss.org) and [uglifyjs](https://github.com/mishoo/UglifyJS2) are two requirements if you want to take advantade of the compiler functionality. You can turn the compiler off just deleting the file and the include statements if you want to handle the CSS/JS code in a different way.
