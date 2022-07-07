<?php


//Duelist Agents

trait duelist {

    public function agentRaze(){
        echo "This player using = Raze";
    }

    public function agentPhoenix(){
        echo "This player using = Phoenix";
    }

    public function agentReyna(){
        echo "This player using = Reyna";
    }

    public function agentYoru(){
        echo "This player using = Yoru";
    }

    public function agentNeon(){
        echo "This player using = Neon";
    }

    public function agentJett(){
        echo "This player using = Jett";
    }

}


//Initiator Agents

trait initiator {

    public function agentKAYO(){
        echo "This player using = KAYO";
    }

    public function agentSkye(){
        echo "This player using = Skye";
    }

    public function agentSova(){
        echo "This player using = Sova";
    }

    public function agentBreach(){
        echo "This player using = Breach";
    }

}


//Controller Agents

trait controller {
    public function agentOmen(){
        echo "This player using = Omen";
    }

    public function agentBrimstone(){
        echo "This player using = Brimstone";
    }

    public function agentAstra(){
        echo "This player using = Astra";
    }

    public function agentViper(){
        echo "This player using = Viper";
    }
}



//Sentinels Agents

trait sentinels {

    public function agentChamber(){
        echo "This player using = Chamber";
    }

    public function agentSage(){
        echo "This player using = Sage";
    }

    public function agentKilljoy(){
        echo "This player using = Killjoy";
    }

    public function agentCypher(){
        echo "This player using = Cypher";
    }
}


//Duelist
class Duelists {
    use duelist;
}

class Initiators {
    use initiator;
}

class Controllers {
    use controller;
}

class Sentinelss {
    use sentinels;
}


//Execute

//Team 1 agents selections !!!
echo "Team 1 Agents selection\n";

echo "1. ";
$duelist = new Duelists();
$duelist->agentJett();
echo "\n";

echo "2. ";
$duelist = new Duelists();
$duelist->agentReyna();
echo "\n";

echo "3. ";
$sentinels = new Sentinelss();
$sentinels->agentChamber();
echo "\n";

echo "4. ";
$controller = new Controllers();
$controller->agentAstra();
echo "\n";

echo "5. ";
$initiator = new Initiators();
$initiator->agentBreach();
echo "\n\n";



//Team 2 agents selections !!!
echo "Team 2 Agents selection\n";

echo "1. ";
$duelist = new Duelists();
$duelist->agentRaze();
echo "\n";

echo "2. ";
$duelist = new Sentinelss();
$duelist->agentKilljoy();
echo "\n";

echo "3. ";
$sentinels = new Sentinelss();
$sentinels->agentChamber();
echo "\n";

echo "4. ";
$controller = new Controllers();
$controller->agentBrimstone();
echo "\n";

echo "5. ";
$initiator = new Initiators();
$initiator->agentSova();
echo "\n\n";


?>