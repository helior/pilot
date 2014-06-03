<?php

/**
 * @file
 * Contains \Drupal\pilot\Annotation\Person.
 */

namespace Drupal\pilot\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Person annotation object.
 *
 * @Annotation
 */
class Person extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The name of the person.
   *
   * @var string
   */
  public $name = 'John Doe';

  /**
   * The age of the person.
   *
   * @var string
   */
  public $age = '100';
}
