<?php

/**
 *
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */

class First extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    public function _remap($method)
    {
        if($method == 'sleep')
        {
            $this->zzz();
        }
        else
        {
            echo 'not found';
        }
    }

    function index()
    {
        $record                 = $this->quotes->get(1);
        $this->data             = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';	// this is the view we want shown

        $this->render();
    }

    function zzz()
    {
        $record                 = $this->quotes->get(1);
        $this->data             = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';	// this is the view we want shown

        $this->render();
    }
}

/* End of file First.php */
/* Location: application/controllers/First.php */

