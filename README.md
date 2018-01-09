# Phalcon Ethereum Integration

## Installation

* run `composer install`
* configure your web-server: apache or nginx.
* start your eth network `geth --rpc --rpcaddr "127.0.0.1" --rpcapi "admin,debug,miner,shh,txpool,personal,eth,net,web3" --dev console`
* set Ethereum config in `app/config/config.php`
* open `yourdomain.test`

## Example Usage

```php
<?php
 
use EthereumPHP\EthereumClient;
use EthereumPHP\Types\BlockHash;
use EthereumPHP\Types\BlockNumber;
 
class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $randomAddress = new \EthereumPHP\Types\Address('0x7eff122b94897ea5b0e2a9abf47b86337fafebdc');
        $randomHash = '0xb903239f8543d04b5dc1ba6579132b143087c68db1b2168786408fcbce568238';
 
        $connectionUri = sprintf(
            '%s:%s',
            $this->config->ethereum->host,
            $this->config->ethereum->port
        );
        $client = new EthereumClient($connectionUri);
 
        // net
        echo $client->net()->version().'<br>';
        echo $client->net()->listening().'<br>';
        echo $client->net()->peerCount().'<br>';

 
        // web3
        echo $client->web3()->clientVersion().'<br>';
        echo $client->web3()->sha3('0x68656c6c6f20776f726c64').'<br>';
        echo $client->eth()->protocolVersion().'<br>';
        echo $client->eth()->syncing().'<br>';
 
        // eth
        $coinbase = $client->eth()->coinbase();
        if ($coinbase) {
            echo $coinbase->toString().'<br>';
        }
        echo $client->eth()->mining().'<br>';
        echo $client->eth()->hashRate().'<br>';
        echo $client->eth()->gasPrice()->toEther().'<br>';
        foreach ($client->eth()->accounts() as $account) {
            echo $account->toString().'<br>';
        }
 
        echo $client->eth()->blockNumber().'<br>';
        echo $client->eth()->getBalance($randomAddress, new BlockNumber())->toEther().'<br>';
        echo $client->eth()->getTransactionCount($randomAddress, new BlockNumber()).'<br>';
        echo $client->eth()->getBlockTransactionCountByHash(new BlockHash($randomHash)).'<br>';
        echo $client->eth()->getUncleCountByBlockHash(new BlockHash($randomHash)).'<br>';
        echo $client->eth()->getUncleCountByBlockNumber(new BlockNumber()).'<br>';
        echo $client->eth()->getCode($randomAddress, new BlockNumber()).'<br>';
        echo $client->eth()->sign($randomAddress, '0xdeadbeaf').'<br>';
        foreach ($client->eth()->getCompilers() as $compiler) {
            echo $compiler.'<br>';
        }
        print_r($client->eth()->compileSolidity('contract test { function multiply(uint a) returns(uint d) {   return a * 7;   } }"'));

 
        // management: personal
        foreach ($client->personal()->listAccounts() as $account) {
            echo $account->toString().'<br>';
        }
        $account = $client->personal()->newAccount('test');
        echo $account->toString().'<br>';
        echo $client->personal()->unlockAccount($account, 'test', 20).'<br>';
 
        exit();
    }
}
```