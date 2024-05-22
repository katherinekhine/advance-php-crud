<?php
require_once 'partials/connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance PHP</title>
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>

    <h1 class=" bg-dark text-light text-center py-2">PHP CRUD</h1>

    <div class="container">
        <!-- modal -->
        <?php
        include "form.php";
        ?>
        <?php
        include 'profile.php';
        ?>

        <div class="row mb-3 ">
            <div class="col-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark"><i class="fas fa-search text-light "></i></span>
                    </div>
                    <input type="text" class="form-control border-2" placeholder="Search user..">
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-dark " type="button" data-bs-toggle="modal" data-bs-target="#usermodal">Add new User</button>
            </div>
        </div>


        <!-- table -->
        <?php include 'tableData.php'; ?>
        <!-- pagination -->
        <nav aria-label="Page navigation example" id="pagination">
            <ul class="pagination justify-content-center ">
                <li class="page-item disabled "><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active "><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- bootstrap popper and js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


    <!-- script -->
    <script src="js/index.js"></script>
</body>

</html>