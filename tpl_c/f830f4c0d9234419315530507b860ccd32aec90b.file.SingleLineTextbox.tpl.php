<?php /* Smarty version Smarty-3.1.16, created on 2016-08-16 10:20:42
         compiled from "/opt/bitnami/apache2/htdocs/booked/tpl/Controls/Attributes/SingleLineTextbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9865060557b34b6a8622e7-45778173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f830f4c0d9234419315530507b860ccd32aec90b' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/tpl/Controls/Attributes/SingleLineTextbox.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9865060557b34b6a8622e7-45778173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attributeName' => 0,
    'attribute' => 0,
    'align' => 0,
    'readonly' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57b34b6a87da58_04929822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b34b6a87da58_04929822')) {function content_57b34b6a87da58_04929822($_smarty_tpl) {?>
<label class="customAttribute" for="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Label(), ENT_QUOTES, 'UTF-8', true);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['align']->value=='vertical') {?>
<br/>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
<span class="attributeValue <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php } else { ?>
<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
" class="customAttribute textbox <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" />
<?php }?><?php }} ?>
