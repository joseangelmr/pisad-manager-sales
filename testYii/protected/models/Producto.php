<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $ID_Producto
 * @property string $Nombre_Producto
 * @property integer $Cantidad_Inicial
 * @property integer $Cantidad_Restante
 * @property double $Peso
 * @property string $Descripcion
 * @property double $Precio
 * @property double $Tamano
 *
 * The followings are the available model relations:
 * @property Carrito[] $carritos
 * @property ReciboPago[] $reciboPagos
 * @property Proveedor[] $proveedors
 * @property Usuario[] $usuarios
 */
class Producto extends CActiveRecord
{
	public $imagen;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Producto the static model class
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
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imagen', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('Nombre_Producto, Cantidad_Inicial, Cantidad_Restante, Peso, Descripcion, Precio, Tamano', 'required'),
			array('Cantidad_Inicial, Cantidad_Restante', 'numerical', 'integerOnly'=>true),
			array('Peso, Precio, Tamano', 'numerical'),
			array('Nombre_Producto', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Producto, Nombre_Producto, Cantidad_Inicial, Cantidad_Restante, Peso, Descripcion, Precio, Tamano', 'safe', 'on'=>'search'),
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
			'carritos' => array(self::HAS_MANY, 'Carrito', 'ID_Producto'),
			'reciboPagos' => array(self::MANY_MANY, 'ReciboPago', 'contenido_producto_recibo_pago(ID_Producto, ID_recibo)'),
			'proveedors' => array(self::MANY_MANY, 'Proveedor', 'distribuye(ID_Producto, RIF)'),
			'usuarios' => array(self::MANY_MANY, 'Usuario', 'selecciona(ID_Producto, ID_Usuario)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Producto' => 'Id Producto',
			'Nombre_Producto' => 'Nombre del producto: ',
			'Cantidad_Inicial' => 'Cantidad Inicial: ',
			'Cantidad_Restante' => 'Cantidad disponible: ',
			'Peso' => 'Peso: ',
			'Descripcion' => 'Descripción: ',
			'Precio' => 'Precio: ',
			'Tamano' => 'Tamaño: ',
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
		$criteria->compare('Nombre_Producto',$this->Nombre_Producto,true);
		$criteria->compare('Cantidad_Inicial',$this->Cantidad_Inicial);
		$criteria->compare('Cantidad_Restante',$this->Cantidad_Restante);
		$criteria->compare('Peso',$this->Peso);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Precio',$this->Precio);
		$criteria->compare('Tamano',$this->Tamano);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
