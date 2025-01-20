<?php
require 'configDB.php';
echo '<ul>';
$query = $pdo->query('SELECT * FROM `Todo` ORDER BY `id` DESC ');
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<li><b>'.$row->name.'  -  '.$row->bio.'<b><a href="/delete.php?id='.$row->id.'"><button>Видалити</button></a></li>';
}
echo '</ul>';
?>