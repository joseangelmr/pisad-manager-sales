<?php

/**
 * This is the model class for table "persona_soporte_tecnico".
 *
 * The followings are the available columns in table 'persona_soporte_tecnico':
 * @property integer $ID_Pregunta
 * @property string $User
 *
 * The followings are the available model relations:
 * @property Persona $user
 */
class PersonaSoporteTecnico extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PersonaSoporteTecnico the static model class
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
		return 'persona_soporte_tecnico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Pregunta, User', 'required'),
			array('ID_Pregunta', 'numerical', 'integerOnly'=>true),
			array('User', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Pregunta, User', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Persona', 'User'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Pregunta' => 'Id Pregunta',
			'User' => 'Usuario: ',
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
		$criteria->compare('User',$this->User,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
