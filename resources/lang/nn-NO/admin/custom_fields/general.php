<?php

return [
    'custom_fields'		        => 'Egendefinerte Felt',
    'manage'                    => 'Administrer',
    'field'		                => 'Felt',
    'about_fieldsets_title'		=> 'Om Feltsett',
    'about_fieldsets_text'		=> 'Feltsett lar deg opprette grupper av egendefinerte felt som kan gjenbrukes til bestemte modelltyper.',
    'custom_format'             => 'Tilpasset Regex-format...',
    'encrypt_field'      	        => 'Kryptere verdien av dette feltet i databasen',
    'encrypt_field_help'      => 'ADVARSEL: Ved å kryptere et felt gjør du at det ikke kan søkes på.',
    'encrypted'      	        => 'Kryptert',
    'fieldset'      	        => 'Feltsett',
    'qty_fields'      	      => 'Antall Felt',
    'fieldsets'      	        => 'Feltsett',
    'fieldset_name'           => 'Feltsett Navn',
    'field_name'              => 'Felt Navn',
    'field_values'            => 'Felt verdier',
    'field_values_help'       => 'Legge til alternativer, ett per linje. Tomme linjer utenom den første vil bli ignorerert.',
    'field_element'           => 'Skjema Element',
    'field_element_short'     => 'Element',
    'field_format'            => 'Format',
    'field_custom_format'     => 'Egendefinert Format',
    'field_custom_format_help'     => 'Dette feltet lar deg bruke et regex-uttrykk for validering. Det skal begynne med "regex:" - for eksempel å validere at en egendefinert feltverdi inneholder en gyldig IMEI (15 numeriske siffer), vil du bruke <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Obligatorisk',
    'req'   		              => 'Obl.',
    'used_by_models'   		    => 'Brukes av modeller',
    'order'   		            => 'Bestill',
    'create_fieldset'         => 'Nytt Feltsett',
    'update_fieldset'         => 'Oppdater Feltsett',
    'fieldset_does_not_exist'   => 'Feltsett :id eksisterer ikke',
    'fieldset_updated'         => 'Feltsett oppdatert',
    'create_fieldset_title' => 'Opprett et nytt feltsett',
    'create_field'            => 'Nytt Egendefinert Felt',
    'create_field_title' => 'Opprett nytt egendefinert felt',
    'value_encrypted'      	        => 'Verdien i dette feltet er kryptert i databasen. Bare administratorer kan se hva som står i dette feltet',
    'show_in_email'     => 'Inkluder verdien i dette feltet i utsjekkseposter sendt til brukeren? Krypterte felter kan ikke inkluderes i eposter',
    'show_in_email_short' => 'Inkludere i epost',
    'help_text' => 'Hjelpetekst',
    'help_text_description' => 'Dette er en valgfri tekst som vises under feltet når man redigerer et element, ment for å gi kontekst til feltets innhold.',
    'about_custom_fields_title' => 'Om egendefinerte felt',
    'about_custom_fields_text' => 'Egendefinerte felt lar deg legge til vilkårlige attributter til eiendeler.',
    'add_field_to_fieldset' => 'Legg feltet inn i feltsett',
    'make_optional' => 'Påkrevd - klikk for å gjøre valgfritt',
    'make_required' => 'Valgfritt - klikk for å gjøre påkrevd',
    'reorder' => 'Endre rekkefølge',
    'db_field' => 'DB-felt',
    'db_convert_warning' => 'ADVARSEL: Dette feltet er i tabellen for egendefinerte felt som <code>:db_column</code>, men burde være <code>:expected</code>.',
    'is_unique' => 'Denne verdien må være unik for alle ressurser',
    'unique' => 'Unik',
    'display_in_user_view' => 'Tillat den utsjekkede brukeren å se disse verdiene i deres Vis tildelte ressurs-side',
    'display_in_user_view_table' => 'Synlig for bruker',
    'auto_add_to_fieldsets' => 'Legg denne til automatisk i hvert nye feltsett',
    'add_to_preexisting_fieldsets' => 'Legg til i alle eksisterende gruppene',
    'show_in_listview' => 'Vis i listevisninger som standard. Autoriserte brukere kan fortsatt vise/skjule via kolonnevelgeren',
    'show_in_listview_short' => 'Vis i lister',
    'show_in_requestable_list_short' => 'Vis i liste over ressurser som kan være tilgjengelig på forespørsel',
    'show_in_requestable_list' => 'Vis verdi i listen over ressurser som kan være tilgjengelig på forspørsel. Krypterte felter vises ikke',
    'encrypted_options' => 'Feltet er kryptert, så noen visningsalternativer er ikke tilgjengelig.',
    'display_checkin' => 'Display in checkin forms',
    'display_checkout' => 'Display in checkout forms',

];
