<nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PANEL</a>
        </div>
        <div class="nav-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li {$c_home}><a href="#">Home</a></li>
                <li {$c_about}><a href="#">About</a></li>
                <li {$c_contact}><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="nav-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li {$c_login}><a href="{$BASE_URL}admin/admin/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>