<?php

/**
 * This is the model class for table "hangouts".
 *
 * The followings are the available columns in table 'hangouts':
 * @property integer $idHangouts
 * @property integer $idUsuario
 * @property string $url
 * @property string $youtube
 * @property string $titulo
 * @property string $acontecendo
 * @property string $dataCadastro
 * @property string $dataHangout
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
			array('idUsuario, url, youtube, titulo, acontecendo, dataCadastro', 'required'),
			array('idUsuario', 'numerical', 'integerOnly'=>true),
			array('url, youtube, titulo', 'length', 'max'=>150),
			array('acontecendo', 'length', 'max'=>1),
			array('dataHangout', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idHangouts, idUsuario, url, youtube, titulo, acontecendo, dataCadastro, dataHangout', 'safe', 'on'=>'search'),
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
	
	public function beforeValidate()
	{
		parent::BeforeValidate();	
		if($this->scenario == 'insert')
		{
			$this->dataCadastro = new CDbExpression('NOW()');
			$this->idUsuario = Yii::app()->user->idUsuario;			
		}
		return true;
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
			'youtube' => 'Youtube',
			'titulo' => 'Titulo',
			'acontecendo' => 'Acontecendo',
			'dataCadastro' => 'Data Cadastro',
			'dataHangout' => 'Data Hangout',
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
		$criteria->compare('youtube',$this->youtube,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('acontecendo',$this->acontecendo,true);
		$criteria->compare('dataCadastro',$this->dataCadastro,true);
		$criteria->compare('dataHangout',$this->dataHangout,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}