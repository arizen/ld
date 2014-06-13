<?php

class MatchHistoryController extends BaseController {

	public static function varDumpToString ($var)
	{
    ob_start();
    var_dump($var);
    $result = ob_get_clean();
    return $result;
	}

    public static function getMatchHistoryFromUser($user){
    	//comment
    //	$url= 'http://www.lolskill.net/summoner/TR/' . $user->username;

    	$url= 'http://www.lolskill.net/summoner/TR/' . $user->username ;


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

		$domString = MatchHistoryController::varDumpToString($dom);

		if(strpos($domString, 'Summoner Not Found') !== FALSE){
			//summonerNotFound
		}
		else{
			//summonerHasFound
		}
		

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
											echo $bodyElement->nodeValue;
											$explodedString = explode(" ", $bodyElement->nodeValue);
											$league = $explodedString[0];
											$user->league = $league;
											$division = $explodedString[1];
											$user->division = $division;
											$user->save();
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

				$match->user_id = $user->id;

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

						if("champion tiptip" == $class_value){
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
										$ranked_unranked = $explodedString[0];
										$solo_duo = $explodedString[1];

										$match->type = $ranked_unranked . " " . $solo_duo;
									}
									else if("outcome" == $class_value){
										$win_loss = $infoDetail->nodeValue;
									}
									else if("date tiptip" == $class_value){
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
											$summoner_name = $playerInformation->nodeValue; //takimdakilerin kullanici adi
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