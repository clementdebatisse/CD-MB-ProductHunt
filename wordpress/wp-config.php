<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'product-hunt' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Scipion555' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'EXQ~%<cI0e^J/Y2}F^AHc2FhUy=2.i;VWo ]R>Ol(t2=+J~7u_zz9U?{{Ca=|_Zw' );
define( 'SECURE_AUTH_KEY',  'r}R#Md,:w-tt#X7)2>j2SS/`EB:3F8?~y~I_Ncx!;w2`f_fHai1I@vH7;1_;~7.1' );
define( 'LOGGED_IN_KEY',    'p]I9m!Mw0&ip=3Kg-,beu:n@gHWVTtnmk`g #R?2,xRz_Xi+d:{yXdBi9@0x*%q|' );
define( 'NONCE_KEY',        '?pCzo#^f}}SmxQ@tw=xw3>_{a7Z~xvLeS>nj3YGg+TS><U8f]+t,g0&8d!ip^i)d' );
define( 'AUTH_SALT',        't1(D+xe8B8)G)1n;/O~x~joHQ7ZE_M}Oxw!4},WC;S?FB@I%5w)JZLT_-<(j$Vj`' );
define( 'SECURE_AUTH_SALT', '^1fe1Ims{R]G`eIG9FX2+T1FF:,H!e+2z(_f9i^C:_0<G>P27BA2Ag/{)p;*Bs}o' );
define( 'LOGGED_IN_SALT',   '7BR_B#3D7A;>}j*[/Om<[]!UHDW?7}|.>g$~R5j{ClF@MPW$WQgqaa8Ai]H+k79*' );
define( 'NONCE_SALT',       '#q|7Dg*Kd4Fw8j>f}kdjU>fq&(C.bquQ[S4v@lKmfkK }UXC]rr&$lj:o|j.paKZ' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
