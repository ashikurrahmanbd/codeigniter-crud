<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link all css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo  base_url(); ?>/assets/css/custom.css">

    <title>This is Home Page</title>
</head>
<body>
    
    <header class="header">
        <div class="site-container">
            <h3>Student Management System</h3>
        </div>
    </header>
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
    <footer class="footer">
        <div class="site-container">
            <p>Copyright &copy; 2023</p>
        </div>
        
    </footer>
</body>
</html>