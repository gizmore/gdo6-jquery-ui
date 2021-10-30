<?php
use GDO\Core\Website;
use GDO\Javascript\Javascript;
use GDO\UI\GDT_Bar;
use GDO\Javascript\Module_Javascript;

/** @var $page GDO\UI\GDT_Page; **/
?>
<!DOCTYPE html>
<html>
  <head>
	<?= Website::displayMeta(); ?>
	<?= Website::displayLink(); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
	<header><?= GDT_Bar::make()->horizontal()->yieldHook('TopBar'); ?></header>
	<div class="gdo-body">
	  <nav id="gdo-left-bar"><?= GDT_Bar::make()->vertical()->yieldHook('LeftBar'); ?></nav>
	  <div class="gdo-main"><?= $page->html; ?></div>
	  <nav id="gdo-right-bar"><?= GDT_Bar::make()->vertical()->yieldHook('RightBar'); ?></nav>
	</div>
	<footer><?= GDT_Bar::make()->horizontal()->yieldHook('BottomBar'); ?></footer>
	<?= Javascript::displayJavascripts(Module_Javascript::instance()->cfgMinifyJS() === 'concat'); ?>
  </body>
</html>
