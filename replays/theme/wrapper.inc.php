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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.08548972353720741" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8798569002579846" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.45907133880453155" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8711345548383105" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6257035781915685" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6132057774075503" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7500513777310003"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7006927652271859" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6320489433965697">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5268510079237114">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3540223230145887">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8612251281878114">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2867088093144632"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3790076915648861"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8856214037425316"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8024005064888726"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5006808862063077"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48658802446095084"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.139045461614975"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.03526655866590267"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.27827554085937223"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6907513136668406"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3919410201456788"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5415263614308843"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7146162204556279"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2971616314075114"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9214158137370636"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3817213505009145"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5762746454555316"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9514911182529069"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.07184248532238424"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
