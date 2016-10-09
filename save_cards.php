<?php
if ($_POST['cards']!="") {
$card_file = fopen('cards.txt', 'a');
fwrite($card_file, $_POST['cards']);
fclose($card_file);

echo "Cards Saved";
}
else
	echo "No Data Sent";

?>