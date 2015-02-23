<?php

class DatabaseSeeder extends BaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('PostTableSeeder');
		$this->call('MetaSeeder');
		$this->call('TagSeeder');
		$this->call('TaggablesSeeder');
		$this->call('ProductSeeder');
		$this->call('ParametersSeeder');
	}

}