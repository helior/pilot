<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\Person\Dave.
 */

namespace Drupal\pilot\Plugin\Person;

use Drupal\pilot\Plugin\PersonBase;
use Drupal\pilot\Plugin\PersonInterface;


/**
 * @Person(
 *   id = "dave",
 *   name = "Dave",
 *   age = "42"
 * )
 */
class Dave extends PersonBase {

	public function greeting() {
		return t("Heya!! My name is @name and I am @age years old.", array('@name' => $this->getName(), '@age' => $this->getAge()));
	}
}
