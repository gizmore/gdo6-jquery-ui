<?php
use GDO\Form\GDT_AntiCSRF;
$field instanceof GDT_AntiCSRF;
?>
<div class="ui-widget gdt-container<?=$field->classError()?>">
  <input
   type="hidden"
   <?=$field->htmlFormName()?>
   value="<?= $field->csrfToken(); ?>"></input>
  <?= $field->htmlError(); ?>
</div>
