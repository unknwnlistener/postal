<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language file.
 *
 * @package   theme_pbs
 * @copyright 2023 Nischal Abraham
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// A description shown in the admin theme selector
$string['choosereadme'] = 'Theme PBS is a child theme of Boost. It is customized to fit the requirements of Postal Bible School learning website.';
// The name of our plugin
$string['pluginname'] = 'PBS Theme';

// The name of the second tab in the theme settings
$string['advancedsettings'] = 'Advanced settings';
// The brand colour setting
$string['brandcolor'] = 'Brand colour';
// The brand colour setting description
$string['brandcolor_desc'] = 'The accent colour.';
// Name of the settings pages
$string['configtitle'] = 'PBS settings';
// Name of the first settings tab
$string['generalsettings'] = 'General';

$string['logo'] = 'Logo';
$string['logodesc'] = 'The logo is displayed in the header.';
$string['favicon'] = 'Custom favicon';
$string['favicondesc'] = 'Upload your own favicon.  It should be an .ico file.';
$string['loginbgimg'] = 'Login page background';
$string['loginbgimg_desc'] = 'Upload your custom background image for the login page.';

// Colours
$string['brandcolor'] = 'Brand colour';
$string['brandcolor_desc'] = 'The accent colour.';
$string['secondarymenucolor'] = 'Secondary menu color';
$string['secondarymenucolor_desc'] = 'Secondary menu background color';
$string['navbarbg'] = 'Navbar color';
$string['navbarbg_desc'] = 'The left navbar color';
$string['navbarbghover'] = 'Navbar hover color';
$string['navbarbghover_desc'] = 'The left navbar hover color';

$string['fontsite'] = 'Site font';
$string['fontsite_desc'] = 'Default font site. You can try out the fonts on <a href="https://fonts.google.com">Google Fonts site</a>.';
$string['enablecourseindex'] = 'Enable course index';
$string['enablecourseindex_desc'] = 'You can show/hide course index navigation';

// Preset files setting
$string['presetfiles'] = 'Additional theme preset files';
// Preset files help text
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme. See <a href=https://docs.moodle.org/dev/Boost_Presets>Boost presets</a> for information on creating and sharing your own preset files, and see the <a href=http://moodle.net/boost>Presets repository</a> for presets that others have shared.';
// Preset setting
$string['preset'] = 'Theme preset';
// Preset help text
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';
// Raw SCSS setting
$string['rawscss'] = 'Raw SCSS';
// Raw SCSS setting help text
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
// Raw initial SCSS setting
$string['rawscsspre'] = 'Raw initial SCSS';
// Raw initial SCSS setting help text
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
// We need to include a lang string for each block region
$string['region-side-pre'] = 'Right';

// Advanced settings
$string['advancedsettings'] = 'Advanced';
$string['rawscsspre'] = 'Raw initial SCSS';
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
$string['rawscss'] = 'Raw SCSS';
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
$string['googleanalytics'] = 'Google Analytics V4 Code';
$string['googleanalyticsdesc'] = 'Please enter your Google Analytics V4 code to enable analytics on your website. The code format shold be like [G-XXXXXXXXXX]';

// Frontpage settings tab.
$string['frontpagesettings'] = 'Frontpage';
$string['displaymarketingboxes'] = 'Show front page marketing boxes';
$string['displaymarketingboxesdesc'] = 'If you want to see the boxes, select yes <strong>then click SAVE</strong> to load the input fields.';
$string['marketingsectionheading'] = 'Marketing section heading title';
$string['marketingsectioncontent'] = 'Marketing section content';
$string['marketingicon'] = 'Marketing Icon {$a}';
$string['marketingheading'] = 'Marketing Heading {$a}';
$string['marketingcontent'] = 'Marketing Content {$a}';

$string['disableteacherspic'] = 'Disable teachers picture';
$string['disableteacherspicdesc'] = 'This setting hides the teachers\' pictures from the course cards.';

$string['sliderfrontpageloggedin'] = 'Show slideshow in frontpage after login?';
$string['sliderfrontpageloggedindesc'] = 'If enabled, the slideshow will be showed in the frontpage page replacing the header image.';
$string['slidercount'] = 'Slider count';
$string['slidercountdesc'] = 'Select how many slides you want to add <strong>then click SAVE</strong> to load the input fields.';
$string['sliderimage'] = 'Slider picture';
$string['sliderimagedesc'] = 'Add an image for your slide. Recommended size is 1500px x 540px or higher.';
$string['slidertitle'] = 'Slide title';
$string['slidertitledesc'] = 'Add the slide\'s title.';
$string['slidercaption'] = 'Slider caption';
$string['slidercaptiondesc'] = 'Add a caption for your slide';

$string['numbersfrontpage'] = 'Show site numberss';
$string['numbersfrontpagedesc'] = 'If enabled, display the number of active users and courses in the frontpage.';
$string['numbersfrontpagecontent'] = 'Numbers section content';
$string['numbersfrontpagecontentdesc'] = 'You can add any text to the left side of the numbers section';
$string['numbersfrontpagecontentdefault'] = '<h2>Trusted by 25,000+ happy customers.</h2>
                    <p>With lots of unique blocks, you can easily build <br class="d-none d-sm-block d-md-none d-xl-block">
                        a page without coding. Build your next website <br class="d-none d-sm-block d-md-none d-xl-block">
                        within few minutes.</p>';
$string['numbersusers'] = 'Active users accessing our amazing resources';
$string['numberscourses'] = 'Courses made for your that you can trust!';

$string['faq'] = 'FAQ';
$string['faqcount'] = 'FAQ questions';
$string['faqcountdesc'] = 'Select how many questions you want to add <strong>then click SAVE</strong> to load the input fields.<br>If you don\'t want a FAQ, just select 0.';
$string['faqquestion'] = 'FAQ question {$a}';
$string['faqanswer'] = 'FAQ answer {$a}';

// Footer settings tab.
$string['footersettings'] = 'Footer';
$string['website'] = 'Website URL';
$string['websitedesc'] = 'Main company Website';
$string['mobile'] = 'Mobile';
$string['mobiledesc'] = 'Enter Mobile No. Ex: +5598912341234';
$string['mail'] = 'E-Mail';
$string['maildesc'] = 'Company support e-mail';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook. (i.e http://www.facebook.com/myinstitution)';
$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your twitter. (i.e http://www.twitter.com/myinstitution)';
$string['linkedin'] = 'Linkedin URL';
$string['linkedindesc'] = 'Enter the URL of your Linkedin. (i.e http://www.linkedin.com/myinstitution)';
$string['youtube'] = 'Youtube URL';
$string['youtubedesc'] = 'Enter the URL of your Youtube. (i.e https://www.youtube.com/user/myinstitution)';
$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Enter the URL of your Instagram. (i.e https://www.instagram.com/myinstitution)';
$string['whatsapp'] = 'Whatsapp number';
$string['whatsappdesc'] = 'Enter your whatsapp number for contact.';
$string['telegram'] = 'Telegram';
$string['telegramdesc'] = 'Enter your Telegram contact or group link.';
$string['contactus'] = 'Contact us';
$string['followus'] = 'Follow us';

// Mypublic page.
$string['aboutme'] = 'About me';
$string['personalinformation'] = 'Personal information';
$string['addcontact'] = 'Add contact';
$string['removecontact'] = 'Remove contact';

// Theme settings.
$string['themesettings:accessibility'] = 'Accessibility';
$string['themesettings:fonttype'] = 'Font type';
$string['themesettings:defaultfont'] = 'Default font';
$string['themesettings:dyslexicfont'] = 'Dyslexic font';
$string['themesettings:enableaccessibilitytoolbar'] = 'Enable accessibility toolbar';
$string['themesettingg:successfullysaved'] = 'Accessibility settings successfully saved';

// Accessibility features.
$string['accessibility:fontsize'] = 'Font size';
$string['accessibility:decreasefont'] = 'Decrease font size';
$string['accessibility:resetfont'] = 'Reset font size';
$string['accessibility:increasefont'] = 'Increase font size';
$string['accessibility:sitecolor'] = 'Site color';
$string['accessibility:resetsitecolor'] = 'Reset site color';
$string['accessibility:sitecolor2'] = 'Low contrast 1';
$string['accessibility:sitecolor3'] = 'Low contrast 2';
$string['accessibility:sitecolor4'] = 'High contrast';

// Data privacy.
$string['privacy:metadata:preference:accessibilitystyles_fontsizeclass'] = 'The user\'s preference for font size.';
$string['privacy:metadata:preference:accessibilitystyles_sitecolorclass'] = 'The user\'s preference for site color.';
$string['privacy:metadata:preference:thememoovesettings_fonttype'] = 'The user\'s preference for font type.';
$string['privacy:metadata:preference:thememoovesettings_enableaccessibilitytoolbar'] = 'The user\'s preference for enable the accessibility toolbar.';

$string['privacy:accessibilitystyles_fontsizeclass'] = 'The current preference for the font size is: {$a}.';
$string['privacy:accessibilitystyles_sitecolorclass'] = 'The current preference for the site color is: {$a}.';
$string['privacy:thememoovesettings_fonttype'] = 'The current preference for the font type is: {$a}.';
$string['privacy:thememoovesettings_enableaccessibilitytoolbar'] = 'The current preference for enable accessibility toolbar is to show it.';
