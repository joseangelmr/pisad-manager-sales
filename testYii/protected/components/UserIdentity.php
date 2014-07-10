<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity{
	private $_id;
	public function authenticate(){
		$username=strtolower($this->username);
		$user=Persona::model()->find('LOWER(User)=?',array($username));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->ID_Persona;
			$this->setState('tipo',$user->tipo);
			$this->setState('Correo',$user->Correo);
			$this->setState('Nombre',$user->Nombre);
			
			if ($user->tipo == 'a'){
				$model=Administrador::model()->find("ID_Persona=$user->ID_Persona");
				$this->setState('id_tipo',$model->ID_Administrador);
			}
			else if ($user->tipo == 'u'){
				$model=Usuario::model()->find("ID_Persona=$user->ID_Persona");
				$model_carrito=Carrito::model()->find("ID_Usuario=:ID_Usuario AND estado=:estado", array(':ID_Usuario'=>$model->ID_Usuario, ':estado'=>'a',));
				$this->setState('id_tipo',$model->ID_Usuario);
				$this->setState('model_carrito',$model_carrito);
			}
			else if ($user->tipo == 'p'){
				$model=Proveedor::model()->find("ID_Persona=$user->ID_Persona");
				$this->setState('id_tipo',$model->ID_Proveedor);
			}
			//$this->setState('Model',$model);	
			//echo Yii::app()->user->getState('tipo');
			$this->username=$user->User;
			$this->errorCode=self::ERROR_NONE;
			
		}
		return $this->errorCode==self::ERROR_NONE;
	}
	public function getId(){
		return $this->_id;
	}
}
