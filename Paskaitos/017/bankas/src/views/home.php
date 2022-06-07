<?php

$title = 'ADD';

require __DIR__ . '/top.php';
?>


<h1>Home sweet home</h1>

<ul>
<?php foreach ($list as $value) : // dvitaskis kad nereiktu skliausteliu ?> 
 <li><? $value ?></li>    



<?php endforeach ?>
</ul>

<?php
require __DIR__ . '/bottom.php';