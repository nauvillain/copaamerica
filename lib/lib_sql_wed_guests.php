<?php
function display_groups($fields){
$num_fields=mysql_num_rows($fields);
echo "<p>\n";
for($i=0;$i<$num_fields;$i++) {
	$group=mysql_result($fields,$i,'group_id');
	$name=mysql_result($fields,$i,'name');
	$main=mysql_result($fields,$i,'main');
	if($group==$old_group) {
		echo ", ";
	}
	else {
		echo "<br>$group -";
		
	}
		if ($main) echo "<b>";
		echo "$name";
		if($main) echo "</b>\n";
	$old_group=$group;

}
echo "</p>";
}
function display_coming($fields){
$num_fields=mysql_num_rows($fields);
echo "<p>\n";
echo "total: $num_fields<br/>";
for($i=0;$i<$num_fields;$i++) {
	$name=mysql_result($fields,$i,'name');
	
	echo $name."<br/>";
}
echo "</p>";
}
function display_rooms($fields){
$num_fields=mysql_num_rows($fields);
echo "<p>\n";
for($i=0;$i<$num_fields;$i++) {
	$group=mysql_result($fields,$i,'group_id');
	$name=mysql_result($fields,$i,'name');
	$main=mysql_result($fields,$i,'main');
	$room=mysql_result($fields,$i,'room');
	if($room){
		
		if($room==$old_room) {
			echo ", ";
			}
			else {
				echo "<br>$room -";

				}
				if ($main) echo "<b>";
				echo "$name";
				if($main) echo "</b>\n";
				$old_room=$room;
	}
}
echo "</p>";
}
?>
