<!DOCTYPE html>
<html>
    {$head}
    <body>
        {$menu}
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-header">
                        <h2>Panel Administrador</h2>
                    </div>
                    <form role="form" method="post" action="{$BASE_URL}admin/admin/start">
                        <fieldset>
                            <div class="form-group">
                                <label for="email">Username/Email</label>
                                <div class="controls">
                                    <input class="form-control" name="email" id="email" value="" type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="controls">
                                    <input class="form-control" name="password" id="password" value="" type="password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-large" value="Login" type="submit" />
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="page-header">
                        <h2>¿No tienes una cuenta todavía?</h2>
                    </div>

                    <p>Crear una cuenta ofrece las siguientes ventajas:</p>
                    <ul>
                        <li>Crear, modificar y eliminar los desafios y/o examenes en línea </li>
                        <li>Adquirir conocimientos fundamentales sobre cómo su negocio está haciendo</li>
                        <li>Manténgase informado sobre su negocio las 24 horas al día, los 7 días a la semana</li>
                    </ul>
                    <div class="clearfix center">
                        <a class="btn btn-primary btn-large btn-success" href="/invo-master/register">registrarse</a>
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div>
        {$footer}
    </body>
</html>