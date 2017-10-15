<?php /** @var $field \GDO\Date\GDT_Timestamp; **/
$id = 'date_'.$field->name; ?>
<div class="ui-widget gdo-container<?=$field->classError()?>">
  <?=$field->htmlTooltip()?>
  <label for="<?=$id?>"><?=$field->label?></label>
  <?=$field->htmlIcon()?>
  <input
   id="<?=$id?>"
   type="text"
   name="form[<?= $field->name; ?>]"
   value="<?=$field->displayVar()?>" />
  <?=$field->htmlError()?>
</div>
