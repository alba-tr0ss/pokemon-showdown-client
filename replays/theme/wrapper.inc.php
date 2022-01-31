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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4294072320392728" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3020574638340823" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3203154144541862" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5084032553516749" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.29850072986372433" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9904866460070942" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5864807552893709"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9002410833583439" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5055515697427113">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.185106907270848">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.1602239045546514">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.12337268607027285">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.05823543317394808"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6673707643732991"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6719511785575429"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9045121526908835"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2958492041616847"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8888329638721566"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.24118621159957998"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8329522661094635"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.18883429133933993"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5880939308081989"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8475442520045311"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.17393259841450837"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.33595748361998745"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.25480595032670283"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09998477186883736"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.28564692358924115"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7374346165162937"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5805583454051222"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5646279719014329"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
