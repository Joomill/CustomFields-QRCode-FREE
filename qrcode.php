<?php
/**
 *  package: Custom Fields - QR Code plugin - FREE Version
 *  copyright: Copyright (c) 2020. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 3 or later
 *  link: https://www.joomill-extensions.com
 */

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Uri\Uri;

JLoader::import('components.com_fields.libraries.fieldsplugin', JPATH_ADMINISTRATOR);

/**
 * Fields QR Code Plugin
 *
 * @since  1.0.0
 */
class PlgFieldsQrcode extends FieldsPlugin
{
	public function onInstallerBeforePackageDownload(&$url, &$headers)
	{
		$uri = URI::getInstance($url);
		
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
