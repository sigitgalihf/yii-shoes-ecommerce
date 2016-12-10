<?php

/**
 * This is the model class for table "pembeli".
 *
 * The followings are the available columns in table 'pembeli':
 * @property string $nama_pembeli
 * @property string $password
 * @property string $alamat
 * @property string $email
 * @property string $no_telefon
 *
 * The followings are the available model relations:
 * @property Beli[] $belis
 * @property Keranjang[] $keranjangs
 */
class Pembeli extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pembeli the static model class
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
		return 'pembeli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_pembeli, password, alamat, email, no_telefon', 'required'),
			array('nama_pembeli', 'length', 'max'=>40),
			array('password, email', 'length', 'max'=>30),
			array('alamat', 'length', 'max'=>50),
			array('no_telefon', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nama_pembeli, password, alamat, email, no_telefon', 'safe', 'on'=>'search'),
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
			'belis' => array(self::HAS_MANY, 'Beli', 'email'),
			'keranjangs' => array(self::HAS_MANY, 'Keranjang', 'email'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nama_pembeli' => 'Nama Pembeli',
			'password' => 'Password',
			'alamat' => 'Alamat',
			'email' => 'Email',
			'no_telefon' => 'No Telefon',
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

		$criteria->compare('nama_pembeli',$this->nama_pembeli,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('no_telefon',$this->no_telefon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}