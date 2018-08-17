<div class="box box-default">


  <div class="box box-info box-header with-border">

    <!-- /.box-header -->
    <!-- form start -->
    <?php echo form_open('input/inmasuk','class="form-horizontal"'); ?>
      <div class="box-body box-header">

        <div class="form-group">
          <label class="col-md-3 control-label">Nomor</label>
          <div class="col-sm-1">
            <input type="text" class="form-control" id="inputEmail3" name="nomor">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Jenis Sumbangan</label>
            <div class="radio">
              <div class="col-sm-1">
                <label>
                  <input type="radio" name="radiobtn" id="radio1" value="pribadi">
                  Pribadi
                </label>
              </div>

              <div class="col-sm-1">
                <label>
                  <input type="radio" name="radiobtn" id="radio2" value="lembaga">
                  Lembaga
                </label>
              </div>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Nama Penyumbang</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="txt1" name="nama-penyumbang" onClick="this.setSelectionRange(0, this.value.length)" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Nama Lembaga</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="txt2" name="nama-lembaga" onClick="this.setSelectionRange(0, this.value.length)" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Alamat Lembaga</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="txt3" name="alamat-lembaga" onClick="this.setSelectionRange(0, this.value.length)" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Nomilan Sumbangan</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" id="inputEmail3" name="nominal">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Keterangan</label>
          <div class="col-sm-5">
            <textarea type="textbox" class="form-control" id="inputEmail3" name="keterangan"></textarea>
          </div>
        </div>



      </div>
      <!-- /.box-body -->
      <div class="box-footer box-body box-header">
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>

</div>
