<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/rusohota73/elat-sport.ru/docs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', '');


/** Имя пользователя MySQL */
define('DB_USER', '');


/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');


/** Имя сервера MySQL */
define('DB_HOST', '');


/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');


/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eZw}Zj,`!c$XE3?P-#7AcL}r{k!)K8?6y`oR:ua!N$t;Pf4#%m[(c{t`~aAW<).;');

define('SECURE_AUTH_KEY',  'wU*jq|Z{JdV+,7L4<^[0n+kBBOkt# wM-jutx1*#hd24RW0CvZ>G{,EO.2%39S)N');

define('LOGGED_IN_KEY',    ']+DQuM$G^w|:QJ./`%q*<ckn7;XQWJFq2([Hgj?4IzC8hD9`Za6uNb9k.2&uGS%a');

define('NONCE_KEY',        '{)iV%:>n]mXm~*w.bn?dT1}5zjTdy%O<8l<1STJx(Q1i3+>Ml4Z(>8qaoc4(WTf#');

define('AUTH_SALT',        '1O(E!-j6xW&06TA^51_jDIX@QxEBgHss_b_6QK@RU}g7U@Y{L=R*/Ur!+|nh}/>p');

define('SECURE_AUTH_SALT', 'd?9`#~X_mk0~}e@bHN>#K9hDn&`&z[P}qKz6ZME=9(S,6gG:2qr:R{CHpCuJ_lKC');

define('LOGGED_IN_SALT',   'e23JNsF!9cr&Jf,mnoi&sTQNN,m&1zx!W]zeI/IYvU%7k|_U{^WxUAxZh+||^If9');

define('NONCE_SALT',       'cfK0}-np:%)Wff$Z@ 6W=p0n2+k8|$@M5E&s~S,d$ yCi6dMeF58s1:-H$oU&^C$');


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
