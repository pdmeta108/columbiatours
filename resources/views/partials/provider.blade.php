<div class="content-slider">


  <div class="col-sm-12 col-md-6">
    <div class="row">
      <div class="container" style="width: 90%">
        <!-- Tab links -->
          <div class="tab">
            <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'London')" >Vuelos</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Hoteles</button>
            {{-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">Assist Card</button> --}}
            <button class="tablinks" onclick="openCity(event, 'Hide')">Ocultar</button>
          </div>

          <!-- Tab content -->
          <div id="London" class="tabcontent">
            {{-- <h3>London</h3> --}}

              <div class="twidget-container" id="twidget"></div>

          </div>

          <div id="Paris" class="tabcontent">
            {{-- <h3>Paris</h3> --}}
            <p>Paris is the capital of France.</p>
          </div>

          {{-- <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
          </div> --}}
          <div id="Hide" class="tabcontent" style="padding: 0; border: none">
            {{-- <h3>Tokyo</h3> --}}
            {{-- <p>Tokyo is the capital of Japan.</p> --}}
          </div>
      </div>
      {{-- <div class="twidget-container" id="twidget"></div> --}}
      {{-- <p><iframe frameborder="0" height="500" scrolling="auto" src="https://www-amer.epower.amadeus.com/columbiatours" width="900" name="amadeusheight"></iframe></p> --}}

      </div>
      </div>
      <div class="col-sm-12 col-md-6 amadeus-title">
        <p>Encuentra tu tour especial hoy</p>
        <h2>Con Columbia Tours</h2>
        <p><a href="#" class="btn btn-slider">VER TOURS</a></p>
      </div>
</div>
