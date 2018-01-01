<?php /** @var $field \GDO\Date\GDT_Timestamp; **/
$id = 'date_'.$field->name; ?>
<div class="ui-widget gdo-container<?=$field->classError()?>">
  <label for="<?=$id?>"><?=$field->label?></label>
  <?=$field->htmlIcon()?>
  <input
   id="<?=$id?>"
   type="datetime"
   name="form[<?= $field->name; ?>]"
   value="<?=$field->displayVar()?>" />
  <?=$field->htmlError()?>
</div>
