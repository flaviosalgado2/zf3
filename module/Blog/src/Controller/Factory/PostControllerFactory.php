<?php

namespace Blog\Controller\Factory;

use Blog\Controller\PostController;
use Blog\Form\PostForm;
use Blog\Model\PostTable;
use Interop\Container\ContainerInterface;

class PostControllerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        // TODO: Implement __invoke() method.
        $postTable = $container->get(PostTable::class);
        //$postForm = $container->get(PostForm::class);

        return new PostController($postTable);
    }
}