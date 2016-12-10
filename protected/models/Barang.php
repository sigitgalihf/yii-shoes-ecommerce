<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property integer $kd_barang
 * @property string $nama_barang
 * @property string $jenis_barang
 * @property integer $stok
 * @property string $warna_barang
 * @property string $images
 * @property integer $harga
 *
 * The followings are the available model relations:
 * @property Beli[] $belis
 * @property DetailBeli[] $detailBelis
 */
class Barang extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Barang the static model class
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
		return 'barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stok, harga, ukuran', 'numerical', 'integerOnly'=>true),
			array('nama_barang', 'length', 'max'=>40),
			array('jenis_barang', 'length', 'max'=>25),
			array('warna_barang', 'length', 'max'=>15),
			array('images', 'file', 'allowEmpty'=>'true', 'maxSize'=>1024*1024*5,
				'types'=>'jpg,png,jpeg','tooLarge'=>'Ukuran File tidak lebih dar 5MB',
				'wrongType'=>'Jenis File hanya JPG, JPEG atau PNG',
				'on'=>'insert'),
			array('images', 'file', 'allowEmpty'=>'true', 'maxSize'=>1024*1024*5,
				'types'=>'jpg,png,jpeg','tooLarge'=>'Ukuran File tidak lebih dar 5MB',
				'wrongType'=>'Jenis File hanya JPG, JPEG atau PNG',
				'except'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kd_barang, nama_barang, jenis_barang, stok, warna_barang, images, harga, ukuran', 'safe', 'on'=>'search'),
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
			'belis' => array(self::HAS_MANY, 'Beli', 'kd_barang'),
			'detailBelis' => array(self::HAS_MANY, 'DetailBeli', 'kd_barang'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_barang' => 'Kd Barang',
			'nama_barang' => 'Nama Barang',
			'jenis_barang' => 'Jenis Barang',
			'stok' => 'Stok',
			'warna_barang' => 'Warna Barang',
			'images' => 'Images',
			'harga' => 'Harga',
			'ukuran' => 'Ukuran',
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

		$criteria->compare('kd_barang',$this->kd_barang);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('jenis_barang',$this->jenis_barang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->compare('warna_barang',$this->warna_barang,true);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('ukuran',$this->ukuran);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}