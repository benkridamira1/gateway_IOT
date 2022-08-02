<?php

namespace App\Controller;

use App\Entity\Meter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;



class MeterController extends  AbstractController
{

    /**
     * @Route("/addMeter/", name="add_meter", methods={"POST"})
     */
    public function addMeter(Request $request): Response
    {

        $file='/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_meters.json';

        $requestdata = json_decode($request->getContent(), true);

        $meter = new Meter();

        $meter->setNodeId( $requestdata['node_id']);
        $meter->setName( $requestdata['name']);
        $meter->setSerialNumber( $requestdata['serial_number']);
        $meter->setManufacturer( $requestdata['manufacturer']);
        $meter->setMethod( $requestdata['method']);
        $meter->setPort( $requestdata['port']);
        $meter->setBaudrate( $requestdata['baudrate']);
        $meter->setToken( $requestdata['token']);

        if(file_exists($file)){
            $data = file_get_contents($file);
            $json_arr = json_decode($data,true);

            // add data
          $json_arr[] = $requestdata;

            // encode json and save to file

            file_put_contents('/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_meters.json', json_encode($json_arr,JSON_PRETTY_PRINT));

        }
        else{
            dd("sorry file does not exist");
        }


        $array=["node_id"=>$meter->getNodeId(), "name"=>$meter->getName(),"serial_number"=>$meter->getSerialNumber(),"manufacturer"=>$meter->getManufacturer(),
            "method"=>$meter->getMethod(),"port"=>$meter->getPort(), "baudrate"=>$meter->getBaudrate(),
            "token"=>$meter->getToken() ];

        return new JsonResponse($array, Response::HTTP_CREATED);

    }

    /**
     * @Route("/getMeter/{id}", name="get_one_meter", methods={"GET"})
     */
    public function getMeter($id)
    {

        $file='/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_meters.json';

        $meter = new Meter();

        if(file_exists($file)){
            $data = file_get_contents($file);
            $json_arr = json_decode($data,true);

            foreach ($json_arr as $item){

                if($item['node_id']==$id){

                    $meter->setNodeId( $item['node_id']);
                    $meter->setName( $item['name']);
                    $meter->setSerialNumber( $item['serial_number']);
                    $meter->setManufacturer( $item['manufacturer']);
                    $meter->setMethod( $item['method']);
                    $meter->setPort( $item['port']);
                    $meter->setBaudrate( $item['baudrate']);
                    $meter->setToken( $item['token']);

                }
            }

        }
        else{
            dd("sorry file does not exist");
        }

        $array=["node_id"=>$meter->getNodeId(), "name"=>$meter->getName(),"serial_number"=>$meter->getSerialNumber(),"manufacturer"=>$meter->getManufacturer(),
            "method"=>$meter->getMethod(),"port"=>$meter->getPort(), "baudrate"=>$meter->getBaudrate(),
            "token"=>$meter->getToken() ];

        return new JsonResponse($array, Response::HTTP_CREATED);
    }

    /**
     * @Route("/getAllMeters/", name="get_all_meter", methods={"GET"})
     */
    public function getAllMeters()
    {

        $file='/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_meters.json';

        $meter = new Meter();

        if(file_exists($file)){
            $data = file_get_contents($file);
            $json_arr = json_decode($data,true);

            $array= [];

            foreach ($json_arr as $item){


                $array1=["node_id"=>$item['node_id'], "name"=>$item['name'],"serial_number"=>$item['serial_number'],"manufacturer"=>$item['manufacturer'],
                    "method"=>$item['method'],"port"=>$item['port'], "baudrate"=>$item['baudrate'],
                    "token"=>$item['token']];

                array_push($array, $array1);



            }

        }
        else{
            dd("sorry file does not exist");
        }



        return new JsonResponse($array, Response::HTTP_CREATED);
    }

    /**
     * @Route("/deleteMeter/{id}", name="delete_meter", methods={"DELETE"})
     */
    public function delete($id):Response{

        // read json file
        $data = file_get_contents('/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_meters.json');
// decode json to associative array
        $json_arr = json_decode($data, true);

        // get array index to delete
        $arr_index = array();
        foreach ($json_arr as $key => $value)
        {
            if ($value['node_id'] == $id)
            {
                $arr_index[] = $key;
            }
        }

        // delete data
        foreach ($arr_index as $i)
        {
            unset($json_arr[$i]);
        }

        // rebase array
        $json_arr = array_values($json_arr);

// encode array to json and save to file
        file_put_contents('/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_meters.json', json_encode($json_arr,JSON_PRETTY_PRINT));




        return new Response("Delete working");
    }

    /**
     * @Route("/updateMeter/{id}", name="update_meter", methods={"PUT"})
     */
    public function updateMeter($id,Request $request):Response{

        $data = file_get_contents('/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_meters.json');

        $requestdata = json_decode($request->getContent(), true);

        // decode json to array
        $json_arr = json_decode($data, true);

        foreach ($json_arr as $key => $value) {
            if ($value['node_id'] == $id) {
              //  $json_arr[$key]['node_id'] = $id;



                ///je dois tester l'existence du key dans le jsin de input sinon laisser l"ancienne valeur

                $json_arr[$key]['name'] = $requestdata['name'];
                $json_arr[$key]['serial_number'] =$requestdata['serial_number'] ;
                $json_arr[$key]['manufacturer'] = $requestdata['manufacturer'];
                $json_arr[$key]['method'] = $requestdata['method'];
                $json_arr[$key]['port'] = $requestdata['port'];
                $json_arr[$key]['baudrate'] = $requestdata['baudrate'];
                $json_arr[$key]['token'] = $requestdata['token'];

            }

        }
// encode array to json and save to file
        file_put_contents('/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_meters.json', json_encode($json_arr,JSON_PRETTY_PRINT));

        return new Response("update methode");

    }


}


