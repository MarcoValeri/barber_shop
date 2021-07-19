<?php
/**
 * @file
 * Contains \Drupal\booking\Form\BookingForm
 */
namespace Drupal\booking\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides
 */
class BookingForm extends FormBase {

    /**
     * (@inheritdoc)
     */
    public function getFormId() {
        return 'booking_form'; // Set form id as 'booking_form'
    }

    /**
     * (@inheritdoc)
     */
    public function buildForm(array $form, FormStateInterface $form_state) {

        $node = \Drupal::routeMatch()->getParameter('node');
        if ($node) $nid = $node->nid->value;

        $form['name'] = array(
            '#title' => t('Name'),
            '#type' => 'textfield',
            '#size' => 20,
            '#required' => true,
        );

        $form['surname'] = array(
            '#title' => t('Surname'),
            '#type' => 'textfield',
            '#size' => 20,
            '#required' => true,
        );

        $form['phone'] = array(
            '#title' => t('Phone'),
            '#type' => 'textfield',
            '#size' => 20,
            '#required' => true,
        );

        $form['date'] = array(
            '#title' => t('Date'),
            '#type' => 'date',
            '#required' => true,
        );

        $form['email'] = array(
            '#title' => t('Email Address'),
            '#type' => 'textfield',
            '#size' => 25,
            '#description' => t("We'll send the booking record to the email address provided"),
            '#required' => true,
        );

        $form['textarea'] =array(
            '#title' => t('Message'),
            '#type' => 'textarea',
            '#size' => 500,
            '#description' => t("Leave a message"),
            '#required' => false,
        );

        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => t('Book Now'),
        );

        $FORM['nid'] = array(
            '#type' => 'hidden',
            '#value' => $nid,
        );

        return $form;

    }

    /**
     * (@inheritdoc)
     */
    public function validateForm(array &$form, FormStateInterface $form_state) {
        $value = $form_state->getValue('email');
        if ($value == !\Drupal::service('email.validator')->isValid($value)) {
            $form_state->setErrorByName('email', t('The email address %mail is not valid.', array('%mail' => $value)));
        }
    }

    /**
     * (@inheritdoc)
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        $messenger_service = \Drupal::service('messenger');
        $messenger_service->addMessage(t('The form is working.'));
    }

}