<?php
	/**
	 * Created by PhpStorm.
	 * User: Ronalindo
	 * Date: 24/08/2017
	 * Time: 1:43
	 */

	namespace iCantSleep;

	/**
	 * Class Language
	 *
	 * @package iCantSleep
	 */
	class Languages {
		/*iCantSleep*/
		private static $utilitarian = '';
		/*tags default*/
		private $tagLanguageArray = 'lang';
		private $tagAbbreviationArray = 'abv';
		private $lang_default = '';
		private $langsArray = [];
		/*messages*/
		private $error = '';

		/**
		 * Language constructor.
		 *
		 * @param string $tagLanguage
		 */
		public function __construct() {
			self::$utilitarian = new Utilitarian();
		}

		//************************************
		// Language Array
		//************************************

		/**
		 * @return array
		 */
		public function getLangsArray():array {
			if ( !empty( $this->langsArray ) ) {
				self::setError();
				return $this->langsArray;
			}else {
				self::setError( 'Languages Array | Empty' );
			}
			return [];
		}

		/**
		 * @param array $langsArray
		 */
		public function setLangsArray( array $langsArray ) {
			$tagLang = $this->getTagLanguageArray();
			$tagAbv = $this->getTagAbbreviationArray();

			$keyValidator = self::$utilitarian::key_validator_array( [ $tagLang, $tagAbv ], $langsArray );

			if ( $keyValidator ) {
				$this->langsArray[] = $langsArray;
				self::setError();
			}else {
				self::setError( 'New Language | Wrong Tag Names' );
			}
		}

		//************************************
		// Language Default
		//************************************

		/**
		 * @return string
		 */
		public function getLangDefault():string {
			if ( !empty( $this->lang_default ) ) {
				self::setError();
				return $this->lang_default;
			}else {
				self::setError( 'Language Default | Empty' );
			}
			return FALSE;
		}

		/**
		 * @param string $lang_default
		 */
		public function setLangDefault( string $lang_default ) {
			$keyValidator = self::$utilitarian::get_value_from_array( $lang_default, $this->getLangsArray(), $this->getTagAbbreviationArray() );
			if ( $keyValidator ) {
				$this->lang_default = $lang_default;
				self::setError();
			}else {
				self::setError( "Language Default | No Isset '$lang_default' in '" . self::getTagAbbreviationArray() . "'" );
			}
		}

		//************************************
		// Language Tag Name
		//************************************

		/**
		 * @return string
		 */
		public function getTagLanguageArray():string {
			if ( !empty( $this->tagLanguageArray ) ) {
				self::setError();
				return $this->tagLanguageArray;
			}else {
				self::setError( 'Tag Language Array | Empty' );
			}
			return FALSE;
		}

		/**
		 * @param string $tagLanguageArray
		 */
		public function setTagLanguageArray( string $tagLanguageArray ) {
			if ( !empty( $tagLanguageArray ) ) {
				self::setError();
				$this->tagLanguageArray = $tagLanguageArray;
			}else {
				self::setError( 'Tag Language Array | Empty' );
			}
		}

		//************************************
		// Abbreviation Tag Name
		//************************************

		/**
		 * @return string
		 */
		public function getTagAbbreviationArray():string {
			if ( !empty( $this->tagAbbreviationArray ) ) {
				self::setError();
				return $this->tagAbbreviationArray;
			}else {
				self::setError( 'Tag Abbreviation Array | Empty' );
			}
			return FALSE;
		}

		/**
		 * @param string $tagAbbreviationArray
		 */
		public function setTagAbbreviationArray( string $tagAbbreviationArray ) {
			if ( !empty( $tagAbbreviationArray ) ) {
				self::setError();
				$this->tagAbbreviationArray = $tagAbbreviationArray;
			}else {
				self::setError( 'Tag Abbreviation Array | Empty' );
			}
		}

		//************************************
		// Messages
		//************************************

		/**
		 * @return string
		 */
		public function getError():string {
			return $this->error;
		}

		/**
		 * @param string $error
		 */
		private function setError( string $error = '' ) {
			if ( !empty( $error ) ) {
				$this->error = "Error: " . $error;
			}else {
				$this->error = 'Error: Nothing';
			}
		}

	}