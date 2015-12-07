<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 *
 * Ce fichier contient les configurations suivantes :
 *
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'jouet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F3@Jzrt-.<Be]:X=+MZ}GS/1jp(W0:BZ~9 zy/`|QnhBpD[3If[22)!J^7f|1*--');
define('SECURE_AUTH_KEY',  '9$C_8i3~j=%bq|&W&5J<7j|3T2O19we(JGdATL?*Z]*0L}VgU?0[3^5]I2Z~7&vq');
define('LOGGED_IN_KEY',    'kEz>Oh/se4:6nTVlh;l=Oo]|`uTpn?m+,,L4KK;5,jW5$Us*pxH;{H@=u,2M(zI;');
define('NONCE_KEY',        ';|#AX#qg-qXUq+#Lmfn3vgCGkd~lxi]2Z{W3o$_YX{P8R=z=Dg/jn!VO]+=s^5+%');
define('AUTH_SALT',        'O:O8 qp)BHI%B`AGNRb(V0Ll Mx3EFRp`uL4c+I@+{!F>rgX@M|yR+nXgRrYsCaz');
define('SECURE_AUTH_SALT', 'j?PeV BY[qE6/mj I^4hz!d!FT+QEKS[xq1nB&lfr<N<Z/Zmmw:&zkXv-,^,4Dsu');
define('LOGGED_IN_SALT',   '^kS>|&~Keje=NcXsll|9r#X|mzmG}pX$O#D:u`bbY~1kB1:$4I)xt2l}#|Z~fm$L');
define('NONCE_SALT',       '62[Ynx};%.$8|U8fNWu`>+yQ%9sHO_3)Rwe!r~73nMF5|T_xt0|fJ~b*OXakK;/:');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'jouet2k15_wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour obtenir plus d'information sur les constantes
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
