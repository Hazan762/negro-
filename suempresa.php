<?php
session_start();  
include 'content-page.php';
$_SESSION['rubro'] = $_GET['rubro'];
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
		<ul class="ruta">
			<li>
				<a href="">Inicio</a>
			</li>
			<li>
				/
			</li>
			<li>
				<a href="">Ver y pagar</a>
			</li>
			<li>
				/
			</li>
			<li>
				<?php echo $_GET['rubro']; ?>
			</li>
		</ul>	
		<a href="" class="volver">
			<i class="bi bi-arrow-left"></i>
			<span>Volver</span>
		</a>
		<h1>Ver y pagar</h1>
		<p><?php echo $description_dinamic; ?></p>
	</section>
	<section>
		<article class="form-container">
			<form method="POST" action="detalles.php">
				<div class="icono-title-container">
					<div class="d-flex">
						<?php echo $icon; ?>
						&nbsp
						<h3 <?php echo $color_title; ?>>
							<?php echo $_GET['rubro']; ?>
						</h3>
					</div>
				</div>
				<div class="field">
					<div class="field__input_container">
						<input type="" required name="" id="search">
						<label class="float-label" for="search"><?php echo $label; ?></label>
					</div>
					<button class="boton-dise">Consultar</button>
				</div>
				<small><?php echo $text_helper; ?></small>
			</form>
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