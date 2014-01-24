<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\Derivative\ColorizeDerivative.
 */

namespace Drupal\pilot\Plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DerivativeBase;
use Drupal\Core\Plugin\Discovery\ContainerDerivativeInterface;

/**
 * Provides colorize image effect plugin definitions for all supported colors.
 */
class ColorizeDerivative extends DerivativeBase {

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions(array $base_plugin_definition) {
  	foreach (pilot_colorize_colors() as $name => $info) {
  		$this->derivatives[$name] = $base_plugin_definition;
  		$this->derivatives[$name]['label'] = t('Colorize to @color', array('@color' => $info['title']));
  		$this->derivatives[$name]['colors'] = $info['colors'];
  	}

    return $this->derivatives;
  }

}
