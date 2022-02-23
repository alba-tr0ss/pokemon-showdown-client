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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.83494222155827" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.21571601039040722" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6468115183869125" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5495710513144147" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.660729348660162" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.799077261714942" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7218446570898429"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.060504613050601064" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2963649017788115">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6910655443973797">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5352939899280589">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.585445722680479">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06499076469835008"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.32713554369476805"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.011783152862354429"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.004321255546570146"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5863323900974393"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5361023090019335"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.984874115804554"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.45113420783860114"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.20322856090879093"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7859953112449589"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.15784893433831404"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3063281398313029"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.0495446225059708"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.07733909088925572"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.963556279328444"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.21540711180472516"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6664889357344947"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.687531015707761"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2823754934738878"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
