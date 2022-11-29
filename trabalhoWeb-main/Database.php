<?php

require_once 'DatabaseConstants.php';

class Database
{
    /**
     * @var PDO $conexao
     */
    private $conexao;

    public function create($tabela, $campos)
    {
        $this->conectar();
        $this->conexao->beginTransaction();

        $colunas = implode(', ', array_keys($campos));
        $parametros = $this->montarParametros($campos);
        $query = '
            INSERT INTO '.$tabela.'
            ('.$colunas.')
            VALUES
            ('.implode(', ', array_keys($parametros)).')
        ';
        $statement = $this->conexao->prepare($query);
        $statement->execute($parametros);
        $this->conexao->commit();
        $statement = null;

        $this->fecharConexao();
    }

    public function read($tabela, $campos = '*', $joins = '', $where = '', $parametros = [], $order = '', $fetchAll = true)
    {
        $this->conectar();

        if (!empty($where)) {
            $where = 'WHERE ' . $where;
        }

        $query = "
            SELECT $campos
            FROM $tabela
            $joins
            $where
            $order
        ";
        $statement = $this->conexao->prepare($query);
        $statement->execute($parametros);

        $dados = $fetchAll ? $statement->fetchAll(PDO::FETCH_ASSOC) : $statement->fetch(PDO::FETCH_ASSOC);

        $statement = null;
        $this->fecharConexao();

        return $dados;
    }

    public function update()
    {
    }

    public function delete($tabela, $where = '', $parametros = [])
    {
		$this->conectar();

		if (!empty($where)) {
			$where = 'WHERE ' . $where;
		}

		$query = "DELETE FROM $tabela $where";

		$statement = $this->conexao->prepare($query);
		$statement->execute($parametros);

		$statement = null;
		$this->fecharConexao();
    }

    private function conectar()
    {
        $this->conexao = new PDO(
            'mysql:host='.DatabaseConstants::DB_HOST.';dbname='.DatabaseConstants::DB_NAME,
            DatabaseConstants::DB_USER,
            DatabaseConstants::DB_PSWD
        );
    }

    private function montarParametros($campos)
    {
        $parametros = [];
        foreach ($campos as $coluna => $valor) {
            $chave = ':'.$coluna;
            $parametros[$chave] = $valor;
        }

        return $parametros;
    }

    private function fecharConexao()
    {
        $this->conexao = null;
    }
}