<?php
/*
# mod_itcs_test
# -------------------------------------------------------------
# Author    it-conserv.de
# Copyright (C) 2021 it-conserv.de All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# CSS Style is a free resource from http://littlesnippets.net/ 
# Websites: it-conserv.de
*/

// no direct access
defined('_JEXEC') or die;

JLoader::registerNamespace('ITCS\\Module\\ItcsTest\\Site', __DIR__ , false, false, 'psr4');

use Joomla\CMS\Helper\ModuleHelper;
use \Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;
use \Joomla\CMS\Date\Date;
use Joomla\CMS\Language\Text;
use ITCS\Module\ItcsOpenHours\Site\ItcsTestHelper;

$uniqid			= $module->id;
$color			= $params->get('color', 1);
$open_text		= $params->get('open_text');

// Load CSS/JS
$doc 			= Factory::getDocument();
$doc->addStylesheet(URI::base(true) . '/modules/mod_itcs_test/assets/css/mod_itcs_test_style.css');

// Modal Button
$modalbody = 'Das hier ist der Boy im Modalen Fenster';

$button  = '
	<button 
		class="btn btn-primary btn-sm"
		data-bs-toggle="modal" 
		data-bs-target="#ohmod'.$uniqid.'"
		data-bs-title="'.Text::_('OH_TIMES').'"
		data-bs-action="showTimesModal"
		onclick="return false;"
	>
	<span class="icon-clock" aria-hidden="true"></span> '. Text::_('OH_TIMES_BUTTON') .' 
	</button>
';

$button .= HTMLHelper::_(
	'bootstrap.renderModal',
	'ohmod'.$uniqid,
	array(
		'modal-dialog-scrollable' => true,
		'title'  => Text::_('OH_TIMES'),
		'footer' => '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">'.Text::_('JCLOSE').'</button>'
	),
		'<div id="modal-body">'.$modalbody.'</div>'
);

//************************

/* Weekday Times */
// for ($i = 1; $i < 8; $i++){
// 	$open_days[] = array(
// 		$params->get('zusatzfelder')->{'zusatzfeld'.$i},
// 		$params->get('zusatzfelder')->{'zusatzfeld'.$i.'_active'},
// 		$params->get('zusatzfelder')->{'zusatzfeld'.$i.'_table'}->{'weekday'.$i.'_from'},
// 		$params->get('zusatzfelder')->{'zusatzfeld'.$i.'_table'}->{'weekday'.$i.'_to'},
// 	);
// }

$test  = ItcsTestHelper::mytest();

require ModuleHelper::getLayoutPath('mod_itcs_test', $params->get('layout', 'default'));