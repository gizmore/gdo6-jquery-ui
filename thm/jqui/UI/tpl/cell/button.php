<?php /** @var $field \GDO\UI\GDT_Button **/ ?>
<?php if ($href) : ?>
<a class="gdt-button" href="<?= $href; ?>" <?= $field->htmlDisabled(); ?>>
  <?= $field->displayLabel(); ?>
  <?= $field->htmlIcon(); ?>
</a>
<?php endif; ?>
