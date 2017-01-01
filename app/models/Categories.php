<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;
use Phalcon\Validation\Validator\PresenceOf;

class Categories extends BaseModel
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
     * @var string
     * @Column(type="string", length=250, nullable=false)
     */
    public $thumbnail;

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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'categories';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Categories[]|Categories
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Categories
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    
    public function validation()
    {
        $validator = new Validation();
        
        $validator->add("name", 
            new PresenceOf([
                "message" => "The category name is required",
            ])
        );

        $validator->add("name", 
            new Uniqueness([
                "message" => "The category name must be unique",
            ])
        );
        
        return $this->validate($validator);
    }
    
    /**
     * This event is triggered every time that a "create" or "update" action fails.
     */
    // public function notSaved()
    // {
    //     // Obtain the flash service from the DI container
    //     $flash = $this->getDI()->getFlash();

    //     $messages = $this->getMessages();

    //     // Show validation messages
    //     foreach ($messages as $message) {
    //         $flash->error($message);
    //     }
    // }
    
    // onValidationFails

}
