<?php

// Return post amenities
if ( ! function_exists('_dataAmenities'))
{
    function _dataAmenities()
    {
        return array (
    		['title' => 'Garage'],
    		['title' => 'Beds'],
			['title' => 'Baths'],
			['title' => 'Air conditioning'],
			['title' => 'Irons'],
			['title' => 'Heating'],
			['title' => 'Internet'],
			['title' => 'Microwave'],
			['title' => 'Smoking allowed'],
			['title' => 'Use of pool'],
			['title' => 'Toaster'],
			['title' => 'Cofee pot'],
			['title' => 'Cable TV'],
			['title' => 'Roof terrace'],
			['title' => 'Terrace'],
			['title' => 'Towelwes'],
			['title' => 'Hi-Fi'],
			['title' => 'Beach'],
			['title' => 'Child Room'],
			['title' => 'Drawing room'],
			['title' => 'Security'],
			['title' => 'Camera Surveillance'],
			['title' => 'Nature'],
			['title' => 'Route path']
    	);
    }
}
// Return category/tag types
if ( ! function_exists('_dataTagTypes'))
{
	function _dataTagTypes(){
		return [
			'category' => 'Category',
			'tag' => 'Tag',
		];
	}
}

// Return post property status
if ( ! function_exists('_propertyStatuses'))
{
	function _propertyStatuses(){
		return [
			'sold-out' => 'Sold Out',
			'for-rent' => 'For Rent',
			'for-sale' => 'For Sale'
		];
	}
}


// Return post property status
if ( ! function_exists('_dataCountriesAndLocation'))
{
	function _dataCountriesAndLocation(){
		return [
			['name' => 'United Arab Emirates', 'cities' => ['Abu Dhabi','Dubai','Sharjah','Ajman','Fujairah','Ras Al Khaimah','Umm Al Quwain'] ],
			['name' => 'India', 'cities' => ['Mumbai','Kolkata',	'Delhi',	'Chennai',	'Bangalore',	'Hyderabad',	'Ahmadabad',	'Pune',	'Surat','Kanpur',	'Jaipur',	'Lucknow',	'Nagpur',	'Patna',	'Indore',	'Vadodara',	'Bhopal','Coimbatore',	'Ludhiana',	'Kochi','Visakhapatnam',	'Agra','Varanasi',	'Madurai',	'Meerut','Nashik','Jabalpur','Jamshedpur','Asansol',	'Dhanbad',	'Faridabad',	'Allahabad',	'Amritsar',	'Vijayawada','Rajkot',]]
		];
	}
}

if ( ! function_exists('_dataCountries'))
{
	function _dataCountries(){
		$countriesAndLocation = _dataCountriesAndLocation();
		$countries = array();

		foreach ($countriesAndLocation as $value) {
			$countries[$value['name']] = $value['name']; 
		}

		return $countries;
	}
}


if ( ! function_exists('_dataCities'))
{
	function _dataCities( $countryName ){
		$countriesAndLocation = _dataCountriesAndLocation();
		$cities = array();

		foreach ($countriesAndLocation as $value) {
			if($value['name'] == $countryName){
				foreach($value['cities'] as $city){
					$cities[$city] = $city;
				} 
			}
		}

		return $cities;
	}
}





	
	