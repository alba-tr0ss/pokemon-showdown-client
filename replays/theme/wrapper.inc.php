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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9538937539303396" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7507705807879332" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8810474674913289" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.06398405966957266" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5921768427170941" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.926313926864279" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5133811206738026"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.799849824304796" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07870773763002514">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9804920125264953">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5370651960162971">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.822915509732772">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9116143819559226"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2593279451072381"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6416032386415935"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9316717426431023"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.00040844587959831813"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3319178495442594"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5681202139570305"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.33914811320352967"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.35921735891305895"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1561343869537437"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.021773752580085404"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4991010863734371"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4860717087157087"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.08575714676052337"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.918429554682205"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.42120249067658677"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2621175962699298"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.05798115121070113"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.030682717491897327"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
