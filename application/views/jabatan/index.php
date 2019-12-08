<div class="col-12">
<?php if ($this->session->flashdata('alert') == 'berhasil_tambah') { ?>
      <div class="alert alert-primary alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
          <span>&times;</span>
          </button>
          Berhasil Menambah Data
        </div>
      </div>
    <?php }elseif ($this->session->flashdata('alert') == 'berhasil_edit') { ?>
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
          <span>&times;</span>
          </button>
          Berhasil Mengubah Data
        </div>
      </div>
    <?php }elseif ($this->session->flashdata('alert') == 'berhasil_hapus') {?>
      <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
          <span>&times;</span>
          </button>
          Berhasil Menghapus Data
        </div>
      </div>
    <?php } ?>
<div class="card">
  <div class="card-header">
    <h4>Tabel Jabatan</h4>
  </div>
  <div class="card-body">
    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a><hr>
    <div class="table-responsive">
      <table class="table table-bordered" id="table-1">
        <thead>
          <tr>
           <th>No</th>
           <th>Jabatan</th>
           <th>aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($jabatan as $key => $value): ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $value['jabatan_nama'] ?></td>
              <td>
                <a href="<?php echo base_url("jabatan/edit/".$value['jabatan_id']); ?>" class="btn btn-success">Edit</a>
                                <a href="<?php echo base_url('jabatan/delete/'.$value['jabatan_id']); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php
          $no++;
         endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModal">Jabatan </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="<?php echo base_url('jabatan/tambah') ?>" method="post">
          <div class="form-group">
            <label>Jabatan</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-user"></i>
                </div>
              </div>
              <select class="form-control" name="jabatan">
                <option disabled selected>- Pilih -</option>
                <option value="kepala">kepala</option>
                <option value="Kepala Kantor Kementerian Agama Kabupaten Bengkalis">Kepala Kantor Kementerian Agama Kabupaten Bengkalis</option>
                <option value="Kepala Kantor Kementerian Agama Kabupaten Indragiri Hilir">Kepala Kantor Kementerian Agama Kabupaten Indragiri Hilir</option>
                <option value="Kepala Kantor Kementerian Agama Kabupaten Indragiri Hulu">Kepala Kantor Kementerian Agama Kabupaten Indragiri Hulu</option>
                <option value="Kepala Sub Bagian Perencanaan dan Keuangan">Kepala Sub Bagian Perencanaan dan Keuangan</option>
                <option value="Analis Laporan Realisasi Anggaran">Analis Laporan Realisasi Anggaran</option>
              </select>
              <div class="invalid-feedback">
                Field tidak boleh kosong
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-user"></i>
                </div>
              </div>
              <select class="form-control" name="level">
                <option disabled selected>- Pilih -</option>
                <option value="pimpinan">pimpinan</option>
                <option value="kankemenag kab/kota">kankemenag kab/kota</option>
                <option value="sub perencanaan">sub perencanaan</option>
                <option value="sub organisasi">sub organisasi</option>
                <option value="sub hukum">sub hukum</option>
                <option value="sub informasi">sub informasi</option>
                <option value="sub umum">sub umum</option>
                <option value="pendidikan madrasah">pendidikan madrasah</option>
                <option value="pendidikan keagamaan">pendidikan keagamaan</option>
                <option value="haji dan umrah">haji dan umrah</option>
                <option value="urusan agama">urusan agama</option>
                <option value="penerangan agama">penerangan agama</option>
                <option value="masyarakat kriten">masyarakat kriten</option>
                <option value="masyarakat hindu">masyarakat hindu</option>
                <option value="masyarakat katolik">masyarakat katolik</option>
                <option value="masyarakat budha">masyarakat budha</option>
                <option value="pegawai kankemenag kab/kota">kankemenag kab/kota</option>
                <option value="pegawai sub perencanaan">sub perencanaan</option>
                <option value="pegawai sub organisasi">sub organisasi</option>
                <option value="pegawai sub hukum">sub hukum</option>
                <option value="pegawai sub informasi">sub informasi</option>
                <option value="pegawai sub umum">sub umum</option>
                <option value="pegawai pendidikan madrasah">pendidikan madrasah</option>
                <option value="pegawai pendidikan keagamaan">pendidikan keagamaan</option>
                <option value="pegawai haji dan umrah">haji dan umrah</option>
                <option value="pegawai urusan agama">urusan agama</option>
                <option value="pegawai penerangan agama">penerangan agama</option>
                <option value="pegawai masyarakat kriten">masyarakat kriten</option>
                <option value="pegawai masyarakat hindu">masyarakat hindu</option>
                <option value="pegawai masyarakat katolik">masyarakat katolik</option>
                <option value="pegawai masyarakat budha">masyarakat budha</option>
              </select>
              <div class="invalid-feedback">
                Field tidak boleh kosong
              </div>
            </div>
          </div>
          <input type="hidden" name="tipe">
          <button type="submit" class="btn btn-primary mr-1" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
