<?php
require_once 'view_begin.php';
?>

<main>

	<?php foreach ($tab as $key => $v): ?>
		<?= e($key) ?> : <?= e($v) ?> </br>
	<?php endforeach; ?>
	
</main>
</body>
</html>

