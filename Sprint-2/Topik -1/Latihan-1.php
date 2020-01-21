<?php
class JudulBuku
{
    protected $buku = 
    [
        [ "Judul :  " => "Buku Bahasa Inggris",
          "ISBN  : "  => 590-12-2134121-22,
          "Jumlah Buku tersedia : " => 10
        ],
        ["Judul : " => "Buku Matematika",
          "ISBN  : " => 590-4-132-2-3-324-2,
          "Jumlah Buku tersedia : " => 10
        ]
    ];
    public function order($jurnal)
    {
        $Judul = $this->buku;
        print_r($Judul);
        $Kunci = $this->buku[$jurnal];
        print_r($Kunci);
        // $hasil = $jumlah - $key;
        echo "Pinjam Buku Berapa :";
        $key = trim (fgets(STDIN));
        $mybook = $Judul[$jurnal]["Jumlah Buku tersedia : "];
        $jml = $mybook-$key;
        echo "Sisa :".$jml."\n";
        echo "TANGGAL DIKEMBALIKAN 22 AGUSTUS 2020"."\n";
        echo "Balikin Buku Berapa :";
        $kembalikan = (int) fgets(STDIN);
        $balik = $jml+$kembalikan."\n";
        echo "Stock buku :".$balik;

    }
  }
$book = new JudulBuku;
print_r($book);
// $book->order($key);
echo "Pinjam Buku 0-1 :";
$jurnal = (int) fgets(STDIN);
$book->order($jurnal);