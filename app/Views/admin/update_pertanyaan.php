<?= view('layout/header'); ?>

<div class="content-wrapper">
    <div class="content-header">

    </div>
    <section class="content">
        <div class="row">
            <form action="<?= site_url('question/update/' . $id) ?>" method="post">
                <div class="form-group">
                    <label>Update Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="question" value="<?= $question ?>">
                </div>
                <button class="btn btn-sm btn-primary" type="submit">Update</button>
            </form>
            <br>
            <a href="<?= base_url('question'); ?>">
                <button class="btn btn-sm btn-warning">Kembali</button>
            </a>
    </section>
</div>
</div>

<?= view('layout/footer'); ?>