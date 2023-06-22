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

defined('MOODLE_INTERNAL') || die();

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {

    // Boost provides a nice setting page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingpbs', get_string('configtitle', 'theme_pbs'));

    /*
    * ----------------------
    * General settings tab
    * ----------------------
    */
    $page = new admin_settingpage('theme_pbs_general', get_string('generalsettings', 'theme_pbs'));

    // Logo file setting.
    $name = 'theme_pbs/logo';
    $title = get_string('logo', 'theme_pbs');
    $description = get_string('logodesc', 'theme_pbs');
    $opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 1);
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo', 0, $opts);
    $page->add($setting);

    // Favicon setting.
    $name = 'theme_pbs/favicon';
    $title = get_string('favicon', 'theme_pbs');
    $description = get_string('favicondesc', 'theme_pbs');
    $opts = array('accepted_types' => array('.ico'), 'maxfiles' => 1);
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon', 0, $opts);
    $page->add($setting);

    // Preset.
    $name = 'theme_pbs/preset';
    $title = get_string('preset', 'theme_pbs');
    $description = get_string('preset_desc', 'theme_pbs');
    $default = 'default.scss';

    $context = context_system::instance();
    $fs = get_file_storage();
    $files = $fs->get_area_files($context->id, 'theme_pbs', 'preset', 0, 'itemid, filepath, filename', false);

    $choices = [];
    foreach ($files as $file) {
        $choices[$file->get_filename()] = $file->get_filename();
    }
    // These are the built in presets.
    $choices['default.scss'] = 'default.scss';
    $choices['plain.scss'] = 'plain.scss';

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Preset files setting.
    $name = 'theme_pbs/presetfiles';
    $title = get_string('presetfiles', 'theme_pbs');
    $description = get_string('presetfiles_desc', 'theme_pbs');

    $setting = new admin_setting_configstoredfile(
        $name,
        $title,
        $description,
        'preset',
        0,
        array('maxfiles' => 20, 'accepted_types' => array('.scss'))
    );
    $page->add($setting);

    // Login page background image.
    $name = 'theme_pbs/loginbgimg';
    $title = get_string('loginbgimg', 'theme_pbs');
    $description = get_string('loginbgimg_desc', 'theme_pbs');
    $opts = array('accepted_types' => array('.png', '.jpg', '.svg'));
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbgimg', 0, $opts);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brand-color.
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_pbs/brandcolor';
    $title = get_string('brandcolor', 'theme_pbs');
    $description = get_string('brandcolor_desc', 'theme_pbs');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#2A1980');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $navbar-header-color.
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_pbs/secondarymenucolor';
    $title = get_string('secondarymenucolor', 'theme_pbs');
    $description = get_string('secondarymenucolor_desc', 'theme_pbs');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#2688FB');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $fontsarr = [
        'Roboto' => 'Roboto',
        'Poppins' => 'Poppins',
        'Montserrat' => 'Montserrat',
        'Open Sans' => 'Open Sans',
        'Lato' => 'Lato',
        'Raleway' => 'Raleway',
        'Inter' => 'Inter',
        'Nunito' => 'Nunito',
        'Encode Sans' => 'Encode Sans',
        'Work Sans' => 'Work Sans',
        'Oxygen' => 'Oxygen',
        'Manrope' => 'Manrope',
        'Sora' => 'Sora',
        'Epilogue' => 'Epilogue'
    ];

    $name = 'theme_pbs/fontsite';
    $title = get_string('fontsite', 'theme_pbs');
    $description = get_string('fontsite_desc', 'theme_pbs');
    $setting = new admin_setting_configselect($name, $title, $description, 'Roboto', $fontsarr);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_pbs/enablecourseindex';
    $title = get_string('enablecourseindex', 'theme_pbs');
    $description = get_string('enablecourseindex_desc', 'theme_pbs');
    $default = 1;
    $choices = array(0 => get_string('no'), 1 => get_string('yes'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $page->add($setting);

    // Must add the page after definiting all the settings!
    $settings->add($page);

    /*
    * ----------------------
    * Advanced settings tab
    * ----------------------
    */
    $page = new admin_settingpage('theme_pbs_advanced', get_string('advancedsettings', 'theme_pbs'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode(
        'theme_pbs/scsspre',
        get_string('rawscsspre', 'theme_pbs'),
        get_string('rawscsspre_desc', 'theme_pbs'),
        '',
        PARAM_RAW
    );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode(
        'theme_pbs/scss',
        get_string('rawscss', 'theme_pbs'),
        get_string('rawscss_desc', 'theme_pbs'),
        '',
        PARAM_RAW
    );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Google analytics block.
    $name = 'theme_pbs/googleanalytics';
    $title = get_string('googleanalytics', 'theme_pbs');
    $description = get_string('googleanalyticsdesc', 'theme_pbs');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

    /*
    * -----------------------
    * Frontpage settings tab
    * -----------------------
    */
    $page = new admin_settingpage('theme_pbs_frontpage', get_string('frontpagesettings', 'theme_pbs'));

    // Disable teachers from cards.
    $name = 'theme_pbs/disableteacherspic';
    $title = get_string('disableteacherspic', 'theme_pbs');
    $description = get_string('disableteacherspicdesc', 'theme_pbs');
    $default = 1;
    $choices = array(0 => get_string('no'), 1 => get_string('yes'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $page->add($setting);

    // Slideshow.
    $name = 'theme_pbs/slidercount';
    $title = get_string('slidercount', 'theme_pbs');
    $description = get_string('slidercountdesc', 'theme_pbs');
    $default = 0;
    $options = array();
    for ($i = 0; $i < 13; $i++) {
        $options[$i] = $i;
    }
    $setting = new admin_setting_configselect($name, $title, $description, $default, $options);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // If we don't have an slide yet, default to the preset.
    $slidercount = get_config('theme_pbs', 'slidercount');

    if (!$slidercount) {
        $slidercount = $default;
    }

    if ($slidercount) {
        for ($sliderindex = 1; $sliderindex <= $slidercount; $sliderindex++) {
            $fileid = 'sliderimage' . $sliderindex;
            $name = 'theme_pbs/sliderimage' . $sliderindex;
            $title = get_string('sliderimage', 'theme_pbs');
            $description = get_string('sliderimagedesc', 'theme_pbs');
            $opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 1);
            $setting = new admin_setting_configstoredfile($name, $title, $description, $fileid, 0, $opts);
            $page->add($setting);

            $name = 'theme_pbs/slidertitle' . $sliderindex;
            $title = get_string('slidertitle', 'theme_pbs');
            $description = get_string('slidertitledesc', 'theme_pbs');
            $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_TEXT);
            $page->add($setting);

            $name = 'theme_pbs/slidercap' . $sliderindex;
            $title = get_string('slidercaption', 'theme_pbs');
            $description = get_string('slidercaptiondesc', 'theme_pbs');
            $default = '';
            $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
            $page->add($setting);
        }
    }

    $setting = new admin_setting_heading('slidercountseparator', '', '<hr>');
    $page->add($setting);

    $name = 'theme_pbs/displaymarketingbox';
    $title = get_string('displaymarketingboxes', 'theme_pbs');
    $description = get_string('displaymarketingboxesdesc', 'theme_pbs');
    $default = 1;
    $choices = array(0 => get_string('no'), 1 => get_string('yes'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $page->add($setting);

    $displaymarketingbox = get_config('theme_pbs', 'displaymarketingbox');

    if ($displaymarketingbox) {
        // Marketingheading.
        $name = 'theme_pbs/marketingheading';
        $title = get_string('marketingsectionheading', 'theme_pbs');
        $default = 'Awesome App Features';
        $setting = new admin_setting_configtext($name, $title, '', $default);
        $page->add($setting);

        // Marketingcontent.
        $name = 'theme_pbs/marketingcontent';
        $title = get_string('marketingsectioncontent', 'theme_pbs');
        $default = 'Moove is a Moodle template based on Boost with modern and creative design.';
        $setting = new admin_setting_confightmleditor($name, $title, '', $default);
        $page->add($setting);

        for ($i = 1; $i < 5; $i++) {
            $filearea = "marketing{$i}icon";
            $name = "theme_pbs/$filearea";
            $title = get_string('marketingicon', 'theme_pbs', $i . '');
            $opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'));
            $setting = new admin_setting_configstoredfile($name, $title, '', $filearea, 0, $opts);
            $page->add($setting);

            $name = "theme_pbs/marketing{$i}heading";
            $title = get_string('marketingheading', 'theme_pbs', $i . '');
            $default = 'Lorem';
            $setting = new admin_setting_configtext($name, $title, '', $default);
            $page->add($setting);

            $name = "theme_pbs/marketing{$i}content";
            $title = get_string('marketingcontent', 'theme_pbs', $i . '');
            $default = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.';
            $setting = new admin_setting_confightmleditor($name, $title, '', $default);
            $page->add($setting);
        }

        $setting = new admin_setting_heading('displaymarketingboxseparator', '', '<hr>');
        $page->add($setting);
    }

    // Enable or disable Numbers sections settings.
    $name = 'theme_pbs/numbersfrontpage';
    $title = get_string('numbersfrontpage', 'theme_pbs');
    $description = get_string('numbersfrontpagedesc', 'theme_pbs');
    $default = 1;
    $choices = array(0 => get_string('no'), 1 => get_string('yes'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $page->add($setting);

    $numbersfrontpage = get_config('theme_pbs', 'numbersfrontpage');

    if ($numbersfrontpage) {
        $name = 'theme_pbs/numbersfrontpagecontent';
        $title = get_string('numbersfrontpagecontent', 'theme_pbs');
        $description = get_string('numbersfrontpagecontentdesc', 'theme_pbs');
        $default = get_string('numbersfrontpagecontentdefault', 'theme_pbs');
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $page->add($setting);
    }

    // Enable FAQ.
    $name = 'theme_pbs/faqcount';
    $title = get_string('faqcount', 'theme_pbs');
    $description = get_string('faqcountdesc', 'theme_pbs');
    $default = 0;
    $options = array();
    for ($i = 0; $i < 11; $i++) {
        $options[$i] = $i;
    }
    $setting = new admin_setting_configselect($name, $title, $description, $default, $options);
    $page->add($setting);

    $faqcount = get_config('theme_pbs', 'faqcount');

    if ($faqcount > 0) {
        for ($i = 1; $i <= $faqcount; $i++) {
            $name = "theme_pbs/faqquestion{$i}";
            $title = get_string('faqquestion', 'theme_pbs', $i . '');
            $setting = new admin_setting_configtext($name, $title, '', '');
            $page->add($setting);

            $name = "theme_pbs/faqanswer{$i}";
            $title = get_string('faqanswer', 'theme_pbs', $i . '');
            $setting = new admin_setting_confightmleditor($name, $title, '', '');
            $page->add($setting);
        }

        $setting = new admin_setting_heading('faqseparator', '', '<hr>');
        $page->add($setting);
    }

    $settings->add($page);

    /*
    * --------------------
    * Footer settings tab
    * --------------------
    */
    $page = new admin_settingpage('theme_pbs_footer', get_string('footersettings', 'theme_pbs'));

    // Website.
    $name = 'theme_pbs/website';
    $title = get_string('website', 'theme_pbs');
    $description = get_string('websitedesc', 'theme_pbs');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Mobile.
    $name = 'theme_pbs/mobile';
    $title = get_string('mobile', 'theme_pbs');
    $description = get_string('mobiledesc', 'theme_pbs');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Mail.
    $name = 'theme_pbs/mail';
    $title = get_string('mail', 'theme_pbs');
    $description = get_string('maildesc', 'theme_pbs');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Facebook url setting.
    $name = 'theme_pbs/facebook';
    $title = get_string('facebook', 'theme_pbs');
    $description = get_string('facebookdesc', 'theme_pbs');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Twitter url setting.
    $name = 'theme_pbs/twitter';
    $title = get_string('twitter', 'theme_pbs');
    $description = get_string('twitterdesc', 'theme_pbs');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Youtube url setting.
    $name = 'theme_pbs/youtube';
    $title = get_string('youtube', 'theme_pbs');
    $description = get_string('youtubedesc', 'theme_pbs');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Instagram url setting.
    $name = 'theme_pbs/instagram';
    $title = get_string('instagram', 'theme_pbs');
    $description = get_string('instagramdesc', 'theme_pbs');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);

    // Whatsapp url setting.
    $name = 'theme_pbs/whatsapp';
    $title = get_string('whatsapp', 'theme_pbs');
    $description = get_string('whatsappdesc', 'theme_pbs');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $page->add($setting);


    $settings->add($page);
}
