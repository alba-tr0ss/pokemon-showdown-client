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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.449754780999289" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.18626870946056373" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3427771382493965" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3595305850712842" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9277671455787155" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07297940698941985" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.181894757661629"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2814963404932349" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3553592248215578">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7416363578288288">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8131927508186929">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2366120002191916">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3590309281552915"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8586120292132271"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4482557712548201"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.149614281603754"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.11801341675884292"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.281256370470667"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.40807798423643504"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.15473962198793378"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9103042664416758"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6106303123644108"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9519589575508605"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9735527741052528"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4619236573524974"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.35577736256186543"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7780703205991288"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.598701479610855"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6947466059097782"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.06454828013421654"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.15972668386413647"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
