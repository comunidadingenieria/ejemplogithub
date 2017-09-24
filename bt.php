<?php
				define('BOT_TOKEN','423664442:AAHUt28V7GqmMETl9MVwMJRrXcbyaRmpFq4');
				define('CHAT_ID','136385178');
				define('API_URL','https://api.telegram.org/bot'.BOT_TOKEN.'/');
				enviar_telegram('PELIGRO ACCESO DESDE 192.168.0.1');
function enviar_telegram($msj)
					{
						$queryArray=[ 
						'chat_id'=> CHAT_ID,
						'text'=>$msj, ];
						$url='https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'.http_build_query($queryArray);
						$result=file_get_contents($url);
					}


echo "hla..";
?>
