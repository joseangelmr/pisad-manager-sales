<?php

/**
 * This is the model class for table "historial_usuario".
 *
 * The followings are the available columns in table 'historial_usuario':
 * @property integer $ID_Historial
 * @property integer $ID_Usuario
 *
 * The followings are the available model relations:
 * @property Usuario $iDUsuario
 */
class HistorialUsuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HistorialUsuario the static model class
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
		return 'historial_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Historial, ID_Usuario', 'required'),
			array('ID_Historial, ID_Usuario', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_Historial, ID_Usuario', 'safe', 'on'=>'search'),
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
			'iDUsuario' => array(self::BELONGS_TO, 'Usuario', 'ID_Usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_Historial' => 'Id Historial',
			'ID_Usuario' => 'Id Usuario',
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

		$criteria->compare('ID_Historial',$this->ID_Historial);
		$criteria->compare('ID_Usuario',$this->ID_Usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}