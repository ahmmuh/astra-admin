
<header class="header">
    {{-- <div class="container w-75 m-auto text-white">
        <h1>Välkommen till Astra Alltjänst AB!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eaque tempore earum labore reprehenderit eum, quaerat repudiandae cumque ab velit?</p>
    </div> --}}
    
<div class="container   d-flex justify-content-center ">

    <div class="row">
        <div class="col text-center header-card-container">
                <div class="card start-card ">
                     <div class="card-body ">
                          <h5 class="card-title">Bra service</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                               Vel aliquam odit non assumenda atque voluptas. 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illum.</p>
                               <button type="button" class="btn btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Jag vill ha en offert
                                </button>
                
                     </div>
                </div>
        </div>
    </div>
</div>
</header>




<div class="container text-center mt-5 p-5 modal-form">

     <!-- Modal -->
     <div class="modal fade p-4" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header modal-form">
                     <h5 class="modal-title text-white" id="exampleModalLabel">Vi kontaktar dig inom kort</h5>
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