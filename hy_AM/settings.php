<?php

/**
 * SETTINGS INTERFACE INTERNATIONALIZATION
 *
 * en_US
 */

$lang = array
(
    'default_location' => 'Լռությամբ վայրը',
    'select_default_location' => 'Ընտրեք լռությամբ երկիրը',
    'download_city_list' => 'Ստանալ քաղաքների անունները ԳեոԱնուններից',
    'multiple_countries' => 'Համակարգը ներառու՞մ է մի քանի երկրներ.', 
    'map_settings' => 'Քարտեզի Կարգավորումներ',
    'configure_map' => 'Ճշգրտել Քարտեզը',
    'default_map_view' => 'Լռությամբ քարտեզի տեսքը',
    'default_zoom_level' => 'Լռությամբ քարտեզի Zoom-ի մակարդակը',
    'set_location' => 'Նշեք քարտեզի վրա ճշգրիտ վայրը',
    'map_provider' => array
	(
		'name'		=> 'Քարտեզի աղբյուրը',
		'info'		=> 'Ընտրեք քարտեզի ապահովման աղբյուրը, ստացեք API բանալի ապահովողի կայքից և մուտքագրեք այդ API բանալին',
        'choose'    => 'Ընտրեք քարտեզի ապահովման աղբյուրը',
        'get_api'   => 'Ստացեք API բանալին',
        'enter_api' => 'Մուտքագրեք ստացված API բանալին'
	),
    'site' => array
	(
		'display_contact_page' => 'Ցուցադրել "Կապ" էջը',
        'display_howtohelp_page' => 'Ցուցադրել "Ինչպե՞ս օգնել" էջը',
        'email_alerts' => 'Ծանուցումների էլ. փոստի հասցեն',
        'email_notice' => '<span>Որպեսզի էլ. փոստով ստանաք ահազանգերը, <a href="'.url::base().'admin/settings/email">կարգավորեք Ձեր էլ. փոստի պարամետրերը</a>.</span>',
        'email_site' => 'Կայքի էլ. փոստի հասցեն',
        'title'		=> 'Կայքի կարգավորումներ',
		'name'		=> 'Կայքի Անվանումը',
        'tagline'    => 'Կայքի Վերնագիրը',
        'items_per_page'   => 'Ահազանգերի քանակը մեկ էջում (կայքում)',
        'items_per_page_admin' => 'Ահազանգերի քանակը մեկ էջում (ադմինիստրատորի վահանակում)',
        'allow_reports' => 'Թույլատրե՞լ օգտագործողներին ահազանգել',
        'allow_comments' => 'Թույլատրե՞լ օգտագործողներին մեկնաբանել ահազանգերը',
        'allow_feed' => 'Ցուցադրե՞լ RSS լրահոսը կայքում',
        'allow_clustering' => 'Կլաստերավորե՞լ ահազանգերը քարտեզի վրա',
        'default_category_colors' => 'Բոլոր կատեգորիաների համար լռությամբ գույնը',
        'google_analytics' => 'Google Analytics',
        'google_analytics_example' => 'Web Property ID - Formato: UA-XXXXX-XX',
        'twitter_configuration' => 'Twitter իրավագրերը',
        'twitter_hashtags' => 'Հեշտեգեր - բաժանեք ստորակետերով ',
        'laconica_configuration' => 'Laconica իրավագրերը',
        'laconica_site' => 'Laconica կայքը ',
        'language' => 'Կայքի լեզուն',
        'api_akismet' => 'Akismet Բանալի',
        'kismet_notice' => 'Պաշտպանեք ՍՊԱՄ-ից, օգտագործելով <a href="http://akismet.com/" target="_blank">Akismet</a>Automattic կողմից. <BR />Դուք կարող եք ստանալ անվճար API բանալի գրանցելով <a href="http://en.wordpress.com/api-keys/" target="_blank">WordPress.com հաշիվ</a>',
        'share_site_stats' => 'Ուղարկել կայքի վիճակագրությունը API'
	),
	'cleanurl' => array 
	(
		'title' => 'Մաքուր URL-ներ',
		'enable_clean_url' => 'Թույլատրել մաքուր URL-ներ',
		'clean_url_enabled' => 'Հնարավորություն է տալիս դիմել Ushahidi-ին առանց հասցեի տողում նշելով "index.php":',
		'clean_url_disabled' => 'Ձեր սերվերը թույլ չի տալիս օգտագործել մաքուր URL-ներ: Դուք պետք է փոփոխություններ կատարեք Ձեր սերվերի կարգավորումներում: Ավելի մանրամասն կարող եք կարդալ <a href="http://forums.ushahidi.com/topic/server-configuration-for-apache-mod-rewrite" target="_blank">այստեղ</a>',
	),
    'sms' => array
	(
        'title' => 'Կարճ հաղորդագրությունների (SMS) կարգավորումներ',
        'option_1'		=> 'Տարբերակ 1: Օգտագործել Frontline SMS', 
		'option_2'		=> 'Տարբերակ 2: Օգտագործել Global SMS Gateway',
        'flsms_description' => 'FrontlineSMS-ը անվճար բաց կոդով ծրագիր է, որը հնարավորություն է տալիս նոուտբուքը կամ բջջային հեռախոսը վերածել հաղորդակցության կենտրոնի: Համակարգը հնարավորություն է տալիս օգտագործողներին ուղարկել և ստանալ կարճ հաղորդագրություններ մեծ խմբերի համար բջջային հեռախոսներով: Սեղմեք մոխրագույն կոճակը FrontlineSMS.com բեռնման հարցում ուղարկելու համար:',
        'flsms_download'    => 'Բեռնեք FrontlineSMS-ը  և տեղադրեք այն Ձեր համակարգչում',
        'flsms_synchronize'   => 'Սինքրոնացրեք Ushahidi-ի հետ',
        'flsms_instructions' => 'FrontlineSMS ստացված հաղորդագրությունները կարող են սինքրոնացվել Ushahidi-ի հետ: Թե ինչպես սինքրոնացնել, կարող եք մանրամասն կարդալ <strong><a href="http://wiki.ushahididev.com/doku.php?id=how_to_use_ushahidi_alpha#how_to_setup_frontlinesms_to_sync_with_ushahidi" target="_blank">այստեղ</a></strong>: Ստորև նշված բանալին և հղումը անհրաժեշտ կլինեն FrontlineSMS-ի հետ սինքրոնացման համար:',
        'flsms_key' => 'Ushahidi-ի հետ սինքրոնացման Ձեր բանալին',// Your Ushahidi Sync Key
        'flsms_link' => 'FrontlineSMS HTTP Post հղում', 
        'flsms_text_1' => 'Մուտքագրեք հեռախոսահամարը(ները), որը միացված է FrontlineSMS-ին:',
        'flsms_text_2' => 'Համարը մուտքագրեք առանց որևէ + կամ - նշանների',
        'clickatell_text_1' => 'Միացեք Clickatell ծառայությանը <a href="https://www.clickatell.com/central/user/client/step1.php?prod_id=2" target="_blank">հետևյալ հղման միջոցով</a>',
        'clickatell_text_2' => 'Ստորև մուտքագրեք Clickatell-ի Ձեր տվյալները',
        'clickatell_api' => 'Ձեր Clickatell API Համարը',
        'clickatell_username' => 'Ձեր Clickatell Օգտագործողի Անունը', 
        'clickatell_password' => 'Ձեր Clickatell գաղտնաբառը', 
        'clickatell_check_balance' => 'Ստուգեք Ձեր Clickatell Կրեդիտի Հաշվեկշիռը', 
        'clickatell_load_balance' => 'Բեռնել Կրեդիտի Հաշվեկշիռը'
	),      
    
    'map' => array
	(
		'zoom'		=> 'Zoom-ի մակարդակը',
		'default_location'	=> 'Ընտրեք քարտեզի ապահովման աղբյուրը, ստացեք API բանալի ապահովողի կայքից և մուտքագրեք այդ API բանալին'
	),   
    
	'site_name' => array
	(
		'required'		=> 'Մուտքագրեք Կայքի Անվանումը',
		'length'		=> 'Կայքի Անվանումը պետք է պարունակի առնվազն 3 և առավելագույնը` 50 նիշ:',
	),
	
	'site_tagline' => array
	(
		'required'		=> 'Մուտքագրեք Կայքի Վերնագիրը',
		'length'		=> 'Կայքի Վերնագիրը պետք է պարունակի առնվազն 3 և առավելագույնը` 100 նիշ:',
	),
	
	'site_email' => array
	(
		'email'		  => 'Կայքի էլ. փոստի դաշտում նշված հասցեն ճիշտ չէ:',
		'length'	  => 'Կայքի էլ. փոստի դաշտում կարող եք մուտքագրել առնվազն 4 և առավելագույնը` 100 նիշ:'
	),
	
	'items_per_page' => array
	(
		'required'		=> 'Մուտքագրեք "Ահազանգերի քանակը մեկ էջում (կայքում)":',
		'between' => '"Ահազանգերի քանակը մեկ էջում (կայքում)" դաշտը չի պարունակում վավեր արժեք:'
	),
	
	'items_per_page_admin' => array
	(
		'required'		=> 'Մուտքագրեք "Ահազանգերի քանակը մեկ էջում (ադմինիստրատորի վահանակում)":',
		'between' => '"Ահազանգերի քանակը մեկ էջում (ադմինիստրատորի վահանակում)" դաշտը չի պարունակում վավեր արժեք:'
	),
	
	'allow_reports' => array
	(
		'required'		=> '"Թույլատրե՞լ օգտագործողներին ահազանգել" դաշտի արժեքը նշված չէ:',
		'between' => '"Թույլատրե՞լ օգտագործողներին ահազանգել" դաշտը չի պարունակում վավեր արժեք:'
	),
	
	'allow_comments' => array
	(
		'required'		=> '"Թույլատրե՞լ օգտագործողներին մեկնաբանել ահազանգերը" դաշտի արժեքը նշված չէ:',
		'between' => '"Թույլատրե՞լ օգտագործողներին մեկնաբանել ահազանգերը" դաշտը չի պարունակում վավեր արժեք:'
	),
	
	'allow_stat_sharing' => array
	(
		'required'		=> '"Ուղարկել կայքի վիճակագրությունը" դաշտի արժեքը նշված չէ:',
		'between' => '"Ուղարկել կայքի վիճակագրությունը" դաշտը չի պարունակում վավեր արժեք:'
	),
	
	'allow_feed' => array
	(
		'required'		=> '"Ցուցադրե՞լ RSS լրահոսը կայքում" դաշտի արժեքը նշված չէ:',
		'between' => '"Ցուցադրե՞լ RSS լրահոսը կայքում" դաշտը չի պարունակում վավեր արժեք:'
	),
	
	'default_map_all' => array
	(
		'required'		=> 'Մուտքագրեք գույնի արժեքը:',
		'alpha_numeric'		=> 'Մուտքագրեք գույնի վավեր արժեք:',
		'length'		=> 'Գույնի երկարությունը պետք է լինի 6 նիշ:',
	),
	
	'api_akismet' => array
	(
		'alpha_numeric'		=> 'Մուտքագրեք Akismet դաշտի համար վավեր արժեք:',
		'length'		=> 'Akismet դաշտը չի պարունակում վավեր արժեք:'
	),		
	
	'sms_no1' => array
	(
		'numeric'		=> '"Հեռախոսահամար 1" դաշտը պետք է պարունակի միայն թվեր:',
		'length' => '"Հեռախոսահամար 1" դաշտը չի պարունակում վավեր արժեք:'
	),
	
	'sms_no2' => array
	(
		'numeric'		=> '"Հեռախոսահամար 2" դաշտը պետք է պարունակի միայն թվեր:',
		'length' => '"Հեռախոսահամար 2" դաշտը չի պարունակում վավեր արժեք:'
	),
	
	'sms_no3' => array
	(
		'numeric'		=> '"Հեռախոսահամար 3" դաշտը պետք է պարունակի միայն թվեր:',
		'length' => '"Հեռախոսահամար 3" դաշտը չի պարունակում վավեր արժեք:'
	),
	
	'clickatell_api' => array
	(
		'required'		=> 'Մուտքագրեք Clickatell API Համարը:',
		'length'		=> 'Clickatell API Համարը պետք է պարունակի առավելագույնը 20 նիշ:',
	),
	
	'clickatell_username' => array
	(
		'required'		=> 'Մուտքագրեք Clickatell Օգտագործողի Անունը:',
		'length'		=> 'Clickatell Օգտագործողի Անունը պետք է պարունակի առավելագույնը 50 նիշ:',
	),
	
	'clickatell_password' => array
	(
		'required'		=> 'Մուտքագրեք Clickatell գաղտնաբառը:',
		'length'		=> 'Clickatell գաղտնաբառը պետք է պարունակի առնվազն 5 և առավելագույնը` 50 նիշ:',
	),

	'google_analytics' => array
	(
		'length'		=> 'Google Analytics դաշտը պետք է պարունակի վավեր Web Property ID UA-XXXXX-XX ձևաչափով:',
	),
	
	'email_username' => array
	(
		'required'		=> 'Մուտքագրեք Էլ. փոստի սերվերի Օգտագործողի անունը:',
		'length'		=> 'Էլ. փոստի սերվերի Օգտագործողի անունը պետք է պարունակի առավելագույնը 50 նիշ:',
	),
	
	'email_password' => array
	(
		'required'		=> 'Մուտքագրեք Էլ. փոստի սերվերի Գաղտնաբառը:',
		'length'		=> 'Էլ. փոստի սերվերի Գաղտնաբառը պետք է պարունակի առնվազն 5 և առավելագույնը` 50 նիշ:',
	),
	
	'email_port' => array
	(
		'numeric'		=> 'Էլ. փոստի սերվերի Պորտի համարը պետք է պարունակի միայն թվեր:',
		'length' 		=> 'Էլ. փոստի սերվերի Պորտի համարը չափազանց երկար է:'
	),
	
	'email_host' => array
	(
		'required'		=> 'Մուտքագրեք Էլ. փոստի սերվերի Host-ը:',
		'numeric'		=> 'Մուտքագրեք Էլ. փոստի սերվերի Host-ը:',
		'length' 		=> 'Էլ. փոստի սերվերի Host-ը չափազանց երկար է:'
	),
	
	'email_servertype' => array
	(
		'required'		=> 'Մուտքագրեք Էլ. փոստի սերվերի Տիպը:',
		'length' 		=> 'Էլ. փոստի սերվերի Տիպը չափազանց երկար է:'
	)		
	
);