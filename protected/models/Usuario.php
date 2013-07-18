<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property integer $idPerfil
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property string $dataCadastro
 *
 * The followings are the available model relations:
 * @property Hangouts[] $hangouts
 * @property Perfil $idPerfil0
 */
class Usuario extends CActiveRecord
{
	//Chave de Encriptação da senha	
	private $_chaveEncrypt = 'a%^4rasdf@(wS*';
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idPerfil, nome, email, senha, dataCadastro', 'required'),
			array('idPerfil', 'numerical', 'integerOnly'=>true),
			array('nome, email', 'length', 'max'=>150),
			array('senha', 'length', 'max'=>35),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsuario, idPerfil, nome, email, senha, dataCadastro', 'safe', 'on'=>'search'),
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
			'hangouts' => array(self::HAS_MANY, 'Hangouts', 'idUsuario'),
			'idPerfil0' => array(self::BELONGS_TO, 'Perfil', 'idPerfil'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Cod. Usuario',
			'idPerfil' => 'Perfil',
			'nome' => 'Nome',
			'email' => 'Email',
			'senha' => 'Senha',
			'dataCadastro' => 'Data Cadastro',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('idPerfil',$this->idPerfil);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('dataCadastro',$this->dataCadastro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function encrypt($value)
	{		
		return md5($this->_chaveEncrypt.$value);
	}
}