<?php

namespace Drupal\customform\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "form_block",
 *   admin_label = @Translation("CustomFormBlockJL"),
 *   category = @Translation("Custom"),
 * )
 */

class MyCustomFormBlock extends BlockBase{
    /**
     * {@inheritdoc}
     */
    public function build() {
        $form = \Drupal::formBuilder()->getForm('\Drupal\customform\Form\CustomFormJL');
        return $form;
    }
}