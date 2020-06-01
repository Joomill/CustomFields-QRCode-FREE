<?php
/**
 * Custom Fields - QR Code plugin for Joomla
 *
 * @author Joomill (info@joomill-extensions.com)
 * @copyright Copyright (c) 2017 Joomill
 * @license GNU Public License
 * @link https://www.joomill-extensions.com/
 */

defined('_JEXEC') or die;

class JFormFieldPRO extends JFormField
{
	protected $type = 'pro';

	protected function getInput()
	{
		$text = JText::_('PLG_FIELDS_YOUTUBE_PARAMS_PRO_ONLY');
		return
			'<code>' . $text . '</code>';
	}


}