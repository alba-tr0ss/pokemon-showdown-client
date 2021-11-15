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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5179139356551181" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5013736173817855" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7549057926763059" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8933363732250328" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.23511542088934467" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.33536857988642166" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8560052750566218"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.38506995719610093" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.056493844733076504">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14072552737195787">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3804029575893846">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7534074213980206">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.41821894546851635"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5389391343207217"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9495140397714623"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6762827447461213"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.0895486217323207"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7336288690625199"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.703735244002204"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.09056175909050412"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.13146346932483155"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7942155589575428"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.057476865245195574"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8944567596118169"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5666350700254865"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6130220783431477"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.28962174419823916"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5744679299452473"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4560659741767088"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14323029083999206"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9903947924625223"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
