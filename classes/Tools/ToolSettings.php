<?php
// Copyright (c) 2016 Interfacelab LLC. All rights reserved.
//
// Released under the GPLv3 license
// http://www.gnu.org/licenses/gpl-3.0.html
//
// Uses code from:
// Persist Admin Notices Dismissal
// by Agbonghama Collins and Andy Fragen
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

namespace ILAB\MediaCloud\Tools;

use function ILAB\MediaCloud\Utilities\arrayPath;
use ILAB\MediaCloud\Utilities\Environment;
use ILAB\MediaCloud\Utilities\Logging\Logger;


if (!defined( 'ABSPATH')) { header( 'Location: /'); die; }

/**
 * Loads options from the database on-demand
 */
abstract class ToolSettings {
	/**
	 * Cache of setting values
	 * @var mixed[]
	 */
	protected $settings = [];

	/**
	 * Map of property names to setting names
	 * @var string[]
	 */
	protected $settingsMap = [];

	//region Static

	/** @var array Array of settings instances */
	protected static $instances = [];

	/**
	 * Returns the singleton instance of the settings
	 * @return self
	 */
	public static function instance() {
		if (isset(static::$instances[static::class])) {
			return static::$instances[static::class];
		}

		$instance = new static();
		static::$instances[static::class] = $instance;

		return $instance;
	}

	//endregion


	/**
	 * @param $name
	 *
	 * @return array|false|mixed|string|null
	 */
	public function __get($name) {
		if (isset($this->settings[$name])) {
			return $this->settings[$name];
		}

		list($setting, $envSetting, $default) = $this->settingsMap[$name];

		if (empty($setting) && empty($envSetting)) {
			return null;
		}

		$this->settings[$name] = $val = Environment::Option($setting, $envSetting, $default);
		Logger::info("SETTINGS $name = $val");
		return $val;
	}

	/**
	 * @param $name
	 * @param $value
	 */
	public function __set($name, $value) {
		if (isset($this->settingsMap[$name])) {
			$setting = $this->settingsMap[$name][0];
			Environment::UpdateOption($setting, $value);

			$this->settings[$name] = $value;
		}
	}

	/**
	 * @param $name
	 *
	 * @return bool
	 */
	public function __isset($name) {
		if (!isset($this->settings[$name])) {
			return isset($this->settingsMap[$name]);
		}

		return true;
	}
}