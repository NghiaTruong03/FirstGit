<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <?php 
        include './DB/abc.php';
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $status = $_POST['status'];
            $sql = mysqli_query($connect,"SELECT * FROM category");
            var_dump($sql);
        }else{
            // header('Location: 404.php');
        }
        
  ?>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                    <h1>Thêm danh mục </h1>
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                    <label class="radio-inline">
                        <input type="radio" value="1" name="status">Hiện
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="0" name="status">Ẩn
                    </label>
                    </div>
                <button type="button" class="btn btn-primary">Thêm</button>
                </form>
            </div>
            <div class="col-md-6">
                <h1>Danh sách danh mục</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>