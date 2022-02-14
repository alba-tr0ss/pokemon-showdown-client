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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4070928244284655" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5940406758505543" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2987086457949586" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5898608283211173" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7074786938684008" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.44503311251524624" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5692762533664584"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.0013265460861031642" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8886511859383679">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5336781049683903">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.07744425171917912">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4318244409514904">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.33954872735920083"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7291941059753142"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.00015675103883339148"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9183216475381581"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6457008488099967"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.427143232436517"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.47194381839073896"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7570303474871758"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3246661322209521"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9033057046739252"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3402360543763394"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.527919794904216"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.13247799213796752"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.20081062133217942"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6238936843387151"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8923710923064967"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5878767882136027"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6600317782624063"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9543233862029195"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
