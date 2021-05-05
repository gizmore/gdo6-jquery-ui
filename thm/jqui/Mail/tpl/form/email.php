<?php
use GDO\Mail\GDT_Email;
use GDO\UI\GDT_Icon;
$field instanceof GDT_Email;
$id = "form_$field->name";
?>
<div class="ui-widget gdt-container<?= $field->classError(); ?>">
  <label for="<?=$id?>"><?= $field->displayLabel(); ?></label>
  <?= GDT_Icon::iconS('email'); ?>
  <input id="<?=$id?>"
   type="email"
   <?=$field->htmlFormName()?>
   value="<?= $field->displayVar(); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?> />
  <?= $field->htmlError(); ?>
</div>
