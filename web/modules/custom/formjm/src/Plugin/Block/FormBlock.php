<?php
/**
 * @file
 * Contains \Drupal\Plugin\Block\FormBlock.
 */

namespace Drupal\formjm\Plugin\Block; // Revisar y colocar correctamente, puede dar errores.

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Form' block.
 *
 * @Block(
 *   id = "form_block",
 *   admin_label = @Translation("Form block"),
 *   category = @Translation("Custom Form block example")
 * )
 */
class FormBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('\Drupal\formjm\Form\JMForm');

    return $form;
   }
}