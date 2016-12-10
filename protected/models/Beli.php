<?php

/**
 * This is the model class for table "beli".
 *
 * The followings are the available columns in table 'beli':
 * @property integer $kd_beli
 * @property string $tgl_beli
 * @property string $nama_pembeli
 * @property string $alamat
 * @property string $email
 * @property string $no_telefon
 * @property integer $kd_barang
 * @property integer $total_beli
 * @property integer $total_bayar
 *
 * The followings are the available model relations:
 * @property Pembeli $email0
 * @property Barang $kdBarang
 * @property DetailBeli[] $detailBelis
 */
class Beli extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Beli the static model class
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
		return 'beli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tgl_beli, nama_pembeli, alamat, email, no_telefon, kd_barang, total_beli, total_bayar', 'required'),
			array('kd_barang, total_beli, total_bayar', 'numerical', 'integerOnly'=>true),
			array('nama_pembeli', 'length', 'max'=>40),
			array('alamat', 'length', 'max'=>50),
			array('email', 'length', 'max'=>30),
			array('no_telefon', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kd_beli, tgl_beli, nama_pembeli, alamat, email, no_telefon, kd_barang, total_beli, total_bayar', 'safe', 'on'=>'search'),
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
			'email0' => array(self::BELONGS_TO, 'Pembeli', 'email'),
			'kdBarang' => array(self::BELONGS_TO, 'Barang', 'kd_barang'),
			'detailBelis' => array(self::HAS_MANY, 'DetailBeli', 'kd_beli'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_beli' => 'Kd Beli',
			'tgl_beli' => 'Tgl Beli',
			'nama_pembeli' => 'Nama Pembeli',
			'alamat' => 'Alamat',
			'email' => 'Email',
			'no_telefon' => 'No Telefon',
			'kd_barang' => 'Kd Barang',
			'total_beli' => 'Total Beli',
			'total_bayar' => 'Total Bayar',
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

		$criteria->compare('kd_beli',$this->kd_beli);
		$criteria->compare('tgl_beli',$this->tgl_beli,true);
		$criteria->compare('nama_pembeli',$this->nama_pembeli,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('no_telefon',$this->no_telefon,true);
		$criteria->compare('kd_barang',$this->kd_barang);
		$criteria->compare('total_beli',$this->total_beli);
		$criteria->compare('total_bayar',$this->total_bayar);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}