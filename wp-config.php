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

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lanchonete' );

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
define( 'AUTH_KEY',         'qtyh.SJky0*(~C,1wsoik9O&}e<0&V12lryv;,H$LS|E(G;Jk`]>Tg;2z<qohm6N' );
define( 'SECURE_AUTH_KEY',  'GExI*3Y<H]Nw;m7%*E} G[G+<Z?a^pL#4Mwt:R7H!U;SwlKJ`YkNLn;^Vz1{le:T' );
define( 'LOGGED_IN_KEY',    'tas<p}@x#0xYLEmDG#Skx2oM)(+7Eho:9Y`9Z^ND[m6KRye{+.z7jV^Tx0J,|EnQ' );
define( 'NONCE_KEY',        '}/ur+!>|ZA2ld9Re{FKNt *zrvrKpQ2|rJ)Q8Xe>5rkq9P~dU<NGq1vX*eixVtb7' );
define( 'AUTH_SALT',        '#xCy@X1ZMO0 eaR%%,ys01La;f#v4uc;5*Gp%=VoUkSMM~J9]K~:_$jNoelJ#DNv' );
define( 'SECURE_AUTH_SALT', 'jiY@FP:.`vuQcwbfjZ%bJ:`lmzj$mG ls[& GZn#VN%<FL9ms0NPY{JQ6`E|?_$Q' );
define( 'LOGGED_IN_SALT',   '1{CjvcniJ;Z,~I}(Wxp8-Od?FCaDUyPhVI`{n_4Qm&~@yIN){R)F%F7aZKJ}D*zw' );
define( 'NONCE_SALT',       '2.9rorWVG&e{k.aT73}EQ3oYQxw_=Mo]Ny:@/qA$3/b^a[Gz9 d0[ZZwu%5Gv1mP' );

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
