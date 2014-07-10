<?php

/**
 * This is the model class for table "transferencia".
 *
 * The followings are the available columns in table 'transferencia':
 * @property integer $Numero_Transferencia
 * @property integer $ID_Pago
 * @property double $monto_transferido
 *
 * The followings are the available model relations:
 * @property Pagos $iDPago
 */
class Transferencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transferencia the static model class
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
		return 'transferencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Numero_Transferencia, ID_Pago, monto_transferido', 'required'),
			array('Numero_Transferencia, ID_Pago', 'numerical', 'integerOnly'=>true),
			array('monto_transferido', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Numero_Transferencia, ID_Pago, monto_transferido', 'safe', 'on'=>'search'),
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
			'iDPago' => array(self::BELONGS_TO, 'Pagos', 'ID_Pago'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Numero_Transferencia' => 'Número de la transferencia: ',
			'ID_Pago' => 'Id Pago',
			'monto_transferido' => 'Monto de la transferencia: ',
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

		$criteria->compare('Numero_Transferencia',$this->Numero_Transferencia);
		$criteria->compare('ID_Pago',$this->ID_Pago);
		$criteria->compare('monto_transferido',$this->monto_transferido);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
