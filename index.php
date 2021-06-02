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
  <body>
  <?php 
        include 'connect.php';
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $status = $_POST['status'];
            $sql = mysqli_query($connect,"INSERT INTO category(name,status) VALUES ('$name','$status')");
            $category = mysqli_query($connect,"SELECT * FROM category");
          if($sql==true){
            echo "Thêm mới thành công!";
          }else{
            echo "Thêm mới thất bại";
          }
        }

  ?>
  <body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="category.php">Quản lí danh mục</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled link</a>
        </li>
    </ul>
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
                <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
            <div class="col-md-6">
                <h1>Danh sách danh mục</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($category as $key => $value) {?>
                        <tr>
                            <td scope="row"><?php echo $value['id']?></td>
                            <td><?php echo $value['name']?></td>
                            <td><?php echo $value['status']?></td>
                        </tr>
                        <?php }?>
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