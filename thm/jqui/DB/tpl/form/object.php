<?php /** @var $field \GDO\DB\GDT_Object **/ ?>
<div class="gdt-container<?= $field->classError(); ?>">
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <?= $field->htmlIcon(); ?>
  <input
   type="number"
   step="1"
   <?=$field->htmlFormName()?>
   value="<?= $field->displayVar(); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?> />
  <?= $field->htmlError(); ?>
</div>
