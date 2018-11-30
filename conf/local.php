<?php
/**
 * This is an example of how a local.php could look like.
 * Simply copy the options you want to change from dokuwiki.php
 * to this file and change them.
 *
 * When using the installer, a correct local.php file be generated for
 * you automatically.
 */

//wiki页面的标题，即页面右上方的标题
$conf['title'] = 'Mantis知识库';

/**启用ACL管理。0-不启用；1-启用
 * 使用acl权限审核。acl－Access Control Lists（访问控制列表）。
 * 有两个选项：0－关闭权限审核，1－开启权限审核。
 * 如果想添加用户登录功能，必须开启权限审核。  
 */ 
$conf['useacl'] = 1;

//超级用户（管理员）登录名                
$conf['superuser'] = 'admin';

/**这里使用plain（简单）验证方式。   
 * 常用的三种登录验证方式：

 * plain－使用配置文件，conf/acl.auth.php存储用户名及密码资料。
 * ldap－使用ldap主机的用户资料来做使用者验及提供用户身份。
 * mysql－使用mysql数据库资料存储用户资料。
 * //require_once ("mysql.conf.php");        //如果你不使用MySQL数据库，那么就请保持这一行的注释状态，或干脆删除该行。    
 */ 
$conf['authtype'] = 'plain';

//wiki的界面语言。默认为“en”，中文请改为“zh”
$conf['lang'] = 'zh';
//显示you are here导航。0－不显示，1－显示                 
$conf['youarehere'] = 1;
//默认用户组           
$conf['defaultgroup'] = 'user';
//是否支持html标记。0－不支持，1－支持        
$conf['htmlok'] = 1;
//是否支持php脚本。0－不支持，1－支持              
$conf['phpok'] = 0;
//是否允许用户注册。0－不允许，1允许                  
$conf['openregister'] = '0';