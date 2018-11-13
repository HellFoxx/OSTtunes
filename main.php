<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	<?php require 'php/link.php'; ?>
	
	<link rel="stylesheet" href="../css/main_style1.css">

	<title>OST Tunes</title>

</head>
<body>

	<!---Fade Menu --->
		
	<?php require 'php/header.php'; ?>

	<div class="welcoming">
		<div class="container">
			<div class="logo-welcome col-sm-6 col-xl-6">
				<img src="images/ost_tunes_logo.png" alt="ost_tunes_logo">
			</div>
			<div class="welcome-text col-sm-6 col-xl-6">
				<h2>Добро пожаловать!</h2>
				<p>На нашем сайте вы найдете любой саундрек из вашей любимой игры или фильма! Только самые качественные мелодии, а так же доступные для скачивания полностью бесплатно!</p>
				<button class="listen"><a href="pages/music.html">Слушать</a></button>
			</div>	
		</div>
	</div>
	
	<!-- fullscreen -->
  	<div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">
    <!-- Wrapper for slides --> 
    <div class="carousel-inner" role="listbox">
      <div class="item active" style="background-image: url('images/slide_1.jpg');">
        <div class="overlay"></div>
      </div>
      <div class="item" style="background-image: url('images/slide_2.jpg');">
        <div class="overlay"></div>
      </div>
      <div class="item" style="background-image: url('images/slide_3.jpg');">
        <div class="overlay"></div>
      </div>
      <div class="item" style="background-image: url('images/slide_4.jpg');">
        <div class="overlay"></div>
      </div>
    </div>

	<div class="content">
		<div class="container clearfix">
			<div class="news col-sm-12 col-md-9 col-xl-9">
				<div class="news-inner">
					<h1>Новости</h1>

					<div class="news-block clearfix">
						<div class="news-img"></div>
						<div class="news-text">
							<h3>Миньон - новая игра!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur similique, beatae. Consequatur sapiente optio excepturi accusamus nulla nemo, cum voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam dolore, nihil rem earum, laborum ea dolores autem iste reiciendis.</p>
						</div>
						<div class="news-hover">
							<div class="read">
								<h2><a href="#">Читать</a></h2>
							</div>
						</div>
						<div class="read-a">
							<a href="#">Читать</a>
						</div>
					</div>

					<div class="news-block clearfix">
						<div class="news-img"></div>
						<div class="news-text">
							<h3>Миньон - новая игра!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur similique, beatae. Consequatur sapiente optio excepturi accusamus nulla nemo, cum voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam dolore, nihil rem earum, laborum ea dolores autem iste reiciendis.</p>
						</div>
						<div class="news-hover">
							<div class="read">
								<h2><a href="#">Читать</a></h2>
							</div>
						</div>
						<div class="read-a">
							<a href="#">Читать</a>
						</div>
					</div>

					<div class="news-block clearfix">
						<div class="news-img"></div>
						<div class="news-text">
							<h3>Миньон - новая игра!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur similique, beatae. Consequatur sapiente optio excepturi accusamus nulla nemo, cum voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam dolore, nihil rem earum, laborum ea dolores autem iste reiciendis.</p>
						</div>
						<div class="news-hover">
							<div class="read">
								<h2><a href="#">Читать</a></h2>
							</div>
						</div>
						<div class="read-a">
							<a href="#">Читать</a>
						</div>
					</div>

					<div class="news-block clearfix">
						<div class="news-img"></div>
						<div class="news-text">
							<h3>Миньон - новая игра!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur similique, beatae. Consequatur sapiente optio excepturi accusamus nulla nemo, cum voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam dolore, nihil rem earum, laborum ea dolores autem iste reiciendis.</p>
						</div>
						<div class="news-hover">
							<div class="read">
								<h2><a href="#">Читать</a></h2>
							</div>
						</div>
						<div class="read-a">
							<a href="#">Читать</a>
						</div>
					</div>

				</div>
			</div>

			<?php require 'php/sidebar.php'; ?>

		</div>
	</div>
	
	<?php require 'php/footer.php'; ?>
	

<?php require 'php/script.php'; ?>

<!-- Slider -->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<!-- Fade Menu -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/menu.js"></script>	

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


</body>
</html>