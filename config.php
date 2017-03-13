<?php
return array(
		//数据库配置
		'DB_TYPE'				=>	'mysql', //数据库类型
//		'DB_HOST'				=>	'47.90.59.14', //数据库服务器地址
//		'DB_NAME'				=>	'xinyali',  //数据库名称
//		'DB_USER'				=>	'xinyali', //数据库用户名
//		'DB_PWD'				=>	'xinyali321++', //数据库密码
		'DB_HOST'              	=>  '127.0.0.1', //数据库服务器地址
		'DB_NAME'               =>  'xinyali_0206',  //数据库名称
		'DB_USER'               =>  'root', //数据库用户名
		'DB_PWD'                =>  '123456', //数据库密码
		'DB_PORT'				=>	'3306', //数据库端口
		'DB_PREFIX'				=>	'yundu_', //数据表前缀

		//url配置
		'URL_MODEL'				=>	2, // URL模式,普通模式为0、PATHINFO模式为1、REWRITE模式为2和兼容模式为3
		'URL_HTML_SUFFIX'		=>	'.html',
		'URL_PATHINFO_DEPR' 	=>	'/',
		'SHOW_ERROR_MSG'		=>	true,// 显示错误信息
		'SHOW_PAGE_TRACE'		=>	false,
		'TMPL_CACHE_ON'			=>	false, // 模板编译缓存 ,false的话每次都重新编译模板

		//登录密钥
		'AUTH_KEY'				=>	'd8L7s\h5B--0d4b7sesw[vff1K]5zdf7RaQcbdfsc(9W3E5X1p2)Qfgayc*6dO82c0dJc83CTH9',

		//cookie设置
		'COOKIE_DOMAIN'			=>	'.xinpear.com', // Cookie有效域名
		'COOKIE_SUB_DOMAIN'		=>	'.xinyali.net', // Cookie有效域名
        'COOKIE_BACK_DOMAIN'	=>	'.xinpear.com', // 备用
		'COOKIE_PATH'			=>	'/',  // Cookie路径
		'COOKIE_PREFIX'			=>	'yundu_', // Cookie前缀 避免冲突
		'COOKIE_EXPIRE'			=>	3600,
		'SESSION_PREFIX'		=>	'yundu_', //Session前缀
		/* 模板相关配置 */
		'LANG_SWITCH_ON'		=>	true,
		'LANG_AUTO_DETECT'		=>	true, // 自动侦测语言 开启多语言功能后有效
		'LANG_LIST'				=>	'zh-cn', // 允许切换的语言列表 用逗号分隔
		'VAR_LANGUAGE'			=>	'lang', // 默认语言切换变量
		'TMPL_PARSE_STRING'		=>	array(
			'PUBLIC_CSS'		=>	__ROOT__ . '/Public/css',
			'PUBLIC_IMG'		=>	__ROOT__ . '/Public/images',
			'PUBLIC_JS'			=>	__ROOT__ . '/Public/js',
		),
		/* 模块定义 */
		'MODULE_ALLOW_LIST'		=>  array('Home','Oa','Agency','Machine','System','Software','Customer','Mall','Scene','Routine'),
		'DEFAULT_MODULE'		=>  'Home',  //默认模块
        /* 邮件相关配置 */
        'THINK_EMAIL' => array(
            'SMTP_HOST'   => 'hwsmtp.exmail.qq.com', //SMTP服务器
            'SMTP_PORT'   => '25', //SMTP服务器端口
            'SMTP_USER'   => 'service@newyali.cn', //SMTP服务器用户名
            'SMTP_PASS'   => 'Yali456', //SMTP服务器密码
            'FROM_EMAIL'  => 'service@newyali.cn', //发件人EMAIL
            'FROM_NAME'   => '鸭梨运营团队', //发件人名称
            'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
            'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
        ),
);
