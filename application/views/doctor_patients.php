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
          <?php if(!$ima_id):?>
        <div class="row">
          <div class="col-7">
            <table class="table">
              <thead>
                
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Ime</th>
                  <th scope="col">JMBG</th>
                  <th scope="col">Email</th>
                </tr>
              
              </thead>
              <tbody>
                <?php foreach ($patients as $key => $i):?>
                <tr>
                  <th scope="row"><a href="<?=base_url('doctor/patient/'.$i->id)?>"><?=$key+1?></th></a>
                  <td><a href="<?=base_url('doctor/patient/'.$i->id)?>"><?=$i->name?></a></td>
                  <td><?=$i->citizen_id?></td>
                  <td><?=$i->email?></td>
                </tr>
                <?php endforeach?>
                
              </tbody>
            </table>

          </div>
        </div>  
        <?php else:?>
        <div class="row" style="padding-top: 20px;">
          <div class="col-12">
            <h4>Ime Pacijenta: <?=$pacijent->name?></h4>
          </div>
        </div>
        <div class="col-12 mt-4">
          <h4>Terapija</h4>
          <hr>
        </div>
        <div class="row">
          <?php if(!count($active)):?>
                        <p class="p-3">Nema terapija u toku</p>
          <?php endif?>
          <?php foreach ($active as $t):?>
                    <div class='<?=(is_critical($t->deadline)?"col-12 seek1":"col-12 seek")?>'>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="<?=base_url('doctor/therapy/'.$t->id)?>"><?=$t->name?></a></li>
                            <li class="list-inline-item text-right"><b><?=$t->open_time?>-</b></li>
                            <li><?=$t->description?></li>
                            <li><b>Rok za javljanje: </b><?=$t->deadline?></li>
                        </ul>
                    </div>
                    <?php endforeach?>
        </div>
        <div class="row">
                    <div class="col-12" style="padding-top: 40px;">
                        <h4>Arhiva</h4>
                        <hr>
                    </div>
                    <?php if(!count($archive)):?>
                        <p class="p-3">Nema arhiva</p>
                    <?php endif?>
                    <?php foreach ($archive as $report):?>
                    <div class="col-12 seek">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="<?=base_url('doctor/therapy/'.$report->id)?>"><?=$report->name?></a></li>
                            <li class="list-inline-item text-right"><b><?=$report->open_time."-".$report->close_time?></b></li>
                            <li><?=$report->description?></li>

                        </ul>
                    </div>
                    <?php endforeach?>

                </div>
      <?php endif?>
      </div>
    </div>
  </div>
        </div>
    </div>