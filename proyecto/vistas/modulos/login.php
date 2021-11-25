<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="vistas/img/preload-reciplas.gif" alt="Reciplas-Logo" height="60" width="60">
</div>

<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="text-center" style="padding-top: 3%;">
            <img class="animation__shake" src="vistas/img/preload-reciplas.gif" alt="Reciplas-Logo" height="60" width="60">
        </div>
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Reciplas</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Inicio de sesión</p>

            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Usuario" name="login_us">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Contraseña" name="login_pass">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </div>
                </div>
                <?php
                    $login = new ControladorUsuarios();
                    $login->ctrIngresar();
                ?>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->