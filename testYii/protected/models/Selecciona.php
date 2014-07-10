<?php

/**
 * This is the model class for table "selecciona".
 *
 * The followings are the available columns in table 'selecciona':
 * @property integer $ID_Producto
 * @property integer $ID_Carrito
 * @property integer $Cantidad_Individual
 *
 * The followings are the available model relations:
 * @property Producto $iDProducto
 * @property Carrito $iDCarrito
 */
class Selecciona extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Selecciona the static model class
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
		return 'selecciona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Producto, ID_Carrito, Cantidad_Individual', 'required'),
			array('ID_Producto, ID_Carrito, Cantidad_Individual', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Producto, ID_Carrito, Cantidad_Individual', 'safe', 'on'=>'search'),
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
			'iDProducto' => array(self::BELONGS_TO, 'Producto', 'ID_Producto'),
			'iDCarrito' => array(self::BELONGS_TO, 'Carrito', 'ID_Carrito'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Producto' => 'Id Producto',
			'ID_Carrito' => 'Id Carrito',
			'Cantidad_Individual' => 'Cantidad Individual: ',
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
		$criteria->compare('ID_Carrito',$this->ID_Carrito);
		$criteria->compare('Cantidad_Individual',$this->Cantidad_Individual);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
