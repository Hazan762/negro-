<?php  
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="ico" href="favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rentas cordoba</title>
	<link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>
<body>
	<header>
		<nav>
			<div class="container">
				<a href="">
					<img src="assets/img/logo-e.png" class="loho">
				</a>
				<div class="gestion">
					<a href="">
						<i class="bi bi-question-circle"></i>
						<span>Centro de ayuda</span>
					</a>
					<a href="">
						<i class="bi bi-person-circle"></i>
						Iniciar sesión
					</a>
				</div>
			</div>
		</nav>
	</header>
	<section class="ruta-title">
		<div class="alert">
			<div class="icon">
				<i class="bi bi-exclamation-triangle"></i>
			</div>
			<div class="text">
				<p>Ponete al día y aprovechá los descuentos.</p>
				<p>Además, podés ahorrar un 20% extra en intereses, multas y honorarios pagando con <a href="#">descuento TiPA para 2024</a> y años anteriores.</p>
			</div>
		</div>
		<a href="" class="volver">
			<i class="bi bi-arrow-left"></i>
			<span>Volver</span>
		</a>
		<h1>Detalle de cuotas</h1>
		<p>¿Tenés dudas? <a href="#">Consultá cómo pagar</a></p>
	</section>
	<section>
		<h3 class="otros-impuestos">También podés pagar</h3>
		<p style="font-size: 13px;">Otras obligaciones que están a tu nombre e incluyen el impuesto consultado</p>
		<article class="operacion-vista-previa-deuda">
			<div class="consulta">
				<div class="header-consulta">
					<h3 class="color-verde">	
						<i class="bi bi-person"></i>
						<?php echo $_SESSION['rubro']; ?>
					</h3>
					<input type="checkbox" checked name="">
				</div>
				<div class="body-condsulta">
					<div>
						<span class="important">IMPORTANTE</span>
						<span>200473652019</span>
					</div>
					<div style="display: flex;">
						<div>
							<h4>$3.830</h4>
							<p>No incluye 30% de descuento</p>
						</div>
						<input type="checkbox" checked name="">
					</div>
				</div>
			</div>
			<div class="continue-div">
				<div class="header-box">
					<h3>
						<i class="bi bi-wallet"></i>
						Total a pagar
					</h3>
				</div>
				<div class="body-box">
					<span>
						Incluye
					</span>
					<br>
					<small>1 Obligación</small>
					<hr>
					<div class="center">
						<h2>$3.830</h2>
						<a href="pagar-deuda.html" class="boton-dise">Ir a pagar</a>
					</div>
					
				</div>
			</div>
		</article>
	</section>
	<footer>
		<div class="container-footer">
			<div class="item">
				<h4>Legislación tributaria</h4>
				<ul>
					<li>
						<a href="">Código tributario</a>
					</li>
					<li>
						<a href="">Ley impositiva anual</a>
					</li>
					<li>
						<a href="">Decretos</a>
					</li>
					<li>
						<a href="">Resoluciones</a>
					</li>
					<li>
						<a href="">Otras leyes</a>
					</li>
					<li>
						<a href="" class="decoration">Más legislación tributaria</a>
					</li>
				</ul>
			</div>
			<div class="item">
				<h4>Centro de ayuda</h4>
				<ul>
					<li>
						<a href="">Medios de pago</a>
					</li>
					<li>
						<a href="">Consulta vinculante</a>
					</li>
					<li>
						<a href="">Videos e instructivos</a>
					</li>
					<li>
						<a href="">Listados</a>
					</li>
					<li>
						<a href="">Tasas Retributivas de Servicios</a>
					</li>
					<li>
						<a href="" class="decoration">Más información</a>
					</li>
				</ul>
			</div>
			<div class="item">
				<ul>
					<li>
						<a href="">Inmobiliario</a>
					</li>
					<li>
						<a href="">Automotor</a>
					</li>
					<li>
						<a href="">Multas de Policía Caminera</a>
					</li>
					<li>
						<a href="">Ingresos brutos</a>
					</li>
					<li>
						<a href="">Sellos</a>
					</li>
					<li>
						<a href="" class="decoration">Más preguntas</a>
					</li>
				</ul>
			</div>

			<div class="item">
				<h4>Rentas, estés donde estés</h4>
				<ul>
					<li>
						<a href=""><i class="fa-regular fa-comments"></i> Chateá con nosotros</a>
					</li>
					<li>
						<a href=""><i class="fa-brands fa-square-facebook"></i> Rentas Córdoba</a>
					</li>
					<li>
						<a href=""><i class="fa-regular fa-message"></i> Contanos tu experiencia</a>
					</li>
					<li>
						<a href=""><i class="fa-regular fa-message"></i> Denuncias</a>
					</li>
					<li>
						<a href=""><i class="fa-solid fa-phone"></i> Rentas te llama</a>
					</li>
					<li>
						<span>0800-444-8008</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="copy-right">
			<ul>
				<li>Copyright © 2024 - Rentas Córdoba</li>
				<li>|</li>
				<li>“1983/2023 - 40 años de democracia”</li>
			</ul>
		</div>
	</footer>
</body>
</html>