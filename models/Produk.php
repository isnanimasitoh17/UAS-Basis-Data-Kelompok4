<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property string $ID_PRODUK
 * @property string|null $NAMA_PRODUK
 * @property int|null $STOK
 * @property float|null $HARGA
 * @property string|null $Transaksi_ID_TRANSAKSI
 *
 * @property Pemilik[] $pemiliks
 * @property Transaksi $transaksiIDTRANSAKSI
 * @property Restok[] $restoks
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PRODUK'], 'required'],
            [['STOK'], 'integer'],
            [['HARGA'], 'number'],
            [['ID_PRODUK', 'Transaksi_ID_TRANSAKSI'], 'string', 'max' => 10],
            [['NAMA_PRODUK'], 'string', 'max' => 50],
            [['ID_PRODUK'], 'unique'],
            [['Transaksi_ID_TRANSAKSI'], 'exist', 'skipOnError' => true, 'targetClass' => Transaksi::className(), 'targetAttribute' => ['Transaksi_ID_TRANSAKSI' => 'ID_TRANSAKSI']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_PRODUK' => 'Id Produk',
            'NAMA_PRODUK' => 'Nama Produk',
            'STOK' => 'Stok',
            'HARGA' => 'Harga',
            'Transaksi_ID_TRANSAKSI' => 'Transaksi Id Transaksi',
        ];
    }

    /**
     * Gets query for [[Pemiliks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemiliks()
    {
        return $this->hasMany(Pemilik::className(), ['Produk_ID_PRODUK' => 'ID_PRODUK']);
    }

    /**
     * Gets query for [[TransaksiIDTRANSAKSI]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiIDTRANSAKSI()
    {
        return $this->hasOne(Transaksi::className(), ['ID_TRANSAKSI' => 'Transaksi_ID_TRANSAKSI']);
    }

    /**
     * Gets query for [[Restoks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRestoks()
    {
        return $this->hasMany(Restok::className(), ['ID_PRODUK' => 'ID_PRODUK']);
    }
}
