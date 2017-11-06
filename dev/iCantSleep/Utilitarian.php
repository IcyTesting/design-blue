<?php
	/**
	 * Created by PhpStorm.
	 * User: Ronalindo
	 * Date: 20/08/2017
	 * Time: 19:49
	 */

	namespace iCantSleep;

	/**
	 * Class Utility
	 *
	 * @package app\classes
	 */
	class Utilitarian {

		/**
		 * @param string $needle
		 * @param array  $array
		 * @param string $key_to_search
		 * @param string $key_to_return_value
		 *
		 * @return array|bool
		 */
		static function get_value_from_array( string $needle, array $array, string $key_to_search, string $key_to_return_value = '' ) {

			if ( empty( $key_to_return_value ) ) {
				$search = [ $key_to_search ];
			}else {
				$search = [ $key_to_search, $key_to_return_value ];
			}

			$empty_key_to_return_value = function( $array, $key_to_return_value ) {
				if ( empty( $key_to_return_value ) ) {
					return TRUE;
				}else {
					return $array[ $key_to_return_value ];
				}
			};

			foreach ( $array as $k => $v ) {
				if ( is_array( $v ) ) {
					if ( self::key_validator_array( $search, $v ) ) {
						if ( is_array( $v[ $key_to_search ] ) ) {
							if ( in_array( $needle, $v[ $key_to_search ] ) ) {
								return $empty_key_to_return_value( $v, $key_to_return_value );
							}
						}else {
							if ( $v[ $key_to_search ] == $needle ) {
								return $empty_key_to_return_value( $v, $key_to_return_value );
							}
						}
					}
				}
			}
			return FALSE;
		}

		/**
		 * @param array $keys_to_validated
		 * @param array $array_to_find
		 *
		 * @return bool
		 */
		static function key_validator_array( array $keys_to_validated, array $array_to_find ) {
			/*get all keys of array*/
			$array_to_find = array_keys( $array_to_find );
			/*delete duplicate values*/
			$keys_to_validated = array_unique( $keys_to_validated );
			$array_to_find = array_unique( $array_to_find );
			/*init counter of keys to search*/
			$key_equal_array = 0;
			foreach ( $keys_to_validated as $item ) {
				if ( in_array( $item, $array_to_find ) ) {
					$key_equal_array++;
				}
			}
			if ( count( $keys_to_validated ) == $key_equal_array ) {
				return TRUE;
			}
			return FALSE;
		}
	}