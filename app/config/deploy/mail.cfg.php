<?php
 
$_config = array(


    'host' => 'smtp.vip.163.com',
    'port' => 25,
    'from' => array('address' => 'xxx@vip.163.com', 'name' => 'Administrator'),
    'encryption' => 'ssl',
    'username' => 'xxx@vip.163.com',
    'password' => 'xxx163vip',
    'sendmail' => '/usr/sbin/sendmail -bs', 
    // 管理员邮箱 
    'amdin_email' => 'xxxx@vip.163.com',
    'timeout'=>16
);


$_config['tpl']['reset_password'] = '
<div >
    <p>您好 <a href="mailto:{{email}}" target="_blank">{{email}}</a>!</p>
    <p>
        感谢您注册 {{site_name}}，请点击以下链接重置密码
    </p>
    <p><a href="{{url}}" target="_blank">{{url}}</a></p>

    <p>如果你没有请求重置密码，请忽略这封邮件.</p>
    <p>在你点击上面链接修改密码之前，你的密码将会保持不变</p> 
    <br><br> 
</div>
';

$_config['tpl']['active_email'] = '
<div >
    <p>您好 {{display_name}}!</p>
    <p>
        感谢您注册 {{site_name}}，请点击以下链接激活账号
    </p>
    <p><a href="{{url}}" target="_blank">{{url}}</a></p>

    <p>{{site_name}} 祝您上网愉快!</p> 
    <br><br> 
</div>
';


return $_config;
