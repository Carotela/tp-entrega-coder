
<?php

$destino= "institutocafecomluis@gmail.com";
$nombre= $_Post["nombre"];
$correo= $_Post["correo"];
$telefono= $_Post["telefono"];
$mensaje= $_Post["mensaje"];

$contenido= "Nombre: " . $nombre . "\nCorre: " .$correo . "\nTelefono: " .$telefono . "\nMensaje: " .$mensaje;

mail($destino, "Contacto", $contenido);

header("location:formulario.html")

?>    

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon"  type="icon/ico"href="../assets/img/icon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;900&family=Truculenta:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>formulario</title>
<head>    
    <body class="body-fomr">
        <div class="container-grid">
            <!---CONTAINER GRID-->
            <!---HEADER---------->
            <header class="header">
               <div class="logo"><img src="../assets/img/logo-gif-animado.gif" alt="logo-ccl"></div>
                <nav class="nav-bar">
                    <ul>
                    <li><a href="../index.html">HOME</a></li>
                    <li><a href="../pages/staff.html">STAFF</a></li>
                    <li><a href="../pages/cursos-de-espanol.htm">CURSO DE ESPAÑOL</a></li>
                    <li><a href="../pages/otros-cursos.html">OTROS CURSOS</a></li>
                    <li><a href="#footer">CONTACTOS</a></li>
                    <li><a href="#">ESPAÑOL</a></li>
                    </ul>
                </nav>
            </header >
            <!---FIN DE HEADER--->
            
            <!---MAIN------------>
            <main>
            <div class="container-fluid">
               <form action="enviar.php" method="post">
                   
                   <h2>Contactate con nosotros</h2>
                   <p class="intro-f">Agradecemos tu interes por contactarse con nosotros, si desea recibir mas informacion sobre nuestros cursos, por favor complete el formulario, muy pronto te estaremos contactando</p>
                   <hr>
                   <div class="row">
                       
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <input type="text" name="Nombre" placeholder="Tu nombre" required>
                          
                          <input type="text" name="correo" placeholder="Tu correo" required>
                          
                          <input type="text" name="telefono" placeholder="Tu telefono">
                          
                          <textarea name="mensaje" placeholder="Escribi tu mebaaje" required></textarea>
                          
                          <input type="submit" value="Enviar" id="boton" > 
                           
                       </div>
                       
                       <div class="col-xs-12 col-sm-6 col-lg-6">
                          <br>
                          <p class="info-f">
                            <strong>  ¿Deseas aprender hablar español?</strong>
                            Ponete en contacto con nosotros y consulta todas tus dudas, siempre estamos abriendo vacantes!
                          </p>
                          
                          <p class="info-f">
                              
                              <strong>CCL, somos un instituto de lenguas</strong> con clases totalmente en vivo y que se adapta a las necesidades de nuestros alumnos.
                              Aprendemos hablando e interactuando en una charla cotidinia donde cada alumno tiene la livertad de expresarse libremente.
                              Veni te esperamos!!
                              
                          </p> 
                          <img src="../assets/img/formulario.png" alt="" class="img-fluid">
                          
                           
                           
                       </div>
                   
                   </div>
                   
               </form>
                
            </div>
            
            </main>
            
            <!---FOOTER----------->
            <footer id="footer">
              <div class="contactos"><h3>Contactanos</h3></div>
                <div class="logo-foo"><img src="../assets/img/logo-gif-animado.gif" alt="logo" ></div>
                <nav class="contactos-nav">
                    <a href="https://www.instagram.com/instituto_ccl/?hl=es-la" target="_blanc" class="icono"><img src="../assets/img/Vector.svg" alt="instagram"><h5>Instagram</h5></a>
                    <a href="https://wa.me/5491127258490" class="icono" target="_blank"><img src="../assets/img/whatsapp.svg" alt="whatsapp"><h5>whatsapp</h5></a>
                    <a href="institutocafecomluis@gmail.com " class="icono"><img src="../assets/img/email.svg" alt="mail"><h5>Email</h5></a>
                    <a href="institutocafecomluis@gmail.com " class="icono"><img src="../assets/img/telefono.svg" alt="mail"><h5>Email</h5></a>
                </nav>
                
            </footer>   
            
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>         
    

    
