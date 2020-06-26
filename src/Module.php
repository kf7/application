<?php

/**
 * @author Kohana team
 * @copyright 2020 Kohana team
 * @license BSD-3-Clause
 */

namespace Kohana\Application;

use Kohana\AbstractModule;

/**
 * Application manager.
 */
final class Module extends AbstractModule
{

    /**
     * @inheritDoc
     */
    public function getPath(): string
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR;
    }

    /**
     * @inheritDoc
     */
    public function getNamespace(): string
    {
        return __NAMESPACE__ . '\\';
    }

    /**
     * @inheritDoc
     */
    public function getId(): string
    {
        return 'application';
    }

    /**
     * @inheritDoc
     * @todo delete
     */
    public function getName(): string
    {
        return 'Application';
    }

    /**
     * @inheritDoc
     */
    public function getRoutes(): array
    {
        // @todo uncomment
        return [
            // new \Kohana\Routing\Route('default', '(<directory>/(<controller>/(<action>/)))')
        ];
    }
}
