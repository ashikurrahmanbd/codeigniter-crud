<?php include('header.php'); ?>
    <div class="site-content">
        <div class="site-container">
            <form action="<?php echo base_url() ?>index.php/insert-new" method="post" class="insert-form">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="department" placeholder="Department">
                <input type="text" name="cgpa" placeholder="CGPA">
                <input type="submit" name="insert">
            </form>
        </div>
    </div>
<?php include('footer.php'); ?>