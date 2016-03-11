Kanboard Example of theme with two stylesheets
==============================================

To be used with http://kanboard.net

This plugin overrides the core template and CSS using template hooks to create a custom theme including switching between them using predefined times using the users timezone. Or the applications timezone if none is set.

- New CSS styles are added with the hook **layout:head**
- Added configuration in Settings->Integrations

Installation
------------

- Create a directory **Theme_auto_night_day** under the folder **plugins**
- Copy all source files in this new directory
- Go on your local installation of Kanboard
- After the login, you should see the alterations to the default layout
- Make any changes in Settings->Integrations

NOTE
----
The coloring on the theme is by no means a 'good example' or 'workable' in any way, it's just a demo of what can/needs to be adjusted.
The night-theme was quickly drafted up glancing at the reason to write this plugin (#1967 on fguillot/kanboard)
The day-theme was copied from #1248 on fguillot/kanboard


Other resources
---------------

  * Image from Pixabay (https://pixabay.com/nl/dag-en-nacht-nacht-en-dag-694840/)
  * Colorpicker from (https://bgrins.github.io/spectrum/)

