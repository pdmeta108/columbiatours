<?php $__env->startSection('body'); ?>
<body class="single-product home-page">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
<div class="row" style ="padding-top: 200px; padding-bottom: 200px; background-color: #d8d8d8;">
  <div id="formVuelos" class="panelTab">
      <form class="form-horizontal"  name="AIR_ENTRY_FORM" id="AIR_ENTRY_FORM" action="https://www-amer.epower.amadeus.com/columbiatours/#" method="GET" target="_blank">
        <input type="hidden" name="Culture" value="es-SV" />
        <input type="hidden" name="Method" value="Search" />
        <!-- Location desde -->
        <input type="hidden" name="From" id="From" />
        <input type="hidden" name="From1" id="From1" />
        <!-- Location desde -->
        <input type="hidden" name="To" id="To" />
        <input type="hidden" name="To1" id="To1" />
        <!-- Fecha salida -->
        <input name="DepartureDate" id="DepartureDate" type="hidden" />
        <input name="DepartureDate1" id="DepartureDate1" type="hidden" />
        <input name="DepartureTime" id="DepartureTime" type="hidden" value="TRUE" />
        <!-- Fecha Regreso -->
        <input name="ReturnDate" id="ReturnDate" type="hidden" />
        <input name="ReturnTime" id="ReturnTime" type="hidden" value="TRUE" />
        <!-- infants info
        <div id="passengersBox">
        </div>-->
        <div class="row">
          <div class="col-sm-2">
            <h3><small>Seleccionar</small> DESTINO</h3>
          </div>
          <div class="col-sm-8">
            <br>
            <div class="travelers-info">
              <div class="row">
                <div class="col-md-4">
                 <input name="FlightType" type="radio" value="RoundTrip" checked>   Ida y vuelta
               </div>
               <div class="col-md-4">
                <input name="FlightType" type="radio" value="OneWay">  Solo Ida
              </div>
              <div class="col-md-4">
                <input name="FlightType" type="radio" value="MultiLeg">   Múltiples destinos
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6 IdayVueltaFrom">
              <div class="form-group">
                <label class="col-sm-3 control-label">Desde</label>
                <div class="col-sm-9">
                  <div id="desde">
                    <input name="blocation12" class="typeahead form-control" type="text" placeholder="Aeropuerto de salida">
                    <span class="loading hidden"></span>
                    <span class="icon-location red"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 IdayVueltaFrom">
              <div class="form-group">
                <label class="col-sm-3 control-label">Hasta</label>
                <div class="col-sm-9">
                  <div id="hasta">
                    <input name="elocation12" class="typeahead form-control" type="text" placeholder="Aeropuerto de llegada">
                    <span class="loading hidden"></span>
                    <span class="icon-location red"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 MultiplesDest disabled">
              <div class="form-group">
                <label class="col-sm-3 control-label">Desde</label>
                <div class="col-sm-9">
                  <div id="desde">
                    <input name="blocation0" class="typeahead form-control" type="text" placeholder="Aeropuerto de salida">
                    <span class="loading hidden"></span>
                    <span class="icon-location red"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 MultiplesDest disabled">
              <div class="form-group">
                <label class="col-sm-3 control-label">Hasta</label>
                <div class="col-sm-9">
                  <div id="hasta">
                    <input name="elocation0" class="typeahead form-control" type="text" placeholder="Aeropuerto de llegada">
                    <span class="loading hidden"></span>
                    <span class="icon-location red"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 MultiplesDest disabled">
              <div class="form-group">
                <label class="col-sm-3 control-label">Desde</label>
                <div class="col-sm-9">
                  <div id="desde1">
                    <input name="blocation1" class="typeahead form-control" type="text" placeholder="Aeropuerto de salida">
                    <span class="loading hidden"></span>
                    <span class="icon-location red"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 MultiplesDest disabled">
              <div class="form-group">
                <label class="col-sm-3 control-label">Hasta</label>
                <div class="col-sm-9">
                  <div id="hasta1">
                    <input name="elocation1" class="typeahead form-control" type="text" placeholder="Aeropuerto de llegada">
                    <span class="loading hidden"></span>
                    <span class="icon-location red"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="formvuelos_Extra" class="hidden">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Salida</label>
                  <div class="col-sm-5">
                    <input type="text" readonly placeholder="--/--/----" class="form-control calendarInput pickDate goDate">
                  </div>
                  <div class="col-sm-4 IdayVueltaFrom">
                    <select class="form-control" name="time1" id="time1">
                      <option value="00:01" selected="selected">Toda hora</option>
                      <option value="MORNING">Mañana</option>
                      <option value="AFTERNOON">Al mediodía</option>
                      <option value="EVENING">Tarde</option>
                      <option value="00:00">00:00</option>
                      <option value="01:00">01:00</option>
                      <option value="02:00">02:00</option>
                      <option value="03:00">03:00</option>
                      <option value="04:00">04:00</option>
                      <option value="05:00">05:00</option>
                      <option value="06:00">06:00</option>
                      <option value="07:00">07:00</option>
                      <option value="08:00">08:00</option>
                      <option value="09:00">09:00</option>
                      <option value="10:00">10:00</option>
                      <option value="11:00">11:00</option>
                      <option value="12:00">12:00</option>
                      <option value="13:00">13:00</option>
                      <option value="14:00">14:00</option>
                      <option value="15:00">15:00</option>
                      <option value="16:00">16:00</option>
                      <option value="17:00">17:00</option>
                      <option value="18:00">18:00</option>
                      <option value="19:00">19:00</option>
                      <option value="20:00">20:00</option>
                      <option value="21:00">21:00</option>
                      <option value="22:00">22:00</option>
                      <option value="23:00">23:00</option>
                    </select>
                  </div>
                </div>
                <div class="form-group MultiplesDest disabled">
                  <label class="col-sm-3 control-label">Salida</label>
                  <div class="col-sm-5">
                    <input type="text" readonly placeholder="--/--/----" class="form-control calendarInput pickDate goDate1">
                  </div>
                  <div class="col-sm-4 IdayVueltaFrom">
                  </div>
                </div>
                <div class="form-group IdayVuelta">
                  <label class="col-sm-3  control-label">Regreso</label>
                  <div class="col-sm-5">
                    <input type="text" placeholder="--/--/----" class="form-control pickDate backDate">
                  </div>
                  <div class="col-sm-4">
                    <select class="form-control" name="time2" id="time2">
                      <option value="00:01" selected="selected">Toda hora</option>
                      <option value="MORNING">Mañana</option>
                      <option value="AFTERNOON">Al mediodía</option>
                      <option value="EVENING">Tarde</option>
                      <option value="00:00">00:00</option>
                      <option value="01:00">01:00</option>
                      <option value="02:00">02:00</option>
                      <option value="03:00">03:00</option>
                      <option value="04:00">04:00</option>
                      <option value="05:00">05:00</option>
                      <option value="06:00">06:00</option>
                      <option value="07:00">07:00</option>
                      <option value="08:00">08:00</option>
                      <option value="09:00">09:00</option>
                      <option value="10:00">10:00</option>
                      <option value="11:00">11:00</option>
                      <option value="12:00">12:00</option>
                      <option value="13:00">13:00</option>
                      <option value="14:00">14:00</option>
                      <option value="15:00">15:00</option>
                      <option value="16:00">16:00</option>
                      <option value="17:00">17:00</option>
                      <option value="18:00">18:00</option>
                      <option value="19:00">19:00</option>
                      <option value="20:00">20:00</option>
                      <option value="21:00">21:00</option>
                      <option value="22:00">22:00</option>
                      <option value="23:00">23:00</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="travelers-info">
                  <div class="row">
                    <div class="col-md-6">
                      <select name="AdtCount" id="AdtCount" class="form-control input-sm">
                        <option value="0">Numero de Adultos</option>
                        <option value="1" selected="selected">1 Adulto</option>
                        <option value="2">2 Adultos</option>
                        <option value="3">3 Adultos</option>
                        <option value="4">4 Adultos</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <select name="ChdCount" id="ChdCount" class="form-control input-sm">
                        <option value="0" selected="selected">Ningun Niño</option>
                        <option value="1">1 Niño</option>
                        <option value="2">2 Niños</option>
                        <option value="3">3 Niños</option>
                        <option value="4">4 Niños</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <select name="InfCount" id="InfCount" class="form-control input-sm">
                        <option value="0" selected="selected">Ningun Infante</option>
                        <option value="1">1 Infante</option>
                        <option value="2">2 Infantes</option>
                        <option value="3">3 Infantes</option>
                        <option value="4">4 Infantes</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <select name="CabinClass" id="CabinClass" class="form-control input-sm">
                        <option value="" selected="selected">Seleccione Clase</option>
                        <option value="E">Económica</option>
                        <option value="B">Ejecutiva</option>
                        <option value="F">Primera</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="closeAirForm">X Cerrar</div>
          </div> <!-- FormsVuelos_Extra -->
        </div>  <!-- Col-md-8 -->
        <div class="col-sm-2">
          <br>
          <button class="btn btn-red btn-block top40"><strong>Buscar</strong></button>
        </div>
      </div> <!-- End Row -->
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
jQuery('.promociones-slider').slick({

  fade: true,

  autoplay: true,
  autoplaySpeed: 2000,




});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>