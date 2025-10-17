# CassidyDC Development Toolset

CassidyDC default code formatting and linting toolset for WordPress development.

## Optional Stylelint Plugins

| Plugin                                              | Purpose                                                                                                                                                       |
| --------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `stylelint-declaration-block-no-ignored-properties` | Warns when using properties that have no effect when combined with other properties (note: not always correct, so double check before committing the change). |
| `stylelint-high-performance-animation`              | Warns when using performance-degrading CSS animation                                                                                                          |
| `stylelint-no-indistinguishable-color`              | Enforce use of colors that are not too close to each other (with threshold setting).                                                                          |
| `stylelint-plugin-logical-css`                      | Enforce the use of logical CSS properties, values, and units.                                                                                                 |
| `stylelint-use-nesting`                             | Enforces CSS nesting when possible.                                                                                                                           |

## Optional WordPress Build Script

To use the official WordPress build script for Block Plugins/Themes, run the following command:

`npm i --save-dev @wordpress/scripts copy-webpack-plugin glob`

And add the following settings in the `package.json` file:

```json
"overrides": {
  "@wordpress/scripts": {
    "@babel/runtime": "^7.28.3",
    "webpack-dev-server": "^5.2.2"
  }
},
"scripts": {
  "start": "wp-scripts start",
  "build": "wp-scripts build",
}
```

-   Root
-   Theme
-   Plugin
