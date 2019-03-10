<?php
/* 
 * Files,Languages and functions
 * Author: EDC Team
 * Since: 1.2
 */

$sora_names = array('Quran','Al-Fatihah ( The Opening )','Al-Baqarah ( The Cow )','Al-Imran ( The Famiy of Imran )','An-Nisa ( The Women )','Al-Maidah ( The Table spread with Food )','Al-An&apos;am ( The Cattle )','Al-A&apos;raf (The Heights )','Al-Anfal ( The Spoils of War )','At-Taubah ( The Repentance )','Yunus ( Jonah )'
	,'Hud','Yusuf (Joseph )','Ar-Ra&apos;d ( The Thunder )','Ibrahim ( Abraham )','Al-Hijr ( The Rocky Tract )','An-Nahl ( The Bees )','Al-Isra ( The Night Journey )','Al-Kahf ( The Cave )','Maryam ( Mary )','Taha','Al-Anbiya ( The Prophets )','Al-Hajj ( The Pilgrimage )','Al-Mu&apos;minoon ( The Believers )','An-Noor ( The Light )','Al-Furqan (The Criterion )','Ash-Shuara ( The Poets )','An-Naml (The Ants )'
	,'Al-Qasas ( The Stories )','Al-Ankaboot ( The Spider )','Ar-Room ( The Romans )','Luqman','As-Sajdah ( The Prostration )','Al-Ahzab ( The Combined Forces )','Saba ( Sheba )','Fatir ( The Orignator )','Ya-seen','As-Saaffat ( Those Ranges in Ranks )','Sad ( The Letter Sad )','Az-Zumar ( The Groups )','Ghafir ( The Forgiver God )','Fussilat ( Explained in Detail )','Ash-Shura (Consultation )','Az-Zukhruf ( The Gold Adornment )','Ad-Dukhan ( The Smoke )','Al-Jathiya ( Crouching )','Al-Ahqaf ( The Curved Sand-hills )'
	,'Muhammad','Al-Fath ( The Victory )','Al-Hujurat ( The Dwellings )','Qaf ( The Letter Qaf )','Adh-Dhariyat ( The Wind that Scatter )','At-Tur ( The Mount )','An-Najm ( The Star )','Al-Qamar ( The Moon )','Ar-Rahman ( The Most Graciouse )','Al-Waqi&apos;ah ( The Event )','Al-Hadid ( The Iron )','Al-Mujadilah ( She That Disputeth )','Al-Hashr ( The Gathering )','Al-Mumtahanah ( The Woman to be examined )','As-Saff ( The Row )','Al-Jumu&apos;ah ( Friday )','Al-Munafiqoon ( The Hypocrites )','At-Taghabun ( Mutual Loss & Gain )','At-Talaq ( The Divorce )'
	,'At-Tahrim ( The Prohibition )','Surah Al-Mulk ( Dominion )','Al-Qalam ( The Pen )','Al-Haaqqah ( The Inevitable )','Al-Ma&apos;arij (The Ways of Ascent )','Nooh','Al-Jinn ( The Jinn )','Al-Muzzammil (The One wrapped in Garments)','Al-Muddaththir ( The One Enveloped )','Al-Qiyamah ( The Resurrection )','Al-Insan ( Man )','Al-Mursalat ( Those sent forth )','An-Naba&apos; ( The Great News )','An-Nazi&apos;at ( Those who Pull Out )','Abasa ( He frowned )','At-Takwir ( The Overthrowing )','Al-Infitar ( The Cleaving )','Al-Mutaffifin (Those Who Deal in Fraud)','Al-Inshiqaq (The Splitting Asunder)','Al-Burooj ( The Big Stars )','At-Tariq ( The Night-Comer )','Al-A&apos;la ( The Most High )'
	,'Al-Ghashiya ( The Overwhelming )','Al-Fajr ( The Dawn )','Al-Balad ( The City )','Ash-Shams ( The Sun )','Al-Layl ( The Night )','Ad-Dhuha ( The Forenoon )','As-Sharh ( The Opening Forth)','At-Tin ( The Fig )','Al-&apos;alaq ( The Clot )','Al-Qadr ( The Night of Decree )','Al-Bayyinah ( The Clear Evidence )','Az-Zalzalah ( The Earthquake )','Al-&apos;adiyat ( Those That Run )','Al-Qari&apos;ah ( The Striking Hour )','At-Takathur ( The piling Up )','Al-Asr ( The Time )','Al-Humazah ( The Slanderer )','Al-Fil ( The Elephant )','Quraish','Al-Ma&apos;un ( Small Kindnesses )','Al-Kauther ( A River in Paradise)','Al-Kafiroon ( The Disbelievers )','An-Nasr ( The Help )','Al-Masad ( The Palm Fibre )','Al-Ikhlas ( Sincerity )','Al-Falaq ( The Daybreak )','An-Nas ( Mankind )');


function mp3Translations_get_languages($id=8, $keyname="title", $type=0){
	$id = intval($id);
	$mp3Translations_Languages = array (
		"1" => array ( 
			"id" => "8",
			"title" => "Mp3 Quran in english",
			"language" => "English",
			"Twitter" => "https://twitter.com/MP3_Quran",
			"Facebook" => "https://www.facebook.com/freeMP3Quran/",
			"G+" => "https://plus.google.com/+TruemuslimsNet-Mp3Quran",
			"Youtube" => "https://www.youtube.com/c/QuranMp3TrueMuslims",
			"Android" => "https://play.google.com/store/apps/details?id=mp3.quran",
			"Apple" => "https://itunes.apple.com/us/app/quran-mp3-quran-in-all-languages/id1235823046?ls=1&mt=8",
			"MS" => "https://www.microsoft.com/en-us/store/p/mp3-quran-in-all-languages/9pmbbm5184w9"	)
	);
	if($type == 1){
		return $mp3Translations_Languages;
	}else{
		return $mp3Translations_Languages[$id][$keyname];
	}
}

function mp3Translations_get_sounds($id=8){
	
	$mp3Translations_sounds_8[] = array("1","http://www.truemuslims.net/download.php?path=Quran/English/001.mp3");
	$mp3Translations_sounds_8[] = array("2","http://www.truemuslims.net/download.php?path=Quran/English/002.mp3");
	$mp3Translations_sounds_8[] = array("3","http://www.truemuslims.net/download.php?path=Quran/English/003.mp3");
	$mp3Translations_sounds_8[] = array("4","http://www.truemuslims.net/download.php?path=Quran/English/004.mp3");
	$mp3Translations_sounds_8[] = array("5","http://www.truemuslims.net/download.php?path=Quran/English/005.mp3");
	$mp3Translations_sounds_8[] = array("6","http://www.truemuslims.net/download.php?path=Quran/English/006.mp3");
	$mp3Translations_sounds_8[] = array("7","http://www.truemuslims.net/download.php?path=Quran/English/007.mp3");
	$mp3Translations_sounds_8[] = array("8","http://www.truemuslims.net/download.php?path=Quran/English/008.mp3");
	$mp3Translations_sounds_8[] = array("9","http://www.truemuslims.net/download.php?path=Quran/English/009.mp3");
	$mp3Translations_sounds_8[] = array("10","http://www.truemuslims.net/download.php?path=Quran/English/010.mp3");
	$mp3Translations_sounds_8[] = array("11","http://www.truemuslims.net/download.php?path=Quran/English/011.mp3");
	$mp3Translations_sounds_8[] = array("12","http://www.truemuslims.net/download.php?path=Quran/English/012.mp3");
	$mp3Translations_sounds_8[] = array("13","http://www.truemuslims.net/download.php?path=Quran/English/013.mp3");
	$mp3Translations_sounds_8[] = array("14","http://www.truemuslims.net/download.php?path=Quran/English/014.mp3");
	$mp3Translations_sounds_8[] = array("15","http://www.truemuslims.net/download.php?path=Quran/English/015.mp3");
	$mp3Translations_sounds_8[] = array("16","http://www.truemuslims.net/download.php?path=Quran/English/016.mp3");
	$mp3Translations_sounds_8[] = array("17","http://www.truemuslims.net/download.php?path=Quran/English/017.mp3");
	$mp3Translations_sounds_8[] = array("18","http://www.truemuslims.net/download.php?path=Quran/English/018.mp3");
	$mp3Translations_sounds_8[] = array("19","http://www.truemuslims.net/download.php?path=Quran/English/019.mp3");
	$mp3Translations_sounds_8[] = array("20","http://www.truemuslims.net/download.php?path=Quran/English/020.mp3");
	$mp3Translations_sounds_8[] = array("21","http://www.truemuslims.net/download.php?path=Quran/English/021.mp3");
	$mp3Translations_sounds_8[] = array("22","http://www.truemuslims.net/download.php?path=Quran/English/022.mp3");
	$mp3Translations_sounds_8[] = array("23","http://www.truemuslims.net/download.php?path=Quran/English/023.mp3");
	$mp3Translations_sounds_8[] = array("24","http://www.truemuslims.net/download.php?path=Quran/English/024.mp3");
	$mp3Translations_sounds_8[] = array("25","http://www.truemuslims.net/download.php?path=Quran/English/025.mp3");
	$mp3Translations_sounds_8[] = array("26","http://www.truemuslims.net/download.php?path=Quran/English/026.mp3");
	$mp3Translations_sounds_8[] = array("27","http://www.truemuslims.net/download.php?path=Quran/English/027.mp3");
	$mp3Translations_sounds_8[] = array("28","http://www.truemuslims.net/download.php?path=Quran/English/028.mp3");
	$mp3Translations_sounds_8[] = array("29","http://www.truemuslims.net/download.php?path=Quran/English/029.mp3");
	$mp3Translations_sounds_8[] = array("30","http://www.truemuslims.net/download.php?path=Quran/English/030.mp3");
	$mp3Translations_sounds_8[] = array("31","http://www.truemuslims.net/download.php?path=Quran/English/031.mp3");
	$mp3Translations_sounds_8[] = array("32","http://www.truemuslims.net/download.php?path=Quran/English/032.mp3");
	$mp3Translations_sounds_8[] = array("33","http://www.truemuslims.net/download.php?path=Quran/English/033.mp3");
	$mp3Translations_sounds_8[] = array("34","http://www.truemuslims.net/download.php?path=Quran/English/034.mp3");
	$mp3Translations_sounds_8[] = array("35","http://www.truemuslims.net/download.php?path=Quran/English/035.mp3");
	$mp3Translations_sounds_8[] = array("36","http://www.truemuslims.net/download.php?path=Quran/English/036.mp3");
	$mp3Translations_sounds_8[] = array("37","http://www.truemuslims.net/download.php?path=Quran/English/037.mp3");
	$mp3Translations_sounds_8[] = array("38","http://www.truemuslims.net/download.php?path=Quran/English/038.mp3");
	$mp3Translations_sounds_8[] = array("39","http://www.truemuslims.net/download.php?path=Quran/English/039.mp3");
	$mp3Translations_sounds_8[] = array("40","http://www.truemuslims.net/download.php?path=Quran/English/040.mp3");
	$mp3Translations_sounds_8[] = array("41","http://www.truemuslims.net/download.php?path=Quran/English/041.mp3");
	$mp3Translations_sounds_8[] = array("42","http://www.truemuslims.net/download.php?path=Quran/English/042.mp3");
	$mp3Translations_sounds_8[] = array("43","http://www.truemuslims.net/download.php?path=Quran/English/043.mp3");
	$mp3Translations_sounds_8[] = array("44","http://www.truemuslims.net/download.php?path=Quran/English/044.mp3");
	$mp3Translations_sounds_8[] = array("45","http://www.truemuslims.net/download.php?path=Quran/English/045.mp3");
	$mp3Translations_sounds_8[] = array("46","http://www.truemuslims.net/download.php?path=Quran/English/046.mp3");
	$mp3Translations_sounds_8[] = array("47","http://www.truemuslims.net/download.php?path=Quran/English/047.mp3");
	$mp3Translations_sounds_8[] = array("48","http://www.truemuslims.net/download.php?path=Quran/English/048.mp3");
	$mp3Translations_sounds_8[] = array("49","http://www.truemuslims.net/download.php?path=Quran/English/049.mp3");
	$mp3Translations_sounds_8[] = array("50","http://www.truemuslims.net/download.php?path=Quran/English/050.mp3");
	$mp3Translations_sounds_8[] = array("51","http://www.truemuslims.net/download.php?path=Quran/English/051.mp3");
	$mp3Translations_sounds_8[] = array("52","http://www.truemuslims.net/download.php?path=Quran/English/052.mp3");
	$mp3Translations_sounds_8[] = array("53","http://www.truemuslims.net/download.php?path=Quran/English/053.mp3");
	$mp3Translations_sounds_8[] = array("54","http://www.truemuslims.net/download.php?path=Quran/English/054.mp3");
	$mp3Translations_sounds_8[] = array("55","http://www.truemuslims.net/download.php?path=Quran/English/055.mp3");
	$mp3Translations_sounds_8[] = array("56","http://www.truemuslims.net/download.php?path=Quran/English/056.mp3");
	$mp3Translations_sounds_8[] = array("57","http://www.truemuslims.net/download.php?path=Quran/English/057.mp3");
	$mp3Translations_sounds_8[] = array("58","http://www.truemuslims.net/download.php?path=Quran/English/058.mp3");
	$mp3Translations_sounds_8[] = array("59","http://www.truemuslims.net/download.php?path=Quran/English/059.mp3");
	$mp3Translations_sounds_8[] = array("60","http://www.truemuslims.net/download.php?path=Quran/English/060.mp3");
	$mp3Translations_sounds_8[] = array("61","http://www.truemuslims.net/download.php?path=Quran/English/061.mp3");
	$mp3Translations_sounds_8[] = array("62","http://www.truemuslims.net/download.php?path=Quran/English/062.mp3");
	$mp3Translations_sounds_8[] = array("63","http://www.truemuslims.net/download.php?path=Quran/English/063.mp3");
	$mp3Translations_sounds_8[] = array("64","http://www.truemuslims.net/download.php?path=Quran/English/064.mp3");
	$mp3Translations_sounds_8[] = array("65","http://www.truemuslims.net/download.php?path=Quran/English/065.mp3");
	$mp3Translations_sounds_8[] = array("66","http://www.truemuslims.net/download.php?path=Quran/English/066.mp3");
	$mp3Translations_sounds_8[] = array("67","http://www.truemuslims.net/download.php?path=Quran/English/067.mp3");
	$mp3Translations_sounds_8[] = array("68","http://www.truemuslims.net/download.php?path=Quran/English/068.mp3");
	$mp3Translations_sounds_8[] = array("69","http://www.truemuslims.net/download.php?path=Quran/English/069.mp3");
	$mp3Translations_sounds_8[] = array("70","http://www.truemuslims.net/download.php?path=Quran/English/070.mp3");
	$mp3Translations_sounds_8[] = array("71","http://www.truemuslims.net/download.php?path=Quran/English/071.mp3");
	$mp3Translations_sounds_8[] = array("72","http://www.truemuslims.net/download.php?path=Quran/English/072.mp3");
	$mp3Translations_sounds_8[] = array("73","http://www.truemuslims.net/download.php?path=Quran/English/073.mp3");
	$mp3Translations_sounds_8[] = array("74","http://www.truemuslims.net/download.php?path=Quran/English/074.mp3");
	$mp3Translations_sounds_8[] = array("75","http://www.truemuslims.net/download.php?path=Quran/English/075.mp3");
	$mp3Translations_sounds_8[] = array("76","http://www.truemuslims.net/download.php?path=Quran/English/076.mp3");
	$mp3Translations_sounds_8[] = array("77","http://www.truemuslims.net/download.php?path=Quran/English/077.mp3");
	$mp3Translations_sounds_8[] = array("78","http://www.truemuslims.net/download.php?path=Quran/English/078.mp3");
	$mp3Translations_sounds_8[] = array("79","http://www.truemuslims.net/download.php?path=Quran/English/079.mp3");
	$mp3Translations_sounds_8[] = array("80","http://www.truemuslims.net/download.php?path=Quran/English/080.mp3");
	$mp3Translations_sounds_8[] = array("81","http://www.truemuslims.net/download.php?path=Quran/English/081.mp3");
	$mp3Translations_sounds_8[] = array("82","http://www.truemuslims.net/download.php?path=Quran/English/082.mp3");
	$mp3Translations_sounds_8[] = array("83","http://www.truemuslims.net/download.php?path=Quran/English/083.mp3");
	$mp3Translations_sounds_8[] = array("84","http://www.truemuslims.net/download.php?path=Quran/English/084.mp3");
	$mp3Translations_sounds_8[] = array("85","http://www.truemuslims.net/download.php?path=Quran/English/085.mp3");
	$mp3Translations_sounds_8[] = array("86","http://www.truemuslims.net/download.php?path=Quran/English/086.mp3");
	$mp3Translations_sounds_8[] = array("87","http://www.truemuslims.net/download.php?path=Quran/English/087.mp3");
	$mp3Translations_sounds_8[] = array("88","http://www.truemuslims.net/download.php?path=Quran/English/088.mp3");
	$mp3Translations_sounds_8[] = array("89","http://www.truemuslims.net/download.php?path=Quran/English/089.mp3");
	$mp3Translations_sounds_8[] = array("90","http://www.truemuslims.net/download.php?path=Quran/English/090.mp3");
	$mp3Translations_sounds_8[] = array("91","http://www.truemuslims.net/download.php?path=Quran/English/091.mp3");
	$mp3Translations_sounds_8[] = array("92","http://www.truemuslims.net/download.php?path=Quran/English/092.mp3");
	$mp3Translations_sounds_8[] = array("93","http://www.truemuslims.net/download.php?path=Quran/English/093.mp3");
	$mp3Translations_sounds_8[] = array("94","http://www.truemuslims.net/download.php?path=Quran/English/094.mp3");
	$mp3Translations_sounds_8[] = array("95","http://www.truemuslims.net/download.php?path=Quran/English/095.mp3");
	$mp3Translations_sounds_8[] = array("96","http://www.truemuslims.net/download.php?path=Quran/English/096.mp3");
	$mp3Translations_sounds_8[] = array("97","http://www.truemuslims.net/download.php?path=Quran/English/097.mp3");
	$mp3Translations_sounds_8[] = array("98","http://www.truemuslims.net/download.php?path=Quran/English/098.mp3");
	$mp3Translations_sounds_8[] = array("99","http://www.truemuslims.net/download.php?path=Quran/English/099.mp3");
	$mp3Translations_sounds_8[] = array("100","http://www.truemuslims.net/download.php?path=Quran/English/100.mp3");
	$mp3Translations_sounds_8[] = array("101","http://www.truemuslims.net/download.php?path=Quran/English/101.mp3");
	$mp3Translations_sounds_8[] = array("102","http://www.truemuslims.net/download.php?path=Quran/English/102.mp3");
	$mp3Translations_sounds_8[] = array("103","http://www.truemuslims.net/download.php?path=Quran/English/103.mp3");
	$mp3Translations_sounds_8[] = array("104","http://www.truemuslims.net/download.php?path=Quran/English/104.mp3");
	$mp3Translations_sounds_8[] = array("105","http://www.truemuslims.net/download.php?path=Quran/English/105.mp3");
	$mp3Translations_sounds_8[] = array("106","http://www.truemuslims.net/download.php?path=Quran/English/106.mp3");
	$mp3Translations_sounds_8[] = array("107","http://www.truemuslims.net/download.php?path=Quran/English/107.mp3");
	$mp3Translations_sounds_8[] = array("108","http://www.truemuslims.net/download.php?path=Quran/English/108.mp3");
	$mp3Translations_sounds_8[] = array("109","http://www.truemuslims.net/download.php?path=Quran/English/109.mp3");
	$mp3Translations_sounds_8[] = array("110","http://www.truemuslims.net/download.php?path=Quran/English/110.mp3");
	$mp3Translations_sounds_8[] = array("111","http://www.truemuslims.net/download.php?path=Quran/English/111.mp3");
	$mp3Translations_sounds_8[] = array("112","http://www.truemuslims.net/download.php?path=Quran/English/112.mp3");
	$mp3Translations_sounds_8[] = array("113","http://www.truemuslims.net/download.php?path=Quran/English/113.mp3");
	$mp3Translations_sounds_8[] = array("114","http://www.truemuslims.net/download.php?path=Quran/English/114.mp3");

	if($id == 8){
		$mp3Translations_sounds = $mp3Translations_sounds_8;
	}

	return $mp3Translations_sounds;
}
?>