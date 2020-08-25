# Kadence Child Theme

## Introduction

This is an unofficial starter child theme for the [Kadence WordPress Theme](https://www.kadencewp.com/kadence-theme/).

A child theme is needed for advanced customizations and overriding template files of certain plugins.

It loads a blank `style.css` in which you can place custom CSS code if needed via `functions.php`.

![Screenshot](https://d.pr/i/EYr7DS+)

## Installation

1. Click the green Code button on this page and download the zip file.
2. Extract the zip file and open the folder in a editor like [Visual Studio Code](https://code.visualstudio.com/).
3. Set your Theme Name, Author etc. in style.css' comment header near the top. Do NOT change `Template:     kadence`.
4. You may want to rename the folder from `kadence-child-theme-master` to something else like `kadence-child` or `project-name`. Zip the folder.
5. In WP admin go to Appearance > Themes > Add New > Upload Theme. Browse to and select the zip file from the previous step. Click Install Now.
6. Activate the child theme.

## Note

If you have made any changes in the Customizer settings either directly or indirectly by importing one of the starter templates, those changes will be overwritten when another theme is activated. This is because each theme uses its own options database entry for the Customizer options (thanks to Ben Ritner for reminding me about this).

If you wish to bring back the earlier Customizer settings that were present when the parent Kadence theme was active, switch to the parent Kadence theme, go to Customizer > Import/Export, export, switch to the child theme and import.

## Changelog

= 1.0.2 ( August 24, 2020 ) =

Fixed the order of version number and `$in_footer` in `wp_enqueue_style()`.

= 1.0.1 ( August 14, 2020 ) =

Set higher priority than the default 10 for `add_action` line for loading `style.css` so that sytles override those coming from Customizer.

= 1.0.0 ( August 13, 2020 ) =

Initial Release.