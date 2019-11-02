<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'testWordpress_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8I-M0)3+lT2`p|`~C&Pkt4%7`[*{q o@T(?#LHbaIIPQ~H(^p;I C@-<#q*wB 1*' );
define( 'SECURE_AUTH_KEY',  'A+WMYm)>QWk{3w|hRsH1{?48nDCXBWJt,&Td&,hRdyqgH;yE@1J^2A6%O;66hq!C' );
define( 'LOGGED_IN_KEY',    ' *RzCYdp&MQdtM+]l*NJyiv@v1d-=96H9)W<(A|D|D9_]0|kG27xAD^wt.e{XvMj' );
define( 'NONCE_KEY',        '0PxDL?tjPqMTnP06ViF?GyQaC#ag{h|JeT$=xiLX3*)x7CmmR-:-I& 8^}An](Td' );
define( 'AUTH_SALT',        'kxA+-&<$9d!fVZ-fy[RIjHn:!IO?-[=kvXi%MqP(7;0=#VVp-O? nKEBPpwV=cU5' );
define( 'SECURE_AUTH_SALT', '>/2@Cg-aG6/+&;[C[;:SUK| !Q$gBq`( z%0DY7tQs7 >d9=m,7z2UXIjoLE5PwR' );
define( 'LOGGED_IN_SALT',   'F6z% Vb}TKC_F[./CQvpCut|0pvBN?raiMI+`.^$L*r?1GIrg|46kWVDtEQ>7:9o' );
define( 'NONCE_SALT',       'aKZhI1vZ-%+J[u:LrzaHutL3Yf!UGd:GmgxU<20f!_!wiN{!H9oM!pyv4G)bY)?J' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
