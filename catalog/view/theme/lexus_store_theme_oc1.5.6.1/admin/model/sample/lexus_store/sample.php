<?php 
if( !class_exists("ModuleSample") ) {
	class ModuleSample  extends Model { 
		public static function getModules(){ 
			$modules = array(
				'banner',
				'category',
				'pavblog',
				'pavblogcategory',
				'pavblogcomment',
				'pavbloglatest',
				'pavcustom',
				'pavproductcarousel',
				'special',
				'pavmegamenu',
				'information',
				'pavsliderlayer',
				'pavnewsletter',
				'pavcarousel'
			);
	
			return $modules;
		}

		public static function getTables(){
			$tables = array();

			$tables['pavosliderlayers']['pavosliderlayers']    = array( 'table' => 'pavosliderlayers', 'lang'=>false, 'module'=>'pavosliderlayers' );
			$tables['pavblog']['pavblog_category_description'] = array( 'table' => 'pavblog_category_description', 'lang'=>true, 'module'=>'pavblog' );

			return $tables; 
		}

		
		public static function getModulesQuery(){
			$query = array();
			if( is_file(dirname(__FILE__).'/query-tables.php') ){
				include( dirname(__FILE__).'/query-tables.php' );
			}

			elseif( is_file(dirname(__FILE__).'/query.php') ){
				include( dirname(__FILE__).'/query.php' );
			}
			return $query;
		}
		public static function installCustomSetting( $m ){
			
			$d['pavblog'] = array(
						'children_columns' => '3',
						'general_cwidth' => '600',
						'general_cheight' => '250',
						'general_lwidth'=> '900',
						'general_lheight'=> '350',
						'general_sheight'=> '600',
						'general_swidth'=> '250',
						'general_xwidth' => '80',
						'general_xheight' => '80',
						'cat_show_hits' => '1',
						'cat_limit_leading_blog'=> '1',
						'cat_limit_secondary_blog'=> '3',
						'cat_leading_image_type'=> 'l',
						'cat_secondary_image_type'=> 'l',
						'cat_show_title'=> '1',
						'cat_show_image'=> '1',
						'cat_show_author'=> '1',
						'cat_show_category'=> '1',
						'cat_show_created'=> '1',
						'cat_show_readmore' => 1,
						'cat_show_description' => '1',
						'cat_show_comment_counter'=> '1',

						'blog_image_type'=> 'l',
						'blog_show_title'=> '1',
						'blog_show_image'=> '1',
						'blog_show_author'=> '1',
						'blog_show_category'=> '1',
						'blog_show_created'=> '1',
						'blog_show_comment_counter'=> '1',
						'blog_show_comment_form'=>'1',
						'blog_show_hits' => 1,
						'cat_columns_leading_blog'=> 1,
						'cat_columns_leading_blogs'=> 1,
						'cat_columns_secondary_blogs' => 1,
						'comment_engine' => 'local',
						'diquis_account' => 'pavothemes',
						'facebook_appid' => '100858303516',
						'facebook_width'=> '600',
						'comment_limit'=> '10',
						'auto_publish_comment'=>0,
						'enable_recaptcha' => 1,
						'recaptcha_public_key'=>'6LcoLd4SAAAAADoaLy7OEmzwjrf4w7bf-SnE_Hvj',
						'recaptcha_private_key'=>'6LcoLd4SAAAAAE18DL_BUDi0vmL_aM0vkLPaE9Ob',
						'rss_limit_item' => 12,
						'keyword_listing_blogs_page'=>'blogs'

			);

			$m->load->model('setting/setting');
			$m->model_setting_setting->editSetting('pavblog', $d );	
		}
		
		public static function getStoreConfigs(){
			return array(
					'config_image_category_width' =>865,
					'config_image_category_height' => 250,
					
					'config_image_thumb_width' =>332,
					'config_image_thumb_height' => 455,
					
					'config_image_popup_width' =>508,
					'config_image_popup_height' => 696,
					
					'config_image_product_width' =>254,
					'config_image_product_height' => 348,
					
					'config_image_additional_width' =>80,
					'config_image_additional_height' => 110,
					
					'config_image_related_width' =>254,
					'config_image_related_height' => 348,
					
					'config_image_compare_width' =>65,
					'config_image_compare_height' => 89,
					
					'config_image_wishlist_width' =>65,
					'config_image_wishlist_height' => 89,
					
					'config_image_cart_width' =>65,
					'config_image_cart_height' => 89,
			);
		}
	}
}
?>