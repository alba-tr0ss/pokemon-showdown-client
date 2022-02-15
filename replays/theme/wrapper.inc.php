<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8457609760191631" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7258707603543093" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9426294043687002" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5606801244614157" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9465927540064383" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7267089820579413" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6298369064000386"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5179415492506849" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8402918515319298">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8487681796586501">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4047353760274264">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.08028443639655247">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10956876683794414"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9814852419143432"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11854529058956098"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.30887826254310213"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.34667110906779897"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3377670356316571"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6427599984517278"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3521716188909054"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9211267332476141"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9485187843591034"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9885095227840552"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.505426473332502"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3149939984106751"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6991893515199297"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2986453390496191"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5868019353125511"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2719327955595481"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.555090471054005"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.48565026737376393"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
