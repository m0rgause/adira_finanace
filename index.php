<?php
require_once 'templates/header.php';
$products = products();
// limit product to 6
$products = array_slice($products, 0, 6);
?>

<div class="p-5 mb-4 bg-body-tertiary jumbotron-image mask">
    <div class="d-flex justify-content-center  h-100 align-items-center">
        <div class=" w-100 text-center">
            <h1 class="display-5 fw-bold text-light">ADIRA FINANCE</h1>
            <p class="fs-4 text-light">Temukan produk yang anda inginkan.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="product text-center">
        <h1 class="py-5">Explore Product</h1>
        <div class="row">
            <?php foreach ($products as $p) : ?>
                <div class="col-4">
                    <div class="card rounded-4 mb-2">
                        <div class="card-img-h d-flex justify-content-center align-items-center">
                            <img src="<?= api_produk . 'produk_foto/' . $p['gambar'] ?>" alt="gambar" width="50%">
                        </div>
                        <div class="card-body text-center">
                            <h4><?= $p['nama_produk'] ?></h4>
                            <p><?= $p['harga_produk'] ?></p>
                            <a href="detail.php?id=<?= $p['id_produk'] ?>" class="btn btn-outline-dark btn-lg px-5">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="container"></div>
</div>
<?php
require_once 'templates/footer.php';
?>