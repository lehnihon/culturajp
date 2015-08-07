<nav class="navbar navbar-default container" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
	<ul class="nav navbar-nav">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Notícias</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entretenimento</a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo esc_url( home_url( '/' ) )."/category/entretenimento/anime/"; ?>">Anime</a></li>
			</ul>
		</li>
	</ul>
	</div><!-- /.navbar-collapse -->
</nav><!-- #site-navigation -->	