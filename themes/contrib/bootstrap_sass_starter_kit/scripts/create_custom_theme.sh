#!/bin/bash
# Script to quickly create custom theme.

echo '
+------------------------------------------------------------------------+
| Create a custom theme.                                                 |
+------------------------------------------------------------------------+
'
echo 'The machine name of your custom theme? [e.g. mycustom_theme]'
read CUSTOM_BOOTSTRAP_SASS

if [[ ! -e ../../custom ]]; then
    mkdir ../../custom
fi
cd ../../custom
cp -r ../contrib/bootstrap_sass_starter_kit $CUSTOM_BOOTSTRAP_SASS
cd $CUSTOM_BOOTSTRAP_SASS
for file in *bootstrap_sass_starter_kit.*; do mv $file ${file//bootstrap_sass_starter_kit/$CUSTOM_BOOTSTRAP_SASS}; done
for file in config/*/*bootstrap_sass_starter_kit*.*; do mv $file ${file//bootstrap_sass_starter_kit/$CUSTOM_BOOTSTRAP_SASS}; done

# Remove scripts folder as this will not work from custom theme.
rm -rf scripts
rm -rf .git

echo 'Your theme name ? [e.g. My Custom Theme]'
read CUSTOM_BOOTSTRAP_SASS_NAME
unset LANG

# mv {_,}$CUSTOM_BOOTSTRAP_SASS.theme
if [[ "$OSTYPE" == "darwin"* ]]; then
    grep -Rl bootstrap_sass_starter_kit .|xargs sed -i '' -e "s/bootstrap_sass_starter_kit/$CUSTOM_BOOTSTRAP_SASS/"
    sed -i '' -e "s/Bootstrap SASS Starter Kit/$CUSTOM_BOOTSTRAP_SASS_NAME/" $CUSTOM_BOOTSTRAP_SASS.info.yml
    sed -r -i '' -e "/^# Information added by Drupal.org/d" $CUSTOM_BOOTSTRAP_SASS.info.yml
    sed -r -i '' -e "/^(version|project|datestamp):/d" $CUSTOM_BOOTSTRAP_SASS.info.yml
else
  grep -Rl bootstrap_sass_starter_kit .|xargs sed -i -e "s/bootstrap_sass_starter_kit/$CUSTOM_BOOTSTRAP_SASS/"
  sed -i -e "s/Bootstrap SASS Starter Kit/$CUSTOM_BOOTSTRAP_SASS_NAME/" $CUSTOM_BOOTSTRAP_SASS.info.yml
  sed -r -i -e "/^# Information added by Drupal.org/d" $CUSTOM_BOOTSTRAP_SASS.info.yml
  sed -r -i -e "/^(version|project|datestamp):/d" $CUSTOM_BOOTSTRAP_SASS.info.yml
fi

echo '
+------------------------------------------------------------------------+
| Your new custom theme has been successfully created.                   |
+------------------------------------------------------------------------+
'
