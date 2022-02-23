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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.26682897523307614" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.14962539590354607" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3234505880657794" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7800973296184477" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9233190385406649" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7384688364810006" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4874059174115004"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5417149418051188" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.029140465483026068">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.03607291210982">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.13132991634391233">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6514098115150806">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04100520030453825"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.16045218970732344"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2943995484126949"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6032197438799691"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3286882066565693"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07676218353795461"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9445272340943525"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.42436451408400977"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.33281991275054623"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.16565001940874735"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2955254563059133"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7286015578030531"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9874149625637576"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8878485732870158"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.30928102909857125"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.49274466292232266"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.14244116353546366"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3286342688130097"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9430760746967126"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
