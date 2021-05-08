# gdo6-jquery-ui
jQueryUI Theme and Includes for the gdo6 framework. Can be used without theme.

## Installation
Follow the gdo6 install guide on https://github.com/gizmore/gdo6.
Install this module as usual.

    cd gdo6/GDO/
    git clone --recursive https://github.com/gizmore/gdo6-jquery-ui JQueryUI
    
Pull asset dependencies via bower. The jqui Yarn module does not ship with themes.

    cd gdo6/
    ./gdo_bower.sh
     
Install the module via admin panel or installer cli,

    cd gdo6/
    ./gdo_install.sh module JQueryUI
    ./gdo_install.sh config JQueryUI theme dark
    
Configure the theme in your application config.php (optional)

    define('GDO_THEMES', 'jqui,default');
    
### Dependencies
This module has JQuery dependencies. https://github.com/gizmore/gdo6-jquery

    git clone --recursive https://github.com/gizmore/gdo6-jquery JQuery

### License
This module is licensed under the MIT license.


#### Enjoy!
gizmore
    