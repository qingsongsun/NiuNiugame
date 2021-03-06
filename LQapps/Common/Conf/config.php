<?php
/*
 * 通用配置文件
 * Author：国雾院theone（438675036@qq.com）
 * Date:2013-06-27
 * 凡树状结构表都添加 class 级别字段  作用于树状结构显示
 */
$config_array = array(

    //'配置项'=>'配置值' s********************************************************************************************************

    /* 应用设定 */
    'APP_USE_NAMESPACE' => true, // 应用类库是否使用命名空间
    'APP_SUB_DOMAIN_DEPLOY' => false, // 是否开启子域名部署
    'APP_SUB_DOMAIN_RULES' => array(), // 子域名部署规则
    'APP_DOMAIN_SUFFIX' => '', // 域名后缀 如果是com.cn net.cn 之类的后缀必须设置    
    'ACTION_SUFFIX' => '', // 操作方法后缀
    'MULTI_MODULE' => true, // 是否允许多模块 如果为false 则必须设置 DEFAULT_MODULE
    'MODULE_DENY_LIST' => array('Common', 'Attachment', 'User', 'Member'), // 设置禁止访问的模块列表
    'CONTROLLER_LEVEL' => 1, //多级控制器
    'APP_AUTOLOAD_LAYER' => 'Controller,Model', // 自动加载的应用类库层 关闭APP_USE_NAMESPACE后有效
    'APP_AUTOLOAD_PATH' => '', // 自动加载的路径 关闭APP_USE_NAMESPACE后有效

    //默认设定
    'APP_GROUP_LIST' => 'Api,Admin',
    'DEFAULT_GROUP' => 'Api',
    'MODULE_ALLOW_LIST' => array('Api', 'Admin', 'Ucenter'),
    'DEFAULT_MODULE' => 'Api',  // 默认模块
    'DEFAULT_CONTROLLER' => 'Index', // 默认控制器名称
    'DEFAULT_ACTION' => 'index', // 默认操作名称
    'DEFAULT_M_LAYER' => 'Model', // 默认的模型层名称
    'DEFAULT_C_LAYER' => 'Controller', // 默认的控制器层名称
    'DEFAULT_CHARSET' => 'utf-8', // 默认输出编码
    'DEFAULT_TIMEZONE' => 'PRC',  // 默认时区
    'DEFAULT_AJAX_RETURN' => 'JSON',  // 默认AJAX 数据返回格式,可选JSON XML ...
    'DEFAULT_JSONP_HANDLER' => 'jsonpReturn', // 默认JSONP格式返回的处理方法
    'DEFAULT_FILTER' => 'htmlspecialchars', // 默认参数过滤方法 用于I函数...
    'EMAIL' => '438675036@qq.com',

    //Cookie设置
    'COOKIE_EXPIRE' => 0,    // Cookie有效期
    'COOKIE_DOMAIN' => '',      // Cookie有效域名
    'COOKIE_PATH' => '/',     // Cookie路径
    'COOKIE_PREFIX' => '',      // Cookie前缀 避免冲突
    'COOKIE_HTTPONLY' => '',     // Cookie的httponly属性 3.2.2新增


    //内置的模板引擎也可以直接支持在模板文件中采用PHP原生代码和模板标签的混合使用
    //'TMPL_ENGINE_TYPE' =>'PHP',

    //开启Thinkphp语言包
    'LANG_SWITCH_ON' => true,    //开启语言包功能
    'LANG_AUTO_DETECT' => true, // 自动侦测语言
    'DEFAULT_LANG' => 'zh-cn', // 默认语言
    'LANG_LIST' => 'zh-cn', //必须写可允许的语言列表
    'VAR_LANGUAGE' => 'l', // 默认语言切换变量


    // 数据库配置s
    'DB_FIELDS_CACHE' => true,        // 启用字段缓存
    'DB_CHARSET' => 'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE' => 1, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE' => true,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM' => 1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO' => '194', // 指定从服务器序号
    // 数据库配置e


    /* 数据缓存设置 */
    'SHOW_PAGE_TRACE' => FALSE,
    'S_PREFIX' => '_', //缓存分格
    'DATA_CACHE_TIME' => 3600, // 数据缓存有效期 0表示永久缓存
    'DATA_CACHE_COMPRESS' => false, // 数据缓存是否压缩缓存
    'DATA_CACHE_CHECK' => false, // 数据缓存是否校验缓存
    'DATA_CACHE_PREFIX' => '', // 缓存前缀
    'DATA_CACHE_TYPE' => 'File', // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
    'DATA_CACHE_PATH' => TEMP_PATH, // 缓存路径设置 (仅对File方式缓存有效)
    'DATA_CACHE_SUBDIR' => false, // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
    'DATA_PATH_LEVEL' => 1, // 子目录缓存级别
    'DATA_CACHE_ARRAY' => COMMON_ARRAY,//缓存数据
    'SYSTEM_MENU_CURRENT' => SYSTEM_CURRENT_PATH, // 系统菜单缓存目录


    /* 错误设置 */
    'ERROR_MESSAGE' => '页面错误！请稍后再试。强我中国梦，由我做起---国雾院theone。', //错误显示信息,非调试模式有效
    'ERROR_PAGE' => '/404.html', // 错误定向页面
    'SHOW_ERROR_MSG' => true, // 显示错误信息
    'TRACE_MAX_RECORD' => 100, // 每个级别的错误信息 最大记录数

    /* 日志设置 */
    'LOG_RECORD' => true,// 默认不记录日志
    'LOG_TYPE' => 'File', // 日志记录类型 默认为文件方式
    'LOG_LEVEL' => 'EMERG,ALERT,CRIT,ERR', // 允许记录的日志级别
    'LOG_FILE_SIZE' => 2097152, // 日志文件大小限制
    'LOG_EXCEPTION_RECORD' => true, // 是否记录异常信息日志

    /* SESSION设置 */
    'SESSION_AUTO_START' => true, // 是否自动开启Session
    'SESSION_OPTIONS' => array(), // session 配置数组 支持type name id path expire domain 等参数
    'SESSION_TYPE' => '', // session hander类型 默认无需设置 除非扩展了session hander驱动
    'SESSION_PREFIX' => '', // session 前缀
    //'VAR_SESSION_ID'      =>  'session_id',     //sessionID的提交变量


    /* 模板引擎设置 */
    'TMPL_CONTENT_TYPE' => 'text/html', // 默认模板输出类型
    'TMPL_DETECT_THEME' => true, // 自动侦测模板主题
    'TMPL_TEMPLATE_SUFFIX' => '.html', // 默认模板文件后缀
    'TMPL_FILE_DEPR' => '/', //模板文件CONTROLLER_NAME与ACTION_NAME之间的分割符


    // 布局设置
    'TMPL_ENGINE_TYPE' => 'Think', // 默认模板引擎 以下设置仅对使用Think模板引擎有效
    'TMPL_CACHFILE_SUFFIX' => '.php', // 默认模板缓存后缀
    'TMPL_DENY_FUNC_LIST' => 'echo,exit', // 模板引擎禁用函数
    'TMPL_DENY_PHP' => false, // 默认模板引擎是否禁用PHP原生代码
    'TMPL_L_DELIM' => '{', // 模板引擎普通标签开始标记
    'TMPL_R_DELIM' => '}', // 模板引擎普通标签结束标记
    'TMPL_VAR_IDENTIFY' => 'array', // 模板变量识别。留空自动判断,参数为'obj'则表示对象
    'TMPL_STRIP_SPACE' => true, // 是否去除模板文件里面的html空格与换行
    'TMPL_CACHE_ON' => true, // 是否开启模板编译缓存,设为false则每次都会重新编译
    'TMPL_CACHE_PREFIX' => '', // 模板缓存前缀标识，可以动态改变
    'TMPL_CACHE_TIME' => 0, // 模板缓存有效期 0 为永久，(以数字为值，单位:秒)
    'TMPL_LAYOUT_ITEM' => '{__CONTENT__}', // 布局模板的内容替换标识
    'LAYOUT_ON' => false, // 是否启用布局
    'LAYOUT_NAME' => 'layout', // 当前布局名称 默认为layout
    // Think模板引擎标签库相关设定

    /* URL设置 */
    'URL_CASE_INSENSITIVE' => false, // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL' => 1, // URL访问模式,可选参数0、1、2、3,代表以下四种模式：0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'URL_PATHINFO_DEPR' => '/', // PATHINFO模式下，各参数之间的分割符号
    'URL_PATHINFO_FETCH' => 'ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL', // 用于兼容判断PATH_INFO 参数的SERVER替代变量列表
    'URL_REQUEST_URI' => 'REQUEST_URI', // 获取当前页面地址的系统变量 默认为REQUEST_URI
    'URL_HTML_SUFFIX' => '', // URL伪静态后缀设置
    'URL_DENY_SUFFIX' => 'ico|png|gif|jpg', // URL禁止访问的后缀设置
    'URL_PARAMS_BIND' => true, // URL变量绑定到Action方法参数
    'URL_PARAMS_BIND_TYPE' => 0, // URL变量绑定的类型 0 按变量名绑定 1 按变量顺序绑定
    'URL_PARAMS_FILTER' => false, // URL变量绑定过滤
    'URL_PARAMS_FILTER_TYPE' => '', // URL变量绑定过滤方法 如果为空 调用DEFAULT_FILTER
    'URL_404_REDIRECT' => '', // 404 跳转页面 部署模式有效
    'URL_ROUTER_ON' => false, // 是否开启URL路由
    'URL_ROUTE_RULES' => array(), // 默认路由规则 针对模块
    'URL_MAP_RULES' => array(), // URL映射定义规则

    /* 系统变量名称设置 */
    'VAR_MODULE' => 'g', // 默认模块获取变量
    'VAR_ADDON' => 'addon', // 默认的插件控制器命名空间变量
    'VAR_CONTROLLER' => 'm', // 默认控制器获取变量
    'VAR_ACTION' => 'a', // 默认操作获取变量
    'VAR_AJAX_SUBMIT' => 'ajax', // 默认的AJAX提交变量
    'VAR_JSONP_HANDLER' => 'callback',
    'VAR_PATHINFO' => 's', // 兼容模式PATHINFO获取变量例如 ?s=/module/action/id/1 后面的参数取决于URL_PATHINFO_DEPR
    'VAR_TEMPLATE' => 't', // 默认模板切换变量
    'HTTP_CACHE_CONTROL' => 'private', // 网页缓存控制
    'CHECK_APP_DIR' => true, // 是否检查应用目录是否创建
    'FILE_UPLOAD_TYPE' => 'Local', // 文件上传方式
    'DATA_CRYPT_TYPE' => 'Think', // 数据加密方式	

    // 显示页面Trace信息
    'SHOW_PAGE_TRACE' => FALSE,


    /* 命名空间 */
    'AUTOLOAD_NAMESPACE' => array(
        'LQPublic' => APP_PATH . "Common/LQPublic/",//模块公共类
        'LQLibs' => APP_PATH . "Common/LQLibs/",//模块公共类
    ),
    //'配置项'=>'配置值' e********************************************************************************************************

    /* 开发人员相关信息 */
    'AUTHOR_INFO' => array(
        'author' => 'Little',
        'author_email' => '532243346@qq.com',
        'author_phone' => '13425647971',
    ),

    //环信配置
    'EASEMOB' => array(
        'app_key' => '1193161215115877#kefuchannelapp32922',//YOUR_CLIENT_ID
        'client_id' => 'YXA6UgM7sMJzEeaJ_TsXq3fCCw',//YOUR_CLIENT_ID
        'client_secret' => 'YXA6gwib0OIu_svsVCmga9o-S16xD_k',//YOUR_CLIENT_SECRET
        'url' => "https://a1.easemob.com/1193161215115877/kefuchannelapp32922",
        'token_path' => STATIC_TEMP . "token",
    ),

    //微信配置
    'WECHAT' => array(
        'appid' => 'wx29dedd3e19a1aa33',//AppID(应用ID)
        'appsecret' => 'c130c60afacbf09ee2c7103bb6427cb9',//AppSecret(应用密钥)
        'token' => 'wechat007',//Token
        'encodingAesKey' => 'u9JZJewtTLtoBaZFi9UiVmO2kQLa8sT9iA4jQTU142z',    //EncodingAESKey
        'MCHID' => '1413591402',//商户ID
        'KEY' => 'JykjLxj20160928hzqjnddnrxzxA2010',//商户支付密钥Key
        'logcallback' => 'lq_test',
        'debug' => false,
    ),


    'SYSTEM_SEO_TITLE' => '游戏科技',
    'SYSTEM_SEO_COPYRIGHT' => '&copy; Copyright 2013-2020 游戏科技',
    'WEB_SYS_ITEMS_NAME' => '游戏科技',//平台名称
    'WEB_SYS_DOMAIN' => 'http://www.qq-tech.cn/',//域名
    'WEB_SYS_TRYLOGINTIMES' => 3,//最大尝试登陆次数
    'WEB_SYS_TRYLOGINAFTER' => 3600 * 1,//超出登陆次数多少秒后再可以尝试
    'SYS_ALLOW_BACKUPDATA' => 1,//允许后台 数据库备份/修复 操作
    'SYS_ALLOW_MPORTDATA' => 0,//允许后台 数据库导入 操作

    //网站公共数组s
    'ROOT_CLASS' => array('根', '一级', '二级', '三级', '四级', '五级', '六级', '七级'), //相对于根级别
    'ARRAY_TARGET' => array("_self" => "_self", '_blank' => '_blank', "_parent" => "_parent", "_top" => "_top", "openWin" => "openWin"), //TARGET目标
    'ALERT_ARRAY' => array("success" => "操作成功", 'fail' => '操作失败', "error" => "操作失败,请刷新页面再尝试操作", "recordNull" => "该记录不存在或被处理了", "recordVisible" => "该记录正处于使用状态，不能删除，若要删除请先‘禁用’操作。", "saveOk" => "保存成功", "saveFail" => "保存失败", "saveError" => "保存出错", "tokenError" => "令牌验证失败", "delSuccess" => "删除成功", 'delFail' => '删除失败', 'delFailChild' => '删除失败,先删除子级。', "dataOut" => "数据不合法", "dataExists" => "数据已存在", "dataRequired" => "数据必填", "loginSuccess" => "登陆成功", "loginFail" => "登陆失败", "loginNull" => "请登录再操作。", "popNull" => "无权限操作。", "registerOk" => "注册成功", "registerError" => "注册失败", "popError" => "权限出错", "illegal_operation" => "非法操作"),//操作提示
    'lqAdminLog' => array('login' => '用户登陆', 'loginOut' => '用户登出', 'add' => '添加数据', 'edit' => '修改数据', 'opLabel' => '修改标题', 'opVisible' => '修改zlvisible状态', 'opDelectRecord' => '单id删除', 'opDelectCheckbox' => '选择id删除', 'opRecycleCheckbox' => '选择id回收', 'opSort' => '单id修改排序', 'opSortlist' => '列表排序', 'editPass' => '修改密码', 'clearCache' => '清理缓存', 'setPop' => '分配权限', 'opBackup' => '备份数据表', 'opRepair' => '优化/修复数据表', 'opDelectCheckbox' => '删除备份SQL', 'opImportData' => '导入备份SQL'),//日志操作标记

    //图片处理原始设置S
    'THUMB_TYPE_DATA' => array(
        'IMAGE_THUMB_SCALE' => '等比例缩放类型',//1
        'IMAGE_THUMB_FILLED' => '缩放后填充类型',//2
        'IMAGE_THUMB_CENTER' => '居中裁剪类型',//3
        'IMAGE_THUMB_NORTHWEST' => '左上角裁剪类型',//4
        'IMAGE_THUMB_SOUTHEAST' => '右下角裁剪类型',//5
        'IMAGE_THUMB_FIXED' => '固定尺寸缩放类型',//6
    ),
    'THUMB_WATER_TYPE' => array(
        'IMAGE_WATER_NORTHWEST' => '左上角水印',//1
        'IMAGE_WATER_NORTH' => '上居中水印',//2
        'IMAGE_WATER_NORTHEAST' => '右上角水印',//3
        'IMAGE_WATER_WEST' => '左居中水印',//4
        'IMAGE_WATER_CENTER' => '居中水印',//5
        'IMAGE_WATER_EAST' => '右居中水印',//6
        'IMAGE_WATER_SOUTHWEST' => '左下角水印',//7
        'IMAGE_WATER_SOUTH' => '下居中水印',//8
        'IMAGE_WATER_SOUTHEAST' => '右下角水印',//9
    ),
    'THUMB_CONFIG' => array(
        'INT_THUMB_MAX_WIDTH' => 150,//最大宽度
        'INT_THUMB_MAX_HEIGHT' => 150,//最大高度
        'THUMB_TYPE' => 'IMAGE_THUMB_SCALE',//缩略图类型
        'THUMB_WATER_OPEN' => 0,//水印开启
        'THUMB_WATER_IMAGE' => '/Public/data/lq.png',//水印图
        'INT_THUMB_WATER_ALPHA' => 100,//水印透明度
        'THUMB_WATER_TYPE' => 'IMAGE_WATER_CENTER',//水印模式
    ),
    //图片处理原始设置E

    //判断是否
    'YESNO_STATUS' => array(
        0 => '否',
        1 => '是',
    ),

    //判断有无
    'HAVE_STATUS' => array(
        0 => '无',
        1 => '有',
    ),

    //微信公众账号分类
    'WEIXIN_TYPE' => array(
        0 => '普通订阅号',
        1 => '认证订阅号/普通服务号',
        2 => '认证服务号',
        3 => '企业号',
    ),

    //微信公众账号菜单类型
    'WEIXIN_MENU_TYPE' => array(
        'menu' => '一级菜单',
        'click' => '点击推事件',
        'view' => '跳转URL',
        'scancode_push' => '扫码推事件',
        'scancode_waitmsg' => '扫码推事件且弹出“消息接收中”提示框',
        'pic_sysphoto' => '弹出系统拍照发图',
        'pic_photo_or_album' => '弹出拍照或者相册发图',
        'pic_weixin' => '弹出微信相册发图器',
        'location_select' => '弹出地理位置选择器',
        'media_id' => '下发消息',
        'view_limited' => '跳转图文消息URL',
    ),


    //单页内容系统模型
    'CONTENT_SYSTEM_MODULE' => array('common' => '通用', 'menu' => '栏目内容'),
    //性别
    '_SEX' => array(0 => '保密', 1 => '男', 2 => '女'),
    //广告位置类别
    'AD_POSITION_TYPE' => array(0 => '文字', 1 => '图文'),
    //会员角色
    'MEMBER_ROLE' => array(1 => '普通会员'),
    //会员日志操作
    'LQ_MEMBER_LOG' => array(
        'operation' => '会员操作',
        'register' => '会员注册并登录',
        'login' => '会员登陆',
        'login_out' => '会员登出',
        'info_bind' => '会员完善绑定',
        'add' => '添加数据',
        'edit' => '修改数据',
        'edit_member' => '会员编辑资料信息',
        'edit_pass' => '会员修改密码',
        'sign_in' => '会员签到',
        'op_sort' => '更改排序',
        'op_label' => '更改标题',
        'op_delete' => '单记录删除',
        'op_delete_checkbox' => '多记录删除',
        'article_agrees' => '文章点赞',
        'article_view' => '文章查看',
        'upload_image' => '上传图片',
        /*行为流水记录操作*/
        'buy_card' => '购买房卡',
        'use_card' => '消费房卡',
        'make_friends' => '添加好友',
        'delete_friends' => '删除好友',
        'modify_friend_name' => '修改好友备注',
        'create_room' => '创建房间',
        'delete_room' => '解散房间',
        'join_room' => '用户加入房间',
        'invite_member' => '邀请进入房间',
        'kick_member' => '踢出房间',
        'points_add' => '给用户加分',
        'points_dec' => '给用户减分',
        'send_notice' => '发放通知公告',
    ),
    //会员积分值
    'LQ_MEMBER_INTEGRATION' => array(
        'register' => '5',//会员注册并登录
        'sign_in' => '5',//会员签到
    ),

    //ajax 最大请求次数，否则要间隔 INTERVAL
    'REQUEST_INTERVAL' => 10,//间隔请求时间(以秒杀计)
    'REQUEST_SESSION' => array('loan_apply' => 3, 'hd_application' => 50, 'article_view' => 1, 'product_view' => 1, 'works_view' => 1, 'works_agrees' => 1, 'android_update' => 1, 'edit_member' => 10, 'edit_pass' => 3, 'upload_image' => 50, 'subscribe_designer' => 0, 'hd_diary_detail' => 10),

    //会员等级:key/等级名称/区间最小分值/区间最大分值/购买折购
    'MEMBER_RANK' => array(
        1 => array('rank_name' => '会员', 'min_points' => 0, 'max_points' => 979, 'discount' => 0),
        2 => array('rank_name' => '贵宾', 'min_points' => 980, 'max_points' => 2799, 'discount' => 0.98),
        3 => array('rank_name' => '金尊', 'min_points' => 2800, 'max_points' => 5799, 'discount' => 0.95),
        4 => array('rank_name' => '至尊', 'min_points' => 5800, 'max_points' => 99999999, 'discount' => 0.9)
    ),

    ///房间设置选项
    'ROOM_SET' => array(
        'room_type' => array(1 => '公开', 2 => '隐藏'),
        'confirm' => array(1 => '需要确认', 2 => '不确认'),
        'play_type' => array(1 => '5副牌', 2 => '7副牌'),
        'pay_type' => array(1 => '钟点房', 2 => '日费房'),
        'bet_time' => array(1 => '30秒', 2 => '1分钟', 3 => '2分钟', 4 => '3分钟', 5 => '5分钟',6 => '8分钟'),
    ),

    //指数
    'INDEX' => array(0 => '一般', 1 => '可以', 2 => '很好', 3 => '非常好'),
    //大写数字
    'CAPITAL_NUMBER' => array('零', '一', '二', '三', '四', '五', '六', '七', '八', '九'),
    //网站公共数组e

    //客户端每页显示数目
    'API_PAGESIZE' => array('works_list' => 10, 'article_list' => 10, 'product_list' => 10, 'designer_list' => 10, 'diary_list' => 10),

    //缩略图集合
    'INT_THUMB_SIZE' => array(

        'avatar' => array('width' => 120, 'height' => 120, "type" => 3),
        'products_cat' => array('width' => 170, 'height' => 140, "type" => 3),
        'products' => array('width' => 357, 'height' => 357, "type" => 1),
        'product_brand' => array('width' => 140, 'height' => 140, "type" => 3),
        'album' => array('width' => 750, 'height' => 500, "type" => 3),
        'works' => array('width' => 357, 'height' => 357, "type" => 1),
        'diary_list' => array('width' => 750, 'height' => 430, "type" => 3),
        'diary_item' => array('width' => 226, 'height' => 226, "type" => 3),
        'article_list' => array('width' => 726, 'height' => 360, "type" => 3),
    ),

    'LQ_TIME_MKTIME' => $_SERVER['REQUEST_TIME'],//当前时间戳
    'LQ_TIME_DAY' => date("Y-m-d", $_SERVER['REQUEST_TIME']),//日期
    'LQ_AUTH_KEY' => "theone",//当前时间戳


    //**********ajax的字符串分格符****************
    'SPLIT_00' => "#-00-#",
    'SPLIT_01' => "#-01-#",
    'SPLIT_02' => "#-02-#",
    'SPLIT_03' => "#-03-#",
    'SPLIT_04' => "#-04-#",
    //**********ajax的字符串分格符***************

    //**********上传设置*****************************************************start
    'UPLOAD_EXT' => array(//上传格式
        'avatar' => array('gif', 'jpg', 'jpeg', 'png'),
        'brand' => array('gif', 'jpg', 'jpeg', 'png'),
        'works' => array('gif', 'jpg', 'jpeg', 'png'),
        'products' => array('gif', 'jpg', 'jpeg', 'png'),
        'images' => array('gif', 'jpg', 'jpeg', 'png'),
        'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pdf', 'txt', 'zip', 'rar', 'gz', 'bz2', 'gif', 'jpg', 'jpeg', 'png', 'bmp', 'swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb', 'ico'),
        'editorfile' => array('gif', 'jpg', 'jpeg', 'png'),
        'apk' => array('apk'),
    ),
    'UPLOAD_WATER' => array(//上传水印开关
        'avatar' => 0,
        'brand' => 0,
        'works' => 0,
        'products' => 0,
        'images' => 0,
        'file' => 0,
        'editorfile' => 0,
        'apk' => 0,
    ),
    'UPLOAD_PATH' => array(//上传文件路径
        'folder' => 'uploadfiles/',//这个上传总目录不得改变
        'list' => array(
            'avatar' => 'avatar/',
            'brand' => 'brand/',
            'works' => 'works/',
            'products' => 'products/',
            'images' => 'images/',
            'file' => 'file/',
            'editorfile' => 'editorfile/',
            'apk' => 'apk/',
            'tmp' => 'tmp/',
        ),
    ),
    'UPLOAD_MAX_SIZE' => array(//上传文件大小
        'avatar' => 1024 * 1024 * 0.5,
        'brand' => 1024 * 1024 * 2,
        'works' => 1024 * 1024 * 2,
        'products' => 1024 * 1024 * 2,
        'images' => 1024 * 1024 * 5,
        'file' => 1024 * 1024 * 4,
        'apk' => 1024 * 1024 * 100,
    ),
    'ATTACHMENT_TYPE' => array(//文件类别:0图片-1文件
        0 => "图片",
        1 => "文件"
    ),
    //接口文档分类
    'API_DOCUMENT_TYPE' => array(
        0 => "其他",
        1 => "会员中心",
        2 => "房卡",
        3 => "房间",
        4 => "充值",
        5 => "聊天",
    ),

    ////房卡类型
    'ROOM_TYPE' => array(
        1 => "固定数量",
        2 => "自定义数量"
    ),

    ////好友添加类型
    'FRIEND_TYPE' => array(
        1 => "主动申请",
        2 => "同意添加"
    ),
    //支付类型
    'PAY_BUSINESS' => array(1 => '充值'),
);

//通用配置文件
$key_load_dbconn = 1;
$dbconn = APP_COMMON_PATH . "Conf/dbconn.php";//数据库配置
$dbconn_config = file_exists($dbconn) ? include_once "$dbconn" : array();
$config_array = array_merge($config_array, $dbconn_config);

return $config_array;
?>