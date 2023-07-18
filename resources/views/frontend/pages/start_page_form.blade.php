

    <div class="container text-center  modal-form">

    <!-- Modal -->
    <div class="modal fade p-4" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-form">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Vi kontaktar dig inom kort</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-form">
                    <form class="">
                        <div class="mb-3 form-group d-flex flex-row">
                          <input type="text" class="form-control" placeholder="Förnamn" id="firstname" aria-describedby="emailHelp">
                          <input type="text" class="form-control" placeholder="Efternamn" id="lastname">
                        </div>
                      
                        <div class="mb-3 d-flex flex-row">
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
                            <button class="btn  mt-3 rounded-pill bg-light text-black" id="submit-btn" type="submit">Skicka</button>
                          </div>
                        </form>
                    
                </div>
        
            </div>
        </div>
    </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Jag vill ha en offert
        </button>
    </div>



    