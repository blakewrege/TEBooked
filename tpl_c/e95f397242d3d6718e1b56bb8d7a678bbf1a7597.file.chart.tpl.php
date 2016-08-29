<?php /* Smarty version Smarty-3.1.16, created on 2016-08-16 13:52:22
         compiled from "/opt/bitnami/apache2/htdocs/booked/tpl/Reports/chart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6806441557b352d6b968e9-25376772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e95f397242d3d6718e1b56bb8d7a678bbf1a7597' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/tpl/Reports/chart.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6806441557b352d6b968e9-25376772',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57b352d6bb8ee8_30568119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b352d6bb8ee8_30568119')) {function content_57b352d6bb8ee8_30568119($_smarty_tpl) {?>
<div class="clear"></div>
<div id="chart-indicator" style="display:none; text-align: center;">
	<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif"),$_smarty_tpl);?>

</div>

<div id="chartdiv" style="margin:auto;height:400px;width:80%"></div>

<!--[if lt IE 9]><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jqplot/excanvas.min.js"),$_smarty_tpl);?>
<![endif]-->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jqplot/jquery.jqplot.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jqplot/plugins/jqplot.barRenderer.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jqplot/plugins/jqplot.canvasTextRenderer.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jqplot/plugins/jqplot.pointLabels.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jqplot/plugins/jqplot.dateAxisRenderer.min.js"),$_smarty_tpl);?>


<script type="text/javascript">
	$(document).ready(function () {
		$(document).on('loaded', '#report-no-data, #report-results', function () {
			var chart = new Chart();
			chart.clear();
		});
	});
</script><?php }} ?>
