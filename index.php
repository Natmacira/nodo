<?php

/**
 * Site Version: 0.5.0
 * Site author: Natalia Ciraolo
 * Author website: https://github.com/Natmacira
 * Author e-mail: natimciraolo@gmail.com
 */

define('SITE_VERSION', '0.5.0');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nodo</title>
	<link rel="stylesheet" href="style.min.css?v=<?php echo SITE_VERSION; ?>">
	<script src="js/script.js?v=<?php echo SITE_VERSION; ?>"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#0066ff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#0066ff">
	<meta itemProp="image" property="og:image" content="https://nodo.org.ar/img/logo-nodo-full.png" />
	<meta property="og:description" content="Combatimos la inseguridad alimentaria impactando positivamente en el medio ambiente.">
	<meta property="og:locale" content="es_LA">
	<meta property="og:image" content="https://nodo.org.ar/img/logo-nodo-full.png" />
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://nodo.org.ar/" />
</head>

<body>
	<header>
		<nav id="main-nav">
			<a href="#" class="logo-link">
				<img class="logo-img" src="img/logo-nodo.png" alt="Logo Nodo">
			</a>
			<ul>
				<li>
					<a href="#quienes-somos">Quiénes somos</a>
				</li>
				<li>
					<a href="#nuestra-mision">Misión</a>
				</li>
				<li>
					<a href="#objetivos">Objetivos</a>
				</li>
				<li>
					<a href="#aliados">Aliados</a>
				</li>
				<li>
					<a href="#contacto">Contacto</a>
				</li>
			</ul>
			<button id="burger-menu-button">
				<img src="img/burger-menu-open.png" alt="Burger menu open icon." class="burger-menu-open">
				<img src="img/burger-menu-close.png" alt="Burger menu close icon." class="burger-menu-close">
			</button>
		</nav>
		<span class="decoration-line pink"></span>
		<span class="decoration-line green"></span>
		<span class="decoration-line black"></span>
		<img src="img/picture-worker.jpg" alt="Un señor trabajando con cajas de verduras." id="picture-worker">
		<h1>Combatimos la inseguridad alimentaria impactando positivamente en el medio ambiente.</h1>
	</header>
	<main>
		<section id="recuperamos-section">
			<p class="recuperamos-y-distribuimos">Recuperamos y distribuimos grandes volúmenes de frutas y verduras
				directo de los productores.</p> <br>
			<p> Le damos valor social a un alimento que, por ausencia de estándares estéticos o falta de precio de
				mercado
				ya no tiene valor comercial, alimentos que se encuentran en perfecto estado para ser consumidos</p>
		</section>
		<section id="quienes-somos">
			<h2>____ Quiénes somos</h2>
			<h3>NODO es un proyecto social y colaborativo, impulsado por los Bancos de Alimentos del corredor Mar y
				Sierras.</h3>
			<article>
				<img class="external-logo one" src="img/logo-banco-de-alimentos-mdp.png" alt="Logo con dos manos verdes del Banco de Alimentos Mar del Plata">
				<img class="external-logo two" src="img/logo-banco-de-alimentos-tandil.png" alt="Logo con una caja de cartón abierta del Banco de Alimentos Tandil">
				<img class="external-logo three" src="img/logo-BDA-Balcarce.png" alt="Logo del BDA Balcarce romado por dos circulos y una flecha que conforman una forma de U">
			</article>
		</section>
		<section id="el-problema">
			<img src="img/picture-onions.jpg" alt="Una imagen de unas manos vaciando una bolsa de arpillera llena de cebollas en una caja que contiene mas cebollas.">
			<h2>____ El problema</h2>
			<div>
				<article>
					<h3 class="numeros-estadisticas green">5.7 millones</h3>
					<p>de personas sufren inseguridad <br> alimentaria en nuestro país</p>
				</article>
				<article>
					<h3 class="numeros-estadisticas pink">15 millones</h3>
					<p>de toneladas de alimentos se desperdician anualmente en Argentina</p>
				</article>
				<article>
					<h3 class="numeros-estadisticas green">100 mil</h3>
					<p>toneladas de alimentos se desperdician solo en el cinturón hortícola de Mar del Plata.</p>
				</article>
				<article>
					<h3 class="numeros-estadisticas pink">120 millones</h3>
					<p>de raciones de comida</p>
				</article>
			</div>
		</section>
		<section id="nuestra-mision">
			<h2>____ Nuestra misión</h2>
			<article>
				<h3>Combatir la inseguridad <br> alimentaria.</h3>
				<p>En alianza con productores y los Bancos de Alimentos de Argentina, entregamos importantes
					volúmenes de frutas y verduras a personas que se encuentran en estado de vulnerabilidad social.
				</p>
				<h3>Reducir las pérdidas y desperdicios de alimentos.</h3>
				<p>El nivel de desperdicio de frutas y verduras en América Latina es cercano al 50% de lo producido,
					esta problemática es responsable del 8% de los Gases de Efecto Invernadero.</p>
			</article>
			<img src="img/picture-truck.jpg" alt="Una foto de una camioneta acarreando un conteiner mediano que transporta mercancía por un camino, el paisaje de alrededor es campestre. Se observa el pasto verde bien cortado con árboles al fondo y al lado de la ruta un poste de electricidad.">
			<div class="promedios">
				<h3 class="numeros-estadisticas green">1.000.000</h3>
				<p>KG fueron entregados hasta Noviembre 2021</p>
				<h3 class="numeros-estadisticas pink">3.000.000</h3>
				<p>raciones de comida entregadas hasta Noviembre 2021</p>
			</div>
		</section>
		<section class="marquee">
			<marquee id="marquesina-reducir">____ Buscamos reducir las necesidades alimentarias ____ Buscamos reducir las
				necesidades alimentarias ____ Buscamos reducir las necesidades alimentarias ____ Buscamos reducir las
				necesidades alimentarias ____ Buscamos reducir las necesidades alimentarias ____ Buscamos reducir las
				necesidades alimentarias ____ Buscamos reducir las necesidades alimentarias ____ Buscamos reducir las
				necesidades alimentarias ____ Buscamos reducir las necesidades alimentarias ____ Buscamos reducir las
				necesidades alimentarias ____ Buscamos reducir las necesidades alimentarias ____ Buscamos reducir las
				necesidades alimentarias____ Buscamos reducir las necesidades alimentarias____ Buscamos reducir las
				necesidades alimentarias____ Buscamos reducir las necesidades alimentarias____ Buscamos reducir las
				necesidades alimentarias____ Buscamos reducir las necesidades alimentarias____ Buscamos reducir las
				necesidades alimentarias____ Buscamos reducir las necesidades alimentarias____ Buscamos reducir las
				necesidades alimentarias____ Buscamos reducir las necesidades alimentarias____ Buscamos reducir las
				necesidades alimentarias____ Buscamos reducir las necesidades alimentarias____ Buscamos reducir las
				necesidades alimentarias____ Buscamos reducir las necesidades alimentarias____ Buscamos reducir las
				necesidades alimentarias____ Buscamos reducir las necesidades alimentarias____ Buscamos reducir las
				necesidades alimentarias____ Buscamos reducir las necesidades alimentarias____ Buscamos reducir las
				necesidades alimentarias</marquee>
		</section>
		<section id="objetivos">
			<img class="marquee-picture" src="img/picture-box-worker.jpg" alt="En la imagen se ve una persona trasladado una caja verde, típica caja donde van verduras y frutas. Se ven unas manos que reciben la caja. La persona tiene un barbijo negro puesto por debajo de la nariz.">
			<h2>____ Objetivos</h2>
			<h3>Modelos de Gestión Sustentable</h3>
			<p>Tenemos como objetivo estratégico el desarrollo de un modelo de gestión sustentable de rescate de
				alimentos que nos permita replicar y escalar dicho modelo a otras localidades del país y la región.
			</p> <br>
			<p>Alineados y comprometidos con la agenda 2030 respecto de los objetivos de desarrollo sostenible
				(ODS) de Naciones Unidas. </p>
			<div>
				<img src="img/box-hambre-cero.png" class="boxes-information" alt="Un cuadrado naranja que contiene en blanco un número dos, un plato de comida y la frase HAMBRE CERO">
				<img src="img/box-reduccion.png" class="boxes-information" alt="Un cuadrado fuccia que contiene en blanco un número diez, unas flechas y la frase REDUCCION DE LAS DESIGUALDADES">
				<img src="img/box-produccion.png" class="boxes-information" alt="Un cuadrado naranja que contiene en blanco el número doce, el símbolo del infinito y la frase PRODUCCION Y CONSUMOS RESPONSABLES">
				<img src="img/box-accion.png" class="boxes-information" alt="Un cuadrado verde que contiene en blanco el número 12, el dibujo de un ojo donde la pupila es un planeta tierra, y la frase ACCIÓN POR EL CLIMA">
			</div>
		</section>
		<section id="impacto-ambiental">
			<article>
				<h2>____ Impacto Ambiental</h2>
				<h3>Disminuyendo las emisiones de gases y el desperdicio de agua</h3>
				<p>1.260.000 KG CO2 eq emisiones de gases de efecto invernadero fueron prevenidas.
					A su vez, 3.419 millones de litros de agua no fueron desperdiciados.</p>
			</article>
			<article id="estadisticas">

				<h3 class="numeros-estadisticas green">1.260.000</h3>
				<p>KG CO2 eq emisiones prevenidas</p>

				<h3 class="numeros-estadisticas pink">3.419</h3>
				<p>millones de litros de agua no desperdiciados</p>

			</article>
		</section>
		<section class="marquee">
			<marquee id="marquesina-personas-beneficidas">____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____
				más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____
				más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____
				más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____
				más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____
				más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes____ más de 100.000 personas beneficiadas por mes</marquee>
		</section>
		<section id="alcances">
			<img src="img/map-argentina.png" alt="Un mapa de la republica Argentina con marcaciones en azul de las diferentes zonas donde funciona la ONG" class="marquee-picture mapa">
			<article>
				<h2>____ Alcances</h2>
				<h3>Distribución de alimentos</h3>
				<p>En un inicio, este proyecto nace con la intención de abastecer a los Bancos de Alimentos de la zona
					Mar y Sierras (Mar del Plata, Balcarce y Tandil), pero rápidamente identificamos que el potencial de
					impacto era mucho más grande.</p> <br>
				<p>
					Nos propusimos llegar a otros bancos del país, asumiendo un gran desafío logístico. En la actualidad
					NODO envía importantes volúmenes de alimento de alto valor nutricional a:</p>

				<ul class="geographical-reach">
					<li class="location">― mar del plata</li>
					<li class="location">― Balcarce </li>
					<li class="location">― tandil</li>
					<li class="location">― necochea</li>
					<li class="location">― olavarria</li>
					<li class="location">― villa gessell</li>
					<li class="location">― rosario</li>
					<li class="location">― la plata</li>
					<li class="location">― cap. federal</li>
				</ul>
			</article>
		</section>
		<section id="aliados">
			<h2>____ Nuestros Aliados</h2>
			<article>
				<!-- falta rellenar las descripciones de los logos -->
				<img class="external-logo redBDA" src="img/logo-redBDA.png" alt="">
				<img class="external-logo food-banking" src="img/logo-global-food-banking.png" alt="">
				<img class="external-logo inta" src="img/logo-inta.png" alt="">
				<img class="external-logo uni-mdp" src="img/logo-universidad-nac-mdp.png" alt="">
				<img class="external-logo w-w" src="img/logo-w.png" alt="">
				<img class="external-logo alimentaris" src="img/logo-fundacion-alimentaris.png" alt="">
				<img class="external-logo pepsico" src="img/logo-pepsico.png" alt="">
				<img class="external-logo corteva" src="img/logo-corteva.png" alt="">
				<img class="external-logo terramar" src="img/logo-terramar.png" alt="">
				<img class="external-logo basf" src="img/logo-BASF.png" alt="">
			</article>
		</section>
		<section id="imagenes-galeria-footer">
			<img src="img/background-footer-mobile.jpg" alt="" class="gallery mobile">
			<img src="img/pictures-collage.jpg" alt="" class="gallery desktop">
		</section>
	</main>
	<footer>
		<h2>Hagamos crecer esto <br> juntos. Escribinos a</h2>
		<a id="contacto" href="mailto:nodo.org@gmail.com" class="mail">nodo.org@gmail.com</a>
		<a href="#"><img class="logo-img" src="img/logo-nodo.png" alt="Logo de Nodo"></a>
		<ul>
			<li><a class="instagram-link" href="https://instagram.com/nodo.rescate?utm_medium=copy_link" target="_blank">
					<img src="img/logo-instagram.png" alt="Logo de instagram">
				</a></li>
			<li><a class="linkedin-link" href="https://www.linkedin.com/in/nodo-rescate-de-excedentes-27600b226/" target="_blank">
					<img src="img/logo-linkedin.png" alt="Logo de Linkedin">
				</a></li>
		</ul>
	</footer>

</body>

</html>