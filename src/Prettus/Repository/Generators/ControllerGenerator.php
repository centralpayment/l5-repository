<?php namespace Prettus\Repository\Generators;

/**
 * Class RepositoryInterfaceGenerator
 * @package Prettus\Repository\Generators
 */
class ControllerGenerator extends Generator {

    /**
     * Get stub name.
     *
     * @var string
     */
    protected $stub = 'controller';

    /**
     * Get root namespace.
     *
     * @return string
     */
    public function getRootNamespace()
    {
        return parent::getRootNamespace().'Repositories\\';
    }

    /**
     * Get base path of destination file.
     *
     * @return string
     */
    public function getBasePath()
    {
        return app_path();
    }

    /**
     * Get destination path for generated file.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->getBasePath() . '/Http/Controllers/' . $this->getName() . 'Controller.php';
    }
}