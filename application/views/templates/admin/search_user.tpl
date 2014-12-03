<!DOCTYPE html>
<html>
    {$head}
    <body>
        {$menu}
        <div class="container">
            <div class="alert alert-success">Bienvenido: Sr(a) {$usuario}</div>
            {$sub_menu}
            <div align="center">
                <div align="right">
                    <a class="btn btn-primary" href="{$BASE_URL}admin/user/newUser">Crear Usuario</a>
                </div>
                <form method="post" action="{$BASE_URL}admin/user/listar">
                    <h2>Buscar Usuario</h2>
                    <fieldset>
                        <div class="control-group">
                            <label for="nick">Nick</label>
                            <div class="controls">
                                <input name="nick" id="nick" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="nombre">Nombre</label>
                            <div class="controls">
                                <input name="nombre" id="nombre" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="apellidos">Apellidos</label>
                            <div class="controls">
                                <input name="apellidos" id="apellidos" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="correo">Correo</label>
                            <div class="controls">
                                <input name="correo" id="correo" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="telefono">Telefono</label>
                            <div class="controls">
                                <input name="telefono" id="telefono" value="" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <input class="btn btn-primary" value="Search" type="submit" />
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