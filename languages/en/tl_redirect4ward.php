<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright 4ward.media 2010
 * @author    Christoph Wiechert <christoph.wiechert@4wardmedia.de>
 * @package   redirect4ward
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_redirect4ward']['url'][0]		= "URL";
$GLOBALS['TL_LANG']['tl_redirect4ward']['url'][1]		= "The URL of the redirect without domain. e.g.: oldpage/index.html";

$GLOBALS['TL_LANG']['tl_redirect4ward']['host'][0]		= "Host";
$GLOBALS['TL_LANG']['tl_redirect4ward']['host'][1]		= "The redirect matches only for the given host (dns).";

$GLOBALS['TL_LANG']['tl_redirect4ward']['externalUrl'][0]		= "External URL";
$GLOBALS['TL_LANG']['tl_redirect4ward']['externalUrl'][1]		= "The URL of the target-website. You can enter one without an domain.";

$GLOBALS['TL_LANG']['tl_redirect4ward']['jumpTo'][0]	= "Redirect-target";
$GLOBALS['TL_LANG']['tl_redirect4ward']['jumpTo'][1]	= "The request redirects to this website.";

$GLOBALS['TL_LANG']['tl_redirect4ward']['jumpToType'][0]	= "Targettype";
$GLOBALS['TL_LANG']['tl_redirect4ward']['jumpToType'][1]	= "Choose between an internal or external redirection.";

$GLOBALS['TL_LANG']['tl_redirect4ward']['type'][0]		= "Redirecttype";
$GLOBALS['TL_LANG']['tl_redirect4ward']['type'][1]		= "Choose between an permanent or temporaray redirection.";

$GLOBALS['TL_LANG']['tl_redirect4ward']['published'][0]	= "Active";
$GLOBALS['TL_LANG']['tl_redirect4ward']['published'][1]	= "Here you can disable the redirection.";

$GLOBALS['TL_LANG']['tl_redirect4ward']['everyHost'] = 'every host';
$GLOBALS['TL_LANG']['tl_content']['tl_redirect4ward']['tl_redirect4wardTypes']['intern'] = 'Internal redirection';
$GLOBALS['TL_LANG']['tl_content']['tl_redirect4ward']['tl_redirect4wardTypes']['extern'] = 'External redirection';

$GLOBALS['TL_LANG']['tl_redirect4ward']['typeOptions'] = array(
	'301'	=> 'Permanent (301)',
	'307'	=> 'Temporaray (307)',
	
);


$GLOBALS['TL_LANG']['tl_redirect4ward']['new']    = array('New redirection', 'Creates a new redirection.');


?>