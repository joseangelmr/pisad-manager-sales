<?php

/**
 * This is the model class for table "user_registrado_factura".
 *
 * The followings are the available columns in table 'user_registrado_factura':
 * @property string $User
 * @property integer $ID_Factura
 */
class UserRegistradoFactura extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserRegistradoFactura the static model class
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
		return 'user_registrado_factura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('User, ID_Factura', 'required'),
			array('ID_Factura', 'numerical', 'integerOnly'=>true),
			array('User', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('User, ID_Factura', 'safe', 'on'=>'search'),
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
			'User' => 'Usuario: ',
			'ID_Factura' => 'Id Factura',
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

		$criteria->compare('User',$this->User,true);
		$criteria->compare('ID_Factura',$this->ID_Factura);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
