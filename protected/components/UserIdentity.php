<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$usuario = Usuario::model()->findByAttributes(array('email'=>$this->username));
		if($usuario === null)
		{
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		else
		{	
			if($usuario->senha !== $usuario->encrypt($this->password))
			{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else
			{				
				$this->_id = $usuario->idUsuario;
				//TODO: Inserir log de acesso do usuário.
				$this->setState('nomeUsuario', $usuario->nome);
				$this->setState('idUsuario', $usuario->idUsuario);
				$this->setState('emailUsuario', $usuario->email);
				$this->errorCode = self::ERROR_NONE;			
			}
		}
		
		return !$this->errorCode;
	}
}