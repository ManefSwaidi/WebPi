<!doctype html>

<head>
    <title>Export pdf </title>
    <link rel="stylesheet" href="assets1/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets1/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <!-- <link rel="stylesheet" href="assets1/css/vendor/bootstrap.min.css"> -->
  
  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="assets1/css/style.css">
</head>
<body>
    <center><h1>Hebergement choisi</h1></center>
<center>
<div class="col-lg-5 col-md-6">
                        <aside class="checkout__sidebar sidebar border-radius-10">
                            <div class="cart__table checkout__product--table">
                                <table class="cart__table--inner">
                                    <tbody class="cart__table--body">
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                              <?php  echo " <img class='display-block' src='./Controller/upload/".$_GET['file']."'";  ?>
                                                        <span class="product__thumbnail--quantity"></span>
                                                    </div>
                                                    <div class="product__description">
                                                        <h4 class="product__description--name"><a href="product-details.html"><?php echo htmlspecialchars($_GET['titre']); ?></a></h4>
                                        
                                                        <span class="product__description--variant"><?php echo htmlspecialchars($_GET['description']); ?></span>
                                                        <br>
                                                        <span class="product__description--variant"><?php echo htmlspecialchars($_GET['date_dispo']); ?></span>
                                                        <br>
                                                        <span class="product__description--variant"><?php echo htmlspecialchars($_GET['date_nondispo']); ?></span>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price"><?php echo htmlspecialchars($_GET['prix']); ?> TND</span>
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table> 
                            </div>
                           
                            
                        </aside>
                    </div>
                    </center>
                    <script>"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"</script>
                    <?php
require('./pdf/fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'dd World!');
$pdf->Output();
?>
</body>
</html>