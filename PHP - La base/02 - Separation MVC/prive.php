<?php
    require_once("action/priveAction.php");

    $data = execute();
    // $data["spies]

    require_once("partial/header.php");
?>
<div>
    <?php
        foreach ($data["spies"] as $spy) {
            ?>
            <div><?= $spy ?></div>
            <?php
            }    
        ?>
</div>
<?php
    
	require_once("partial/footer.php");