<?php /* Smarty version Smarty-3.1.7, created on 2015-05-22 20:15:08
         compiled from "C:\Program Files (x86)\vtigerCRM620\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\MailManager\Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15933555f8e4c742178-50477709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae097797fafd3090e515c22f0d623de35f20805e' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM620\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\MailManager\\Mainui.tpl',
      1 => 1432321978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15933555f8e4c742178-50477709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_555f8e4c76f45',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f8e4c76f45')) {function content_555f8e4c76f45($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>