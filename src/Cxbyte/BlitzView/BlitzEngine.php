<?php
namespace Cxbyte\BlitzView;

use Illuminate\View\Engines;

class BlitzEngine implements Engines\EngineInterface
{
    protected $config, $environment = array(), $data = array();

    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Get the evaluated contents of the view.
     *
     * @param  string $path
     * @param  array $data
     * @return string
     */
    public function get($path, array $data = array())
    {
        $this->parseData($data);

        $View = new BlitzView($this->environment['__env'], $path, $this->data);

        return $View->render();
    }

    /**
     * Parse environment and user data
     *
     * @param $data
     */
    public function parseData($data)
    {
        foreach ($data as $key => $value)
            if (is_object($value))
                $this->environment[$key] = $value;
            else
                $this->data[$key] = $value;
    }
}