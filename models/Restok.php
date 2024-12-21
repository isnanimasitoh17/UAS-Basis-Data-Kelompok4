<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "restok".
 *
 * @property string $ID_RESTOK
 * @property string|null $ID_PRODUK
 * @property string|null $TGL_RESTOK
 * @property int|null $JML_RESTOK
 *
 * @property Produk $pRODUK
 */
class Restok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'restok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_RESTOK'], 'required'],
            [['TGL_RESTOK'], 'safe'],
            [['JML_RESTOK'], 'integer'],
            [['ID_RESTOK', 'ID_PRODUK'], 'string', 'max' => 10],
            [['ID_RESTOK'], 'unique'],
            [['ID_PRODUK'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['ID_PRODUK' => 'ID_PRODUK']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_RESTOK' => 'Id Restok',
            'ID_PRODUK' => 'Id Produk',
            'TGL_RESTOK' => 'Tgl Restok',
            'JML_RESTOK' => 'Jml Restok',
        ];
    }

    /**
     * Gets query for [[PRODUK]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPRODUK()
    {
        return $this->hasOne(Produk::className(), ['ID_PRODUK' => 'ID_PRODUK']);
    }
}
