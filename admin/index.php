<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./../imges/ic.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- bootstrap css   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./../css/s6css.css">
    <link rel="stylesheet" href="./../css/slider.css">
    <link rel="stylesheet" href="./../main.css">
    <style>
        .admin_img {
            width: 100px;
            object-fit: contain;
        }



        .s6-button {
            margin: 2px;
        }
    </style>
</head>

<body>
    <div class="s6-display-container">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg">
                        <a href="" class="nav-link">Welcome Admin</a>&nbsp;&nbsp;
                        <span> <a href="index.php?logout='1'" style="color: red  ;" class="logout"><i
                                    class="fa-solid fa-power-off s6-large"></i></a>
                        </span>
                    </nav>
                </div>
            </nav>
            <!-- 3  -->
            <div class="bg-secondary p-1 d-flex align-items-center">
                <div class="cenx p-1">
                    <a href="" class="s6-button s6-cyan s6-text-black">insert products</a>
                    <a href="" class="s6-button s6-cyan s6-text-black">view products</a>
                    <a href="index.php?insert_cat" class="s6-button s6-cyan s6-text-black">insert categories</a>
                    <a href="" class="s6-button s6-cyan s6-text-black">view categories</a>
                    <a href="" class="s6-button s6-cyan s6-text-black">all orders</a>
                    <a href="" class="s6-button s6-cyan s6-text-black">all payments</a>
                    <a href="" class="s6-button s6-cyan s6-text-black">list users</a>
                    <a href="" class="s6-button s6-cyan s6-text-black">logout</a>
                </div>
            </div>

            <div class="container my-5">
                <?php
                if (isset($_GET['insert_cat'])) {
                    include('insert_cat.php');
                }
                ?>
            </div>
        </div>

    </div>
    <footer>
        <div class="s6-bottom s6-black">
            <span class="s6-text-orange s6-bar-itemb s6-right">&nbsp;?&nbsp;&nbsp;</span>
            <span class="s6-text-white s6-bar-itemb s6-left" id="ct"> &nbsp; 10</span>
        </div>
    </footer>
    <!-- bs js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
</body>

</html>