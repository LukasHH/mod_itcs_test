<?php
/*
# mod_itcs_test - 
# -------------------------------------------------------------
# Author    it-conserv.de
# Copyright (C) 2021 it-conserv.de All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# CSS Style is a free resource from http://littlesnippets.net/ 
# Websites: it-conserv.de
*/

namespace ITCS\Module\ItcsTest\Site;

// no direct access
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Date\Date;
use Joomla\CMS\Uri\Uri;

//mod_itcs_test
class ItcsTestHelper
{
	/**
	 * Check the normally Weekdays
	 * 
	 * @open_days	multiples Array with the standard times
	 * @week_start	(int) Start of the week (1=Monday, 0=Sunday)
	 * @tz			actual timezone
	 * 
	 */
	public static function mytest($test)
	{
		
		$test = 'Das ist eine Testfunktion. '.$test;

		return $test;
	}

}