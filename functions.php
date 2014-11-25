<?php

	function get_price($find) {
		$data = file_get_contents ('data.json');
		$books_array=json_decode($data,true);

		foreach ($books_array[book] as $book) {
			if ($book[name] == $find) {
				return $book[price];
				break;
			}
		}
}
?>