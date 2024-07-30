<?php

namespace DRPSermonManager\Tests;

use DRPSermonManager\App;
use DRPSermonManager\Constant;
use DRPSermonManager\Interfaces\RolesInt;
use DRPSermonManager\Logging\Logger;

/**
 * Test role capabilities.
 *
 * @category
 *
 * @author      Daryl Peterson <@gmail.com>
 * @copyright   Copyright (c) 2024, Daryl Peterson
 * @license     https://www.gnu.org/licenses/gpl-3.0.txt
 */
class RolesTest extends BaseTest
{
    public RolesInt $obj;

    public function setup(): void
    {
        $this->obj = App::getRolesInt();
    }

    public function testAdd()
    {
        $result = $this->obj->add();
        $this->assertNull($result);
    }

    public function testRemove()
    {
        $result = $result = $this->obj->remove();
        $this->assertNull($result);
        $this->obj->add();
    }

    public function testAdministrator()
    {
        $role = get_role('administrator');
        $this->assertInstanceOf(\WP_Role::class, $role);

        $list = Constant::CAP_LIST;

        foreach ($list as $cap) {
            $has = $role->has_cap($cap);
            Logger::debug(['CAP' => $cap, 'HAS' => $has]);
            $this->assertTrue($has);
        }
    }
}