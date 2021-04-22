<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "afisha".
 *
 * @property int $id
 * @property string $name
 * @property string|null $short_content
 * @property string $content
 * @property string|null $image
 * @property string|null $seo_url
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 */
class Afisha extends \yii\db\ActiveRecord
{
    public $mimage;
	
	/**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'afisha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content'], 'required'],
            [['short_content', 'content'], 'string'],
			[['mimage'], 'safe'],
            [['mimage'], 'file', 'extensions'=>'jpg, gif, png'],
            [['mimage'], 'file', 'maxSize'=>'100000'],
            [['name', 'image', 'seo_url', 'seo_title', 'seo_description', 'seo_keywords'], 'string', 'max' => 255],
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
            'short_content' => 'Short Content',
            'content' => 'Content',
            'image' => 'Image',
            'seo_url' => 'Seo Url',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'seo_keywords' => 'Seo Keywords',
        ];
    }
}
