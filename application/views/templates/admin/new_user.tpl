<!DOCTYPE html>
<html>
    {$head}
    <body>
        {$menu}
        <div class="container">
            <div class="alert alert-success">Bienvenido: Sr(a) {$usuario}</div>
            {if $procesar gt 0}
            <div class="alert alert-danger">Insertar el {$campo}</div>
            {/if}
            {$sub_menu}
            <div align="center">
                <form role="form" method="post" action="{$BASE_URL}admin/user/agregar">
                    <ul class="pager">
                        <li class="previous pull-left">
                            <a href="{$BASE_URL}admin/user/usuario">&larr; Regresar</a>
                        </li>
                        <li class="pull-right">
                            <input class="btn btn-success" value="Guardar" type="submit" />
                        </li>
                    </ul>
                    <h2>Agregar Usuario</h2>
                    <fieldset>
                        <input value="2" name="id" id="id" type="hidden" />
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <div class="controls">
                                <input value="" name="nombre" id="nombre" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <div class="controls">
                                <input value="" name="apellidos" id="apellidos" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <div class="controls">
                                <input value="" name="usuario" id="usuario" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <div class="controls">
                                <input value="" name="correo" id="correo" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="clave">Password</label>
                            <div class="controls">
                                <input value="" name="clave" id="clave" type="password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <div class="controls">
                                <input value="" name="telefono" id="correo" type="text" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <hr>
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div>
        {$footer}
    </body>
</html>