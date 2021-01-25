<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2021 (original work) Jeppe Bundsgaard;
 *               
 * 
 */

/**
 * Generated using taoDevTools 6.10.0
 */
return array(
    'name' => 'openPCIThemes',
    'label' => 'openPCI Themes',
    'description' => 'Themes for TAO',
    'license' => 'GPL-2.0',
    'version' => '0.0.2',
    'author' => 'Jeppe Bundsgaard',
    'requires' => array(
        'tao' => '>=46.13.0'
    ),
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#openPCIThemesManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#openPCIThemesManager', array('ext'=>'openPCIThemes')),
    ),
    'install' => array(
        'php' => array(
            __DIR__.'/scripts/install/setThemeConfig.php',
//              __DIR__.'/scripts/install/SetItemThemes::class',
			'openPCI/openPCIThemes/scripts/install/SetPlatformTheme::class'
        )
    ),
    'uninstall' => array(
    ),
    'routes' => array(
        '/openPCIThemes' => 'openPCI\\openPCIThemes\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'openPCIThemes/',
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )#,
//     'available' => [
//           [
//               'id' => 'taoThemeDefault',
//               'name' => 'TAO',
//               'path' => '/taoFoo/views/css/themes/items/default/theme.css'
//           ],
//           [
//               'id' => 'openPCITheme',
//               'name' => 'openPCITheme',
//               'path' => '/openPCIThemes/views/css/themes/items/other/openPCIThemes.css'
//           ]
//      ],
//      'default' => 'openPCITheme' // note the prefix
);
