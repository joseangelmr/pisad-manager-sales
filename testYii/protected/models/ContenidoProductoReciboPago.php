<?php

/**
 * This is the model class for table "contenido_producto_recibo_pago".
 *
 * The followings are the available columns in table 'contenido_producto_recibo_pago':
 * @property integer $ID_Producto
 * @property integer $ID_recibo
 */
class ContenidoProductoReciboPago extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContenidoProductoReciboPago the static model class
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
		return 'contenido_producto_recibo_pago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Producto, ID_recibo', 'required'),
			array('ID_Producto, ID_recibo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Producto, ID_recibo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Producto' => 'Id Producto',
			'ID_recibo' => 'Id Recibo',
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

		$criteria->compare('ID_Producto',$this->ID_Producto);
		$criteria->compare('ID_recibo',$this->ID_recibo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}