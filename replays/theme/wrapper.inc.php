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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.15995753901143495" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.23352076967184088" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.11952496210102304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2977983250414411" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3133283865532912" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7926680850333512" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7747214271483378"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2774099464227213" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5169416689431656">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9822343849260404">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7539512804490915">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.45502070246837856">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5194791785943602"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7988128946159554"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.624772649001299"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7421479143437744"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5542932375870322"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7218385379842382"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8058788754902437"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.024430327476362645"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.34728772235529126"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5622532150177131"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.39826353778511425"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3430760790523284"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6092907981313707"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2651942445846558"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.004274230919349087"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.029976638658733235"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7584668121388909"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.49481066836942844"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7548231471978422"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
