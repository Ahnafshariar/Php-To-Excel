<?php

$url = 'solarData.json';

$data = file_get_contents($url);

$characters =json_decode($data,true);

$size = count($characters);


$i=0 ;
while($i<$size)
{   
    echo "ID :".$characters[$i]["id"]."<br>";
    echo "Power Id :".$characters[$i]["power_id"]."<br>";
    echo "Date : ".$characters[$i]["date"]."<br>";
    echo "On Time :".$characters[$i]["on_time"]."<br>";
    echo "Off Time :".$characters[$i]["off_time"]."<br>";
    echo "Runtime :".$characters[$i]["runtime"]."<br>";
    echo "Average Flow Rate :".$characters[$i]["avg_flow_rate"]."<br>";
    echo "Total Flow :".$characters[$i]["total_flow"]."<br><br>";
   
    $i= $i+1;
}


//echo implode();


/*
echo "ID :".$characters[1]["id"]."<br>";
echo "Power Id :".$characters[1]["power_id"]."<br>";
echo "Date : ".$characters[1]["date"]."<br>";
echo "On Time :".$characters[1]["on_time"]."<br>";
echo "Off Time :".$characters[1]["off_time"]."<br>";
echo "Runtime :".$characters[1]["runtime"]."<br>";
echo "Average Flow Rate :".$characters[1]["avg_flow_rate"]."<br>";
echo "Total Flow :".$characters[1]["total_flow"]."<br>";




foreach ($characters as $id)
{
    echo "ID :".$id['id']."<br>";
}

foreach ($characters as $powerid)
{
    echo "Power Id :".$powerid['power_id']."<br>";
}
foreach ($characters as $date)
{
    echo "Date :".$date['date']."<br>";
}

foreach ($characters as $on_time)
{
    echo "On time :".$on_time['on_time']."<br>";
}

foreach ($characters as $off_time)
{
    echo "Off time :".$off_time['off_time']."<br>";
}

foreach ($characters as $runtime)
{
    echo "Runtime :".$runtime['runtime']."<br>";
}
foreach ($characters as $afr)
{
    echo "Average Flow Rate :".$afr['avg_flow_rate']."<br>";
}
foreach ($characters as $total_flow)
{
    echo "Total flow :".$total_flow['total_flow']."<br>";
}


echo $characters[1]->power_id;
echo $characters[2]->date;
echo $characters[3]->on_time;
echo $characters[4]->off_time;
echo $characters[5]->runtime;
echo $characters[6]->avg_flow_rate;
echo $characters[7]->total_flow;*/

?>

