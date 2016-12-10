<?php

/**
 * This is the model class for table "detail_beli".
 *
 * The followings are the available columns in table 'detail_beli':
 * @property integer $kd_beli
 * @property integer $kd_pembeli
 * @property integer $kd_barang
 *
 * The followings are the available model relations:
 * @property Barang $kdBarang
 * @property Pembeli $kdPembeli
 */
class DetailBeli extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetailBeli the static model class
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
		return 'detail_beli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_pembeli, kd_barang', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kd_beli, kd_pembeli, kd_barang', 'safe', 'on'=>'search'),
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
			'kdBarang' => array(self::BELONGS_TO, 'Barang', 'kd_barang'),
			'kdPembeli' => array(self::BELONGS_TO, 'Pembeli', 'kd_pembeli'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_beli' => 'Kd Beli',
			'kd_pembeli' => 'Kd Pembeli',
			'kd_barang' => 'Kd Barang',
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
		$criteria->compare('kd_pembeli',$this->kd_pembeli);
		$criteria->compare('kd_barang',$this->kd_barang);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}