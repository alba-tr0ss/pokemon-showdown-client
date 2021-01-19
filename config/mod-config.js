/* 
optional data:
customTiers - these are auto-detected by the script, but you can set them here to ensure they show up in the right order
excludeStandardTiers - set to true if you want only your custom tiers to show up for the format
*/
const ModConfigData = {
	ClientMods: {
		cleanslate: {
			excludeStandardTiers: true,
		},
		cleanslatemicro: {
			excludeStandardTiers: true,
		},
		cleanslate2: {
			excludeStandardTiers: true,
		},
		csts: {
			customTiers: ['CS1', 'CSM', 'CS2'],
			excludeStandardTiers: true,
		},
		roulettemons: {
			excludeStandardTiers: true,
		},
		sylvemonstest: {},
		ccapm2020: {
			excludeStandardTiers: true,
		},
		optimons: {},
		megamax: {},
		m4av6: {},
		m4asandbox: {},
		megarevolution: {},
		perfectgalar: {},
		gen7dlcmons: {},
		fealpha: {
			excludeStandardTiers: true,
		},
		feuu: {
			excludeStandardTiers: true,
		},
		viabilities: {},
		breedingvariants: {},
		abnormal: {},
		crossoverchaos: {},
		pkmnyb: {},
		twisted: {},
		roseredirisblue: {},
		prism: {
			ignoreEVLimits: true,
		},
		smashmodsmelee: {
			excludeStandardTiers: true,
		},
		breakthisteam: {},
		conniecorddraft: {},
	}
};
exports.ModConfigData = ModConfigData;
