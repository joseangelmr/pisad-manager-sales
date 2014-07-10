<?php

/**
 * This is the model class for table "factura".
 *
 * The followings are the available columns in table 'factura':
 * @property integer $ID_Factura
 * @property double $Monto
 * @property double $Impuesto
 * @property string $Fecha_Factura
 * @property integer $ID_Pago
 * @property integer $ID_Carrito
 * @property integer $ID_Usuario
 *
 * The followings are the available model relations:
 * @property Pagos $iDPago
 * @property Carrito $iDCarrito
 * @property Usuario $iDUsuario
 * @property Persona[] $personas
 */
class Factura extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Factura the static model class
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
		return 'factura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Monto, Impuesto, ID_Pago, ID_Carrito, ID_Usuario', 'required'),
			array('ID_Pago, ID_Carrito, ID_Usuario', 'numerical', 'integerOnly'=>true),
			array('Monto, Impuesto', 'numerical'),
			array('Fecha_Factura', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Factura, Monto, Impuesto, Fecha_Factura, ID_Pago, ID_Carrito, ID_Usuario', 'safe', 'on'=>'search'),
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
			'iDPago' => array(self::BELONGS_TO, 'Pagos', 'ID_Pago'),
			'iDCarrito' => array(self::BELONGS_TO, 'Carrito', 'ID_Carrito'),
			'iDUsuario' => array(self::BELONGS_TO, 'Usuario', 'ID_Usuario'),
			'personas' => array(self::MANY_MANY, 'Persona', 'user_registrado_factura(ID_Factura, User)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Factura' => 'Id Factura',
			'Monto' => 'Monto total: ',
			'Impuesto' => 'Impuesto: ',
			'Fecha_Factura' => 'Fecha de facturación: ',
			'ID_Pago' => 'Id Pago',
			'ID_Carrito' => 'Id Carrito',
			'ID_Usuario' => 'Id Usuario',
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

		$criteria->compare('ID_Factura',$this->ID_Factura);
		$criteria->compare('Monto',$this->Monto);
		$criteria->compare('Impuesto',$this->Impuesto);
		$criteria->compare('Fecha_Factura',$this->Fecha_Factura,true);
		$criteria->compare('ID_Pago',$this->ID_Pago);
		$criteria->compare('ID_Carrito',$this->ID_Carrito);
		$criteria->compare('ID_Usuario',$this->ID_Usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
