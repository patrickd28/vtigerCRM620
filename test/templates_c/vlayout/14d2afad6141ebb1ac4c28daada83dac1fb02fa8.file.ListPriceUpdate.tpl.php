<?php /* Smarty version Smarty-3.1.7, created on 2015-05-22 20:09:38
         compiled from "C:\Program Files (x86)\vtigerCRM620\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\PriceBooks\ListPriceUpdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32293555f8d02378504-04087606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d2afad6141ebb1ac4c28daada83dac1fb02fa8' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM620\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\PriceBooks\\ListPriceUpdate.tpl',
      1 => 1373768344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32293555f8d02378504-04087606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'PRICEBOOK_ID' => 0,
    'REL_ID' => 0,
    'CURRENT_PRICE' => 0,
    'USER_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_555f8d023c727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f8d023c727')) {function content_555f8d023c727($_smarty_tpl) {?>
<div id="listPriceUpdateContainer"><div class="modal-header"><button data-dismiss="modal" class="pull-right"><i class="icon-remove alignMiddle"></i></button><h3><?php echo vtranslate('LBL_EDIT_LIST_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal" id="listPriceUpdate" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="RelationAjax" /><input type="hidden" name="src_record" value="<?php echo $_smarty_tpl->tpl_vars['PRICEBOOK_ID']->value;?>
" /><input type="hidden" name="relid" value="<?php echo $_smarty_tpl->tpl_vars['REL_ID']->value;?>
" /><div class="modal-body"><div><span><strong><?php echo vtranslate('LBL_EDIT_LIST_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span>&nbsp;:&nbsp;<input type="text" name="currentPrice" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PRICE']->value;?>
" data-validation-engine="validate[required,funcCall[Vtiger_Currency_Validator_Js.invokeValidation]]"data-decimal-seperator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
' data-group-seperator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
' /></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>	<?php }} ?>