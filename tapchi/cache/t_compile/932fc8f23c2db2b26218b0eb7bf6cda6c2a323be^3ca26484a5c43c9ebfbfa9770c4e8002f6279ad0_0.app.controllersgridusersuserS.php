<?php
/* Smarty version 4.1.0, created on 2023-04-27 06:43:50
  from 'app:controllersgridusersuserS' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6449fd86aced15_43782057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca26484a5c43c9ebfbfa9770c4e8002f6279ad0' => 
    array (
      0 => 'app:controllersgridusersuserS',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6449fd86aced15_43782057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="radio" id="user_<?php echo $_smarty_tpl->tpl_vars['rowId']->value;?>
" name="userId" class="advancedUserSelect" <?php if ($_smarty_tpl->tpl_vars['userId']->value == $_smarty_tpl->tpl_vars['rowId']->value) {?>checked="checked" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['rowId']->value;?>
" />
<?php }
}
