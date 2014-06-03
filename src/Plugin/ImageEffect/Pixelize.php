<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\ImageEffect\Pixelize.
 */

namespace Drupal\pilot\Plugin\ImageEffect;

use Drupal\Core\Image\ImageInterface;
use Drupal\image\ConfigurableImageEffectInterface;
use Drupal\image\ImageEffectBase;

/**
 * Pixelize an image.
 *
 * @ImageEffect(
 *   id = "pilot_pixelize",
 *   label = @Translation("Pixelize"),
 *   description = @Translation("Test image effect that pixelizes an image.")
 * )
 */
class Pixelize extends ImageEffectBase implements ConfigurableImageEffectInterface {

  /**
   * {@inheritdoc}
   */
  public function transformDimensions(array &$dimensions) {
  }

  /**
   * {@inheritdoc}
   */
  public function applyEffect(ImageInterface $image) {
    return imagefilter($image->getResource(), IMG_FILTER_PIXELATE, $this->configuration['size'], $this->configuration['advanced']);
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array(
      'size' => 50,
      'advanced' => 0,
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getForm() {

    $form['size'] = array(
      '#type' => 'number',
      '#title' => t('Pixel size'),
      '#default_value' => $this->configuration['size'],
      '#required' => TRUE,
      '#min' => 2,
    );

    $form['advanced'] = array(
      '#type' => 'checkbox',
      '#title' => t('Use advanced pixelization effect'),
      '#default_value' => $this->configuration['advanced'],
    );

    return $form;
  }

}
