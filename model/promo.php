	<?php
	require_once 'model/database.php';
	class Promo
	{
		private $pdo;
		public $idPromocion;
		public $descripcion;
		public $promocion;
		public $telefono;
		public $comentario;
		public $usuario;
		public $solicitud;

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

				$stm = $this->pdo->prepare("SELECT * FROM promociones");
				$stm->execute();

				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
		public function Registrar(Promo $promo)
		{
			try
			{
				$stm = $this->pdo->prepare("INSERT INTO promociones VALUES (?,?,?)");
				$stm->execute(
					array(
						null,
						$promo->promocion,
						$promo->descripcion
					)
				);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
		public function Obtener($id)
		{
			try 
			{
				$stm = $this->pdo
				->prepare("SELECT * FROM promociones WHERE idPromocion = ?");


				$stm->execute(array($id));
				return $stm->fetch(PDO::FETCH_OBJ);
			} catch (Exception $e) 
			{
				die($e->getMessage());
			}
		}
		
		public function Registrarpedido(Promo $peticion)
		{
			try
			{
				$stm = $this->pdo->prepare("INSERT INTO peticiones VALUES (?,?,?,?,?)");
				$stm->execute(
					array(
						null,
						$peticion->solicitud,
						$peticion->comentario,
						$peticion->telefono,
						$peticion->usuario
					)
				);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}

	}
	?>