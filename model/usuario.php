<?php
class Usuario
{
	public $idUsuario;
	public $nombre;
	public $usuario;
	public $password;
	public $correo;
	public $tipousuario;
	private $pdo;

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

			$stm = $this->pdo->prepare("SELECT * FROM usuarios");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
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
			->prepare("SELECT * FROM usuarios WHERE idUsuario = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			->prepare("DELETE FROM usuarios WHERE idUsuario = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function Actualizar(Usuario $data)
	{
		try 
		{
			$sql = "UPDATE usuarios SET
			usuario = ?, password = ?, direccion =?, tipoUsuario = ? 
			WHERE idUsuario = ?";
			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->usuario, 
					$data->password,
					$data->direccion,
					$data->tipoUsuario,
					$data->idUsuario
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function Registrar(Usuario $data)
	{
		try 
		{
			$sql = "INSERT INTO usuarios
			VALUES (?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					null,
					$data->nombre,
					$data->usuario, 
					$data->password,
					$data->correo,
					$data->tipoUsuario
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}