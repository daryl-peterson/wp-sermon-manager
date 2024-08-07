<?php
/**
 * App test.
 *
 * @author      Daryl Peterson <@gmail.com>
 * @copyright   Copyright (c) 2024, Daryl Peterson
 * @license     https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @since       1.0.0
 */

namespace DRPPSM\Tests;

use DRPPSM\AdminPage;
use DRPPSM\App;
use DRPPSM\BibleLoad;
use DRPPSM\Exceptions\NotfoundException;
use DRPPSM\Interfaces\NoticeInt;
use DRPPSM\Interfaces\PluginInt;
use DRPPSM\Logging\Logger;
use stdClass;

use function DRPPSM\app;
use function DRPPSM\app_get;

/**
 * App test.
 *
 * @author      Daryl Peterson <@gmail.com>
 * @copyright   Copyright (c) 2024, Daryl Peterson
 * @license     https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @since       1.0.0
 */
class AppTest extends BaseTest {

	public App $obj;

	public function setup(): void {
		$this->obj = App::init();
	}

	public function testGetInstance() {
		$this->assertNotNull( $this->obj );
		$result = $this->app->get( NoticeInt::class );
		$this->assertNotNull( $result );

		$obj = $this->app->get( BibleLoad::class );
		Logger::debug( $obj );
		$this->assertInstanceOf( BibleLoad::class, $obj );
	}

	public function test_app() {
		$obj = app();
		$this->assertInstanceOf( App::class, $obj );

		$this->expectException( NotfoundException::class );
		app_get( 'blah' );
	}

	public function test_plugin() {
		$plugin = $this->app->plugin();
		$this->assertInstanceOf( PluginInt::class, $plugin );
	}

	public function test_get_admin_page() {
		$result = $this->obj->getAdminPage();
		$this->assertInstanceOf( AdminPage::class, $result );
	}

	public function test_has() {
		$result = $this->app->has( NoticeInt::class );
		$this->assertTrue( $result );

		$result = $this->app->has( 'blah' );
		$this->assertFalse( $result );
	}

	public function test_get_exception() {
		$this->expectException( NotfoundException::class );
		$result = $this->app->get( 'blah' );
	}

	public function test_set() {

		$obj = new stdClass();
		$this->app->set( 'test', $obj );

		$result = $this->app->has( 'test' );
		$this->assertTrue( $result );
	}
}
