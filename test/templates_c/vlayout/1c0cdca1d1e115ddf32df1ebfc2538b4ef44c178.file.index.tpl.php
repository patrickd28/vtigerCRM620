<?php /* Smarty version Smarty-3.1.7, created on 2015-05-22 20:46:02
         compiled from "C:\Program Files (x86)\vtigerCRM620\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\PBXManager\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7163555f958ac9a764-63502243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c0cdca1d1e115ddf32df1ebfc2538b4ef44c178' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM620\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\PBXManager\\index.tpl',
      1 => 1432321981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7163555f958ac9a764-63502243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE_MODEL' => 0,
    'RECORD_ID' => 0,
    'FIELDS' => 0,
    'FIELD_NAME' => 0,
    'RECORD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_555f958ad1e18',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f958ad1e18')) {function content_555f958ad1e18($_smarty_tpl) {?>
<div class="container-fluid" id="AsteriskServerDetails"><div class="widget_header row-fluid"><div class="span8"><h3><?php echo vtranslate('LBL_PBXMANAGER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable(Settings_PBXManager_Module_Model::getCleanInstance(), null, 0);?><div class="span4"><div class="pull-right"><button class="btn editButton" data-url='<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getEditViewUrl();?>
&mode=showpopup&id=<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
' type="button" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><strong><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><hr><div class="contents row-fluid"><table class="table table-bordered table-condensed themeTableColor"><thead><tr class="blockHeader"><th colspan="2" class="mediumWidthType"><span class="alignMiddle"><?php echo vtranslate('LBL_PBXMANAGER_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th></tr></thead><tbody><?php $_smarty_tpl->tpl_vars['FIELDS'] = new Smarty_variable(PBXManager_PBXManager_Connector::getSettingsParameters(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->key => $_smarty_tpl->tpl_vars['FIELD_TYPE']->value){
$_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_TYPE']->key;
?><tr><td width="25%"><label class="muted pull-right marginRight10px"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td style="border-left: none;"><span><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
</span></td></tr><?php } ?><input type="hidden" name="module" value="PBXManager"/><input type="hidden" name="action" value="SaveAjax"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" class="recordid" name="id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"></tbody></table></div></div><br><div class="span8 alert alert-danger container-fluid"><?php echo vtranslate('LBL_NOTE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<br><?php echo vtranslate('LBL_PBXMANAGER_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }} ?>