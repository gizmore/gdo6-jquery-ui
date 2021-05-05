<?php /** @var $field \GDO\UI\GDT_Color **/ ?>
<div class="gdt-container<?= $field->classError(); ?>">
  <?= $field->htmlIcon(); ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <input
   type="color"
   <?=$field->htmlFormName()?>
   value="<?= html($field->getVar()); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>/>
  <?= $field->htmlError(); ?>
</div>
