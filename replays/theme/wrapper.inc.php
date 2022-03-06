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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.529776340975463" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8513784779475968" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.03446487651310659" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.413728442412689" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.36023703077970826" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8926636955436913" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5493681673521977"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2815494687336846" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.52852228469711">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.17176817574003067">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.24153632734810215">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7750503794597159">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9517499246167025"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4714550140725886"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.976196104171535"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.48801708115267006"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4125813155405662"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.178846147247135"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.08306900461696753"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7324544801647446"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5318904104343476"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9589842291684305"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.011453688014822605"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7159991566343125"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5100260037949262"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.04870727361894689"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.44339656802762706"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7999320855344367"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.20997339884838406"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.31565030374350767"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.24214295714684209"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
