<?php
namespace Dkweb\Flightstats\Http\Controllers;




class FlightStats extends RestClient
{
    protected $config;
    protected $apiUrl;

    public function __construct()
    {

        $this->apiUrl = 'https://api.flightstats.com/flex/';
    }
    /**
     *
     * @return \Spiiicy\Bundle\FlightStatsBundle\FlightStats\Methods\FlightStatus
     */
    public function getFlightStatus()
    {
        $api = $this->apiUrl . 'flightstatus/rest/v2/json/';

        return new Methods\FlightStatus($this->config, $api);

    }
    /**
     *
     * @return \Spiiicy\Bundle\FlightStatsBundle\FlightStats\Methods\Schedules
     */
    public function getSchedules()
    {
        $api = $this->apiUrl . 'schedules/rest/v1/json/';

        return new Methods\Schedules($this->config, $api);
    }
    /**
     *
     * @return \Spiiicy\Bundle\FlightStatsBundle\FlightStats\Methods\Airlines
     */
    public function getAirlines()
    {
        $api = $this->apiUrl . 'airlines/rest/v1/json/';

        return new Methods\Airlines($this->config, $api);
    }
    /**
     *
     * @return \Spiiicy\Bundle\FlightStatsBundle\FlightStats\Methods\Airports
     */
    public function getAirports()
    {
        $api = $this->apiUrl . 'airports/rest/v1/json/';

        return new Methods\Airports($this->config, $api);
    }
}