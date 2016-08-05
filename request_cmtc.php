<?php

	
	
	
	$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/json/courses.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

    $exec = curl_exec($curl);
    curl_close($curl);

    //echo $exec;


	//echo var_dump(json_decode($exec));

	$data= json_decode($exec);

	//print_r($data);
	
	foreach($data as $key => $value)
	{
		//echo $key . '<br>';
		echo 'id: '. $value->id;
		echo '<br>';
		echo 'TITLE: '. $value->c_title;
		echo '<br>';
		echo 'Detail: '. $value->c_detail;
		echo '<br>';
		echo 'Date: '. $value->c_date;
		echo '<br>';
		echo 'View: '. $value->c_view;
		echo '<br>';
		echo '<a href="request_cmtc_detail.php?id='.$value->id.'">คลิ๊กดูรายละเอียด</a>';
		echo '<hr>';
	}
?>