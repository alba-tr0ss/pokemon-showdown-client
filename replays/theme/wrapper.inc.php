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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4730941634819492" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6370132378769466" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7570105920401693" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7858014907438258" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7091995167705132" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9147048697604381" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.41673388567003977"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6098654403566508" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16857288668844128">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4786098960353624">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7034904834406541">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5175809013045951">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6908795238900765"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2572200845541166"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.09704648417419048"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.19049661316497724"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1264189520161456"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4041138253752792"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.06560639659308154"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.33297194657286755"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6980003077882622"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7206206768594894"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2587271076359381"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5298660387713445"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.41777082506059915"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6057410790961482"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.39295537279780235"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7541687780033781"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2928641957423286"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3190260949848347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7719081485581427"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
