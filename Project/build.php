<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build a PC</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md4 mb-3 bg-white border-bottom box-shadow">
        <a class="card-body text-dark" href="/project/index.php"><h5 class="my-0 mr-md-auto font-weight-normal">Compumeum</h5></a>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Home</a>
            <?php if( isset($_SESSION["user"]) ): ?>
            <a class="btn btn-outline-danger" href="./controller/doLogout.php">Logout</a>
            <?php else: ?>
                <a class="p-2 text-dark" href="./login.php">Login</a>
                <a class="p-2 text-dark" href="./register.php">Sign Up</a>
            <?php endif; ?>
        </nav>
    </div>
    </header>
    <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="row">
            <div class="col-md-13">
              <div class="card shadow-lg">
                <div class="card-body">
                  <div class="filter-sidebar ">
                      <header class="">                      
                          <h3 class="display-4 text-center">Build a PC</h3>
                          <a href="./recommendation-by-game"><p class="p-2 text-center text-dark">Recommendation by Games</p></a>
                      </header>
                      <hr>

    <div id="form">
        <form action="./order.php" method="post">
        <table>
            <thead>
                <tr>
                    <th scope="col">Component</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="20%">Processor</td>
                    <td>
                        <select class="form-control" name="processor" style="max-width:90%;" id="processor">
                            <option value="0">--</option>
                            <option value="inteli7">Intel i7</option>
                            <option value="inteli5">Intel i5</option>
                            <option value="amdryzen5">AMD Ryzen 5</option>
                            <option value="amdryzen7">AMD Ryzen 7</option>
                        </select>
                    </td>
                    <div id="cpu_price">
                        <td scope="row" width="30%">
                            <?= "test" ?>
                        </td>
                    </div>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="20%">CPU Cooler</td>
                    <td>
                        <!-- <a href="./products/cpu-cooler">Choose a CPU Cooler</a> -->
                        <select class="form-control" name="cpu_cooler" style="max-width:90%;" id="cpu_cooler">
                            <option value="0">--</option>
                            <option value="AirCooling">Air Cooling</option>
                            <option value="LiquidCooling">Liquid Cooling</option>
                        </select>
                    </td>
                    <div id="cpu_cooler_price">
                        <td scope="row" width="30%">
                            <?= "test" ?>
                        </td>
                    </div>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Power Supply</td>
                    <td>
                        <select class="form-control" name="psu" style="max-width:90%;" id="psu">
                            <option value="0">--</option>
                            <option value="500w">500W</option>
                            <option value="650w">650W</option>
                            <option value="1000w">1000W</option>
                            <option value="2000w">2000W</option>
                        </select>
                    </td>
                    <div id="psu_price">
                        <td scope="row" width="30%">
                            <?= "test" ?>
                        </td>
                    </div>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Motherboard and Case Size</td>
                    <td>
                        <select class="form-control" name="motherboard" style="max-width:90%;" id="motherboard">
                            <option value="0">--</option>
                            <option value="ATX">ATX</option>
                            <option value="MicroATX">Micro-ATX</option>
                            <option value="ITX">Mini-ITX</option>
                            <option value="EATX">E-ATX</option>
                        </select>
                    </td>
                    <div id="motherboard_price">
                        <td scope="row" width="30%">
                            <?= "test" ?>
                        </td>
                    </div>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">RAM</td>
                    <td>
                        <select class="form-control" name="ram" style="max-width:90%;" id="ram">
                            <option value="0">--</option>
                            <option value="4gb">4GB</option>
                            <option value="8gb">8GB</option>
                            <option value="16gb">16GB</option>
                            <option value="32gb">32GB</option>
                        </select>
                    </td>
                    <div id="ram_price">
                        <td scope="row" width="30%">
                            <?= "test" ?>
                        </td>
                    </div>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Graphics Card</td>
                    <td>
                        <select class="form-control" name="gpu" style="max-width:90%;" id="gpu">
                            <option value="0">--</option>
                            <option value="nvidia2060">NVIDIA 2060</option>
                            <option value="nvidia2070">NVIDIA 2070</option>
                            <option value="nvidia2080">NVIDIA 2080</option>
                            <option value="nvidia2080ti">NVIDIA 2080Ti</option>
                            <option value="radeon5700">Radeon RX5700</option>
                            <option value="radeon5700xt">Radeon RX5700XT</option>
                        </select>
                    </td>
                    <div id="gpu_price">
                        <td scope="row" width="30%">
                            <?= "test" ?>
                        </td>
                    </div>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Storage</td>
                    <td>
                        <select class="form-control" name="storage" style="max-width:90%;" id="storage">
                            <option value="0">--</option>
                            <option value="hdd512gb">512GB HDD</option>
                            <option value="hdd1tb">1TB HDD</option>
                            <option value="hdd2tb">2TB HDD</option>
                            <option value="ssd256gb">256GB SSD</option>
                            <option value="ssd512gb">512GB SSD</option>
                            <option value="ssd1tb">1TB SSD</option>
                            <option value="ssd2tb">2TB SSD</option>
                        </select>
                    </td>
                    <div id="storage_price">
                        <td scope="row" width="30%">
                            <?= "test" ?>
                        </td>
                    </div>
                    </div>
                </tr>
                <tr class="components">
                    <div class="form-group">
                    <td scope="row" width="14%">Operating System</td>
                    <td>
                        <select class="form-control" name="os" style="max-width:90%;" id="os">
                            <option value="0">--</option>
                            <option value="windows10home">Windows 10 Home</option>
                            <option value="windows10pro">Windows 10 Pro</option>
                            <option value="dos">DOS</option>
                        </select>
                    </td>
                    <div id="os_price">
                        <td scope="row" width="30%">
                            <?= "test" ?>
                        </td>
                    </div>
                    </div>
                </tr>
                <tr class="total-price">
                    <td>Total:</td>
                    <td><?php echo $totalPrice ?></td>
                </tr>
            </tbody>
        </table>
            <br>
            <button type="submit" class="btn" style="width: 200px;">Order</button>
        </form>
    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <footer>
    <article class="bg-dark">
        <div class="card-body text-center">
            <p class="h5 text-white mt-4"><a class="text-white" href="/project/index.php">Compumeum</a></p>
            <p class="text-white">© 2020 All rights reserved.</p>
        </div>
    </article>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>