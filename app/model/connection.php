<?php
namespace App\model;


class Connection{


private static $instance;


public function __construct(){

    self::$instance = new \PDO('mysql: host=localhost;dbname=sistponto','root','');
   
    

}

public function SetConsult($dateToday){
    $dt = $dateToday;

    $connect = self::$instance;
     
     $sql = "SELECT * from folha WHERE Data = (?)";


     $stmt = $connect->prepare($sql);

     $stmt->bindValue(1, $dateToday);

     $stmt->execute();


     $dados = $stmt->fetchAll();


     return $dados;


}



public function SetInsertHour($dateToday, $hourNew){

    
    
    $dateToday = $dateToday;
    $hourNew = $hourNew;

    $dado = $this->consultQuantRegistersDay($dateToday);
    if(isset($dado[0]['id'])){ $indice = $dado[0]['id'];}
    if(isset($dado[0]['contagem'])){ $nRegistros = $dado[0]['contagem'];}
    
    
   
    
    

   
    switch($nRegistros){

        case '':
            $connection = self::$instance;
            $sql = "INSERT INTO folha (id, data, entrada1, saida1, entrada2, saida2, contagem) VALUES (?, ?, ?, ?, ?, ?, ?)";
            
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(1, NULL, \PDO::PARAM_INT);
            $stmt->bindValue(2, $dateToday, \PDO::PARAM_STR);
            $stmt->bindValue(3, $hourNew, \PDO::PARAM_STR);
            $stmt->bindValue(4,'', \PDO::PARAM_STR);
            $stmt->bindValue(5, '', \PDO::PARAM_STR);
            $stmt->bindValue(6, '', \PDO::PARAM_STR);
            $stmt->bindValue(7, 1,  \PDO::PARAM_INT);


            $stmt->execute();


            break;

        case '1':

            $connection = self::$instance;
            $sql = "UPDATE folha SET saida1 = ?, contagem = ? WHERE id=?";
            
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(1,$hourNew, \PDO::PARAM_STR);
            $stmt->bindValue(2, 2, \PDO::PARAM_STR);
            $stmt->bindValue(3, $indice, \PDO::PARAM_STR);
            
            $stmt->execute();

            break;


            case '2':

                $connection = self::$instance;
                $sql = "UPDATE folha SET entrada2 = ?, contagem = ? WHERE id=?";
                
                $stmt = $connection->prepare($sql);
                $stmt->bindValue(1,$hourNew, \PDO::PARAM_STR);
                $stmt->bindValue(2, 3, \PDO::PARAM_STR);
                $stmt->bindValue(3, $indice, \PDO::PARAM_STR);
                
                $stmt->execute();

            break;

            case '3':

                $connection = self::$instance;
                $sql = "UPDATE folha SET saida2 = ?, contagem = ? WHERE id=?";
                
                $stmt = $connection->prepare($sql);
                $stmt->bindValue(1,$hourNew, \PDO::PARAM_STR);
                $stmt->bindValue(2, 4, \PDO::PARAM_STR);
                $stmt->bindValue(3, $indice, \PDO::PARAM_STR);
                
                $stmt->execute();

            break;


            case '4':

                

            break;



        


            

    }
    
    


    



}


public function consultQuantRegistersDay($dateToday){

    $dt = $dateToday;

    $connect = self::$instance;
     
     $sql = "SELECT contagem, id from folha WHERE Data = (?)";


     $stmt = $connect->prepare($sql);

     $stmt->bindValue(1, $dateToday);

     $stmt->execute();


     $dados = $stmt->fetchAll();

    if(!empty($dados)){
       
       return $dados;
    }
    






}


}