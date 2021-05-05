<?php /** @var $field \GDO\DB\GDT_Int **/ ?>
<div class="ui-widget gdt-container<?= $field->classError(); ?>">
  <?= $field->htmlIcon(); ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <input
   type="number"
   <?=$field->htmlFormName()?>
   <?= $field->htmlDisabled(); ?>
   <?= $field->htmlRequired(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   step="<?= $field->step; ?>"
   value="<?= $field->getVar(); ?>" />
  <?= $field->htmlError(); ?>
</div>
