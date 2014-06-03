<?php

/**
 * @file
 * Contains \Drupal\pilot\Form\BasicForm.
 */

namespace Drupal\pilot\Form;

use Drupal\Core\Form\ConfigFormBase;

class BasicForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'pilot_basic_form_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {
    $config = $this->configFactory->get('pilot.basic');

    $form['one'] = array(
      '#type' => 'textfield',
      '#title' => t('One'),
      '#default_value' => $config->get('one'),
    );
    $form['url'] = array(
      '#type' => 'url',
      '#title' => t('URL'),
      '#default_value' => $config->get('url'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
    $this->configFactory->get('pilot.basic')
      ->set('one', $form_state['values']['one'])
      ->set('url', $form_state['values']['url'])
      ->save();

    parent::submitForm($form, $form_state);
  }
}
