<!-- BEGIN COMPLETION -->
<?php /** @var $field \GDO\DB\GDT_Object **/
$id1 = 'gdoacl_'.$field->name;
$id2 = 'gdoacv_'.$field->name; ?>
<div class="ui-widget gdo-container<?=$field->classError()?>">
  <label for="<?=$id1;?>"><?=$field->displayLabel()?></label>
  <?=$field->htmlIcon()?>
  <input
   id="<?=$id1?>"
   type="text"
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>
   value="<?=html($field->renderChoice($field->getValue()))?>" />
  <?=$field->htmlError()?>
  <input
   id="<?=$id2?>"
   type="hidden"
   name="form[<?=$field->name?>]"
   value="<?=$field->displayVar()?>" />
</div>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function(){
	$('#<?=$id1?>').autocomplete({
		source: function(request, response) {
			$.ajax({
				url: '<?=$field->completionHref?>',
				data: { query: request.term },
				dataType: "json",
				success: function(data) {
					response($.map(data, function(item) {
						return {
							label: item.display,
							value: item.id
						};
					}));
				}
			});
		},
		select: function(event, ui) {
			$("#<?=$id1?>").val(ui.item.label);
			$("#<?=$id2?>").val(ui.item.value);
			return false;
		},
		focus: function(event, ui){
			return false;
		},
	});
}, false);
</script>
<!-- END COMPLETION -->
