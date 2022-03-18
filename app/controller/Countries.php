<?php
class Countries extends controller {
    public function __construct() {
        $this->CountryModel = $this->model('Country');
        //getCountries();
    }

    public function index() {
        $result = $this->CountryModel->getCountries();

        $rows = "";
        foreach ($result as $country) {
        
            $rows .= "<tr>
            <td>$country->id</td>
            <td>$country->name</td>
            <td>$country->capitalCity</td>
            <td>$country->continent</td>
            <td>$country->population</td>
            </tr>";
            
        }

        $data = [
            'title' => 'country overzicht',
            'countryData' => $rows
        ];

        $this->view('Countries/index', $data);
    }
}