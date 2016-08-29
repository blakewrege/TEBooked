<?php /* Smarty version Smarty-3.1.16, created on 2016-08-16 15:46:07
         compiled from "/opt/bitnami/apache2/htdocs/booked/tpl/Ajax/reservation/reservation_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178388455557b36d7f370bf8-77911052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1753474340f38cb07d2b47c409d42a65dd819901' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/tpl/Ajax/reservation/reservation_error.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178388455557b36d7f370bf8-77911052',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57b36d7f3e71c9_68014285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b36d7f3e71c9_68014285')) {function content_57b36d7f3e71c9_68014285($_smarty_tpl) {?>
<div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"dialog-warning.png"),$_smarty_tpl);?>
<br/>

	<h2 style="text-align: center;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationCriticalError'),$_smarty_tpl);?>
</h2>

	<div style="margin: auto;text-align: center;">
		<button id="btnSaveFailed"
				class="button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"arrow_large_left.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationErrors'),$_smarty_tpl);?>
</button>
	</div>
</div><?php }} ?>
