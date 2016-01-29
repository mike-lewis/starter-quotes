<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/28/2016
 * Time: 1:46 PM
 */

class Wise extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    function bingo()
    {
        $record = $this->quotes->get(6);
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';	// this is the view we want shown

        $this->render();
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */