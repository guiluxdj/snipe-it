<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => '"Active Directory" domenas',
    'ad_domain_help'			=> 'Tai kartais sutampa su jūsų el. Pašto domenu, bet ne visada.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'CC El. paštas',
    'admin_cc_email_help'       => 'Jeigu Jūs norite siųsti išduoto/neišduoto turto sąrašo kopiją, įveskite čia el. pašto adresą. Kitu atveju palikite laukelį tuščią.',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => 'Tai yra "Active Directory" serveris',
    'alerts'                	=> 'Įspėjimas',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Siūsti įspėjimus',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Perspėjimai įjungti',
    'alert_interval'			=> 'Galiojanti įspėjimų slenkstis (dienomis)',
    'alert_inv_threshold'		=> 'Inventoriaus įspėjimo slenkstis',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'Įrangos ID',
    'audit_interval'            => 'Audito intervalas',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Audito įspėjimo slenkstis',
    'audit_warning_days_help'   => 'Kiek dienų iš anksto turėtume įspėti, kada turėtume atlikti auditą?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Papilomas priedėlis (pasirinktinai)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Atsarginė kopija',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Prekės kodo nustatymai',
    'confirm_purge'			    => 'Patvirtinkite švarą',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Užsakytas CSS',
    'custom_css_help'			=> 'Įveskite bet kokį užsakytą CSS peržiūrėjimo norėtumėte naudoti. Neįtraukite &lt;style>&lt;/Stilius&gt; žymės.',
    'custom_forgot_pass_url'	=> 'Pasirinktinio slaptažodžio atkūrimo nuoroda',
    'custom_forgot_pass_url_help'	=> 'Tai pakeičia pamiršto slaptažodžio nuorodą prisijungimo lange. Naudinga tiesiogiai nukreipti į LDAP slaptažodžio atkūrimo funkcionalumą. Būtų efektyviau išjungti vietinių vartotojų pamirštų slaptažodžių funkcionalumą.',
    'dashboard_message'			=> 'Prietaisų skydelio pranešimai',
    'dashboard_message_help'	=> 'Šis tekstas bus rodomas valdymo skydelyje, kiekvienam turinčiam teisę peržiūrėti valdymo skydelį.',
    'default_currency'  		=> 'Numatytoji valiuta',
    'default_eula_text'			=> 'Numatytasis EULA',
    'default_language'			=> 'Numatyta kalba',
    'default_eula_help_text'	=> 'Jūs taip pat galite susieti pritaikytą EULĄ specifinėms įrangos grupėms.',
    'display_asset_name'        => 'Rodyti įrangos pavadinimą',
    'display_checkout_date'     => 'Rodyti išdavimo datą',
    'display_eol'               => 'Rodyti įrangos naudojimo pabaigos datas lentelės pavidalu',
    'display_qr'                => 'Rodyti QR kodus',
    'display_alt_barcode'		=> 'Rodyti 1D barkodus',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D barkodo tipas',
    'alt_barcode_type'			=> '1D barkodo tipas',
    'email_logo_size'       => 'Square logos in email look best. ',
    'enabled'                   => 'Įjungta',
    'eula_settings'				=> 'EULA nustatymai',
    'eula_markdown'				=> 'Šis EULA leidžia <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Papildomas poraštė tekstas ',
    'footer_text_help'          => 'Šis tekstas bus rodomas dešinėje poraštės pusėje. Nuorodos leidžiamos naudojant <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Eilutės lūžei, antraštės, paveiksliukai etc gali sukelti nenuspėjamus rezultatus.',
    'general_settings'			=> 'Bendrieji nustatymai',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Atsarginė kopija',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Atraštės spalva',
    'info'                      => 'Šie nustatymai leidžia jums pasirinkti savus diegimo nustatymus.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laravel versija',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP įjungtas',
    'ldap_integration'          => 'LDAP integracija',
    'ldap_settings'             => 'LDAP nustatymai',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_location'             => 'LDAP prisijungimas',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Prašome įvesti tinkamą LDAP vartotojo vardą ir slaptažodį iš bazės DN. Jūs privalote patikrinti ar LDAP prisijungimas sukonfigūruotas tinkamai. PIRMIAUSIA JŪS PRIVALOTE IŠSAUGOTI LDAP NUSTATYMUS.',
    'ldap_login_sync_help'      => 'Tai patikrina ar LDAP sinchronizacija teisinga. Jeigu Jūsų LADAP autentifikacijos užkalusa nėra teisinga, vartotojai gali negalėti prisijungti. PIRMIAUSIA JŪS PRIVALOTE IŠSAUGOTI LDAP NUSTATYMUS.',
    'ldap_manager'              => 'LDAP vadovas',
    'ldap_server'               => 'LDAP serveris',
    'ldap_server_help'          => 'Tai turėtų prasidėti su ldap: // (nešifruotam arba TLS) arba ldaps: (jei tai SSL)',
    'ldap_server_cert'			=> 'LDAP SSL sertifikato patvirtinimas',
    'ldap_server_cert_ignore'	=> 'Leisti nepatvirtintą SSL sertifikatą',
    'ldap_server_cert_help'		=> 'Pažymėkite jeigu naudojate savo pasirašytą SSL sertifikatą ir norite naudoti neegzistuojanti SSL sertifikatą.',
    'ldap_tls'                  => 'Naudokite TLS',
    'ldap_tls_help'             => 'Tai turėtų būti tikrinama, jei jūsų LDAP serveryje naudojate STARTTLS.',
    'ldap_uname'                => 'LDAP vartotojo vardas',
    'ldap_dept'                 => 'LDAP departamentas',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP slaptažodis',
    'ldap_basedn'               => 'DN',
    'ldap_filter'               => 'LDAP filtras',
    'ldap_pw_sync'              => 'LDAP slaptažodžių sinchronizavimas',
    'ldap_pw_sync_help'         => 'Išvalykite šį laukelį, jei nenorite, kad LDAP slaptažodžiai būtų sinchronizuojami su vietiniais slaptažodžiais. Išjungus tai reiškia, kad jūsų vartotojai gali nepavykti prisijungti, jei dėl kokios nors priežasties jūsų LDAP serveris nepasiekiamas.',
    'ldap_username_field'       => 'Vartotojo vardo laukelis',
    'ldap_lname_field'          => 'Pavardė',
    'ldap_fname_field'          => 'LDAP vardas',
    'ldap_auth_filter_query'    => 'LDAP prisijungimo užklausa',
    'ldap_version'              => 'LDAP versija',
    'ldap_active_flag'          => 'LDAP aktyvios vėliavos',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'LDAP darbuotojų skaičius',
    'ldap_email'                => 'LDAP el.paštas',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Programinės įrangos licenzija',
    'load_remote'               => 'Use Gravatar',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load images from Gravatar.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Pavyko?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Prisijungimo pastaba',
    'login_note_help'           => 'Pasirinktinai į savo prisijungimo ekraną įtraukite keletą sakinių, pavyzdžiui, kad padėtumėte žmonėms, kurie rasti pamestą ar pavogtą įrenginį. Šiame lauke pritariama <a href="https://help.github.com/articles/github-flavored-markdown/"> "Github" skonio markdown</a>',
    'login_remote_user_text'    => 'Nuotolinio vartotojo prisijungimo parametrai',
    'login_remote_user_enabled_text' => 'Įjungti nuotolinį prisijungimą naudojant vartotojo antraštę',
    'login_remote_user_enabled_help' => 'Ši opcija įjungia autentifikaciją "REMOTE_USER" per "Cammon Gateway" vartotojo sąsają (rfc3875)',
    'login_common_disabled_text' => 'Išjungti kitus autentifikacijos mechanizmus',
    'login_common_disabled_help' => 'Ši opcija išjungia kitus autentifikacijos mechanizmus. Šią funkciją įjunkite jeigu esate tikri jog REMOTE_USER prisijungimas veikia',
    'login_remote_user_custom_logout_url_text' => 'Pasirinktinė atsijungimo URL',
    'login_remote_user_custom_logout_url_help' => 'Čia įveskite nuorodą į kurią bus nukreipti vartotojai prisijungę prie Snite-IT. Tai naudinga uždarant vartotojo sesiją.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logotipas',
    'logo_print_assets'         => 'Naudoti spausdinimui',
    'logo_print_assets_help'    => 'Naudoti turto sąrašą spausdinimą ',
    'full_multiple_companies_support_help_text' => 'Apriboti vartotojai (įskaitant administratorius) priskirtus kompanijoms.',
    'full_multiple_companies_support_text' => 'Pilnas kelių kompanijų palaikymas',
    'show_in_model_list'   => 'Rodyti išskleidžiame modelyje',
    'optional'					=> 'pasirinktinai',
    'per_page'                  => 'Rezultatai puslapyje',
    'php'                       => 'PHP versija',
    'php_info'                  => 'PHP informacija',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Jūs turite įdiegti PHP-GD, kad rodytų QR kodus, tam peržiūrėkite diegimo instrukcijas.',
    'php_gd_warning'            => 'PHP vaizdo apdorojimas ir GD papildinys neįdiegtas.',
    'pwd_secure_complexity'     => 'Slaptažodžio sudėtingumas',
    'pwd_secure_complexity_help' => 'Pasirinkite bet kurį slaptažodžio sudėtingumo taisykles, kurias norite vykdyti.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Slaptažodis minimalus simbolių',
    'pwd_secure_min_help'       => 'Minimali leistina vertė yra 8',
    'pwd_secure_uncommon'       => 'Neleiskite bendrų slaptažodžių',
    'pwd_secure_uncommon_help'  => 'Tai neleis vartotojams naudoti bendrų slaptažodžių iš didžiausių 10 000 slaptažodžių, apie kuriuos pranešta pažeidimų metu.',
    'qr_help'                   => 'Įjungti QR kodus prieš nustatant tai',
    'qr_text'                   => 'QR kodo tekstas',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML nustatymai',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Nustatymai',
    'settings'                  => 'Nustatymai',
    'show_alerts_in_menu'       => 'Rodyti įspėjimus viršutiniame meniu',
    'show_archived_in_list'     => 'Archyvuotas turtas',
    'show_archived_in_list_text'     => 'Rodyti archyvuotą turtą "visame turto" sąraše',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Rodyti nuotraukas el. pašte',
    'show_images_in_email_help'   => 'Nuimkite žymelę jeigu jūsų Snipe-IT instaliacija yra VPN arba uždarame tinkle ir vartotojai esantys už tinklo negalės įkrauti paveikslėlių jų el. paštuose.',
    'site_name'                 => 'Interneto puslapio pavadinimas',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT versija',
    'support_footer'            => 'Palaikomos poraštė nuorodos ',
    'support_footer_help'       => 'Nurodykite, kas matys nuorodas į „Snipe-IT“ palaikymo informacijos ir naudotojo vadovą',
    'version_footer'            => 'Versija poraštėje ',
    'version_footer_help'       => 'Nurodykite kad galės matyti Snipe-IT versijas ir versijos numerius.',
    'system'                    => 'Sistemos informacija',
    'update'                    => 'Atnaujinti nustatymus',
    'value'                     => 'Vertė',
    'brand'                     => 'Prekinis ženklinimas',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Apie nustatymus',
    'about_settings_text'       => 'Šie nustatymai leidžia jums pasirinkti savus diegimo nustatymus.',
    'labels_per_page'           => 'Etikečių puslapyje',
    'label_dimensions'          => 'Etiketės išmatavimai (coliais)',
    'next_auto_tag_base'        => 'Kitas automatinis prieaugis',
    'page_padding'              => 'Puslapio maržos (coliais)',
    'privacy_policy_link'       => 'Privatumo politikos nuorodos',
    'privacy_policy'            => 'Privatumo politika',
    'privacy_policy_link_help'  => 'Jeigu nuorodas įterpsite čia tai nuorodos privatumo politikos bus įterptas poraštėje ir kiekviename siunčiame el. laiške, palaikant GDPR. ',
    'purge'                     => 'Išvalyti ištrintus įrašus',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Etiketės apatinis latakai',
    'labels_display_sgutter'    => 'Etiketės pusės latakai',
    'labels_fontsize'           => 'Etiketės šrifto dydis',
    'labels_pagewidth'          => 'Etiketės lapo plotis',
    'labels_pageheight'         => 'Etiketės lapo aukštis',
    'label_gutters'        => 'Etiketės tarpai (coliais)',
    'page_dimensions'        => 'Puslapio matmenys (coliais)',
    'label_fields'          => 'Žymėti laukus',
    'inches'        => 'colių',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Nuoroda į "Snipe-IT" el. Paštu',
    'show_url_in_emails_help_text'      => 'Atžymėkite šį langelį, jei nenorite susieti savo "Snipe-IT" diegimo savo el. Pašto dėžutėse. Naudinga, jei dauguma jūsų naudotojų niekada nebus prisijungę.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Didžiausias miniatiūros aukštis',
    'thumbnail_max_h_help'   => 'Didžiausias pikselių aukštis gali būti, kad miniatiūros gali būti rodomos sąrašo rodinyje. Min 25, maks. 500.',
    'two_factor'        => 'Du veiksnių autentifikavimas',
    'two_factor_secret'        => 'Dviejų veiksnių kodas',
    'two_factor_enrollment'        => 'Dviejų veiksnių registracija',
    'two_factor_enabled_text'        => 'Įgalinti du veiksnius',
    'two_factor_reset'        => 'Atstatyti dviejų veiksnių paslaptį',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Dviejų veiksnių įrenginys sėkmingai iš naujo nustatomas',
    'two_factor_reset_error'          => 'Dviejų veiksnių įrenginio atstatymas nepavyko',
    'two_factor_enabled_warning'        => 'Įjungus dviejų faktorių, jei jis šiuo metu neįjungtas, iš karto privers jus patvirtinti autentifikavimu naudojant "Google" prijungtą įrenginį. Jūs turėsite galimybę įregistruoti savo įrenginį, jei jis šiuo metu nėra įtrauktas.',
    'two_factor_enabled_help'        => 'Tai įgalins dviejų veiksnių autentifikavimą naudojant "Google Authenticator".',
    'two_factor_optional'        => 'Atrankinis (vartotojai gali įjungti arba išjungti, jei tai leidžiama)',
    'two_factor_required'        => 'Reikalingas visiems vartotojams',
    'two_factor_disabled'        => 'Neįgalus',
    'two_factor_enter_code'	=> 'Įveskite dviejų veiksnių kodą',
    'two_factor_config_complete'	=> 'Pateikti kodeksą',
    'two_factor_enabled_edit_not_allowed' => 'Jūsų administratorius neleidžia jums redaguoti šio nustatymo.',
    'two_factor_enrollment_text'	=> "Būtina atlikti du autentiškumo patvirtinimo veiksnius, tačiau jūsų įrenginys dar nebuvo užregistruotas. Atidarykite \"Google\" autentifikavimo priemonės programą ir nuskaitykite žemiau esantį QR kodą, kad užsiregistruotumėte savo įrenginį. Įrašę savo įrenginį įveskite žemiau esantį kodą",
    'require_accept_signature'      => 'Reikalauti parašo',
    'require_accept_signature_help_text'      => 'Įjungus šią funkciją, naudotojams reikės fiziškai atsisakyti priimti turtą.',
    'left'        => 'kairėje',
    'right'        => 'teisus',
    'top'        => 'viršuje',
    'bottom'        => 'apačioje',
    'vertical'        => 'vertikalus',
    'horizontal'        => 'horizontalus',
    'unique_serial'                => 'Unikalus serijinis numeris',
    'unique_serial_help_text'                => 'Pažymėtas šis langelis reiškia unikalius serijinius kiekvienam turtui',
    'zerofill_count'        => 'Turto žymų ilgis, įskaitant "zerofill"',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Išvalyti ištrintus įrašus',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Darbuotojo numeris',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Naudojamas turtas pridėtas sėkmingai!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Jūsų duomenų bazės lentelės sukurtos',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP nustatymai',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => 'Pavadinimas',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => '2D barkodo tipas',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The URL the 2D barcode points to when scanned',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Default',
    'none'                  => 'Nėra',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',

];
