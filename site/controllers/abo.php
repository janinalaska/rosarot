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
            'name'  => get('name'),
            'firstname' => get('firstname'),
            'email' => get('email'),
            'type'  => get('type'),
            'street' => get('street'),
            'nr'    => get('nr'),
            'plz'   => get('plz'),
            'city'  => get('city'),
            'gname'  => get('gname'),
            'gfirstname' => get('gfirstname'),
            'gstreet' => get('gstreet'),
            'gnr'    => get('gnr'),
            'gplz'   => get('gplz'),
            'gcity'  => get('gcity'),
            'gift'  => get('gift'),
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
                    'template' => 'abo_bestellung.html',
                    'from'     => $data['email'],
                    'replyTo'  => $data['email'],
                    'to'       => 'rosarotinfo@gmail.com',
                    'subject'  => esc($data['firstname']) . ' möchte ein neues Abo abschliessen',
                    'data'     => [
                        'type'   => $data['type'],
                        'lname'  => esc($data['name']),
                        'fname'  => esc($data['firstname']),
                        'street'  => esc($data['street']),
                        'nr'  => esc($data['nr']),
                        'plz'  => esc($data['plz']),
                        'city'  => esc($data['city']),
                        'email' => $data['email'],
                        'glname' => esc($data['gname']),
                        'gfname' => esc($data['gfirstname']),
                        'gstreet' => esc($data['gstreet']),
                        'gnr' => esc($data['gnr']),
                        'gplz' => esc($data['gplz']),
                        'gcity' => esc($data['gcity']),
                        'gift'  => $data['gift'],
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
                $success = 'Wir freuen uns, das Heft bald zu verschicken. Beim Versand des ersten Heftes wirst du die Rechnung für das Abo erhalten. Herzlichen Dank für dein Interesse an der RosaRot.';
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
