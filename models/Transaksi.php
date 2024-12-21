<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property string $ID_TRANSAKSI
 * @property string|null $ID_PELANGGAN
 * @property string|null $TGL_TRANSAKSI
 * @property int|null $JUMLAH
 *
 * @property Produk[] $produks
 * @property Pelanggan $pELANGGAN
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_TRANSAKSI'], 'required'],
            [['TGL_TRANSAKSI'], 'safe'],
            [['JUMLAH'], 'integer'],
            [['ID_TRANSAKSI', 'ID_PELANGGAN'], 'string', 'max' => 10],
            [['ID_TRANSAKSI'], 'unique'],
            [['ID_PELANGGAN'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['ID_PELANGGAN' => 'ID_PELANGGAN']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_TRANSAKSI' => 'Id Transaksi',
            'ID_PELANGGAN' => 'Id Pelanggan',
            'TGL_TRANSAKSI' => 'Tgl Transaksi',
            'JUMLAH' => 'Jumlah',
        ];
    }

    /**
     * Gets query for [[Produks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::className(), ['Transaksi_ID_TRANSAKSI' => 'ID_TRANSAKSI']);
    }

    /**
     * Gets query for [[PELANGGAN]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPELANGGAN()
    {
        return $this->hasOne(Pelanggan::className(), ['ID_PELANGGAN' => 'ID_PELANGGAN']);
    }
}
