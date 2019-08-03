<?php
//define( 'WP_DEBUG', true );

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
define( 'DB_NAME', 'atomic' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'atomic' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'vAkRcyav2gtxffJfCPOn' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/** Upload SVG */
define('ALLOW_UNFILTERED_UPLOADS', true);

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1i|^?{wlSPbYULbGw$.|e^M?OeEWubA>Pd>S!QKw/JSzqHP{#*$6+Fv/wie/VZ_f' );
define( 'SECURE_AUTH_KEY',  '-Nl<!wA@-[kR!O1-OQ> 16`8aTtFfK_: icu;VY$7+y3| bt0@B=U]cugX*1liH]' );
define( 'LOGGED_IN_KEY',    'HkGICA/1Ct;z5+k!;U;2n7sSsv;cjYPut0W-a-U|R77]2h}2)K9 r#&Qo<V3Wx*r' );
define( 'NONCE_KEY',        '%w56V{Ms7$v8=acvsCY>[(.iEu/Cx_^vu{B<j|k0j^N 0XCuLce9,-cqXbfew+^$' );
define( 'AUTH_SALT',        '7b366<(ZT:;DX@tw0eP&LD]Fq1;y_mJ)Qo~r!jHDL<Tt1?/>b^g&_Mned<*0)zOO' );
define( 'SECURE_AUTH_SALT', 'kddZ/Q(?2Q{WBh^n=snb:(,i1FbsytdJ>p@o,}O] Pt[m,W7MlfD[ qZ5[MJ&XN ' );
define( 'LOGGED_IN_SALT',   '9$0Zvn3A.cPz%imFfyaIa]w6ZN*XT%;LK(B0^]%knN?!N`0.W3a5oG1&4R{Wq02s' );
define( 'NONCE_SALT',       '`Novdj@Maj_6KM$:,X*ph~an7.4jrD~-7NHyJcN~Xw-NPKd>{DZ2AX)5EN] hyin' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
