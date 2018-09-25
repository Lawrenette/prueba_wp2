<?php get_header() ?>

<img class="img-logo"><img src=" <?php echo get_template_directory_uri(); ?> /assets/img/marca/logo.png" data-speed="-1" class="img-header">


<?php 
$arg = array(
	'post_type'      => 'cpt_menu',
       			//'category_name'  => '',
	'posts_per_page' => 10,
       			//'offset'         => 0,
       			//'post__not_in'   => array($post->ID),
	'paged'          => $paged
);

$get_arg = new WP_Query ( $arg );

while ( $get_arg->have_posts() ) {
	$get_arg->the_post();
}?>

<main>
<!-- Nosotros -->
<div id="nosotros">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
          <h1>CONOCIENDO <br> NUESTRO RESTAURANTE</h1>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
          <h3>Tenemos a los mejores chefs gourmet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
          <h3>Restaurant de 2 estrellas Michelin</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      <div class="col-xs-12 col-md-6">
      	    <div class="nosotros-imag"><img src=" <?php echo get_template_directory_uri(); ?> /assets/img/platos/tiramisu.jpg" class="img-responsive nosotros-img_tamaño" alt=""></div>
        
      </div>
    </div>
  </div>
</div>

<!-- Menú -->
<div id="menu">
	<div class="col-12">
		<h1>NUESTRO MENÚ</h1><hr>
	</div>

	<div class="container" >
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<h2>ANTIPASTOS</h2>

				<?php the_post_thumbnail('full', array('class' => 'img_fluid mb-3')) ?>
				<img src="<?php the_field('fotito') ?>">

				<h4 class="precio"><b>$5.600</b></h4>
				<h3> <?php the_title() ?> POLENTA FRITA CON SALSA ARRABIATA</h3>
				<p> <?php the_excerpt() ?> Palitos de polenta frita con salsa de tomates levemente picante</p>

				<h4 class="precio"><b>$4.600</b></h4>
				<h3>PEPERONATA</h3>
				<p>Laminas de pan de campo al ajo y hierbas cubiertas de guiso de pimentones.</p>

				<h4 class="precio"><b>$5.200</b></h4>
				<h3>PROVOLETA AL OREGANATO</h3>
				<p>Fundido con tomates asados al oregano.</p>

				<h4 class="precio"><b>$7.900</b></h4>
				<h3>MELAZANE E PROSCIUTO</h3>
				<p>Timbal de láminas de berenjenas asadas con salsa pesto, queso parmesano jamón serrano.</p>
				
			</div>

			<div class="col-xs-12 col-sm-6">
				<h2>ENSALADAS</h2>

				<h4 class="precio"><b>$6.200</b></h4>
				<h3>INSALATTA DANUBIO</h3>
				<p>Selección de lechugas, fondos de alcachofas, berenjenas asadas, tomates secos y zuccini grillado con aderezo de albahaca.</p>

				<h4 class="precio"><b>$6.500</b></h4>
				<h3>INSALATTA PILARRE</h3>
				<p>Espinacas, panceta crujiente, nueces, tomates asados hy champiñones asados con aderezo dulce de aceto balsámico.</p>

				<h4 class="precio"><b>$7.000</b></h4>
				<h3>INSALATTA ANDREÉ</h3>
				<p>Selección de lechugas, rúcula, queso de cabra, prosciutto, aceitunas, pimientos confitados y aderezo de oregano.</p>
			</div><hr>

			<div class="col-xs-12 col-sm-6">
				<h2>PIZZAS</h2>

				<h4 class="precio"><b>$6.200</b></h4>
				<h3>PEPPERONI</h3>
				<p>Mozzarella, pomodoro, pepperoni.</p>

				<h4 class="precio"><b>$6.500</b></h4>
				<h3>PUTANESCA</h3>
				<p>Mozzarella, pomodoro, ajo, pepperoncino, pepperoni, aceitunas.</p>

				<h4 class="precio"><b>$7.000</b></h4>
				<h3>CAPRESSE</h3>
				<p>Mozzarella, pomodoro, tomate, albahaca.</p>

				<h4 class="precio"><b>$5.300</b></h4>
				<h3>MEDITERRANNEA</h3>
				<p>Mozzarella, pomodoro, queso de cabra, pimentón, rúcula, aceituna.</p>

				<h4 class="precio"><b>$5.300</b></h4>
				<h3>TORINO</h3>
				<p>Mozzarella, pomodoro, pepperoni, champiñon, cebolla morada, pimiento.</p>

				<h4 class="precio"><b>$7.000</b></h4>
				<h3>VEGGETARIANNA</h3>
				<p>Mozzarella, pomodoro, esparrago, pimentón, rúcula, choclo.</p>

				<h4 class="precio"><b>$5.300</b></h4>
				<h3>GRIEGA</h3>
				<p>Mozzarella, pomodoro, queso de cabra, berenjena, cebolla.</p>
			</div>

			<div class="col-xs-12 col-sm-6">
				<h2>PIZZA TRADICIONAL</h2>

				<h4 class="precio"><b>$7.200</b></h4>
				<h3>MARGHERITA</h3>
				<p>Mozzarella, pomodoro, albahaca fresca, aceite de oliva.</p>

				<h4 class="precio"><b>$7.200</b></h4>
				<h3>MARINARA</h3>
				<p>Pomodoro, láminas de ajo, aceite de oliva.</p>

				<h4 class="precio"><b>$7.100</b></h4>
				<h3>CAPRISSIOSA</h3>
				<p>Mozzarella, pomodoro, champiñones, jamón, fondos de alcachofa, aceite de oliva.</p>

				<h4 class="precio"><b>$7.100</b></h4>
				<h3>CINQUE FORMAGGI</h3>
				<p>Mozzarella, queso azul, ricotta, parmesano, mozzarella di buffala.</p>
			</div><hr>

			<div class="col-xs-12 col-sm-6">
				<h2>SOPAS</h2>

				<h4 class="precio"><b>$5.300</b></h4>
				<h3>ZUPPA DI CHEF</h3>
				<p>Sopa del día seleccionada por el chef.</p>

				<h4 class="precio"><b>$5.300</b></h4>
				<h3>MINISTRONE GENOVESE</h3>
				<p>Sopa tradicional italiana a base de verduras, porotos blancos y pesto de albahacas.</p>
				
			</div>

			<div class="col-xs-12 col-sm-6">
				<h2>POSTRES</h2>

				<h4 class="precio"><b>$2.500</b></h4>
				<h3>GELATO</h3>
				<p>3 bolas de helado.</p>

				<h4 class="precio"><b>$2.500</b></h4>
				<h3>GELATO DI CIOCCOLATO</h3>
				<p>3 bolas de helado.</p>

				<h4 class="precio"><b>$3.500</b></h4>
				<h3>PANNA COTTA</h3>
				<p>Postre de crema y manjar.</p>

				<h4 class="precio"><b>$3.500</b></h4>
				<h3>TIRAMISU</h3>
				<p>Tradicional tiramisú cremoso de mascarpone con base de galletas maceradas en licor de café.</p>
			</div><hr>

			<div class="col-xs-12 col-sm-6">
				<h2>INFUSIONES</h2>

				<h4 class="precio"><b>$1.100</b></h4>
				<h3>INFUSIONES</h3>
				<p></p>

				<h4 class="precio"><b>$1.200</b></h4>
				<h3>CAFFE ESPRESSO</h3>
				<p></p>

				<h4 class="precio"><b>$2.100</b></h4>
				<h3>LATTE</h3>
				<p></p>

				<h4 class="precio"><b>$2.000</b></h4>
				<h3>MOCCACCINO</h3>
				<p></p>
			</div>

			<div class="col-xs-12 col-sm-6">
				<h2>BEBIDAS</h2>

				<h4 class="precio"><b>$900</b></h4>
				<h3>AGUA MINERAL</h3>
				<p></p>

				<h4 class="precio"><b>$1.200</b></h4>
				<h3>BEBIDA</h3>
				<p></p>

			</div>
		</div>
	</div><hr>
</div>

<!-- Plugin -->
<div class="row">
	<div class="offset-2 col-md-4">
		<h1>Reserva tu día y mesa...</h1>
		<?php 
		echo do_shortcode('[booking nummonths=3]');
		 ?>
	</div>
</div>

</main>

<?php wp_reset_postdata();
?>

<?php get_footer() ?>