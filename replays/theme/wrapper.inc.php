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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7707001383206606" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2004768189027497" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.09178684716201646" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3538529270939377" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.08597127903224622" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8162077201540627" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.19325530134941826"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9473104565573764" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2513154166181908">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21425372550909083">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.00725370241749812">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5478082575119108">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9690516544320333"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15221873803438557"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.30351657575947444"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5184156819929904"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.46210786667045856"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4969274465921305"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3656623758835764"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7797747725670605"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4853607296309519"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2828692140565754"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6727842800629069"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.924270514771754"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.806862539687716"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.16933799222869172"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.114747282451092"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4061054372272277"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.22343996337068361"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.31452239223562595"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5338352774825776"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
