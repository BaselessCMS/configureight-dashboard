# Configure 8 Dashboard

A dashboard for the Bludit CMS, built for use with the Configure 8 suite of themes & plugins.

![Configure 8 theme cover image](https://github.com/BaselessCMS/configureight-dashboard/blob/main/cover.jpg?raw=true)

## Requirements

This custom Bludit dashboard requires the [Conigure 8 theme](https://github.com/BaselessCMS/configureight) and its [companion plugin](https://github.com/BaselessCMS/configureight-plugin) to be installed and activated.

## Installation

1. Install and activate the Configure 8 theme & plugin.
2. Edit the Bludit init file (`bl-kernel\boot\init.php`) to add `define( 'CFE_DASHBOARD', true );`
3. Replace the standard dashboard file (`bl-kernel\admin\views\dashboard.php`) with the dashboard file in this repository.
4. Go to the Configure 8 options page in your site's admin. Find the "Custom Dashboard" option under the "General" tab.
5. Select the "Enabled" option and save.

## Backup

Although the Configure 8 plugin uses the contents of the standard Bludit dashboard as the default option, save a copy of the Bludit dashboard file for if or when you disable the Configure 8 theme & plugin. It won't harm anything to leave `define( 'CFE_DASHBOARD', true );` in the init file.
