<?php

include "connection.php";

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
       <link rel="stylesheet" href="css1/bootstrap.min.css">
       <link rel="stylesheet" href="css1/font-awesome.min.css">
      <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
      <link rel="stylesheet" href="css1/animate.css">
      <link rel="stylesheet" href="css1/normalize.css">
      <link rel="stylesheet" href="css1/main.css">
      <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="css1/responsive.css">
       <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    

<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Registrate</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="form1" method="post">
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Nombre</label>
                                <input type="text"  name="firstname" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Apellido</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre Usuario</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Contrase??a</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Contacto</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                              
                            <div class="text-center">
                                <button  type="submit"  name="submit1" class="btn btn-success loginbtn">Registrarse</button>
                            </div>
                            

                            <div class="alert alert-success" id="success" style="margin-top : 10px; display: none"  >
                                <strong>Success</strong> Cuenta resgistrada con ??xito.
                            </div>

                            <div class="alert alert-danger"  id="failure" style="margin-top : 10px; display: none" >
                                <strong>Ya exite</strong> Este usuraio ya tiene una cuenta registrada.
                            </div>

                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

<?php

if(isset($_POST['submit1'])){
    //comprobamos en nuestra tabla si hay un usuario ya con ese nombre 
    $count=0;
    $res=mysqli_query($link, "SELECT * FROM registration WHERE username='$_POST[username]'") or die(mysqli_error($link)) ;
    $count=mysqli_num_rows($res);
    //si al comprobar nos da un resultado mayor de cero, enviamos el mensaje de que el usuario ya existe 
    if($count > 0)
    {
        ?>
        <!-- scrip para mostrar el mensaje que hemos creado dentro del html pero usamos 
            un document.getElementById para mostrarlo
        -->
        <script type="text/javascript">
            document.getElementById("success").style.display="none";
            document.getElementById("failure").style.display="block";
        </script>
        
        <?php

    }

    //Si un usuario esta disponible ya que no exite aun en la base de datos 

    else
    {
        //El primer value es NULL ya que es auto incrementable 
        mysqli_query($link, "INSERT INTO registration VALUES (NULL, '$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]' )") or die(mysqli_error($link));
        
        ?>
        <!-- scrip para mostrar el mensaje que hemos creado dentro del html pero usamos 
            un document.getElementById para mostrarlo
        -->
        <script type="text/javascript">
            document.getElementById("success").style.display="block";
            document.getElementById("failure").style.display="none";
        </script>
        
        <?php

   
    }
    
}

?>


    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

