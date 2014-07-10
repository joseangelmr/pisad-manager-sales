<?php

/**
 * This is the model class for table "soporte_tecnico".
 *
 * The followings are the available columns in table 'soporte_tecnico':
 * @property integer $ID_Pregunta
 * @property integer $ID_Persona
 * @property string $Fecha
 * @property string $Pregunta
 * @property string $Respuesta
 *
 * The followings are the available model relations:
 * @property Persona $iDPersona
 */
class SoporteTecnico extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SoporteTecnico the static model class
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
		return 'soporte_tecnico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Pregunta', 'required'),
			array('ID_Persona', 'numerical', 'integerOnly'=>true),
			array('Respuesta', 'length', 'max'=>250),
			array('Fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Pregunta, ID_Persona, Fecha, Pregunta, Respuesta', 'safe', 'on'=>'search'),
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
			'ID_Pregunta' => 'Id Pregunta',
			'ID_Persona' => 'Id Persona',
			'Fecha' => 'Fecha',
			'Pregunta' => 'Pregunta',
			'Respuesta' => 'Respuesta',
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

		$criteria->compare('ID_Pregunta',$this->ID_Pregunta);
		$criteria->compare('ID_Persona',$this->ID_Persona);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Pregunta',$this->Pregunta,true);
		$criteria->compare('Respuesta',$this->Respuesta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
