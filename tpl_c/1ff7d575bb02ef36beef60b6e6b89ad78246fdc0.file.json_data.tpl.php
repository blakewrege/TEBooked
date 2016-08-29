<?php /* Smarty version Smarty-3.1.16, created on 2016-08-16 13:42:24
         compiled from "/opt/bitnami/apache2/htdocs/booked/tpl/json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42275201257b3508095e201-46407212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ff7d575bb02ef36beef60b6e6b89ad78246fdc0' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/tpl/json_data.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42275201257b3508095e201-46407212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57b35080983011_57528075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b35080983011_57528075')) {function content_57b35080983011_57528075($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>
