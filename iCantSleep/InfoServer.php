<?php
	/**
	 * Created by PhpStorm.
	 * User: Ronalindo
	 * Date: 14/05/2017
	 * Time: 21:28
	 */

	namespace iCantSleep;

	/**
	 * Class InfoServer
	 *
	 * @package iCantSleep
	 */
	class InfoServer {
		private static $PHP_SELF = [ 'PHP_SELF', '-' ];
		private static $GATEWAY_INTERFACE = [ 'GATEWAY_INTERFACE', '-' ];
		private static $SERVER_ADDR = [ 'SERVER_ADDR', '-' ];
		private static $SERVER_NAME = [ 'SERVER_NAME', '-' ];
		private static $SERVER_SOFTWARE = [ 'SERVER_SOFTWARE', '-' ];
		private static $SERVER_PROTOCOL = [ 'SERVER_PROTOCOL', '-' ];
		private static $REQUEST_METHOD = [ 'REQUEST_METHOD', '-' ];
		private static $REQUEST_TIME = [ 'REQUEST_TIME', '-' ];
		private static $REQUEST_TIME_FLOAT = [ 'REQUEST_TIME_FLOAT', '-' ];
		private static $QUERY_STRING = [ 'QUERY_STRING', '-' ];
		private static $DOCUMENT_ROOT = [ 'DOCUMENT_ROOT', '-' ];
		private static $HTTP_ACCEPT = [ 'HTTP_ACCEPT', '-' ];
		private static $HTTP_ACCEPT_CHARSET = [ 'HTTP_ACCEPT_CHARSET', '-' ];
		private static $HTTP_ACCEPT_ENCODING = [ 'HTTP_ACCEPT_ENCODING', '-' ];
		private static $HTTP_ACCEPT_LANGUAGE = [ 'HTTP_ACCEPT_LANGUAGE', '-' ];
		private static $HTTP_CONNECTION = [ 'HTTP_CONNECTION', '-' ];
		private static $HTTP_HOST = [ 'HTTP_HOST', '-' ];
		private static $HTTP_REFERER = [ 'HTTP_REFERER', '-' ];
		private static $HTTP_USER_AGENT = [ 'HTTP_USER_AGENT', '-' ];
		private static $HTTPS = [ 'HTTPS', '-' ];
		private static $REMOTE_ADDR = [ 'REMOTE_ADDR', '-' ];
		private static $REMOTE_HOST = [ 'REMOTE_HOST', '-' ];
		private static $REMOTE_PORT = [ 'REMOTE_PORT', '-' ];
		private static $REMOTE_USER = [ 'REMOTE_USER', '-' ];
		private static $REDIRECT_REMOTE_USER = [ 'REDIRECT_REMOTE_USER', '-' ];
		private static $SCRIPT_FILENAME = [ 'SCRIPT_FILENAME', '-' ];
		private static $SERVER_ADMIN = [ 'SERVER_ADMIN', '-' ];
		private static $SERVER_PORT = [ 'SERVER_PORT', '-' ];
		private static $SERVER_SIGNATURE = [ 'SERVER_SIGNATURE', '-' ];
		private static $PATH_TRANSLATED = [ 'PATH_TRANSLATED', '-' ];
		private static $SCRIPT_NAME = [ 'SCRIPT_NAME', '-' ];
		private static $REQUEST_URI = [ 'REQUEST_URI', '-' ];
		private static $PHP_AUTH_DIGEST = [ 'PHP_AUTH_DIGEST', '-' ];
		private static $PHP_AUTH_USER = [ 'PHP_AUTH_USER', '-' ];
		private static $PHP_AUTH_PW = [ 'PHP_AUTH_PW', '-' ];
		private static $AUTH_TYPE = [ 'AUTH_TYPE', '-' ];
		private static $PATH_INFO = [ 'PATH_INFO', '-' ];
		private static $ORIG_PATH_INFO = [ 'ORIG_PATH_INFO', '-' ];

		/**
		 * @param $value
		 */
		private function setValue( $value ) {
			array_pop( $value );
			array_push( $value, $_SERVER[ $value[ 0 ] ] );

		}

		/**
		 * InfoServer constructor.
		 */
		public function __construct() {
			if ( isset( $_SERVER[ self::$PHP_SELF[ 0 ] ] ) ) {
				array_pop( self::$PHP_SELF );
				array_push( self::$PHP_SELF, $_SERVER[ self::$PHP_SELF[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$GATEWAY_INTERFACE[ 0 ] ] ) ) {
				array_pop( self::$GATEWAY_INTERFACE );
				array_push( self::$GATEWAY_INTERFACE, $_SERVER[ self::$GATEWAY_INTERFACE[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$SERVER_ADDR[ 0 ] ] ) ) {
				array_pop( self::$SERVER_ADDR );
				array_push( self::$SERVER_ADDR, $_SERVER[ self::$SERVER_ADDR[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$SERVER_NAME[ 0 ] ] ) ) {
				array_pop( self::$SERVER_NAME );
				array_push( self::$SERVER_NAME, $_SERVER[ self::$SERVER_NAME[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$SERVER_SOFTWARE[ 0 ] ] ) ) {
				array_pop( self::$SERVER_SOFTWARE );
				array_push( self::$SERVER_SOFTWARE, $_SERVER[ self::$SERVER_SOFTWARE[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$SERVER_PROTOCOL[ 0 ] ] ) ) {
				array_pop( self::$SERVER_PROTOCOL );
				array_push( self::$SERVER_PROTOCOL, $_SERVER[ self::$SERVER_PROTOCOL[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$REQUEST_METHOD[ 0 ] ] ) ) {
				array_pop( self::$REQUEST_METHOD );
				array_push( self::$REQUEST_METHOD, $_SERVER[ self::$REQUEST_METHOD[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$REQUEST_TIME[ 0 ] ] ) ) {
				array_pop( self::$REQUEST_TIME );
				array_push( self::$REQUEST_TIME, $_SERVER[ self::$REQUEST_TIME[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$REQUEST_TIME_FLOAT[ 0 ] ] ) ) {
				array_pop( self::$REQUEST_TIME_FLOAT );
				array_push( self::$REQUEST_TIME_FLOAT, $_SERVER[ self::$REQUEST_TIME_FLOAT[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$QUERY_STRING[ 0 ] ] ) ) {
				array_pop( self::$QUERY_STRING );
				array_push( self::$QUERY_STRING, $_SERVER[ self::$QUERY_STRING[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$DOCUMENT_ROOT[ 0 ] ] ) ) {
				array_pop( self::$DOCUMENT_ROOT );
				array_push( self::$DOCUMENT_ROOT, $_SERVER[ self::$DOCUMENT_ROOT[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$HTTP_ACCEPT[ 0 ] ] ) ) {
				array_pop( self::$HTTP_ACCEPT );
				array_push( self::$HTTP_ACCEPT, $_SERVER[ self::$HTTP_ACCEPT[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$HTTP_ACCEPT_CHARSET[ 0 ] ] ) ) {
				array_pop( self::$HTTP_ACCEPT_CHARSET );
				array_push( self::$HTTP_ACCEPT_CHARSET, $_SERVER[ self::$HTTP_ACCEPT_CHARSET[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$HTTP_ACCEPT_ENCODING[ 0 ] ] ) ) {
				array_pop( self::$HTTP_ACCEPT_ENCODING );
				array_push( self::$HTTP_ACCEPT_ENCODING, $_SERVER[ self::$HTTP_ACCEPT_ENCODING[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$HTTP_ACCEPT_LANGUAGE[ 0 ] ] ) ) {
				array_pop( self::$HTTP_ACCEPT_LANGUAGE );
				array_push( self::$HTTP_ACCEPT_LANGUAGE, $_SERVER[ self::$HTTP_ACCEPT_LANGUAGE[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$HTTP_CONNECTION[ 0 ] ] ) ) {
				array_pop( self::$HTTP_CONNECTION );
				array_push( self::$HTTP_CONNECTION, $_SERVER[ self::$HTTP_CONNECTION[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$HTTP_HOST[ 0 ] ] ) ) {
				array_pop( self::$HTTP_HOST );
				array_push( self::$HTTP_HOST, $_SERVER[ self::$HTTP_HOST[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$HTTP_REFERER[ 0 ] ] ) ) {
				array_pop( self::$HTTP_REFERER );
				array_push( self::$HTTP_REFERER, $_SERVER[ self::$HTTP_REFERER[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$HTTP_USER_AGENT[ 0 ] ] ) ) {
				array_pop( self::$HTTP_USER_AGENT );
				array_push( self::$HTTP_USER_AGENT, $_SERVER[ self::$HTTP_USER_AGENT[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$HTTPS[ 0 ] ] ) ) {
				array_pop( self::$HTTPS );
				array_push( self::$HTTPS, $_SERVER[ self::$HTTPS[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$REMOTE_ADDR[ 0 ] ] ) ) {
				array_pop( self::$REMOTE_ADDR );
				array_push( self::$REMOTE_ADDR, $_SERVER[ self::$REMOTE_ADDR[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$REMOTE_HOST[ 0 ] ] ) ) {
				array_pop( self::$REMOTE_HOST );
				array_push( self::$REMOTE_HOST, $_SERVER[ self::$REMOTE_HOST[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$REMOTE_PORT[ 0 ] ] ) ) {
				array_pop( self::$REMOTE_PORT );
				array_push( self::$REMOTE_PORT, $_SERVER[ self::$REMOTE_PORT[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$REMOTE_USER[ 0 ] ] ) ) {
				array_pop( self::$REMOTE_USER );
				array_push( self::$REMOTE_USER, $_SERVER[ self::$REMOTE_USER[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$REDIRECT_REMOTE_USER[ 0 ] ] ) ) {
				array_pop( self::$REDIRECT_REMOTE_USER );
				array_push( self::$REDIRECT_REMOTE_USER, $_SERVER[ self::$REDIRECT_REMOTE_USER[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$SCRIPT_FILENAME[ 0 ] ] ) ) {
				array_pop( self::$SCRIPT_FILENAME );
				array_push( self::$SCRIPT_FILENAME, $_SERVER[ self::$SCRIPT_FILENAME[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$SERVER_ADMIN[ 0 ] ] ) ) {
				array_pop( self::$SERVER_ADMIN );
				array_push( self::$SERVER_ADMIN, $_SERVER[ self::$SERVER_ADMIN[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$SERVER_PORT[ 0 ] ] ) ) {
				array_pop( self::$SERVER_PORT );
				array_push( self::$SERVER_PORT, $_SERVER[ self::$SERVER_PORT[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$SERVER_SIGNATURE[ 0 ] ] ) ) {
				array_pop( self::$SERVER_SIGNATURE );
				array_push( self::$SERVER_SIGNATURE, $_SERVER[ self::$SERVER_SIGNATURE[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$PATH_TRANSLATED[ 0 ] ] ) ) {
				array_pop( self::$PATH_TRANSLATED );
				array_push( self::$PATH_TRANSLATED, $_SERVER[ self::$PATH_TRANSLATED[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$SCRIPT_NAME[ 0 ] ] ) ) {
				array_pop( self::$SCRIPT_NAME );
				array_push( self::$SCRIPT_NAME, $_SERVER[ self::$SCRIPT_NAME[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$REQUEST_URI[ 0 ] ] ) ) {
				array_pop( self::$REQUEST_URI );
				array_push( self::$REQUEST_URI, $_SERVER[ self::$REQUEST_URI[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$PHP_AUTH_DIGEST[ 0 ] ] ) ) {
				array_pop( self::$PHP_AUTH_DIGEST );
				array_push( self::$PHP_AUTH_DIGEST, $_SERVER[ self::$PHP_AUTH_DIGEST[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$PHP_AUTH_USER[ 0 ] ] ) ) {
				array_pop( self::$PHP_AUTH_USER );
				array_push( self::$PHP_AUTH_USER, $_SERVER[ self::$PHP_AUTH_USER[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$PHP_AUTH_PW[ 0 ] ] ) ) {
				array_pop( self::$PHP_AUTH_PW );
				array_push( self::$PHP_AUTH_PW, $_SERVER[ self::$PHP_AUTH_PW[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$AUTH_TYPE[ 0 ] ] ) ) {
				array_pop( self::$AUTH_TYPE );
				array_push( self::$AUTH_TYPE, $_SERVER[ self::$AUTH_TYPE[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$PATH_INFO[ 0 ] ] ) ) {
				array_pop( self::$PATH_INFO );
				array_push( self::$PATH_INFO, $_SERVER[ self::$PATH_INFO[ 0 ] ] );
			}
			if ( isset( $_SERVER[ self::$ORIG_PATH_INFO[ 0 ] ] ) ) {
				array_pop( self::$ORIG_PATH_INFO );
				array_push( self::$ORIG_PATH_INFO, $_SERVER[ self::$ORIG_PATH_INFO[ 0 ] ] );
			}
		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getPHP_SELF( bool $key = FALSE ) {
			if ( $key ) {
				return self::$PHP_SELF;
			}else {
				return self::$PHP_SELF[ 1 ];
			}
		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getGATEWAY_INTERFACE( bool $key = FALSE ) {
			if ( $key ) {
				return self::$GATEWAY_INTERFACE;
			}else {
				return self::$GATEWAY_INTERFACE[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getSERVER_ADDR( bool $key = FALSE ) {
			if ( $key ) {
				return self::$SERVER_ADDR;
			}else {
				return self::$SERVER_ADDR[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getSERVER_NAME( bool $key = FALSE ) {
			if ( $key ) {
				return self::$SERVER_NAME;
			}else {
				return self::$SERVER_NAME[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getSERVER_SOFTWARE( bool $key = FALSE ) {
			if ( $key ) {
				return self::$SERVER_SOFTWARE;
			}else {
				return self::$SERVER_SOFTWARE[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getSERVER_PROTOCOL( bool $key = FALSE ) {
			if ( $key ) {
				return self::$SERVER_PROTOCOL;
			}else {
				return self::$SERVER_PROTOCOL[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getREQUEST_METHOD( bool $key = FALSE ) {
			if ( $key ) {
				return self::$REQUEST_METHOD;
			}else {
				return self::$REQUEST_METHOD[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getREQUEST_TIME( bool $key = FALSE ) {
			if ( $key ) {
				return self::$REQUEST_TIME;
			}else {
				return self::$REQUEST_TIME[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getREQUEST_TIME_FLOAT( bool $key = FALSE ) {
			if ( $key ) {
				return self::$REQUEST_TIME_FLOAT;
			}else {
				return self::$REQUEST_TIME_FLOAT[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getQUERY_STRING( bool $key = FALSE ) {
			if ( $key ) {
				return self::$QUERY_STRING;
			}else {
				return self::$QUERY_STRING[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getDOCUMENT_ROOT( bool $key = FALSE ) {
			if ( $key ) {
				return self::$DOCUMENT_ROOT;
			}else {
				return self::$DOCUMENT_ROOT[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getHTTP_ACCEPT( bool $key = FALSE ) {
			if ( $key ) {
				return self::$HTTP_ACCEPT;
			}else {
				return self::$HTTP_ACCEPT[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getHTTP_ACCEPT_CHARSET( bool $key = FALSE ) {
			if ( $key ) {
				return self::$HTTP_ACCEPT_CHARSET;
			}else {
				return self::$HTTP_ACCEPT_CHARSET[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getHTTP_ACCEPT_ENCODING( bool $key = FALSE ) {
			if ( $key ) {
				return self::$HTTP_ACCEPT_ENCODING;
			}else {
				return self::$HTTP_ACCEPT_ENCODING[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getHTTP_ACCEPT_LANGUAGE( bool $key = FALSE ) {
			if ( $key ) {
				return self::$HTTP_ACCEPT_LANGUAGE;
			}else {
				return self::$HTTP_ACCEPT_LANGUAGE[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getHTTP_CONNECTION( bool $key = FALSE ) {
			if ( $key ) {
				return self::$HTTP_CONNECTION;
			}else {
				return self::$HTTP_CONNECTION[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getHTTP_HOST( bool $key = FALSE ) {
			if ( $key ) {
				return self::$HTTP_HOST;
			}else {
				return self::$HTTP_HOST[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getHTTP_REFERER( bool $key = FALSE ) {
			if ( $key ) {
				return self::$HTTP_REFERER;
			}else {
				return self::$HTTP_REFERER[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getHTTP_USER_AGENT( bool $key = FALSE ) {
			if ( $key ) {
				return self::$HTTP_USER_AGENT;
			}else {
				return self::$HTTP_USER_AGENT[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getHTTPS( bool $key = FALSE ) {
			if ( $key ) {
				return self::$HTTPS;
			}else {
				return self::$HTTPS[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getREMOTE_ADDR( bool $key = FALSE ) {
			if ( $key ) {
				return self::$REMOTE_ADDR;
			}else {
				return self::$REMOTE_ADDR[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getREMOTE_HOST( bool $key = FALSE ) {
			if ( $key ) {
				return self::$REMOTE_HOST;
			}else {
				return self::$REMOTE_HOST[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getREMOTE_PORT( bool $key = FALSE ) {
			if ( $key ) {
				return self::$REMOTE_PORT;
			}else {
				return self::$REMOTE_PORT[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getREMOTE_USER( bool $key = FALSE ) {
			if ( $key ) {
				return self::$REMOTE_USER;
			}else {
				return self::$REMOTE_USER[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getREDIRECT_REMOTE_USER( bool $key = FALSE ) {
			if ( $key ) {
				return self::$REDIRECT_REMOTE_USER;
			}else {
				return self::$REDIRECT_REMOTE_USER[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getSCRIPT_FILENAME( bool $key = FALSE ) {
			if ( $key ) {
				return self::$SCRIPT_FILENAME;
			}else {
				return self::$SCRIPT_FILENAME[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getSERVER_ADMIN( bool $key = FALSE ) {
			if ( $key ) {
				return self::$SERVER_ADMIN;
			}else {
				return self::$SERVER_ADMIN[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getSERVER_PORT( bool $key = FALSE ) {
			if ( $key ) {
				return self::$SERVER_PORT;
			}else {
				return self::$SERVER_PORT[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getSERVER_SIGNATURE( bool $key = FALSE ) {
			if ( $key ) {
				return self::$SERVER_SIGNATURE;
			}else {
				return self::$SERVER_SIGNATURE[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getPATH_TRANSLATED( bool $key = FALSE ) {
			if ( $key ) {
				return self::$PATH_TRANSLATED;
			}else {
				return self::$PATH_TRANSLATED[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getSCRIPT_NAME( bool $key = FALSE ) {
			if ( $key ) {
				return self::$SCRIPT_NAME;
			}else {
				return self::$SCRIPT_NAME[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getREQUEST_URI( bool $key = FALSE ) {
			if ( $key ) {
				return self::$REQUEST_URI;
			}else {
				return self::$REQUEST_URI[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getPHP_AUTH_DIGEST( bool $key = FALSE ) {
			if ( $key ) {
				return self::$PHP_AUTH_DIGEST;
			}else {
				return self::$PHP_AUTH_DIGEST[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getPHP_AUTH_USER( bool $key = FALSE ) {
			if ( $key ) {
				return self::$PHP_AUTH_USER;
			}else {
				return self::$PHP_AUTH_USER[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getPHP_AUTH_PW( bool $key = FALSE ) {
			if ( $key ) {
				return self::$PHP_AUTH_PW;
			}else {
				return self::$PHP_AUTH_PW[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getAUTH_TYPE( bool $key = FALSE ) {
			if ( $key ) {
				return self::$AUTH_TYPE;
			}else {
				return self::$AUTH_TYPE[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getPATH_INFO( bool $key = FALSE ) {
			if ( $key ) {
				return self::$PATH_INFO;
			}else {
				return self::$PATH_INFO[ 1 ];
			}

		}

		/**
		 * @param bool $key
		 *
		 * @return array
		 */
		public static function getORIG_PATH_INFO( bool $key = FALSE ) {
			if ( $key ) {
				return self::$ORIG_PATH_INFO;
			}else {
				return self::$ORIG_PATH_INFO[ 1 ];
			}

		}

		/**
		 * @param string $key_value
		 *
		 * @return array
		 * @internal param bool $key
		 *
		 */
		public static function getAll( string $key_value = '' ) {
			$key = TRUE;
			/*Join all parameters in once variable*/
			$all[] = self::getPHP_SELF( $key );
			$all[] = self::getGATEWAY_INTERFACE( $key );
			$all[] = self::getSERVER_ADDR( $key );
			$all[] = self::getSERVER_NAME( $key );
			$all[] = self::getSERVER_SOFTWARE( $key );
			$all[] = self::getSERVER_PROTOCOL( $key );
			$all[] = self::getREQUEST_METHOD( $key );
			$all[] = self::getREQUEST_TIME( $key );
			$all[] = self::getREQUEST_TIME_FLOAT( $key );
			$all[] = self::getQUERY_STRING( $key );
			$all[] = self::getDOCUMENT_ROOT( $key );
			$all[] = self::getHTTP_ACCEPT( $key );
			$all[] = self::getHTTP_ACCEPT_CHARSET( $key );
			$all[] = self::getHTTP_ACCEPT_ENCODING( $key );
			$all[] = self::getHTTP_ACCEPT_LANGUAGE( $key );
			$all[] = self::getHTTP_CONNECTION( $key );
			$all[] = self::getHTTP_HOST( $key );
			$all[] = self::getHTTP_REFERER( $key );
			$all[] = self::getHTTP_USER_AGENT( $key );
			$all[] = self::getHTTPS( $key );
			$all[] = self::getREMOTE_ADDR( $key );
			$all[] = self::getREMOTE_HOST( $key );
			$all[] = self::getREMOTE_PORT( $key );
			$all[] = self::getREMOTE_USER( $key );
			$all[] = self::getREDIRECT_REMOTE_USER( $key );
			$all[] = self::getSCRIPT_FILENAME( $key );
			$all[] = self::getSERVER_ADMIN( $key );
			$all[] = self::getSERVER_PORT( $key );
			$all[] = self::getSERVER_SIGNATURE( $key );
			$all[] = self::getPATH_TRANSLATED( $key );
			$all[] = self::getSCRIPT_NAME( $key );
			$all[] = self::getREQUEST_URI( $key );
			$all[] = self::getPHP_AUTH_DIGEST( $key );
			$all[] = self::getPHP_AUTH_USER( $key );
			$all[] = self::getPHP_AUTH_PW( $key );
			$all[] = self::getAUTH_TYPE( $key );
			$all[] = self::getPATH_INFO( $key );
			$all[] = self::getORIG_PATH_INFO( $key );

			$getAll = [];

			foreach ( $all AS $value ) {
				if ( $key_value == 'key' ) {
					$getAll[] = $value[ 0 ];
				}else if ( $key_value == 'value' ) {
					$getAll[] = $value[ 1 ];
				}else {
					$getAll[] = $value;
				}
			}

			return $getAll;
		}
	}