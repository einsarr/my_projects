<?php
/* Smarty version 3.1.30, created on 2020-06-21 02:04:11
  from "C:\xampp\htdocs\my_projects\covid19_sm\src\view\categories\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eeea3fb23c5f4_14751478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1052be50b0a46107f640bc01fa1fa570e68da2aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\covid19_sm\\src\\view\\categories\\liste.html',
      1 => 1592697848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5eeea3fb23c5f4_14751478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="card">
        <div class="card-header">Liste des roles</div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Identifiant du role</th>
                    <th>Libelle du role</th>
                    <th>Libelle du role</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getlibelle();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getDescription();?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
