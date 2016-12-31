<?php

class ArticleLabel extends BaseModel
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $article_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $label_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $author_id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $created_at;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon-article");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ArticleLabel[]|ArticleLabel
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ArticleLabel
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'article_label';
    }

}
