<!-- First of all, i'm importing generic variables, functions, etc.-->
<?php include('settings.php'); ?>
<?php include('functions.php'); ?>

<!-- And importing header, sidebar.. -->
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<div class="right">
    <div class="right_top"><!-- For Header Image --></div>

    <!-- For horizontal menu -->
    <div id="hmenu">
        <ul>
            <li><a href="<?php echo $url ?>/">Ana Sayfa</a></li>
            <?php include('menu.php'); ?>
        </ul>
    </div>

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
