<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');

define('UPLOADS', 'wp-content/uploads');

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'iphhealth' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';FNvqeEatMSiJW|p Q$i2z7-Tg;Pjfs@OU{E1?lwT!%U3-jgyp(A!Oj^3!=zZ,C-' );
define( 'SECURE_AUTH_KEY',  'UmVZbNbWLWQ`yG*@S66M]EKwg3u22XR0=V`2mX+0#o-b3(f:!I_uAI0 @aHc,,AY' );
define( 'LOGGED_IN_KEY',    '!FjK7:GravU]gt(2P@q4mL|MSAX(XbJctiJtf^]`*^Nai&K1wAx}/ud]T<H9<Ls7' );
define( 'NONCE_KEY',        't)`BMV$)F+^kBgt/(~YFx!N(/zu.DAT-6WsV:D`GD3bw[q>EIrFG6CEQP7/A?.o9' );
define( 'AUTH_SALT',        'KRc]p@#!7Gn6(mLcli,oXCs5]Trb# Df{Cvgj8dAW?KmOHrf=n_2*bi7x]#=2u Q' );
define( 'SECURE_AUTH_SALT', 'i>+RES/^|pKI.K-dL!3?nMu-n1i[ABnP]gv07Hf>_`4Ti|rGKn7$vyc>9&OX,R<_' );
define( 'LOGGED_IN_SALT',   'lpn^J/Uqkspe_<r7ci#9F*?7n~YDy#:%Nj}B>SI:gMDbxfjPj/ZsRn |$[DhR)SE' );
define( 'NONCE_SALT',       '%,rUl_7%G9)LsrAQfM=p86BoQ6VlKu2`]K>-J6G5LIF@hst9N_.oOe:)~yFB)OfA' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
