<?php /* Smarty version Smarty-3.1.16, created on 2016-08-16 14:27:45
         compiled from "/opt/bitnami/apache2/htdocs/booked/tpl/Email/emailheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171542365557b35b2105dad0-08798571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f9a24314894ab4bfd39ea88454619afd42f72d' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/tpl/Email/emailheader.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171542365557b35b2105dad0-08798571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Charset' => 0,
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57b35b21079ff2_28289029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b35b21079ff2_28289029')) {function content_57b35b21079ff2_28289029($_smarty_tpl) {?>
<?php echo '<?xml';?> version="1.0" encoding="<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"<?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
" />
		<style type="text/css">
			@import url(<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/email.css);
		</style>
	</head>
	<body><?php }} ?>
