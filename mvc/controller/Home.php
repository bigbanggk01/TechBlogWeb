<?php
class Home extends RequireModel{
    function Sayhi(){
        echo "New";
    }

    function Show($a, $b){
        //goi model tra ve data roi goi data o view
        $data = $this->model("UserModel");
        $this->view("MasterView"/*,["number"=>$data->Something($a,$b)]*/);
    }
}
?>