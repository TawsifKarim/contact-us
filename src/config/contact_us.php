<?php

return [

    /**
     * -----------------------------------------------------
     * Form Validation Control
     * -----------------------------------------------------
     * Change the below parameters to control the validation
     * of contact us page
     */

    'validation_rules' => [
        'first_name' => 'required|min:3|max:35',
        'last_name'  => 'required|min:3|max:35',
        'email'      => 'required|email',
        'phone'      => 'nullable|max:17',
        'message'    => 'required|min:7|max:1200'
    ],

    /**
     * Validation Failure Messages are here. You can write any validation failure
     * messages you like
     */
    'validation_fail_messages' => [
        'first_name.required' => 'First Name Is Required',
    ],

    /**
     * This parameter controls the submit message after user submits a message
     */
    'submit_message' => 'Thank you for your message.',

    /**
     * if the parameter is set to null or '' then admins will not be
     * notified via email after user submits a message
     */
    'admin_contact_email' => 'tawsif.karim@gmail.com',

    /**
     * ----------------------------------------
     * Layout control
     * ----------------------------------------
     */
    'extends_layout' => 'layouts.app'
];