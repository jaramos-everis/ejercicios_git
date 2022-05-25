<?php

namespace Drupal\customform\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an contact form.
 */
class CustomFormJL extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'contact_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      '#attributes' => [ 'placeholder' => $this->t('Name'), ],
      '#required' => True,
    ];
    $form['surnames'] = [
      '#type' => 'textfield',
      '#attributes' => [ 'placeholder' => $this->t('Surnames'), ],
      '#required' => True,
    ];
    $form['email'] = [
      '#type' => 'email',
      '#attributes' => [ 'placeholder' => 'Email', ],
      '#required' => True,
    ];
    $form['phone_number'] = [
      '#type' => 'tel',
      '#attributes' => [ 'placeholder' => $this->t('Teléfono'), ],
      '#required' => True,
    ];

    $list_countries = \Drupal::service('country_manager');
    $countries = $list_countries->getList();
    $list = [];
    foreach ($countries as $key => $value) {
        $val = $value->__toString();
        $list[$key] = $val; 
    }
    $form['country'] = [
      '#type' => 'select',
      '#required' => True,
      '#options' => $list,
      '#empty_option' => $this->t('Country'),
    ];

    $form['subject'] = [
      '#type' => 'select',
      '#required' => True,
      '#options' => [
        "1" => $this->t("Maketing y Publicidad"),
        "2" => $this->t("Patrocinios"),
        "3" => $this->t("Reclamaciones y control de calidad"),
        "4" => $this->t("Visitas a fábrica"),
        "5" => $this->t("Otros"),
      ],
      '#empty_option' => $this->t('Subject'),
    ];
    $form['message'] = [
      '#type' => 'textarea',
      '#attributes' => [ 'placeholder' => $this->t('Message'), ],
      '#required' => True,
    ];
    $form['data_protection'] = [
      '#type' => 'radio',
      '#title' => $this->t('He leído y estoy de acuerdo con la información sobre protección de datos personales de Estrella Levante Fábrica de Cervezas, S.A.U'),
      '#required' => True,
    ];
    
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Enviar'),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus($this->t('Your phone number is @number, 
    your name @name, 
    your surnames @surnames, 
    your country @country, 
    your message @message', 
    [
      '@number' => $form_state->getValue('phone_number'),
      '@name' => $form_state->getValue('name'),
      '@surnames' => $form_state->getValue('surnames'),
      '@country' => $form_state->getValue('country'),
      '@message' => $form_state->getValue('message'),
    ]));
  }
}