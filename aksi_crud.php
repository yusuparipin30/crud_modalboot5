<?php

//panggil koneksi database
include "koneksi.php";

//proses menampilkan data 1
//kita uji jika tombol simpan di klik 1.2
if (isset($_POST['bsimpan'])){
    //persiapan proses simpan data baru, bkin variabel $simpan
$simpan =mysqli_query($koneksi, "INSERT INTO twarga(nama,jenis_kelamin,alamat, kamar,status_kawin,status_tinggal,
                                                    status_hunian,pekerjaan, dokumen,tgl_masuk)
                                    
                                      VALUE ('$_POST[tnama]',
                                             '$_POST[tkelamin]',
                                             '$_POST[talamat]',
                                             '$_POST[tkamar]',
                                             '$_POST[tkawin]',
                                             '$_POST[ttinggal]',
                                             '$_POST[thunian]',
                                             '$_POST[tpekerjaan]',
                                             '$_POST[tdokumen]',
                                             '$_POST[ttanggal_masuk]')");

            //melakukan pengujian apabila data tersimpan
            if ($simpan){
                echo "<script>
                    alert('simpan data sukses!');
                    document.location='index.php';
                </script>";
            }else{
                echo "<script>
                alert('simpan data gagal!');
                document.location='index.php';
            </script>";
            }
}



?>