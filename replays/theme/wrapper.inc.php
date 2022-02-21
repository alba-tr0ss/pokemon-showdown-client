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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.39813671836375075" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8917342112279265" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.26786849145673575" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.31279730088247537" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1644242101315445" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4128226133367199" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5307172259276602"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.30540664510952764" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4038657762902138">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5352901966622161">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.11019467672799199">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7782205725166917">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08148644110934389"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.44557984264396233"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3285075662805621"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8650983551043634"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.23417445393824066"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5951095218127103"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8441442827211503"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4209701025472177"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.840170311174657"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.16250331200782786"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.38155133981775835"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1927800743990593"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8373929889205178"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7822356444185066"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.22985305114765797"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4000581004610415"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3372432044274034"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8862093476948485"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9729876879699568"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
