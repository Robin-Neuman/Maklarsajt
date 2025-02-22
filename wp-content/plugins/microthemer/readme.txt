﻿=== Microthemer Lite ===

Contributors: bastywebb, joseluiscruz, ahrale
Donate link: http://themeover.com/microthemer/
Tags: css editor, css hero, yellow pencil, visual css style editor, style editor, elementor, beaver builder, oxygen, divi, customize theme, css plugin, sass, scss, css grid, animation, transition, fonts, color, colors, google fonts
Requires at least: 3.6
Tested up to: 5.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A CSS editor for responsively customizing the appearance of any WordPress theme or plugin, with or without writing code.

== Description ==

Microthemer is a light-weight yet powerful CSS editor for responsively customizing the appearance of any WordPress theme or plugin content (e.g. contact forms), down to the smallest detail. Microthemer caters for both coders and non-coders.

= Main Features (for all users) =

1. **Style anything** on your web page, including headers, menus, sidebars footers, and plugin content.
2. **Intuitive visual editing**.
3. **Over 100 style options** at your disposal e.g. Google Web Fonts, background color, font-family, CSS3 gradients, drop shadow etc. Pro-only styles include animation, transition, and flexbox.
4. **Design responsively** without the usual headaches. Preview your site at different screen sizes and apply *media queries styles* without writing code.
5. **Export your designs** as a zip file. For sharing with friends, or transferring between domains.
6. **In-program docs** so you can learn about CSS, or refresh your memory.
7. **History feature**, so you can go back if you make a mistake.
8. **Draft mode**, so you can try new designs on a live site without affecting what visitors see until you're ready to publish.
9. **Apply styles per-page or globally**.
10. **Apply :hover states** an any other pseudo selector like :nth-child() without having to remember the syntax.
11. **Advanced color picker** for sampling colors from your theme and creating custom palettes.
12. **Import CSS** media queries, selectors, and styles from any stylesheet into Microthemer's GUI.
13. **Light-weight**. Microthemer generates CSS. It doesn't try to do much more than that.
14. **Nonce security** to help keep things secure.
15. **Supports multi-site**.
16. **Supports SSL sites**.
17. **Great support** provided via <a title="Microthemer Support Forum" href="http://themeover.com/forum/" target="_blank">our dedicated Microthemer forum</a>.
18. Free <a title="HTML, CSS Layout & Responsive Design - Using WordPress & Microthemer" href="https://themeover.com/html-css-responsive-design-wordpress-microthemer/" target="_blank">CSS, HTML, and responsive design tutorial</a>.
19. Event-based animation (e.g. onClick, inView)


= Main Features for developers =

1. **Full code editor** that lets you write code in the browser while looking at the page.
2. **Hybrid GUI code editor** if you want to leverage the power of the GUI but prefer writing CSS properties and values by hand.
3. **SCSS, CSS, and JS** supported.
4. **Enqueue JS libraries** native to WordPress like jQuery UI for rapid experimentation.
5. **Minify CSS** code.
6. **HTML and CSS inspection**, similar to browser inspectors.
7. **Keyboard shortcuts** for common actions.
8. **Validation** of custom selectors with visual feedback as you type.
9. **Hide from clients** by uninstalling or deactivating, but still use the CSS Microthemer generates by copying and pasting a few lines of PHP code to your theme's functions.php file.

= Free VS Premium version =
This free version limits you styling 15 things, and doesn't include flexbox, transition, or animation features. To unlock the full program, you can purchase a <a href="http://themeover.com/microthemer/" target="_blank">Standard</a> ($45) or <a href="http://themeover.com/microthemer/" target="_blank">Developer</a> ($90) license.

= Getting started video  =

https://www.youtube.com/watch?v=NZFbc-KuMPk

= Using Microthemer with Beaver Builder  =

https://www.youtube.com/watch?v=9uZgor8Pay8

= Learn flexbox with Microthemer in 14 mins  =

https://www.youtube.com/watch?v=XoAt9R148NY


== Installation ==

1. Click the 'Plugins' menu option in WordPress.
2. Search for 'Microthemer Lite'.
3. Install and activate the plugin.
4. Go to the 'Microthemer' menu option.
5. Start customizing the appearance of your site.
   

== Frequently Asked Questions ==

= Is This Plugin Supported? =
Yes. Please post your question in <a title="Microthemer Support Forum" href="http://themeover.com/forum/" target="_blank">our Microthemer forum</a>.  

= Where can I find documentation? =
Microthemer has built-in documentation! Just click the help icon (top right of the interface) to load the tutorials and CSS Reference. You can also search and post questions in our forum from there without having to leave the Microthemer interface.


== Screenshots ==

1. Microthemer’s intuitive interface sits above your site to make it easy to see the changes as you make them.
2. To start editing simply double click anything on the page. Or click the 'Target' button to enable 'hover targeting'.
3. Microthemer comes with over 80 CSS styling properties grouped into eleven categories. In this screenshot we can see border options, such as color, width, radius and style.
4. The main menu allows you organise and manage your folders and selectors. You can simply drag and drop them into the required position, as well as copy, edit, or delete. 
5. Microthemer includes a revision restore feature. The past 50 actions that alter your workspace are remembered. So if you make a mistake you can easily roll back to a previous point.
6. The advanced selector wizard options show you the computed CSS for anything you double-click, just like right-click with browser inspectors.
7. The advanced targeting options includes a list of potential selectors from the very specific to the very broad. Microthemer understands that sometimes users want to target a set of elements, such as all list items titles, as well as just single elements.
8. Easily preview your site as if you were viewing it on phone or tablet as you design and apply screen width specific styles to make your theme fully responsive.
9. You can view the CSS code Microthemer generates for debugging or copying and pasting elsewhere. Some users like the fact you can deactivate Microthemer and still make the use of the styles (without having to copy and paste CSS).

== Changelog ==

= 6.1.1.4 (March 9th 2020) =

# Bugs fixed
* Issue adding grid template area: Uncaught TypeError: rows[l].join is not a function.
* CSS grid shorthand could be invalid with certain combinations of grid properties.
* Using opacity and e.g. filter: blur(3px) on the same selector caused MT to remove the filter property when writing CSS to the stylesheet.
* False positive validation warning when using variables with shorthand properties like box-shadow.

= 6.1.1.0 (March 2nd 2020) =

# Enhancement
* Microthemer adapts rulers and responsive preview width the full-screen mode enabled via "Editor Enhancer for Oxygen".

= 6.1.0.9 beta (Feb 27th 2020) =

# Bugs fixed
PHP Notice: Undefined variable: add_styles in tvr-microthemer.php.

= 6.1.0.8 beta (Feb 25th 2020) =

# Enhancement
* The styles tab is slightly faster when Oxygen is active.

# Bugs fixed
* Oxygen elements were still draggable during MT targeting mode.
* Pages with Oxygen templates were not always loading correctly if activated using MT View menu switch.
* Cannot read property 'width' of undefined - error when using the 'Areas' CSS grid tab with the grid highlight enabled.
* Fixed issue with misaligned grid highlight with Oxygen columns.

= 6.1.0.3 beta (Feb 20th 2020) =

# Bugs fixed
* Persistent issue with Firefox where Microthemer targeting panels could be misaligned.
* MT Styles tab a bit faster when Oxygen is active (maybe still room for improvement).
* Issue with Oxygen resize handles showing throw when targeting with MT.
* Un-editable Oxygen content sometimes when enabling Oxygen via MT View menu control.

= 6.0.9.9 beta (Feb 19th 2020) =

# Enhancement
* MT responsive tabs can be manually assigned to sync with page builder mobile views.
* Performance enhancement for targeting elements with the advanced controls open.
* Microthemer cleans up artificial HTML attributes when Oxygen builder is active, leaving only what will display when the page is published.
* Microthemer updates computed styles in response to changes in Oxygen.
* Special oxygen patch no longer required to test the beta.

# Bugs fixed
* Microthemer and Oxygen panels could be misaligned in Firefox.
* Existing selectors not (always) returnable via numbers.
* Double-click Oxygen text element should not trigger MT targeting mode

= 6.0.9.1 beta (Feb 16th 2020) =

# Change
* MT uses Elementor preview size on the 'Elementor tablet' and 'Elementor mobile' responsive tabs even when Elementor is not active inside Microthemer (as opposed to defaulting the the max-width value of the media query).

# Enhancement
* Oxygen can be loaded inside Microthemer - the core integration feature.
* Improved selector algorithm that is better at finding sets of related elements.
* Microthemer's selector algorithm ignores artificial Oxygen UI classes that are not present on the published page.
* Oxygen element targeting controls temporarily step aside when targeting elements with Microthemer.
* Oxygen responsive tabs are loaded by default when installing Microthemer, if Oxygen is already installed and activated. They can also be loaded manually via the 'Edit media queries' screen. See 'Oxygen MQs'.
* Microthemer responsive views sync with Oxygen's responsive views.
* Microthemer adapts to Oxygen sidebar views by adjusting the ruler start point and accommodating the Oxygen 'Structure' menu.

# Bugs fixed
* Elementor device view was not always syncing with MT correctly.

= 6.0.8.5 (Feb 25th 2020) =

# Bugs fixed
* Issue with manual !important settings being removed when restoring a revision.

= 6.0.8.4 (Feb 24th 2020) =

# Bugs fixed
* Issue with event-based animations when used across different device tabs at the same time.

= 6.0.8.3 (Feb 20th 2020) =

# Bugs fixed
* Several stock animate.css animations didn't set opacity on last frame so animation-fill-mode: forwards wasn't working as expected.

= 6.0.8.2 (Feb 11th 2020) =

# Enhancement
* All Microthemer keyboard shortcuts listed in table at Help > Getting started tips > scroll down.

# Bugs fixed
* Code editor was throwing false positive warning on CSS variable definitions.

= 6.0.8.0 (Feb 5th 2020) =

# Bugs fixed
* Possible errors when performing actions in MT when frontend had not fully loaded: 's.get_current_url is not a function' and 's.get_style_nodes is not a function'.
* Box-shadow inset keyword was getting lost when editing styles via the editor.

# Change
* 'U' icon for 'jumping' to a UI property from the code editor changes to a 'J', due to keyboard shortcut being changed to Ctrl+Alt+J. This was only recently changed from G to U, but Ctrl+Alt+U wasn't suitable as it prints a special u character with an accent.

= 6.0.7.7 (Feb 5th 2020) =

# Bugs fixed
* Error importing arbitrary CSS into Microthemer via Packs > Import > CSS Stylesheet.

= 6.0.7.6 (Jan 30th 2020) =

# Change
* 'G' icon for switching to a UI property from the code editor changes to a 'U', and keyboard shortcut changed to Ctrl+Alt+U, as Ctrl+Alt+U is reserved for viewing the generated CSS code.

# Bugs fixed
* The selector label and folder fields in targeting mode are redundant in the View > Full code editor view. And so they are now hidden.

= 6.0.7.4 (Jan 30th 2020) =

# Enhancement
* MT JavaScript error checking can be turned off via Preferences.

= 6.0.7.3 (Jan 23rd 2020) =

# Change
* Label for unlock field clarifies unlock code can be used as well as email.
* Side-docked style options display in two columns at a smaller width (360px).

# Bugs fixed
* Microthemer was stripping pixel units from calc() functions when restoring a previous save point.
* With style options docked left, grid control was not expanding with width of sidebar.

= 6.0.6.9 (Jan 20th 2020) =

# Change
* The pre-upgrade backup Microthemer creates is stored in the revisions table as
"x.x.x.1 settings (before updating to x.x.x.2)", rather than "Pre-upgrade backup settings". This revision remains available until the next upgrade overwrites it (unless you choose to save it before upgrading again). Backup design packs are no longer auto-created before major MT version updates.

# Bugs fixed
* Possible PHP warnings when upgrading from an older version of MT.
* MT was creating multiple backup zip files when upgrading MT rather than overwriting the previous. MT only creates backups in the history table now.
* White lines could appear at the top right of the revision history screen.
* Selectors could be blank after upgrading from old version of MT (requiring use of the 'Regenerate CSS' option in preferences to fix).
* Browser fallbacks e.g. 'width:10px; width: 2vw;' not being stripped from Microthemer's CSS editor.

= 6.0.6.2 (Jan 16th 2020) =

# Bugs fixed
* Moving the current selector to another folder caused the style fields to disappear.
* The transition event value field was not displaying when returning to the transition group, even when the event value was set to :hover or :focus.

= 6.0.6.0 (Jan 11th 2020) =

# Bugs fixed
* PHP warning: Deprecated: Unparenthesized a ? b : c ? d : e is deprecated.
* PHP warning: Array and string offset access syntax with curly braces is deprecated.
* With non-typical WP head setup: Uncaught NotFoundError: Failed to execute 'insertBefore' on 'Node.
* Fixed issue when upgrading from a very old version of MT to the 6.x range.
* Fixed issue with previously entered style values in suggestions dropdown not being remembered.

= 6.0.5.6 (Jan 9th 2020) =

# Change
* Targeting suggestion dropdown menus are more obviously dropdown menus. And match the formatting of the styling dropdown menus.

# Enhancement
* Grid control can be expanded using a new icon next to the grid highlight icon, which has lost it's text label.
* Number of history snapshots configurable via General > Preferences.
* History snapshots can be saved permanently.

# Bugs fixed
* With non-typical WP head setup: Uncaught NotFoundError: Failed to execute 'insertBefore' on 'Node.
* Unnecessary Sass compilation warning when first enabling Sass on a fresh install.
* Empty selectors could cause issues for subsequent selectors when multiple selectors were added to the custom code editor (to the left of the Font property group). Also, MT was auto-clearing empty selectors when returning to the code editor.
* The code editor was throwing a false positive warning when CSS functions like calc() or var() were used.
* Some issues with the code editor scroll position not resuming correctly.

= 6.0.4.7 (Jan 6th 2020) =

# Enhancement
* Elementor navigator can be docked right inside MT for mobile and tablet while preserving the correct preview width.
* Improved MT-Elementor responsive view synchronisation.

# Bugs fixed
* Elementor device mode was not updating when using corresponding responsive MT tabs. The preview width was updating, but the Elementor UI wasn't updating.
* CSS modifier :nth pseudo selectors were a bit misaligned.
* Error importing arbitrary CSS via Packs > Import > CSS Stylesheet: Cannot read property 'replace' of undefined.
* Grid highlight status was not remembered between MT interface reloads.
* Deleting a selector entirely via the editor, including the brackets etc, defaulted back to the previous state of the selector (e.g. with original declarations) rather than an empty selector with no declarations.

= 6.0.4.0 (Dec 31st 2019) =

# Enhancement
* New option for loading Microthemer CSS after Oxygen: Preferences > Integrations. This is enabled by default on new MT installs if Oxygen is already installed and activated.

= 6.0.3.9 (Dec 20th 2019) =

# Bugs fixed
* Error uploading design pack: 'the link you followed has expired'

= 6.0.3.8 (Dec 19th 2019) =

# Enhancement
* Grid highlight option added to grid properties.

# Bugs fixed
* Misalignment of radio inputs on high resolution displays.
* Display of grid-auto properties when options docked to left.
* CSS conflict with social icons plugin. MT's toggles were over-sized and purple.
* The presence of a noscript tag caused issues for MT's HTML inspector 'click to select' functionality.

= 6.0.3.3 (Dec 13th 2019) =

# Bugs fixed
* Intermittent error with dropdown menus: 'this.source is not a function'.
* WP toolbar shortcut to MT wasn't loading the page or post relevant to the edit page/post screen from which it was clicked. Draft posts and pages can now be edited with MT more easily with this fix.

= 6.0.3.2 (Dec 13th 2019) =

# Bugs fixed
* WP toolbar shortcut to MT wasn't loading the page or post relevant to the edit page/post screen from which it was clicked. Draft posts and pages can now be edited with MT more easily with this fix.

= 6.0.3.1 (Dec 12th 2019) =

# Change
* Preview doesn't default to full width when using the MT icon to hide the Microthemer toolbar.

# Bugs fixed
* Blue dot on 'Item' tab wasn't updating correctly in single grid item view.
* Elementor mobile control wasn't resizing the preview correctly if Elementor specific media queries were not active in Microthemer.
* Grid item radio labels could display strangely with double-digit numbers.

= 6.0.2.7 (Dec 5th 2019) =

# Bugs fixed
* Stock animations were not working on the frontend since the 6.x beta release.

= 6.0.2.6 (Dec 4th 2019) =

# Enhancement
* Added option to use absolute background image paths. This is useful when working with WP sites installed in a sub-directory.
* prefix ''-webkit-sticky' is now added by Microthemer.

# Bugs fixed
* Unnecessary Sass compilation warning when creating a new selector: 'Data context created with empty source string'.
* The code editor recognises 'sticky' as a valid value for the position property.
* Custom CSS comments were being stripped from the code editor

= 6.0.2.1 (Dec 2nd, 2019) =

# Enhancement
* MT code editor recognises property scroll-behavior.
* Background-clip property has new 'text' value.

# Bugs fixed
* MT loaded its styles after Oxygen styles when working inside MT, but before on the site frontend. This meant styles that needed overriding with greater CSS specificity could fo unnoticed until viewing the site outside MT.

= 6.0.1.8 (Dec 1st, 2019) =

# Bugs fixed
* Under some conditions the CSS property fields could load twice.
* Naming folders or selectors with plain integers could cause issues.
* Disabled grid item tabs didn't show line through after reloading property group.

= 6.0.1.5 (Nov 28th, 2019) =

# Change
* Highest min-width breakpoint is 1400 rather than 1600, as 1600 is larger than standard laptops.

= 6.0.1.4 (Nov 28th, 2019) =

# Change
* New min and max media query sets added. The label for the default media queries has also been tweaked to more accurately reflect the mix of media queries included. As well as flag it more clearly as the default set. Should it still be the default set? Is the new 'Min and max' set more useful? Please let us know!

= 6.0.1.3 (Nov 27th, 2019) =

# Bugs fixed
* Cannot read property 'coordinates' of undefined error could happen when clearing grid item values.
* Duplicate grid-area values could be generated when rapidly dragging grid control items.

= 6.0.1.1 (Nov 26th, 2019) =

# Bugs fixed
* Grid control items fix in previous update wasn't quite finished.

= 6.0.1.0 (Nov 26th, 2019) =

# Enhancement
* Added suggested value to grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)). This can be used to make grid items responsive without using media queries. It's magic!

# Bugs fixed
* Scroll buttons displayed to the right of the border property group even when they weren't needed.
* Undefined JS error.
* Under some conditions the grid control items could get out of sync with the items they represent.

= 6.0.0.6 (Nov 24th, 2019) =

# Bugs fixed
* Color picker didn't show hex/rgba values
* Blue dots appeared on grid align and areas tabs on newly created selectors even if no value set.

= 6.0.0.4 (Nov 24th, 2019) =

# Major Bug fixed
* Updating to version 6 from a 5.x version caused Microthemer's stylesheet to be blank.

= 6.0.0.3 (Nov 22nd, 2019) =

# Bugs fixed
* The new grid alignment properties were not syncing properly with the code editor.

= 6.0.0.2 (Nov 22nd, 2019) =

# Enhancement
* Grid boundary only shows explicitly defined rows or columns, rather than including implicit tracks. This can help users identify issue from dragging items outside of the explicit grid.

# Bugs fixed
* The blue dots on the grid sub tabs were not always updating correctly.

= 6.0.0.0 (Nov 22nd, 2019) =

# Enhancement
* Drag and drop support for creating CSS grid layouts.
* CSS grid specification fully supported with UI fields.

# Bugs fixed
* clicking HTML line in targeting mode didn't work after second click.

= 5.8.3.4 (Oct 28th, 2019) =

# Bugs fixed
* WP 5.3 misaligned Microthemer's text inputs.

= 5.8.3.3 (Oct 28th, 2019) =

# Bugs fixed
* History 'time ago' could be wrong for some WP configurations.

= 5.8.3.2 (Oct 23rd, 2019) =

# Bugs fixed
* Another issue with Sass auto-prefixing.

= 5.8.3.1 (Oct 21st, 2019) =

# Bugs fixed
* Sass selectors with nested media queries caused an error due to recent vendor prefix update not accounting for selectors inside custom breakpoints.


= 5.8.3.0 (Oct 19th, 2019) =

# Bugs fixed
* PHP error with older versions: unexpected ']' in tvr-microthemer.php on line 3017.

= 5.8.2.9 (Oct 14th, 2019) =

# Bugs fixed
* New vendor prefixes for Sass were added twice if using the Ui fields.

= 5.8.2.8 (Oct 14th, 2019) =

# Improvement
* Vendor prefixes also supported when Sass is enabled.

= 5.8.2.7 (Oct 9th, 2019) =

# Bugs fixed
* Regression caused by 5.8.2.5 update. CSS on the full code editor was not written to the active-styles.css stylesheet.

= 5.8.2.6 (Oct 9th, 2019) =

# Bugs fixed
* Improved compatibility with LearnPress.

= 5.8.2.5 (Oct 8th, 2019) =

# Bugs fixed
* Removed uses of PHP trim() function inside empty() function for compatibility with older versions of PHP.

= 5.8.2.4 (Sept 20th, 2019) =

# Bugs fixed
* Auto-generated selector names could be blank if the selector id started with an underscore. This affected the Oxygen page builder.

= 5.8.2.3 (Sept 14th, 2019) =

# Bugs fixed
* MT wasn't picking up Elementor custom classes.
* Issue deleting design packs.

= 5.8.2.1 (Sept 14th, 2019) =

# Bugs fixed
* I forgot to actually include the fix in the previous 5.8.2.0 update!

= 5.8.2.0 (Sept 13th, 2019) =

# Bugs fixed
* Loading error when custom CSS code was malformed.

= 5.8.1.9 (Sept 5th, 2019) =

# Bugs fixed
* Uncaught TypeError: Cannot read property 'hasClass' of undefined (line 142).
* Packs > Import was listing files rather than directories.

= 5.8.1.7 (Sept 3rd, 2019) =

# Enhancement
* Changing a Sass @extend rule doesn't require a full code compile.

# Bugs fixed
* With SASS enabled, disabling selectors or folders didn't update the styling properly.
* Using @extend in the full code editor wasn't fully working.
* Updating an extended selector didn't append other selectors if no other Sass entities were used.
* When rulers were disabled drop shadow appeared in the wrong place.
* Issue with calc() in shorthand properties like padding.

= BETA: 5.8.1.1 (August 5th, 2019) =

# Enhancement
* Microthemer compiles SASS code in the browser almost instantly.
* View > Generated CSS auto-scrolls to the correct line for the current selector
* New keyboard shortcut Ctrl+Alt+G for viewing generated CSS

# Change
* The code editor doesn't auto-complete semicolons or quotes.
* Internet explorer tabs in the full code view do not display by default. They can be re-enabled via the preferences.

# Bugs fixed
* Microthemer didn't regenerate all CSS after changing global !important setting via Preferences > CSS/SCSS.
* The color picker for the transition event value field didn't display correctly.
* Event target and value fields didn't show when loading a selector even when a JavaScript event had been selected.

= 5.8.0.3 (June 26th, 2019) =

# Bugs fixed
* Removed ACE editor warning for unrecognised @ rules e.g. @-moz-document.

= 5.8.0.2 (June 26th, 2019) =

# Bugs fixed
* JavaScript editor was auto-saving and reloading the page on type (when it should only save with Ctrl+S keyboard shortcut)

= 5.8.0.1 (June 21st, 2019) =

# Bugs fixed
* Fixed multisite issue with URL paths being incorrect in the View > Change site preview URL menu.

= 5.8.0.0 (June 20th, 2019) =

# Bugs fixed
* A few PHP error warnings.
* Switching from SASS to non-sass didn't convert custom styles to GUI styles if no GUI format styles were already present.
* Full code editor height didn't always update when pasting code into it.
* Full code editor didn't resume correct height when existing detached preview mode in some cases.

= 5.7.0.6 (June 14th, 2019) =

# Bugs fixed
* Code editor gutter misaligned when switching between full code view and main UI view.

= 5.7.0.5 (June 10th, 2019) =

# Bugs fixed
* Opening MT in a new window from another domain caused cross origin error.

= 5.7.0.4 (May 25th, 2019) =

# Bugs fixed
* Extra fix for the page spider plugin issue missed in the previous patch.

= 5.7.0.3 beta (May 25th, 2019) =

# Bugs fixed
* Compatibility issue with admin page spider plugin.
* Deleting the a property value via the GUI options caused the editor to display nothing rather empty selector code if the property was the only property set.

# Enhancement
* Clicking the link fields icon next to e.g. padding sets all fields the same immediately, rather than on next field change. The last edited value is used for syncing if possible. Or the first defined value in the set.

= 5.7.0.0 beta (May 22nd, 2019) =

# Enhancement
* Dock all options left for those that prefer that layout.
* Dock editor only left option for working with GUI fields and code editor interchangeably with ease.
* Detach preview option for those that like use 2 screens when developing (one screen for MT controls, another for the preview).
* Updated ACE editor validation rules and support for CSS grid properties and values.

= 5.6.2.0 (May 15th, 2019) =

# Bugs fixed
* MT's PHP level gzipping was applying to the standalone preferences page. So if there was a problem with the gizip setting it couldn't be switched off via the preferences page.

= 5.6.1.9 (May 6th, 2019) =

# Change
* Quick edit selector tooltip now shows the selector code, like when hovering a selector name in the main selectors menu.

# Bugs fixed
* In sass mode, merging custom code with GUI field styles didn't work if selector contained ] and [ chars.
* In sass mode, blue dot showed on custom code field even if no custom styles were present.
* Selector code tooltips had HTML escaped quotes.

= 5.6.1.5 (April 25th, 2019) =

# Bugs fixed
* Issue manually adding a selector in 'Quick edit folder' menu.

= 5.6.0.6 (April 5th, 2019) =

# Enhancement
* Faster inline code editor style rendering.
* Edited fields are easier to spot. And the field in focus has a green border. This was previously only available in edge mode.

# Change
* MT opens links to external sites in new window/tab rather than doing nothing when clicked.
* Targeting suggestions in advanced mode only update the highlighting when clicking a field rather than hovering over it. Hovering of the radio input or the number of elements still updates the highlighting.

# Bugs fixed
* Issue with Google fonts subset.
* History was saving too frequently rather than allowing 2 seconds to pass before storing a style change.

= 5.6.0.1 (beta) (Mar 29th, 2019) =

# Bugs fixed
* Disabling one property group disabled whole selector.

= 5.6.0.0 (Mar 29th, 2019) =

# Enhancement
* UI fields and custom code editor can now be used interchangeably.
* Selectors can be edited via the custom code editor.

# Change
* SCSS editor no longer requires Ctrl + S shortcut to save settings.

= 5.5.4.3 (March 21st, 2019) =

# Bugs fixed
* JS error when upgrading a site that has very old MT settings: Cannot read property 'disabled' of undefined.

= 5.5.4.2 (Feb 24th, 2019) =

# Edge mode trial
* Revised system for flagging edited fields using a blue border. Also added a style for the currently active field.

# Bugs fixed
* Color picker now defaults to the computed value, if no manual value set, without actually applying a new manual value.

= 5.5.4.0 (Feb 22nd, 2019) =

# Bugs fixed
* Another 5.5 upgrade issue. If a selector has no value in the 'Code' field, it could cause an error when opening the folder containing the selector.

= 5.5.3.9 (Feb 18th, 2019) =

# Edge mode blue dot bugs fixed
* z-index issue made dot visible in selectors menu
* Dots were misaligned on list/background image fields.
* Blue dot didn't show on color picker fields.

= 5.5.3.6 (Feb 8th, 2019) =

# Edge mode trial
* Blue dots on the property fields that have manual values to help users relocate previous styles.

# Enhancement
* Enter keyboard key can be used instead of submit button for the following actions:
- Add folder
- Add / edit selector
- Create new selector (if selector or folder name field is in focus)
- Change preview URL via view menu
- Custom media query label
- Import/export (although enter selects menu items and then removes focus from input, so a bit tricky sometimes)

# Bugs fixed
* No validation on custom media queries. Empty labels and code were permitted.
* Hitting enter on custom JS library, import, and export dialogs reloaded the UI.
* Color picker color tooltips were not shown in hex format even if preference set.

= 5.5.3.1 (Jan 22nd, 2019) =

# Bugs fixed
* Microthemer not handling malformed data gracefully.

= 5.5.3.0 (Jan 17th, 2019) =

# Bugs fixed
* JS error with adding custom selectors via the quick edit folder menu.

= 5.5.2.9 (Jan 16th, 2019) =

# Bugs fixed
* Another upgrade issue where old settings caused a JavaScript error.

= 5.5.2.8 (Jan 14th, 2019) =

# Bugs fixed
* Potential undefined $image_library PHP warning on design pack attachments tab.

= 5.5.2.7 (Jan 10th, 2019) =

# Bugs fixed
* Issue when deleting the last MT selector via the SELECTOR quick edit menu (missed that whe fixing previous bug).

= 5.5.2.6 (Jan 8th, 2019) =

# Bugs fixed
* Issue when deleting the last MT selector via the folder quick edit menu.
* Display issue with categorised dropdown menus e.g. font-family and animation-name.
* Clicking on the number in brackets after the folder name in the main menu didn't open the folder.

= 5.5.2.3 (Jan 7th, 2019) =

# Bugs fixed
* When importing CSS from a stylesheet into MT, repeating media queries generated multiple MT responsive tabs instead of just one per unique media query.

= 5.5.2.2 (Jan 6th, 2019) =

# Bugs fixed
* Upgrade issues for users who's settings were untidy, perhaps due to an inert bug present in a previous version of MT.
* PHP error when editing a Divi page via the backend builder.

= 5.5.2.0 (Jan 2nd, 2019) =

# Bugs fixed
* Computed CSS for flex-basis property was NaNpx if CSS calc() function was used.

= 5.5.1.9 (Dec 30th, 2018) =

# Bugs fixed
* SCSS used on the inline code editor (to the left of the Font property group) wasn't fully supported.

= 5.5.1.8 (Dec 28th, 2018) =

# Bugs fixed
* Uncaught TypeError: Cannot read property 'length' of undefined (line 419). This happened when updating very old Microthemer installs with old setting configurations.

= 5.5.1.7 (Dec 27th, 2018) =

# Enhancement
* Improved compatibility with the latest Divi theme. Navigating from an active Divi builder page to Microthemer, or activating Divi from inside Microthemer, caused a blank page. This is because Divi breaks out of it's parent window if it finds itself inside another window. Hopefully we can work with Elegant themes to address this when adding deeper integration in future. But for now, the navigation flow allows editing in Divi and then switching to MT to make style changes without problems.

= 5.5.1.6 (Dec 26th, 2018) =

# Bugs fixed
* Unnecessary delay in reloading the stylesheet when viewing Microthemer's CSS code.
* MT incorrectly stripped white space from CSS calc() functions.

= 5.5.1.4 (Dec 14th, 2018) =

# Bugs fixed
* Issue with servers running PHP 5. Parse error: syntax error, unexpected '[' in /wp-content/plugins/microthemer/tvr-microthemer.php on line 1792.
* Also relasted to PHP 5, CSS code was not added to active-styles.css. Just section comments.

# Enhancement
* Added a 'regenerate all CSS' setting to preferences to help fix any lingering issues from the bug fixed in the last version.

= 5.5.1.1 (Dec 14th, 2018) =

# Bugs fixed
* Error compiling CSS if comments were used in the custom code editor.

= 5.5.1.0 (Dec 14th, 2018) =

# Enhancement
* Delays have been now been fully eliminated from the Microthemer interface.
* Microthemer loads much less HTML and remains performant even with 5000+ selectors.
* External image paths can be used when applying background images and list-style images.

# Bugs fixed
* History reported the wrong time for non GMT timezones.

= (beta) 5.5.0.6 (Nov 29th, 2018) =

# Bugs fixed
* Styles tab of advanced targeting options wasn't showing any stylesheet styles.

= (beta) 5.5.0.5 (Nov 28th, 2018) =

# Enhancement
* Basic support for SCSS. Styles do not render instantly as they must be compiled from SCSS to CSS on the server. There are still noticeable speed improvements however. One limitation that remains is that only simple variables can be defined and used on the inline code editor (to the left of the font property group). Unrestricted SCSS can be used on the full code editor.
* Microthemer triggers auto-save if one is pending before existing the interface.
* Google fonts styles can be previewed without waiting for MT settings to save.

# Bugs fixed
* False positive with the multiple tabs warning.
* Updating MT's preferences does not change the preview URL, which could happen sometimes.

= (beta) 5.5.0.0 (Nov 22nd, 2018) =

# Enhancement
* Overall speed improvements touching many areas of the program.

# Change
* CSS3 Pie has been removed as it is redundant now.
* Opacity prefixes for supporting IE8 have been removed.

= 5.2.5.8 (Nov 21st, 2018) =

# Bugs fixed
* Fixed SCSS import path on multisite too.

= 5.2.5.7 (Nov 15th, 2018) =

# Bugs fixed
* "Cannot read property 'sectionSlug' of undefined" when flexbox item/container toggle was enabled and trying to switch between tabs.
* Fixed bug with SCSS import path. The base path was set to a non-existent folder. SCSS imports should be set relative to the /wp-content/micro-themes/ folder, which means the paths will be the same for regular CSS imports.

= 5.2.5.5 (Oct 1st, 2018) =

# Bugs fixed
* Updated SCSSPHP library so it doesn't cause a warning when scanned with WP Engine's PHP7 compatibility checker plugin.

= 5.2.5.4 (Sept 30th, 2018) =

# Bugs fixed
* Cannot read property 'children' of undefined JS error on new installs.

= 5.2.5.3 (Sept 27th, 2018) =

# Change
* Microthemer does not match Elementor's preview width if the max-width of a media query tab matches an Elementor breakpoint UNLESS the media query tab includes the word 'Elementor' in it. Instead, the preview width will be the max-width value of the media query, as is usual Microthemer behaviour.

# Bugs fixed
* The recent scrollable tabs update prevented the 3 dot menu from appearing when hovering over a media query tab. This side effect is still present if the scroll buttons are needed (if there are too many tabs for the available space), as unfortunately there is no way to set overflow-x to hidden while allowing overflow-y to be visible. This is an annoying quick of the CSS spec: https://stackoverflow.com/questions/44797150/overflow-x-hidden-only

= 5.2.5.1 (Sept 26th, 2018) =

# Bugs fixed
* PHP error 'exactly 1 parameter, 2 given' in get-dir-paths.inc.php on servers running PHP versions lower than PHP7. An error introduced by the update a few hours previous.

= 5.2.5.0 (Sept 26th, 2018) =

# Enhancement
* Microthemer's responsive tabs become scrollable if they are too wide for the available space.

# Change
* Microthemer forces LTR layout even for RTL languages like Hebrew because the interface is currently broken with RTL. Supporting RTL will happen in the future, but it will not be a quick fix, hence the current workaround.

# Bugs fixed
* Microthemer's URL for the plugins directory caused cross-domain issues with multisite WordPress installs using domain mapping.
* MTs responsive tabs were not working when Elementor was active if the site language was RTL.

= 5.2.4.6 (Aug 22nd, 2018) =

# Enhancement
* When working with Elementor inside MT, the screen width is not fixed at 1025px, 768px, or 360px for desktop, tablet and mobile respectively. Instead, the screen width can be adjusted using Microthemer's top ruler. This helps design for a full range of screen sizes.
* MT shows exact preview width in pixels (when preview isn't full width).
* Suggested styles for font-size, padding, margin etc is now out of beta. This feature no longer requires 'Edge mode' to be switched on.

# Bugs fixed
* MTs responsive tabs didn't account for the 280px added by the Elementor panel on the left.
* 'elementor-edit-mode' and 'ui-sortable-handle' classes hadn't been added to MTs ignore list when suggesting selectors. These are dynamic classes that only shows when the Elementor UI is active.
* MT was incorrectly ignoring one of Elementor's stylesheets (frontend.min.css) when showing theme styles on the Styles tab.
* Common devices preview still showed when the rulers were switched off.
* MT showed 'Selectors that target zero elements' when targeting an element that had been given an MT animation using the inView (once) event. Or with certain elements when Elementor was active.
* Animation events were triggered when changing settings not relating to animation.
* Microthemer's toggle for Beaver Builder and Elementor goes to the 'on' position even if the page builder is activated using the WP toolbar, rather than MT's toggle.
* Targeting an element with MT that was being styled with Elementor could interfere with Elementor's styling options.

= 5.2.3.5 (July 20th, 2018) =

# Bugs fixed
* Recent fix for add_first_and_last_classes() on PHP 7.2 caused issues for other WordPres configurations.

= 5.2.3.4 (July 19th, 2018) =

# Bugs fixed
* Links were followed when editing with Beaver Builder or Elementor inside the Microthemer interface. This resulted in exiting Beaver Builder or triggering a warning in Elementor: Content Area Was Not Found.
* Beaver Builder was instantly exiting if enabled by Microthemer's View > Enable Beaver Builder option. This was due to an error in the last update.

= 5.2.3.2 (July 18th, 2018) =

# Enhancement
* Deep integration with Elementor. Elementor can now be active inside Microthemer so that MT style edits can be made simultaneously. Elementor UI overlays temporarily step aside when targeting content with Microthemer.
* Upgraded the PHP sass compiler to the latest version, which is fully compatible with PHP 7.2.

# Bugs fixed
* Conflict with Beaver Builder when setting MTs preference to hide the admin bar in the frontend preview. The top part of the site was obscured by Beaver Builder's toolbar.
* Targeting form elements that have single keyword attributes like required, rather than the old HTML4 format required="required", with pseudo selectors (e.g. :required) was not working correctly. Microthemer was marking these selectors as targeting zero elements, even when that was not the case.
* :nth-of-type() CSS modifier suggestions menu didn't display immediately when clicking the 'n' inside the brackets.
* PHP7.2 fatal error: Too few arguments to function tvr_microthemer_frontend::add_first_and_last_classes(). This occurred if the option to add first and last classes to menu items was enabled on servers running PHP 7.2.
* Conflict with pages made with Brizy - elements could not be targeted with Microthemer (unless the Brizy was active inside Microthemer, but it's best to edit Brizy pages when the Brizy editor isn't active, for now at least).

= 5.2.2.5 (July 5th, 2018) =

# Change
* Box model category is called 'Layout' now.
* Animation runs on the single element clicked, mouseenter'd etc even if animation has been applied to a set of elements. In other words, the animation runs on the single element that triggered the event by default. It is possible to

# Enhancements
* Microthemer integrates with Beaver Builder Lite in the same way as the pro version (with a switch in the View menu).

# Bugs fixed
* In draft mode, changes to the JavaScript custom code editor were not rendering on screen immediately (a UI refresh was needed).
* Issue with GeneratePress (and possibly other themes) where by the wrong line of HTML was being highlighted when inspecting elements with Microthemer.
* Microthemer's CSS stylesheet inspector wasn't picking up inline CSS styles added to the <head> of the page or inside HTML elements.
* Info icon in history restore screen could get messed up if the selector code included quotes.
* Improved compatibility with the latest version of Beaver Builder. During MT targeting mode, clicks no longer trigger BB editing fields (as was the behaviour before a recent BB update).
* Animation events could remain bound to elements after the animation was changed when applying different types of animation to different sets of elements.

= 5.2.1.6 (June 11th, 2018) =

# Enhancements
* Microthemer prevents editing Microthemer inside Microthemer, which could happen if navigating to the admin area from the preview and then going to Microthemer.

# Bugs fixed
* inView animations and transitions weren't showing on initial page load, only when scrolled into view.
* Checkboxes and radios couldn't be checked inside Microthemer.

= 5.2.1.3 (May 7th, 2018) =

# Enhancements
* On new installs of Microthemer, recent colors in color palette are pre-populated with the most used colors on the site. So too are values in the font-family, font-size, and line-height dropdowns, although edge mode must be enabled to see this.
* Added tooltip for next/prev selector buttons for keyboard shortcuts.

# Bugs fixed
* Using transition effects on a selector that has quotes in it caused invalid CSS output.
* Microthemer output an invalid gradient when specifying a gradient angle without setting any colors.

# Edge mode changes
* Recent styles are combined with MT suggestions on properties that have MT suggested values. They come under the general heading 'Suggestions', and are sorted alphabetically with any MT suggestions.
* Suggestions are not shown immediately when an input field is first clicked. Only when typing starts, if the typing matches a value in the dropdown menu. However, suggestions can be shown immediately when clicking a field if the 'Shift' key is being pressed.
* Recent suggestions are only included separately from MT suggestions if the list is long and has sub-headings as is the case with font-family, animation-name, and the transition-property.
* Site styles are only available for sampling with: color, font-family, font-size, and line-height properties.

= 5.2.0.5 (April 30th, 2018) =

# Enhancements
* Keyboard shortcuts added for moving to previous and next selector. Previous selector: CTRL+ALT+, (comma). Next selector: CTRL+ALT+. (full stop)

# Bugs fixed
* Chrome has a bug - the selectable property does not respond to inheritance override. This required a workaround to make certain text in the Microthemer UI selectable.

= 5.2.0.3 (April 27th, 2018) =

# Change (revert)
* 'Google fonts...' option in font-family menu launches the google fonts browser popup if the Google font field is already showing. Otherwise it just shows the Google fonts field, for quick selection of a recent font without the popup being a distraction.

# Enhancements
* Microthemer supports more symlinked server environment configs, falling back to WP_CONTENT_DIR constant if other means of getting the path to the content directory fail.
* The current selector is highlighted in the selectors menu.

# Bugs fixed
* Renaming a folder when no selectors exist caused a JS error.

= 5.1.9.9 (April 25th, 2018) =

# Enhancements
* MT inactive code updated for new google fonts subset feature.

# Bugs fixed
* Google font subsets didn't load properly in MT interface after first save.
* Warning about plugin updates with WP_DEBUG enabled when not connected to the internet.
* Google font filters area becomes scrollable if the available screen height is too short to display everything.

= 5.1.9.4 (April 20th, 2018) =

# Bugs fixed
* Microthemer didn't load regular font styles (weight 400) if font was used using another variant (e.g. 700 italic)
* The first empty field in the Google fonts recent dropdown menu was missing.

= 5.1.9.2 (April 20th, 2018) =

# Enhancements
* New Google fonts browser with search, category, and language options.

# Changes
* A new iteration of the trial recent, suggested, and sites styles. Only color and font-family/size styles can be sampled from the page. Only some fields have 'Suggestions' which show when clicking a field (e.g. background-position, animation-duration). And recent styles (for e.g. padding) only show when the user begins typing, or holds the Shift key when clicking a field. Recent styles are organised alphabetically like the other styles, rather than most recent at the top.
* HTML inspector pane in targeting mode doesn't lose focus to the selector label field when a row of HTML is clicked.
* Microthemer's autocomplete autoFocuses the first option in the menu so pressing enter alone will apply the style.
* Text labels show by default when Microthemer is first insatlled. They can be switched off via 'View' menu.

# Bugs fixed
* Using nth-of-type CSS modifiers on a selector that already used :nth-of-type(n) to single out an element could trigger a JS error: Cannot set property code of undefined.
* JS error could trigger under some circumstances: $tooltip.find() is not a function.
* A false positive on the Multiple tabs warning when saving settings very rapidly.

= 5.1.8.4 (March 21st, 2018) =

# Bugs fixed
* Transition / animation properties produced same error as color picker bug on new installs.

= 5.1.8.3 (March 21st, 2018) =

# Bugs fixed
* The color picker produced an error on new installs.

= 5.1.8.2 (March 18th, 2018) =

# Enhancement
* Clear icon for clearing site styles.
* Hold shift when using sample/clear sites styles icon to sample/clear all CSS properties.

# Change
* 'Recent' heading changed to 'recent styles', 'Suggested' heading changed to 'suggested styles', 'Sampled' heading changed to 'site styles'.

# Bugs fixed
* For synced fields, like padding with the chain enabled, MT didn't update the recent styles for all fields in the set.
* Inline code editor showed two editors under certain conditions.
* Disabling a property group that had no styles added caused a JS error.

= 5.1.7.6 (March 9th, 2018) =

# Trial Enhancements (enabled these via Preferences > General > Edge mode > Yes).
* 'Recent' styles update as you apply new styles with Microthemer.
* 'Sampled' styles for a given property can be gathered by clicking the sampling icon in all eligible menus.
* 'Suggested' styles for variable inputs like width, margin, opacity etc based on common usage and best practice CSS units (often rems or %).

# Change
* Microthemer does not keep most CSS modifiers (e.g. :hover) enabled after a selector has been created. Only page-id and page-name remain enabled, as shown with a padlock symbol.
* Property text labels for margin, padding, and border updated to be a bit more descriptive, and to prevent confusion with position: top, right, bottom, left labels.
* Microthemer uses wp_enqueue_scripts for loading the stylesheet instead of the deprecated wp_print_styles hook.

# Bugs fixed
* When inserting a background image via the WP media manager, Microthemer was ignoring thumbnail variations and always including the full size image.
* Microthemer's inactive code could queue the stylesheet in a different order of priority than when Microthemer is active. This could lead to inconsistent results due to CSS source order rules. Note: copy the new inactive code from Preferences > inactive to your theme's functions.php file after this update (replacing existing code).
* Occasionally, moving the mouse over a property field didn't clear the light grey computed style which obstructed the input box.
* The last viewed selector wasn't always remembered correctly when loading the MT interface.
* History 'time ago' needed another fix to be accurate.
* Microthemer's directory paths didn't support symlinking: https://themeover.com/forum/topic/problem-with-symlinked-plugin-directory/#post-10349
* Performance issue with synced fields like padding. Typing multiple values in quick succession caused the browser to slow or even hang.
* Quick create options didn't instantly update after setting a pseudo class like :hover. This need to be done first, or the element needed to be reselected after adding :hover.

= 5.1.6.1 (Feb 22nd, 2018) =

# Bugs fixed
* Revision history 'time ago' could be wrong if the blog's timezone differed from the server timezone.

= 5.1.6.0 (Feb 19th, 2018) =

# Bugs fixed
* Manual !important settings applied using the "i"s could get lost.

= 5.1.5.9 (Feb 17th, 2018) =

# Bugs fixed
* Scroll buttons appeared unnecessarily on custom styles code editor.
* The height of the 'View generated CSS code' editor didn't dynamically adjust to changes in the height of the browser window.

= 5.1.5.7 (Feb 16th, 2018) =

# Bugs fixed
* Renaming a folder could generate a JS error if the folder name was similar to the folder of the current selector, but not the current folder.

= 5.1.5.6 (Feb 15th, 2018) =

# Enhancement
* The event target field supports jQuery-style dom selection syntax to specify elements relative to the triggering element. Example syntax: .faq-answer|next(). See Microthemer's in-program docs for the event target property for more info.
* Style options always run on a single row. They do not wrap onto multiple lines if the window is not wide enough for the content. Instead, horizontal scroll buttons will appear.
* Microthemer prevents saving settings from a stale tab to prevent overwriting newer styles and the potential loss of selectors that have been renamed or moved to a different folder. Lost selectors appeared as blank items in the selector menu when an outdated tab overwrote settings applied more recently by another tab.

# Bugs fixed
* Using transition event values with the 'Always include !important' preference setting enabled output an invalid 'event-value' CSS property. And also included other unnecessary properties with 'initial !important' as the value.
* Using event-based animation/transition (e.g. :hover, click, mouseenter) on selectors with a pseudo element (e.g. ::before) didn't work.
* Applying the transition event property via responsive tabs could cause a JS error under some circumstances.
* When moving a selector to or from a disabled folder, animation and transition styles remained disabled/active rather than updating according to the disabled/active status of the new folder.
* Disabled animation JavaScripts events remained active, even thought the CSS was successfully disabled.
* Undefined notice when uploading design pack (if WP_DEBUG was enabled in wp-config.php).

= 5.1.4.7 (Feb 7th, 2018) =

# Bugs fixed
* JS error when trying to enable Beaver Builder before the site preview has loaded.
* Elements with a click event for animation or transition could not be selected with a click in targeting mode.
* Microthemer was not ignoring temporary event classes e.g. mt-click.

= 5.1.4.4 (Feb 1st, 2018) =

# Bugs fixed
* Pseudo element modifiers were not updating the selector suggestions (e.g. ::before and ::after).

= 5.1.4.3 (Feb 1st, 2018) =

# Bugs fixed
* Compatibility issue with Convert Pro plugin. The Convert Pro popup script affected Microthemer's onload event, so the site preview controls never initialised. This also resulted in a Something's up error. Updating MTs method of attaching events to the browser's load event solved the conflict.

= 5.1.4.2 (Jan 19th, 2018) =

# Enhancement
* Transition properties made available in general release.

# Bugs fixed
* Saving preferences on standalone preferences page could result in 'Unknown error' on some server environments.

= 5.1.4.1 pre-release (Jan 18th, 2018) =

# Change
* Animation / transition events were bubbling up the dom tree. Now e.stopPropagation() is used.

# Enhancement
* Event value field auto-converts to pixel unit if a number is entered without any unit.

# Bugs fixed
* 'cannot read property removeChild of null' error
* Disabling/re-enabling a responsive tab, when not actually viewing that tab, did not disable animation or transition properties.
* Disabling animation on a responsive tab also disabled transition, and vice versa.
* Clearing the transition property group didn't clear the supplementary color picker for event value.
* Clearing transition or animation didn't hide the event-contingent fields (event target and event value).

= 5.1.3.4 pre-release (Jan 17th, 2018) =

# Bugs fixed
* Using the clear property group icon triggered an error on any group other than transition or animation.
* Disabling styles didn't always work for some property groups under certain conditions.

= 5.1.3.2 pre-release (Jan 16th, 2018) =

# Enhancement
* Added CSS transition properties.

# Bugs fixed
* Google fonts were not applying correctly.
* Reordering a selector within the same folder didn't trigger auto-save.

# Change
* When using the Microthemer link in the WP admin top toolbar, Microthemer now strips out the Beaver Builder URL parameter ?fl_builder so as not to make Beaver Builder active in the site preview by default. This seems like the desirable behaviour most of the time, but please let us know if you disagree.

= 5.1.2.8 (Jan 2nd, 2018) =

# Bugs fixed
* Using the clear property group icon triggered an error on the Background property group.

= 5.1.2.7 (Dec 18th, 2017) =

# Bugs fixed
* Animation keyframes were being output multiple times instead of once if applied to multiple selectors.
* More than characters (>) imported via the import CSS code feature were converted to HTML entities, making the CSS invalid.
* Invalid CSS selectors anywhere in the interface prevented Microthemer's quick targeting options from highlighting elements in blue that have already been targeted (for quickly navigating back to them instead of creating a new selector).

= 5.1.2.4 (Dec 12th, 2017) =

# Change
* Event-based animation on multiple elements only runs on the single element that was clicked or came into view. Previously, the animation was run on all elements the selector targeted at the same time. This still happens when using the play button to preview animation.

# Enhancements
* Microthemer warns about trying to apply animate.css animations to elements that have the display property set to inline. The animate.css animations don't work on inline elements because they make heavy use of the transform property, which doesn't apply to inline elements.

# Bugs fixed
* Applying more than one :nth-of-type() CSS filter in a row could trigger 'cannot get length of undefined' error under some conditions.
* The colour palette's saved colors could become out of date when switching between pickers.
* If the advanced options weren't enabled in targeting mode with the toolbar in the default top position before switching to the right-docked position, the Styles tab didn't display anything.
* There was no success message on the standalone preferences page after saving settings.
* The site preview didn't adjust to fill the full width when turning rulers off.

= 5.1.1.7 (Dec 11th, 2017) =

# Bugs fixed
* If only one selector existed, moving it between folders caused an error which resulted in various downstream errors.

= 5.1.1.6 (Dec 8th, 2017) =

# Bugs fixed
* Error when using animation JavaScript animation events or reordering selectors: Cannot read property 'styles' of null/undefined.
* Error when clearing an entire selector's styles.

= 5.1.1.4 (Dec 6th, 2017) =

# Bugs fixed
* Using MTs off switch for Beaver Builder in the View menu published a page in BB mode even if the user hadn't made any changes while BB was active. Now it exits without publishing if no changes have been made. This means the Page in the WP admin area doesn't get converted to Page Builder mode when no page builder adjustments have been made. Thanks to James Hill for spotting this.
* Beaver Builder overlays could return even after existing Beaver Builder if MT's targeting mode was enabled and then disabled.
* The entire Beaver Builder interface could disappear when using Beaver Builder's module tabs e.g. General, Style, Advanced.

= 5.1.1 (Nov 29th, 2017) =

# Bugs fixed
* Using HTML in selector label distorted the Microthemer interface.
* In new Firefox, Ctrl+S keyboard shortcut triggered 'Save page'.
* In new Firefox, outdated stylesheets weren't being removed from the HTML head. And so old styles were lingering after being cleared.

= 5.1.0.7 (Nov 21th, 2017) =

# Bugs fixed
* r.tooltip is not a function error, which made the Microthemer interface unusable on servers running PHP 5.5 or lower.
* JS Error when disabling a folder or selector on a responsive tabs which has no styles.
* Applying a JS event-based animation for the first time didn't work.

= 5.1.0.4 (Nov 20th, 2017) =

# Bugs fixed
* functions.php inactive code now loads animation-events.js script if needed for event-based animation.
* Improved protection against unwanted caching issues when using Microthemer's inactive code in functions.php.

= 5.1.0.2, animation pre-release (Nov 17th, 2017) =

# Bugs fixed
* JS error when disabling folders or selectors.
* Fixed waypoint compatibility issue with Beaver Builder.

= 5.1, animation pre-release (Nov 14th, 2017) =

# Enhancements
* Animation properties made available in this pre-release.
* Microthemer accurately reports the computed CSS for pseudo elements (e.g. ::before, ::after). I'm still weighing up a global solution that would improve the accuracy of computed CSS for pseudo classes (e.g. :hover, :focus) but would not guarantee 100% accuracy (because the cascade of pseudo classes outside of MT cannot be accounted for). The cost would be switching all ':hover' selectors with ':hover, .mt-hover' in the stylesheet. For now, I'm trialing that technique with the new event feature for animation.

# Bugs fixed
* Reordering folders does not open other folders.

= 5.0.9.6 (Nov 8th, 2017) =

# Bugs fixed
* When logged in, Microthemer appended URLs with nocache=[timestamp]. But the timestamp (e.g. 1510141832) was being overwritten by a caching service, perhaps GoDaddy server level caching. So nocache=1510141832 became nocache=1. This resulted in style changes not persisting while working in the Microthemer interface and switching between pages. To solve this, Microthemer now appends urls using: nomtcache=[timestamp]. This ensures the most up to date stylesheet loads.
* With the free trial, changing the folder in targeting mode caused a JavaScript error.

= 5.0.9.4 (Oct 18th, 2017) =

# Bugs fixed
* Microthemer wasn't displaying blue 'GO TO' menu when hovering over elements already targeted by existing selectors in targeting mode.
* 'Undefined' error when using green quick create menu in targeting mode.

= 5.0.9.2 (Oct 12th, 2017) =

# Bugs fixed
* Using save icon next to the responsive inline code editor, triggered an error if a the inline code editor was also used on the 'All Devices' tab. This error was not triggered when using the Ctrl + S keyboard shortcut to save.
* Recent Google fonts optimization introduced a bug whereby newly set Google fonts didn't render immediately. A page refresh was needed.
* Microthemer wasn't remembering to reload the last viewed page if it was manually entered via the 'Change site preview URL' option in the View menu.

= 5.0.8.9 (Oct 1st, 2017) =

# Enhancement
* Optimized Google font stylesheet reloading to eliminate unnecessary reloads.

# Bugs fixed
* Hiding specific responsive tabs from interface wasn't working.
* Directory path to /wp-content could be incorrect for some servers.
* Site frontend exit link could be incorrect on some servers.
* Beaver Builder switch didn't exit BB (alpha version) when turned off. Now it Publishes changes by default and exits BB. Publishing was considered safer than 'Save draft' as BB docs warn against accidentally losing changes when using safe draft. Also, publishing creates revisions that can be restored. Thanks for the advice @zholy9.
* Also, MT was loading BB every time by default when used with the 2.0-alpha-7 version of BB.


= 5.0.8.3 (Sept 1st, 2017) =

# Bugs fixed
* Fixed 'illegal offset' error for PHP 7.1.8.
* Compatibility issue with Salient Theme's nector slider.

= 5.0.8.1 (Aug 21st, 2017) =

# Enhancement
* Added responsive preview dimensions for iPhone 7/7+ and iPad Pro.

= 5.0.8 (Aug 10th, 2017) =

# Bugs fixed
* flex-grow and flex-shrink in-program docs pages updated.
* 500 error on servers running PHP 7.1

= 5.0.7.8 (Aug 2nd, 2017) =

# Enhancement
* Added flexbox properties (pro version only).
* You can enable CSS property text labels via the 'View' menu. Or using the Ctrl+Alt+L keyboard shortcut.
* Selectors can be dragged to another folder without having to open to the receiving folder first. Just drag a selector over the folder icon to open it. Dragging selectors should be faster now too.

# Change
* Switched JS library from jQuery sortable to Sortable.js

# Bugs fixed
* Under some circumstances, dragging selectors between certain folders was not possible.
* Folders and selectors that had been sorted displayed behind the 'Quick edit selector' pop-down, instead of being hidden in that view.
* Microthemer link in top toolbar didn't appear instantly upon first activation.
* The height of the site preview did not adjust correctly upon deleting the last selector or toggling the targeting options' dock position.
* Manually entering an :nth() formula in targeting mode was hindered by focus automatically shifting to the selector label field after each stroke of the keyboard.
* Selecting the empty option from a CSS property dropdown didn't restore the computed value in grey text.

= 5.0.7.9 (Aug 9th, 2017) =

# Enhancement
* Added flexbox properties (pro version only).
* You can enable CSS property text labels via the 'View' menu. Or using the Ctrl+Alt+L keyboard shortcut.
* Selectors can be dragged to another folder without having to open to the receiving folder first. Just drag a selector over the folder icon to open it. Dragging selectors should be faster now too.

# Change
* Switched JS library from jQuery sortable to Sortable.js
* Gradient property group moved next to background. This will be merged with the background property group when we add support or multiple backgrounds.

# Bugs fixed
* Under some circumstances, dragging selectors between certain folders was not possible.
* Folders and selectors that had been sorted displayed behind the 'Quick edit selector' pop-down, instead of being hidden in that view.
* Microthemer link in top toolbar didn't appear instantly upon first activation.
* The height of the site preview did not adjust correctly upon deleting the last selector or toggling the targeting options' dock position.
* Manually entering an :nth() formula in targeting mode was hindered by focus automatically shifting to the selector label field after each stroke of the keyboard.
* Selecting the empty option from a CSS property dropdown didn't restore the computed value in grey text.

= 5.0.5.7 (July 3rd, 2017) =

# Bugs fixed
* Disabling a selector worked immediately, but didn't take effect on returning to the MT interface on a subsequent page load. Even though the selector was marked as disabled in the menu, the styles were still written to the stylesheet.
* Also, folders and selectors weren't marked as disabled in the top toolbar when navigating between disabled folders and selectors.

# Change
* The inspector styles tab shows media queries with @media at start, to make the rules more easily recognisable for what they actually are. The '@media' bit was previously omitted for brevity.

= 5.0.5.4 (June 28th, 2017) =

# Enhancement
* Added a video tutorial for using the targeting options to the 'Help' menu. This is a subset of the recent tutorial showing how to use Microthemer and Beaver Builder together.

= 5.0.5.3 (June 19th, 2017) =

# Enhancement
* 'Choose suggestion' radio buttons precede the Targeting suggestions list. This signals that an option can be chosen over the default top one. And is useful for choosing an option without placing focus on the input field itself (so focus can be given to the label, which gets auto-selected for easily overriding the default).

# Bugs fixed
* Auto-select of label text should not have happened when editing a suggested CSS selector via the 'Targeting suggestions' pane. As this moved focus away from the input during typing.
* Using any of the 3 dom navigation options (HTML, breadcrumbs, DOM nav arrows) didn't clear the manually edited CSS suggestion that jumps to the top of the list upon editing, as happens when a new element is clicked on. This could be confusing.

= 5.0.5 (June 17th, 2017) =

# Change
* Max selectors per folder has been increased to from 25 to 40. This limit was added for performance reasons, in anticipation of pending speed optimisations. But 25 seems too restrictive.
* Re-added the previous selector / next selector buttons quick navigation buttons.
* Highlighting has a faint dotted outline when an element has been selected. This should make distinguishing individual child elements from their container a little easier.

# Enhancement
* Tweaked Microthemer's selector suggestion algorithm so it casts the net wider around the target element, and suggests more options for targeting related elements. I found that MT wasn't always finding the optimum selector on themes that produce deep HTML nesting. This is typical with page builders like Beaver Builder.
* Sped up the 'Styles' tab on the advanced targeting options a bit. This was done by adding a list of CSS stylesheets to ignore e.g. wp-admin.min.css and font-awesome. This comes at the cost of completeness. But seems necessary to make this feature acceptably fast on sites that loads lots of CSS. Further 'Styles' tab optimisations include excluding Beaver Builder administrative stylesheets that load on the frontend during editing solely for the BB UI fields.
* Microthemer briefly highlights selector targeting scope when navigating between existing selectors. This is particularly useful when used in conjunction with the reinstated prev/next selector buttons.
* Microthemer auto-selects the suggested targeting label, so it's quicker to manually change just by typing.

# Bugs fixed
* Using the selector highlight icon only highlighted the first element, even if the selector targeted multiple elements.
* Clicking on the DOM navigation arrows didn't update the 'Styles' tab of the advanced targeting options.
* Border-style dropdown menu didn't have an empty first option for easily clearing the current value.
* Quick edit folder didn't display scroll bars when the number of selectors exceeded the available height.
* Importing a CSS stylesheet with an URL parameter (e.g. ?ver=1.10) could result in an erroneous 'Disallowed extension' message.
* If the current folder/selector was disabled, it showed with a line-through in the menu, but not the top toolbar.

= 5.0.3 (June 14th, 2017) =

# Change
* Double-clicking e.g. a padding field doesn't set all padding fields the same like it used to. This behaviour was too easy to trigger accidentally. The chain icons provide this functionality instead.

# Enhancement
* Improved compatibility with Beaver Builder. Both MT and BB can remain active at all times, instead of heaving to exit BB in order to target elements on the page. Targeting elements wasn't previously possible when BB was active because MT picked up BB interface elements instead of the actual page elements. Also, MT won't launch targeting options if a BB UI element is double-clicked, as this can be happen accidentally and wasn't targeting the underlying page elements even if done intentionally.
* Shaved a few more milliseconds off the 'Save settings' time.

# Bugs fixed
* Fixed "Unknown error" message that could appear when first loading Microthemer. If this happened, saved palette colors didn't save across sessions.
* Microthemer was including the port number e.g. :443 in URLs on SSL sites, or those not using port :80. If this occurs on your site, you may need to refresh the MT interface twice after updated to 5.0.2.7 to fully fix it.
* SCSS compilation errors were not being flagged. And settings did not save correctly as a result.
* All box-shadow, text-shadow, and border-radius fields defaulted to zero if the value in the first field was zero.

= 5.0.2.5 (June 12th, 2017) =

# Enhancement
* Improved compatibility with Beaver Builder. Both MT and BB can remain active at all times, instead of heaving to exit BB in order to target elements on the page. Targeting elements didn't used to be possible when BB was active because MT picked up BB interface elements instead of the actual page elements.

= 5.0.2.4 (June 11th, 2017) =

# Enhancement
* Added a 'Dock to right' option for the targeting options, for those that prefer the familiar right-hand layout.
* Added an option to enable Beaver Builder from within Microthemer. See the 'View' menu. This option only appears if Beaver Builder is installed an active.

# Bugs fixed:
* 'Failed to load revisions table' on new installs if trying to view history before saving any changes.
* Changing the preview URL via the view menu failed under some circumstances.

= 5.0.2 (June 8th, 2017) =

# Enhancement
* The HTML navigation arrows have been re-added, this time to the basic targeting view. These were replaced by the HTML and breadcrumbs in the advanced view in version 5. But not everyone spotted that functionality. And not everyone who was using the HTML arrows likes to keep the advanced targeting pane open.
* When importing CSS from a stylesheet (via Packs > import), Microthemer suggests all stylesheets loaded by the current site preview page if you click the refresh icon.
* Beaver Builder medium and small breakpoints can be loaded via the 'Edit media queries' window. See the 'Load media query set' option.

# Change
* Media queries imported from a stylesheet have more informative default labels rather than MQ1, MQ2 etc.

= 5.0.1.7 (June 6th, 2017) =

# Change
* Microthemer remembers if the selector action icons were fully expanded, rather than defaulting back to minimal icons.
* The 'settings saved' notification isn't as bold as other notifications. And it shows the time the settings were saved as a tooltip.

# Bugs fixed
* Clicking the HTML code or DOM breadcrumbs in the inspector didn't update the actual CSS pane.

= 5.0.1.4 (June 1st, 2017) =

# Bugs fixed
* Force https on site preview if the Microthemer interface loads over https.
* Removed unnecessary debug output.
* Fixed Internet Explorer issue: Object doesn’t support property or method 'isInteger'

= 5.0.1.1 (May 20th, 2017) =

# Bugs fixed
* Compatibility issue with PHP7 relating to safe_mode .ini check. Redundant safe_mode check has been removed.
* Background-image file path issue for sites that install WordPress in a sub-directory.

= 5.0.0.8 (May 18th, 2017) =
# Enhancement
* Updated the getting started video.

# Bugs fixed
* Possible issue of Microthemer initially loading in targeting mode after saving preferences, which took two button clicks to get back to the normal style editing mode. Only beta testers would be affected by this.

= 5.0.0.6 (May 17th, 2017) =

# Bugs fixed
* Setting a custom URL for the frontend preview via the 'View' menu stripped out ?parameter=etc, which is often needed to activate page builders.
* Microthemer allowed curly brace character ({) to be added to custom selectors, even though these should be omitted because Microthemer adds the curly brace when writing to the stylesheet. The presence of curly braces also caused console warnings.
* Internal debugging system didn't report JS errors at the exact point they were triggered, only on the next save.
* The JS icon wasn't right on the custom JavaScript code editor.

= 5.0.0.2 (May 13th, 2017) =

# Enhancement
* Sped up the selection/deselection of elements in basic targeting mode (and in advanced view when 'Styles' tab is not active).
* Added more :nth() pseudo selector recipes to the suggestions menu.
* Using the up/down arrow on style option menus instantly applies the value. This also works on the :nth() pseudo selector suggestions, where it's particularly useful for visually exploring what's possible.
* The color picker defaults to full rgba opacity, even if the computed value for color is 'transparent', which it often is.

# Bugs fixed
* 2nd attempt at fixing @mrover's issue - PHP syntax error: unexpected '[';
* Suggested pseudo selector e.g. :nth-child(n+2) was not working due to presence of plus (+) sign.
* Applying an :nth() pseudo selector suggestion reset the targeting to the default selector that only targets one element.
* 'No element' was shown in the targeting field if enabled pseudo selectors caused MT to only produce selectors that target nothing. Now the pseudo selectors are shown (even in the basic view), and the CSS modifier icon goes orange.
* Removing pseudo modifiers that caused no elements to be targeted didn't restore normality immediately (under specific conditions).

= 5.0.0.1 Beta (May 11th, 2017) =

# Enhancement
* Color picker has palettes for sampling site colors, saving colors, and showing the last 11 colors used.
* Made some presentational changes to the folders & selectors menu. Including a new icon for sorting the order of selectors.
* Made CSS selector updating via the folders and selectors menu more congruent with the new code/label sync system in the selector wizard.
* Added a new icon to the selector actions (in the main and quick edit menus) for re-targeting an existing selector using the selector wizard.

# Change
* Changed keyboard shortcut for toggling targeting mode to: Ctrl+Alt+T. 'T' used instead of 'I', because we're calling it 'targeting mode' instead of 'inspection mode'.
* Removed the prev/next selector nav arrows from top toolbar. Happy to return these if they were popular, but maybe to the right of the selector name in the top toolbar.
* Toggle for targeting mode now says 'Target' to make it more obvious.
* WP admin toolbar on frontend can be targeted/styled too (not the admin interface yet though).
* Feathers, to indicate styles present on folder/selector/tab/property group, have become blue dots.
* Targeting mode does not persist across page refresh. You must click the targeting button again if you wish to return to that mode.
* 'Settings saved' message shows after each save, to reassure users that auto-save is happening.
* Double-click launches targeting mode AND selects the element that was double-clicked. This is like the classic double-click functionality. But single-clicking AFTER the double-click will unselect the element, and hover targeting will be enabled.
* PHP4 constructor replaced with PHP 5+ constructor on JSON class.

# Bugs fixed
* Add first and last classes to WP menu feature does so in a better way. This should fix conflict with Max mega menu.
* border-color shorthand property wasn't being imported correctly, when importing CSS values from a stylesheet.
* nth-type pseudo selectors inout field didn't display useful suggestions.
* When expanding the advanced targeting options, the HTML preview didn't default to the current element. And the breadcrumbs didn't display properly (with drag ability).
* Reordered selectors needed an extra save for the order to be retained on the next page load under some conditions.

= 5.0 Beta (April 13th, 2017) =

# Enhancement
* Microthemer can import selectors and styles from a CSS stylesheet or arbitrarily pasted CSS code.
* Microthemer automatically names selectors for quicker targeting.
* Selector labels can be synced with the actual CSS targeting code (useful for devs that glean more meaning from actual CSS selectors).
* Microthemer now uses hover-then-click targeting over double-click. Although double-click can still be used to toggle targeting mode on or off. So too can the keyboard shortcut: Ctrl+Alt+I.
* Quick create / navigate buttons appear on the page in hover mode for instant selector creation or relocating a previously created selector visually.
* An updated selector suggestion algorithm scans HTML code more extensively, but prioritises only a handful of selectors based on which selectors target a unique set of elements on the page (e.g. 1, 3, 8 etc). Equivalent suggestions are available via a dropdown menu. Also, Microthemer always finds (and defaults to) a selector that targets the single element you click, by using :nth-of-type() if no ids or classes will do the job.
* The selector wizard options have been split into basic and advanced. The basic view allows for more screen space, while the advanced view provides functionality offered by native browser inspectors: HTML/CSS inspection. They are not just for reporting. Microthemer will suggest selectors based on which lines of HTML, or dom breadcrumb you click.
* Microthemer provides instant validation of how many elements your selector targets when customizing a suggestion in the selector wizard (either in basic view with code synced selector label, or in the targeting pane of the advanced options).
* Microthemer provides a list of pseudo selectors/elements that can be applied to the auto-generated CSS selectors. There is also an option for prefixing selectors with a page-id, so styles can easily be applied to a single page.
* Added keyboard shortcut to trigger selector highlight: Ctrl+Alt+h (Windows) or Command+alt+h (Mac).
* Updated PHP SCSS compiler.
* Added JS Libraries dialog for enqueuing native WordPress JavaScripts.
* Allowed Command for Ctrl+S keyboard shortcut on Macs.
* Added quick toggle for full code editor under MT logo.
* Code editors can be drag resized if this preference is set via the option to the left of the code editor.
* Code editors can be searched with Ctrl+F.
* Microthemer supports multiple border radius values per corner e.g. border-top-left-radius: 1em 5em;
* Microthemer saves settings a bit faster. But the big speed improvements are yet to come!

# Change
* The selector wizard appears horizontally at the top rather than to the right. This is so the current screen width is not disturbed, which can lead to incidentally triggering media query styles.
* .input-wrap classes to .tvr-input-wrap in MT interface to prevent conflict with TK Google Fonts plugin.
* Browser native scroll bars are used for scrolling (faster).
* Hover tooltips no longer have a pointer as this could often break.
* When importing scss with @import at the top of the custom code editor, the starting directory is /wp-content/micro-themes/. So if importing a scss file located in your theme directory, the import path you add in MT would be @import '../themes/[your-theme-name]/scss/file.scss'
* Fully removed auto-capitalization behaviour on selector names etc.

# Bugs fixed
* Navigating from a WordPress Post/Page preview to Microthemer caused issues. Unpublished previews cannot be loaded in Microthemer properly. Also, there was a issue with URLs getting double // in the path, which triggered 'Something's wrong' message.
* Unlocking with email addresses that contained a "+" character failed.
* Fixed conflict with Uber menu not opening on mobile.
* Fixed issue with IE stylesheets being called after main Microthemer stylesheet under some circumstances.
* Style-indicating feathers update properly when moving selectors between folders.
* Wizard's computed CSS no longer lists custom CSS as a property.
* Fixed tab alignment of certain properties in active-styles.css
* Updated in_array() JS function to use === false as returned key can be zero.

= 4.9.7.8 (Feb 7th, 2017) =
* After fixing the display of the admin bar preferences, a further fix was needed to make them work correctly, including for non-administrators who are always denied access to the MT interface.

= 4.9.7.7 (Feb 6th, 2017) =
* Fixed bug with both MT admin bar preferences showing as 'Yes' and 'No' when trying to set them to 'No'.

= 4.9.7.6 (July 15th, 2016) =
* Enhancement: Added support for custom JavaScript for full frontend editing. See new tab in custom code area.

* Change: When SCSS and minification is enabled, MT also shows unminified compiled CSS file.
* After exporting, Microthemer loads the manage packs dialog instead of simply closing the export dialog.
* Frontend toolbar displays by default in MT site preview. This can still be hidden via the preferences.

* Bugs fixed: IE specific stylesheets can be used in draft mode too.
* Inactive code loads IE stylesheets too if necessary.
* Under some circumstances IE specific stylesheets editors could get cleared when switching between different IE specific editors.
* Replaced special &raquo; arrow character with regular >> characters in active-styles.css CSS comments (as char encoding issues could invalidate the CSS code).

= 4.9.7.1 (July 10th, 2016) =
* Added support for custom JavaScript!
* IE specific stylesheets can be used in draft mode too.
* Under some circumstances IE specific stylesheets editors could get cleared when switching between different IE specific editors.

= 4.9.6.8 (July 8th, 2016) =
* Added missing snippets to ACE code editor and removed previous version of ACE.

= 4.9.6.7 (July 7th, 2016) =
* Change: Updated the getting started video.
* UTF-8 enforced for custom editor character encoding.

* Enhancement: Reduced the number of translated JS text strings output in the head of the preview iframe.
* Added a temporary icon for indicating common device preview feature at top left of rulers, better icon to follow.
* Servers running PHP 5.4 or newer will load the latest version of scssphp, which requires PHP 5.4. Older versions of PHP will continue to load the older version of scssphp, which doesn't support the very latest SCSS syntax but works for most purposes.

* Bugs fixed: Exit to frontend menu link didn't work if clicked on first visit to Microthemer's interface.
* 'Microthemer' link appears in the WP toolbar immediately after installing (with no need to visit MT interface once).
* Layout issues for preferences form fields on smaller screens.
* Manually setting !important for various CSS3 properties didn't work, including border radius, gradients, text-shadow, and box-shadow.
* On the manage packs page a blank (uneditable) pack could be created under some circumstances.

= 4.9.5.7 (July 5th, 2016) =
* UTF-8 enforced for custom editor character encoding.
* Fixed layout issues for preferences form fields on smaller screens.
* Added a temporary icon for indicating common device preview feature at top left of rulers, better icon to follow.

= 4.9.5.4 (July 1st, 2016) =
* Export button didn't work as a result of 4.9.5.3 update earlier today.

= 4.9.5.3 (June 29th, 2016) =
* Entering rgba values in the new embedded custom code editor caused issues.
* Single and double quotes were rendering as their character codes in the custom code editors (e.g. &quot;).

= 4.9.5.1 (June 21th, 2016) =
* Renaming folders or selectors caused problems for new GUI embedded code editor.
* Deleting forward in the new GUI code area could delete what should be read-only code.
* Highlighting and dragging text has been disabled in gui editor for the same reason.
* Selecting a mixture of read-only and editable lines and then deleting could remove what should be read-only lines too.

= 4.9.4.7 (June 18th, 2016) =
* Minification isn't turned on by default. This may be a temporary measure.
* Removed deprecated get_currentuserinfo() function.
* Nested SCSS selectors didn't work in new GUI code editor.
* The new CSS minification PHP script uses syntax introduced in PHP 5.3. So PHP version 5.3 is required to make use of this new minification feature. Microthemer now inserts a note about upgrading PHP at the top of min.active-styles.css rather than breaking on servers running older versions of PHP.

= 4.9.4.3  (June 17th, 2016) =
* Some of the general preferences have been moved to a new 'SCSS/CSS' tab, which replaces the 'CSS Units' tab.
* Added support for draft mode.
* Added support for SCSS in custom code editor.
* Added support for CSS minification.
* Optional dark theme available for custom code editor.
* Custom code can be added to GUI selectors via the <> code icon at the start of the property group icons.
* View generated CSS now displayed with syntax highlighting and tabs for SCSS/CSS/Minified.
* 'Edit with Microthemer' option in frontend WP toolbar now loads last frontend page viewed in site preview.
* New menu at top right with labels and toggle switches.
* New menu: option to manually set preview url (replaces option in preferences window).
* New menu: quick links to demo video, responsive tutorial, and forum.
* New menu: exit link to frontend as well as WP dashboard.

= 4.9.3.1  (April 22nd, 2016) =
* New internal CSS reference with links to dedicated tutorials for most CSS properties.

= 4.9.3.0  (April 12th (pm), 2016) =
* Major translation updates rolled back. Small update included to make Spanish and Hebrew translations work better.

= 4.9.2.9  (April 12th, 2016) =
* The 4.9.2.7/8 update to the translation system yesterday caused more problems that it solved. This release addresses that.

= 4.9.2.8  (April 11th (pm), 2016 =
* On new installs of Microthemer, the responsive tabs didn't auto-adjust the preview screen width.

= 4.9.2.7  (April 11th, 2016) =
* Resizing the height of the custom code editor is now smooth and quick. More improvements on the way there.
* When restoring settings, new responsive tabs are added to the interface if they are needed to display the settings correctly - the same thing that already happens when importing settings.
* Translated versions of Microthemer didn't load properly, amd import with merge didn't work.
* Site preview could have an extra top margin on screen sizes below 767px. This was due to the margins WordPress applies when it is expecting to show an admin bar on the frontend.
* Disabling a folder didn't have the desired effect for responsive tabs (these styles were not disabled).
* Clearing a folder, selector, tab, or property group didn't disable any chain icons for syncing related fields.
* Import with merge option - responsive style could overwrite instead of merging if importing a pack from a different installation (with different keys for the same media query). Importing and merge has been troublesome in version 4. This final problem prompted a very thorough audit of data management, resulting in many fixes that improve the stability of the import/export features.
* Responsive tab values could be output to the active-style.css stylesheet in the wrong order i.e. not reflecting the order of the folders and selectors in the UI.
* When selectively exporting a folder, extra responsive tab styles from unchecked folders could end up in the export as junk data. These styles would not show in the UI however, and would be discarded without causing issues on the first save after importing. Cleaner to remove them nonetheless.
* When new media query tabs were auto-added to the interface (e.g. after an import), they didn't adjust the preview screen width like they should (unless the media queries were subsequently saved via the 'Edit media queries' popup).
* Tab feathers that indicate if the tab has any styles didn't always update correctly after adding/removing a single style.
* Auto-save didn't trigger after copying a folder or selector. This meant the copy action wasn't added to the history table.
* If the last viewed media query is deleted, Microthemer defaults to the 'All Devices' tab (rather than no tab being selected).
* Removed legacy PHP conditions for microloader.

= 4.9.1.3  (March 31st, 2016) =
* When creating a new selector, Microthemer defaults to the last used property group (e.g. Shadow) rather than Font.
* Using the 'Content' CSS property triggered a JavaScript error.

= 4.9.1.1 (March 27th (pm), 2016) =
* Feather icons that signal the presence of styles were not updating when using the clear option for folders, selectors, tabs, or property groups.

= 4.9.1.0  (March 27th, 2016) =
* Memory limit check to handle GB unit better introduced a different problem for other users.

= 4.9.0.9 (March 26th, 2016) =
* Export dialog was using the similar import icon.
* Memory limit check handles reported memory in GB unit better.
* 4.9.0.5 introduced a bug with the device preview feature at the top left of the rulers. Screen width was not adjusted.
* When clicking a previously clicked option in the device preview, thus unselecting it, the screen width does not reset to the current tab. The user is still hovering over the device option, and so the hover preview functionality should remain.

= 4.9.0.5  (March 23rd, 2016) =
* Renamed some JS files.
* For Firefox, Microthemer must display the preview at 0.3 pixels less than the max-width set in a media query. So if the media query defines a max-width of 979px. Microthemer must set the preview width to 918.7px. This has been the case for a while. But now Chrome requires this same hack.
* Also, under some circumstances the .3px hack was not applied when switching between tabs.

= 4.9.0.2  (March 10th (eve), 2016) =
* Computed CSS hover tip could display unintentionally if the user's mouse moved over the trigger and then rested where the tip appears. The half second delay was not having the desired effect of keeping tips away when they're not needed. This could be annoying when trying to use the ruler and accidentally triggering tips.

= 4.9.0.1 (March 10th - pm, 2016) =
* MAJOR BUG: when importing data that includes new media queries, the new queries were imported but not the styles added to them.

= 4.9.0 (March 10th, 2016) =
* Added selector highlight icons for hover preview. Having that functionality accidentally trigger on selector names in the main menu was annoying.
* Increased free trial selector limit from 9 to 15.
* The computed CSS tooltip for individual properties has changed. It is now a quick-options menu that may display other things like the mixed computed CSS table (which could display unintentionally previously). Also, accessing the CSS reference for the property is now triggered by clicking the property name in the quick options menu.
* 'Check All' checkbox on export dialog is not checked by default. So on first click, it checks all rather than unchecks all.
* Removed WP 2.x compatibility functions.
* Microthemer revision restore now provides more precise information about the save point.
* Folders, selectors, responsive tabs, and property groups can be disabled using an icon. For tabs and property groups, hover over the tab/label (e.g. All Devices/PADDING).
* Folders, selectors, responsive tabs, and property groups can also be cleared of styles using the clear icon.
* Switching on the chain icon next to related fields (e.g. padding) synchronises their values. Double-clicking a field synchronise values still works (although this won't work on border color, which uses a color picker).
* Minor improvements to the sortability of folders and selectors.
* Tooltips either say 'add' or 'remove' rather than add/remove, and update dynamically.
* Imported media queries used raw media query code for label.
* Internal server error in preview when WordPress has it's own sub-directory.
* Double-clicking related fields (e.g. all padding fields) to set them all to the same value could overwrite values on a separate media query tab.
* If highlighting was turned on then off using the icon in the top right, it would come back on after adjusting the screen size (e.g. using the ruler or clicking a tab).

= 4.7.5 (Jan 16th, 2015) =
* LazyLoad given own name space tvrLazyLoad in order to reduce the chance of conflict with other scripts using lazy load.

= 4.7.4 (Jan 15th, 2015) =
* Formatting of 'Update your jQuery' message.
* Fixed erroneous memory limit message by accommodating -1 as a return value.
* Media query sets were repeated in dropdown on main UI (not standalone preferences page).

= 4.7.1 (Dec 11th, 2015) =
* Microthemer now works well with Autoptimize even with CSS minification and concatenation enabled.
* Import and merge appends numbers to imported folders that have the same name (like it did before we made some internationalisation improvements to the folders).
* Folder quick edit and main menu popdowns don't auto-close after manually adding/editing a selector. Nicer when updating multiple selectors. The single selector quick edit popdown still auto-closes.
* Main menu and quick edit popdowns provide more room for editing folders and selectors (up to the full height of the screen).
* Background position/size fields can have default units set, including auto-conversion (e.g. px to em).
* Background color no longer overrides gradient if both are specified alongside a background image. The stacking order is background (top) image, gradient (middle), background color (bottom).

= 4.6.4 (Nov 18th, 2015) =
* Microthemer detects when an error (e.g. plugin/theme conflict) is preventing it from completing an action and provides self-help tips.
* CSS units could not all be set in one go on the standalone preferences page.
* The name of the last modified pack on the manage packs popup wasn't being output.
* Clicking the scrollbars when quick editing a folder or selector closed the quick edit pop-down.
* Clicking a tab row but missing an actual tab loaded blank content.
* 4.5.6 bug fix didn't deal with stripslashes() removing \ chars effectively. This has been addressed more thoroughly now. If Microthemer generated unwanted \ characters in the last 2 weeks, please delete them. They won't come back now.

= 4.5.9 (Nov 2nd, 2015) =
* Microthemer appends a number to active-styles.css?mts=1 relating to the number of saves. This ensures site visitors don't get an out-dated cached version of active-styles.css. They always see what you see in the preview.
* Easier to apply CSS default unit sets, more options available.
* Cleaned up some minor debug output displayed in browser consoles.

= 4.5.6 (Oct 28th 2015) =
* stripslashes() function was used twice in active-styles.css which removed legitimate backslashes (\) needed for things like Font Awesome.
* New CSS property 'Content' added to behaviour group (pending icon).
* Plain numeric values were not being converted to pixels behind the scenes if 'px (implicit)' wasn't selected as the default CSS unit (a unitless number is only valid CSS for line-height). This caused problems when switching between different default units.
* CSS unit sets were not available on the standalone preferences page.
* There is no restriction on the format of folder names (non-alphanumeric chars will not be stripped out).
* New tab on the preferences for language settings.
* Auto-capitalizing folder, selector and design pack names can be turned off on language settings tab.
* CSS syntax for properties can be shown in the tooltips in addition to the label e.g. Tamaño de tipografía / font-size (useful for non-English versions).
* The default folder names have been internationalised.

= 4.4.7 (Oct 2nd, 2015) =
* Re-added the preferences save button to the standalone preferences page.
* Final internationalisation bug fixes.

= 4.4.6 (Sept 29th, 2015) =
* Re-added the preferences save button to the standalone preferences page.

= 4.4.5 (Sept 28th, 2015) =
* Textareas are used for editing media query code instead on single line input fields.
* The selector description disappeared when trying to edit it.

= 4.4.3 (Sept 25th, 2015) =
* Only icons that switch the popup view are shown in the footer of popups.
* Removed extra inline save button for preferences, import, and export popups leaving just one action button at the bottom right of the popups.
* Support for 'px to rem' auto-conversion.
* A new 'Inactive' tab has been added to the preferences. Specify options relating to data deletion upon uninstall, and get code for using Microthemer styles when deactivated/uninstalled here. The code snippet can be pasted into your theme's functions.php file.
* No notification was shown when unlocking Microthemer (success or failure) following 4.2.8 update at the end of August.
* The export notification contained unnecessary dev notices which obscured the main notice: export success.
* Both 'Yes' and 'No' radio buttons were checked when choosing to overwrite current media queries with a set (instead of just the 'Yes' radio button).
* Setting a Google font worked the first time, but then updating it didn't work (live).

= 4.3.5 (Sept 18th, 2015) =
* MAJOR BUG: Under some circumstances, responsive settings could get lost when importing a design pack to a different WordPress install, or if the media queries were manually edited in between the export and import. This happened because the responsive tab index keys could become out of sync.
* Clicking to the right of the selector wizard tabs would result in Microthemer switching to a blank tab.
* Import/export fields resized down when they gained focus, this was unintentional.
* The Hebrew translation of Microthemer didn't save preferences properly and showed English labels for CSS properties.

= 4.3.1 (Sept 15th, 2015) =
* The responsive tabs didn't resize the preview screen when no selectors existed in the interface.

= 4.3.0 (Sept 4th, 2015) =
* Box-shadow blur wasn't given a pixel unit if set to implicit pixels. This could prevent box-shadow from working properly.
* The selector wizard folder field shrunk when it gained focus like the input fields.

= 4.2.8 (Aug 26th, 2015) =
* The input fields for text-shadow and box-shadow have been reordered to reflect the current order defined in the CSS specs. Also, additional properties 'spread' and 'inset' have been added to the box-shadow fields.
* Text-shadow no longer defaults to a grey color (#CCC) if no color is specified. The specs say that the value of color (font color) should be used if no color is specified for text-shadow. Microthemer allows this behaviour now.
* Unnecessary error message about not being able to create the revisions table on new installs.
* The 'Error saving settings' message was a bit scrambled as a result of improper internationalisation. Also, the error reports folder went missing.
* Text or box shadow reported CSS was messed up. Internet explorer reported styles in the wrong place, and RGBA values for shadow color caused problems.
* All CSS properties now have a description in the CSS reference.
* Input fields grow as you type.
* Excel-like formulas can be used in style fields for auto converting pixels to percentages or ems. Enter =%(200) into the width field (for instance) and Microthemer will calculate 200 pixels as a percentage of the parent element's width. You can also use =em(36, 2). If the font-size context was 12, Microthemer would convert this to 3em. The extra '2' parameter is optional. If specified, the context of the nth element would be used if the selector matches multiple elements (rather the defaulting to the first element in the selection).
* This auto-conversion behaviour can also be 'turned on' via the default unit options in the preferences. So if you set 'px to em' for padding fields and then enter the number 20, with no unit specified, Microthemer will convert this to 1.25em (assuming the font-size context was 16px). Microthemer's ability to query font-size and parent width contexts makes the auto-convert features extra useful.
* Microthemer reports color values as hex as well as RGB/A.
* Microthemer notifications in the top right can be dismissed.
* The vertical-align property has been added. Finally. It's an infuriating property so I've taken time to explain it's quirks in the CSS reference.
* Added more values to the display property e.g. display:table-cell.
* Improved the notification system in the top right.

= 4.1.4 (Aug 4th, 2015) =
* On multisite, the Microthemer URL in the admin toolbar could be invalid.

= 4.1.3 (July 28th - later on) =
* (Major bug) Zero values for styles (e.g. padding-top:0) were not being redisplayed in the interface. This meant they were easily lost.
* In Firefox (in particular) the tooltips would get stuck and couldn't be cleared under some conditions.
* The highlighting could get stuck too on when auto-closing the quick edit menu (a feature added in the last version 4.1.0)

= 4.1.1 (July 28th - later on) =
* In Firefox (in particular) the tooltips would get stuck and couldn't be cleared under some conditions.

= 4.1.0 (July 28th) =
* Under some circumstances the key for identifying the last used responsive tab could become out of date. This caused a javascript error that prevented the interface from loading properly (spinning wheel of death).
* The main/quick edit menus closes automatically after adding or editing a selector. It feels more inline with user expectation.

= 4.0.8 (July 21st) =
* Landscape dimensions for common phone previews added.
* Fallback added for getting Microthemer's stylesheet when a 3rd party plugin strips out it's id.
* A cap on the number of elements (20) Microthemer will highlight and analyse has been added. This prevents broad selectors applied to pages with large amounts of HTML from overloading the browser.
* Admin bar in the preview can be optionally shown. I discovered a situation where hiding the admin bar with CSS could artificially interfere with the page layout. Also, some users might prefer to make use of the admin bar if it helps their workflow.
* To make the admin bar more useful for those that enable it, Microthemer now follows links to the admin area (rather than warning against it). The difference now is that following an admin link in the preview will direct the whole Microthemer interface to a new page, not just in the preview.
* More auto-saves have been added to the following actions so that leaving the Microthemer interface (potentially by accident) doesn't result in the loss of settings. Auto-save now happens when a folder or selector is: created, deleted, moved, or renamed.
* Setting the shortcut to Microthemer in the admin bar wasn't having an effect on admin pages (only the admin bar on the frontend of the site). Overall it was a bit glitchy.
* The common screen previews at the top left of the rulers were not disappearing properly when hiding the interface with the logo toggle.

= 4.0 (July 12th) =

# New Features
* Easier to add responsive styles.
* Improved color picker.
* Pixel rulers on the X and Y axis.
* Quick preview feature for common devices added to top left corner of the rulers
* Ems/rems used in media queries now preview at the correct width on the responsive tabs
* Specify default CSS units e.g. ems, vw, % instead of implicitly defaulting to pixels.
* Full screen mode.
* Collapse or expand the Microthemer interface with the logo.
* Preview selectors when hovering over selector names.

# Design Changes
* The left toolbar icons have been moved to the top right of the interface. Some have been grouped together. Related options display on hover.
* The folder and selector management options have been moved to the top left.
* The responsive slider has been replaced by the rulers. Drag the rulers or click on a point to adjust the screen width. Rulers shading shows the scope of the current responsive tab.
* The media query tabs are now above the CSS property groups and are always visible. They can be hidden via the Edit Media Queries popup.
* The selector wizard options all display to the right of the page. The advanced options are always visible. The selector wizard does not replace the normal editing options. It appears above them.
* Little blue or white feather icons are used to indicate when styles have been added to a selector, media query tab, or property group.
* The color picker has been updated. It now supports RGB/A and HSL/A color codes.
* Default computed colors are show by a bottom border on the new color picker field (which is a small square now).

# Functional Changes
* Microthemer doesn't use the crosshair mouse icon anymore because this was artificially changing the computed CSS for the mouse cursor property.
* The media query tabs do not lock the screen width slider at a minimum or maximum screen width. The shading shows the scope of the media query conditions. And if the user drags outside the scope of the media query a warning icon is displayed in the top left of the rulers.
* Hovering over the selector's name in the top toolbar temporarily triggers highlighting and auto-scrolls to the right place in the page.
* Continuity has been given precedence. When switching between property groups (e.g. font to padding) the responsive tab never changes. This holds true when switching between selectors. When switching between selectors, Microthemer no longer remembers the property group that was last edited on that selector. It favours continuity and stays on the same property group the previous selector was on.

= 3.9 Beta Bugs fixed =
* Color picker had some annoying glitches when dragging the picker outside the bounds of the box
* Comma separated CSS selectors weren't highlighting properly (only the first in the list would highlight)

= 3.9.2 (beta) (July 1, 2015) =
* A fresh install of the new beta version could cause an Javascript error because the frontend script tried to load a non-existent stylesheet.
* The dynamic javascript wasn't enqueued in the correct way which prevented the interface from fully loading.

= 3.9.0 (beta) (June 26, 2015) =
* Many new updates. A full description will come when we're past the beta stage.

= 3.7.5 (May 24, 2015) =
* Microthemer is now translation ready following JoseLuís' sterling work.
* Added more thorough directory path analysis for advanced WordPress configurations.

= 3.7.3 (May 9, 2015) =
* Plain http requests to Google fonts caused issues on SSL sites.
* Fixed path to languages folder

= 3.7.2 (May 6, 2015) =
* New selector wizard targeting system trialed in edge mode has become permanent
* First phase of translation: various text strings are now translatable. Thanks to JoseLuís for providing this: https://github.com/joseluis/
* Improved compatibility with any font awesome stylesheets that load on the Microthemer UI page (via another plugin)

= 3.6.9 (May 5, 2015) =
* The last 3.6.7 release introduced a bug with the unlock process.

= 3.6.8 (May 4, 2015) =
* Major Bug fixed. When importing with "Merge", any responsive tab settings being imported would be lost. So too would any custom !important declarations.

= 3.6.7 (Apr 23, 2015) =
* Microthemer conflicted with the Contact Form Maker plugin.
* Single or double-clicking form submit buttons didn't work as a result of the 3.5.9 update.
* Microthemer would follow links if they were the parent of a double-clicked grandchild element.
* Microthemer wouldn't allow styling links that lead back to the admin area (this was an unintended consequence of preventing single-click navigation to the admin area).

= 3.6.3 (Apr 20, 2015) =
* The computed CSS appears when hovering over the CSS property LABEL instead of the form field. We think tooltips should get out of the way of input fields. And we think it's neater to show the label and computed value alongside each other e.g. "Font Weight: bold".
* The color picker would not disappear on blur following the last 3.5.9 update (you had to click the close button).
* The styling of selector suggestions on hover poses less confusion about which suggestion is actually selected. They have a grey background on hover and the current selector continues to look like an editable textarea until another one is clicked.
* Information icons appear on hover for the selector wizard suggestions for showing the tooltip without the tooltip getting in the way of the code.

= 3.5.9 (Apr 19, 2015) =
* An 'Edge mode' option has been added to the preferences. You can enable this to try out experimental new features and have your say on them before they become permanent. Useful for those that want to take an active role in shaping Microthemer.
* Custom tooltips have been added to the interface. You can configure these via the preferences.
* Selectors suggestions on the targeting tab have more descriptive explanations and show quickly with the new tooltip.
* The inside label on the folder field of the selector wizard had a glitch
* jQuery version checking could be inaccurate under some circumstances.
* Targeting inputs by type wasn't working
* Microthemer could follow links to plain images and find itself at an impasse.
* Microthemer could follow links to the admin and then possibly back to Microthemer.
* Microthemer now waits for 700ms instead of 300ms for a second click when a user double-clicks something. Some people were naturally double-clicking with less than 300ms between each click. I will make the delay time configurable if people request this.
* The selector targeting tab has a regular scrollbar on the right instead of a vertical slider. Switching between the options is be done by hovering your mouse over them (for quick preview) and then clicking the suggestion you want.
3.5 (Apr 10, 2015)
* jQuery version checking could be inaccurate under some circumstances.

= 3.4.9 (Apr 7, 2015) =
* An undefined index PHP error could show when upgrading from a previous version to version 3.4.4 (when the WP admin shortcut link was added)
* Some undefined errors could be generated on the UI page. These were hidden behind the interface but could result in a slow page load if present.

= 3.4.7 (Apr 4, 2015) =
* Chrome could fail when trying to load the selector wizard if it encountered any computed CSS values with rgba opacity set to more than 2 decimal places e.g. 0.745.
* Double-clicking an already highlighted element closes the selector wizard instead of showing a warning.
* On multi-site, Microthemer creates the micro-themes folder in /wp-content/uploads/sites/ if the blogs.dir directory doesn't already exist (modern multi-site installs don't create the blogs.dir folder).


= 3.4.4 (Apr 3, 2015) =
* Added an option for accessing Microthemer from the WP admin bar. This can be turned off via the preferences page if you don't want it cluttering your admin bar.
* There is an import icon next to each design pack on the Manage & Install design packs page. This takes you to the import page and preselects the right design pack.
* The 'clear styles but leave folders & selectors intact' option didn't clear styles applied on responsive tabs.

= 3.4.1 (Mar 11, 2015) =
* Double-clicking an element with text no longer highlights the actual word clicked, which resulted in confusing highlighting.
* Microthemer initially uses home_url() to load the site preview as site_url() can sometimes be incorrect.
* Possibility of an undefined variable $logs on line 1110 of tvr-microthemer.php
* Possibility of an undefined index disable_parent_css on line 5515 of tvr-microthemer.php

= 3.3.7 (Feb 15, 2015) =
* Folders and selector are APPENDED instead of PRE-PENDED when added to the interface. Rationale: It keeps folders and selectors in the chronological order that they were created, the back and forward quick nav buttons work more intuitively, if two selectors have equal specificity the latter will override the previously created one.
* For consistency, the same goes for custom media queries. They are appended, and the 'NEW' button has been moved below them.
* Only folders that have 1 or more selectors are auto-checked on the settings export screen.
* All folders/selectors/custom media queries would flash for a split second when adding a new item to them.
* There is a known bug in firefox where media queries don't take effect on the exact pixel specified. Styles set within a media query tab didn't always seem to take an effect at 767px for instance when the media query specified a max-width of 767px (as it does on the 'Tablet & Phone' media query). Only at 766.7px do the styles work. For now, I've implemented a fix for this (automatically subtracting 0.3px from the preview screen width). I am following this bug on bugzilla. I will remove the temporary fix when it is no longer necessary.
* Unnecessary console.logs functions for debugging were included in the previous release which could cause problems for IE9.
* The media query tabs can be added by clicking the actual text in the tab management menu (not just the + icon). This feels more natural.
* The folder >> Selector breadcrumbs arrows have the default mouse cursor on hover to indicate that they're not clickable.
* Microthemer would get stuck when deleting the last selector while in 'quick edit folder' view.
* The new 'media query sets' loading feature had some teething problems.
* Using the following CSS pseudo selectors caused problems: :before, ::before, :after, ::after. Thanks again to Antonio for spotting this.
* The screen-width slider didn't show with the selector wizard 100% of the time.
* The computed CSS values for the single double-clicked element were not recalculated following a screen width refresh.

= 3.2.4 (Feb 14, 2015) =
* When saving different styles in quick succession, the latest style change wasn't always saved if a save was already in progress. Now the saves queue up to ensure that the latest setting applies.
* The selector wizard could fail to show if other Javascripts altered the format of the computed CSS data jQuery returned.
* The selector wizard could also fail to show after double-clicking in Chrome under some circumstances.

= 3.2.1 (Feb 10, 2015 - later in the afternoon) =
* The selector wizard displays link :pseudo classes in the correct order (that corresponds to the position of the slider handle)
* An undefined variable could throw a warning with strict error reporting server settings enabled.
* Unnecessary debug output was being generated behind the scenes. And unnecessary source file for a polyfill were included.
* The selector wizard caused the manual 'Add Selector' options to be expanded when they needn't be.
* Manual selector values were not being cleared from the input fields upon 'cancel'

= 3.1.6 (Feb 10, 2015) =
* Microthemer remembers your preference for showing/unshowing the advanced options of the selector wizard. No need for the checkbox now.
* Microthemer remembers which tab of the advanced wizard you last used.
* Microthemer remembers your preference for having the left toolbar expanded or closed.
* Microthemer remembers the last viewed selector when reloading the page, even if you didn't apply styles to it.
* The link back to the WordPress dashboard is a real link so that you can open it in a new tab with right-click.
* The media query tabs editing menu options are more similar to the format used for editing folders and selectors. An additional 'clear' option has been added for clearing all the styles for a style group at once.

= 3.1 (Feb 8, 2015) =
* Some alternative media query 'sets' can be loaded. These encourage the use of mobile-first/semantic breakpoints.
* Deleting all media queries will actually reset the default media queries (rather than just purporting to)
* Hovering your mouse over a media query tab shows the underlying media query code.
* The color picker didn't allow RGB or RGBA values if there was a space before the brackets e.g. "RGBA ()".
* Navigating to selector from the main menu or quick edit menus closes the open menu
* The 'Double-click an element to create editing options for it' title attribute is no longer dynamically added to the <body> element of the preview iframe.
* The in-program docs now link to the new online support index page, taking this version out of beta.
* Each CSS property has a direct link to the online CSS reference by clicking the CSS property icon
* Microthemer recalculates and reports the correct computed CSS following actions that change the preview screen width (e.g. adjusting the slider or switching between media query tabs). Thanks for reporting this Rob.
* Selector highlighting is recalculated instantly when a new style is applied that affects the dimensions of the targets element(s). Thanks again to Rob for spotting this.
* Cursor options no longer have a scrollbar in the dropdown menu, which partially obscured the options.

= 3.0.16 (beta) =
* The pre-populated selector name value for all selectors in a folder was overwritten by the most recent selector created via the selector wizard. Thanks for spotting this Antonio!
* Importing a design pack made with Microthemer 1.x (before media query tabs were added) would result in PHP errors.

= 3.0.14 (beta) =
* Improved the icon and description for the media query tab management menu. A few more improvements for this feature are on the way.
* If a media query tab (e.g. "Phone") was used in the absence of the default "All Devices" tab, settings applied to the media query tab would not save.
* When importing 2.x settings, media query tabs did not always display correctly
* Dropdown menu toggle arrows were misaligned by one pixel in Firefox.

= 3.0.11 (beta) =
* The appearance of the slider handle for the selector wizard element targeting tab also needed fixing in WP 4.1
* The notification about disabling highlighting when double-clicking something that is already highlighted was confusing.
* In rare cases Microthemer was not remembering the last frontend page viewed in the preview window.

= 3.0.8 (beta) =
* On multi-site, the "back to WordPress dashboard" icon in the left toolbar took the user back to the root admin dashboard instead of the intended blog dashboard.
* With WordPress 4.1 there were a few display issues relating to jQuery UI widgets like sliders and pseudo select comboboxes.
- The preview screen width slider handle was not correctly styled (it was too big).
- The dropdown menus looked a bit ugly and it wasn't possible to specify an empty value to clear the field.
* With jquery versions older than 1.9, a javascript error could prevent the selector wizard from loading when double-clicking an element. Now Microthemer warns you to update jQuery.
* Microthemer was sometimes creating a debug-save.txt file in the root /micro-themes/ folder. This caused a blank design pack to be displayed on the manage design packs page that could not be deleted via the delete button. If you installed version 3.0 and you see a nameless design pack on the manage packs page, please delete the following file via FTP: /wp-content/micro-themes/debug-save.txt (or ask Themeover for help with this).
* Microthemer will not run with versions earlier than 3.6 (it will warn you to upgrade WordPress)
* The reported CSS could sometimes be too big for the input field and looked messy. If there is not enough room the value is truncated with a ... suffix. The full computed CSS value can still be viewed by hovering your mouse over the input field.
* The icons for text-shadow X and Y offset were wrong. "Spread" will be added to these shadow options soon.
* An innocuous javascript error was generated if exporting the first design pack when no others exist.

= 3.0 (beta) =
* Note: this is a beta because it was released without updated documentation
* Much nicer icon-based UI with far more space available for seeing the site your designing and NO overlap of editing options.
* Everything is accessible from the Microthemer UI page (e.g. design pack installation and management, updating global preferences and media queries)
* Much easier management of sections (now called folders) and selectors. You can copy and move selectors between folders with drag and drop too.
* Code editor with syntax highlighting for those that still like to program. You can still see the frontend site while you write your code. Clicking control+S to save means that you see your changes instantly.
* Some new style options (e.g. box-sizing, background-size) with more (animation/transition) options on the way in a later release.
* Background images are now managed via the wordpress media manager. On installing a pack with images, they are extracted to the library and image paths are updated automatically. When you download a pack, linked imaged are downloaded from the image library and included in the zip package. It should make working with background images much easier.
* The selector wizard is now easier to use. It has a slider for tweaking your targeting instead of the dropdown menu. And computed CSS is reported at the wizard stage too. In a later release the HTML inspection will be improved further.
* Import/Export of settings has been improved.
* limits caused by PHP's max_input_vars settings which could cause problems saving your settings if the number of input vars exceeded the limit (typically 1000) is no longer an issue. Microthemer serializes input values into one and then splits them back to normal on the server side.
* background images can have spaces in the names e.g. "my images with spaces.jpg"
* Resetting, importing, and restoring settings used to pass parameters in the URL. Refreshing the page (which some of us do habitually) could cause unwanted old actions (like resetting the interface) to be repeated accidentally. Now all actions are submitted via ajax and the Microthemer URL remains clean at all times.
* Microthemer doesn't set viewport to 1 by default. If you plan to make use of the media query feature please set this to 1 on the media queries management page.
* CSS3 PIE isn't turned on globally by default


= 2.8.2 (Sept 16, 2014 =
* The helps links to the videos, tutorials, and forum were not working on the Preferences or Manage Themes pages.
* Microthemer no longer displays your email address on the unlock page once you have successfully validated your email address.
This is useful if you have purchased a developer license and you do not want your clients to see your email address.
* Also, the free trial notice disappears after unlocking the program.
* The "Free Trial Example Section" is now just called "Example Section" to avoid confusion over whether or not the program is really unlocked after validating your email address.

= 2.7.8 (Sept 8, 2014) =
* Text-shadow colour could not be set to "none" to effectively disable any existing text-shadow values.
* RGB AND RGBA colour values could not be set without Microthemer auto-adjusting them to solid hex values. RGB/RGBA values can now be manually added. The color picker will receive some proper attention in the near future to ensure maximum flexibility and ease of use.
* A call to an undefined javascript function caused an error in the browser console. Although the error didn't seem to disrupt normal functioning of the program.

= 2.7.5 (Sept 1, 2014) =
* The new feature of computing the CSS could slow, and potentially crash the browser. This could happen when analysing high numbers of page elements (e.g. 30 links on the page) combined with lots of properties having mixed values (e.g. a font-size of 12px, 18px, 21px). As A quick fix, we have set the maximum number of elements on the page that can be scanned to 10 (instead of 50). We will increase this figure (to around 30) when we release version 3 in about one month. Version 3 will segment the display of property groups (e.g. just padding or just behaviour) rather than displaying all properties at once and so will be able to analyse more elements on the page without resulting in performance issues.
* Also, related to the above, Microthemer now excludes the WP admin bar from restyling for performance reasons.
* If a selector contained the :link pseudo selector, this wasn't correctly filtered when constructing selector highlighting divs.

= 2.7.3 (Aug 8, 2014) =
* Computed CSS reporting failed if the CSS selector code contained one of the following pseudo selectors - :hover, :active, :visited

= 2.7.2 (Aug 06, 2014) =
* Google font subsets e.g. "subset=latin,latin-ext" can now be set on the Microthemer > Preferences page
* An error occurred when using single or double quotes in selectors e.g. input[type="text"]

= 2.7.1 =
* Microthemer can now be used as a substitute for firebug as a tool for analysing an element's existing computed CSS values. Microthemer now shows the computed values as overlays on the editing options so you can view CSS value reporting and make an edit in exactly the same place.
* Font weight can be applied as a century number from 100 to 900.

* The little "i"s for manually applying the !important CSS declaration got lost for a while.
* When exporting to a theme, it was possible to not select anything from the dropdown menu.
* Custom google font still rendered if the field wasn't cleared before switching back to a regular web safe font in the dropdown.
* Auto-save was a bit sketchy with Google Fonts too
* Microthemer auto-saves when property options are deleted or a selector is modified now to more accurately present the state of things.
* Microthemer now includes the background-color in the CSS3 gradient declaration. It will always be trumped by the gradient but not doing this resulting in incorrect reporting of the background-color property (now that Microthemer reports this information)

= 2.6.3 =
* Style changes appear much quicker now (almost immediately). As such, auto-save is now the default mode (although it can be disabled). Also, auto-save is trggered when you finish typing into text fields (after a 700ms delay, rather than when focus is removed). 
* Microthemer remembers the last page you viewed when you return to the visual view site preview

= 2.6.1.1 =
* Found another call to the missing json class the previous version aimed to fix (2.6.1).

= 2.6.1 =
* When exporting settings to a settings pack, or invoking any function that used the json class, an error message was thrown in WordPress 3.9.

= 2.6.0 =
* Various PHP notices that could display on servers with strict error reporting have been fixed.

= 2.5.8 = 
* E_STRICT PHP error warnings could occur with PHP 5.4 due to code aimed at maintaining compatibility with PHP 4. This code has been removed. PHP 4 is no longer supported.

= 2.5.7 =
* There is now only one important "i" icon next to the last text-shadow input field. This makes much more sense.
* wordpress.org only - a file wasn't checked in which was necessary for the new responsive screen width slider to appear correctly.

= 2.5.6 =
* Media queries could be re-ordered but re-ordering did not have an effect with regards to the order the media queries were written to the active-style.css styleheet.

= 2.5.5 =
* Added a major new responsive design feature to the visual view. Preview the frontend in screen widths that correspond to min and max width values specified in your media queries. Also, you can easily adjust the preview screen size manually user a slider. You still have full editorial control over Microthemers default media queries.
* Some CSS tweaks to further improve the design with WordPress 3.8.
* Under some conditions discarding a media query tab in the style editing options could result in the editing options for the next tab that comes into focus remaining hidden.

= 2.5.2 =
* Various design improvements to ensure compatibility with WordPress 3.8

= 2.5.1 =
* PHP warning error when importing a settings pack that was made before Microthemer introduced media queries. Only affected Microthemer 2.5.

= 2.5 = 
* Major bug with device-specific CSS styles disappearing. Previously saved media query styles were overwritten by new ones if the section or selector was closed. This bug was masked prior to the last release (2.4.7) because sections and selectors remained open unless explicitly closed.
* When importing a theme pack that uses device specific css, the tabs could get messed up it focus wasn't left on 'All-devices'.
* Increased the CSS-specificity of Microthemer's own CSS styles on hidden Elements to ensure normal Javascript functioning too.

= 2.4.7 = 
* Under some conditions saving settings could result in an error. Servers that have a value in php.ini for max_input_vars (usually 1000) would sometimes truncate the data Microthemer sends to the server, resulting in a save error. Microthemer now warns you in advance if you are approaching your data-sending limits and suggest an easy fix - just hit the SpeedUp button in the right-hand menu.
* By default, Microthemer no longer remembers open sections/selectors when you return to the UI page. Doing so increased the likelihood of the data-limit error described above. However, you can adjust this behaviour via a new option on the preferences page.

= 2.4.5 = 
* Four additional Raw CSS Code textareas added for specifically targeting versions of Internet Explorer. Microthemer only includes these additional stylesheets if you make use of the new textareas so no unecessary stylesheets are ever included.

= 2.4.4 = 
* Option added to preferences page to set the viewport zoom level for any device to "1". This is on by default as it is necessary for the media queries to affect mobile and tablet devices correctly.

= 2.4.3 = 
* MAJOR BUG FIXED - Style values of zero (0) were ignored (not written to the CSS stylesheet) in the last version of Microthemer (2.4.1). 

= 2.4.1 = 
* Various bugs relating to media queries and illegal string offsets with PHP 5.4 were fixed

= 2.3.8 = 
* Microthemer now supports media queries for designing responsively

= 2.3.5 = 
* Email validation method now more reliable.
* Google Font variations can now be correctly used (click the variation before clicking the "Use this Font" link)
* Google Font url uses https if necessary to prevent mixed content warnings on SSL sites.

= 2.3.2 = 
- Works with MP6
- Transparency on mouseout can now be configured

= 2.2.9 = 
- Added support for Google Web Fonts - visual font-browser

= 2.2.3 = 
- Custom CSS style properties can now be added to Selectors in the CSS Selector textarea. Microthemer will look for the use of curly braces and include any CSS properties it finds in between the curly braces.

= 2.2.2 = 
The first release of Microthemer Lite on wordpress.org


== Upgrade Notice ==

= 5.0.5.2 (June 19th, 2017) =

# Bugs fixed
* Auto-select of label text should not have happened when editing a suggested CSS selector via the 'Targeting suggestions' pane. As this moved focus away from the input during typing.
* Using any of the 3 dom navigation options (HTML, breadcrumbs, DOM nav arrows) didn't clear the manually edited CSS suggestion that jumps to the top of the list upon editing, as happens when a new element is clicked on. This could be confusing.