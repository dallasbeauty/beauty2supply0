<?php
/**
 * Copyright (C) 2018 thirty bees
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@thirtybees.com so we can send you a copy immediately.
 *
 * @author    thirty bees <contact@thirtybees.com>
 * @copyright 2018 thirty bees
 * @license   Open Software License (OSL 3.0)
 */

/**
 * Delete all back office menu tabs related to a specific class.
 *
 * @param string $tabClassName Name of the specific class.
 *
 * @since 1.0.8
 */
function deleteTab($tabClassName)
{
    require_once __DIR__.'/environment.php';

    while ($idTab = Tab::getIdFromClassName($tabClassName)) {
        (new Tab($idTab))->delete();
    }
}
