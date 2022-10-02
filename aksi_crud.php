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


//proses ubah  data 1
//kita uji jika tombol ubah di klik 1.2
if (isset($_POST['bubah'])){
    //persiapan proses ubah data , bkin variabel $simpan
$ubah =mysqli_query($koneksi, "UPDATE twarga SET
                                                nama = '$_POST[tnama]',
                                                jenis_kelamin = '$_POST[tkelamin]',
                                                alamat = '$_POST[talamat]',
                                                kamar = '$_POST[tkamar]',
                                                status_kawin = '$_POST[tkawin]',
                                                status_tinggal = '$_POST[ttinggal]',
                                                status_hunian = '$_POST[thunian]',
                                                pekerjaan = '$_POST[tpekerjaan]',
                                                dokumen = '$_POST[tdokumen]',
                                                tgl_masuk = '$_POST[ttanggal_masuk]'
                                                WHERE id_warga = '$_POST[id_warga]'
                                                ");

            //melakukan pengujian apabila data di ubah
            if ($ubah){
                echo "<script>
                    alert('ubah data sukses!');
                    document.location='index.php';
                </script>";
            }else{
                echo "<script>
                alert('ubah data gagal!');
                document.location='index.php';
            </script>";
            }
}


//proses hapus  data 1
//kita uji jika tombol hapus di klik 1.2
if (isset($_POST['bhapus'])){
    //persiapan proses hapus data , bkin variabel $simpan
$hapus =mysqli_query($koneksi, "DELETE FROM twarga WHERE id_warga = '$_POST[id_warga]'");

            //melakukan pengujian apabila data di hapus
            if ($hapus){
                echo "<script>
                    alert('hapus data sukses!');
                    document.location='index.php';
                </script>";
            }else{
                echo "<script>
                alert('hapus data gagal!');
                document.location='index.php';
            </script>";
            }
}





?>