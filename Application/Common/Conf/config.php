<?php
return array(
	 //'配置项'=>'配置值'
	 // 添加数据库配置信息
	 // 'URL_CASE_INSENSITIVE'  =>  true, 
	 // 'DB_TYPE'   => 'mysql', // 数据库类型
	 // 'DB_HOST'   => 'localhost', // 服务器地址
	 // 'DB_NAME'   => 'myweb', // 数据库名
	 // 'DB_USER'   => 'root', // 用户名
	 // 'DB_PWD'    => '123', // 密码
	 // 'DB_PORT'   => 3306, // 端口
	 // 'DB_PREFIX' => 't_', // 数据库表前缀    
	 // 'DEFAULT_MODULE'     => 'Index', //默认模块    
	 // 'URL_MODEL'          => '2', //URL模式    
	 // 'USER_CONFIG'        => array(        
		 // 'USER_AUTH' => true,        
		 // 'USER_TYPE' => 2,    
	 // ),
	 'URL_MODEL' =>  2,
	 'URL_ROUTER_ON' =>  true,   // 是否开启URL路由
	 'SESSION_AUTO_START' => true, //是否开启session
	 'DB_DSN' => 'mysql://root:123@localhost:3306/myweb'
);