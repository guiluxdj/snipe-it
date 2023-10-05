<?php

return array(
    'about_licenses_title'      => 'О лицензиях',
    'about_licenses'            => 'Лицензии используются для отслеживания программного обеспечения.  Как правило, количество пользователей, которые могут их использовать - ограничено',
    'checkin'  					=> 'Отвязать лицензию',
    'checkout_history'  		=> 'История привязок',
    'checkout'  				=> 'Привязать лицензию',
    'edit'  					=> 'Редактировать лицензию',
    'filetype_info'				=> 'Разрешенные типы файлов: png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, и rar.',
    'clone'  					=> 'Клонировать лицензию',
    'history_for'  				=> 'История для ',
    'in_out'  					=> 'Отвязано / Привязано',
    'info'  					=> 'Информация о лицензии',
    'license_seats'  			=> 'Лицензируемых мест',
    'seat'  					=> 'Место',
    'seats'  					=> 'Мест',
    'software_licenses'  		=> 'Лицензии ПО',
    'user'  					=> 'Пользователь',
    'view'  					=> 'Показать лицензию',
    'delete_disabled'           => 'Эта лицензия не может быть удалена потому, что некоторые места по-прежнему используют её.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Изъять все места',
                'modal'             => 'Это действие освободит одно место. | Это действие освободит все места :checkedout_seats_count для этой лицензии.',
                'enabled_tooltip'   => 'Освободить назначения ВСЕХ мест на эту лицензию как от пользователей, так и от активов',
                'disabled_tooltip'  => 'Недоступно, т.к. в настоящее время нет выданных (назначенных) мест',
                'disabled_tooltip_reassignable'  => 'Недоступно, т.к. Лицензия не переназначаема',
                'success'           => 'Лицензия успешно получена! | Все лицензии были успешно получены!',
                'log_msg'           => 'Принято через массовую выдачу лицензий в веб-интерфейсе лицензии',
            ],

            'checkout_all'              => [
                'button'                => 'Выдать все места',
                'modal'                 => 'Это действие назначит одно место первому доступному пользователю. | Это действие назначит все :available_seats_count места первым доступным пользователям. Пользователь считается доступным для этого места, если у него еще нет этой лицензии на него, и свойство Auto-Assign License включено в его учетной записи.',
                'enabled_tooltip'   => 'Выдать ВСЕ места (или сколько доступно) на ВСЕХ пользователей',
                'disabled_tooltip'  => 'Недоступно, т.к. в настоящее время нет свободных лицензий',
                'success'           => 'Лицензия успешно выдана! | :count лицензий были успешно выданы!',
                'error_no_seats'    => 'Нет оставшихся мест для этой лицензии.',
                'warn_not_enough_seats'    => ':count пользователей получили эту лицензию, но у нас закончились свободные лицензии.',
                'warn_no_avail_users'    => 'Нечего делать. Нет пользователей, у которых еще нет этой лицензии.',
                'log_msg'           => 'Оформлено через массовую выдачу лицензий в веб-интерфейсе лицензии',


            ],
    ],
);
