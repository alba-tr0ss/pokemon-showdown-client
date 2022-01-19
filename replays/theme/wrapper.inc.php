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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5049863797923793" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.35991602597829675" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.23432348975856643" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3393324841775227" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.22324327566581914" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8775211048142078" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8631743218208161"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3449992407332143" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.380377638053796">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.014111188555758769">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9679005840821724">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.10542463449018102">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7255132592072524"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.11671194371345095"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.44257698445109606"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.95072241118545"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8731784064565105"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6953027979859525"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8377729319322347"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.14419379990207815"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.05179953567023632"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5355661663662723"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7853037478954417"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.49596050330015085"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.34962093014920614"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0478540860198986"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.22244780380168327"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.627326080652153"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.723768130473599"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5261564996955213"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9119678542707066"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
