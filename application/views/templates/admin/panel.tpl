<!DOCTYPE html>
<html>
    {$head}
    <body>
        {$menu}
        <scritp>
            
        </scritp>
        <div class="container">
            <div class="alert alert-success">Bienvenido: Sr(a) {$usuario}</div>
            {$sub_menu}
            <div align="center">
                <p>
                    <h2>{$titulo}</h2>
                </p>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Item</td>
                            <td>Apellidos</td>
                            <td>Nombre</td>
                            <td>Tipo Admin</td>
                            <td>Estado</td>
                        </tr>
                    </thead>
                    <tbody>
                        {section name=admin loop=$objAdmin}
                        <tr>
                            <td>51001</td>
                            <td>{$objAdmin[admin]->apellido}</td>
                            <td>{$objAdmin[admin]->nombre}</td>
                            <td>{$objAdmin[admin]->descripcion}</td>
                            {if $objAdmin[admin]->status eq 1}
                                <td><a href="javascript:;"><span class="label label-success">Activado</span></a></td>
                            {else}
                                <td><a href="javascript:;"><span class="label label-important">Desactivado</span></a></td>
                            {/if}
                        </tr>
                        {/section}
                    </tbody>
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