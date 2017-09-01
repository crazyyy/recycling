<?php
/**
 * Description: 	We developed this module to stop all those haters who steal our hard work!
 * Author: 			AA-Team
 * Author URI:		http://codecanyon.net/user/AA-Team/portfolio
**/

! defined( 'ABSPATH' ) and exit;

if(class_exists('psp_Validation') != true) {
	class psp_Validation {

		const VERSION = 1;
		const ALIAS = 'psp';

		/**
		 * configuration storage
		 *
		 * @var array
		 */
		public $cfg = array();

		private $key_sep = '#!#';

		/**
		 * The constructor
		 */
		function __construct ()
		{ 
			add_action('wp_ajax_' . ( self::ALIAS ) . 'TryActivate', array( $this, 'aaTeamServerValidate' ));
		}

		/* [D-O-W-N-L-O-A-D-E-D | F-R-O-M | G-F-X-T-R-A.C-O-M] */
		public function aaTeamServerValidate () {

			update_option( self::ALIAS . '_register_key', 'nulled');
			update_option( self::ALIAS . '_register_email', 'ganja@parker');
			update_option( self::ALIAS . '_register_buyer', 'gfxtra');
			update_option( self::ALIAS . '_register_item_id', '6109437');
			update_option( self::ALIAS . '_register_licence', 'regular');
			update_option( self::ALIAS . '_register_item_name', 'Premium SEO Pack – Wordpress Plugin');

			// update to db the hash for plugin
			$hash = md5($this->encrypt( 'nulled' ));
			update_option( self::ALIAS . '_hash', $hash);

			die(json_encode(
				array(
					'status' => 'OK'
				)
			));

		}

		function isReg ( $hash )
		{
			return 'valid_hash';
		}

		private function checkValPlugin ( $hash, $code )
		{
			return 'valid_hash';
		}

		private function encrypt ( $code, $sendTime=null )
		{
			// add some extra data to hash
			$register_email = get_option( self::ALIAS . '_register_email');
			$buyer = get_option( self::ALIAS . '_register_buyer');
			$item_id = get_option( self::ALIAS . '_register_item_id');
			$validation_date = !isset($sendTime) ? time() : $sendTime;

			if(!isset($sendTime)) {
				// store the date into DB, use for decrypt
				update_option( self::ALIAS . '_register_timestamp', $validation_date);
			}

			return  $validation_date . $this->key_sep .
					$register_email . $this->key_sep .
					//$this->getHost(get_option('siteurl')) . $this->key_sep .
					$buyer . $this->key_sep .
					$item_id . $this->key_sep .
					$code . $this->key_sep;
		}

		private function decrypt ( $code )
		{

		}

		private function getHost ( $url )
		{
			$__ = parse_url( $url );
			return $__['host'];
		}
	}
}