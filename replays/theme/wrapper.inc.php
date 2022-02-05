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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6889247361873849" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.902509604550376" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.24452822367093163" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3062630407304543" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.024773295345919655" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.040586979279448654" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5236029076599165"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6174577560610688" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7610379284161344">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21053545603239643">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.012648100052239597">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6318716514416385">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.047414384254301334"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6537231256866005"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2412886129395555"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.47954200225012555"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9297219109798087"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10416001752937953"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.24363360319470595"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7148245061004121"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.62296749272162"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.28285066873015663"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.05256579555625329"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.24283450618953162"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5291993264819974"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.00884732374186381"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.35152755527767865"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9411460958958338"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3425997489385937"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4120464092736891"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.26036912035637183"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
