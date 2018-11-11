<div class="container-fluid patient-header">
        <div class="row">
            <div class="col-6 text-left">
                <h6><b>DermaReport</b></h6>  
            </div>
            <div class="col-6 text-right">
                <a href="#"><span><i class="fas fa-cog"></i></span> Profile</a>
                <a href='<?=base_url("user/logout")?>'><span><i class="fas fa-sign-out-alt"></i></span> Izloguj se</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4 left-side">
                <div class="row">
                    <div class="col-12">
                        <h4>Terapija</h4>
                        <hr>
                    </div>
                    <?php if(!count($active)):?>
                        <p class="p-3">Nema terapija u toku</p>
                    <?php endif?>
                    <?php foreach ($active as $t):?>
                    <div class='<?=(is_critical($t->deadline)?"col-12 seek1":"col-12 seek")?>'>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="<?=base_url('patient/'.$t->id)?>"><?=$t->name?></a></li>
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
                            <li class="list-inline-item"><a href="<?=base_url('patient/'.$report->id)?>"><?=$report->name?></a></li>
                            <li class="list-inline-item text-right"><b><?=$report->open_time."-".$report->close_time?></b></li>
                            <li><?=$report->description?></li>

                        </ul>
                    </div>
                    <?php endforeach?>

                </div>
            </div>
            <div class="col-8 right-side">
                <?php if($set_therapy):?>
                <div class="row">
                    <div class="col-7 right-side-first">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img style="height: 250px; margin-bottom: 10px;" class="img-fluid" src=<?=base_url("assets/images/doctor/doctor".$therapy->doctor_id.".jpg")?> alt="">
                                <h6><?=$therapy->doctor?></h6>
                                <br>
                            </div>
                        </div>
                        
                        <p><b>Ime Bolesti:</b><?=$therapy->name?></p>
                        <p><b>Dijagnoza:</b> <?=$therapy->description?></p>
                        <p><b>Datum: </b> <?=$therapy->open_time?></p>
                        <p><b>Rok za javljanje: </b><?=$therapy->deadline?></p>
                    </div>

                    <div class="form-group col-5 right-side-second">
                        <div class="row">
                            <div class="col-12 p-3">
                                <h4>Dodaj Fotografije</h4>
                            </div>
                        </div>
                        <?=form_open_multipart()?>
                            <input class="form-control" type="file" name="images[]" value="Izaberi" required="" multiple="multiple"><br>
                            <textarea class="form-control" name="desc" cols="30" rows="5" required=""></textarea><br>
                            <input class="btn btn-default" type="submit" value="Save">
                        <?=form_close()?>
                    </div>
                    <hr>
                    <div class="col-12 right-side-bottom">
                        <?php foreach($history as $key => $report):?>
                        <div class="row">
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
                </div>
            <?php endif?>
            </div>
        </div>
    </div>