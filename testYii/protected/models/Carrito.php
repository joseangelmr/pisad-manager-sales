<?php

/**
 * This is the model class for table "carrito".
 *
 * The followings are the available columns in table 'carrito':
 * @property integer $ID_Carrito
 * @property double $Costo_Total
 * @property integer $ID_Usuario
 * @property string $estado
 * @property string $fecha_expiracion
 *
 * The followings are the available model relations:
 * @property Usuario $iDUsuario
 * @property Selecciona[] $seleccionas
 */
class Carrito extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Carrito the static model class
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
		return 'carrito';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Usuario', 'required'),
			array('ID_Usuario', 'numerical', 'integerOnly'=>true),
			array('Costo_Total', 'numerical'),
			array('estado', 'length', 'max'=>1),
			array('fecha_expiracion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Carrito, Costo_Total, ID_Usuario, estado, fecha_expiracion', 'safe', 'on'=>'search'),
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
			'iDUsuario' => array(self::BELONGS_TO, 'Usuario', 'ID_Usuario'),
			'seleccionas' => array(self::HAS_MANY, 'Selecciona', 'ID_Carrito'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Carrito' => 'Id Carrito',
			'Costo_Total' => 'Costo Total: ',
			'ID_Usuario' => 'Id Usuario',
			'estado' => 'Estado: ',
			'fecha_expiracion' => 'Fecha de expiración: ',
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

		$criteria->compare('ID_Carrito',$this->ID_Carrito);
		$criteria->compare('Costo_Total',$this->Costo_Total);
		$criteria->compare('ID_Usuario',$this->ID_Usuario);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('fecha_expiracion',$this->fecha_expiracion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
