<?php
/* Smarty version 4.1.0, created on 2023-06-24 08:16:40
  from 'app:reviewerreviewreviewerRec' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64968a482a15b0_31240693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fb8ef2821dfd47b7447fd62183ab5c81190943' => 
    array (
      0 => 'app:reviewerreviewreviewerRec',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64968a482a15b0_31240693 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"reviewer.article.recommendation",'description'=>(($tmp = $_smarty_tpl->tpl_vars['description']->value ?? null)===null||$tmp==='' ? "reviewer.article.selectRecommendation" ?? null : $tmp)));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"reviewer.article.recommendation",'description'=>(($tmp = $_smarty_tpl->tpl_vars['description']->value ?? null)===null||$tmp==='' ? "reviewer.article.selectRecommendation" ?? null : $tmp)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"recommendation",'from'=>$_smarty_tpl->tpl_vars['reviewerRecommendationOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['reviewAssignment']->value->getRecommendation(),'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'required'=>(($tmp = $_smarty_tpl->tpl_vars['required']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp),'disabled'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"reviewer.article.recommendation",'description'=>(($tmp = $_smarty_tpl->tpl_vars['description']->value ?? null)===null||$tmp==='' ? "reviewer.article.selectRecommendation" ?? null : $tmp)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
