<?php

namespace App\ChainResponsability;

abstract class AbstractHandler implements Handler
{

    private $nextHandler;
   
    # я знаю, что в меня нужно ложить собственный класс
    # и я верну экземпляр этого класса
    public function setNext(Handler $handler):Handler
    {
     
        $this->nextHandler = $handler;
        return $handler;
    }
    
    # я знаю, что в меня нужно ложить дату
    # и если есть в наличии обработчик
    # то я верну  метод  "handle" этого обработчика
    # и положу в этот метод дату
    # если нет в наличии оброботчика,то верну null
    public function handle($request)
    {
        //dd($request);
        if($this->nextHandler && $request != 'some4')
        {
            return $this->nextHandler->handle($request);
        }elseif($this->nextHandler && $request == 'some4')
        {
            return nullaefasdad;
        }
        
        return null;
    }
}