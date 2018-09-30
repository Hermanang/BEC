<?php /* Smarty version 2.6.31, created on 2018-09-28 20:10:16
         compiled from cache/modules/AOW_WorkFlow/LeadsEditViewreports_to_link.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/modules/AOW_WorkFlow/LeadsEditViewreports_to_link.tpl', 7, false),)), $this); ?>

<input type="text" name="<?php echo $this->_tpl_vars['fields']['reports_to_link']['name']; ?>
" class="sqsEnabled" tabindex="1" id="<?php echo $this->_tpl_vars['fields']['reports_to_link']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['reports_to_link']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['reports_to_link']['id_name']; ?>
" 
	id="<?php echo $this->_tpl_vars['fields']['reports_to_link']['id_name']; ?>
" 
	value="<?php echo $this->_tpl_vars['fields']['reports_to_link_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['reports_to_link']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['reports_to_link']['name']; ?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
    "<?php echo $this->_tpl_vars['fields']['reports_to_link']['module']; ?>
", 
	600, 
	400, 
	"", 
	true, 
	false, 
	<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":'; ?>
"<?php echo $this->_tpl_vars['fields']['reports_to_link']['id_name']; ?>
"<?php echo ',"name":'; ?>
"<?php echo $this->_tpl_vars['fields']['reports_to_link']['name']; ?>
"<?php echo '}}'; ?>
, 
	"single", 
	true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['reports_to_link']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['reports_to_link']['name']; ?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['reports_to_link']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['reports_to_link']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['reports_to_link']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>