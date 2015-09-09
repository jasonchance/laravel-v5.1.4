<?php

require_once('conn.php');

$n = 0;
$result = $mysqliOld->query('select * from consoleapp');
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
	$sql = 'INSERT t_admin_menu (`menu_id`, menu_name, parent_id, controller, `action`, sort, `status`, remark) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
	$stmt = $mysqliNew->prepare($sql);
	$menu_id = intval($row['id']);
	$parent_id = $row['parentID'] ? intval($row['parentID']) : '-1';
	$idx = intval($row['idx']);
	$status = intval($row['status']);
	$stmt->bind_param('isissiis', $menu_id, $row['name'], $parent_id, $row['sys'], $row['app'], $idx, $status, $row['remark']);
	$stmt->execute();
	$n ++;
}

echo 'all done, n: ', $n, PHP_EOL;
