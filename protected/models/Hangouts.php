<?php

/**
 * This is the model class for table "hangouts".
 *
 * The followings are the available columns in table 'hangouts':
 * @property integer $idHangouts
 * @property integer $idUsuario
 * @property string $url
 * @property string $acontecendo
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario0
 */
class Hangouts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hangouts the static model class
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
		return 'hangouts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, url, acontecendo', 'required'),
			array('idUsuario', 'numerical', 'integerOnly'=>true),
			array('url', 'length', 'max'=>150),
			array('acontecendo', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idHangouts, idUsuario, url, acontecendo', 'safe', 'on'=>'search'),
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
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idHangouts' => 'Id Hangouts',
			'idUsuario' => 'Id Usuario',
			'url' => 'Url',
			'acontecendo' => 'Acontecendo',
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

		$criteria->compare('idHangouts',$this->idHangouts);
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('acontecendo',$this->acontecendo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}