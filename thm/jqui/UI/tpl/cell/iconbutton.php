<?php /** @var $field \GDO\UI\GDT_IconButton **/ ?>
<?php if ($href) : ?>
<a class="gdo-icon-button"
 href="<?= $href; ?>"
 title="<?= html($field->displayLabel()); ?>"
 <?= $field->htmlDisabled(); ?>><?= $field->displayLabel(); ?>&nbsp;<?= $field->htmlIcon(); ?></a>
<?php endif; ?>
