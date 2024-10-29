<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Mobil Azizi</title>
</head>
<body>

    <?php 
    class mobil 
    {
        var $merk;
        var $harga;
        var $aksi;

        function setmerk($parameter)
        {
            $this->merk = $parameter;
        }
        function setharga($parameter)
        {
            $this->harga = $parameter;
        }
        function setket($parameter)
        {
            $this->ket = $parameter;
        }
    }

    $tampilkan = new mobil;
    $tampilkan->setmerk("Innova");
    $tampilkan->setharga("400000000");
    $tampilkan->setket("Barang Ready");

    echo "Merk mobil : " . $tampilkan->merk . "<br/>";
    echo "Harga harga : " . $tampilkan->harga . "<br/>";
    echo "Keterangan : " . $tampilkan->ket . "<br>";
    ?>

</body>
</html>

