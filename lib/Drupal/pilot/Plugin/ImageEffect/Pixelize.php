<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\ImageEffect\Pixelize.
 */

namespace Drupal\pilot\Plugin\ImageEffect;

use Drupal\image\Plugin\ImageEffect\ResizeImageEffect;

/**
 * Resizes an image resource to a single pixel.
 *
 * @ImageEffect(
 *   id = "pilot_pixelize",
 *   label = @Translation("Pixelize"),
 *   description = @Translation("Test image effect that samples down an image to a single pixel.")
 * )
 */
class Pixelize extends ResizeImageEffect {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array(
      'width' => 1,
      'height' => 1,
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getForm() {
    $form = parent::getForm();
    $form['width']['#disabled'] = true;
    $form['height']['#disabled'] = true;
    return $form;
  }

}
