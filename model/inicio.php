	<?php
	require_once 'model/database.php';
	class Inicio
	{
		private $pdo;
		public $descripcion;
		public $imagen;

		public function __CONSTRUCT()
		{
			try
			{
				$this->pdo = Database::StartUp();     
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
		public function Listar()
		{
			try
			{
			//$result = array();

				$stm = $this->pdo->prepare("SELECT * FROM publicacion");
				$stm->execute();

				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
		public function Listar2()
		{
			try
			{
			//$result = array();

				$stm = $this->pdo->prepare("SELECT * FROM galeria");
				$stm->execute();

				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
		public function Publicar(Inicio $data)
	{
		try 
		{
			$sql = "INSERT INTO publicacion
			VALUES (?,?,?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					null,
					$data->descripcion,
					$data->imagen 
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	}
	?>