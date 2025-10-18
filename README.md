# CassidyDC Development Toolset

CassidyDC default code formatting, linting, and build toolset for WordPress development.

## Overview

There are 3 directories included for various setups:

### Root

This directory contains the development config files that should be use in your project's root workspace. This can be the local server root directory, the theme directory, or the plugin directory, depending on what you set as your workspace root.

If you are using a plugin or theme directory as your root workspace, the plugin or theme `package.json` **devDependencies** and **scripts** should be added to the root `package.json` file you add in your workspace.

### Plugin

When you are using your local server as your workspace root and have a plugin nested inside that workspace, you should add these plugin config files in your nested plugin directory.

### Theme

Same as for 'Plugin' above. The difference is the theme `package.json` and `webpack.config.js` contain an additional package called `webpack-remove-empty-scripts` that removes empty JS files created by the WordPress build script when used for themes.

## Optional Stylelint Plugins

| Plugin                                              | Purpose                                                                                                                                                       |
| --------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `stylelint-declaration-block-no-ignored-properties` | Warns when using properties that have no effect when combined with other properties (note: not always correct, so double check before committing the change). |
| `stylelint-high-performance-animation`              | Warns when using performance-degrading CSS animation                                                                                                          |
| `stylelint-no-indistinguishable-color`              | Enforce use of colors that are not too close to each other (with threshold setting).                                                                          |
| `stylelint-plugin-logical-css`                      | Enforce the use of logical CSS properties, values, and units.                                                                                                 |
| `stylelint-use-nesting`                             | Enforces CSS nesting when possible.                                                                                                                           |
