<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-12 03:40:43
         compiled from "application\views\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322795462c54506c4e6-51602834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52294095e4a3e3fc04ceb2e768fdf04b0371ef4f' => 
    array (
      0 => 'application\\views\\templates\\index.tpl',
      1 => 1415760037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322795462c54506c4e6-51602834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5462c54557c8b2_43656127',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462c54557c8b2_43656127')) {function content_5462c54557c8b2_43656127($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Quimkat</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/css.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top nave" role="navigation" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle color" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only color">Click</span>
                        <span class="icon-bar color"></span>
                        <span class="icon-bar color"></span>
                        <span class="icon-bar color"></span>
                    </button>
                    <a class="navbar-brand" id="logo" href="index.html">Quimkat</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="color_blanco"><span class="glyphicon glyphicon-fire"></span> Quimkat <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#primero">¿Quienes somos?</a></li>
                                    <li><a href="#segundo">¿Qué ofrecemos?</a></li>
                                    <li><a href="#tercer">¿Donde estamos?</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#cuarto">Objetivos</a></li>
                                    <li><a href="#quinto">Requerimientos</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#sexto">metodología</a></li>
                                </ul>
                            </li>
                        <li><a href="#" id="color_blanco">Temas</a></li>
                        <li><a href="#" id="color_blanco">Ayuda</a></li>
                        <li>
                            <!-- Button trigger modal -->
                            <button class="btn btn-primary margen" data-toggle="modal" data-target="#myModal1">
                            Ingresar
                            </button>
                        </li>
                        <li>
                            <!-- Button trigger modal -->
                            <button class="btn btn-danger margen" data-toggle="modal" data-target="#myModal2">
                            Registrarse
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid headee" id="primero">
            <div class="row fondo">
                <div class="col-md-3">
                    <div id="mio">
                        <h4 style="text-align: center; color: white">Somos una empresa</h4>
                        <p>Nos dedicamos a generar un sistema eficaz para mejorar y optimizar la enseñanza del curso de química, hemos iniciado en el colegio San Juan de Dios, pero pensamos seriamente incluír a más colegios en este proyecto.</p>
                    </div>
                    <div id="mio2">
                        <h4 style="text-align: center; color: white">Somos un E-learning </h4>
                        <p>No solo nos proyectos, nosotros educamos. Mostramos una realidad alternativa promoviendo el desarrollo de la lógica mediante juegos mentales de rapidez y habilidad en los cuales un joven educando se llevé lo mejor del curso.</p>
                    </div>
                </div>
                <div class="col-md-6 letra_ubuntu" style="text-align:center" >
                    <p>
                        <span style="font-size: 70px;"> Bienvenidos a </br>
                        <span class="glyphicon glyphicon-fire"></span></br></span>
                        <span id="logo1" style="font-size: 100px;">Quimkat</span>
                    </p>
                    <div class="row">
                        <div class="col-md-3"><h1><button id="mostrar" class="label label-default empresa"><a href="javascript:void(document.getElementById('mio').style.display='block')">Empresa</a></button></h1></div>
                        <div class="col-md-3"><h1><button  id="ocultar" class="label label-default e-learning"><a href="javascript:void(document.getElementById('mio2').style.display='block')">E-learning</a></button></h1></div>
                        <div class="col-md-3"><h1><button  class="label label-default software"><a href="javascript:void(document.getElementById('mio3').style.display='block')">Software</a></button></h1></div>
                        <div class="col-md-3"><h1><button  class="label label-default novedad"><a href="javascript:void(document.getElementById('mio4').style.display='block')">Novedad</a></button></h1></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="mio3">
                        <h4 style="text-align: center; color: white">Somos un Software </h4>
                        <p>Somos automáticos generamos nuestras propias pruebas basadas en el conocimiento del alumno, y los indicadores planteados en la parte final de nuestro proyecto; generamos la competencias precisas para cada estudiante.</p>
                    </div>
                    <div id="mio4">
                        <h4 style="text-align: center; color: white">Somos una Novedad</h4>
                        <p>No solo en el perú, si no en todo el mundo no teniamos un aplicativo web para trabajar química, No con las ultimas mejoras en UX y programación orientada al servicio (SOA); siendo esta ultima un determinante en nuestro proyecto.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="segundo">
            <div class="row">
                <div class="col-md-4 aptitud letra_ubuntu"> 
                    <div class="circle">
                        <img class="img-circle" src="img/smile.jpg" alt="Quimica" style="width: 140px; height: 140px;">
                        <img class="img-circle" src="img/estudiante1.jpg" alt="Quimica" style="width: 140px; height: 140px;">
                        <img class="img-circle" src="img/estudiante2.jpg" alt="Quimica" style="width: 140px; height: 140px;">
                    </div>
                    <div class="al_lado"><h4 class="page_header">Aptitud y actitud </br> <small>Se aumenta el interés de los jovenes en el curso de química</small></h4> 
                        <p>Se propone una idea educativa nueva y mejorada para despertar el interés casi perdido en nuestro jovenes estudiantes, buscando siempre en ellos cumplir con las espectativas de nuestro publico general.</p>
                    </div>
                    <hr class="hr_bonis">
                    <h3>se usarán las siguientes competencias academicas:</h3>
                    <ol>
                        <li>Estandarizar los temas, no para que tengan la misma evaluación; Si no para que puedan aprender lo mismo cada alumno a su ritmo de trabajo.</li>
                        <li>Generar Items de trabajo (modulos) de entre los cuales se puedea crecer mientras se avanza entre los mismos. </li>
                        <li>Determinar una competencia gradual entre los mismos jovenes dandoles niveles y logros!</li>
                        <li>Se busca la idea de "mejorar y controlar", el sistema genera evaluaciones para cada alumno midiendo su desempeño curso.</li>
                        <li>Mejorar el sistema de calificación de alumnos usando valores y el modelo de ALbert Einsten "Pero si juzgas a un pez por su habilidad de trepar un árbol, vivirá toda su vida creyendo que es estúpido".</li>
                        <li>Se busca determinar la capacidad creativa del alumno y no solo su "inteligencia" memorística. </li>
                        <li>Muestra al alumno los valores sociales y el desarrollo humano de toda sociedad.</li>
                    </ol>
                </div>
                <div class="col-md-4 mejoras letra_ubuntu" style="text-align: center;"> 
                    <div class="circle" style="margin-top: 10px">
                        <img class="img-circle" src="img/estudiante6.jpg" alt="Quimica" style="width: 140px; height: 140px;">
                        <img class="img-circle" src="img/estudiante4.jpg" alt="Quimica" style="width: 140px; height: 140px;">
                        <img class="img-circle" src="img/estudiante5.jpg" alt="Quimica" style="width: 140px; height: 140px;">
                    </div>
                    <div class="al_lado">
                        <h3 style="text-align: center;">¿Qué estas esperando?</h3>
                        <p>¿Cansado de no entender química?; nosotros no solo tenemos la solución, somos la solución.</p>
                    </div>
                    <div class="al_lado margin_top">
                        <h3 style="text-align: center;">La química dejo de ser aburrida</h3>
                        <p>paso de ser la vieja renegona a nuestra dulce y tierna amante de noches tibias.</p>
                    </div>
                    <div class="al_lado margin_top">
                        <h3 style="text-align: center;">Ven ahora! compite con tus amigos</h3>
                        <p>¡REGISTRATE! prueba tu rapidez mental, duelea con tus amigos.</p>
                    </div>
                    <br/>
                    <hr class="hr_bonis">
                    <p>¿Eres docente y te interesa el universo de quimkat? </p>
                    <p>¿Te sientes capacitado para esta aventura?</p>
                    <p>¿Tienes al menos 2 años enseñando el fabuloso mundo de la química?</p>
                    <p>¿Consideras que puedes dictar catedrá desde web?</p>
                    <p>¿qué tal el horario nocturno?</p>
                    <p>¿Haz usado antes un e-learning?</p>
                    <p>¿Estas dispuesto a cambiar el mundo?</p>
                    <p>Envianos tu Apply <a href="#"> Pronto</a></p>
                </div>
                <div class="col-md-4 capacidad letra_ubuntu">
    <div class="circle" style="margin-top: 10px">
       <img class="img-circle" src="img/docente.jpg" alt="Quimica" style="width: 140px; height: 140px;">
	<img class="img-circle" src="img/estudiante3.jpg" alt="Quimica" style="width: 140px; height: 140px;">
<img class="img-circle" src="img/colegio.jpg" alt="Quimica" style="width: 140px; height: 140px;">
      </div>
      <div class="al_lado"><h4 class="page_header">Mejoras academicas </br> <small> Se propone agilizar y estandarizar el curso de quimica para los jovenes</small></h4> 
      <p>Se agilizan los temas buscando siempre las mejores competencias y las mejoras formulaciones de problemas y teoría moderna de desarrollo comunitario</p>
      </div>
   <hr class="hr_bonis">
   <h3>se han realizado las siguientes mejoras:</h3>
   <ul>
   <li>Los temas ya no son disernidos por un libro de trabajo, se utiliza material de <strong>examenes de admisión</strong> para generar nuestros examenes los cuales estan orientados al desarrollo personal del alumno. </li>
   <li>El sistema no sustituye el docente, pero predica un ejemplo siendo de gran ayuda durante el desarrollo de las clases de cualquier rama educativa. </li>
   <li>Determina la idea básica de compartir archivos, descargar sistemas con el propio docente.</li>
   <li>El docente puede y será gestor de intercambio de información despejando las dudas e induciendo las buenas practicas dentro de los jovenes.</li>
   </ul>
  </div>

  </div>
</div>

</div>



<div class="container-fluid" id="tercer">

<div class="row encuentra">
  <div class="col-md-8 izquierda letra_ubuntu">

    <p>Este humilde sistema está desarrollado para todo aquel que desee y pueda utilizarlo, pero debemos reconocer (y agradecer) a la empresa que nos dio cabida por primera vez     soporto a nuestro desarrollador/Analísta y sobre todo desistio miles de veces de asesinarlo.</p>
    <h3>Muchas gracias: IEP SAN JUAN DE DIOS; sin su ayuda esto no hubiera sido posible.</h3>
    <div class="row">
      <div class="col-md-4 aux_1">
        <img src="img/colegio.jpg" class="img-circle" style="width: 140px; height: 140px;">
	<img class="img-circle" src="img/estudiante6.jpg" alt="Quimica" style="width: 140px; height: 140px;">
	<h3>10 Razones para confiar en nosotros.</h3>
        <ol>
        <li> Clases interactivas</li>
        <li> Desarrollo del niño/adolescente</li>
        <li>Los mejores docentes (QUE LES QUEDE CLARO!)</li>
        <li> Buscamos siempre nuevos talentos, vacantes abiertas!</li>
	  <li> Utilizamos el sistema QuimKat para desarrollar a nuestro alumnos.</li>
	  <li> Buscamos la formación integral de las personas</li>
	  <li> Más de 10 años de experiencia academica.</li>
	  <li> Expociencia, Concursos de Matemáticas, Concursos de Cuentos, Exposiciones de Historia en universidades.</li>
	  <li> Más de 10 años de experiencia academica.</li>
	 <li>  "No juzgues a un pez por su capacidad para trepar arboles".</li>
	<li>  Yo todavía trabajo ahí, (un comentario de su desarrollador favorito).</li>
        </ol>
      </div>
      <div class="col-md-6">
        <h3>¿Consultas?; envianos un mail </h3> 
        <small>No todos los campos son obligatorios.</small>
        <!-- contigo esta mi corazon -->	
        <form>
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="email" class="form-control" placeholder="Tu correo">
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" placeholder="Tu nombre">
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                <input type="text" class="form-control" placeholder="Dirección...">
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></span>
                <input type="text" class="form-control" placeholder="Empresa...">
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                <input type="text" class="form-control" placeholder="Teléfono...">
            </div>
            <br/>
            <div class="input-group" >
                <span class="input-group-addon"><span class="glyphicon glyphicon-fire"></span></span>
                <textarea class="form-control" rows="6" placeholder="¿Qué necesitas?; estamos para ayudarte..."></textarea>
            </div>
            <br/>
            <input type="submit" class="btn btn-success btn-lg del" value="Enviar">  
            <input type="reset" class="btn btn-danger btn-lg del" value="Delete">
            <!-- contigo esta mi corazon -->		 
        </form>
	</br>
      </div>
     
	
    </div>
  </div> 
  <div class="col-md-4 derecha letra_ubuntu">

    <h2 style="text-align: center; text-decoration:underline;">Dirección Estimada</h2>

<ul class="list-group">
  <li class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-search"></span> Localización: Av. Angelica Gamarra 1506; Al frente del Mercado Consac Calle 24. Frente al parque Universitario, camino directo desde el banco tercera cuadra, frente al parque.</li>
  <li class="list-group-item list-group-item-info"> <span class="glyphicon glyphicon-search"></span> Horarios de atención: L - V 8:00 am hasta 5:00pm</li>
  <li class="list-group-item list-group-item-warning"> <span class="glyphicon glyphicon-warning-sign"></span> Datos Importantes: Colegio de 3 pisos, frente al parque. Colores: Verde-Crema. Buzo: Negro-Verde-Crema. </li>
  <li class="list-group-item list-group-item-danger"> <span class="glyphicon glyphicon-earphone"></span> Telefono: 015572275</li>
</ul>
	
	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.pe/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=SAn+Juan+De+Dios,+Los+Olivos,+Lima,+Calle+24&amp;aq=&amp;sll=-11.992613,-77.09747&amp;sspn=0.008847,0.014645&amp;ie=UTF8&amp;hq=&amp;hnear=Calle+24,+San+Martin+De+Porres,+Lima&amp;ll=-12.006802,-77.069933&amp;spn=0.017693,0.02929&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small>Buscar a <a style="color: white; text-decoration: underline;" href="https://maps.google.com.pe/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=SAn+Juan+De+Dios,+Los+Olivos,+Lima,+Calle+24&amp;aq=&amp;sll=-11.992613,-77.09747&amp;sspn=0.008847,0.014645&amp;ie=UTF8&amp;hq=&amp;hnear=Calle+24,+San+Martin+De+Porres,+Lima&amp;ll=-12.006802,-77.069933&amp;spn=0.017693,0.02929&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">San Juan De Dios</a> en Google Maps</small>
  </div>
</div>

</div>


<div class="container-fluid" id="cuarto">
<div class="row">
<div class="col-md-4 obj1">
	<h2 class="page_header" style="text-align: center; border: dashed 2px white; padding: 5px;">Mejorar la actitud frente al curso</h2>

       <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/estudiante_f1.jpg"alt="Generic placeholder image">
        </div>
        <div class="col-md-7" style="text-align: justify;">
          <b>Problemática: </b>Los Alumnos adolescentes entre 13 y 17 años, tienen el enorme problema de no presentar un interés curioso por las actividades químicas de todos los días, por ello se plantea la necesidad de un sistema diferente, un sistema que pueda entender a los alumnos, que en lugar de evaluarlos pueda motivarlos a seguir investigando. </br>
        </div>
      </div>
<HR class="hr_bonis">
	<div class="row featurette">
	 <div class="col-md-7" style="text-align: justify;">
          <b>Necesidad del Sistema: </b>Aparecé una Necesidad del sistema (Esta parte la detallaré mejor en la siguiente sección de "Metodología") algo obligatorio a cumplir y que debe de ser analizado antes de llevar cualquier otro requerimiento, está es la parte fundamental de nuestro sistema: "Crear un Software que sea interesante para el alumno, aumentar su experiencia usando el diseño y el programación para ello"; explicando un poco este punto diremos que el Software debe de crear no solo una interfaz agradable, si no buscar que la SENSACIÓN que transmita al usuario sea de Curiosidad y compromiso, Usar la programación no para "logear" o hacer funciones complejas (que el usuario no pueda entender) si no aplicar ideas sencillas generando la SENSACIÓN de que el usuario es un experto en el sistema.</br>
        </div>
        <div class="col-md-5">
	</br>
          <img class="featurette-image img-responsive" src="img/estudiante4.jpg"alt="Generic placeholder image"> </br>
	<img class="featurette-image img-responsive" src="img/estudiante2.jpg"alt="Generic placeholder image">
        </div>
       
      </div>
<HR class="hr_bonis">
  <div class="row featurette">
        <div class="col-md-5">
	</BR>
          <img class="featurette-image img-responsive" src="img/colegio.jpg"alt="Generic placeholder image"> </BR>
	<img class="featurette-image img-responsive" src="img/docente.jpg"alt="Generic placeholder image">
        </div>
        <div class="col-md-7" style="text-align: justify;">
          <b>Como lograremos mejorar la actitud frente al curso de química:</b> Se plantea la creación de un sistema usando tiempos para medir el desempeño del alumno, usando una escala de tiempos sencilla: 
	<ul>	
		<li><b>Si se utiliza </b> menos de una hora en un módulo se desbloqueará el primer logro y se evaluará el examen de rango S</li>
		<li><b>Si se utiliza </b> menos de dos horas en un módulo se desbloqueará el segundo logro y se evaluará el examen de rango A</li>
		<li><b>Si se utiliza </b> menos de tres horas en un módulo se evaluará el examen de rango B</li>
		<li><b>Si se utiliza </b> menos de cuatro horas en un módulo se evaluará el examen de rango C</li>
	</ul>
             Estos datos cambiarán por cada módulo, debído al grado de dificultad y el desempeño del alumno en todo el módulo anterior; si es el primer módulo se medirá por tiempos; la idea es evaluar al alumno según su propio desempeño buscando siempre su desarrollo personal e intelectual.
        </div>
      </div>
	
	  </br>
	
</div>
<div class="col-md-4 obj2">
		<h2 class="page_header" style="text-align: center; border: dashed 2px white; padding: 5px;">Simplificar, Caracterizar, Estandarizar y Mostrar conocimientos específicos ,reales y completamente actualizados.</h2>
	<div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/docente1.jpg"alt="Generic placeholder image">
        </div>
        <div class="col-md-7" style="text-align: justify;">
          <b>Problemática: </b>Los conocimientos de los alumnos no son estandar (incluso en su mismo grado y sección); el principal problema fue la falta de un sistema que ordenará la curricula de estos educandos y la mala impresión de que el docente no debe abarcarse a cumplir ciertos estandarés de calidad especificos establecidos al inicio del año escolar. </br>
        </div>
      </div>
<HR class="hr_bonis">

<div class="row featurette">
	 <div class="col-md-7" style="text-align: justify;">
          <b>Necesidad del Sistema: </b>Aparecé una nueva Necesidad del sistema (Esta parte la detallaré mejor en la siguiente sección de "Metodología") algo obligatorio a cumplir y que debe de ser analizado antes de llevar cualquier otro requerimiento, está es la parte fundamental de nuestro sistema: "Crear un Software que permita al usuario (docente) ingresar, descargar y actualizar nueva información" la idea principal es llevar acabo una idea para que el docente final pueda observar sus errores y corregirlos; dejarlo investigando y ayudandosé con ayuda de lo que otros docentes puedan haber subido al Sistema; se propone ideas de reuniones virtuales entre los docentes del campo para manifiestar un estandar entre los contenidos de la web.</br> El alto contenido de experiencia en los docentes y las inversiones curiosidas de los alumnos son la nueva necesidad del sistema para poder controlar su aprendizaje; además se dispone imponer un usuario "Administrador" que pueda ingresar docentes o retirarlos debido a su participación y/o evaluación; así mismo este usuario debe de poner ingresar nuevos alumnos, coordinar horarios y definir los temas "Estandarés" este será el mediador de las reuniones.
        </div>
        <div class="col-md-5">
	</br>
          <img class="featurette-image img-responsive" src="img/docentes_reu1.jpg"alt="Generic placeholder image"> </br>
	<img class="featurette-image img-responsive" src="img/docentes_reu2.jpg"alt="Generic placeholder image">
        </div>
       
      </div>
<HR class="hr_bonis">
<div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/docentes_reu3.jpg"alt="Generic placeholder image">
        </div>
        <div class="col-md-7" style="text-align: justify;">
          <b>Como lograremos estandarizar, sintetizar el enorme conocimiento que existe sobre química: </b>la idea básica es plantear una mesa de reuniones fuera o dentro del sistema (reunión virtual) y una que otra reunión física entre los propios docentes; colocar a un administrador / coordinador del sistema y de los mismos docentes que evalue y trabaje como mediador dentro del sistema; siendo su ultima palabra la ley final sobre el mismo (al menos en cuanto a reuniónes, estandarés y horarios se refiera). </br> Es menester escoger correctamente a esta persona usando diferentes criterios, ademas se habilitará una web-site especial para el; dandolé la posibilidad de administrar la mayoria de servicios otorgados por los usuarios finales.
        </div>
      </div> </br>
	
</div>
<div class="col-md-4 obj3">
	<h2 class="page_header" style="text-align: center; border: dashed 2px white; padding: 5px; ">Evaluar los conocimientos característicos de los educandos en cuanto al desarrollo específico que han tenido en el sistema.</h2>	
<div class="row featurette">
<div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/alumno1.jpg"alt="Generic placeholder image"> </br>
	<img class="featurette-image img-responsive" src="img/alumno2.jpg"alt="Generic placeholder image">
        </div>
        <div class="col-md-7" style="text-align: justify;">
          <b>Problemática: </b> Actualmente existen campos donde evaluar a un adolescente se vuelve un acto complejo de Dios; existen problemas fuerte en cuanto a decidir: "Se puede evaluar a un pez por su habilidad para trepar arboles"; efectivamente hay jovenes con enormes capacidades en otras áreas y no necesariamente en química.</br> Pero esto no quiere decir que sencillamente deban abandonarla; según Albert Einstein el principal problema está en la baja capacidad del docente para evaluar a sus alumnos, la metodología tradicional plantea un examén generador de competencia entre los alumnos; esto erá valido hace 80 años, en este momento es menester idear una manera de lograr cumplir los objetivos del alumno, buscando la mejor manera de desarrollar su conocimiento; buscando una competencia (si) pero una competencia entre los chicos con su misma habilidad; les aseguro por experiencia de docente que si le das un problema práctico a un chico teórico esté tardará mas en desarrollarlo que otro con conocimiento más específico. 
        </div>
      </div>
<HR class="hr_bonis">
<div class="row featurette">
 <div class="col-md-7" style="text-align: justify;">
          <b>Necesidad del sistema: </b> Es aquí donde aparecé una nueva necesidad el sistema (una orden directa del usuario, que debé de analizarse antes de llevarse acabo); la necesidad de generar un examen completo no solo para los monos que saben trepar, si no para los peces que nadan mejor que nadie; buscar en lo que es bueno el alumno y en como poder mejorar aún más su talento; probablemente la química no sea lo suyo pero la lógica que desarrolla al conocer el mundo es menester para desarrollarse en cualquier campo laboral/profesional, entonces aparecé la idea de que el sistema debe de grabar la capacidad del alumno y decidir por si mismo la manera de como evaluarlo; y se plantea hacerlo de la siguiente manera:
<ul>
	<li>Mostrár una gráfica estadística de cada alumno al final de cada módulo.</li>
	<li>Considerar el tiempo que demorá en realizar un módulo para la evaluación del mismo.</li>
	<li>Considerar diferentes problemas de sentido practico y/o teórico para suministrar información para el alumno.</li>
	<li>Se busca crear un dato considerable de información por ello es menester idear las mejores practicas por cada alumno.</li>
</ul>
        </div>
<div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/alumno3.jpg"alt="Generic placeholder image"> </br>
	<img class="featurette-image img-responsive" src="img/alumno4.jpg"alt="Generic placeholder image"> </br>
	<img class="featurette-image img-responsive" src="img/alumno5.jpg"alt="Generic placeholder image">
        </div>
       
      </div>
<HR class="hr_bonis">

<div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/alumno6.jpg"alt="Generic placeholder image">
        </div>
        <div class="col-md-7" style="text-align: justify;">
          <b>Como lograremos Evaluar correctamente: </b>Planteando toda la temática anteriormente mencionada en la necesidad del sistema; usando esto podremos configurar un sistema hecho para cualquier estudiante estimulando su capacidad principal.
        </div>
      </div> </br>
	
</div>
</div></div>
</div>

<div class="container-fluid" id="quinto">
<div class="row tablita">
<div class="col-md-2">
</div>
<div class="col-md-8">
<h2 class="page_header" style="text-align: center;">Matríz de Objetivos Funcionales y No Funcionales</h2>

<div class="row">
Leyenda: </br>
<div class="col-md-6">
<table class="table table-condensed">
	<tr>
	<td>Requerimientos funcionales :</td>
	<td> <span class="label label-info" style="border: 1px solid black"> Azul</span></td>
	
	
	</tr>

	<tr>
	<td>Requerimientos No Funcionales :</td>
	<td><span class="label label-danger"  style="border: 1px solid black"> Rojo</span></td>
	
	
	</tr>
	
	<tr>
	<td>Docente :</td>
	<td><span class="label label-default"  style="border: 1px solid black"> Blanco</span></td>
	</tr>
	
	<tr>
	
	<td>Coordinador :</td>
	<td><span class="label label-success"  style="border: 1px solid black"> Verde</span></td>
</tr>
	<tr>

	<td>Alumno :</td>
	
	<td><span class="label label-warning"  style="border: 1px solid black"> Naranja</span></td>
	</tr>
	
</table>
</div>
<div class="col-md-6">
<table class="table table-condensed">

	<tr>

	<td>Área Académica (Coordinación / Profesores) :</td>
	
	<td><span class="label label-danger"  style="border: 1px solid black"> Rojo</span></td>
	</tr>
	<tr>

	<td>Área Coordinación (dirección / Coordinación) :</td>
	
	<td><span class="label label-info"  style="border: 1px solid black"> Azul</span></td>
	</tr>

	<tr>

	<td>Área Alumnado (Padres / Alumnos) :</td>
	
	<td><span class="label label-success"  style="border: 1px solid black"> Verde</span></td>
	</tr>
	
</table>
</div>
</div>
	<table class="table table-condensed">

<tr >
<td class="active"> Roles / Áreas</td>
<td class="success">Objetivos / Requerimientos</td>
<td class="warning">Mejorar la actitud frente al curso</td>
<td class="warning">Simplificar, Caracterizar, Estandarizar y Mostrar conocimientos específicos ,reales y completamente actualizados</td>
<td class="warning">Evaluar los conocimientos característicos de los educandos en cuanto al desarrollo específico que han tenido en el sistema</td>
</tr>

<tr>
<td class="active"> Coordinador</td>
<td class="info">Listar Usuario</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active">  Coordinador</td>
<td class="info">Crear Usuario</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active"> Coordinador</td>
<td class="info">Modificar Usuario</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active">  Coordinador</td>
<td class="info">Eliminar Usuario</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="success"> Docente</td>
<td class="info">Agregar Restricción a un Átomo</td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="success"> Docente</td>
<td class="info">Actualizar Restricción en la Propiedad Periódica</td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="success"> Docente</td>
<td class="info">Actualizar Restricción en la Configuración Electrónica</td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="warning"> Alumno</td>
<td class="info">Visualizar Elementos Químicos de Metales y No Metales</td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="warning"> Alumno</td>
<td class="info">Realizar Consultas sobre elementos químicos de metales y no metales</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="warning"> Alumno</td>
<td class="info">Visualizar Tabla periódica</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
</tr>


<tr>
<td class="success"> Docente</td>
<td class="info">Gestión de Niveles</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="warning"> Alumno</td>
<td class="info">Realizar Actividad Preguntas por Selección de elementos químicos y reacciones químicas</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="warning"> Alumno</td>
<td class="info">Realizar Actividad Memoria de elementos químicos</td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="warning"> Alumno / Docente </td>
<td class="info">Listar Archivos</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active"> Coordinador / Docente</td>
<td class="info">Subir Archivos</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>


<tr>
<td class="active"> Coordinador / Docente</td>
<td class="info">Modificar Archivos</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active"> Coordinador / Docente</td>
<td class="info">Eliminar Archivos</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="success"> Alumno / Docente</td>
<td class="info">Descargar Archivos </td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active"> Coordinador / Docente</td>
<td class="info">Visualizar Información de Alumno</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active"> Coordinador </td>
<td class="info">Realizar Consultas Personalizadas sobre Alumno</td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active"> Coordinador </td>
<td class="info">Generar reporte</td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>


<tr>
<td class="active"> Coordinador</td>
<td class="info">Agregar Logros</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active">Coordinador </td>
<td class="info">Modificar Logros</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="active"> Coordinador</td>
<td class="info">Evaluar Alumno</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="success"> Docente </td>
<td class="info">Fijar Notas y Administrar Puntos</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
</tr>

<tr>
<td class="danger"> Académico </td>
<td class="danger">El sistema no busca reemplazar al docente, pero si ser una ayuda para él; proponiendo  una lógica diferente y enseñando atreves de competencias marcadas.
</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="info"> Coordinación </td>
<td class="danger">El sistema debe PROPONER no disponer temas adecuados ya llenados por el docente con anterioridad; se desbloqueará un nuevo módulo por logro, a su vez se permite verificar el modulo anterior.
</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

<tr>
<td class="danger"> Académico </td>
<td class="danger">El sistema debe de poder permitir subir nueva información por el docente.
</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
</tr>

<tr>
<td class="danger"> Académico </td>
<td class="danger">Adecuar un sistema donde los docentes puedan ser agregados y administrados, así como los alumnos.</td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>

</tr>

<tr>
<td class="success"> Alumnado </td>
<td class="danger">Desarrollar un sistema sencillo para maquetar y consultar las notas rápidamente, además de tener hechas ya las evaluaciones SIN CAERSE</td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
</tr>


<tr>
<td class="success"> Alumnado </td>
<td class="danger">Modelar un sistema inteligente con la capacidad de ser aceptado por los usuarios finales</td>
<td style="text-align:center;"> <span class="glyphicon glyphicon-remove" style="color:red;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
<td style="text-align:center;" > <span class="glyphicon glyphicon-ok" style="color:green;"></span></td>
</tr>

</table>
	
</div>
<div class="col-md-2">

</div>



</div>
</div>

<div class="container-fluid" id="sexto">
<div class="row metodologia">
<h1 class="page_header aux2">Solo para informáticos: "Desición de la Metodología"</h1>
<div class="col-md-3">
<h3 class="page_header">La siguiente tabla muestra:</h3>
<p style="text-align:justify;">
Como el Analísta / Desarrollador decide dejar de lado muchas metodologías para desarrollar un híbrido de las mismas y atenuarse al trabajo de química que tenia pensado para este proyecto; <a href="front.html"> Quimkat</a> debe su desarrollo a este diagrama de trabajo. </br>
Durante las "Necesidades" del software se especifican las razones por las cuales cada metodología fue dejándose de lado; como habiamos mencionado un Necesidad parte de la SENSACIÓN que le produsca al usuario final, o de la USABILIDAD que tendrá la web para el usuario final (Alumnos, Docentes, Coordinadores); por esto es menester plantear la metodología correcta. </br>
Lastimosamente no exista tal metodología de desarrollo, en la tabla se puede ver como se generá un híbrido para cubrir todas las necesidades del sofware. </p>

Leyenda: </br>

<ul>
	<li><span class="glyphicon glyphicon-ok" style="color: blue;"></span> Realiza la tarea a un 100%; puntaje de +2 </li>
		<li><span class="glyphicon glyphicon-plus" style="color: yellow;"></span> No realiza la tarea, pero se puede mejorar para cumplirla; puntaje de +1 </li></li>
	<li><span class="glyphicon glyphicon-remove" style="color: red;"></span> No realiza la tarea y no contempla solución para ella; puntaje de +0 </li></li>
</ul>

</div>
<div class="col-md-9">
	
<table class="table table-bordered">

	<tr class="info">
	<td> Metodología / Necesidad</td>	
	<td> RUP </td>
	<td> SCRUMM</td>
	<td> UX </td>
	<td> Kanban </td>
	<td> Híbrido 1 (Scrumm - UX) </td>
	<td> Híbrido 2 (Scrumm - UX - RUP)</td>
	<td> Híbrido 3 (Scrumm - UX - RUP - Kanban) SURK</td> 
	</tr> 

	<tr>
	<td class="active"> Se requiere una metodología capaz de separar los múltiples módulos del sistema en lugar de agruparlos todos a un solo análisis.</td>	
	<td style="text-align: center;"> <span class="glyphicon glyphicon-remove" style="color: red;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td>
	</tr>
	
	<tr>
	<td class="success"> Se requiere una programación por partes.</td>	
	<td style="text-align: center;"> <span class="glyphicon glyphicon-remove" style="color: red;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td>
	</tr>

	<tr>
	<td  class="warning"> Necesito documentar todo el proceso de desarrollo, señalando casos y vistas donde se muestre en un diagrama las posibles mejores a realizar. </td>	
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-remove" style="color: red;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td> 
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-remove" style="color: red;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td>
	</tr>

	<tr>
	<td class="success"> Se requiere una metodología orientada en Aumentar la experiencia del usuario dentro de la web para captar su atención </td>	
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td> 
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-remove" style="color: red;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td>
	</tr>

	<tr >
	<td class="active"> Desarrollar una metodología que me ayude a trabajar con las excepciones que existen en química.  </td>	
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-remove" style="color: red;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-remove" style="color: red;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td> 
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td>
	</tr>

	<tr>
	<td class="danger"> Modelar la capacidad para desarrollar un “semáforo” que me avise de posibles errores. </td>	
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-remove" style="color: red;"></span></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td> 
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-plus" style="color: yellow;"></td>
	<td style="text-align: center;"> <span class="glyphicon glyphicon-ok" style="color: blue;"></span> </td>
	</tr>

	<tr style="background:black; color:white;">
	<td> Puntajes </td>	
	<td style="text-align: center;"> 5 </td>
	<td style="text-align: center;"> 6</td>
	<td style="text-align: center;"> 4</td> 
	<td style="text-align: center;"> 7</td>
	<td style="text-align: center;"> 8</td>
	<td style="text-align: center;"> 10</td>
	<td style="text-align: center;"> 12</td>
	</tr>
</table>	
	
</div>
</div>
</div>

      <!-- FOOTER -->
       <footer>
        <p class="pull-right"><a href="#"><span class="glyphicon glyphicon-chevron-up"></span></a></p>
	
      	<div class="container-fluid letra_ubuntu">
	<div class="row">
		<div class="col-md-2">
		<h2><a href="#">CONTACTO</a></h2>
		</div>
		<div class="col-md-4">
		<h2><a href="#">DESAROLLO</a></h2>
		</div>
		<div class="col-md-4">
		<h2><a href="#">SERVICIOS</a></h2>
		</div>
		<div class="col-md-2">
		
		</div>
	</div>
	</div>
        <p>&copy; 2014 San Juan De Dios SAC &middot; <a href="index.html">Derechos Reservados</a> &middot; <a href="https://www.facebook.com/frank.izrael.delarosa">Free Lance wampy</a></p>
      </footer>

<!-- Modal 1 INGRESOS -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content letra_ubuntu">
      <div class="modal-header cabeza">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title " id="myModalLabel">¡Bienvenido!; Si no tienes un usuario puedes: <button class="btn btn-danger" style="float: right; margin: 0px 10px 0px 0px;" data-toggle="modal" data-target="#myModal2">
 	Registrarte
	</button></h4> 
      </div>
      <div class="modal-body ingresos">
	<div class="row">
   <!-- FORM login--> 
        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
seguridad/validar/login" method="post">
            <div class="col-md-6 mode1">
                <div class="input-group" style="margin-bottom: 5px;">
                    <!-- usuario --> 		 
                    <span class="input-group-addon proba"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" placeholder="Tu correo" name="mail">
                </div>
                <div class="input-group">
                    <!-- pass -->
                    <span class="input-group-addon proba"><span class="glyphicon glyphicon-eye-close"></span></span>
                    <input type="password" class="form-control" placeholder="Tu password" name="pass">
                </div>
		<br/>
            </div>
            <div class="col-md-6">
		<p>Siguenos en: </p>
		<ul class="list-unstyled">
                    <li> Nuestros Canales de <a href="#"><img src="img/you.jpg"></a></li>
                    <li> Nuestro rostro en <a href="#"><img src="img/fb.png"></a></li>
                    <li> Nuestras imagenes en <a href="#"><img src="img/twi.png"></a></li>
                    <li> Nuestras ofertas en <a href="#"><img src="img/in.png"></a></li>
		</ul>
            </div>
	</div>
        
      </div>
      <div class="modal-footer cabeza">
        
	<input type="submit" class="btn btn-default proba" value="logear">
      
      <button class="especial"  data-toggle="modal" data-target="#myModal3">
  Olvide mi contraseña
  </button>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal 2 REGISTRO -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content letra_ubuntu">
      <div class="modal-header cabeza">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Uneté a está aventura:</h4>
      </div>
      <div class="modal-body">
       <div class="row">
		<div class="col-md-6 mode1">
		<form ACTION="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/usuario/usuario/insertar" METHOD="post">	
			<div class="input-group" style="margin-bottom: 5px;">
           			  <span class="input-group-addon proba">@</span>
           			   <input name="mail_add" type="email" class="form-control" placeholder="Tu correo">	
       			   </div>

			<div class="input-group" style="margin-bottom: 5px;">
            			 <span class="input-group-addon proba"><span class="glyphicon glyphicon-eye-open"></span></span>
            			  <input name="pass_add" type="password" class="form-control" placeholder="Tu password">
          			</div>
			
			<div class="input-group" style="margin-bottom: 5px;">
            			 <span class="input-group-addon proba"><span class="glyphicon glyphicon-eye-close"></span></span>
            			  <input name="pass_add2" type="password" class="form-control" placeholder="Tu password otrá vez ">
          			</div>

			<div class="input-group" style="margin-bottom: 5px;">
            			 <span class="input-group-addon proba"><span class="glyphicon glyphicon-retweet"></span></span>
            			  <input name="colegio_add" type="text" class="form-control" placeholder="Colegio">
          			</div>


			<div class="input-group" style="margin-bottom: 5px;">
            			 <span class="input-group-addon proba"><span class="glyphicon glyphicon-earphone"></span></span>
            			  <input name="phone_add" type="text" class="form-control" placeholder="Telefono">
          			</div>
			
			<div class="input-group" style="margin-bottom: 5px;">
            			 <span class="input-group-addon proba"><span class="glyphicon glyphicon-user"></span></span>
            			  <input name="user_add" type="text" class="form-control" placeholder="Tu usuario">
          			</div>
			<hr class="hr_bonis">
			
			<div class="input-group" style="margin-bottom: 5px;">
            			 <span class="input-group-addon proba"><span class="glyphicon glyphicon-user"></span></span>
            			  <input name="nombre_add" type="text" class="form-control" placeholder="Tu Nombre completo">
          			</div>
			<div class="input-group" style="margin-bottom: 5px;">
            			 <span class="input-group-addon proba"><span class="glyphicon glyphicon-user"></span></span>
            			  <input name="apellido_add" type="text" class="form-control" placeholder="Tus apellidos completo">
          			</div>
 		
		</br>
	
		</div>
		<div class="col-md-6">
		<p>Condiciones de uso, sabemos que no va a leerlas pero aquí estan: </p>
		<hr class="hr_bonis">
		<p>
			<ol>
				<li>Se les pide ingresar información real, los usuarios alumnos estan siendo monitoreados para su respectivo avance.</li>
				<li>Toda la información que sumistre es de estricto cuidado personal; se ruega discreción.</li>
				<li>Algunos datos pueden ser vendido a pandilleros Koreanos por la suma de 4$.</li>
				<li>Quimkat, no se hace responsable por los comentarios enviados por el salón de 9no Ciclo.</li>
				<li>Se considera inapropiado entregar una nota por debajo de 16 en esta exposición.</li>
			<ol>
		</p>
		</div>
	
	</div>
      </div>
      <div class="modal-footer cabeza">
	<input type="submit" class="btn btn-default proba" value="Registrar">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	
      </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal 2 OLVIDE CONTRA -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content letra_ubuntu">
      <div class="modal-header cabeza">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Recobrar password</h4>
      </div>
      <div class="modal-body">
        <form>	
	Porfavor ingresa el correo con el que te registraste, te enviaremos una mail con la manera como restablecer tu password:
			<div class="input-group" style="margin-bottom: 5px;">
           			  <span class="input-group-addon proba">@</span>
           			   <input type="email" class="form-control" placeholder="Tu correo">	
       			   </div>
      </div>
      <div class="modal-footer cabeza">
	<input type="submit" class="btn btn-default proba" value="Enviar Mensaje">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      </form>
      </div>
    </div>
  </div>
</div>






   <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.3/jquery.scrollTo.min.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
$(function(){
	
     var a = 'a[href*=#]';
     

     $(a).click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});


<?php echo '</script'; ?>
>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/docs.min.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }} ?>
