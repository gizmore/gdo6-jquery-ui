<?php
namespace GDO\JQueryUI;

use GDO\Core\GDO_Module;
use GDO\Core\Module_Core;
use GDO\Core\Application;
use GDO\DB\GDT_EnumNoI18n;
use GDO\DB\GDT_Checkbox;

/**
 * JQueryUI includes and theme.
 * 
 * - Allow switching of jqui theme by a config.
 * - Add auto complete to ObjectCompletion template.
 * - Add auto complete to GDT_Enum.
 *  
 * @author gizmore
 * @version 6.10.1
 * @since 6.6.0
 */
final class Module_JQueryUI extends GDO_Module
{
	##############
	### Module ###
	##############
	public $module_priority = 10;
	
	public function getTheme() { return 'jqui'; }
	public function getDependencies() { return ['JQuery']; }
	public function onLoadLanguage() { return $this->loadLanguage('lang/jqui'); }

	##############
	### Config ###
	##############
	public function getConfig()
	{
		return array(
		    GDT_EnumNoI18n::make('jqui_theme')->initial('ui-lightness')->enumValues(...$this->jquiThemes()),
		    GDT_Checkbox::make('jqui_combobox_enums')->initial('1'),
		);
	}
	public function cfgTheme() { return $this->getConfigVar('jqui_theme'); }
	public function cfgComboboxEnums() { return $this->getConfigValue('jqui_combobox_enums'); }
	
	
	/**
	 * Hardcode all themes from jquery-ui for quick selection.
	 * Could be a user config too :)
	 */
	public function jquiThemes()
	{
		return [
			'black-tie', 'blitzer', 'cupertino', 'dark-hive', 'dot-luv',
			'eggplant', 'excite-bike', 'flick', 'hot-sneaks', 'humanity',
			'le-frog', 'mint-choc', 'overcast', 'pepper-grinder', 'redmond',
			'smoothness', 'south-street', 'start', 'sunny', 'swanky-purse',
			'trontastic', 'ui-darkness', 'ui-lightness', 'vader',
		];
	}
	
	##############
	### Assets ###
	##############
	public function onIncludeScripts()
	{
	    if (Application::instance()->hasTheme('jqui'))
	    {
    	    $min = Module_Core::instance()->jsMinAppend();
	        $this->addBowerJavascript("jquery-ui/jquery-ui$min.js");
	        $this->addBowerJavascript("ddslick/jquery.ddslick$min.js");
	        $this->addBowerJavascript("jquery-ui.combobox/lib/jquery-ui.combobox.js");
	        $theme = $this->cfgTheme();
	        $this->addBowerCSS("jquery-ui.combobox/lib/jquery-ui.combobox.css");
	        $this->addBowerCSS("jquery-ui/themes/$theme/jquery-ui$min.css");
	        $this->addCSS("css/gdo-jqui.css");
    		$this->addJavascript("js/gdo-jqui.js");
    		if ($this->cfgComboboxEnums())
    		{
    		    $this->addJavascript("js/gdo-jqui-combobox-enums.js");
    		}
	    }
	}
	
}
