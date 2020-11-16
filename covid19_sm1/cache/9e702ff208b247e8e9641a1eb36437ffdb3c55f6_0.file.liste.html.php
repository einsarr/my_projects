<?php
/* Smarty version 3.1.30, created on 2020-06-21 01:45:55
  from "C:\xampp\htdocs\my_projects\covid19_sm\src\view\userroles\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eee9fb35fcb99_21181807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e702ff208b247e8e9641a1eb36437ffdb3c55f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_projects\\covid19_sm\\src\\view\\userroles\\liste.html',
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
function content_5eee9fb35fcb99_21181807 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <th>Action</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                        <tr
                                <?php if (isset($_smarty_tpl->tpl_vars['idUser']->value)) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['idUser']->value == $_smarty_tpl->tpl_vars['user']->value->getId()) {?>
                                        class="alert alert-primary"
                                    <?php }?>
                                <?php }?>
                        >
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getNom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
UserRoles/affectation/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">Affecter un role</a></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </table>
                <div>Liste des roles disponible</div>
                <table class="table">
                    <tr>
                        <th>Libelle du role</th>
                        <th>Affectation</th>
                    </tr>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
UserRoles/affecter">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>

                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['role']->value->getNom();?>
</td>
                                <td>
                                    <input type="hidden" name="idUser" <?php if (isset($_smarty_tpl->tpl_vars['idUser']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['idUser']->value;?>
" <?php }?> />
                                    <input type="checkbox"
                                           <?php if (isset($_smarty_tpl->tpl_vars['usersroles']->value)) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['role']->value->chercherRole($_smarty_tpl->tpl_vars['usersroles']->value,$_smarty_tpl->tpl_vars['role']->value->getNom());?>

                                           <?php }?>
                                    name="roles[]" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getNom();?>
"/></td>
                            </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php if (isset($_smarty_tpl->tpl_vars['usersroles']->value)) {?>
                        <tr>
                            <td colspan="2">
                                <input class="btn btn-success" type="submit" value="Attribuer roles"/>
                            </td>
                        </tr>
                        <?php }?>
                    </form>
                </table>

            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
