<?php

/**
 * This is the model class for table "contratos".
 *
 * The followings are the available columns in table 'contratos':
 * @property integer $ID_Contrato
 * @property integer $ID_Proveedor
 * @property integer $Cantidad_Producto
 * @property string $Vigente
 * @property string $Descripcion
 * @property string $Fecha_Contrato
 * @property string $Fecha_Revisado
 * @property double $monto_total
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Proveedor $iDProveedor
 */
class Contratos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contratos the static model class
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
		return 'contratos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cantidad_Producto, Descripcion, monto_total', 'required'),
			array('ID_Proveedor, Cantidad_Producto', 'numerical', 'integerOnly'=>true),
			array('monto_total', 'numerical'),
			array('Vigente', 'length', 'max'=>20),
			array('estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Contrato, ID_Proveedor, Cantidad_Producto, Vigente, Descripcion, Fecha_Contrato, Fecha_Revisado, monto_total, estado', 'safe', 'on'=>'search'),
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
			'iDProveedor' => array(self::BELONGS_TO, 'Proveedor', 'ID_Proveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Contrato' => 'Id Contrato',
			'ID_Proveedor' => 'Id Proveedor',
			'Cantidad_Producto' => 'Cantidad de Productos consignados: ',
			'Vigente' => 'Productos disponibles: ',
			'Descripcion' => 'Descripción del contrato: ',
			'Fecha_Contrato' => 'Fecha de creación del contrato: ',
			'Fecha_Revisado' => 'Fecha de revisión del contrato: ',
			'monto_total' => 'Monto Total por los productos consignados: ',
			'estado' => 'Estado',
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

		$criteria->compare('ID_Contrato',$this->ID_Contrato);
		$criteria->compare('ID_Proveedor',$this->ID_Proveedor);
		$criteria->compare('Cantidad_Producto',$this->Cantidad_Producto);
		$criteria->compare('Vigente',$this->Vigente,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Fecha_Contrato',$this->Fecha_Contrato,true);
		$criteria->compare('Fecha_Revisado',$this->Fecha_Revisado,true);
		$criteria->compare('monto_total',$this->monto_total);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
