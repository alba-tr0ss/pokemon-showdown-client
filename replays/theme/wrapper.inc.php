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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2965194663870072" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8205081957921159" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8891220663093418" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.30716139040927537" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.79802827604796" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8642969576965651" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.44089762952289413"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.42648801239963885" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4823005676898433">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9684151270127737">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8163372708536212">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2169854718326354">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.830967927258863"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8126135110816046"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.22272673143331234"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8564355607318741"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.30705161980833684"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.37478647117672215"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9434333894973836"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.19866223478499312"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5396069630452429"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8450873348334738"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.23202519541180444"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8487400088758075"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4963917272160694"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.16068453316675413"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09467414675898778"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6427713136995274"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8027591040335631"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1870103212184797"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7654720701611739"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
