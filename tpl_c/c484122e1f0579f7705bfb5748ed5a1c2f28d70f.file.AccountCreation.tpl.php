<?php /* Smarty version Smarty-3.1.16, created on 2016-08-19 14:50:00
         compiled from "/opt/bitnami/apache2/htdocs/booked/lang/en_us/AccountCreation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179925089857b754d8a1fd16-42918978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c484122e1f0579f7705bfb5748ed5a1c2f28d70f' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/lang/en_us/AccountCreation.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179925089857b754d8a1fd16-42918978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'To' => 0,
    'EmailAddress' => 0,
    'FullName' => 0,
    'Phone' => 0,
    'Organization' => 0,
    'Position' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57b754d8a6da83_46766268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b754d8a6da83_46766268')) {function content_57b754d8a6da83_46766268($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('..\..\tpl\Email\emailheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<p><?php echo $_smarty_tpl->tpl_vars['To']->value;?>
,</p>

<p>A new user has registered with the following information:<br/>
Email: <?php echo $_smarty_tpl->tpl_vars['EmailAddress']->value;?>
<br/>
Name: <?php echo $_smarty_tpl->tpl_vars['FullName']->value;?>
<br/>
Phone: <?php echo $_smarty_tpl->tpl_vars['Phone']->value;?>
<br/>
Organization: <?php echo $_smarty_tpl->tpl_vars['Organization']->value;?>
<br/>
Position: <?php echo $_smarty_tpl->tpl_vars['Position']->value;?>
</p>

<?php echo $_smarty_tpl->getSubTemplate ('..\..\tpl\Email\emailfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
