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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7686544805968976" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.19598919576203433" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.939524891986566" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.812384730817928" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.544007504462193" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4956239733682357" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.519923381851052"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.29570039375536905" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7290545050227604">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6750631768970661">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3084674293715177">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5453645483252945">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22107970618973405"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8624003453945936"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.05745862932781809"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22997640477124914"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9616059969447812"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3593344199639803"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3374978283837864"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.43771093971511"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.031051532178923757"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7013839205955235"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.27420853930702704"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9232723833493748"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.808983373195233"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.151533367826981"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.22323868468302166"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6512305407591947"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6613194005864595"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9146212217741194"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7346020934172075"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
