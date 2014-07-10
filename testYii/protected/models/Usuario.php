<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $ID_Usuario
 * @property integer $ID_Persona
 *
 * The followings are the available model relations:
 * @property Carrito[] $carritos
 * @property HistorialUsuario[] $historialUsuarios
 * @property Producto[] $productos
 * @property Persona $iDPersona
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('ID_Persona', 'required'),
			array('ID_Persona', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Usuario, ID_Persona', 'safe', 'on'=>'search'),
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
			'carritos' => array(self::HAS_MANY, 'Carrito', 'ID_Usuario'),
			'historialUsuarios' => array(self::HAS_MANY, 'HistorialUsuario', 'ID_Usuario'),
			'productos' => array(self::MANY_MANY, 'Producto', 'selecciona(ID_Usuario, ID_Producto)'),
			'iDPersona' => array(self::BELONGS_TO, 'Persona', 'ID_Persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Usuario' => 'Id Usuario',
			'ID_Persona' => 'Id Persona',
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

		$criteria->compare('ID_Usuario',$this->ID_Usuario);
		$criteria->compare('ID_Persona',$this->ID_Persona);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}