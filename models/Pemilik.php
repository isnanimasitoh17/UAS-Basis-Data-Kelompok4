<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemilik".
 *
 * @property string $ID_PEMILIK
 * @property string|null $NAMA
 * @property string|null $Produk_ID_PRODUK
 * @property string|null $Pelanggan_ID_PELANGGAN
 *
 * @property Produk $produkIDPRODUK
 * @property Pelanggan $pelangganIDPELANGGAN
 */
class Pemilik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemilik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PEMILIK'], 'required'],
            [['ID_PEMILIK', 'Produk_ID_PRODUK', 'Pelanggan_ID_PELANGGAN'], 'string', 'max' => 10],
            [['NAMA'], 'string', 'max' => 50],
            [['ID_PEMILIK'], 'unique'],
            [['Produk_ID_PRODUK'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['Produk_ID_PRODUK' => 'ID_PRODUK']],
            [['Pelanggan_ID_PELANGGAN'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['Pelanggan_ID_PELANGGAN' => 'ID_PELANGGAN']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_PEMILIK' => 'Id Pemilik',
            'NAMA' => 'Nama',
            'Produk_ID_PRODUK' => 'Produk Id Produk',
            'Pelanggan_ID_PELANGGAN' => 'Pelanggan Id Pelanggan',
        ];
    }

    /**
     * Gets query for [[ProdukIDPRODUK]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdukIDPRODUK()
    {
        return $this->hasOne(Produk::className(), ['ID_PRODUK' => 'Produk_ID_PRODUK']);
    }

    /**
     * Gets query for [[PelangganIDPELANGGAN]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelangganIDPELANGGAN()
    {
        return $this->hasOne(Pelanggan::className(), ['ID_PELANGGAN' => 'Pelanggan_ID_PELANGGAN']);
    }
}
