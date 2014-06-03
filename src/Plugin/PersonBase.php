<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\PersonBase.
 */

namespace Drupal\pilot\Plugin;

use Drupal\Core\Plugin\PluginBase;
use Drupal\pilot\Plugin\PersonInterface;

class PersonBase extends PluginBase implements PersonInterface {

	public function getName() {
		return $this->pluginDefinition['name'];
	}

	public function getAge() {
		return $this->pluginDefinition['age'];
	}

	public function greeting() {
		return t("Hello, my name is @name and I am @age years old.", array('@name' => $this->getName(), '@age' => $this->getAge()));
	}
}
