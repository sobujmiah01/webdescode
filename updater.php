<?php
// GitHub Theme Updater Class
if (!class_exists('WP_GitHub_Updater')) {
    class WP_GitHub_Updater {
        private $config;

        public function __construct($config) {
            $this->config = $config;
            add_filter('pre_set_site_transient_update_themes', array($this, 'check_for_update'));
        }

        public function check_for_update($transient) {
            if (empty($transient->checked)) {
                return $transient;
            }

            // Get the latest theme version from GitHub
            $latest_version = $this->get_latest_version();

            if ($latest_version && version_compare($transient->checked[$this->config['slug']], $latest_version, '<')) {
                $transient->response[$this->config['slug']] = array(
                    'theme'       => $this->config['slug'],
                    'new_version' => $latest_version,
                    'package'     => $this->config['zip_url'],
                    'url'         => $this->config['github_url'],
                );
            }

            return $transient;
        }

        private function get_latest_version() {
            $response = wp_remote_get($this->config['api_url'] . '/releases/latest', array(
                'sslverify' => $this->config['sslverify'],
                'headers'   => array(
                    'User-Agent' => 'WordPress-Updater'
                ),
            ));

            if (is_wp_error($response)) {
                return false;
            }

            $release_info = json_decode(wp_remote_retrieve_body($response));

            return !empty($release_info->tag_name) ? $release_info->tag_name : false;
        }
    }
}