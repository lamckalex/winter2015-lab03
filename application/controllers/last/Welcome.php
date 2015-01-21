<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Last
 *
 * @author Alex
 */
class Welcome extends Application {
    //put your code here
    function index()
    {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->last();
        
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        
        $this->render();
    }
    
}
