<?php
/**
 * Authentication Language Lines
 * The following language lines are used during authentication for various
 * messages that we need to display to the user.
 */
return [

    'failed' => 'Цей обліковий запис не знайдено.',
    'throttle' => 'Забагато спроб входу в систему. Будь ласка, спробуйте ще раз через :seconds секунд.',

    // Login & Register
    'sign_up' => 'Реєстрація',
    'log_in' => 'Увійти',
    'log_in_with' => 'Увійти через :socialDriver',
    'sign_up_with' => 'Зареєструватися через :socialDriver',
    'logout' => 'Вихід',

    'name' => 'Ім\'я',
    'username' => 'Логін',
    'email' => 'Адреса електронної пошти',
    'password' => 'Пароль',
    'password_confirm' => 'Підтвердження пароля',
    'password_hint' => 'Повинен бути щонайменше 8 символів',
    'forgot_password' => 'Забули пароль?',
    'remember_me' => 'Запам\'ятати мене',
    'ldap_email_hint' => 'Введіть email для цього облікового запису.',
    'create_account' => 'Створити обліковий запис',
    'already_have_account' => 'Вже є обліковий запис?',
    'dont_have_account' => 'Немає облікового запису?',
    'social_login' => 'Вхід через соціальну мережу',
    'social_registration' => 'Реєстрація через соціальну мережу',
    'social_registration_text' => 'Реєстрація і вхід через інший сервіс.',

    'register_thanks' => 'Дякуємо за реєстрацію!',
    'register_confirm' => 'Будь ласка, перевірте свою електронну пошту та натисніть кнопку підтвердження, щоб отримати доступ до :appName.',
    'registrations_disabled' => 'Реєстрацію вимкнено',
    'registration_email_domain_invalid' => 'Цей домен електронної пошти заборонений для реєстрації',
    'register_success' => 'Дякуємо за реєстрацію! Ви зареєстровані та ввійшли в систему.',

    // Login auto-initiation
    'auto_init_starting' => 'Attempting Login',
    'auto_init_starting_desc' => 'We\'re contacting your authentication system to start the login process. If there\'s no progress after 5 seconds you can try clicking the link below.',
    'auto_init_start_link' => 'Proceed with authentication',

    // Password Reset
    'reset_password' => 'Скинути пароль',
    'reset_password_send_instructions' => 'Введіть адресу електронної пошти нижче, і вам буде надіслано електронне повідомлення з посиланням на зміну пароля.',
    'reset_password_send_button' => 'Надіслати посилання для скидання пароля',
    'reset_password_sent' => 'Посилання для скидання пароля буде надіслано на :email, якщо ця електронна адреса вказана в системі.',
    'reset_password_success' => 'Ваш пароль успішно скинуто.',
    'email_reset_subject' => 'Скинути ваш пароль :appName',
    'email_reset_text' => 'Ви отримали цей електронний лист, оскільки до нас надійшов запит на скидання пароля для вашого облікового запису.',
    'email_reset_not_requested' => 'Якщо ви не надсилали запит на скидання пароля, подальші дії не потрібні.',

    // Email Confirmation
    'email_confirm_subject' => 'Підтвердьте свою електронну пошту на :appName',
    'email_confirm_greeting' => 'Дякуємо, що приєдналися до :appName!',
    'email_confirm_text' => 'Будь ласка, підтвердьте свою адресу електронної пошти, натиснувши кнопку нижче:',
    'email_confirm_action' => 'Підтвердити Email',
    'email_confirm_send_error' => 'Необхідно підтвердження електронною поштою, але система не змогла надіслати електронний лист. Зверніться до адміністратора, щоб правильно налаштувати електронну пошту.',
    'email_confirm_success' => 'Ваша адреса електронної пошти була підтверджена! Тепер ви можете увійти в систему, використовуючи цю адресу електронної пошти.',
    'email_confirm_resent' => 'Лист з підтвердженням надіслано, перевірте свою пошту.',

    'email_not_confirmed' => 'Адресу електронної скриньки не підтверджено',
    'email_not_confirmed_text' => 'Ваша електронна адреса ще не підтверджена.',
    'email_not_confirmed_click_link' => 'Будь-ласка, натисніть на посилання в електронному листі, яке було надіслано після реєстрації.',
    'email_not_confirmed_resend' => 'Якщо ви не можете знайти електронний лист, ви можете повторно надіслати підтвердження електронною поштою, на формі нижче.',
    'email_not_confirmed_resend_button' => 'Повторне підтвердження електронної пошти',

    // User Invite
    'user_invite_email_subject' => 'Вас запросили приєднатися до :appName!',
    'user_invite_email_greeting' => 'Для вас створено обліковий запис на :appName.',
    'user_invite_email_text' => 'Натисніть кнопку нижче, щоб встановити пароль облікового запису та отримати доступ:',
    'user_invite_email_action' => 'Встановити пароль облікового запису',
    'user_invite_page_welcome' => 'Ласкаво просимо до :appName!',
    'user_invite_page_text' => 'Для завершення процесу створення облікового запису та отримання доступу вам потрібно задати пароль, який буде використовуватися для входу в :appName в майбутньому.',
    'user_invite_page_confirm_button' => 'Підтвердити пароль',
    'user_invite_success_login' => 'Пароль встановлено, ви повинні увійти в систему, використовуючи свій встановлений пароль для доступу :appNam!',

    // Multi-factor Authentication
    'mfa_setup' => 'Налаштувати двофакторну автентифікацію',
    'mfa_setup_desc' => 'Двофакторна аутентифікація додає ще один рівень безпеки для вашого облікового запису.',
    'mfa_setup_configured' => 'Вже налаштовано',
    'mfa_setup_reconfigure' => 'Переналаштувати',
    'mfa_setup_remove_confirmation' => 'Ви впевнені, що хочете видалити цей метод багатофакторної автентифікації?',
    'mfa_setup_action' => 'Встановлення',
    'mfa_backup_codes_usage_limit_warning' => 'Залишилося менше 5 резервних кодів, Будь ласка, створіть та збережіть новий набір до того, як у вас не вистачає кодів, щоб запобігти блокуванню вашої обліковки.',
    'mfa_option_totp_title' => 'Мобільний додаток',
    'mfa_option_totp_desc' => 'Для використання багатофакторної автентифікації вам потрібен мобільний додаток, який підтримує TOTP такі як Google Authenticator, Authy або Microsoft Authenticator.',
    'mfa_option_backup_codes_title' => 'Резервні коди',
    'mfa_option_backup_codes_desc' => 'Безпечно зберігайте набір резервних кодів з використанням одноразового використання, які можна увійти, щоб підтвердити свою особу.',
    'mfa_gen_confirm_and_enable' => 'Підтвердити та увімкнути',
    'mfa_gen_backup_codes_title' => 'Налаштування резервних кодів',
    'mfa_gen_backup_codes_desc' => 'Зберігайте список кодів в безпечному місці. Для доступу до системи ви зможете використовувати один з кодів як другий механізм аутентифікації.',
    'mfa_gen_backup_codes_download' => 'Завантажити коди',
    'mfa_gen_backup_codes_usage_warning' => 'Кожний код можна використати лише один раз',
    'mfa_gen_totp_title' => 'Налаштування мобільного додатка',
    'mfa_gen_totp_desc' => 'Для використання багатофакторної автентифікації вам потрібен мобільний додаток, який підтримує TOTP такі як Google Authenticator, Authy або Microsoft Authenticator.',
    'mfa_gen_totp_scan' => 'Проскануйте QR-код внизу за допомогою бажаного додатку для аутентифікації, щоб розпочати.',
    'mfa_gen_totp_verify_setup' => 'Перевірка налаштувань',
    'mfa_gen_totp_verify_setup_desc' => 'Переконайтеся, що все працює, ввівши код, згенерований у вашому додатку аутентифікації, в полі вводу нижче:',
    'mfa_gen_totp_provide_code_here' => 'Вкажіть код вашої програми тут',
    'mfa_verify_access' => 'Підтвердити доступ',
    'mfa_verify_access_desc' => 'Ваш обліковий запис користувача вимагає підтвердження за допомогою додаткового рівня перевірки, перш ніж отримати доступ. Перевірте, використовуючи один з ваших налаштованих способів для продовження.',
    'mfa_verify_no_methods' => 'Немає налаштованих методів',
    'mfa_verify_no_methods_desc' => 'Для вашого облікового запису не знайдено жодних методів багатофакторної аутентифікації. Вам потрібно буде налаштувати хоча б один спосіб перш ніж отримати доступ.',
    'mfa_verify_use_totp' => 'Перевірити за допомогою мобільного додатку',
    'mfa_verify_use_backup_codes' => 'Перевірка використовуючи резервний код',
    'mfa_verify_backup_code' => 'Резервний код',
    'mfa_verify_backup_code_desc' => 'Введіть один з резервних кодів нижче:',
    'mfa_verify_backup_code_enter_here' => 'Введіть резервний код тут',
    'mfa_verify_totp_desc' => 'Введіть код, згенерований за допомогою мобільного додатку:',
    'mfa_setup_login_notification' => 'Налаштовано багатофакторний метод аутентифікації. Будь ласка, зараз увійдіть в систему знову, використовуючи налаштований метод.',
];
