<?php

/**
 * This is the model class for table "direccion".
 *
 * The followings are the available columns in table 'direccion':
 * @property string $Pais
 * @property string $Estado
 * @property string $Ciudad
 * @property string $Direccion
 * @property integer $Codigo_Postal
 * @property integer $ID_Persona
 *
 * The followings are the available model relations:
 * @property Persona $iDPersona
 */
class Direccion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Direccion the static model class
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
		return 'direccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Persona', 'required'),
			array('Codigo_Postal, ID_Persona', 'numerical', 'integerOnly'=>true),
			array('Pais, Estado, Ciudad', 'length', 'max'=>30),
			array('Direccion', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Pais, Estado, Ciudad, Direccion, Codigo_Postal, ID_Persona', 'safe', 'on'=>'search'),
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
			'iDPersona' => array(self::BELONGS_TO, 'Persona', 'ID_Persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Pais' => 'País: ',
			'Estado' => 'Estado: ',
			'Ciudad' => 'Ciudad: ',
			'Direccion' => 'Dirección: ',
			'Codigo_Postal' => 'Codigo Postal: ',
			'ID_Persona' => 'Id Persona',
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

		$criteria->compare('Pais',$this->Pais,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('Ciudad',$this->Ciudad,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Codigo_Postal',$this->Codigo_Postal);
		$criteria->compare('ID_Persona',$this->ID_Persona);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
