<form class="">
    <div class="form-group d-flex flex-row">
      <input type="text" class="form-control" placeholder="Förnamn" id="firstname" aria-describedby="emailHelp">
      <input type="text" class="form-control" placeholder="Efternamn" id="lastname">
    </div>
  
    <div class="d-flex flex-row">
        <input type="number" class="form-control" placeholder="Telefon" id="telefon">
        <input type="email" class="form-control" placeholder="E-post" id="email">

      </div>

      <select class="form-select mb-3" aria-label="Default select example">
          <option selected>Välj service</option>
          <option value="1">Vill beställa tjänst</option>
          <option value="2">Problem</option>
          <option value="3">Missnöjd</option>
      </select>

      <div class="">
          <textarea class="form-control" id="meddelande" rows="3">Skriv ditt meddelande här....
          </textarea>
      </div>
      <div class="d-grid gap-2">
        <button class="btn  mt-3 rounded-pill border border-dark btn-light" type="submit">Skicka</button>
      </div>
    </form>