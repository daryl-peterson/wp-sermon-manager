<?php

namespace DRPSermonManager;

use DRPSermonManager\Abstracts\TaxonomyRegAbs;

/**
 * Taxonomy topics registration.
 *
 * @author      Daryl Peterson <@gmail.com>
 * @copyright   Copyright (c) 2024, Daryl Peterson
 * @license     https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @since       1.0.0
 */
class TaxTopicsReg extends TaxonomyRegAbs
{
    protected function __construct()
    {
        $this->taxonomy = Constant::TAX_TOPICS;
        $this->postType = Constant::POST_TYPE_SERMON;
        $this->configFile = 'taxonomy_topics.php';
    }
}
