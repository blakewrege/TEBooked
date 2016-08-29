<?php /* Smarty version Smarty-3.1.16, created on 2016-08-24 09:09:01
         compiled from "/opt/bitnami/apache2/htdocs/booked/lang/en_us/StartReminderEmail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177834596257bd9c6d4a4093-43775694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0fe04e3fb4b1cc4ab7d5da3303fc4f4cd50fbb' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/lang/en_us/StartReminderEmail.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177834596257bd9c6d4a4093-43775694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'StartDate' => 0,
    'EndDate' => 0,
    'ResourceName' => 0,
    'Title' => 0,
    'Description' => 0,
    'ScriptUrl' => 0,
    'ReservationUrl' => 0,
    'ICalUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57bd9c6d514822_57892143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bd9c6d514822_57892143')) {function content_57bd9c6d514822_57892143($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('..\..\tpl\Email\emailheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

Your reservation is starting soon.<br/>
Reservation Details:
	<br/>
	<br/>
	Start: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	End: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	Resource: <?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>
<br/>
	Title: <?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<br/>
	Description: <?php echo nl2br($_smarty_tpl->tpl_vars['Description']->value);?>
<br/>
<br/>
<br/>
<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ReservationUrl']->value;?>
">View this reservation</a> |
<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ICalUrl']->value;?>
">Add to Calendar</a> |
<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">Log in to Booked Scheduler</a>

<?php echo $_smarty_tpl->getSubTemplate ('..\..\tpl\Email\emailfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
