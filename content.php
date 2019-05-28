<?php include("includes/connection.php");?>
<?php include("includes/functions.php");?>
<?php include("header.php");?>

<div class="slider col-lg-9">
				<?php $subject = get_subject_by_id($sel_subject); 
				echo $subject['name'];
				 ?>

			</div>
		</section>
		<!-- End of header and navigation section -->

		<div class="content">
			<section class="row">
				<div class="posts col-lg-4">
					<h2>О нас</h2>
					<p>Мы являемся организацией, которая преподает компьютерное обучение для всех категорий населения. Также мы стараемся передать всем нашим участникам не только технические знания, но и моральные ценности для развития позитивной стороны нашего общества.</p>
				</div>
				<div class="posts col-lg-4">
					<h2>Что мы делаем</h2>
					<p>В данный момент мы занимаемся разработкой веб-приложения (сайта), который будет помогать всем посетителям совершить правильный выбор, о котором впоследствии этот человек не будет сожалеть.</p>
				</div>
				<div class="posts col-lg-4">
					<h2>Контакты</h2>
					<p>Вы можете связаться с нами по данным, которые указаны ниже:</p>
					<address>
						Наш адрес: Кишинев, ул. Василе Александри 133<br>
						E-mail: scriptehinfo@gmail.com<br>
						Телефон: 79156655<br>
					</address>
				</div>
				<!-- end of content section  -->
			</section>
			<section class="row">
				<div class="portfolio col-lg-12">
					<h3>Последние работы</h3>
					<a href="#">Сайт</a>
					<a href="#">Публикации</a>
					<a href="#">Фото</a>
					<div class="portfolio-icons">
						<ul class="row">
							<li class="col"><a href="#"><img src="images/thumb_1.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_2.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_3.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_4.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_1.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_2.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_3.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_4.jpg" alt=""></a></li>
						</ul>
					</div>
				</div>
				<!-- end of portfolio section  -->
			</section>
		</div>
	</div>
	<!-- End of main content -->
	<?php include("footer.php"); ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>