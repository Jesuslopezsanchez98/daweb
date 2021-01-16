<php
class Utilerias{
	public static function toXML($date,
	$nameList="",$nameElement=""){
	$xml="<$nameList>";
	foreach ($data as $row){
	$xml.="<$nameElement";
	foreach ($row as $k=>$v){
	$xml = $xml ."<$k>$v</$k>";
	}
	$xml.="</$nameElement>";

	}
	$xml.="</$nameElement>";
    return ($xml);
	}
}
?>