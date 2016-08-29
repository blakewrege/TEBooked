<?php /* Smarty version Smarty-3.1.16, created on 2016-08-23 10:48:24
         compiled from "/opt/bitnami/apache2/htdocs/booked/tpl/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53052458557bc6238a40341-51230215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c52e86cad7c09c9852813b181b22d4608cd9b0da' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/tpl/error.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53052458557bc6238a40341-51230215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ErrorMessage' => 0,
    'ReturnUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57bc6238b577a2_34840489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc6238b577a2_34840489')) {function content_57bc6238b577a2_34840489($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="error">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['ErrorMessage']->value),$_smarty_tpl);?>
</h3>
    <h5><a href="<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReturnToPreviousPage'),$_smarty_tpl);?>
</a></h5>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
