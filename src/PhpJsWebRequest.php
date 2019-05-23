<?php

namespace Klepak\PhpJsWebRequest;

class PhpJsWebRequest
{
    private $nodeExecutablePath = 'C:\Program Files\nodejs\node.exe';

    public function setNodeExecutablePath($path)
    {
        $this->nodeExecutablePath = $path;

        return $this;
    }

    public function get($url)
    {
        $command = [
            'url' => $url,
            'action' => 'content',
            'options' => [
                'args' => [],
                'viewport' => [
                    'width' => 800,
                    'height' => 600
                ],
                'displayHeaderFooter' => false
            ]
        ];

        $command = str_replace('"', '\"', (json_encode($command)));
        $jsPath = __DIR__ . "/../bin/browser.js";

        return shell_exec("\"{$this->nodeExecutablePath}\" \"$jsPath\" $command");
    }
}
