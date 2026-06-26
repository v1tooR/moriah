<?php

namespace Hostinger\AiAssistant\Hosting;

use Hostinger\WpHelper\Config;
use Hostinger\WpHelper\Constants;
use Hostinger\WpHelper\Requests\Client;
use Hostinger\WpHelper\Utils;

if ( ! defined( 'ABSPATH' ) ) {
    die;
}

class PlanRepository {
    private const PLAN_DETAILS_ENDPOINT = '/v3/wordpress/plan-details';

    private Client $client;

    public function __construct( Config $config, Utils $utils ) {
        $this->client = new Client(
            $config->getConfigValue( 'base_rest_uri', Constants::HOSTINGER_REST_URI ),
            array(
                Config::TOKEN_HEADER  => Utils::getApiToken(),
                Config::DOMAIN_HEADER => $utils->getHostInfo(),
            )
        );
    }

    /**
     * @return array|null The plan payload (e.g. ['hosting' => ['expires_at' => ...], ...]) or null on failure.
     */
    public function get_plan_details(): ?array {
        global $wpdb;

        $response = $this->client->get( self::PLAN_DETAILS_ENDPOINT, array( 'db_name' => $wpdb->dbname ) );

        if ( is_wp_error( $response ) || wp_remote_retrieve_response_code( $response ) !== 200 ) {
            return null;
        }

        $body = json_decode( wp_remote_retrieve_body( $response ), true );

        if ( ! is_array( $body ) ) {
            return null;
        }

        return $body['data'] ?? $body;
    }
}
