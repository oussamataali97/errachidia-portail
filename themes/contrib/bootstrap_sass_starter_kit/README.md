## Bootstrap SASS Starter Kit

Bootstrap SASS Starter Kit provides a turnkey solution to help you quickly
create a custom theme based on the popular Twitter Bootstrap Framework.

## Features

- Provides a simple solution for creating a custom theme.
- Designed to work with Bootstrap framework and SASS.
- Support for Bootswatch themes and colour modes (see scss/_import.scss).
- Support out of the box for previewing all your componenents when installing
the style_guide (admin) module.
- CSS and JS is now pre-compiled to help get you started with Bootstrap
defaults.
- Support for entity_print module stylesheet.

## Requirements

- Working version of node.js (>=18) and npm (nvm recommended e.g. `nvm use lts/hydrogen`).
- gulp 5.x

## Installing gulp

```npm install --global gulp-cli```

## Getting Started

1. From the boostrap_sass_starter_kit location, usually within the
`/themes/contrib/` path, execute the following command:

```
./scripts/create_custom_theme.sh
```
Follow the on screen prompts that require a machine name and name for your new
theme.

2. Navigate to your newly created custom theme and install any dependencies
`npm install`

3. Update your new themes gulpfile.js file with your own dev domain.

```
browserSync.init({
  proxy: "http://yourdomain.com",
});
```

4. run `gulp` from your newly created custom theme to compile your sites css
and javascript.

## Maps

When gulp runs it is configured to generate mappings that should be useful for
debugging css. This is appended to ther respective CSS file when using gulp.

## Minified Files

Gulp is configured to also generate the minified files. However, these
un-minified files are about 50% bigger so it is advisable to use the minified
versions on production.

When going to production it is probably a good idea to use these files that do
not include the maps that are useful in development. 

```
  css:
    component:
      css/style.css: {}
    theme:
      css/print.css: { media: print }
```
and 

```
all:
  version: VERSION
  css:
    theme:
      css/entity-print.css: {}

```
Simply insert `.min` to switch to using the minified versions.

Included in the theme is a prod version of themes.libraries.yaml. Simply
copy and overwrite the default theme.libraries.yaml with this one on production
to reference the minified files without source maps.

## More info

[Bootstrap SASS Documentation (5.3)](https://getbootstrap.com/docs/5.3/customize/sass/)
[Bootswatch](https://bootswatch.com)
[Style Guide Admin](https://drupal.org/project/style_guide)
