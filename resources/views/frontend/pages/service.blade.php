<style>
    #service-container .row  .card{
      text-align: center;
      border-radius: 1rem;

    }
    #service-container .row  .card .card-body{
        padding: 1.4rem;
        text-align: center;
        border-radius: 1rem;


    }


</style>

<div class="container" id="service-container">
   
    <h3 class=" text-left blue-background p-2 text-white hover-none" style="border-radius: 2rem;">Våra tjänster</h3>
    <div class="row">
        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title"> <i class="fa-solid fa-chair-office text-black"></i> Kontorsstädning</h4>
                    <p class="card-text">
                        Vi håller ert kontor rent och fint året runt!
                Med oss får ni städning till rimliga priser. Alltid samma höga kvalitet tack vare våra professionella städare. Oavsett hur stort det är. 
                Kontakta oss för en kostnadsfri offert och svar på dina frågor.

                    </p>
                        <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/pages.kontor') }}">Läs mer</a>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 d-flex align-items-stretch">
            <div class="card">

                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Butikstädning</h4>
                    <p class="card-text">
                        Vi håller din butik skinande ren.
                    Din butik är ansiktet ut mot kunderna. Vi hjälper dig att hålla den ren och fräsch för bästa möjliga kundupplevelse. Låt våra professionella städare ta hand om er städning. 
                    Kontakta oss för en personlig genomgång!

                    </p>
                        <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/pages.butik') }}">Läs mer</a>
                </div>
            </div>
          
        </div>
        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">
             <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Trappstädning</h4>
                    <p class="card-text">
                        Trapphus bli snabbt smutsiga och ofräscha om städningen inte fungerar. När vi tar hand om trappstädningen är du garanterad städning av högsta kvalitet och hög servicenivå. Vi borstar, svabbar, dammar, ta bort fläckar och mycket annat. Vi städar trapphus hos BRF och Fastighetsägare och vi gör det riktigt bra!
                    </p>
                        <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/frontend/pages.trapp') }}">Läs mer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3 d-flex align-items-stretch ">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Skolstädning</h4>
                    <p class="card-text">
Behov av skolstädning? Vi håller er skola välstädad och fin! Vi har goda rutiner för skolstädning, allt ifrån från städteknik och frekvens till miljövänliga städprodukter.           
     </p>
    <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/frontend/pages.skol') }}">Läs mer</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">

                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Lagerstädning</h4>
                    <p class="card-text">
                        Vi städar allt!
                        Med Astra Städ får ni professionell industristädning, oavsett er storlek och bransch. Bland våra kunder finns både stora och små företag. I oss får ni en pålitlig städpartner med snabb och bra support.
                        Prata med oss för offert och personlig genomgång!

                    </p>
                        <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/frontend/pages.lager') }}">Läs mer</a>
                </div>
            </div>
        </div>
    
        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">Fönsterputsning</h4>
                    <p class="card-text">
                    Vill du ha hjälp med fönsterputsning? Våra erfarna fönsterputsare ser till att du får glasklara fönsterrutor till ett riktigt bra pris. Fyll i dina uppgifter nedan så återkommer vi till dig. Eller ring oss gärna på Tel: 
                    </p>
                        <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/frontend/pages.window') }}">Läs mer</a>
                </div>
            </div>
        </div>
        
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button style="font-size: 1.4rem; border-radius: 1rem" class="accordion-button collapsed blue-background border border-pills" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Flera tjänster
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                            <div class="row">
                                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                                    <div class="card">
                        
                                        <div class="card-body d-flex flex-column">
                                            <h4 class="card-title">Flyttstäd</h4>
                                            <p class="card-text">
                        
                                                Vi utför flyttstädning i hela Göteborgområdet med omnejd. Våra medarbetare är duktiga på flyttstäd i alla former.
                                                 Från mindre lägenhet till stora hus eller kontor!
                                            </p>
                                                <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/pages.flytt') }}">Läs mer</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                                    <div class="card">
                        
                                        <div class="card-body d-flex flex-column">
                                            <h4 class="card-title">Fruktkorg</h4>
                                            <p class="card-text">
                        
                                                Är ni på jakt efter prisvärda fruktkorgar till ert företag? Vi erbjuder fruktkorgar helt efter dina önskemål. Vill du ha frukt varje eller varannan vecka, en eller olika sorters frukt? Oavsett har vi fruktkorgen till dig. Kontakta oss för att hitta rätt fruktkorg för ditt företag.
                                                </p>
                                                <a href="{{ url('/frontend/pages.frukt') }}" class="btn btn-block blue-background rounded-pill mt-auto" type="button">Läst mer</a>
                                        </div>
                                    </div>
                                </div>
                        
                                
                                <div class="col-lg-4 mb-3 d-flex align-items-stretch ">
                                    <div class="card">
                        
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="card-title">Golvvård</h4>
                                        <p class="card-text">
                                            Behöver era golv fräschas upp?
                        
                        Välj golvvård från vårt professionella team. Vi behandlar och rengör alla typer av golv: stengolv, linoleum, trägolv och betong Vi kan även se till att ni alltid har nytvättade, fräscha mattor på kontoret. Alltid bra priser. Alltid bra kvalité. Tveka inte att kontakta oss för kostnadsfri offert!
                        
                                        </p>
                                            <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/frontend/pages.golv') }}">Läs mer</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3 d-flex align-items-stretch ">
                                <div class="card">
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="card-title">Hemstädning</h4>
                                        <p class="card-text">
                                            Låt våra proffs städa ditt hem.
                        
                        Välj Astra Städ när du vill ha det rent och fräscht hemma.
                        Alltid utbildad personal med riktiga löner och kollektivavtal. 
                        
                        Kontakta oss för en kostnadsfri offert
                        
                        
                        </p>
                        <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/frontend/pages.hemstad') }}">Läs mer</a>
                                    </div>
                                </div>
                            </div>
                    

                            <div class="col-lg-6 mb-3 d-flex align-items-stretch ">
                                <div class="card">
                    
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title">Byggstädning</h4>
                                    <p class="card-text">
                                        Vill du ha hjälp med att städa upp efter ett bygge eller en renovering? 
                                        Astra Städ är superproffs på byggstäd. Givetvis till bästa pris.
                                    </p>
                                        <a class="btn btn-block blue-background rounded-pill mt-auto" href="{{ url('/frontend/pages.bygg') }}">Läs mer</a>
                                </div>
                            </div>
                        </div>
           </div>
                    </div>
                </div>
            </div>
            
          
        </div>
    </div>
</div>