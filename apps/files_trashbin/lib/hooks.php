<?php
/**
 * ownCloud - trash bin
 *
 * @author Bjoern Schiessle
 * @copyright 2013 Bjoern Schiessle schiessle@owncloud.com
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * This class contains all hooks.
 */

namespace OCA\Files_Trashbin;

class Hooks {

	/**
	 * @brief Copy files to trash bin
	 * @param array
	 *
	 * This function is connected to the delete signal of OC_Filesystem
	 * to copy the file to the trash bin
	 */
	public static function remove_hook($params) {

		if ( \OCP\App::isEnabled('files_trashbin') ) {
			$path = $params['path'];
			Trashbin::move2trash($path);
		}
	}
}
