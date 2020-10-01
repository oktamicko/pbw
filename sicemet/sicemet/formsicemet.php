<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/sicemet/assets/img/tekom.png" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome 4.7 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>SiCeMet</title>
  </head>
  <body style="background-color: #fbf4f9;">
      
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark justify-content-center fixed-top">
        <span class="navbar-brand font-weight-bold"><i class="fa fa-users" aria-hidden="true"></i> SiCeMet</span>
    </nav>

    <div class="container" style="margin-top: 70px;">
        <div class="row mb-1 justify-content-center">
            <div class="col-md-10 text-center p-2">
                <p>SiCeMet merupakan aplikasi simulasi menentukan metodologi berdasarkan karakteristik proyek dalam pengembangan sistem</p>
                <h3>Silahkan Mencoba <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 p-2 text-center">
                <h3>Kenali Proyek Anda</h3>
            </div>
        </div>
        <div class="row justify-content-center mb-1">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <form action="listsicemet.php" method="POST"> 
                    <div class="form-group row justify-content-around">
                        <button type="button" class="btn btn-dark col-md-5"><label class="my-1" for="inlineRadio1">Kebutuhan Awal</label></button>
                        <div class="d-flex col-md-5 m-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kebutuhan" id="inlineRadio1" value="Sudah Jelas" required>
                                <label class="form-check-label" for="inlineRadio1">Sudah Jelas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kebutuhan" id="inlineRadio1" value="Belum Jelas" required>
                                <label class="form-check-label" for="inlineRadio1">Belum Jelas</label>
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-group row justify-content-around">
                        <button type="button" class="btn btn-dark col-md-5"><label class="my-1" for="inlineRadio2">Kompleksitas</label></button>
                        <div class="d-flex col-md-5 m-2">
                            <select class="form-control form-control-lg" name="kompleksitas" id="inlineRadio2" required>
                                <option value="">Choose...</option>
                                <option value="Sederhana">Sederhana</option>
                                <option value="Kompleks">Kompleks</option>
                                <option value="Sangat Kompleks">Sangat Kompleks</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row  justify-content-around">
                        <button type="button" class="btn btn-dark col-md-5"><label  class="my-1" for="inlineRadio3">Waktu Delivery</label></button>
                        <div class="d-flex col-md-5 m-2">
                            <select class="form-control form-control-lg" name="waktu" id="inlineRadio3" required>
                                <option value="">Choose...</option>
                                <option value="1 Bulan">&#60; 1 Bulan</option>
                                <option value="1-3 Bulan">1-3 Bulan </option>
                                <option value="4-6 Bulan">4-6 Bulan</option>
                            </select>
                        </div>                     
                    </div>
                    <div class="form-group row justify-content-around">
                        <button type="button" class="btn btn-dark col-md-5"><label  class="my-1" for="inlineRadio4">Jumlah Tim (SDM)</label></button>
                        
                        <div class="d-flex col-md-5 m-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jumlah" id="inlineRadio4" value="Kurang 12" required>
                                <label class="form-check-label" for="inlineRadio4">&#60; 12 Orang</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jumlah" id="inlineRadio4" value="Lebih 12" required>
                                <label class="form-check-label" for="inlineRadio4">&#62; 12 Orang</label>
                            </div>
                        </div>  
                    </div>
                    <div class="form-group row justify-content-around">
                        <button type="button" class="btn btn-dark col-md-5"><label  class="my-1" for="inlineRadio5">Keterampilan Tim</label></button>
                        <div class="d-flex col-md-5 m-2">
                            <select class="form-control form-control-lg" name="keterampilan" id="inlineRadio5" required>
                                <option value="">Choose...</option>
                                <option value="Berpengalaman">Berpengalaman</option>
                                <option value="Campuran">Campuran</option>
                                <option value="Kurang Berpengalaman">Kurang Berpengalaman</option>
                            </select>
                        </div> 
                    </div>
                    <div class="form-group row justify-content-around">
                        <button type="button" class="btn btn-dark col-md-5"><label  class="my-1" for="inlineRadio6">Klien Terlibat Langsung</label></button>

                        <div class="d-flex col-md-5 m-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="klien" id="inlineRadio6" value="Terlibat" required>
                                <label class="form-check-label" for="inlineRadio6">Terlibat</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="klien" id="inlineRadio6" value="Tidak" required>
                                <label class="form-check-label" for="inlineRadio6">Tidak Terlibat</label>
                            </div>
                        </div>  
                    </div> 
                    <div class="row justify-content-end">
                        <div class="col-lg-3 ml-1"><button type="reset" class="btn btn-primary btn-lg mb-2">Ulangi Metodologi</button></div>
                        <div class="col-lg-3 ml-3"><button type="submit" class="btn btn-success btn-lg mb-2">Cek Metodologi</button></div>  
                    </div>
                </form>
            </div>
            <div class="col-md-1">
        </div>
    </div>
    </div>
    <footer">
          <div class="row">
            <div class="col-sm-12 text-center py-3 font-weight-bold">
              <p>&copy; Copyright 2020 | By. Team</p>
            </div>
          </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>