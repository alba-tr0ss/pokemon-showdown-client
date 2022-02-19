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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3121896583583721" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6408136323214166" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.22009072624562664" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8599016966641935" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.43007511385857966" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.023040141849037132" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5917088969265227"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5254657362155215" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4951433461381627">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6249714380738141">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.44924397125988613">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5950871057144793">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7024387533410059"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5515420021063802"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.07022180366184427"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5962277671387246"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5987914875482756"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.535766665241723"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.25331000272583637"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5432513071610703"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.19997667939541985"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4870257100824693"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6289638199959771"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9455254299753686"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.455264944354258"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1925251147637974"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4468752404848546"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.10143331943356926"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.16187420621509974"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5251824515678227"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3765163195235304"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
