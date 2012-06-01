<?php
	$lang = array(
	'comments_form_error' => '错误！',
	'country_name' => array(
		'single_country' => 'This deployment spans within one country only. Please make sure the report location is within the country '.ORM::factory('country', Kohana::config('settings.default_country'))->country.'.'
	),
	'custom_field' => array(
		'values' => '请为您的一项客户表单项填入有效值',
	),
	'data_include' => array(
		'between' => '请选择一个有效的项目下载',
		'numeric' => '请选择一个有效的项目下载',
	),
	'data_active' => array(
		'between' => 'Please select "Reports Awaiting Approval" or "Approved Reports" or both.',
		'numeric' => 'Please select "Reports Awaiting Approval" or "Approved Reports" or both.',
		'required' => 'Please select "Reports Awaiting Approval" or "Approved Reports" or both.',
	),
	'data_verified' => array(
		'between' => 'Please select "Reports Awaiting Verification" or "Verified Reports" or both.',
		'numeric' => 'Please select "Reports Awaiting Verification" or "Verified Reports" or both.',
		'required' => 'Please select "Reports Awaiting Verification" or "Verified Reports" or both.',
	),
	'data_point' => array(
		'between' => '一个选择有效的报告类型进行下载',
		'numeric' => '一个选择有效的报告类型进行下载',
		'required' => '一个选择有效的报告类型进行下载',
	),
	'from_date' => array(
		'date_mmddyyyy' => '发件日期无效',
		'range' => '请选择有效的发件日期。不能晚于今天。',
	),
	'incident_active' => array(
		'between' => '请为“批准该报告”选择一个有效的值',
		'required' => '请为“批准该报告”选择一个有效的值',
	),
	'incident_ampm' => array(
		'validvalues' => '上午/下午格式不正确',
	),
	'incident_category' => array(
		'numeric' => '类型栏格式不正确',
		'required' => '类型为必填项',
	),
	'incident_date' => array(
		'date_ddmmyyyy' => '日期格式不正确',
		'date_mmddyyyy' => '日期格式不正确',
		'required' => '日期为必填项',
	),
	'incident_description' => array(
		'required' => '描述为必填项',
	),
	'incident_hour' => array(
		'between' => '小时格式不正确',
		'required' => '小时为必填项',
	),
	'incident_information' => array(
		'alpha' => '请为“信息准确度”输入一个有效值',
		'length' => '请为“信息准确度”输入一个有效值',
	),
	'incident_minute' => array(
		'between' => '分钟格式不正确',
		'required' => '分钟为必填项',
	),
	'incident_news' => array(
		'url' => '新闻来源链接格式不正确',
	),
	'incident_photo' => array(
		'size' => '请确认您上传的照片大小不大于2MB',
		'type' => '上传照片格式无效。仅接受.JPG、.PNG和.GIF格式的图片',
		'valid' => '上传照片文件无效',
	),
	'incident_source' => array(
		'alpha' => '请为“来源可靠度”输入一个有效值',
		'length' => '请为“来源可靠度”输入一个有效值',
	),
	'incident_title' => array(
		'length' => '标题的长度须在3到200个字符之间',
		'required' => '标题栏为必填项',
		'csrf' => 'Possible CSRF attack. Did you really mean to create/edit a report?'
	),
	'incident_verified' => array(
		'between' => '请为“验证此报告”输入一个有效值',
		'required' => '请为“验证此报告”输入一个有效值',
	),
	'incident_video' => array(
		'url' => '视频链接中包含无效的URL地址',
	),
	'latitude' => array(
		'between' => '纬度值格式错误',
		'required' => '纬度值为必填项。您可以点击地图确定地点',
	),
	'locale' => array(
		'alpha_dash' => '地点栏无效',
		'exists' => '此报告已有该语言的翻译版本',
		'length' => '地点格式错误',
		'locale' => '原始报告与翻译报告的语言相同',
		'required' => '语言为必填项',
	),
	'location_name' => array(
		'length' => '地点名称长度必须在3到200个字符之间',
		'required' => '地点名为必填项',
	),
	'longitude' => array(
		'between' => '经度值格式错误',
		'required' => '经度值为必填项。您可以点击地图确定地点',
	),
	'person_email' => array(
		'email' => '邮件地址格式不正确',
		'length' => '邮件地址长度须在4至64个字符之间',
	),
	'person_first' => array(
		'length' => '名字长度须在3到100个字符之间',
	),
	'person_last' => array(
		'length' => '姓长度须在3到100个字符之间',
	),
	'to_date' => array(
		'date_mmddyyyy' => '收件日期格式错误',
		'range' => '请输入有效的收件日期，不得晚于今日',
		'range_greater' => '发送日期不得晚于收件日期',
	));
?>
