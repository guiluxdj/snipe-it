<?php

return [

    'update' => [
        'error'                 => 'Atjaunināšanas laikā radās kļūda.',
        'success'               => 'Iestatījumi tika veiksmīgi atjaunināti.',
    ],
    'backup' => [
        'delete_confirm'        => 'Vai tiešām vēlaties izdzēst šo dublējuma failu? Šo darbību nevar atsaukt.',
        'file_deleted'          => 'Dublējuma fails tika veiksmīgi izdzēsts.',
        'generated'             => 'Veiksmīgi izveidots jauns dublējuma fails.',
        'file_not_found'        => 'Šo dublējuma failu nevarēja atrast serverī.',
        'restore_warning'       => 'Yes, restore it. I acknowledge that this will overwrite any existing data currently in the database. This will also log out all of your existing users (including you).',
        'restore_confirm'       => 'Are you sure you wish to restore your database from :filename?'
    ],
    'restore' => [
        'success'               => 'Your system backup has been restored. Please log in again.'
    ],
    'purge' => [
        'error'     => 'Iztīrīšanas laikā radās kļūda.',
        'validation_failed'     => 'Jūsu tīrīšanas apstiprinājums nav pareizs. Lūdzu, ierakstiet apstiprinājuma lodziņā vārdu "DELETE".',
        'success'               => 'Izdzēstie ieraksti veiksmīgi iztīrīti.',
    ],
    'mail' => [
        'sending' => 'Sending Test Email...',
        'success' => 'Mail sent!',
        'error' => 'Mail could not be sent.',
        'additional' => 'No additional error message provided. Check your mail settings and your app log.'
    ],
    'ldap' => [
        'testing' => 'Testing LDAP Connection, Binding & Query ...',
        '500' => '500 Server Error. Please check your server logs for more information.',
        'error' => 'Something went wrong :(',
        'sync_success' => 'A sample of 10 users returned from the LDAP server based on your settings:',
        'testing_authentication' => 'Testing LDAP Authentication...',
        'authentication_success' => 'User authenticated against LDAP successfully!'
    ],
    'webhook' => [
        'sending' => 'Sending :app test message...',
        'success' => 'Your :webhook_name Integration works!',
        'success_pt1' => 'Success! Check the ',
        'success_pt2' => ' channel for your test message, and be sure to click SAVE below to store your settings.',
        '500' => '500 Server Error.',
        'error' => 'Something went wrong. :app responded with: :error_message',
        'error_redirect' => 'ERROR: 301/302 :endpoint returns a redirect. For security reasons, we don’t follow redirects. Please use the actual endpoint.',
        'error_misc' => 'Something went wrong. :( ',
    ]
];
