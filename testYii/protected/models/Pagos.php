<?php

/**
 * This is the model class for table "pagos".
 *
 * The followings are the available columns in table 'pagos':
 * @property integer $ID_Pago
 * @property double $Monto
 * @property integer $ID_Carrito
 *
 * The followings are the available model relations:
 * @property Deposito $deposito
 * @property Factura[] $facturas
 * @property Carrito $iDCarrito
 * @property TajetasDebitoCredito $tajetasDebitoCredito
 * @property Transferencia $transferencia
 */
class Pagos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pagos the static model class
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
		return 'pagos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Monto, ID_Carrito', 'required'),
			array('ID_Carrito', 'numerical', 'integerOnly'=>true),
			array('Monto', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Pago, Monto, ID_Carrito', 'safe', 'on'=>'search'),
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
			'deposito' => array(self::HAS_ONE, 'Deposito', 'ID_Pago'),
			'facturas' => array(self::HAS_MANY, 'Factura', 'ID_Pago'),
			'iDCarrito' => array(self::BELONGS_TO, 'Carrito', 'ID_Carrito'),
			'tajetasDebitoCredito' => array(self::HAS_ONE, 'TajetasDebitoCredito', 'ID_Pagos'),
			'transferencia' => array(self::HAS_ONE, 'Transferencia', 'ID_Pagos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Pago' => 'Id Pago',
			'Monto' => 'Monto total: ',
			'ID_Carrito' => 'Id Carrito',
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

		$criteria->compare('ID_Pago',$this->ID_Pago);
		$criteria->compare('Monto',$this->Monto);
		$criteria->compare('ID_Carrito',$this->ID_Carrito);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
