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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.249485082343204" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2510245804170095" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.12844674265347944" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.38643491375763594" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.18178611086691965" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.23171978779501523" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7314747192896471"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9157246847112166" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.948952870333815">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5845126570801464">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8943451064405028">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.40316272824707244">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21890768213135647"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.723848211786013"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9524570044890255"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.016146338879783784"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8485959986210208"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12900805291696926"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7200011314903292"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.47249411122588625"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7720880531766241"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6439151882754102"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.010291980496720088"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9513129396304079"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3442632747075689"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5402008452844205"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3749587003078083"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5229643957414196"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9221914066172656"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9981882080850619"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6684858467125832"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
