<?php
class ClassConexao
{
    // Realiza a conexao com o Banco de Dados.
    protected function conectaDB()
    {

        try {
            $con = new mysqli("localhost", "root", "", "agenda_contatos");
            return $con;
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }

}