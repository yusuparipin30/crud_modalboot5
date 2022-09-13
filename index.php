<?php
//1.membuat desain crud 2.membuat database 3.membuat koneksi database di file koneksi.php
//4.memanggil koneksi di indek html. 5.menampilkan data dri data base 
//6.membuat simpan data/tambah data di file aksi_crud.php



//panggil koneksi database
include "koneksi.php";










?>














<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD-MODAL-PHP-MYSQLI-BOOTSTRAP5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <div class="container-fluid mt-3">
        <h3 class="text-center">DATA KEPENDUDUKAN PTH-RESIDENCE</h3>
        <h3 class="text-center">Cikarang Bekasi</h3>

        <div class="card mt-3">
          <div class="card-header bg-primary text-white">
            Data Warga Palm
          </div>

          <!-- awal tabel -->
          <div class="card-body table-responsive">
              <!-- Button trigger modal staticbackdrop(untuk menampilkan modal) bootstrap5-->
             <div class="row">
              <div class="col-md-6">
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    Tambah Data
                  </button>
              </div>

                  <div class="col-md-6 ">
                      <form>
                          <div class="input-group mb-3">
                              <input type="text" name="tcari" class="form-control" placeholder="masukan kata kunci">
                              <button class="btn btn-success" name="bcari" type="submit">Cari</button>
                              <button class="btn btn-danger" name="breset" type="submit">Reset</button>
                          </div>
                      </form>
                  </div>

               
             </div> 

            <table class="table" table-bordered table-striped table-hover>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jns Kelamin</th>  
                <th>Alamat</th> 
                <th>Kamar</th>
                <th>Stus Kawin</th>
                <th>Stus Tinggal</th>
                <th>Stus Hunian</th>
                <th>Pekerjaan</th>
                <th>Dokumen</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
              </tr>

              <!-- menampilkan data dari data base (1) looping-->
              <?php
              //persiapan menampilkan data 1
              //nomer urut 1 2 3 & seterusnya
              $no =1;
              $tampil = mysqli_query($koneksi, "SELECT * FROM twarga order by id_warga DESC");
              //lakukan perulangan 
              while($data = mysqli_fetch_array($tampil)) :


              ?>
              <!-- untuk penulisan harus sama persis seperti di data base contoh seperti "nama" -->
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jenis_kelamin'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['kamar'] ?></td>
                <td><?= $data['status_kawin'] ?></td>
                <td><?= $data['status_tinggal'] ?></td>
                <td><?= $data['status_hunian'] ?></td>
                <td><?= $data['pekerjaan'] ?></td>
                <td><?= $data['dokumen'] ?></td>
                <td><?= $data['tgl_masuk'] ?></td>
                <td>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              <!-- tutup pengulangan  -->
              <?php endwhile; ?>
            </table>
          <!-- ahir tabel -->

                  <!--awal Modal -->
  
                


                  <div class="modal fade modal-lg" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="modalTambahLabel">Form Data Warga</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- AWAL FORM -->
                        <form action="aksi_crud.php" method="POST">
                        <div class="modal-body">

                                <div class="mb-3">
                                  <label class="form-label">Nama</label>
                                  <input type="text" class="form-control" name="tnama" placeholder="Masukan Nama Lengkap">
                                </div>

                                <div class="mb-3">
                              <label class="form-label">Jenis Kelamin</label>
                              <select class="form-select" name="tkelamin">
                                <option></option>
                                <option value="laki - laki">Laki - Laki</option>
                                <option value="perempuan">Perempuan</option>                        
                              </select>
                            </div>
                            
                            <!-- <p  class="form-label">Jenis Kelamin</p>
                            <div class="mb-3 form-check">
                            <label class="form-check-label">Perempuan</label>
                              <input class="form-check-input" type="radio" name="tkelamin">
                              </div>
                              <div class="mb-3 form-check">
                                  <label class="form-check-label">Laki-laki</label>
                                  <input class="form-check-input" type="radio" name="tkelamin">
                                </div>
                              -->
                               

                            <div class="mb-3">
                              <label class="form-label">Alamat</label>
                              <textarea class="form-control" name="talamat" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Kamar</label>
                              <select class="form-select" name="tkamar">
                                <option></option>
                                <option value="kamar bawah">Kamar Bawah</option>
                                <option value="atas sisi toilet">Atas Sisi Toilet</option>
                                <option value="atas sisi tangga">Atas Sisi Tangga</option>
                                <option value="satu unit rumah">Satu Unit Rumah</option>
                              </select>
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Status Perkawinan</label>
                              <select class="form-select" name="tkawin">
                                <option></option>
                                <option value="menikah">Menikah</option>
                                <option value="belum menikah">Belum Menikah</option>
                                <option value="janda">Janda</option>
                                <option value="duda">Duda</option>
                              </select>
                            </div>
                            <!-- <p  class="form-label">Status Perkawinan</p>
                            <div class="mb-3 form-check">
                            <label class="form-check-label">menikah</label>
                              <input class="form-check-input" type="radio" name="tperkawinan">
                              </div>
                              <div class="mb-3 form-check">
                                  <label class="form-check-label">Belum Menikah</label>
                                  <input class="form-check-input" type="radio" name="tperkawinan">
                                </div>     -->


                                <div class="mb-3">
                              <label class="form-label">Status Tinggal</label>
                              <select class="form-select" name="ttinggal">
                                <option></option>
                                <option value="sendiri">Sendiri</option>
                                <option value="bersama keluarga">Bersama Keluarga</option>
                                <option value="bersama sudara">Bersama Saudara</option>
                                <option value="bersama teman">Bersama Teman</option>
                              </select>
                            </div>


                            <div class="mb-3">
                              <label class="form-label">Status Hunian</label>
                              <select class="form-select" name="thunian">
                                <option></option>
                                <option value="pemilik">Pemilik</option>
                                <option value="penyewa">Penyewa</option>                               
                              </select>
                            </div>
                            <!-- <p  class="form-label">Status Hunian</p>
                            <div class="mb-3 form-check">
                            <label class="form-check-label">Pemilik</label>
                              <input class="form-check-input" type="radio" name="thunian">
                              </div>
                              <div class="mb-3 form-check">
                                  <label class="form-check-label">Penyewa</label>
                                  <input class="form-check-input" type="radio" name="thunian">
                                </div>     -->

                                <div class="mb-3">
                                  <label class="form-label">Pekerjaan</label>
                                  <input type="text" class="form-control" name="tpekerjaan" placeholder="Masukan nama pekerjaan">
                                </div>

                                <div class="mb-3">
                                  <label class="form-label">Dokumen</label>
                                  <select class="form-select" name="tdokumen">
                                    <option></option>
                                    <option value="ktp">KTP</option>
                                    <option value="ktp kk buku nikah">KTP/KK/B_NUKAH</option>
                                    <option value="kk buku nikah">KK/B_NIKAH</option>
                                  </select>
                                </div>


                                <div class="mb-3">
                                        <label class="form-label">Tanggal masuk</label>
                                        <input type="date" name="ttanggal_masuk" class="form-control"  placeholder="masukan tanggal">
                                    </div>
                                
                        


                         
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                         
                        </div>
                        
                      </form>
                       <!-- ahir form -->
                      </div>
                    </div>
                  </div>
                  <!-- ahir modal -->



          </div>
    </div>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>