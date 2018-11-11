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
                    </ul>
                </div>
                
            </div>
            <div class="col-10 right-side">
                <?php if($set_flag):?>
                <div class="row">
                    <div class="col-7 right-side-first">
                        <p><b>Ime Pacijenta:</b> <?=$therapy->patient?></p>
                        <p><b>Ime Bolesti:</b> <?=$therapy->name?></p>
                        <p><b>Dijagnoza:</b> <?=$therapy->description?></p>
                        <p><b>Datum: </b><?=$therapy->open_time."-".$therapy->close_time?></p>
                    </div>

                    <div class="form-group col-5 right-side-second">
                        <div class="row">
                            <div class="col-12 p-3">
                                <h4>Postavke</h4>
                            </div>
                        </div>
                        <?=form_open()?>
                            <label for="period">Perioda</label><br>
                            <input type="number" name="perioda" value="3" id="period">dana<br>
                            <lable for="finish">Zaključi terapiju:</lable>
                            <input type="checkbox" name='finish' id="finish"><br>
                            <lable for="finish">Pozovi pacijenta na pregled:</lable>
                            <input type="checkbox" name='call' id="finish"><br>
                            <input class="btn btn-default" type="submit" value="Save">
                        <?=form_close()?>
                    </div>
                    <hr>
                    <?php if(!count($history)):?>
                        <p class="p-3">Nema dodatih stanja</p>
                    <?php endif?>
                    <?php foreach($history as $key => $report):?>
                        <div class="row col-12">
                            <?php foreach ($images[$key] as $src):?>
                            <div class="col-3">
                                <img class="img-fluid" src="<?=base_url('assets/images/report/'.$report->id.'/'.$src)?>" alt="">
                                
                            </div>
                            <?php endforeach?>

                            <div class="col-8 right-side-bottom-second">
                                <p><?=$report->description?></p>
                                <p><b>Datum:</b> <?=$report->time?></p>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
                <?php else:?>
                    
                <?php endif?>
            </div>
        </div>
    </div>
    