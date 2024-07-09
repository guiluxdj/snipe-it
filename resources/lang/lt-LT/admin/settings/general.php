<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domenas',
    'ad_domain_help'			=> 'Kartais tai sutampa su jūsų el. pašto domenu, bet ne visada.',
    'ad_append_domain_label'    => 'Pridėti domeno pavadinimą',
    'ad_append_domain'          => 'Pridėti domeno pavadinimą prie naudotojo vardo lauko',
    'ad_append_domain_help'     => 'Naudotojas neprivalo įvesti „naudotojovardas@domain.local“, jis gali tiesiog įvesti „naudotojovardas“.',
    'admin_cc_email'            => 'El. paštas kopijai',
    'admin_cc_email_help'       => 'Jei norite siųsti naudotojams siunčiamų išdavimo/paėmimo el. laiškų kopijas į papildomą el. pašto adresą, įveskite jį čia. Kitu atveju palikite šį lauką tuščią.',
    'admin_settings'            => 'Administratoriaus nustatymai',
    'is_ad'				        => 'Tai yra Active Directory serveris',
    'alerts'                	=> 'Įspėjimai',
    'alert_title'               => 'Atnaujinti pranešimų nustatymus',
    'alert_email'				=> 'Siųsti įspėjimus į',
    'alert_email_help'    => 'El. pašto adresai arba platinimo sąrašai, kuriems norite siųsti įspėjimus, atskirti kableliais',
    'alerts_enabled'			=> 'Įspėjimai įjungti',
    'alert_interval'			=> 'Įspėjimų apie garantijos pabaigą slenkstis (dienomis)',
    'alert_inv_threshold'		=> 'Įspėjimo apie atsargas slenkstis (vienetais)',
    'allow_user_skin'           => 'Įgalinti naudotojo temas',
    'allow_user_skin_help_text' => 'Pažymėjus šį langelį, naudotojas galės pasikeisti numatytąją sąsajos temą kita.',
    'asset_ids'					=> 'Įrangos ID',
    'audit_interval'            => 'Audito intervalas',
    'audit_interval_help'       => 'Jei jums reikia reguliariai fiziškai tikrinti savo įrangą, nurodykite naudojamą intervalą mėnesiais. Atnaujinus šią reikšmę, bus atnaujintos visos „kito audito datos“ tai įrangai, kuriai yra nurodyta būsimo audito data.',
    'audit_warning_days'        => 'Išankstinis įspėjimas apie auditą',
    'audit_warning_days_help'   => 'Prieš kiek dienų turėtume jus įspėti, kai turi būti atliktas įrangos auditas?',
    'auto_increment_assets'		=> 'Generuoti automatiškai didėjančius inventorinius numerius',
    'auto_increment_prefix'		=> 'Prefiksas (pasirinktinai)',
    'auto_incrementing_help'    => 'Norėdami tai nustatyti, pirmiausia įjunkite automatiškai didėjančius inventorinius numerius',
    'backups'					=> 'Atsarginė kopija',
    'backups_help'              => 'Kurti, atsisiųsti ir atkurti atsargines kopijas ',
    'backups_restoring'         => 'Atkurti iš atsarginės kopijos',
    'backups_upload'            => 'Įkelti atsarginę kopiją',
    'backups_path'              => 'Atsarginės kopijos serveryje saugomos <code>:path</code>',
    'backups_restore_warning'   => 'Naudokite atkūrimo mygtuką <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span> </small>, jei norite atkurti iš ankstesnės atsarginės kopijos. (Šiuo metu tai neveikia naudojant S3 failų saugyklą arba „Docker“.)<br><br>Jūsų <strong>visa :app_name duomenų bazė ir visi įkelti failai bus visiškai pakeisti</strong> tuo, kas yra atsarginės kopijos faile.  ',
    'backups_logged_out'         => 'Kai atkūrimas bus baigtas, visi esami naudotojai, įskaitant jus, bus atjungti.',
    'backups_large'             => 'Atkuriant labai dideles atsargines kopijas, gali pasibaigti tam skirtas laikas, todėl vis tiek gali tekti atkūrimui naudoti komandinę eilutę. ',
    'barcode_settings'			=> 'Brūkšninio kodo nustatymai',
    'confirm_purge'			    => 'Patvirtinkite išvalymą',
    'confirm_purge_help'		=> 'Įveskite tekstą „DELETE“ į žemiau esantį lauką, kad išvalytumėte panaikintus įrašus. Šio veiksmo anuliuoti negalima, o visi programiškai panaikinti elementai ir naudotojai bus NEGRĮŽTAMAI ištrinti. (Pirmiausia turėtumėte sukurti atsarginę kopiją, kad būtumėte saugūs.)',
    'custom_css'				=> 'Pritaikytas CSS',
    'custom_css_help'			=> 'Įveskite bet kokius individualius CSS pakeitimus, kuriuos norite naudoti. Neįtraukite &lt;style&gt;&lt;/style&gt; žymų.',
    'custom_forgot_pass_url'	=> 'Tinkinta slaptažodžio nustatymo iš naujo nuoroda',
    'custom_forgot_pass_url_help'	=> 'Tai pakeičia integruotą pamiršto slaptažodžio nuorodą prisijungimo ekrane, naudinga norint nukreipti žmones į vidinę arba priglobtą LDAP slaptažodžio nustatymo iš naujo funkciją. Tai visiškai išjungs vietinio naudotojo pamiršto slaptažodžio nustatymo iš naujo funkciją.',
    'dashboard_message'			=> 'Valdymo skydo pranešimas',
    'dashboard_message_help'	=> 'Šis tekstas valdymo skyde bus rodomas visiems, turintiems teisę matyti valdymo skydą.',
    'default_currency'  		=> 'Numatytoji valiuta',
    'default_eula_text'			=> 'Numatytasis licencinis sutikimas (EULA)',
    'default_language'			=> 'Numatytoji kalba',
    'default_eula_help_text'	=> 'Taip pat galite susieti tinkintus licencinius sutikimus (EULA) su konkrečiomis įrangos grupėmis.',
    'acceptance_note'           => 'Pridėkite pastabą prie savo sprendimo (nebūtina)',
    'display_asset_name'        => 'Rodyti įrangos pavadinimą',
    'display_checkout_date'     => 'Rodyti išdavimo datą',
    'display_eol'               => 'Rodyti įrangos nurašymo datas lentelės rodinyje',
    'display_qr'                => 'Rodyti kvadratinius kodus',
    'display_alt_barcode'		=> 'Rodyti 1D brūkšninius kodus',
    'email_logo'                => 'El. pašto logotipas',
    'barcode_type'				=> '2D brūkšninio kodo tipas',
    'alt_barcode_type'			=> '1D brūkšninio kodo tipas',
    'email_logo_size'       => 'Kvadratiniai logotipai laiškuose atrodo geriausiai. ',
    'enabled'                   => 'Įjungta',
    'eula_settings'				=> 'Licencinio sutikimo (EULA) nustatymai',
    'eula_markdown'				=> 'Šis licencinis sutikimas (EULA) leidžia naudoti <a href="https://help.github.com/articles/github-flavored-markdown/">Github tipo žymėjimą (markdown)</a>.',
    'favicon'                   => 'Puslapio ikonėlė (Favicon)',
    'favicon_format'            => 'Priimtini failų tipai yra ico, png ir gif. Kiti vaizdo formatai gali veikti ne visose naršyklėse.',
    'favicon_size'          => 'Puslapio ikonėlės (Favicons) turėtų būti kvadratiniai atvaizdai, 16 x 16 pikselių dydžio.',
    'footer_text'               => 'Papildomas poraštė tekstas ',
    'footer_text_help'          => 'Šis tekstas bus rodomas dešinėje poraštės pusėje. Nuorodos leidžiamos naudojant <a href="https://help.github.com/articles/github-flavored-markdown/">Github tipo žymėjimą (markdown)</a>. Eilučių lūžiai, antraštės, atvaizdai ir kt. gali sukelti nenuspėjamus rezultatus.',
    'general_settings'			=> 'Bendrieji nustatymai',
    'general_settings_keywords' => 'įmonės palaikymas, parašas, sutikimas, el. laiško formatas, naudotojo vardo formatas, atvaizdai, viename puslapyje, miniatiūra, eula, gravatar, paslaugos sąlygos, valdymo skydas, privatumas',
    'general_settings_help'     => 'Numatytasis licencinis sutikimas (EULA) ir kita',
    'generate_backup'			=> 'Kurti atsarginę kopiją',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Atraštės spalva',
    'info'                      => 'Šie nustatymai leidžia tinkinti tam tikrus diegimo aspektus.',
    'label_logo'                => 'Etiketės logotipas',
    'label_logo_size'           => 'Kvadratiniai logotipai atrodo geriausiai – bus rodomi kiekvienos įrangos etiketės viršuje, dešinėje. ',
    'laravel'                   => 'Laravel versija',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Numatytoji teisių grupė',
    'ldap_default_group_info'   => 'Pasirinkite grupę, kurią norite priskirti naujai sinchronizuotiems naudotojams. Atminkite, kad naudotojas įgauna jam priskirtos grupės teises.',
    'no_default_group'          => 'Nėra numatytosios grupės',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP kliento TLS raktas',
    'ldap_client_tls_cert'      => 'LDAP kliento pusės TLS sertifikatas',
    'ldap_enabled'              => 'LDAP įjungtas',
    'ldap_integration'          => 'LDAP integracija',
    'ldap_settings'             => 'LDAP nustatymai',
    'ldap_client_tls_cert_help' => 'Kliento pusės TLS sertifikatas ir raktas LDAP ryšiams, paprastai, naudingi tik naudojant „Google Workspace“ konfigūracijas su „Saugiu LDAP“. Abu yra reikalingi.',
    'ldap_location'             => 'LDAP vieta',
'ldap_location_help'             => 'Lauką „Ldap vieta“ reikia naudoti, jei <strong>OU paieška nėra atliekama pagrindiniame susiejimo DN (Base Bind DN).</strong> Palikite šį lauką tuščią, jei naudojate OU paiešką.',
    'ldap_login_test_help'      => 'Įveskite galiojantį LDAP naudotojo vardą ir slaptažodį iš pagrindinio DN, kurį nurodėte anksčiau, kad patikrintumėte, ar jūsų LDAP prisijungimas sukonfigūruotas teisingai. PIRMIAUSIA TURITE IŠSAUGOTI ATNAUJINTUS LDAP NUSTATYMUS.',
    'ldap_login_sync_help'      => 'Tai tik patikrina ar LDAP sinchronizuoja teisingai. Jei jūsų LDAP autentifikavimo užklausa neteisinga, naudotojai vis tiek negalės prisijungti. PIRMIAUSIA TURITE IŠSAUGOTI ATNAUJINTUS LDAP NUSTATYMUS.',
    'ldap_manager'              => 'LDAP vadovas',
    'ldap_server'               => 'LDAP serveris',
    'ldap_server_help'          => 'Turėtų prasidėti su ldap:// (nešifruotas arba TLS) arba ldaps:// (jei tai SSL)',
    'ldap_server_cert'			=> 'LDAP SSL sertifikato tikrinimas',
    'ldap_server_cert_ignore'	=> 'Leisti negaliojantį SSL sertifikatą',
    'ldap_server_cert_help'		=> 'Pažymėkite šį laukelį, jei naudojate paties pasirašytą SSL sertifikatą ir norite leisti naudoti negaliojantį SSL sertifikatą.',
    'ldap_tls'                  => 'Naudoti TLS',
    'ldap_tls_help'             => 'Tai turėtų būti pažymėta tik tada, jei savo LDAP serveryje naudojate STARTTLS. ',
    'ldap_uname'                => 'LDAP susiejimo naudotojo vardas',
    'ldap_dept'                 => 'LDAP Skyrius',
    'ldap_phone'                => 'LDAP Telefono Nr.',
    'ldap_jobtitle'             => 'LDAP Pareigos',
    'ldap_country'              => 'LDAP Šalis',
    'ldap_pword'                => 'LDAP susiejimo slaptažodis',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP filtras',
    'ldap_pw_sync'              => 'LDAP slaptažodžių sinchronizavimas',
    'ldap_pw_sync_help'         => 'Atžymėkite šį langelį, jei nenorite, kad LDAP slaptažodžiai būtų sinchronizuojami su vietiniais slaptažodžiais. Tai išjungus, jūsų naudotojams gali nepavykti prisijungti, jei dėl kokios nors priežasties jūsų LDAP serveris būtų nepasiekiamas.',
    'ldap_username_field'       => 'Naudotojo vardo laukas',
    'ldap_lname_field'          => 'Pavardė',
    'ldap_fname_field'          => 'LDAP Vardas',
    'ldap_auth_filter_query'    => 'LDAP autentifikavimo užklausa',
    'ldap_version'              => 'LDAP versija',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'Ši reikšmė naudojama norint nustatyti, ar sinchronizuotas naudotojas gali prisijungti prie „Snipe-IT“. <strong>Tai neturi įtakos galimybei išduoti arba paimti daiktus iš šių naudotojų</strong> ir turėtų būti jūsų AD/LDAP <strong>atributo pavadinimas</strong>, o ne <strong>reikšmė</strong>. <br><br>Jei lauke nurodytas lauko pavadinimas, kurio nėra jūsų AD/LDAP, arba reikšmė AD/LDAP lauke nustatyta į <code>0</code> arba <code>false </code>, <strong>naudotojo prisijungimas bus išjungtas</strong>. Jei reikšmė AD/LDAP lauke nustatyta į <code>1</code> arba <code>true</code> arba <em>bet kokį kitą tekstą</em>, reiškia, kad naudotojas gali prisijungti. Kai jūsų AD šis laukas yra tuščias, bus paisoma atributo <code>userAccountControl</code>, kuris įprastai leidžia neišjungtiems naudotojams prisijungti.',
    'ldap_emp_num'              => 'LDAP Darbuotojo numeris',
    'ldap_email'                => 'LDAP El. paštas',
    'ldap_test'                 => 'Testuoti LDAP',
    'ldap_test_sync'            => 'Testuoti LDAP sinchronizavimą',
    'license'                   => 'Programinės įrangos licencija',
    'load_remote'               => 'Įkelti nuotolinius avatarus',
    'load_remote_help_text'		=> 'Atžymėkite šį langelį, jei jūsų diegimas negali vykdyti skriptų iš interneto. Tai neleis „Snipe-IT“ bandyti įkelti avatarų iš „Gravatar“ ar kitų išorinių šaltinių.',
    'login'                     => 'Prisijungimo bandymai',
    'login_attempt'             => 'Prisijungimo bandymas',
    'login_ip'                  => 'IP adresas',
    'login_success'             => 'Pavyko?',
    'login_user_agent'          => 'Naudotojo agentas',
    'login_help'                => 'Bandymų prisijungti sąrašas',
    'login_note'                => 'Prisijungimo pastaba',
    'login_note_help'           => 'Pasirinktinai įtraukite kelis sakinius į prisijungimo ekraną, pavyzdžiui, norėdami padėti žmonėms, radusiems pamestą arba pavogtą įrenginį. Šiame lauke galima naudoti <a href="https://help.github.com/articles/github-flavored-markdown/">Github tipo žymėjimą (markdown)</a>',
    'login_remote_user_text'    => 'Nuotolinio naudotojo prisijungimo parinktys',
    'login_remote_user_enabled_text' => 'Įjungti nuotolinį prisijungimą naudojant „Remote User Header“',
    'login_remote_user_enabled_help' => 'Ši parinktis įgalina autentifikavimą naudojant „REMOTE_USER“ per „Common Gateway Interface (rfc3875)“',
    'login_common_disabled_text' => 'Išjungti kitus autentifikacijos metodus',
    'login_common_disabled_help' => 'Ši parinktis išjungia kitus autentifikacijos metodus. Šią funkciją įjunkite jeigu esate tikri, jog REMOTE_USER prisijungimas veikia',
    'login_remote_user_custom_logout_url_text' => 'Pasirinktinis atsijungimo adresas (URL)',
    'login_remote_user_custom_logout_url_help' => 'Jei čia yra pateiktas adresas, į jį bus nukreipti naudotojai po to, kai atsijungs nuo „Snipe-IT“. Tai naudinga norint tinkamai uždaryti autentifikuotų naudotojų sesijas.',
    'login_remote_user_header_name_text' => 'Tinkinta naudotojo vardo antraštė',
    'login_remote_user_header_name_help' => 'Naudoti nurodytą antraštę, o ne REMOTE_USER',
    'logo'                    	=> 'Logotipas',
    'logo_print_assets'         => 'Naudoti spaudiniuose',
    'logo_print_assets_help'    => 'Naudoti ženklinimą spausdinamuose įrangos sąrašuose ',
    'full_multiple_companies_support_help_text' => 'Naudotojams (įskaitant administratorius), susietiems su konkrečia įmone, leisti pasiekti tik tos įmonės įrangą.',
    'full_multiple_companies_support_text' => 'Pilnas kelių įmonių palaikymas',
    'show_in_model_list'   => 'Rodyti modelių išskleidžiamuosiuose meniu',
    'optional'					=> 'pasirinktinai',
    'per_page'                  => 'Rezultatų puslapyje',
    'php'                       => 'PHP versija',
    'php_info'                  => 'PHP informacija',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP sistemos informacija',
    'php_gd_info'               => 'Turite įdiegti php-gd, kad būtų rodomi QR kodai (žr. diegimo instrukcijas).',
    'php_gd_warning'            => 'Neįdiegti „PHP Image Processing“ ir „GD“ papildiniai.',
    'pwd_secure_complexity'     => 'Slaptažodžio sudėtingumas',
    'pwd_secure_complexity_help' => 'Pasirinkite bet kurias slaptažodžio sudėtingumo taisykles, kurias norite taikyti.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Slaptažodis negali būti toks pat kaip vardas, pavardė, el. pašto adresas ar naudotojo vardas',
    'pwd_secure_complexity_letters' => 'Reikalauti bent vienos raidės',
    'pwd_secure_complexity_numbers' => 'Reikalauti bent vieno skaičiaus',
    'pwd_secure_complexity_symbols' => 'Reikalauti bent vieno simbolio',
    'pwd_secure_complexity_case_diff' => 'Reikalauti bent vienos didžiosios ir vienos mažosios raidės',
    'pwd_secure_min'            => 'Mažiausias slaptažodžio simbolių skaičius',
    'pwd_secure_min_help'       => 'Mažiausia leistina reikšmė yra 8',
    'pwd_secure_uncommon'       => 'Neleisti dažniausiai pasitaikančių slaptažodžių',
    'pwd_secure_uncommon_help'  => 'Tai neleis naudotojams naudoti dažniausiai pasitaikančių 10 000 slaptažodžių, paskelbtų duomenų nutekėjimo pranešimuose.',
    'qr_help'                   => 'Norėdami tai nustatyti, pirmiausia įjunkite QR kodus',
    'qr_text'                   => 'QR kodo tekstas',
    'saml'                      => 'SAML',
    'saml_title'                => 'Atnaujinti SAML nustatymus',
    'saml_help'                 => 'SAML nustatymai',
    'saml_enabled'              => 'SAML įjungta',
    'saml_integration'          => 'SAML integracija',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Viešasis sertifikatas',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'Galite nurodyti IdP metaduomenis naudodami URL arba XML failą.',
    'saml_attr_mapping_username' => 'Atributų susiejimas – Username',
    'saml_attr_mapping_username_help' => 'NameID bus naudojamas, jei atributo susiejimas nenurodytas arba neteisingas.',
    'saml_forcelogin_label'     => 'SAML privalomas naudojimas',
    'saml_forcelogin'           => 'Padarykite SAML pagrindiniu prisijungimo būdu',
    'saml_forcelogin_help'      => 'Galite naudoti „/login?nosaml“, kad patektumėte į įprastą prisijungimo puslapį.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Atsijungiant siųsti LogoutRequest užklausą į IdP',
    'saml_slo_help'             => 'Atsijungiant, naudotojas pirmiausia bus nukreiptas į IdP. Palikite nepažymėtą, jei IdP tinkamai nepalaiko SP inicijuoto SAML SLO.',
    'saml_custom_settings'      => 'SAML pasirinktiniai nustatymai',
    'saml_custom_settings_help' => 'Galite nurodyti papildomus onelogin/php-saml bibliotekų nustatymus. Naudokite savo pačių rizika.',
    'saml_download'             => 'Atsisiųsti metaduomenis',
    'setting'                   => 'Nustatymas',
    'settings'                  => 'Nustatymai',
    'show_alerts_in_menu'       => 'Rodyti įspėjimus viršutiniame meniu',
    'show_archived_in_list'     => 'Archyvuota įranga',
    'show_archived_in_list_text'     => 'Rodyti archyvuotą įrangą „visos įrangos“ sąraše',
    'show_assigned_assets'      => 'Rodyti įrangą, priskirtą kitai įrangai',
    'show_assigned_assets_help' => 'Rodyti įrangą, kuri buvo priskirta kitai įrangai, skiltyse: „Peržiūrėti naudotoją -> Įranga“, „Peržiūrėti naudotoją -> Informacija -> Spausdinti visą įrangą“ ir „Paskyra -> Peržiūrėti priskirtą įrangą".',
    'show_images_in_email'     => 'Rodyti atvaizdus el. laiškuose',
    'show_images_in_email_help'   => 'Nuimkite žymelę jeigu jūsų Snipe-IT diegimas yra už VPN arba uždarame tinkle, kitaip tinkle nesantys išorės naudotojai negalės įkelti el. laiškuose pateiktų atvaizdų.',
    'site_name'                 => 'Puslapio pavadinimas',
    'integrations'               => 'Integracijos',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Standartinis „Webhook“',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Patikrinti ir išsaugoti',
    'webhook_title'               => 'Atnaujinti „Webhook“ nustatymus',
    'webhook_help'                => 'Integracijos nustatymai',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app nustatymai',
    'webhook_test'                 =>'Tikrinti :app integraciją',
    'webhook_integration_help'    => ':app integracija nėra privaloma, tačiau, jei norite ją naudoti, būtina nurodyti Endpoint ir Channel. Norėdami sukonfigūruoti :app integraciją, pirmiausia turite <a href=":webhook_link" target="_new" rel="noopener">sukurti įeinantį „Webhook“ pranešimą</a> savo :app paskyroje. Spustelėkite mygtuką <strong>Tikrinti :app integraciją</strong>, kad patvirtintumėte ar nustatymai yra teisingi, prieš juos išsaugodami. ',
    'webhook_integration_help_button'    => 'Išsaugojus :app informaciją, pasirodys testavimo mygtukas.',
    'webhook_test_help'           => 'Patikrinkite, ar jūsų :app integracija sukonfigūruota tinkamai. PIRMA PRIVALOTE IŠSAUGOTI ATNAUJINTUS :app NUSTATYMUS.',
    'snipe_version'  			=> 'Snipe-IT versija',
    'support_footer'            => 'Palaikymo nuorodos poraštėje ',
    'support_footer_help'       => 'Nurodykite, kas mato nuorodas į Snipe-IT palaikymo informaciją ir naudotojo vadovą',
    'version_footer'            => 'Versijos rodymas poraštėje ',
    'version_footer_help'       => 'Nurodykite, kas mato Snipe-IT versiją ir darinio (build) numerį.',
    'system'                    => 'Sistemos informacija',
    'update'                    => 'Atnaujinti nustatymus',
    'value'                     => 'Reikšmė',
    'brand'                     => 'Ženklodara',
    'brand_keywords'            => 'poraštė, logotipas, spaudiniai, tema, apipavidalinimas, antraštė, spalvos, spalva, css',
    'brand_help'                => 'Logotipas, Puslapio pavadinimas',
    'web_brand'                 => 'Žiniatinklio ženklodaros tipas',
    'about_settings_title'      => 'Apie nustatymus',
    'about_settings_text'       => 'Šie nustatymai leidžia tinkinti tam tikrus diegimo aspektus.',
    'labels_per_page'           => 'Etikečių puslapyje',
    'label_dimensions'          => 'Etiketės matmenys (coliais)',
    'next_auto_tag_base'        => 'Sekanti automatinio padidinimo reikšmė',
    'page_padding'              => 'Puslapio paraštės (coliais)',
    'privacy_policy_link'       => 'Nuoroda į Privatumo politiką',
    'privacy_policy'            => 'Privatumo politika',
    'privacy_policy_link_help'  => 'Jei šiame lange yra nurodytas puslapio adresas (URL), tai nuoroda į jūsų Privatumo politiką bus rodoma šios programos poraštėje ir visuose sistemos siunčiamuose el. laiškuose, kaip kad yra numatyta BDAR. ',
    'purge'                     => 'Išvalyti panaikintus įrašus',
    'purge_deleted'             => 'Išvalyti panaikintus ',
    'labels_display_bgutter'    => 'Etiketės apatinis tarpelis',
    'labels_display_sgutter'    => 'Etiketės šoninis tarpelis',
    'labels_fontsize'           => 'Etiketės šrifto dydis',
    'labels_pagewidth'          => 'Etiketės lapo plotis',
    'labels_pageheight'         => 'Etiketės lapo aukštis',
    'label_gutters'        => 'Etikečių tarpai (coliai)',
    'page_dimensions'        => 'Puslapio matmenys (coliais)',
    'label_fields'          => 'Etiketėje atvaizduojami laukai',
    'inches'        => 'coliai',
    'width_w'        => 'p',
    'height_h'        => 'a',
    'show_url_in_emails'                => 'Nuoroda į Snipe-IT el. laiškuose',
    'show_url_in_emails_help_text'      => 'Atžymėkite šį langelį, jei nenorite, kad el. laiškų poraštėse būtų nuoroda į jūsų Snipe-IT diegimą. Naudinga, jei dauguma naudotojų niekada nesijungia prie sistemos. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Didžiausias miniatiūros aukštis',
    'thumbnail_max_h_help'   => 'Maksimalus aukštis pikseliais, kokiu miniatiūros gali būti atvaizduojamos sąrašo rodinyje. Mažiausias yra 25, didžiausias – 500.',
    'two_factor'        => 'Dviejų veiksnių autentifikacija',
    'two_factor_secret'        => 'Dviejų veiksnių kodas',
    'two_factor_enrollment'        => 'Dviejų veiksnių registracija',
    'two_factor_enabled_text'        => 'Įjungti dviejų veiksnių autentifikaciją',
    'two_factor_reset'        => 'Iš naujo nustatyti dviejų veiksnių autentifikavimo slaptąjį raktą',
    'two_factor_reset_help'        => 'Naudotojas turės iš naujo užregistruoti savo įrenginį autentifikavimo programoje. Tai gali būti naudinga, jei šiuo metu registruotas įrenginys buvo pamestas ar pavogtas. ',
    'two_factor_reset_success'          => 'Dviejų veiksnių įrenginys pridėtas sėkmingai',
    'two_factor_reset_error'          => 'Dviejų veiksnių įrenginio nustatymas iš naujo nepavyko',
    'two_factor_enabled_warning'        => 'Įjungus dviejų veiksnių autentifikaciją (jei ji šiuo metu nėra įjungta) būsite iš karto priversti autentifikuotis naudojant „Google Authenticator“ užregistruotą įrenginį. Jei šiuo metu neturite užregistruoto įrenginio, tai turėsite galimybę jį užregistruoti.',
    'two_factor_enabled_help'        => 'Bus įjungta dviejų veiksnių autentifikacija naudojant „Google Authenticator“.',
    'two_factor_optional'        => 'Atrankinis (vartotojai gali įjungti arba išjungti, jei tai leidžiama)',
    'two_factor_required'        => 'Privalomas visiems naudotojams',
    'two_factor_disabled'        => 'Išjungta',
    'two_factor_enter_code'	=> 'Įveskite dviejų veiksnių kodą',
    'two_factor_config_complete'	=> 'Pateikti kodą',
    'two_factor_enabled_edit_not_allowed' => 'Jūsų administratorius neleidžia keisti šio nustatymo.',
    'two_factor_enrollment_text'	=> "Būtina dviejų veiksnių autentifikacija, tačiau jūsų dar nesate užregistravę įrenginio. Norėdami užregistruoti įrenginį, jame atidarykite „Google Authenticator“ programą ir nuskaitykite čia pateiktą QR kodą. Užregistravę įrenginį, įveskite jo ekrane rodomą kodą į žemiau esantį lauką",
    'require_accept_signature'      => 'Reikalauti parašo',
    'require_accept_signature_help_text'      => 'Jei įjungsite šią funkciją, naudotojai turės fiziškai pasirašyti už jiems išduodamą įrangą.',
    'left'        => 'kairėje',
    'right'        => 'dešinėje',
    'top'        => 'viršuje',
    'bottom'        => 'apačioje',
    'vertical'        => 'vertikalus',
    'horizontal'        => 'horizontalus',
    'unique_serial'                => 'Unikalus serijinis numeris',
    'unique_serial_help_text'                => 'Pažymėjus šį langelį, bus užtikrinamas įrangos serijinių numerių unikalumas',
    'zerofill_count'        => 'Inventorinių numerių ilgis, įskaitant priekinius nulius',
    'username_format_help'   => 'Šis nustatymas bus naudojamas importavimo procese tik tuo atveju, jei naudotojo vardas nebus pateiktas ir mes turėsime sugeneruoti naudotojo vardą.',
    'oauth_title' => 'OAuth API nustatymai',
    'oauth_clients' => 'OAuth klientai',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint nustatymai',
    'oauth_no_clients' => 'Dar nesukūrėte jokių OAuth klientų.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Įgaliotos programos',
    'oauth_redirect_url' => 'Nukreipimo adresas (URL)',
    'oauth_name_help' => ' Kažkas, ką jūsų naudotojai atpažins ir pasitikės.',
    'oauth_scopes' => 'Taikymo sritys',
    'oauth_callback_url' => 'Jūsų programos autorizacijos tikrinimo adresas (URL).',
    'create_client' => 'Sukurti klientą',
    'no_scopes' => 'Nėra taikymo sričių',
    'asset_tag_title' => 'Atnaujinti inventorinio numerio nustatymus',
    'barcode_title' => 'Atnaujinti brūkšninio kodo nustatymus',
    'barcodes' => 'Brūkšniniai kodai',
    'barcodes_help_overview' => 'Brūkšninių ir QR kodų nustatymai',
    'barcodes_help' => 'Bus bandoma ištrinti talpykloje saugomus brūkšninius kodus. Įprastai, tai yra naudojama, tik jei pasikeitė brūkšninio kodo nustatymai arba pasikeitė Snipe-IT adresas. Brūkšniniai kodai bus sugeneruoti iš naujo, kai kitą kartą bus atidaryti.',
    'barcodes_spinner' => 'Bandoma ištrinti failus...',
    'barcode_delete_cache' => 'Išvalyti brūkšninių kodų talpyklą',
    'branding_title' => 'Atnaujinti ženklodaros nustatymus',
    'general_title' => 'Atnaujinti bendruosius nustatymus',
    'mail_test' => 'Siųsti bandomąjį laišką',
    'mail_test_help' => 'Bus mėginama išsiųsti bandomąjį laišką adresu :replyto.',
    'filter_by_keyword' => 'Filtruoti pagal nustatymų raktažodį',
    'security' => 'Saugumas',
    'security_title' => 'Atnaujinti saugumo nustatymus',
    'security_keywords' => 'slaptažodis, slaptažodžiai, reikalavimai, dviejų faktorių, dviejų veiksnių, įprasti slaptažodžiai, nuotolinis prisijungimas, atsijungimas, autentifikavimas',
    'security_help' => 'Dviejų veiksnių, slaptažodžio apribojimai',
    'groups_keywords' => 'teisės, teisių grupės, autorizacija',
    'groups_help' => 'Paskyros teisių grupės',
    'localization' => 'Lokalizacija',
    'localization_title' => 'Atnaujinti lokalizacijos nustatymus',
    'localization_keywords' => 'lokalizacija, valiuta, vietinis, lokalė, laiko juosta, laiko juosta, tarptautinis, internacionalizavimas, kalba, kalbos, vertimas',
    'localization_help' => 'Kalba, datos atvaizdavimas',
    'notifications' => 'Pranešimai',
    'notifications_help' => 'El. pašto įspėjimų ir audito nustatymai',
    'asset_tags_help' => 'Didinimas ir prefiksai',
    'labels' => 'Etiketės',
    'labels_title' => 'Atnaujinti etikečių nustatymus',
    'labels_help' => 'Etikečių dydžiai ir nustatymai',
    'purge_keywords' => 'ištrinti visam laikui',
    'purge_help' => 'Išvalyti ištrintus įrašus',
    'ldap_extension_warning' => 'Panašu, kad šiame serveryje nėra įdiegtas arba įjungtas LDAP plėtinys. Vis tiek galite išsaugoti nustatymus, bet turėsite įjungti LDAP plėtinį PHP, kad veiktų LDAP sinchronizavimas arba prisijungimas.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Darbuotojo numeris',
    'create_admin_user' => 'Sukurti naudotoją ::',
    'create_admin_success' => 'Pavyko! Jūsų administratoriaus naudotojas buvo sukurtas!',
    'create_admin_redirect' => 'Spustelėkite čia, kad pereitumėte į prisijungimą prie programos!',
    'setup_migrations' => 'Duomenų bazių migracijos ::',
    'setup_no_migrations' => 'Nebuvo ko migruoti. Jūsų duomenų bazės lentelės jau buvo nustatytos!',
    'setup_successful_migrations' => 'Jūsų duomenų bazės lentelės buvo sukurtos',
    'setup_migration_output' => 'Migravimo išvestis:',
    'setup_migration_create_user' => 'Kitas: Sukurti naudotoją',
    'ldap_settings_link' => 'LDAP nustatymų puslapis',
    'slack_test' => 'Patikrinti <i class="fab fa-slack"></i> integraciją',
    'label2_enable'           => 'Naujas etikečių variklis',
    'label2_enable_help'      => 'Perjunkite į naują etikečių variklį. <b>Pastaba: turėsite išsaugoti šį nustatymą prieš nustatydami kitus.</b>',
    'label2_template'         => 'Šablonas',
    'label2_template_help'    => 'Pasirinkite, kurį šabloną naudoti etikečių generavimui',
    'label2_title'            => 'Antraštė',
    'label2_title_help'       => 'Antraštė, kuri atvaizduojama tai palaikančiose etiketėse',
    'label2_title_help_phold' => 'Vietaženklis <code>{COMPANY}</code> bus pakeistas įrangos įmonės pavadinimu',
    'label2_asset_logo'       => 'Naudoti įrangos logotipą',
    'label2_asset_logo_help'  => 'Naudokite įrangai priskirtos įmonės logotipą, o ne <code>:setting_name</code> reikšmę',
    'label2_1d_type'          => '1D brūkšninio kodo tipas',
    'label2_1d_type_help'     => '1D brūkšninio kodo formatas',
    'label2_2d_type'          => '2D brūkšninio kodo tipas',
    'label2_2d_type_help'     => '2D brūkšninio kodo formatas',
    'label2_2d_target'        => '2D brūkšninio kodo kelias',
    'label2_2d_target_help'   => 'Adresas (URL), į kurį nukreipiama nuskaičius 2D brūkšninį kodą',
    'label2_fields'           => 'Laukų apibrėžimai',
    'label2_fields_help'      => 'Laukus galima pridėti, pašalinti ir pertvarkyti kairiajame stulpelyje. Kiekvienam laukui, dešiniajame stulpelyje galima pridėti kelias etiketės ir „DataSource“ parinktis, taip pat, jas pašalinti ir pertvarkyti.',
    'help_asterisk_bold'    => 'Tekstas, įvestas kaip <code>**tekstas**</code>, bus rodomas paryškintu šriftu',
    'help_blank_to_use'     => 'Palikite tuščią, kad būtų nauudojama <code>:setting_name</code> reikšmė',
    'help_default_will_use' => '<code>:default</code> naudos reikšmę iš <code>:setting_name</code>. <br>Atkreipkite dėmesį, kad brūkšninio kodo reikšmė turi atitikti atitinkamą brūkšninio kodo specifikaciją tam, kad būtų sėkmingai sugeneruota. Jei reikia daugiau informacijos, peržiūrėkite <a href="https://snipe-it.readme.io/docs/barcodes">dokumentaciją<i class="fa fa-external-link"></i></a>. ',
    'default'               => 'Numatytasis',
    'none'                  => 'Joks',
    'google_callback_help' => 'Čia turėtų būti nurodytas tas pats autorizacijos tikrinimo adresas (URL), kurį nurodėte savo organizacijos „Google OAuth“ programos nustatymuose adresu <strong><a href="https://console.cloud.google.com/" target="_blank">„Google Developer Console“ <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => '„Google Workspace“ prisijungimo nustatymai',
    'enable_google_login'  => 'Leisti naudotojams prisijungti su „Google Workspace“',
    'enable_google_login_help'  => 'Naudotojai nebus automatiškai paruošiami. Jie turi turėti esamą paskyrą sistemoje IR „Google Workspace“, o naudotojo vardas sistemoje turi atitikti „Google Workspace“ el. pašto adresą. ',
    'mail_reply_to' => 'Pašto „Atsakyti kam“ adresas',
    'mail_from' => 'Pašto „Nuo“ adresas',
    'database_driver' => 'Duomenų bazės tvarkyklės',
    'bs_table_storage' => 'Lentelių saugojimas',
    'timezone' => 'Laiko juosta',
    'profile_edit'          => 'Redaguoti profilį',
    'profile_edit_help'          => 'Leisti naudotojams redaguoti savo profilius.',
    'default_avatar' => 'Įkelti numatytąjį avatarą',

];
