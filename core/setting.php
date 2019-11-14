<?php
Class configs
{
	public $url_web="http://localhost/RedCore/";//адрес сайта  https://redlava.ru
	public $url_hard="/var/www/html/RedCore/";//адрес сайта по железу /var/www/redlava/

	public $mysql_host = '';//IP аДРЕС БАЗЫ ДАННЫХ
    public $mysql_db   = '';//НАЗВАНИЕ БАЗЫ ДАНЫХ
    public $mysql_user = "";//ЛОГИН
    public $mysql_pass = "";//Пароль
    public $mysql_charset = 'utf8';//Кодировка
}

$cfg = new configs;



?>
