<?php
namespace Cxbyte\BlitzView;

use \Illuminate\View;

class BlitzView extends View\View
{
    protected $engine = 'blitz';

    public function __construct($environment, $path, array $data = array())
    {
        $this->environment = $environment;
        $this->path = $path;
        $this->view = new \Blitz($path);
        $this->data = $data;
    }

    public function render()
    {
        return $this->view->parse($this->data);
    }
}