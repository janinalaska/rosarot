<?php
return function($kirby, $pages, $page) {

    $alert = null;

    if($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if(empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'issue' => get('issue'),
            'name'  => get('name'),
            'firstname' => get('firstname'),
            'email' => get('email'),
            'street' => get('street'),
            'nr'    => get('nr'),
            'plz'   => get('plz'),
            'city'  => get('city'),
            'comment' => get('comment'),
        ];

        $rules = [
            'name'  => ['required', 'minLength' => 3],
            'email' => ['required', 'email'],
            // 'text'  => ['required', 'minLength' => 3, 'maxLength' => 3000],
        ];

        $messages = [
            'name'  => 'Please enter a valid name',
            'email' => 'Please enter a valid email address',
            'text'  => 'Please enter a text between 3 and 3000 characters'
        ];

        // some of the data is invalid
        if($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'heft_bestellung.html',
                    'from'     => $data['email'],
                    'replyTo'  => $data['email'],
                    'to'       => 'janina.tanner@posteo.ch',
                    'subject'  => esc($data['firstname']) . ' möchte eine alte RosaRot Ausgabe bestellen',
                    'data'     => [
                      'issue'  => esc($data['issue']),
                      'lname'  => esc($data['name']),
                      'fname'  => esc($data['firstname']),
                      'street'  => esc($data['street']),
                      'nr'  => esc($data['nr']),
                      'plz'  => esc($data['plz']),
                      'city'  => esc($data['city']),
                      'email' => $data['email'],
                      'comment'  => esc($data['comment']),
                    ]
                ]);

            } catch (Exception $error) {
                if(option('debug')):
                    $alert['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
                else:
                    $alert['error'] = 'The form could not be sent!';
                endif;
            }

            // no exception occurred, let's send a success message
            if (empty($alert) === true) {
                $success = 'Your message has been sent, thank you. We will get back to you soon!';
                $data = [];
            }
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};
