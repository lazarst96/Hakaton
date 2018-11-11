<div class="dodavanje col-md-10">
      <h3>Dodaj Terapiju</h3>
      <form action="#" method="POST" > 
          <div class="form-group">
              <label for="maticni">Matični broj:</label>
              <input type="text" class="form-control" id="maticni" name="maticni" placeholder="Matični broj" required>
          </div>
          <div class="form-group">
              <label for="ime1">Ime i prezime:</label>
              <input type="text" class="form-control" id="ime" name="ime" placeholder="Ime i prezime" required>
          </div>
          <div class="form-group" >
              <label for="email">Imejl:</label>
              <input type="email" class="form-control" id="email" name="email"  placeholder="Imejl adresa" required>
          </div>
          <div class="form-group">
              <label for="telefon">Dijagnoza:</label>
              <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Dijagnoza" required>
          </div>
          <div class="form-group">
              <label for="detaljno">Detaljan opis</label>
              <textarea class="form-control" id="detaljno" name="detaljno" placeholder="Detaljan opis" rows="3"></textarea>
          </div>
          <div class="form-group">
              <label for="perioda">Perioda:</label><br>
              <input type="number" name="perioda" value="3" id="perioda"> dana<br>
          </div>
          <button type="submit" class="btn btn-primary dodaj">Dodaj</button>
      </form>
    </div>