<?php

class CategoriesController extends \Phalcon\Mvc\Controller
{
    public function indexAction() {
        $this->view->siteTitle = 'Categories';
        $this->view->pageTitle = 'List all categories';
        $this->view->categories = Categories::find();
    }
    
    public function newAction() {
        $this->view->category = new Categories();
    }
    
    public function editAction($id) {
        $this->view->category = Categories::findFirst($id);
    }
    
    public function removeAction($id) {
        $this->view->category = Categories::findFirst($id);
    }
    
    public function createAction() {
        $category = new Categories();
        $category->name = $this->request->getPost('name');
        $category->thumbnail = $this->request->getPost('thumbnail');
        $category->description = $this->request->getPost('description');
        $category->author_id = 1;
        if (!$category->create()) {
            foreach ($category->getMessages() as $message) {
                $this->flashSession->error($message);               
            }
        } else {
            $this->flashSession->success("Category was created successfully");
        }
        return $this->response->redirect("categories/new");
    }
    
    public function updateAction($id) {
        $category = Categories::findFirst($id);
        $category->name = $this->request->getPost('name');
        $category->thumbnail = $this->request->getPost('thumbnail');
        $category->description = $this->request->getPost('description');
        $category->author_id = 1;
        if (!$category->update()) {
            foreach ($category->getMessages() as $message) {
                $this->flashSession->error($message);               
            }
        } else {
            $this->flashSession->success("Category was updated successfully");
        }
        return $this->response->redirect("categories/edit/$id");
    }
    
    public function deleteAction($id) {
        $category = Categories::find($id);
        if (!$category->delete()) {
            foreach ($category->getMessages() as $message) {
                $this->flashSession->error($message);
            }
        } else {
            $this->flashSession->success("Category was deleted successfully");
        }
        return $this->response->redirect("categories");
    }
}


