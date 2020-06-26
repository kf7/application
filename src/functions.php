<?php

/**
 * Part of application of Kohana framework.
 *
 * @author Kohana team
 * @copyright 2020 Kohana team
 * @license BSD-3-Clause
 */

namespace Kohana;

/**
 * @return ModuleInterface
 */
function app(): ModuleInterface
{
    static $instance;
    if ($instance === null) {
        $instance = new Application\Module();
    }
    return $instance;
}

/**
 * @param string $message Message text
 * @param array $variables Message variables
 * @param string|null $locale Target locale
 * @return string
 */
function i18n(
    string $message,
    array $variables = [],
    ?string $locale = null
): string {
    return I18n::getText([$message, $variables], $locale);
}
