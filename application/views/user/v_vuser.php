 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data Anggota
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('C_User'); ?>">Data Anggota</a></li>
        <li class="active">Edit Data Anggota</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pribadi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="form-horizontal">
              <div class="box-body">
                <?php foreach ($user as $key) { ?>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Anggota</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="noanggota" name="noanggota" value="<?php echo $key->noanggota ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nik" name="nik" maxlength="16" minlength="16" value="<?php echo $key->nik ?>" onkeypress="return Angkasaja(event)" readonly>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $key->id_anggota ?>">
                  <span id="pesannik"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $key->nama ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $key->username ?>" maxlength='16' readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $key->password ?>" readonly>
                  </div>
                </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Provinsi</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="prov" name="prov" style="width: 100%;" readonly>
                      <option value="">--Pilih--</option>
                      <?php foreach ($provinsi as $provinsi) { ?>
                      <option value="<?php echo $provinsi->id_provinsi ?>" <?php if($provinsi->id_provinsi == $key->id_provinsi){echo "selected";} ?>><?php echo $provinsi->name_prov ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kota/Kabupaten</label>
                  <div class="col-sm-9">
                  <select class="form-control select2" id="kota" name="kota" style="width: 100%;" readonly>
                    <option value="<?php echo $key->id_kota ?>"><?php echo $key->name_kota ?></option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kecamatan</label>
                  <div class="col-sm-9">
                  <select class="form-control select2" id="kecamatan" name="kecamatan" style="width: 100%;" readonly>
                    <option value="<?php echo $key->id_kecamatan ?>"><?php echo $key->kecamatan ?></option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="3" id="alamat" name="alamat" readonly ><?php echo $key->alamat; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No HP</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="tlp" name="tlp" value="<?php echo $key->tlp; ?>" maxlength="12" minlength="6" onkeypress="return Angkasaja(event)" readonly >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">E-Mail</label>
                  <div class="col-sm-9"> 
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $key->email; ?>"  readonly>
                  </div>
                </div>    
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Institusi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="institusi" name="institusi" value="<?php echo $key->institusi; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Latar Belakang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="latarbelakang" name="latarbelakang" value="<?php echo $key->latarbelakang; ?>" readonly >
                  </div>
                </div>    
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Foto </label>
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?php echo base_url() ?>images/<?php echo $key->foto ?>" alt="Photo" width="350px" height="197px">
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>   
    </div>
           <!-- left column -->
        
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Sosial Media</h3>
            </div>
              <!-- Date dd/mm/yyyy -->
              <div class="form-horizontal">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Instagram</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $key->instagram; ?>" readonly>
                  </div>
                </div>       
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Facebook</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $key->facebook; ?>" readonly>
                  </div>
                </div>       
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Twitter</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $key->twitter; ?>"readonly >
                  </div>
                </div>       
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Youtube Channel</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo $key->youtube; ?>" readonly>
                  </div>
                </div>
                <br>
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
        </div>
        
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Status Keanggotaan</h3>
            </div>
              <!-- Date dd/mm/yyyy -->
              <div class="form-horizontal">
                
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Registrasi</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="tglregistrasi" name="tglregistrasi" value="<?php echo $key->tglregistrasi; ?>"readonly>
                  </div>
                </div>    
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kategori Anggota</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="kat" name="kat" value="<?php if($key->statusanggota == 'tidak aktif') { echo '-'; } else { echo $key->statusanggota; } ?>" readonly>
                  </div>
                </div>       
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status Anggota</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="aktivasi" name="aktivasi" style="width: 100%;" readonly>
                      <option value="aktif" <?php if($key->statusanggota != 'tidak aktif'){ echo "selected"; } ?>>Aktif</option>
                      <option value="tidak" <?php if($key->statusanggota == 'tidak aktif' && $key->alasan == NULL ){ echo "selected"; } ?> >Tidak Aktif</option>
                      <option value="resign" <?php if($key->statusanggota == 'tidak aktif' && $key->alasan != NULL ){ echo "selected"; } ?>  >Mengundurkan Diri </option>
                    </select>
                  </div>
                </div>       
                <div class="form-group">
                  <div id = 'idresign'>
                  <label for="inputPassword3" class="col-sm-2 control-label">Alasan Mengundurkan Diri</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="reason" name="reason" value="<?php echo $key->alasan; ?>" readonly>
                  </div>
                </div>
                </div>

              </div>
              <div class="box-footer">
                  <div class="col-sm-10">
                    <a href="<?php echo site_url('C_User/index'); ?>" class="btn btn-default">Batal</a>
                  </div>
                </div> 
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
        </div>
          <!-- /.box -->
          <!-- /.box -->
            <?php } ?>
        
              <!-- /.box-footer -->

          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>