<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/sicemet/assets/img/tekom.png" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font Awesome 4.7 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>List Metodologi</title>
  </head>
  <body style="background-color: #fbf4f9;">

    <nav class="navbar navbar-dark bg-dark fixed-top justify-content-center">
        <span class="navbar-brand font-weight-bold"><i class="fa fa-users" aria-hidden="true"></i> SiCeMet</span>
    </nav>
    
    <div class="container p-2" style="margin-top: 70px;">
        <div class="row mb-2 justify-content-center">
            <div class="col-md-10 text-center p-2">
                <h3>Metodologi yang cocok untuk Proyek Anda</h3>
            </div>
        </div>
        <div class="row mb-1 justify-content-center">
            <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr class='table-active'>
                        <th scope="col">Nama Metodologi</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $arr = [
                            'Increment' => 0,
                            'Prototyping' => 0,
                            'Vshaped' => 0,
                            'Scrum' => 0,
                            'Spiral' => 0,
                            'Rapid Application Development' => 0,
                            'Extreme Programming' => 0,
                            
                        ];
                        $i = [
                            'kebutuhan',
                            'kompleksitas',
                            'waktu',
                            'jumlah',
                            'keterampilan',
                            'klien'
                        ];
                        foreach ($i as $index){
                            
                            switch ($_POST[$index]) {
                                case "Sudah Jelas":{
                                    $arr["Increment"]++;$arr["Vshaped"]++;$arr["Rapid Application Development"]++;
                                    $arr["Scrum"]++;$arr["Extreme Programming"]++;
                                    break;
                                }
                                case "Belum Jelas":{
                                    $arr["Prototyping"]++;$arr["Spiral"]++;
                                    break;
                                }
                                case "Sederhana":{
                                    $arr["Vshaped"]++;$arr["Rapid Application Development"]++;
                                    $arr["Extreme Programming"]++;
                                    break;
                                }
                                case "Kompleks":{
                                    $arr["Increment"]++;$arr["Spiral"]++;$arr["Prototyping"]++;
                                    $arr["Scrum"]++;
                                    break;
                                }
                                case "1-3 Bulan":{
                                    $arr["Increment"]++;$arr["Spiral"]++;$arr["Prototyping"]++;
                                    $arr["Rapid Application Development"]++;$arr["Extreme Programming"]++;
                                    break;
                                }
                                case "1 Bulan":{
                                    $arr["Vshaped"]++;$arr["Scrum"]++;
                                    break;
                                }
                                case "Kurang 12":{
                                    $arr["Extreme Programming"]++;
                                    break;
                                }
                                case "Lebih 12":{
                                    $arr["Increment"]++;$arr["Spiral"]++;$arr["Prototyping"]++;
                                    $arr["Rapid Application Development"]++;$arr["Vshaped"]++;$arr["Scrum"]++;
                                    break;
                                }
                                case "Berpengalaman":{
                                    $arr["Spiral"]++;$arr["Scrum"]++;
                                    break;
                                }
                                case "Campuran":{
                                    $arr["Increment"]++;$arr["Prototyping"]++;$arr["Extreme Programming"]++;
                                    $arr["Rapid Application Development"]++;$arr["Vshaped"]++;
                                    break;
                                }
                                case "Terlibat":{
                                    $arr["Increment"]++;$arr["Spiral"]++;$arr["Prototyping"]++;
                                    $arr["Extreme Programming"]++;
                                    break;
                                }
                                case "Tidak":{
                                    $arr["Vshaped"]++;$arr["Scrum"]++;$arr["Rapid Application Development"]++;
                                    break;
                                }
                                    
                            }   
                        }
                        arsort($arr);
                        foreach ($arr as $nama => $nilai){
                            $nilai; // nilai-1
                            if ($nilai != 0){
                                echo "<tr>";
                                echo "<td class='table-dark'>$nama ($nilai <i class='fa fa-star' aria-hidden='true'></i>)</td>";
                                echo "<td class='table-dark'><a class='btn btn-info' href='".$nama.".html' role='button'>Detail</a></td>";
                                echo "</tr>";
                            }
                        }                           
                    ?>
                </tbody>
            </table>
            </div> 
        </div>
        <div class="row justify-content-end">
        <div class="col-lg-3 ml-1"><button onclick="goBack()" class="btn btn-secondary btn-lg mb-2">Kembali Ke Form</button></div>  
        </div>
    </div>

    <footer class="bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center py-3 font-weight-bold text-white">
              <p>&copy; Copyright 2020 | By. Team</p>
            </div>
          </div>
        </div>
    </footer>

    <script>
        function goBack() {
          window.history.back();
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

