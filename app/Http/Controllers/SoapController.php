<?php

namespace App\Http\Controllers;

class SoapController extends BaseSoapController
{
    private $service;

    public function cruise(){
        try {
            self::setWsdl('http://services.rccl.com/Interfaces/ReleaseCabin');
            $this->service = InstanceSoapClient::init();
            dd($this->service->__getFunctions());
            $cities = $this->service->GetCitiesByCountry(['CountryName' => 'Peru']);
            $ciudades = $this->loadXmlStringAsArray($cities->GetCitiesByCountryResult);
            dd($ciudades['Table'][1]);
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function assistCard(){
        try {
            self::setWsdl('https://www.assist-card.net/ws/services/AssistCardService?wsdl');
            $this->service = InstanceSoapClient::init();
            //dd($this->service->__getFunctions());
            dd($this->service->cotizar('<cotizacion>
 <pais>540</pais>
 <cantidadDias>5</cantidadDias>
 <fechaInicio>07/01/2018</fechaInicio>
 <fechaFin>11/01/2018</fechaFin>
 <codigoAgencia>2511</codigoAgencia>
 <numeroSucursal>0</numeroSucursal>
 <clientes>
 <clienteCotizacion>
 <nombre>miguel</nombre>
 <apellido>godoy</apellido>
 <edad>29</edad>
 <fechaNacimiento>27/02/1989</fechaNacimiento>
 <valorTotal>0.0</valorTotal>
 <aplica>false</aplica>
 </clienteCotizacion>
 </clientes>
</cotizacion>','COLUMWS','123456'));
            $cities = $this->service->GetCitiesByCountry(['CountryName' => 'Peru']);
            $ciudades = $this->loadXmlStringAsArray($cities->GetCitiesByCountryResult);
            dd($ciudades['Table'][1]);
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
