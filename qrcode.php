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

JLoader::import('components.com_fields.libraries.fieldsplugin', JPATH_ADMINISTRATOR);

/**
 * Fields QR Code Plugin
 *
 * @since  3.7.0
 */
class PlgFieldsQrcode extends FieldsPlugin
{
	public function onInstallerBeforePackageDownload(&$url, &$headers)
	{
		$uri = JUri::getInstance($url);
		
		// I don't care about download URLs not coming from our site
		// Note: as the Download ID is common for all extensions, this plugin will be triggered for all
		// extensions with a download URL on our site
		$host = $uri->getHost();
		if (!in_array($host, array('www.joomill-extensions.com', 'joomill-extensions.com')))
		{
			return true;
		}

		// Get the download ID
		$dlid = $this->params->get('downloadid', '');

		// Appent the Download ID to the download URL
		if (!empty($dlid))
		{
			$uri->setVar('key', $dlid);
			$url = $uri->toString();
		}
		
		return true;
	}
}
