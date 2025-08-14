/**
 * ESLint configuration.
 *
 * @file Manages the flat configuration settings for ESLint
 * @author Jacob Cassidy <jacob@cassidydc.com>
 * @see https://eslint.org/docs/latest/use/configure/configuration-files
 * @type {import("eslint").Linter.Config[]}
 * @version 1.0.0
 */

'use strict';

import globals from 'globals';
import js from '@eslint/js';
import wpPlugin from '@cassidydc/eslint-plugin-wordpress';
import { defineConfig, globalIgnores } from 'eslint/config';

export default defineConfig( [
	globalIgnores( [
		'**/.dev-assets/',
		'**/build/',
		'**/vendor/',
		'**/*.min.js',
	] ),
	{
		plugins: {
			js,
			wpPlugin,
		},
		extends: [
			'js/recommended',
			'wpPlugin/recommended',
		],
		files: [ '**/*.{js,mjs,cjs,ts,mts,cts,jsx,tsx}' ],
		languageOptions: {
			globals: {
				...globals.browser,
			},
		},
		linterOptions: {
			reportUnusedInlineConfigs: 'warn',
		},
		rules: {
			'no-unused-vars': 'warn',
			yoda: [ 'warn', 'never' ],
		},
		settings: {
			'import/core-modules': [ 'eslint/config' ],
		},
	},
] );
