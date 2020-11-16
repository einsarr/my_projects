<?php
/* Smarty version 3.1.30, created on 2020-06-21 01:45:57
  from "C:\xampp\htdocs\my_projects\covid19_sm\src\view\roles\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eee9fb5c5aaf0_43775323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfec6b275f42b56f8e1e394150c7b3a5d3ee55b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\covid19_sm\\src\\view\\roles\\liste.html',
      1 => 1589644743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5eee9fb5c5aaf0_43775323 (Smarty_Internal_Template $_smarty_tpl) {
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
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['role']->value->getNom();?>
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
?>

<?php }
}
