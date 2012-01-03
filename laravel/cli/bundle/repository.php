<?php namespace Laravel\CLI\Bundle;

class Repository {

	/**
	 * The root of the Laravel bundle API.
	 *
	 * @var string
	 */
	protected $api = 'http://bundles.laravel.com/api/';

	/**
	 * Get the decoded JSON information for a bundle.
	 *
	 * @param  string  $bundle
	 * @return array
	 */
	public function get($bundle)
	{
		$bundle = @file_get_contents($this->api.$bundle);

		return json_decode($bundle, true);
	}

}