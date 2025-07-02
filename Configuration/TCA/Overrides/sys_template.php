<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'bprotaryclubvicopisano';

    /**
     * Default TypoScript for Bprotaryclubvicopisano
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'BPRotaryClubVicopisano'
    );
});
