<?php /** @var $field \GDO\UI\GDT_RangeSlider **/ ?>
<div class="gdt-container<?= $field->classError(); ?>">
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
   value="<?= $field->getLow(); ?>" />&nbsp;to&nbsp;<input
   type="number"
   name="<?=$field->formVariable()?>[<?=$field->highName?>]"
   <?= $field->htmlDisabled(); ?>
   <?= $field->htmlRequired(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   step="<?= $field->step; ?>"
   value="<?= $field->getHigh(); ?>" />   
  <?= $field->htmlError(); ?>
</div>
