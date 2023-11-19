<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/modul4.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="color: #810008; background-color: #DDDDDD;">
        <a class="navbar-brand" href="#" style="color: #810008;"><img src="image/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color: #810008;">SHOWROOM MOTOR<span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <span class="navbar-text">
            Admin
          </span>
        </div>
      </nav>
      <div class="mx-5">
        <h3 class="mt-5">Input data Sepeda Motor Brand Yamaha</h3>
        <p>memasukan data sepeda motor pada halaman showroom ini</p>
        <hr class="bg-danger ">
        
      </div>

        <!-- form -->
        <div class="col">
          <div class="container-fluid">
            <div class="row mt-5">
              <div class="col">
              <form action="action/createmodul4yamaha.php" method="POST" enctype="multipart/form-data">
                <table class="table" style="border-style: solid; border-color: #DE2424; border-width: 4px;">
                  <thead>
                    <tr style="background-color: #DE2424;">
                      <th style="color: white;">Form</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="container">
                        <div class="row">
                            <div class="col-25">
                              <label for="fname">ID Suzuki</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="fname" name="id_yamaha" value="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="fname">Tahun Motor</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="fname" name="thn" value="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="fname">Warna Motor</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="fname" name="wrna" value="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="lname">Harga Motor</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="lname" name="hrga" value="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="tipem">Tipe Motor</label>
                            </div>
                            <div class="col-75">
                              <select id="tipem" name="tipem">
                                <option value="">Type Motor</option>
                                <option value="">Manual</option>
                                <option value="">Matic</option>
                                <option value="">Kopling</option>
                              </select>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="fname">Model Motor</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="fname" name="modelm" value="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="subject">Spesifikasi</label>
                            </div>
                            <div class="col-75">
                              <textarea id="spesifikasi" name="spesifikasi" style="height:150px"></textarea>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="lname">Upload</label>
                            </div>
                            <div class="col-75 input-group">
                              <input type="text" id="lname" class="form-control" name="photo" style="height: 40px;" value="">
                              <div class="input-group-append">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="photo">
                                <label class="custom-file-label text-white" for="inputGroupFile02" style="background-color: #DE2424;">Choose file</label>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row float-right">
                            <button type="button" class="btn btn-danger btn-lg">Submit</button>
                          </div>
             
                        </div>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
                <a class="btn btn-danger btn-lg" href="modul4honda.php" role="button">BRAND HONDA</a>
                <a class="btn btn-danger btn-lg" href="modul4yamaha.php" role="button">BRAND YAMAHA</a>
                <a class="btn btn-danger btn-lg" href="modul4.php" role="button">BRAND SUZUKI</a>
                <br>
                <br>
                <a class="btn btn-danger" href="editmodul4yamaha.php" role="button">HALAMAN EDIT</a>
                <table class="table table-bordered table-hover" style="border-style: solid; border-color: #DE2424; border-width: 4px;">
                  <h3 class="mt-5">Tabel data Brand Suzuki </h3>
                  <thead style="border-style: solid; border-color: #DE2424; border-width: 4px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">ID Suzuki</th>
                      <th scope="col">Tahun Motor</th>
                      <th scope="col">Warna Motor</th>
                      <th scope="col">Harga Motor</th>
                      <th scope="col">Type Motor</th>
                      <th scope="col">Model Motor</th>
                      <th scope="col">Spesifikasi</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  include "action/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM yamaha_motor");

                  while ($row = mysqli_fetch_array($data)) {
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_yamaha'] ?></td>
                      <td><?php echo $row['thn'] ?></td>
                      <td><?php echo $row['wrna'] ?></td>
                      <td><?php echo $row['hrga'] ?></td>
                      <td><?php echo $row['tipem'] ?></td>
                      <td><?php echo $row['modelm'] ?></td>
                      <td><?php echo $row['spesifikasi'] ?></td>
                      <td>
                          <img src="image/<?php echo $row['photo'] ?>" width="250px" height="250px">
                      </td>
                      <td>
                          <a href="editmodul4yamaha.php?kode=<?php echo $row['kode'] ?>"><i class="fa-solid fa-pen-clip" style="width: 50px" ></i></a> 
                          <a href="deletemodul4yamaha.php?kode=<?php echo $row['kode'] ?>" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa-regular fa-trash-can" style="color: #DE2424;"></i></a>
                          
                      </td>
                    </tr>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-dark">
                                            <em>
                                        <h5 class="modal-title" id="exampleModalLongTitle">Brand Motor</h5>
                                    </em>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                        </div>
                                        <div class="modal-body text-dark">
                                            <strong>Apakah anda ingin menghapus data ini ?ㅤ<strong>
                                </div>
                                <div class="modal-footer">
                                    <a href="modul4yamaha.php" class="btn btn-danger">Tidak</a>
                                    <a href="deletemodul4yamaha.php?kode=<?php echo $row['kode'] ?>" class="btn btn-primary">Ya</a>
                                </div>
                    </div>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      
      <div class="sidebar">
        <ul class="nav-list">
            <li>
                <a href="#">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="link_name" id="dashboard">Dashboard</span>
                </a>
            </li>
            <li>
                
                <a href="beranda.php">
                    <i class="fa-solid fa-house"></i>
                    <span class="link_name" id=>Beranda</span>
                </a>
            </li>
            <li>
                <a href="modul1.php">
                    <i class="fa-brands fa-rebel"></i>
                    <span class="link_name">Brand</span>
                </a>
            </li>
            <li>
                <a href="modul2.php">
                    <i class="fa-solid fa-table-list"></i>
                    <span class="link_name">Tipe</span>
                </a>
            </li>
            <li>
                <a href="modul3.php">
                    <i class="fa-solid fa-swatchbook"></i>
                    <span class="link_name">Model</span>
                </a>
            </li> 
            <li>
                <a href="modul4.php">
                    <i class="fa-solid fa-swatchbook"></i>
                    <span class="link_name">Motor</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-right-from-bracket" ></i>
                    <span class="link_name">Sign Out</span>
                </a>
            </li>
        </ul>
      </div>
      

      





    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>