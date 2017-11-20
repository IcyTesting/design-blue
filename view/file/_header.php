<header class="container-fluid">
	<div class="row  align-items-center">
		<div class="col-md-4 col-sm-12 text-md-left text-center">
			<img class="" src="http://localhost:3000/img/dbs-logo.svg" alt="DBS-Business" style="max-width:250px;">
		</div>
		<div class="col-md-8 col-sm-12 text-md-right text-center">
			<p class="hidden-sm" style="font-size: 2.5em;">
				<span style="font-weight:100;">Genera ingresos </span><strong class="text-blue">por tus compras</strong>
			</p>
			<ul class="list-no-style pad-none pad-sm-top social-media justify-content-center">
				<?php
					$sm = [ 'sm_facebook', 'sm_twitter', 'sm_google-plus', 'sm_linkeding', 'sm_tumblr', 'sm_instagram', 'sm_pinteres', 'sm_youtube', 'sm_vimeo', 'sm_rss' ];
					for ( $i = 0; $i < count( $sm ); $i++ ) {
						?>
						<li>
							<a href="#">
								<img src="http://localhost:3000/img/social-media/<?php echo $sm[ $i ] ?>.svg" class="" alt="compra-con-dbs-business" style="width:45px;">
							</a>
						</li>
						<?php
					}
				?>
			</ul>
		</div>
	</div>
	<!--<img src="http://localhost:3000/img/icon.svg" alt="compra-con-dbs-business">-->
</header>