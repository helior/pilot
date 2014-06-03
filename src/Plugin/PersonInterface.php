<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\PersonInterface.
 */

namespace Drupal\pilot\Plugin;

/**
 * Defines an interface for Person plugin implementations.
 */
interface PersonInterface {

  public function getName();

  public function getAge();

  public function greeting();

}
