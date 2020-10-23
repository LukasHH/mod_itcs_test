<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * new from 2020-10-23
 */

defined('_JEXEC') or die;

$itcs_license = $params->get('itcs_license');

require JModuleHelper::getLayoutPath('mod_itcs_test', $params->get('layout', 'default'));
