<div class="container-fluid patient-header">
        <div class="row">
            <div class="col-6 text-left">
                <h6><b>DermaReport</b></h6>  
            </div>
            <div class="col-6 text-right">
                <a href="#"><span><i class="fas fa-cog"></i></span> Profile</a>
                <a href="<?=base_url("user/logout")?>"><span><i class="fas fa-sign-out-alt"></i></span> Izloguj se</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 left-side">
                <div class="row mb-2">
                    <div class="col-12">
                        <h4>Meni</h4>
                    </div>
                    <ul class="nav flex-column col-12">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("doctor/add_patient/")?>">Dodaj Pacijenta</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("doctor/add_therapy/")?>">Dodaj Terapiju</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?=base_url("doctor/patient/")?>">Pacijenti</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="<?=base_url("doctor/therapy")?>">Terapije</a>
                          </li>
                    </ul>
                </div>
                
            </div>
            <div class="col-10 right-side">
                <div class="dodavanje col-md-10">
                  <h3>Dodaj Pacijenta</h3>
                    <?=form_open()?>
                      <div class="form-group">
                          <label for="maticni">Matični broj:</label>
                          <input type="text" class="form-control" id="maticni" name="maticni" placeholder="Matični broj" required>
                      </div>
                      <p class="text-danger font-weight-bold" id="message"></p>
                      <div class="form-group">
                          <label for="ime1">Ime i prezime:</label>
                          <input type="text" class="form-control" id="ime" name="ime" placeholder="Ime i prezime" required>
                      </div>
                      <div class="form-group" >
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" name="email"  placeholder="Email adresa" required>
                      </div>
                    
                      <button type="submit" class="btn btn-primary dodaj">Dodaj</button>
                  <?=form_close()?>
                  <?php if($flag == 0):?>
                  <p class="font-weight-bold-text-danger">
                      Neuspesno dodavanje pacijenta.
                  </p>
                <?php elseif($flag ==1):?>
                <p class="font-weight-bold-text-danger">
                      Uspešno ste dodali pacijenta.
                  </p>
                <?php endif?>
                </div>
            </div>
        </div>
    </div>