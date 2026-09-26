# Configure 8 Dashboard

A dashboard replacement file for the Bludit CMS, built for use with the Configure 8 suite of themes & plugins.

![Configure 8 theme cover image](https://github.com/BaselessCMS/configureight-dashboard/blob/main/cover.jpg?raw=true)

## Features

The custom dashboard retains features of the standard Bludit dashboard and adds content from plugins in the Configure 8 suite. Content is grouped into tabbed sections. This includes a summary of site content and the activity log.

Following is a list of plugins that are incorporated into the custom dashboard, if they are installed and active.

- [User Profiles](https://github.com/BaselessCMS/user-profiles)
- [Categories Lists](https://github.com/BaselessCMS/categories-lists)
- [Tags Lists](https://github.com/BaselessCMS/tags-lists)
- [Post Comment](https://github.com/BaselessCMS/post-comments)
- [Visits Stats](https://github.com/bludit/bludit/tree/master/bl-plugins/visits-stats)

## Requirements

This custom Bludit dashboard requires the [Configure 8 theme](https://github.com/BaselessCMS/configureight) and its [companion plugin](https://github.com/BaselessCMS/configureight-plugin) to be installed and activated. The dashboard templates, custom and default, are in the Configure 8 plugin, which is activated by the Configure 8 theme.

## Installation

1. Install and activate the Configure 8 theme & plugin.
2. Edit the Bludit init file (`bl-kernel\boot\init.php`) to add `define( 'CFE_DASHBOARD', true );`
3. Replace the standard dashboard file (`bl-kernel\admin\views\dashboard.php`) with the dashboard file in this repository.
4. Go to the Configure 8 options page in your site's admin.
5. Find the "Custom Dashboard" option under the "General" tab.
6. Select "Enabled" then save the form.

## Backup

Although the Configure 8 plugin uses the contents of the standard Bludit dashboard as the default option, save a copy of the Bludit dashboard file for if or when you disable the Configure 8 theme & plugin. It won't harm anything to leave `define( 'CFE_DASHBOARD', true );` in the init file.
