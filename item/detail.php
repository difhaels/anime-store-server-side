<?php
require '../function/functions.php';
$id = $_GET["id"];
$item = read("SELECT * FROM item WHERE id = '$id'")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="../css/output.css">
</head>

<body>
    <nav class="bg-bg2 py-3 lg:py-5 text-white flex items-center fixed w-full justify-between px-3 lg:px-10">
        <a href="../index.php">
            <img src="../img/icon/back.png" alt="back" class="w-[25px] lg:w-[35px] change-color">
        </a>
        <div class="flex gap-6">
            <a href="">
                <img src="../img/icon/pemesanan.png" class="w-[70px] lg:w-[45px] change-color">
            </a>
            <a href="../item/create.php">
                <img src="../img/icon/create.png" class="w-[66px] lg:w-[42px] change-color">
            </a>
            <a href="../admin/admin.php">
                <img src="../img/icon/admin.png" class="w-[66px] lg:w-[42px] change-color">
            </a>
            <a href="../index.php">
                <img src="../img/icon/logout.png" class="w-[65px] lg:w-[41px] change-color">
            </a>
        </div>
    </nav>

    <div class="flex flex-wrap justify-center px-5 pt-32">

        <div class="px-10">
            <img src="../img/item/<?= $item['image'] ?>" alt="<?= $item['code'] ?>" class="h-36 lg:h-56 mx-auto">
            <div class="flex justify-center gap-2 mt-2">
                <img src="../img/sub/<?= $item['image1'] ?>" alt="<?= $item['code'] ?>1" class="h-36 lg:h-56">
                <img src="../img/sub/<?= $item['image2'] ?>" alt="<?= $item['code'] ?>2" class="h-36 lg:h-56">
            </div>
            <div class="flex justify-center gap-2 mt-2">
                <img src="../img/sub/<?= $item['image3'] ?>" alt="<?= $item['code'] ?>3" class="h-36 lg:h-56">
                <img src="../img/sub/<?= $item['image4'] ?>" alt="<?= $item['code'] ?>4" class="h-36 lg:h-56">
            </div>
        </div>

        <div class="px-10 pt-[50px]">
            <h1 class="text-xl"><?= $item['source'] ?> - <?= $item['name'] ?> - <?= $item['type'] ?> #<?= $item['code'] ?></h1>
            <div class="pt-7 flex gap-10">
                <div>
                    <h1 class="text-slate-400">Type</h1>
                    <h1><?= $item['type'] ?></h1>
                </div>
                <div>
                    <h1 class="text-slate-400">Dimensions</h1>
                    <h1><?= $item['dimensions'] ?></h1>
                </div>
                <div>
                    <h1 class="text-slate-400">Material</h1>
                    <h1><?= $item['material'] ?></h1>
                </div>
            </div>
        </div>

    </div>
</body>

</html>