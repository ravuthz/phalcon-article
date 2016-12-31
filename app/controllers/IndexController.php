<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->disable();

        $cate1 = Categories::find(1)->getFirst();
        $art1 = Articles::findFirst(1);
        $lab1 = Labels::findFirst(1);
        
        echo "<pre>";
        print_r($cate1->toArray());
        echo "Cate 1 has artcles " . $cate1->countArticles() . PHP_EOL;
        print_r($cate1->getRelated("Articles")->toArray());
        print_r($cate1->getArticles()->toArray());
        print_r($cate1->articles->toArray());
        
        echo "Article 1 in the category " . $art1->categories->name . PHP_EOL;
        print_r($art1->getRelated('Categories')->toArray());
        print_r($art1->getCategories()->toArray());
        print_r($art1->categories->toArray());
        
        echo "Label 1 is " . $lab1->name;
        print_r($art1->labels->toArray());
        
        print_r($lab1->articles->toArray());

        echo "</pre>";
    }

}

