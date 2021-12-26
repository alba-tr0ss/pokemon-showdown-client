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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.13420914437236542" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.1995603141013853" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.08164680268080149" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.19746650266021692" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3054105528946549" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.12723474027008308" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5854372956711613"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8884787961110403" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7318976884452131">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14780181551856186">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3651702124342908">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7604050310406356">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7607062298043812"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8368346496400274"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.928133722913675"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5801899056672177"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5511789266152782"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23929800320173955"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9691462853244066"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.741953548356056"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.12953691405735723"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.07399339143111128"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6863585246851969"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.45000586587367186"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5664520624664702"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.14123925850553354"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9538516108960169"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8847222563247166"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6363410599106103"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.87791962928418"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3380173541664182"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
