<?php
/* Smarty version 3.1.30, created on 2020-06-21 01:45:46
  from "C:\xampp\htdocs\my_projects\covid19_sm\src\view\user\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eee9faadc39f3_43425502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '140e805179b574cbdf0286d09413b38aa4a6e211' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\covid19_sm\\src\\view\\user\\liste.html',
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
function content_5eee9faadc39f3_43425502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="card">
        <div class="card-header">Liste des utilisateurs</div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Identifiant</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Email</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getNom();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
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
