<?php
/**
 * Internationalization file for RSS extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Łukasz Garczewski (TOR) <tor@wikia-inc.com>
 */
$messages['en'] = array(
	'rss-desc' => 'Displays an RSS feed on a wiki page',
	'rss-error' => 'Failed to load RSS feed from $1: $2',
	'rss-empty' => 'Failed to load RSS feed from $1!',
	'rss-fetch-nourl' => 'Fetch called without a URL!',
	'rss-invalid-url' => 'Not a valid URL: $1',
	'rss-parse-error' => 'Error parsing XML for RSS',
	'rss-ns-permission' => 'RSS is not allowed in this namespace',
	'rss-url-permission' => 'This URL is not allowed to be included',
	'rss-item' => '{{$1 | title = {{{title}}} | link = {{{link}}} | date = {{{date}}} | author = {{{author}}} }}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'rss-desc' => "Bied 'n RSS-voer vir 'n wikibladsy",
	'rss-error' => 'Kon nie die RSS-voer van $1 laai nie, fout: $2',
	'rss-empty' => 'Kon nie die RSS-voer van $1 laai nie!',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'rss-desc' => 'Паказвае RSS-стужкі на вікі-старонках',
	'rss-error' => 'Памылка загрузкі RSS-стужкі з $1: $2',
	'rss-empty' => 'Памылка загрузкі RSS-стужкі з $1!',
	'rss-fetch-nourl' => 'Выбарка выкліканая без URL-адрасу!',
	'rss-invalid-url' => 'Няслушны URL-адрас: $1',
	'rss-parse-error' => 'Памылка аналізу XML для RSS',
	'rss-ns-permission' => 'RSS у гэтай прасторы назваў не дазволены',
	'rss-url-permission' => 'Даданьне гэтага URL-адрасу не дазволенае',
);

/** Breton (Brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'rss-desc' => 'Diskouez ur gwazh RSS war ur bajenn eus ar wiki',
	'rss-error' => 'Dibosupl eo kargañ ar gwazh RSS eus $1 : $2',
	'rss-empty' => 'Dibosupl eo kargañ gwazh RSS eus $1 !',
	'rss-fetch-nourl' => 'Galvadenn klask hep URL !',
	'rss-invalid-url' => 'URL direizh : $1',
	'rss-parse-error' => 'Fazi en dielfennañ XML evit RSS',
	'rss-ns-permission' => "N'haller ket ober gant lanvadoù RSS en esaouenn anv-mañ",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'rss-desc' => 'Prikazuje RSS fid na wiki stranici',
	'rss-error' => 'Nije uspjelo učitavanje RSS fida iz $1: $2',
	'rss-empty' => 'Nije uspjelo učitavanje RSS fida iz $1!',
	'rss-fetch-nourl' => 'Akcija pozvana bez URL!',
	'rss-invalid-url' => 'Nije valjan URL: $1',
	'rss-parse-error' => 'Greška pri parsiranju XML za RSS',
	'rss-ns-permission' => 'RSS nije dozvoljen u ovom imenskom prostoru',
);

/** Czech (Česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'rss-desc' => 'Zobrazuje na wikistránce RSS kanál',
	'rss-error' => 'Nepodařilo se načíst RSS kanál z $1: $2',
	'rss-empty' => 'Nepodařilo se načíst RSS kanál z $1!',
	'rss-fetch-nourl' => 'Nebylo určeno URL, které se má načíst!',
	'rss-invalid-url' => 'Není platné URL: $1',
	'rss-parse-error' => 'Chyba parsování XML pro RSS',
	'rss-ns-permission' => 'V tomto jmenném prostoru není RSS dovoleno',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'rss-desc' => 'Ermöglicht es, einen RSS-Feed auf einer Wikiseite anzuzeigen',
	'rss-error' => 'Der RSS-Feed konnte nicht von $1 geladen werden: $2',
	'rss-empty' => 'Der RSS-Feed konnte nicht von $1 geladen werden!',
	'rss-fetch-nourl' => 'Abruf ohne Angabe einer URL!',
	'rss-invalid-url' => 'Ungültige URL: $1',
	'rss-parse-error' => 'Fehler beim Parsen von XML für RSS',
	'rss-ns-permission' => 'RSS ist in diesem Namensraum nicht erlaubt',
	'rss-url-permission' => 'Diese URL darf nicht enthalten sein',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'rss-desc' => 'Zwobraznjujo RSS-kanal na wikiboku',
	'rss-error' => 'RSS-kanal njejo dał se z $1 zacytaś: $2',
	'rss-empty' => 'RSS-kanal njejo dał se z $1 zacytaś!',
	'rss-fetch-nourl' => 'Wótwołanje bźez URL!',
	'rss-invalid-url' => 'Njepłaśiwy URL: $1',
	'rss-parse-error' => 'Zmólka pśi parsowanju XML za RSS',
);

/** Greek (Ελληνικά)
 * @author Evropi
 */
$messages['el'] = array(
	'rss-desc' => 'Εμφανίζει μια τροφοδοσία RSS σε μια σελίδα wiki',
	'rss-error' => 'Απέτυχε η φόρτωση της τροφοδοσίας RSS από το $1: $2',
	'rss-empty' => 'Απέτυχε η φόρτωση της τροφοδοσίας RSS από το $1!',
	'rss-invalid-url' => 'Άκυρη διεύθυνση URL: $1',
	'rss-parse-error' => 'Σφάλμα κατά την ανάλυση XML για RSS',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'rss-desc' => 'Montras RSS-fluon en vikia paĝo',
	'rss-error' => 'Malsukcesis ŝarĝi RSS-fonton de $1: $2',
	'rss-empty' => 'Malsukcesis ŝarĝi RSS-fonton de $1!',
	'rss-fetch-nourl' => 'Akiro vokita sen URL-o!',
	'rss-invalid-url' => 'Malvalida URL-o: $1',
	'rss-parse-error' => 'Eraro interpretante XML-on de RSS-o',
);

/** Spanish (Español)
 * @author Locos epraix
 */
$messages['es'] = array(
	'rss-desc' => 'Muestra un feed RSS en una página wiki',
	'rss-error' => 'No se pudo cargar el feed RSS desde $1: $2',
	'rss-empty' => 'No se pudo cargar feed RSS desde $1!',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'rss-invalid-url' => 'نشانی اینترنتی نامعتبر: $1',
);

/** Finnish (Suomi)
 * @author Jack Phoenix <jack@countervandalism.net>
 */
$messages['fi'] = array(
	'rss-error' => 'RSS-syötteen lataaminen osoitteesta $1 epäonnistui: $2',
	'rss-empty' => 'RSS-syötteen lataaminen osoitteesta $1 epäonnistui!',
);

/** French (Français)
 * @author Faure.thomas
 * @author IAlex
 * @author Peter17
 */
$messages['fr'] = array(
	'rss-desc' => 'Affiche un flux RSS sur une page du wiki',
	'rss-error' => 'Impossible de charger le flux RSS de $1 : $2',
	'rss-empty' => 'Impossible de charger le flux RSS de $1 !',
	'rss-fetch-nourl' => 'Appel passé sans fournir d’URL !',
	'rss-invalid-url' => 'URL non valide : $1',
	'rss-parse-error' => 'Erreur lors de l’analyse XML du RSS',
	'rss-ns-permission' => 'Les flux RSS ne sont pas autorisés dans cet espace de noms',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'rss-invalid-url' => 'URL envalida : $1',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'rss-desc' => 'Mostra unha fonte de novas RSS nunha páxina wiki',
	'rss-error' => 'Erro ao cargar a fonte de novas RSS de "$1": $2',
	'rss-empty' => 'Erro ao cargar a fonte de novas RSS de "$1"!',
	'rss-fetch-nourl' => 'Non deu ningún enderezo URL!',
	'rss-invalid-url' => 'O enderezo URL non é válido: $1',
	'rss-parse-error' => 'Erro analítico de XML para o RSS',
	'rss-ns-permission' => 'O RSS non está permitido neste espazo de nomes',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'rss-desc' => 'Zeigt e RSS-Feed uf ere Wikisyte aa',
	'rss-error' => 'Dr RSS-Feed het nit vu $1 chenne glade wäre: $2',
	'rss-empty' => 'Dr RSS-Feed het nit vu $1 chenne glade wäre!',
	'rss-fetch-nourl' => 'Abruef ohni Aagab vun ere URL!',
	'rss-invalid-url' => 'Uugiltigi URL: $1',
	'rss-parse-error' => 'Fähler bim Parse vu XML fir RSS',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'rss-desc' => 'מציג הזנת RSS על דף ויקי',
	'rss-error' => 'נכשלה טעינת הזנת RSS מ־$1: $2',
	'rss-empty' => 'נכשלה טעינת הזנת RSS מ־$1!',
	'rss-fetch-nourl' => 'קריאה לאחזור ללא כתובת URL!',
	'rss-invalid-url' => 'כתובת URL לא תקינה: $1',
	'rss-parse-error' => 'שגיאה בניתוח XML עבור RSS',
	'rss-ns-permission' => 'שימוש ב־RSS אינו מופעל במרחב השם הזה',
	'rss-url-permission' => 'לא ניתן לכלול את הכתובת הזאת',
);

/** Croatian (Hrvatski)
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'rss-desc' => 'Prikazuje RSS slijed na wiki stranici',
	'rss-error' => 'Nije uspjelo učitavanje RSS slijeda iz $1: $2',
	'rss-empty' => 'Nije uspjelo učitavanje RSS slijeda iz $1!',
	'rss-fetch-nourl' => 'Akcija pozvana bez URL-a!',
	'rss-invalid-url' => 'Nevaljan URL: $1',
	'rss-parse-error' => 'Pogreška pri parsiranju XML za RSS',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'rss-desc' => 'Zwobraznja RSS-kanal na wikistronje',
	'rss-error' => 'Začitowanje RSS-kanala z $1 je so njeporadźiło: $2',
	'rss-empty' => 'Začitowanje RSS-kanala z $1 je so njeporadźiło!',
	'rss-fetch-nourl' => 'Wotwołanje bjez URL!',
	'rss-invalid-url' => 'Njepłaćiwy URL: $1',
	'rss-parse-error' => 'Zmylk při parsowanju XML za RSS',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'rss-desc' => 'Monstra un syndication RSS in un pagina wiki',
	'rss-error' => 'Falleva de cargar le syndication RSS de $1: $2',
	'rss-empty' => 'Falleva de cargar le syndication RSS de $1!',
	'rss-fetch-nourl' => 'Tentativa de obtention sin URL!',
	'rss-invalid-url' => 'URL non valide: $1',
	'rss-parse-error' => 'Error de syntaxe in XML de RSS',
	'rss-ns-permission' => 'RSS non es permittite in iste spatio de nomines',
	'rss-url-permission' => 'Le inclusion de iste URL es prohibite',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 * @author IvanLanin
 */
$messages['id'] = array(
	'rss-desc' => 'Menampilkan arus RSS di halaman wiki',
	'rss-error' => 'Gagal memuat arus RSS dari $1: $2',
	'rss-empty' => 'Gagal memuat arus RSS dari $1!',
	'rss-fetch-nourl' => 'Pengambilan dilakukan tanpa URL!',
	'rss-invalid-url' => 'Bukan URL yang sah: $1',
	'rss-parse-error' => 'Kesalahan parsing XML untuk RSS',
	'rss-ns-permission' => 'RSS tidak diizinkan pada ruang nama ini',
);

/** Italian (Italiano)
 * @author Beta16
 * @author Gianfranco
 */
$messages['it'] = array(
	'rss-desc' => 'Visualizza un feed RSS in una pagina wiki',
	'rss-error' => 'Non è stato possibile caricare da $1 il feed RSS: $2',
	'rss-empty' => 'Non è stato possibile possibile caricare feed RSS da $1!',
	'rss-invalid-url' => 'Non è un URL valido: $1',
	'rss-parse-error' => 'Errore di parsing XML per RSS',
);

/** Japanese (日本語)
 * @author Iwai.masaharu
 * @author 青子守歌
 */
$messages['ja'] = array(
	'rss-desc' => 'ウィキページのRSSフィードを表示',
	'rss-error' => '$1からのRSSフィードの読み込みに失敗しました：$2',
	'rss-empty' => '$1からのRSSフィードの読み込みに失敗しました！',
	'rss-fetch-nourl' => '取得する URL が指定されていません！',
	'rss-invalid-url' => '無効な URL: $1',
	'rss-parse-error' => 'RSS の XML 解析エラー',
);

/** Georgian (ქართული)
 * @author Dawid Deutschland
 */
$messages['ka'] = array(
	'rss-invalid-url' => 'არასწორი URL: $1',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'rss-desc' => 'Zeisch ene RSS-Kannaal op en Sigg em Wiki.',
	'rss-error' => 'Mer kunnte dä RSS-Kannaal vun $1 nit laade: $2',
	'rss-empty' => 'Mer kunnte dä RSS-Kannaal vun $1 nit laade.',
	'rss-fetch-nourl' => 'Et Affroofe (<code lang="en">fetch</code>) der ohne ene URL jeiht nit!',
	'rss-invalid-url' => '„$1“ es keine jöltijje URL.',
	'rss-parse-error' => 'Ene Fähler es opjetrodde beim Ongersöhke vun dämm XML för dat RSS.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'rss-desc' => 'Weist en RSS-Feed op enger Wiki-Säit',
	'rss-error' => 'Den RSS-Feed vun $1 konnt net geluede ginn: $2',
	'rss-empty' => 'Den RSS-Feed vun $1 konnt net geluede ginn!',
	'rss-invalid-url' => 'Keng valabel URL: $1',
	'rss-ns-permission' => 'RSS ass an dësem Nummraum net erlaabt',
	'rss-url-permission' => 'Dës URL däerf net dra sinn',
);

/** Lithuanian (Lietuvių)
 * @author Perkunas
 */
$messages['lt'] = array(
	'rss-desc' => 'Rodo RSS kanalą wiki puslapyje',
	'rss-error' => 'Nepavyko įkelti RSS kanalo iš $1: $2',
	'rss-empty' => 'Nepavyko įkelti RSS kanalo iš $1!',
	'rss-fetch-nourl' => 'Atsiuntimas iškviestas be nuorodos!',
	'rss-invalid-url' => 'Nekorektiška nuoroda: $1',
	'rss-parse-error' => "Klaida analizuojant RSS kanalo XML'ą",
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'rss-desc' => 'Прикажува RSS-канал на викистраница',
	'rss-error' => 'Не успеав да го вчитам RSS-каналот од $1: $2',
	'rss-empty' => 'Не успеав да го вчитам RSS-каналот од $1!',
	'rss-fetch-nourl' => 'Повикувањето за добивање нема URL!',
	'rss-invalid-url' => 'Не претставува важечка URL: $1',
	'rss-parse-error' => 'Грешка при парсирање на XML за RSS',
	'rss-ns-permission' => 'RSS не е допуштен во овој именски простор',
	'rss-url-permission' => 'Оваа URL-адреса не е дозволена',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'rss-desc' => 'വിക്കി താളിൽ ആർ.എസ്.എസ്. ഫീഡ് പ്രദർശിപ്പിക്കുന്നു',
	'rss-error' => '$1 എന്നതിന്റെ ആർ.എസ്.എസ്. ഫീഡ് എടുക്കൽ പരാജയപ്പെട്ടു: $2',
	'rss-empty' => '$1 എന്നതിന്റെ ആർ.എസ്.എസ്. ഫീഡ് എടുക്കൽ പരാജയപ്പെട്ടു!',
	'rss-fetch-nourl' => 'യൂ.ആർ.എൽ. ഇല്ലാതെ ശേഖരിക്കാൻ ആവശ്യപ്പെട്ടിരിക്കുന്നു!',
	'rss-invalid-url' => 'സാധുവായ യൂ.ആർ.എൽ. അല്ല: $1',
	'rss-parse-error' => 'അർ.എസ്.എസിനായി എക്സ്.എം.എൽ. പാഴ്സ് ചെയ്തപ്പോൾ പിഴവുണ്ടായി',
	'rss-ns-permission' => 'ഈ നാമമേഖലയിൽ ആർ.എസ്.എസ്. അനുവദിക്കപ്പെട്ടിട്ടില്ല',
	'rss-url-permission' => 'ഈ യൂ.ആർ.എൽ. ഉൾപ്പെടുത്തുന്നത് അനുവദനീയമല്ല',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'rss-desc' => 'Memaparkan suapan RSS pada laman wiki',
	'rss-error' => 'Suapan RSS gagal dimuatkan dari $1: $2',
	'rss-empty' => 'Suapan RSS gagal dimuatkan dari $1!',
	'rss-fetch-nourl' => 'Ambilan dipanggil tanpa URL!',
	'rss-invalid-url' => 'URL tidak sah: $1',
	'rss-parse-error' => 'Ralat ketika menghurai XML untuk RSS',
	'rss-ns-permission' => 'RSS tidak dibenarkan di ruang nama ini',
	'rss-url-permission' => 'URL ini tidak dibenarkan untuk disertakan',
);

/** Dutch (Nederlands)
 * @author Mitchel Corstjens
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'rss-desc' => 'Biedt een RSS-feed voor een wikipagina',
	'rss-error' => 'Kon RSS feed van $1 niet laden, fout: $2',
	'rss-empty' => 'Kon RSS feed van $1 niet laden!',
	'rss-fetch-nourl' => 'Fetch is aangeroepen zonder een URL!',
	'rss-invalid-url' => 'Geen geldige URL: $1',
	'rss-parse-error' => 'Fout bij het verwerken van de XML voor RSS',
	'rss-ns-permission' => 'RSS is niet toegestaan in deze naamruimte',
	'rss-url-permission' => 'Deze URL mag niet worden opgenomen',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'rss-desc' => 'Viser en RSS-mating på en wikiside',
	'rss-error' => 'Kunne ikke laste RSS-mating fra $1: $2',
	'rss-empty' => 'Kunne ikke laste RSS-mating fra $1.',
	'rss-fetch-nourl' => 'Henting kallet uten en URL!',
	'rss-invalid-url' => 'Ikke en gyldig URL: $1',
	'rss-parse-error' => 'Feil ved XML-tolkning for RSS',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'rss-desc' => 'Wyświetla kanał RSS na stronie wiki',
	'rss-error' => 'Nie udało się odczytać kanału $1: $2',
	'rss-empty' => 'Nie udało się odczytać kanału $1!',
	'rss-fetch-nourl' => 'Wywołano pobieranie bez adresu URL!',
	'rss-invalid-url' => 'Nieprawidłowy adres URL – $1',
	'rss-parse-error' => 'Błąd analizowania XML dla RSS',
	'rss-ns-permission' => 'RSS nie jest dostępne w tej przestrzeni nazw',
	'rss-url-permission' => 'Tego adresu URL nie można załączyć',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'rss-desc' => 'A mostra un fluss RSS su na pàgina dla wiki',
	'rss-error' => 'Falì a carié ël fluss RSS da $1: $2',
	'rss-empty' => 'Falì a carié ël fluss RSS da $1!',
	'rss-fetch-nourl' => "Arcesta fàita sensa n'adrëssa dl'aragnà!",
	'rss-invalid-url' => "Pa n'anliura bon-a: $1",
	'rss-parse-error' => "Eror ant l'anàlisi XML për RSS",
);

/** Portuguese (Português)
 * @author Giro720
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'rss-desc' => 'Mostra um feed RSS numa página wiki',
	'rss-error' => 'Não foi possível carregar o feed RSS de $1: $2',
	'rss-empty' => 'Não foi possível carregar o feed RSS de $1!',
	'rss-fetch-nourl' => 'Chamada fetch sem uma URL!',
	'rss-invalid-url' => 'A URL não é válida: $1',
	'rss-parse-error' => 'Erro ao analisar XML para o RSS',
	'rss-ns-permission' => 'O RSS não é permitido neste espaço nominal',
	'rss-url-permission' => 'Não é permitido incluir a URL',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Giro720
 */
$messages['pt-br'] = array(
	'rss-desc' => 'Mostra um feed RSS em uma página wiki',
	'rss-error' => 'Falha ao carregar feed RSS de $1: $2',
	'rss-empty' => 'Falha ao carregar feed RSS de $1!',
	'rss-fetch-nourl' => 'Chamada fetch sem uma URL!',
	'rss-invalid-url' => 'Não é uma URL válida: $1',
	'rss-parse-error' => 'Erro ao analisar XML para o RSS',
	'rss-ns-permission' => 'O RSS não é permitido neste espaço nominal',
);

/** Romanian (Română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'rss-desc' => 'Afișează un flux RSS pe o pagină wiki',
	'rss-error' => 'Eroare la încărcarea fluxului RSS de la $1: $2',
	'rss-empty' => 'Eroare la încărcarea fluxului RSS de la $1!',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'rss-desc' => "Fà vedè 'nu feed RSS sus a 'na pàgene de uicchi",
	'rss-error' => "Carecamende d'u feed RSS fallite da $1: $2",
	'rss-empty' => "Carecamende d'u feed RSS fallite da $1!",
	'rss-invalid-url' => "Non g'è 'na URL valide: $1",
);

/** Russian (Русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'rss-desc' => 'Показывает RSS-канал на викистранице',
	'rss-error' => 'Не удалось загрузить RSS-канал из $1: $2',
	'rss-empty' => 'Не удалось загрузить RSS-канал из $1!',
	'rss-fetch-nourl' => 'Выборка вызвана без URL!',
	'rss-invalid-url' => 'Недопустимый URL: $1',
	'rss-parse-error' => 'Ошибка разбора XML для RSS',
	'rss-ns-permission' => 'RSS не допускается в этом пространстве имён',
	'rss-url-permission' => 'Этот URL-адрес не может быть добавлен',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'rss-desc' => 'Биики сирэйгэ RSS көрдөрөр',
	'rss-error' => 'RSS-канаал мантан $1 кыайан хостоммото: $2',
	'rss-empty' => 'RSS-канаал мантан $1 хостоммото!',
	'rss-fetch-nourl' => 'Выборканы URL-ла суох көрдөөбүккүн!',
	'rss-invalid-url' => 'Сатаммат URL: $1',
	'rss-parse-error' => 'RSS аналлаах XML ырытыытын алҕаһа',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'rss-desc' => 'Zobrazí kanál RSS na wiki stránke',
	'rss-error' => 'Nepodarilo sa načítať RSS kanál z $1: $2',
	'rss-empty' => 'Nepodarilo sa načítať RSS kanál z $1!',
	'rss-fetch-nourl' => 'Stiahnutie stránky zavolané bez URL!',
	'rss-invalid-url' => 'Nie je platný URL: $1',
	'rss-parse-error' => 'Chyba pri spracovaní XML pre RSS',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'rss-desc' => 'Prikaže vir RSS na wikistrani',
	'rss-error' => 'Napaka pri nalaganju RSS z $1: $2',
	'rss-empty' => 'Napaka pri nalaganju RSS z $1!',
	'rss-fetch-nourl' => 'Pridobivanje klicano brez URL!',
	'rss-invalid-url' => 'Neveljavni URL: $1',
	'rss-parse-error' => 'Napaka pri razčlenjevanju XML za RSS',
	'rss-ns-permission' => 'RSS v tem imenskem prostoru ni dovoljen',
	'rss-url-permission' => 'Vključitev tega URL ni dovoljena',
);

/** Swedish (Svenska)
 * @author Ainali
 */
$messages['sv'] = array(
	'rss-desc' => 'Visar en RSS-feed på en wiki-sida',
	'rss-error' => 'Det gick inte att läsa in RSS-feed från $1: $2',
	'rss-empty' => 'Det gick inte att läsa in RSS-feed från $1!',
	'rss-fetch-nourl' => 'Hämtningsförök utan en URL!',
	'rss-invalid-url' => 'Inte en giltig URL: $1',
	'rss-parse-error' => 'Fel vid parsning av XML för RSS',
);

/** Telugu (తెలుగు)
 * @author రహ్మానుద్దీన్
 */
$messages['te'] = array(
	'rss-desc' => 'RSS ఫీడ్ ను ఒక వికీ పుటపై చూపుతుంది',
	'rss-error' => '$1 నుండి RSS ఫీడ్ లోడ్ చేయడంలో అసమర్థత : $2',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'rss-desc' => 'Nagpapakita ng isang pakaing RSS sa isang pahina ng wiki',
	'rss-error' => 'Nabigong ikarga ang pakaing RSS mula sa $1: $2',
	'rss-empty' => 'Nabigong ikarga ang pakaing RSS mula sa $1!',
	'rss-fetch-nourl' => 'Tinawag ang pagkuha na walang isang URL!',
	'rss-invalid-url' => 'Hindi isang tanggap na URL: $1',
	'rss-parse-error' => 'Mali ang pagbabanghay ng XML para sa RSS',
);

/** Tatar (Cyrillic) (Татарча/Tatarça (Cyrillic))
 * @author Ильнар
 */
$messages['tt-cyrl'] = array(
	'rss-desc' => 'RSS-тасманы викибиттә ачу',
	'rss-error' => '$1: $2 битләреннән RSS-тасманы ачып булмады',
	'rss-empty' => '$1: битеннән  RSS-тасманы ачып булмады',
);

/** Ukrainian (Українська)
 * @author Arturyatsko
 */
$messages['uk'] = array(
	'rss-desc' => 'Відображає канал RSS на сторінці вікі',
	'rss-error' => 'Не вдалося завантажити RSS-канал від $1: $2',
	'rss-empty' => 'Не вдалося завантажити RSS-канал від $1!',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'rss-desc' => 'Hiển thị nguồn cấp RSS trên trang wiki',
	'rss-error' => 'Thất bại khi tải nguồn cấp RSS từ $1: $2',
	'rss-empty' => 'Thất bại khi tải nguồn cấp RSS từ $1!',
	'rss-fetch-nourl' => 'Cần URL để tải!',
	'rss-invalid-url' => 'URL không hợp lệ: $1',
	'rss-parse-error' => 'Lỗi phân tích XML như RSS',
	'rss-ns-permission' => 'Không được phép xem RSS trong không gian tên này',
	'rss-url-permission' => 'Không cho phép bao gồm URL này',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Chenxiaoqino
 * @author Hydra
 */
$messages['zh-hans'] = array(
	'rss-desc' => '在维基页面上显示一个RSS源',
	'rss-error' => '自$1: $2加载RSS失败',
	'rss-empty' => '自$1加载RSS失败',
	'rss-fetch-nourl' => '读取不网址的情况下调用！',
	'rss-invalid-url' => '不是有效的网址：$1',
	'rss-parse-error' => 'RSS 的解析 XML 时出现错误',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Mark85296341
 */
$messages['zh-hant'] = array(
	'rss-error' => '自 $1：$2 載入 RSS 失敗',
	'rss-empty' => '自 $1 載入 RSS 失敗',
	'rss-invalid-url' => '不是有效的網址：$1',
	'rss-parse-error' => 'RSS 解析 XML 時出現錯誤',
);

