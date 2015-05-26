<?php /* Smarty version Smarty-3.1.7, created on 2015-05-22 19:30:19
         compiled from "C:\Program Files (x86)\vtigerCRM620\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8213555f83cbc194f5-99152585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09591c0f63bba44db39ce89405db9dfb214e20ed' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM620\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\StringDetailView.tpl',
      1 => 1373768344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8213555f83cbc194f5-99152585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_555f83cbc3734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f83cbc3734')) {function content_555f83cbc3734($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>