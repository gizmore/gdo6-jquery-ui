<?php
namespace GDO\JQueryUI;

use GDO\Core\GDO_Module;
use GDO\Core\Module_Core;
use GDO\DB\GDT_Enum;

/**
 * JQueryUI includes and theme.
 * - Allow switching of jqui theme by a config.
 * - Add auto complete to ObjectCompletion template.
 * 
 * @author gizmore
 * @since 6.06
 * @version 6.06
 */
final class Module_JQueryUI extends GDO_Module
{
	##############
	### Module ###
	##############
    public $module_priority = 10;
    
    public function getThemes() { return ['jqui']; }

    ##############
    ### Config ###
    ##############
    public function getConfig()
    {
    	return array(
    		GDT_Enum::make('jqui_theme')->initial('ui-lightness')->enumValues(...$this->jquiThemes()),
    	);
    }
    public function cfgTheme() { return $this->getConfigVar('jqui_theme'); }
    
    
    /**
     * Hardcode all themes from jquery-ui for quick selection.
     * Could be a user config too :)
     */
    public function jquiThemes()
    {
    	return array(
			'black-tie', 'blitzer', 'cupertino', 'dark-hive', 'dot-luv',
    		'eggplant', 'excite-bike', 'flick', 'hot-sneaks', 'humanity',
    		'le-frog', 'mint-choc', 'overcast', 'pepper-grinder', 'redmond',
    		'smoothness', 'south-street', 'start', 'sunny', 'swanky-purse',
    		'trontastic', 'ui-darkness', 'ui-lightness', 'vader',
    	);
    }
    
    ##############
    ### Assets ###
    ##############
    public function onIncludeScripts()
    {
        $min = Module_Core::instance()->cfgMinifyJS() === 'no' ? '' : '.min';
        $theme = $this->cfgTheme();
        $this->addBowerCSS("jquery-ui/themes/$theme/jquery-ui$min.css");
        $this->addBowerJavascript("jquery-ui/jquery-ui$min.js");
        $this->addBowerJavascript("ddslick/jquery.ddslick$min.js");
        
        $this->addCSS("css/gdo-jqui.css");
        $this->addJavascript("js/gdo-jqui.js");
    }
    
}
