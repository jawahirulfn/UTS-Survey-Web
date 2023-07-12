<?= view('layout/header'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="div">
      <h1>Manage Pertanyaan</h1>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <!-- Modal Tambah Data-->
          <div class="box-header with-border">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
              + Tambah Pertanyaan
            </button>
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Pertanyaan Survey</h4>
                  </div>
                  <form action="<?= base_url('question/simpan'); ?>" method="POST">
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan" name="name_question" placeholder="Tambahkan Pertanyaan">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>

              </div>

            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <tr>
                <th>No.</th>
                <th>Pertanyaan</th>
                <th colspan="2" style="text-align: center;">Action</th>
              </tr>
              <?php $no = 1;
              foreach ($quest as $row) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row->name_question; ?></td>
                  <td class="d-flex">
                    <a href="<?= base_url('question/edit/' . $row->id_question) ?>">
                      <button type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Update</button>
                    </a>
                  </td>
                  <td>
                    <form action="<?= site_url('question/hapus/' . $row->id_question); ?>" method="post">
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach ?>
            </table>
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <!-- /.box -->
  </section>
</div>

<!-- /.content-wrapper -->
<?= view('layout/footer'); ?>