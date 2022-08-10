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

            <h3 class="home-page-title">All Student List</h3>
            <a href="<?php echo base_url().'index.php' ?>/insert-new-form">Insert New Student</a>

            <table class="table table-dark student-table">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">DepartMent</th>
                        <th scope="col">CGPA</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all_students as $row) { ?>

                    <tr>
                        <td scope="row"><?php echo $row->s_id ?></td>
                        <td><?php echo $row->sname; ?></td>
                        <td><?php echo $row->department; ?></td>
                        <td><?php echo $row->cgpa; ?></td>
                        <td> <a href="<?php echo base_url().'index.php' ?>/update-data?id=<?php echo $row->s_id; ?>">Edit</a>  | <a href="<?php echo base_url().'index.php' ?>/delete-data?id=<?php echo $row->s_id; ?>">Delete</a> </td>
                    </tr>

                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <footer class="footer">
        <div class="site-container">
            <p>Copyright &copy; 2023</p>
        </div>
        
    </footer>
</body>
</html>