/**
 * Stylelint configuration.
 *
 * @file Manages the configuration settings for Stylelint. Based on the `@wordpress/stylelint-config` package.
 * @author Jacob Cassidy <jacob@cassidydc.com>
 * @see https://stylelint.io/user-guide/configure/
 * @type {import('stylelint').Config}
 * @version 1.0.0
 */

'use strict';

export default {
	extends: [
		'@cassidydc/stylelint-config-w3c-order',
		'@stylistic/stylelint-config',
		'stylelint-config-standard',
		'stylelint-config-standard-scss',
	],
	plugins: [
		'stylelint-declaration-block-no-ignored-properties',
		'stylelint-high-performance-animation',
		'stylelint-no-indistinguishable-colors',
		'stylelint-plugin-logical-css',
		'stylelint-use-nesting',
	],
	ignoreFiles: [ '**/*.min.css', 'build/**', 'vendor/**' ],
	rules: {
		'@stylistic/at-rule-name-space-after': 'always',
		'@stylistic/block-closing-brace-newline-before': 'always',
		'@stylistic/block-opening-brace-newline-after': 'always',
		'@stylistic/block-opening-brace-space-before': 'always',
		'@stylistic/declaration-block-semicolon-newline-after': 'always',
		'@stylistic/declaration-colon-newline-after': null,
		'@stylistic/function-comma-space-after': 'always-single-line',
		'@stylistic/function-max-empty-lines': 1,
		'@stylistic/indentation': [ 'tab', { ignore: [ 'inside-parens' ] } ],
		'@stylistic/max-empty-lines': 2,
		'@stylistic/max-line-length': null,
		'@stylistic/media-feature-parentheses-space-inside': null,

		// 'at-rule-empty-line-before': [
		// 	'always',
		// 	{
		// 		except: [
		// 			'blockless-after-same-name-blockless',
		// 			'first-nested',
		// 		],
		// 		ignore: [ 'after-comment' ],
		// 	},
		// ],
		// 'comment-empty-line-before': [
		// 	'always',
		// 	{
		// 		except: [ 'first-nested' ],
		// 		ignore: [ 'stylelint-commands' ],
		// 		ignoreComments: [ 'prettier-ignore' ],
		// 	},
		// ],
		// 'rule-empty-line-before': [
		// 	'always',
		// 	{
		// 		except: [ 'first-nested', 'after-single-line-comment' ],
		// 	},
		// ],

		'color-named': 'never',
		'custom-property-pattern': [
			'^([a-z][a-z0-9]*)(--?[a-z0-9]+)*$',
			{
				message:
					'Expected custom property name to be kebab-case (double dashes are allowed)',
			},
		],
		'declaration-property-value-keyword-no-deprecated': true,
		'function-url-quotes': 'never',
		// Uncomment the following line to turn OFF `no-descending-specificity` (when using CSS nesting, since it doesn't play well with nesting)...
		// 'no-descending-specificity': null,
		// Uncomment the following lines to turn ON `no-descending-specificity` (when NOT using CSS nesting)...
		'no-descending-specificity': [
			true,
			{
				ignore: [ 'selectors-within-list' ],
			},
		],
		'number-max-precision': 5,
		'selector-class-pattern': [
			'^[a-z]([a-z0-9-]+)?(__([a-z0-9]+-?)+)?(--([a-z0-9]+-?)+){0,2}$',
			{
				message: 'Expected BEM naming convention for class selector.',
			},
		],

		'csstools/use-nesting': 'always',
		'plugin/declaration-block-no-ignored-properties': true,
		'plugin/no-low-performance-animation-properties': [
			true,
			{
				ignoreProperties: [
					'background-color',
					'border-color',
					'color',
				],
			},
		],
		'plugin/stylelint-no-indistinguishable-colors': [
			true,
			{
				threshold: 10,
			},
		],
		'plugin/use-logical-properties-and-values': [
			true,
			{
				severity: 'warning',
			},
		],
		'plugin/use-logical-units': [
			true,
			{
				severity: 'warning',
			},
		],

		'scss/operator-no-newline-after': null,
		'scss/selector-no-redundant-nesting-selector': true,
	},
	reportDescriptionlessDisables: true,
	reportInvalidScopeDisables: true,
	reportNeedlessDisables: true,
};
