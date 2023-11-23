<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B!F>jmdOqVwBA*2y,4>;G Im;WYxt%;:1q2ae{^3K}rCA>0Rid{`iO.gRU0#2[2X' );
define( 'SECURE_AUTH_KEY',  '`]2[7@KU;:vhjW3d9;}%{`%-Dkj2ng$4CFZ?1Vpp&bNccugqV(2lrl7^(th}5{S*' );
define( 'LOGGED_IN_KEY',    'v5&S55CLPP;?44ItlY`aulT.?JJrCaf(hl| TE Ya:59O(F[F,xz}ukvKv^ZK.Tc' );
define( 'NONCE_KEY',        'GmRg q1B|~Ez=KnM3MBAti?}19Yt7lr+Wa<x7D!]@]]9r(p>T5&A!d; uk;XV]LC' );
define( 'AUTH_SALT',        '3c@|O${[7ss-}]#^k<c$6&G38M7))A$,N{hipbHPB*.e^b@4$>>IJ9=ic5UKm21U' );
define( 'SECURE_AUTH_SALT', '6.|V81_)&qncMv^oMIyCB-`E#qn@#@RO<|tQcB`sXp|z7r *nMj/3(*7qOCu[+JB' );
define( 'LOGGED_IN_SALT',   '*PH9Q&%(@o,mQ8*oFBOVx]jJ+})/[!S9-)Kj$I*}S? a@$-d|8sTj1O;l&)b #R]' );
define( 'NONCE_SALT',       '@%<;duwm<h$W=@cy{Kfp|W1A=Af`DT,s9283tApDz6/,&gD|E|/dOO|YRny`N%o{' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
