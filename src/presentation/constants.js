export const ALLOWED_BLOCKS = [
	'core/cover',
];

export const INNER_BLOCKS_TEMPLATE = 
[
	[
		'core/cover',
		{
			"dimRatio":0,
			"isUserOverlayColor":true,
			"isDark":false,
			"metadata":{
				"name":"Slide 1"
			},
			"className":"is-style-default"
		},
		[
			[
				'core/image',
				{},
				[]
			],
			
		]
	],
	[
		'core/cover',
		{
			"dimRatio":0,
			"isDark":false,
			"metadata":{
				"name":"Slide 2"
			}
		},
		[
			[
				'core/paragraph',
				{
					"placeholder":"Add some slide text"
				},
				[]
			],
			
		]
	],
];
