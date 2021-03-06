<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright       The XOOPS Project http://xoops.org
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @author          trabis <lusopoemas@gmail.com>
 */

$modversion['version']       = '1.1';
$modversion['module_status'] = 'Beta 1';
$modversion['release_date']  = '2017/03/29';
$modversion['dirname']       = basename(__DIR__);
$modversion['name']          = ucfirst(basename(__DIR__));
$modversion['description']   = 'This is a basic demo of XMF capabilities.';
$modversion['author']        = 'Richard Griffith (geekwright)';
$modversion['url']           = 'http://xoops.org';
$modversion['credits']       = 'trabis(www.xuups.com)';
$modversion['help']          = 'page=help';
$modversion['license']       = 'GNU GPL 2 or later';
$modversion['license_url']   = 'http://www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']      = 0;
$modversion['image']         = 'icons/logo_module.png';

$modversion['hasMain'] = 1;

// Admin things
$modversion['hasAdmin']    = 1;
$modversion['system_menu'] = 1;
$modversion['adminindex']  = 'admin/index.php';
$modversion['adminmenu']   = 'admin/menu.php';

$modversion['config'] = array();

$modversion['config'][] = array(
    'name'        => 'config1',
    'title'       => '_MI_XMFDEMO_CONFIG1',
    'description' => '_MI_XMFDEMO_CONFIG2_DSC',
    'formtype'    => 'textbox',
    'valuetype'   => 'text',
    'default'     => 'this is my test config1 value'
);

$modversion['config'][] = array(
    'name'        => 'config2',
    'title'       => '_MI_XMFDEMO_CONFIG2',
    'description' => '_MI_XMFDEMO_CONFIG2_DSC',
    'formtype'    => 'textbox',
    'valuetype'   => 'text',
    'default'     => 'this is my test config2 value'
);

// About stuff
$modversion['developer_lead']         = 'geekwright';
$modversion['developer_website_url']  = 'http://xoops.org';
$modversion['developer_website_name'] = 'XOOPS';
$modversion['developer_email']        = 'richard@geekwright.com';

$modversion['people']['developers'][] = 'geekwright';
$modversion['people']['developers'][] = 'trabis';

$modversion['min_xoops'] = '2.5.9';
$modversion['min_php']   = '5.5';
