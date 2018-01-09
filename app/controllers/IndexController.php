<?php

use EthereumPHP\EthereumClient;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $connectionUri = sprintf(
            '%s:%s',
            $this->config->ethereum->host,
            $this->config->ethereum->port
        );
        $client = new EthereumClient($connectionUri);

        $accounts = [];
        foreach ($client->eth()->accounts() as $account) {
            $accounts[] = $account->toString();
        }


        $this->view->setVars([
            'accounts' => $accounts,
        ]);
    }

}

