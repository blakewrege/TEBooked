<?php /* Smarty version Smarty-3.1.16, created on 2016-08-16 14:28:48
         compiled from "/opt/bitnami/apache2/htdocs/booked/tpl/Ajax/reservation/update_successful.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194906963157b35b60677973-48017255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ff39fd3461904343952b8a3410b4d0d878dcdaf' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/tpl/Ajax/reservation/update_successful.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194906963157b35b60677973-48017255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RequiresApproval' => 0,
    'ReferenceNumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57b35b606c3583_51728217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b35b606c3583_51728217')) {function content_57b35b606c3583_51728217($_smarty_tpl) {?>
<div id="reservationUpdated" class="reservationResponseMessage">
	<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"dialog-warning.png",'id'=>"imgApprovalWarning"),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"dialog-success.png",'id'=>"imgReservationSuccess"),$_smarty_tpl);?>

	<?php }?>
	<div class="createdMessage"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationUpdated'),$_smarty_tpl);?>
</div>
    <div class="referenceNumber"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YourReferenceNumber','args'=>$_smarty_tpl->tpl_vars['ReferenceNumber']->value),$_smarty_tpl);?>
</div>

	<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
		<div class="approvalMessage"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRequiresApproval'),$_smarty_tpl);?>
</div>
	<?php }?>

	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="button" />

</div><?php }} ?>
