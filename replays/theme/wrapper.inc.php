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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9744507316364801" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5183359325644203" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.40654564920883307" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7832378317270481" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7103450397414277" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4439874947756761" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9374981129358577"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6298382577580321" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08133677861894606">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07739337079555808">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.05948233987202234">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6235086337919438">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.363690710508102"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0019188835162131657"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9089201343190876"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09666501750371981"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8331381256448849"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5445734591318108"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1759738266356483"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7756728385422318"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.500879576268183"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6194075160792978"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7491994655636014"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.28724019640224174"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.40172500190251625"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4626033721485423"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9662370569441812"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5317610544577589"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.03880625524694392"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.24272999164082432"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3653212088558082"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
