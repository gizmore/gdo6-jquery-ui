<?php /** @var $field \GDO\Date\GDT_DateTime **/
$id = 'date_'.$field->name; ?>
<div class="ui-widget gdo-container<?=$field->classError()?>">
  <label for="<?=$id?>"><?=$field->displayLabel()?></label>
  <?=$field->htmlIcon()?>
  <input
   id="<?=$id?>"
   type="datetime"
   <?=$field->htmlFormName()?>
   value="<?=$field->displayVar()?>" />
  <?=$field->htmlError()?>
</div>
