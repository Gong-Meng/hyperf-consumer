<?php

namespace App\Controller;

use App\JsonRpc\CalculatorServiceInterface;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Di\Annotation\Inject;

/**
 * @AutoController()
 */
class TestController extends AbstractController
{

    /**
     * @Inject()
     * @var CalculatorServiceInterface
     */
    public $calculatorService;

    public function index()
    {

        return $this->calculatorService->add(5,8);

    }

}