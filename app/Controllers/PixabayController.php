<?php

namespace App\Controllers;
use CodeIgniter\HTTP\IncomingRequest;

class PixabayController extends BaseController
{
    public function index()
    {

        return view('index');

    }
    public function search_process(){

        $search_key = $this->request->getVar('search_key');
        $filter = $this->request->getVar('filter_key');
        $pixabayClient = new \Pixabay\PixabayClient([
            'key' => '23284489-343cb46ba590cf0aef693e360'
        ]);

        if($filter == 'image'){

            $results = $pixabayClient->get(['q' => $search_key], true);

        }else{

            $results = $pixabayClient->getVideos(['q' => $search_key], true);

        }

        
        echo json_encode($results);
        
    }
}
