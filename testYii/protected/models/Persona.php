<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property integer $ID_Persona
 * @property string $User
 * @property string $Clave
 * @property string $Correo
 * @property string $Nombre
 * @property string $Telefono
 * @property string $tipo
 *
 * The followings are the available model relations:
 * @property Direccion $direccion
 * @property PersonaSoporteTecnico[] $personaSoporteTecnicos
 * @property Proveedor[] $proveedors
 * @property Factura[] $facturas
 * @property Usuario[] $usuarios
 */
class Persona extends CActiveRecord
{
	public $nclave;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('User, Clave, Correo, Nombre', 'required'),
			array('User, Clave, nclave', 'length', 'min'=>6),
			array('User, Clave, Correo, Nombre, nclave', 'length', 'max'=>50),
			array('User','match','pattern'=>'/^[a-z\d_]{6,50}$/'),
			array('Telefono', 'length', 'min'=>11, 'max'=>15),
			array('tipo', 'length', 'max'=>1),
			array('Correo', 'email'),
			array('User, Correo', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Persona, User, Clave, Correo, Nombre, Telefono, tipo, nclave', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'direccion' => array(self::HAS_ONE, 'Direccion', 'User'),
			'personaSoporteTecnicos' => array(self::HAS_MANY, 'PersonaSoporteTecnico', 'User'),
			'proveedors' => array(self::HAS_MANY, 'Proveedor', 'ID_Persona'),
			'facturas' => array(self::MANY_MANY, 'Factura', 'user_registrado_factura(User, ID_Factura)'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'ID_Persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Persona' => 'Id Persona',
			'User' => 'Usuario: ',
			'Clave' => 'Contraseña: ',
			'Correo' => 'Correo: ',
			'Nombre' => 'Nombre: ',
			'Telefono' => 'Teléfono: ',
			'tipo' => 'Tipo',
	);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_Persona',$this->ID_Persona);
		$criteria->compare('User',$this->User,true);
		$criteria->compare('Clave',$this->Clave,true);
		$criteria->compare('Correo',$this->Correo,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function validatePassword($password){
		return $this->hashPassword($password)===$this->Clave;
	}
	public function hashPassword($password){
		return md5($password);
	}

}
