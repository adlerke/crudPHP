<?php


require_once('ClassConexao.php');

class ClassCrud extends ClassConexao
{

    // variaveis
    private $crud;
    private $count;
    private $res;


    // preparaão das declarativas
    private function preparedStatements($query, $type, $parameters)
    {
        // chama a função de contar parametros7
        $this->countParameters($parameters);

        $con = $this->conectaDB();
        $this->crud = $con->prepare($query);

        if ($this->count > 0) {
// para aqui
            $callParameters = array();
            foreach ($parameters as $key => $parameter) {
                $callParameters[$key] = &$parameters[$key];
            }
            array_unshift($callParameters, $type);
            call_user_func_array(array($this->crud, 'bind_param'), $callParameters);
//
        }

        $this->crud->execute();
        $this->res = $this->crud->get_result();

    }


// contador de parametros
    private
    function countParameters($parameters)
    {
        $this->count = count($parameters);
    }


    // METODO DE INSERÇÃO
    public function insertDB($table, $cond, $types, $parameters)
    {
        $this->preparedStatements("insert into {$table} values({$cond})", $types, $parameters);
        return $this->crud;

    }

    public function selectDB($Campos, $Tabela, $Condicao, $Tipos, $Parametros)
    {
        $this->preparedStatements("select {$Campos} from {$Tabela}  {$Condicao}", $Tipos, $Parametros);
        return $this->res;
    }

    public function deleteDB($Tabela, $Condicao, $Tipos, $Parametros)
    {
        $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Tipos, $Parametros);
        return $this->crud;
    }

    public function updateDB($Tabela, $set, $Condicao, $Tipos, $Parametros)
    {
        $this->preparedStatements("update  {$Tabela} set {$set} {$Condicao}", $Tipos, $Parametros);
        return $this->crud;
    }

}

?>