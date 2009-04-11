<!-- First of all, i'm importing generic variables, functions, etc.-->
<?php include('settings.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
</div>

<div class="right">
    <div class="right_top"><!-- For Header Image --></div>
    <?php include('hmenu.php'); ?>

    <?php
        $page = @$_GET['page'];
        if(!empty($page)) {
            $page();
        } else {
            mainPage();
        }
    ?>

    </div>
</div>

<?php include('footer.php'); ?>
