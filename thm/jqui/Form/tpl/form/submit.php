<?php /** @var $field \GDO\Form\GDT_Submit **/ ?>
<input
 type="submit"
 class="gdt-button"
 name="<?= $field->name; ?>"
 value="<?= $field->displayLabel(); ?>"
 <?= $field->htmlDisabled(); ?> /></input>
