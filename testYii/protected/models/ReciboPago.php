<?php

/**
 * This is the model class for table "recibo_pago".
 *
 * The followings are the available columns in table 'recibo_pago':
 * @property integer $ID_Recibo
 * @property string $descripcion
 * @property double $Monto
 * @property string $Fecha_Recibo_Pago
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 */
class ReciboPago extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ReciboPago the static model class
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
		return 'recibo_pago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, Monto, Fecha_Recibo_Pago', 'required'),
			array('Monto', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Recibo, descripcion, Monto, Fecha_Recibo_Pago', 'safe', 'on'=>'search'),
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
			'productos' => array(self::MANY_MANY, 'Producto', 'contenido_producto_recibo_pago(ID_recibo, ID_Producto)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Recibo' => 'Id Recibo',
			'descripcion' => 'Descripción del recibo de pago: ',
			'Monto' => 'Monto del recibo: ',
			'Fecha_Recibo_Pago' => 'Fecha del recibo de pago: ',
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

		$criteria->compare('ID_Recibo',$this->ID_Recibo);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('Monto',$this->Monto);
		$criteria->compare('Fecha_Recibo_Pago',$this->Fecha_Recibo_Pago,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
