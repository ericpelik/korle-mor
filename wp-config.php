<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'korle-mor' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lY9<;jQALFI=D}igzfhP+5u?3ruZ(DG/{xfa[Mi!Dgnovh,~yt@[iZi$N%Zu*(AI' );
define( 'SECURE_AUTH_KEY',  '(1kR($l7yGsz-1/ rHw,DWe6(R-M!GmX;<SX&D=Zc`Ojo&$@ir.aR&82Wa#YOC!|' );
define( 'LOGGED_IN_KEY',    '|L},QtNb.:A=OYN+Yq/0O&_:l>MyD^yLL8nO5l5aK:t%7i)G^a|1W.iT#MS)=.,!' );
define( 'NONCE_KEY',        '=K14G$,xjPU`eWU8Q)ng/h!`{yRQKton+<?TTel][M4z9Ws+#BTPU8wFelE<!MbG' );
define( 'AUTH_SALT',        'aZY|d96zD?%]tC-7aO/?z/bb*NVcMjeiVZ|B*=3z@sg3Js~v3;TrP?Ak6JMBa&tX' );
define( 'SECURE_AUTH_SALT', '1-5i)$K+F#>1/#qHTXE8V%n$-xK6QddA,UmutjZv0D@~4z$xGvXjeEaaJ]8Hg#UG' );
define( 'LOGGED_IN_SALT',   'A[a5E|m-ZB#QWfky^{2k,dlp~C=I>6{j#9=iLk>(-_EA- P{;d KZC>aIVFq1mZS' );
define( 'NONCE_SALT',       '(?U@~v%|i20gM {;mswWFTBS]!Y]RAK4[>b;pBdUTphg#K+F<s/*`95+O!#xvJie' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
