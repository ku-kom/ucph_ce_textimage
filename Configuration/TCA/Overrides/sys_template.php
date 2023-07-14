<?php declare(strict_types=1);
/*
 * This file is part of the package ucph_ce_textimage.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * University of Copenhagen.
 */

defined('TYPO3') or die('Access denied.');

call_user_func(function ($extKey='ucph_ce_textimage') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extKey,
        'Configuration/TypoScript',
        'UCPH TYPO3 content element "Text and images"'
    );
});
