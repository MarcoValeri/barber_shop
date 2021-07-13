<?php
/**
 * @file
 * Contains \Drupal\rsvplist\Form\RSVPForm
 */
namespace Drupal\rsvplist\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides an RSVP Email form.
 */
class RSVPForm extends FormBase {

    /**
     * (@inheritdoc)
     */
    public function getFormId() {
        return 'rsvplist_email_form'; // Set form id as 'rsvplist_email_form'
    }

    /**
     * (@inheritdoc)
     */
    public function buildForm(array $form, FormStateInterface $form_state) {

        $node = \Drupal::routeMatch()->getParameter('node');
        if ($node) $nid = $node->nid->value;

        $form['email'] = array(
            '#title' => t('Email Address'),
            '#type' => 'textfield',
            '#size' => 25,
            '#description' => t("We'll send updates to the email address your provide."),
            '#required' => TRUE,
        );

        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => t('RSVP'),
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
        
        // Save the data into the database
        $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
        \Drupal::database()->insert('rsvplist')
            ->fields(array(
                'mail' => $form_state->getValue('email'),
                'nid' => $form_state->getValue('nid'),
                'uid' => $user->id(),
                'created' => time(),
            ))
            ->execute();

        // Print out a message after sumbission
        $messenger_service = \Drupal::service('messenger');
        $messenger_service->addMessage(t('The form is working.'));
    }

}