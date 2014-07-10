<?php

/**
 * This is the model class for table "historial_proveedor".
 *
 * The followings are the available columns in table 'historial_proveedor':
 * @property integer $ID_Historial_Proveedor
 * @property integer $ID_Proveedor
 *
 * The followings are the available model relations:
 * @property Proveedor $iDProveedor
 */
class HistorialProveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HistorialProveedor the static model class
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
		return 'historial_proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Historial_Proveedor, ID_Proveedor', 'required'),
			array('ID_Historial_Proveedor, ID_Proveedor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Historial_Proveedor, ID_Proveedor', 'safe', 'on'=>'search'),
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
			'ID_Historial_Proveedor' => 'Id Historial Proveedor',
			'ID_Proveedor' => 'Id Proveedor',
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

		$criteria->compare('ID_Historial_Proveedor',$this->ID_Historial_Proveedor);
		$criteria->compare('ID_Proveedor',$this->ID_Proveedor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}