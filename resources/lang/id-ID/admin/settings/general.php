<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Domain Active Directory',
    'ad_domain_help'			=> 'Hal ini kadang-kadang sama sebagai domain email Anda, tetapi tidak selalu.',
    'ad_append_domain_label'    => 'Tambahkan nama domain',
    'ad_append_domain'          => 'Tambahkan nama domain ke bagian nama pengguna (username)',
    'ad_append_domain_help'     => 'Pengguna tidak diharuskan untuk menulis "nama_pengguna@domain.local", mereka cukup mengetikkan "nama_pengguna".',
    'admin_cc_email'            => 'Tembusan Email',
    'admin_cc_email_help'       => 'Jika Anda ingin mengirim salinan email checkin / checkout yang dikirimkan ke pengguna akun email tambahan, masukkan di sini. Jika tidak, biarkan bidang ini kosong.',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => 'Ini adalah server Active Directory',
    'alerts'                	=> 'Pemberitahuan',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Kirim pemberitahuan kepada',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Aktifkan pemberitahuan',
    'alert_interval'			=> 'Ambang batas pemberitahuan kadaluarsa (dalam hari)',
    'alert_inv_threshold'		=> 'Ambang pemberitahuan persediaan',
    'allow_user_skin'           => 'Izinkan tema dari pengguna',
    'allow_user_skin_help_text' => 'Mencentang kotak ini akan memungkinkan pengguna untuk mengganti skin UI yang berbeda.',
    'asset_ids'					=> 'Aset id',
    'audit_interval'            => 'Interval Audit',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Ambang Peringatan Audit',
    'audit_warning_days_help'   => 'Berapa hari sebelumnya yang harus kami peringatkan saat aset akan dilelang?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Awalan (pilihan)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Cadangan',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Pengaturan barcode',
    'confirm_purge'			    => 'Konfirmasi pembersihan',
    'confirm_purge_help'		=> 'Ketikkan teks "HAPUS" pada kotak di bawah ini untuk menghapus catatan yang dipilih. Tindakan ini tidak dapat diurungkan dan secara PERMANEN akan menghapus semua item dan pengguna yang dihapus sementara. (Anda harus membuat cadangan terlebih dahulu, demi keamanan data anda.)',
    'custom_css'				=> 'Custom CSS',
    'custom_css_help'			=> 'Masukan modifikasi CSS yang hendak anda gunakan. Jangan sertakan &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'URL Reset Kata Sandi Kustom',
    'custom_forgot_pass_url_help'	=> 'Ini menggantikan URL lupa kata sandi bawaan pada layar login, berguna untuk mengarahkan orang ke fungsi reset kata sandi LDAP internal atau yang dihosting. Ini secara efektif akan menonaktifkan fungsionalitas lupa kata sandi lokal.',
    'dashboard_message'			=> 'Pesan Dasbor',
    'dashboard_message_help'	=> 'Teks ini akan muncul di dasbor bagi siapa pun yang memiliki izin untuk melihat dasbor.',
    'default_currency'  		=> 'Mata uang utama',
    'default_eula_text'			=> 'EULA utama',
    'default_language'			=> 'Bahasa utama',
    'default_eula_help_text'	=> 'Anda juga dapat mengaitkan kustom EULAs untuk kategori aset tertentu.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Tampilan Nama Aset',
    'display_checkout_date'     => 'Tampilan Tanggal Keluar',
    'display_eol'               => 'Tampilan EOL dalam bentuk tabel',
    'display_qr'                => 'Tampilan kode kotak',
    'display_alt_barcode'		=> 'Tampilan barcode 1D',
    'email_logo'                => 'Logo Email',
    'barcode_type'				=> 'Tipe Barcode 2D',
    'alt_barcode_type'			=> 'Tipe Barcode 1D',
    'email_logo_size'       => 'Logo persegi/kotak di email terlihat paling sesuai. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Konfigurasi EULA',
    'eula_markdown'				=> 'EULA mengijinkan <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Jenis file yang diterima adalah ico, png, dan gif. Format gambar lain mungkin tidak berfungsi di semua browser.',
    'favicon_size'          => 'Favicons harus berupa gambar persegi/kotak, ukuran 16x16 piksel.',
    'footer_text'               => 'Teks Footer Tambahan ',
    'footer_text_help'          => 'Teks ini akan muncul di footer sebelah kanan. Tautan diizinkan menggunakan <a href="https://help.github.com/articles/github-flavored-markdown/">marka bergaya Github</a>. Baris baru, header, gambar, dll mungkin akan mengakibatkan hasil yang tidak sesuai.',
    'general_settings'			=> 'Konfigurasi umum',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Membuat cadangan',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Warna Header',
    'info'                      => 'Dengan pengaturan ini anda dapat merubah aspek tertentu pada instalasi.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Logo persegi/kotak terlihat sesuai - akan ditampilkan di kanan atas setiap label aset. ',
    'laravel'                   => 'Versi Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'Kunci TLS Client-Side LDAP',
    'ldap_client_tls_cert'      => 'Sertifikat TLS Client-Side LDAP',
    'ldap_enabled'              => 'Aktifkan LDAP',
    'ldap_integration'          => 'Integrasi LDAP',
    'ldap_settings'             => 'Konfigurasi LDAP',
    'ldap_client_tls_cert_help' => 'Sertifikat Client-Side TLS dan Kunci untuk koneksi LDAP biasanya hanya berguna di konfigurasi Google Workspace dengan "Secure LDAP". Keduanya diperlukan.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Masukkan nama pengguna dan kata sandi LDAP yang valid dari DN dasar yang Anda tentukan di atas untuk menguji apakah pengaturan login LDAP Anda telah dikonfigurasi dengan benar. PERTAMA-TAMA ANDA HARUS MENYIMPAN PENGATURAN LDAP ANDA.',
    'ldap_login_sync_help'      => 'Ini hanya menguji bahwa LDAP dapat tersinkronisasi dengan benar. Jika kueri Otentikasi LDAP Anda tidak benar, pengguna mungkin masih belum dapat masuk. PERTAMA-TAMA ANDA HARUS MENYIMPAN PENGATURAN LDAP ANDA.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Ini harus dimulai dengan ldap: / / (untuk tidak terenkripsi atau TLS) atau ldaps: / / (untuk SSL)',
    'ldap_server_cert'			=> 'Validasi sertifikat LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Izinkan sertifikat SSL tak terdaftar',
    'ldap_server_cert_help'		=> 'Pilih kotak ini jika anda menggunakan sertifikat SSL self sign dan menerima sertifikat SSL yang tak terdaftar.',
    'ldap_tls'                  => 'Gunakan TLS',
    'ldap_tls_help'             => 'Ini digunakan jika anda menggunakan STARTTLS di server LDAP anda. ',
    'ldap_uname'                => 'Nama pengguna LDAP',
    'ldap_dept'                 => 'Departemen LDAP',
    'ldap_phone'                => 'Nomor Telepon LDAP',
    'ldap_jobtitle'             => 'Judul Pekerjaan LDAP',
    'ldap_country'              => 'Negara LDAP',
    'ldap_pword'                => 'Katakunci LDAP',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Saring LDAP',
    'ldap_pw_sync'              => 'Sinkronisasi Password LDAP',
    'ldap_pw_sync_help'         => 'Hapus tanda centang kotak ini jika Anda tidak ingin menyimpan password LDAP disinkronkan dengan password lokal. Menonaktifkan ini berarti bahwa pengguna Anda mungkin tidak bisa login jika server LDAP Anda tidak bisa diakses untuk beberapa alasan.',
    'ldap_username_field'       => 'Kolom nama pengguna',
    'ldap_lname_field'          => 'Nama Belakang',
    'ldap_fname_field'          => 'LDAP Nama Depan',
    'ldap_auth_filter_query'    => 'Permintaan Otentikasi LDAP',
    'ldap_version'              => 'Versi LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'Nomor karyawan LDAP',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Lisensi Perangkat Lunak',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Sukses?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Login Catatan',
    'login_note_help'           => 'Opsional memasukkan beberapa kalimat di layar masuk Anda, misalnya untuk membantu orang-orang yang telah menemukan perangkat yang hilang atau dicuri. Bidang ini menerima <a href="https://help.github.com/articles/github-flavored-markdown/">posur rasa Github</a>',
    'login_remote_user_text'    => 'Opsi masuk Pengguna Jarak Jauh',
    'login_remote_user_enabled_text' => 'Aktifkan Login dengan Remote User Header',
    'login_remote_user_enabled_help' => 'Opsi ini memungkinkan Otentikasi melalui header REMOTE_USER sesuai dengan "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Nonaktifkan mekanisme autentikasi lainnya',
    'login_common_disabled_help' => 'Opsi ini menonaktifkan mekanisme otentikasi lainnya. Cukup aktifkan opsi ini jika Anda yakin bahwa login REMOTE_USER Anda sudah berfungsi',
    'login_remote_user_custom_logout_url_text' => 'Penyesuaian URL logout',
    'login_remote_user_custom_logout_url_help' => 'Jika diisi, pengguna akan dialihkan ke URL ini setelah keluar atau logout. Berfungsi untuk menutup sesi pengguna dengan sempurna.',
    'login_remote_user_header_name_text' => 'Tajuk nama pengguna khusus',
    'login_remote_user_header_name_help' => 'Gunakan tajuk yang ditentukan alih-alih REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Gunakan saat mencetak',
    'logo_print_assets_help'    => 'Menggunakan branding Anda pada semua hasil cetak daftar aset ',
    'full_multiple_companies_support_help_text' => 'Membatasi pengguna (termasuk admin) diberikan kepada perusahaan untuk aset perusahaan mereka.',
    'full_multiple_companies_support_text' => 'Dukungan penuh beberapa perusahaan',
    'show_in_model_list'   => 'Tampilkan dalam Model Dropdown',
    'optional'					=> 'pilihan',
    'per_page'                  => 'Hasil per halaman',
    'php'                       => 'Versi PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Anda harus memasang php-gd untuk menampilkan kode QR, baca petunjuk pemasangan.',
    'php_gd_warning'            => 'Plugin PHP pengolahan citra dan GD tidak diinstal.',
    'pwd_secure_complexity'     => 'Kompleksitas Password',
    'pwd_secure_complexity_help' => 'Pilih aturan kerumitan kompleksitas yang ingin Anda tegakkan.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Karakter minimum kata sandi',
    'pwd_secure_min_help'       => 'Nilai minimum yang diizinkan adalah 8',
    'pwd_secure_uncommon'       => 'Mencegah password umum',
    'pwd_secure_uncommon_help'  => 'Ini akan melarang pengguna menggunakan kata kunci umum dari 10.000 sandi teratas yang dilaporkan mengalami pelanggaran.',
    'qr_help'                   => 'Hidupkan kode QR sebelumnya',
    'qr_text'                   => 'Teks kode QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML diaktifkan',
    'saml_integration'          => 'Integrasi SAML',
    'saml_sp_entityid'          => 'ID Entitas',
    'saml_sp_acs_url'           => 'URL Assertion Consumer Service (ACS)',
    'saml_sp_sls_url'           => 'URL Single Logout Service (SLS)',
    'saml_sp_x509cert'          => 'Sertifikat Publik',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'Anda dapat menentukan metadata IdP menggunakan URL atau file XML.',
    'saml_attr_mapping_username' => 'Pemetaan Atribut - Nama Pengguna',
    'saml_attr_mapping_username_help' => 'NameID akan digunakan jika pemetaan atribut tidak ditentukan atau tidak valid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Jadikan SAML sebagai login utama',
    'saml_forcelogin_help'      => 'Anda dapat menggunakan \'/login?nosaml\' untuk membuka halaman login normal.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'Ini akan menyebabkan pengguna pertama kali diarahkan ke IdP saat logout. Biarkan tidak dicentang jika IdP tidak mendukung SLO SAML yang dimulai SP dengan benar.',
    'saml_custom_settings'      => 'Pengaturan Kustom SAML',
    'saml_custom_settings_help' => 'Anda dapat menentukan pengaturan tambahan ke perpustakaan onelogin/php-saml. Gunakan dengan risiko Anda sendiri.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Pengaturan',
    'settings'                  => 'Pengaturan',
    'show_alerts_in_menu'       => 'Tampilkan pemberitahuan di menu atas',
    'show_archived_in_list'     => 'Aset yang Diarsipkan',
    'show_archived_in_list_text'     => 'Tampilkan aset yang diarsipkan dalam daftar "semua aset"',
    'show_assigned_assets'      => 'Tampilkan aset yang ditetapkan ke aset',
    'show_assigned_assets_help' => 'Tampilkan aset yang ditetapkan ke aset lain di Lihat Pengguna -> Aset, Lihat Pengguna -> Info -> Cetak Semua yang Ditugaskan dan di Akun -> Lihat Aset yang Ditugaskan.',
    'show_images_in_email'     => 'Tampilkan gambar dalam email',
    'show_images_in_email_help'   => 'Hapus centang kotak ini jika instalasi Snipe-IT Anda berada di belakang VPN atau jaringan tertutup dan pengguna di luar jaringan tidak akan dapat memuat gambar yang disajikan dari instalasi ini di email mereka.',
    'site_name'                 => 'Nama Situs',
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
    'snipe_version'  			=> 'Versi Snipe-IT',
    'support_footer'            => 'Mendukung Footer Links ',
    'support_footer_help'       => 'Tentukan siapa yang melihat tautan ke info Dukungan Snipe-IT dan Panduan Pengguna',
    'version_footer'            => 'Versi pada Footer ',
    'version_footer_help'       => 'Tentukan siapa saja yang dapat melihat versi dan build number dari Snipe-IT.',
    'system'                    => 'Informasi Sistem',
    'update'                    => 'Pengaturan perbaruan',
    'value'                     => 'Harga',
    'brand'                     => 'Merek',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Jenis Web Branding',
    'about_settings_title'      => 'Tentang pengaturan',
    'about_settings_text'       => 'Dengan pengaturan ini anda dapat merubah aspek tertentu pada instalasi.',
    'labels_per_page'           => 'Label per halaman',
    'label_dimensions'          => 'Dimensi label (inch)',
    'next_auto_tag_base'        => 'Berikutnya auto-increment',
    'page_padding'              => 'Marjin halaman (inch)',
    'privacy_policy_link'       => 'Tautan ke Kebijakan Privasi',
    'privacy_policy'            => 'Kebijakan privasi',
    'privacy_policy_link_help'  => 'Jika url disertakan di sini, tautan ke kebijakan privasi Anda akan dimasukkan dalam footer aplikasi dan di email apa pun yang dikirimkan sistem, sesuai dengan GDPR. ',
    'purge'                     => 'Pembersihan catatan yang telah terhapus',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Ukuran bawah label',
    'labels_display_sgutter'    => 'Ukuran samping label',
    'labels_fontsize'           => 'Ukuran huruf label',
    'labels_pagewidth'          => 'Lebar halaman label',
    'labels_pageheight'         => 'Tinggi kertas label',
    'label_gutters'        => 'Spasi label (inci)',
    'page_dimensions'        => 'Dimensi halaman (inch)',
    'label_fields'          => 'Field label yang terlihat',
    'inches'        => 'inci',
    'width_w'        => 'l',
    'height_h'        => 't',
    'show_url_in_emails'                => 'Tautan ke Snipe-IT di Email',
    'show_url_in_emails_help_text'      => 'Hapus centang pada kotak ini jika Anda tidak ingin menautkan kembali ke instalasi Snipe-IT Anda di footer email Anda. Berguna jika sebagian besar pengguna Anda tidak pernah masuk.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Tinggi thumbnail maks',
    'thumbnail_max_h_help'   => 'Tinggi maksimum piksel yang dapat ditampilkan thumbnail dalam tampilan daftar. Min 25, maks 500.',
    'two_factor'        => 'Dua faktor otentikasi',
    'two_factor_secret'        => 'Kode Dua Faktor',
    'two_factor_enrollment'        => 'Pendaftaran Dua Faktor',
    'two_factor_enabled_text'        => 'Aktifkan Dua Faktor',
    'two_factor_reset'        => 'Reset Dua Faktor Rahasia',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Dua perangkat faktor berhasil di-reset',
    'two_factor_reset_error'          => 'Dua faktor perangkat reset gagal',
    'two_factor_enabled_warning'        => 'Mengaktifkan dua faktor jika saat ini tidak diaktifkan akan segera memaksa Anda untuk melakukan otentikasi dengan perangkat yang terdaftar di Google Auth. Anda akan memiliki kemampuan untuk mendaftarkan perangkat Anda jika seseorang tidak terdaftar saat ini.',
    'two_factor_enabled_help'        => 'Ini akan mengaktifkan autentikasi dua faktor menggunakan Google Authenticator.',
    'two_factor_optional'        => 'Selektif (Pengguna dapat mengaktifkan atau menonaktifkan jika diizinkan)',
    'two_factor_required'        => 'Diperlukan untuk semua pengguna',
    'two_factor_disabled'        => 'Cacat',
    'two_factor_enter_code'	=> 'Masukkan Kode Dua Faktor',
    'two_factor_config_complete'	=> 'Kirim Kode',
    'two_factor_enabled_edit_not_allowed' => 'Administrator Anda tidak mengizinkan Anda untuk mengedit pengaturan ini.',
    'two_factor_enrollment_text'	=> "Diperlukan dua faktor otentikasi, namun perangkat Anda belum terdaftar. Buka aplikasi Google Authenticator Anda dan pindai kode QR di bawah ini untuk mendaftarkan perangkat Anda. Setelah mendaftarkan perangkat Anda, masukkan kode di bawah ini",
    'require_accept_signature'      => 'Membutuhkan tanda tangan',
    'require_accept_signature_help_text'      => 'Mengaktifkan fitur ini akan mengharuskan pengguna untuk secara fisik menandatangani untuk menerima aset.',
    'left'        => 'kiri',
    'right'        => 'kanan',
    'top'        => 'atas',
    'bottom'        => 'bawah',
    'vertical'        => 'vertikal',
    'horizontal'        => 'horisontal',
    'unique_serial'                => 'Nomor seri unik',
    'unique_serial_help_text'                => 'Menandai boks ini akan membuat adanya batasan keunikan pada tiap nomor seri aset',
    'zerofill_count'        => 'Jarak tag aset, termasuk angka nol',
    'username_format_help'   => 'Pengaturan ini hanya akan digunakan oleh proses impor jika nama pengguna tidak diberikan dan kami harus membuatkan nama pengguna untuk Anda.',
    'oauth_title' => 'OAuth API Settings',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
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
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Pembersihan catatan yang telah terhapus',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Nomor Karyawan',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Tabel database Anda telah dibuat',
    'setup_migration_output' => 'Keluaran migrasi:',
    'setup_migration_create_user' => 'Selanjutnya: Buat Pengguna',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => 'Judul',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => 'Tipe Barcode 2D',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The URL the 2D barcode points to when scanned',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Default',
    'none'                  => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Upload default avatar',

];
