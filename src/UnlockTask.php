<?php

namespace JJArroyo\LaravelIlovepdf;
/**
 * Class UnlockTask
 *
 * @package JJArroyo\LaravelIlovepdf
 */
class UnlockTask extends Task
{

    /**
     * UnlockTask constructor.
     * @param string $publicKey
     * @param string $secretKey
     */
    function __construct($publicKey, $secretKey)
    {
        $this->tool = 'unlock';
        parent::__construct($publicKey, $secretKey, true);
    }
}
