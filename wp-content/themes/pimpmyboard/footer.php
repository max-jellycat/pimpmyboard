<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pimp my Board
 */

?>

<?php wp_footer(); ?>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<p class="lead">Une remarque, une question ? C'est par ici que ça se passe !</p>
			</div>
			<div class="col-sm-4">
				<button class="btn btn-lg btn-block btn-danger" data-toggle="modal" data-target="#contactModal">Contactez-nous !</button>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="col-sm-3">
			<p class="lead">Pimp my Board</p>
		</div>
		<!-- end col -->
		<div class="col-sm-5">
			<nav>
				<ul class="list-unstyled list-inline">
					<li><a href="">Qui sommes-nous ?</a></li>
					<li><a href="">Nos Boards</a></li>
					<li><a href="">Nos Services</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</nav>
		</div>
		<!-- end col -->
		<div class="col-sm-4">
			<p class="pull-right">Codé avec <i class="fa fa-heart"></i> par
				<img src="<?php bloginfo('template_directory'); ?>/img/logo_jellycat.png" alt="">
		</div>
		<!-- end col -->
	</div>
	<!-- container -->
</footer>

<div class="modal fade" id="contactModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Fermer</span>
				</button>
				<h4 class="modal-title" id="contactModalLabel"><i class="fa fa-envelope"></i> Contactez-nous</h4>
			</div>
			<!-- modal-header -->

			<div class="modal-body clearfix">
				<?php echo do_shortcode('[contact-form-7 id="31" title="Pimp my Form"]'); ?>
			</div>
			<!-- modal-body -->

		</div>
		<!-- modal-content -->
	</div>
	<!-- modal-dialog -->
</div>
<!-- modal -->

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

</body>
</html>
