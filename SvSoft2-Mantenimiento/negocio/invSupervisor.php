<<<<<<< HEAD
<link href="presentacion/css/SvSoft.css" rel="stylesheet" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/fondoCambiante.css"><!--css con el fondo y el boton de cambiar paleta de colores-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
<header>
        <!-- Barra de navegacion superior la cual cuenta con 5 botones (Inicio, Invernadero, Personal, SvSoft y Exit)-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex justify-content-center align-items-center flex-column a">
            <ul class="nav">
                <a class="btn btn-outline-light m-2 d-flex justify-content-center align-items-center" href="indexSupervisor.php"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>Inicio</a>

                <a class="btn btn-outline-light m-2 d-flex justify-content-center align-items-center" href="invSupervisor.php"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                        <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                </svg>Invernadero</a>
    
                <a class="btn btn-outline-light m-2 d-flex justify-content-center align-items-center" href="perSupervisor.php"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-video2" viewBox="0 0 16 16">
                    <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z"/>
                  </svg>Personal</a>

                <a class="btn btn-outline-light m-2 d-flex justify-content-center align-items-center" href="svsoftSupervisor.php"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>SvSoft</a>

                <form action="" method="post"><button type="submit" name="close" id="close" class="btn btn-outline-light m-2 d-flex justify-content-center align-items-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>Exit </button></form>
                 <!--Aqui emepeiza el boton de Cambio de paleta de colores-->
                <div class="modo" id="modo"><i class="fas fa-toggle-on"></i></div> 
                <!--Aqui Termina el boton de Cambio de paleta de colores-->  
            </ul>
          </nav>
    </header>
=======
<link rel="stylesheet" href="css/fondoEstatico.css">
<link rel="stylesheet" href="css/bootstrap.css">

>>>>>>> e1130509a82200703aa7e85d10e563453a626e81
<?php include 'template/headerInvernadero.php' ?>

<?php
    include_once "model/conexionPersona.php";
    $sentencia = $bd -> query("select * from invernadero");
    $invernadero = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($personal);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <!-- Alerta --->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>
            <!-- fin -->
            <!-- Alerta --->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado correctamente!</strong> Se registraron todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>
            <!-- fin -->

            <!-- Alerta --->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   


        <!-- Alerta --->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- Alerta --->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <div class="card">
                <div class="card-header">
                    Datos relevantes del invernadero   
                </div>
                <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Id Registro</th>
                                    <th scope="col">Nave</th>
                                    <th scope="col">Temperatura interna</th>
                                    <th scope="col">Temperatura externa</th>
                                    <th scope="col">Humedad</th>
                                    <th scope="col">Radiacion</th>
                                    <th scope="col" colspan="2" >Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                foreach($invernadero as $dato){
                            ?>
                           
                                <tr>
                                    <td scope="row"><?php echo $dato->idRegistro; ?></td>
                                    <td><?php echo $dato->nave; ?></td>
                                    <td><?php echo $dato->tempInterna; ?></td>
                                    <td><?php echo $dato->temExterna; ?></td>
                                    <td><?php echo $dato->humeRelativa; ?></td>
                                    <td><?php echo $dato->radiacion; ?></td>
                                    <td><a class="text-success" href="ModificarInvernadero.php?idRegistro=<?php echo $dato->idRegistro; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a onclick="return confirm('¿Estas seguro de que se desea eliminar?');" class="text-danger" href="EliminarInvernadero.php?idRegistro=<?php echo $dato->idRegistro; ?>"><i class="bi bi-trash"></i></a></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
    
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Captura de Datos
                </div>
                <form  class="p-4" method="POST" action="RegistrarInvernadero.php">
                    
                    <div class="mb-3">
                        <label class="form-label">ID Registro: </label>
                    <input type="text" class="form-control" name="txtIdRegistro" autofocus required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nave: </label>
                    <input type="text" class="form-control" name="txtNave" autofocus required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Temperatura Interna: </label>
                    <input type="text" class="form-control" name="txtTempInt" autofocus required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Temperatura Externa: </label>
                    <input type="text" class="form-control" name="txtTempExt" autofocus required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Humedad Relativa: </label>
                    <input type="text" class="form-control" name="txtHumedad" autofocus required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Radiacion: </label>
                    <input type="text" class="form-control" name="txtRadiacion" autofocus required>
                    </div>

                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value=" Guardar">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<<<<<<< HEAD
<script src="js/main.js"></script><!--Importante para que funcione el boton de cambio-->
<!-- Footer -->
<?php include 'template/footerInvernadero.php' ?>
=======


<?php include 'template/footerInvernadero.php' ?>
>>>>>>> e1130509a82200703aa7e85d10e563453a626e81
