<style>

/*----------------------------- header -----------------------------*/

.header {
	position: fixed;
	z-index: 3000;
	width: 100%;
}

.header ul {
	text-decoration: none;
	height: 40px;
	margin: 10px 0;
	display: block;
	float: left;
}

.header ul li {
	display: inline-block;
	margin-right: 40px;
}

.active {
	border-bottom: 2px solid #fff;
}

.header ul li a {
	color: #fff;
	font-size: 20px;
	line-height: 40px;
}

.header ul li a:hover {
	text-decoration: none;
}

.header ul li:hover {
	transition: 0.2s;
	border-bottom: 2px solid #fff;
}

.header ul li:active {
	border-bottom: none;
	transition: 0.4s;
}

button {
	float: right;
	margin: 10px 0;
	width: 100px;
	height: 34px;
	border: 2px solid #fff;
	border-radius: 5px;
	font-size: 16px;
	background: none;
	margin-top: 13px;
}

button:hover {
	transition: 0.3s;
	background-color: #530FAD;
	border-color: #530FAD;
}

button:not(:hover) {
	transition: 0.3s;
}

button:hover a {
	color: #fff;
	text-decoration: none;
}

button:active {
	outline: none;
	background-color: #fff;
	border-color: #fff;
}

button:active a {
	color: #530FAD;
}

button a:active {
	color: #530FAD;
}

button a {
	color: #fff;
	text-decoration: none;
}

/*----------------------------- fade menu -----------------------------*/

.bg, .bg-blue {
  left: 0;
  position: fixed;
  top: 0;
  width: 100%; 
}

.bg {
  background: none;
  width: 100%; 
  z-index: 3000; 
}

.bg-blue {
  background-color: #530FAD;
  z-index: 4000; 
  display: none; 
}

.fixed {
  position: fixed;
}

@media (max-width: 575.98px) {
	.header {
		position: absolute;
	}
	.bg-blue {
		background: none;
	}
	.header ul li {
		display: block;
	}
	.header ul li:first-child {
		border: none;
	}
	.header ul li:hover {
		border: none;
	}
	.welcoming > .container {
		margin-top: 100px;
	}
}


</style>

<div class="header bg">
			<div class="container clearfix">
				<div class="menu">
					<ul>
						<li><a href="../main.php">Главная</a></li>
						<li><a href="../pages/music.html">Музыка</a></li>
						<li><a href="#">Предложения</a></li>
						<li><a href="#">О нас</a></li>
					</ul>
				</div>

				<button><a href="../pages/enter.html">Войти</a></button>
				
			</div>
		</div>

		<div class="header bg-blue">
			<div class="container clearfix">
				<div class="menu">
					<ul>
						<li><a href="../main.php">Главная</a></li>
						<li><a href="../pages/music.html">Музыка</a></li>
						<li><a href="#">Предложения</a></li>
						<li><a href="#">О нас</a></li>
					</ul>
				</div>

				<button><a href="../pages/enter.html">Войти</a></button>

			</div>
		</div>