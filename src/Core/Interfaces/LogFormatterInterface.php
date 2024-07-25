<?php

namespace DRPSermonManager\Core\Interfaces;

use DRPSermonManager\LogRecord;

/**
 * Interface description.
 *
 * @category
 *
 * @author      Daryl Peterson <@gmail.com>
 * @copyright   Copyright (c) 2024, Daryl Peterson
 * @license     https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @since       1.0.0
 */
interface LogFormatterInterface
{
    /**
     * Format log record.
     */
    public function format(LogRecord $record): string;
}
