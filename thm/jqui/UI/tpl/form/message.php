<?php /** @var $field \GDO\UI\GDT_Message **/ ?>
<div class="ui-widget gdt-container<?= $field->classError(); ?>">
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <?= $field->htmlIcon(); ?>
  <textarea
   <?=$field->htmlFormName()?>
   rows="6"
   maxRows="6"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>><?= $field->display(); ?></textarea>
  <?= $field->htmlError(); ?>
</div>
