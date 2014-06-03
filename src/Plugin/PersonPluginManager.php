<?php

/**
 * @file
 * Contains \Drupal\pilot\Plugin\PersonPluginManager.
 */

namespace Drupal\pilot\Plugin;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Language\LanguageManager;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Plugin\Discovery\AnnotatedClassDiscovery;
use Drupal\Core\Plugin\Discovery\ContainerDerivativeDiscoveryDecorator;
use Drupal\Core\Plugin\Factory\ContainerFactory;

/**
 * Manages Person plugins.
 */
class PersonPluginManager extends DefaultPluginManager {

  /**
   * {@inheritdoc}
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, LanguageManager $language_manager, ModuleHandlerInterface $module_handler) {
    $this->discovery = new AnnotatedClassDiscovery('Plugin/Person', $namespaces, 'Drupal\pilot\Annotation\Person');
    $this->discovery = new ContainerDerivativeDiscoveryDecorator($this->discovery);
    $this->factory = new ContainerFactory($this);

    $this->alterInfo($module_handler, 'pilot_person_info');
    $this->setCacheBackend($cache_backend, $language_manager, 'pilot_person_plugins');
  }

}
