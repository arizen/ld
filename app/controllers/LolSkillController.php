<?php

class LolSkillController extends BaseController {


	public static function multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
	}

	public static function varDumpToString ($var)
	{
    ob_start();
    var_dump($var);
    $result = ob_get_clean();
    return $result;
	}

    public static function getInformationFromSummoner($summoner){
    	//comment
    //	$url= 'http://www.lolskill.net/summoner/TR/' . $user->username;
    	$summonerName = $summoner->summoner_name;
    	
    	//echo $summonerName . "<br>";
    	if(strpos($summoner->summoner_name, ' ') !== FALSE){
    		 $summonerName= str_replace(" ", "%20", $summonerName);
    	}
		//echo $summonerName . "<br>";
		
    	$url= 'http://www.lolskill.net/summoner/TR/' . $summonerName ;
    	

	    $ch = curl_init();
		$timeout = 0;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10000000);
		$html = curl_exec($ch);	

		//echo htmlspecialchars($data);

		$html = preg_replace("/>s+</", "><", $html);

		$dom = new DOMDocument();
		libxml_use_internal_errors(true);
		$dom->loadHTML($html);
		$dom->preserveWhiteSpace = false;

		$domString = LolSkillController::varDumpToString($dom);

		if(strpos($domString, 'Summoner Not Found') !== FALSE){
			//summonerNotFound
		}
		else{
			//summonerHasFound
		}

		
		$divStats = $dom->getElementById('stats');
		$mk = trim($divStats->nodeValue);

		$explodedString = LolSkillController::multiexplode(array("\n"," "), $mk );

		$j = 0;
		$stat = new Stat;
		$stat->summoner_id = $summoner->id;
		for ($i=0; $i < count($explodedString); $i++) {
			//echo $explodedString[$i] . "<br>";

			if(is_numeric ($explodedString[$i]) || strpos($explodedString[$i], ',') !== FALSE || strpos($explodedString[$i], ':') !== FALSE){
				
				if($j == 0){
					$stat->level = $explodedString[$i]; //Level
				}
				else if($j == 1){
					$stat->lifetime_ip_earned = $explodedString[$i]; //Lifetime ip
				}
				else if($j == 2){
					$stat->games_played = $explodedString[$i]; //Games Played
				}
				else if($j == 3){
					$stat->most_kills = $explodedString[$i]; //Most Kills
				}
				else if($j == 4){
					$stat->kills =$explodedString[$i]; // Kills
				}
				else if($j == 5){
					$stat->most_deaths = $explodedString[$i]; //Most Deaths
				}
				else if($j == 6){
					$stat->deaths =  $explodedString[$i]; //Deaths
				}
				else if($j == 7){
					$stat->largest_killing_spree =  $explodedString[$i]; //Largest Killing Spree
				}
				else if($j == 8){
					$stat->assists =  $explodedString[$i]; //Asists
				}
				else if($j == 9){
					$stat->largest_critical_strike =  $explodedString[$i]; //Largest Critical Strike
				}
				else if($j == 10){
					$stat->minions_killed =  $explodedString[$i]; //Minions Killed
				}
				else if($j == 11){
					$stat->longest_game =  $explodedString[$i]; //Longest Game
				}
				else if($j == 12){
					$stat->monsters_killed =  $explodedString[$i]; //Monsters Killed
				}
				else if($j == 13){
					$stat->longest_time_alive =  $explodedString[$i];  //Longest Time Alive
				}
				else if($j == 14){
					$stat->gold_earned =  $explodedString[$i]; //Gold Earned
				}
				else if($j == 15){
					$stat->time_spent_dead =  $explodedString[$i]; //Time Spent Dead
				}
				else if($j == 16){
					$stat->double_kills =  $explodedString[$i]; //Double Kills
				}
				else if($j == 17){
					$stat->healing_done =  $explodedString[$i]; //Healing Done 
				}
				else if($j == 18){
					$stat->triple_kills =  $explodedString[$i]; //Triple Kills 
				}
				else if($j == 19){
					$stat->damage_dealt =  $explodedString[$i]; //Damage Dealt 
				}
				else if($j == 20){
					$stat->quadra_kills =  $explodedString[$i]; //Quadra Kills 
				}
				else if($j == 21){
					$stat->physical_damage_dealt =  $explodedString[$i]; //Physical Damage Dealt
				}
				else if($j == 22){
					$stat->penta_kills =  $explodedString[$i];  //Penta Kills 
				}
				else if($j == 23){
					$stat->magic_damage_dealt =  $explodedString[$i]; //Magic Damage Dealt 
				}
				else if($j == 24){
					$stat->turrets_destroyed =  $explodedString[$i]; //Turret Destroyed
				}
				else if($j == 25){
					$stat->damage_taken =  $explodedString[$i]; //Damage Taken
				}
				$j++;
			}
		}
		
		$stat->save();


		$divBestChamp = $dom->getElementById('bestChampions');
		$bestChampString = "";
		foreach($divBestChamp->childNodes as $eachContainer)
		{
			if( $eachContainer->nodeType == 1){
				$classValue = $eachContainer->getAttribute('class');
				if("champion tooltip"){
					$heroLink = $eachContainer->getAttribute('href');
					$explodedString = explode("/", $heroLink);

					$bestChampString = $bestChampString . $explodedString[1] . ";";
				}
			}
		}
		$summoner->best_champions = $bestChampString;
		//summoner assada save ediliyor
		
			
		$divRank = $dom->getElementById('rank');
		foreach($divRank->childNodes as $eachContainer)
		{

			if( $eachContainer->nodeType == 1){
				$id = $eachContainer->getAttribute('id');
				if ('solo' == $id ){
					foreach($eachContainer->childNodes as $eachContainerElement)
					{
						if( $eachContainerElement->nodeType == 1){
							$classValue = $eachContainerElement->getAttribute('class');
							if('body' == $classValue){
								foreach($eachContainerElement->childNodes as $bodyElement)
								{
									if( $bodyElement->nodeType == 1){
										$classValue = $bodyElement->getAttribute('class');
										if('tier' == $classValue){
											//echo $bodyElement->nodeValue;
											$explodedString = explode(" ", $bodyElement->nodeValue);
											$league = $explodedString[0];
											$summoner->league = $league;
											$division = $explodedString[1];
											$summoner->division = $division;
										}
										if('kda' == $classValue){
											$summoner->kda = $classValue;
											$summoner->save();
										}											 
									}
								}
							}
						}						
					}
				}
			}
		}

		$tableMatchHistory = $dom->getElementById('matchHistory');
		foreach($tableMatchHistory->childNodes as $eachMatch)
		{
			$class_value = $eachMatch->getAttribute('class');
			if (strpos($class_value, 'match') !== FALSE){
				$match = new Match;

				$match->summoner_id = $summoner->id;

				$explodedString = explode(" ", $class_value);

				if($explodedString[1] == 'win'){
					$match->result = "Win";
				}
				else{
					$match->result = "Loss";
				}

				foreach( $eachMatch->childNodes as $matchInformation )
				{
					if( $matchInformation->nodeType == 1){
						$class_value = $matchInformation->getAttribute('class');

						if("champion tooltip" == $class_value){
							$fc = $matchInformation->firstChild;
							$champion_href = $fc->getAttribute('href');
							$explodedString = explode("/", $champion_href);

							$champion_name = $explodedString[1]; //played champion
							$match->champion = $champion_name;
						}
						else if("info" == $class_value){
							foreach( $matchInformation->childNodes as $infoDetail )
							{
								if( $infoDetail->nodeType == 1){
									$class_value = $infoDetail->getAttribute('class');

									if("queue" == $class_value){
										$explodedString = explode(" ", $infoDetail->nodeValue);
										
										if("Ranked" == $explodedString[0]){
											$ranked_unranked = $explodedString[0];
											$solo_duo = $explodedString[1];

											$match->type = $ranked_unranked . " " . $solo_duo;
										}
										else{
											$match->type = $infoDetail->nodeValue;
										}
										
									}
									else if("outcome" == $class_value){
										$win_loss = $infoDetail->nodeValue;
									}
									else if("date tooltip" == $class_value){
										$match_time = $infoDetail->nodeValue;

										$match->time = $match_time;
									}
									else if("duration" == $class_value){
										$duration = $infoDetail->nodeValue;

										$match->duration = $duration;
									}
								}
							}
						}
						else if("matchup" == $class_value){
							$i = 0;
							foreach( $matchInformation->childNodes as $teamInformation )
							{
								if( $teamInformation->nodeType == 1){
									$teamString = "";
									foreach( $teamInformation->childNodes as $playerInformation )
									{
										if( $playerInformation->nodeType == 1){
											$summoner_name = substr($playerInformation->nodeValue,0,-1); //takimdakilerin kullanici adi, sonda bi bosluk var
											$teamString = $teamString . $summoner_name . ";";
										}
									}
									if($i == 0){
										$match->your_team = $teamString;
									}
									else{
										$match->enemy_team = $teamString;
									}
									$i++;
								}
							}
						}
						else if("stats" == $class_value){
							$explodedString = LolSkillController::multiexplode(array("\n"," ","\t"), $matchInformation->nodeValue );
							
							for ($i=0; $i < count($explodedString); $i++) {
								if($explodedString[$i] != ""){
									$match->performance = $explodedString[$i];
									if($i == 2){
										$match->performance = $explodedString[$i]; //Level
									}
									else if($i == 4){
										$match->kills = $explodedString[$i];
									}
									else if($i == 7){
										$match->deaths = $explodedString[$i];
									}
									else if($i == 10){
										$match->assists = $explodedString[$i];
									}
									else if($i == 13){
										$match->minion_kills = $explodedString[$i];
									}
									else if($i == 16){
										$match->gold_earned = $explodedString[$i];
									}
									else if($i == 19){
										$match->stealth_ward = $explodedString[$i];
									}
									else if($i == 21){
										$match->vision_ward = $explodedString[$i];
									}
								}
							}
						}
					}					
				}
				$match->save();		
			} 			  	
		}
		

		if (FALSE === $html)
	        throw new Exception(curl_error($ch), curl_errno($ch));
		
		//var_dump($data);	

		//echo curl_getinfo($ch) . '<br/>';
		//echo curl_errno($ch) . '<br/>';
		//echo curl_error($ch) . '<br/>';	

		curl_close($ch);
    	
    }

}