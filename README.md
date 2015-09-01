ActivateFrontEnd-StarterKit
===========================

One Page or Mini-Site

This is the perfect starter-kit to build **responsive** mini-sites and templates.

### Technologies
* Bootstrap 3.3.5 (August 2015)
* Font Awesome 4.4.0 (August 2015)
* jQuery 1.1.13 (August 2015)
* LESS

### File system
It follows the templating model so the single pages are page-name.php files, and the sections are php file located in the **tpl** (template) folder (eg. ind.head.php, inc.header.php, inc.navigation.php, inc.footer.php, etc) which in general are common for all the static pages.

### Optimization
Use the **config.php** file to store content such as title, metadata, links, etc.
The **compiler.php** file handle the generation of the CSS (from LESS) and minified JavaScript code. If you want to add a new *.js file, you have to add the filename to the array called $ugilyjs located in compiler.php

### Requirements
[lessc](http://lesscss.org) and [uglifyjs](https://github.com/mishoo/UglifyJS2) are two requirements if you want to take advantade of the compiler functionality. You can turn the compiler off just deleting the file and the include statements if you want to handle the CSS/JS code in a different way.

