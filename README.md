Example of theme with two stylesheets
=====================================

This plugin overrides the core template and CSS using template hooks to create a custom theme including switching between them using predefined times using the users timezone.
It does not include changing the theme (at all) on the login-screen (currently).

- New CSS styles are added with the hook **layout:head**

Installation
------------

- Create a directory **Theme_auto_night_day** under the folder **plugins**
- Copy all source files in this new directory
- Go on your local installation of Kanboard
- After the login, you should see the alterations to the default layout

NOTE
----
The coloring on the theme is by no means a 'good example' or 'workable' in any way, it's just a demo of what can/needs to be adjusted.
The night-theme was quickly drafted up glancing at the reason to write this plugin (#1967 on fguillot/kanboard)
The day-theme was copied from #1248 on fguillot/kanboard

