<?php

/**
 * This is the model class for table "envio".
 *
 * The followings are the available columns in table 'envio':
 * @property integer $ID_Envio
 * @property string $Nombre_Empresa
 * @property double $Costo_Envio
 * @property string $Detalles
 */
class Envio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Envio the static model class
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
		return 'envio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre_Empresa, Costo_Envio, Detalles', 'required'),
			array('Costo_Envio', 'numerical'),
			array('Nombre_Empresa', 'length', 'max'=>30),
			array('Detalles', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Envio, Nombre_Empresa, Costo_Envio, Detalles', 'safe', 'on'=>'search'),
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
			'ID_Envio' => 'Id Envio',
			'Nombre_Empresa' => 'Nombre de la empresa de transporte:',
			'Costo_Envio' => 'Costo del envío: ',
			'Detalles' => 'Detalles: ',
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

		$criteria->compare('ID_Envio',$this->ID_Envio);
		$criteria->compare('Nombre_Empresa',$this->Nombre_Empresa,true);
		$criteria->compare('Costo_Envio',$this->Costo_Envio);
		$criteria->compare('Detalles',$this->Detalles,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
