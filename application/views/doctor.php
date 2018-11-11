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
                            <a class="nav-link active d-block" href="#">Dodaj Terapiju</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Pacijenti</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Terapije</a>
                          </li>
                    </ul>
                </div>
                
            </div>
            <div class="col-10 right-side">
                <div class="row">
                    <div class="col-7 right-side-first">
                        <p><b>Ime Pacijenta:</b> Lazar Stamenkovic</p>
                        <p><b>Ime Bolesti:</b> Zajebana bolest</p>
                        <p><b>Dijagnoza:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, at! Quas laborum nesciunt illum iste incidunt ea, molestiae voluptas, nam, ratione accusamus a quidem. Optio odio tempora nulla quidem ab.</p>
                        <p><b>Datum: </b> 11-22-2018</p>
                    </div>

                    <div class="form-group col-5 right-side-second">
                        <div class="row">
                            <div class="col-12 p-3">
                                <h4>Postavke</h4>
                            </div>
                        </div>
                        <form action="#" method="POST">
                            
                            <label for="period">Perioda</label><br>
                            <input type="number" name="period" value="3" id="period">dana<br>
                            <lable for="finish">Zaključi terapiju:</lable>
                            <input type="checkbox" name='finish' id="finish"><br>
                            <input class="btn btn-default" type="submit" value="Save">
                        </form> 
                    </div>
                    <hr>
                    <div class="col-12 right-side-bottom">
                        <div class="row">
                            <div class="col-3">
                                <img class="img-fluid" src="assets/images/derma1.jpg" alt="">
                                
                            </div>
                            <div class="col-3">
                                <img class="img-fluid" src="assets/images/derma2.jpg" alt="">
                                
                            </div>
                            <div class="col-3">
                                <img class="img-fluid" src="assets/images/derma3.jpg" alt="">
                                
                            </div>
                            <div class="col-3">
                                <img class="img-fluid" src="assets/images/derma4.jpg" alt="">
                                
                            </div>

                            <div class="col-8 right-side-bottom-second">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus commodi aliquid in necessitatibus ad quasi, modi! Eligendi quo minus dolorum ab doloremque dignissimos, doloribus, alias consequuntur fugit earum nobis accusamus.</p>
                                <p><b>Datum:</b> 22-10-2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    