<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\Derivative\ColorizeDerivative.
 */

namespace Drupal\pilot\Plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DerivativeBase;

/**
 * Provides colorize image effect plugin definitions for all supported colors.
 */
class ColorizeDerivative extends DerivativeBase {

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {
  	foreach (pilot_colorize_colors() as $name => $info) {
  		$this->derivatives[$name] = $base_plugin_definition;
  		$this->derivatives[$name]['label'] = t('Colorize to @color', array('@color' => $info['title']));
  		$this->derivatives[$name]['colors'] = $info['colors'];

  		// Normally I probably wouldn't have to do this, but I think Core is borked.
  		$this->derivatives[$name]['id'] = 'pilot_colorize:' . $name;
  	}

    return $this->derivatives;
  }

}
