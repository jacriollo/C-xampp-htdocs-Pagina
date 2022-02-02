<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog super genial</title>
    <meta name="description" content="Curso de Bootstrap Gratis">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ignacio Gutiérrez">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilos/css/bootstrap.css">
    <!-- Estilos en Css -->
    <style>
      .slider{
        background: url("estilos/images/bg-3.png");
        background-size: cover;
        background-position: center; 
        height: 450px;
      }
    </style>   
  </head>
  <body>
  <div class="container-fluid bg-inverse fixed-top">
      <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse container">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">            
                    Hospital Básico de la Zona El Oro
          </a>              
          <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav ml-auto text-center">
              <a class="nav-item nav-link active" href="#">Inicio</a>
            
            </div>
          </div>-->
      </nav>
    </div>
<!-- Menú de navegación -->
    <div class="container-fluid bg-inverse fixed-top">
      <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse container">
    
        <!--<a class="nav-item nav-link active" href="?controlador=paginas&accion=inicio">Inicio</a>-->                 
      </nav>
    </div>
    <!-- Fin Menú de navegación   ?controlador=paginas&accion=inicio-->
    <!-- Sección Slider -->
    <div class="container-fluid slider text-white d-flex flex-column justify-content-center align-items-center">
      <div class="text-center">
        <!--<h3 class="hidden-xs-down">¿Qué quieres aprender hoy?</h3> -->
        <h1 class="display-4">Hospital Básico de la Zona El Oro</h1>
        <!--<p class="lead hidden-xs-down">Más de 100 cursos gratis aquí!</p> -->
      </div>

      <form id="form_ingreso" name="form_ingreso" method="POST" action="ingresar_adm.php">
   <table width="293"  border="0" align="center">
    
    <tr>
      <td width="124"><div align="right" class="Estilo2 Estilo4">Cédula: </div></td>
      <td width="144"><label>
      <input name="cedula" type="text" id="cedula" onkeyup="this.value=this.value.replace();"/>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="Estilo3">Contrase&ntilde;a:</div></td>
      <td><label>
          <input name="contrasena" type="password" id="contrasena"  />
          <!--onKeyUp="this.value=this.value.replace(/[^0-9]/, '');"-->
      </label></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      </tr>
    <tr>
      <td colspan="2"><div align="center" >
        <label>
        <div align="right">
          <input type="submit" name="ingresar" value="ingresar"/>
        </div>
        </label></td>  
    </tr>    
  </table>   
 </form> 

  
    <div align="center"> </div>
      <div id="link"><a href="pacientes.php">Creaaaar una cuenta</a></div>
      </div>

      <div class="container">
      <h2>Especialidades</h2>
      
      <hr>
        <div class="row">
          <!-- Sección de noticias -->
          <div class="col-12 col-lg-9 mb-5">
            <!-- Artículos -->
            <div class="row mb-5">
              <div class="col-3">
                <img class="img-fluid" src="estilos/images/med_int.jfif" alt="">
                
              </div>
              <div class="col-9">
                <a href="#"><h3>Medicina interna</h3></a>                
                <p>Medicina Interna es una especialidad médica que se dedica a la atención integral del adulto enfermo, enfocada al diagnóstico y el tratamiento no quirúrgico de las enfermedades que afectan a sus órganos y sistemas internos, y a su prevención</p>
                <p></p>
                
              </div>
            </div>
            <!-- Fin Artículos -->
            <!-- Artículos -->
            <div class="row mb-5">
              <div class="col-3">
                <img class="img-fluid" src="estilos/images/pediatria.jfif" alt="">                
              </div>
              <div class="col-9">
                <a href="#"><h3>Pediatría</h3></a>               
                <p>La pediatría es considerada como la medicina integral del ser humano en período evolutivo, desde la concepción hasta el fin de la adolescencia, época cuya singularidad reside en el fenómeno del crecimiento, maduración, desarrollo biológico, fisiológico y social que, en cada momento, se liga a la íntima interdependencia entre el patrimonio heredado y el medio ambiente en el que el niño y el adolescente se desenvuelven y que puede ser modificado por acciones que el personal de salud realice en este período, de aquí la importancia de que dichas acciones conlleven a una mejor calidad de vida.</p>
                <p></p>               
              </div>
            </div>
            <!-- Fin Artículos -->
            <!-- Artículos -->
            <div class="row mb-5">
              <div class="col-3">
                <img class="img-fluid" src="estilos/images/endocrinologia.jfif" alt="">                
              </div>
              <div class="col-9">
                <a href="#"><h3>Endocrinología</h3></a>               
                <p>La endocrinología es el campo de la medicina que estudia las hormonas del cuerpo y los órganos que las producen. Las hormonas son sustancias que se producen en varios órganos (glándulas endocrinas) como la  tiroides o el páncreas y son enviadas a través de la sangre para controlar diversas funciones de  todo el organismo, las cuales son esenciales para la vida.</p>
                <p></p>               
              </div>
            </div>
            <!-- Fin Artículos -->
            <!-- Navegación páginas -->
            <div class="row mb-5">
              <div class="col-3">
                <img class="img-fluid" src="estilos/images/ginecologia.jfif" alt="">                
              </div>
              <div class="col-9">
                <a href="#"><h3>Ginecología</h3></a>               
                <p>La ginecología es una especialidad de la medicina que se centra en el estudio del sistema reproductor femenino. Los profesionales que se ocupan de esta especialidad se conocen como ginecólogos, que son los especialistas que atienden todas las patologías relacionadas con los órganos femeninos como el útero, la vagina y los ovarios, y también de la prevención de enfermedades futuras.</p>
                <p></p>               
              </div>
            </div>
            <!-- Fin Navegación páginas -->
          </div>         
          </div>
          <!-- Fin Aside -->
        </div>
    </div>
    <!-- Fin Main -->
    <!-- Footer -->
    <div class="container-fluid bg-inverse text-white py-3">
      <div class="container text-center">    
        
      </div>
    </div>
    <!-- Fin Footer -->
      
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>