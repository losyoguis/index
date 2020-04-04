Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@losyoguis 
Learn Git and GitHub without any code!
Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.


losyoguis
/
losyoguis.github.io
1
00
 Code Issues 0 Pull requests 0 Actions Projects 0 Wiki Security Insights Settings
losyoguis.github.io/portafolio/Autor.html
@losyoguis losyoguis inc
230cc44 5 minutes ago
763 lines (634 sloc)  34.5 KB
  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Juan Carlos Blandón Vargas</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" href="../css/fontello.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="icon" href="img/Fovicon/Yoguis3.ico">
</head>
<body>
	<header>
		<div class="container">
			
			<div class="row">
			<div class="col-12 col-md-6 col-lg-3">	
			<nav class="nav fixed-top bg-dark d-flex justify-content-center">			
				<a href="../index.php" class="nav-link">Los Yoguis</a>
				<a href="../Fase_1.php" class="nav-link">Fase I</a>
				<a href="../Fase_2.php" class="nav-link">Fase II</a>
		   	    <a href="../Fase_3.php" class="nav-link">Fase III</a>
				<a href="../Fase_4.php" class="nav-link">Fase IV</a>
				<a href="../otras/Capacitacion.php" class="nav-link">Cursos</a>
				<a href="../SaladeCine.php" class="nav-link">Sala de Cine</a>
				<a href="../Emisora.php" class="nav-link">Emisora</a>
				<a href="../apoyo/gracias.php" class="nav-link">Apoyo</a>
				<a href="../apoyo/staff.php" class="nav-link">Staff</a>
				<a href="../portafolio/Autor.php" class="nav-link">Facilitador</a>
			</nav>
			</div>
		</div>
			
			<!-- Logo + Menu -->
			
			
			<div class="nav row rounded-top align-items-strech justify-content-between">
				<!-- Logotipo -->
				<div class="col-md-12 col-lg logo d-flex align-items-center justify-content-center justify-content-lg-start">
					<h2>Juan Carlos Blandón Vargas</h2>
					<span class="icono icon-dot"></span>
					<p>Docente TIC - I.E Manuel J. Betancur.</p>					
				</div>

				<!-- Menu -->
				
				<div class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
					<a href="#" class="c-1 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>.</span>
							<i class="icono icon-briefcase"></i>
						</div>
					</a>
					<a href="#" class="c-2 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>..</span>
							<i class="icono icon-user"></i>
						</div>
					</a>
					<a href="#" class="c-3 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>...</span>
							<i class="icono icon-mail"></i>
						</div>
					</a>
				</div>
			</div>
		
			

			<!-- Slider -->
			<div class="row slider">
				<div class="col">
					<div class="carousel slide" id="slider" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider" data-slide-to="0" class="active"></li>
							<li data-target="#slider" data-slide-to="1"></li>
							<li data-target="#slider" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/slide1.jpg" alt="Slide #1" class="d-block img-fluid">
							</div>
							<div class="carousel-item">
								<img src="img/slide2.jpg" alt="Slide #2" class="d-block img-fluid">
							</div>
							<div class="carousel-item">
								<img src="img/slide3.jpg" alt="Slide #3" class="d-block img-fluid">
							</div>
							<div class="carousel-item">
								<img src="img/slide4.jpg" alt="Slide #4" class="d-block img-fluid">
							</div>
							<div class="carousel-item">
								<img src="img/mundial.png" alt="Slide #5" class="d-block img-fluid">
							</div>
						</div>

						<a href="#slider" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Anterior</span>
						</a>
						<a href="#slider" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Siguiente</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main>
		<div class="container">
			<!-- Seccion Portafolio -->
			<div class="row portafolio">
				<div class="col">
					<h2 class="titulo">Portafolio</h2>
					<div class="row galeria justify-content-center">
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/img-1.jpg" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-12 col-lg-8">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/img-2.jpg" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-12 col-lg-8">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/img-3.jpg" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/img-4.jpg" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/img-5.jpg" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/img-6.jpg" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/img-7.jpg" class="img-fluid imagen" alt="">
							</a>
						</div>

						<!-- Ventana Modal -->
						<div class="modal fade" id="modal">
							<div class="modal-dialog d-flex justify-content-center align-items-center">
								<div class="modal-content">
									<img src="img/img-1.jpg" alt="" id="imagen-modal" class="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Seccion Acerca de -->
			<div class="row acerca-de align-items-center">
				<div class="col-12 col-lg-4 foto">
					<img src="img/foto.jpg" class="rounded-circle img-fluid" alt="">
					<p class="nombre">Juan Carlos Blandón Vargas</p>
					<p class="nombre">Ingeniero Telemático</p>
					<p class="nombre">Docente TIC</p>
					<p class="nombre">Gestor Cultural</p>
				</div>
				<div class="col-12 col-lg-8 info">
					<h2 class="titulo">Soy</h2>
					<p class="resumen">Juan Carlos Blandón Vargas, es un Ingeniero que encontro su pasión en la educación y la cultura en favor de los estudiantes de bachillerato de Medellin - Antioquia y Colombia. Actualmente lidera estas iniciativas.</p>
					

					<p class="label">Estrategia Virtual Educativa Los Yoguis</p>
					<div class="progress">
						<div class="progress-bar" style="width:33%;">11 años</div>
					</div>
					
					<p class="label">Premios Yoguis</p>
					<div class="progress">
						<div class="progress-bar" style="width:30%;">10 años</div>
					</div>

					<p class="label">IndeVOZ</p>
					<div class="progress">
						<div class="progress-bar" style="width:21%;">7 años</div>
					</div>

					<p class="label">Spelling Yoguis Bee</p>
					<div class="progress">
						<div class="progress-bar" style="width:10%;">2 años</div>
					</div>
				</div>
				
					<div class="col-12 col-lg-8 info">
					<h2 class="titulo">Quiero llegar a</h2>
					<p class="resumen">Ser un referente en el mundo en el ambito educativo y cultural, aportando con una idea la cual se ha pensado por mas de una decada, reconociendo al mismo tiempo las habilidades y talentos de los estudiantes de secundaria y media, con la intención de introducirlos en nuevas formas de aprender a aprender en esta cuarta revolucioan industrial</p>
					
				    </div>
				
				
			</div>
			
				<div class="row acerca-de align-items-center">
				<div class="col-12 col-lg-4 foto">
					<!--<img src="img/foto.jpg" class="rounded-circle img-fluid" alt="">
					<p class="nombre">Juan Carlos Blandón Vargas</p>
					<p class="nombre">Ingeniero Telemático</p>
					<p class="nombre">Docente TIC</p>
					<p class="nombre">Gestor Cultural</p>-->
				</div>
				<div class="col-12 col-lg-8 info">
					<h2 class="titulo">¿Qué necesito para logralo?</h2>
					<p class="resumen">No perder la automotivación y la pasión de pensar y actuar en posibles soluciones, o aportes a mi labor como maestro. Invitar a maestros a implementar esta propuesta en sus Instituciones Educativas, y que el equipo base conformado por estudiantes, egresados, participantes de festivales anteriores, amigos y entidades públicas y privadas sigan apoyando la ejecución de las diferentes actividades</p>
					

					
				</div>
				
					<div class="col-12 col-lg-8 info">
					<h2 class="titulo">Mi desafio</h2>
					<p class="resumen">Conectar el sector educativo, tecnologico, y cultural en pro de ofrecerle a los estudiantes un abanico de oportunidades que pueden desarrollar a temprana edad, como lo es el bilinguismo, la música, la cultura audiovisual y la habilidad del aprendizaje e-learning</p>
					
				    </div>
					

				
				
			</div>
			
					
			<div class="row acerca-de align-items-center">
				<div class="col-12 col-lg-4 foto">
						
					<img src="img/yoguis1.png" class="rounded-circle img-fluid" alt="">	
					<img src="img/mie2.png" class="rounded-circle img-fluid" alt="">
					
				</div>
				<div class="col-12 col-lg-8 info">
					<h2 class="titulo">Reconocimientos</h2>
					<ul>
						<p><il> <a href="https://www.facebook.com/photo.php?fbid=10157719244105917&set=a.10151863688505917&type=3&theater" target="_blank">•	Maestro Integral 2019  I.E Manuel J. Betancur </a></il></p>
						<p><il> <a href="https://education.microsoft.com/Status/Public/Achievements?token=e7eb1c28" target="_blank">•	Microsoft Innovative Educator Expert 2019 -2020 Education.microsoft.com </a></il></p>
						<p><il> <a href="https://education.microsoft.com/Status/Public/Achievements?token=e7eb1c28" target="_blank">•	Microsoft Innovative Educator Expert 2018 -2019 Education.microsoft.com </a></il></p>
						<p><il> <a href="https://drive.google.com/file/d/1yWbbZA_T3l_tWo5rhh3Fo3sEWZtn3Tax/view?usp=sharing" target="_blank">•	Ponencia  Virtual Educa, Buenos Aires, Argentina. 2018</a></il></p
						<p><il> <a href="https://drive.google.com/file/d/1dD9qlQho2h_f9rX9WbyO-kfn0CApmttk/view?usp=sharing" target="_blank">•	Ponencia  Virtual Educa, Salvador Bahía, Brasil. 2018</a></il></p>
						<p><il> <a href="https://education.microsoft.com/Status/Public/Achievements?token=e7eb1c28" target="_blank">•	Microsoft Innovative Educator Expert 2017 -2018 Education.microsoft.com</a></il></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2018/01/edukatic.jpg" target="_blank">•	Finalista Premios Eduteka de uso de las TIC  en el aula. Universidad ICESI.  Cali, Colombia. 2017</il></p>
						<p><il><a href="https://www.youtube.com/watch?v=f-tmEVk26-4" target="_blank"> •	Ganador Beca en Coastal Caroline University. Myrtle Beach, EEUU. 2017</a></il></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2013/07/calidad-a-la-educacion-2016.jpg" target="_blank">•	Ganador Premio Ciudad de Medellín a la Calidad de la Educación. Medellín, Colombia. 2016</a></il></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2013/07/cole0002.jpg" target="_blank">•	Reconocimiento por sus trascendentales aportes a la dinamización  de los procesos formativos de nuestra comunidad educativa. I.E Manuel J. Betancur. Medellín, Colombia. 2016</il></p>
						<p><il><a href="https://education.microsoft.com/Status/Public/Achievements?token=e7eb1c28" target="_blank"> •	Microsoft Innovative Educator Expert 2016 -2017 Education.microsoft.com</a></il></p>
						<p><il> <a href="https://www.compartirpalabramaestra.org/propuestas-premio-compartir/maestros/estrategia-virtual-educativa-los-yoguis" target="_blank">•	Articulo Palabra Maestra. Bogotá, Colombia 2015</a></a></ol></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2013/07/compartir.jpg" target="_blank">•	Mención de Honor en reconocimiento a su ejemplar experiencia pedagógica. Premio Compartir al Maestro. Bogotá, Colombia. 2015</a></il></p>
						<p><il> <a href="https://www.youtube.com/watch?v=4viILsOYaPI" target="_blank">•	Programa TV: Ciudadanía Digital. Medellín, Colombia 2015</a></il></p>
						<p><il> <a href="https://www.youtube.com/watch?v=KgRNC-ClQMY" target="_blank">•	Ganador Medellinnovation. Ruta n. Medellín, Colombia 2014</a></a></il></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2013/07/compartir-001-2.jpg" target="_blank">•	Mención de Honor en reconocimiento a su ejemplar experiencia pedagógica. Premio Compartir al Maestro. Bogotá, Colombia. 2014</a></il></p>
						<p><il> <a href="https://www.youtube.com/watch?v=S_Dm5DZefPMhttps://www.youtube.com/watch?v=S_Dm5DZefPM" target="_blank">•	Programa TV: Sueño Maestro. Medellín, Colombia 2014</a></il></p>
						<p><il> <a href="https://www.elmundo.com/portal/vida/tecnologia/uso_de_las_tic_a_favor_de_la_educacion.php#.XYe01yhKhPY" target="_blank">•	Ponencia seleccionada Virtual Educa, Medellín, Colombia. 2013</a></il></p>
						<p><il> <a href="https://www.youtube.com/watch?v=kSrlDUgrZEQ" target="_blank">•	Programa TV: Maestros Para la Vida. Medellín, Colombia 2013</il></p>
						<p><il> <a href="https://estrategiavirtualeducativa.files.wordpress.com/2012/06/certificado-buenas-prc3a1cticas-oei.pdf" target="_blank">•	Banco de prácticas significativas en educación artística, cultura y ciudadana. OEI. Madrid, España. 2012</a></il></p>
						<p><il><a href="https://education.microsoft.com/Status/Public/Achievements?token=e7eb1c28" target="_blank"> •	Microsoft Innovative Educator 2012 Education.microsoft.com</a></il></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2013/07/a14-2012-reconocimiento-internacional-tecaher-innovate-peru-2012.jpg" target="_blank">•	Innovative Teacher, PIL - Microsoft. Lima, Perú. 2012</a></il></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2013/07/a11-2012-reconocimiento-ii-foro-de-educacion-innovadora-microsoft-men.jpg" target="_blank">•	Propuesta Innovadora  con tecnología dentro del aula. MEN. Bogotá, Colombia. 2012</a></il></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2013/07/a16-2012-reconocimiento-i-e-la-independecia.jpg?w=223" target="_blank">•	Reconocimiento a la Excelencia. I.E La Independencia. Medellín, Colombia. 2012</a></il></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2012/05/personaje-estrella.jpg" target="_blank">•	Personaje Estrella, Portal Educativo de Medellín, Colombia 2011 </a></il></p>
						<p><il> <a href="https://losyoguis.files.wordpress.com/2013/07/vida-para-todos.jpg" target="_blank">•	Reconocimiento a la Excelencia. I.E Vida Para Todos. Medellín, Colombia. 2010</a></il></p>
					</ul>					
				</div>
				
			</div>


				<div class="col-12 col-lg-8 info">
					<h2 class="titulo">Radio, TV y Prensa</h2>
					<ul>
						
						<p><il><a href="https://www.youtube.com/watch?v=ikieaZWPKYg" target="_blank">•	Noticiero Telemedellin Convocatoria III Version Yoguis 2012 </a></il></p>
						
						<p><il><a href="https://www.eluniversal.com.co/educacion/colombia-gano-dos-cupos-para-el-mundial-de-educadores-en-praga-91573-GWEU176198" target="_blank">•	Colombia ganó dos cupos para el mundial de educadores en Praga - El Universal - 2012 </a></il></p>
						
						<p><il> <a href="https://www.youtube.com/watch?v=ZX0Fni4KjLs" target="_blank">•	Entrevista en Radio Camara de Comercio de Medellin Premios Yoguis 2013 </a></il></p>
						
						<p><il> <a href="http://www.riate.org/index.php?option=com_jevents&task=icalrepeat.detail&evid=306&Itemid=60&year=2013&month=04&day=02&uid=092b34520a4e77221be764fa5f43ef3d&lang=es" target="_blank">•	RIATE - Red Iberoamericana de TIC y Educación 2013 </a></il></p>
						
						<p><il> <a href="https://www.youtube.com/watch?v=CjRDosVxEQg" target="_blank">•	Despertar Educativa convocatoria Premios Yoguis 2014</a></il></p>
						
						<p><il> <a href="http://sahaguncordoba.com/noticias/?p=11190" target="_blank">•	Proyecto "Let´	s go to the cinema" de la Normal Superior  ganó premio como mejor vídeo en inglés 2016</a></il></p>
						
						<p><il> <a href="http://noticiasn60.com/mejor-actriz-es-del-corregimiento-san-cristobal/?fbclid=IwAR3luEN5VEXCvvA5PMtyuoyGvmtm7wowyomnRV-80NjIDhFaPOkGJUiNIaI" target="_blank">•	Mejor Actriz es del Corregimiento San Cristóbal 2019</a></il></p>
						
						<p><il> <a href="http://www.conexionsur.co/estudiantes-del-marco-fidel-suarez-destacados-nuevamente-en-los-premios-yoguis/?fbclid=IwAR38zq9AiwChNi-Qaf44gu-MiM-G1iSSaTjzuMB--y6D5kR7gBnuAat523k" target="_blank">•	Estudiantes del Marco Fidel Suárez destacados nuevamente en los Premios Yoguis 2019</a></il></p>
						
						<p><il> <a href="https://business.facebook.com/watchparty/513287996272978/?entry_source=FEED" target="_blank">•	Entrevista radio Comunicando Belen 2020</a></il></p>
						
					</ul>					
				</div>


<!-- Seccion Portafolio -->
			<div class="row portafolio">
				<div class="col">
					<h2 class="titulo">Radio, TV y Prensa</h2>
					<div class="row galeria justify-content-center">
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/1.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-12 col-lg-8">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/2.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-12 col-lg-8">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/3.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/4.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/5.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/6.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/7.png" class="img-fluid imagen" alt="">
							</a>
						</div>

						<!-- Ventana Modal -->
						<div class="modal fade" id="modal">
							<div class="modal-dialog d-flex justify-content-center align-items-center">
								<div class="modal-content">
									<img src="img/8.png" alt="" id="imagen-modal" class="">
								</div>
							</div>
						</div>
						
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/9.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-12 col-lg-8">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/10.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-12 col-lg-8">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/13.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/12.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/11.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/14.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/15.png" class="img-fluid imagen" alt="">
							</a>
						</div>

						<!-- Ventana Modal -->
						<div class="modal fade" id="modal">
							<div class="modal-dialog d-flex justify-content-center align-items-center">
								<div class="modal-content">
									<img src="img/1.png" alt="" id="imagen-modal" class="">
								</div>
							</div>
						</div>
						
						<!-- Ventana Modal -->
						<div class="modal fade" id="modal">
							<div class="modal-dialog d-flex justify-content-center align-items-center">
								<div class="modal-content">
									<img src="img/16.png" alt="" id="imagen-modal" class="">
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>


<div class="row portafolio">
				<div class="col">
					<h2 class="titulo">Con los tesos!!</h2>
					<div class="row galeria justify-content-center">
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/17.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/16.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						<div class="contenedor-imagen col-6 col-lg-4">
							<a href="#" data-toggle="modal" data-target="#modal">
								<img src="img/18.png" class="img-fluid imagen" alt="">
							</a>
						</div>
						
						
						
					</div>
				</div>
			</div>

<div class="row">
			<div class="col">
				<!-- 21:9 .embed-responsive-21by9 -->
				<!-- 16:9 .embed-responsive-16by9 -->
				<!-- 4:3 .embed-responsive-4by3 -->
				<!-- 1:1 .embed-responsive-1by1 -->
				<h2>Homenaje 10 años Yoguis</h2>	
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/z5TwcNxPz3U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
				</div>
				<p>Muchas gracias a mi familia, a mis estudiantes, a los participantes del Spelling Yoguis Bee, del IndeVOZ, de los Yoguis, y a los maestros que se empeliculan con esta idea, y sobre todo al super equipo de los Yoguis que hacen que estas actividades en pro de la juventud cumplan 10 años. Y recuerden que el lema de un Yoguis es "Servir sin esperar nada a cambio", mil gracias.</p>
			</div>
		</div>

	<div class="row mt-3">
		<h2 class="titulo">Escuela Laboral</h2>
			<div class="col">
				<div id="accordion">
					<!-- CARD #1 -->
					<div class="card">
						<div class="card-header" id="heading1">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
									Institución Educativa Vida Para <Todos></Todos>
								</button>
							</h5>
						</div>
						<div id="collapse1" class="collapse show" arial-labelledby="heading1" data-parent="#accordion">
							<div class="card-body">								
								<p>Comuna 8 de Medellin</p>
								<p>2007 – 2010</p>
							</div>
						</div>
					</div>

					<!-- CARD #2 -->
					<div class="card">
						<div class="card-header" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
									Institución Educativa La Milagrosa
								</button>
							</h5>
						</div>
						<div id="collapse2" class="collapse" arial-labelledby="heading2" data-parent="#accordion">
							<div class="card-body">
								
								<p>Comuna 9 de Medellin</p>
								<p>2010</p>
							</div>
						</div>
					</div>

					<!-- CARD #3 -->
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
									Institución Educativa María Cano
								</button>
							</h5>
						</div>
						<div id="collapse3" class="collapse" arial-labelledby="heading3" data-parent="#accordion">
							<div class="card-body">
								
								<p>Comuna 1 de Medellin</p>
								<p>2011</p>
							</div>
						</div>
					</div>
					
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse3">
									Institución Educativa La Independencia
								</button>
							</h5>
						</div>
						<div id="collapse4" class="collapse" arial-labelledby="heading4" data-parent="#accordion">
							<div class="card-body">
								
								<p>Comuna 13 de Medellin</p>
								<p>2012</p>
							</div>
						</div>
					</div>
					
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse3">
									Institución Educativa ASIA Ignaciana
								</button>
							</h5>
						</div>
						<div id="collapse5" class="collapse" arial-labelledby="heading5" data-parent="#accordion">
							<div class="card-body">
								
								<p>Comuna 2 de Medellin</p>
								<p>2013</p>
							</div>
						</div>
					</div>
					
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse3">
									Institución Educativa Ciudadela Nuevo Occidente.
								</button>
							</h5>
						</div>
						<div id="collapse6" class="collapse" arial-labelledby="heading6" data-parent="#accordion">
							<div class="card-body">
								
								<p>Corregimiento San Cristobal #60 de Medellin</p>
								<p>2014</p>
							</div>
						</div>
					</div>
					
					<div class="card">
						<div class="card-header" id="heading3">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
									Institución Educativa Manuel J. Betancur.
								</button>
							</h5>
						</div>
						<div id="collapse7" class="collapse" arial-labelledby="heading5" data-parent="#accordion">
							<div class="card-body">
														
								<p>Corregimiento San Antonio de Prado #80 de Medellin</p>
								<p>2015 – 2020</p>
								<iframe width="760px" height="500px" src="https://sway.office.com/s/mpImEgOPkJYvJDh7/embed" frameborder="0" marginheight="0" marginwidth="0" max-width="100%" sandbox="allow-forms allow-modals allow-orientation-lock allow-popups allow-same-origin allow-scripts" scrolling="no" style="border: none; max-width: 100%; max-height: 100vh" allowfullscreen mozallowfullscreen msallowfullscreen webkitallowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



				
			</div>



			<!-- Seccion de Contacto -->
			<?php include 'inc/submit.php';?>
			
			<form class="form-horizontal form_custom" role="form" method="post">
			
			<div class="row contacto justify-content-center">
				<div class="col-12 col-lg-8">	
					
					<h2 class="titulo">Contacto</h2>
					<!-- Submitting the Form With PHP -->
    				
					
					<form action="" class="formulario">
						
					  <div class="form-group">
                          <label for="name" class="col-xs-2 col-sm-2 control-label">Nombre</label>
                       			<div class="col-xs-10 col-sm-10">
                            		<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                           			 <?php echo "<p class='text-danger'>$errName</p>";?>
                       			</div>						  
                      </div>
						
						
			<!--<div class="form-group row"> -->	
						 
					 <div class="form-group">
                           <label for="email" class="col-xs-2 col-sm-2 control-label">Email</label>
                                <div class="col-xs-10 col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                </div>
                     </div>							
			<!-- </div> -->
						
						
				     <div class="form-group">
                             <label for="message" class="col-xs-2 col-sm-2 control-label">Mensaje</label>
                                <div class="col-xs-10 col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                </div>
                     </div>
					  
					 <div class="form-group">
                          <label for="human" class="col-xs-2 col-sm-2 control-label">2 + 3 = ?</label>
                          		<div class="col-xs-10 col-sm-10">
                                	<input type="text" class="form-control" id="human" name="human" placeholder="Tu respuesta">
                                	<?php echo "<p class='text-danger'>$errHuman</p>";?>
                          		</div>
                     </div>
						
					 <div class="form-group">
						 
                                  <div class="col-xs-10 col-xs-push-2 col-sm-10 col-sm-push-2">
                                    <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary btn-lg">
                                  </div>
						 
					   <div class="form-group">
						
                                  <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
                                    <?php echo $result; ?>	
                                  </div>
                       </div>
                     </div>
						
						
					</form>
					
				</div>
				
					<div class="row mt-3">
			<!--		
						
			<div class="col-6">
				<p>
					<a href="https://juancarlosblandonvargas.wordpress.com/" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="bloque1" class="btn btn-primary">Hoja de vida</a>
				</p>
				
			</div>
		</div>
			
-->	
						
						
				
			</div>
				
				
			
			
			
			<!-- Submitting the Form With PHP -->
    		<?php include 'inc/submit.php';?> 
            
            <!-- Formulario de contacto -->
                    
                    <!-- Email form -->
                       <!-- <form class="form-horizontal form_custom" role="form" method="post">
                        
                            <div class="form-group">
                                <label for="name" class="col-xs-2 col-sm-2 control-label">Nombre Alejo..</label>
                                <div class="col-xs-10 col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                    <?php echo "<p class='text-danger'>$errName</p>";?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-xs-2 col-sm-2 control-label">Email Alejo</label>
                                <div class="col-xs-10 col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="col-xs-2 col-sm-2 control-label">Mensaje Alejo</label>
                                <div class="col-xs-10 col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="human" class="col-xs-2 col-sm-2 control-label">2 + 3 Alejo= ?</label>
                                <div class="col-xs-10 col-sm-10">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="Tu respuesta">
                                    <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-xs-10 col-xs-push-2 col-sm-10 col-sm-push-2">
                                    <input id="submit" name="submit" type="submit" value="Enviar Alejo" class="btn btn-primary btn-lg">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
                                    <?php echo $result; ?>	
                                </div>
                            </div>
                            
                        </form> -->			

		</div>
	</main>
			
	
	<footer>
		<div class="container">
			<div class="row redes-sociales justify-content-center">
				<div class="col-auto">
					<a href="https://twitter.com/premiosyoguis" target="_blank" class="icono icon-twitter twitter"></a>
					<a href="https://www.instagram.com/premiosyoguis/" target="_blank" class="icono icon-instagram instagram"></a>
					<a href="https://www.facebook.com/JuanCarlosBlandonVargas" target="_blank" class="icono icon-facebook facebook"></a>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>
© 2020 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
