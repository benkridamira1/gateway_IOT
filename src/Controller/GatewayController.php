<?php

namespace App\Controller;

use App\Entity\Gateway;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GatewayController extends AbstractController
{

    /**
     * @Route("/addGateway", name="add_gateway", methods={"POST"})
     */
    public function addGateway(Request $request): Response
    {

        $file='/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_gateway.json';

        $requestdata = json_decode($request->getContent(), true);

        $gateway = new Gateway();
        $gateway->setName( $requestdata['name']);
        $gateway->setLocation( $requestdata['location']);
        $gateway->setPullingPeriod( $requestdata['pulling_period']);
        $gateway->setPushingPeriod( $requestdata['pushing_period']);
        $gateway->setHost( $requestdata['host']);
        $gateway->setPort( $requestdata['port']);
        $gateway->setUsername( $requestdata['username']);
        $gateway->setPassword( $requestdata['password']);
        $gateway->setUseTls( $requestdata['use_tls']);
        $gateway->setTopic( $requestdata['topic']);
        $gateway->setLogFile( $requestdata['log_file']);
        $gateway->setBackupFile( $requestdata['backup_file']);
        $gateway->setHwModel( $requestdata['hw_model']);
        $gateway->setSwVersion( $requestdata['sw_version']);
        $gateway->setSerialNumber( $requestdata['serial_number']);
        $gateway->setBoardSerialNumber( $requestdata['board_serial_number']);
        $gateway->setAssetId( $requestdata['asset_id']);

        if(file_exists($file)){

            file_put_contents($file, json_encode($requestdata,JSON_PRETTY_PRINT));

        }
        else{
            dd("File already exists");
        }


        $array=["name"=>$gateway->getName(), "location"=>$gateway->getLocation(),"pulling_period"=>$gateway->getPullingPeriod(),
            "pushing_period"=>$gateway->getPushingPeriod(),
            "host"=>$gateway->getHost(),"port"=>$gateway->getPort(), "username"=>$gateway->getUsername(),
            "password"=>$gateway->getPassword(), "use_tls"=>$gateway->getUseTls(), "topic"=>$gateway->getTopic(),
            "log_file"=>$gateway->getLogFile() , "backup_file"=>$gateway->getBackupFile(),
            "hw_model"=>$gateway->getHwModel(), "sw_version"=>$gateway->getSwVersion(),
            "serial_number"=>$gateway->getSerialNumber(), "board_serial_number"=>$gateway->getBoardSerialNumber(),
            "asset_id"=>$gateway->getAssetId()];

        return new JsonResponse($array, Response::HTTP_CREATED);

    }




    /**
     * @Route("/getGateway", name="get_gateway", methods={"GET"})
     */
    public function getGateway():   Response
    {

        $file='/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_gateway.json';
        $array1=[];

        if(file_exists($file)){
            $data = file_get_contents($file);
            $item = json_decode($data,true);


            $isEmpty = empty($item);
            if(!$isEmpty){
                $array1=["name"=>$item['name'], "location"=>$item['location'],"pulling_period"=>$item['pulling_period'],
                    "pushing_period"=>$item['pushing_period'],
                    "host"=>$item['host'],"port"=>$item['port'], "username"=>$item['username'],
                    "password"=>$item['password'],

                    "use_tls"=>$item['use_tls'],
                    "topic"=>$item['topic'],"log_file"=>$item['log_file'], "backup_file"=>$item['backup_file'],


                    "hw_model"=>$item['hw_model'],
                    "sw_version"=>$item['sw_version'],"serial_number"=>$item['serial_number'], "board_serial_number"=>$item['board_serial_number'],


                    "asset_id"=>$item['asset_id']


                ];
            }









        }
        else{
            dd("sorry file does not exist");
        }



        return new JsonResponse($array1, Response::HTTP_CREATED);


    }


    /**
     * @Route("/deleteGateway", name="delete_gateway", methods={"DELETE"})
     */
    public function delete():Response{

        // read json file
        $data = file_get_contents('/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_gateway.json');

        // decode json to associative array
        $json_arr = json_decode($data, true);
       // dd($json_arr);

        // get array index to delete
        $arr_index = array();
        foreach ($json_arr as $key => $value)
        {
                $arr_index[] = $key;

        }

        // delete data
        foreach ($arr_index as $i)
        {
            unset($json_arr[$i]);
        }

        // rebase array
        $json_arr = array_values($json_arr);

// encode array to json and save to file
        file_put_contents('/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_gateway.json', $json_arr);




        return new Response("Delete working");
    }



    /**
     * @Route("/updateGateway", name="update_gateway", methods={"PUT"})
     */
    public function updateMeter(Request $request):Response{

        $data = file_get_contents('/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_gateway.json');

        $requestdata = json_decode($request->getContent(), true);

        // decode json to array
        $json_arr = json_decode($data, true);

        foreach ($json_arr as $key => $value) {


                ///je dois tester l'existence du key dans le jsin de input sinon laisser l"ancienne valeur

                $attributes=["name",'location','pulling_period','pushing_period','host','port','username',
                    "password", "use_tls", "topic", "log_file", "backup_file", "hw_model", "sw_version",
                    "serial_number", "board_serial_number", "asset_id"];

                foreach ($attributes as $attribute)


                    if(array_key_exists($attribute, $requestdata)){

                        $json_arr[$attribute] = $requestdata[$attribute];
                    }


        }
// encode array to json and save to file
        file_put_contents('/home/amira/PhpstormProjects/Gateway_Api/gateway_IOT/json_files/conf_gateway.json', json_encode($json_arr,JSON_PRETTY_PRINT));

        return new Response("update methode");

    }



}
