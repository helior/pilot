<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\Person\Bob.
 */

namespace Drupal\pilot\Plugin\Person;

use Drupal\pilot\Plugin\PersonBase;
use Drupal\pilot\Plugin\PersonInterface;


/**
 * @Person(
 *   id = "bob",
 *   name = "Bob",
 *   age = "26"
 * )
 */
class Bob extends PersonBase {}
