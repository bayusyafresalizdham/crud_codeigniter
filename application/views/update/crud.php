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
            <a class="nav-link" href="#">ADD NEW BOOK
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-left" style="padding-top:60px;">
        
          <div class="form-group">
            <label >Book Title</label>
            <input type="text" id="title" name="title" value="<?php echo $book->title;?>"class="form-control" placeholder="Enter Title">
            <small class="form-text text-muted">Required.</small>
          </div>
          <div class="form-group">
            <label >Book Author</label>
            <input type="text" id="author" name="author" value="<?php echo $book->author;?>" class="form-control" placeholder="Enter Author">
            <small class="form-text text-muted">Required.</small>
          </div>
          <div class="form-group">
            <label >Published Date</label>
            <input type="date" id="date" name="date" value="<?php echo date('Y-m-d',strtotime($book->date_published)) ?>" class="form-control" placeholder="Enter Published Date">
            <small class="form-text text-muted">Required.</small>
          </div>
          
          <div class="form-group">
            <label >Number Of Page</label>
            <input type="number" id="number" name="number" value="<?php echo $book->number_of_pages;?>" class="form-control" placeholder="Enter Number Of Page">
            <small class="form-text text-muted">Required.</small>
          </div>
          
          <div class="form-group">
            <label >Book Type</label>
            <select class="form-control" id="type" name="type">
                <option value="0">Select Type</option>
                <?php foreach($type as $value){ ?>
                <option value="<?php echo $value->id_book_type; ?>" <?php if($value->id_book_type == $book->id_book_type){ echo "selected"; }?>><?php echo $value->type_name; ?></option>
                <?php } ?>
            </select>
            <small class="form-text text-muted">Required.</small>
          </div>
          <button type="submit" class="btn btn-primary" id="update">Update</button>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script src="<?php echo base_url();?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
      $(document).ready(function(){
         url = "<?php echo site_url();?>";
         idbook = "<?php echo $book->id_book;?>";
         $("#update").click(function(){
             var title = $("#title").val();
             var author = $("#author").val();
             var date = $("#date").val();
             var type = $("#type").val();
             var number = $("#number").val();
             if(title == "" || author == "" || date == "" || type == "0" || number == ""){
                 alert("Semua Form Harus Terisi");
             }else{
                 $.post(url+"/crud/update_book",{id:idbook,title:title,author:author,date_published:date,number_of_pages:number,id_book_type:type},function(data){
                     window.location.href = url+"/crud/";

                 });
             }
         });
         
      });
  </script>
  
</body>

</html>
