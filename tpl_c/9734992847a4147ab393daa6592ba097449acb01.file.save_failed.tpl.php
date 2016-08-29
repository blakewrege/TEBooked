<?php /* Smarty version Smarty-3.1.16, created on 2016-08-16 16:40:42
         compiled from "/opt/bitnami/apache2/htdocs/booked/tpl/Ajax/reservation/save_failed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16234350757b37a4ac4cdf9-15734752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9734992847a4147ab393daa6592ba097449acb01' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/tpl/Ajax/reservation/save_failed.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16234350757b37a4ac4cdf9-15734752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Errors' => 0,
    'each' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57b37a4ae2f957_55369192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b37a4ae2f957_55369192')) {function content_57b37a4ae2f957_55369192($_smarty_tpl) {?>
<div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"dialog-warning.png"),$_smarty_tpl);?>
<br/>

	<h2 style="text-align: center;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationFailed'),$_smarty_tpl);?>
</h2>

	<div class="error">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['each'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['each']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['each']->key => $_smarty_tpl->tpl_vars['each']->value) {
$_smarty_tpl->tpl_vars['each']->_loop = true;
?>
			<li><?php echo nl2br($_smarty_tpl->tpl_vars['each']->value);?>
</li>
		<?php } ?>
		</ul>
	</div>

	<div style="margin: auto;text-align: center;">
		<button id="btnSaveFailed"
				class="button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"arrow_large_left.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationErrors'),$_smarty_tpl);?>
</button>
	</div>
</div><?php }} ?>
