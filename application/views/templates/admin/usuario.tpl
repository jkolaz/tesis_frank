<!DOCTYPE html>
<html>
    {$head}
    <body>
        {$menu}
        <div class="container">
            <div class="alert alert-success">Bienvenido: Sr(a) {$usuario}</div>
            {$sub_menu}
            <div align="center">
                <ul class="pager">
                    <li class="previous pull-left">
                        <a href="{$BASE_URL}admin/user/usuario">&larr; Regresar</a>
                    </li>
                    <li class="pull-right">
                        <a href="{$BASE_URL}admin/user/newUser">Crear Usuario</a>
                    </li>
                </ul>
                <table class="table table-bordered table-striped" align="center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                        {section name=user loop=$objUser}
                        <tr>
                            <td>{$smarty.section.user.index+1}</td>
                            <td>{$objUser[user]->apellidos}</td>
                            <td>{$objUser[user]->nombre}</td>
                            <td>{$objUser[user]->user}</td>
                            <td>{$objUser[user]->correo}</td>
                            <td>{$objUser[user]->telefono}</td>
                            <td width="7%">
                                <a class="btn btn-default" href="{$BASE_URL}admin/user/edit/{$objUser[user]->id}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                            </td>
                            <td width="7%">
                                <a class="btn btn-default" href="{$BASE_URL}admin/user/delete/{$objUser[user]->id}"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                            </td>
                        </tr>
                        {/section}
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="8" align="right">
                                <div class="btn-group">
                                    <a class="btn btn-default" href="{$BASE_URL}admin/user/listar">
                                        <i class="icon-fast-backward"></i> Primera</a>
                                    <a class="btn btn-default" href="/invo-master/companies/search?page&#x3d;1">
                                        <i class="icon-step-backward"></i> Ant.</a>
                                    <a class="btn btn-default" href="/invo-master/companies/search?page&#x3d;1">
                                        <i class="icon-step-forward"></i> Sig.</a>
                                    <a class="btn btn-default" href="/invo-master/companies/search?page&#x3d;1">
                                        <i class="icon-fast-forward"></i> Ultima</a>
                                    <span class="help-inline">1/1</span>
                                </div>
                            </td>
                        </tr>
                    <tbody>
                </table>
            </div>
            <hr>
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div>
        {$footer}
    </body>
</html>