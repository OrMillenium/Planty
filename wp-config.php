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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XAJ/8&Lo0.MV;/hKP!8()vD_c8?,IM;OHea9vmx`nO=+<)6r<s3F$:s2Yw5Ul|3L' );
define( 'SECURE_AUTH_KEY',  '}Pe?M1P<Feb|f|@:Mx.Z73|<q}%A,8h-<u5mJV/z)PICXsGFpsg~m?Ij^LCm0RzX' );
define( 'LOGGED_IN_KEY',    'VP=>xNB3Ne}u1+P<Z0sthigXR0-;Y^;NGilBh[Jp:Ysap0X#pGID2I6H1e@oI:*5' );
define( 'NONCE_KEY',        'jZw;nL>X_X64|/BIMGieKY{&yzZ{^{fh^tC@kX Ln_3OW:Ju-l4U,7H+`ttPLBJ8' );
define( 'AUTH_SALT',        'H!AURXm6Rl>=coi{Jac-1xV>6_dp2z@-+Zmjv0RrjMMgk*n|+{8$GJ.{-puMLYz7' );
define( 'SECURE_AUTH_SALT', 'SbG0u5:543bvwS5Wpy9u]{v&zNAx(<BvxXk:P3Qex*4QOPB;%K<%^bxcq8D(8WLO' );
define( 'LOGGED_IN_SALT',   'Y.K~ByWl?PU(t(KI*]Ju.Faf,,3Y&hV4S-{npwqvasezuz;/B!xNR /F=>=w8}F0' );
define( 'NONCE_SALT',       'n/Odd`mX(f@>pJ#LjE06- &y3`wnT0!5HT&I{bmiyWb8I<t,8l|ai?qVeF 6BA|u' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
