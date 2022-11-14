<?php

// Tugas Array
$bestie1 =['nayya','nayla','yuria','nitoy','caca'];
$bestie2 =['jason','bela','boay','farhan','acid'];

echo $bestie1[0]," ",$bestie2[0]," ",$bestie1[1]," ",$bestie2[1]," ",$bestie1[2]," ",$bestie2[2]," ",$bestie1[3]," ",$bestie2[3]," ",$bestie1[4]," ",$bestie2[4];
echo "<br />";

//tambah bestie
array_push($bestie1,'sucay');
array_push($bestie2,'nadia');

echo $bestie1[0]," ",$bestie2[0]," ",$bestie1[1], " ",$bestie2[1]," ",$bestie1[2]," ",$bestie2[2]," ",$bestie1[3]," ",$bestie2[3]," ",$bestie1[4]," ",$bestie2[4], " ",$bestie1[5]," ",$bestie2[5];

?>