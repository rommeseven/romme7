<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Das Feld :attribute muss akzeptiert sein.',
    'active_url'           => 'Das Feld :attribute ist kein gültiger Link.',
    'after'                => 'Das Feld :attribute muss ein Datum vor :date sein.',
    'after_or_equal'       => 'Das Feld :attribute muss ein Datum nach oder gleich wie :date sein.',
    'alpha'                => 'Das Feld :attribute darf nur aus Buchstaben bestehen.',
    'alpha_dash'           => 'Das Feld :attribute darf nur aus Buchstaben, Zahlen und Bindestrichen bestehen.',
    'alpha_num'            => 'Das Feld :attribute darf nur aus Buchstaben und Zahlen bestehen.',
    'array'                => 'Das Feld :attribute muss ein Array sein.',
    'before'               => 'Das Feld :attribute muss ein Datum vor :date sein.',
    'before_or_equal'      => 'Das Feld :attribute muss ein Datum vor oder gleich wie :date sein.',
    'between'              => [
        'numeric' => 'Das Feld :attribute muss zwischen :min und :max sein.',
        'file'    => 'Das Feld :attribute muss zwischen :min und :max Kilobytes haben.',
        'string'  => 'Das Feld :attribute muss zwischen :min und :max Zeichen haben.',
        'array'   => 'Das Feld :attribute muss zwischen :min und :max Elemente haben.',
    ],
    'boolean'              => 'Das Feld :attribute muss richtig oder falsch sein.',
    'confirmed'            => 'Das Feld :attribute stimmt mit der Bestätigung nicht überein.',
    'date'                 => 'Das Feld :attribute ist kein gültiges Datum.',
    'date_format'          => 'Das Feld :attribute stimmt nicht mit dem Format :format überein.',
    'different'            => 'Das Feld :attribute und :other müssen unterschiedlich sein.',
    'digits'               => 'Das Feld :attribute muss :digits Stellen haben.',
    'digits_between'       => 'Das Feld :attribute muss zwischen :min und :max Stellen haben.',
    'dimensions'           => 'Das Feld :attribute hat eine ungültige Bildgröße.',
    'distinct'             => 'Das Feld :attribute hat einen doppelten Wert.',
    'email'                => 'Das Feld :attribute muss eine gültige E-Mail Adresse sein.',
    'exists'               => 'Das ausgewählte Feld :attribute ist ungültig.',
    'file'                 => 'Das Feld :attribute muss eine Datei sein.',
    'filled'               => 'Das Feld :attribute wird benötigt.',
    'image'                => 'Das Feld :attribute muss ein Bild sein.',
    'in'                   => 'Das ausgewählte Feld :attribute ist ungültig.',
    'in_array'             => 'Das Feld :attribute existiert nicht in :other.',
    'integer'              => 'Das Feld :attribute muss eine ganze Zahl sein.',
    'ip'                   => 'Das Feld :attribute muss eine gültige IP Adresse sein.',
    'json'                 => 'Das Feld :attribute muss ein gültiger JSON string sein.',
    'max'                  => [
        'numeric' => 'Das Feld :attribute darf nicht größer sein als :max.',
        'file'    => 'Das Feld :attribute darf nicht größer sein als :max Kilobytes.',
        'string'  => 'Das Feld :attribute darf nicht länger als :max Zeichen sein.',
        'array'   => 'Das Feld :attribute darf nicht mehr als :max Elemente sein.',
    ],
    'mimes'                => 'Das Feld :attribute muss eine Datei des Typs: :values sein.',
    'mimetypes'            => 'Das Feld :attribute muss eine Datei des Typs: :values sein.',
    'min'                  => [
        'numeric' => 'Das Feld :attribute muss mindestens :min sein.',
        'file'    => 'Das Feld :attribute muss mindestens :min Kilobytes haben.',
        'string'  => 'Das Feld :attribute muss mindestens :min Zeichen haben.',
        'array'   => 'Das Feld :attribute muss mindestens :min Elemente haben.',
    ],
    'not_in'               => 'Das ausgewählte Feld :attribute ist ungültig.',
    'numeric'              => 'Das Feld :attribute muss eine Nummer sein.',
    'present'              => 'Das Feld :attribute muss vorhanden sein.',
    'regex'                => 'Das Format des Feldes :attribute ist ungültig.',
    'required'             => 'Das Feld :attribute ist erforderlich.',
    'required_if'          => 'Das Feld :attribute ist erforderlich, wenn :other ist :value.',
    'required_unless'      => 'Das Feld :attribute ist erforderlich, wenn :other ist in :values.',
    'required_with'        => 'Das Feld :attribute ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all'    => 'Das Feld :attribute ist erforderlich, wenn alle Werte :values vorhanden sind.',
    'required_without'     => 'Das Feld :attribute ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das Feld :attribute ist erforderlich, wenn keine Werte :values vorhanden sind.',
    'same'                 => 'Das Feld :attribute und :other müssen gleich sein.',
    'size'                 => [
        'numeric' => 'Das Feld :attribute muss :size sein.',
        'file'    => 'Das Feld :attribute muss :size Kilobytes haben.',
        'string'  => 'Das Feld :attribute muss :size Charaktere haben.',
        'array'   => 'Das Feld :attribute muss :size Elemente beinhalten.',
    ],
    'string'               => 'Das Feld :attribute muss eine Zeichenkette sein.',
    'timezone'             => 'Das Feld :attribute muss eine gültige Zeitzone sein.',
    'unique'               => 'Das Feld :attribute ist schon vorhanden!',
    'uploaded'             => 'Das Feld :attribute scheiterte beim Hochladen.',
    'url'                  => 'Das Feldformat :attribute ist ungültig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
