<?php
include_once('views/head.php');
include_once('views/Navbar.php');
//include_once('views/sidebar.php');
?>

<div class="content-wrapper" style="min-height: 424px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Cuerpo de la pagina -->
    <div class="content">
        <div class="container-fluid">
            <!-- Arranca el primer form -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo constant('URL');?>cargar/cargarSucursal" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nueva Sucursal</label>
                            <input type="text" class="form-control" id="" name="sucursal" placeholder="Cargar sucursal">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cargar</button>
                    </div>
                </form>
            </div>
            <!-- Termina el primer form -->
        </div>
    </div>
</div>
<?php
include_once('views/footer.php');
?>