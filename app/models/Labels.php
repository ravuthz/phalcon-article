<?php

class Labels extends BaseModel
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
     * @var string
     * @Column(type="string", length=250, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $description;

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
        $this->hasManyToMany(
            "id",
            "articlelabel",
            "article_id", "label_id",
            "Articles",
            "id"
        );
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'labels';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Labels[]|Labels
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Labels
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
