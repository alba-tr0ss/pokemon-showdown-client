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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10206615072602432" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.468575973915925" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.33636739653868397" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7631274325339419" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.35438940672876185" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9481177829775789" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6460396113908857"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.030267872110099292" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6845163171553834">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6962918167767986">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6663826368246348">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.26665668031583056">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.034017074123208424"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.25727880614416465"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9426967763518377"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8412184006662915"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2963911806852786"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6580549724391758"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6992097280037366"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7991435332760661"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2247041798796836"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5843242856292461"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4544275814068599"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.013007746352871274"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.39056039833459866"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2722790414038194"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.48195402192975156"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.09199299353627888"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8866437143127506"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8347060833347764"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8017090532967983"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
