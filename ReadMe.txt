Theme Name: NomNom
Theme URI: http://zeaks.org/themes-2/nomnom-theme/
Description: Child theme for the Twenty Eleven theme
Author: Scott Dixon - Color schemes by my awesome girlfriend Heather :D
Author URI: http://zeaks.org
Version: 1.7

Credits: 
http://designerfied.com/ for superfish menu and wp-pagenavi style
http://theme.fm/ help with color scheme and layout functions
http://designisphilosophy.com/ for the cool recent related comments
My girlfriend Heather for picking out the color schemes

CHANGELOG -

v1.7 4/18/2012

Added mobile menu style. Menus should look better on mobile devices. (Thanks to Digitalraindrops.net)
Added default color scheme colors to the bottom of submenus (was appearing white with all schemes).
Added 5 new Google fonts Ubuntu, Droid, Playfair, Lato, Rokkitt
Added a footer menu area.
Added new wp-pagenavi styles and new default page navigation styles CSS3.
Added functions to display adsense ads on single posts and pages. 468x60 and 250x250. One displays at the bottom, the other within the post top left.
Added function to display copywrite year based on first and last published post date, displays in the footer.
Added a custom child dark color scheme function to fix color issues (navigation, footer menu, wp-pagenavi etc) and allow styling of it.
Added a new Help & Tips tab with instructions, css snippets and links to snippets on the forums. Will update as needed.
Added IE conditional stylesheet styleIE.css
Added a custom-functions.php to users to include their own functions.
Added a site wide comment switch. This will turn the "Leave a reply" link, comment form, and comments on/off on all posts and pages.

Fixed responsive layout issues for the extra sidebar when using Twenty Eleven default layouts.
Fixed misplaced layout images in Appearance > Theme Options.
Fixed fonts and minor cosmetics in Appearance > NomNom Options.
Fixed (I hope) issues with javascript and several plugins.
Fixed some broken admin UI image links, thanks Zeljko Popivoda: for pointing that out.
Fixed several style issues with IE, content nav borders, menu alignment, sidebar alignment.

Toned down the box shadow and text-shadow in various areas.
Cleaned up functions.php and CSS and many other files.
Combined stylesheets and javascripts, should score better on Yslow.
Minified most javascript and reduced the amount of .js and .css files loaded by half.
Adjusted colors for most of the color schemes.
Made more visual changes to the theme options, changed tab names and added better instructions.

Removed un-needed images and files.
Removed Superfish menus (was causing problems and they were not needed anyways)
Removed border-radius on #page (you can uncomment it)



v1.6.1 10/11/11
Added twenty Eleven default font to options
Reverted default font sizes and families back to Twenty Eleven defaults

v1.6 10/06/11 - 
Added font options for most areas
Added Navigation menu color options
Fixed related posts - was screwing with respond box when there was no comments in some cases.
Removed pullquotes CSS (wasn't needed)
Fixed several font options from beta
Disabled plain text links function, it was causing issues with some plugins (uncomment to use)
Changed admin layout and categorized options better
All options now use Ajax

v1.5 8/31/11 -
Added Nivo Slider to header with options
Added by request author avatar on post titles with on/off option
Added as suggested on/off option for recent related posts
Added comment bubble on/off switch
Added searcform in header on/off switch
Added ajax to Custom CSS section and other areas, most options should not require page reload to save.
Added by request tidy comment CSS (Allows more comment area by using 1 column CSS on all layouts, edit at own risk)
Added tabbed layout options panel. (saves space when future options are added)
Added Site Preview in NomNom Options
Redesigned the comments for all layouts (had no choice it was either all or none, and they looked bad with the 3 column)
Removed all shortcode functions and created plugin
Added default options for all theme options (should look like twenty eleven after install)
Added a class to the body element for all custom layouts .custom-layouts, this will effect all custom layouts.
Fixed header resizing for narrow left/right layouts. (Changed width to max width)
Increased narrow sidebar left and right width by from 850px to 875px.
Adjusted recent related posts position.
Fixed comment list on attachment page.
Fixed attachment page layout for all layouts. *Thanks Steve for pointing that out
Set width and position of comments for custom layouts to match default.

v1.4 8/22/11 -
Added option to resize header image
Added option to turn primary navigation menu on/off
Removed /includes/images/header directory
Removed all header code from functions (header will remain Twenty Eleven default size until it is changed)
Added extra widget area
Added 3 new layouts, 3 column left/right sidebars, 2 sidebars left, 2 sidebars right
Added custom CSS field to NomNom options
Created link to snippets page in options
Cleaned up NomNom Options page and fixed html

v1.3 8/15/11 - Update
Removed fallback_cb from header.php and set primary menu back to default
Added option to turn primary menu on or off
Added option to resize the header image
Removed custom headers and header functions from functions.php
Removed /includes/headers
Changed wide one column layout to 890px instead of %
Removed RSS feed from NomNom Options page

v1.2 8/13/11 -
Added 3 new layouts, Wide one column, narrow width left sidebar, narrow with right sidebar.
Added 6 new color schemes.
Added round corners to wrapper
Added NomNom Options page
Added Google Font selector
Added tabbed content shortcode
Fixed dropdown menu borders (should look better with default color scheme)
Fixed errors reported by Theme Check
Added excerpt length function to compensate for different width layouts, see functions.php
Cleaned up css, reduced transition delay time
Cleaned up functions.php
Move all shortcode functions to shortcodes.php
Moved shortcode css to it's own stylesheet
Moved theme options to theme-options.php
Added second menu #access2 above header
Removed wp_nav fallback wp-list-pages, changed to fallback_cb - as some users may want to only use the new top menu.
Heavily commented all theme files and CSS.

V1.0 8/4/11 - Release
