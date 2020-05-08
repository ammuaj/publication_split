$all_papers = "";

$paper = "6. Md. Asadujjaman, Md. Harun Or Rashid & Sohel Rana, “Anthropometric Measurement of External Ear and Correlation with Age in North Regional People of Bangladesh”, Bangladesh Journal of Medical Science, vol. 18, no. 2, pp. 206-210, 2019.";

$out = preg_split('/[“”]/',$paper);
preg_match('/[0-9]{4}/',$paper,$year);
#print_r($out);

#Splint publication into several parts

echo '</br>Authors: ' . trim(preg_replace('/[0-9]+./','',$out[0]),",");
echo '</br>Title: ' . $out[3];
echo '</br>Publisher: ' . trim($out[6],",");
echo '</br>Year: '. $year[0];

