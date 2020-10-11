<?php /** @var $field \GDO\Form\GDT_Select **/ ?>
<div class="ui-widget gdo-container<?= $field->classError(); ?>">
  <label><?= $field->displayLabel(); ?></label><?=$field->htmlIcon()?>
  <select
   <?=$field->htmlFormName()?>
<?php if ($field->multiple) : ?>
   multiple="multiple"
<?php endif; ?>
   <?= $field->htmlDisabled(); ?>>
<?php if ($field->emptyLabel) : ?>
	<option value="<?=$field->emptyValue?>"<?=$field->htmlSelected($field->emptyValue)?>><?=$field->displayEmptyLabel()?></option>
<?php endif; ?>
<?php foreach ($field->choices as $value => $choice) : ?>
	<option value="<?=html($value)?>"<?=$field->htmlSelected($value);?>><?=$field->renderChoice($choice)?></option>
<?php endforeach; ?>
  </select>
  <?= $field->htmlError(); ?>
</div>
