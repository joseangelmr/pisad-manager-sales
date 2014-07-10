<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $ID_Proveedor
 * @property integer $ID_Persona
 * @property string $RIF
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 * @property HistorialProveedor[] $historialProveedors
 * @property Persona $iDPersona
 */
class Proveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
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
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Persona, RIF', 'required'),
			array('ID_Persona', 'numerical', 'integerOnly'=>true),
			array('RIF', 'length', 'max'=>20),
			array('RIF', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Proveedor, ID_Persona, RIF', 'safe', 'on'=>'search'),
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
			'productos' => array(self::MANY_MANY, 'Producto', 'distribuye(RIF, ID_Producto)'),
			'historialProveedors' => array(self::HAS_MANY, 'HistorialProveedor', 'ID_Proveedor'),
			'iDPersona' => array(self::BELONGS_TO, 'Persona', 'ID_Persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Proveedor' => 'Id Proveedor',
			'ID_Persona' => 'Id Persona',
			'RIF' => 'Rif de proveedor: ',
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

		$criteria->compare('ID_Proveedor',$this->ID_Proveedor);
		$criteria->compare('ID_Persona',$this->ID_Persona);
		$criteria->compare('RIF',$this->RIF,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
