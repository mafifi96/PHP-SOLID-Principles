<?php

namespace solid\IS;

class ServerDeploy {

    public function DeployForPHP(PHPInterface $server)
    {

        return $server->php();

    }

    public function DeployForNode(NodeInterface $server)
    {

        return $server->node();

    }

    public function DeployForASP(ASPInterface $server)
    {

        return $server->ASP();

    }

    


}