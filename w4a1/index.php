<?php
$array = array(
	array(
		'id' => 0,
		'genre' => 'Action',
		'title' => 'Spider Man 1',
		'Main actor' => 'Tobey Maguire'
	),
	array(
		'id' => 1,
		'genre' => 'comedy',
		'title' => 'Shang Chi',
		'Main actor' => 'Simu Liu'
	),
	array(
		'id' => 2,
		'genre' => 'block buster',
		'title' => 'Eternals',
		'Main actor' => 'Agelina jolie'
	),
	array(
		'id' => 3,
		'genre' => 'comedy',
		'title' => 'Ant Man',
		'Main actor' => 'Paul rude'
      
	),
	array(
		'id' => 4,
        'genre' => 'block buster',
		'title' => 'Avengers',
		'Main actor' => 'Robert downey jr.'
	),
		array(
		'id' => 5,
		'genre' => 'Action',
		'title' => 'Spider Man : Far from home',
		'Main actor' => 'Tom Holland'
	),
	array(
		'id' => 6,
		'genre' => 'Fantasy',
		'title' => 'guardians of the galaxy 2',
		'Main actor' => 'Chris Pratt'
	),
	array(
		'id' => 7,
		'genre' => 'Action',
		'title' => 'Thor',
		'Main actor' => 'Chris Hemsworth'
	),
);

foreach ((array) $array as $key => $value) {
	$sort[$key] = $value['genre'];
}

array_multisort($sort, SORT_ASC, $array);
print_r($array);

?>