<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'info' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'root' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r |=<JN Z|ef1$,ATrb}zvGAV#q.[_ 15FXmf.+:qqrnjz|}{;;l!2-firXbO&D0' );
define( 'SECURE_AUTH_KEY',  'm6er5YJ.W:XquEvF(|[J.RWoIvwJq~=nAOj}QGi[lum9VQ%{%wxS@&)74W6[/_v6' );
define( 'LOGGED_IN_KEY',    '+D8pRXh=Up^NzX_F-d>(7M@FE;%HO;0;Ixz=yuTzJ!wJZ (ka8w9!GH>mShH2Sr&' );
define( 'NONCE_KEY',        'QX):m.FV#2[kJvGzS7Yq&5e>3kP6p`K`+S~-g/Y0,pc:ZWjI-7#BOObW;V;JjfuW' );
define( 'AUTH_SALT',        'H:TVC9ulxVtXPFFzWd:[vUP$d=Droj-YE&sU`6x?jH/H=LH(-C64.WH#av6%7YR&' );
define( 'SECURE_AUTH_SALT', 'PXPP BYUzYCuc@ZnzCOc3yEB9<snNOoltNH}6Qd =rjo?>9vJo<avW,`xZJAC$6#' );
define( 'LOGGED_IN_SALT',   'JvE1_4puhOr#9}74alX&VDK2nh7,3[>h#d/$^;%Zi(BLKp-;!Fywh^l:K3hF ]mf' );
define( 'NONCE_SALT',       'DCz<7;,)Ti)tM!ZsO#,ar!cw{Du|MNsr_gM1~e#2O$OYEya#G2&e.>h 3TZyr|4m' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
