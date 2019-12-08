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
    <h4>Tabel Unit Kerja</h4>
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
          foreach ($unit as $key => $value): ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $value['unit_kerja'] ?></td>

              <td>
                <a href="<?php echo base_url("unit/edit/".$value['unit_id']); ?>" class="btn btn-success">Edit</a>
                <a href="<?php echo base_url('unit/delete/'.$value['unit_id']); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php
          $no++;
         endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModal">Unit Kerja </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="<?php echo base_url('unit/tambah') ?>" method="post">
          <div class="form-group">
            <label>Unit Kerja</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-user"></i>
                </div>
              </div>
              <select class="form-control" name="unit">
                <option disabled selected>- Pilih -</option>
                <option value="kepala">Kepala</option>
                <option value="Kankemenag Kab/ Kota">Kankemenag Kab/ Kota</option>
                <option value="Kantor Kementerian Agama Kabupaten Pelalawan">Kantor Kementerian Agama Kabupaten Pelalawan</option>
                <option value="Kementerian Agama Kabupaten Kepulauan Meranti">Kementerian Agama Kabupaten Kepulauan Meranti</option>
                <option value="Sub Bagian Perencanaan dan Keuangan">Sub Bagian Perencanaan dan Keuangan</option>                
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
