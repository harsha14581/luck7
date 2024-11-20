<?php



class Luck7Game
{
    public $lucky_7_reward = 30;
    public $below_or_above_7_reward = 20;
    public $wallet_amount = 100;
    public $bet_amount = 10;
    //$mail_id = 'noelin@ascendeum.com'

    public function play($game_condition_option)
    {
        print($this->wallet_amount);
        $this->wallet_amount = $this->wallet_amount - $this->bet_amount;
        $dice_1 = rand(1,6);
        $dice_2 = rand(1,6);
        print($dice_1);
        print($dice_2);
        $sum_of_dice = $dice_1 + $dice_2;

        if($sum_of_dice < 7 && $game_condition_option == "Below 7"){
            $this->wallet_amount = $this->wallet_amount + $this->below_or_above_7_reward;
        } else  if($sum_of_dice > 7 && $game_condition_option == "Above 7"){
            $this->wallet_amount = $this->wallet_amount + $this->below_or_above_7_reward;
            print($this->wallet_amount);
        } else if($sum_of_dice == 7 && $game_condition_option == "Lucky 7"){
            $this->wallet_amount = $this->wallet_amount + $this->lucky_7_reward;
        }  

        print($this->wallet_amount);

    }

    public function resetAndPlay()
    {
        $this->wallet_amount = 100;
        print("Wallet amount got resetted to ". $this->wallet_amount);

    }

    function continueToPlay($game_condition_option)
    {
        $this->play($game_condition_option);
    }

}

$luck7game = new Luck7Game();
$luck7game->play("Above 7");
//$luck7game->resetAndPlay();
//$luck7game->continueToPlay("Lucky 7");


?>