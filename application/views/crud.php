<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TEST KERJA</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>/crud/insert">ADD NEW BOOK
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center" style="padding-top:60px;">
        
        <table id="example" class="table table-striped table-bordered" style="width:100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Date Published</th>
                <th>Number Of Pages</th>
                <th>Book Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $id = 1; foreach($book as $value){ ?>
            <tr>
                <td><?php echo $id; $id++;?></td>
                <td><?php echo $value->title;?></td>
                <td><?php echo $value->author;?></td>
                <td><?php echo $value->date_published;?></td>
                <td><?php echo $value->number_of_pages;?></td>
                <td><?php echo $value->type_name;?></td>
                <td><a href="<?php echo site_url();?>/crud/update/<?php echo $value->id_book;?>">Update</a> <a href="<?php echo site_url();?>/crud/delete_book/<?php echo $value->id_book;?>">Delete</a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>/vendor/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo base_url();?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  
  <script>
      $(document).ready(function() {
        $('#example').DataTable();
      } );
  </script>

</body>

</html>
