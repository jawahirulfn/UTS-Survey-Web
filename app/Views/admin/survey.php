<?= view('layout/header'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Form Survey
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Diri</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIM</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Program Studi</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <br>
                                <small style="color:crimson;">* Upload foto data diri</small>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <table class="table table-bordered table-striped dataTable">
                <thead>
                    <tr>
                        <th style="width:20px">No</th>
                        <th>Pertanyaan</th>
                        <th style="width:70px">Sangat Kurang</th>
                        <th style="width:70px">Kurang</th>
                        <th style="width:70px">Cukup</th>
                        <th style="width:70px">Baik</th>
                        <th style="width:70px">Sangat Baik</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kepastian (assurance): kemampuan dosen, tenaga kependidikan, dan pengelola untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan.</td>
                        <td>
                            <input type="radio" name='radio_1' value="SK">
                        </td>
                        <td>
                            <input type="radio" name='radio_1' value="K">
                        </td>
                        <td>
                            <input type="radio" name='radio_1' value="C">
                        </td>
                        <td>
                            <input type="radio" name='radio_1' value="B">
                        </td>
                        <td>
                            <input type="radio" name='radio_1' value="SB">
                        </td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" id="isvalid_1" name="isvalid" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                        </th>
                        <th colspan="5">Jawaban diatas telah valid dan tidak perlu diubah lagi</th>
                        <th>
                            <button type="button" class="btn btn-sm btn-success" data-type="save">
                                <i class="fa fa-save"></i> Simpan</button>
                        </th>
                    </tr>
                </tfoot>
            </table>

        </div>

    </section>

</div>


<?= view('layout/footer'); ?>