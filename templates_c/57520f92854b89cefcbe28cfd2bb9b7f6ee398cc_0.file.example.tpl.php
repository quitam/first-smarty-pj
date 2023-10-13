<?php
/* Smarty version 4.3.4, created on 2023-10-13 21:04:01
  from 'C:\xampp\htdocs\mydemo\templates\example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652994a10a37f1_83050351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57520f92854b89cefcbe28cfd2bb9b7f6ee398cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mydemo\\templates\\example.tpl',
      1 => 1697223833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652994a10a37f1_83050351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\mydemo\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
  <?php $_smarty_tpl->_assignInScope('listService', array("Hosting cheap"=>3,"Hosting Pro"=>4,"Hosting Enterprise"=>5,"VPS Cheap"=>6,"VPS Pro"=>7,"VPS Enterprise"=>8));?>
  <?php $_smarty_tpl->_assignInScope('totals', array("Hosting"=>0,"VPS"=>0,"Firewall"=>0));?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listService']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <?php if (strstr($_smarty_tpl->tpl_vars['key']->value,"Hosting")) {?>
      <?php ob_start();
echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['totals']->value['Hosting'],'y'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['totals']) ? $_smarty_tpl->tpl_vars['totals']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['Hosting'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('totals', $_tmp_array);?>
    <?php } elseif (strstr($_smarty_tpl->tpl_vars['key']->value,"VPS")) {?>
      <?php ob_start();
echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['totals']->value['VPS'],'y'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);
$_prefixVariable2 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['totals']) ? $_smarty_tpl->tpl_vars['totals']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['VPS'] = $_prefixVariable2;
$_smarty_tpl->_assignInScope('totals', $_tmp_array);?>
    <?php } elseif (strstr($_smarty_tpl->tpl_vars['key']->value,"Firewall")) {?>
      <?php ob_start();
echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['totals']->value['Firewall'],'y'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['totals']) ? $_smarty_tpl->tpl_vars['totals']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['Firewall'] = $_prefixVariable3;
$_smarty_tpl->_assignInScope('totals', $_tmp_array);?>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php $_smarty_tpl->_assignInScope('newArray', array());?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['totals']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value != 0) {?>
      <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['newArray']) ? $_smarty_tpl->tpl_vars['newArray']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['value']->value;
$_smarty_tpl->_assignInScope('newArray', $_tmp_array);?>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
  <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
  <?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
</body>

</html><?php }
}
