<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

call_user_func(static function () {
    $classLoader = require dirname(__DIR__).'/vendor/autoload.php';
    \TYPO3\CMS\Core\Core\SystemEnvironmentBuilder::run(1);
    \TYPO3\CMS\Core\Core\Bootstrap::init($classLoader, true)->get(\TYPO3\CMS\Install\Http\Application::class)->run();
});
