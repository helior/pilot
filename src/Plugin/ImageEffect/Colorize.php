<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\ImageEffect\Colorize.
 */

namespace Drupal\pilot\Plugin\ImageEffect;

use Drupal\Core\Image\ImageInterface;
use Drupal\image\ImageEffectBase;

/**
 * Colorize an image.
 *
 * @ImageEffect(
 *   id = "pilot_colorize",
 *   label = @Translation("Colorize"),
 *   description = @Translation("Test image effect that colorizes an image."),
 *   derivative = "\Drupal\pilot\Plugin\Derivative\ColorizeDerivative"
 * )
 */
class Colorize extends ImageEffectBase {
  /**
   * {@inheritdoc}
   */
  public function applyEffect(ImageInterface $image) {
    list($r,$g,$b) = $this->pluginDefinition['colors'];
    return imagefilter($image->getToolkit()->getResource(), IMG_FILTER_COLORIZE, $r, $g, $b);
  }

}
