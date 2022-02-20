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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9738498332337115" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9019916837968565" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.072304374138765" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7785715103280708" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.16991496024477715" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4837902299880643" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8633102838210327"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.045310101125154656" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4631891995876194">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37021686313589974">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.13713694145261823">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7126377577418674">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03774936351281721"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4641821128650523"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6585219911822309"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8547258398311415"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.343028562862322"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5194588945686063"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6238952039785448"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6519814420691321"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6068654814813224"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9307297263141789"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8371308610399741"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.00931969024647561"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.43713196916263763"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6648713088071667"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6439669584097414"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4601812936024521"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9548996861000412"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8495712693693271"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.24627817516339978"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
