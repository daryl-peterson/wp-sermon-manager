<?php

namespace DRPSermonManager\Interfaces;

/**
 * Plugin interface.
 *
 * @author      Daryl Peterson <@gmail.com>
 * @copyright   Copyright (c) 2024, Daryl Peterson
 * @license     https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @since       1.0.0
 */
interface PluginInt
{
    /**
     * Initialize hooks.
     */
    public function init(): void;

    public function activate(): void;

    public function deactivate(): void;

    public function showNotice(): void;

    public function shutdown(): void;
}