<?php /** @var $field \GDO\DB\GDT_Int **/ ?>
<div class="ui-widget gdo-container<?= $field->classError(); ?>">
  <?= $field->htmlIcon(); ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->label; ?></label>
  <input
   type="number"
   name="form[<?= $field->name; ?>]"
   <?= $field->htmlDisabled(); ?>
   <?= $field->htmlRequired(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   step="<?= $field->step; ?>"
   value="<?= $field->getVar(); ?>" />
  <?= $field->htmlError(); ?>
</div>
