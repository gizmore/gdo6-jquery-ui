<?php /** @var $field \GDO\DB\GDT_String **/ ?>
<?php $id = "form_{$field->name}"?>
<div class="ui-widget gdo-container<?= $field->classError(); ?>">
  <label for="<?=$id?>"><?= $field->label; ?></label>
  <?= $field->htmlIcon(); ?>
  <input
   id="<?=$id?>"
   type="text"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlPattern(); ?>
   <?= $field->htmlDisabled(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   size="<?= min($field->max, 32); ?>"
   name="form[<?= $field->name; ?>]"
   value="<?= $field->displayVar(); ?>" />
  <?= $field->htmlError(); ?>
</div>
