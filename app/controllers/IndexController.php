<?php

use EthereumPHP\EthereumClient;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $client = new EthereumClient('http://192.168.100.1:8545');

        $accounts = [];
        foreach ($client->eth()->accounts() as $account) {
            $accounts[] = $account->toString();
        }


        $this->view->setVars([
            'accounts' => $accounts,
        ]);
    }

}

