<?php /* Smarty version Smarty-3.1.7, created on 2015-05-22 19:56:19
         compiled from "C:\Program Files (x86)\vtigerCRM620\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Products\PriceBookProductPopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18635555f89e3382941-14443275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11000bb8e96155ba4633658b8d45fa85c25dd69a' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM620\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Products\\PriceBookProductPopup.tpl',
      1 => 1398442050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18635555f89e3382941-14443275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'PARENT_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_555f89e33c36b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f89e33c36b')) {function content_555f89e33c36b($_smarty_tpl) {?>
<div id="popupPageContainer" class="contentsDiv"><div class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupSearch.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<form id="popupPage" action="javascript:void(0)"><div id="popupContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PriceBookProductPopupContents.tpl',$_smarty_tpl->tpl_vars['PARENT_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form></div><input type="hidden" class="triggerEventName" value="<?php echo $_REQUEST['triggerEventName'];?>
"/></div></div><?php }} ?>