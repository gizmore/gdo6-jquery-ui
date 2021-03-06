<?php /** @var $field \GDO\DB\GDT_Enum **/
$sel = 'selected="selected"';
$val = $field->getVar(); ?>
<div class="ui-widget gdt-container<?= $field->classError(); ?>">
  <?= $field->htmlIcon(); ?>
  <label><?= $field->displayLabel(); ?></label>
  <select
   <?=$field->htmlFormName()?>
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>>
<?php if ($field->emptyLabel) : ?>
	  <option value="<?= $field->emptyValue; ?>" <?= $field->emptyValue === $val ? $sel : ''; ?>><?= $field->displayEmptyLabel(); ?></option>
<?php endif; ?>
	<?php foreach ($field->enumValues as $enumValue) : ?>
	  <option value="<?=$enumValue?>"<?=$field->htmlSelected($enumValue)?>><?=t('enum_'.$enumValue)?></option>
	<?php endforeach; ?>
  </select>
  <div class="gdo-error"><?= $field->error; ?></div>
</div>
