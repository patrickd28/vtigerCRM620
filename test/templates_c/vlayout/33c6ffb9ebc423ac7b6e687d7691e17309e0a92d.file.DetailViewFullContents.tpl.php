<?php /* Smarty version Smarty-3.1.7, created on 2015-05-22 19:33:43
         compiled from "C:\Program Files (x86)\vtigerCRM620\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Vtiger\DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30599555f84970da819-58513194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33c6ffb9ebc423ac7b6e687d7691e17309e0a92d' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM620\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\DetailViewFullContents.tpl',
      1 => 1373768344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30599555f84970da819-58513194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_555f849710406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f849710406')) {function content_555f849710406($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<?php }} ?>