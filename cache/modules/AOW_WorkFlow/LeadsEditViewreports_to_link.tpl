
<input type="text" name="{$fields.reports_to_link.name}" class="sqsEnabled" tabindex="1" id="{$fields.reports_to_link.name}" size="" value="{$fields.reports_to_link.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.reports_to_link.id_name}" 
	id="{$fields.reports_to_link.id_name}" 
	value="{$fields.reports_to_link_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.reports_to_link.name}" id="btn_{$fields.reports_to_link.name}" tabindex="1" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
    "{$fields.reports_to_link.module}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":{/literal}"{$fields.reports_to_link.id_name}"{literal},"name":{/literal}"{$fields.reports_to_link.name}"{literal}}}{/literal}, 
	"single", 
	true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.reports_to_link.name}" id="btn_clr_{$fields.reports_to_link.name}" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.reports_to_link.name}', '{$fields.reports_to_link.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.reports_to_link.name}']) != 'undefined'",
		enableQS
);
</script>