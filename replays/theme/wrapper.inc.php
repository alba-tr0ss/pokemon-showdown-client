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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.15119990933350946" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.0806953767702212" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.24070907361328397" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9577863048871289" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.915483491006196" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7141542033034165" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8572501577354958"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.28071751188574656" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22624476498963242">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5708917286610657">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6898324616892166">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4516435047331713">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.018269274229385957"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4645434626723577"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1713191688080684"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05467108673657961"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2547493460918828"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5500075519171446"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5775154075279343"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5217598204167588"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3876960822563431"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.25548716248506675"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8529846633222555"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9790627218776522"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.21489835902580512"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9415705486515853"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.44908055150837356"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5552897517828577"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6934295060735822"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2383852017322814"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7417392960645564"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
