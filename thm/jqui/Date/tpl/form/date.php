<?php /** @var $field \GDO\Date\GDT_Date **/
$id = 'date_'.$field->name; ?>
<div class="ui-widget gdt-container<?=$field->classError()?>">
  <label for="<?=$id?>"><?=$field->displayLabel()?></label>
  <?=$field->htmlIcon()?>
  <input
   id="<?=$id?>"
   type="text"
   <?=$field->htmlFormName()?>
   value="<?=$field->displayVar()?>" />
  <?=$field->htmlError()?>
</div>
