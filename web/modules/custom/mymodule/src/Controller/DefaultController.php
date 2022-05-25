<?php

/**
 * @file
 * Contains Drupal\mymodule\Controller\DefaultController.
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\OpenModalDialogCommand;
use Drupal\Core\Url;
use Drupal\Core\Link;


/**
 * Class DefaultController.
 *
 * @package Drupal\mymodule\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    $attributes = array(
      'attributes' => array(
        'class' => array('use-ajax'),
        'data-accepts' => 'application/vnd.drupal-dialog',
      ),
    );
    // Let's create the link.
    $url = Url::fromRoute('mymodule.modal', [], $attributes);
    // $internal_link = \Drupal::l(t('Open a Modal'), $url);
    $internal_link = Link::fromTextAndUrl(t('Open a Modal'), $url)->toString();
    return [
        '#type' => 'markup',
        '#markup' => $internal_link,
    ];
  }

  /**
   * Displays modal.
   */
  public function modal() {
    $content['#attached']['library'][] = 'core/drupal.dialog.ajax';
    $response = new AjaxResponse();
    $title = $this->t('Title of Modal');
    $content['#markup'] = 'Content of Modal';
    $response->addCommand(new OpenModalDialogCommand($title, $content));
    return $response;
  }
}