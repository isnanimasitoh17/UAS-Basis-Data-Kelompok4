<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property string $ID_PELANGGAN
 * @property string|null $KONTAK
 * @property string|null $NAMA_PRODUK
 *
 * @property Pemilik[] $pemiliks
 * @property Transaksi[] $transaksis
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PELANGGAN'], 'required'],
            [['ID_PELANGGAN'], 'string', 'max' => 10],
            [['KONTAK'], 'string', 'max' => 15],
            [['NAMA_PRODUK'], 'string', 'max' => 50],
            [['ID_PELANGGAN'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_PELANGGAN' => 'Id Pelanggan',
            'KONTAK' => 'Kontak',
            'NAMA_PRODUK' => 'Nama Produk',
        ];
    }

    /**
     * Gets query for [[Pemiliks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemiliks()
    {
        return $this->hasMany(Pemilik::className(), ['Pelanggan_ID_PELANGGAN' => 'ID_PELANGGAN']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['ID_PELANGGAN' => 'ID_PELANGGAN']);
    }
}
