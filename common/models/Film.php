<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string|null $main_image
 * @property string|null $image1
 * @property string|null $image2
 * @property string|null $image3
 * @property string|null $image4
 * @property string|null $image5
 * @property string|null $link_trayler
 * @property int|null $type_3d
 * @property int|null $type_2d
 * @property int|null $type_imax
 * @property string $seo_url
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 */
class Film extends \yii\db\ActiveRecord
{
    public $mimage;
	public $image01;
	public $image02;
	public $image03;
	public $image04;
	public $image05;
	/**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content', 'seo_url'], 'required'],
            [['content', 'link_trayler'], 'string'],
            [['type_3d', 'type_2d', 'type_imax'], 'integer'],
			[['mimage'], 'safe'],
            [['mimage'], 'file', 'extensions'=>'jpg, gif, png'],
            [['mimage'], 'file', 'maxSize'=>'100000'],
			[['image01'], 'safe'],
            [['image01'], 'file', 'extensions'=>'jpg, gif, png'],
            [['image01'], 'file', 'maxSize'=>'100000'],
			[['image02'], 'safe'],
            [['image02'], 'file', 'extensions'=>'jpg, gif, png'],
            [['image02'], 'file', 'maxSize'=>'100000'],
			[['image03'], 'safe'],
            [['image03'], 'file', 'extensions'=>'jpg, gif, png'],
            [['image03'], 'file', 'maxSize'=>'100000'],
			[['image04'], 'safe'],
            [['image04'], 'file', 'extensions'=>'jpg, gif, png'],
            [['image04'], 'file', 'maxSize'=>'100000'],
			[['image05'], 'safe'],
            [['image05'], 'file', 'extensions'=>'jpg, gif, png'],
            [['image05'], 'file', 'maxSize'=>'100000'],
            [['name', 'main_image', 'image1', 'image2', 'image3', 'image4', 'image5', 'seo_url', 'seo_title', 'seo_description', 'seo_keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'content' => 'Content',
            'main_image' => 'Main Image',
            'image1' => 'Image1',
            'image2' => 'Image2',
            'image3' => 'Image3',
            'image4' => 'Image4',
            'image5' => 'Image5',
            'link_trayler' => 'Link Trayler',
            'type_3d' => 'Type 3d',
            'type_2d' => 'Type 2d',
            'type_imax' => 'Type Imax',
            'seo_url' => 'Seo Url',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'seo_keywords' => 'Seo Keywords',
        ];
    }
}
