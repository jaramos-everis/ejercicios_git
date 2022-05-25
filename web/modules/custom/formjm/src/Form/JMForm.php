<?php

/**
 * @file
 * A form to collect data form users estrellalevanteJM.
 */

namespace Drupal\formjm\Form; // Revisar y colocar correctamente, puede dar errores.

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class JMForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_jm';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      // '#title' => t('Name'),
      '#size' => 50,
      '#attributes' => [
        'placeholder' => $this->t('Name'),
      ],
    ];
    $form['surnames'] = [
      '#type' => 'textfield',
      '#size' => 50,
      '#attributes' => [
        'placeholder' => $this->t('Surnames'),
      ],
    ];

    $form['email'] = [
      '#type' => 'email',
      '#required' => TRUE,
      '#size' => 50,
      '#attributes' => [
        'placeholder' => $this->t('Email'),
      ],
    ];

    $form['phone_number'] = [
      '#type' => 'number',
      '#size' => 100,
      '#attributes' => [
        'placeholder' => $this->t('Phone number'),
      ],
    ];

    $country_manager = \Drupal::service('country_manager');
    $list = $country_manager->getList();
    $countries = [];
    foreach ($list as $key => $value) {
      $val = $value->__toString();
      $countries[$key] = $val;
    } 
    // $countries - will contain key-valued paid of country code and name.

    $form['country'] = [
      '#type' => 'select',
      '#required' => TRUE,
      '#options' => $countries,
      '#empty_option' => t('Country'),
    ];

    $form['subject'] = [
      '#type' => 'select',
      '#required' => TRUE,
      '#options' => [
        '1' => $this->t('Marking y publicidad'),
        '2' => $this->t('Patrocinios'),
        '3' => $this->t('Reclamaciones y control de calidad'),
        '4' => $this->t('Visitas a fábrica'),
        '5' => $this->t('Otros'),

      ],
      '#empty_option' => t('Asunto'),
    ];

    $form['message'] = [
      '#type' => 'textarea',
      '#rows' => 4,
      '#cols' => 5,
      '#required' => TRUE,
      '#attributes' => [
        'placeholder' => $this->t('Message'),
      ],
    ];

    $form['data_protection'] = [
      '#type' => 'radio',
      '#required' => TRUE,
      '#title' => t('He leído y estoy de acuerdo con la información sobre protección de datos personales de Estrella Levante Fábrica de Cervezas, S.A.U'),
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => t('SUBMIT'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

    $value = $form_state->getValue('name');
    if (strlen(trim($value)) < 3) {
      $form_state->setErrorByName(
        'name',
        $this->t(
          'The name @name is too short. Please enter a full name.',
          ['@name' => $value],
        )
      );
    }

    $value = $form_state->getValue('email');
    // Uso del servicio email.validator.
    if (!(\Drupal::service('email.validator')->isValid($value))) {
      $form_state->setErrorByName(
        'email',
        $this->t('It appears that %mail is not a valid email. Please try
          again', ['%mail' => $value])
      );
    }

    $value = $form_state->getValue('phone_number');
    if (!preg_match("/^[6-7]{1}[0-9]{8}$/", trim($value))) {
      $form_state->setErrorByName(
        'phone_number',
        $this->t(
          'The phone_number @phone_number is invalid. Please enter a correct phone_number.',
          ['@phone_number' => $value],
        )
      );
    }
  }


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus($this->t('Your name is @name', ['@name' => $form_state->getValue('name')]));
  }
}
