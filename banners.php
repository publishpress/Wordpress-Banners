<?php
/**
 * @package PublishPress
 * @author  PublishPress
 *
 * Copyright (c) 2021 PublishPress
 *
 * WordPressBanners is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * WordPressBanners is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PublishPress.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

if(!class_exists('PP_WP_Banners')) {

    define('PP_WP_BANNERS_VERSION', '1.0.0');

    class PP_WP_Banners
    {

        /**
         * HTML output to display banner to install Pwrmissions
         *
         * @param string    $text_domain        Text domain of the plugin where the banner is displayed
         * @param boolean   $display_heading    Display 'Recommendations for you' heading
         *
         * @return void
         */
        public function pp_install_permissions_banner( $text_domain, $display_heading = true ) {
            if( $display_heading ) {
			?>
			<p class="nav-tab-wrapper pp-recommendations-heading">
				<?php _e( 'Recommendations for you', $text_domain ) ?>
			</p>
            <?php } ?>
			<div class="pp-sidebar-box">
				<h3>
					<?php _e( 'Control permissions for individual posts and pages', $text_domain ) ?>
				</h3>
				<ul>
					<li>
						<?php _e( 'Choose who can read and edit each post.', $text_domain ) ?>
					</li>
					<li>
						<?php _e( 'Allow specific user roles or users to manage each post.', $text_domain ) ?>
					</li>
					<li>
						<?php _e( 'PublishPress Permissions is 100% free to install.', $text_domain ) ?>
					</li>
				</ul>
				<p>
					<a class="button button-primary"
					   href="<?php echo admin_url('plugin-install.php?s=publishpress-ppcore-install&tab=search&type=term') ?>"
					>
						<?php _e( 'Click here to install PublishPress Permissions for free', $text_domain ); ?>
					</a>
				</p>
				<div class="pp-box-banner-image">
					<a href="<?php echo admin_url('plugin-install.php?s=publishpress-ppcore-install&tab=search&type=term') ?>">
						<img src="<?php echo plugin_dir_url( __FILE__ ) . '/assets/images/pp-permissions-install.jpg';?>"
						title="<?php _e( 'Click here to install PublishPress Permissions for free', $text_domain ); ?>" />
					</a>
				</div>
			</div>
			<?php
            $this->pp_load_css();
		}

        public function pp_load_css() {
            wp_enqueue_style(
                'pp-wordpress-banners-style',
                plugin_dir_url( __FILE__ ) . '/assets/css/style.css',
                false,
                PP_WP_BANNERS_VERSION
            );
        }
    }
}
