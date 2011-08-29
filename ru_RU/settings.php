<?php
	$lang = array(
	'allow_comments' => array(
		'between' => 'Поле о допустимости отправлять комментарии заполнено неверно',
		'required' => 'Введите поле о допустимости отправлять комментарии.',
	),
	'allow_feed' => array(
		'between' => 'Поле о ленте RSS заполнен неверно',
		'required' => 'Введите поле о ленте RSS.',
	),
	'allow_reports' => array(
		'between' => 'Поле о допустимости отправлять отчёты заполнен неверно',
		'required' => 'Введите поле о допустимости отправлять отчёты.',
	),
	'allow_stat_sharing' => array(
		'between' => 'Поле об отправке статистики заполнен неверно',
		'required' => 'Введите поле об отправке статистики.',
	),
	'api' => array(
		'default_record_limit' => 'Количество записей по умолчанию отдаваемых по API-запросу',
		'maximum_record_limit' => 'Максимальное количество записей отдаваемых по API-запросу',
		'maximum_requests_per_ip_address' => 'Максимальное количество API-запросов с одного IP',
	),
	'api_akismet' => array(
		'alpha_numeric' => 'Поле Akismet заполено неверно',
		'length' => 'Поле Akismet заполено неверно',
	),
	'banner_image' => array(
		'default' => 'Не удолось загрузить баннер.',
		'size' => 'Уменьшете размер баннера.'
	),
	'cache_pages' => array(
		'between' => 'The cache pages field is required.',
		'required' => 'The cache pages field does not appear to contain a valid value?',
	),
	'cache_pages_lifetime' => array(
		'in_array' => 'Поле время жизни кеша заполенно неверно.',
		'required' => 'Укажите время жизни кеша.',
	),
	'cleanurl' => array(
		'clean_url_disabled' => 'Сервер не настроен для "красивой" адресной строки. <a href="http://forums.ushahidi.com/topic/server-configuration-for-apache-mod-rewrite" target="_blank">Более подробная информация</a>',
		'clean_url_enabled' => 'Эта опция позволит заходить на Ushahidi без "index.php" в адресной строке.',
		'enable_clean_url' => 'Включить "Красивый" URL',
		'title' => '"Красивая" адресная строка',
	),
	'clickatell_api' => array(
		'length' => 'Длина номера Clickatell API не должна превышать 20 символов',
		'required' => 'Введите Clickatell API номер',
	),
	'clickatell_password' => array(
		'length' => 'Длина пароли Clickatell не должна превышать 50 символов',
		'required' => 'Введите пароль Clickatell',
	),
	'clickatell_username' => array(
		'length' => 'Длина имени пользователя Clickatell не должна превышать 50 символов',
		'required' => 'Введите имя пользователя Clickatell',
	),
	'configure_map' => 'Настроить карту',
	'default_location' => 'Местоположение по умолчанию',
	'default_map_all' => array(
		'alpha_numeric' => 'Поле цвета содержит неверные данные',
		'length' => 'Поле цвета должно состоять из 6 символов (FF00FF)',
		'required' => 'Введите цвет',
	),
	'default_map_view' => 'Карта по умолчанию',
	'default_zoom_level' => 'Масштаб по умолчанию',
	'download_city_list' => 'Автозагрузка названий населенных пунктов выбранной страны (нажми меня!)',
	'email_host' => array(
		'length' => 'Поле хоста Сервера почты слишком длинный',
		'numeric' => 'Хост сервера почты должна содержать только цифры',
	),
	'email_password' => array(
		'length' => 'Длина пароли сервера почты не должна превышать 50 символов',
		'required' => 'Введите пароль сервера почты',
	),
	'email_port' => array(
		'length' => 'Поле порта Сервера почты слишком длинный',
		'numeric' => 'Порт сервера почты должна содержать только цифры',
	),
	'email_servertype' => array(
		'length' => 'Поле порта Сервера почты слишком длинный',
		'required' => 'Введите тип Сервера почты',
	),
	'email_username' => array(
		'length' => 'Длина имени пользователя сервера почты не должна превышать 50 символов.',
		'required' => 'Введите имя пользователя сервера почты',
	),
	'facebook' => array(
		'title' => 'Facebook настройки',
		'description' => 'To get the information below you will need to create a new facebook application at',
		'app_id' => 'Facebook App ID',
		'app_secret' => 'Facebook App Secret'
	),
	'google_analytics' => array(
		'length' => 'Поле Google Analytics должно содержать действующий Web Property ID в формате UA-XXXXX-XX.',
	),
	'https' => array(
	   'enable_https' => 'Включить HTTPS',
	   'https_disabled' => 'Эта опция включит доступ к Ushahidi в обычном режиме <strong>без https</strong> в префиксе URL',
	   'https_enabled' => 'Эта опция включит доступ к Ushahidi в зашифрованном режиме с <strong>https</strong> в префиксе URL',
	   'title' => 'HTTPS'
	),	
	'items_per_page' => array(
		'between' => 'Поле количества на страницу  (Главный) заполнен в неправильном формате',
		'required' => 'Количество отчётов на страницу для (Главный).',
	),
	'items_per_page_admin' => array(
		'between' => 'Поле количества на страницу  (Admin) заполнен в неправильном формате',
		'required' => 'Количество отчётов на страницу для (Admin)',
	),
	'map' => array(
		'default_location' => 'Картографический материал загружается напрямую. Выберите провайдера, получите API-ключ и введите его.',
		'zoom' => 'Масштаб',
	),
	'map_provider' => array(
		'choose' => 'Выберите провайдера карты',
		'enter_api' => 'Введите полученный API-ключ',
		'get_api' => 'Получите API-ключ',
		'info' => 'Выбор провайдера карты происходит напрямую с провайдером. Выберите провайдера, получите API-ключ, введите ключ на сайте',
		'name' => 'Провайдер карты',
	),
	'map_settings' => 'Настройка карты',
	'multiple_countries' => 'Данная карта будет использоваться больше чем в одном государстве?',
	'select_default_location' => 'Выберете страну',
	'set_location' => 'Кликните на карте чтобы уточнить местоположение',
	'site' => array(
		'allow_clustering' => 'Кластерировать Отчёты по Карте',
		'allow_comments' => 'Позволить пользователям отправлять комментарии к отчётам',
		'allow_feed' => 'Включить новостную ленту RSS на главной странице сайта',
		'allow_reports' => 'Позволить пользователям отправлять отчёты о событиях',
		'api_akismet' => 'Akismet ключ',
		'blocks_per_row' => 'Блоков в строке',
		'cache_pages' => 'Включить кэширование?',
		'cache_pages_lifetime' => 'Время жизни кэша',
		'checkins' => 'Проверка',
		'copyright_statement' => 'Авторское право',
		'default_category_colors' => 'Цвет по умолчанию для всех категорий',
		'display_contact_page' => 'Показывать страницу контактов',
		'display_howtohelp_page' => 'Показывать страницу "Как помочь"',
		'email_alerts' => 'E-mail для оповещений',
		'email_notice' => '<span> Чтобы получить отчёты по почте, пожалуйста настройте параметры вашего e-mail.</span>',
		'email_site' => 'E-mail веб-сайта',
		'google_analytics' => 'Google Analytics',
		'google_analytics_example' => 'Идентификатор Google Analytics - формат: UA-XXXXX-XX',
		'items_per_page' => 'Количество элементов на страницу - Главный',
		'items_per_page_admin' => 'Количество элементов на страницу - Admin',
		'kismet_notice' => 'Защититесь от спама с помощью <a href="http://akismet.com/" target="_blank">Akismet</a> от Automattic.<BR />Получить бесплатный API-ключ в <a href="http://en.wordpress.com/api-keys/" target="_blank">WordPress.com</a>',
		'laconica_configuration' => 'Laconica аккаунт',
		'laconica_site' => 'Laconica сайт ',
		'language' => 'Язык сайта',
		'message' => 'Важное сообщение',
		'name' => 'Название сайта',
		'private_deployment' => 'Закрытый доступ',
		'share_site_stats' => 'Отправлять статистику в API',
		'tagline' => 'Слоган',
		'title' => 'Параметры сайта',
		'twitter_configuration' => 'Твиттер-аккаунт',
		'twitter_hashtags' => 'Отделяйте хэштеги запятыми',
	),
	'site_email' => array(
		'email' => 'E-mail веб-сайта введен неправильно',
		'length' => 'Длина e-mail веб-сайта должна быть от 4 до 100 символов',
	),
	'site_name' => array(
		'length' => 'Длина названия сайта должен быть от 3 до 50',
		'required' => 'Введите название сайта',
	),
	'site_tagline' => array(
		'length' => 'Длина поля заголовка должна быть от 3 до 100 символов',
		'required' => 'Введите поле заголовка',
	),
	'sms' => array(
		'clickatell_api' => 'Введите ваш Clickatell API Номер',
		'clickatell_check_balance' => 'Проверьте ваш баланс на Clickatell',
		'clickatell_load_balance' => 'Загрузите баланс на Clickatell',
		'clickatell_password' => 'Введите ваш Clickatell пароль',
		'clickatell_text_1' => 'Подключитесь к услуге Clickatell в <a href="https://www.clickatell.com/central/user/client/step1.php?prod_id=2" target="_blank">clicking here</a>',
		'clickatell_text_2' => 'Введите вашу информацию Clickatell внизу',
		'clickatell_username' => 'Введите ваше Clickatell имя пользователя',
		'flsms_description' => 'FrontlineSMS бесплатная программа которая позволяет превратить ноутбук или мобильный телефон в центр управления. Установив, программа позволяет пользователям отправлять и получать SMS для большой группы через мобильные телефоны. Нажмите на кнопу для установки от FrontlineSMS.com',
		'flsms_download' => 'Скачайте Frontline SMS и установите на ваш компьютер',
		'flsms_instructions' => 'Сообщения полученные в FrontlineSMS можно синхронизировать с Ushahidi. Информацию о том как это сделать можно найти в <strong><a href="http://wiki.ushahididev.com/doku.php?id=how_to_use_ushahidi_alpha#how_to_setup_frontlinesms_to_sync_with_ushahidi" target="_blank">here</a></strong>. Вы должны получить ключ по ссылке чтобы синхронизироваться с FrontlineSMS',
		'flsms_key' => 'Это ключ синхронизации Ushahidi',
		'flsms_link' => 'FrontlineSMS HTTP Post ссылка',
		'flsms_synchronize' => 'Синхронизировать с Ushahidi',
		'flsms_text_1' => 'Введите номер телефона подключенный к FrontlineSMS в поле внизу',
		'flsms_text_2' => 'Введите номер без символов + или скобок',
		'option_1' => 'Option 1: Используйте FrontlineSMS',
		'option_2' => 'Option 2: Используйте GlobalSMS Gateway',
		'title' => 'Настройка SMS',
	),
	'sms_no1' => array(
		'length' => 'Телефон 1 содержит неверные значения',
		'numeric' => 'Телефон 1 должен содержать только цифры.',
	),
	'sms_no2' => array(
		'length' => 'Телефон 2 содержит неверные значения',
		'numeric' => 'Телефон 2 должен содержать только цифры',
	),
	'sms_no3' => array(
		'length' => 'Телефон 3 содержит неверные значения',
		'numeric' => 'Телефон 3 должен содержать только цифры',
	));
?>
