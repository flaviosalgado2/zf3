<?php

namespace Blog\Controller;

use Blog\Model\PostTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{
    /**
     * @var PostTable
     */
    private $table;

    /**
     * BlogController constructor.
     * @param PostTable $table
     */
    public function __construct(PostTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        $postTable = $this->table;

        return new ViewModel([
            'posts' => $postTable->fetchAll()
        ]);
    }
}