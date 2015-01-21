<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of first
 *
 * @author Alex
 */
class First extends Application{
    //put your code here
    function index()
    {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->first();
        
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        
        $this->render();
    }
    
    function zzz()
    {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get(1);
        
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        
        $this->render();        
    }
    
    function gimme($input)
    {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get(input);
        
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        
        $this->render();                
    }
}
