<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class DatabaseTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('dictionary_en')->delete();

$words_5000_eng_pol = array(
    array( // row #0
        'word' => 'dreamed', 'pl_PL' => '{"verb":[{"tr":"24","wo":"marzyć"},{"tr":"24","wo":"pomarzyć"},{"tr":"16","wo":"śnić"},{"tr":"8","wo":"zamarzyć"},{"tr":"8","wo":"podumać"},{"tr":"8","wo":"roić"},{"tr":"8","wo":"prześnić"},{"tr":"8","wo":"uroić sobie"},{"tr":"8","wo":"zaroić"},{"tr":"8","wo":"dośpiewać"}],"examples":[{"what":"verb","row":"experience dreams during sleep.","example":"I dreamed about her last night"}]}',
    ),
    array( // row #1
        'word' => 'ham', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szynka"}],"examples":[{"what":"noun","row":"meat from the upper part of a pig\'s leg salted and dried or smoked.","example":"thin slices of ham"},{"what":"verb","row":"overact.","example":"he was hamming it up , doing all the voices and the effects"},{"what":"noun","row":"(in the Bible) a son of Noah (Gen. 10:1), traditional ancestor of the Hamites.","example":null}]}',
    ),
    array( // row #2
        'word' => 'Mexico', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Meksyk"}],"examples":[{"what":"noun","row":"a country in southwestern North America, with extensive coastlines on the Gulf of Mexico and the Pacific Ocean, bordered by the US on the north; population 111,211,800 (est. 2009); capital, Mexico City; language, Spanish (official).","example":null}]}',
    ),
    array( // row #3
        'word' => 'toes', 'pl_PL' => '{"noun":[{"tr":"24","wo":"palec u nogi"},{"tr":"24","wo":"palec"},{"tr":"16","wo":"paluch"},{"tr":"8","wo":"hacel"},{"tr":"8","wo":"nos buta"},{"tr":"8","wo":"podnóże"},{"tr":"8","wo":"stopa wału"},{"tr":"8","wo":"czop oporowy"}],"examples":[{"what":"noun","row":"any of the five digits at the end of the human foot.","example":"he cut his big toe on a sharp stone"},{"what":"verb","row":"push, touch, or kick (something) with one\'s toe.","example":"he toed off his shoes and flexed his feet"}]}',
    ),
    array( // row #4
        'word' => 'allows', 'pl_PL' => '{"verb":[{"tr":"16","wo":"dopuszczać"},{"tr":"8","wo":"dać"},{"tr":"8","wo":"dozwolić"},{"tr":"8","wo":"uwzględniać"},{"tr":"8","wo":"przyznać"},{"tr":"8","wo":"przeznaczyć"},{"tr":"8","wo":"znieść"},{"tr":"8","wo":"pozwolić komuś na coś"},{"tr":"8","wo":"podpuścić"},{"tr":"8","wo":"znajdować"}],"examples":[{"what":"verb","row":"admit (an event or activity) as legal or acceptable.","example":"a plan to allow Sunday shopping"}]}',
    ),
    array( // row #5
        'word' => 'venture', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przedsięwzięcie"},{"tr":"8","wo":"ryzyko"},{"tr":"8","wo":"los szczęścia"},{"tr":"8","wo":"hazard"},{"tr":"8","wo":"narażenie"},{"tr":"8","wo":"spekulacja"},{"tr":"8","wo":"interes"},{"tr":"8","wo":"impreza"}],"verb":[{"tr":"16","wo":"zaryzykować"},{"tr":"8","wo":"ryzykować"},{"tr":"8","wo":"odważyć się"},{"tr":"8","wo":"zapuszczać się"},{"tr":"8","wo":"przedsiębrać"}],"examples":[{"what":"noun","row":"a risky or daring journey or undertaking.","example":"pioneering ventures into little-known waters"},{"what":"verb","row":"dare to do something or go somewhere that may be dangerous or unpleasant.","example":"she ventured out into the blizzard"}]}',
    ),
    array( // row #6
        'word' => 'gains', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zysk"},{"tr":"24","wo":"przyrost"},{"tr":"16","wo":"korzyść"},{"tr":"8","wo":"zarobek"},{"tr":"8","wo":"przybytek"},{"tr":"8","wo":"intratność"},{"tr":"8","wo":"wrąb"}],"verb":[{"tr":"24","wo":"uzyskać"},{"tr":"24","wo":"zyskać"},{"tr":"24","wo":"zdobyć"},{"tr":"8","wo":"pozyskać"},{"tr":"8","wo":"zarabiać"},{"tr":"8","wo":"osiągać"},{"tr":"8","wo":"utargować na czymś"},{"tr":"8","wo":"zdystansować"},{"tr":"8","wo":"śpieszyć się"}],"examples":[{"what":"noun","row":"an increase in wealth or resources.","example":"the mayor was accused of using municipal funds for personal gain"},{"what":"verb","row":"obtain or secure (something desired, favorable, or profitable).","example":"a process that has gained the confidence of the industry"}]}',
    ),
    array( // row #7
        'word' => 'makers', 'pl_PL' => '{"noun":[{"tr":"16","wo":"producent"},{"tr":"8","wo":"wytwórca"},{"tr":"8","wo":"stwórca"},{"tr":"8","wo":"sprawca"},{"tr":"8","wo":"fabrykant"},{"tr":"8","wo":"konstruktor"}],"examples":[{"what":"noun","row":"a person or thing that makes or produces something.","example":"a cabinetmaker"}]}',
    ),
    array( // row #8
        'word' => 'earnings', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zyski"},{"tr":"16","wo":"zarobek"},{"tr":"8","wo":"płaca"}],"examples":[{"what":"noun","row":"money obtained in return for labor or services.","example":"These are a form of personal pension where links to earnings or length of service are tenuous."}]}',
    ),
    array( // row #9
        'word' => 'shipping', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przesyłka"},{"tr":"8","wo":"zaokrętowanie"},{"tr":"8","wo":"żegluga"},{"tr":"8","wo":"spedycja"}],"adjective":[{"tr":"8","wo":"okrętowy"},{"tr":"8","wo":"spedycyjny"},{"tr":"8","wo":"żeglugowy"}],"examples":[{"what":"noun","row":"ships considered collectively, especially those in a particular area or belonging to a particular country.","example":"the volume of shipping using these ports"}]}',
    ),
    array( // row #10
        'word' => 'businesses', 'pl_PL' => '{"noun":[{"tr":"24","wo":"biznes"},{"tr":"16","wo":"firma"},{"tr":"8","wo":"sprawa"},{"tr":"8","wo":"interes"},{"tr":"8","wo":"przedsiębiorstwo"},{"tr":"8","wo":"handel"},{"tr":"8","wo":"rzemiosło"},{"tr":"8","wo":"fach"},{"tr":"8","wo":"kupiectwo"},{"tr":"8","wo":"ruchliwość"},{"tr":"8","wo":"rzecz"},{"tr":"8","wo":"historia"}],"examples":[{"what":"noun","row":"a person\'s regular occupation, profession, or trade.","example":"she had to do a lot of smiling in her business"}]}',
    ),
    array( // row #11
        'word' => 'youngster', 'pl_PL' => '{"noun":[{"tr":"24","wo":"młodzik"},{"tr":"24","wo":"chłopak"},{"tr":"16","wo":"dziecko"}],"examples":[{"what":"noun","row":"a child, young person, or young animal.","example":"Members are organising a transport survey to find out how youngsters get to school."}]}',
    ),
    array( // row #12
        'word' => 'livestock', 'pl_PL' => '{"noun":[{"tr":"16","wo":"żywy inwentarz"},{"tr":"8","wo":"dobytek"}],"examples":[{"what":"noun","row":"farm animals regarded as an asset.","example":"markets for the trading of livestock"}]}',
    ),
    array( // row #13
        'word' => 'entries', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wejście"},{"tr":"16","wo":"pozycja"},{"tr":"16","wo":"wjazd"},{"tr":"16","wo":"zapis"},{"tr":"16","wo":"wstęp"},{"tr":"16","wo":"hasło"},{"tr":"8","wo":"wlot"},{"tr":"8","wo":"początek"},{"tr":"8","wo":"artykuł"},{"tr":"8","wo":"wstąpienie"},{"tr":"8","wo":"wpust"},{"tr":"8","wo":"ukazanie się"}],"examples":[{"what":"noun","row":"an act of going or coming in.","example":"the door was locked, but he forced an entry"}]}',
    ),
    array( // row #14
        'word' => 'eve', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przeddzień"},{"tr":"24","wo":"wigilia"},{"tr":"16","wo":"wieczór"}],"examples":[{"what":"noun","row":"the day or period of time immediately before an event or occasion.","example":"on the eve of her departure he gave her a little parcel"},{"what":"noun","row":"(in the Bible) the first woman, wife of Adam and mother of Cain and Abel.","example":null}]}',
    ),
    array( // row #15
        'word' => 'documents', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dokument"},{"tr":"8","wo":"dowód"},{"tr":"8","wo":"akt"},{"tr":"8","wo":"akcja"}],"verb":[{"tr":"16","wo":"dokumentować"}],"examples":[{"what":"noun","row":"a piece of written, printed, or electronic matter that provides information or evidence or that serves as an official record.","example":"The site provides access to official documents and reports, but not any political analysis."},{"what":"verb","row":"record (something) in written, photographic, or other form.","example":"the photographer spent years documenting the lives of miners"}]}',
    ),
    array( // row #16
        'word' => 'condemned', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"skazany"},{"tr":"24","wo":"potępiony"},{"tr":"8","wo":"wybrakowany"}],"examples":[{"what":"verb","row":"express complete disapproval of, typically in public; censure.","example":"fair-minded people declined to condemn her on mere suspicion"}]}',
    ),
    array( // row #17
        'word' => 'victims', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ofiara"},{"tr":"16","wo":"poszkodowany"}],"examples":[{"what":"noun","row":"a person harmed, injured, or killed as a result of a crime, accident, or other event or action.","example":"Here is the man who is first to raise money or organise events to help victims of crime or the needy, a man with human compassion."}]}',
    ),
    array( // row #18
        'word' => 'Theology', 'pl_PL' => '{"noun":[{"tr":"24","wo":"teologia"}],"examples":[{"what":"noun","row":"the study of the nature of God and religious belief.","example":"And after 11 long years of study, Frank has been awarded a Bachelor of Arts degree in theology and religious studies."}]}',
    ),
    array( // row #19
        'word' => 'solved', 'pl_PL' => '{"verb":[{"tr":"24","wo":"rozwiązać"},{"tr":"8","wo":"odgadnąć"},{"tr":"8","wo":"zgadnąć"}],"examples":[{"what":"verb","row":"find an answer to, explanation for, or means of effectively dealing with (a problem or mystery).","example":"the policy could solve the town\'s housing crisis"}]}',
    ),
    array( // row #20
        'word' => 'Lover', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kochanek"},{"tr":"16","wo":"wielbiciel"},{"tr":"16","wo":"ukochany"},{"tr":"8","wo":"amator"},{"tr":"8","wo":"amant"},{"tr":"8","wo":"gach"},{"tr":"8","wo":"miłośnik czegoś"}],"examples":[{"what":"noun","row":"a person having a sexual or romantic relationship with someone, often outside marriage.","example":"The two of them quickly pair off and start swapping sexual secrets and tales of past lovers ."}]}',
    ),
    array( // row #21
        'word' => 'toast', 'pl_PL' => '{"noun":[{"tr":"24","wo":"toast"},{"tr":"16","wo":"tost"},{"tr":"16","wo":"grzanka"}],"verb":[{"tr":"16","wo":"wznieść toast"},{"tr":"8","wo":"przypiekać"},{"tr":"8","wo":"opiec"},{"tr":"8","wo":"zagrzać"}],"examples":[{"what":"noun","row":"sliced bread browned on both sides by exposure to radiant heat.","example":"Then we excavated the oily marrow with tiny wooden forks, dabbing little bits of it on slices of challah toast ."},{"what":"verb","row":"cook or brown (food, especially bread or cheese) by exposure to a grill, fire, or other source of radiant heat.","example":"he sat by the fire and toasted a piece of bread"}]}',
    ),
    array( // row #22
        'word' => 'drank', 'pl_PL' => '{"verb":[{"tr":"24","wo":"pić"},{"tr":"24","wo":"wypić"},{"tr":"8","wo":"popić"},{"tr":"8","wo":"łykać płyn"},{"tr":"8","wo":"spożyć płyn"},{"tr":"8","wo":"kropić"},{"tr":"8","wo":"wychlać"},{"tr":"8","wo":"golić"},{"tr":"8","wo":"poić"}],"examples":[{"what":"verb","row":"take (a liquid) into the mouth and swallow.","example":"we sat by the fire, drinking our coffee"}]}',
    ),
    array( // row #23
        'word' => 'span', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przęsło"},{"tr":"24","wo":"rozpiętość"},{"tr":"16","wo":"okres"},{"tr":"16","wo":"piędź"},{"tr":"8","wo":"zasięg"},{"tr":"8","wo":"prześwit"},{"tr":"8","wo":"zaprząg"}],"verb":[{"tr":"8","wo":"przekraczać"},{"tr":"8","wo":"sięgać"},{"tr":"8","wo":"przerzucać"}],"examples":[{"what":"noun","row":"the full extent of something from end to end; the amount of space that something covers.","example":"a warehouse with a clear span of 28 feet"},{"what":"verb","row":"(of a bridge, arch, etc.) extend from side to side of.","example":"the stream was spanned by a narrow bridge"},{"what":"abbreviation","row":"Spaniard.","example":null}]}',
    ),
    array( // row #24
        'word' => 'slender', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"smukły"},{"tr":"16","wo":"cienki"},{"tr":"16","wo":"nikły"},{"tr":"16","wo":"wysmukły"},{"tr":"16","wo":"patyczkowaty"},{"tr":"8","wo":"wiotki"},{"tr":"8","wo":"znikomy"},{"tr":"8","wo":"wątły"},{"tr":"8","wo":"strzelisty"},{"tr":"8","wo":"śmigły"},{"tr":"8","wo":"słaby"},{"tr":"8","wo":"iglasty"},{"tr":"8","wo":"patykowaty"},{"tr":"8","wo":"pociągły"},{"tr":"8","wo":"badylkowaty"}],"examples":[{"what":"adjective","row":"(of a person or part of the body) gracefully thin.","example":"her slender neck"}]}',
    ),
    array( // row #25
        'word' => 'wiped', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wycierać"},{"tr":"16","wo":"ocierać"},{"tr":"16","wo":"przecierać"},{"tr":"8","wo":"ścierać"},{"tr":"8","wo":"podcierać"},{"tr":"8","wo":"obcierać"},{"tr":"8","wo":"ucierać"},{"tr":"8","wo":"przeczyścić"},{"tr":"8","wo":"wcierać"},{"tr":"8","wo":"pościerać"}],"examples":[{"what":"verb","row":"clean or dry (something) by rubbing its surface with a cloth, a piece of paper, or one\'s hand.","example":"Paul wiped his face with a handkerchief"}]}',
    ),
    array( // row #26
        'word' => 'specialists', 'pl_PL' => '{"noun":[{"tr":"24","wo":"specjalista"},{"tr":"16","wo":"ekspert"},{"tr":"8","wo":"fachowiec"},{"tr":"8","wo":"zawodowiec"}],"examples":[{"what":"noun","row":"a person who concentrates primarily on a particular subject or activity; a person highly skilled in a specific and restricted field.","example":"The law firm was a leading specialist in the new field of information technology."}]}',
    ),
    array( // row #27
        'word' => 'guards', 'pl_PL' => '{"noun":[{"tr":"16","wo":"gwardia"}],"examples":[{"what":"noun","row":"a person who keeps watch, especially a soldier or other person formally assigned to protect a person or to control access to a place.","example":"a security guard"},{"what":"verb","row":"watch over in order to protect or control.","example":"they were sent to guard villagers from attack by bandits"}]}',
    ),
    array( // row #28
        'word' => 'males', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mężczyzna"},{"tr":"24","wo":"samiec"},{"tr":"16","wo":"samczyk"}],"examples":[{"what":"noun","row":"a male person, plant, or animal.","example":"the audience consisted of adult males"},{"what":"noun","row":"the capital of the Maldives; population 111,000 (est. 2007).","example":null}]}',
    ),
    array( // row #29
        'word' => 'filing', 'pl_PL' => '{"noun":[{"tr":"8","wo":"odkładanie do akt"}],"examples":[{"what":"noun","row":"a small particle rubbed off by a file when smoothing or shaping something.","example":"iron filings"}]}',
    ),
    array( // row #30
        'word' => 'Continental', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"kontynentalny"},{"tr":"8","wo":"lądowy"}],"noun":[{"tr":"8","wo":"mieszkaniec kontynentu"}],"examples":[{"what":"adjective","row":"forming or belonging to a continent.","example":"continental Antarctica"},{"what":"noun","row":"an inhabitant of mainland Europe.","example":"The decision was just one of several which has led to accusations by the continentals of British bias on the European Tour."}]}',
    ),
    array( // row #31
        'word' => 'stresses', 'pl_PL' => '{"noun":[{"tr":"24","wo":"stres"},{"tr":"16","wo":"podkreślenie"},{"tr":"16","wo":"akcent"},{"tr":"16","wo":"siła"},{"tr":"8","wo":"ciśnienie"},{"tr":"8","wo":"napór"},{"tr":"8","wo":"presja"},{"tr":"8","wo":"uwydatnienie"},{"tr":"8","wo":"działanie"},{"tr":"8","wo":"przycisk"}],"verb":[{"tr":"16","wo":"podkreślać"},{"tr":"8","wo":"akcentować"},{"tr":"8","wo":"wypunktować"},{"tr":"8","wo":"obciążyć"},{"tr":"8","wo":"zaznaczać"},{"tr":"8","wo":"uwydatniać"}],"examples":[{"what":"noun","row":"pressure or tension exerted on a material object.","example":"the distribution of stress is uniform across the bar"},{"what":"verb","row":"give particular emphasis or importance to (a point, statement, or idea) made in speech or writing.","example":"they stressed the need for reform"}]}',
    ),
    array( // row #32
        'word' => 'Elementary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"podstawowy"},{"tr":"24","wo":"elementarny"},{"tr":"8","wo":"pierwiastkowy"},{"tr":"8","wo":"zasadniczy"},{"tr":"8","wo":"początkowy"}],"examples":[{"what":"adjective","row":"of or relating to the most rudimentary aspects of a subject.","example":"the six stages take students from elementary to advanced level"}]}',
    ),
    array( // row #33
        'word' => 'politicians', 'pl_PL' => '{"noun":[{"tr":"24","wo":"polityk"}],"examples":[{"what":"noun","row":"a person who is professionally involved in politics, especially as a holder of or a candidate for an elected office.","example":"We tend to elect politicians to change things, and then kick them when they do."}]}',
    ),
    array( // row #34
        'word' => 'interviews', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wywiad"},{"tr":"16","wo":"rozmowa kwalifikacyjna"},{"tr":"8","wo":"interwiew"},{"tr":"8","wo":"widzenie się"}],"verb":[{"tr":"8","wo":"przeprowadzać wywiad"}],"examples":[{"what":"noun","row":"a meeting of people face to face, especially for consultation.","example":"I tried having meetings, disciplinary interviews and discussing issues, but they still do nothing."},{"what":"verb","row":"hold an interview with (someone).","example":"he arrived to be interviewed by a local TV station about the level of unemployment"}]}',
    ),
    array( // row #35
        'word' => 'supervision', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nadzór"},{"tr":"16","wo":"nadzorowanie"},{"tr":"8","wo":"dozorowanie"},{"tr":"8","wo":"dozór"},{"tr":"8","wo":"dogląd"},{"tr":"8","wo":"doglądanie"},{"tr":"8","wo":"kierownictwo"}],"examples":[{"what":"noun","row":"the action of supervising someone or something.","example":"students were under the supervision of the faculty member at all times"}]}',
    ),
    array( // row #36
        'word' => 'Appeals', 'pl_PL' => '{"noun":[{"tr":"24","wo":"apel"},{"tr":"16","wo":"apelacja"},{"tr":"16","wo":"wezwanie"},{"tr":"16","wo":"urok"},{"tr":"8","wo":"odezwa"},{"tr":"8","wo":"zew"},{"tr":"8","wo":"podobanie się"}],"verb":[{"tr":"16","wo":"odwołać się"},{"tr":"8","wo":"apelować"},{"tr":"8","wo":"zaskarżyć"},{"tr":"8","wo":"przemawiać"},{"tr":"8","wo":"podobać się"}],"examples":[{"what":"noun","row":"a serious or urgent request, typically one made to the public.","example":"his mother made an appeal for the return of the ring"},{"what":"verb","row":"make a serious or urgent request, typically to the public.","example":"police are appealing for information about the incident"}]}',
    ),
    array( // row #37
        'word' => 'commissioner', 'pl_PL' => '{"noun":[{"tr":"24","wo":"komisarz"},{"tr":"8","wo":"delegat"},{"tr":"8","wo":"pełnomocnik rządowy"}],"examples":[{"what":"noun","row":"a person appointed to a role on or by a commission.","example":"the traffic commissioner"}]}',
    ),
    array( // row #38
        'word' => 'enforcement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"egzekwowanie"},{"tr":"24","wo":"wykonanie"},{"tr":"8","wo":"wprowadzenie w życie"},{"tr":"8","wo":"narzucenie"},{"tr":"8","wo":"egzekutywa"}],"examples":[{"what":"noun","row":"the act of compelling observance of or compliance with a law, rule, or obligation.","example":"the strict enforcement of environmental regulations"}]}',
    ),
    array( // row #39
        'word' => 'Cuban', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"kubański"}],"noun":[{"tr":"16","wo":"Kubańczyk"}],"examples":[{"what":"verb","row":"keep away from or stop oneself from doing (something).","example":"avoid excessive exposure to the sun"}]}',
    ),
    array( // row #40
        'word' => 'AVOIDED', 'pl_PL' => '{"verb":[{"tr":"24","wo":"uniknąć"},{"tr":"24","wo":"unikać"},{"tr":"8","wo":"omijać"},{"tr":"8","wo":"wystrzegać się"},{"tr":"8","wo":"ustrzec się"},{"tr":"8","wo":"uchylać się"},{"tr":"8","wo":"stronić"},{"tr":"8","wo":"uchronić się"}],"examples":[{"what":"verb","row":"keep away from or stop oneself from doing (something).","example":"avoid excessive exposure to the sun"}]}',
    ),
    array( // row #41
        'word' => 'discharge', 'pl_PL' => '{"verb":[{"tr":"16","wo":"rozładować"},{"tr":"8","wo":"wyładować"}],"noun":[{"tr":"16","wo":"rozładowanie"},{"tr":"16","wo":"wyładowanie"},{"tr":"16","wo":"wydzielina"},{"tr":"16","wo":"zwolnienie"},{"tr":"16","wo":"odpływ"},{"tr":"8","wo":"wypuszczenie"},{"tr":"8","wo":"wystrzał"},{"tr":"8","wo":"upływ"},{"tr":"8","wo":"wydalenie"},{"tr":"8","wo":"spełnienie"}],"examples":[{"what":"noun","row":"the action of discharging someone from a hospital or from a job.","example":"his discharge from the hospital"},{"what":"verb","row":"tell (someone) officially that they can or must leave, in particular.","example":"They stressed that staff would not be actively discharging anyone and no programme was in place to reduce the number of users by a set target."}]}',
    ),
    array( // row #42
        'word' => 'imposed', 'pl_PL' => '{"verb":[{"tr":"24","wo":"nakładać"},{"tr":"16","wo":"narzucać"},{"tr":"16","wo":"dyktować"},{"tr":"16","wo":"nakazać"},{"tr":"8","wo":"obłożyć"},{"tr":"8","wo":"podyktować"},{"tr":"8","wo":"przełamać"},{"tr":"8","wo":"wyświęcać"}],"examples":[{"what":"verb","row":"force (something unwelcome or unfamiliar) to be accepted or put in place.","example":"the decision was theirs and was not imposed on them by others"}]}',
    ),
    array( // row #43
        'word' => 'whereby', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"za pomocą którego"},{"tr":"8","wo":"po czym"}],"examples":[{"what":"adverb","row":"by which.","example":"a system whereby people could vote by telephone"}]}',
    ),
    array( // row #44
        'word' => 'remainder', 'pl_PL' => '{"noun":[{"tr":"24","wo":"reszta"},{"tr":"16","wo":"pozostałość"},{"tr":"8","wo":"prawo rewersyjne"},{"tr":"8","wo":"pozostali"},{"tr":"8","wo":"ostatek"},{"tr":"8","wo":"końcówka"}],"examples":[{"what":"noun","row":"a part, number, or quantity that is left over.","example":"leave a few mushrooms for garnish and slice the remainder"},{"what":"verb","row":"dispose of (a book left unsold) at a reduced price.","example":"titles are being remaindered increasingly quickly to save on overheads"}]}',
    ),
    array( // row #45
        'word' => 'underground', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"podziemny"},{"tr":"8","wo":"zaskórny"},{"tr":"8","wo":"tajny"},{"tr":"8","wo":"konspiracyjny"}],"adverb":[{"tr":"24","wo":"pod ziemią"},{"tr":"8","wo":"podziemnie"},{"tr":"8","wo":"w tajemnicy"}],"noun":[{"tr":"16","wo":"podziemie"},{"tr":"16","wo":"metro"}],"examples":[{"what":"adjective","row":"situated beneath the surface of the ground.","example":"underground parking garages"},{"what":"noun","row":"a group or movement organized secretly to work against an existing regime.","example":"I got involved with the French underground"},{"what":"adverb","row":"beneath the surface of the ground.","example":"miners working underground"}]}',
    ),
    array( // row #46
        'word' => 'folks', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ludzie"},{"tr":"8","wo":"rodzinka"}],"examples":[{"what":"noun","row":"a member of a police force.","example":"The threat of litigation against a police force would not make a policeman more efficient."}]}',
    ),
    array( // row #47
        'word' => 'policeman', 'pl_PL' => '{"noun":[{"tr":"24","wo":"policjant"},{"tr":"8","wo":"posterunkowy"},{"tr":"8","wo":"stójkowy"}],"examples":[{"what":"noun","row":"a member of a police force.","example":"The threat of litigation against a police force would not make a policeman more efficient."}]}',
    ),
    array( // row #48
        'word' => 'airport', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lotnisko"}],"examples":[{"what":"noun","row":"a complex of runways and buildings for the takeoff, landing, and maintenance of civil aircraft, with facilities for passengers.","example":"It is worth checking, too, for seasonal charter flights from Scottish airports ."}]}',
    ),
    array( // row #49
        'word' => 'suitcase', 'pl_PL' => '{"noun":[{"tr":"24","wo":"walizka"}],"examples":[{"what":"noun","row":"a case with a handle and a hinged lid, used for carrying clothes and other personal possessions.","example":"Every year she travels to Israel to visit her son and takes a huge suitcase packed with baby clothes to the hospital."}]}',
    ),
    array( // row #50
        'word' => 'input', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wkład"},{"tr":"8","wo":"moc wejściowa"}],"examples":[{"what":"noun","row":"what is put in, taken in, or operated on by any process or system.","example":"perceptions and sensory input"},{"what":"verb","row":"put (data) into a computer.","example":"As numbers added up they were inputted into computer databases - spewing out vote by ballot box after ballot box and available for all to see on the wall behind the tally centre through a projector aid."}]}',
    ),
    array( // row #51
        'word' => 'lungs', 'pl_PL' => '{"noun":[{"tr":"24","wo":"płuco"}],"examples":[{"what":"noun","row":"each of the pair of organs situated within the rib cage, consisting of elastic sacs with branching passages into which air is drawn, so that oxygen can pass into the blood and carbon dioxide be removed. Lungs are characteristic of vertebrates other than fish, though similar structures are present in some other animal groups.","example":"Less commonly, bowel cancer can spread to other, more distant organs such as the lung or brain."}]}',
    ),
    array( // row #52
        'word' => 'Oedipus', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Edyp"}],"examples":[{"what":"noun","row":"the son of Jocasta and of Laius, king of Thebes.","example":null}]}',
    ),
    array( // row #53
        'word' => 'Okay', 'pl_PL' => '{"interjection":[{"tr":"24","wo":"Dobrze!"},{"tr":"8","wo":"Zgoda!"}],"examples":[{"what":"adjective","row":"wearing no clothes; naked.","example":"a painting of a nude model"},{"what":"noun","row":"a naked human figure, typically as the subject of a painting, sculpture, or photograph.","example":"a study of a kneeling nude"}]}',
    ),
    array( // row #54
        'word' => 'nude', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"nagi"},{"tr":"8","wo":"goły"},{"tr":"8","wo":"cielisty"},{"tr":"8","wo":"obnażony"},{"tr":"8","wo":"jednostronny"}],"noun":[{"tr":"16","wo":"akt"},{"tr":"8","wo":"golec"},{"tr":"8","wo":"nagie ciało"}],"examples":[{"what":"adjective","row":"wearing no clothes; naked.","example":"a painting of a nude model"},{"what":"noun","row":"a naked human figure, typically as the subject of a painting, sculpture, or photograph.","example":"a study of a kneeling nude"}]}',
    ),
    array( // row #55
        'word' => 'crawled', 'pl_PL' => '{"verb":[{"tr":"24","wo":"pełzać"},{"tr":"16","wo":"czołgać się"},{"tr":"8","wo":"doleźć"},{"tr":"8","wo":"dowlec się"},{"tr":"8","wo":"zaleźć"},{"tr":"8","wo":"płaszczyć się przed kimś"},{"tr":"8","wo":"roić się od robactwa"}],"examples":[{"what":"verb","row":"(of a person) move forward on the hands and knees or by dragging the body close to the ground.","example":"they crawled out from under the table"}]}',
    ),
    array( // row #56
        'word' => 'peered', 'pl_PL' => '{"verb":[{"tr":"8","wo":"wyzierać"},{"tr":"8","wo":"przyglądać się bacznie"}],"examples":[{"what":"verb","row":"look keenly or with difficulty at someone or something.","example":"Blake screwed up his eyes, trying to peer through the fog"}]}',
    ),
    array( // row #57
        'word' => 'assessors', 'pl_PL' => '{"noun":[{"tr":"24","wo":"asesor"},{"tr":"8","wo":"taksator"},{"tr":"8","wo":"urzędnik podatkowy"},{"tr":"8","wo":"ławnik"}],"examples":[{"what":"noun","row":"a person who assesses someone or something, in particular.","example":null}]}',
    ),
    array( // row #58
        'word' => 'cheek', 'pl_PL' => '{"noun":[{"tr":"24","wo":"policzek"},{"tr":"8","wo":"lico"},{"tr":"8","wo":"zuchwalstwo"},{"tr":"8","wo":"zuchwałość"},{"tr":"8","wo":"czelność"},{"tr":"8","wo":"bezczelność"},{"tr":"8","wo":"hucpa"},{"tr":"8","wo":"tupet"},{"tr":"8","wo":"impertynencja"}],"verb":[{"tr":"8","wo":"stawiać się"}],"examples":[{"what":"noun","row":"either side of the face below the eye.","example":"tears rolled down her cheeks"}]}',
    ),
    array( // row #59
        'word' => 'mustard', 'pl_PL' => '{"noun":[{"tr":"24","wo":"musztarda"},{"tr":"24","wo":"gorczyca"}],"adjective":[{"tr":"16","wo":"musztardowy"},{"tr":"16","wo":"gorczyczny"}],"examples":[{"what":"noun","row":"a pungent-tasting yellow or brown paste made from the crushed seeds of certain plants, typically eaten with meat or used as a cooking ingredient.","example":"Add the mustard , soy sauce, and chopped parsley and simmer for one minute."}]}',
    ),
    array( // row #60
        'word' => 'Boots', 'pl_PL' => '{"noun":[{"tr":"24","wo":"buty"},{"tr":"16","wo":"obuwie"},{"tr":"16","wo":"czyścibut"},{"tr":"8","wo":"hotelowy"}],"examples":[{"what":"noun","row":"a hotel employee who cleans boots and shoes, carries luggage, and performs other menial tasks.","example":"The boots drew himself to attention."}]}',
    ),
    array( // row #61
        'word' => 'fractions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"frakcja"},{"tr":"24","wo":"ułamek"},{"tr":"8","wo":"odłam"},{"tr":"8","wo":"skrzydło"}],"examples":[{"what":"noun","row":"a numerical quantity that is not a whole number (e.g., 1 \\/ 2 , 0.5).","example":"The Mathematics Computation subtest assesses skills in computing with whole numbers, fractions , mixed numbers, decimals, and algebraic equations."}]}',
    ),
    array( // row #62
        'word' => 'anticipation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przewidywanie"},{"tr":"24","wo":"antycypacja"},{"tr":"24","wo":"oczekiwanie"},{"tr":"16","wo":"uprzedzenie"},{"tr":"8","wo":"przesądzenie"},{"tr":"8","wo":"cieszenie się"}],"examples":[{"what":"noun","row":"the action of anticipating something; expectation or prediction.","example":"her eyes sparkled with anticipation"}]}',
    ),
    array( // row #63
        'word' => 'probabilities', 'pl_PL' => '{"noun":[{"tr":"24","wo":"prawdopodobieństwo"}],"examples":[{"what":"noun","row":"the extent to which something is probable; the likelihood of something happening or being the case.","example":"the rain will make the probability of their arrival even greater"}]}',
    ),
    array( // row #64
        'word' => 'relating', 'pl_PL' => '{"verb":[{"tr":"16","wo":"odnosić się"},{"tr":"16","wo":"odnieść"},{"tr":"16","wo":"powiązać"},{"tr":"8","wo":"opowiadać"},{"tr":"8","wo":"relacjonować"},{"tr":"8","wo":"rozpowiadać"},{"tr":"8","wo":"zreferować"},{"tr":"8","wo":"wykazać związek"}],"examples":[{"what":"verb","row":"give an account of (a sequence of events); narrate.","example":"various versions of the chilling story have been related by the locals"}]}',
    ),
    array( // row #65
        'word' => 'BC', 'pl_PL' => '{"abbreviation":[{"tr":"24","wo":"przed Chrystusem"},{"tr":"16","wo":"przed naszą erą"}],"examples":[{"what":"abbreviation","row":"before Christ (used to indicate that a date is before the Christian Era).","example":null}]}',
    ),
    array( // row #66
        'word' => 'Christ\'s', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Chrystus"}],"examples":[{"what":"noun","row":"the title, also treated as a name, given to Jesus of Nazareth (see Jesus ).","example":"Many seem to feel that one way to put Christ back into Christmas is by displaying a Nativity scene."}]}',
    ),
    array( // row #67
        'word' => 'theories', 'pl_PL' => '{"noun":[{"tr":"24","wo":"teoria"}],"examples":[{"what":"noun","row":"a supposition or a system of ideas intended to explain something, especially one based on general principles independent of the thing to be explained.","example":"Darwin\'s theory of evolution"}]}',
    ),
    array( // row #68
        'word' => 'transformation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"transformacja"},{"tr":"16","wo":"przekształcenie"},{"tr":"16","wo":"przemiana"},{"tr":"8","wo":"przemienienie"},{"tr":"8","wo":"przeobrażenie"},{"tr":"8","wo":"przepostaciowanie"},{"tr":"8","wo":"przeistoczenie"},{"tr":"8","wo":"przeróbka"},{"tr":"8","wo":"przerobienie"},{"tr":"8","wo":"zamiana"},{"tr":"8","wo":"przestawienie"},{"tr":"8","wo":"przedzierzgnięcie"},{"tr":"8","wo":"przerodzenie"},{"tr":"8","wo":"przetwarzanie"},{"tr":"8","wo":"przetworzenie"}],"examples":[{"what":"noun","row":"a thorough or dramatic change in form or appearance.","example":"its landscape has undergone a radical transformation"}]}',
    ),
    array( // row #69
        'word' => 'leaped', 'pl_PL' => '{"verb":[{"tr":"24","wo":"skakać"},{"tr":"24","wo":"przeskoczyć"},{"tr":"8","wo":"kicać"},{"tr":"8","wo":"zabić"},{"tr":"8","wo":"pochopnie przyjmować"}],"examples":[{"what":"verb","row":"jump or spring a long way, to a great height, or with great force.","example":"I leaped across the threshold"}]}',
    ),
    array( // row #70
        'word' => 'authentic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"autentyczny"},{"tr":"16","wo":"prawdziwy"},{"tr":"8","wo":"niefałszywy"}],"examples":[{"what":"adjective","row":"of undisputed origin; genuine.","example":"the letter is now accepted as an authentic document"}]}',
    ),
    array( // row #71
        'word' => 'historians', 'pl_PL' => '{"noun":[{"tr":"24","wo":"historyk"}],"examples":[{"what":"noun","row":"an expert in or student of history, especially that of a particular period, geographical region, or social phenomenon.","example":"a military historian"}]}',
    ),
    array( // row #72
        'word' => 'Twentieth', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"dwudziesty"}],"examples":[{"what":"noun","row":"any of the pieces of hard, whitish tissue making up the skeleton in humans and other vertebrates.","example":"his injuries included many broken bones"},{"what":"verb","row":"remove the bones from (meat or fish).","example":"while the gumbo is simmering, bone the cooked chicken"}]}',
    ),
    array( // row #73
        'word' => 'biological', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"biologiczny"}],"examples":[{"what":"adjective","row":"of or relating to biology or living organisms.","example":"IBM has unveiled an ambitious initiative to develop technologies that share the basic biological abilities of living organisms."},{"what":"noun","row":"a therapeutic substance, such as a vaccine or drug, derived from biological sources.","example":"an international biotechnology company with interests in biologicals, agriculture, and pharmaceutical products"}]}',
    ),
    array( // row #74
        'word' => 'SOCIALISM', 'pl_PL' => '{"noun":[{"tr":"24","wo":"socjalizm"}],"examples":[{"what":"noun","row":"a political and economic theory of social organization that advocates that the means of production, distribution, and exchange should be owned or regulated by the community as a whole.","example":"With the advent of Karl Marx, socialism became a science."}]}',
    ),
    array( // row #75
        'word' => 'solely', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"wyłącznie"}],"examples":[{"what":"adverb","row":"not involving anyone or anything else; only.","example":"he is solely responsible for any debts the company may incur"}]}',
    ),
    array( // row #76
        'word' => 'wit', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dowcip"},{"tr":"8","wo":"rozum"},{"tr":"8","wo":"inteligencja"},{"tr":"8","wo":"kpiarz"},{"tr":"8","wo":"dowcipniś"}],"examples":[{"what":"noun","row":"mental sharpness and inventiveness; keen intelligence.","example":"he does not lack perception or native wit"},{"what":"verb","row":"have knowledge.","example":"I addressed a few words to the lady you wot of"}]}',
    ),
    array( // row #77
        'word' => 'bones', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kość"},{"tr":"8","wo":"ość"},{"tr":"8","wo":"gnat"},{"tr":"8","wo":"dolar"}],"verb":[{"tr":"8","wo":"grandzić"},{"tr":"8","wo":"gwizdnąć"}],"examples":[{"what":"noun","row":"any of the pieces of hard, whitish tissue making up the skeleton in humans and other vertebrates.","example":"his injuries included many broken bones"},{"what":"verb","row":"remove the bones from (meat or fish).","example":"while the gumbo is simmering, bone the cooked chicken"}]}',
    ),
    array( // row #78
        'word' => 'styles', 'pl_PL' => '{"noun":[{"tr":"24","wo":"styl"},{"tr":"8","wo":"sposób"},{"tr":"8","wo":"wzór"},{"tr":"8","wo":"krój"},{"tr":"8","wo":"model"},{"tr":"8","wo":"moda"},{"tr":"8","wo":"elegancja"},{"tr":"8","wo":"maniera"},{"tr":"8","wo":"stylowość"},{"tr":"8","wo":"gust"},{"tr":"8","wo":"rylec"},{"tr":"8","wo":"stylus"},{"tr":"8","wo":"genre"},{"tr":"8","wo":"grafion"},{"tr":"8","wo":"wskazówka zegara słonecznego"}],"verb":[{"tr":"16","wo":"tytułować"}],"examples":[{"what":"noun","row":"a manner of doing something.","example":"different styles of management"},{"what":"verb","row":"design or make in a particular form.","example":"the yacht is well proportioned and conservatively styled"}]}',
    ),
    array( // row #79
        'word' => 'distinctive', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"charakterystyczny"},{"tr":"16","wo":"wyróżniający"},{"tr":"16","wo":"rozpoznawczy"},{"tr":"8","wo":"indywidualny"}],"examples":[{"what":"adjective","row":"characteristic of one person or thing, and so serving to distinguish it from others.","example":"juniper berries give gin its distinctive flavor"}]}',
    ),
    array( // row #80
        'word' => 'listeners', 'pl_PL' => '{"noun":[{"tr":"24","wo":"słuchacz"},{"tr":"8","wo":"radiosłuchacz"}],"examples":[{"what":"noun","row":"a person who listens, especially someone who does so in an attentive manner.","example":"It didn\'t take long for these guys to fill the room with attentive listeners , or run out of merch."}]}',
    ),
    array( // row #81
        'word' => 'motives', 'pl_PL' => '{"noun":[{"tr":"24","wo":"motyw"},{"tr":"16","wo":"powód"},{"tr":"16","wo":"bodziec"},{"tr":"8","wo":"pobudka"}],"examples":[{"what":"noun","row":"a reason for doing something, especially one that is hidden or not obvious.","example":"a motive for his murder"}]}',
    ),
    array( // row #82
        'word' => 'accordance', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zgodność"},{"tr":"8","wo":"zgoda"}],"examples":[{"what":"noun","row":"in a manner conforming with.","example":"the product is disposed of in accordance with federal regulations"}]}',
    ),
    array( // row #83
        'word' => 'fascinating', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"fascynujący"},{"tr":"8","wo":"urzekający"},{"tr":"8","wo":"zniewalający"},{"tr":"8","wo":"czarujący"},{"tr":"8","wo":"czarowny"},{"tr":"8","wo":"pochłaniający"}],"examples":[{"what":"adjective","row":"extremely interesting.","example":"fascinating facts"}]}',
    ),
    array( // row #84
        'word' => 'convictions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przekonanie"},{"tr":"16","wo":"przeświadczenie"},{"tr":"16","wo":"wyrok"},{"tr":"16","wo":"pewność"},{"tr":"8","wo":"mniemanie"}],"examples":[{"what":"noun","row":"a formal declaration that someone is guilty of a criminal offense, made by the verdict of a jury or the decision of a judge in a court of law.","example":"she had a previous conviction for a similar offense"}]}',
    ),
    array( // row #85
        'word' => 'jungle', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dżungla"},{"tr":"8","wo":"gąszcz"}],"examples":[{"what":"noun","row":"an area of land overgrown with dense forest and tangled vegetation, typically in the tropics.","example":"we set off into the jungle"}]}',
    ),
    array( // row #86
        'word' => 'overwhelming', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"przytłaczający"},{"tr":"8","wo":"nieprzeparty"},{"tr":"8","wo":"druzgocący"}],"examples":[{"what":"adjective","row":"very great in amount.","example":"he was elected president by an overwhelming majority"}]}',
    ),
    array( // row #87
        'word' => 'minority', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mniejszość"},{"tr":"8","wo":"niepełnoletniość"},{"tr":"8","wo":"niedorosłość"},{"tr":"8","wo":"małoletniość"},{"tr":"8","wo":"nieletniość"}],"examples":[{"what":"noun","row":"the smaller number or part, especially a number that is less than half the whole number.","example":"harsher measures for the minority of really serious offenders"}]}',
    ),
    array( // row #88
        'word' => 'endless', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"nieskończony"},{"tr":"8","wo":"trwający"},{"tr":"8","wo":"ciągły"},{"tr":"8","wo":"wieczny"},{"tr":"8","wo":"bezustanny"},{"tr":"8","wo":"bezkresny"},{"tr":"8","wo":"danaidowy"}],"examples":[{"what":"adjective","row":"having or seeming to have no end or limit.","example":"endless ocean wastes"}]}',
    ),
    array( // row #89
        'word' => 'Fortunately', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"szczęśliwie"},{"tr":"8","wo":"pomyślnie"}],"examples":[{"what":"adverb","row":"it is fortunate that.","example":"fortunately, no shots were fired and no one was hurt"}]}',
    ),
    array( // row #90
        'word' => 'rises', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wzrost"},{"tr":"24","wo":"powstanie"},{"tr":"16","wo":"początek"},{"tr":"8","wo":"podwyższenie"}],"verb":[{"tr":"16","wo":"rosnąć"},{"tr":"16","wo":"wstać"},{"tr":"16","wo":"wzrastać"},{"tr":"16","wo":"powstać"},{"tr":"16","wo":"podnieść się"},{"tr":"8","wo":"stanąć"},{"tr":"8","wo":"unieść"},{"tr":"8","wo":"wschodzić"}],"examples":[{"what":"noun","row":"an upward movement; an instance of becoming higher.","example":"the bird has a display flight of steep flapping rises"},{"what":"verb","row":"move from a lower position to a higher one; come or go up.","example":"the tiny aircraft rose from the ground"}]}',
    ),
    array( // row #91
        'word' => 'shadows', 'pl_PL' => '{"noun":[{"tr":"24","wo":"cień"},{"tr":"8","wo":"zacienienie"},{"tr":"8","wo":"półmrok"}],"verb":[{"tr":"8","wo":"zacieniać"},{"tr":"8","wo":"szpiegować"}],"examples":[{"what":"noun","row":"a dark area or shape produced by a body coming between rays of light and a surface.","example":"trees cast long shadows"},{"what":"verb","row":"envelop in shadow; cast a shadow over.","example":"the market is shadowed by St. Margaret\'s church"}]}',
    ),
    array( // row #92
        'word' => 'happily', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"szczęśliwie"},{"tr":"24","wo":"radośnie"},{"tr":"16","wo":"na szczęście"},{"tr":"8","wo":"pomyślnie"},{"tr":"8","wo":"fortunnie"},{"tr":"8","wo":"szczęśliwym trafem"},{"tr":"8","wo":"trafnie"}],"examples":[{"what":"adverb","row":"in a happy way.","example":"Eleanor giggled happily"}]}',
    ),
    array( // row #93
        'word' => 'cooperative', 'pl_PL' => '{"noun":[{"tr":"24","wo":"spółdzielnia"},{"tr":"16","wo":"kooperatywa"}],"adjective":[{"tr":"24","wo":"spółdzielczy"},{"tr":"8","wo":"kooperatywny"},{"tr":"8","wo":"kooperacyjny"},{"tr":"8","wo":"chętny do współpracy"},{"tr":"8","wo":"uczynny"}],"examples":[{"what":"adjective","row":"involving mutual assistance in working toward a common goal.","example":"every member has clearly defined tasks in a cooperative enterprise"},{"what":"noun","row":"a farm, business, or other organization that is owned and run jointly by its members, who share the profits or benefits.","example":"Unions, the students\' federation, housing cooperatives and neighbourhood organisations all took part."}]}',
    ),
    array( // row #94
        'word' => 'reporter', 'pl_PL' => '{"noun":[{"tr":"24","wo":"reporter"},{"tr":"16","wo":"dziennikarz"},{"tr":"16","wo":"sprawozdawca"},{"tr":"16","wo":"dziennikarka"},{"tr":"8","wo":"referent"},{"tr":"8","wo":"sekretarz na zebraniu"},{"tr":"8","wo":"koreferent"}],"examples":[{"what":"noun","row":"a person who reports, especially one employed to report news or conduct interviews for newspapers or broadcasts.","example":"Two days later the news is official and reporters from the American press speed to Paris to interview a band that few of them have heard of."}]}',
    ),
    array( // row #95
        'word' => 'amazing', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zdumiewający"},{"tr":"8","wo":"zadziwiający"}],"examples":[{"what":"adjective","row":"causing great surprise or wonder; astonishing.","example":"an amazing number of people registered"}]}',
    ),
    array( // row #96
        'word' => 'landscape', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pejzaż"},{"tr":"24","wo":"krajobraz"}],"adjective":[{"tr":"16","wo":"krajobrazowy"},{"tr":"8","wo":"pejzażowy"},{"tr":"8","wo":"widokowy"}],"examples":[{"what":"noun","row":"all the visible features of an area of countryside or land, often considered in terms of their aesthetic appeal.","example":"the giant cacti that dominate this landscape"},{"what":"verb","row":"improve the aesthetic appearance of (a piece of land) by changing its contours, adding ornamental features, or planting trees and shrubs.","example":"the site has been tastefully landscaped"}]}',
    ),
    array( // row #97
        'word' => 'binding', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wiążący"},{"tr":"8","wo":"obowiązujący"}],"noun":[{"tr":"8","wo":"oprawa"},{"tr":"8","wo":"oprawianie"},{"tr":"8","wo":"obszycie"},{"tr":"8","wo":"oblamowanie"}],"examples":[{"what":"adjective","row":"(of an agreement or promise) involving an obligation that cannot be broken.","example":"business agreements are intended to be legally binding"},{"what":"noun","row":"a strong covering holding the pages of a book together.","example":"A beautiful book with perfect bindings and 5 star ratings?"}]}',
    ),
    array( // row #98
        'word' => 'fantastic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"fantastyczny"},{"tr":"8","wo":"dziwaczny"},{"tr":"8","wo":"chimeryczny"}],"noun":[{"tr":"16","wo":"fantastyka"}],"examples":[{"what":"adjective","row":"imaginative or fanciful; remote from reality.","example":"novels are capable of mixing fantastic and realistic elements"}]}',
    ),
    array( // row #99
        'word' => 'founded', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"założony"},{"tr":"8","wo":"utworzony"},{"tr":"8","wo":"ufundowany"},{"tr":"8","wo":"oparty"}],"examples":[{"what":"verb","row":"say something in reply.","example":"she could not get Robert to respond to her words"}]}',
    ),
    array( // row #100
        'word' => 'responded', 'pl_PL' => '{"verb":[{"tr":"16","wo":"odpowiadać"},{"tr":"16","wo":"zareagować"},{"tr":"8","wo":"odezwać się"},{"tr":"8","wo":"odczytać"}],"examples":[{"what":"verb","row":"say something in reply.","example":"she could not get Robert to respond to her words"}]}',
    ),
    array( // row #101
        'word' => 'Renaissance', 'pl_PL' => '{"noun":[{"tr":"24","wo":"renesans"},{"tr":"24","wo":"odrodzenie"}],"adjective":[{"tr":"24","wo":"renesansowy"}],"examples":[{"what":"noun","row":"the revival of art and literature under the influence of classical models in the 14thâ16th centuries.","example":null}]}',
    ),
    array( // row #102
        'word' => 'lobby', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lobby"},{"tr":"24","wo":"hol"},{"tr":"8","wo":"hall"},{"tr":"8","wo":"westybul"},{"tr":"8","wo":"korytarz"},{"tr":"8","wo":"kuluar sejmowy"},{"tr":"8","wo":"kuluar"},{"tr":"8","wo":"grupa nacisku"}],"examples":[{"what":"noun","row":"a room providing a space out of which one or more other rooms or corridors lead, typically one near the entrance of a public building.","example":"Clad in bright green glass tiles, the entrance lobby leads to a restful white panelled ante room."},{"what":"verb","row":"seek to influence (a politician or public official) on an issue.","example":"it is recommending that booksellers lobby their representatives"}]}',
    ),
    array( // row #103
        'word' => 'blonde', 'pl_PL' => '{"noun":[{"tr":"24","wo":"blondynka"}],"examples":[{"what":"adjective","row":"(of a person or a set of views) opposing political or social liberalization or reform.","example":"It is a highly political ruling with reactionary consequences for both asylum-seekers and democratic rights as a whole."},{"what":"noun","row":"a reactionary person.","example":"The lesson of the story was that from a long-term point of view, all reactionaries are paper tigers."}]}',
    ),
    array( // row #104
        'word' => 'reactionary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"reakcyjny"},{"tr":"8","wo":"przeciwdziałający"},{"tr":"8","wo":"biały"},{"tr":"8","wo":"wsteczny"},{"tr":"8","wo":"czarny"}],"noun":[{"tr":"16","wo":"reakcjonista"},{"tr":"8","wo":"wstecznik"}],"examples":[{"what":"adjective","row":"(of a person or a set of views) opposing political or social liberalization or reform.","example":"It is a highly political ruling with reactionary consequences for both asylum-seekers and democratic rights as a whole."},{"what":"noun","row":"a reactionary person.","example":"The lesson of the story was that from a long-term point of view, all reactionaries are paper tigers."}]}',
    ),
    array( // row #105
        'word' => 'Abel', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Abel"}],"examples":[{"what":"noun","row":"(in the Bible) the second son of Adam and Eve, murdered by his brother Cain.","example":null}]}',
    ),
    array( // row #106
        'word' => 'figured', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wzorzysty"},{"tr":"8","wo":"ozdobny"}],"examples":[{"what":"abbreviation","row":"Corporate Average Fuel Economy.","example":null}]}',
    ),
    array( // row #107
        'word' => 'CAFE', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kawiarnia"},{"tr":"8","wo":"cukiernia"},{"tr":"8","wo":"lokal"}],"examples":[{"what":"abbreviation","row":"Corporate Average Fuel Economy.","example":null},{"what":"noun","row":"a small restaurant selling light meals and drinks.","example":"Urban dwellers may eat a light meal at a cafÃ© or restaurant in the evening."}]}',
    ),
    array( // row #108
        'word' => 'tones', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ton"},{"tr":"16","wo":"brzmienie"},{"tr":"16","wo":"odcień"},{"tr":"16","wo":"głos"},{"tr":"16","wo":"akcent"},{"tr":"8","wo":"atmosfera"},{"tr":"8","wo":"barwa"},{"tr":"8","wo":"nuta"},{"tr":"8","wo":"intonacja"},{"tr":"8","wo":"zabarwienie"},{"tr":"8","wo":"dźwięczność"}],"verb":[{"tr":"16","wo":"stonować"},{"tr":"8","wo":"wytonować"}],"examples":[{"what":"noun","row":"a musical or vocal sound with reference to its pitch, quality, and strength.","example":"the piano tone appears monochrome or lacking in warmth"},{"what":"verb","row":"give greater strength or firmness to (the body or a part of it).","example":"exercise tones up the muscles"}]}',
    ),
    array( // row #109
        'word' => 'indication', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wskazanie"},{"tr":"16","wo":"oznaczenie"},{"tr":"8","wo":"wskazówka"},{"tr":"8","wo":"oznaka"},{"tr":"8","wo":"symptom"},{"tr":"8","wo":"symptomat"},{"tr":"8","wo":"przejaw"}],"examples":[{"what":"noun","row":"a sign or piece of information that indicates something.","example":"the visit was an indication of the improvement in relations between the countries"}]}',
    ),
    array( // row #110
        'word' => 'likes', 'pl_PL' => '{"noun":[{"tr":"16","wo":"upodobania"}],"examples":[{"what":"adjective","row":"worthy of attention or notice; remarkable.","example":"the gardens are notable for their collection of magnolias and camellias"},{"what":"noun","row":"a famous or important person.","example":"businessmen and local notables"}]}',
    ),
    array( // row #111
        'word' => 'notable', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"znaczny"},{"tr":"16","wo":"godny uwagi"},{"tr":"8","wo":"znakomity"},{"tr":"8","wo":"sławny"},{"tr":"8","wo":"gospodarny"}],"noun":[{"tr":"8","wo":"dostojnik"}],"examples":[{"what":"adjective","row":"worthy of attention or notice; remarkable.","example":"the gardens are notable for their collection of magnolias and camellias"},{"what":"noun","row":"a famous or important person.","example":"businessmen and local notables"}]}',
    ),
    array( // row #112
        'word' => 'Foil', 'pl_PL' => '{"noun":[{"tr":"24","wo":"folia"},{"tr":"8","wo":"floret"},{"tr":"8","wo":"tło"},{"tr":"8","wo":"folga"},{"tr":"8","wo":"trop"}],"verb":[{"tr":"8","wo":"uwydatniać"},{"tr":"8","wo":"zacierać swój ślad"},{"tr":"8","wo":"pokonać"}],"examples":[{"what":"noun","row":"the track or scent of a hunted animal.","example":null},{"what":"verb","row":"prevent (something considered wrong or undesirable) from succeeding.","example":"a brave policewoman foiled the armed robbery"}]}',
    ),
    array( // row #113
        'word' => 'thereafter', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"od tego czasu"},{"tr":"16","wo":"odtąd"}],"examples":[{"what":"adverb","row":"after that time.","example":"thereafter their fortunes suffered a steep decline"}]}',
    ),
    array( // row #114
        'word' => 'newer', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"nowy"},{"tr":"8","wo":"nowoczesny"},{"tr":"8","wo":"inny"},{"tr":"8","wo":"świeży"},{"tr":"8","wo":"nieznany"},{"tr":"8","wo":"niedoświadczony"},{"tr":"8","wo":"dodatkowy"},{"tr":"8","wo":"nie przyzwyczajony"},{"tr":"8","wo":"obcy"},{"tr":"8","wo":"nie używany"}],"examples":[{"what":"adjective","row":"not existing before; made, introduced, or discovered recently or now for the first time.","example":"new crop varieties"}]}',
    ),
    array( // row #115
        'word' => 'brushed', 'pl_PL' => '{"verb":[{"tr":"16","wo":"szczotkować"},{"tr":"16","wo":"wyszczotkować"},{"tr":"8","wo":"oczyścić"},{"tr":"8","wo":"zamiatać"},{"tr":"8","wo":"rozczesać"},{"tr":"8","wo":"wyszorować"},{"tr":"8","wo":"drasnąć"},{"tr":"8","wo":"muskać"},{"tr":"8","wo":"pomalować"},{"tr":"8","wo":"zawadzać"},{"tr":"8","wo":"ocierać się"}],"examples":[{"what":"adjective","row":"having been treated with a brush, in particular.","example":"Cheney selected the Lasalle wingtip loafer in brushed mahogany."},{"what":"verb","row":"remove (dust or dirt) by sweeping or scrubbing.","example":"we\'ll be able to brush the mud off easily"}]}',
    ),
    array( // row #116
        'word' => 'guided', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"prowadzony"},{"tr":"16","wo":"kierowany"}],"examples":[{"what":"adjective","row":"conducted by a guide.","example":"a guided tour of the castle"},{"what":"verb","row":"show or indicate the way to (someone).","example":"he guided her to the front row and sat beside her"}]}',
    ),
    array( // row #117
        'word' => 'Retail', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"detaliczny"}],"noun":[{"tr":"16","wo":"handel detaliczny"},{"tr":"16","wo":"detal"}],"verb":[{"tr":"8","wo":"prowadzić handel detaliczny"}],"adverb":[{"tr":"8","wo":"detalicznie"}],"examples":[{"what":"noun","row":"the sale of goods to the public in relatively small quantities for use or consumption rather than for resale.","example":"the product\'s retail price"},{"what":"verb","row":"sell (goods) to the public by retail.","example":"the difficulties in retailing the new products"},{"what":"adverb","row":"being sold by retail.","example":"it is not yet available retail"}]}',
    ),
    array( // row #118
        'word' => 'converted', 'pl_PL' => '{"verb":[{"tr":"24","wo":"konwertować"},{"tr":"16","wo":"skonwertować"},{"tr":"16","wo":"przekształcać"},{"tr":"16","wo":"nawracać"},{"tr":"8","wo":"zamieniać"},{"tr":"8","wo":"przetwarzać"},{"tr":"8","wo":"wymieniać"},{"tr":"8","wo":"przemieniać"},{"tr":"8","wo":"przystosować"},{"tr":"8","wo":"przeobrazić"},{"tr":"8","wo":"przechrzcić"},{"tr":"8","wo":"transformować"},{"tr":"8","wo":"odwracać"},{"tr":"8","wo":"nawrócić się na chrześcijanizm"},{"tr":"8","wo":"przeistaczać"},{"tr":"8","wo":"sprzeniewierzać"}],"examples":[{"what":"verb","row":"cause to change in form, character, or function.","example":"production processes that converted raw material into useful forms"}]}',
    ),
    array( // row #119
        'word' => 'hidden', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ukryty"},{"tr":"16","wo":"schowany"},{"tr":"8","wo":"przyczajony"}],"examples":[{"what":"adjective","row":"kept out of sight; concealed.","example":"hidden dangers"},{"what":"verb","row":"put or keep out of sight; conceal from the view or notice of others.","example":"he hid the money in the house"}]}',
    ),
    array( // row #120
        'word' => 'secrets', 'pl_PL' => '{"noun":[{"tr":"16","wo":"tajniki"}],"examples":[{"what":"adjective","row":"(of a person or their build) gracefully thin; slenderly built (used approvingly).","example":"her slim figure"},{"what":"verb","row":"make oneself thinner by dieting and sometimes exercising.","example":"I need to slim down a bit"}]}',
    ),
    array( // row #121
        'word' => 'improvements', 'pl_PL' => '{"noun":[{"tr":"24","wo":"poprawa"},{"tr":"16","wo":"ulepszenie"},{"tr":"16","wo":"polepszenie"},{"tr":"16","wo":"udoskonalenie"},{"tr":"16","wo":"postęp"},{"tr":"16","wo":"podniesienie"},{"tr":"16","wo":"poprawienie"},{"tr":"8","wo":"naprawienie"},{"tr":"8","wo":"podciągnięcie"},{"tr":"8","wo":"amelioracja"},{"tr":"8","wo":"udogodnienie"}],"examples":[{"what":"noun","row":"an example or instance of improving or being improved.","example":"an improvement in EastâWest relations"}]}',
    ),
    array( // row #122
        'word' => 'slim', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"szczupły"},{"tr":"16","wo":"smukły"},{"tr":"8","wo":"wysmukły"},{"tr":"8","wo":"iglasty"},{"tr":"8","wo":"wątły"},{"tr":"8","wo":"chytry"}],"verb":[{"tr":"16","wo":"schudnąć"},{"tr":"8","wo":"wysmukleć"},{"tr":"8","wo":"szczupleć"},{"tr":"8","wo":"wyszczupleć"},{"tr":"8","wo":"wyzgrabnieć"}],"examples":[{"what":"adjective","row":"(of a person or their build) gracefully thin; slenderly built (used approvingly).","example":"her slim figure"},{"what":"verb","row":"make oneself thinner by dieting and sometimes exercising.","example":"I need to slim down a bit"}]}',
    ),
    array( // row #123
        'word' => 'clothing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"odzież"},{"tr":"8","wo":"odzienie"},{"tr":"8","wo":"przyobleczenie"}],"examples":[{"what":"noun","row":"clothes collectively.","example":"an item of clothing"}]}',
    ),
    array( // row #124
        'word' => 'promises', 'pl_PL' => '{"noun":[{"tr":"24","wo":"obietnica"},{"tr":"24","wo":"przyrzeczenie"},{"tr":"16","wo":"promesa"},{"tr":"8","wo":"słowo"}],"verb":[{"tr":"24","wo":"obiecać"},{"tr":"16","wo":"obiecywać"},{"tr":"8","wo":"zapewniać"},{"tr":"8","wo":"przyrzec"},{"tr":"8","wo":"zapowiadać"},{"tr":"8","wo":"rokować"},{"tr":"8","wo":"anonsować się"},{"tr":"8","wo":"obiecywać komuś coś"}],"examples":[{"what":"noun","row":"a declaration or assurance that one will do a particular thing or that a particular thing will happen.","example":"what happened to all those firm promises of support?"},{"what":"verb","row":"assure someone that one will definitely do, give, or arrange something; undertake or declare that something will happen.","example":"he promised to forward my mail"}]}',
    ),
    array( // row #125
        'word' => 'chapel', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kaplica"},{"tr":"8","wo":"zbór"},{"tr":"8","wo":"związek zawodowy drukarzy"}],"examples":[{"what":"noun","row":"a small building for Christian worship, typically one attached to an institution or private house.","example":"a service in the chapel"}]}',
    ),
    array( // row #126
        'word' => 'boss', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szef"},{"tr":"8","wo":"główka"},{"tr":"8","wo":"guzek"},{"tr":"8","wo":"guz"},{"tr":"8","wo":"wypuklina"},{"tr":"8","wo":"wybrzuszenie"},{"tr":"8","wo":"piasta"},{"tr":"8","wo":"zwierzchnik"},{"tr":"8","wo":"dyrektor"},{"tr":"8","wo":"kierownik"},{"tr":"8","wo":"majster"}],"adjective":[{"tr":"8","wo":"przełożony"}],"examples":[{"what":"noun","row":"a person in charge of a worker or organization.","example":"I asked my boss for a promotion"},{"what":"verb","row":"give (someone) orders in a domineering manner.","example":"plump old battle-axes bossing everyone around"},{"what":"adjective","row":"excellent; outstanding.","example":"she\'s a real boss chick"}]}',
    ),
    array( // row #127
        'word' => 'fitted', 'pl_PL' => '{"verb":[{"tr":"16","wo":"dopasować"},{"tr":"16","wo":"dostosować"},{"tr":"16","wo":"przystać"},{"tr":"8","wo":"dopasowywać"},{"tr":"8","wo":"przystosować"},{"tr":"8","wo":"dobrać"},{"tr":"8","wo":"wmontować"},{"tr":"8","wo":"ekwipować"},{"tr":"8","wo":"leżeć dobrze"},{"tr":"8","wo":"przysposabiać"},{"tr":"8","wo":"oprawiać"},{"tr":"8","wo":"nadać się do czegoś na coś"},{"tr":"8","wo":"przypasować"}],"examples":[{"what":"adjective","row":"made or shaped to fill a space or to cover something closely or exactly.","example":"the blouse has a fitted bodice"},{"what":"verb","row":"be of the right shape and size for.","example":"those jeans still fit me"}]}',
    ),
    array( // row #128
        'word' => 'Invitation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zaproszenie"},{"tr":"16","wo":"zachęta"}],"examples":[{"what":"noun","row":"a written or verbal request inviting someone to go somewhere or to do something.","example":"a wedding invitation"}]}',
    ),
    array( // row #129
        'word' => 'tournament', 'pl_PL' => '{"noun":[{"tr":"24","wo":"turniej"},{"tr":"16","wo":"zawody"}],"examples":[{"what":"noun","row":"(in a sport or game) a series of contests between a number of competitors, who compete for an overall prize.","example":"Can you foresee a time when gaming tournaments rival sports championships in terms of audience interest and ratings?"}]}',
    ),
    array( // row #130
        'word' => 'guys', 'pl_PL' => '{"noun":[{"tr":"24","wo":"facet"},{"tr":"8","wo":"typ"},{"tr":"8","wo":"straszydło"},{"tr":"8","wo":"uwięź"}],"examples":[{"what":"noun","row":"a man.","example":"he\'s a nice guy"},{"what":"verb","row":"make fun of; ridicule.","example":"he didn\'t realize I was guying the whole idea"}]}',
    ),
    array( // row #131
        'word' => 'grip', 'pl_PL' => '{"noun":[{"tr":"24","wo":"uchwyt"},{"tr":"24","wo":"chwyt"},{"tr":"16","wo":"uścisk"},{"tr":"16","wo":"trzymanie"},{"tr":"16","wo":"zacisk"},{"tr":"8","wo":"uchwycenie"},{"tr":"8","wo":"ściskanie"},{"tr":"8","wo":"walizeczka"},{"tr":"8","wo":"kleszcze"},{"tr":"8","wo":"chwytacz"},{"tr":"8","wo":"rów"},{"tr":"8","wo":"działanie"}],"verb":[{"tr":"8","wo":"porwać"},{"tr":"8","wo":"wywierać wrażenie"},{"tr":"8","wo":"opanować"},{"tr":"8","wo":"przemawiać"}],"examples":[{"what":"noun","row":"a firm hold; a tight grasp or clasp.","example":"his arm was held in a vicelike grip"},{"what":"verb","row":"take and keep a firm hold of; grasp tightly.","example":"his knuckles were white as he gripped the steering wheel"}]}',
    ),
    array( // row #132
        'word' => 'strikes', 'pl_PL' => '{"noun":[{"tr":"24","wo":"strajk"},{"tr":"24","wo":"uderzenie"},{"tr":"8","wo":"bieg"},{"tr":"8","wo":"rozciągłość"}],"verb":[{"tr":"16","wo":"uderzać"},{"tr":"8","wo":"strajkować"},{"tr":"8","wo":"porazić"},{"tr":"8","wo":"zabić"},{"tr":"8","wo":"trącać"},{"tr":"8","wo":"razić"},{"tr":"8","wo":"trzaskać"},{"tr":"8","wo":"trzepać"}],"examples":[{"what":"noun","row":"a refusal to work organized by a body of employees as a form of protest, typically in an attempt to gain a concession or concessions from their employer.","example":"dockers voted for an all-out strike"},{"what":"verb","row":"hit forcibly and deliberately with one\'s hand or a weapon or other implement.","example":"he raised his hand, as if to strike me"}]}',
    ),
    array( // row #133
        'word' => 'physically', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"fizycznie"}],"examples":[{"what":"noun","row":"a state in the southeastern US, on a peninsula that extends into the Atlantic Ocean and the Gulf of Mexico; population 18,328,340 (est. 2008); capital, Tallahassee; statehood, Mar. 3, 1845 (27). Explored by Ponce de LeÃ³n in 1513, it was purchased from Spain by the US in 1819. It is a popular resort and retirement area.","example":null}]}',
    ),
    array( // row #134
        'word' => 'grabbed', 'pl_PL' => '{"verb":[{"tr":"24","wo":"chwycić"},{"tr":"16","wo":"porwać"},{"tr":"8","wo":"uchwycić"},{"tr":"8","wo":"grabić"},{"tr":"8","wo":"chapać"},{"tr":"8","wo":"dorwać"},{"tr":"8","wo":"uchwycić się"}],"examples":[{"what":"verb","row":"grasp or seize suddenly and roughly.","example":"she grabbed him by the shirt collar"}]}',
    ),
    array( // row #135
        'word' => 'purchased', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"kupiony"}],"examples":[{"what":"verb","row":"acquire (something) by paying for it; buy.","example":"Mr. Gill spotted the manuscript at a local auction and purchased it for $1,500"}]}',
    ),
    array( // row #136
        'word' => 'ninth', 'pl_PL' => '{"aaaaaa":[{"tr":"24","wo":"dziewiąty"}],"noun":[{"tr":"24","wo":"dziewiąta"}],"examples":[{"what":"","row":"constituting number nine in a sequence; 9th.","example":"the ninth century"}]}',
    ),
    array( // row #137
        'word' => 'pioneer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pionier"}],"adjective":[{"tr":"24","wo":"pionierski"}],"verb":[{"tr":"8","wo":"utorować drogę"},{"tr":"8","wo":"być pionierem"}],"examples":[{"what":"noun","row":"a person who is among the first to explore or settle a new country or area.","example":"The decision came a month before the start of the Winter Olympics in Utah and can be expected to put the spotlight on plural marriages that once thrived among Mormon pioneers who settled here."},{"what":"verb","row":"develop or be the first to use or apply (a new method, area of knowledge, or activity).","example":"he has pioneered a number of innovative techniques"}]}',
    ),
    array( // row #138
        'word' => 'compromise', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kompromis"}],"adjective":[{"tr":"24","wo":"kompromisowy"}],"verb":[{"tr":"8","wo":"kompromitować"},{"tr":"8","wo":"załatwiać"},{"tr":"8","wo":"zawierać ugodę"}],"examples":[{"what":"noun","row":"an agreement or a settlement of a dispute that is reached by each side making concessions.","example":"an ability to listen to two sides in a dispute, and devise a compromise acceptable to both"},{"what":"verb","row":"settle a dispute by mutual concession.","example":"in the end we compromised and deferred the issue"}]}',
    ),
    array( // row #139
        'word' => 'injured', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ranny"},{"tr":"8","wo":"obrażony"}],"examples":[{"what":"adjective","row":"harmed, damaged, or impaired.","example":"a road accident left him severely injured"}]}',
    ),
    array( // row #140
        'word' => 'PARKS', 'pl_PL' => '{"noun":[{"tr":"24","wo":"park"},{"tr":"8","wo":"rezerwat"},{"tr":"8","wo":"łożysko ostryg"}],"verb":[{"tr":"24","wo":"parkować"}],"examples":[{"what":"noun","row":"a large public green area in a town, used for recreation.","example":"a walk around the park"},{"what":"verb","row":"bring (a vehicle that one is driving) to a halt and leave it temporarily, typically in a parking lot or by the side of the road.","example":"he parked his car outside her house"}]}',
    ),
    array( // row #141
        'word' => 'hotels', 'pl_PL' => '{"noun":[{"tr":"24","wo":"hotel"}],"examples":[{"what":"noun","row":"an establishment providing accommodations, meals, and other services for travelers and tourists.","example":"He instead spent a couple of nights in a Frankfurt hotel room when nobody showed up to greet him at the other end."}]}',
    ),
    array( // row #142
        'word' => 'ranks', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szeregi"}],"examples":[{"what":"adjective","row":"conforming with generally accepted standards of respectable or moral behavior.","example":"the good name of such a decent and innocent person"}]}',
    ),
    array( // row #143
        'word' => 'decent', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"przyzwoity"},{"tr":"8","wo":"skromny"},{"tr":"8","wo":"obyczajny"},{"tr":"8","wo":"ludzki"}],"examples":[{"what":"adjective","row":"conforming with generally accepted standards of respectable or moral behavior.","example":"the good name of such a decent and innocent person"}]}',
    ),
    array( // row #144
        'word' => 'TACTICS', 'pl_PL' => '{"noun":[{"tr":"24","wo":"taktyka"},{"tr":"8","wo":"metoda"}],"examples":[{"what":"verb","row":"make (an idea, situation, or problem) clear to someone by describing it in more detail or revealing relevant facts or ideas.","example":"they explained that their lives centered on the religious rituals"}]}',
    ),
    array( // row #145
        'word' => 'puts', 'pl_PL' => '{"verb":[{"tr":"16","wo":"położyć"},{"tr":"16","wo":"postawić"},{"tr":"16","wo":"umieszczać"},{"tr":"16","wo":"stawiać"},{"tr":"16","wo":"wkładać"},{"tr":"8","wo":"kłaść"},{"tr":"8","wo":"nakładać"},{"tr":"8","wo":"powiedzieć"},{"tr":"8","wo":"zmieścić"},{"tr":"8","wo":"pokładać"},{"tr":"8","wo":"przedstawiać"},{"tr":"8","wo":"wsadzać"}],"examples":[{"what":"noun","row":"a throw of the shot or weight.","example":"Nichols recorded a put of 61.05 on his third attempt."},{"what":"verb","row":"move to or place in a particular position.","example":"Harry put down his cup"}]}',
    ),
    array( // row #146
        'word' => 'EXPLAINS', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wytłumaczyć"},{"tr":"16","wo":"wyjaśniać"},{"tr":"16","wo":"tłumaczyć"},{"tr":"8","wo":"objaśniać"},{"tr":"8","wo":"sumitować się"},{"tr":"8","wo":"klarować"},{"tr":"8","wo":"wyklarować"},{"tr":"8","wo":"motywować"},{"tr":"8","wo":"wywieść"},{"tr":"8","wo":"przedkładać"}],"examples":[{"what":"verb","row":"make (an idea, situation, or problem) clear to someone by describing it in more detail or revealing relevant facts or ideas.","example":"they explained that their lives centered on the religious rituals"}]}',
    ),
    array( // row #147
        'word' => 'temporarily', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"tymczasowo"},{"tr":"24","wo":"chwilowo"}],"examples":[{"what":"noun","row":"a commercial city in northeastern Kansas; population 52,284 (est. 2008).","example":null}]}',
    ),
    array( // row #148
        'word' => 'greeted', 'pl_PL' => '{"verb":[{"tr":"24","wo":"powitać"},{"tr":"24","wo":"przywitać"},{"tr":"24","wo":"witać"},{"tr":"16","wo":"przywitać się"},{"tr":"16","wo":"pozdrawiać"},{"tr":"8","wo":"ukłonić się"},{"tr":"8","wo":"kłaniać się na powitanie"}],"examples":[{"what":"verb","row":"give a polite word or sign of welcome or recognition to (someone) on meeting.","example":"In the village street, many people stopped to greet me and welcome my brother and his wife."}]}',
    ),
    array( // row #149
        'word' => 'conditioned', 'pl_PL' => '{"adjective":[{"tr":"8","wo":"zastrzeżony"},{"tr":"8","wo":"sytuowany"},{"tr":"8","wo":"doprowadzony do formy"}],"examples":[{"what":"verb","row":"have a significant influence on or determine (the manner or outcome of something).","example":"national choices are conditioned by the international political economy"}]}',
    ),
    array( // row #150
        'word' => 'bet', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zakład"}],"verb":[{"tr":"8","wo":"zakładać się"},{"tr":"8","wo":"postawić na coś lub kogoś"}],"examples":[{"what":"noun","row":"an act of risking a sum of money on the outcome of a future event.","example":"every Saturday she had a bet on the horses"},{"what":"verb","row":"risk something, usually a sum of money, against someone else\'s on the basis of the outcome of a future event, such as the result of a race or game.","example":"betting on horses"}]}',
    ),
    array( // row #151
        'word' => 'residents', 'pl_PL' => '{"noun":[{"tr":"16","wo":"rezydent"},{"tr":"8","wo":"stały mieszkaniec"}],"examples":[{"what":"noun","row":"a person who lives somewhere permanently or on a long-term basis.","example":"Citizens or permanent residents of other countries must have a valid passport and\\/or a valid visitor\'s visa."}]}',
    ),
    array( // row #152
        'word' => 'sailing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"żeglarstwo"},{"tr":"16","wo":"żegluga"},{"tr":"16","wo":"nawigacja"}],"examples":[{"what":"noun","row":"the action of sailing in a ship or boat.","example":"a sailing club"},{"what":"verb","row":"travel in a boat with sails, especially as a sport or recreation.","example":"Ian took us out sailing on the lake"}]}',
    ),
    array( // row #153
        'word' => 'intervention', 'pl_PL' => '{"noun":[{"tr":"24","wo":"interwencja"},{"tr":"8","wo":"wmieszanie"},{"tr":"8","wo":"zabieg"}],"examples":[{"what":"noun","row":"the action or process of intervening.","example":"they are plants that grow naturally without human intervention"}]}',
    ),
    array( // row #154
        'word' => 'dominated', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zdominować"},{"tr":"24","wo":"dominować"},{"tr":"16","wo":"panować"},{"tr":"8","wo":"górować"},{"tr":"8","wo":"królować"},{"tr":"8","wo":"posiadać"},{"tr":"8","wo":"rozpanoszyć się"}],"examples":[{"what":"verb","row":"have a commanding influence on; exercise control over.","example":"the company dominates the market for operating system software"}]}',
    ),
    array( // row #155
        'word' => 'disposal', 'pl_PL' => '{"noun":[{"tr":"16","wo":"sprzedaż"},{"tr":"16","wo":"wywóz"},{"tr":"8","wo":"dysponowanie"},{"tr":"8","wo":"pozbycie się"},{"tr":"8","wo":"dyspozycja"},{"tr":"8","wo":"załatwienie"}],"examples":[{"what":"noun","row":"the action or process of throwing away or getting rid of something.","example":"the disposal of radioactive waste"}]}',
    ),
    array( // row #156
        'word' => 'submarines', 'pl_PL' => '{"noun":[{"tr":"24","wo":"łódź podwodna"}],"examples":[{"what":"noun","row":"a warship with a streamlined hull designed to operate completely submerged in the sea for long periods, equipped with an internal store of air and a periscope and typically armed with torpedoes and\\/or missiles.","example":"It is common now for Orthodox priests to baptize and sanctify warships, submarines , missiles, and tanks."}]}',
    ),
    array( // row #157
        'word' => 'alliance', 'pl_PL' => '{"noun":[{"tr":"16","wo":"przymierze"},{"tr":"8","wo":"alians"},{"tr":"8","wo":"liga"},{"tr":"8","wo":"skoligacenie"}],"examples":[{"what":"noun","row":"a union or association formed for mutual benefit, especially between countries or organizations.","example":"a defensive alliance between Australia and New Zealand"}]}',
    ),
    array( // row #158
        'word' => 'ad', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ogłoszenie"},{"tr":"24","wo":"reklama"},{"tr":"8","wo":"anons"}],"examples":[{"what":"noun","row":"an advertisement.","example":"Galleries are also available of the posters and print ads used to advertise the movie."}]}',
    ),
    array( // row #159
        'word' => 'hospitals', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szpital"},{"tr":"8","wo":"lecznica"}],"examples":[{"what":"noun","row":"an institution providing medical and surgical treatment and nursing care for sick or injured people.","example":"My doctor has referred me to the eye clinic at the local hospital for surgical treatment."}]}',
    ),
    array( // row #160
        'word' => 'illness', 'pl_PL' => '{"noun":[{"tr":"24","wo":"choroba"},{"tr":"16","wo":"schorzenie"},{"tr":"8","wo":"niedomaganie"},{"tr":"8","wo":"cierpienie"},{"tr":"8","wo":"chorowanie"},{"tr":"8","wo":"zaniemożenie"}],"examples":[{"what":"noun","row":"a disease or period of sickness affecting the body or mind.","example":"he died after a long illness"}]}',
    ),
    array( // row #161
        'word' => 'grants', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dotacja"},{"tr":"8","wo":"darowizna"},{"tr":"8","wo":"zasiłek"},{"tr":"8","wo":"zapomoga"}],"verb":[{"tr":"24","wo":"udzielać"},{"tr":"16","wo":"nadać"},{"tr":"8","wo":"spełniać"},{"tr":"8","wo":"darzyć"},{"tr":"8","wo":"przychylać się"},{"tr":"8","wo":"przyznać coś komuś"}],"examples":[{"what":"noun","row":"a sum of money given by an organization, especially a government, for a particular purpose.","example":"The money is used for small grants to deserving organizations and individuals."},{"what":"verb","row":"agree to give or allow (something requested) to.","example":"a letter granting them permission to smoke"}]}',
    ),
    array( // row #162
        'word' => 'observers', 'pl_PL' => '{"noun":[{"tr":"24","wo":"obserwator"},{"tr":"8","wo":"człowiek przestrzegający"}],"examples":[{"what":"noun","row":"a person who watches or notices something.","example":"to a casual observer, he was at peace"}]}',
    ),
    array( // row #163
        'word' => 'February', 'pl_PL' => '{"noun":[{"tr":"24","wo":"luty"}],"examples":[{"what":"noun","row":"the second month of the year, in the northern hemisphere usually considered the last month of winter.","example":"even in February the place is busy"}]}',
    ),
    array( // row #164
        'word' => 'enforced', 'pl_PL' => '{"verb":[{"tr":"24","wo":"egzekwować"},{"tr":"16","wo":"wyegzekwować"},{"tr":"16","wo":"narzucać"},{"tr":"8","wo":"zmusić"},{"tr":"8","wo":"wprowadzać w życie"},{"tr":"8","wo":"popierać"}],"examples":[{"what":"adjective","row":"caused by necessity or force; compulsory.","example":"a period of enforced idleness"},{"what":"verb","row":"compel observance of or compliance with (a law, rule, or obligation).","example":"Damages were being sought for compensation as a result of the council\'s negligent advice and not primarily to enforce a public law right."}]}',
    ),
    array( // row #165
        'word' => 'Sheriff', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szeryf"}],"examples":[{"what":"noun","row":"(in the US) an elected officer in a county who is responsible for keeping the peace.","example":"And the spokeswoman for the Broward County sheriffs office candidly stated that we did that because of the media hype."}]}',
    ),
    array( // row #166
        'word' => 'receives', 'pl_PL' => '{"verb":[{"tr":"24","wo":"otrzymać"},{"tr":"16","wo":"odbierać"},{"tr":"16","wo":"uzyskać"},{"tr":"16","wo":"przyjąć"},{"tr":"8","wo":"dostać"},{"tr":"8","wo":"pobierać"},{"tr":"8","wo":"doznać"},{"tr":"8","wo":"zmieścić"},{"tr":"8","wo":"przyjąć gości"},{"tr":"8","wo":"dźwigać ciężar konstrukcji"},{"tr":"8","wo":"pomieścić w sobie"},{"tr":"8","wo":"przyjąć na siebie"},{"tr":"8","wo":"przystąpić do komunii świętej"},{"tr":"8","wo":"dopuszczać"},{"tr":"8","wo":"doświadczać"}],"examples":[{"what":"verb","row":"be given, presented with, or paid (something).","example":"most businesses will receive a tax cut"}]}',
    ),
    array( // row #167
        'word' => 'orderly', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"uporządkowany"},{"tr":"16","wo":"systematyczny"},{"tr":"8","wo":"porządny"},{"tr":"8","wo":"dyżurny"},{"tr":"8","wo":"służbowy"},{"tr":"8","wo":"zdyscyplinowany"}],"noun":[{"tr":"16","wo":"ordynans"},{"tr":"8","wo":"porządnicki"}],"examples":[{"what":"adjective","row":"neatly and methodically arranged.","example":"an orderly arrangement of objects"},{"what":"noun","row":"an attendant in a hospital responsible for the nonmedical care of patients and the maintenance of order and cleanliness.","example":"The agreement covers staff working in various roles such as orderlies , patient care assistants, kitchen staff, catering attendants and gardeners."}]}',
    ),
    array( // row #168
        'word' => 'legislators', 'pl_PL' => '{"noun":[{"tr":"24","wo":"prawodawca"},{"tr":"24","wo":"ustawodawca"}],"examples":[{"what":"noun","row":"a person who makes laws; a member of a legislative body.","example":"The legislator must have intended to have the money paid back to the person who paid it."}]}',
    ),
    array( // row #169
        'word' => 'rang', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zadzwonić"},{"tr":"24","wo":"dzwonić"},{"tr":"8","wo":"brzmieć"},{"tr":"8","wo":"zaobrączkować"},{"tr":"8","wo":"podkrążyć"},{"tr":"8","wo":"okrążyć"},{"tr":"8","wo":"wydzwaniać"},{"tr":"8","wo":"przedzwonić"},{"tr":"8","wo":"rozbrzmiewać"},{"tr":"8","wo":"zabrzmieć"},{"tr":"8","wo":"zagrzmieć"},{"tr":"8","wo":"dźwięczeć"}],"examples":[{"what":"verb","row":"surround (someone or something), especially for protection or containment.","example":"the courthouse was ringed with police"}]}',
    ),
    array( // row #170
        'word' => 'utopian', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"utopijny"}],"noun":[{"tr":"16","wo":"utopista"},{"tr":"16","wo":"utopijczyk"}],"examples":[{"what":"noun","row":"an idealistic reformer.","example":"The idea of a classical republic inspired a tradition of thought which, overtaken by the new politics of reason of state in early modern times, was preserved largely in the writings of philosophers, utopians , and pamphleteers."},{"what":"adjective","row":"modeled on or aiming for a state in which everything is perfect; idealistic.","example":"The exhibition features detailed but unrealised designs for futuristic new ways of living and utopian ideals of the perfect living space."}]}',
    ),
    array( // row #171
        'word' => 'Mars', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Mars"}],"examples":[{"what":"noun","row":"the god of war and the most important Roman god after Jupiter. The month of March is named after him.","example":null}]}',
    ),
    array( // row #172
        'word' => 'occurring', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"występujący"}],"examples":[{"what":"verb","row":"happen; take place.","example":"the accident occurred at about 3:30 p.m."}]}',
    ),
    array( // row #173
        'word' => 'planetary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"planetarny"}],"examples":[{"what":"adjective","row":"of, relating to, or belonging to a planet or planets.","example":"the laws of planetary motion"}]}',
    ),
    array( // row #174
        'word' => 'mate', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kolega"},{"tr":"16","wo":"mat"},{"tr":"16","wo":"towarzysz"},{"tr":"8","wo":"pomocnik"},{"tr":"8","wo":"małżonek"},{"tr":"8","wo":"brat"}],"verb":[{"tr":"8","wo":"dać mata"},{"tr":"8","wo":"połączyć węzłem małżeńskim"},{"tr":"8","wo":"łączyć się w pary"},{"tr":"8","wo":"dobrać"},{"tr":"8","wo":"schodzić się"},{"tr":"8","wo":"towarzyszyć"}],"examples":[{"what":"noun","row":"each of a pair of birds or other animals.","example":"a male bird sings to court a mate"},{"what":"verb","row":"(of animals or birds) come together for breeding; copulate.","example":"successful males may mate with many females"}]}',
    ),
    array( // row #175
        'word' => 'linear', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"liniowy"},{"tr":"16","wo":"linearny"},{"tr":"8","wo":"linijny"},{"tr":"8","wo":"lancetowaty"},{"tr":"8","wo":"równowąski"}],"examples":[{"what":"adjective","row":"arranged in or extending along a straight or nearly straight line.","example":"linear arrangements"}]}',
    ),
    array( // row #176
        'word' => 'nuts', 'pl_PL' => '{"noun":[{"tr":"24","wo":"orzechy"},{"tr":"8","wo":"dziwak"}],"examples":[{"what":"adjective","row":"insane.","example":"the way he turns on the television as soon as he walks in drives me nuts"},{"what":"exclamation","row":"an expression of contempt or derision.","example":"keep up the good work, and nuts to everyone who doesn\'t like it"}]}',
    ),
    array( // row #177
        'word' => 'reveals', 'pl_PL' => '{"verb":[{"tr":"16","wo":"odsłonić"},{"tr":"16","wo":"ujawniać"},{"tr":"16","wo":"ukazać"},{"tr":"16","wo":"odkryć"},{"tr":"16","wo":"wykazać"},{"tr":"16","wo":"zdradzać"},{"tr":"16","wo":"objawiać"},{"tr":"8","wo":"wykryć"},{"tr":"8","wo":"wyjawiać"},{"tr":"8","wo":"uwidocznić"},{"tr":"8","wo":"przejawiać"},{"tr":"8","wo":"uzewnętrznić"}],"examples":[{"what":"verb","row":"make (previously unknown or secret information) known to others.","example":"Brenda was forced to reveal Robbie\'s whereabouts"},{"what":"noun","row":"(in a movie or television show) a final revelation of information that has previously been kept from the characters or viewers.","example":"the big reveal at the end of the movie answers all questions"}]}',
    ),
    array( // row #178
        'word' => 'mode', 'pl_PL' => '{"noun":[{"tr":"24","wo":"tryb"},{"tr":"16","wo":"sposób"},{"tr":"8","wo":"moda"},{"tr":"8","wo":"tonacja"}],"examples":[{"what":"noun","row":"a way or manner in which something occurs or is experienced, expressed, or done.","example":"his preferred mode of travel was a kayak"}]}',
    ),
    array( // row #179
        'word' => 'Reverend', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"czcigodny"},{"tr":"24","wo":"wielebny"},{"tr":"16","wo":"przewielebny"}],"noun":[{"tr":"16","wo":"kleryk"}],"examples":[{"what":"adjective","row":"used as a title or form of address to members of the clergy.","example":"the Reverend Jesse Jackson"},{"what":"noun","row":"a member of the clergy.","example":"This is the worst thing they could find to say about this gay reverend to attack him?"}]}',
    ),
    array( // row #180
        'word' => 'stumbled', 'pl_PL' => '{"verb":[{"tr":"16","wo":"potknąć się"},{"tr":"16","wo":"błądzić"},{"tr":"16","wo":"popełniać błędy"},{"tr":"16","wo":"zająknąć się"},{"tr":"16","wo":"przejęzyczać się"},{"tr":"16","wo":"wydukać"},{"tr":"16","wo":"mieć skrupuły"}],"examples":[{"what":"verb","row":"trip or momentarily lose one\'s balance; almost fall.","example":"her foot caught a shoe and she stumbled"}]}',
    ),
    array( // row #181
        'word' => 'punishment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kara"},{"tr":"16","wo":"karanie"},{"tr":"16","wo":"ukaranie"},{"tr":"8","wo":"pokuta"},{"tr":"8","wo":"lanie"}],"examples":[{"what":"noun","row":"the infliction or imposition of a penalty as retribution for an offense.","example":"crime demands just punishment"}]}',
    ),
    array( // row #182
        'word' => 'protein', 'pl_PL' => '{"noun":[{"tr":"24","wo":"białko"},{"tr":"8","wo":"proteina"}],"examples":[{"what":"noun","row":"any of a class of nitrogenous organic compounds that consist of large molecules composed of one or more long chains of amino acids and are an essential part of all living organisms, especially as structural components of body tissues such as muscle, hair, collagen, etc., and as enzymes and antibodies.","example":"The 75-kD fusion protein was purified four times by affinity binding to an amylose resin."}]}',
    ),
    array( // row #183
        'word' => 'milligrams', 'pl_PL' => '{"noun":[{"tr":"24","wo":"miligram"}],"examples":[{"what":"noun","row":"one thousandth of a gram.","example":"Dietary labels and guidelines, however, use milligrams , grams, and liters."}]}',
    ),
    array( // row #184
        'word' => 'habits', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zwyczaj"},{"tr":"24","wo":"nawyk"},{"tr":"16","wo":"przyzwyczajenie"},{"tr":"16","wo":"nałóg"},{"tr":"8","wo":"obyczaj"},{"tr":"8","wo":"maniery"},{"tr":"8","wo":"habit zakonny"},{"tr":"8","wo":"pokrój drzewa"}],"examples":[{"what":"noun","row":"a settled or regular tendency or practice, especially one that is hard to give up.","example":"this can develop into a bad habit"},{"what":"verb","row":"dress; clothe.","example":"a boy habited as a serving lad"}]}',
    ),
    array( // row #185
        'word' => 'intimate', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"intymny"},{"tr":"16","wo":"bliski"},{"tr":"8","wo":"zażyły"},{"tr":"8","wo":"konfidencjonalny"},{"tr":"8","wo":"gruntowny"},{"tr":"8","wo":"buduarowy"}],"noun":[{"tr":"8","wo":"serdeczny przyjaciel"}],"verb":[{"tr":"8","wo":"oznajmiać"},{"tr":"8","wo":"notyfikować"},{"tr":"8","wo":"dać do zrozumienia"},{"tr":"8","wo":"dawać do zrozumienia"}],"examples":[{"what":"adjective","row":"closely acquainted; familiar, close.","example":"intimate friends"},{"what":"verb","row":"imply or hint.","example":"he had already intimated that he might not be able to continue"},{"what":"noun","row":"a very close friend.","example":"his circle of intimates"}]}',
    ),
    array( // row #186
        'word' => 'shining', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"błyszczący"},{"tr":"16","wo":"lustrzany"},{"tr":"8","wo":"świecący"},{"tr":"8","wo":"błyskotliwy"}],"examples":[{"what":"adjective","row":"giving out or reflecting bright light.","example":"a shining expanse of water"}]}',
    ),
    array( // row #187
        'word' => 'heroic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"heroiczny"},{"tr":"24","wo":"bohaterski"}],"examples":[{"what":"adjective","row":"having the characteristics of a hero or heroine; very brave.","example":"heroic deeds"},{"what":"noun","row":"behavior or talk that is bold or dramatic, especially excessively or unexpectedly so.","example":"the makeshift team performed heroics"}]}',
    ),
    array( // row #188
        'word' => 'tale', 'pl_PL' => '{"noun":[{"tr":"24","wo":"opowieść"},{"tr":"24","wo":"bajka"},{"tr":"24","wo":"opowiadanie"},{"tr":"8","wo":"powiastka"},{"tr":"8","wo":"baja"},{"tr":"8","wo":"gawęda"}],"examples":[{"what":"noun","row":"a fictitious or true narrative or story, especially one that is imaginatively recounted.","example":"Mary and Tom Coogan\'s story is an inspirational tale of a true and deep love that conquered tragedy."}]}',
    ),
    array( // row #189
        'word' => 'theoretical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"teoretyczny"},{"tr":"8","wo":"akademicki"}],"examples":[{"what":"adjective","row":"concerned with or involving the theory of a subject or area of study rather than its practical application.","example":"a theoretical physicist"}]}',
    ),
    array( // row #190
        'word' => 'breathing', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"oddechowy"},{"tr":"8","wo":"żywy"},{"tr":"8","wo":"tchnący życiem"}],"noun":[{"tr":"8","wo":"dech"}],"examples":[{"what":"noun","row":"the process of taking air into and expelling it from the lungs.","example":"his breathing was shallow"}]}',
    ),
    array( // row #191
        'word' => 'sixty', 'pl_PL' => '{"aaaaaa":[{"tr":"24","wo":"sześćdziesiąt"}],"noun":[{"tr":"8","wo":"sześćdziesiątka"}],"examples":[{"what":"","row":"the number equivalent to the product of six and ten; ten more than fifty; 60.","example":"a crew of sixty"}]}',
    ),
    array( // row #192
        'word' => 'persuaded', 'pl_PL' => '{"verb":[{"tr":"16","wo":"namawiać"},{"tr":"16","wo":"nakłaniać"},{"tr":"8","wo":"wmawiać"},{"tr":"8","wo":"perswadować"},{"tr":"8","wo":"przekonać kogoś"}],"examples":[{"what":"verb","row":"cause (someone) to do something through reasoning or argument.","example":"it wasn\'t easy, but I persuaded him to do the right thing"}]}',
    ),
    array( // row #193
        'word' => 'Tales', 'pl_PL' => '{"noun":[{"tr":"24","wo":"opowieść"},{"tr":"24","wo":"bajka"},{"tr":"16","wo":"opowiadanie"},{"tr":"8","wo":"powiastka"},{"tr":"8","wo":"gawęda"},{"tr":"8","wo":"baja"}],"examples":[{"what":"noun","row":"a writ for summoning substitute jurors when the original jury has become deficient in number.","example":"And if in such case there should be a want of jurors, an Habeas Corpora with a Tales may, said the Court, possibly issue; but no Tales can be granted upon a commission of Gaol Delivery."},{"what":"noun","row":"a fictitious or true narrative or story, especially one that is imaginatively recounted.","example":"Mary and Tom Coogan\'s story is an inspirational tale of a true and deep love that conquered tragedy."}]}',
    ),
    array( // row #194
        'word' => 'melody', 'pl_PL' => '{"noun":[{"tr":"24","wo":"melodia"},{"tr":"16","wo":"muzyka"},{"tr":"16","wo":"melodyjka"},{"tr":"8","wo":"nuta"},{"tr":"8","wo":"zaśpiew"},{"tr":"8","wo":"kujawiak"}],"examples":[{"what":"noun","row":"a sequence of single notes that is musically satisfying.","example":"he picked out an intricate melody on his guitar"}]}',
    ),
    array( // row #195
        'word' => 'scared', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"wylękniony"},{"tr":"8","wo":"zalękniony"}],"examples":[{"what":"adjective","row":"fearful; frightened.","example":"she\'s scared stiff of her dad"}]}',
    ),
    array( // row #196
        'word' => 'SIDEWALK', 'pl_PL' => '{"noun":[{"tr":"24","wo":"chodnik"},{"tr":"16","wo":"trotuar"}],"examples":[{"what":"noun","row":"a paved path for pedestrians at the side of a road.","example":"Proud old trees stood on the side of a large road, keeping the sidewalks in calming shade."}]}',
    ),
    array( // row #197
        'word' => 'diet', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dieta"},{"tr":"24","wo":"sejm"},{"tr":"8","wo":"odżywianie się"},{"tr":"8","wo":"kuracja"}],"examples":[{"what":"noun","row":"the kinds of food that a person, animal, or community habitually eats.","example":"a vegetarian diet"},{"what":"verb","row":"restrict oneself to small amounts or special kinds of food in order to lose weight.","example":"it\'s difficult to diet"}]}',
    ),
    array( // row #198
        'word' => 'bullets', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kula"},{"tr":"24","wo":"pocisk"},{"tr":"16","wo":"kulka"}],"examples":[{"what":"noun","row":"a projectile for firing from a rifle, revolver, or other small firearm, typically made of metal, cylindrical and pointed, and sometimes containing an explosive.","example":"She said authorities also found in the car automatic rifles, bullet cartridges, plastic explosives and other materials."}]}',
    ),
    array( // row #199
        'word' => 'theirs', 'pl_PL' => '{"pronoun":[{"tr":"24","wo":"ich"},{"tr":"16","wo":"oni"},{"tr":"16","wo":"one"}],"examples":[{"what":"pronoun","row":"used to refer to a thing or things belonging to or associated with two or more people or things previously mentioned.","example":"they think everything is theirs"}]}',
    ),
    array( // row #200
        'word' => 'enjoyment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przyjemność"},{"tr":"8","wo":"posiadanie"},{"tr":"8","wo":"korzystanie z praw"},{"tr":"8","wo":"uciecha"}],"examples":[{"what":"noun","row":"the state or process of taking pleasure in something.","example":"the enjoyment of a good wine"}]}',
    ),
    array( // row #201
        'word' => 'vacuum', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"próżniowy"}],"noun":[{"tr":"16","wo":"próżnia"},{"tr":"8","wo":"pustka"}],"verb":[{"tr":"8","wo":"odkurzać odkurzaczem"}],"examples":[{"what":"noun","row":"a space entirely devoid of matter.","example":"Since by definition it contains no matter, the vacuum of space itself has NO temperature."},{"what":"verb","row":"clean with a vacuum cleaner.","example":"the room needs to be vacuumed"}]}',
    ),
    array( // row #202
        'word' => 'educated', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wykształcony"},{"tr":"8","wo":"oświecony"},{"tr":"8","wo":"kulturalny"},{"tr":"8","wo":"nauczony"},{"tr":"8","wo":"wychowany"},{"tr":"8","wo":"wyćwiczony"},{"tr":"8","wo":"wytresowany"},{"tr":"8","wo":"ułożony"},{"tr":"8","wo":"wyhodowany"}],"examples":[{"what":"adjective","row":"having been educated.","example":"a Harvard-educated lawyer"}]}',
    ),
    array( // row #203
        'word' => 'displays', 'pl_PL' => '{"noun":[{"tr":"16","wo":"pokaz"},{"tr":"16","wo":"wystawa"},{"tr":"16","wo":"ekspozycja"},{"tr":"8","wo":"popis"},{"tr":"8","wo":"manifestacja"},{"tr":"8","wo":"okazywanie"},{"tr":"8","wo":"buńczuczność"}],"verb":[{"tr":"8","wo":"wystawiać"},{"tr":"8","wo":"wykazać"},{"tr":"8","wo":"wystawiać na pokaz"},{"tr":"8","wo":"manifestować"},{"tr":"8","wo":"przejawiać"}],"examples":[{"what":"noun","row":"a performance, show, or event intended for public entertainment.","example":"a display of fireworks"},{"what":"verb","row":"make a prominent exhibition of (something) in a place where it can be easily seen.","example":"the palace used to display a series of Flemish tapestries"}]}',
    ),
    array( // row #204
        'word' => 'respectable', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"poważny"},{"tr":"24","wo":"szanowany"},{"tr":"16","wo":"porządny"},{"tr":"16","wo":"zacny"},{"tr":"8","wo":"zbożny"},{"tr":"8","wo":"honorowy"},{"tr":"8","wo":"spory"}],"examples":[{"what":"adjective","row":"regarded by society to be good, proper, or correct.","example":"they thought the stage no life for a respectable lady"}]}',
    ),
    array( // row #205
        'word' => 'obliged', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zobowiązany"}],"examples":[{"what":"verb","row":"make (someone) legally or morally bound to an action or course of action.","example":"doctors are obliged by law to keep patients alive while there is a chance of recovery"}]}',
    ),
    array( // row #206
        'word' => 'Belgians', 'pl_PL' => '{"noun":[{"tr":"16","wo":"Belg"}],"examples":[{"what":"noun","row":"a native or inhabitant of Belgium or a person of Belgian descent.","example":"The Danes, Belgians and Italians are more relaxed still with their working weeks of fewer than 39 hours."}]}',
    ),
    array( // row #207
        'word' => 'indirect', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pośredni"},{"tr":"16","wo":"niebezpośredni"},{"tr":"8","wo":"okrężny"},{"tr":"8","wo":"uboczny"},{"tr":"8","wo":"zależny"},{"tr":"8","wo":"dalszy"},{"tr":"8","wo":"kręty"}],"examples":[{"what":"adjective","row":"not directly caused by or resulting from something.","example":"full employment would have an indirect effect on wage levels"}]}',
    ),
    array( // row #208
        'word' => 'commodities', 'pl_PL' => '{"noun":[{"tr":"24","wo":"towar"}],"examples":[{"what":"noun","row":"a raw material or primary agricultural product that can be bought and sold, such as copper or coffee.","example":"Exports of primary commodities and the import of finished products are not favourable for any country."}]}',
    ),
    array( // row #209
        'word' => 'Competent', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"kompetentny"},{"tr":"8","wo":"fachowy"},{"tr":"8","wo":"miarodajny"},{"tr":"8","wo":"umiejętny"},{"tr":"8","wo":"należący"},{"tr":"8","wo":"dostateczny"}],"examples":[{"what":"adjective","row":"having the necessary ability, knowledge, or skill to do something successfully.","example":"a highly competent surgeon"}]}',
    ),
    array( // row #210
        'word' => 'shaking', 'pl_PL' => '{"adjective":[{"tr":"8","wo":"drżący"}],"examples":[{"what":"verb","row":"(of a structure or area of land) tremble or vibrate.","example":"buildings shook in Sacramento and tremors were felt in Reno"}]}',
    ),
    array( // row #211
        'word' => 'monument', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pomnik"},{"tr":"24","wo":"monument"},{"tr":"24","wo":"zabytek"},{"tr":"8","wo":"nagrobek"}],"examples":[{"what":"noun","row":"a statue, building, or other structure erected to commemorate a famous or notable person or event.","example":"After his death, the Athenians honored his memory with a statue, and a monument to him was erected in his own country."}]}',
    ),
    array( // row #212
        'word' => 'ideological', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ideologiczny"},{"tr":"24","wo":"ideowy"}],"examples":[{"what":"noun","row":"a hard crystalline metamorphic form of limestone, typically white with mottlings or streaks of color, that is capable of taking a polish and is used in sculpture and architecture.","example":"She walked through her kitchen and down the hall to the foyer, which was complete with white marble flooring and a crystal chandelier."},{"what":"verb","row":"stain or streak (something) so that it looks like variegated marble.","example":"the low stone walls were marbled with moss and lichen"}]}',
    ),
    array( // row #213
        'word' => 'passengers', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pasażer"},{"tr":"8","wo":"piąte koło u wozu"}],"examples":[{"what":"noun","row":"a traveler on a public or private conveyance other than the driver, pilot, or crew.","example":"The driver and his passengers escaped unhurt when the brick was thrown through a small side window."}]}',
    ),
    array( // row #214
        'word' => 'marble', 'pl_PL' => '{"noun":[{"tr":"24","wo":"marmur"}],"adjective":[{"tr":"16","wo":"marmurowy"}],"verb":[{"tr":"8","wo":"marmurkować"},{"tr":"8","wo":"wykładać marmurem"}],"examples":[{"what":"noun","row":"a hard crystalline metamorphic form of limestone, typically white with mottlings or streaks of color, that is capable of taking a polish and is used in sculpture and architecture.","example":"She walked through her kitchen and down the hall to the foyer, which was complete with white marble flooring and a crystal chandelier."},{"what":"verb","row":"stain or streak (something) so that it looks like variegated marble.","example":"the low stone walls were marbled with moss and lichen"}]}',
    ),
    array( // row #215
        'word' => 'dishes', 'pl_PL' => '{"noun":[{"tr":"24","wo":"danie"},{"tr":"24","wo":"naczynie"},{"tr":"16","wo":"półmisek"},{"tr":"16","wo":"potrawa"},{"tr":"8","wo":"misa"},{"tr":"8","wo":"wanienka"},{"tr":"8","wo":"łożysko"},{"tr":"8","wo":"kuweta"}],"verb":[{"tr":"8","wo":"wgniatać"}],"examples":[{"what":"noun","row":"a shallow, typically flat-bottomed container for cooking or serving food.","example":"an ovenproof dish"},{"what":"verb","row":"put (food) onto a plate or plates before a meal.","example":"Steve was dishing up vegetables"}]}',
    ),
    array( // row #216
        'word' => 'lowered', 'pl_PL' => '{"verb":[{"tr":"16","wo":"obniżać"},{"tr":"8","wo":"opuszczać"},{"tr":"8","wo":"spadać"},{"tr":"8","wo":"zniżać"},{"tr":"8","wo":"obniżać się"},{"tr":"8","wo":"obsunąć"},{"tr":"8","wo":"zaniżać"},{"tr":"8","wo":"poniżać"},{"tr":"8","wo":"ściskać głos"},{"tr":"8","wo":"degradować"},{"tr":"8","wo":"redukować"},{"tr":"8","wo":"grozić"}],"examples":[{"what":"verb","row":"move (someone or something) in a downward direction.","example":"he watched the coffin being lowered into the ground"}]}',
    ),
    array( // row #217
        'word' => 'inclined', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"skłonny"},{"tr":"16","wo":"skośny"},{"tr":"8","wo":"pochyły"}],"examples":[{"what":"verb","row":"feel willing or favorably disposed toward (an action, belief, or attitude).","example":"he was inclined to accept the offer"}]}',
    ),
    array( // row #218
        'word' => 'computed', 'pl_PL' => '{"verb":[{"tr":"16","wo":"obliczać"},{"tr":"8","wo":"kalkulować"},{"tr":"8","wo":"liczyć"}],"examples":[{"what":"verb","row":"calculate or reckon (a figure or amount).","example":"we can compute the exact increase"}]}',
    ),
    array( // row #219
        'word' => 'heritage', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dziedzictwo"},{"tr":"16","wo":"spuścizna"},{"tr":"8","wo":"scheda"},{"tr":"8","wo":"spadek po kimś"},{"tr":"8","wo":"ojcowizna"}],"examples":[{"what":"noun","row":"property that is or may be inherited; an inheritance.","example":"For the pluralistic West, universal access to heritage is an individual right."}]}',
    ),
    array( // row #220
        'word' => 'winds', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wiatr"},{"tr":"16","wo":"wiatry"},{"tr":"8","wo":"oddech"},{"tr":"8","wo":"zapach"},{"tr":"8","wo":"frazesy"},{"tr":"8","wo":"dmuch"},{"tr":"8","wo":"dołek podsercowy"}],"verb":[{"tr":"8","wo":"meandrować"},{"tr":"8","wo":"nawijać"},{"tr":"8","wo":"nakręcić"},{"tr":"8","wo":"wić się"},{"tr":"8","wo":"dać wytchnienie"}],"examples":[{"what":"noun","row":"the perceptible natural movement of the air, especially in the form of a current of air blowing from a particular direction.","example":"the wind howled about the building"},{"what":"verb","row":"cause (someone) to have difficulty breathing because of exertion or a blow to the stomach.","example":"the fall nearly winded him"}]}',
    ),
    array( // row #221
        'word' => 'characterized', 'pl_PL' => '{"verb":[{"tr":"24","wo":"charakteryzować"},{"tr":"16","wo":"cechować"},{"tr":"8","wo":"odznaczać"},{"tr":"8","wo":"znamionować"}],"examples":[{"what":"verb","row":"describe the distinctive nature or features of.","example":"the historian characterized the period as the decade of revolution"}]}',
    ),
    array( // row #222
        'word' => 'lucky', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"szczęśliwy"},{"tr":"8","wo":"fortunny"}],"examples":[{"what":"adjective","row":"having, bringing, or resulting from good luck.","example":"you had a very lucky escape"}]}',
    ),
    array( // row #223
        'word' => 'conversion', 'pl_PL' => '{"noun":[{"tr":"24","wo":"konwersja"},{"tr":"16","wo":"przekształcenie"},{"tr":"16","wo":"nawrócenie"},{"tr":"8","wo":"zamiana"},{"tr":"8","wo":"wymiana"},{"tr":"8","wo":"wymienienie"},{"tr":"8","wo":"przemiana"},{"tr":"8","wo":"przemienienie"},{"tr":"8","wo":"przeistoczenie"},{"tr":"8","wo":"odwrotność"},{"tr":"8","wo":"przejście"}],"adjective":[{"tr":"16","wo":"przeliczeniowy"}],"examples":[{"what":"noun","row":"the act or an instance of converting or the process of being converted.","example":"the conversion of food into body tissues"}]}',
    ),
    array( // row #224
        'word' => 'wheels', 'pl_PL' => '{"noun":[{"tr":"24","wo":"koło"},{"tr":"16","wo":"tarcza"},{"tr":"16","wo":"kierownica"},{"tr":"8","wo":"ster"}],"verb":[{"tr":"8","wo":"obracać"},{"tr":"8","wo":"krążyć"},{"tr":"8","wo":"obracać się"},{"tr":"8","wo":"popychać taczki"},{"tr":"8","wo":"toczyć coś na kołach"},{"tr":"8","wo":"jechać rowerem"},{"tr":"8","wo":"prowadzić rower"}],"examples":[{"what":"noun","row":"a circular object that revolves on an axle and is fixed below a vehicle or other object to enable it to move easily over the ground.","example":"In stand-by configuration, the vehicle\'s front wheels deploy to the ground like a jet plane landing gear to increase longitudinal stability."},{"what":"verb","row":"push or pull (a vehicle with wheels).","example":"the sled was wheeled out to the flight deck"}]}',
    ),
    array( // row #225
        'word' => 'painter', 'pl_PL' => '{"noun":[{"tr":"24","wo":"malarz"},{"tr":"16","wo":"artysta"}],"examples":[{"what":"noun","row":"an artist who paints pictures.","example":"a German landscape painter"}]}',
    ),
    array( // row #226
        'word' => 'profits', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zysk"},{"tr":"16","wo":"korzyść"},{"tr":"16","wo":"dochód"},{"tr":"8","wo":"pożytek"},{"tr":"8","wo":"zarobek"},{"tr":"8","wo":"przychód"},{"tr":"8","wo":"intratność"}],"verb":[{"tr":"24","wo":"korzystać"},{"tr":"8","wo":"zyskać"},{"tr":"8","wo":"przynieść korzyść"}],"examples":[{"what":"noun","row":"a financial gain, especially the difference between the amount earned and the amount spent in buying, operating, or producing something.","example":"pretax profits"},{"what":"verb","row":"obtain a financial advantage or benefit, especially from an investment.","example":"the only people to profit from the entire episode were the lawyers"}]}',
    ),
    array( // row #227
        'word' => 'prospective', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"spodziewany"},{"tr":"16","wo":"ewentualny"},{"tr":"8","wo":"dotyczący przyszłości"}],"examples":[{"what":"adjective","row":"(of a person) expected or expecting to be something particular in the future.","example":"she showed a prospective buyer around the house"}]}',
    ),
    array( // row #228
        'word' => 'governing', 'pl_PL' => '{"verb":[{"tr":"24","wo":"rządzić"},{"tr":"16","wo":"kierować"},{"tr":"16","wo":"panować"}],"examples":[{"what":"verb","row":"conduct the policy, actions, and affairs of (a state, organization, or people).","example":"he was incapable of governing the country"}]}',
    ),
    array( // row #229
        'word' => 'revolutionary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"rewolucyjny"},{"tr":"8","wo":"wywrotowy"},{"tr":"8","wo":"przewrotowy"}],"noun":[{"tr":"24","wo":"rewolucjonista"},{"tr":"8","wo":"wywrotowiec"}],"examples":[{"what":"adjective","row":"engaged in or promoting political revolution.","example":"the revolutionary army"},{"what":"noun","row":"a person who works for or engages in political revolution.","example":"They would act like any revolutionary vanguard, as Lenin or indeed the French revolutionaries had imagined."}]}',
    ),
    array( // row #230
        'word' => 'suspected', 'pl_PL' => '{"verb":[{"tr":"8","wo":"posądzać"},{"tr":"8","wo":"domyślać"},{"tr":"8","wo":"pomawiać"},{"tr":"8","wo":"podejrzewać kogoś coś"},{"tr":"8","wo":"obawiać się"},{"tr":"8","wo":"dopatrywać"}],"examples":[{"what":"verb","row":"have an idea or impression of the existence, presence, or truth of (something) without certain proof.","example":"if you suspect a gas leak, do not turn on an electric light"}]}',
    ),
    array( // row #231
        'word' => 'Prairie', 'pl_PL' => '{"noun":[{"tr":"24","wo":"preria"}],"adjective":[{"tr":"16","wo":"preryjny"}],"examples":[{"what":"noun","row":"a large open area of grassland, especially in the Mississippi River valley.","example":"With these they are able to dramatise plains, prairies , steppes and meadows."}]}',
    ),
    array( // row #232
        'word' => 'drawings', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rysunek"},{"tr":"8","wo":"obraz"},{"tr":"8","wo":"rycina"},{"tr":"8","wo":"fasunek"},{"tr":"8","wo":"przeciąganie"},{"tr":"8","wo":"widoczek"},{"tr":"8","wo":"ekstrakcja"}],"examples":[{"what":"noun","row":"a picture or diagram made with a pencil, pen, or crayon rather than paint, especially one drawn in monochrome.","example":"a series of charcoal drawings on white paper"}]}',
    ),
    array( // row #233
        'word' => 'killer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zabójca"}],"examples":[{"what":"noun","row":"a person, animal, or thing that kills.","example":"police are still searching for the killer"}]}',
    ),
    array( // row #234
        'word' => 'availability', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dostępność"},{"tr":"8","wo":"ważność"}],"examples":[{"what":"noun","row":"a city in southeastern Michigan, southwest of Detroit; population 60,619 (est. 2008).","example":null}]}',
    ),
    array( // row #235
        'word' => 'colorful', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"kolorowy"},{"tr":"16","wo":"barwny"},{"tr":"8","wo":"wielobarwny"},{"tr":"8","wo":"pstry"},{"tr":"8","wo":"tęczowy"},{"tr":"8","wo":"kwiecisty"},{"tr":"8","wo":"barwisty"},{"tr":"8","wo":"krasny"},{"tr":"8","wo":"pstrokaty"}],"examples":[{"what":"adjective","row":"having much or varied color; bright.","example":"a colorful array of fruit"}]}',
    ),
    array( // row #236
        'word' => 'anniversary', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rocznica"},{"tr":"8","wo":"aniwersarz"}],"adjective":[{"tr":"16","wo":"rocznicowy"}],"examples":[{"what":"noun","row":"the date on which an event took place in a previous year.","example":"the 50th anniversary of the start of World War II"}]}',
    ),
    array( // row #237
        'word' => 'replacement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wymiana"},{"tr":"24","wo":"zastąpienie"},{"tr":"16","wo":"zastępstwo"},{"tr":"16","wo":"zamiana"},{"tr":"16","wo":"zastępowanie"},{"tr":"8","wo":"wymienienie"},{"tr":"8","wo":"przywrócenie na dawne miejsce"}],"examples":[{"what":"noun","row":"the action or process of replacing someone or something.","example":"the replacement of religion by poetry"}]}',
    ),
    array( // row #238
        'word' => 'helpless', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"bezradny"},{"tr":"16","wo":"bezsilny"},{"tr":"16","wo":"bezbronny"},{"tr":"8","wo":"nieporadny"}],"examples":[{"what":"adjective","row":"unable to defend oneself or to act without help.","example":"the cubs are born blind and helpless"}]}',
    ),
    array( // row #239
        'word' => 'masses', 'pl_PL' => '{"noun":[{"tr":"8","wo":"szerokie rzesze"}],"examples":[{"what":"noun","row":"a coherent, typically large body of matter with no definite shape.","example":"a mass of curly hair"},{"what":"verb","row":"assemble or cause to assemble into a mass or as one body.","example":"both countries began massing troops in the region"}]}',
    ),
    array( // row #240
        'word' => 'loop', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pętla"},{"tr":"16","wo":"pętelka"},{"tr":"8","wo":"pierścień"},{"tr":"8","wo":"węzeł"},{"tr":"8","wo":"kokarda"},{"tr":"8","wo":"pętlica"},{"tr":"8","wo":"supeł"},{"tr":"8","wo":"oko w robocie dziewiarskiej"},{"tr":"8","wo":"kolano rzeki"},{"tr":"8","wo":"objazd"},{"tr":"8","wo":"zwitka"}],"verb":[{"tr":"8","wo":"zrobić pętlę"},{"tr":"8","wo":"podwiązać"},{"tr":"8","wo":"splatać się"}],"examples":[{"what":"noun","row":"a shape produced by a curve that bends around and crosses itself.","example":"The shape of the loop seems simple but in fact it is not."},{"what":"verb","row":"form (something) into a loop or loops; encircle.","example":"she looped her arms around his neck"}]}',
    ),
    array( // row #241
        'word' => 'definitely', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"zdecydowanie"},{"tr":"8","wo":"stanowczo"},{"tr":"8","wo":"kategorycznie"},{"tr":"8","wo":"konkretnie"}],"examples":[{"what":"adverb","row":"without doubt (used for emphasis).","example":"I will definitely be at the airport to meet you"}]}',
    ),
    array( // row #242
        'word' => 'crossing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przejście"},{"tr":"16","wo":"skrzyżowanie"},{"tr":"8","wo":"przelot"},{"tr":"8","wo":"przepłynięcie"},{"tr":"8","wo":"podróż"},{"tr":"8","wo":"krzyżówka"}],"examples":[{"what":"noun","row":"a place where two roads, two railroad lines, or a road and a railroad line cross.","example":"He admitted building the double line would cause more train traffic at the railway crossings ."}]}',
    ),
    array( // row #243
        'word' => 'RACES', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wyścig"},{"tr":"24","wo":"rasa"},{"tr":"16","wo":"prąd"},{"tr":"16","wo":"bieg"},{"tr":"8","wo":"ród"},{"tr":"8","wo":"bieżnia"},{"tr":"8","wo":"gonitwa"},{"tr":"8","wo":"plemię"},{"tr":"8","wo":"szczep"},{"tr":"8","wo":"kanał"}],"verb":[{"tr":"24","wo":"ścigać się"},{"tr":"8","wo":"biegać"}],"examples":[{"what":"noun","row":"a competition between runners, horses, vehicles, boats, etc., to see which is the fastest in covering a set course.","example":"I won the first 50-lap race"},{"what":"verb","row":"compete with another or others to see who is fastest at covering a set course or achieving an objective.","example":"the vet took blood samples from the horses before they raced"}]}',
    ),
    array( // row #244
        'word' => 'Pitcher', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dzban"},{"tr":"8","wo":"kufel"},{"tr":"8","wo":"sprzedawca uliczny"},{"tr":"8","wo":"zawodnik rzucający piłką"}],"examples":[{"what":"noun","row":"a large container, typically earthenware, glass, or plastic, with a handle and a lip, used for holding and pouring liquids.","example":"Carrying a glass pitcher full of dark-brown liquid, with a healthy head of foam on it, he places it and two drinking bowls before us."}]}',
    ),
    array( // row #245
        'word' => 'trends', 'pl_PL' => '{"noun":[{"tr":"24","wo":"tendencja"},{"tr":"16","wo":"kierunek"},{"tr":"16","wo":"nurt"},{"tr":"8","wo":"dążenie"},{"tr":"8","wo":"prąd"},{"tr":"8","wo":"bieg"},{"tr":"8","wo":"wątek"},{"tr":"8","wo":"trent"}],"verb":[{"tr":"8","wo":"kształtować"},{"tr":"8","wo":"dążyć"}],"examples":[{"what":"noun","row":"a general direction in which something is developing or changing.","example":"an upward trend in sales and profit margins"},{"what":"verb","row":"change or develop in a general direction.","example":"unemployment has been trending upward"}]}',
    ),
    array( // row #246
        'word' => 'dedication', 'pl_PL' => '{"noun":[{"tr":"24","wo":"poświęcenie"},{"tr":"24","wo":"dedykacja"},{"tr":"8","wo":"otwarcie"}],"examples":[{"what":"noun","row":"the quality of being dedicated or committed to a task or purpose.","example":"his dedication to his duties"}]}',
    ),
    array( // row #247
        'word' => 'keeps', 'pl_PL' => '{"noun":[{"tr":"24","wo":"utrzymanie"},{"tr":"8","wo":"wikt"}],"verb":[{"tr":"24","wo":"zachować"},{"tr":"24","wo":"trzymać"},{"tr":"16","wo":"dotrzymać"},{"tr":"16","wo":"zatrzymać"},{"tr":"16","wo":"prowadzić"},{"tr":"8","wo":"przestrzegać"},{"tr":"8","wo":"przechować"},{"tr":"8","wo":"podtrzymywać"},{"tr":"8","wo":"wytrzymać"},{"tr":"8","wo":"hodować"},{"tr":"8","wo":"mieć się"},{"tr":"8","wo":"święcić"},{"tr":"8","wo":"kryć się"},{"tr":"8","wo":"mieć w opiece"}],"examples":[{"what":"verb","row":"have or retain possession of.","example":"my father would keep the best for himself"},{"what":"noun","row":"food, clothes, and other essentials for living.","example":"working overtime to earn his keep"}]}',
    ),
    array( // row #248
        'word' => 'surrounded', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"otoczony"}],"examples":[{"what":"abbreviation","row":"(in the US) Racketeer Influenced and Corrupt Organizations Act.","example":null}]}',
    ),
    array( // row #249
        'word' => 'forming', 'pl_PL' => '{"noun":[{"tr":"8","wo":"tworzenie się"}],"examples":[{"what":"verb","row":"bring together parts or combine to create (something).","example":"the company was formed in 1982"}]}',
    ),
    array( // row #250
        'word' => 'submitted', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zgłaszać"},{"tr":"16","wo":"przedkładać"},{"tr":"16","wo":"poddać"},{"tr":"8","wo":"proponować"},{"tr":"8","wo":"podporządkować się"},{"tr":"8","wo":"godzić się"},{"tr":"8","wo":"poddać pod rozwagę"},{"tr":"8","wo":"pogodzić się"}],"examples":[{"what":"verb","row":"accept or yield to a superior force or to the authority or will of another person.","example":"the original settlers were forced to submit to Bulgarian rule"}]}',
    ),
    array( // row #251
        'word' => 'crises', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kryzys"},{"tr":"8","wo":"przełom"},{"tr":"8","wo":"przesilenie"},{"tr":"8","wo":"krach"}],"examples":[{"what":"noun","row":"a time of intense difficulty, trouble, or danger.","example":"the current economic crisis"}]}',
    ),
    array( // row #252
        'word' => 'launched', 'pl_PL' => '{"verb":[{"tr":"24","wo":"uruchomić"},{"tr":"8","wo":"lansować"},{"tr":"8","wo":"wystrzelić"},{"tr":"8","wo":"cisnąć"},{"tr":"8","wo":"zapędzać się"},{"tr":"8","wo":"zadać"},{"tr":"8","wo":"miotać"},{"tr":"8","wo":"spuścić na wodę"},{"tr":"8","wo":"wodować"},{"tr":"8","wo":"zwodować"},{"tr":"8","wo":"wypuszczać"},{"tr":"8","wo":"rozpocząć coś"},{"tr":"8","wo":"zapuszczać się"},{"tr":"8","wo":"zaangażować się"}],"examples":[{"what":"verb","row":"set (a boat) in motion by pushing it or allowing it to roll into the water.","example":"the town\'s lifeboat was launched to rescue the fishermen"}]}',
    ),
    array( // row #253
        'word' => 'hesitated', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wahać się"},{"tr":"8","wo":"zawahać się"},{"tr":"8","wo":"być niezdecydowanym"},{"tr":"8","wo":"nie móc się zdecydować"}],"examples":[{"what":"verb","row":"pause before saying or doing something, especially through uncertainty.","example":"she hesitated, unsure of what to say"}]}',
    ),
    array( // row #254
        'word' => 'Socialist', 'pl_PL' => '{"noun":[{"tr":"24","wo":"socjalista"}],"adjective":[{"tr":"24","wo":"socjalistyczny"}],"examples":[{"what":"adjective","row":"adhering to or based on the principles of socialism.","example":"the history of socialist movement"},{"what":"noun","row":"a person who advocates or practices socialism.","example":"synonyms: left-wing, progressive, leftist, labor, anti-corporate, antiglobalization, radical, revolutionary, militant, communist, lefty, red; left-winger, leftist, progressive, progressivist, radical, revolutionary, communist, Marxist, lefty, red"}]}',
    ),
    array( // row #255
        'word' => 'colonial', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"kolonialny"}],"examples":[{"what":"adjective","row":"of, relating to, or characteristic of a colony or colonies.","example":"British colonial rule"},{"what":"noun","row":"a native or inhabitant of a colony.","example":"Slaves weren\'t colonials, they were the property of colonials ."}]}',
    ),
    array( // row #256
        'word' => 'cope', 'pl_PL' => '{"verb":[{"tr":"24","wo":"sprostać"},{"tr":"24","wo":"radzić sobie"},{"tr":"16","wo":"podołać"},{"tr":"8","wo":"borykać się"},{"tr":"8","wo":"nadążać"},{"tr":"8","wo":"poradzić"},{"tr":"8","wo":"zwalczać"},{"tr":"8","wo":"osłaniać"},{"tr":"8","wo":"ubierać w kapę"}],"noun":[{"tr":"8","wo":"kapa"},{"tr":"8","wo":"osłona"},{"tr":"8","wo":"sklepienie"}],"examples":[{"what":"noun","row":"a long, loose cloak worn by a priest or bishop on ceremonial occasions.","example":"Here she was vested in her robes of state and was met by the bishop who was to perform the ceremony, with all the chapel Royal in their copes , the bishop mitred."},{"what":"verb","row":"(of a person) deal effectively with something difficult.","example":"his ability to cope with stress"}]}',
    ),
    array( // row #257
        'word' => 'acceptable', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"do przyjęcia"},{"tr":"8","wo":"zadowalający"},{"tr":"8","wo":"mile widziany"}],"examples":[{"what":"adjective","row":"able to be agreed on; suitable.","example":"has tried to find a solution acceptable to everyone"}]}',
    ),
    array( // row #258
        'word' => 'inspection', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kontrola"},{"tr":"24","wo":"inspekcja"},{"tr":"16","wo":"przegląd"},{"tr":"16","wo":"badanie"},{"tr":"8","wo":"sprawdzenie"},{"tr":"8","wo":"sprawdzanie"},{"tr":"8","wo":"dogląd"},{"tr":"8","wo":"doglądanie"},{"tr":"8","wo":"dozór"},{"tr":"8","wo":"dozorowanie"},{"tr":"8","wo":"nadzór"},{"tr":"8","wo":"oględziny"}],"examples":[{"what":"noun","row":"careful examination or scrutiny.","example":"on closer inspection it looked like a fossil"}]}',
    ),
    array( // row #259
        'word' => 'speeches', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przemówienie"},{"tr":"24","wo":"mowa"},{"tr":"16","wo":"przemowa"},{"tr":"8","wo":"język"},{"tr":"8","wo":"mówienie"},{"tr":"8","wo":"słowo"}],"examples":[{"what":"noun","row":"the expression of or the ability to express thoughts and feelings by articulate sounds.","example":"he was born deaf and without the power of speech"}]}',
    ),
    array( // row #260
        'word' => 'questioning', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pytający"},{"tr":"8","wo":"badawczy"},{"tr":"8","wo":"pytajny"}],"noun":[{"tr":"8","wo":"badanie"},{"tr":"8","wo":"indagacja"}],"examples":[{"what":"noun","row":"the eleventh month of the year, in the northern hemisphere usually considered the last month of autumn.","example":"the store opened in November"}]}',
    ),
    array( // row #261
        'word' => 'November', 'pl_PL' => '{"noun":[{"tr":"24","wo":"listopad"}],"adjective":[{"tr":"8","wo":"listopadowy"}],"examples":[{"what":"noun","row":"the eleventh month of the year, in the northern hemisphere usually considered the last month of autumn.","example":"the store opened in November"}]}',
    ),
    array( // row #262
        'word' => 'startled', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zaskoczony"}],"examples":[{"what":"noun","row":"a partner or colleague in business or at work.","example":"he arranged for a close associate to take control of the institute"},{"what":"verb","row":"connect (someone or something) with something else in one\'s mind.","example":"I associated wealth with freedom"},{"what":"adjective","row":"joined or connected with an organization or business.","example":"an associate company"}]}',
    ),
    array( // row #263
        'word' => 'Springs', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wiosna"},{"tr":"24","wo":"sprężyna"},{"tr":"16","wo":"źródło"},{"tr":"8","wo":"skok"},{"tr":"8","wo":"resor"},{"tr":"8","wo":"zdrój"},{"tr":"8","wo":"krynica"},{"tr":"8","wo":"wyskok"},{"tr":"8","wo":"cuma"}],"verb":[{"tr":"8","wo":"skakać"},{"tr":"8","wo":"sprężynować"},{"tr":"8","wo":"tryskać"}],"examples":[{"what":"noun","row":"the season after winter and before summer, in which vegetation begins to appear, in the northern hemisphere from March to May and in the southern hemisphere from September to November.","example":"in spring the garden is a feast of blossom"},{"what":"verb","row":"move or jump suddenly or rapidly upward or forward.","example":"I sprang out of bed"}]}',
    ),
    array( // row #264
        'word' => 'saving', 'pl_PL' => '{"noun":[{"tr":"24","wo":"oszczędność"},{"tr":"8","wo":"racjonalizacja"}],"adjective":[{"tr":"8","wo":"zbawczy"},{"tr":"8","wo":"oszczędny"},{"tr":"8","wo":"zbawienny"}],"examples":[{"what":"adjective","row":"preventing waste of a particular resource.","example":"an energy-saving light bulb"},{"what":"noun","row":"an economy of or reduction in money, time, or another resource.","example":"this resulted in a considerable saving in development costs"},{"what":"preposition","row":"with the exception of; except.","example":null},{"what":"verb","row":"keep safe or rescue (someone or something) from harm or danger.","example":"she saved a boy from drowning"}]}',
    ),
    array( // row #265
        'word' => 'JAIL', 'pl_PL' => '{"noun":[{"tr":"24","wo":"więzienie"},{"tr":"16","wo":"areszt"},{"tr":"8","wo":"kryminał"},{"tr":"8","wo":"ciupa"}],"verb":[{"tr":"8","wo":"uwięzić"},{"tr":"8","wo":"wsadzać do więzienia"}],"examples":[{"what":"noun","row":"a place for the confinement of people accused or convicted of a crime.","example":"he spent 15 years in jail"},{"what":"verb","row":"put (someone) in jail.","example":"the driver was jailed for two years"}]}',
    ),
    array( // row #266
        'word' => 'MERGER', 'pl_PL' => '{"noun":[{"tr":"24","wo":"połączenie"},{"tr":"16","wo":"fuzja"},{"tr":"8","wo":"włączenie"},{"tr":"8","wo":"scalenie"},{"tr":"8","wo":"scałkowanie"},{"tr":"8","wo":"kumulacja"}],"examples":[{"what":"noun","row":"a combination of two things, especially companies, into one.","example":"a merger between two supermarket chains"}]}',
    ),
    array( // row #267
        'word' => 'foams', 'pl_PL' => '{"noun":[{"tr":"24","wo":"piana"}],"verb":[{"tr":"8","wo":"pienić się"},{"tr":"8","wo":"burzyć"},{"tr":"8","wo":"musować"},{"tr":"8","wo":"spienić się"},{"tr":"8","wo":"szumować"}],"examples":[{"what":"noun","row":"a mass of small bubbles formed on or in liquid, typically by agitation or fermentation.","example":"a beer with a thick head of foam"},{"what":"verb","row":"form or produce a mass of small bubbles; froth.","example":"the sea foamed beneath them"}]}',
    ),
    array( // row #268
        'word' => 'refund', 'pl_PL' => '{"verb":[{"tr":"16","wo":"refundować"},{"tr":"8","wo":"zwracać pieniądze"},{"tr":"8","wo":"spłacać"}],"noun":[{"tr":"8","wo":"spłata"},{"tr":"8","wo":"zwrot pieniężny"}],"examples":[{"what":"noun","row":"a repayment of a sum of money, typically to a dissatisfied customer.","example":"you are entitled to reject it and insist on a refund"},{"what":"verb","row":"pay back (money), typically to a customer who is not satisfied with goods or services bought.","example":"if you\'re not delighted with your purchase, we guarantee to refund your money in full"}]}',
    ),
    array( // row #269
        'word' => 'sampling', 'pl_PL' => '{"noun":[{"tr":"8","wo":"próbowanie"}],"examples":[{"what":"noun","row":"the taking of a sample or samples.","example":"routine river sampling is carried out according to a schedule"},{"what":"verb","row":"take a sample or samples of (something) for analysis.","example":"bone marrow cells were sampled"}]}',
    ),
    array( // row #270
        'word' => 'alienation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"alienacja"},{"tr":"16","wo":"przewłaszczenie"},{"tr":"8","wo":"zrażenie"},{"tr":"8","wo":"obłęd"}],"examples":[{"what":"noun","row":"the state or experience of being isolated from a group or an activity to which one should belong or in which one should be involved.","example":"unemployment may generate a sense of political alienation"}]}',
    ),
    array( // row #271
        'word' => 'middle-class', 'pl_PL' => '{"noun":[{"tr":"24","wo":"klasa średnia"},{"tr":"16","wo":"mieszczaństwo"}],"examples":[{"what":"noun","row":"the social group between the upper and working classes, including professional and business workers and their families.","example":"I want the working class and the middle class and the upper class, and in Britain I\'ve got it."},{"what":"adjective","row":"relating to the middle class.","example":"a middle-class suburb"}]}',
    ),
    array( // row #272
        'word' => 'yell', 'pl_PL' => '{"noun":[{"tr":"24","wo":"krzyk"},{"tr":"24","wo":"ryk"},{"tr":"24","wo":"wrzask"},{"tr":"16","wo":"wycie"}],"verb":[{"tr":"24","wo":"krzyczeć"},{"tr":"16","wo":"zawyć"},{"tr":"16","wo":"wyć"},{"tr":"16","wo":"wrzasnąć"},{"tr":"8","wo":"drzeć się"},{"tr":"8","wo":"ryczeć"},{"tr":"8","wo":"beczeć"}],"examples":[{"what":"noun","row":"a loud, sharp cry, especially of pain, surprise, or delight; a shout.","example":"In his mind, he can hear the screams and yells of men as pain and suffering gripped them."},{"what":"verb","row":"give a loud, sharp cry.","example":"you heard me yelling at her"}]}',
    ),
    array( // row #273
        'word' => 'herd', 'pl_PL' => '{"noun":[{"tr":"24","wo":"stado"},{"tr":"8","wo":"trzoda"},{"tr":"8","wo":"tabun"},{"tr":"8","wo":"motłoch"},{"tr":"8","wo":"gromada"},{"tr":"8","wo":"pastuch"}],"verb":[{"tr":"8","wo":"paść bydło"},{"tr":"8","wo":"gromadzić się w stada"}],"examples":[{"what":"noun","row":"a large group of animals, especially hoofed mammals, that live, feed, or migrate together or are kept together as livestock.","example":"a herd of elephants"},{"what":"verb","row":"(with reference to a group of people or animals) move in a particular direction.","example":"Nick herded me through the baggage claim and into his Jaguar"}]}',
    ),
    array( // row #274
        'word' => 'economical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ekonomiczny"},{"tr":"16","wo":"oszczędny"},{"tr":"16","wo":"gospodarczy"},{"tr":"8","wo":"gospodarny"},{"tr":"8","wo":"oszczędnościowy"}],"examples":[{"what":"adjective","row":"giving good value or service in relation to the amount of money, time, or effort spent.","example":"a small, economical car"}]}',
    ),
    array( // row #275
        'word' => 'dressing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"opatrunek"},{"tr":"24","wo":"sos"},{"tr":"16","wo":"obrywka"},{"tr":"8","wo":"ubieranie się"},{"tr":"8","wo":"toaleta"},{"tr":"8","wo":"dekoracja"},{"tr":"8","wo":"przewiązanie"},{"tr":"8","wo":"obandażowanie"},{"tr":"8","wo":"oprawa"},{"tr":"8","wo":"uczesanie"},{"tr":"8","wo":"obróbka"}],"adjective":[{"tr":"16","wo":"opatrunkowy"}],"examples":[{"what":"noun","row":"a sauce for salads, typically one consisting of oil and vinegar mixed together with herbs or other flavorings.","example":"vinaigrette dressing"}]}',
    ),
    array( // row #276
        'word' => 'planets', 'pl_PL' => '{"noun":[{"tr":"24","wo":"planeta"},{"tr":"8","wo":"ornat"}],"examples":[{"what":"noun","row":"a celestial body moving in an elliptical orbit around a star.","example":"Kepler showed that a planet moves round the Sun in an elliptical orbit which has the Sun in one of its two foci."}]}',
    ),
    array( // row #277
        'word' => 'Physiological', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"fizjologiczny"}],"examples":[{"what":"verb","row":"make (something) ready for use or consideration.","example":"prepare a brief summary of the article"}]}',
    ),
    array( // row #278
        'word' => 'hen', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kura"},{"tr":"8","wo":"samica ptaka"}],"examples":[{"what":"noun","row":"a female bird, especially of a domestic fowl.","example":"He hid near nests of black woodpeckers, kingfishers, northern hazel hens and Eurasian sparrow hawks."}]}',
    ),
    array( // row #279
        'word' => 'preparing', 'pl_PL' => '{"verb":[{"tr":"24","wo":"przygotować"},{"tr":"16","wo":"przygotować się"},{"tr":"8","wo":"przyrządzać"},{"tr":"8","wo":"gotować"},{"tr":"8","wo":"przyszykować"},{"tr":"8","wo":"ugotować"},{"tr":"8","wo":"gotować się"},{"tr":"8","wo":"preparować"},{"tr":"8","wo":"przysposabiać"},{"tr":"8","wo":"uszykować"},{"tr":"8","wo":"naszykować"},{"tr":"8","wo":"narządzać"},{"tr":"8","wo":"opatrywać"},{"tr":"8","wo":"urządzić"}],"examples":[{"what":"verb","row":"make (something) ready for use or consideration.","example":"prepare a brief summary of the article"}]}',
    ),
    array( // row #280
        'word' => 'insight', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wgląd"},{"tr":"16","wo":"wnikliwość"},{"tr":"16","wo":"intuicja"}],"examples":[{"what":"noun","row":"the capacity to gain an accurate and deep intuitive understanding of a person or thing.","example":"this paper is alive with sympathetic insight into Shakespeare"}]}',
    ),
    array( // row #281
        'word' => 'bother', 'pl_PL' => '{"verb":[{"tr":"24","wo":"niepokoić"},{"tr":"8","wo":"dręczyć"},{"tr":"8","wo":"udręczać"},{"tr":"8","wo":"trapić"},{"tr":"8","wo":"zanudzać"},{"tr":"8","wo":"dokuczać"},{"tr":"8","wo":"naprzykrzać się"},{"tr":"8","wo":"przejąć"}],"noun":[{"tr":"8","wo":"kłopot"},{"tr":"8","wo":"ambaras"},{"tr":"8","wo":"kram"},{"tr":"8","wo":"fatyga"},{"tr":"8","wo":"niepokojenie"},{"tr":"8","wo":"udręka"},{"tr":"8","wo":"udręczenie"},{"tr":"8","wo":"bieda"}],"examples":[{"what":"noun","row":"effort, worry, or difficulty.","example":"he saved me the bother of having to come up with a speech"},{"what":"verb","row":"take the trouble to do something.","example":"nobody bothered locking the doors"}]}',
    ),
    array( // row #282
        'word' => 'meanings', 'pl_PL' => '{"noun":[{"tr":"24","wo":"znaczenie"},{"tr":"24","wo":"sens"}],"examples":[{"what":"noun","row":"what is meant by a word, text, concept, or action.","example":"the meaning of the word âsupermarketâ"}]}',
    ),
    array( // row #283
        'word' => 'eliminated', 'pl_PL' => '{"adjective":[{"tr":"8","wo":"wyłączony"}],"examples":[{"what":"verb","row":"completely remove or get rid of (something).","example":"a policy that would eliminate inflation"}]}',
    ),
    array( // row #284
        'word' => 'possessed', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"opętany"},{"tr":"24","wo":"opanowany"},{"tr":"16","wo":"owładnięty"},{"tr":"8","wo":"spokojny"}],"examples":[{"what":"adjective","row":"(of a person) completely controlled by an evil spirit.","example":"he can turn into a possessed animal at will"}]}',
    ),
    array( // row #285
        'word' => 'reliable', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"solidny"},{"tr":"24","wo":"niezawodny"},{"tr":"16","wo":"wiarygodny"},{"tr":"16","wo":"rzetelny"},{"tr":"8","wo":"autorytatywny"},{"tr":"8","wo":"wytrzymały"},{"tr":"8","wo":"godny zaufania"},{"tr":"8","wo":"wiarogodny"},{"tr":"8","wo":"odpowiedzialny"},{"tr":"8","wo":"porządny"},{"tr":"8","wo":"miarodajny"},{"tr":"8","wo":"słowny"}],"examples":[{"what":"adjective","row":"consistently good in quality or performance; able to be trusted.","example":"a reliable source of information"},{"what":"noun","row":"a person or thing with trustworthy qualities.","example":"the supporting cast includes old reliables like Mitchell"}]}',
    ),
    array( // row #286
        'word' => 'uneasy', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"niespokojny"},{"tr":"16","wo":"zaniepokojony"},{"tr":"8","wo":"niepokojący"},{"tr":"8","wo":"zażenowany"},{"tr":"8","wo":"krępujący"}],"examples":[{"what":"adjective","row":"causing or feeling anxiety; troubled or uncomfortable.","example":"she felt guilty now and a little uneasy"}]}',
    ),
    array( // row #287
        'word' => 'unfortunate', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"niefortunny"},{"tr":"16","wo":"nieszczęśliwy"},{"tr":"8","wo":"pechowy"},{"tr":"8","wo":"niepomyślny"},{"tr":"8","wo":"przykry"},{"tr":"8","wo":"godny pożałowania"}],"examples":[{"what":"adjective","row":"having or marked by bad fortune; unlucky.","example":"the unfortunate Cunningham was fired"},{"what":"noun","row":"a person who suffers bad fortune.","example":"Allow me to explain Fayer\'s evil plan to you poor unfortunates who have to suffer through his company with me."}]}',
    ),
    array( // row #288
        'word' => 'formulas', 'pl_PL' => '{"noun":[{"tr":"24","wo":"formuła"},{"tr":"24","wo":"wzór"},{"tr":"8","wo":"przepis"},{"tr":"8","wo":"recepta"}],"examples":[{"what":"noun","row":"a mathematical relationship or rule expressed in symbols.","example":"He gave the well-known formula for the Fibonacci numbers"}]}',
    ),
    array( // row #289
        'word' => 'MELTING', 'pl_PL' => '{"noun":[{"tr":"24","wo":"topienie"},{"tr":"16","wo":"wytop"}],"adjective":[{"tr":"16","wo":"topniejący"},{"tr":"8","wo":"wzruszony"},{"tr":"8","wo":"piekący"}],"examples":[{"what":"verb","row":"make or become liquefied by heat.","example":"place under the broiler until the cheese has melted"}]}',
    ),
    array( // row #290
        'word' => 'novels', 'pl_PL' => '{"noun":[{"tr":"24","wo":"powieść"}],"examples":[{"what":"noun","row":"a fictitious prose narrative of book length, typically representing character and action with some degree of realism.","example":"the novels of Jane Austen"}]}',
    ),
    array( // row #291
        'word' => 'thrust', 'pl_PL' => '{"noun":[{"tr":"16","wo":"pchnięcie"},{"tr":"16","wo":"nacisk"},{"tr":"16","wo":"napór"},{"tr":"16","wo":"siła ciągu"},{"tr":"16","wo":"parcie"},{"tr":"8","wo":"ciśnienie"},{"tr":"8","wo":"estokada"},{"tr":"8","wo":"sztych"},{"tr":"8","wo":"zrzut"}],"verb":[{"tr":"8","wo":"wbić"},{"tr":"8","wo":"wepchnąć"},{"tr":"8","wo":"wścibiać"}],"examples":[{"what":"noun","row":"a sudden or violent lunge with a pointed weapon or a bodily part.","example":"he drove the blade upward with one powerful thrust"},{"what":"verb","row":"push (something or someone) suddenly or violently in the specified direction.","example":"she thrust her hands into her pockets"}]}',
    ),
    array( // row #292
        'word' => 'targets', 'pl_PL' => '{"noun":[{"tr":"24","wo":"cel"},{"tr":"16","wo":"tarcza"},{"tr":"16","wo":"obiekt"}],"examples":[{"what":"noun","row":"a person, object, or place selected as the aim of an attack.","example":"We\'ve seen quite a shift from attacks on civilian targets to stronger attacks on military targets , particularly in the last 10 days."},{"what":"verb","row":"select as an object of attention or attack.","example":"two men were targeted by the attackers"}]}',
    ),
    array( // row #293
        'word' => 'DRINKS', 'pl_PL' => '{"noun":[{"tr":"24","wo":"drink"},{"tr":"24","wo":"napój"},{"tr":"8","wo":"alkohol"},{"tr":"8","wo":"alkoholizm"},{"tr":"8","wo":"flaszka"},{"tr":"8","wo":"wódzia"}],"verb":[{"tr":"24","wo":"pić"},{"tr":"24","wo":"wypić"},{"tr":"8","wo":"popić"},{"tr":"8","wo":"łykać płyn"},{"tr":"8","wo":"spożyć płyn"},{"tr":"8","wo":"kropić"},{"tr":"8","wo":"wychlać"},{"tr":"8","wo":"golić"},{"tr":"8","wo":"poić"}],"examples":[{"what":"noun","row":"a liquid that can be swallowed as refreshment or nourishment.","example":"cans of soda and other drinks"},{"what":"verb","row":"take (a liquid) into the mouth and swallow.","example":"we sat by the fire, drinking our coffee"}]}',
    ),
    array( // row #294
        'word' => 'destiny', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przeznaczenie"},{"tr":"8","wo":"dola"},{"tr":"8","wo":"predestynacja"}],"examples":[{"what":"noun","row":"the events that will necessarily happen to a particular person or thing in the future.","example":"she was unable to control her own destiny"}]}',
    ),
    array( // row #295
        'word' => 'freely', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"swobodnie"},{"tr":"24","wo":"dowolnie"},{"tr":"16","wo":"dobrowolnie"},{"tr":"8","wo":"nieograniczenie"},{"tr":"8","wo":"hojnie"}],"examples":[{"what":"adverb","row":"not under the control of another; as one wishes.","example":"I roamed freely"}]}',
    ),
    array( // row #296
        'word' => 'casual', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"przypadkowy"},{"tr":"16","wo":"dorywczy"},{"tr":"16","wo":"nieformalny"},{"tr":"8","wo":"przygodny"},{"tr":"8","wo":"doraźny"},{"tr":"8","wo":"zdawkowy"},{"tr":"8","wo":"okolicznościowy"},{"tr":"8","wo":"sezonowy"},{"tr":"8","wo":"wymijający"},{"tr":"8","wo":"marginesowy"},{"tr":"8","wo":"bezprogramowy"}],"examples":[{"what":"adjective","row":"relaxed and unconcerned.","example":"she regarded his affairs with a casual indulgence"},{"what":"noun","row":"a person who does something irregularly.","example":"a number of casuals became regular customers"}]}',
    ),
    array( // row #297
        'word' => 'implications', 'pl_PL' => '{"noun":[{"tr":"16","wo":"implikacja"},{"tr":"8","wo":"domyślnik"},{"tr":"8","wo":"wplątanie"},{"tr":"8","wo":"wmieszanie"}],"examples":[{"what":"noun","row":"the conclusion that can be drawn from something, although it is not explicitly stated.","example":"the implication is that no one person at the bank is responsible"}]}',
    ),
    array( // row #298
        'word' => 'desperately', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"beznadziejnie"}],"examples":[{"what":"adverb","row":"in a way that shows despair.","example":"he looked around desperately"}]}',
    ),
    array( // row #299
        'word' => 'grows', 'pl_PL' => '{"verb":[{"tr":"24","wo":"rosnąć"},{"tr":"8","wo":"hodować"},{"tr":"8","wo":"wyrastać"},{"tr":"8","wo":"stawać się"},{"tr":"8","wo":"kiełkować"},{"tr":"8","wo":"przybrać"},{"tr":"8","wo":"uprawiać rośliny"},{"tr":"8","wo":"podrastać"},{"tr":"8","wo":"przybyć"},{"tr":"8","wo":"wychodzić"},{"tr":"8","wo":"wzmagać się"}],"examples":[{"what":"verb","row":"(of a living thing) undergo natural development by increasing in size and changing physically; progress to maturity.","example":"he would watch Nick grow to manhood"}]}',
    ),
    array( // row #300
        'word' => 'mess', 'pl_PL' => '{"noun":[{"tr":"24","wo":"bałagan"},{"tr":"16","wo":"nieporządek"},{"tr":"8","wo":"nieład"},{"tr":"8","wo":"chaos"},{"tr":"8","wo":"kram"},{"tr":"8","wo":"rozgardiasz"},{"tr":"8","wo":"mętlik"},{"tr":"8","wo":"babranina"},{"tr":"8","wo":"papranina"},{"tr":"8","wo":"paskudztwo"},{"tr":"8","wo":"mesa"}],"verb":[{"tr":"8","wo":"brudzić"},{"tr":"8","wo":"zepsuć"},{"tr":"8","wo":"partaczyć"},{"tr":"8","wo":"paprać"}],"examples":[{"what":"noun","row":"a dirty or untidy state of things or of a place.","example":"she made a mess of the kitchen"},{"what":"verb","row":"make untidy or dirty.","example":"you\'ve messed up my beautiful carpet"}]}',
    ),
    array( // row #301
        'word' => 'describes', 'pl_PL' => '{"verb":[{"tr":"24","wo":"opisać"},{"tr":"8","wo":"przedstawiać"},{"tr":"8","wo":"charakteryzować"},{"tr":"8","wo":"zakreślać"},{"tr":"8","wo":"kwalifikować"},{"tr":"8","wo":"kreślić"},{"tr":"8","wo":"pisać"},{"tr":"8","wo":"namalować"},{"tr":"8","wo":"malować"},{"tr":"8","wo":"rysować"}],"examples":[{"what":"verb","row":"give an account in words of (someone or something), including all the relevant characteristics, qualities, or events.","example":"the police said the man was described as white, 6 ft. tall, with mousy, cropped hair"}]}',
    ),
    array( // row #302
        'word' => 'racing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wyścigi"},{"tr":"8","wo":"przyśpieszone obroty"}],"adjective":[{"tr":"24","wo":"wyścigowy"},{"tr":"8","wo":"bieżny"},{"tr":"8","wo":"regatowy"}],"examples":[{"what":"noun","row":"any sport that involves competing in races.","example":"bicycle racing"},{"what":"adjective","row":"moving swiftly.","example":"he controlled his racing thoughts"}]}',
    ),
    array( // row #303
        'word' => 'occasions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"okazja"},{"tr":"16","wo":"sposobność"},{"tr":"16","wo":"okoliczność"},{"tr":"8","wo":"powód"},{"tr":"8","wo":"zdarzenie"},{"tr":"8","wo":"przyczyna"},{"tr":"8","wo":"możność"}],"verb":[{"tr":"8","wo":"powodować"},{"tr":"8","wo":"spowodować"},{"tr":"8","wo":"wywołać"},{"tr":"8","wo":"sprawiać"},{"tr":"8","wo":"wzbudzać"},{"tr":"8","wo":"prowokować"}],"examples":[{"what":"noun","row":"a particular time or instance of an event.","example":"on one occasion I stayed up until two in the morning"},{"what":"verb","row":"cause (something).","example":"something vital must have occasioned this visit"}]}',
    ),
    array( // row #304
        'word' => 'substitute', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zastąpić"},{"tr":"16","wo":"podstawiać"},{"tr":"8","wo":"substytuować"}],"noun":[{"tr":"24","wo":"substytut"},{"tr":"16","wo":"zastępca"},{"tr":"16","wo":"namiastka"},{"tr":"8","wo":"surogat"},{"tr":"8","wo":"wyręczyciel"},{"tr":"8","wo":"wyręka"}],"examples":[{"what":"noun","row":"a person or thing acting or serving in place of another.","example":"soy milk is used as a substitute for dairy milk"},{"what":"verb","row":"use or add in place of.","example":"dried rosemary can be substituted for the fresh herb"}]}',
    ),
    array( // row #305
        'word' => 'capabilities', 'pl_PL' => '{"noun":[{"tr":"24","wo":"możliwości"}],"examples":[{"what":"noun","row":"sudden uncontrollable fear or anxiety, often causing wildly unthinking behavior.","example":"she hit him in panic"},{"what":"verb","row":"feel or cause to feel panic.","example":"the crowd panicked and stampeded for the exit"}]}',
    ),
    array( // row #306
        'word' => 'panic', 'pl_PL' => '{"noun":[{"tr":"24","wo":"panika"},{"tr":"16","wo":"popłoch"},{"tr":"8","wo":"trwoga"}],"verb":[{"tr":"8","wo":"siać panikę"},{"tr":"8","wo":"poddać się panice"},{"tr":"8","wo":"ulec panice"}],"examples":[{"what":"noun","row":"sudden uncontrollable fear or anxiety, often causing wildly unthinking behavior.","example":"she hit him in panic"},{"what":"verb","row":"feel or cause to feel panic.","example":"the crowd panicked and stampeded for the exit"}]}',
    ),
    array( // row #307
        'word' => 'totally', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"całkowicie"},{"tr":"16","wo":"kompletnie"}],"examples":[{"what":"adverb","row":"completely; absolutely.","example":"the building was totally destroyed by the fire"}]}',
    ),
    array( // row #308
        'word' => 'architect', 'pl_PL' => '{"noun":[{"tr":"24","wo":"architekt"},{"tr":"8","wo":"twórca"}],"examples":[{"what":"noun","row":"a person who designs buildings and in many cases also supervises their construction.","example":"A council spokeswoman later confirmed that the authority had now put out tenders for landscape design architects, building architects and quantity surveyors."},{"what":"verb","row":"design and make.","example":"few software packages were architected with Ethernet access in mind"}]}',
    ),
    array( // row #309
        'word' => 'chart', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wykres"},{"tr":"8","wo":"mapa"},{"tr":"8","wo":"karta"},{"tr":"8","wo":"graficon"},{"tr":"8","wo":"grafik"}],"verb":[{"tr":"8","wo":"kartować"},{"tr":"8","wo":"skartować"},{"tr":"8","wo":"skartografować"},{"tr":"8","wo":"zanotować na karcie choroby"}],"examples":[{"what":"noun","row":"a sheet of information in the form of a table, graph, or diagram.","example":"a chart showing how much do-it-yourself costs compared with retail"},{"what":"verb","row":"make a map of (an area).","example":"It wasn\'t until these areas were charted , the dangers known, and markets for goods discovered that private ships sailed the ocean to move goods around the planet."}]}',
    ),
    array( // row #310
        'word' => 'chiefly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"głównie"},{"tr":"8","wo":"zwłaszcza"},{"tr":"8","wo":"przeważnie"}],"examples":[{"what":"adverb","row":"above all; mainly.","example":"he is remembered chiefly for his sonatas"}]}',
    ),
    array( // row #311
        'word' => 'surrender', 'pl_PL' => '{"verb":[{"tr":"24","wo":"poddać"},{"tr":"8","wo":"dać"},{"tr":"8","wo":"poddać się"},{"tr":"8","wo":"oddać się"},{"tr":"8","wo":"ustąpić"},{"tr":"8","wo":"zrzec się"},{"tr":"8","wo":"stracić"}],"noun":[{"tr":"24","wo":"poddanie"},{"tr":"16","wo":"poddanie się"},{"tr":"8","wo":"rezygnacja"},{"tr":"8","wo":"wydanie"},{"tr":"8","wo":"ustąpienie"},{"tr":"8","wo":"oddanie się"}],"examples":[{"what":"verb","row":"cease resistance to an enemy or opponent and submit to their authority.","example":"over 140 rebels surrendered to the authorities"},{"what":"noun","row":"the action of surrendering.","example":"A final series of surrenders followed as hungry Lakota bands capitulated at military posts along the upper Missouri and Yellowstone."}]}',
    ),
    array( // row #312
        'word' => 'regularly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"regularnie"}],"examples":[{"what":"noun","row":"an organized group of criminals.","example":"Former military figures have been implicated in drug trafficking and kidnappings by organized criminal gangs ."},{"what":"verb","row":"(of a number of people) form a group or gang.","example":"the smaller supermarket chains are ganging together to beat the big boys"}]}',
    ),
    array( // row #313
        'word' => 'gang', 'pl_PL' => '{"noun":[{"tr":"24","wo":"gang"},{"tr":"24","wo":"banda"},{"tr":"16","wo":"drużyna"},{"tr":"8","wo":"ekipa"},{"tr":"8","wo":"zgraja"},{"tr":"8","wo":"sfora"},{"tr":"8","wo":"ferajna"},{"tr":"8","wo":"paczka"}],"examples":[{"what":"noun","row":"an organized group of criminals.","example":"Former military figures have been implicated in drug trafficking and kidnappings by organized criminal gangs ."},{"what":"verb","row":"(of a number of people) form a group or gang.","example":"the smaller supermarket chains are ganging together to beat the big boys"}]}',
    ),
    array( // row #314
        'word' => 'loaded', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"załadowany"},{"tr":"16","wo":"obciążony"},{"tr":"16","wo":"ładowny"},{"tr":"8","wo":"obarczony"},{"tr":"8","wo":"obwalony"},{"tr":"8","wo":"opakowany"}],"examples":[{"what":"adjective","row":"carrying or bearing a load, especially a large one.","example":"a heavily loaded freight train"},{"what":"verb","row":"put a load or large amount of something on or in (a vehicle, ship, container, etc.).","example":"they load up their dugout canoes"}]}',
    ),
    array( // row #315
        'word' => 'auto', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"automatyczny"}],"noun":[{"tr":"16","wo":"samochód"}],"examples":[{"what":"noun","row":"an automobile.","example":"the auto industry"},{"what":"prefix","row":"self.","example":"autoanalysis"},{"what":"combiningForm","row":"relating to cars.","example":"autocross"}]}',
    ),
    array( // row #316
        'word' => 'Ambassador', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ambasador"},{"tr":"16","wo":"poseł"}],"examples":[{"what":"noun","row":"an accredited diplomat sent by a country as its official representative to a foreign country.","example":"the French ambassador to Portugal"}]}',
    ),
    array( // row #317
        'word' => 'altered', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zmieniać"},{"tr":"16","wo":"modyfikować"},{"tr":"8","wo":"przerobić"},{"tr":"8","wo":"odmieniać"}],"examples":[{"what":"verb","row":"change or cause to change in character or composition, typically in a comparatively small but significant way.","example":"Eliot was persuaded to alter the passage"}]}',
    ),
    array( // row #318
        'word' => 'merchants', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kupiec"},{"tr":"16","wo":"handlowiec"},{"tr":"8","wo":"hurtownik"},{"tr":"8","wo":"facet"},{"tr":"8","wo":"gość"}],"examples":[{"what":"noun","row":"a person or company involved in wholesale trade, especially one dealing with foreign countries or supplying merchandise to a particular trade.","example":"the area\'s leading timber merchant"}]}',
    ),
    array( // row #319
        'word' => 'Vienna', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Wiedeń"}],"examples":[{"what":"noun","row":"the capital of Austria, in the northeastern part of the country on the Danube River; population 1,661,206 (2006). From 1278 to 1918 it was the seat of the Habsburgs and has long been a center of the arts, especially music. Mozart, Beethoven, and the Strauss family were among the composers who lived and worked there.","example":null}]}',
    ),
    array( // row #320
        'word' => 'engagement', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zaręczynowy"}],"noun":[{"tr":"24","wo":"zaangażowanie"},{"tr":"16","wo":"zaręczyny"},{"tr":"8","wo":"obietnica"},{"tr":"8","wo":"przyrzeczenie"},{"tr":"8","wo":"umówione spotkanie"},{"tr":"8","wo":"zajęcie"},{"tr":"8","wo":"narzeczeństwo"},{"tr":"8","wo":"bitwa"}],"examples":[{"what":"noun","row":"a formal agreement to get married.","example":"And it won\'t be a formal engagement , at least not until I can get a ring."}]}',
    ),
    array( // row #321
        'word' => 'dealt', 'pl_PL' => '{"verb":[{"tr":"8","wo":"dotyczyć"},{"tr":"8","wo":"rozdać"},{"tr":"8","wo":"zaaplikować"},{"tr":"8","wo":"handlować"},{"tr":"8","wo":"traktować"},{"tr":"8","wo":"obdzielać"},{"tr":"8","wo":"wymierzać cios"},{"tr":"8","wo":"zawierać transakcję"},{"tr":"8","wo":"mieszać się do czegoś"},{"tr":"8","wo":"uporać się z kimś"},{"tr":"8","wo":"postępować z kimś dobrze, źle"}],"examples":[{"what":"verb","row":"distribute (cards) in an orderly rotation to the players for a game or round.","example":"the cards were dealt for the last hand"}]}',
    ),
    array( // row #322
        'word' => 'nerves', 'pl_PL' => '{"noun":[{"tr":"8","wo":"nerwowość"}],"examples":[{"what":"noun","row":"(in the body) a whitish fiber or bundle of fibers that transmits impulses of sensation to the brain or spinal cord, and impulses from these to the muscles and organs.","example":"the optic nerve"},{"what":"verb","row":"brace oneself mentally to face a demanding situation.","example":"she nerved herself to enter the room"}]}',
    ),
    array( // row #323
        'word' => 'respects', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wyrazy szacunku"},{"tr":"8","wo":"pozdrowienia"}],"examples":[{"what":"adjective","row":"keeping or showing a balance; arranged in good proportions.","example":"she assembled a balanced team"}]}',
    ),
    array( // row #324
        'word' => 'balanced', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zrównoważony"},{"tr":"8","wo":"równy"},{"tr":"8","wo":"bilansowy"}],"examples":[{"what":"adjective","row":"keeping or showing a balance; arranged in good proportions.","example":"she assembled a balanced team"}]}',
    ),
    array( // row #325
        'word' => 'sighed', 'pl_PL' => '{"verb":[{"tr":"16","wo":"westchnąć"}],"examples":[{"what":"verb","row":"emit a long, deep, audible breath expressing sadness, relief, tiredness, or a similar feeling.","example":"Harry sank into a chair and sighed with relief"}]}',
    ),
    array( // row #326
        'word' => 'spectacular', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"spektakularny"},{"tr":"16","wo":"popisowy"},{"tr":"8","wo":"widowiskowy"}],"examples":[{"what":"adjective","row":"beautiful in a dramatic and eye-catching way.","example":"spectacular mountain scenery"},{"what":"noun","row":"an event such as a pageant or musical, produced on a large scale and with striking effects.","example":"The 1930s became the classic decade of Imperial spectaculars ."}]}',
    ),
    array( // row #327
        'word' => 'statistics', 'pl_PL' => '{"noun":[{"tr":"24","wo":"statystyka"}],"examples":[{"what":"noun","row":"the practice or science of collecting and analyzing numerical data in large quantities, especially for the purpose of inferring proportions in a whole from those in a representative sample.","example":"Aitken\'s mathematical work was in statistics , numerical analysis, and algebra."}]}',
    ),
    array( // row #328
        'word' => 'doubtful', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wątpliwy"},{"tr":"8","wo":"niepewny"},{"tr":"8","wo":"problematyczny"},{"tr":"8","wo":"wątpiący"},{"tr":"8","wo":"ciemny"}],"examples":[{"what":"adjective","row":"feeling uncertain about something.","example":"he looked doubtful, but gave a nod"}]}',
    ),
    array( // row #329
        'word' => 'triumph', 'pl_PL' => '{"noun":[{"tr":"24","wo":"triumf"},{"tr":"24","wo":"zwycięstwo"},{"tr":"16","wo":"sukces"}],"verb":[{"tr":"16","wo":"triumfować"},{"tr":"8","wo":"tryumfować"}],"examples":[{"what":"noun","row":"a great victory or achievement.","example":"a garden built to celebrate Napoleon\'s many triumphs"},{"what":"verb","row":"achieve a victory; be successful.","example":"spectacle has once again triumphed over content"}]}',
    ),
    array( // row #330
        'word' => 'Palm', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dłoń"},{"tr":"24","wo":"palma"},{"tr":"8","wo":"czułek"}],"verb":[{"tr":"8","wo":"ukryć w dłoni"},{"tr":"8","wo":"posmarować łapę komuś"},{"tr":"8","wo":"wlepić"}],"examples":[{"what":"noun","row":"an unbranched evergreen tree with a crown of long feathered or fan-shaped leaves, and typically having old leaf scars forming a regular pattern on the trunk. Palms grow in warm regions, especially the tropics.","example":"They even feel attached to the tree or the palm tree that might stand outside their home."},{"what":"verb","row":"conceal (a card or other small object) in the hand, especially as part of a trick or theft.","example":"he would spin wild tales while palming your wristwatch"}]}',
    ),
    array( // row #331
        'word' => 'HITS', 'pl_PL' => '{"noun":[{"tr":"24","wo":"trafienie"},{"tr":"16","wo":"przebój"},{"tr":"16","wo":"uderzenie"},{"tr":"8","wo":"sukces"},{"tr":"8","wo":"szlagier"}],"verb":[{"tr":"16","wo":"uderzać"},{"tr":"8","wo":"stuknąć"},{"tr":"8","wo":"zaatakować"},{"tr":"8","wo":"dotrzeć"},{"tr":"8","wo":"ugodzić"},{"tr":"8","wo":"zdzielić"},{"tr":"8","wo":"palnąć"}],"examples":[{"what":"noun","row":"an instance of striking or being struck.","example":"few structures can withstand a hit from a speeding car"},{"what":"verb","row":"bring one\'s hand or a tool or weapon into contact with (someone or something) quickly and forcefully.","example":"the woman hit the mugger with her umbrella"}]}',
    ),
    array( // row #332
        'word' => 'exhibition', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wystawa"},{"tr":"16","wo":"ekspozycja"},{"tr":"8","wo":"pokaz"},{"tr":"8","wo":"ukazanie"},{"tr":"8","wo":"popis"},{"tr":"8","wo":"stypendium"},{"tr":"8","wo":"stosowanie"}],"examples":[{"what":"noun","row":"a public display of works of art or other items of interest, held in an art gallery or museum or at a trade fair.","example":"an exhibition of French sculpture"}]}',
    ),
    array( // row #333
        'word' => 'MIAMI', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Miami"}],"examples":[{"what":"noun","row":"a city and port in southeastern Florida; population 413,201 (est. 2008). Its subtropical climate and miles of beaches make this and the resort island of Miami Beach, separated from the mainland by Biscayne Bay, a year-round holiday resort.","example":null},{"what":"adjective","row":"relating to the Miami or their language.","example":"She turned on the news, which was currently the local news, and watched in disgust as she watched a story about a Miami tribe of Indians wanting to sue a bunch of Illinois land owners for something they didn\'t do."}]}',
    ),
    array( // row #334
        'word' => 'uncertain', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"niepewny"},{"tr":"8","wo":"nieokreślony"},{"tr":"8","wo":"niezdecydowany"},{"tr":"8","wo":"wątpliwy"}],"examples":[{"what":"adjective","row":"not able to be relied on; not known or definite.","example":"an uncertain future"}]}',
    ),
    array( // row #335
        'word' => 'investigations', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dochodzenie"},{"tr":"16","wo":"śledztwo"},{"tr":"16","wo":"badanie"},{"tr":"8","wo":"wybadanie"},{"tr":"8","wo":"dociekanie"},{"tr":"8","wo":"prześledzenie"},{"tr":"8","wo":"wnikanie"}],"examples":[{"what":"noun","row":"the action of investigating something or someone; formal or systematic examination or research.","example":"he is under investigation for receiving illicit funds"}]}',
    ),
    array( // row #336
        'word' => 'conspiracy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"spisek"},{"tr":"24","wo":"konspiracja"},{"tr":"16","wo":"zmowa"},{"tr":"8","wo":"knowanie"}],"examples":[{"what":"noun","row":"a secret plan by a group to do something unlawful or harmful.","example":"a conspiracy to destroy the government"}]}',
    ),
    array( // row #337
        'word' => 'bid', 'pl_PL' => '{"noun":[{"tr":"24","wo":"oferta"},{"tr":"24","wo":"stawka"},{"tr":"8","wo":"licytacja"},{"tr":"8","wo":"zaproszenie"}],"verb":[{"tr":"24","wo":"licytować"},{"tr":"8","wo":"kazać"},{"tr":"8","wo":"rozkazać komuś"},{"tr":"8","wo":"zapraszać"},{"tr":"8","wo":"ofiarować cenę"},{"tr":"8","wo":"dać"},{"tr":"8","wo":"składać ofertę"},{"tr":"8","wo":"ofiarować"},{"tr":"8","wo":"zapowiadać kolor w brydżu"},{"tr":"8","wo":"mówić"}],"examples":[{"what":"verb","row":"offer (a certain price) for something, especially at an auction.","example":"a consortium of dealers bid a world record price for a snuff box"},{"what":"noun","row":"an offer of a price, especially at an auction.","example":"several buyers made bids for the Van Gogh sketches"}]}',
    ),
    array( // row #338
        'word' => 'intentions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zamiar"},{"tr":"24","wo":"intencja"},{"tr":"16","wo":"zamysł"},{"tr":"8","wo":"przedsięwzięcie"},{"tr":"8","wo":"rozmysł"},{"tr":"8","wo":"planowanie"}],"examples":[{"what":"noun","row":"a thing intended; an aim or plan.","example":"she was full of good intentions"}]}',
    ),
    array( // row #339
        'word' => 'posts', 'pl_PL' => '{"noun":[{"tr":"24","wo":"stanowisko"},{"tr":"24","wo":"słupek"},{"tr":"16","wo":"poczta"},{"tr":"16","wo":"słup"},{"tr":"16","wo":"posterunek"},{"tr":"16","wo":"urząd"},{"tr":"8","wo":"korespondencja"},{"tr":"8","wo":"posada"},{"tr":"8","wo":"podpora"},{"tr":"8","wo":"filar"},{"tr":"8","wo":"godność"}],"verb":[{"tr":"8","wo":"wysłać pocztą"}],"examples":[{"what":"noun","row":"a long, sturdy piece of timber or metal set upright in the ground and used to support something or as a marker.","example":"follow the blue posts until the track meets a forestry road"},{"what":"verb","row":"display (a notice) in a public place.","example":"a curt notice had been posted on the door"}]}',
    ),
    array( // row #340
        'word' => 'strategy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"strategia"}],"examples":[{"what":"noun","row":"a plan of action or policy designed to achieve a major or overall aim.","example":"time to develop a coherent economic strategy"}]}',
    ),
    array( // row #341
        'word' => 'retained', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zachować"},{"tr":"8","wo":"przechować"},{"tr":"8","wo":"angażować"},{"tr":"8","wo":"zatrzymać w miejscu"},{"tr":"8","wo":"pozostawać w posiadaniu"}],"examples":[{"what":"verb","row":"continue to have (something); keep possession of.","example":"built in 1830, the house retains many of its original features"}]}',
    ),
    array( // row #342
        'word' => 'trucks', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ciężarówka"},{"tr":"24","wo":"wózek"},{"tr":"8","wo":"platforma"},{"tr":"8","wo":"lora"},{"tr":"8","wo":"wymiana"},{"tr":"8","wo":"tandeta"}],"verb":[{"tr":"8","wo":"przewieźć ciężarówką"},{"tr":"8","wo":"frymarczyć"},{"tr":"8","wo":"wymieniać"}],"examples":[{"what":"noun","row":"a wheeled vehicle, in particular.","example":"There will be classic and vintage cars, racing cars, go-carts, bikes, trucks , service vehicles and just about anything else with wheels."},{"what":"verb","row":"convey by truck.","example":"the food was trucked to St. Petersburg"}]}',
    ),
    array( // row #343
        'word' => 'earliest', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"wczesny"},{"tr":"16","wo":"ranny"},{"tr":"8","wo":"pierwszy"},{"tr":"8","wo":"pierwotny"},{"tr":"8","wo":"przedwczesny"},{"tr":"8","wo":"dawny"},{"tr":"8","wo":"rychły"},{"tr":"8","wo":"przyśpieszony"}],"examples":[{"what":"adjective","row":"happening or done before the usual or expected time.","example":"we ate an early lunch"}]}',
    ),
    array( // row #344
        'word' => 'suited', 'pl_PL' => '{"verb":[{"tr":"24","wo":"pasować"},{"tr":"16","wo":"dostosować"},{"tr":"16","wo":"odpowiadać"},{"tr":"8","wo":"przystosować"},{"tr":"8","wo":"nadać się"},{"tr":"8","wo":"dogadzać"},{"tr":"8","wo":"harmonizować"},{"tr":"8","wo":"pasować do czegoś kogoś"},{"tr":"8","wo":"przypadać do gustu"},{"tr":"8","wo":"służyć"}],"examples":[{"what":"adjective","row":"right or appropriate for a particular person, purpose, or situation.","example":"the task is ideally suited to a computer"},{"what":"verb","row":"be convenient for or acceptable to.","example":"he lied whenever it suited him"}]}',
    ),
    array( // row #345
        'word' => 'appreciation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"uznanie"},{"tr":"16","wo":"wyrazy uznania"},{"tr":"8","wo":"oszacowanie"},{"tr":"8","wo":"zrozumienie wartości czegoś"},{"tr":"8","wo":"podwyżka"}],"examples":[{"what":"noun","row":"the recognition and enjoyment of the good qualities of someone or something.","example":"I smiled in appreciation"}]}',
    ),
    array( // row #346
        'word' => 'troubles', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kłopoty"},{"tr":"8","wo":"krzyż"},{"tr":"8","wo":"zaburzenie"}],"examples":[{"what":"noun","row":"an act of lifting and transporting something from one place to another.","example":"we did a carry of equipment from the camp"},{"what":"verb","row":"support and move (someone or something) from one place to another.","example":"medics were carrying a wounded man on a stretcher"}]}',
    ),
    array( // row #347
        'word' => 'rehabilitation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rehabilitacja"},{"tr":"8","wo":"rehabilitowanie"},{"tr":"8","wo":"odbudowa"},{"tr":"8","wo":"podźwignięcie"},{"tr":"8","wo":"rewalidacja"}],"examples":[{"what":"noun","row":"an act of lifting and transporting something from one place to another.","example":"we did a carry of equipment from the camp"},{"what":"verb","row":"support and move (someone or something) from one place to another.","example":"medics were carrying a wounded man on a stretcher"}]}',
    ),
    array( // row #348
        'word' => 'carries', 'pl_PL' => '{"verb":[{"tr":"24","wo":"nieść"},{"tr":"16","wo":"nosić"},{"tr":"16","wo":"przeprowadzać"},{"tr":"16","wo":"przenieść"},{"tr":"16","wo":"nanieść"},{"tr":"16","wo":"przewieźć"},{"tr":"8","wo":"zanieść"},{"tr":"8","wo":"dźwigać"},{"tr":"8","wo":"ponieść"},{"tr":"8","wo":"wozić"},{"tr":"8","wo":"przewodzić"},{"tr":"8","wo":"zawieźć"}],"examples":[{"what":"noun","row":"an act of lifting and transporting something from one place to another.","example":"we did a carry of equipment from the camp"},{"what":"verb","row":"support and move (someone or something) from one place to another.","example":"medics were carrying a wounded man on a stretcher"}]}',
    ),
    array( // row #349
        'word' => 'relatives', 'pl_PL' => '{"noun":[{"tr":"8","wo":"krewna"},{"tr":"8","wo":"krewniak"}],"examples":[{"what":"noun","row":"a person connected by blood or marriage.","example":"much of my time is spent visiting relatives"}]}',
    ),
    array( // row #350
        'word' => 'physics', 'pl_PL' => '{"noun":[{"tr":"24","wo":"fizyka"}],"examples":[{"what":"noun","row":"the branch of science concerned with the nature and properties of matter and energy. The subject matter of physics, distinguished from that of chemistry and biology, includes mechanics, heat, light and other radiation, sound, electricity, magnetism, and the structure of atoms.","example":"One of the most contentious subjects in modern physics has been quantum mechanics."},{"what":"noun","row":"medicine, especially a cathartic.","example":"The case of the lady was in the other extreme from that of her husband, for as he was past all the assistance of physic , so in reality she required none."},{"what":"verb","row":"treat with a medicine.","example":"The school nurse dosed and physicked them savagely for months."}]}',
    ),
    array( // row #351
        'word' => 'Gulf', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przepaść"},{"tr":"24","wo":"zatoka"},{"tr":"16","wo":"otchłań"},{"tr":"8","wo":"czeluść"},{"tr":"8","wo":"przedział"},{"tr":"8","wo":"wir"},{"tr":"8","wo":"topiel"}],"examples":[{"what":"noun","row":"a deep ravine, chasm, or abyss.","example":"The canyons - or gulfs , as the local people call them - are each about five miles long and 800 feet deep and are rimmed almost continuously by sheer sandstone cliffs."}]}',
    ),
    array( // row #352
        'word' => 'expects', 'pl_PL' => '{"verb":[{"tr":"24","wo":"oczekiwać"},{"tr":"16","wo":"spodziewać się"},{"tr":"8","wo":"przypuszczać"},{"tr":"8","wo":"wymagać"},{"tr":"8","wo":"sądzić"},{"tr":"8","wo":"liczyć na coś"}],"examples":[{"what":"verb","row":"regard (something) as likely to happen.","example":"we expect the best"}]}',
    ),
    array( // row #353
        'word' => 'complained', 'pl_PL' => '{"verb":[{"tr":"16","wo":"skarżyć się"},{"tr":"16","wo":"wnieść skargę"},{"tr":"8","wo":"uskarżać się"},{"tr":"8","wo":"naskarżyć"},{"tr":"8","wo":"płakać"},{"tr":"8","wo":"stękać"},{"tr":"8","wo":"jęczeć"},{"tr":"8","wo":"labiedzić"},{"tr":"8","wo":"narzekać na kogoś lub coś"}],"examples":[{"what":"verb","row":"express dissatisfaction or annoyance about a state of affairs or an event.","example":"local authorities complained that they lacked sufficient resources"}]}',
    ),
    array( // row #354
        'word' => 'sponsor', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sponsor"},{"tr":"8","wo":"ojciec chrzestny"}],"verb":[{"tr":"24","wo":"sponsorować"}],"examples":[{"what":"noun","row":"a person or organization that provides funds for a project or activity carried out by another, in particular.","example":"Exhibitions, which drive attendance and income, are fewer in number and next year will all have to be substantially funded by sponsors ."},{"what":"verb","row":"provide funds for (a project or activity or the person carrying it out).","example":"Joe is being sponsored by his church"}]}',
    ),
    array( // row #355
        'word' => 'obligations', 'pl_PL' => '{"noun":[{"tr":"24","wo":"obowiązek"},{"tr":"24","wo":"zobowiązanie"},{"tr":"8","wo":"powinność"},{"tr":"8","wo":"dług"},{"tr":"8","wo":"przymus"}],"examples":[{"what":"noun","row":"an act or course of action to which a person is morally or legally bound; a duty or commitment.","example":"he has enough cash to meet his present obligations"}]}',
    ),
    array( // row #356
        'word' => 'Miller', 'pl_PL' => '{"noun":[{"tr":"24","wo":"młynarz"},{"tr":"8","wo":"rozcieracz"}],"examples":[{"what":"noun","row":"a person who owns or works in a grain mill.","example":"She said that the government had been running programs since 2003 to encourage big corn millers to create a win-win partnership with small-scale farmers in corn-producing areas nationwide."}]}',
    ),
    array( // row #357
        'word' => 'congressional', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"kongresowy"},{"tr":"8","wo":"zjazdowy"}],"examples":[{"what":"adjective","row":"having traveled to many places.","example":"he was widely traveled"}]}',
    ),
    array( // row #358
        'word' => 'warned', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ostrzeżony"}],"examples":[{"what":"adjective","row":"(of language) open to more than one interpretation; having a double meaning.","example":"the question is rather ambiguous"}]}',
    ),
    array( // row #359
        'word' => 'servants', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sługa"},{"tr":"16","wo":"służący"},{"tr":"8","wo":"pachołek"},{"tr":"8","wo":"pokojowiec"},{"tr":"8","wo":"fagas"}],"examples":[{"what":"noun","row":"a person who performs duties for others, especially a person employed in a house on domestic duties or as a personal attendant.","example":"Many girls are used as domestic servants and are prevented from attending school."}]}',
    ),
    array( // row #360
        'word' => 'recommendations', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zalecenie"},{"tr":"24","wo":"rekomendacja"},{"tr":"8","wo":"polecenie"},{"tr":"8","wo":"zarekomendowanie"}],"examples":[{"what":"noun","row":"a suggestion or proposal as to the best course of action, especially one put forward by an authoritative body.","example":"the committee put forward forty recommendations for change"}]}',
    ),
    array( // row #361
        'word' => 'ambiguous', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"dwuznaczny"},{"tr":"16","wo":"niejasny"},{"tr":"8","wo":"zagadkowy"},{"tr":"8","wo":"mętny"}],"examples":[{"what":"adjective","row":"(of language) open to more than one interpretation; having a double meaning.","example":"the question is rather ambiguous"}]}',
    ),
    array( // row #362
        'word' => 'Pip', 'pl_PL' => '{"noun":[{"tr":"16","wo":"pypeć"},{"tr":"16","wo":"pestka"},{"tr":"8","wo":"ponury nastrój"},{"tr":"8","wo":"oczko w kartach"},{"tr":"8","wo":"sygnał"},{"tr":"8","wo":"łuska na ananasie"}],"verb":[{"tr":"8","wo":"balotować"},{"tr":"8","wo":"zwyciężać"},{"tr":"8","wo":"oblać egzamin"},{"tr":"8","wo":"pokonać"},{"tr":"8","wo":"zastrzelić"},{"tr":"8","wo":"postrzelić"},{"tr":"8","wo":"pokrzyżować czyjeś plany"}],"examples":[{"what":"noun","row":"a small hard seed in a fruit.","example":"Place the fruit, rind and pips in a large bowl and cover with cold water."},{"what":"verb","row":"(of a young bird) crack (the shell of the egg) when hatching.","example":"The first chicks will start to pip the shell as early as the 19th day of incubation."}]}',
    ),
    array( // row #363
        'word' => 'happiness', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szczęście"},{"tr":"8","wo":"pomyślność"},{"tr":"8","wo":"błogość"},{"tr":"8","wo":"uszczęśliwienie"},{"tr":"8","wo":"błogostan"}],"examples":[{"what":"noun","row":"the state of being happy.","example":"she struggled to find happiness in her life"}]}',
    ),
    array( // row #364
        'word' => 'anti-Semitism', 'pl_PL' => '{"noun":[{"tr":"24","wo":"antysemityzm"}],"examples":[{"what":"noun","row":"hostility to or prejudice against Jews.","example":"Indeed, I am sure she would not hesitate a minute in condemning both racism and anti-Semitism in the highest terms."}]}',
    ),
    array( // row #365
        'word' => 'whispered', 'pl_PL' => '{"verb":[{"tr":"24","wo":"szeptać"},{"tr":"8","wo":"podszepnąć"},{"tr":"8","wo":"zaszeptać"},{"tr":"8","wo":"mówić na ucho"},{"tr":"8","wo":"szeleścić"}],"examples":[{"what":"verb","row":"speak very softly using one\'s breath without one\'s vocal cords, especially for the sake of privacy.","example":"Alison was whispering in his ear"}]}',
    ),
    array( // row #366
        'word' => 'wounded', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ranny"},{"tr":"8","wo":"urażony"}],"examples":[{"what":"verb","row":"inflict an injury on (someone).","example":"the sergeant was seriously wounded"}]}',
    ),
    array( // row #367
        'word' => 'inventory', 'pl_PL' => '{"noun":[{"tr":"16","wo":"inwentarz"},{"tr":"16","wo":"zapas"},{"tr":"8","wo":"remanent"}],"examples":[{"what":"noun","row":"a complete list of items such as property, goods in stock, or the contents of a building.","example":"About 6 per cent of the slaves listed as sick in inventories of sugar properties suffered from cansaÃ§o or exhaustion."},{"what":"verb","row":"make a complete list of.","example":"It seemed that this person might have been chasing particularly items, but since the whole collection wasn\'t inventoried , it was really impossible to say."}]}',
    ),
    array( // row #368
        'word' => 'fibers', 'pl_PL' => '{"noun":[{"tr":"24","wo":"włókno"},{"tr":"8","wo":"fibra"},{"tr":"8","wo":"struktura"},{"tr":"8","wo":"natura"},{"tr":"8","wo":"charakter"},{"tr":"8","wo":"budowa"}],"examples":[{"what":"noun","row":"a thread or filament from which a vegetable tissue, mineral substance, or textile is formed.","example":"tropical elements like coconut fibers and branches"}]}',
    ),
    array( // row #369
        'word' => 'DISPLACEMENT', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wyporność"},{"tr":"24","wo":"przemieszczenie"},{"tr":"24","wo":"przesunięcie"},{"tr":"8","wo":"przestawienie"},{"tr":"8","wo":"dyslokacja"},{"tr":"8","wo":"przesiedlenie"},{"tr":"8","wo":"przesuwanie"},{"tr":"8","wo":"wyparcie"},{"tr":"8","wo":"wypieranie"},{"tr":"8","wo":"wyporność okrętu"},{"tr":"8","wo":"rugowanie"}],"examples":[{"what":"noun","row":"the moving of something from its place or position.","example":"vertical displacement of the shoreline"}]}',
    ),
    array( // row #370
        'word' => 'ma', 'pl_PL' => '{"noun":[{"tr":"16","wo":"mama"}],"examples":[{"what":"noun","row":"one\'s mother.","example":"I didn\'t want to make trouble for my ma"},{"what":"abbreviation","row":"Massachusetts (in official postal use).","example":null}]}',
    ),
    array( // row #371
        'word' => 'lengths', 'pl_PL' => '{"noun":[{"tr":"24","wo":"długość"},{"tr":"8","wo":"odcinek"},{"tr":"8","wo":"trwanie"},{"tr":"8","wo":"rozciągłość"},{"tr":"8","wo":"kawał"},{"tr":"8","wo":"dystans"}],"examples":[{"what":"noun","row":"the measurement or extent of something from end to end; the greater of two or the greatest of three dimensions of a body.","example":"it can reach over two feet in length"}]}',
    ),
    array( // row #372
        'word' => 'excited', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"podekscytowany"},{"tr":"24","wo":"podniecony"},{"tr":"16","wo":"wzbudzony"},{"tr":"8","wo":"wzniecony"},{"tr":"8","wo":"rozdrażniony"},{"tr":"8","wo":"zdenerwowany"},{"tr":"8","wo":"emocjonalny"},{"tr":"8","wo":"poekscytowany"},{"tr":"8","wo":"rozbudzony"},{"tr":"8","wo":"roznamiętniony"},{"tr":"8","wo":"rozogniony"},{"tr":"8","wo":"zapalony"},{"tr":"8","wo":"zwichrzony"}],"examples":[{"what":"adjective","row":"very enthusiastic and eager.","example":"they were excited about the prospect"}]}',
    ),
    array( // row #373
        'word' => 'assumptions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"założenie"},{"tr":"16","wo":"przypuszczenie"},{"tr":"8","wo":"hipoteza"},{"tr":"8","wo":"objęcie"},{"tr":"8","wo":"przybranie"},{"tr":"8","wo":"przywdzianie"}],"examples":[{"what":"noun","row":"a thing that is accepted as true or as certain to happen, without proof.","example":"they made certain assumptions about the market"}]}',
    ),
    array( // row #374
        'word' => 'hurried', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"pośpieszny"}],"examples":[{"what":"adjective","row":"done in a hurry; rushed.","example":"I ate a hurried breakfast"},{"what":"verb","row":"move or act with haste; rush.","example":"we\'d better hurry"}]}',
    ),
    array( // row #375
        'word' => 'oxidation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"utlenianie"},{"tr":"8","wo":"oksydacja"}],"examples":[{"what":"noun","row":"the process or result of oxidizing or being oxidized.","example":"The silver metal gives up some of its electrons and forms silver sulfide in a process called oxidation ."}]}',
    ),
    array( // row #376
        'word' => 'BOATING', 'pl_PL' => '{"verb":[{"tr":"8","wo":"jechać łódką"},{"tr":"8","wo":"ładować na łódź"}],"examples":[{"what":"noun","row":"rowing or sailing in boats as a sport or form of recreation.","example":"There is much enthusiasm for recreational boating and water sports among the middle and upper class in India."},{"what":"verb","row":"travel or go in a boat for pleasure.","example":"they boated through fjords"}]}',
    ),
    array( // row #377
        'word' => 'curiosity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ciekawość"},{"tr":"16","wo":"ciekawostka"},{"tr":"16","wo":"osobliwość"},{"tr":"8","wo":"curiosum"},{"tr":"8","wo":"rzadkość"},{"tr":"8","wo":"oryginał"}],"examples":[{"what":"noun","row":"a strong desire to know or learn something.","example":"filled with curiosity, she peered through the window"}]}',
    ),
    array( // row #378
        'word' => 'genius', 'pl_PL' => '{"noun":[{"tr":"24","wo":"geniusz"},{"tr":"16","wo":"duch"},{"tr":"8","wo":"talent"},{"tr":"8","wo":"genialność"},{"tr":"8","wo":"genialne dzieło"},{"tr":"8","wo":"orzeł"}],"examples":[{"what":"noun","row":"exceptional intellectual or creative power or other natural ability.","example":"she was a teacher of genius"},{"what":"adjective","row":"very clever or ingenious.","example":"a genius marketing ploy"}]}',
    ),
    array( // row #379
        'word' => 'souls', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dusza"},{"tr":"16","wo":"duch"},{"tr":"8","wo":"istota"},{"tr":"8","wo":"uosobienie"}],"examples":[{"what":"noun","row":"the spiritual or immaterial part of a human being or animal, regarded as immortal.","example":"It ignores all the empirical evidence for animal awareness while resting on an assumption for which there is no evidence: that human beings but no other animals possess immortal souls ."}]}',
    ),
    array( // row #380
        'word' => 'deck', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pokład"},{"tr":"8","wo":"talia kart"},{"tr":"8","wo":"piętro"}],"adjective":[{"tr":"16","wo":"pokładowy"}],"verb":[{"tr":"8","wo":"opiąć"},{"tr":"8","wo":"stroić"},{"tr":"8","wo":"ustroić"},{"tr":"8","wo":"poubierać"},{"tr":"8","wo":"ubierać"},{"tr":"8","wo":"ozdobić"}],"examples":[{"what":"noun","row":"a structure of planks or plates, approximately horizontal, extending across a ship or boat at any of various levels, especially one of those at the highest level and open to the weather.","example":"he stood on the deck of his flagship"},{"what":"verb","row":"decorate or adorn brightly or festively.","example":"Ingrid was decked out in her Sunday best"}]}',
    ),
    array( // row #381
        'word' => 'radar', 'pl_PL' => '{"noun":[{"tr":"24","wo":"radar"},{"tr":"8","wo":"radiolokacja"}],"adjective":[{"tr":"24","wo":"radarowy"}],"examples":[{"what":"noun","row":"a system for detecting the presence, direction, distance, and speed of aircraft, ships, and other objects, by sending out pulses of high-frequency electromagnetic waves that are reflected off the object back to the source.","example":"Chavez reported that Venezuelan radar detected the presence of the ships and planes during the coup attempt."}]}',
    ),
    array( // row #382
        'word' => 'belly', 'pl_PL' => '{"noun":[{"tr":"24","wo":"brzuch"},{"tr":"8","wo":"wybrzuszenie"},{"tr":"8","wo":"wklęsłość"},{"tr":"8","wo":"brzusiec"},{"tr":"8","wo":"żarłoczność"},{"tr":"8","wo":"pudło skrzypiec"}],"verb":[{"tr":"8","wo":"wydąć"}],"examples":[{"what":"noun","row":"the front part of the human trunk below the ribs, containing the stomach and bowels.","example":"Now he puts the light sounds with something else remembered, with primrose, with laughter, and down through him a prickle runs and it seems to stop in his belly , below him."},{"what":"verb","row":"swell or cause to swell.","example":"as she leaned forward her sweater bellied out"}]}',
    ),
    array( // row #383
        'word' => 'relevant', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"istotny"},{"tr":"16","wo":"odnośny"},{"tr":"8","wo":"stosowny"},{"tr":"8","wo":"trafny"},{"tr":"8","wo":"związany z tematem"}],"examples":[{"what":"adjective","row":"closely connected or appropriate to the matter at hand.","example":"the candidate\'s experience is relevant to the job"}]}',
    ),
    array( // row #384
        'word' => 'substances', 'pl_PL' => '{"noun":[{"tr":"24","wo":"substancja"},{"tr":"16","wo":"treść"},{"tr":"16","wo":"materiał"},{"tr":"16","wo":"istota"},{"tr":"8","wo":"masa"},{"tr":"8","wo":"ciało"},{"tr":"8","wo":"sens"},{"tr":"8","wo":"budulec"},{"tr":"8","wo":"solidność"},{"tr":"8","wo":"antyseptyk"}],"examples":[{"what":"noun","row":"a particular kind of matter with uniform properties.","example":"a steel tube coated with a waxy substance"}]}',
    ),
    array( // row #385
        'word' => 'rocks', 'pl_PL' => '{"noun":[{"tr":"24","wo":"skała"},{"tr":"16","wo":"kamień"},{"tr":"16","wo":"opoka"},{"tr":"8","wo":"muzyka rockowa"},{"tr":"8","wo":"wanta"},{"tr":"8","wo":"kądziel"}],"verb":[{"tr":"16","wo":"kołysać"},{"tr":"8","wo":"bujać"},{"tr":"8","wo":"kołysać się"},{"tr":"8","wo":"wykołysać"},{"tr":"8","wo":"pobujać"},{"tr":"8","wo":"wachlować"}],"examples":[{"what":"noun","row":"the solid mineral material forming part of the surface of the earth and other similar planets, exposed on the surface or underlying the soil or oceans.","example":"Groundwater will contain the minerals dissolved as the water moves through soil and rock materials."},{"what":"verb","row":"move gently to and fro or from side to side.","example":"she rocked the baby in her arms"}]}',
    ),
    array( // row #386
        'word' => 'refrigerator', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lodówka"},{"tr":"16","wo":"chłodziarka"},{"tr":"8","wo":"mroźnia"}],"examples":[{"what":"noun","row":"an appliance or compartment that is artificially kept cool and used to store food and drink. Modern refrigerators generally make use of the cooling effect produced when a volatile liquid is forced to evaporate in a sealed system in which it can be condensed back to liquid outside the refrigerator.","example":"It was used in the days before refrigerators to keep food cool and store ice blocks gathered in winter."}]}',
    ),
    array( // row #387
        'word' => 'Victor', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zwycięzca"}],"examples":[{"what":"noun","row":"a person who defeats an enemy or opponent in a battle, game, or other competition.","example":"The winner of each repechage then faces the runner-up in the other, with the two victors awarded bronze medals."}]}',
    ),
    array( // row #388
        'word' => 'Publications', 'pl_PL' => '{"noun":[{"tr":"24","wo":"publikacja"},{"tr":"16","wo":"opublikowanie"},{"tr":"16","wo":"publikowanie"},{"tr":"16","wo":"ogłoszenie"},{"tr":"16","wo":"wydanie"},{"tr":"8","wo":"rozgłoszenie"},{"tr":"8","wo":"rozgłos"},{"tr":"8","wo":"wypuszczenie"}],"examples":[{"what":"noun","row":"the preparation and issuing of a book, journal, piece of music, or other work for public sale.","example":"the publication of her first novel"}]}',
    ),
    array( // row #389
        'word' => 'lighting', 'pl_PL' => '{"noun":[{"tr":"24","wo":"oświetlenie"},{"tr":"8","wo":"rozpalanie"}],"examples":[{"what":"noun","row":"equipment in a home, workplace, studio, theater, or street for producing light.","example":"the heartless glare of strip lighting"}]}',
    ),
    array( // row #390
        'word' => 'exercises', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ćwiczenie"},{"tr":"16","wo":"wykonywanie"},{"tr":"16","wo":"ruch"},{"tr":"16","wo":"zadanie"},{"tr":"16","wo":"gimnastyka"},{"tr":"8","wo":"wprawka"},{"tr":"8","wo":"opracowanie"},{"tr":"8","wo":"ćwiczenia wojskowe"},{"tr":"8","wo":"przejawienie"},{"tr":"8","wo":"musztrowanie"}],"verb":[{"tr":"8","wo":"wykonać"},{"tr":"8","wo":"gimnastykować się"}],"examples":[{"what":"noun","row":"activity requiring physical effort, carried out especially to sustain or improve health and fitness.","example":"exercise improves your heart and lung power"},{"what":"verb","row":"use or apply (a faculty, right, or process).","example":"control is exercised by the Board"}]}',
    ),
    array( // row #391
        'word' => 'Brown\'s', 'pl_PL' => '{"noun":[{"tr":"24","wo":"brąz"},{"tr":"8","wo":"miedziak"}],"verb":[{"tr":"8","wo":"brązowieć"},{"tr":"8","wo":"przyrumienić"},{"tr":"8","wo":"brązowić"},{"tr":"8","wo":"rumienić"},{"tr":"8","wo":"zarumienić"},{"tr":"8","wo":"zbrązowieć"},{"tr":"8","wo":"obrumienić"},{"tr":"8","wo":"zasmażać"},{"tr":"8","wo":"przysmażać"},{"tr":"8","wo":"opalać się"},{"tr":"8","wo":"zbrunatnieć"}],"examples":[{"what":"verb","row":"make or become brown, typically by cooking.","example":"a skillet in which food has been browned"},{"what":"noun","row":"brown color or pigment.","example":"the brown of his eyes"}]}',
    ),
    array( // row #392
        'word' => 'grades', 'pl_PL' => '{"noun":[{"tr":"24","wo":"stopień"},{"tr":"16","wo":"gatunek"},{"tr":"8","wo":"nachylenie"},{"tr":"8","wo":"szczebel"},{"tr":"8","wo":"ranga"},{"tr":"8","wo":"klasa szkoły podstawowej"},{"tr":"8","wo":"krzyżowanie ras"},{"tr":"8","wo":"nota szkolna"}],"verb":[{"tr":"8","wo":"stopniować"},{"tr":"8","wo":"klasyfikować"},{"tr":"8","wo":"sortować"},{"tr":"8","wo":"krzyżować"},{"tr":"8","wo":"profilować drogę"},{"tr":"8","wo":"cieniować"}],"examples":[{"what":"noun","row":"a particular level of rank, quality, proficiency, intensity, or value.","example":"sea salt is usually available in coarse or fine grades"},{"what":"verb","row":"arrange in or allocate to grades; class or sort.","example":"they are graded according to thickness"}]}',
    ),
    array( // row #393
        'word' => 'searching', 'pl_PL' => '{"adjective":[{"tr":"8","wo":"badawczy"},{"tr":"8","wo":"drobiazgowy"},{"tr":"8","wo":"dokładny"},{"tr":"8","wo":"dociekliwy"},{"tr":"8","wo":"przenikliwy"},{"tr":"8","wo":"gruntowny"}],"examples":[{"what":"adjective","row":"thoroughly scrutinizing, especially in a disconcerting way.","example":"you have to ask yourselves some searching questions"},{"what":"verb","row":"try to find something by looking or otherwise seeking carefully and thoroughly.","example":"I searched among the rocks, but there was nothing"}]}',
    ),
    array( // row #394
        'word' => 'reflects', 'pl_PL' => '{"verb":[{"tr":"24","wo":"odzwierciedlić"},{"tr":"16","wo":"odbić"},{"tr":"8","wo":"zastanawiać się"},{"tr":"8","wo":"rozważać"},{"tr":"8","wo":"rozmyślać"},{"tr":"8","wo":"rozpamiętywać"},{"tr":"8","wo":"dumać"},{"tr":"8","wo":"krytykować"},{"tr":"8","wo":"namyślać się"},{"tr":"8","wo":"przynieść"}],"examples":[{"what":"verb","row":"(of a surface or body) throw back (heat, light, or sound) without absorbing it.","example":"when the sun\'s rays hit the earth a lot of the heat is reflected back into space"}]}',
    ),
    array( // row #395
        'word' => 'sentiment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sentyment"},{"tr":"16","wo":"uczucie"},{"tr":"8","wo":"zapatrywanie"},{"tr":"8","wo":"opinia"},{"tr":"8","wo":"sentymentalność"}],"examples":[{"what":"noun","row":"a view of or attitude toward a situation or event; an opinion.","example":"I agree with your sentiments regarding the road bridge"}]}',
    ),
    array( // row #396
        'word' => 'plug', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wtyczka"},{"tr":"24","wo":"korek"},{"tr":"16","wo":"zatyczka"},{"tr":"16","wo":"czop"},{"tr":"16","wo":"zaślepka"},{"tr":"8","wo":"prymka"},{"tr":"8","wo":"wtyczka elektryczna"},{"tr":"8","wo":"wkrętka"},{"tr":"8","wo":"plomba"},{"tr":"8","wo":"niechodliwa książka"}],"verb":[{"tr":"16","wo":"zatkać"},{"tr":"8","wo":"czopować"}],"examples":[{"what":"noun","row":"an obstruction blocking a hole, pipe, etc..","example":"somewhere in the pipes there is a plug of ice blocking the flow"},{"what":"verb","row":"block or fill in (a hole or cavity).","example":"trucks arrived loaded with gravel to plug the hole and clear the road"}]}',
    ),
    array( // row #397
        'word' => 'craft', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rzemiosło"},{"tr":"24","wo":"statek"},{"tr":"16","wo":"rękodzieło"},{"tr":"8","wo":"kunszt"},{"tr":"8","wo":"przebiegłość"},{"tr":"8","wo":"cwaniactwo"},{"tr":"8","wo":"chytrość"},{"tr":"8","wo":"zawód"},{"tr":"8","wo":"rękodzielnictwo"},{"tr":"8","wo":"branża"},{"tr":"8","wo":"cech"},{"tr":"8","wo":"łódź"},{"tr":"8","wo":"płatowiec"}],"adjective":[{"tr":"24","wo":"rzemieślniczy"}],"examples":[{"what":"noun","row":"an activity involving skill in making things by hand.","example":"the craft of bookbinding"},{"what":"verb","row":"exercise skill in making (something).","example":"he crafted the chair lovingly"}]}',
    ),
    array( // row #398
        'word' => 'generations', 'pl_PL' => '{"noun":[{"tr":"24","wo":"generacja"},{"tr":"24","wo":"pokolenie"},{"tr":"16","wo":"produkcja"},{"tr":"16","wo":"powstawanie"},{"tr":"8","wo":"rozród"},{"tr":"8","wo":"rozrodczość"}],"examples":[{"what":"noun","row":"all of the people born and living at about the same time, regarded collectively.","example":"one of his generation\'s finest songwriters"}]}',
    ),
    array( // row #399
        'word' => 'Cabin', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kabina"},{"tr":"24","wo":"chata"},{"tr":"16","wo":"kajuta"},{"tr":"8","wo":"chałupa"},{"tr":"8","wo":"budka"}],"verb":[{"tr":"8","wo":"ściskać"}],"examples":[{"what":"noun","row":"a private room or compartment on a ship.","example":"The options are these: If you definitely want to be alone in a single cabin, first look for a ship that has single cabins ."},{"what":"verb","row":"confine in a small place.","example":"They have allowed these anti-Victorians to be cabined in Victorian stereotypes."}]}',
    ),
    array( // row #400
        'word' => 'variations', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zmiana"},{"tr":"16","wo":"zmienność"},{"tr":"16","wo":"wariacja"},{"tr":"16","wo":"odchylenie"},{"tr":"8","wo":"mutacja"}],"examples":[{"what":"noun","row":"a change or difference in condition, amount, or level, typically with certain limits.","example":"regional variations in house prices"}]}',
    ),
    array( // row #401
        'word' => 'hungry', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"głodny"},{"tr":"8","wo":"zgłodniały"},{"tr":"8","wo":"nienasycony"},{"tr":"8","wo":"złakniony"}],"examples":[{"what":"adjective","row":"feeling or displaying the need for food.","example":"I was feeling ravenously hungry"}]}',
    ),
    array( // row #402
        'word' => 'unexpected', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"nieoczekiwany"},{"tr":"16","wo":"niespodziewany"},{"tr":"8","wo":"nieprzewidziany"},{"tr":"8","wo":"nadspodziewany"},{"tr":"8","wo":"nagły"},{"tr":"8","wo":"raptowny"}],"examples":[{"what":"adjective","row":"not expected or regarded as likely to happen.","example":"his death was totally unexpected"}]}',
    ),
    array( // row #403
        'word' => 'giant', 'pl_PL' => '{"noun":[{"tr":"24","wo":"olbrzym"},{"tr":"24","wo":"gigant"},{"tr":"8","wo":"wielkolud"},{"tr":"8","wo":"goliat"},{"tr":"8","wo":"tytan"}],"adjective":[{"tr":"24","wo":"olbrzymi"},{"tr":"16","wo":"gigantyczny"}],"examples":[{"what":"adjective","row":"of very great size or force; gigantic.","example":"giant multinational corporations"},{"what":"noun","row":"an imaginary or mythical being of human form but superhuman size.","example":"Along the north-west coast of Britain, megalithic sites were commonly associated with mythical giants or were giants turned to stone."}]}',
    ),
    array( // row #404
        'word' => 'justified', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"usprawiedliwiony"}],"examples":[{"what":"adjective","row":"having, done for, or marked by a good or legitimate reason.","example":"the doctors were justified in treating her"}]}',
    ),
    array( // row #405
        'word' => 'Stern', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"rufowy"},{"tr":"16","wo":"srogi"},{"tr":"8","wo":"marsowy"},{"tr":"8","wo":"marsowaty"}],"noun":[{"tr":"16","wo":"rufa"},{"tr":"8","wo":"zad"},{"tr":"8","wo":"ogon psa"}],"examples":[{"what":"adjective","row":"(of a person or their manner) serious and unrelenting, especially in the assertion of authority and exercise of discipline.","example":"a smile transformed his stern face"},{"what":"noun","row":"the rearmost part of a ship or boat.","example":"he stood at the stern of the yacht"}]}',
    ),
    array( // row #406
        'word' => 'Eighteenth', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"osiemnasty"},{"tr":"24","wo":"osiemnasty"}],"noun":[{"tr":"16","wo":"osiemnasta"}],"examples":[{"what":"noun","row":"a flat dish, typically circular and made of china, from which food is eaten or served.","example":"A pile of rugs and blankets lay within, pillar candles perched all about, set on dinner plates from the china closet."},{"what":"verb","row":"cover (a metal object) with a thin coating or film of a different metal.","example":"she had already taken the coin to a jeweler to be plated"}]}',
    ),
    array( // row #407
        'word' => 'heels', 'pl_PL' => '{"noun":[{"tr":"24","wo":"obcas"},{"tr":"24","wo":"pięta"},{"tr":"16","wo":"przechył"},{"tr":"16","wo":"piętka"},{"tr":"8","wo":"napiętek"},{"tr":"8","wo":"przylepka"},{"tr":"8","wo":"skrajka"},{"tr":"8","wo":"łajdak"},{"tr":"8","wo":"żabka"}],"verb":[{"tr":"8","wo":"wstawić piętę"},{"tr":"8","wo":"dorobić obcas"},{"tr":"8","wo":"przechylić"}],"examples":[{"what":"noun","row":"the back part of the foot below the ankle.","example":"Knees are bent and held in front of the chest, with the heels positioned below the hips."},{"what":"verb","row":"fit or renew a heel on (a shoe or boot).","example":"In fact, if you are dining there he will lend you a pair of flip-flops to get back to your chair while he heels your soles."}]}',
    ),
    array( // row #408
        'word' => 'manufacturer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"producent"},{"tr":"16","wo":"wytwórca"},{"tr":"8","wo":"fabrykant"},{"tr":"8","wo":"przemysłowiec"},{"tr":"8","wo":"przetwórca"},{"tr":"8","wo":"rękodzielnik"}],"examples":[{"what":"noun","row":"a person or company that makes goods for sale.","example":"the manufacturers supply the goods to the distribution center"}]}',
    ),
    array( // row #409
        'word' => 'gin', 'pl_PL' => '{"noun":[{"tr":"24","wo":"gin"},{"tr":"24","wo":"dżin"},{"tr":"8","wo":"odziarniarka"},{"tr":"8","wo":"sidła"},{"tr":"8","wo":"pułapka"},{"tr":"8","wo":"wciągarka"},{"tr":"8","wo":"kołowrót z pionowym bębnem"},{"tr":"8","wo":"prostytutka murzyńska"}],"examples":[{"what":"noun","row":"a clear alcoholic spirit distilled from grain or malt and flavored with juniper berries.","example":"Favor clear spirits like vodka and gin over darker-colored alcohols like whiskey, brandy or red wine."},{"what":"verb","row":"treat (cotton) in a gin.","example":"The country\'s largest ginneries were only utilising 24 and 54 per cent of their respective ginning capacity, and only 40 per cent of the seed cotton was ginned into cotton lint."}]}',
    ),
    array( // row #410
        'word' => 'attempting', 'pl_PL' => '{"verb":[{"tr":"24","wo":"próbować"},{"tr":"8","wo":"usiłować"},{"tr":"8","wo":"pokusić się"},{"tr":"8","wo":"kusić się"},{"tr":"8","wo":"chcieć coś zrobić"},{"tr":"8","wo":"postarać się"}],"examples":[{"what":"verb","row":"make an effort to achieve or complete (something, typically a difficult task or action).","example":"she attempted a comeback in 1989"}]}',
    ),
    array( // row #411
        'word' => 'incredible', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"niewiarygodny"},{"tr":"16","wo":"nieprawdopodobny"},{"tr":"8","wo":"niestworzony"}],"examples":[{"what":"adjective","row":"impossible to believe.","example":"an almost incredible tale of triumph and tragedy"}]}',
    ),
    array( // row #412
        'word' => 'insects', 'pl_PL' => '{"noun":[{"tr":"24","wo":"owad"},{"tr":"24","wo":"insekt"},{"tr":"8","wo":"robaczek"},{"tr":"8","wo":"zero"}],"examples":[{"what":"noun","row":"a small arthropod animal that has six legs and generally one or two pairs of wings.","example":"Voices that would seem possible only from the throat of a bird in fact arise from the wings of an insect ."}]}',
    ),
    array( // row #413
        'word' => 'farmer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rolnik"},{"tr":"24","wo":"farmer"},{"tr":"16","wo":"hodowca"},{"tr":"16","wo":"gospodarz"},{"tr":"8","wo":"fermer"},{"tr":"8","wo":"dzierżawca"}],"examples":[{"what":"noun","row":"a person who owns or manages a farm.","example":"It helped farmers and farm owners to stay in their property with government help."}]}',
    ),
    array( // row #414
        'word' => 'killing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zabicie"}],"adjective":[{"tr":"16","wo":"zabójczy"},{"tr":"8","wo":"przezabawny"}],"examples":[{"what":"adjective","row":"causing death.","example":"weed-killing"},{"what":"noun","row":"an act of causing death, especially deliberately.","example":"The village of Murma is in shock over the brutal killings of two young boys by their teacher."},{"what":"verb","row":"cause the death of (a person, animal, or other living thing).","example":"her father was killed in a car crash"}]}',
    ),
    array( // row #415
        'word' => 'CLEARED', 'pl_PL' => '{"verb":[{"tr":"24","wo":"oczyścić"},{"tr":"8","wo":"wyjaśniać"},{"tr":"8","wo":"przejaśniać"},{"tr":"8","wo":"klarować"},{"tr":"8","wo":"torować"},{"tr":"8","wo":"znikać"},{"tr":"8","wo":"uwalniać"},{"tr":"8","wo":"przejaśniać się"},{"tr":"8","wo":"odpłynąć"},{"tr":"8","wo":"usprawiedliwiać"},{"tr":"8","wo":"likwidować"},{"tr":"8","wo":"uprzątać"}],"examples":[{"what":"verb","row":"become clear, in particular.","example":null}]}',
    ),
    array( // row #416
        'word' => 'Ultimately', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"ostatecznie"},{"tr":"16","wo":"w końcu"},{"tr":"16","wo":"wreszcie"},{"tr":"8","wo":"nareszcie"}],"examples":[{"what":"adverb","row":"finally; in the end.","example":"the largest firms may ultimately become unstoppable"}]}',
    ),
    array( // row #417
        'word' => 'resumed', 'pl_PL' => '{"verb":[{"tr":"8","wo":"otrzymać z powrotem"},{"tr":"8","wo":"podjąć na nowo"},{"tr":"8","wo":"powracać do czegoś"},{"tr":"8","wo":"mówić dalej"},{"tr":"8","wo":"dalej coś robić"}],"examples":[{"what":"verb","row":"begin to do or pursue (something) again after a pause or interruption.","example":"a day later normal service was resumed"}]}',
    ),
    array( // row #418
        'word' => 'burns', 'pl_PL' => '{"verb":[{"tr":"24","wo":"palić"},{"tr":"24","wo":"spalić"},{"tr":"16","wo":"płonąć"},{"tr":"16","wo":"wypalać"},{"tr":"16","wo":"poparzyć"},{"tr":"8","wo":"palić się"},{"tr":"8","wo":"przypalić"},{"tr":"8","wo":"podpalać"},{"tr":"8","wo":"parzyć"},{"tr":"8","wo":"pałać"}],"noun":[{"tr":"24","wo":"oparzenie"},{"tr":"16","wo":"poparzenie"}],"examples":[{"what":"noun","row":"an injury caused by exposure to heat or flame.","example":"he was treated in the hospital for burns to his hands"},{"what":"verb","row":"(of a fire) flame or glow while consuming a material such as coal or wood.","example":"a fire burned and crackled cheerfully in the grate"}]}',
    ),
    array( // row #419
        'word' => 'arrival', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przyjazd"},{"tr":"24","wo":"przybycie"},{"tr":"16","wo":"przylot"},{"tr":"16","wo":"przyjście"},{"tr":"8","wo":"przybysz"},{"tr":"8","wo":"transport towarów"},{"tr":"8","wo":"noworodek żartobliwie"}],"examples":[{"what":"noun","row":"the action or process of arriving.","example":"Ruth\'s arrival in New York"}]}',
    ),
    array( // row #420
        'word' => 'dances', 'pl_PL' => '{"noun":[{"tr":"24","wo":"taniec"},{"tr":"16","wo":"dancing"},{"tr":"8","wo":"bal"},{"tr":"8","wo":"zabawa"},{"tr":"8","wo":"potańcówka"}],"verb":[{"tr":"24","wo":"tańczyć"},{"tr":"24","wo":"zatańczyć"},{"tr":"8","wo":"pląsać"},{"tr":"8","wo":"skakać"},{"tr":"8","wo":"balować"},{"tr":"8","wo":"kręcić się"},{"tr":"8","wo":"prowadzić"},{"tr":"8","wo":"kołysać"}],"examples":[{"what":"noun","row":"a series of movements that match the speed and rhythm of a piece of music.","example":"The poem I wrote this morning - Barong Dance is about the link between the music and the dance in Balinese Dance dramas."},{"what":"verb","row":"move rhythmically to music, typically following a set sequence of steps.","example":"their cheeks were pressed together as they danced"}]}',
    ),
    array( // row #421
        'word' => 'chairs', 'pl_PL' => '{"noun":[{"tr":"24","wo":"krzesło"},{"tr":"24","wo":"fotel"},{"tr":"8","wo":"katedra"},{"tr":"8","wo":"siodełko"},{"tr":"8","wo":"miejsce dla świadków"}],"verb":[{"tr":"8","wo":"oddać przewodnictwo"},{"tr":"8","wo":"nieść w triumfie"}],"examples":[{"what":"noun","row":"the person in charge of a meeting or organization (used as a neutral alternative to chairman or chairwoman).","example":"a three-year term as the boardâs deputy chair"},{"what":"verb","row":"act as chairperson of or preside over (an organization, meeting, or public event).","example":"The meeting was chaired by the President who welcomed a full attendance of members."}]}',
    ),
    array( // row #422
        'word' => 'adults', 'pl_PL' => '{"noun":[{"tr":"16","wo":"osoba dorosła"}],"examples":[{"what":"noun","row":"a person who is fully grown or developed.","example":"children should be accompanied by an adult"}]}',
    ),
    array( // row #423
        'word' => 'Jean', 'pl_PL' => '{"noun":[{"tr":"8","wo":"drelich"}],"examples":[{"what":"noun","row":"heavy twilled cotton cloth, especially denim.","example":"a jean jacket"}]}',
    ),
    array( // row #424
        'word' => 'heights', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wysokość"},{"tr":"16","wo":"wzrost"},{"tr":"8","wo":"szczyt"},{"tr":"8","wo":"wzniesienie"},{"tr":"8","wo":"apogeum"},{"tr":"8","wo":"wysoczyzna"},{"tr":"8","wo":"wyniosłość"},{"tr":"8","wo":"intensywność"},{"tr":"8","wo":"zenit"},{"tr":"8","wo":"pełnia rozkwitu"}],"examples":[{"what":"noun","row":"the measurement from base to top or (of a standing person) from head to foot.","example":"columns rising to 65 feet in height"}]}',
    ),
    array( // row #425
        'word' => 'expectations', 'pl_PL' => '{"noun":[{"tr":"24","wo":"oczekiwanie"},{"tr":"16","wo":"nadzieja"},{"tr":"16","wo":"przewidywanie"},{"tr":"16","wo":"prawdopodobieństwo"}],"examples":[{"what":"noun","row":"a strong belief that something will happen or be the case in the future.","example":"reality had not lived up to expectations"}]}',
    ),
    array( // row #426
        'word' => 'teams', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zespół"},{"tr":"24","wo":"drużyna"},{"tr":"24","wo":"team"},{"tr":"16","wo":"ekipa"},{"tr":"8","wo":"zaprząg"},{"tr":"8","wo":"sprzężaj"},{"tr":"8","wo":"sprzęg"},{"tr":"8","wo":"gromada"}],"verb":[{"tr":"8","wo":"zespalać się"},{"tr":"8","wo":"sprząc"}],"examples":[{"what":"noun","row":"a group of players forming one side in a competitive game or sport.","example":"For the most part, hockey is truly a team game in a sports world that sells individuals."},{"what":"verb","row":"come together as a team to achieve a common goal.","example":"he teamed up with the band to produce the album"}]}',
    ),
    array( // row #427
        'word' => 'Ruth', 'pl_PL' => '{"noun":[{"tr":"16","wo":"litość"}],"examples":[{"what":"noun","row":"a book of the Bible telling the story of Ruth, a Moabite woman, who married her deceased husband\'s kinsman Boaz and bore a son, Obed, who became grandfather to King David.","example":null},{"what":"noun","row":"a feeling of pity, distress, or grief.","example":"The young men, fiery savage children of a gentle civilized mother, slew with neither ruth nor pity."}]}',
    ),
    array( // row #428
        'word' => 'hearts', 'pl_PL' => '{"noun":[{"tr":"16","wo":"kiery"}],"examples":[{"what":"noun","row":"a hollow muscular organ that pumps the blood through the circulatory system by rhythmic contraction and dilation. In vertebrates there may be up to four chambers (as in humans), with two atria and two ventricles.","example":"The device has a tube entering the left ventricle, the heart \'s main pumping chamber."},{"what":"verb","row":"like very much; love.","example":"I totally heart this song"}]}',
    ),
    array( // row #429
        'word' => 'Don', 'pl_PL' => '{"noun":[{"tr":"24","wo":"don"},{"tr":"16","wo":"wykładowca"},{"tr":"8","wo":"mistrz"}],"verb":[{"tr":"8","wo":"wdziać"},{"tr":"8","wo":"oblec"}],"examples":[{"what":"noun","row":"a river in Russia that rises near Tula, southeast of Moscow, and flows for 1,224 miles (1,958 km) to the Sea of Azov.","example":null},{"what":"noun","row":"a Spanish title prefixed to a male forename.","example":"Carmen pleads âLet me goâ to a Don JosÃ©."},{"what":"verb","row":"put on (an item of clothing).","example":"in the locker room the players donned their football jerseys"}]}',
    ),
    array( // row #430
        'word' => 'controlling', 'pl_PL' => '{"verb":[{"tr":"24","wo":"kontrolować"},{"tr":"16","wo":"sterować"},{"tr":"8","wo":"regulować"},{"tr":"8","wo":"panować"},{"tr":"8","wo":"zarządzać"},{"tr":"8","wo":"zapanować"},{"tr":"8","wo":"kierować"},{"tr":"8","wo":"hamować"},{"tr":"8","wo":"mieć władze"},{"tr":"8","wo":"rozporządzać"},{"tr":"8","wo":"rządzić"},{"tr":"8","wo":"panować nad sobą"},{"tr":"8","wo":"pohamować"}],"examples":[{"what":"verb","row":"determine the behavior or supervise the running of.","example":"he was appointed to control the company\'s marketing strategy"}]}',
    ),
    array( // row #431
        'word' => 'Bobby', 'pl_PL' => '{"noun":[{"tr":"16","wo":"konstabl"}],"examples":[{"what":"noun","row":"a police officer.","example":"Police authorities whose bobbies wear helmets for patrols will be given shorter, stronger ones next year."}]}',
    ),
    array( // row #432
        'word' => 'Bombers', 'pl_PL' => '{"noun":[{"tr":"24","wo":"bombowiec"},{"tr":"16","wo":"samolot bombowy"},{"tr":"8","wo":"szturmowiec"}],"examples":[{"what":"noun","row":"an aircraft designed to carry and drop bombs.","example":"These forces are a mixture of assets that includes fighters, bombers , and support aircraft."}]}',
    ),
    array( // row #433
        'word' => 'champion', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mistrz"},{"tr":"16","wo":"zwycięzca"},{"tr":"8","wo":"orędownik"},{"tr":"8","wo":"obrońca"},{"tr":"8","wo":"bojownik"},{"tr":"8","wo":"szampion"},{"tr":"8","wo":"rekordzista"},{"tr":"8","wo":"głosiciel"},{"tr":"8","wo":"protagonista"},{"tr":"8","wo":"ideolog"}],"examples":[{"what":"noun","row":"a person who has defeated or surpassed all rivals in a competition, especially in sports.","example":"a champion hurdler"},{"what":"verb","row":"support the cause of; defend.","example":"priests who championed human rights"}]}',
    ),
    array( // row #434
        'word' => 'eighth', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ósma"}],"adjective":[{"tr":"24","wo":"ósmy"},{"tr":"24","wo":"ósmy"}],"examples":[{"what":"","row":"constituting number eight in a sequence; 8th.","example":"in the eighth century"}]}',
    ),
    array( // row #435
        'word' => 'strategic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"strategiczny"}],"examples":[{"what":"adjective","row":"relating to the identification of long-term or overall aims and interests and the means of achieving them.","example":"the company should take strategic actions to cope with fundamental changes in the environment"}]}',
    ),
    array( // row #436
        'word' => 'Memorial', 'pl_PL' => '{"noun":[{"tr":"24","wo":"memoriał"},{"tr":"24","wo":"pomnik"}],"adjective":[{"tr":"16","wo":"pamiątkowy"},{"tr":"8","wo":"memoriałowy"},{"tr":"8","wo":"pamięciowy"}],"examples":[{"what":"noun","row":"something, especially a structure, established to remind people of a person or event.","example":"a monument built as a memorial to those who fell in the Civil War"}]}',
    ),
    array( // row #437
        'word' => 'dedicated', 'pl_PL' => '{"verb":[{"tr":"16","wo":"poświęcać"},{"tr":"16","wo":"zadedykować"},{"tr":"16","wo":"dedykować"},{"tr":"8","wo":"ofiarować"},{"tr":"8","wo":"dokonywać uroczystego otwarcia"}],"examples":[{"what":"adjective","row":"(of a person) devoted to a task or purpose; having single-minded loyalty or integrity.","example":"a team of dedicated doctors"},{"what":"verb","row":"devote (time, effort, or oneself) to a particular task or purpose.","example":"Joan has dedicated her life to animals"}]}',
    ),
    array( // row #438
        'word' => 'governmental', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"rządowy"}],"examples":[{"what":"adjective","row":"famous or important in history, or potentially so.","example":"we are standing on a historic site"}]}',
    ),
    array( // row #439
        'word' => 'historic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"historyczny"},{"tr":"8","wo":"dziejowy"},{"tr":"8","wo":"wiekopomny"}],"examples":[{"what":"adjective","row":"famous or important in history, or potentially so.","example":"we are standing on a historic site"}]}',
    ),
    array( // row #440
        'word' => 'colleagues', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kolega"},{"tr":"16","wo":"współpracownik"}],"examples":[{"what":"noun","row":"a person with whom one works, especially in a profession or business.","example":"Spent part of today writing a couple of spoof company memos for a select group of colleagues ."}]}',
    ),
    array( // row #441
        'word' => 'encouraging', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zachęcający"},{"tr":"16","wo":"dopingowy"},{"tr":"8","wo":"popierający"}],"examples":[{"what":"adjective","row":"giving someone support or confidence; supportive.","example":"she gave me an encouraging smile"},{"what":"verb","row":"give support, confidence, or hope to (someone).","example":"we were encouraged by the success of this venture"}]}',
    ),
    array( // row #442
        'word' => 'channels', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kanał"},{"tr":"8","wo":"tor"},{"tr":"8","wo":"koryto"},{"tr":"8","wo":"rynna"},{"tr":"8","wo":"kanalik"},{"tr":"8","wo":"przewód"},{"tr":"8","wo":"rowek"},{"tr":"8","wo":"przepust"},{"tr":"8","wo":"odciek"},{"tr":"8","wo":"farwater"},{"tr":"8","wo":"żłobienie"}],"verb":[{"tr":"8","wo":"rowkować"},{"tr":"8","wo":"kopać rowy"},{"tr":"8","wo":"żłobić"}],"examples":[{"what":"noun","row":"a length of water wider than a strait, joining two larger areas of water, especially two seas.","example":"The bay includes saltmarsh, shallow and open water, tidal channels , mudflats and numerous islands, and a freshwater pond."},{"what":"verb","row":"direct toward a particular end or object.","example":"advertisers channel money into radio"}]}',
    ),
    array( // row #443
        'word' => 'regime', 'pl_PL' => '{"noun":[{"tr":"24","wo":"reżim"},{"tr":"16","wo":"ustrój"},{"tr":"16","wo":"rządy"}],"examples":[{"what":"noun","row":"a government, especially an authoritarian one.","example":"For one, wages tend to be lower in authoritarian regimes than in democracies, giving businesses in dictatorships a monetary advantage in selling exports abroad."}]}',
    ),
    array( // row #444
        'word' => 'originally', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"pierwotnie"},{"tr":"24","wo":"oryginalnie"},{"tr":"8","wo":"osobliwie"}],"examples":[{"what":"adverb","row":"from or in the beginning; at first.","example":"potatoes originally came from South America"}]}',
    ),
    array( // row #445
        'word' => 'monthly', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"miesięczny"},{"tr":"16","wo":"comiesięczny"},{"tr":"8","wo":"całomiesięczny"}],"adverb":[{"tr":"24","wo":"miesięcznie"}],"noun":[{"tr":"24","wo":"miesięcznik"}],"examples":[{"what":"adjective","row":"done, produced, or occurring once a month.","example":"the council held monthly meetings"},{"what":"adverb","row":"once a month; every month; from month to month.","example":"most of us get paid monthly"},{"what":"noun","row":"a magazine that is published once a month.","example":"Mother Jones, a glossy monthly , takes an equally unequivocal approach to war."}]}',
    ),
    array( // row #446
        'word' => 'discrimination', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dyskryminacja"},{"tr":"8","wo":"dyskryminowanie"},{"tr":"8","wo":"odróżnianie"},{"tr":"8","wo":"roztropność"},{"tr":"8","wo":"uprzywilejowanie"},{"tr":"8","wo":"wnikliwość"}],"examples":[{"what":"noun","row":"the unjust or prejudicial treatment of different categories of people or things, especially on the grounds of race, age, or sex.","example":"victims of racial discrimination"}]}',
    ),
    array( // row #447
        'word' => 'thinks', 'pl_PL' => '{"verb":[{"tr":"24","wo":"myśleć"},{"tr":"16","wo":"pomyśleć"},{"tr":"16","wo":"sądzić"},{"tr":"8","wo":"zastanawiać się"},{"tr":"8","wo":"mniemać"},{"tr":"8","wo":"zrozumieć"},{"tr":"8","wo":"wyobrażać sobie"},{"tr":"8","wo":"spodziewać się"},{"tr":"8","wo":"uważać że"},{"tr":"8","wo":"przypominać sobie"},{"tr":"8","wo":"oczekiwać"},{"tr":"8","wo":"oglądać się"}],"examples":[{"what":"verb","row":"have a particular opinion, belief, or idea about someone or something.","example":"she thought that nothing would be the same again"},{"what":"noun","row":"an act of thinking.","example":"I went for a walk to have a think"}]}',
    ),
    array( // row #448
        'word' => 'savings', 'pl_PL' => '{"noun":[{"tr":"24","wo":"oszczędności"}],"examples":[{"what":"noun","row":"twelve o\'clock at night.","example":"I left at midnight"}]}',
    ),
    array( // row #449
        'word' => 'anticipated', 'pl_PL' => '{"verb":[{"tr":"24","wo":"przewidywać"},{"tr":"16","wo":"antycypować"},{"tr":"16","wo":"oczekiwać"},{"tr":"16","wo":"spodziewać się"},{"tr":"8","wo":"cieszyć się"},{"tr":"8","wo":"zgadnąć"},{"tr":"8","wo":"przeczuć coś"}],"examples":[{"what":"verb","row":"regard as probable; expect or predict.","example":"she anticipated scorn on her return to the theater"}]}',
    ),
    array( // row #450
        'word' => 'midnight', 'pl_PL' => '{"noun":[{"tr":"24","wo":"północ"}],"adjective":[{"tr":"16","wo":"północny"}],"examples":[{"what":"noun","row":"twelve o\'clock at night.","example":"I left at midnight"}]}',
    ),
    array( // row #451
        'word' => 'amendment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"poprawka"},{"tr":"16","wo":"nowelizacja"}],"examples":[{"what":"noun","row":"a minor change in a document.","example":"Had he been told about this, he would have made the necessary amendments to the sale documents to reflect that fact."}]}',
    ),
    array( // row #452
        'word' => 'registered', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zarejestrowany"},{"tr":"16","wo":"rejestrowy"},{"tr":"8","wo":"polecony"}],"examples":[{"what":"noun","row":"the action or process of registering or of being registered.","example":"the registration of births, marriages, and deaths"}]}',
    ),
    array( // row #453
        'word' => 'registration', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rejestracja"},{"tr":"8","wo":"rejestrowanie"},{"tr":"8","wo":"zarejestrowanie"},{"tr":"8","wo":"wpis"},{"tr":"8","wo":"zapis"},{"tr":"8","wo":"wpisanie"},{"tr":"8","wo":"spis"},{"tr":"8","wo":"meldunek"},{"tr":"8","wo":"zapisanie się"}],"examples":[{"what":"noun","row":"the action or process of registering or of being registered.","example":"the registration of births, marriages, and deaths"}]}',
    ),
    array( // row #454
        'word' => 'authors', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"autorski"}],"examples":[{"what":"noun","row":"a writer of a book, article, or report.","example":"he is the author of several books on the subject"},{"what":"verb","row":"be the author of (a book or piece of writing).","example":"she has authored several articles on wildlife"}]}',
    ),
    array( // row #455
        'word' => 'diffusion', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dyfuzja"},{"tr":"8","wo":"rozpraszanie"},{"tr":"8","wo":"dyfundowanie"},{"tr":"8","wo":"emanowanie"},{"tr":"8","wo":"przenikanie"},{"tr":"8","wo":"przenoszenie"},{"tr":"8","wo":"rozchodzenie się"},{"tr":"8","wo":"szerzenie"},{"tr":"8","wo":"wydzielenie"}],"examples":[{"what":"noun","row":"the spreading of something more widely.","example":"the diffusion of Duchampâs thought and art"}]}',
    ),
    array( // row #456
        'word' => 'sitter', 'pl_PL' => '{"noun":[{"tr":"16","wo":"kwoka"},{"tr":"16","wo":"modelka"},{"tr":"8","wo":"siedzący"},{"tr":"8","wo":"model"},{"tr":"8","wo":"łatwizna"}],"examples":[{"what":"noun","row":"a person who sits, especially for a portrait.","example":"Rembrandt\'s portraits of individual sitters are similarly energetic, emphasizing faces, hands, and dynamic silhouettes at the expense of costumes and settings."}]}',
    ),
    array( // row #457
        'word' => 'norms', 'pl_PL' => '{"noun":[{"tr":"24","wo":"norma"},{"tr":"16","wo":"standard"},{"tr":"8","wo":"wzorzec"},{"tr":"8","wo":"normatyw"}],"examples":[{"what":"noun","row":"something that is usual, typical, or standard.","example":"this system has been the norm in Germany for decades"}]}',
    ),
    array( // row #458
        'word' => 'tubes', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rura"},{"tr":"24","wo":"rurka"},{"tr":"16","wo":"przewód"},{"tr":"16","wo":"tubka"},{"tr":"16","wo":"tuba"},{"tr":"16","wo":"wąż"},{"tr":"8","wo":"dętka"},{"tr":"8","wo":"tubus"},{"tr":"8","wo":"metro"},{"tr":"8","wo":"kanał"},{"tr":"8","wo":"kineskop"},{"tr":"8","wo":"sonda"}],"examples":[{"what":"noun","row":"a long, hollow cylinder of metal, plastic, glass, etc., for holding or transporting something, chiefly liquids or gases.","example":"A straw itself will not hold up well to this experiment, so see if you can get a tube of glass or plastic."},{"what":"verb","row":"provide with a tube or tubes.","example":"a giant eight-tubed hookah"}]}',
    ),
    array( // row #459
        'word' => 'peas', 'pl_PL' => '{"noun":[{"tr":"24","wo":"groch"}],"examples":[{"what":"noun","row":"a spherical green seed that is widely eaten as a vegetable.","example":"Crops of good home-grown vegetables - fresh green peas , broad beans and courgettes - are plentiful at this time of year."}]}',
    ),
    array( // row #460
        'word' => 'mathematical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"matematyczny"},{"tr":"8","wo":"rachunkowy"}],"examples":[{"what":"adjective","row":"of or relating to mathematics.","example":"mathematical equations"}]}',
    ),
    array( // row #461
        'word' => 'categories', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kategoria"},{"tr":"8","wo":"klasa"},{"tr":"8","wo":"rząd"}],"examples":[{"what":"noun","row":"a class or division of people or things regarded as having particular shared characteristics.","example":"five categories of intelligence"}]}',
    ),
    array( // row #462
        'word' => 'narrative', 'pl_PL' => '{"noun":[{"tr":"24","wo":"narracja"},{"tr":"16","wo":"opowiadanie"}],"adjective":[{"tr":"24","wo":"narracyjny"},{"tr":"16","wo":"narratorski"},{"tr":"8","wo":"gawędziarski"}],"examples":[{"what":"adjective","row":"in the form of or concerned with narration.","example":"a narrative poem"},{"what":"noun","row":"a spoken or written account of connected events; a story.","example":"the hero of his modest narrative"}]}',
    ),
    array( // row #463
        'word' => 'accurately', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"dokładnie"},{"tr":"16","wo":"trafnie"},{"tr":"8","wo":"akuratnie"},{"tr":"8","wo":"celnie"}],"examples":[{"what":"adjective","row":"easily agitated or alarmed; tending to be anxious; highly strung.","example":"a sensitive, nervous person"}]}',
    ),
    array( // row #464
        'word' => 'wishes', 'pl_PL' => '{"noun":[{"tr":"24","wo":"życzenie"},{"tr":"24","wo":"chęć"},{"tr":"24","wo":"pragnienie"},{"tr":"8","wo":"powinszowanie"}],"verb":[{"tr":"16","wo":"życzyć"},{"tr":"16","wo":"chcieć"},{"tr":"8","wo":"pragnąć"},{"tr":"8","wo":"życzyć sobie"},{"tr":"8","wo":"zapragnąć"},{"tr":"8","wo":"zachcieć"}],"examples":[{"what":"noun","row":"a desire or hope for something to happen.","example":"the union has reiterated its wish for an agreement"},{"what":"verb","row":"feel or express a strong desire or hope for something that is not easily attainable; want something that cannot or probably will not happen.","example":"we wished for peace"}]}',
    ),
    array( // row #465
        'word' => 'desires', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pragnienie"},{"tr":"24","wo":"chęć"},{"tr":"24","wo":"pożądanie"},{"tr":"16","wo":"życzenie"},{"tr":"8","wo":"ochota"}],"verb":[{"tr":"16","wo":"pragnąć"},{"tr":"8","wo":"życzyć sobie"},{"tr":"8","wo":"pożądać"}],"examples":[{"what":"noun","row":"a strong feeling of wanting to have something or wishing for something to happen.","example":"a desire to work in the dirt with your bare hands"},{"what":"verb","row":"strongly wish for or want (something).","example":"he never achieved the status he so desired"}]}',
    ),
    array( // row #466
        'word' => 'interpreted', 'pl_PL' => '{"verb":[{"tr":"24","wo":"interpretować"},{"tr":"24","wo":"zinterpretować"},{"tr":"16","wo":"tłumaczyć"},{"tr":"16","wo":"odczytać"},{"tr":"16","wo":"rozumieć"},{"tr":"8","wo":"objaśniać"}],"examples":[{"what":"verb","row":"explain the meaning of (information, words, or actions).","example":"the evidence is difficult to interpret"}]}',
    ),
    array( // row #467
        'word' => 'nervous', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"nerwowy"},{"tr":"24","wo":"zdenerwowany"},{"tr":"8","wo":"mocny"}],"examples":[{"what":"adjective","row":"easily agitated or alarmed; tending to be anxious; highly strung.","example":"a sensitive, nervous person"}]}',
    ),
    array( // row #468
        'word' => 'meaningful', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"znaczący"},{"tr":"8","wo":"wymowny"},{"tr":"8","wo":"wyrazisty"}],"examples":[{"what":"adjective","row":"having meaning.","example":"meaningful elements in a language"}]}',
    ),
    array( // row #469
        'word' => 'Utopia', 'pl_PL' => '{"noun":[{"tr":"24","wo":"utopia"}],"examples":[{"what":"noun","row":"the attitude or practice of accepting a situation as it is and being prepared to deal with it accordingly.","example":"the summit was marked by a new mood of realism"}]}',
    ),
    array( // row #470
        'word' => 'realism', 'pl_PL' => '{"noun":[{"tr":"24","wo":"realizm"}],"examples":[{"what":"noun","row":"the attitude or practice of accepting a situation as it is and being prepared to deal with it accordingly.","example":"the summit was marked by a new mood of realism"}]}',
    ),
    array( // row #471
        'word' => 'WHISKY', 'pl_PL' => '{"noun":[{"tr":"24","wo":"whisky"},{"tr":"8","wo":"powozik dwukołowy"}],"examples":[{"what":"noun","row":"a spirit distilled from malted grain, especially barley or rye.","example":"When they returned home they took bottles of whisky and vodka back with them and another row ensued."}]}',
    ),
    array( // row #472
        'word' => 'wholly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"całkowicie"},{"tr":"16","wo":"zupełnie"},{"tr":"8","wo":"kompletnie"},{"tr":"8","wo":"integralnie"}],"examples":[{"what":"adverb","row":"entirely; fully.","example":"she found herself given over wholly to sensation"}]}',
    ),
    array( // row #473
        'word' => 'illustration', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ilustracja"},{"tr":"16","wo":"rysunek"},{"tr":"8","wo":"obrazowanie"},{"tr":"8","wo":"rycina"}],"examples":[{"what":"noun","row":"a picture illustrating a book, newspaper, etc..","example":"an illustration of a yacht"}]}',
    ),
    array( // row #474
        'word' => 'scarcely', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"ledwie"},{"tr":"8","wo":"zaledwie"},{"tr":"8","wo":"dopiero"}],"examples":[{"what":"adverb","row":"only just; almost not.","example":"her voice is so low I can scarcely hear what she is saying"}]}',
    ),
    array( // row #475
        'word' => 'declaration', 'pl_PL' => '{"noun":[{"tr":"24","wo":"deklaracja"},{"tr":"16","wo":"ogłoszenie"},{"tr":"8","wo":"deklarowanie"},{"tr":"8","wo":"wypowiedzenie"},{"tr":"8","wo":"zapowiedź"},{"tr":"8","wo":"wypowiedź"}],"examples":[{"what":"noun","row":"a formal or explicit statement or announcement.","example":"they issued a declaration at the close of the talks"}]}',
    ),
    array( // row #476
        'word' => 'specimen', 'pl_PL' => '{"noun":[{"tr":"24","wo":"okaz"},{"tr":"24","wo":"preparat"},{"tr":"24","wo":"próbka"},{"tr":"16","wo":"egzemplarz"},{"tr":"16","wo":"osobnik"},{"tr":"8","wo":"odmiana"}],"examples":[{"what":"noun","row":"an individual animal, plant, piece of a mineral, etc., used as an example of its species or type for scientific study or display.","example":"Another corner of the display showed zoological specimens , minerals and ores, and surgical instruments."}]}',
    ),
    array( // row #477
        'word' => 'aimed', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zmierzać"},{"tr":"16","wo":"wycelować"},{"tr":"8","wo":"nakierować"},{"tr":"8","wo":"adresować"},{"tr":"8","wo":"celować do kogoś"},{"tr":"8","wo":"rzucać"},{"tr":"8","wo":"plasować"},{"tr":"8","wo":"dążyć do czegoś"},{"tr":"8","wo":"kroić"},{"tr":"8","wo":"godzić"}],"examples":[{"what":"verb","row":"point or direct (a weapon or camera) at a target.","example":"aim the camcorder at some suitable object"}]}',
    ),
    array( // row #478
        'word' => 'tended', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zmierzać"},{"tr":"8","wo":"pielęgnować"},{"tr":"8","wo":"paść"},{"tr":"8","wo":"mieć skłonność"},{"tr":"8","wo":"opiekować się"},{"tr":"8","wo":"kroić"}],"examples":[{"what":"verb","row":"regularly or frequently behave in a particular way or have a certain characteristic.","example":"written language tends to be formal"}]}',
    ),
    array( // row #479
        'word' => 'nearest', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"najbliższy"}],"examples":[{"what":"adjective","row":"located a short distance away.","example":"a big house in the near distance"}]}',
    ),
    array( // row #480
        'word' => 'exclusively', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"wyłącznie"},{"tr":"8","wo":"czysto"}],"examples":[{"what":"adverb","row":"to the exclusion of others; only; solely.","example":"paints produced exclusively for independent retailers"}]}',
    ),
    array( // row #481
        'word' => 'functional', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"funkcjonalny"},{"tr":"16","wo":"funkcyjny"},{"tr":"16","wo":"czynnościowy"}],"examples":[{"what":"adjective","row":"of or having a special activity, purpose, or task; relating to the way in which something works or operates.","example":"there are important functional differences between left and right brain"}]}',
    ),
    array( // row #482
        'word' => 'assembled', 'pl_PL' => '{"verb":[{"tr":"16","wo":"gromadzić"},{"tr":"16","wo":"montować"},{"tr":"16","wo":"zbierać"},{"tr":"16","wo":"składać"},{"tr":"8","wo":"grupować"}],"examples":[{"what":"verb","row":"(of people) gather together in one place for a common purpose.","example":"a crowd had assembled outside the gates"}]}',
    ),
    array( // row #483
        'word' => 'charming', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"uroczy"},{"tr":"16","wo":"czarujący"},{"tr":"8","wo":"urzekający"},{"tr":"8","wo":"powabny"},{"tr":"8","wo":"wdzięczny"},{"tr":"8","wo":"przemiły"}],"examples":[{"what":"adjective","row":"pleasant or attractive.","example":"a charming country cottage"},{"what":"verb","row":"delight greatly.","example":"the books have charmed children the world over"}]}',
    ),
    array( // row #484
        'word' => 'weekly', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"tygodniowy"},{"tr":"16","wo":"cotygodniowy"},{"tr":"8","wo":"całotygodniowy"}],"adverb":[{"tr":"24","wo":"tygodniowo"},{"tr":"16","wo":"cotygodniowo"}],"noun":[{"tr":"24","wo":"tygodnik"}],"examples":[{"what":"adjective","row":"done, produced, or occurring once a week.","example":"there was a weekly dance on Wednesdays"},{"what":"adverb","row":"once a week.","example":"interviews were given weekly"},{"what":"noun","row":"a newspaper or periodical issued every week.","example":"Journalists from dailies averaged 5.5, and journalists from weeklies averaged 5.4."}]}',
    ),
    array( // row #485
        'word' => 'consisted', 'pl_PL' => '{"verb":[{"tr":"24","wo":"składać się"},{"tr":"16","wo":"polegać"},{"tr":"8","wo":"zgodzić się"}],"examples":[{"what":"verb","row":"be composed or made up of.","example":"the exhibition consists of 180 drawings"}]}',
    ),
    array( // row #486
        'word' => 'phases', 'pl_PL' => '{"noun":[{"tr":"24","wo":"faza"},{"tr":"8","wo":"okres"},{"tr":"8","wo":"stadium"}],"examples":[{"what":"noun","row":"a distinct period or stage in a process of change or forming part of something\'s development.","example":"the final phases of the war"},{"what":"verb","row":"carry out (something) in gradual stages.","example":"the work is being phased over a number of years"}]}',
    ),
    array( // row #487
        'word' => 'depression', 'pl_PL' => '{"noun":[{"tr":"24","wo":"depresja"},{"tr":"8","wo":"zapadłość"},{"tr":"8","wo":"przygnębienie"},{"tr":"8","wo":"osowiałość"},{"tr":"8","wo":"osowienie"},{"tr":"8","wo":"zastój"},{"tr":"8","wo":"stagnacja"},{"tr":"8","wo":"kryzys"},{"tr":"8","wo":"spadek"},{"tr":"8","wo":"zapadlisko"},{"tr":"8","wo":"dół"},{"tr":"8","wo":"zapadlina"}],"examples":[{"what":"noun","row":"severe despondency and dejection, typically felt over a period of time and accompanied by feelings of hopelessness and inadequacy.","example":"Antipyschotics may also be used to treat severe cases of depression accompanied by psychosis."}]}',
    ),
    array( // row #488
        'word' => 'roughly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"w przybliżeniu"},{"tr":"16","wo":"zgrubnie"},{"tr":"16","wo":"chropawo"},{"tr":"8","wo":"szorstko"},{"tr":"8","wo":"po dragońsku"},{"tr":"8","wo":"chropowato"},{"tr":"8","wo":"niegładko"},{"tr":"8","wo":"brutalnie"},{"tr":"8","wo":"grubiańsko"},{"tr":"8","wo":"grubo"},{"tr":"8","wo":"kostycznie"},{"tr":"8","wo":"ordynarnie"},{"tr":"8","wo":"prymitywnie"}],"examples":[{"what":"adverb","row":"in a manner lacking gentleness; harshly or violently.","example":"the man picked me up roughly"}]}',
    ),
    array( // row #489
        'word' => 'factories', 'pl_PL' => '{"noun":[{"tr":"24","wo":"fabryka"},{"tr":"8","wo":"fabryczka"}],"examples":[{"what":"noun","row":"a building or group of buildings where goods are manufactured or assembled chiefly by machine.","example":"Employers must put in place proper controls to protect workers from hazards in factories , on building sites and on farms."}]}',
    ),
    array( // row #490
        'word' => 'Seventeen', 'pl_PL' => '{"aaaaaa":[{"tr":"24","wo":"siedemnaście"}],"noun":[{"tr":"8","wo":"siedemnastka"}],"examples":[{"what":"","row":"one more than sixteen, or seven more than ten; 17.","example":"seventeen years later"}]}',
    ),
    array( // row #491
        'word' => 'expressing', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"wyrażający"}],"examples":[{"what":"noun","row":"an act, statement, or gift that is intended to show gratitude, respect, or admiration.","example":"the video is a tribute to the musicals of the \'40s"}]}',
    ),
    array( // row #492
        'word' => 'tribute', 'pl_PL' => '{"noun":[{"tr":"24","wo":"hołd"},{"tr":"24","wo":"uznanie"},{"tr":"16","wo":"danina"},{"tr":"8","wo":"dań"},{"tr":"8","wo":"haracz"},{"tr":"8","wo":"trybut"}],"examples":[{"what":"noun","row":"an act, statement, or gift that is intended to show gratitude, respect, or admiration.","example":"the video is a tribute to the musicals of the \'40s"}]}',
    ),
    array( // row #493
        'word' => 'seized', 'pl_PL' => '{"verb":[{"tr":"16","wo":"chwycić"},{"tr":"16","wo":"zawładnąć"},{"tr":"8","wo":"łapać"},{"tr":"8","wo":"pojąć"},{"tr":"8","wo":"dopaść"},{"tr":"8","wo":"konfiskować"},{"tr":"8","wo":"dorwać"},{"tr":"8","wo":"ulec"},{"tr":"8","wo":"unieść"},{"tr":"8","wo":"aresztować"},{"tr":"8","wo":"zamocować"},{"tr":"8","wo":"zdejmować"},{"tr":"8","wo":"zacierać się"},{"tr":"8","wo":"zaciąć się"},{"tr":"8","wo":"zablokować się"},{"tr":"8","wo":"chwycić się czegoś"}],"examples":[{"what":"verb","row":"take hold of suddenly and forcibly.","example":"she jumped up and seized his arm"}]}',
    ),
    array( // row #494
        'word' => 'firing', 'pl_PL' => '{"noun":[{"tr":"16","wo":"ostrzał"},{"tr":"16","wo":"strzelanina"},{"tr":"8","wo":"zwolnienie z pracy"}],"examples":[{"what":"noun","row":"the action of setting fire to something.","example":"the deliberate firing of 600 oil wells"},{"what":"verb","row":"discharge a gun or other weapon in order to explosively propel (a bullet or projectile).","example":"he fired a shot at the retreating prisoners"}]}',
    ),
    array( // row #495
        'word' => 'Heating', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ogrzewanie"},{"tr":"8","wo":"palenie"}],"adjective":[{"tr":"24","wo":"grzewczy"},{"tr":"16","wo":"grzejny"},{"tr":"8","wo":"ogrzewczy"},{"tr":"8","wo":"ogrzewniczy"},{"tr":"8","wo":"ogrzewalny"}],"examples":[{"what":"noun","row":"equipment or devices used to provide heat, especially to a building.","example":"baseboard heating"},{"what":"verb","row":"make or become hot or warm.","example":"the room faces north and is difficult to heat"}]}',
    ),
    array( // row #496
        'word' => 'manufacturing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"produkcja"},{"tr":"8","wo":"przetwórnictwo"},{"tr":"8","wo":"przetwórstwo"},{"tr":"8","wo":"fabrykacja"}],"adjective":[{"tr":"8","wo":"fabryczny"},{"tr":"8","wo":"przemysłowy"}],"examples":[{"what":"noun","row":"a roadside hotel designed primarily for motorists, typically having the rooms arranged in a low building with parking directly outside.","example":"Hotels, motels and entertainment theme parks have a unique security problem."}]}',
    ),
    array( // row #497
        'word' => 'seated', 'pl_PL' => '{"verb":[{"tr":"16","wo":"posadzić"},{"tr":"8","wo":"sadzać"},{"tr":"8","wo":"rozsadzać"},{"tr":"8","wo":"usadzać"},{"tr":"8","wo":"rozsadowić"},{"tr":"8","wo":"sadowić"},{"tr":"8","wo":"usadowić"},{"tr":"8","wo":"rozmieścić"},{"tr":"8","wo":"osadzać"}],"examples":[{"what":"verb","row":"arrange for (someone) to sit somewhere.","example":"he seated her next to her husband"}]}',
    ),
    array( // row #498
        'word' => 'Motel', 'pl_PL' => '{"noun":[{"tr":"24","wo":"motel"}],"examples":[{"what":"noun","row":"a roadside hotel designed primarily for motorists, typically having the rooms arranged in a low building with parking directly outside.","example":"Hotels, motels and entertainment theme parks have a unique security problem."}]}',
    ),
    array( // row #499
        'word' => 'civilian', 'pl_PL' => '{"noun":[{"tr":"24","wo":"cywil"},{"tr":"8","wo":"obywatel"}],"adjective":[{"tr":"24","wo":"cywilny"},{"tr":"8","wo":"niewojskowy"}],"examples":[{"what":"adjective","row":"of, denoting, or relating to a person not belonging to the armed services or police.","example":"military agents in civilian clothes"},{"what":"noun","row":"a person not in the armed services or the police force.","example":"Eight more police and two civilians died when their vehicles ran over mines."}]}',
    ),
    array( // row #500
        'word' => 'Mason', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mason"},{"tr":"24","wo":"murarz"},{"tr":"16","wo":"kamieniarz"}],"verb":[{"tr":"8","wo":"budować z kamienia"},{"tr":"8","wo":"murować"}],"examples":[{"what":"noun","row":"a builder and worker in stone.","example":"And her father, a retired stone mason , showed her how to carve up the hill into level, plantable tiers."},{"what":"verb","row":"build from or strengthen with stone.","example":"The derelict planks of the entrance creak and whine open; a gust of incensed wind trespasses our slice of heaven for a second, and then someone standing at the foot of the masoned steps points up into the shaft: âAhi, Tonin\'s come!â"}]}',
    ),
    array( // row #501
        'word' => 'Ford', 'pl_PL' => '{"noun":[{"tr":"24","wo":"bród"},{"tr":"8","wo":"przeprawa"}],"verb":[{"tr":"8","wo":"przeprawiać się przez rzekę"}],"examples":[{"what":"noun","row":"a shallow place in a river or stream allowing one to walk or drive across.","example":"You used to be able to drive across the ford at Watersplash Lane, but it had to be blocked off because cars kept getting stuck halfway across, and we had to get tractors out to pull them clear."},{"what":"verb","row":"(of a person or vehicle) cross (a river or stream) at a shallow place.","example":"I had a happy childhood in the classic English bourgeois fashion: I read voraciously, I explored expansive gardens, I dare say I even forded a stream or two."}]}',
    ),
    array( // row #502
        'word' => 'reaches', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zasięg"}],"verb":[{"tr":"24","wo":"dotrzeć"},{"tr":"16","wo":"dostać"},{"tr":"16","wo":"osiągać"},{"tr":"16","wo":"dosięgnąć"},{"tr":"16","wo":"docierać"},{"tr":"8","wo":"dobiec"},{"tr":"8","wo":"dosięgać"},{"tr":"8","wo":"dochodzić"},{"tr":"8","wo":"skontaktować się z"},{"tr":"8","wo":"dopłynąć"},{"tr":"8","wo":"dopaść"}],"examples":[{"what":"noun","row":"an act of reaching out with one\'s arm.","example":"she made a reach for him"},{"what":"verb","row":"stretch out an arm in a specified direction in order to touch or grasp something.","example":"he reached over and turned off his bedside light"}]}',
    ),
    array( // row #503
        'word' => 'chances', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szansa"},{"tr":"24","wo":"przypadek"},{"tr":"24","wo":"możliwość"},{"tr":"16","wo":"okazja"},{"tr":"16","wo":"ryzyko"},{"tr":"8","wo":"traf"},{"tr":"8","wo":"sposobność"},{"tr":"8","wo":"los"},{"tr":"8","wo":"możność"},{"tr":"8","wo":"hazard"}],"verb":[{"tr":"8","wo":"ryzykować"},{"tr":"8","wo":"natknąć się"},{"tr":"8","wo":"wydarzać się"}],"examples":[{"what":"noun","row":"a possibility of something happening.","example":"a chance of victory"},{"what":"verb","row":"do something by accident or without design.","example":"if they chanced to meet"}]}',
    ),
    array( // row #504
        'word' => 'Academy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"akademia"},{"tr":"16","wo":"uczelnia"},{"tr":"8","wo":"wyższa uczelnia"},{"tr":"8","wo":"pensjonat"}],"examples":[{"what":"noun","row":"a place of study or training in a special field.","example":"a police academy"}]}',
    ),
    array( // row #505
        'word' => 'promising', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"obiecujący"}],"examples":[{"what":"adjective","row":"showing signs of future success.","example":"a promising actor"},{"what":"verb","row":"assure someone that one will definitely do, give, or arrange something; undertake or declare that something will happen.","example":"he promised to forward my mail"}]}',
    ),
    array( // row #506
        'word' => 'coach', 'pl_PL' => '{"noun":[{"tr":"24","wo":"trener"},{"tr":"24","wo":"autokar"},{"tr":"16","wo":"powóz"},{"tr":"8","wo":"dyliżans"},{"tr":"8","wo":"autobus"},{"tr":"8","wo":"wagon"},{"tr":"8","wo":"korepetytor"}],"verb":[{"tr":"24","wo":"trenować"},{"tr":"8","wo":"douczać"},{"tr":"8","wo":"jechać powozem"}],"examples":[{"what":"noun","row":"a horse-drawn carriage, especially a closed one.","example":"It was a wonderful sight to see because many of the guests arrived in horse-drawn coaches and carriages."},{"what":"verb","row":"travel by coach.","example":"they coached to Claude\'s dwelling"},{"what":"adverb","row":"in economy class accommodations in an aircraft or train.","example":"flying coach"}]}',
    ),
    array( // row #507
        'word' => 'relieved', 'pl_PL' => '{"verb":[{"tr":"16","wo":"odciążyć"},{"tr":"16","wo":"ulżyć"},{"tr":"8","wo":"uśmierzać"},{"tr":"8","wo":"zluzować"},{"tr":"8","wo":"zmniejszać"},{"tr":"8","wo":"uwalniać"},{"tr":"8","wo":"wyręczać"},{"tr":"8","wo":"folgować"},{"tr":"8","wo":"urozmaicać"}],"examples":[{"what":"adjective","row":"no longer feeling distressed or anxious; reassured.","example":"relieved parents who had waited anxiously for news"},{"what":"verb","row":"cause (pain, distress, or difficulty) to become less severe or serious.","example":"the drug was used to promote sleep and to relieve pain"}]}',
    ),
    array( // row #508
        'word' => 'workshop', 'pl_PL' => '{"noun":[{"tr":"24","wo":"warsztat"},{"tr":"24","wo":"pracownia"},{"tr":"8","wo":"manufaktura"},{"tr":"8","wo":"interes"}],"adjective":[{"tr":"16","wo":"warsztatowy"}],"examples":[{"what":"noun","row":"a room or building in which goods are manufactured or repaired.","example":"Giant disused workshops and factory buildings would be flattened to make way for new homes and business properties."},{"what":"verb","row":"present a performance of (a dramatic work), using intensive group discussion and improvisation in order to explore aspects of the production before formal staging.","example":"the play was workshopped briefly at the Shaw Festival"}]}',
    ),
    array( // row #509
        'word' => 'biggest', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"duży"},{"tr":"24","wo":"wielki"},{"tr":"16","wo":"cielna"},{"tr":"8","wo":"ważny"},{"tr":"8","wo":"znaczny"},{"tr":"8","wo":"gruby"},{"tr":"8","wo":"brzemienna"},{"tr":"8","wo":"kotna"},{"tr":"8","wo":"źrebna"},{"tr":"8","wo":"szczenna"}],"examples":[{"what":"adjective","row":"of considerable size, extent, or intensity.","example":"big hazel eyes"}]}',
    ),
    array( // row #510
        'word' => 'estimates', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ocena"},{"tr":"24","wo":"oszacowanie"},{"tr":"16","wo":"kosztorys"},{"tr":"8","wo":"obliczanie"}],"verb":[{"tr":"24","wo":"oszacować"},{"tr":"16","wo":"szacować"},{"tr":"8","wo":"oceniać"},{"tr":"8","wo":"wartościować"},{"tr":"8","wo":"kwalifikować"},{"tr":"8","wo":"liczyć"},{"tr":"8","wo":"mierzyć"},{"tr":"8","wo":"oznaczać"}],"examples":[{"what":"noun","row":"an approximate calculation or judgment of the value, number, quantity, or extent of something.","example":"at a rough estimate, our staff is recycling a quarter of the paper used"},{"what":"verb","row":"roughly calculate or judge the value, number, quantity, or extent of.","example":"the aim is to estimate the effects of macroeconomic policy on the economy"}]}',
    ),
    array( // row #511
        'word' => 'honored', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zaszczycony"}],"examples":[{"what":"verb","row":"regard with great respect.","example":"Joyce has now learned to honor her father\'s memory"}]}',
    ),
    array( // row #512
        'word' => 'announcement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ogłoszenie"},{"tr":"24","wo":"obwieszczenie"},{"tr":"16","wo":"zapowiedź"},{"tr":"16","wo":"zawiadomienie"},{"tr":"8","wo":"oznajmienie"},{"tr":"8","wo":"meldunek"}],"examples":[{"what":"noun","row":"a public and typically formal statement about a fact, occurrence, or intention.","example":"the spokesperson was about to make an announcement"}]}',
    ),
    array( // row #513
        'word' => 'managers', 'pl_PL' => '{"noun":[{"tr":"24","wo":"menedżer"},{"tr":"24","wo":"kierownik"},{"tr":"16","wo":"dyrektor"},{"tr":"16","wo":"zarządca"},{"tr":"8","wo":"administrator"},{"tr":"8","wo":"naczelnik"},{"tr":"8","wo":"gospodarz"},{"tr":"8","wo":"menażer"},{"tr":"8","wo":"pryncypał"}],"examples":[{"what":"noun","row":"a person responsible for controlling or administering all or part of a company or similar organization.","example":"the manager of a bar"}]}',
    ),
    array( // row #514
        'word' => 'Clubs', 'pl_PL' => '{"noun":[{"tr":"24","wo":"klub"},{"tr":"16","wo":"maczuga"},{"tr":"8","wo":"trefl"},{"tr":"8","wo":"stowarzyszenie"},{"tr":"8","wo":"buława"},{"tr":"8","wo":"kij do golfa"}],"verb":[{"tr":"8","wo":"zdzielić"},{"tr":"8","wo":"stowarzyszać się"},{"tr":"8","wo":"zespalać swe siły"}],"examples":[{"what":"noun","row":"an association or organization dedicated to a particular interest or activity.","example":"a photography club"},{"what":"verb","row":"go out to nightclubs.","example":"she enjoys going clubbing in Orlando"}]}',
    ),
    array( // row #515
        'word' => 'draft', 'pl_PL' => '{"noun":[{"tr":"24","wo":"projekt"},{"tr":"16","wo":"szkic"},{"tr":"16","wo":"ciąg"},{"tr":"8","wo":"przeciąg"},{"tr":"8","wo":"zarys"},{"tr":"8","wo":"plan"},{"tr":"8","wo":"wyciąg"},{"tr":"8","wo":"przekaz"},{"tr":"8","wo":"konspekt"},{"tr":"8","wo":"trata"},{"tr":"8","wo":"schemat"},{"tr":"8","wo":"weksel"}],"examples":[{"what":"noun","row":"a preliminary version of a piece of writing.","example":"the first draft of the party\'s manifesto"},{"what":"verb","row":"prepare a preliminary version of (a text).","example":"I drafted a letter of resignation"},{"what":"adjective","row":"denoting beer or other drink that is kept in and served from a barrel or tank rather than from a bottle or can.","example":"draft beer"}]}',
    ),
    array( // row #516
        'word' => 'cited', 'pl_PL' => '{"verb":[{"tr":"24","wo":"cytować"},{"tr":"16","wo":"zacytować"},{"tr":"8","wo":"wezwać"},{"tr":"8","wo":"udzielać pochwały"}],"examples":[{"what":"verb","row":"quote (a passage, book, or author) as evidence for or justification of an argument or statement, especially in a scholarly work.","example":"In scholarly literature, the number of times a journal article or a book is cited by other authors is regarded as an indicator of the relative influence or importance of the item."}]}',
    ),
    array( // row #517
        'word' => 'undoubtedly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"niewątpliwie"},{"tr":"16","wo":"zapewne"},{"tr":"8","wo":"pewnie"}],"examples":[{"what":"adverb","row":"without doubt; certainly.","example":"they are undoubtedly guilty"}]}',
    ),
    array( // row #518
        'word' => 'Advisory', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"doradczy"},{"tr":"8","wo":"konsultacyjny"},{"tr":"8","wo":"opiniodawczy"}],"examples":[{"what":"adjective","row":"having or consisting in the power to make recommendations but not to take action enforcing them.","example":"an independent advisory committee"},{"what":"noun","row":"an official announcement, typically a warning about bad weather conditions.","example":"a frost advisory"}]}',
    ),
    array( // row #519
        'word' => 'neighboring', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"sąsiedni"},{"tr":"8","wo":"ościenny"},{"tr":"8","wo":"pobliski"},{"tr":"8","wo":"pograniczny"},{"tr":"8","wo":"postronny"}],"examples":[{"what":"adjective","row":"next to or very near another place; adjacent.","example":"a couple at a neighboring table"}]}',
    ),
    array( // row #520
        'word' => 'realization', 'pl_PL' => '{"noun":[{"tr":"24","wo":"realizacja"},{"tr":"16","wo":"wykonanie"},{"tr":"16","wo":"urzeczywistnienie"},{"tr":"16","wo":"świadomość"},{"tr":"8","wo":"realizowanie"},{"tr":"8","wo":"zrealizowanie"},{"tr":"8","wo":"konkretyzacja"},{"tr":"8","wo":"spostrzeżenie"},{"tr":"8","wo":"uprzytomnienie"},{"tr":"8","wo":"uświadomienie sobie"},{"tr":"8","wo":"ziszczenie"},{"tr":"8","wo":"spieniężenie"},{"tr":"8","wo":"upłynnienie"}],"examples":[{"what":"noun","row":"an act of becoming fully aware of something as a fact.","example":"there was a growing realization of the need to create common economic structures"}]}',
    ),
    array( // row #521
        'word' => 'qualified', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wykwalifikowany"},{"tr":"8","wo":"dyplomowany"},{"tr":"8","wo":"kompetentny"},{"tr":"8","wo":"upoważniony"},{"tr":"8","wo":"uwarunkowany"},{"tr":"8","wo":"zawierający zastrzeżenie"}],"examples":[{"what":"adjective","row":"officially recognized as being trained to perform a particular job; certified.","example":"newly qualified nurses"}]}',
    ),
    array( // row #522
        'word' => 'ruling', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rządzący"},{"tr":"8","wo":"orzeczenie sądu"},{"tr":"8","wo":"decyzja"},{"tr":"8","wo":"liniatura"}],"examples":[{"what":"adjective","row":"currently exercising authority or influence.","example":"the ruling coalition"},{"what":"noun","row":"an authoritative decision or pronouncement, especially one made by a judge.","example":"He said assets would be confiscated after two court rulings on the decision."}]}',
    ),
    array( // row #523
        'word' => 'recommendation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zalecenie"},{"tr":"24","wo":"rekomendacja"},{"tr":"8","wo":"polecenie"},{"tr":"8","wo":"zarekomendowanie"}],"examples":[{"what":"noun","row":"a suggestion or proposal as to the best course of action, especially one put forward by an authoritative body.","example":"the committee put forward forty recommendations for change"}]}',
    ),
    array( // row #524
        'word' => 'subjected', 'pl_PL' => '{"verb":[{"tr":"24","wo":"poddać"},{"tr":"16","wo":"podporządkować"},{"tr":"8","wo":"hołdować"}],"examples":[{"what":"verb","row":"cause or force to undergo (a particular experience of form of treatment).","example":"he\'d subjected her to a terrifying ordeal"}]}',
    ),
    array( // row #525
        'word' => 'contracts', 'pl_PL' => '{"noun":[{"tr":"24","wo":"umowa"},{"tr":"24","wo":"kontrakt"},{"tr":"8","wo":"abonament"},{"tr":"8","wo":"obowiązek"},{"tr":"8","wo":"zakontraktowana dostawa"},{"tr":"8","wo":"obietnica ślubu"},{"tr":"8","wo":"akord"}],"verb":[{"tr":"16","wo":"kurczyć"},{"tr":"8","wo":"zaciągać"},{"tr":"8","wo":"kontraktować"},{"tr":"8","wo":"ściskać się"},{"tr":"8","wo":"nabawić się"}],"examples":[{"what":"noun","row":"a written or spoken agreement, especially one concerning employment, sales, or tenancy, that is intended to be enforceable by law.","example":"both parties must sign employment contracts"},{"what":"verb","row":"decrease in size, number, or range.","example":"glass contracts as it cools"}]}',
    ),
    array( // row #526
        'word' => 'enthusiastic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"entuzjastyczny"},{"tr":"8","wo":"zapalony"},{"tr":"8","wo":"owacyjny"}],"examples":[{"what":"adjective","row":"having or showing intense and eager enjoyment, interest, or approval.","example":"the promoter was enthusiastic about the concert venue"}]}',
    ),
    array( // row #527
        'word' => 'occupation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zawód"},{"tr":"24","wo":"okupacja"},{"tr":"16","wo":"zajęcie"},{"tr":"8","wo":"zatrudnienie"},{"tr":"8","wo":"fach"},{"tr":"8","wo":"profesja"},{"tr":"8","wo":"praca"},{"tr":"8","wo":"stan"},{"tr":"8","wo":"posiadanie"}],"examples":[{"what":"noun","row":"a job or profession.","example":"his prime occupation was as editor"}]}',
    ),
    array( // row #528
        'word' => 'January', 'pl_PL' => '{"noun":[{"tr":"24","wo":"styczeń"}],"examples":[{"what":"noun","row":"the first month of the year, in the northern hemisphere usually considered the second month of winter.","example":"Sophie was two in January"}]}',
    ),
    array( // row #529
        'word' => 'Barton', 'pl_PL' => '{"noun":[{"tr":"24","wo":"siedziba"},{"tr":"16","wo":"podwórze gospodarskie"}],"examples":[{"what":"noun","row":"a stupid person.","example":"what sort of alec do you take me for?"}]}',
    ),
    array( // row #530
        'word' => 'regiment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pułk"},{"tr":"16","wo":"legia"},{"tr":"8","wo":"rząd"},{"tr":"8","wo":"zastępy"}],"verb":[{"tr":"8","wo":"organizować"},{"tr":"8","wo":"poddać dyscyplinie"}],"examples":[{"what":"noun","row":"a permanent unit of an army typically commanded by a colonel and divided into several companies, squadrons, or batteries and often into two battalions.","example":"two or three miles inland a highly experienced artillery regiment had established a defensive position"},{"what":"verb","row":"organize according to a strict, sometimes oppressive system or pattern.","example":"every aspect of their life is strictly regimented"}]}',
    ),
    array( // row #531
        'word' => 'exploration', 'pl_PL' => '{"noun":[{"tr":"24","wo":"badanie"},{"tr":"24","wo":"eksploracja"},{"tr":"8","wo":"przebadanie"},{"tr":"8","wo":"zbadanie"},{"tr":"8","wo":"odkrywanie"},{"tr":"8","wo":"rekonesans"}],"examples":[{"what":"noun","row":"the action of traveling in or through an unfamiliar area in order to learn about it.","example":"voyages of exploration"}]}',
    ),
    array( // row #532
        'word' => 'detergent', 'pl_PL' => '{"noun":[{"tr":"24","wo":"detergent"},{"tr":"8","wo":"czyściwo"}],"examples":[{"what":"adjective","row":"of or relating to detergent compounds or their action.","example":"staining that resists detergent action"},{"what":"noun","row":"a water-soluble cleansing agent that combines with impurities and dirt to make them more soluble and differs from soap in not forming a scum with the salts in hard water.","example":"Since soap and detergents are salts, they separate into their component ions in a solution of water."}]}',
    ),
    array( // row #533
        'word' => 'structural', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"strukturalny"},{"tr":"16","wo":"konstrukcyjny"},{"tr":"8","wo":"budowlany"},{"tr":"8","wo":"budowniczy"},{"tr":"8","wo":"architektoniczny"},{"tr":"8","wo":"formalny"},{"tr":"8","wo":"ustrojowy"}],"examples":[{"what":"adjective","row":"of, relating to, or forming part of the structure of a building or other item.","example":"the blast left ten buildings with major structural damage"}]}',
    ),
    array( // row #534
        'word' => 'pond', 'pl_PL' => '{"noun":[{"tr":"24","wo":"staw"},{"tr":"8","wo":"sadzawka"},{"tr":"8","wo":"morze"}],"examples":[{"what":"noun","row":"a small body of still water formed naturally or by hollowing or embanking.","example":"Projecting eaves and bamboo verandahs shaped views of gardens with ponds , streams and artificial hills."},{"what":"verb","row":"hold back or dam up (flowing water or another liquid) to form a small lake.","example":"Completely collapsed ponds were areas where the remnants of a dam were still present and water was partially ponded behind the dam, but at least part of the dam was fully breached and water was freely flowing through the breached area."}]}',
    ),
    array( // row #535
        'word' => 'transformed', 'pl_PL' => '{"verb":[{"tr":"16","wo":"przekształcać"},{"tr":"16","wo":"transformować"},{"tr":"16","wo":"przemieniać"},{"tr":"16","wo":"przetransformować"},{"tr":"16","wo":"przeobrazić"},{"tr":"8","wo":"przerobić"},{"tr":"8","wo":"przetwarzać"},{"tr":"8","wo":"przerodzić"},{"tr":"8","wo":"przeistaczać"},{"tr":"8","wo":"przeinaczać"},{"tr":"8","wo":"przepostaciować"}],"examples":[{"what":"verb","row":"make a thorough or dramatic change in the form, appearance, or character of.","example":"lasers have transformed cardiac surgery"}]}',
    ),
    array( // row #536
        'word' => 'disk', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dysk"},{"tr":"16","wo":"tarcza"},{"tr":"16","wo":"płyta"},{"tr":"16","wo":"dyskietka"},{"tr":"8","wo":"talerz"}],"examples":[{"what":"noun","row":"a flat, thin, round object.","example":"heavy metal disks the size of hockey pucks"},{"what":"verb","row":"cultivate (a field) with a disk harrow.","example":"To prepare the land, Lou mows down the scrub weed trees and remnant sugar cane where they plan to plant and then a neighboring farmer is hired to disk the ground."}]}',
    ),
    array( // row #537
        'word' => 'yours', 'pl_PL' => '{"pronoun":[{"tr":"24","wo":"twój"},{"tr":"16","wo":"wasz"},{"tr":"8","wo":"pański"},{"tr":"8","wo":"pana"},{"tr":"8","wo":"pani"}],"examples":[{"what":"pronoun","row":"used to refer to a thing or things belonging to or associated with the person or people that the speaker is addressing.","example":"the choice is yours"}]}',
    ),
    array( // row #538
        'word' => 'continuity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ciągłość"},{"tr":"8","wo":"szczegółowy scenariusz"}],"examples":[{"what":"noun","row":"the unbroken and consistent existence or operation of something over a period of time.","example":"pension rights accruing through continuity of employment"}]}',
    ),
    array( // row #539
        'word' => 'Marshal', 'pl_PL' => '{"noun":[{"tr":"24","wo":"marszałek"}],"verb":[{"tr":"8","wo":"porządkować"},{"tr":"8","wo":"zestawić"},{"tr":"8","wo":"rozrządzać"},{"tr":"8","wo":"uszykować"},{"tr":"8","wo":"przetaczać"}],"examples":[{"what":"noun","row":"an officer of the highest rank in the armed forces of some countries, including France.","example":"Now, fully half of Napoleon\'s marshals had started their careers as common soldiers."},{"what":"verb","row":"arrange or assemble (a group of people, especially soldiers) in order.","example":"the general marshaled his troops"}]}',
    ),
    array( // row #540
        'word' => 'cigarette', 'pl_PL' => '{"noun":[{"tr":"24","wo":"papieros"}],"examples":[{"what":"noun","row":"a thin cylinder of finely cut tobacco rolled in paper for smoking.","example":"There is a perception that light smoking or smoking low tar cigarettes is not dangerous."}]}',
    ),
    array( // row #541
        'word' => 'fog', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mgła"},{"tr":"8","wo":"potraw"},{"tr":"8","wo":"druga trawa"},{"tr":"8","wo":"mglistość"},{"tr":"8","wo":"para"},{"tr":"8","wo":"zamglenie"}],"verb":[{"tr":"8","wo":"wypasać"},{"tr":"8","wo":"zamglić"},{"tr":"8","wo":"otumaniać"},{"tr":"8","wo":"zakłopotać"}],"examples":[{"what":"noun","row":"a thick cloud of tiny water droplets suspended in the atmosphere at or near the earth\'s surface that obscures or restricts visibility (to a greater extent than mist; strictly, reducing visibility to below 1 km).","example":"the collision occurred in thick fog"},{"what":"verb","row":"(with reference to a glass surface) cover or become covered with steam.","example":"hot steam drifted about her, fogging up the window"}]}',
    ),
    array( // row #542
        'word' => 'exposure', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ekspozycja"},{"tr":"8","wo":"wystawienie"},{"tr":"8","wo":"narażenie na coś"},{"tr":"8","wo":"ujawnienie"},{"tr":"8","wo":"zdemaskowanie"},{"tr":"8","wo":"naświetlanie kliszy"},{"tr":"8","wo":"eksponowanie"},{"tr":"8","wo":"wystawa"},{"tr":"8","wo":"obnażenie"},{"tr":"8","wo":"odsłonięcie"},{"tr":"8","wo":"odkrywka"}],"examples":[{"what":"noun","row":"the state of being exposed to contact with something.","example":"the dangers posed by exposure to asbestos"}]}',
    ),
    array( // row #543
        'word' => 'lands', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wylądować"},{"tr":"16","wo":"lądować"},{"tr":"8","wo":"wysadzać"},{"tr":"8","wo":"trafić"},{"tr":"8","wo":"wysiadać"}],"noun":[{"tr":"24","wo":"ziemia"},{"tr":"24","wo":"ląd"},{"tr":"16","wo":"kraj"},{"tr":"16","wo":"grunt"},{"tr":"16","wo":"kraina"},{"tr":"8","wo":"naród"},{"tr":"8","wo":"rola"}],"examples":[{"what":"noun","row":"the part of the earth\'s surface that is not covered by water, as opposed to the sea or the air.","example":"the reptiles lay their eggs on land"},{"what":"verb","row":"put (someone or something) on land from a boat.","example":"the lifeboat landed the survivors safely ashore"}]}',
    ),
    array( // row #544
        'word' => 'continually', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"nieustannie"}],"examples":[{"what":"adverb","row":"repeated frequently in the same way; regularly.","example":"this information is continually updated"}]}',
    ),
    array( // row #545
        'word' => 'magazines', 'pl_PL' => '{"noun":[{"tr":"24","wo":"magazyn"},{"tr":"24","wo":"czasopismo"},{"tr":"24","wo":"magazynek"},{"tr":"16","wo":"pismo"},{"tr":"8","wo":"periodyk"},{"tr":"8","wo":"skład broni"}],"examples":[{"what":"noun","row":"a periodical publication containing articles and illustrations, typically covering a particular subject or area of interest.","example":"a car magazine"}]}',
    ),
    array( // row #546
        'word' => 'fist', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pięść"},{"tr":"8","wo":"kułak"},{"tr":"8","wo":"łapa"},{"tr":"8","wo":"pismo"}],"verb":[{"tr":"8","wo":"uderzać"},{"tr":"8","wo":"trzymać"}],"examples":[{"what":"noun","row":"a person\'s hand when the fingers are bent in toward the palm and held there tightly, typically in order to strike a blow or grasp something.","example":"He clenched his fists tightly, nails digging into his palms."},{"what":"verb","row":"hit with or as with the fists or a fist.","example":"a fastball he fisted into left field"}]}',
    ),
    array( // row #547
        'word' => 'honey', 'pl_PL' => '{"noun":[{"tr":"24","wo":"miód"},{"tr":"24","wo":"kochanie"},{"tr":"8","wo":"słodycz"}],"examples":[{"what":"noun","row":"a sweet, sticky, yellowish-brown fluid made by bees and other insects from nectar collected from flowers.","example":"I was intrigued with how they gathered pollen and nectar from flowers to make honey ."}]}',
    ),
    array( // row #548
        'word' => 'operational', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"operacyjny"},{"tr":"8","wo":"bojowy"}],"examples":[{"what":"adjective","row":"in or ready for use.","example":"the new laboratory is fully operational"}]}',
    ),
    array( // row #549
        'word' => 'pupils', 'pl_PL' => '{"noun":[{"tr":"24","wo":"źrenica"},{"tr":"24","wo":"uczeń"},{"tr":"16","wo":"uczennica"},{"tr":"16","wo":"wychowanek"},{"tr":"8","wo":"adept"},{"tr":"8","wo":"wychowaniec"},{"tr":"8","wo":"nieletni"}],"examples":[{"what":"noun","row":"a student in school.","example":"He told delegates the primary school pupil had attacked four teachers."}]}',
    ),
    array( // row #550
        'word' => 'responsibilities', 'pl_PL' => '{"noun":[{"tr":"24","wo":"odpowiedzialność"}],"examples":[{"what":"noun","row":"the state or fact of having a duty to deal with something or of having control over someone.","example":"women bear children and take responsibility for child care"}]}',
    ),
    array( // row #551
        'word' => 'wildly', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"wściekle"}],"examples":[{"what":"noun","row":"an idea, feeling, or opinion about something or someone, especially one formed without conscious thought or on the basis of little evidence.","example":"his first impressions of Manchester were very positive"}]}',
    ),
    array( // row #552
        'word' => 'ritual', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rytuał"},{"tr":"8","wo":"obrządek"}],"adjective":[{"tr":"24","wo":"rytualny"},{"tr":"8","wo":"obrzędowy"}],"examples":[{"what":"adjective","row":"of, relating to, or done as a religious or solemn rite.","example":"ritual burial"},{"what":"noun","row":"a religious or solemn ceremony consisting of a series of actions performed according to a prescribed order.","example":"the ancient rituals of Christian worship"}]}',
    ),
    array( // row #553
        'word' => 'glanced', 'pl_PL' => '{"verb":[{"tr":"16","wo":"spojrzeć"},{"tr":"8","wo":"rzucać okiem"},{"tr":"8","wo":"wypolerować"}],"examples":[{"what":"verb","row":"take a brief or hurried look.","example":"Ginny glanced at her watch"}]}',
    ),
    array( // row #554
        'word' => 'impressions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wrażenie"},{"tr":"16","wo":"odcisk"},{"tr":"16","wo":"impresja"},{"tr":"16","wo":"wycisk"},{"tr":"8","wo":"nakład"},{"tr":"8","wo":"odbicie"},{"tr":"8","wo":"efekt"},{"tr":"8","wo":"odbitka"},{"tr":"8","wo":"przedruk"},{"tr":"8","wo":"stempel"}],"examples":[{"what":"noun","row":"an idea, feeling, or opinion about something or someone, especially one formed without conscious thought or on the basis of little evidence.","example":"his first impressions of Manchester were very positive"}]}',
    ),
    array( // row #555
        'word' => 'cents', 'pl_PL' => '{"noun":[{"tr":"24","wo":"cent"},{"tr":"16","wo":"grosz"}],"examples":[{"what":"noun","row":"a monetary unit of the US, Canada, and various other countries, equal to one hundredth of a dollar, euro, or other decimal currency unit.","example":"How many cents equal one dollar is not something that is subject to fluctuations."}]}',
    ),
    array( // row #556
        'word' => 'proceeded', 'pl_PL' => '{"verb":[{"tr":"24","wo":"kontynuować"},{"tr":"24","wo":"postępować"},{"tr":"16","wo":"przystąpić"},{"tr":"8","wo":"przechodzić"},{"tr":"8","wo":"przebiec"},{"tr":"8","wo":"iść naprzód"},{"tr":"8","wo":"mówić dalej"},{"tr":"8","wo":"zaskarżyć"},{"tr":"8","wo":"wydobyć się"}],"examples":[{"what":"verb","row":"begin or continue a course of action.","example":"we can proceed with our investigation"}]}',
    ),
    array( // row #557
        'word' => 'painful', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"bolesny"},{"tr":"16","wo":"dotkliwy"},{"tr":"8","wo":"przykry"},{"tr":"8","wo":"męczący"},{"tr":"8","wo":"obolały"},{"tr":"8","wo":"bolący"},{"tr":"8","wo":"dolegliwy"},{"tr":"8","wo":"zbolały"}],"examples":[{"what":"adjective","row":"(of part of the body) affected with pain.","example":"her ankle was very painful"}]}',
    ),
    array( // row #558
        'word' => 'marginal', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"marginalny"},{"tr":"24","wo":"krańcowy"},{"tr":"8","wo":"brzeżny"},{"tr":"8","wo":"poboczny"},{"tr":"8","wo":"marginesowy"}],"examples":[{"what":"adjective","row":"of, relating to, or situated at the edge or margin of something.","example":"marginal notes"},{"what":"noun","row":"a plant that grows in water adjacent to the edge of land.","example":"However, an important difference is in the shape of the crescentic facets on the proximal edge of the marginals ."}]}',
    ),
    array( // row #559
        'word' => 'conferences', 'pl_PL' => '{"noun":[{"tr":"24","wo":"konferencja"},{"tr":"8","wo":"narada"},{"tr":"8","wo":"zjazd"},{"tr":"8","wo":"posiedzenie"},{"tr":"8","wo":"zebranie"}],"examples":[{"what":"noun","row":"a formal meeting for discussion.","example":"he gathered all the men around the table for a conference"}]}',
    ),
    array( // row #560
        'word' => 'correspondence', 'pl_PL' => '{"noun":[{"tr":"24","wo":"korespondencja"},{"tr":"16","wo":"zgodność"},{"tr":"16","wo":"odpowiedniość"}],"examples":[{"what":"noun","row":"a close similarity, connection, or equivalence.","example":"there is a simple correspondence between the distance of a focused object from the eye and the size of its image on the retina"}]}',
    ),
    array( // row #561
        'word' => 'PULLING', 'pl_PL' => '{"verb":[{"tr":"24","wo":"ciągnąć"},{"tr":"16","wo":"wyrwać"},{"tr":"16","wo":"pociągać"},{"tr":"8","wo":"wciągać"},{"tr":"8","wo":"szarpać"},{"tr":"8","wo":"zaciągać"},{"tr":"8","wo":"rwać"},{"tr":"8","wo":"powstrzymać"},{"tr":"8","wo":"aresztować"},{"tr":"8","wo":"wydrukować"},{"tr":"8","wo":"posunąć się z trudem"}],"examples":[{"what":"verb","row":"exert force on (someone or something), typically by taking hold of them, in order to move or try to move them toward oneself or the origin of the force.","example":"he pulled them down onto the couch"}]}',
    ),
    array( // row #562
        'word' => 'flexible', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"elastyczny"},{"tr":"16","wo":"giętki"},{"tr":"8","wo":"gibki"},{"tr":"8","wo":"ustępliwy"},{"tr":"8","wo":"łatwo przystosowujący się"},{"tr":"8","wo":"niesztywny"}],"examples":[{"what":"adjective","row":"capable of bending easily without breaking.","example":"flexible rubber seals"}]}',
    ),
    array( // row #563
        'word' => 'vivid', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"żywy"},{"tr":"16","wo":"jaskrawy"},{"tr":"16","wo":"barwny"},{"tr":"8","wo":"ostry"},{"tr":"8","wo":"malowniczy"}],"examples":[{"what":"adjective","row":"producing powerful feelings or strong, clear images in the mind.","example":"memories of that evening were still vivid"}]}',
    ),
    array( // row #564
        'word' => 'coverage', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pokrycie"},{"tr":"8","wo":"omówienie prasowe"},{"tr":"8","wo":"reportaż"},{"tr":"8","wo":"zasięg stacji nadawczej"}],"examples":[{"what":"noun","row":"the extent to which something deals with or applies to something else.","example":"the grammar did not offer total coverage of the language"}]}',
    ),
    array( // row #565
        'word' => 'dealer', 'pl_PL' => '{"noun":[{"tr":"16","wo":"kupiec"},{"tr":"16","wo":"sprzedawca"},{"tr":"8","wo":"rozdający karty"}],"examples":[{"what":"noun","row":"a person or business that buys and sells goods.","example":"a car dealer"}]}',
    ),
    array( // row #566
        'word' => 'trading', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"handlowy"},{"tr":"8","wo":"handlarski"}],"examples":[{"what":"noun","row":"the action of engaging in trade.","example":"There is no doubt that the concentration on agricultural liberalization brought the key concerns of fair trade and equitable trading opportunities to the forefront."}]}',
    ),
    array( // row #567
        'word' => 'hired', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zatrudniony"},{"tr":"16","wo":"wynajęty"},{"tr":"8","wo":"zajęty"}],"examples":[{"what":"verb","row":"employ (someone) for wages.","example":"management hired and fired labor in line with demand"}]}',
    ),
    array( // row #568
        'word' => 'demonstration', 'pl_PL' => '{"noun":[{"tr":"24","wo":"demonstracja"},{"tr":"24","wo":"pokaz"},{"tr":"16","wo":"wykazanie"},{"tr":"8","wo":"unaocznienie"},{"tr":"8","wo":"udowodnienie"},{"tr":"8","wo":"manifestacja"},{"tr":"8","wo":"manewr"},{"tr":"8","wo":"buńczuczność"}],"examples":[{"what":"noun","row":"the action or process of showing the existence or truth of something by giving proof or evidence.","example":"it is not capable of mathematical demonstration"}]}',
    ),
    array( // row #569
        'word' => 'evidently', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"widocznie"},{"tr":"24","wo":"najwyraźniej"},{"tr":"24","wo":"oczywiście"}],"examples":[{"what":"adverb","row":"plainly or obviously; in a way that is clearly seen or understood.","example":"a work so evidently laden with significance"}]}',
    ),
    array( // row #570
        'word' => 'patrol', 'pl_PL' => '{"noun":[{"tr":"24","wo":"patrol"},{"tr":"8","wo":"rekonesans"}],"verb":[{"tr":"24","wo":"patrolować"}],"adjective":[{"tr":"24","wo":"patrolowy"},{"tr":"8","wo":"rekonesansowy"}],"examples":[{"what":"noun","row":"a person or group of people sent to keep watch over an area, especially a detachment of guards or police.","example":"a police patrol stopped the man and searched him"},{"what":"verb","row":"keep watch over (an area) by regularly walking or traveling around or through it.","example":"the garrison had to patrol the streets to maintain order"}]}',
    ),
    array( // row #571
        'word' => 'suits', 'pl_PL' => '{"noun":[{"tr":"24","wo":"garnitur"},{"tr":"16","wo":"kolor"},{"tr":"16","wo":"ubranie"},{"tr":"16","wo":"petycja"},{"tr":"16","wo":"komplet"},{"tr":"8","wo":"proces"},{"tr":"8","wo":"zestaw"}],"verb":[{"tr":"24","wo":"pasować"},{"tr":"16","wo":"dostosować"},{"tr":"16","wo":"odpowiadać"},{"tr":"8","wo":"przystosować"},{"tr":"8","wo":"służyć"}],"examples":[{"what":"noun","row":"a set of outer clothes made of the same fabric and designed to be worn together, typically consisting of a jacket and trousers or a jacket and skirt.","example":"Choose jackets, tailored suits and shirtwaist dresses with straight, classic cuts."},{"what":"verb","row":"be convenient for or acceptable to.","example":"he lied whenever it suited him"}]}',
    ),
    array( // row #572
        'word' => 'shelters', 'pl_PL' => '{"noun":[{"tr":"24","wo":"schronisko"},{"tr":"24","wo":"schronienie"},{"tr":"16","wo":"schron"},{"tr":"8","wo":"szałas"},{"tr":"8","wo":"zacisze"}],"verb":[{"tr":"16","wo":"schronić"},{"tr":"8","wo":"uchronić"},{"tr":"8","wo":"zabezpieczać"}],"examples":[{"what":"noun","row":"a place giving temporary protection from bad weather or danger.","example":"We need up to 45,000 more winterised tents and temporary shelters ."},{"what":"verb","row":"protect or shield from something harmful, especially bad weather.","example":"the hut sheltered him from the cold wind"}]}',
    ),
    array( // row #573
        'word' => 'Cancer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Rak"}],"examples":[{"what":"noun","row":"a constellation (the Crab), said to represent a crab crushed under the foot of Hercules. It is most noted for the globular star cluster of Praesepe (the Beehive cluster).","example":null}]}',
    ),
    array( // row #574
        'word' => 'label', 'pl_PL' => '{"noun":[{"tr":"24","wo":"etykieta"},{"tr":"8","wo":"etykietka"},{"tr":"8","wo":"przywieszka"},{"tr":"8","wo":"nalepka"},{"tr":"8","wo":"naklejka"},{"tr":"8","wo":"kwalifikator"},{"tr":"8","wo":"dodatek do aktu prawnego"}],"verb":[{"tr":"24","wo":"etykietować"}],"examples":[{"what":"noun","row":"a small piece of paper, fabric, plastic, or similar material attached to an object and giving information about it.","example":"Our bin has been put out regularly on the date stipulated on the attached label ."},{"what":"verb","row":"attach a label to (something).","example":"she labeled the parcels neatly, writing the addresses in capital letters"}]}',
    ),
    array( // row #575
        'word' => 'Amateur', 'pl_PL' => '{"noun":[{"tr":"24","wo":"amator"},{"tr":"8","wo":"miłośnik"},{"tr":"8","wo":"dyletant"},{"tr":"8","wo":"niefachowiec"}],"examples":[{"what":"noun","row":"a person who engages in a pursuit, especially a sport, on an unpaid basis.","example":"In another key component, the band sponsored a female athlete and an amateur in each sport."},{"what":"adjective","row":"engaging or engaged in without payment; nonprofessional.","example":"an amateur archaeologist"}]}',
    ),
    array( // row #576
        'word' => 'conductor', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dyrygent"},{"tr":"24","wo":"przewodnik"},{"tr":"16","wo":"konduktor"},{"tr":"8","wo":"kierownik"}],"examples":[{"what":"noun","row":"a person who directs the performance of an orchestra or choir.","example":"he was appointed principal conductor of the Berlin Philharmonic Orchestra"}]}',
    ),
    array( // row #577
        'word' => 'productive', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"produktywny"},{"tr":"16","wo":"produkcyjny"},{"tr":"16","wo":"wydajny"},{"tr":"8","wo":"rodzący"},{"tr":"8","wo":"owocny"},{"tr":"8","wo":"płodny"},{"tr":"8","wo":"twórczy"},{"tr":"8","wo":"wytwórczy"}],"examples":[{"what":"adjective","row":"producing or able to produce large amounts of goods, crops, or other commodities.","example":"the most productive employees"}]}',
    ),
    array( // row #578
        'word' => 'Nick', 'pl_PL' => '{"noun":[{"tr":"16","wo":"nacięcie"},{"tr":"16","wo":"wrąb"},{"tr":"8","wo":"karb"},{"tr":"8","wo":"szczelina"},{"tr":"8","wo":"właściwy moment"}],"verb":[{"tr":"8","wo":"wyszczerbić"},{"tr":"8","wo":"naciąć coś"},{"tr":"8","wo":"nadciąć"},{"tr":"8","wo":"rowkować coś"},{"tr":"8","wo":"zgadnąć prawdę"},{"tr":"8","wo":"krzyżować się"}],"examples":[{"what":"noun","row":"a small cut or notch.","example":"Like the old rifles, the rear sight bears a tiny nick of a sighting notch."},{"what":"verb","row":"make a nick or nicks in.","example":"he had nicked himself while shaving"}]}',
    ),
    array( // row #579
        'word' => 'corporate', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zbiorowy"},{"tr":"8","wo":"zespołowy"},{"tr":"8","wo":"kolektywny"},{"tr":"8","wo":"gromadny"},{"tr":"8","wo":"komisyjny"}],"examples":[{"what":"adjective","row":"of or relating to a corporation, especially a large company or group.","example":"airlines are very keen on their corporate identity"},{"what":"noun","row":"a corporate company or group.","example":"The rating assesses the average risk of payment default of corporates in the country."}]}',
    ),
    array( // row #580
        'word' => 'Stadium', 'pl_PL' => '{"noun":[{"tr":"24","wo":"stadion"},{"tr":"24","wo":"stadium"}],"examples":[{"what":"noun","row":"a sports arena with tiers of seats for spectators.","example":"In fact, it would be a fair point to state that mandatory seating in Premier League stadia has played a role in lessening trouble in the stands."}]}',
    ),
    array( // row #581
        'word' => 'inspired', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"natchniony"},{"tr":"8","wo":"polotny"}],"examples":[{"what":"adjective","row":"of extraordinary quality, as if arising from some external creative impulse.","example":"they had to thank the goalie for some inspired saves"},{"what":"verb","row":"fill (someone) with the urge or ability to do or feel something, especially to do something creative.","example":"his passion for romantic literature inspired him to begin writing"}]}',
    ),
    array( // row #582
        'word' => 'torn', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"rozdarty"},{"tr":"8","wo":"przedarty"},{"tr":"8","wo":"poszarpany"}],"examples":[{"what":"noun","row":"a city in west central Oregon, on the Willamette River, home to the University of Oregon; population 150,104 (est. 2008).","example":null}]}',
    ),
    array( // row #583
        'word' => 'prospect', 'pl_PL' => '{"noun":[{"tr":"24","wo":"perspektywa"},{"tr":"16","wo":"możliwość"},{"tr":"16","wo":"widok"},{"tr":"8","wo":"działka złotonośna"},{"tr":"8","wo":"horoskop"}],"verb":[{"tr":"8","wo":"poszukiwać"}],"examples":[{"what":"noun","row":"the possibility or likelihood of some future event occurring.","example":"there was no prospect of a reconciliation"},{"what":"verb","row":"search for mineral deposits in a place, especially by means of experimental drilling and excavation.","example":"the company is also prospecting for gold"}]}',
    ),
    array( // row #584
        'word' => 'ethics', 'pl_PL' => '{"noun":[{"tr":"24","wo":"etyka"},{"tr":"8","wo":"moralność"}],"examples":[{"what":"noun","row":"moral principles that govern a person\'s or group\'s behavior.","example":"Judeo-Christian ethics"}]}',
    ),
    array( // row #585
        'word' => 'dilemma', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dylemat"}],"examples":[{"what":"noun","row":"a situation in which a difficult choice has to be made between two or more alternatives, especially equally undesirable ones.","example":"the people often face the dilemma of feeding themselves or their cattle"}]}',
    ),
    array( // row #586
        'word' => 'accused', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"oskarżony"},{"tr":"8","wo":"obwiniony"},{"tr":"8","wo":"zarzucony"}],"examples":[{"what":"noun","row":"a person or group of people who are charged with or on trial for a crime.","example":"the accused was ordered to stand trial on a number of charges"}]}',
    ),
    array( // row #587
        'word' => 'succession', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sukcesja"},{"tr":"16","wo":"następstwo"},{"tr":"8","wo":"następowanie"},{"tr":"8","wo":"kolejność"},{"tr":"8","wo":"seria"},{"tr":"8","wo":"dziedziczność"},{"tr":"8","wo":"dziedzictwo"},{"tr":"8","wo":"spuścizna"},{"tr":"8","wo":"amfilada"}],"examples":[{"what":"noun","row":"a number of people or things sharing a specified characteristic and following one after the other.","example":"she had been secretary to a succession of board directors"}]}',
    ),
    array( // row #588
        'word' => 'Jersey', 'pl_PL' => '{"noun":[{"tr":"8","wo":"golf"},{"tr":"8","wo":"sweter"}],"examples":[{"what":"noun","row":"the largest of the Channel Islands; population 91,900 (est. 2009).","example":null},{"what":"noun","row":"a knitted garment with long sleeves worn over the upper body.","example":"When I moved my trade show uniform from an ottoman rib to a jersey knit, he adjusted the tape to make the new shirts look better than the old ones."}]}',
    ),
    array( // row #589
        'word' => 'cocktail', 'pl_PL' => '{"noun":[{"tr":"24","wo":"koktajl"},{"tr":"24","wo":"cocktail"},{"tr":"16","wo":"koktail"},{"tr":"8","wo":"koń wyścigowy"},{"tr":"8","wo":"kąsawiec"},{"tr":"8","wo":"parweniusz"}],"examples":[{"what":"noun","row":"an alcoholic drink consisting of a spirit or several spirits mixed with other ingredients, such as fruit juice, lemonade, or cream.","example":"cocktail parties"}]}',
    ),
    array( // row #590
        'word' => 'bearing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"łożysko"},{"tr":"8","wo":"zachowanie się"},{"tr":"8","wo":"postępowanie"},{"tr":"8","wo":"aparycja"},{"tr":"8","wo":"prezencja"},{"tr":"8","wo":"postawa"},{"tr":"8","wo":"powierzchnia oparcia"},{"tr":"8","wo":"wytrzymałość"},{"tr":"8","wo":"związek"},{"tr":"8","wo":"godło"},{"tr":"8","wo":"rodzenie"},{"tr":"8","wo":"kierunek"}],"adjective":[{"tr":"16","wo":"nośny"},{"tr":"8","wo":"dźwigający"},{"tr":"8","wo":"rodzący"}],"examples":[{"what":"noun","row":"a person\'s way of standing or moving.","example":"a man of precise military bearing"}]}',
    ),
    array( // row #591
        'word' => 'intervals', 'pl_PL' => '{"noun":[{"tr":"24","wo":"interwał"},{"tr":"24","wo":"przedział"},{"tr":"16","wo":"przerwa"},{"tr":"16","wo":"okres"},{"tr":"8","wo":"pauza"},{"tr":"8","wo":"antrakt"},{"tr":"8","wo":"rozstęp"},{"tr":"8","wo":"przestrzeń"},{"tr":"8","wo":"odległość"}],"examples":[{"what":"noun","row":"an intervening time or space.","example":"after his departure, there was an interval of many years without any meetings"}]}',
    ),
    array( // row #592
        'word' => 'ward', 'pl_PL' => '{"noun":[{"tr":"16","wo":"wychowanek"},{"tr":"8","wo":"sala chorych"},{"tr":"8","wo":"osoba pod kuratelą"},{"tr":"8","wo":"wychowaniec"},{"tr":"8","wo":"pupilek"},{"tr":"8","wo":"oddział w szpitalu"},{"tr":"8","wo":"cela w więzieniu"},{"tr":"8","wo":"okręg miasta"}],"examples":[{"what":"noun","row":"a separate room in a hospital, typically one allocated to a particular type of patient.","example":"a children\'s ward"},{"what":"verb","row":"guard; protect.","example":"it was his duty to ward the king"},{"what":"suffix","row":"(forming adverbs) toward the specified place or direction.","example":"eastward"}]}',
    ),
    array( // row #593
        'word' => 'viewed', 'pl_PL' => '{"verb":[{"tr":"24","wo":"obejrzeć"},{"tr":"16","wo":"przejrzeć"},{"tr":"8","wo":"patrzeć"},{"tr":"8","wo":"zapatrywać się"},{"tr":"8","wo":"rozpatrywać"},{"tr":"8","wo":"badać"}],"examples":[{"what":"verb","row":"look at or inspect (something).","example":"the public can view the famous hall with its unique staircase"}]}',
    ),
    array( // row #594
        'word' => 'respective', 'pl_PL' => '{"adjective":[{"tr":"8","wo":"poszczególny"},{"tr":"8","wo":"indywidualny"}],"examples":[{"what":"adjective","row":"belonging or relating separately to each of two or more people or things.","example":"they chatted about their respective childhoods"}]}',
    ),
    array( // row #595
        'word' => 'racial', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"rasowy"},{"tr":"8","wo":"rasistowski"}],"examples":[{"what":"adjective","row":"of or relating to race.","example":"a racial minority"}]}',
    ),
    array( // row #596
        'word' => 'tangible', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"namacalny"},{"tr":"8","wo":"faktyczny"},{"tr":"8","wo":"dotykalny"},{"tr":"8","wo":"materialny"},{"tr":"8","wo":"wyraźny"}],"examples":[{"what":"adjective","row":"perceptible by touch.","example":"the atmosphere of neglect and abandonment was almost tangible"},{"what":"noun","row":"a thing that is perceptible by touch.","example":"Even in the straight world of economics, where production and tangibles were once central, indices of happiness, creativity and other non-material values have taken centre stage."}]}',
    ),
    array( // row #597
        'word' => 'Houston', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Houston"}],"examples":[{"what":"noun","row":"an inland port in Texas, linked to the Gulf of Mexico by the Houston Ship Canal; population 2,242,193 (est. 2008). Since 1961, it has been a center for space research and manned space flight; it is the site of the NASA Space Center.","example":null}]}',
    ),
    array( // row #598
        'word' => 'corporations', 'pl_PL' => '{"noun":[{"tr":"24","wo":"korporacja"},{"tr":"16","wo":"spółka"},{"tr":"8","wo":"osoba prawna"},{"tr":"8","wo":"brzuch"}],"examples":[{"what":"noun","row":"a company or group of people authorized to act as a single entity (legally a person) and recognized as such in law.","example":"The majority of creditors are large corporations and insurance and reinsurance companies."}]}',
    ),
    array( // row #599
        'word' => 'constitutional', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"konstytucyjny"},{"tr":"16","wo":"ustrojowy"},{"tr":"8","wo":"organiczny"}],"noun":[{"tr":"8","wo":"przechadzka dla zdrowia"},{"tr":"8","wo":"spacer"}],"examples":[{"what":"adjective","row":"of or relating to an established set of principles governing a state.","example":"a constitutional amendment"},{"what":"noun","row":"a walk, typically one taken regularly to maintain or restore good health.","example":"I took one of my regular constitutionals tonight."}]}',
    ),
    array( // row #600
        'word' => 'August', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sierpień"}],"adjective":[{"tr":"16","wo":"sierpniowy"}],"examples":[{"what":"noun","row":"the eighth month of the year, in the northern hemisphere usually considered the last month of summer.","example":"the sultry haze of late August"},{"what":"adjective","row":"respected and impressive.","example":"she was in august company"}]}',
    ),
    array( // row #601
        'word' => 'pursue', 'pl_PL' => '{"verb":[{"tr":"16","wo":"kontynuować"},{"tr":"8","wo":"ścigać"},{"tr":"8","wo":"tropić"},{"tr":"8","wo":"iść czyimś śladem"},{"tr":"8","wo":"gonić"},{"tr":"8","wo":"dążyć do celu"},{"tr":"8","wo":"wykonać"}],"examples":[{"what":"verb","row":"follow (someone or something) in order to catch or attack them.","example":"the officer pursued the van"}]}',
    ),
    array( // row #602
        'word' => 'variables', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zmienna"}],"examples":[{"what":"noun","row":"an element, feature, or factor that is liable to vary or change.","example":"there are too many variables involved to make any meaningful predictions"}]}',
    ),
    array( // row #603
        'word' => 'Palfrey', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wierzchowiec"},{"tr":"24","wo":"rumak"}],"examples":[{"what":"noun","row":"a docile horse used for ordinary riding, especially by women.","example":"Equestrian purchases were prominent, and extra horses, especially geldings and palfreys , were obtained and equipped with pommels of gold and silver."}]}',
    ),
    array( // row #604
        'word' => 'Cavalry', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kawaleria"},{"tr":"16","wo":"konnica"}],"adjective":[{"tr":"8","wo":"jezdny"}],"examples":[{"what":"noun","row":"(in the past) soldiers who fought on horseback.","example":"His army\'s main power was based on his cavalry - horse borne soldiers."}]}',
    ),
    array( // row #605
        'word' => 'staring', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"gapiowski"},{"tr":"16","wo":"krzykliwy"},{"tr":"8","wo":"zagapiony"},{"tr":"8","wo":"rzucający się w oczy"}],"examples":[{"what":"noun","row":"a sudden strong and unreflective urge or desire to act.","example":"I had an almost irresistible impulse to giggle"}]}',
    ),
    array( // row #606
        'word' => 'impulse', 'pl_PL' => '{"noun":[{"tr":"24","wo":"impuls"},{"tr":"16","wo":"bodziec"},{"tr":"16","wo":"odruch"},{"tr":"16","wo":"popęd"},{"tr":"8","wo":"poryw"},{"tr":"8","wo":"zryw"},{"tr":"8","wo":"pobudzenie"},{"tr":"8","wo":"impet"},{"tr":"8","wo":"pobudka"},{"tr":"8","wo":"natchnienie"},{"tr":"8","wo":"podnieta"},{"tr":"8","wo":"zapęd"},{"tr":"8","wo":"sprężyna"}],"examples":[{"what":"noun","row":"a sudden strong and unreflective urge or desire to act.","example":"I had an almost irresistible impulse to giggle"}]}',
    ),
    array( // row #607
        'word' => 'Jew', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Żyd"},{"tr":"8","wo":"Izraelita"}],"examples":[{"what":"noun","row":"a member of the people and cultural community whose traditional religion is Judaism and who trace their origins through the ancient Hebrew people of Israel to Abraham.","example":"Jews believe that a Jew is someone who is the child of a Jewish mother, and who has not adopted another faith."},{"what":"verb","row":"bargain with someone in a miserly or petty way.","example":null}]}',
    ),
    array( // row #608
        'word' => 'switches', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przełącznik"},{"tr":"24","wo":"wyłącznik"},{"tr":"16","wo":"przełączenie"},{"tr":"8","wo":"witka"},{"tr":"8","wo":"zwrotnica"},{"tr":"8","wo":"odłącznik"},{"tr":"8","wo":"pręt"},{"tr":"8","wo":"szpicruta"}],"verb":[{"tr":"24","wo":"przełączyć"},{"tr":"8","wo":"zmieniać"},{"tr":"8","wo":"wychłostać"},{"tr":"8","wo":"porwać gwałtownym ruchem"},{"tr":"8","wo":"zamieniać się"},{"tr":"8","wo":"manewrować"},{"tr":"8","wo":"przewekslować"}],"examples":[{"what":"noun","row":"a device for making and breaking the connection in an electric circuit.","example":"the guard hit a switch and the gate swung open"},{"what":"verb","row":"change the position, direction, or focus of.","example":"the company switched the boats to other routes"}]}',
    ),
    array( // row #609
        'word' => 'frightened', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"przestraszony"},{"tr":"8","wo":"wylękniony"},{"tr":"8","wo":"przelękły"},{"tr":"8","wo":"zastraszony"}],"examples":[{"what":"adjective","row":"afraid or anxious.","example":"a frightened child"}]}',
    ),
    array( // row #610
        'word' => 'mysterious', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"tajemniczy"},{"tr":"16","wo":"zagadkowy"},{"tr":"8","wo":"nieodgadniony"},{"tr":"8","wo":"niedocieczony"},{"tr":"8","wo":"zakonspirowany"},{"tr":"8","wo":"skryty"}],"examples":[{"what":"adjective","row":"difficult or impossible to understand, explain, or identify.","example":"his colleague had vanished in mysterious circumstances"}]}',
    ),
    array( // row #611
        'word' => 'philosophical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"filozoficzny"}],"examples":[{"what":"adjective","row":"relating or devoted to the study of the fundamental nature of knowledge, reality, and existence.","example":"philosophical discussions about free will"}]}',
    ),
    array( // row #612
        'word' => 'Feeding', 'pl_PL' => '{"noun":[{"tr":"24","wo":"karmienie"},{"tr":"16","wo":"alimentacja"},{"tr":"8","wo":"wyżywienie"},{"tr":"8","wo":"żer"}],"adjective":[{"tr":"16","wo":"żywieniowy"},{"tr":"16","wo":"zasilający"},{"tr":"8","wo":"paszowy"},{"tr":"8","wo":"żerowy"}],"examples":[{"what":"verb","row":"give food to.","example":"the raiders fed the guard dog to keep it quiet"}]}',
    ),
    array( // row #613
        'word' => 'disturbed', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zaniepokojony"},{"tr":"16","wo":"niespokojny"},{"tr":"8","wo":"burzliwy"},{"tr":"8","wo":"przeszkadzający"},{"tr":"8","wo":"męczący"}],"examples":[{"what":"adjective","row":"having had its normal pattern or function disrupted.","example":"disturbed sleep"},{"what":"verb","row":"interfere with the normal arrangement or functioning of.","example":"being sent to jail had apparently not disturbed his cheerfulness"}]}',
    ),
    array( // row #614
        'word' => 'emerged', 'pl_PL' => '{"verb":[{"tr":"16","wo":"pojawić się"},{"tr":"16","wo":"powstać"},{"tr":"16","wo":"wyłaniać się"},{"tr":"16","wo":"wychodzić"},{"tr":"8","wo":"wynikać"},{"tr":"8","wo":"wynurzać się"},{"tr":"8","wo":"wydostać się"},{"tr":"8","wo":"ukazać się"},{"tr":"8","wo":"nasunąć się"},{"tr":"8","wo":"wyglądać"}],"examples":[{"what":"verb","row":"move out of or away from something and come into view.","example":"black ravens emerged from the fog"}]}',
    ),
    array( // row #615
        'word' => 'attain', 'pl_PL' => '{"verb":[{"tr":"16","wo":"osiągać"},{"tr":"8","wo":"dosięgać"},{"tr":"8","wo":"dochodzić"},{"tr":"8","wo":"wskórać"}],"examples":[{"what":"verb","row":"succeed in achieving (something that one desires and has worked for).","example":"clarify your objectives and ways of attaining them"}]}',
    ),
    array( // row #616
        'word' => 'trembling', 'pl_PL' => '{"noun":[{"tr":"24","wo":"drżenie"},{"tr":"8","wo":"dygot"}],"adjective":[{"tr":"24","wo":"drżący"},{"tr":"8","wo":"roztrzęsiony"},{"tr":"8","wo":"rozlatany"}],"examples":[{"what":"adjective","row":"free from disturbance; tranquil.","example":"everything was so quiet and peaceful in the early morning"}]}',
    ),
    array( // row #617
        'word' => 'peaceful', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"spokojny"},{"tr":"24","wo":"pokojowy"},{"tr":"8","wo":"niewojowniczy"},{"tr":"8","wo":"niewojenny"}],"examples":[{"what":"adjective","row":"free from disturbance; tranquil.","example":"everything was so quiet and peaceful in the early morning"}]}',
    ),
    array( // row #618
        'word' => 'wars', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wojna"},{"tr":"16","wo":"walka"}],"verb":[{"tr":"8","wo":"wojować"},{"tr":"8","wo":"bojować"}],"examples":[{"what":"noun","row":"a state of armed conflict between different nations or states or different groups within a nation or state.","example":"Japan declared war on Germany"},{"what":"verb","row":"engage in a war.","example":"small states warred against each other"}]}',
    ),
    array( // row #619
        'word' => 'legend', 'pl_PL' => '{"noun":[{"tr":"24","wo":"legenda"},{"tr":"16","wo":"napis"},{"tr":"16","wo":"podanie"},{"tr":"8","wo":"baśń"}],"examples":[{"what":"noun","row":"a traditional story sometimes popularly regarded as historical but unauthenticated.","example":"the legend of King Arthur"},{"what":"adjective","row":"very well known.","example":"his speed and ferocity in attack were legend"}]}',
    ),
    array( // row #620
        'word' => 'Southerners', 'pl_PL' => '{"noun":[{"tr":"24","wo":"południowiec"}],"examples":[{"what":"noun","row":"a native or inhabitant of the south, especially of the southern US.","example":"Some of the nine were native southerners ; others grew up in politically radical families from the North."}]}',
    ),
    array( // row #621
        'word' => 'preferred', 'pl_PL' => '{"verb":[{"tr":"16","wo":"woleć"},{"tr":"8","wo":"przedkładać"},{"tr":"8","wo":"awansować kogoś"},{"tr":"8","wo":"mianować kogoś na urząd"}],"examples":[{"what":"verb","row":"like (one thing or person) better than another or others; tend to choose.","example":"I prefer Venice to Rome"}]}',
    ),
    array( // row #622
        'word' => 'delightful', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zachwycający"},{"tr":"16","wo":"uroczy"},{"tr":"16","wo":"rozkoszny"},{"tr":"8","wo":"czarujący"},{"tr":"8","wo":"błogi"},{"tr":"8","wo":"przemiły"},{"tr":"8","wo":"wyborny"},{"tr":"8","wo":"czarowny"}],"examples":[{"what":"adjective","row":"causing delight; charming.","example":"a delightful secluded garden"}]}',
    ),
    array( // row #623
        'word' => 'instruments', 'pl_PL' => '{"noun":[{"tr":"24","wo":"instrument"},{"tr":"16","wo":"przyrząd"},{"tr":"16","wo":"dokument"},{"tr":"16","wo":"narzędzie"}],"verb":[{"tr":"8","wo":"instrumentować"}],"examples":[{"what":"noun","row":"a tool or implement, especially one for delicate or scientific work.","example":"a surgical instrument"},{"what":"verb","row":"equip (something) with measuring instruments.","example":"For Protocol 4, animals were instrumented before delivery to measure pulmonary artery pressure and left atrial pressure."}]}',
    ),
    array( // row #624
        'word' => 'lively', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"żywy"},{"tr":"16","wo":"skoczny"},{"tr":"16","wo":"ożywiony"},{"tr":"16","wo":"żwawy"},{"tr":"8","wo":"żywotny"},{"tr":"8","wo":"ruchliwy"},{"tr":"8","wo":"wesoły"},{"tr":"8","wo":"rześki"},{"tr":"8","wo":"wartki"},{"tr":"8","wo":"dziarski"},{"tr":"8","wo":"rzeźwy"},{"tr":"8","wo":"raźny"}],"examples":[{"what":"adjective","row":"full of life and energy; active and outgoing.","example":"she joined a lively team of reporters"}]}',
    ),
    array( // row #625
        'word' => 'exceptions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wyjątek"},{"tr":"16","wo":"wyłączenie"},{"tr":"8","wo":"zastrzeżenie"},{"tr":"8","wo":"wykluczenie"},{"tr":"8","wo":"wykluczanie"}],"examples":[{"what":"noun","row":"a person or thing that is excluded from a general statement or does not follow a rule.","example":"the drives between towns are a delight, and the journey to Graz is no exception"}]}',
    ),
    array( // row #626
        'word' => 'invited', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zaproszony"},{"tr":"16","wo":"proszony"}],"examples":[{"what":"verb","row":"make a polite, formal, or friendly request to (someone) to go somewhere or to do something.","example":"we were invited to a dinner at the embassy"}]}',
    ),
    array( // row #627
        'word' => 'instruction', 'pl_PL' => '{"noun":[{"tr":"24","wo":"instrukcja"},{"tr":"8","wo":"nauka"},{"tr":"8","wo":"nauczanie"},{"tr":"8","wo":"przeszkolenie"},{"tr":"8","wo":"szkolenie"},{"tr":"8","wo":"edukacja"},{"tr":"8","wo":"dydaktyka"},{"tr":"8","wo":"wskazówka"},{"tr":"8","wo":"ćwiczenie"}],"examples":[{"what":"noun","row":"a direction or order.","example":"he issued instructions to the sheriff"}]}',
    ),
    array( // row #628
        'word' => 'landing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lądowanie"},{"tr":"16","wo":"półpiętro"},{"tr":"8","wo":"doskok"},{"tr":"8","wo":"zeskok"},{"tr":"8","wo":"podest"},{"tr":"8","wo":"półpiętrze"},{"tr":"8","wo":"przypiętrze"},{"tr":"8","wo":"pomost"}],"adjective":[{"tr":"8","wo":"desantowy"},{"tr":"8","wo":"podestowy"},{"tr":"8","wo":"półpiętrowy"},{"tr":"8","wo":"przypiętrowy"}],"examples":[{"what":"noun","row":"an instance of coming or bringing something to land, either from the air or from water.","example":"we made a perfect landing at the airstrip"}]}',
    ),
    array( // row #629
        'word' => 'stockholders', 'pl_PL' => '{"noun":[{"tr":"24","wo":"akcjonariusz"}],"examples":[{"what":"noun","row":"a shareholder.","example":"In an attempt to create a corporation where stockholders \' interests are looked after, many firms have implemented a two-tier corporate hierarchy."}]}',
    ),
    array( // row #630
        'word' => 'supplement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"uzupełnienie"},{"tr":"24","wo":"suplement"},{"tr":"24","wo":"dopłata"},{"tr":"24","wo":"dodatek"},{"tr":"8","wo":"dopełnienie"},{"tr":"8","wo":"nadprogram"},{"tr":"8","wo":"dopłacenie"},{"tr":"8","wo":"dodruk"}],"verb":[{"tr":"24","wo":"uzupełniać"},{"tr":"8","wo":"dopełniać"},{"tr":"8","wo":"dołączać dodatek"}],"examples":[{"what":"noun","row":"something that completes or enhances something else when added to it.","example":"the handout is a supplement to the official manual"},{"what":"verb","row":"add an extra element or amount to.","example":"she took the job to supplement her husband\'s income"}]}',
    ),
    array( // row #631
        'word' => 'planes', 'pl_PL' => '{"noun":[{"tr":"24","wo":"samolot"},{"tr":"24","wo":"płaszczyzna"},{"tr":"16","wo":"strug"},{"tr":"16","wo":"powierzchnia"},{"tr":"8","wo":"płatowiec"},{"tr":"8","wo":"hebel"},{"tr":"8","wo":"równina"},{"tr":"8","wo":"poziom"},{"tr":"8","wo":"równacz"},{"tr":"8","wo":"równiarka"}],"verb":[{"tr":"8","wo":"latać samolotem"},{"tr":"8","wo":"strugać"}],"examples":[{"what":"noun","row":"a flat surface on which a straight line joining any two points on it would wholly lie.","example":"the horizontal plane"},{"what":"verb","row":"(of a bird or an airborne object) soar without moving the wings; glide.","example":"a bird planed down toward the water below"}]}',
    ),
    array( // row #632
        'word' => 'meals', 'pl_PL' => '{"noun":[{"tr":"24","wo":"posiłek"},{"tr":"24","wo":"jedzenie"},{"tr":"16","wo":"mąka"},{"tr":"8","wo":"przemiał"},{"tr":"8","wo":"żarło"}],"verb":[{"tr":"8","wo":"jeść posiłki"}],"examples":[{"what":"noun","row":"any of the regular occasions in a day when a reasonably large amount of food is eaten, such as breakfast, lunch, or dinner.","example":"Already they knew the food for the evening meal was ready."}]}',
    ),
    array( // row #633
        'word' => 'electricity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"elektryczność"},{"tr":"8","wo":"elektryka"}],"examples":[{"what":"noun","row":"a form of energy resulting from the existence of charged particles (such as electrons or protons), either statically as an accumulation of charge or dynamically as a current.","example":"Unlike most metals, they conduct electricity without losing any energy as heat."}]}',
    ),
    array( // row #634
        'word' => 'register', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rejestr"},{"tr":"16","wo":"register"},{"tr":"8","wo":"lista"},{"tr":"8","wo":"wykaz"},{"tr":"8","wo":"licznik"},{"tr":"8","wo":"zasłona"},{"tr":"8","wo":"rejestrator"},{"tr":"8","wo":"informator"},{"tr":"8","wo":"album"},{"tr":"8","wo":"informujący"}],"verb":[{"tr":"24","wo":"zarejestrować"},{"tr":"16","wo":"rejestrować"}],"examples":[{"what":"noun","row":"an official list or record, for example of births, marriages, and deaths, of shipping, or of historic places.","example":"While the graveyard register has recorded the names of those buried in the cemetery identity of those buried in some graves is difficult to establish."},{"what":"verb","row":"enter or record on an official list or directory.","example":"the vessel is registered as Liberian"}]}',
    ),
    array( // row #635
        'word' => 'Mount', 'pl_PL' => '{"noun":[{"tr":"16","wo":"obsada"},{"tr":"16","wo":"uchwyt"},{"tr":"8","wo":"oprawa"},{"tr":"8","wo":"podstawa"},{"tr":"8","wo":"wierzchowiec"},{"tr":"8","wo":"rower"},{"tr":"8","wo":"góra"},{"tr":"8","wo":"szczyt"},{"tr":"8","wo":"wzgórek"}],"verb":[{"tr":"8","wo":"stanąć"},{"tr":"8","wo":"wychodzić"},{"tr":"8","wo":"reżyserować"}],"examples":[{"what":"noun","row":"a backing or setting on which a photograph, gem, or work of art is set for display.","example":"These are fourteen-by-seventeen-inch platinum prints, each in art deco mounts and signed by Curtis."},{"what":"verb","row":"climb up (stairs, a hill, or other rising surface).","example":"he mounted the steps to the front door"}]}',
    ),
    array( // row #636
        'word' => 'temperatures', 'pl_PL' => '{"noun":[{"tr":"24","wo":"temperatura"},{"tr":"8","wo":"gorączka"},{"tr":"8","wo":"ciepłota"}],"examples":[{"what":"noun","row":"the degree or intensity of heat present in a substance or object, especially as expressed according to a comparative scale and shown by a thermometer or perceived by touch.","example":"With the outside temperature touching 43 degrees Celsius, the extreme heat policy was in force."}]}',
    ),
    array( // row #637
        'word' => 'cellar', 'pl_PL' => '{"noun":[{"tr":"24","wo":"piwnica"},{"tr":"16","wo":"loch"},{"tr":"8","wo":"podziemie"}],"examples":[{"what":"noun","row":"a room below ground level in a house, typically one used for storing wine or coal.","example":"Why do new Irish houses have no cellars or utility rooms?"},{"what":"verb","row":"store (wine) in a cellar.","example":"Gamay juice also tends to be vinified in a hurry, not least because of market pressure for Beaujolais nouveau, and if Gamay-based wines are cellared for more than two or three years it is usually by mistake."}]}',
    ),
    array( // row #638
        'word' => 'concerts', 'pl_PL' => '{"noun":[{"tr":"24","wo":"koncert"},{"tr":"8","wo":"zgoda"},{"tr":"8","wo":"jednomyślność"}],"verb":[{"tr":"8","wo":"porozumieć się"},{"tr":"8","wo":"układać"}],"examples":[{"what":"noun","row":"a musical performance given in public, typically by several performers or of several separate compositions.","example":"symphony concerts"},{"what":"verb","row":"arrange (something) by mutual agreement or coordination.","example":"they started meeting regularly to concert their tactics"}]}',
    ),
    array( // row #639
        'word' => 'recalled', 'pl_PL' => '{"verb":[{"tr":"16","wo":"odwołać"},{"tr":"8","wo":"przypominać sobie"},{"tr":"8","wo":"pamiętać kogoś coś"},{"tr":"8","wo":"wspominać"},{"tr":"8","wo":"anulować coś"},{"tr":"8","wo":"rewokować"},{"tr":"8","wo":"wskrzesić"},{"tr":"8","wo":"wycofać"}],"examples":[{"what":"verb","row":"bring (a fact, event, or situation) back into one\'s mind, especially so as to recount it to others; remember.","example":"I can still vaguely recall being taken to the hospital"}]}',
    ),
    array( // row #640
        'word' => 'entry', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wejście"},{"tr":"16","wo":"pozycja"},{"tr":"16","wo":"wjazd"},{"tr":"16","wo":"zapis"},{"tr":"8","wo":"wstęp"},{"tr":"8","wo":"ingres"},{"tr":"8","wo":"wmarsz"},{"tr":"8","wo":"wlot"},{"tr":"8","wo":"wpust"},{"tr":"8","wo":"ukazanie się"},{"tr":"8","wo":"młode pokolenie"},{"tr":"8","wo":"początek"}],"examples":[{"what":"noun","row":"an act of going or coming in.","example":"the door was locked, but he forced an entry"}]}',
    ),
    array( // row #641
        'word' => 'Billy', 'pl_PL' => '{"noun":[{"tr":"8","wo":"menażka"},{"tr":"8","wo":"pałka policjanta"}],"examples":[{"what":"noun","row":"a truncheon; a cudgel.","example":"The Gangs of New York âsports setâ featuring a billy club , a shiv and a board with a nail driven through it."}]}',
    ),
    array( // row #642
        'word' => 'contest', 'pl_PL' => '{"noun":[{"tr":"24","wo":"konkurs"},{"tr":"24","wo":"rywalizacja"},{"tr":"16","wo":"zawody"},{"tr":"16","wo":"walka"},{"tr":"16","wo":"turniej"},{"tr":"8","wo":"wyścig"},{"tr":"8","wo":"rozgrywka"},{"tr":"8","wo":"zapasy"},{"tr":"8","wo":"licytacja"},{"tr":"8","wo":"rozprawa"},{"tr":"8","wo":"olimpiada"}],"verb":[{"tr":"16","wo":"kwestionować"}],"examples":[{"what":"noun","row":"an event in which people compete for supremacy in a sport, activity, or particular quality.","example":"a gigantic air rifle shooting contest"},{"what":"verb","row":"engage in competition to attain (a position of power).","example":"she declared her intention to contest the presidency"}]}',
    ),
    array( // row #643
        'word' => 'frames', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rama"},{"tr":"24","wo":"ramka"},{"tr":"16","wo":"kadr"},{"tr":"8","wo":"konstrukcja"},{"tr":"8","wo":"ościeżnica"},{"tr":"8","wo":"obramowanie"},{"tr":"8","wo":"oprawa"},{"tr":"8","wo":"ciało"},{"tr":"8","wo":"ujęcie"},{"tr":"8","wo":"szkielet konstrukcji"},{"tr":"8","wo":"kościec"}],"verb":[{"tr":"8","wo":"oprawiać"}],"examples":[{"what":"noun","row":"a rigid structure that surrounds or encloses something such as a door or window.","example":"His mother stood in the frame of the kitchen door, hands on her hips and a grim expression on her face."},{"what":"verb","row":"place (a picture or photograph) in a frame.","example":"he had the photo framed"}]}',
    ),
    array( // row #644
        'word' => 'disaster', 'pl_PL' => '{"noun":[{"tr":"24","wo":"katastrofa"},{"tr":"16","wo":"nieszczęście"},{"tr":"16","wo":"klęska"},{"tr":"16","wo":"kataklizm"}],"examples":[{"what":"noun","row":"a sudden event, such as an accident or a natural catastrophe, that causes great damage or loss of life.","example":"159 people died in the disaster"}]}',
    ),
    array( // row #645
        'word' => 'threatening', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"groźny"},{"tr":"16","wo":"grożący"}],"examples":[{"what":"adjective","row":"having a hostile or deliberately frightening quality or manner.","example":"her mother had received a threatening letter"}]}',
    ),
    array( // row #646
        'word' => 'mathematics', 'pl_PL' => '{"noun":[{"tr":"24","wo":"matematyka"}],"examples":[{"what":"noun","row":"the abstract science of number, quantity, and space. Mathematics may be studied in its own right ( pure mathematics ), or as it is applied to other disciplines such as physics and engineering ( applied mathematics ).","example":"He wrote on the history of mathematics and the philosophy of mathematics and science."}]}',
    ),
    array( // row #647
        'word' => 'bridges', 'pl_PL' => '{"noun":[{"tr":"24","wo":"most"},{"tr":"24","wo":"pomost"},{"tr":"24","wo":"mostek"},{"tr":"8","wo":"grzbiet"},{"tr":"8","wo":"brydż"},{"tr":"8","wo":"podpórka"},{"tr":"8","wo":"podstawek"}],"examples":[{"what":"noun","row":"the name of a family of US actors, including:.","example":null},{"what":"noun","row":"a structure carrying a road, path, railroad, or canal across a river, ravine, road, railroad, or other obstacle.","example":"a bridge across the river"},{"what":"verb","row":"be a bridge over (something).","example":"a covered walkway that bridged the gardens"}]}',
    ),
    array( // row #648
        'word' => 'revenues', 'pl_PL' => '{"noun":[{"tr":"16","wo":"dochód"},{"tr":"8","wo":"urzędy skarbowe"}],"examples":[{"what":"noun","row":"income, especially when of a company or organization and of a substantial nature.","example":"It would allow De Cairos to keep control of the company and at the same time would allow it to raise substantial revenues ."}]}',
    ),
    array( // row #649
        'word' => 'emphasize', 'pl_PL' => '{"verb":[{"tr":"16","wo":"podkreślać"},{"tr":"16","wo":"położyć nacisk"},{"tr":"8","wo":"akcentować"},{"tr":"8","wo":"uwydatniać"}],"examples":[{"what":"verb","row":"give special importance or prominence to (something) in speaking or writing.","example":"he jabbed a finger into the tabletop to emphasize his point"}]}',
    ),
    array( // row #650
        'word' => 'promotion', 'pl_PL' => '{"noun":[{"tr":"24","wo":"promocja"},{"tr":"24","wo":"awans"},{"tr":"24","wo":"promowanie"},{"tr":"8","wo":"lansowany produkt"},{"tr":"8","wo":"poparcie"},{"tr":"8","wo":"awansowanie"},{"tr":"8","wo":"lansowanie"}],"examples":[{"what":"noun","row":"activity that supports or provides active encouragement for the furtherance of a cause, venture, or aim.","example":"disease prevention and health promotion"}]}',
    ),
    array( // row #651
        'word' => 'Premier', 'pl_PL' => '{"noun":[{"tr":"24","wo":"premier"},{"tr":"8","wo":"sekretarz stanu"}],"adjective":[{"tr":"16","wo":"pierwszy"},{"tr":"8","wo":"najważniejszy"},{"tr":"8","wo":"najwcześniejszy"}],"examples":[{"what":"adjective","row":"first in importance, order, or position; leading.","example":"Germany\'s premier rock band"},{"what":"noun","row":"a prime minister or other head of government.","example":"The premier told the president that failure to co-operate with The Hague would have disastrous consequences for the country."}]}',
    ),
    array( // row #652
        'word' => 'pointing', 'pl_PL' => '{"noun":[{"tr":"16","wo":"wskazywanie"}],"examples":[{"what":"noun","row":"cement or mortar used to fill the joints of brickwork, especially when added externally to a wall to improve its appearance and weatherproofing.","example":"I am satisfied that there was ingress of water from time to time through the defective leadwork of the roof and through open joint pointing between the coping stones of the parapet wall."},{"what":"verb","row":"direct someone\'s attention to the position or direction of something, typically by extending one\'s finger.","example":"the boys were nudging each other and pointing at me"}]}',
    ),
    array( // row #653
        'word' => 'desperate', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"rozpaczliwy"},{"tr":"24","wo":"zdesperowany"},{"tr":"16","wo":"desperacki"},{"tr":"8","wo":"beznadziejny"},{"tr":"8","wo":"straceńczy"},{"tr":"8","wo":"zaciekły"}],"examples":[{"what":"adjective","row":"feeling, showing, or involving a hopeless sense that a situation is so bad as to be impossible to deal with.","example":"a desperate sadness enveloped Ruth"}]}',
    ),
    array( // row #654
        'word' => 'unhappy', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"nieszczęśliwy"},{"tr":"8","wo":"pechowy"},{"tr":"8","wo":"nieudany"},{"tr":"8","wo":"niepomyślny"},{"tr":"8","wo":"niefortunny"},{"tr":"8","wo":"zmartwiony"}],"examples":[{"what":"adjective","row":"not happy.","example":"an unhappy marriage"}]}',
    ),
    array( // row #655
        'word' => 'treaty', 'pl_PL' => '{"noun":[{"tr":"24","wo":"traktat"},{"tr":"16","wo":"porozumienie"},{"tr":"8","wo":"układ polityczny"}],"adjective":[{"tr":"16","wo":"traktatowy"}],"examples":[{"what":"noun","row":"a formally concluded and ratified agreement between countries.","example":"The prince represents Monaco in its foreign relations and signs and ratifies treaties ."}]}',
    ),
    array( // row #656
        'word' => 'Sixth', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"szósty"}],"noun":[{"tr":"24","wo":"szósty"},{"tr":"16","wo":"seksta"}],"examples":[{"what":"","row":"constituting number six in a sequence; 6th.","example":"her sixth novel"}]}',
    ),
    array( // row #657
        'word' => 'handled', 'pl_PL' => '{"verb":[{"tr":"24","wo":"obchodzić się"},{"tr":"8","wo":"manipulować"},{"tr":"8","wo":"operować"},{"tr":"8","wo":"potraktować"},{"tr":"8","wo":"kierować"},{"tr":"8","wo":"dotknąć"},{"tr":"8","wo":"prowadzić interes"},{"tr":"8","wo":"załatwiać interesy"},{"tr":"8","wo":"uporać się z czymś"}],"examples":[{"what":"verb","row":"feel or manipulate with the hands.","example":"heavy paving slabs can be difficult to handle"}]}',
    ),
    array( // row #658
        'word' => 'Liberals', 'pl_PL' => '{"noun":[{"tr":"24","wo":"liberał"}],"examples":[{"what":"noun","row":"a person of liberal views.","example":"Many economic liberals have an optimistic view of economic globalization."}]}',
    ),
    array( // row #659
        'word' => 'released', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wydany"},{"tr":"16","wo":"zwolniony"},{"tr":"16","wo":"wypuszczony"}],"examples":[{"what":"verb","row":"allow or enable to escape from confinement; set free.","example":"the government announced that the prisoners would be released"}]}',
    ),
    array( // row #660
        'word' => 'establishing', 'pl_PL' => '{"noun":[{"tr":"16","wo":"ustanowienie"},{"tr":"8","wo":"założenie"},{"tr":"8","wo":"ustalenie"},{"tr":"8","wo":"utwierdzenie"}],"examples":[{"what":"abbreviation","row":"North Atlantic Treaty Organization.","example":null}]}',
    ),
    array( // row #661
        'word' => 'climate', 'pl_PL' => '{"noun":[{"tr":"24","wo":"klimat"},{"tr":"8","wo":"atmosfera"},{"tr":"8","wo":"aura"}],"examples":[{"what":"noun","row":"the weather conditions prevailing in an area in general or over a long period.","example":"our cold, wet climate"}]}',
    ),
    array( // row #662
        'word' => 'mutual', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"wzajemny"},{"tr":"8","wo":"obopólny"},{"tr":"8","wo":"obustronny"},{"tr":"8","wo":"wspólny"}],"examples":[{"what":"adjective","row":"(of a feeling or action) experienced or done by each of two or more parties toward the other or others.","example":"a partnership based on mutual respect and understanding"}]}',
    ),
    array( // row #663
        'word' => 'retirement', 'pl_PL' => '{"noun":[{"tr":"16","wo":"przejście na emeryturę"},{"tr":"8","wo":"wycofanie się"},{"tr":"8","wo":"odosobnienie"},{"tr":"8","wo":"spoczynek"},{"tr":"8","wo":"ustąpienie"},{"tr":"8","wo":"samotnictwo"},{"tr":"8","wo":"samotność"},{"tr":"8","wo":"odseparowanie się"},{"tr":"8","wo":"odsunięcie się"},{"tr":"8","wo":"usunięcie się"}],"examples":[{"what":"noun","row":"the action or fact of leaving one\'s job and ceasing to work.","example":"a man nearing retirement"}]}',
    ),
    array( // row #664
        'word' => 'sessions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sesja"},{"tr":"16","wo":"posiedzenie"},{"tr":"8","wo":"doznanie"},{"tr":"8","wo":"rok akademicki"},{"tr":"8","wo":"rozprawa sądowa"}],"examples":[{"what":"noun","row":"a meeting of a deliberative or judicial body to conduct its business.","example":"After voting, they returned to their plenary sessions to discuss party business."}]}',
    ),
    array( // row #665
        'word' => 'settlement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"osada"},{"tr":"16","wo":"osiedlenie"},{"tr":"16","wo":"kolonia"},{"tr":"16","wo":"ugoda"},{"tr":"16","wo":"porozumienie"},{"tr":"16","wo":"uregulowanie"},{"tr":"8","wo":"osadzanie"},{"tr":"8","wo":"umowa"},{"tr":"8","wo":"kompromis"},{"tr":"8","wo":"układ"},{"tr":"8","wo":"kolonizacja"},{"tr":"8","wo":"zapis"}],"examples":[{"what":"noun","row":"an official agreement intended to resolve a dispute or conflict.","example":"unions succeeded in reaching a pay settlement"}]}',
    ),
    array( // row #666
        'word' => 'complement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"uzupełnienie"},{"tr":"24","wo":"dopełnienie"},{"tr":"8","wo":"komplet"}],"verb":[{"tr":"24","wo":"uzupełniać"},{"tr":"8","wo":"dopełniać"},{"tr":"8","wo":"kompletować"}],"examples":[{"what":"noun","row":"a thing that completes or brings to perfection.","example":"the libretto proved a perfect complement to the music"},{"what":"verb","row":"add to (something) in a way that enhances or improves it; make perfect.","example":"a classic blazer complements a look that\'s stylish or casual"}]}',
    ),
    array( // row #667
        'word' => 'pulmonary', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"płucny"},{"tr":"8","wo":"płucodyszny"}],"examples":[{"what":"adjective","row":"of or relating to the lungs.","example":"pulmonary blood flow"}]}',
    ),
    array( // row #668
        'word' => 'intermediate', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pośredni"},{"tr":"8","wo":"akcesoryjny"}],"examples":[{"what":"adjective","row":"coming between two things in time, place, order, character, etc..","example":"an intermediate stage of development"},{"what":"verb","row":"act as intermediary; mediate.","example":"the theory said that by intermediating between buyers and sellers, middlemen lower the costs of transactions"},{"what":"noun","row":"an intermediate thing.","example":"Since in evolutionary theory, fully fledged cells had to exist before viruses, the latter are not some evolutionary intermediate between life and non-life."}]}',
    ),
    array( // row #669
        'word' => 'planet', 'pl_PL' => '{"noun":[{"tr":"24","wo":"planeta"},{"tr":"8","wo":"ornat"}],"examples":[{"what":"noun","row":"a celestial body moving in an elliptical orbit around a star.","example":"Kepler showed that a planet moves round the Sun in an elliptical orbit which has the Sun in one of its two foci."}]}',
    ),
    array( // row #670
        'word' => 'fiber', 'pl_PL' => '{"noun":[{"tr":"24","wo":"włókno"},{"tr":"8","wo":"fibra"},{"tr":"8","wo":"struktura"},{"tr":"8","wo":"natura"},{"tr":"8","wo":"charakter"},{"tr":"8","wo":"budowa"}],"examples":[{"what":"noun","row":"a thread or filament from which a vegetable tissue, mineral substance, or textile is formed.","example":"tropical elements like coconut fibers and branches"}]}',
    ),
    array( // row #671
        'word' => 'slept', 'pl_PL' => '{"verb":[{"tr":"24","wo":"spać"},{"tr":"16","wo":"dospać"},{"tr":"16","wo":"przespać"},{"tr":"8","wo":"sypiać"},{"tr":"8","wo":"przenocować"},{"tr":"8","wo":"przekimać"}],"examples":[{"what":"verb","row":"rest by sleeping; be asleep.","example":"she slept for half an hour"}]}',
    ),
    array( // row #672
        'word' => 'clinical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"kliniczny"}],"examples":[{"what":"adjective","row":"of or relating to the observation and treatment of actual patients rather than theoretical or laboratory studies.","example":"clinical medicine"}]}',
    ),
    array( // row #673
        'word' => 'oral', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"doustny"},{"tr":"16","wo":"ustny"}],"examples":[{"what":"adjective","row":"by word of mouth; spoken rather than written.","example":"they had reached an oral agreement"},{"what":"noun","row":"a spoken examination or test.","example":"he was preparing for his orals"}]}',
    ),
    array( // row #674
        'word' => 'traders', 'pl_PL' => '{"noun":[{"tr":"16","wo":"handlowiec"},{"tr":"16","wo":"kupiec"}],"examples":[{"what":"noun","row":"a person who buys and sells goods, currency, or stocks.","example":"Rogue traders who are selling fireworks to kids are likely to find themselves in hot water."}]}',
    ),
    array( // row #675
        'word' => 'laughing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"śmiech"}],"adjective":[{"tr":"16","wo":"roześmiany"},{"tr":"8","wo":"wesoły"}],"examples":[{"what":"verb","row":"make the spontaneous sounds and movements of the face and body that are the instinctive expressions of lively amusement and sometimes also of contempt or derision.","example":"she couldn\'t help laughing at his jokes"}]}',
    ),
    array( // row #676
        'word' => 'summary', 'pl_PL' => '{"noun":[{"tr":"24","wo":"streszczenie"},{"tr":"8","wo":"skrót"},{"tr":"8","wo":"wyciąg"},{"tr":"8","wo":"konspekt"}],"adjective":[{"tr":"8","wo":"zbiorczy"},{"tr":"8","wo":"pobieżny"},{"tr":"8","wo":"sumaryczny"},{"tr":"8","wo":"doraźny"}],"examples":[{"what":"noun","row":"a brief statement or account of the main points of something.","example":"a summary of Chapter Three"},{"what":"adjective","row":"dispensing with needless details or formalities; brief.","example":"summary financial statements"}]}',
    ),
    array( // row #677
        'word' => 'HOLDER', 'pl_PL' => '{"noun":[{"tr":"24","wo":"uchwyt"},{"tr":"24","wo":"posiadacz"},{"tr":"16","wo":"właściciel"},{"tr":"16","wo":"podstawka"},{"tr":"8","wo":"okaziciel"},{"tr":"8","wo":"dzierżawca"},{"tr":"8","wo":"przytrzymywacz"},{"tr":"8","wo":"chwytacz"},{"tr":"8","wo":"rączka"},{"tr":"8","wo":"oprawka"},{"tr":"8","wo":"futerał"},{"tr":"8","wo":"imadło"},{"tr":"8","wo":"użytkownik"},{"tr":"8","wo":"zbiornik"}],"examples":[{"what":"noun","row":"a device or implement for holding something.","example":"the cord retracts easily into its holder"}]}',
    ),
    array( // row #678
        'word' => 'frozen', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"mrożony"},{"tr":"8","wo":"zamarznięty"},{"tr":"8","wo":"skostniały"}],"examples":[{"what":"adjective","row":"(of a ball) resting against another ball or a cushion.","example":null}]}',
    ),
    array( // row #679
        'word' => 'minimal', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"minimalny"},{"tr":"8","wo":"znikomy"}],"examples":[{"what":"adjective","row":"of a minimum amount, quantity, or degree; negligible.","example":"a minimal amount of information"}]}',
    ),
    array( // row #680
        'word' => 'theological', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"teologiczny"}],"examples":[{"what":"adjective","row":"of or relating to the study of theology.","example":"Most of them had no interest whatever in religious doctrine or theological beliefs, she writes."}]}',
    ),
    array( // row #681
        'word' => 'prevented', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zapobiec"},{"tr":"16","wo":"uniemożliwiać"},{"tr":"8","wo":"przeszkadzać"},{"tr":"8","wo":"zażegnać"},{"tr":"8","wo":"przeszkadzać czemuś"},{"tr":"8","wo":"odwracać"}],"examples":[{"what":"verb","row":"keep (something) from happening or arising.","example":"action must be taken to prevent further accidents"}]}',
    ),
    array( // row #682
        'word' => 'roots', 'pl_PL' => '{"noun":[{"tr":"24","wo":"korzeń"},{"tr":"24","wo":"pierwiastek"},{"tr":"16","wo":"źródło"},{"tr":"16","wo":"rdzeń"},{"tr":"8","wo":"nasada"},{"tr":"8","wo":"źródłosłów"},{"tr":"8","wo":"pień"},{"tr":"8","wo":"pierwiastek w matematyce"}],"verb":[{"tr":"16","wo":"kibicować"},{"tr":"8","wo":"zakorzeniać"},{"tr":"8","wo":"zakorzeniać się"},{"tr":"8","wo":"wkorzeniać"}],"examples":[{"what":"noun","row":"the part of a plant that attaches it to the ground or to a support, typically underground, conveying water and nourishment to the rest of the plant via numerous branches and fibers.","example":"cacti have deep and spreading roots"},{"what":"verb","row":"cause (a plant or cutting) to grow roots.","example":"root your own cuttings from stock plants"}]}',
    ),
    array( // row #683
        'word' => 'observation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"obserwacja"},{"tr":"16","wo":"spostrzeżenie"},{"tr":"16","wo":"obserwowanie"},{"tr":"8","wo":"spostrzegawczość"},{"tr":"8","wo":"przyglądanie się"},{"tr":"8","wo":"odezwanie"}],"examples":[{"what":"noun","row":"the action or process of observing something or someone carefully or in order to gain information.","example":"she was brought into the hospital for observation"}]}',
    ),
    array( // row #684
        'word' => 'verbal', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"słowny"},{"tr":"16","wo":"werbalny"},{"tr":"16","wo":"ustny"},{"tr":"8","wo":"dosłowny"},{"tr":"8","wo":"czasownikowy"},{"tr":"8","wo":"odczasownikowy"}],"examples":[{"what":"adjective","row":"relating to or in the form of words.","example":"the root of the problem is visual rather than verbal"},{"what":"noun","row":"a word or words functioning as a verb.","example":null}]}',
    ),
    array( // row #685
        'word' => 'conceived', 'pl_PL' => '{"verb":[{"tr":"16","wo":"pojąć"},{"tr":"16","wo":"począć"},{"tr":"16","wo":"wyobrażać sobie"},{"tr":"8","wo":"powziąć"},{"tr":"8","wo":"wymyślać"},{"tr":"8","wo":"poczuć"},{"tr":"8","wo":"układać"}],"examples":[{"what":"verb","row":"become pregnant with (a child).","example":"she was conceived when her father was 49"}]}',
    ),
    array( // row #686
        'word' => 'supporting', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"wspierający"},{"tr":"8","wo":"podporowy"}],"examples":[{"what":"verb","row":"bear all or part of the weight of; hold up.","example":"the dome was supported by a hundred white columns"}]}',
    ),
    array( // row #687
        'word' => 'imagined', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wyobrażać sobie"},{"tr":"16","wo":"wyobrażać"},{"tr":"8","wo":"przypuszczać"},{"tr":"8","wo":"pomyśleć"},{"tr":"8","wo":"wymyślać"},{"tr":"8","wo":"mniemać"},{"tr":"8","wo":"wyimaginować"},{"tr":"8","wo":"fantazjować"},{"tr":"8","wo":"roić"},{"tr":"8","wo":"uroić sobie"}],"examples":[{"what":"verb","row":"form a mental image or concept of.","example":"imagine a road trip from Philadelphia to Chicago"}]}',
    ),
    array( // row #688
        'word' => 'partisan', 'pl_PL' => '{"noun":[{"tr":"24","wo":"partyzant"},{"tr":"16","wo":"zwolennik"},{"tr":"16","wo":"stronnik"},{"tr":"8","wo":"poplecznik"},{"tr":"8","wo":"adherent"}],"examples":[{"what":"adjective","row":"prejudiced in favor of a particular cause.","example":"newspapers have become increasingly partisan"},{"what":"noun","row":"a strong supporter of a party, cause, or person.","example":"Also, the fact that party partisans are put in charge of running the elections is crazy and is an obvious conflict of interest."}]}',
    ),
    array( // row #689
        'word' => 'occurs', 'pl_PL' => '{"verb":[{"tr":"16","wo":"występować"},{"tr":"16","wo":"nastąpić"},{"tr":"16","wo":"pojawić się"},{"tr":"16","wo":"mieć miejsce"},{"tr":"16","wo":"być"},{"tr":"8","wo":"zdarzać się"},{"tr":"8","wo":"stać się"},{"tr":"8","wo":"przypadać"},{"tr":"8","wo":"znajdować się"},{"tr":"8","wo":"przydarzyć się"},{"tr":"8","wo":"przyjść na myśl"},{"tr":"8","wo":"wydarzać się"},{"tr":"8","wo":"przytrafić się"},{"tr":"8","wo":"trafić się"}],"examples":[{"what":"verb","row":"happen; take place.","example":"the accident occurred at about 3:30 p.m."}]}',
    ),
    array( // row #690
        'word' => 'outdoor', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"na wolnym powietrzu"}],"adjective":[{"tr":"16","wo":"plenerowy"},{"tr":"16","wo":"zewnętrzny"},{"tr":"8","wo":"wyjściowy"}],"examples":[{"what":"adjective","row":"done, situated, or used out of doors.","example":"a huge outdoor concert"}]}',
    ),
    array( // row #691
        'word' => 'concepts', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pojęcie"},{"tr":"16","wo":"pomysł"}],"examples":[{"what":"noun","row":"an abstract idea; a general notion.","example":"structuralism is a difficult concept"}]}',
    ),
    array( // row #692
        'word' => 'Germans', 'pl_PL' => '{"noun":[{"tr":"16","wo":"Niemiec"},{"tr":"8","wo":"język niemiecki"},{"tr":"8","wo":"niemiecczyzna"}],"examples":[{"what":"noun","row":"a native or inhabitant of Germany.","example":"First taken by the British, it was lost next day to the Germans by the Americans who failed to retake it."}]}',
    ),
    array( // row #693
        'word' => 'Chin', 'pl_PL' => '{"noun":[{"tr":"24","wo":"podbródek"},{"tr":"24","wo":"broda"}],"examples":[{"what":"noun","row":"the protruding part of the face below the mouth, formed by the apex of the lower jaw.","example":"Typical adult females have smaller jaws, noses, and chins , and thus eyes and cheekbones that are more prominent and appear to be larger than in typical males."},{"what":"verb","row":"draw one\'s body up so as to bring one\'s chin level with or above (a horizontal bar) with one\'s feet off the ground, as an exercise.","example":"From the very start of his bodybuilding career, the Oak made chinning a priority in his workouts."}]}',
    ),
    array( // row #694
        'word' => 'scholars', 'pl_PL' => '{"noun":[{"tr":"24","wo":"uczony"},{"tr":"16","wo":"naukowiec"},{"tr":"16","wo":"stypendysta"},{"tr":"16","wo":"badacz"},{"tr":"16","wo":"erudyta"},{"tr":"8","wo":"humanista"}],"examples":[{"what":"noun","row":"a specialist in a particular branch of study, especially the humanities; a distinguished academic.","example":"a Hebrew scholar"}]}',
    ),
    array( // row #695
        'word' => 'seconds', 'pl_PL' => '{"noun":[{"tr":"8","wo":"towary drugiej jakości"}],"examples":[{"what":"noun","row":"a sixtieth of a minute of time, which as the SI unit of time is defined in terms of the natural periodicity of the radiation of a cesium-133 atom.","example":"Torrance squeezed the trigger, waited twenty five seconds and fired again."},{"what":"verb","row":"formally support or endorse (a nomination or resolution or its proposer) as a necessary preliminary to adoption or further discussion.","example":"Bertonazzi seconded Birmingham\'s nomination"}]}',
    ),
    array( // row #696
        'word' => 'scope', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zakres"},{"tr":"16","wo":"zasięg"},{"tr":"8","wo":"cel"},{"tr":"8","wo":"dziedzina"},{"tr":"8","wo":"kompetencja"},{"tr":"8","wo":"pole działania"},{"tr":"8","wo":"pole"},{"tr":"8","wo":"resort"},{"tr":"8","wo":"rozległość"},{"tr":"8","wo":"skala"}],"examples":[{"what":"noun","row":"the extent of the area or subject matter that something deals with or to which it is relevant.","example":"we widened the scope of our investigation"},{"what":"verb","row":"assess or investigate (something).","example":"they\'d scoped out their market"}]}',
    ),
    array( // row #697
        'word' => 'fluid', 'pl_PL' => '{"noun":[{"tr":"24","wo":"płyn"},{"tr":"16","wo":"fluid"},{"tr":"16","wo":"ciecz"}],"adjective":[{"tr":"16","wo":"płynny"},{"tr":"8","wo":"ciekły"},{"tr":"8","wo":"nie ustalony"}],"examples":[{"what":"adjective","row":"(of a substance) able to flow easily.","example":"the paint is more fluid than tube watercolors"},{"what":"noun","row":"a substance that has no fixed shape and yields easily to external pressure; a gas or (especially) a liquid.","example":"we all need several glasses of fluid a day"}]}',
    ),
    array( // row #698
        'word' => 'consisting', 'pl_PL' => '{"verb":[{"tr":"24","wo":"składać się"},{"tr":"16","wo":"polegać"},{"tr":"8","wo":"zgodzić się"}],"examples":[{"what":"verb","row":"be composed or made up of.","example":"the exhibition consists of 180 drawings"}]}',
    ),
    array( // row #699
        'word' => 'utterly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"całkowicie"},{"tr":"24","wo":"zupełnie"},{"tr":"16","wo":"kompletnie"},{"tr":"16","wo":"absolutnie"},{"tr":"16","wo":"bezwzględnie"},{"tr":"16","wo":"doszczętnie"},{"tr":"8","wo":"z kretesem"},{"tr":"8","wo":"dokumentnie"}],"examples":[{"what":"adverb","row":"completely and without qualification; absolutely.","example":"he looked utterly ridiculous"}]}',
    ),
    array( // row #700
        'word' => 'marriages', 'pl_PL' => '{"noun":[{"tr":"24","wo":"małżeństwo"},{"tr":"24","wo":"ślub"},{"tr":"8","wo":"żeniaczka"},{"tr":"8","wo":"ożenek"},{"tr":"8","wo":"zamążpójście"},{"tr":"8","wo":"połączenie"},{"tr":"8","wo":"mariasz"}],"examples":[{"what":"noun","row":"the formal union of a man and a woman, typically recognized by law, by which they become husband and wife.","example":"a happy marriage"}]}',
    ),
    array( // row #701
        'word' => 'mirror', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lustro"},{"tr":"16","wo":"zwierciadło"},{"tr":"8","wo":"odbicie"}],"verb":[{"tr":"8","wo":"odzwierciedlić"}],"examples":[{"what":"noun","row":"a reflective surface, now typically of glass coated with a metal amalgam, that reflects a clear image.","example":"As the steam in the bathroom began to vent, the mirror cleared and his image appeared before him."},{"what":"verb","row":"(of a reflective surface) show a reflection of.","example":"the clear water mirrored the sky"}]}',
    ),
    array( // row #702
        'word' => 'ranch', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ranczo"},{"tr":"8","wo":"ferma"},{"tr":"8","wo":"farma hodowlana"}],"verb":[{"tr":"8","wo":"prowadzić ranczo"}],"examples":[{"what":"noun","row":"a large farm, especially in the western US and Canada, where cattle or other animals are bred and raised.","example":"Most of them are being raised like cattle on big ranches to provide beef for buffalo burgers."},{"what":"verb","row":"run a ranch.","example":"cattle ranching"}]}',
    ),
    array( // row #703
        'word' => 'upward', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"w górę"},{"tr":"24","wo":"do góry"},{"tr":"8","wo":"wzwyż"}],"adjective":[{"tr":"8","wo":"skierowany ku górze"},{"tr":"8","wo":"zwyżkowy"}],"examples":[{"what":"adjective","row":"moving, pointing, or leading to a higher place, point, or level.","example":"an upward trend in sales"},{"what":"adverb","row":"toward a higher place, point, or level.","example":"she peered upward at the sky"}]}',
    ),
    array( // row #704
        'word' => 'reserved', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zastrzeżony"},{"tr":"24","wo":"zarezerwowany"},{"tr":"16","wo":"powściągliwy"},{"tr":"8","wo":"umiarkowany"},{"tr":"8","wo":"zamknięty"},{"tr":"8","wo":"niegadatliwy"},{"tr":"8","wo":"nierozmowny"},{"tr":"8","wo":"oficjalny"},{"tr":"8","wo":"chłodny"},{"tr":"8","wo":"oziębły"}],"examples":[{"what":"adjective","row":"slow to reveal emotion or opinions.","example":"he is a reserved, almost taciturn man"}]}',
    ),
    array( // row #705
        'word' => 'wings', 'pl_PL' => '{"noun":[{"tr":"24","wo":"skrzydełka"},{"tr":"8","wo":"kulisy w teatrze"}],"examples":[{"what":"noun","row":"the state of great comfort and extravagant living.","example":"he lived a life of luxury"},{"what":"adjective","row":"luxurious or of the nature of a luxury.","example":"a luxury yacht"}]}',
    ),
    array( // row #706
        'word' => 'restrictions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ograniczenie"},{"tr":"16","wo":"restrykcja"},{"tr":"8","wo":"zwężenie"},{"tr":"8","wo":"ścieśnienie"}],"examples":[{"what":"noun","row":"a limiting condition or measure, especially a legal one.","example":"planning restrictions on commercial development"}]}',
    ),
    array( // row #707
        'word' => 'luxury', 'pl_PL' => '{"noun":[{"tr":"24","wo":"luksus"},{"tr":"8","wo":"przepych"},{"tr":"8","wo":"zbytek"},{"tr":"8","wo":"rozkosz"},{"tr":"8","wo":"wykwint"}],"adjective":[{"tr":"24","wo":"luksusowy"}],"examples":[{"what":"noun","row":"the state of great comfort and extravagant living.","example":"he lived a life of luxury"},{"what":"adjective","row":"luxurious or of the nature of a luxury.","example":"a luxury yacht"}]}',
    ),
    array( // row #708
        'word' => 'enemies', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wróg"},{"tr":"24","wo":"nieprzyjaciel"},{"tr":"16","wo":"przeciwnik"}],"examples":[{"what":"noun","row":"a person who is actively opposed or hostile to someone or something.","example":"She was still my sworn enemy who was trying to tear me down in whatever way possible."}]}',
    ),
    array( // row #709
        'word' => 'distributed', 'pl_PL' => '{"verb":[{"tr":"16","wo":"rozkładać"},{"tr":"16","wo":"rozprowadzać"},{"tr":"16","wo":"rozdzielać"},{"tr":"16","wo":"rozmieścić"},{"tr":"16","wo":"rozdać"},{"tr":"8","wo":"dzielić"},{"tr":"8","wo":"kolportować"},{"tr":"8","wo":"rozrzucać"},{"tr":"8","wo":"obdzielać"},{"tr":"8","wo":"rozlokować"},{"tr":"8","wo":"rozkolportować"},{"tr":"8","wo":"roznieść"},{"tr":"8","wo":"rozdarować"},{"tr":"8","wo":"rozsiedlać"}],"examples":[{"what":"verb","row":"give shares of (something); deal out.","example":"information leaflets are being distributed to hotels and guest houses"}]}',
    ),
    array( // row #710
        'word' => 'Trustees', 'pl_PL' => '{"noun":[{"tr":"8","wo":"opieka"}],"examples":[{"what":"noun","row":"an individual person or member of a board given control or powers of administration of property in trust with a legal obligation to administer it solely for the purposes specified.","example":"Lawyers and trustees have statutory and other legal obligations but are still fiduciaries."}]}',
    ),
    array( // row #711
        'word' => 'submarine', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"podwodny"},{"tr":"16","wo":"podmorski"}],"noun":[{"tr":"24","wo":"łódź podwodna"}],"examples":[{"what":"adjective","row":"existing, occurring, done, or used under the surface of the sea.","example":"submarine volcanic activity"},{"what":"noun","row":"a warship with a streamlined hull designed to operate completely submerged in the sea for long periods, equipped with an internal store of air and a periscope and typically armed with torpedoes and\\/or missiles.","example":"It is common now for Orthodox priests to baptize and sanctify warships, submarines , missiles, and tanks."}]}',
    ),
    array( // row #712
        'word' => 'Greenwich', 'pl_PL' => '{"noun":[{"tr":"8","wo":"Greenwicz"}],"examples":[{"what":"noun","row":"a London borough on the southern bank of the Thames River.","example":null}]}',
    ),
    array( // row #713
        'word' => 'suite', 'pl_PL' => '{"noun":[{"tr":"24","wo":"garnitur"},{"tr":"16","wo":"kolor"},{"tr":"16","wo":"ubranie"},{"tr":"16","wo":"petycja"},{"tr":"16","wo":"komplet"},{"tr":"8","wo":"proces"},{"tr":"8","wo":"zestaw"}],"verb":[{"tr":"24","wo":"pasować"},{"tr":"16","wo":"dostosować"},{"tr":"16","wo":"odpowiadać"},{"tr":"8","wo":"przystosować"},{"tr":"8","wo":"służyć"}],"examples":[{"what":"noun","row":"a set of outer clothes made of the same fabric and designed to be worn together, typically consisting of a jacket and trousers or a jacket and skirt.","example":"Choose jackets, tailored suits and shirtwaist dresses with straight, classic cuts."},{"what":"verb","row":"be convenient for or acceptable to.","example":"he lied whenever it suited him"}]}',
    ),
    array( // row #714
        'word' => 'festival', 'pl_PL' => '{"noun":[{"tr":"24","wo":"festiwal"},{"tr":"24","wo":"święto"},{"tr":"8","wo":"obchód"}],"adjective":[{"tr":"8","wo":"świąteczny"},{"tr":"8","wo":"obchodowy"}],"examples":[{"what":"noun","row":"a day or period of celebration, typically a religious commemoration.","example":"a tabulation of saints\' days and other festivals"}]}',
    ),
    array( // row #715
        'word' => 'publicity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"reklama"},{"tr":"24","wo":"rozgłos"},{"tr":"8","wo":"propagandowość"},{"tr":"8","wo":"propaganda"}],"examples":[{"what":"noun","row":"the notice or attention given to someone or something by the media.","example":"the case attracted wide publicity in the press"}]}',
    ),
    array( // row #716
        'word' => 'dynamic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"dynamiczny"}],"examples":[{"what":"adjective","row":"(of a process or system) characterized by constant change, activity, or progress.","example":"a dynamic economy"},{"what":"noun","row":"a force that stimulates change or progress within a system or process.","example":"evaluation is part of the basic dynamic of the project"}]}',
    ),
    array( // row #717
        'word' => 'respond', 'pl_PL' => '{"verb":[{"tr":"16","wo":"odpowiadać"},{"tr":"16","wo":"zareagować"},{"tr":"8","wo":"odezwać się"},{"tr":"8","wo":"odczytać"}],"noun":[{"tr":"8","wo":"responsorium"},{"tr":"8","wo":"półfilar"}],"examples":[{"what":"verb","row":"say something in reply.","example":"she could not get Robert to respond to her words"},{"what":"noun","row":"a half-pillar or half-pier attached to a wall to support an arch, especially at the end of an arcade.","example":"The E and W responds of both nave arcades are Romanesque."}]}',
    ),
    array( // row #718
        'word' => 'passes', 'pl_PL' => '{"noun":[{"tr":"24","wo":"podanie"},{"tr":"16","wo":"przełęcz"},{"tr":"16","wo":"przepustka"},{"tr":"16","wo":"przejście"},{"tr":"16","wo":"farwater"}],"verb":[{"tr":"16","wo":"przechodzić"},{"tr":"16","wo":"przejechać"},{"tr":"16","wo":"przebrzmieć"},{"tr":"8","wo":"mijać"},{"tr":"8","wo":"wydać"},{"tr":"8","wo":"przyjąć"},{"tr":"8","wo":"przepuszczać"}],"examples":[{"what":"noun","row":"an act or instance of moving past or through something.","example":"repeated passes with the swipe card"},{"what":"verb","row":"move or cause to move in a specified direction.","example":"he passed through towns and villages"}]}',
    ),
    array( // row #719
        'word' => 'magnificent', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wspaniały"},{"tr":"16","wo":"okazały"},{"tr":"8","wo":"imponujący"},{"tr":"8","wo":"przepyszny"},{"tr":"8","wo":"przewspaniały"},{"tr":"8","wo":"prześwietny"},{"tr":"8","wo":"bajkowy"},{"tr":"8","wo":"wyborowy"},{"tr":"8","wo":"wystawny"}],"examples":[{"what":"adjective","row":"impressively beautiful, elaborate, or extravagant; striking.","example":"a dramatic landscape of magnificent mountains"}]}',
    ),
    array( // row #720
        'word' => 'injury', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szkoda"},{"tr":"16","wo":"zranienie"},{"tr":"8","wo":"krzywda"},{"tr":"8","wo":"urażenie"},{"tr":"8","wo":"defekt"},{"tr":"8","wo":"naruszenie"},{"tr":"8","wo":"ranienie"},{"tr":"8","wo":"rana"},{"tr":"8","wo":"poranienie"},{"tr":"8","wo":"okaleczenie"},{"tr":"8","wo":"pokaleczenie"},{"tr":"8","wo":"rozbicie się"},{"tr":"8","wo":"stłuczenie"},{"tr":"8","wo":"szwank"}],"examples":[{"what":"noun","row":"an instance of being injured.","example":"she suffered an injury to her back"}]}',
    ),
    array( // row #721
        'word' => 'flew', 'pl_PL' => '{"verb":[{"tr":"24","wo":"latać"},{"tr":"16","wo":"lecieć"},{"tr":"16","wo":"polecieć"},{"tr":"8","wo":"przylecieć"},{"tr":"8","wo":"fruwać"},{"tr":"8","wo":"uciec"},{"tr":"8","wo":"frunąć"},{"tr":"8","wo":"unieść się"},{"tr":"8","wo":"przewieźć samolotem"},{"tr":"8","wo":"zalecieć"},{"tr":"8","wo":"powiać"}],"examples":[{"what":"verb","row":"(of a bird or other winged creature) move through the air under control.","example":"close the door or the moths will fly in"}]}',
    ),
    array( // row #722
        'word' => 'Surrounding', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"otaczający"},{"tr":"8","wo":"okoliczny"},{"tr":"8","wo":"dookolny"}],"examples":[{"what":"adjective","row":"all around a particular place or thing.","example":"the surrounding countryside"},{"what":"verb","row":"be all around (someone or something).","example":"the hotel is surrounded by its own gardens"}]}',
    ),
    array( // row #723
        'word' => 'port', 'pl_PL' => '{"noun":[{"tr":"24","wo":"port"},{"tr":"8","wo":"przystań"},{"tr":"8","wo":"brama"},{"tr":"8","wo":"otwór ładunkowy"},{"tr":"8","wo":"iluminator"},{"tr":"8","wo":"lewa burta"},{"tr":"8","wo":"bakbort"},{"tr":"8","wo":"porta"},{"tr":"8","wo":"porto"}],"adjective":[{"tr":"24","wo":"portowy"},{"tr":"8","wo":"przystaniowy"}],"examples":[{"what":"noun","row":"a town or city with a harbor where ships load or unload, especially one where customs officers are stationed.","example":"Over 33 ships are waiting at Colombian ports to load and unload cargo."},{"what":"verb","row":"turn (a ship or its helm) to port.","example":"The captain slowed and ported the vessel to pass around the monolith, and everyone took a good look at the horrid idol."}]}',
    ),
    array( // row #724
        'word' => 'ours', 'pl_PL' => '{"pronoun":[{"tr":"24","wo":"nasz"}],"examples":[{"what":"pronoun","row":"used to refer to a thing or things belonging to or associated with the speaker and one or more other people previously mentioned or easily identified.","example":"ours was the ugliest house on the block"}]}',
    ),
    array( // row #725
        'word' => 'Victim', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ofiara"},{"tr":"16","wo":"poszkodowany"}],"examples":[{"what":"noun","row":"a person harmed, injured, or killed as a result of a crime, accident, or other event or action.","example":"Here is the man who is first to raise money or organise events to help victims of crime or the needy, a man with human compassion."}]}',
    ),
    array( // row #726
        'word' => 'reorganization', 'pl_PL' => '{"noun":[{"tr":"24","wo":"reorganizacja"},{"tr":"8","wo":"reorganizowanie"},{"tr":"8","wo":"przeorganizowanie"},{"tr":"8","wo":"reforma"},{"tr":"8","wo":"przestawienie"}],"examples":[{"what":"noun","row":"fighting between armed forces.","example":"men killed in combat"},{"what":"verb","row":"take action to reduce, destroy, or prevent (something undesirable).","example":"an effort to combat drug trafficking"}]}',
    ),
    array( // row #727
        'word' => 'combat', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"bojowy"}],"noun":[{"tr":"24","wo":"walka"},{"tr":"8","wo":"bój"},{"tr":"8","wo":"bitwa"},{"tr":"8","wo":"harc"}],"verb":[{"tr":"16","wo":"walczyć"},{"tr":"8","wo":"tępić"},{"tr":"8","wo":"wojować"},{"tr":"8","wo":"sprzeciwiać się"}],"examples":[{"what":"noun","row":"fighting between armed forces.","example":"men killed in combat"},{"what":"verb","row":"take action to reduce, destroy, or prevent (something undesirable).","example":"an effort to combat drug trafficking"}]}',
    ),
    array( // row #728
        'word' => 'publicly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"publicznie"},{"tr":"8","wo":"jawnie"}],"examples":[{"what":"adverb","row":"so as to be seen by other people; in public.","example":"some weep publicly"}]}',
    ),
    array( // row #729
        'word' => 'shopping', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zakupy"}],"examples":[{"what":"noun","row":"the purchasing of goods from stores.","example":"a busy shopping area"}]}',
    ),
    array( // row #730
        'word' => 'profound', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"głęboki"},{"tr":"8","wo":"zupełny"},{"tr":"8","wo":"całkowity"},{"tr":"8","wo":"dogłębny"},{"tr":"8","wo":"gruntowny"},{"tr":"8","wo":"wyczerpujący"},{"tr":"8","wo":"intensywny"}],"examples":[{"what":"adjective","row":"(of a state, quality, or emotion) very great or intense.","example":"profound social changes"},{"what":"noun","row":"the vast depth of the ocean or of the mind.","example":null}]}',
    ),
    array( // row #731
        'word' => 'critics', 'pl_PL' => '{"noun":[{"tr":"24","wo":"krytyk"},{"tr":"8","wo":"sędzia"},{"tr":"8","wo":"recenzent"}],"examples":[{"what":"noun","row":"a person who expresses an unfavorable opinion of something.","example":"critics say many schools are not prepared to handle the influx of foreign students"}]}',
    ),
    array( // row #732
        'word' => 'scattered', 'pl_PL' => '{"adjective":[{"tr":"8","wo":"rozsiany"},{"tr":"8","wo":"porozrzucany"},{"tr":"8","wo":"rozsiadły"},{"tr":"8","wo":"rzadki"}],"examples":[{"what":"verb","row":"throw in various random directions.","example":"scatter the coconut over the icing"}]}',
    ),
    array( // row #733
        'word' => 'placing', 'pl_PL' => '{"verb":[{"tr":"16","wo":"umieszczać"},{"tr":"16","wo":"postawić"},{"tr":"8","wo":"położyć"},{"tr":"8","wo":"wstawić"},{"tr":"8","wo":"pomieścić"},{"tr":"8","wo":"kłaść"},{"tr":"8","wo":"ustawiać"},{"tr":"8","wo":"wkładać"},{"tr":"8","wo":"rozmieścić"},{"tr":"8","wo":"zamieszczać"},{"tr":"8","wo":"zlokalizować"},{"tr":"8","wo":"układać"}],"examples":[{"what":"verb","row":"put in a particular position.","example":"a newspaper had been placed beside my plate"}]}',
    ),
    array( // row #734
        'word' => 'absolutely', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"absolutnie"},{"tr":"24","wo":"całkowicie"},{"tr":"16","wo":"zupełnie"},{"tr":"8","wo":"bezwarunkowo"},{"tr":"8","wo":"stanowczo"}],"examples":[{"what":"adverb","row":"with no qualification, restriction, or limitation; totally.","example":"she trusted him absolutely"}]}',
    ),
    array( // row #735
        'word' => 'requirement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wymaganie"},{"tr":"16","wo":"warunek"},{"tr":"8","wo":"żądanie"},{"tr":"8","wo":"postulat"}],"examples":[{"what":"noun","row":"a thing that is needed or wanted.","example":"choose the type of window that suits your requirements best"}]}',
    ),
    array( // row #736
        'word' => 'sphere', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kula"},{"tr":"24","wo":"sfera"},{"tr":"8","wo":"gałka"},{"tr":"8","wo":"balon"},{"tr":"8","wo":"bania"},{"tr":"8","wo":"bomba"},{"tr":"8","wo":"domena"},{"tr":"8","wo":"glob"},{"tr":"8","wo":"orbita"},{"tr":"8","wo":"niwa"},{"tr":"8","wo":"obręb"},{"tr":"8","wo":"dziedzina"},{"tr":"8","wo":"kompetencja"},{"tr":"8","wo":"zakres"}],"examples":[{"what":"noun","row":"a round solid figure, or its surface, with every point on its surface equidistant from its center.","example":"There\'s a particularly good 3D Objects tool, which lets you create modelled spheres , cubes, rectangles cones, pyramids, toroids and more effortlessly."},{"what":"verb","row":"enclose in or as if in a sphere.","example":null}]}',
    ),
    array( // row #737
        'word' => 'permits', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zezwolenie"},{"tr":"24","wo":"pozwolenie"},{"tr":"8","wo":"przepustka"}],"verb":[{"tr":"16","wo":"pozwolić"},{"tr":"8","wo":"zezwalać"},{"tr":"8","wo":"dozwolić"},{"tr":"8","wo":"dopuszczać"}],"examples":[{"what":"noun","row":"an official document giving someone authorization to do something.","example":"he is only in Britain on a work permit"},{"what":"verb","row":"give authorization or consent to (someone) to do something.","example":"the law permits councils to monitor any factory emitting smoke"}]}',
    ),
    array( // row #738
        'word' => 'pistol', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pistolet"},{"tr":"16","wo":"rewolwer"}],"adjective":[{"tr":"24","wo":"pistoletowy"},{"tr":"8","wo":"rewolwerowy"}],"verb":[{"tr":"8","wo":"zastrzelić z pistoletu"}],"examples":[{"what":"noun","row":"a small firearm designed to be held in one hand.","example":"Williams was carrying a loaded air pistol in his pocket."},{"what":"verb","row":"shoot (someone) with a pistol.","example":"In fact he pistolled the wounded Fraser at Culloden and the officers celebrated by splashing themselves in Highland blood."}]}',
    ),
    array( // row #739
        'word' => 'motive', 'pl_PL' => '{"noun":[{"tr":"24","wo":"motyw"},{"tr":"8","wo":"powód"},{"tr":"8","wo":"pobudka"},{"tr":"8","wo":"bodziec"}],"adjective":[{"tr":"8","wo":"poruszający"},{"tr":"8","wo":"ruchowy"},{"tr":"8","wo":"napędowy"},{"tr":"8","wo":"pędny"}],"examples":[{"what":"adjective","row":"producing physical or mechanical motion.","example":"the charge of gas is the motive force for every piston stroke"},{"what":"noun","row":"a reason for doing something, especially one that is hidden or not obvious.","example":"a motive for his murder"}]}',
    ),
    array( // row #740
        'word' => 'veteran', 'pl_PL' => '{"noun":[{"tr":"24","wo":"weteran"}],"examples":[{"what":"noun","row":"a person who has had long experience in a particular field.","example":"The new players have provided tough competition to the veterans in the field."}]}',
    ),
    array( // row #741
        'word' => 'voted', 'pl_PL' => '{"verb":[{"tr":"24","wo":"głosować"}],"examples":[{"what":"verb","row":"give or register a vote.","example":"they voted against the resolution"}]}',
    ),
    array( // row #742
        'word' => 'responses', 'pl_PL' => '{"noun":[{"tr":"24","wo":"odpowiedź"},{"tr":"16","wo":"reakcja"},{"tr":"16","wo":"reagowanie"},{"tr":"8","wo":"odzew"},{"tr":"8","wo":"oddźwięk"},{"tr":"8","wo":"echo"},{"tr":"8","wo":"odezwanie się"}],"examples":[{"what":"noun","row":"a verbal or written answer.","example":"without waiting for a response, she returned to her newspaper"}]}',
    ),
    array( // row #743
        'word' => 'operated', 'pl_PL' => '{"verb":[{"tr":"24","wo":"działać"},{"tr":"16","wo":"obsługiwać"},{"tr":"16","wo":"operować"},{"tr":"16","wo":"eksploatować"},{"tr":"8","wo":"obowiązywać"},{"tr":"8","wo":"krajać"},{"tr":"8","wo":"spekulować"}],"examples":[{"what":"verb","row":"(of a person) control the functioning of (a machine, process, or system).","example":"a shortage of workers to operate new machines"}]}',
    ),
    array( // row #744
        'word' => 'polynomial', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wielomian"}],"examples":[{"what":"adjective","row":"consisting of several terms.","example":"Plants and animals were given long, polynomial Latin names."},{"what":"noun","row":"an expression of more than two algebraic terms, especially the sum of several terms that contain different powers of the same variable(s).","example":"The papers look at algebraic curves, the Riemann Roch theorem and algebraic polynomials ."}]}',
    ),
    array( // row #745
        'word' => 'sergeant', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sierżant"},{"tr":"8","wo":"feldfebel"}],"examples":[{"what":"noun","row":"a noncommissioned officer in the armed forces, in particular (in the US Army or Marine Corps) an NCO ranking above corporal and below staff sergeant, or (in the US Air Force) an NCO ranking above airman and below staff sergeant.","example":"Because of the increased number of volunteer soldiers, the ministry will phase out recruitment of non-commissioned officers, including air force and army sergeants and naval petty officers."}]}',
    ),
    array( // row #746
        'word' => 'drugs', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lek"},{"tr":"24","wo":"narkotyk"},{"tr":"8","wo":"specyfik"}],"verb":[{"tr":"8","wo":"narkotyzować się"},{"tr":"8","wo":"ćpać"}],"examples":[{"what":"noun","row":"a medicine or other substance which has a physiological effect when ingested or otherwise introduced into the body.","example":"a new drug aimed at sufferers from Parkinson\'s disease"},{"what":"verb","row":"administer a drug to (someone) in order to induce stupor or insensibility.","example":"they were drugged to keep them quiet"}]}',
    ),
    array( // row #747
        'word' => 'Stained', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"barwiony"}],"examples":[{"what":"verb","row":"mark (something) with colored patches or dirty marks that are not easily removed.","example":"her clothing was stained with blood"}]}',
    ),
    array( // row #748
        'word' => 'bullet', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pocisk"},{"tr":"24","wo":"kula"},{"tr":"8","wo":"kulka"}],"examples":[{"what":"noun","row":"a projectile for firing from a rifle, revolver, or other small firearm, typically made of metal, cylindrical and pointed, and sometimes containing an explosive.","example":"She said authorities also found in the car automatic rifles, bullet cartridges, plastic explosives and other materials."}]}',
    ),
    array( // row #749
        'word' => 'participate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"uczestniczyć"},{"tr":"16","wo":"brać udział"},{"tr":"8","wo":"współuczestniczyć"},{"tr":"8","wo":"partycypować"},{"tr":"8","wo":"dzielić"},{"tr":"8","wo":"podzielić się z kimś czymś"}],"examples":[{"what":"verb","row":"take part.","example":"thousands participated in a nationwide strike"}]}',
    ),
    array( // row #750
        'word' => 'dried', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"wysuszony"},{"tr":"16","wo":"zasuszony"},{"tr":"8","wo":"makartowski"}],"examples":[{"what":"adjective","row":"deserving effort, attention, or respect.","example":"generous donations to worthy causes"},{"what":"noun","row":"a person notable or important in a particular sphere.","example":"schools governed by local worthies"}]}',
    ),
    array( // row #751
        'word' => 'worthy', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"godny"},{"tr":"8","wo":"przezacny"},{"tr":"8","wo":"zasługujący na szacunek"},{"tr":"8","wo":"poczciwy"},{"tr":"8","wo":"stosowny"},{"tr":"8","wo":"cnotliwy"}],"examples":[{"what":"adjective","row":"deserving effort, attention, or respect.","example":"generous donations to worthy causes"},{"what":"noun","row":"a person notable or important in a particular sphere.","example":"schools governed by local worthies"}]}',
    ),
    array( // row #752
        'word' => 'rhythm', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rytm"},{"tr":"8","wo":"miarowość"}],"examples":[{"what":"noun","row":"a strong, regular, repeated pattern of movement or sound.","example":"Ruth listened to the rhythm of his breathing"}]}',
    ),
    array( // row #753
        'word' => 'sensitivity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wrażliwość"},{"tr":"8","wo":"tkliwość"}],"examples":[{"what":"noun","row":"the quality or condition of being sensitive.","example":"a lack of common decency and sensitivity"}]}',
    ),
    array( // row #754
        'word' => 'passion', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pasja"},{"tr":"16","wo":"namiętność"},{"tr":"8","wo":"gorączka miłości"},{"tr":"8","wo":"płomienność uczuć"},{"tr":"8","wo":"zaciekłość"},{"tr":"8","wo":"zapamiętanie"},{"tr":"8","wo":"zapamiętałość"}],"examples":[{"what":"noun","row":"strong and barely controllable emotion.","example":"a man of impetuous passion"}]}',
    ),
    array( // row #755
        'word' => 'committed', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zobowiązany"}],"examples":[{"what":"adjective","row":"feeling dedication and loyalty to a cause, activity, or job; wholeheartedly dedicated.","example":"a committed reformer"},{"what":"verb","row":"carry out or perpetrate (a mistake, crime, or immoral act).","example":"he committed an uncharacteristic error"}]}',
    ),
    array( // row #756
        'word' => 'judgments', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wyrok"},{"tr":"24","wo":"orzeczenie"},{"tr":"16","wo":"sąd"},{"tr":"8","wo":"opinia"},{"tr":"8","wo":"rozsądek"},{"tr":"8","wo":"rozum"},{"tr":"8","wo":"zdanie"},{"tr":"8","wo":"osądzenie"}],"examples":[{"what":"noun","row":"the ability to make considered decisions or come to sensible conclusions.","example":"an error of judgment"}]}',
    ),
    array( // row #757
        'word' => 'clarity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"czystość"},{"tr":"24","wo":"przejrzystość"},{"tr":"16","wo":"klarowność"}],"examples":[{"what":"noun","row":"the quality of being clear, in particular.","example":null}]}',
    ),
    array( // row #758
        'word' => 'valid', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ważny"},{"tr":"8","wo":"przekonywający"},{"tr":"8","wo":"obowiązujący"},{"tr":"8","wo":"uzasadniony"},{"tr":"8","wo":"słuszny"}],"examples":[{"what":"adjective","row":"(of an argument or point) having a sound basis in logic or fact; reasonable or cogent.","example":"a valid criticism"}]}',
    ),
    array( // row #759
        'word' => 'consistent', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zgodny"},{"tr":"16","wo":"konsekwentny"},{"tr":"8","wo":"logiczny"},{"tr":"8","wo":"zwarty"},{"tr":"8","wo":"zwięzły"}],"examples":[{"what":"adjective","row":"(of a person, behavior, or process) unchanging in achievement or effect over a period of time.","example":"manufacturing processes require a consistent approach"}]}',
    ),
    array( // row #760
        'word' => 'prayer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"modlitwa"},{"tr":"8","wo":"człowiek modlący się"},{"tr":"8","wo":"pacierz"}],"examples":[{"what":"noun","row":"a solemn request for help or expression of thanks addressed to God or an object of worship.","example":"I\'ll say a prayer for him"}]}',
    ),
    array( // row #761
        'word' => 'humanity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ludzkość"},{"tr":"24","wo":"człowieczeństwo"},{"tr":"8","wo":"natura ludzka"},{"tr":"8","wo":"świat"}],"examples":[{"what":"noun","row":"the human race; human beings collectively.","example":"appalling crimes against humanity"}]}',
    ),
    array( // row #762
        'word' => 'sovereignty', 'pl_PL' => '{"noun":[{"tr":"24","wo":"suwerenność"},{"tr":"8","wo":"niepodległość"},{"tr":"8","wo":"wolność"}],"examples":[{"what":"noun","row":"supreme power or authority.","example":"how can we hope to wrest sovereignty away from the oligarchy and back to the people?"}]}',
    ),
    array( // row #763
        'word' => 'libraries', 'pl_PL' => '{"noun":[{"tr":"24","wo":"biblioteka"},{"tr":"8","wo":"księgozbiór"},{"tr":"8","wo":"książnica"}],"examples":[{"what":"noun","row":"a building or room containing collections of books, periodicals, and sometimes films and recorded music for people to read, borrow, or refer to.","example":"a school library"}]}',
    ),
    array( // row #764
        'word' => 'mines', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kopalnia"},{"tr":"16","wo":"mina"},{"tr":"8","wo":"gruba"}],"verb":[{"tr":"16","wo":"kopać"},{"tr":"8","wo":"minować"},{"tr":"8","wo":"podkopać"},{"tr":"8","wo":"poszukiwać"}],"examples":[{"what":"noun","row":"an excavation in the earth for extracting coal or other minerals.","example":"a copper mine"},{"what":"verb","row":"obtain (coal or other minerals) from a mine.","example":"Residents will have their say on a scheme which could see a million tonnes of coal mined in their area of Bolton."}]}',
    ),
    array( // row #765
        'word' => 'textile', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"włókienniczy"},{"tr":"16","wo":"tekstylny"}],"noun":[{"tr":"16","wo":"tkanina"},{"tr":"8","wo":"materiał"},{"tr":"8","wo":"manufaktura"}],"examples":[{"what":"adjective","row":"of or relating to fabric or weaving.","example":"the textile industry"},{"what":"noun","row":"a type of cloth or woven fabric.","example":"a fascinating range of pottery, jewelry, and textiles"}]}',
    ),
    array( // row #766
        'word' => 'happening', 'pl_PL' => '{"noun":[{"tr":"24","wo":"happening"},{"tr":"8","wo":"wydarzenie"}],"examples":[{"what":"noun","row":"an event or occurrence.","example":"altogether it was an eerie happening"},{"what":"adjective","row":"fashionable; trendy.","example":"nightclubs for the young are the happening thing"}]}',
    ),
    array( // row #767
        'word' => 'Folklore', 'pl_PL' => '{"noun":[{"tr":"24","wo":"folklor"},{"tr":"8","wo":"folklorystyka"},{"tr":"8","wo":"ludoznawstwo"}],"examples":[{"what":"noun","row":"the traditional beliefs, customs, and stories of a community, passed through the generations by word of mouth.","example":"The time is the 1920s, and Hurston the character is in town to collect local folklore ."}]}',
    ),
    array( // row #768
        'word' => 'arbitrary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"arbitralny"},{"tr":"8","wo":"samowolny"},{"tr":"8","wo":"bezwzględny"}],"examples":[{"what":"adjective","row":"based on random choice or personal whim, rather than any reason or system.","example":"his mealtimes were entirely arbitrary"}]}',
    ),
    array( // row #769
        'word' => 'paused', 'pl_PL' => '{"verb":[{"tr":"16","wo":"spauzować"},{"tr":"8","wo":"pauzować"},{"tr":"8","wo":"zrobić przerwę"},{"tr":"8","wo":"zatrzymać się"},{"tr":"8","wo":"przystanąć"}],"examples":[{"what":"verb","row":"interrupt action or speech briefly.","example":"she paused, at a loss for words"}]}',
    ),
    array( // row #770
        'word' => 'closing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zamknięcie"},{"tr":"8","wo":"przymknięcie"}],"adjective":[{"tr":"8","wo":"zamykający się"},{"tr":"8","wo":"ostatni"},{"tr":"8","wo":"ostateczny"},{"tr":"8","wo":"końcowy"}],"examples":[{"what":"adjective","row":"done, given, or acting of one\'s own free will.","example":"we are funded by voluntary contributions"},{"what":"noun","row":"an organ solo played before, during, or after a church service.","example":"Lara hissed, supposedly under her breath, but it was picked up over the microphone and echoed around the church above the organ voluntary ."}]}',
    ),
    array( // row #771
        'word' => 'tons', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mnóstwo"}],"examples":[{"what":"adjective","row":"done, given, or acting of one\'s own free will.","example":"we are funded by voluntary contributions"},{"what":"noun","row":"an organ solo played before, during, or after a church service.","example":"Lara hissed, supposedly under her breath, but it was picked up over the microphone and echoed around the church above the organ voluntary ."}]}',
    ),
    array( // row #772
        'word' => 'voluntary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"dobrowolny"},{"tr":"8","wo":"samorzutny"},{"tr":"8","wo":"spontaniczny"},{"tr":"8","wo":"nieprzymuszony"},{"tr":"8","wo":"nieobowiązkowy"},{"tr":"8","wo":"ochotniczy"},{"tr":"8","wo":"umyślny"},{"tr":"8","wo":"nadobowiązkowy"}],"examples":[{"what":"adjective","row":"done, given, or acting of one\'s own free will.","example":"we are funded by voluntary contributions"},{"what":"noun","row":"an organ solo played before, during, or after a church service.","example":"Lara hissed, supposedly under her breath, but it was picked up over the microphone and echoed around the church above the organ voluntary ."}]}',
    ),
    array( // row #773
        'word' => 'offering', 'pl_PL' => '{"noun":[{"tr":"16","wo":"ofiara"},{"tr":"16","wo":"propozycja"},{"tr":"8","wo":"dar"},{"tr":"8","wo":"datek"}],"examples":[{"what":"noun","row":"a thing offered, especially as a gift or contribution.","example":"animals as sacrificial offerings"}]}',
    ),
    array( // row #774
        'word' => 'surfaces', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nawierzchnia"},{"tr":"24","wo":"powierzchnia"},{"tr":"8","wo":"wierzch"},{"tr":"8","wo":"oblicze"},{"tr":"8","wo":"obszar"},{"tr":"8","wo":"płaszczyzna"},{"tr":"8","wo":"pole"}],"verb":[{"tr":"8","wo":"wypłynąć na powierzchnię"}],"examples":[{"what":"noun","row":"the outside part or uppermost layer of something (often used when describing its texture, form, or extent).","example":"the earth\'s surface"},{"what":"verb","row":"rise or come up to the surface of the water or the ground.","example":"he surfaced from his dive"}]}',
    ),
    array( // row #775
        'word' => 'Convention', 'pl_PL' => '{"noun":[{"tr":"24","wo":"konwencja"},{"tr":"16","wo":"zjazd"},{"tr":"8","wo":"konwenans"},{"tr":"8","wo":"zwołanie"}],"examples":[{"what":"noun","row":"a way in which something is usually done, especially within a particular area or activity.","example":"the woman who overturned so many conventions of children\'s literature"}]}',
    ),
    array( // row #776
        'word' => 'rendered', 'pl_PL' => '{"verb":[{"tr":"16","wo":"oddać"},{"tr":"8","wo":"udzielać"},{"tr":"8","wo":"wydać"},{"tr":"8","wo":"wykonać"},{"tr":"8","wo":"przedstawiać"},{"tr":"8","wo":"odtwarzać"},{"tr":"8","wo":"przetłumaczyć"},{"tr":"8","wo":"składać"},{"tr":"8","wo":"odpłacić się"},{"tr":"8","wo":"uchwycić"},{"tr":"8","wo":"zinterpretować"},{"tr":"8","wo":"odwzajemniać się tym samym"},{"tr":"8","wo":"rapować"}],"examples":[{"what":"verb","row":"provide or give (a service, help, etc.).","example":"money serves as a reward for services rendered"}]}',
    ),
    array( // row #777
        'word' => 'quarters', 'pl_PL' => '{"noun":[{"tr":"8","wo":"mieszkanie"},{"tr":"8","wo":"sfery"},{"tr":"8","wo":"stanowiska"}],"examples":[{"what":"noun","row":"each of four equal or corresponding parts into which something is or can be divided.","example":"she cut each apple into quarters"},{"what":"verb","row":"divide into four equal or corresponding parts.","example":"peel and quarter the bananas"}]}',
    ),
    array( // row #778
        'word' => 'communications', 'pl_PL' => '{"noun":[{"tr":"24","wo":"komunikacja"},{"tr":"16","wo":"łączność"},{"tr":"16","wo":"połączenie"},{"tr":"8","wo":"porozumiewanie się"},{"tr":"8","wo":"kontakt"},{"tr":"8","wo":"wiadomość"},{"tr":"8","wo":"lokomocja"},{"tr":"8","wo":"podanie"}],"examples":[{"what":"noun","row":"the imparting or exchanging of information or news.","example":"direct communication between the two countries will produce greater understanding"}]}',
    ),
    array( // row #779
        'word' => 'commander', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dowódca"},{"tr":"24","wo":"komandor"},{"tr":"16","wo":"komendant"},{"tr":"16","wo":"wódz"}],"examples":[{"what":"noun","row":"a person in authority, especially over a body of troops or a military operation.","example":"the commander of a paratroop regiment"}]}',
    ),
    array( // row #780
        'word' => 'dawn', 'pl_PL' => '{"noun":[{"tr":"24","wo":"świt"},{"tr":"8","wo":"zorza"},{"tr":"8","wo":"brzask"},{"tr":"8","wo":"zorza poranna"},{"tr":"8","wo":"jutrzenka"},{"tr":"8","wo":"zaranie"}],"verb":[{"tr":"8","wo":"zaświtać"},{"tr":"8","wo":"świtać"},{"tr":"8","wo":"dnieć"}],"examples":[{"what":"noun","row":"the first appearance of light in the sky before sunrise.","example":"the rose-pink light of dawn"},{"what":"verb","row":"(of a day) begin.","example":"Thursday dawned bright and sunny"}]}',
    ),
    array( // row #781
        'word' => 'upstairs', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"na piętrze"},{"tr":"24","wo":"na górze"},{"tr":"8","wo":"wzwyż"},{"tr":"8","wo":"na górę po schodach"}],"examples":[{"what":"adverb","row":"on or to an upper floor of a building.","example":"I tiptoed upstairs"},{"what":"adjective","row":"situated on an upper floor.","example":"an upstairs bedroom"},{"what":"noun","row":"an upper floor.","example":"she was cleaning the upstairs"}]}',
    ),
    array( // row #782
        'word' => 'fled', 'pl_PL' => '{"verb":[{"tr":"24","wo":"uciec"},{"tr":"8","wo":"pierzchać"},{"tr":"8","wo":"czmychać"},{"tr":"8","wo":"frunąć"}],"examples":[{"what":"verb","row":"run away from a place or situation of danger.","example":"a man was shot twice as he fled from five masked youths"}]}',
    ),
    array( // row #783
        'word' => 'promptly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"natychmiast"},{"tr":"24","wo":"bezzwłocznie"},{"tr":"16","wo":"punktualnie"}],"examples":[{"what":"adverb","row":"with little or no delay; immediately.","example":"he paid the fine promptly"}]}',
    ),
    array( // row #784
        'word' => 'maintaining', 'pl_PL' => '{"verb":[{"tr":"24","wo":"utrzymać"},{"tr":"16","wo":"zachować"},{"tr":"8","wo":"konserwować"},{"tr":"8","wo":"podtrzymywać"},{"tr":"8","wo":"twierdzić"},{"tr":"8","wo":"popierać"},{"tr":"8","wo":"wyżywić"}],"examples":[{"what":"verb","row":"cause or enable (a condition or state of affairs) to continue.","example":"the need to maintain close links between industry and schools"}]}',
    ),
    array( // row #785
        'word' => 'freight', 'pl_PL' => '{"noun":[{"tr":"16","wo":"fracht"},{"tr":"16","wo":"ładunek"}],"verb":[{"tr":"8","wo":"frachtować"},{"tr":"8","wo":"zafrachtować"},{"tr":"8","wo":"załadować"},{"tr":"8","wo":"przewieźć"}],"examples":[{"what":"noun","row":"goods transported by truck, train, ship, or aircraft.","example":"According to transport experts, one freight train carries the equivalent of 75 lorry loads, reducing road congestion and pollution levels."},{"what":"verb","row":"transport (goods) in bulk by truck, train, ship, or aircraft.","example":"the metals had been freighted from the city"}]}',
    ),
    array( // row #786
        'word' => 'empirical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"empiryczny"}],"examples":[{"what":"adjective","row":"based on, concerned with, or verifiable by observation or experience rather than theory or pure logic.","example":"they provided considerable empirical evidence to support their argument"}]}',
    ),
    array( // row #787
        'word' => 'dining', 'pl_PL' => '{"verb":[{"tr":"8","wo":"jeść obiad"}],"examples":[{"what":"verb","row":"eat dinner.","example":"we dined at a restaurant"}]}',
    ),
    array( // row #788
        'word' => 'African', 'pl_PL' => '{"noun":[{"tr":"24","wo":"afrykanin"}],"adjective":[{"tr":"24","wo":"afrykański"}],"examples":[{"what":"adjective","row":"of or relating to Africa or people of African descent.","example":"The men, all of North African descent, were dressed casually and appeared in the dock with two interpreters."},{"what":"noun","row":"a person from Africa, especially a black person.","example":"Meanwhile, more black African slaves were owned by black Africans than white Americans."}]}',
    ),
    array( // row #789
        'word' => 'talents', 'pl_PL' => '{"noun":[{"tr":"24","wo":"talent"},{"tr":"16","wo":"dar"},{"tr":"16","wo":"zdolność"}],"examples":[{"what":"noun","row":"natural aptitude or skill.","example":"he possesses more talent than any other player"}]}',
    ),
    array( // row #790
        'word' => 'enable', 'pl_PL' => '{"verb":[{"tr":"16","wo":"umożliwiać"},{"tr":"8","wo":"łagodzić"},{"tr":"8","wo":"upoważniać"}],"examples":[{"what":"verb","row":"give (someone or something) the authority or means to do something.","example":"the evidence would enable us to arrive at firm conclusions"}]}',
    ),
    array( // row #791
        'word' => 'examined', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"badany"},{"tr":"8","wo":"egzaminowany"},{"tr":"8","wo":"przesłuchiwany"},{"tr":"8","wo":"przeegzaminowany"},{"tr":"8","wo":"zbadany"},{"tr":"8","wo":"przebadany"},{"tr":"8","wo":"zrewidowany"},{"tr":"8","wo":"skontrolowany"},{"tr":"8","wo":"przepytany"},{"tr":"8","wo":"przesłuchany"},{"tr":"8","wo":"auskultowany"},{"tr":"8","wo":"przepatrzony"},{"tr":"8","wo":"zweryfikowany"},{"tr":"8","wo":"rozpoznany"}],"examples":[{"what":"noun","row":"a mark, object, or other indication of the existence or passing of something.","example":"remove all traces of the old adhesive"},{"what":"verb","row":"find or discover by investigation.","example":"police are trying to trace a white van seen in the area"}]}',
    ),
    array( // row #792
        'word' => 'trace', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ślad"},{"tr":"8","wo":"trop"},{"tr":"8","wo":"znak"},{"tr":"8","wo":"oznaka"},{"tr":"8","wo":"odcisk"},{"tr":"8","wo":"odciśnięcie"},{"tr":"8","wo":"pozostałość"},{"tr":"8","wo":"postronek"}],"verb":[{"tr":"16","wo":"wyśledzić"},{"tr":"16","wo":"wytropić"},{"tr":"8","wo":"rysować"},{"tr":"8","wo":"narysować"}],"examples":[{"what":"noun","row":"a mark, object, or other indication of the existence or passing of something.","example":"remove all traces of the old adhesive"},{"what":"verb","row":"find or discover by investigation.","example":"police are trying to trace a white van seen in the area"}]}',
    ),
    array( // row #793
        'word' => 'formerly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"dawniej"},{"tr":"24","wo":"poprzednio"},{"tr":"24","wo":"niegdyś"},{"tr":"8","wo":"przedtem"}],"examples":[{"what":"adverb","row":"in the past; in earlier times.","example":"Mumbai, formerly Bombay"}]}',
    ),
    array( // row #794
        'word' => 'losing', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"przegrywający"},{"tr":"8","wo":"deficytowy"}],"examples":[{"what":"noun","row":"an unexpected or casual meeting with someone or something.","example":"Our casual lakeside encounters evolved into more regular meetings, dancing and dating."},{"what":"verb","row":"unexpectedly experience or be faced with (something difficult or hostile).","example":"we have encountered one small problem"}]}',
    ),
    array( // row #795
        'word' => 'expanding', 'pl_PL' => '{"verb":[{"tr":"24","wo":"rozszerzać"},{"tr":"16","wo":"rozwijać"},{"tr":"16","wo":"rozbudować"},{"tr":"8","wo":"rozwijać się"},{"tr":"8","wo":"rozszerzać się"},{"tr":"8","wo":"rozeprzeć"},{"tr":"8","wo":"rozciągać"},{"tr":"8","wo":"rozprzestrzeniać"},{"tr":"8","wo":"rozprężać"},{"tr":"8","wo":"rozsunąć"},{"tr":"8","wo":"roztaczać"},{"tr":"8","wo":"rozdąć"}],"examples":[{"what":"verb","row":"become or make larger or more extensive.","example":"their business expanded into other hotels and properties"}]}',
    ),
    array( // row #796
        'word' => 'encounter', 'pl_PL' => '{"noun":[{"tr":"24","wo":"spotkanie"},{"tr":"16","wo":"pojedynek"},{"tr":"16","wo":"starcie"},{"tr":"8","wo":"potyczka"},{"tr":"8","wo":"utarczka"},{"tr":"8","wo":"rozprawa"}],"verb":[{"tr":"24","wo":"napotkać"},{"tr":"8","wo":"natknąć się"},{"tr":"8","wo":"mieć utarczkę"}],"examples":[{"what":"noun","row":"an unexpected or casual meeting with someone or something.","example":"Our casual lakeside encounters evolved into more regular meetings, dancing and dating."},{"what":"verb","row":"unexpectedly experience or be faced with (something difficult or hostile).","example":"we have encountered one small problem"}]}',
    ),
    array( // row #797
        'word' => 'civic', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"obywatelski"},{"tr":"8","wo":"miejski"}],"examples":[{"what":"adjective","row":"of or relating to a city or town, especially its administration; municipal.","example":"civic and business leaders"}]}',
    ),
    array( // row #798
        'word' => 'Irish', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"irlandzki"}],"noun":[{"tr":"8","wo":"język irlandzki"}],"examples":[{"what":"adjective","row":"of or relating to Ireland, its people, or the Goidelic language traditionally and historically spoken there.","example":"Either way, all Irish people spoken to yesterday were affected in some way by the atrocities."},{"what":"noun","row":"the Goidelic language that is the first official language of the Republic of Ireland.","example":"Microsoft Office programmes such as Word and Excel will also be translated into Irish ."}]}',
    ),
    array( // row #799
        'word' => 'exclusive', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ekskluzywny"},{"tr":"16","wo":"wyłączny"},{"tr":"8","wo":"zastrzeżony"},{"tr":"8","wo":"elitarny"},{"tr":"8","wo":"wyborowy"}],"examples":[{"what":"adjective","row":"excluding or not admitting other things.","example":"my exclusive focus is on San Antonio issues"},{"what":"noun","row":"an item or story published or broadcast by only one source.","example":"The three media outlets that have broadcast or published exclusives about torture at Abu Ghraib - CBS, the New Yorker and the Washington Post - are, of course, not revealing their sources."}]}',
    ),
    array( // row #800
        'word' => 'gathering', 'pl_PL' => '{"noun":[{"tr":"16","wo":"zebranie"},{"tr":"8","wo":"zgromadzenie się"},{"tr":"8","wo":"schodzenie się"},{"tr":"8","wo":"zbiorowisko"},{"tr":"8","wo":"naciek"},{"tr":"8","wo":"zbiórka"},{"tr":"8","wo":"gromada"},{"tr":"8","wo":"wrzód"},{"tr":"8","wo":"owocobranie"}],"examples":[{"what":"noun","row":"an assembly or meeting, especially a social or festive one or one held for a specific purpose.","example":"a family gathering"}]}',
    ),
    array( // row #801
        'word' => 'protest', 'pl_PL' => '{"noun":[{"tr":"24","wo":"protest"},{"tr":"8","wo":"bunt"},{"tr":"8","wo":"buntowanie się"}],"verb":[{"tr":"24","wo":"zaprotestować"},{"tr":"24","wo":"protestować"},{"tr":"8","wo":"zaoponować"},{"tr":"8","wo":"buntować"},{"tr":"8","wo":"buntować się"}],"examples":[{"what":"noun","row":"a statement or action expressing disapproval of or objection to something.","example":"the Hungarian team lodged an official protest"},{"what":"verb","row":"express an objection to what someone has said or done.","example":"she wouldn\'t let him pay, and he didn\'t protest"}]}',
    ),
    array( // row #802
        'word' => 'municipal', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"komunalny"},{"tr":"16","wo":"miejski"},{"tr":"8","wo":"magistracki"},{"tr":"8","wo":"municypalny"}],"examples":[{"what":"adjective","row":"of or relating to a city or town or its governing body.","example":"national and municipal elections"}]}',
    ),
    array( // row #803
        'word' => 'fraction', 'pl_PL' => '{"noun":[{"tr":"24","wo":"frakcja"},{"tr":"24","wo":"ułamek"},{"tr":"8","wo":"odłam"},{"tr":"8","wo":"skrzydło"}],"examples":[{"what":"noun","row":"a numerical quantity that is not a whole number (e.g., 1 \\/ 2 , 0.5).","example":"The Mathematics Computation subtest assesses skills in computing with whole numbers, fractions , mixed numbers, decimals, and algebraic equations."}]}',
    ),
    array( // row #804
        'word' => 'specified', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"określony"}],"examples":[{"what":"adjective","row":"lying toward, near, or facing the southeast.","example":"a table stood in the southeast corner"},{"what":"noun","row":"the direction toward the point of the horizon midway between south and east, or the point on the horizon itself.","example":"a ship was coming in from the southeast"},{"what":"adverb","row":"to or toward the southeast.","example":"turn southeast to return to your starting point"}]}',
    ),
    array( // row #805
        'word' => 'select', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wybierać"},{"tr":"8","wo":"dobrać"},{"tr":"8","wo":"selekcjonować"},{"tr":"8","wo":"wyselekcjonować"},{"tr":"8","wo":"wytypować"}],"adjective":[{"tr":"8","wo":"wybrany"},{"tr":"8","wo":"wyborowy"},{"tr":"8","wo":"doborowy"},{"tr":"8","wo":"celny"}],"examples":[{"what":"verb","row":"carefully choose as being the best or most suitable.","example":"students must select their own program"},{"what":"adjective","row":"(of a group of people or things) carefully chosen from a larger number as being the best or most valuable.","example":"he joined his select team of young Intelligence operatives"}]}',
    ),
    array( // row #806
        'word' => 'diplomatic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"dyplomatyczny"},{"tr":"8","wo":"polityczny"}],"examples":[{"what":"adjective","row":"of or concerning the profession, activity, or skill of managing international relations.","example":"diplomatic relations between the United States and Britain"}]}',
    ),
    array( // row #807
        'word' => 'meetings', 'pl_PL' => '{"noun":[{"tr":"24","wo":"spotkanie"},{"tr":"24","wo":"posiedzenie"},{"tr":"16","wo":"zebranie"},{"tr":"8","wo":"zbiórka"},{"tr":"8","wo":"konferencja"},{"tr":"8","wo":"narada"},{"tr":"8","wo":"mityng"},{"tr":"8","wo":"styk"},{"tr":"8","wo":"stykanie się"},{"tr":"8","wo":"zgromadzenie wiernych"},{"tr":"8","wo":"wenta"}],"examples":[{"what":"noun","row":"an assembly of people, especially the members of a society or committee, for discussion or entertainment.","example":"the early-dismissal policy will be discussed at our next meeting"}]}',
    ),
    array( // row #808
        'word' => 'President\'s', 'pl_PL' => '{"noun":[{"tr":"24","wo":"prezydent"},{"tr":"24","wo":"prezes"},{"tr":"24","wo":"przewodniczący"},{"tr":"16","wo":"dyrektor"},{"tr":"8","wo":"przewodnik"},{"tr":"8","wo":"prezydentowa"}],"examples":[{"what":"noun","row":"the elected head of a republican state.","example":"the Irish president"}]}',
    ),
    array( // row #809
        'word' => 'innocence', 'pl_PL' => '{"noun":[{"tr":"24","wo":"niewinność"},{"tr":"16","wo":"naiwność"},{"tr":"16","wo":"niewiniątko"},{"tr":"8","wo":"dziewiczość"},{"tr":"8","wo":"głupota"}],"examples":[{"what":"noun","row":"the state, quality, or fact of being innocent of a crime or offense.","example":"they must prove their innocence"}]}',
    ),
    array( // row #810
        'word' => 'newly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"nowo"},{"tr":"24","wo":"niedawno"},{"tr":"16","wo":"świeżo"},{"tr":"8","wo":"dopiero co"}],"examples":[{"what":"adverb","row":"recently.","example":"a newly acquired skill"}]}',
    ),
    array( // row #811
        'word' => 'enthusiasm', 'pl_PL' => '{"noun":[{"tr":"24","wo":"entuzjazm"},{"tr":"24","wo":"zapał"}],"examples":[{"what":"noun","row":"intense and eager enjoyment, interest, or approval.","example":"her energy and enthusiasm for life"}]}',
    ),
    array( // row #812
        'word' => 'appointment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"spotkanie"},{"tr":"24","wo":"powołanie"},{"tr":"8","wo":"wizyta"},{"tr":"8","wo":"umówiony termin"},{"tr":"8","wo":"umówienie"},{"tr":"8","wo":"randka"},{"tr":"8","wo":"ustanowienie"},{"tr":"8","wo":"mianowanie na stanowisko"},{"tr":"8","wo":"wybór"},{"tr":"8","wo":"stanowisko"},{"tr":"8","wo":"schadzka"}],"examples":[{"what":"noun","row":"an arrangement to meet someone at a particular time and place.","example":"she made an appointment with my receptionist"}]}',
    ),
    array( // row #813
        'word' => 'category', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kategoria"},{"tr":"8","wo":"klasa"},{"tr":"8","wo":"rząd"}],"examples":[{"what":"noun","row":"a class or division of people or things regarded as having particular shared characteristics.","example":"five categories of intelligence"}]}',
    ),
    array( // row #814
        'word' => 'bronchial', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"oskrzelowy"}],"examples":[{"what":"adjective","row":"of or relating to the bronchi or bronchioles.","example":"bronchial pneumonia"}]}',
    ),
    array( // row #815
        'word' => 'examination', 'pl_PL' => '{"noun":[{"tr":"24","wo":"badanie"},{"tr":"24","wo":"egzamin"},{"tr":"16","wo":"zbadanie"},{"tr":"8","wo":"rewizja"},{"tr":"8","wo":"przesłuchanie"},{"tr":"8","wo":"egzaminowanie"},{"tr":"8","wo":"inspekcja"},{"tr":"8","wo":"przebadanie"},{"tr":"8","wo":"badanie ogólne"},{"tr":"8","wo":"przeegzaminowanie"},{"tr":"8","wo":"przepatrzenie"},{"tr":"8","wo":"obdukcja"},{"tr":"8","wo":"zrewidowanie"}],"examples":[{"what":"noun","row":"a detailed inspection or investigation.","example":"an examination of marketing behavior"}]}',
    ),
    array( // row #816
        'word' => 'perception', 'pl_PL' => '{"noun":[{"tr":"24","wo":"postrzeganie"},{"tr":"24","wo":"percepcja"},{"tr":"16","wo":"odbiór"},{"tr":"8","wo":"dostrzeganie"},{"tr":"8","wo":"spostrzeżenie"},{"tr":"8","wo":"spostrzeganie"},{"tr":"8","wo":"postrzeżenie"},{"tr":"8","wo":"pobór"}],"examples":[{"what":"noun","row":"the ability to see, hear, or become aware of something through the senses.","example":"the normal limits to human perception"}]}',
    ),
    array( // row #817
        'word' => 'pressed', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"prasowany"},{"tr":"16","wo":"tłoczony"},{"tr":"8","wo":"wyprasowany"},{"tr":"8","wo":"cierpiący na brak"}],"examples":[{"what":"adverb","row":"very often; frequently.","example":"BSE, commonly called mad cow disease"}]}',
    ),
    array( // row #818
        'word' => 'commonly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"powszechnie"},{"tr":"24","wo":"zwykle"},{"tr":"16","wo":"potocznie"},{"tr":"8","wo":"zwyczajnie"},{"tr":"8","wo":"ordynarnie"},{"tr":"8","wo":"pospolicie"},{"tr":"8","wo":"nagminnie"},{"tr":"8","wo":"codziennie"},{"tr":"8","wo":"podle"}],"examples":[{"what":"adverb","row":"very often; frequently.","example":"BSE, commonly called mad cow disease"}]}',
    ),
    array( // row #819
        'word' => 'Samples', 'pl_PL' => '{"noun":[{"tr":"16","wo":"próba"},{"tr":"16","wo":"przykład"},{"tr":"8","wo":"wzorzec"},{"tr":"8","wo":"próbka czegoś"}],"verb":[{"tr":"8","wo":"wziąć próbkę"},{"tr":"8","wo":"próbować jakości towarów"}],"examples":[{"what":"noun","row":"a small part or quantity intended to show what the whole is like.","example":"investigations involved analyzing samples of handwriting"},{"what":"verb","row":"take a sample or samples of (something) for analysis.","example":"bone marrow cells were sampled"}]}',
    ),
    array( // row #820
        'word' => 'ECUMENICAL', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ekumeniczny"}],"examples":[{"what":"adjective","row":"representing a number of different Christian churches.","example":"The WCC is an ecumenical body which represents 337 Protestant churches."}]}',
    ),
    array( // row #821
        'word' => 'reminded', 'pl_PL' => '{"verb":[{"tr":"24","wo":"przypominać"},{"tr":"8","wo":"wypominać"},{"tr":"8","wo":"przypominać komuś"}],"examples":[{"what":"verb","row":"cause (someone) to remember someone or something.","example":"he would have forgotten the boy\'s birthday if you hadn\'t reminded him"}]}',
    ),
    array( // row #822
        'word' => 'regulations', 'pl_PL' => '{"noun":[{"tr":"24","wo":"regulamin"}],"examples":[{"what":"noun","row":"a piece of a homogeneous solid substance having a natural geometrically regular form with symmetrically arranged plane faces.","example":"Where possible, flawed sections are removed and larger crystals cut into smaller pieces with minimal wastage by splitting the crystal along natural cleavage planes."},{"what":"adjective","row":"clear and transparent like crystal.","example":"the clean crystal waters of the lake"}]}',
    ),
    array( // row #823
        'word' => 'crystal', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kryształ"},{"tr":"8","wo":"szkiełko do zegarka"}],"adjective":[{"tr":"16","wo":"kryształowy"}],"examples":[{"what":"noun","row":"a piece of a homogeneous solid substance having a natural geometrically regular form with symmetrically arranged plane faces.","example":"Where possible, flawed sections are removed and larger crystals cut into smaller pieces with minimal wastage by splitting the crystal along natural cleavage planes."},{"what":"adjective","row":"clear and transparent like crystal.","example":"the clean crystal waters of the lake"}]}',
    ),
    array( // row #824
        'word' => 'SHORTS', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szorty"}],"examples":[{"what":"noun","row":"short pants that reach only to the thighs or knees.","example":"cycling shorts"}]}',
    ),
    array( // row #825
        'word' => 'eternal', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wieczny"},{"tr":"16","wo":"odwieczny"},{"tr":"8","wo":"wiekuisty"},{"tr":"8","wo":"bezustanny"}],"examples":[{"what":"adjective","row":"lasting or existing forever; without end or beginning.","example":"the secret of eternal youth"}]}',
    ),
    array( // row #826
        'word' => 'scenes', 'pl_PL' => '{"noun":[{"tr":"24","wo":"scena"},{"tr":"16","wo":"odsłona"},{"tr":"8","wo":"obraz"},{"tr":"8","wo":"widok"},{"tr":"8","wo":"krajobraz"},{"tr":"8","wo":"awantura"},{"tr":"8","wo":"widowisko"},{"tr":"8","wo":"arena"},{"tr":"8","wo":"widownia"},{"tr":"8","wo":"przeprawa"}],"examples":[{"what":"noun","row":"the place where an incident in real life or fiction occurs or occurred.","example":"the emergency team were among the first on the scene"}]}',
    ),
    array( // row #827
        'word' => 'glasses', 'pl_PL' => '{"noun":[{"tr":"24","wo":"okulary"},{"tr":"16","wo":"szkła"}],"examples":[{"what":"noun","row":"a pair of lenses set in a frame resting on the nose and ears, used to correct or assist defective eyesight or protect the eyes.","example":"She stood in the hallway in another one of her typical flowing dresses, her hair tied up this time and a small pair of silver glasses resting on her nose."},{"what":"noun","row":"a hard, brittle substance, typically transparent or translucent, made by fusing sand with soda, lime, and sometimes other ingredients and cooling rapidly. It is used to make windows, drinking containers, and other articles.","example":"a piece of glass"},{"what":"verb","row":"cover or enclose with glass.","example":"the inn has a long balcony, now glassed in"}]}',
    ),
    array( // row #828
        'word' => 'circuit', 'pl_PL' => '{"noun":[{"tr":"24","wo":"obwód"},{"tr":"16","wo":"obieg"},{"tr":"8","wo":"pas"},{"tr":"8","wo":"objazd"},{"tr":"8","wo":"rewir"}],"verb":[{"tr":"8","wo":"okrążać"},{"tr":"8","wo":"krążyć"}],"examples":[{"what":"noun","row":"a roughly circular line, route, or movement that starts and finishes at the same place.","example":"I ran a circuit of the village"},{"what":"verb","row":"move all the way around (a place or thing).","example":"the trains will follow the northern line, circuiting the capital"}]}',
    ),
    array( // row #829
        'word' => 'shapes', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kształt"},{"tr":"16","wo":"forma"},{"tr":"16","wo":"postać"},{"tr":"8","wo":"ukształtowanie"},{"tr":"8","wo":"profil"},{"tr":"8","wo":"figura"},{"tr":"8","wo":"model"},{"tr":"8","wo":"wykrój"}],"verb":[{"tr":"24","wo":"kształtować"},{"tr":"16","wo":"ukształtować"},{"tr":"16","wo":"formułować"},{"tr":"8","wo":"nadać kształt"}],"examples":[{"what":"noun","row":"the external form or appearance characteristic of someone or something; the outline of an area or figure.","example":"she liked the shape of his nose"},{"what":"verb","row":"give a particular shape or form to.","example":"most caves are shaped by the flow of water through limestone"}]}',
    ),
    array( // row #830
        'word' => 'suggests', 'pl_PL' => '{"verb":[{"tr":"24","wo":"sugerować"},{"tr":"8","wo":"proponować"},{"tr":"8","wo":"poddać"},{"tr":"8","wo":"poddać myśl"},{"tr":"8","wo":"naprowadzać"},{"tr":"8","wo":"zakładać że"}],"examples":[{"what":"verb","row":"put forward for consideration.","example":"I suggest that we wait a day or two"}]}',
    ),
    array( // row #831
        'word' => 'lighted', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zapalać"},{"tr":"8","wo":"palić"},{"tr":"8","wo":"zaświecić"},{"tr":"8","wo":"oświecać"},{"tr":"8","wo":"przyświecać"},{"tr":"8","wo":"rozświetlać"},{"tr":"8","wo":"padać"},{"tr":"8","wo":"spocząć"},{"tr":"8","wo":"wzniecać"},{"tr":"8","wo":"rozjaśnić twarz"},{"tr":"8","wo":"rozpalać"},{"tr":"8","wo":"rozżarzać"}],"examples":[{"what":"verb","row":"provide with light or lighting; illuminate.","example":"the room was lighted by a number of small lamps"}]}',
    ),
    array( // row #832
        'word' => 'solutions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rozwiązanie"},{"tr":"24","wo":"roztwór"},{"tr":"8","wo":"rozłączenie"},{"tr":"8","wo":"rozczyn"}],"examples":[{"what":"noun","row":"a means of solving a problem or dealing with a difficult situation.","example":"there are no easy solutions to financial and marital problems"}]}',
    ),
    array( // row #833
        'word' => 'helpful', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pomocny"},{"tr":"8","wo":"przydatny"},{"tr":"8","wo":"uczynny"},{"tr":"8","wo":"użyteczny"}],"examples":[{"what":"adjective","row":"giving or ready to give help.","example":"people are friendly and helpful"}]}',
    ),
    array( // row #834
        'word' => 'sang', 'pl_PL' => '{"verb":[{"tr":"24","wo":"śpiewać"},{"tr":"24","wo":"zaśpiewać"},{"tr":"16","wo":"dośpiewać"},{"tr":"8","wo":"odśpiewać"},{"tr":"8","wo":"zanucić"},{"tr":"8","wo":"bzykać"},{"tr":"8","wo":"piać"},{"tr":"8","wo":"wyć"},{"tr":"8","wo":"syczeć"},{"tr":"8","wo":"dzwonić w uszach"},{"tr":"8","wo":"trelować"},{"tr":"8","wo":"zakolędować"}],"examples":[{"what":"verb","row":"make musical sounds with the voice, especially words with a set tune.","example":"Bella sang to the baby"}]}',
    ),
    array( // row #835
        'word' => 'applying', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zastosować"},{"tr":"16","wo":"mieć zastosowanie"},{"tr":"16","wo":"dotyczyć"},{"tr":"8","wo":"odnosić się"},{"tr":"8","wo":"starać się"},{"tr":"8","wo":"zaaplikować"},{"tr":"8","wo":"zgłaszać się"},{"tr":"8","wo":"przykładać"},{"tr":"8","wo":"smarować"}],"examples":[{"what":"verb","row":"make a formal application or request.","example":"you need to apply to the local authorities for a grant"}]}',
    ),
    array( // row #836
        'word' => 'vigorous', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"energiczny"},{"tr":"16","wo":"mocny"},{"tr":"8","wo":"zamaszysty"},{"tr":"8","wo":"czerstwy"}],"examples":[{"what":"adjective","row":"strong, healthy, and full of energy.","example":"And the pope, we\'re told, kept up his full, vigorous schedule this Christmas Eve, despite his frail health."}]}',
    ),
    array( // row #837
        'word' => 'poured', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wlać"},{"tr":"16","wo":"polać"},{"tr":"16","wo":"nalać"},{"tr":"16","wo":"wsypać"},{"tr":"16","wo":"lać"},{"tr":"8","wo":"zlać"},{"tr":"8","wo":"sypać"},{"tr":"8","wo":"oblać"},{"tr":"8","wo":"zasypać"},{"tr":"8","wo":"wpadać do morza"},{"tr":"8","wo":"siać"},{"tr":"8","wo":"zsypać"}],"examples":[{"what":"verb","row":"(especially of a liquid) flow rapidly in a steady stream.","example":"water poured off the roof"}]}',
    ),
    array( // row #838
        'word' => 'Jurisdiction', 'pl_PL' => '{"noun":[{"tr":"24","wo":"jurysdykcja"},{"tr":"16","wo":"sądownictwo"},{"tr":"16","wo":"orzecznictwo"}],"examples":[{"what":"noun","row":"the official power to make legal decisions and judgments.","example":"federal courts had no jurisdiction over the case"}]}',
    ),
    array( // row #839
        'word' => 'Theatre', 'pl_PL' => '{"noun":[{"tr":"24","wo":"teatr"},{"tr":"8","wo":"teatrzyk"},{"tr":"8","wo":"scena"},{"tr":"8","wo":"amfiteatr"}],"examples":[{"what":"noun","row":"a building or outdoor area in which plays and other dramatic performances are given.","example":"Performances increasingly moved to theatres with proscenium arches, so the audience now viewed the dancers from the front, though no two spectators would have an identical view."}]}',
    ),
    array( // row #840
        'word' => 'drug', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lek"},{"tr":"16","wo":"narkotyk"},{"tr":"8","wo":"specyfik"}],"verb":[{"tr":"8","wo":"narkotyzować się"},{"tr":"8","wo":"ćpać"}],"examples":[{"what":"noun","row":"a medicine or other substance which has a physiological effect when ingested or otherwise introduced into the body.","example":"a new drug aimed at sufferers from Parkinson\'s disease"},{"what":"verb","row":"administer a drug to (someone) in order to induce stupor or insensibility.","example":"they were drugged to keep them quiet"}]}',
    ),
    array( // row #841
        'word' => 'rigid', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"sztywny"},{"tr":"8","wo":"niepodatny"},{"tr":"8","wo":"twardy"},{"tr":"8","wo":"nieugięty"},{"tr":"8","wo":"zesztywniały"},{"tr":"8","wo":"niewzruszony"}],"examples":[{"what":"adjective","row":"unable to bend or be forced out of shape; not flexible.","example":"a seat of rigid orange plastic"}]}',
    ),
    array( // row #842
        'word' => 'residence', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pobyt"},{"tr":"24","wo":"rezydencja"},{"tr":"8","wo":"dom"},{"tr":"8","wo":"dworek"},{"tr":"8","wo":"willa"},{"tr":"8","wo":"staż w klinice"}],"examples":[{"what":"noun","row":"a person\'s home; the place where someone lives.","example":"They are there in case one day someone again wants to live in the house as a private residence and restore it to its original condition."}]}',
    ),
    array( // row #843
        'word' => 'STARS', 'pl_PL' => '{"noun":[{"tr":"24","wo":"gwiazda"},{"tr":"16","wo":"gwiazdka"},{"tr":"8","wo":"gwiazdor"},{"tr":"8","wo":"łysina"}],"verb":[{"tr":"8","wo":"grać główną rolę"}],"examples":[{"what":"noun","row":"a fixed luminous point in the night sky that is a large, remote incandescent body like the sun.","example":"This new heat supply causes the outer layers of the star to expand and cool, and the star becomes a red giant, or a red supergiant if it is very massive."},{"what":"verb","row":"(of a movie, play, or other show) have (someone) as a principal performer.","example":"a film starring Liza Minnelli"}]}',
    ),
    array( // row #844
        'word' => 'astronomy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"astronomia"}],"examples":[{"what":"noun","row":"the branch of science that deals with celestial objects, space, and the physical universe as a whole.","example":"He held university chairs in astronomy , physics and mathematics as well as working as an architect."}]}',
    ),
    array( // row #845
        'word' => 'morality', 'pl_PL' => '{"noun":[{"tr":"24","wo":"moralność"},{"tr":"16","wo":"moralitet"},{"tr":"8","wo":"obyczajność"}],"examples":[{"what":"noun","row":"principles concerning the distinction between right and wrong or good and bad behavior.","example":"Does our intuition in favour of meaningful commitments violate the idea that morality concerns consequences?"}]}',
    ),
    array( // row #846
        'word' => 'cycle', 'pl_PL' => '{"noun":[{"tr":"24","wo":"cykl"},{"tr":"8","wo":"obieg"},{"tr":"8","wo":"okres"},{"tr":"8","wo":"menstruacja"},{"tr":"8","wo":"rower"}],"verb":[{"tr":"8","wo":"jechać na rowerze"}],"examples":[{"what":"noun","row":"a series of events that are regularly repeated in the same order.","example":"the boom and slump periods of a trade cycle"},{"what":"verb","row":"ride a bicycle.","example":"she cycled to work every day"}]}',
    ),
    array( // row #847
        'word' => 'creating', 'pl_PL' => '{"verb":[{"tr":"24","wo":"utworzyć"},{"tr":"24","wo":"tworzyć"},{"tr":"16","wo":"stwarzać"},{"tr":"8","wo":"kreować"},{"tr":"8","wo":"ustanawiać"},{"tr":"8","wo":"formować"},{"tr":"8","wo":"narobić"}],"examples":[{"what":"verb","row":"bring (something) into existence.","example":"he created a thirty-acre lake"}]}',
    ),
    array( // row #848
        'word' => 'drying', 'pl_PL' => '{"noun":[{"tr":"16","wo":"wysuszenie"}],"adjective":[{"tr":"8","wo":"wysuszający"}],"examples":[{"what":"verb","row":"become dry.","example":"waiting for the paint to dry"}]}',
    ),
    array( // row #849
        'word' => 'jet', 'pl_PL' => '{"noun":[{"tr":"24","wo":"strumień"},{"tr":"24","wo":"odrzutowiec"},{"tr":"16","wo":"gagat"},{"tr":"8","wo":"gagatek"},{"tr":"8","wo":"trysk"},{"tr":"8","wo":"dżet"},{"tr":"8","wo":"wodotrysk"},{"tr":"8","wo":"tryśnięcie"},{"tr":"8","wo":"bluzg"}],"adjective":[{"tr":"16","wo":"odrzutowy"},{"tr":"8","wo":"rakietowy"}],"verb":[{"tr":"8","wo":"bluzgać"},{"tr":"8","wo":"tryskać"}],"examples":[{"what":"noun","row":"a rapid stream of liquid or gas forced out of a small opening.","example":"a high-pressure shower with pulsating jets"},{"what":"verb","row":"travel by jet aircraft.","example":"the newlyweds jetted off for a honeymoon in New York"}]}',
    ),
    array( // row #850
        'word' => 'sewage', 'pl_PL' => '{"noun":[{"tr":"16","wo":"ściek"}],"examples":[{"what":"noun","row":"waste water and excrement conveyed in sewers.","example":"The order arose after many of the wells were found to be contaminated with human sewage ."}]}',
    ),
    array( // row #851
        'word' => 'barn', 'pl_PL' => '{"noun":[{"tr":"24","wo":"stodoła"},{"tr":"8","wo":"gumno"},{"tr":"8","wo":"stajnia"},{"tr":"8","wo":"remiza"}],"examples":[{"what":"noun","row":"a large farm building used for storing grain, hay, or straw or for housing livestock.","example":"Also within the wall would have been a well, latrines, a chapel, workshops, barns , pens for livestock, hen houses and perhaps other outbuildings."}]}',
    ),
    array( // row #852
        'word' => 'signals', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sygnał"},{"tr":"8","wo":"znak"},{"tr":"8","wo":"wskaźnik"},{"tr":"8","wo":"hasło"},{"tr":"8","wo":"jeździec"}],"verb":[{"tr":"24","wo":"sygnalizować"},{"tr":"16","wo":"zasygnalizować"},{"tr":"8","wo":"przywołać"}],"examples":[{"what":"noun","row":"a gesture, action, or sound that is used to convey information or instructions, typically by prearrangement between the parties concerned.","example":"the firing of the gun was the signal for a chain of beacons to be lit"},{"what":"verb","row":"transmit information or instructions by means of a gesture, action, or sound.","example":"hold your fire until I signal"}]}',
    ),
    array( // row #853
        'word' => 'suburban', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"podmiejski"},{"tr":"8","wo":"peryferyjny"}],"examples":[{"what":"adjective","row":"of or characteristic of a suburb.","example":"suburban life"}]}',
    ),
    array( // row #854
        'word' => 'access', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dostęp"},{"tr":"8","wo":"przystęp"},{"tr":"8","wo":"dojście"},{"tr":"8","wo":"dojazd"},{"tr":"8","wo":"atak"},{"tr":"8","wo":"poryw radości"},{"tr":"8","wo":"przystęp gniewu"}],"verb":[{"tr":"8","wo":"atakować"}],"examples":[{"what":"noun","row":"a means of approaching or entering a place.","example":"the staircase gives access to the top floor"},{"what":"verb","row":"approach or enter (a place).","example":"single rooms have private baths accessed via the balcony"}]}',
    ),
    array( // row #855
        'word' => 'encouraged', 'pl_PL' => '{"verb":[{"tr":"16","wo":"popierać"},{"tr":"8","wo":"namawiać"},{"tr":"8","wo":"dopingować"},{"tr":"8","wo":"dodawać odwagi"}],"examples":[{"what":"verb","row":"give support, confidence, or hope to (someone).","example":"we were encouraged by the success of this venture"}]}',
    ),
    array( // row #856
        'word' => 'unions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"unia"},{"tr":"24","wo":"związek"},{"tr":"24","wo":"zjednoczenie"},{"tr":"16","wo":"złącze"},{"tr":"8","wo":"wspólnota"},{"tr":"8","wo":"złączka"},{"tr":"8","wo":"zrzeszenie"},{"tr":"8","wo":"harmonia"},{"tr":"8","wo":"klub"},{"tr":"8","wo":"połączenie"},{"tr":"8","wo":"kombinacja"}],"examples":[{"what":"noun","row":"the action or fact of joining or being joined, especially in a political context.","example":"he was opposed to closer political or economic union with Europe"},{"what":"noun","row":"an industrial and residential township in northeastern New Jersey; population 53,673 (est. 2008).","example":null}]}',
    ),
    array( // row #857
        'word' => 'movie', 'pl_PL' => '{"noun":[{"tr":"24","wo":"film"}],"examples":[{"what":"noun","row":"a story or event recorded by a camera as a set of moving images and shown in a theater or on television; a motion picture.","example":"There is a movement afoot to release movies to both theaters and DVD at the same time."}]}',
    ),
    array( // row #858
        'word' => 'entertainment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rozrywka"},{"tr":"8","wo":"uciecha"},{"tr":"8","wo":"przedstawienie"},{"tr":"8","wo":"widowisko"},{"tr":"8","wo":"biesiada"},{"tr":"8","wo":"impreza"},{"tr":"8","wo":"ugaszczanie"},{"tr":"8","wo":"ugoszczenie"},{"tr":"8","wo":"poczęstunek"},{"tr":"8","wo":"nadzieja"}],"examples":[{"what":"noun","row":"the action of providing or being provided with amusement or enjoyment.","example":"everyone just sits in front of the TV for entertainment"}]}',
    ),
    array( // row #859
        'word' => 'exciting', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ekscytujący"},{"tr":"16","wo":"emocjonujący"},{"tr":"16","wo":"pasjonujący"},{"tr":"8","wo":"podniecający"},{"tr":"8","wo":"sensacyjny"}],"examples":[{"what":"adjective","row":"causing great enthusiasm and eagerness.","example":"an exciting breakthrough"}]}',
    ),
    array( // row #860
        'word' => 'trips', 'pl_PL' => '{"noun":[{"tr":"24","wo":"podróż"},{"tr":"24","wo":"wycieczka"},{"tr":"16","wo":"wyjazd"},{"tr":"8","wo":"tura"},{"tr":"8","wo":"potknięcie się"},{"tr":"8","wo":"transport narkotyczny"}],"verb":[{"tr":"8","wo":"podróżować"},{"tr":"8","wo":"potknąć się"},{"tr":"8","wo":"lekko iść"},{"tr":"8","wo":"pomylić się"},{"tr":"8","wo":"oderwać się od dna"}],"examples":[{"what":"noun","row":"an act of going to a place and returning; a journey or excursion, especially for pleasure.","example":"Sally\'s gone on a school trip"},{"what":"verb","row":"catch one\'s foot on something and stumble or fall.","example":"he tripped over his cat"}]}',
    ),
    array( // row #861
        'word' => 'shots', 'pl_PL' => '{"noun":[{"tr":"24","wo":"strzał"},{"tr":"16","wo":"zdjęcie"},{"tr":"8","wo":"śrut"},{"tr":"8","wo":"zastrzyk"},{"tr":"8","wo":"wystrzał"},{"tr":"8","wo":"strzelec"},{"tr":"8","wo":"próba"},{"tr":"8","wo":"dawka"},{"tr":"8","wo":"postrzał"},{"tr":"8","wo":"docinek"},{"tr":"8","wo":"iniekcja"},{"tr":"8","wo":"łyk"}],"examples":[{"what":"noun","row":"the firing of a gun or cannon.","example":"he brought down a caribou with a single shot to the neck"}]}',
    ),
    array( // row #862
        'word' => 'volunteers', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wolontariusz"},{"tr":"16","wo":"ochotnik"}],"verb":[{"tr":"8","wo":"zgłaszać się na ochotnika"},{"tr":"8","wo":"zaofiarować się"}],"examples":[{"what":"noun","row":"a person who freely offers to take part in an enterprise or undertake a task.","example":"Last weekend volunteers undertook the painstaking task of cutting the grass around the base of each stone with scissors, in preparation for the restoration work."},{"what":"verb","row":"freely offer to do something.","example":"he volunteered for the job"}]}',
    ),
    array( // row #863
        'word' => 'Testament', 'pl_PL' => '{"noun":[{"tr":"24","wo":"testament"}],"examples":[{"what":"noun","row":"a person\'s will, especially the part relating to personal property.","example":"Although in principle, testaments and codicils need not differ in making bequests to different groups of legatees, in fact we observe such differences."}]}',
    ),
    array( // row #864
        'word' => 'threatened', 'pl_PL' => '{"verb":[{"tr":"24","wo":"grozić"},{"tr":"24","wo":"zagrażać"},{"tr":"16","wo":"straszyć"},{"tr":"8","wo":"godzić"},{"tr":"8","wo":"pogrozić"},{"tr":"8","wo":"wygrażać"},{"tr":"8","wo":"odgrażać się"},{"tr":"8","wo":"gotować się"}],"examples":[{"what":"verb","row":"state one\'s intention to take hostile action against someone in retribution for something done or not done.","example":"the unions threatened a general strike"}]}',
    ),
    array( // row #865
        'word' => 'October', 'pl_PL' => '{"noun":[{"tr":"24","wo":"październik"}],"adjective":[{"tr":"16","wo":"październikowy"}],"examples":[{"what":"noun","row":"the tenth month of the year, in the northern hemisphere usually considered the second month of autumn.","example":"the project started in October"}]}',
    ),
    array( // row #866
        'word' => 'builder', 'pl_PL' => '{"noun":[{"tr":"24","wo":"budowniczy"},{"tr":"16","wo":"konstruktor"},{"tr":"8","wo":"twórca"}],"examples":[{"what":"noun","row":"a person who constructs something by putting parts or material together over a period of time.","example":"a boat builder"}]}',
    ),
    array( // row #867
        'word' => 'Builders', 'pl_PL' => '{"noun":[{"tr":"24","wo":"budowniczy"},{"tr":"16","wo":"konstruktor"},{"tr":"16","wo":"twórca"}],"examples":[{"what":"noun","row":"a person who constructs something by putting parts or material together over a period of time.","example":"a boat builder"}]}',
    ),
    array( // row #868
        'word' => 'Sons', 'pl_PL' => '{"noun":[{"tr":"24","wo":"syn"},{"tr":"8","wo":"potomek"}],"examples":[{"what":"noun","row":"a boy or man in relation to either or both of his parents.","example":"Throughout their relationship, they had been the main parents to four sons , all of whom had been conceived in previous marriages."}]}',
    ),
    array( // row #869
        'word' => 'recovery', 'pl_PL' => '{"noun":[{"tr":"16","wo":"poprawa"},{"tr":"16","wo":"regeneracja"},{"tr":"16","wo":"wyzdrowienie"},{"tr":"8","wo":"zdrowienie"},{"tr":"8","wo":"odzyskanie zdrowia"},{"tr":"8","wo":"odnalezienie zguby"},{"tr":"8","wo":"zużytkowanie odpadków"},{"tr":"8","wo":"wydobrzenie"}],"examples":[{"what":"noun","row":"a return to a normal state of health, mind, or strength.","example":"signs of recovery in the housing market"}]}',
    ),
    array( // row #870
        'word' => 'ethical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"etyczny"},{"tr":"8","wo":"moralny"}],"examples":[{"what":"adjective","row":"of or relating to moral principles or the branch of knowledge dealing with these.","example":"ethical issues in nursing"}]}',
    ),
    array( // row #871
        'word' => 'merit', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zasługa"},{"tr":"8","wo":"zaleta"}],"verb":[{"tr":"16","wo":"zasłużyć"}],"examples":[{"what":"noun","row":"the quality of being particularly good or worthy, especially so as to deserve praise or reward.","example":"composers of outstanding merit"},{"what":"verb","row":"deserve or be worthy of (something, especially reward, punishment, or attention).","example":"the results have been encouraging enough to merit further investigation"}]}',
    ),
    array( // row #872
        'word' => 'guilty', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"winny"},{"tr":"8","wo":"nieczysty"},{"tr":"8","wo":"karygodny"}],"examples":[{"what":"adjective","row":"culpable of or responsible for a specified wrongdoing.","example":"the police will soon discover who the guilty party is"}]}',
    ),
    array( // row #873
        'word' => 'accomplish', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wykonać"},{"tr":"16","wo":"zrealizować"},{"tr":"8","wo":"osiągać"},{"tr":"8","wo":"wskórać"},{"tr":"8","wo":"realizować"},{"tr":"8","wo":"doskonalić"}],"examples":[{"what":"verb","row":"achieve or complete successfully.","example":"the planes accomplished their mission"}]}',
    ),
    array( // row #874
        'word' => 'transferred', 'pl_PL' => '{"verb":[{"tr":"24","wo":"przenieść"},{"tr":"24","wo":"przekazać"},{"tr":"8","wo":"przelewać"},{"tr":"8","wo":"przenieść się"},{"tr":"8","wo":"przesunąć"},{"tr":"8","wo":"cedować"},{"tr":"8","wo":"przerzucać"},{"tr":"8","wo":"scedować"},{"tr":"8","wo":"transportować"},{"tr":"8","wo":"transponować"},{"tr":"8","wo":"przekładać"},{"tr":"8","wo":"przekalkować"}],"examples":[{"what":"verb","row":"move from one place to another.","example":"he would have to transfer money to his own account"}]}',
    ),
    array( // row #875
        'word' => 'preliminary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wstępny"},{"tr":"8","wo":"przygotowawczy"},{"tr":"8","wo":"preliminarny"}],"noun":[{"tr":"16","wo":"wstęp"}],"examples":[{"what":"adjective","row":"denoting an action or event preceding or done in preparation for something fuller or more important.","example":"preliminary talks"},{"what":"noun","row":"an action or event preceding or preparing for something fuller or more important.","example":"the bombardment was resumed as a preliminary to an infantry attack"}]}',
    ),
    array( // row #876
        'word' => 'explicit', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wyraźny"},{"tr":"8","wo":"formalny"},{"tr":"8","wo":"kategoryczny"},{"tr":"8","wo":"sprecyzowany"},{"tr":"8","wo":"bez niedomówień"},{"tr":"8","wo":"otwarty"}],"examples":[{"what":"adjective","row":"stated clearly and in detail, leaving no room for confusion or doubt.","example":"the speaker\'s intentions were not made explicit"},{"what":"noun","row":"the closing words of a text, manuscript, early printed book, or chanted liturgical text.","example":null}]}',
    ),
    array( // row #877
        'word' => 'allied', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"sprzymierzony"},{"tr":"16","wo":"aliancki"},{"tr":"16","wo":"sojuszniczy"},{"tr":"8","wo":"pokrewny"}],"examples":[{"what":"adjective","row":"joined by or relating to members of an alliance.","example":"allied territories"}]}',
    ),
    array( // row #878
        'word' => 'tractor', 'pl_PL' => '{"noun":[{"tr":"24","wo":"traktor"},{"tr":"24","wo":"ciągnik"}],"examples":[{"what":"noun","row":"a powerful motor vehicle with large rear wheels, used chiefly on farms for hauling equipment and trailers.","example":"Farther north, a farm wife drives a tractor pulling a flat rack."}]}',
    ),
    array( // row #879
        'word' => 'democracy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"demokracja"},{"tr":"8","wo":"ludowładztwo"}],"examples":[{"what":"noun","row":"a system of government by the whole population or all the eligible members of a state, typically through elected representatives.","example":"capitalism and democracy are ascendant in the third world"}]}',
    ),
    array( // row #880
        'word' => 'ignored', 'pl_PL' => '{"verb":[{"tr":"24","wo":"ignorować"},{"tr":"24","wo":"zignorować"},{"tr":"16","wo":"pomijać"},{"tr":"16","wo":"zlekceważyć"},{"tr":"8","wo":"bagatelizować"},{"tr":"8","wo":"uchylać"}],"examples":[{"what":"verb","row":"refuse to take notice of or acknowledge; disregard intentionally.","example":"he ignored her outraged question"}]}',
    ),
    array( // row #881
        'word' => 'mighty', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"potężny"},{"tr":"16","wo":"możny"},{"tr":"16","wo":"mocny"},{"tr":"16","wo":"wielki"},{"tr":"16","wo":"silny"},{"tr":"8","wo":"przepotężny"},{"tr":"8","wo":"zdrowy"},{"tr":"8","wo":"zdrów"},{"tr":"8","wo":"cholerny"}],"adverb":[{"tr":"16","wo":"potężnie"},{"tr":"16","wo":"zdrowo"},{"tr":"8","wo":"cholernie"},{"tr":"8","wo":"silnie"},{"tr":"8","wo":"mocnie"},{"tr":"8","wo":"możnie"},{"tr":"8","wo":"wielko"}],"examples":[{"what":"adjective","row":"possessing great and impressive power or strength, especially on account of size.","example":"three mighty industrial countries"},{"what":"adverb","row":"extremely.","example":"this is mighty early to be planning a presidential campaign"}]}',
    ),
    array( // row #882
        'word' => 'CONTRIBUTIONS', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wkład"},{"tr":"16","wo":"udział"},{"tr":"16","wo":"przyczynek"},{"tr":"8","wo":"kontrybucja"},{"tr":"8","wo":"przyczynienie"},{"tr":"8","wo":"datek"},{"tr":"8","wo":"zasługa"},{"tr":"8","wo":"aport"},{"tr":"8","wo":"ofiara"},{"tr":"8","wo":"wkładka"}],"examples":[{"what":"noun","row":"a gift or payment to a common fund or collection.","example":"charitable contributions"}]}',
    ),
    array( // row #883
        'word' => 'questioned', 'pl_PL' => '{"verb":[{"tr":"24","wo":"kwestionować"},{"tr":"16","wo":"zakwestionować"},{"tr":"8","wo":"pytać"},{"tr":"8","wo":"przesłuchać"},{"tr":"8","wo":"badać"},{"tr":"8","wo":"wypytać"},{"tr":"8","wo":"zadać pytania"},{"tr":"8","wo":"przepytać"},{"tr":"8","wo":"dopytać"},{"tr":"8","wo":"odpytać"},{"tr":"8","wo":"dowiadywać"}],"examples":[{"what":"verb","row":"ask questions of (someone), especially in an official context.","example":"four men were being questioned about the killings"}]}',
    ),
    array( // row #884
        'word' => 'proposals', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wniosek"},{"tr":"24","wo":"propozycja"},{"tr":"16","wo":"projekt"},{"tr":"8","wo":"oświadczyny"},{"tr":"8","wo":"deklaracja"}],"examples":[{"what":"noun","row":"a plan or suggestion, especially a formal or written one, put forward for consideration or discussion by others.","example":"a set of proposals for a major new high-speed rail link"}]}',
    ),
    array( // row #885
        'word' => 'lieutenant', 'pl_PL' => '{"noun":[{"tr":"24","wo":"porucznik"},{"tr":"16","wo":"lejtnant"},{"tr":"16","wo":"zastępca"}],"examples":[{"what":"noun","row":"a commercial and industrial city in northeastern Texas; population 38,077 (est. 2008).","example":null}]}',
    ),
    array( // row #886
        'word' => 'utility', 'pl_PL' => '{"noun":[{"tr":"16","wo":"użyteczność"},{"tr":"8","wo":"pożytek"},{"tr":"8","wo":"użytkowość"},{"tr":"8","wo":"użytkowność"}],"examples":[{"what":"noun","row":"the state of being useful, profitable, or beneficial.","example":"he had a poor opinion of the utility of book learning"},{"what":"adjective","row":"useful, especially through being able to perform several functions.","example":"a utility truck"}]}',
    ),
    array( // row #887
        'word' => 'divorce', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rozwód"}],"verb":[{"tr":"8","wo":"rozwodzić"},{"tr":"8","wo":"rozwodzić się"}],"examples":[{"what":"noun","row":"the legal dissolution of a marriage by a court or other competent body.","example":"her divorce from her first husband"},{"what":"verb","row":"legally dissolve one\'s marriage with (someone).","example":"he divorced his first wife after 10 months"}]}',
    ),
    array( // row #888
        'word' => 'sovereign', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"suwerenny"},{"tr":"8","wo":"niepodległy"},{"tr":"8","wo":"samowładny"},{"tr":"8","wo":"udzielny"}],"noun":[{"tr":"16","wo":"władca"},{"tr":"16","wo":"suweren"},{"tr":"16","wo":"monarcha"},{"tr":"8","wo":"król"},{"tr":"8","wo":"panujący"},{"tr":"8","wo":"monarchini"}],"examples":[{"what":"adjective","row":"possessing supreme or ultimate power.","example":"in modern democracies the people\'s will is in theory sovereign"},{"what":"noun","row":"a supreme ruler, especially a monarch.","example":"In India, however, she was an empress, a supreme sovereign to whom other sovereigns owed homage."}]}',
    ),
    array( // row #889
        'word' => 'subtle', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"subtelny"},{"tr":"16","wo":"delikatny"},{"tr":"8","wo":"misterny"},{"tr":"8","wo":"wyrafinowany"},{"tr":"8","wo":"lotny"},{"tr":"8","wo":"koronkowy"},{"tr":"8","wo":"drobiazgowy"},{"tr":"8","wo":"dowcipny"}],"examples":[{"what":"adjective","row":"(especially of a change or distinction) so delicate or precise as to be difficult to analyze or describe.","example":"his language expresses rich and subtle meanings"}]}',
    ),
    array( // row #890
        'word' => 'unconscious', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"nieprzytomny"},{"tr":"16","wo":"nieświadomy"},{"tr":"8","wo":"bezwiedny"},{"tr":"8","wo":"bezprzytomny"},{"tr":"8","wo":"automatyczny"}],"examples":[{"what":"adjective","row":"not conscious.","example":"the boy was beaten unconscious"},{"what":"noun","row":"the part of the mind that is inaccessible to the conscious mind but that affects behavior and emotions.","example":"Cognitive scientist Guy Claxton has unearthed the unconscious throughout history."}]}',
    ),
    array( // row #891
        'word' => 'ray', 'pl_PL' => '{"noun":[{"tr":"24","wo":"promień"},{"tr":"16","wo":"promyk"},{"tr":"8","wo":"ramię"},{"tr":"8","wo":"półprosta"},{"tr":"8","wo":"płaszczka"},{"tr":"8","wo":"raja"}],"verb":[{"tr":"8","wo":"promieniować"}],"examples":[{"what":"noun","row":"each of the lines in which light (and heat) may seem to stream from the sun or any luminous body, or pass through a small opening.","example":"a ray of sunlight came through the window"},{"what":"verb","row":"spread from or as if from a central point.","example":"delicate lines rayed out at each corner of her eyes"}]}',
    ),
    array( // row #892
        'word' => 'component', 'pl_PL' => '{"noun":[{"tr":"24","wo":"składnik"},{"tr":"24","wo":"komponent"},{"tr":"24","wo":"element"},{"tr":"16","wo":"składowa"}],"adjective":[{"tr":"8","wo":"składowy"}],"examples":[{"what":"adjective","row":"constituting part of a larger whole; constituent.","example":"light passed through a prism breaks up into its component colors"},{"what":"noun","row":"a part or element of a larger whole, especially a part of a machine or vehicle.","example":"stereo components"}]}',
    ),
    array( // row #893
        'word' => 'Cried', 'pl_PL' => '{"verb":[{"tr":"24","wo":"płakać"},{"tr":"16","wo":"wołać"},{"tr":"16","wo":"zapłakać"},{"tr":"16","wo":"krzyczeć"},{"tr":"8","wo":"ryczeć"},{"tr":"8","wo":"łzawić"},{"tr":"8","wo":"zawołać"},{"tr":"8","wo":"beczeć"},{"tr":"8","wo":"domagać się"},{"tr":"8","wo":"wygadać"}],"examples":[{"what":"verb","row":"shed tears, especially as an expression of distress or pain.","example":"don\'t cryâit\'ll be all right"}]}',
    ),
    array( // row #894
        'word' => 'vein', 'pl_PL' => '{"noun":[{"tr":"24","wo":"żyła"},{"tr":"16","wo":"żyłka"},{"tr":"8","wo":"wena"},{"tr":"8","wo":"nastrój"},{"tr":"8","wo":"nerw"},{"tr":"8","wo":"słój u drzewa"},{"tr":"8","wo":"flader"}],"examples":[{"what":"noun","row":"any of the tubes forming part of the blood circulation system of the body, carrying in most cases oxygen-depleted blood toward the heart.","example":"This puts the full weight of your uterus on your back and on the major vein that carries blood between your lower body and heart."}]}',
    ),
    array( // row #895
        'word' => 'flux', 'pl_PL' => '{"noun":[{"tr":"24","wo":"strumień"},{"tr":"24","wo":"przepływ"},{"tr":"24","wo":"topnik"},{"tr":"16","wo":"ciągłe zmiany"},{"tr":"16","wo":"upływ"},{"tr":"16","wo":"przypływ"}],"verb":[{"tr":"16","wo":"topić się"}],"examples":[{"what":"noun","row":"the action or process of flowing or flowing out.","example":"the flux of men and women moving back and forth"},{"what":"verb","row":"treat (a metal object) with a flux to promote melting.","example":"It was considered such ideal fluxing ore that the El Paso smelter paid the costs for shipping it by rail and processed the ore at no charge to assure a steady supply."}]}',
    ),
    array( // row #896
        'word' => 'vague', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"niejasny"},{"tr":"16","wo":"nieokreślony"},{"tr":"16","wo":"niewyraźny"},{"tr":"8","wo":"nijaki"},{"tr":"8","wo":"ogólnikowy"},{"tr":"8","wo":"nieuchwytny"},{"tr":"8","wo":"mętny"},{"tr":"8","wo":"mglisty"}],"examples":[{"what":"adjective","row":"of uncertain, indefinite, or unclear character or meaning.","example":"many patients suffer vague symptoms"}]}',
    ),
    array( // row #897
        'word' => 'consciousness', 'pl_PL' => '{"noun":[{"tr":"24","wo":"świadomość"},{"tr":"8","wo":"jaw"},{"tr":"8","wo":"pamięć"},{"tr":"8","wo":"zmysły"},{"tr":"8","wo":"samowiedza"},{"tr":"8","wo":"przytomność umysłu"},{"tr":"8","wo":"trzeźwość"},{"tr":"8","wo":"jawa"}],"examples":[{"what":"noun","row":"the state of being awake and aware of one\'s surroundings.","example":"she failed to regain consciousness and died two days later"}]}',
    ),
    array( // row #898
        'word' => 'consequence', 'pl_PL' => '{"noun":[{"tr":"24","wo":"konsekwencja"},{"tr":"24","wo":"skutek"},{"tr":"8","wo":"wynik"},{"tr":"8","wo":"wniosek"},{"tr":"8","wo":"waga"}],"examples":[{"what":"noun","row":"a result or effect of an action or condition.","example":"many have been laid off from work as a consequence of the administration\'s policies"}]}',
    ),
    array( // row #899
        'word' => 'encountered', 'pl_PL' => '{"verb":[{"tr":"24","wo":"napotkać"},{"tr":"8","wo":"natknąć się"},{"tr":"8","wo":"mieć utarczkę"}],"examples":[{"what":"verb","row":"unexpectedly experience or be faced with (something difficult or hostile).","example":"we have encountered one small problem"}]}',
    ),
    array( // row #900
        'word' => 'blanket', 'pl_PL' => '{"noun":[{"tr":"24","wo":"koc"},{"tr":"16","wo":"kocyk"},{"tr":"8","wo":"derka"},{"tr":"8","wo":"deka"}],"verb":[{"tr":"8","wo":"okryć kocem"}],"examples":[{"what":"adjective","row":"covering all cases or instances; total and inclusive.","example":"a blanket ban on tobacco advertising"},{"what":"noun","row":"a large piece of woolen or similar material used as a bed covering or other covering for warmth.","example":"Try changing feather pillows, woollen blankets and woollen clothing to cotton or synthetic materials."},{"what":"verb","row":"cover completely with a thick layer of something.","example":"the countryside was blanketed in snow"}]}',
    ),
    array( // row #901
        'word' => 'rational', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"racjonalny"},{"tr":"8","wo":"rozumny"},{"tr":"8","wo":"sensowny"},{"tr":"8","wo":"rozsądny"},{"tr":"8","wo":"wymierny"},{"tr":"8","wo":"rozumowy"}],"noun":[{"tr":"8","wo":"rozumne stworzenie"},{"tr":"8","wo":"racjonał"}],"examples":[{"what":"adjective","row":"based on or in accordance with reason or logic.","example":"I\'m sure there\'s a perfectly rational explanation"},{"what":"noun","row":"a rational number.","example":"The construction of the reals from the integers proceeds in several stages: first axiomatize the positive integers, then construct negative from positive integers, then rationals from integers, and finally reals from rationals ."}]}',
    ),
    array( // row #902
        'word' => 'purely', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"czysto"},{"tr":"24","wo":"wyłącznie"},{"tr":"16","wo":"jedynie"},{"tr":"16","wo":"całkowicie"},{"tr":"8","wo":"niewinnie"}],"examples":[{"what":"adverb","row":"in a pure manner.","example":"act nobly, speak purely, and think charitably"}]}',
    ),
    array( // row #903
        'word' => 'density', 'pl_PL' => '{"noun":[{"tr":"24","wo":"gęstość"},{"tr":"8","wo":"zwartość"},{"tr":"8","wo":"zbitość"},{"tr":"8","wo":"spoistość"},{"tr":"8","wo":"tępota"}],"examples":[{"what":"noun","row":"the degree of compactness of a substance.","example":"a reduction in bone density"}]}',
    ),
    array( // row #904
        'word' => 'skilled', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wykwalifikowany"},{"tr":"8","wo":"wprawny"},{"tr":"8","wo":"fachowy"}],"examples":[{"what":"adjective","row":"having or showing the knowledge, ability, or training to perform a certain activity or task well.","example":"a lab technician skilled in electronics"}]}',
    ),
    array( // row #905
        'word' => 'preceding', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"poprzedzający"},{"tr":"16","wo":"powyższy"}],"examples":[{"what":"adjective","row":"(of a person or animal) fully grown or developed.","example":"the adult inhabitants of the U.S"},{"what":"noun","row":"a person who is fully grown or developed.","example":"children should be accompanied by an adult"}]}',
    ),
    array( // row #906
        'word' => 'adult', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"dorosły"},{"tr":"8","wo":"dojrzały"}],"noun":[{"tr":"16","wo":"osoba dorosła"}],"examples":[{"what":"adjective","row":"(of a person or animal) fully grown or developed.","example":"the adult inhabitants of the U.S"},{"what":"noun","row":"a person who is fully grown or developed.","example":"children should be accompanied by an adult"}]}',
    ),
    array( // row #907
        'word' => 'occurrence', 'pl_PL' => '{"noun":[{"tr":"24","wo":"występowanie"},{"tr":"16","wo":"zdarzenie"},{"tr":"16","wo":"zjawisko"},{"tr":"8","wo":"wydarzenie"},{"tr":"8","wo":"wypadek"}],"examples":[{"what":"noun","row":"an incident or event.","example":"vandalism used to be a rare occurrence"}]}',
    ),
    array( // row #908
        'word' => 'magnetic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"magnetyczny"},{"tr":"8","wo":"magnesowy"}],"examples":[{"what":"adjective","row":"capable of being attracted by or acquiring the properties of a magnet.","example":"steel is magnetic"}]}',
    ),
    array( // row #909
        'word' => 'complicated', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"skomplikowany"},{"tr":"8","wo":"złożony"},{"tr":"8","wo":"zawiły"}],"examples":[{"what":"adjective","row":"consisting of many interconnecting parts or elements; intricate.","example":"a complicated stereo system"}]}',
    ),
    array( // row #910
        'word' => 'surprising', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zaskakujący"}],"examples":[{"what":"adjective","row":"causing surprise; unexpected.","example":"a surprising sequence of events"}]}',
    ),
    array( // row #911
        'word' => 'hoping', 'pl_PL' => '{"verb":[{"tr":"16","wo":"mieć nadzieję"},{"tr":"8","wo":"ufać"},{"tr":"8","wo":"oczekiwać"},{"tr":"8","wo":"spodziewać się"}],"examples":[{"what":"verb","row":"want something to happen or be the case.","example":"he\'s hoping for an offer of compensation"}]}',
    ),
    array( // row #912
        'word' => 'measuring', 'pl_PL' => '{"noun":[{"tr":"8","wo":"zmierzenie"}],"examples":[{"what":"verb","row":"ascertain the size, amount, or degree of (something) by using an instrument or device marked in standard units or by comparing it with an object of known size.","example":"the amount of water collected is measured in pints"}]}',
    ),
    array( // row #913
        'word' => 'deliberately', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"celowo"},{"tr":"24","wo":"rozmyślnie"},{"tr":"8","wo":"rozważnie"},{"tr":"8","wo":"nieśpiesznie"},{"tr":"8","wo":"z premedytacją"}],"examples":[{"what":"adverb","row":"consciously and intentionally; on purpose.","example":"the fire was started deliberately"}]}',
    ),
    array( // row #914
        'word' => 'terror', 'pl_PL' => '{"noun":[{"tr":"24","wo":"terror"},{"tr":"24","wo":"przerażenie"},{"tr":"16","wo":"postrach"},{"tr":"16","wo":"groza"},{"tr":"16","wo":"trwoga"},{"tr":"8","wo":"paniczny"}],"examples":[{"what":"noun","row":"extreme fear.","example":"people fled in terror"}]}',
    ),
    array( // row #915
        'word' => 'propaganda', 'pl_PL' => '{"noun":[{"tr":"24","wo":"propaganda"},{"tr":"8","wo":"agitacja"}],"examples":[{"what":"noun","row":"information, especially of a biased or misleading nature, used to promote or publicize a particular political cause or point of view.","example":"he was charged with distributing enemy propaganda"}]}',
    ),
    array( // row #916
        'word' => 'abandon', 'pl_PL' => '{"verb":[{"tr":"24","wo":"porzucić"},{"tr":"8","wo":"pozostawiać"},{"tr":"8","wo":"osamotnić"},{"tr":"8","wo":"zarzucać"},{"tr":"8","wo":"rezygnować"},{"tr":"8","wo":"zrezygnować z czegoś"},{"tr":"8","wo":"cofać"},{"tr":"8","wo":"odstąpić"},{"tr":"8","wo":"odwracać"},{"tr":"8","wo":"odstać"},{"tr":"8","wo":"odpadać"}],"noun":[{"tr":"8","wo":"żywiołowość"}],"examples":[{"what":"verb","row":"give up completely (a course of action, a practice, or a way of thinking).","example":"he had clearly abandoned all pretense of trying to succeed"},{"what":"noun","row":"complete lack of inhibition or restraint.","example":"she sings and sways with total abandon"}]}',
    ),
    array( // row #917
        'word' => 'listened', 'pl_PL' => '{"verb":[{"tr":"24","wo":"słuchać"},{"tr":"24","wo":"posłuchać"},{"tr":"8","wo":"usłuchać"},{"tr":"8","wo":"przysłuchiwać się"}],"examples":[{"what":"verb","row":"give one\'s attention to a sound.","example":"evidently he was not listening"}]}',
    ),
    array( // row #918
        'word' => 'historian', 'pl_PL' => '{"noun":[{"tr":"24","wo":"historyk"}],"examples":[{"what":"noun","row":"an expert in or student of history, especially that of a particular period, geographical region, or social phenomenon.","example":"a military historian"}]}',
    ),
    array( // row #919
        'word' => 'impressed', 'pl_PL' => '{"verb":[{"tr":"16","wo":"imponować"},{"tr":"16","wo":"wywierać wrażenie"},{"tr":"8","wo":"odciskać"},{"tr":"8","wo":"wpajać"},{"tr":"8","wo":"przemawiać"},{"tr":"8","wo":"odcisnąć odbicie"},{"tr":"8","wo":"wytłaczać"},{"tr":"8","wo":"zużytkować"},{"tr":"8","wo":"frapować"},{"tr":"8","wo":"zarekwirować"},{"tr":"8","wo":"wrazić komuś coś w pamięć"}],"examples":[{"what":"verb","row":"make (someone) feel admiration and respect.","example":"they immediately impressed the judges"}]}',
    ),
    array( // row #920
        'word' => 'dreams', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sen"},{"tr":"24","wo":"marzenie"},{"tr":"8","wo":"urojenie"},{"tr":"8","wo":"mara"}],"verb":[{"tr":"24","wo":"marzyć"},{"tr":"24","wo":"pomarzyć"},{"tr":"16","wo":"śnić"},{"tr":"8","wo":"zamarzyć"},{"tr":"8","wo":"podumać"},{"tr":"8","wo":"roić"},{"tr":"8","wo":"prześnić"},{"tr":"8","wo":"uroić sobie"},{"tr":"8","wo":"zaroić"},{"tr":"8","wo":"dośpiewać"}],"examples":[{"what":"noun","row":"a series of thoughts, images, and sensations occurring in a person\'s mind during sleep.","example":"I had a recurrent dream about falling from great heights"},{"what":"verb","row":"experience dreams during sleep.","example":"I dreamed about her last night"}]}',
    ),
    array( // row #921
        'word' => 'era', 'pl_PL' => '{"noun":[{"tr":"24","wo":"era"},{"tr":"24","wo":"epoka"},{"tr":"8","wo":"wiek"},{"tr":"8","wo":"doba"}],"examples":[{"what":"noun","row":"a long and distinct period of history with a particular feature or characteristic.","example":"his death marked the end of an era"},{"what":"abbreviation","row":"earned run average.","example":null}]}',
    ),
    array( // row #922
        'word' => 'Associations', 'pl_PL' => '{"noun":[{"tr":"8","wo":"wspomnienia"}],"examples":[{"what":"noun","row":"the power to influence or direct people\'s behavior or the course of events.","example":"the whole operation is under the control of a production manager"},{"what":"verb","row":"determine the behavior or supervise the running of.","example":"he was appointed to control the company\'s marketing strategy"}]}',
    ),
    array( // row #923
        'word' => 'controls', 'pl_PL' => '{"noun":[{"tr":"16","wo":"sterownica"}],"examples":[{"what":"noun","row":"the power to influence or direct people\'s behavior or the course of events.","example":"the whole operation is under the control of a production manager"},{"what":"verb","row":"determine the behavior or supervise the running of.","example":"he was appointed to control the company\'s marketing strategy"}]}',
    ),
    array( // row #924
        'word' => 'LOCKED', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zamknięty"}],"examples":[{"what":"noun","row":"a straight line or plane that touches a curve or curved surface at a point, but if extended does not cross it at that point.","example":"He noticed that he could draw three straight lines, or tangents , that each touched all three circles."},{"what":"adjective","row":"(of a line or plane) touching, but not intersecting, a curve or curved surface.","example":"Smooth infinitesimal analysis embodies a concept of intensive magnitude in the form of infinitesimal tangent vectors to curves."}]}',
    ),
    array( // row #925
        'word' => 'cuts', 'pl_PL' => '{"verb":[{"tr":"24","wo":"ciąć"},{"tr":"16","wo":"pokroić"},{"tr":"16","wo":"przeciąć"}],"noun":[{"tr":"24","wo":"cięcie"},{"tr":"16","wo":"nacięcie"},{"tr":"16","wo":"wycięcie"},{"tr":"16","wo":"obniżka"},{"tr":"8","wo":"redukcja"},{"tr":"8","wo":"przecięcie"},{"tr":"8","wo":"fason"},{"tr":"8","wo":"rozcięcie"},{"tr":"8","wo":"szlif"}],"examples":[{"what":"noun","row":"an act of cutting, in particular.","example":null},{"what":"verb","row":"make an opening, incision, or wound in (something) with a sharp-edged tool or object.","example":"he cut his big toe on a sharp stone"}]}',
    ),
    array( // row #926
        'word' => 'dates', 'pl_PL' => '{"noun":[{"tr":"24","wo":"data"},{"tr":"16","wo":"randka"},{"tr":"8","wo":"termin płatności"},{"tr":"8","wo":"daktyl"}],"verb":[{"tr":"16","wo":"datować"},{"tr":"8","wo":"datować się"},{"tr":"8","wo":"pochodzić z danego okresu"}],"examples":[{"what":"noun","row":"the day of the month or year as specified by a number.","example":"what\'s the date today?"},{"what":"verb","row":"establish or ascertain the date of (an object or event).","example":"they date the paintings to 1460â70"}]}',
    ),
    array( // row #927
        'word' => 'tangent', 'pl_PL' => '{"noun":[{"tr":"24","wo":"tangens"},{"tr":"24","wo":"styczna"}],"examples":[{"what":"noun","row":"a straight line or plane that touches a curve or curved surface at a point, but if extended does not cross it at that point.","example":"He noticed that he could draw three straight lines, or tangents , that each touched all three circles."},{"what":"adjective","row":"(of a line or plane) touching, but not intersecting, a curve or curved surface.","example":"Smooth infinitesimal analysis embodies a concept of intensive magnitude in the form of infinitesimal tangent vectors to curves."}]}',
    ),
    array( // row #928
        'word' => 'velocity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"prędkość"},{"tr":"16","wo":"szybkość"},{"tr":"8","wo":"chyżość"}],"examples":[{"what":"noun","row":"the speed of something in a given direction.","example":"the velocities of the emitted particles"}]}',
    ),
    array( // row #929
        'word' => 'Lane', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pas ruchu"},{"tr":"16","wo":"tor"},{"tr":"16","wo":"dróżka"},{"tr":"8","wo":"aleja"},{"tr":"8","wo":"alejka"},{"tr":"8","wo":"opłotek"}],"examples":[{"what":"noun","row":"a narrow road, especially in a rural area.","example":"she drove along the winding lane"}]}',
    ),
    array( // row #930
        'word' => 'aesthetic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"estetyczny"}],"examples":[{"what":"adjective","row":"concerned with beauty or the appreciation of beauty.","example":"the pictures give great aesthetic pleasure"},{"what":"noun","row":"a set of principles underlying and guiding the work of a particular artist or artistic movement.","example":"the Cubist aesthetic"}]}',
    ),
    array( // row #931
        'word' => 'suspended', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zawieszony"},{"tr":"16","wo":"wstrzymany"}],"examples":[{"what":"verb","row":"temporarily prevent from continuing or being in force or effect.","example":"work on the dam was suspended"}]}',
    ),
    array( // row #932
        'word' => 'phenomena', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zjawisko"},{"tr":"24","wo":"fenomen"}],"examples":[{"what":"noun","row":"a fact or situation that is observed to exist or happen, especially one whose cause or explanation is in question.","example":"glaciers are unique and interesting natural phenomena"}]}',
    ),
    array( // row #933
        'word' => 'identify', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zidentyfikować"},{"tr":"16","wo":"identyfikować"},{"tr":"16","wo":"rozpoznać"},{"tr":"8","wo":"utożsamiać"},{"tr":"8","wo":"wylegitymować"},{"tr":"8","wo":"legitymować"},{"tr":"8","wo":"ustalać tożsamość"}],"examples":[{"what":"verb","row":"establish or indicate who or what (someone or something) is.","example":"the judge ordered that the girl not be identified"}]}',
    ),
    array( // row #934
        'word' => 'players', 'pl_PL' => '{"noun":[{"tr":"24","wo":"odtwarzacz"},{"tr":"24","wo":"gracz"},{"tr":"16","wo":"zawodnik"},{"tr":"8","wo":"muzyk"},{"tr":"8","wo":"aktor"}],"examples":[{"what":"noun","row":"a person taking part in a sport or game.","example":"a tennis player"}]}',
    ),
    array( // row #935
        'word' => 'Yankees', 'pl_PL' => '{"noun":[{"tr":"16","wo":"Jankes"}],"examples":[{"what":"noun","row":"a person who lives in, or is from, the US.","example":"Sistani is playing the fence, while Sadr has maintained a simple line from day one, Yankee go home."}]}',
    ),
    array( // row #936
        'word' => 'perspective', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"perspektywiczny"}],"noun":[{"tr":"24","wo":"perspektywa"}],"examples":[{"what":"noun","row":"the art of drawing solid objects on a two-dimensional surface so as to give the right impression of their height, width, depth, and position in relation to each other when viewed from a particular point.","example":"a perspective drawing"}]}',
    ),
    array( // row #937
        'word' => 'ladder', 'pl_PL' => '{"noun":[{"tr":"24","wo":"drabina"}],"examples":[{"what":"noun","row":"a structure consisting of a series of bars or steps between two upright lengths of wood, metal, or rope, used for climbing up or down something.","example":"You run around climbing ladders , shimmying across ropes and running from one platform to another, collecting gems while avoiding the bad guys."},{"what":"verb","row":"(with reference to tights or stockings) develop or cause to develop a run.","example":null}]}',
    ),
    array( // row #938
        'word' => 'delivery', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dostawa"},{"tr":"24","wo":"dostarczanie"},{"tr":"16","wo":"dostarczenie"},{"tr":"8","wo":"połóg"},{"tr":"8","wo":"poród"},{"tr":"8","wo":"poddanie"},{"tr":"8","wo":"wydanie"},{"tr":"8","wo":"doręczenie"},{"tr":"8","wo":"odstawa"},{"tr":"8","wo":"dostawienie"},{"tr":"8","wo":"odtransportowanie"}],"adjective":[{"tr":"8","wo":"odstawowy"}],"examples":[{"what":"noun","row":"the action of delivering letters, packages, or ordered goods.","example":"allow up to 28 days for delivery"}]}',
    ),
    array( // row #939
        'word' => 'Sheets', 'pl_PL' => '{"noun":[{"tr":"24","wo":"prześcieradło"},{"tr":"24","wo":"arkusz"},{"tr":"16","wo":"warstwa"},{"tr":"16","wo":"płyta"},{"tr":"8","wo":"formularz"},{"tr":"8","wo":"płat"},{"tr":"8","wo":"listek"},{"tr":"8","wo":"płachta"},{"tr":"8","wo":"kartka papieru"},{"tr":"8","wo":"płaszczyzna"},{"tr":"8","wo":"tafla wody lub lodu"}],"examples":[{"what":"noun","row":"a large rectangular piece of cotton or other fabric, used on a bed to cover the mattress and as a layer beneath blankets when these are used.","example":"Sleeping blankets and covers, sheets and quilts have been made - with the children\'s assistance."},{"what":"verb","row":"cover with or wrap in a sheet or sheets.","example":"we sheeted a narrow bed"}]}',
    ),
    array( // row #940
        'word' => 'instances', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przykład"},{"tr":"24","wo":"instancja"},{"tr":"16","wo":"przypadek"},{"tr":"8","wo":"wypadek"}],"examples":[{"what":"noun","row":"an example or single occurrence of something.","example":"a serious instance of corruption"},{"what":"verb","row":"cite (a fact, case, etc.) as an instance or example.","example":"here he instances in particular the work of Bach"}]}',
    ),
    array( // row #941
        'word' => 'directions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kierunek"},{"tr":"16","wo":"reżyseria"},{"tr":"16","wo":"kierownictwo"},{"tr":"8","wo":"wskazówka"},{"tr":"8","wo":"adres"},{"tr":"8","wo":"nakierowanie"},{"tr":"8","wo":"naczelnictwo"}],"examples":[{"what":"noun","row":"a course along which someone or something moves.","example":"she set off in the opposite direction"}]}',
    ),
    array( // row #942
        'word' => 'appreciate', 'pl_PL' => '{"verb":[{"tr":"16","wo":"doceniać"},{"tr":"8","wo":"zdać sobie sprawę"},{"tr":"8","wo":"szacować"},{"tr":"8","wo":"cenić wysoko"},{"tr":"8","wo":"oceniać wartość czegoś"},{"tr":"8","wo":"poznać się"},{"tr":"8","wo":"podwyższać wartość pieniądza"},{"tr":"8","wo":"podrożeć"}],"examples":[{"what":"verb","row":"recognize the full worth of.","example":"she feels that he does not appreciate her"}]}',
    ),
    array( // row #943
        'word' => 'sophisticated', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wyrafinowany"},{"tr":"16","wo":"wyszukany"},{"tr":"8","wo":"wymyślny"},{"tr":"8","wo":"obyty"}],"examples":[{"what":"adjective","row":"(of a machine, system, or technique) developed to a high degree of complexity.","example":"highly sophisticated computer systems"}]}',
    ),
    array( // row #944
        'word' => 'allies', 'pl_PL' => '{"verb":[{"tr":"24","wo":"sprzymierzyć"},{"tr":"8","wo":"połączyć kogoś z kimś"},{"tr":"8","wo":"skoligacić"}],"noun":[{"tr":"24","wo":"sojusznik"},{"tr":"16","wo":"sprzymierzeniec"},{"tr":"8","wo":"aliant"}],"examples":[{"what":"noun","row":"a state formally cooperating with another for a military or other purpose, typically by treaty.","example":"Japan is, for all intents and purposes, our strongest ally in Asia at the moment."},{"what":"verb","row":"combine or unite a resource or commodity with (another) for mutual benefit.","example":"he allied his racing experience with his father\'s business acumen"}]}',
    ),
    array( // row #945
        'word' => 'justify', 'pl_PL' => '{"verb":[{"tr":"24","wo":"uzasadniać"},{"tr":"16","wo":"usprawiedliwiać"},{"tr":"8","wo":"wytłumaczyć"},{"tr":"8","wo":"justować"},{"tr":"8","wo":"motywować"},{"tr":"8","wo":"legitymować"},{"tr":"8","wo":"wybielić"}],"examples":[{"what":"verb","row":"show or prove to be right or reasonable.","example":"the person appointed has fully justified our confidence"}]}',
    ),
    array( // row #946
        'word' => 'representing', 'pl_PL' => '{"verb":[{"tr":"24","wo":"reprezentować"},{"tr":"16","wo":"przedstawiać"},{"tr":"8","wo":"wyobrażać"},{"tr":"8","wo":"wyrazić"},{"tr":"8","wo":"obrazować"},{"tr":"8","wo":"opisać"},{"tr":"8","wo":"odmalować"},{"tr":"8","wo":"być odpowiednikiem"},{"tr":"8","wo":"portretować"}],"examples":[{"what":"verb","row":"be entitled or appointed to act or speak for (someone), especially in an official capacity.","example":"for purposes of litigation, an infant can and must be represented by an adult"},{"what":"verb","row":"present (something) again, especially for further consideration or in an altered form.","example":"most of today\'s demonstrations will be re-presented on Friday"}]}',
    ),
    array( // row #947
        'word' => 'voting', 'pl_PL' => '{"noun":[{"tr":"24","wo":"głosowanie"}],"examples":[{"what":"verb","row":"give or register a vote.","example":"they voted against the resolution"}]}',
    ),
    array( // row #948
        'word' => 'Republicans', 'pl_PL' => '{"noun":[{"tr":"24","wo":"republikanin"}],"examples":[{"what":"noun","row":"a person advocating or supporting republican government.","example":"Third, the monarchists did not win the November 6 referendum: the republicans lost it."}]}',
    ),
    array( // row #949
        'word' => 'widespread', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"rozpowszechniony"},{"tr":"16","wo":"powszechny"},{"tr":"8","wo":"rozległy"},{"tr":"8","wo":"rozlewny"},{"tr":"8","wo":"ogólny"}],"examples":[{"what":"adjective","row":"found or distributed over a large area or number of people.","example":"there was widespread support for the war"}]}',
    ),
    array( // row #950
        'word' => 'saline', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"słony"},{"tr":"8","wo":"solny"},{"tr":"8","wo":"solankowy"}],"examples":[{"what":"adjective","row":"containing or impregnated with salt.","example":"saline alluvial soils"},{"what":"noun","row":"a solution of salt in water.","example":"A saline abortion is a solution of salt saline that is injected into the mothers womb."}]}',
    ),
    array( // row #951
        'word' => 'inherent', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"nieodłączny"},{"tr":"8","wo":"obecny"},{"tr":"8","wo":"właściwy"},{"tr":"8","wo":"tkwiący"}],"examples":[{"what":"adjective","row":"existing in something as a permanent, essential, or characteristic attribute.","example":"any form of mountaineering has its inherent dangers"}]}',
    ),
    array( // row #952
        'word' => 'evaluation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ocena"},{"tr":"16","wo":"ewaluacja"},{"tr":"8","wo":"wycena"},{"tr":"8","wo":"cenienie"},{"tr":"8","wo":"kwalifikacja"},{"tr":"8","wo":"ocenianie"},{"tr":"8","wo":"obliczanie"},{"tr":"8","wo":"obrachowanie"}],"examples":[{"what":"noun","row":"the making of a judgment about the amount, number, or value of something; assessment.","example":"the evaluation of each method"}]}',
    ),
    array( // row #953
        'word' => 'basement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"piwnica"},{"tr":"16","wo":"suterena"},{"tr":"8","wo":"podziemie"},{"tr":"8","wo":"fundament"}],"examples":[{"what":"noun","row":"the floor of a building partly or entirely below ground level.","example":"The house is divided horizontally so that she has the basement and ground floor and he has the first and second."}]}',
    ),
    array( // row #954
        'word' => 'gently', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"delikatnie"},{"tr":"24","wo":"łagodnie"},{"tr":"16","wo":"lekko"},{"tr":"8","wo":"cicho"},{"tr":"8","wo":"uważnie"}],"examples":[{"what":"adjective","row":"made of plastic.","example":"plastic bags"},{"what":"noun","row":"a synthetic material made from a wide range of organic polymers such as polyethylene, PVC, nylon, etc., that can be molded into shape while soft and then set into a rigid or slightly elastic form.","example":"It can act as a feedstock for a number of organic compounds, and is already used to produce low phosphate detergents and plastics ."}]}',
    ),
    array( // row #955
        'word' => 'locking', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zamykający"}],"examples":[{"what":"adjective","row":"made of plastic.","example":"plastic bags"},{"what":"noun","row":"a synthetic material made from a wide range of organic polymers such as polyethylene, PVC, nylon, etc., that can be molded into shape while soft and then set into a rigid or slightly elastic form.","example":"It can act as a feedstock for a number of organic compounds, and is already used to produce low phosphate detergents and plastics ."}]}',
    ),
    array( // row #956
        'word' => 'plastic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"plastikowy"},{"tr":"8","wo":"plastyczny"},{"tr":"8","wo":"giętki"},{"tr":"8","wo":"podatny"},{"tr":"8","wo":"twórczy"},{"tr":"8","wo":"sztuczny"},{"tr":"8","wo":"plastykowy"},{"tr":"8","wo":"masowy"}],"noun":[{"tr":"8","wo":"plastyk"}],"examples":[{"what":"adjective","row":"made of plastic.","example":"plastic bags"},{"what":"noun","row":"a synthetic material made from a wide range of organic polymers such as polyethylene, PVC, nylon, etc., that can be molded into shape while soft and then set into a rigid or slightly elastic form.","example":"It can act as a feedstock for a number of organic compounds, and is already used to produce low phosphate detergents and plastics ."}]}',
    ),
    array( // row #957
        'word' => 'accordingly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"odpowiednio"},{"tr":"8","wo":"przeto"},{"tr":"8","wo":"zgodnie"},{"tr":"8","wo":"stosownie do tego"}],"examples":[{"what":"adverb","row":"in a way that is appropriate to the particular circumstances.","example":"we have to discover what his plans are and act accordingly"}]}',
    ),
    array( // row #958
        'word' => 'frequencies', 'pl_PL' => '{"noun":[{"tr":"24","wo":"częstotliwość"},{"tr":"16","wo":"częstość"}],"examples":[{"what":"noun","row":"the rate at which something occurs or is repeated over a particular period of time or in a given sample.","example":"shops have closed with increasing frequency during the period"}]}',
    ),
    array( // row #959
        'word' => 'rid', 'pl_PL' => '{"verb":[{"tr":"16","wo":"pozbyć się"},{"tr":"8","wo":"oczyścić"},{"tr":"8","wo":"wybawić"}],"examples":[{"what":"verb","row":"make someone or something free of (a troublesome or unwanted person or thing).","example":"we now have the greatest chance ever to rid the world of nuclear weapons"}]}',
    ),
    array( // row #960
        'word' => 'composer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kompozytor"},{"tr":"8","wo":"muzyk"}],"examples":[{"what":"noun","row":"a person who writes music, especially as a professional occupation.","example":"There are also composers who write concert music that cries out to be used in films."}]}',
    ),
    array( // row #961
        'word' => 'perfectly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"doskonale"},{"tr":"24","wo":"idealnie"},{"tr":"16","wo":"zupełnie"},{"tr":"8","wo":"celująco"},{"tr":"8","wo":"absolutnie"},{"tr":"8","wo":"wybornie"},{"tr":"8","wo":"wzorowo"},{"tr":"8","wo":"wyśmienicie"},{"tr":"8","wo":"bezbłędnie"},{"tr":"8","wo":"pięknie"}],"examples":[{"what":"adverb","row":"in a manner or way that could not be better.","example":"the ring fitted perfectly"}]}',
    ),
    array( // row #962
        'word' => 'considerations', 'pl_PL' => '{"noun":[{"tr":"16","wo":"wynagrodzenie"},{"tr":"16","wo":"wzgląd"},{"tr":"8","wo":"rozwaga"},{"tr":"8","wo":"przemyślenie"},{"tr":"8","wo":"namysł"},{"tr":"8","wo":"moment"},{"tr":"8","wo":"delikatność"},{"tr":"8","wo":"rozmysł"},{"tr":"8","wo":"deliberacja"},{"tr":"8","wo":"uwaga"}],"examples":[{"what":"noun","row":"careful thought, typically over a period of time.","example":"a long process involving a great deal of careful consideration"}]}',
    ),
    array( // row #963
        'word' => 'assist', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wspierać"},{"tr":"16","wo":"pomagać"},{"tr":"16","wo":"asystować"},{"tr":"8","wo":"brać udział"},{"tr":"8","wo":"odprowadzać"},{"tr":"8","wo":"być obecnym"}],"examples":[{"what":"verb","row":"help (someone), typically by doing a share of the work.","example":"a senior academic would assist him in his work"},{"what":"noun","row":"an act of helping, typically by providing money.","example":"the budget must have an assist from tax policies"}]}',
    ),
    array( // row #964
        'word' => 'articles', 'pl_PL' => '{"noun":[{"tr":"24","wo":"artykuł"},{"tr":"16","wo":"wyrób"},{"tr":"16","wo":"przedmiot"},{"tr":"8","wo":"paragraf"},{"tr":"8","wo":"towar"},{"tr":"8","wo":"przedimek"},{"tr":"8","wo":"rodzajnik"},{"tr":"8","wo":"hasło"}],"verb":[{"tr":"8","wo":"ustalać punkty"},{"tr":"8","wo":"oskarżać"},{"tr":"8","wo":"oddać do terminu"},{"tr":"8","wo":"sporządzać akt oskarżenia"}],"examples":[{"what":"noun","row":"a particular item or object, typically one of a specified type.","example":"small household articles"},{"what":"verb","row":"bind by the terms of a contract, as one of apprenticeship.","example":"It\'s a crying shameâ¦ My father paid three hundred quid to have me articled ."}]}',
    ),
    array( // row #965
        'word' => 'outcome', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wynik"},{"tr":"16","wo":"rezultat"}],"examples":[{"what":"noun","row":"the way a thing turns out; a consequence.","example":"it is the outcome of the vote that counts"}]}',
    ),
    array( // row #966
        'word' => 'ceiling', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sufit"},{"tr":"24","wo":"pułap"},{"tr":"16","wo":"strop"},{"tr":"8","wo":"stropowanie"},{"tr":"8","wo":"powała"},{"tr":"8","wo":"plafon"},{"tr":"8","wo":"podbicie"}],"examples":[{"what":"noun","row":"the upper interior surface of a room or other similar compartment.","example":"Hard landscape materials are the walls, floors and ceilings of our outdoor rooms."}]}',
    ),
    array( // row #967
        'word' => 'invariably', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"niezmiennie"},{"tr":"24","wo":"nieodmiennie"},{"tr":"8","wo":"niewzruszenie"}],"examples":[{"what":"adverb","row":"in every case or on every occasion; always.","example":"the meals here are invariably big and hearty"}]}',
    ),
    array( // row #968
        'word' => 'intelligent', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"inteligentny"},{"tr":"16","wo":"rozumny"},{"tr":"8","wo":"mądry"},{"tr":"8","wo":"pojętny"}],"examples":[{"what":"adjective","row":"having or showing intelligence, especially of a high level.","example":"Annabelle is intelligent and hardworking"}]}',
    ),
    array( // row #969
        'word' => 'softly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"delikatnie"}],"examples":[{"what":"adverb","row":"in a quiet voice or manner.","example":"âCan\'t you sleep?â she asked softly"}]}',
    ),
    array( // row #970
        'word' => 'controversy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"spór"},{"tr":"24","wo":"kontrowersja"},{"tr":"16","wo":"polemika"},{"tr":"8","wo":"dysputa"},{"tr":"8","wo":"dyskusja"}],"examples":[{"what":"noun","row":"disagreement, typically when prolonged, public, and heated.","example":"he sometimes caused controversy because of his forceful views"}]}',
    ),
    array( // row #971
        'word' => 'respectively', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"odpowiednio"},{"tr":"8","wo":"kolejno"}],"examples":[{"what":"adverb","row":"separately or individually and in the order already mentioned (used when enumerating two or more items or facts that refer back to a previous statement).","example":"they received sentences of one year and eight months, respectively"}]}',
    ),
    array( // row #972
        'word' => 'eliminate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wyeliminować"},{"tr":"16","wo":"eliminować"},{"tr":"16","wo":"usunąć"},{"tr":"8","wo":"rugować"},{"tr":"8","wo":"wydalać"},{"tr":"8","wo":"znieść"},{"tr":"8","wo":"wydzielać"},{"tr":"8","wo":"odłączyć"},{"tr":"8","wo":"wyłączać"},{"tr":"8","wo":"wyabstrahować"}],"examples":[{"what":"verb","row":"completely remove or get rid of (something).","example":"a policy that would eliminate inflation"}]}',
    ),
    array( // row #973
        'word' => 'markets', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rynek"},{"tr":"16","wo":"targ"},{"tr":"8","wo":"targowisko"},{"tr":"8","wo":"jarmark"},{"tr":"8","wo":"handel"},{"tr":"8","wo":"zbyt"},{"tr":"8","wo":"rynek zbytu"},{"tr":"8","wo":"ceny"}],"verb":[{"tr":"8","wo":"zrobić zakupy"},{"tr":"8","wo":"sprzedać na targu"},{"tr":"8","wo":"znajdować zbyt"}],"examples":[{"what":"noun","row":"a regular gathering of people for the purchase and sale of provisions, livestock, and other commodities.","example":"farmers going to market"},{"what":"verb","row":"advertise or promote (something).","example":"the product was marketed under the name âaspirin.â"}]}',
    ),
    array( // row #974
        'word' => 'Outer', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zewnętrzny"},{"tr":"8","wo":"wierzchni"}],"examples":[{"what":"adjective","row":"outside; external.","example":"the outer door"}]}',
    ),
    array( // row #975
        'word' => 'muscles', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mięsień"},{"tr":"8","wo":"muskuł"}],"examples":[{"what":"noun","row":"a band or bundle of fibrous tissue in a human or animal body that has the ability to contract, producing movement in or maintaining the position of parts of the body.","example":"the calf muscle"},{"what":"verb","row":"move (an object) in a particular direction by using one\'s physical strength.","example":"they were muscling baggage into the hold of the plane"}]}',
    ),
    array( // row #976
        'word' => 'troubled', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zmartwiony"},{"tr":"16","wo":"niespokojny"}],"examples":[{"what":"adjective","row":"beset by problems or conflict.","example":"his troubled private life"},{"what":"verb","row":"cause distress or anxiety to.","example":"he was not troubled by doubts"}]}',
    ),
    array( // row #977
        'word' => 'gallery', 'pl_PL' => '{"noun":[{"tr":"24","wo":"galeria"},{"tr":"8","wo":"arkady"},{"tr":"8","wo":"krużganek"},{"tr":"8","wo":"ganek"},{"tr":"8","wo":"chodnik w kopalni"},{"tr":"8","wo":"jaskółka"},{"tr":"8","wo":"chór"},{"tr":"8","wo":"balkon"}],"examples":[{"what":"noun","row":"a room or building for the display or sale of works of art.","example":"Many galleries display the art prints without prices - hoping to get more easily into an e-mail contact with their visitors."}]}',
    ),
    array( // row #978
        'word' => 'films', 'pl_PL' => '{"noun":[{"tr":"24","wo":"film"},{"tr":"16","wo":"błona"},{"tr":"8","wo":"błonka"},{"tr":"8","wo":"cienka powłoka"},{"tr":"8","wo":"mgiełka"},{"tr":"8","wo":"mgła"},{"tr":"8","wo":"bielmo"},{"tr":"8","wo":"kożuch na mleku"}],"verb":[{"tr":"16","wo":"filmować"},{"tr":"8","wo":"ekranizować"},{"tr":"8","wo":"pokryć emulsją"}],"examples":[{"what":"noun","row":"a thin flexible strip of plastic or other material coated with light-sensitive emulsion for exposure in a camera, used to produce photographs or motion pictures.","example":"he had already shot a whole roll of film"},{"what":"verb","row":"capture on film as part of a series of moving images; make a movie of (a story or event).","example":"she glowered at the television crew who were filming them"}]}',
    ),
    array( // row #979
        'word' => 'poetic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"poetycki"},{"tr":"16","wo":"poetyczny"}],"examples":[{"what":"adjective","row":"of, relating to, or used in poetry.","example":"the muse is a poetic convention"}]}',
    ),
    array( // row #980
        'word' => 'Christianity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"chrześcijaństwo"},{"tr":"8","wo":"chrystianizm"}],"examples":[{"what":"noun","row":"the religion based on the person and teachings of Jesus of Nazareth, or its beliefs and practices.","example":"It is argued that he was the first to make Christianity a new religion, rather than a sect of Judaism."}]}',
    ),
    array( // row #981
        'word' => 'Trail', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szlak"},{"tr":"24","wo":"ślad"},{"tr":"16","wo":"smuga"},{"tr":"16","wo":"trop"},{"tr":"8","wo":"szlaczek"},{"tr":"8","wo":"struga"},{"tr":"8","wo":"bruzda po kołach"}],"verb":[{"tr":"16","wo":"ciągnąć"},{"tr":"8","wo":"tropić"},{"tr":"8","wo":"powłóczyć"},{"tr":"8","wo":"smużyć się"},{"tr":"8","wo":"czołgać się"}],"examples":[{"what":"noun","row":"a mark or a series of signs or objects left behind by the passage of someone or something.","example":"a trail of blood on the grass"},{"what":"verb","row":"draw or be drawn along the ground or other surface behind someone or something.","example":"Alex trailed a hand through the clear water"}]}',
    ),
    array( // row #982
        'word' => 'lightly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"lekko"},{"tr":"8","wo":"lekceważąco"}],"examples":[{"what":"adverb","row":"gently, delicately or softly.","example":"she placed her hand lightly on my shoulder"}]}',
    ),
    array( // row #983
        'word' => 'competitive', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"konkurencyjny"},{"tr":"8","wo":"konkursowy"}],"examples":[{"what":"adjective","row":"of, relating to, or characterized by competition.","example":"a competitive sport"}]}',
    ),
    array( // row #984
        'word' => 'colored', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"kolorowy"},{"tr":"16","wo":"barwny"},{"tr":"16","wo":"barwiony"},{"tr":"8","wo":"krasny"}],"examples":[{"what":"adjective","row":"having or having been given a color or colors, especially as opposed to being black, white, or neutral.","example":"brightly colored birds are easier to see"},{"what":"noun","row":"a person who is wholly or partly of nonwhite descent.","example":null}]}',
    ),
    array( // row #985
        'word' => 'selling', 'pl_PL' => '{"noun":[{"tr":"16","wo":"sprzedawanie"},{"tr":"8","wo":"sprzedanie"}],"adjective":[{"tr":"16","wo":"sprzedający"}],"examples":[{"what":"noun","row":"the action or process of recording sound or a performance for subsequent reproduction or broadcast.","example":"a recording studio"}]}',
    ),
    array( // row #986
        'word' => 'parking', 'pl_PL' => '{"noun":[{"tr":"24","wo":"parking"},{"tr":"24","wo":"parkowanie"}],"examples":[{"what":"noun","row":"the action or process of recording sound or a performance for subsequent reproduction or broadcast.","example":"a recording studio"}]}',
    ),
    array( // row #987
        'word' => 'recording', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nagranie"},{"tr":"16","wo":"zapis"}],"adjective":[{"tr":"8","wo":"notujący"}],"examples":[{"what":"noun","row":"the action or process of recording sound or a performance for subsequent reproduction or broadcast.","example":"a recording studio"}]}',
    ),
    array( // row #988
        'word' => 'maid', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pokojówka"},{"tr":"24","wo":"panna"},{"tr":"8","wo":"dziewczyna"}],"examples":[{"what":"noun","row":"a female domestic servant.","example":"An army of servants - maids , footmen, cooks and gardeners - made the luxurious lifestyle of the family possible."}]}',
    ),
    array( // row #989
        'word' => 'define', 'pl_PL' => '{"verb":[{"tr":"24","wo":"określić"},{"tr":"16","wo":"definiować"},{"tr":"8","wo":"oznaczać granicę"},{"tr":"8","wo":"narysować kontury"},{"tr":"8","wo":"zdeterminować"},{"tr":"8","wo":"stanowić charakterystykę"}],"examples":[{"what":"verb","row":"state or describe exactly the nature, scope, or meaning of.","example":"the contract will seek to define the client\'s obligations"}]}',
    ),
    array( // row #990
        'word' => 'studio', 'pl_PL' => '{"noun":[{"tr":"24","wo":"studio"},{"tr":"8","wo":"pracownia artystyczna"},{"tr":"8","wo":"atelier"}],"adjective":[{"tr":"8","wo":"pracowniany"}],"examples":[{"what":"noun","row":"a room where an artist, photographer, sculptor, etc., works.","example":"In the past, these brick relics have seen service as artists\' studios , photographers\' darkrooms and birdwatchers\' huts."}]}',
    ),
    array( // row #991
        'word' => 'fallout', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wypadać"},{"tr":"8","wo":"pokłócić się"},{"tr":"8","wo":"poróżnić się"},{"tr":"8","wo":"wychodzić"},{"tr":"8","wo":"rozejść się"},{"tr":"8","wo":"obleźć"},{"tr":"8","wo":"odetkać się"},{"tr":"8","wo":"składać się"}],"examples":[{"what":"noun","row":"radioactive particles that are carried into the atmosphere after a nuclear explosion or accident and gradually fall back as dust or in precipitation.","example":"Belarus was one of the territories affected by the radioactive fallout from the Chernobyl nuclear reactor disaster in 1986."}]}',
    ),
    array( // row #992
        'word' => 'successfully', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"skutecznie"}],"examples":[{"what":"verb","row":"not prevent or forbid; allow.","example":"my boss let me leave early"}]}',
    ),
    array( // row #993
        'word' => 'letting', 'pl_PL' => '{"verb":[{"tr":"24","wo":"pozwolić"},{"tr":"16","wo":"dać"},{"tr":"8","wo":"dopuszczać"},{"tr":"8","wo":"wynająć"},{"tr":"8","wo":"napadać"},{"tr":"8","wo":"nie przeszkadzać"},{"tr":"8","wo":"nadać się do wynajmowania"}],"examples":[{"what":"verb","row":"not prevent or forbid; allow.","example":"my boss let me leave early"}]}',
    ),
    array( // row #994
        'word' => 'ending', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zakończenie"},{"tr":"16","wo":"końcówka"}],"adjective":[{"tr":"24","wo":"kończący się"}],"examples":[{"what":"noun","row":"an end or final part of something, especially a period of time, an activity, or a book or movie.","example":"the ending of the Cold War"},{"what":"verb","row":"come or bring to a final point; finish.","example":"when the war ended, policy changed"}]}',
    ),
    array( // row #995
        'word' => 'fourteen', 'pl_PL' => '{"aaaaaa":[{"tr":"24","wo":"czternaście"}],"noun":[{"tr":"8","wo":"czternastka"}],"examples":[{"what":"","row":"equivalent to the product of seven and two; one more than thirteen, or six less than twenty; 14.","example":"they had spent fourteen days in solitary confinement"}]}',
    ),
    array( // row #996
        'word' => 'brick', 'pl_PL' => '{"noun":[{"tr":"24","wo":"cegła"},{"tr":"8","wo":"przyjaciel"},{"tr":"8","wo":"zuch"},{"tr":"8","wo":"kostka"}],"adjective":[{"tr":"24","wo":"ceglany"}],"examples":[{"what":"noun","row":"a small rectangular block typically made of fired or sun-dried clay, used in building.","example":"Mud and wattle or sun-dried bricks are used in house building in rural areas; well-off families may use concrete blocks."},{"what":"verb","row":"block or enclose with a wall of bricks.","example":"the doors have been bricked up"}]}',
    ),
    array( // row #997
        'word' => 'strain', 'pl_PL' => '{"verb":[{"tr":"24","wo":"odcedzić"},{"tr":"8","wo":"natężać"},{"tr":"8","wo":"prężyć"},{"tr":"8","wo":"nadwyrężać"},{"tr":"8","wo":"wytężać"},{"tr":"8","wo":"naderwać"},{"tr":"8","wo":"wysilać"},{"tr":"8","wo":"dążyć"},{"tr":"8","wo":"fasować"},{"tr":"8","wo":"naciągnąć"}],"noun":[{"tr":"16","wo":"odkształcenie"},{"tr":"16","wo":"wysiłek"}],"examples":[{"what":"noun","row":"a force tending to pull or stretch something to an extreme or damaging degree.","example":"the usual type of chair puts an enormous strain on the spine"},{"what":"verb","row":"force (a part of one\'s body or oneself) to make a strenuous or unusually great effort.","example":"I stopped and listened, straining my ears for any sound"}]}',
    ),
    array( // row #998
        'word' => 'secondary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wtórny"},{"tr":"16","wo":"poboczny"},{"tr":"16","wo":"drugorzędny"},{"tr":"8","wo":"podrzędny"},{"tr":"8","wo":"niepierwotny"}],"examples":[{"what":"adjective","row":"coming after, less important than, or resulting from someone or something else that is primary.","example":"luck plays a role, but it\'s ultimately secondary to local knowledge"},{"what":"noun","row":"short for.","example":"The Government has been accused of distorting school league tables in a bid to persuade secondaries to impose its new diploma on pupils."}]}',
    ),
    array( // row #999
        'word' => 'anyhow', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"w każdym razie"},{"tr":"16","wo":"zresztą"},{"tr":"16","wo":"byle jak"},{"tr":"16","wo":"tak czy owak"},{"tr":"16","wo":"jakkolwiek"}],"examples":[{"what":"adverb","row":"in a careless or haphazard way.","example":"two suitcases flung anyhow"}]}',
    ),
    array( // row #1 000
        'word' => 'Pacific', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Pacyfik"},{"tr":"8","wo":"Ocean Spokojny"}],"examples":[{"what":"noun","row":"a person who dances or whose profession is dancing.","example":"Even professional dancers have to go through a ballet class every day as a physical work out."}]}',
    ),
    array( // row #1 001
        'word' => 'dancer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"tancerz"},{"tr":"24","wo":"tancerka"}],"examples":[{"what":"noun","row":"a person who dances or whose profession is dancing.","example":"Even professional dancers have to go through a ballet class every day as a physical work out."}]}',
    ),
    array( // row #1 002
        'word' => 'movies', 'pl_PL' => '{"noun":[{"tr":"16","wo":"kino"}],"examples":[{"what":"noun","row":"a removable or hinged cover for the top of a container.","example":"a large frying pan with a lid"}]}',
    ),
    array( // row #1 003
        'word' => 'lid', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pokrywa"},{"tr":"24","wo":"pokrywka"},{"tr":"24","wo":"wieczko"},{"tr":"16","wo":"wieko"},{"tr":"16","wo":"przykrywka"},{"tr":"8","wo":"wierzch"},{"tr":"8","wo":"przykrycie"},{"tr":"8","wo":"przykrywa"},{"tr":"8","wo":"dekiel"},{"tr":"8","wo":"nakrywa"}],"examples":[{"what":"noun","row":"a removable or hinged cover for the top of a container.","example":"a large frying pan with a lid"}]}',
    ),
    array( // row #1 004
        'word' => 'he\'ll', 'pl_PL' => '{"noun":[{"tr":"24","wo":"piekło"},{"tr":"16","wo":"cholera"},{"tr":"8","wo":"piekielne męki"}],"examples":[{"what":"noun","row":"a place regarded in various religions as a spiritual realm of evil and suffering, often traditionally depicted as a place of perpetual fire beneath the earth where the wicked are punished after death.","example":"In that explanation, the hell realm was in the depths of the earth."},{"what":"exclamation","row":"used to express annoyance or surprise or for emphasis.","example":"oh, hellâwhere will this all end?"},{"what":"preposition","row":"he shall; he will.","example":"If he succeeds, he\'ll richly deserve one of those expensive cigars which are his trademark."}]}',
    ),
    array( // row #1 005
        'word' => 'helps', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pomoc"},{"tr":"8","wo":"wsparcie"},{"tr":"8","wo":"pomaganie"},{"tr":"8","wo":"ratunek"},{"tr":"8","wo":"wspomożenie"},{"tr":"8","wo":"dopomożenie"}],"verb":[{"tr":"16","wo":"pomagać"},{"tr":"8","wo":"posłużyć"},{"tr":"8","wo":"poradzić"},{"tr":"8","wo":"wspomagać"},{"tr":"8","wo":"dopomagać"},{"tr":"8","wo":"wyręczać"}],"examples":[{"what":"noun","row":"the action of helping someone to do something; assistance.","example":"I asked for help from my neighbors"},{"what":"verb","row":"make it easier for (someone) to do something by offering one\'s services or resources.","example":"Roger\'s companion helped him with the rent"}]}',
    ),
    array( // row #1 006
        'word' => 'cottage', 'pl_PL' => '{"noun":[{"tr":"16","wo":"chata"},{"tr":"8","wo":"dworek wiejski"},{"tr":"8","wo":"mała willa"}],"examples":[{"what":"noun","row":"a small simple house, typically one near a lake or beach.","example":"About a third of homes in the upper Yorkshire Dales are second homes or holiday cottages and three-quarters of house sales are to outsiders."}]}',
    ),
    array( // row #1 007
        'word' => 'barely', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"zaledwie"},{"tr":"24","wo":"ledwo"},{"tr":"8","wo":"otwarcie"},{"tr":"8","wo":"ubogo"}],"examples":[{"what":"adverb","row":"only just; almost not.","example":"she nodded, barely able to speak"}]}',
    ),
    array( // row #1 008
        'word' => 'hatred', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nienawiść"}],"examples":[{"what":"noun","row":"intense dislike or ill will.","example":"racial hatred"}]}',
    ),
    array( // row #1 009
        'word' => 'seventh', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"siódmy"}],"examples":[{"what":"","row":"constituting number seven in a sequence; 7th.","example":"his seventh goal of the season"}]}',
    ),
    array( // row #1 010
        'word' => 'winning', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zwycięski"},{"tr":"16","wo":"wygrany"},{"tr":"8","wo":"ujmujący"}],"examples":[{"what":"adjective","row":"gaining, resulting in, or relating to victory in a contest or competition.","example":"a winning streak"},{"what":"noun","row":"money won, especially by gambling.","example":"he went to collect his winnings"}]}',
    ),
    array( // row #1 011
        'word' => 'poverty', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ubóstwo"},{"tr":"24","wo":"bieda"},{"tr":"8","wo":"brak"},{"tr":"8","wo":"mizerota"},{"tr":"8","wo":"niezasobność"}],"examples":[{"what":"noun","row":"the state of being extremely poor.","example":"thousands of families are living in abject poverty"}]}',
    ),
    array( // row #1 012
        'word' => 'knocked', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zapukać"},{"tr":"16","wo":"pukać"},{"tr":"8","wo":"stukać"},{"tr":"8","wo":"trącać"},{"tr":"8","wo":"trzaskać"},{"tr":"8","wo":"przysądzać"},{"tr":"8","wo":"gwizdnąć"}],"examples":[{"what":"verb","row":"strike a surface noisily to attract attention, especially when waiting to be let in through a door.","example":"I knocked on the kitchen door"}]}',
    ),
    array( // row #1 013
        'word' => 'convenience', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wygoda"},{"tr":"16","wo":"poręczność"},{"tr":"16","wo":"udogodnienie"},{"tr":"16","wo":"dogodność"}],"examples":[{"what":"noun","row":"the state of being able to proceed with something with little effort or difficulty.","example":"the museum has a cafeteria for your convenience"}]}',
    ),
    array( // row #1 014
        'word' => 'surplus', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nadwyżka"},{"tr":"24","wo":"nadmiar"},{"tr":"8","wo":"naddatek"},{"tr":"8","wo":"superata"}],"adjective":[{"tr":"8","wo":"nadwyżkowy"}],"examples":[{"what":"noun","row":"an amount of something left over when requirements have been met; an excess of production or supply over demand.","example":"exports of food surpluses"},{"what":"adjective","row":"more than what is needed or used; excess.","example":"make the most of your surplus cash"}]}',
    ),
    array( // row #1 015
        'word' => 'rob', 'pl_PL' => '{"verb":[{"tr":"24","wo":"obrabować"},{"tr":"24","wo":"okradać"},{"tr":"24","wo":"rabować"},{"tr":"16","wo":"ograbić"},{"tr":"16","wo":"zrabować"},{"tr":"8","wo":"grabić"},{"tr":"8","wo":"rozgrabić"},{"tr":"8","wo":"rozrabować"},{"tr":"8","wo":"nałupić"},{"tr":"8","wo":"obłupić"},{"tr":"8","wo":"napadać"},{"tr":"8","wo":"zawalić"}],"examples":[{"what":"verb","row":"take property unlawfully from (a person or place) by force or threat of force.","example":"he tried, with three others, to rob a bank"}]}',
    ),
    array( // row #1 016
        'word' => 'insist', 'pl_PL' => '{"verb":[{"tr":"16","wo":"obstawać"},{"tr":"16","wo":"domagać się"},{"tr":"16","wo":"upierać się"},{"tr":"16","wo":"podkreślać"},{"tr":"8","wo":"nalegać na coś"},{"tr":"8","wo":"doprosić"}],"examples":[{"what":"verb","row":"demand something forcefully, not accepting refusal.","example":"she insisted on carrying her own bag"}]}',
    ),
    array( // row #1 017
        'word' => 'Consequently', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"więc"},{"tr":"8","wo":"przeto"}],"examples":[{"what":"adverb","row":"as a result.","example":"flexible workers find themselves in great demand, and consequently earn high salaries"}]}',
    ),
    array( // row #1 018
        'word' => 'panel', 'pl_PL' => '{"noun":[{"tr":"16","wo":"płyta"},{"tr":"16","wo":"zespół"},{"tr":"8","wo":"płycina"},{"tr":"8","wo":"tablica rozdzielcza"},{"tr":"8","wo":"panneau"},{"tr":"8","wo":"tabliczka"},{"tr":"8","wo":"filunek"},{"tr":"8","wo":"wstawka wszyta w materiale"}],"verb":[{"tr":"8","wo":"wykładać boazerią"},{"tr":"8","wo":"wsunąć wstawki"}],"examples":[{"what":"noun","row":"a flat or curved component, typically rectangular, that forms or is set into the surface of a door, wall, or ceiling.","example":"a layer of insulating material should be placed between the panels and the wall"},{"what":"verb","row":"cover (a wall or other surface) with panels.","example":"an elegant paneled dining room"}]}',
    ),
    array( // row #1 019
        'word' => 'enterprise', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przedsiębiorstwo"},{"tr":"16","wo":"przedsiębiorczość"},{"tr":"16","wo":"przedsięwzięcie"},{"tr":"8","wo":"inicjatywa"},{"tr":"8","wo":"antrepryza"}],"examples":[{"what":"noun","row":"a project or undertaking, typically one that is difficult or requires effort.","example":"a joint enterprise between French and Japanese companies"}]}',
    ),
    array( // row #1 020
        'word' => 'companion', 'pl_PL' => '{"noun":[{"tr":"24","wo":"towarzysz"},{"tr":"16","wo":"kamrat"},{"tr":"8","wo":"kawaler"},{"tr":"8","wo":"podręcznik"},{"tr":"8","wo":"współtowarzysz"},{"tr":"8","wo":"kolega"},{"tr":"8","wo":"druh"},{"tr":"8","wo":"para"}],"verb":[{"tr":"8","wo":"towarzyszyć"},{"tr":"8","wo":"stanowić całość"},{"tr":"8","wo":"obcować"}],"examples":[{"what":"noun","row":"a person or animal with whom one spends a lot of time or with whom one travels.","example":"his traveling companion"},{"what":"verb","row":"accompany.","example":"he is companioned by a pageboy"}]}',
    ),
    array( // row #1 021
        'word' => 'alike', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"zarówno"},{"tr":"16","wo":"podobnie"},{"tr":"8","wo":"jednakowo"},{"tr":"8","wo":"tak samo"}],"adjective":[{"tr":"16","wo":"podobny"}],"examples":[{"what":"adjective","row":"(of two or more subjects) similar to each other.","example":"the brothers were very much alike"},{"what":"adverb","row":"in the same or a similar way.","example":"the girls dressed alike in black pants and jackets"}]}',
    ),
    array( // row #1 022
        'word' => 'acquire', 'pl_PL' => '{"verb":[{"tr":"24","wo":"nabyć"},{"tr":"16","wo":"zdobyć"},{"tr":"8","wo":"osiągać"},{"tr":"8","wo":"dokupić"},{"tr":"8","wo":"otrzymać"},{"tr":"8","wo":"przyswajać"},{"tr":"8","wo":"nabrać"},{"tr":"8","wo":"zyskać"},{"tr":"8","wo":"posiadać"}],"examples":[{"what":"verb","row":"buy or obtain (an object or asset) for oneself.","example":"Instead, tax will become payable automatically 30 days after the date that the purchaser acquires the property or land."}]}',
    ),
    array( // row #1 023
        'word' => 'mainly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"głównie"}],"examples":[{"what":"adverb","row":"more than anything else.","example":"he is mainly concerned with fiction"}]}',
    ),
    array( // row #1 024
        'word' => 'DOCTORS', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lekarz"},{"tr":"24","wo":"doktor"}],"verb":[{"tr":"8","wo":"leczyć"},{"tr":"8","wo":"promować"}],"examples":[{"what":"noun","row":"a qualified practitioner of medicine; a physician.","example":"It had resulted in asthma being the most common chronic illness treated by doctors in general practice."},{"what":"verb","row":"change the content or appearance of (a document or picture) in order to deceive; falsify.","example":"the reports could have been doctored"}]}',
    ),
    array( // row #1 025
        'word' => 'allowing', 'pl_PL' => '{"verb":[{"tr":"16","wo":"dopuszczać"},{"tr":"8","wo":"dać"},{"tr":"8","wo":"dozwolić"},{"tr":"8","wo":"uwzględniać"},{"tr":"8","wo":"przyznać"},{"tr":"8","wo":"przeznaczyć"},{"tr":"8","wo":"znieść"},{"tr":"8","wo":"pozwolić komuś na coś"},{"tr":"8","wo":"podpuścić"},{"tr":"8","wo":"znajdować"}],"examples":[{"what":"verb","row":"admit (an event or activity) as legal or acceptable.","example":"a plan to allow Sunday shopping"}]}',
    ),
    array( // row #1 026
        'word' => 'ruled', 'pl_PL' => '{"verb":[{"tr":"24","wo":"rządzić"},{"tr":"16","wo":"orzec"},{"tr":"16","wo":"panować"},{"tr":"8","wo":"władać"},{"tr":"8","wo":"królować"},{"tr":"8","wo":"wyliniować"},{"tr":"8","wo":"wyrokować"},{"tr":"8","wo":"kształtować się"}],"examples":[{"what":"verb","row":"exercise ultimate power or authority over (an area and its people).","example":"Latin America today is ruled by elected politicians"}]}',
    ),
    array( // row #1 027
        'word' => 'reducing', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zmniejszenie"},{"tr":"16","wo":"redukowanie"},{"tr":"8","wo":"obniżanie"}],"adjective":[{"tr":"16","wo":"redukcyjny"},{"tr":"16","wo":"zmniejszający"}],"examples":[{"what":"verb","row":"make smaller or less in amount, degree, or size.","example":"the need for businesses to reduce costs"}]}',
    ),
    array( // row #1 028
        'word' => 'sponsored', 'pl_PL' => '{"verb":[{"tr":"24","wo":"sponsorować"}],"examples":[{"what":"verb","row":"provide funds for (a project or activity or the person carrying it out).","example":"Joe is being sponsored by his church"}]}',
    ),
    array( // row #1 029
        'word' => 'conservative', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"konserwatywny"},{"tr":"16","wo":"zachowawczy"},{"tr":"16","wo":"ostrożny"},{"tr":"8","wo":"skromny"}],"noun":[{"tr":"24","wo":"konserwatysta"}],"examples":[{"what":"adjective","row":"holding to traditional attitudes and values and cautious about change or innovation, typically in relation to politics or religion.","example":"The rapid rise of the green movement is an example of this, because it appeals to traditional conservative values."},{"what":"noun","row":"a person who is averse to change and holds to traditional values and attitudes, typically in relation to politics.","example":"They saw fascists as more patriotic and determined than traditional conservatives ."}]}',
    ),
    array( // row #1 030
        'word' => 'tossed', 'pl_PL' => '{"verb":[{"tr":"24","wo":"podrzucać"},{"tr":"24","wo":"rzucać"},{"tr":"16","wo":"rozchybotać"},{"tr":"16","wo":"rozkołysać"},{"tr":"16","wo":"wziąć na rogi"},{"tr":"16","wo":"miotać się"},{"tr":"16","wo":"kołysać się"},{"tr":"16","wo":"bałwanić się"},{"tr":"16","wo":"wznieść się na falach"},{"tr":"16","wo":"miotać kimś czymś"},{"tr":"8","wo":"przewracać się z boku na bok"}],"examples":[{"what":"verb","row":"throw (something) somewhere lightly, easily, or casually.","example":"Suzy tossed her bag onto the sofa"}]}',
    ),
    array( // row #1 031
        'word' => 'starts', 'pl_PL' => '{"noun":[{"tr":"24","wo":"start"},{"tr":"24","wo":"początek"},{"tr":"16","wo":"rozruch"},{"tr":"8","wo":"zaczątek"}],"verb":[{"tr":"24","wo":"rozpocząć"},{"tr":"16","wo":"uruchomić"},{"tr":"8","wo":"zaczynać"},{"tr":"8","wo":"zapoczątkować"},{"tr":"8","wo":"wystartować"},{"tr":"8","wo":"przystąpić"},{"tr":"8","wo":"startować"},{"tr":"8","wo":"ruszać"}],"examples":[{"what":"noun","row":"the point in time or space at which something has its origin; the beginning of something.","example":"he takes over as chief executive at the start of next year"},{"what":"verb","row":"come into being; begin or be reckoned from a particular point in time or space.","example":"the season starts in September"}]}',
    ),
    array( // row #1 032
        'word' => 'PROTECTED', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"chroniony"},{"tr":"16","wo":"zabezpieczony"},{"tr":"8","wo":"bezpieczny"},{"tr":"8","wo":"zastawiony"}],"examples":[{"what":"verb","row":"keep safe from harm or injury.","example":"he tried to protect Kelly from the attack"}]}',
    ),
    array( // row #1 033
        'word' => 'curt', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"lakoniczny"},{"tr":"8","wo":"szorstki"},{"tr":"8","wo":"zdawkowy"},{"tr":"8","wo":"zwięzły"},{"tr":"8","wo":"lapidarny"},{"tr":"8","wo":"węzłowaty"},{"tr":"8","wo":"zbywający"}],"examples":[{"what":"adjective","row":"rudely brief.","example":"his reply was curt"}]}',
    ),
    array( // row #1 034
        'word' => 'invention', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wynalazek"},{"tr":"16","wo":"wymyślenie"},{"tr":"8","wo":"wynalezienie"},{"tr":"8","wo":"inwencja"},{"tr":"8","wo":"wymysł"},{"tr":"8","wo":"kompozycja"},{"tr":"8","wo":"fikcja"}],"examples":[{"what":"noun","row":"the action of inventing something, typically a process or device.","example":"the invention of printing in the 15th century"}]}',
    ),
    array( // row #1 035
        'word' => 'emission', 'pl_PL' => '{"noun":[{"tr":"24","wo":"emisja"},{"tr":"8","wo":"wydanie"},{"tr":"8","wo":"wydzielanie"},{"tr":"8","wo":"wydzielenie"},{"tr":"8","wo":"wypuszczenie"},{"tr":"8","wo":"emitowanie"}],"examples":[{"what":"noun","row":"the production and discharge of something, especially gas or radiation.","example":"the effects of lead emission on health"}]}',
    ),
    array( // row #1 036
        'word' => 'lodge', 'pl_PL' => '{"noun":[{"tr":"16","wo":"wigwam"},{"tr":"8","wo":"stróżówka"},{"tr":"8","wo":"portiernia"},{"tr":"8","wo":"klub"},{"tr":"8","wo":"loża masońska"},{"tr":"8","wo":"nora"}],"verb":[{"tr":"8","wo":"ulokować"},{"tr":"8","wo":"zakwaterować"},{"tr":"8","wo":"zdeponować"},{"tr":"8","wo":"wnieść skargę"},{"tr":"8","wo":"wsadzać"},{"tr":"8","wo":"położyć zboże"}],"examples":[{"what":"noun","row":"a small house at the gates of a park or in the grounds of a large house, typically occupied by a gatekeeper, gardener, or other employee.","example":"The house, the entrance lodge and garden of just over an acre comprise lot one."},{"what":"verb","row":"present (a complaint, appeal, claim, etc.) formally to the proper authorities.","example":"he has 28 days in which to lodge an appeal"}]}',
    ),
    array( // row #1 037
        'word' => 'electronics', 'pl_PL' => '{"noun":[{"tr":"24","wo":"elektronika"}],"examples":[{"what":"noun","row":"the branch of physics and technology concerned with the design of circuits using transistors and microchips, and with the behavior and movement of electrons in a semiconductor, conductor, vacuum, or gas.","example":"electronics is seen as a growth industry"}]}',
    ),
    array( // row #1 038
        'word' => 'farther', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"dalej"},{"tr":"8","wo":"ponadto"},{"tr":"8","wo":"poza tym"}],"adjective":[{"tr":"8","wo":"dalszy"},{"tr":"8","wo":"dodatkowy"}],"examples":[{"what":"adjective","row":"more distant in space than another item of the same kind.","example":"the farther side of the mountain"},{"what":"adverb","row":"at, to, or by a greater distance (used to indicate the extent to which one thing or person is or becomes distant from another).","example":"the farther away you are from your home, the better you should behave"}]}',
    ),
    array( // row #1 039
        'word' => 'sauce', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sos"},{"tr":"8","wo":"przyprawa"},{"tr":"8","wo":"kompot"},{"tr":"8","wo":"impertynencja"},{"tr":"8","wo":"zuchwalstwo"},{"tr":"8","wo":"zuchwałość"},{"tr":"8","wo":"tupet"}],"verb":[{"tr":"8","wo":"przyprawiać"}],"examples":[{"what":"noun","row":"thick liquid served with food, usually savory dishes, to add moistness and flavor.","example":"tomato sauce"},{"what":"verb","row":"provide a sauce for (something); season with a sauce.","example":"Crunchy, pale, looking like a cross between retractable antennae and geometric Aztec art, they\'re sauced with chili oil, ginger, garlic, and fresh slices of scallion, and have all the crunchy appeal of summertime picnic food."}]}',
    ),
    array( // row #1 040
        'word' => 'naked', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"nagi"},{"tr":"8","wo":"na golasa"},{"tr":"8","wo":"goły"}],"examples":[{"what":"adjective","row":"(of a person or part of the body) without clothes.","example":"he\'d never seen a naked woman before"}]}',
    ),
    array( // row #1 041
        'word' => 'crowded', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zatłoczony"},{"tr":"8","wo":"natłoczony"},{"tr":"8","wo":"nabity"},{"tr":"8","wo":"ludny"},{"tr":"8","wo":"ciasny"}],"examples":[{"what":"adjective","row":"(of a space) full of people, leaving little or no room for movement; packed.","example":"a very crowded room"}]}',
    ),
    array( // row #1 042
        'word' => 'conception', 'pl_PL' => '{"noun":[{"tr":"24","wo":"koncepcja"},{"tr":"16","wo":"pojęcie"},{"tr":"16","wo":"poczęcie"},{"tr":"8","wo":"poczęcie dziecka"},{"tr":"8","wo":"mniemanie"},{"tr":"8","wo":"idea"},{"tr":"8","wo":"wymyślenie"},{"tr":"8","wo":"powzięcie"}],"examples":[{"what":"noun","row":"the action of conceiving a child or of a child being conceived.","example":"an unfertilized egg before conception"}]}',
    ),
    array( // row #1 043
        'word' => 'slipped', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wsunąć"},{"tr":"8","wo":"pośliznąć się"},{"tr":"8","wo":"ślizgać się"},{"tr":"8","wo":"przemknąć"},{"tr":"8","wo":"poślizgnąć się"},{"tr":"8","wo":"oślizgiwać się"},{"tr":"8","wo":"ześlizgiwać się"},{"tr":"8","wo":"spełznąć"},{"tr":"8","wo":"wchodzić"},{"tr":"8","wo":"obsunąć"},{"tr":"8","wo":"podsunąć"},{"tr":"8","wo":"zjechać"}],"examples":[{"what":"adjective","row":"(of a flower or leaf) depicted with a stalk.","example":"It\'s possible that there is a visual difference between the iris and the orchid based on the fact that the orchid is slipped ."},{"what":"verb","row":"(of a person or animal) slide unintentionally for a short distance, typically losing one\'s balance or footing.","example":"I slipped on the ice"}]}',
    ),
    array( // row #1 044
        'word' => 'cooking', 'pl_PL' => '{"noun":[{"tr":"24","wo":"gotowanie"},{"tr":"8","wo":"kuchnia"},{"tr":"8","wo":"fałszowanie rachunków"}],"adjective":[{"tr":"24","wo":"kuchenny"},{"tr":"8","wo":"jadalny"}],"examples":[{"what":"noun","row":"the practice or skill of preparing food by combining, mixing, and heating ingredients.","example":"she first became interested in cooking at the age of 17"}]}',
    ),
    array( // row #1 045
        'word' => 'eating', 'pl_PL' => '{"noun":[{"tr":"24","wo":"jedzenie"}],"examples":[{"what":"noun","row":"the ability to assess and initiate things independently.","example":"use your initiative, imagination, and common sense"}]}',
    ),
    array( // row #1 046
        'word' => 'initiative', 'pl_PL' => '{"noun":[{"tr":"24","wo":"inicjatywa"},{"tr":"8","wo":"przedsiębiorczość"},{"tr":"8","wo":"rzutkość"}],"adjective":[{"tr":"8","wo":"początkowy"}],"examples":[{"what":"noun","row":"the ability to assess and initiate things independently.","example":"use your initiative, imagination, and common sense"}]}',
    ),
    array( // row #1 047
        'word' => 'testing', 'pl_PL' => '{"verb":[{"tr":"16","wo":"testować"},{"tr":"16","wo":"wypróbować"},{"tr":"8","wo":"zbadać"},{"tr":"8","wo":"sprawdzać"},{"tr":"8","wo":"poddać próbie"},{"tr":"8","wo":"kupelować srebro"}],"examples":[{"what":"verb","row":"take measures to check the quality, performance, or reliability of (something), especially before putting it into widespread use or practice.","example":"this range has not been tested on animals"}]}',
    ),
    array( // row #1 048
        'word' => 'Russians', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Rosjanin"},{"tr":"8","wo":"język rosyjski"}],"examples":[{"what":"noun","row":"a native or inhabitant of Russia.","example":"Though not a native Russian , he was on the staff of the Imperial Theatres in St Petersburg and played in a court chamber ensemble."}]}',
    ),
    array( // row #1 049
        'word' => 'confronted', 'pl_PL' => '{"verb":[{"tr":"16","wo":"konfrontować"},{"tr":"8","wo":"porównać"},{"tr":"8","wo":"stanąć w obliczu czegoś"},{"tr":"8","wo":"unaoczniać"}],"examples":[{"what":"verb","row":"meet (someone) face to face with hostile or argumentative intent.","example":"300 policemen confronted an equal number of union supporters"}]}',
    ),
    array( // row #1 050
        'word' => 'remote', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zdalny"},{"tr":"16","wo":"odległy"},{"tr":"8","wo":"oddalony"},{"tr":"8","wo":"daleki"},{"tr":"8","wo":"odosobniony"},{"tr":"8","wo":"najmniejszy"},{"tr":"8","wo":"mało prawdopodobny"},{"tr":"8","wo":"słaby"}],"examples":[{"what":"adjective","row":"(of a place) situated far from the main centers of population; distant.","example":"a remote Oregon valley"},{"what":"noun","row":"a remote control device.","example":"As the user, you can interface with the system via keypads, touch screens, panic buttons, TV screens, computers, telephones, handheld remotes or other devices."}]}',
    ),
    array( // row #1 051
        'word' => 'gathered', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zbierać"},{"tr":"24","wo":"gromadzić"},{"tr":"16","wo":"zgromadzić"},{"tr":"16","wo":"gromadzić się"},{"tr":"8","wo":"zbierać się"},{"tr":"8","wo":"nabrać"},{"tr":"8","wo":"pozbierać"},{"tr":"8","wo":"pobierać"},{"tr":"8","wo":"uzbierać"},{"tr":"8","wo":"zgarnąć"},{"tr":"8","wo":"wywnioskować"},{"tr":"8","wo":"ściągać"}],"examples":[{"what":"verb","row":"come together; assemble or accumulate.","example":"a crowd gathered in the square"}]}',
    ),
    array( // row #1 052
        'word' => 'poets', 'pl_PL' => '{"noun":[{"tr":"24","wo":"poeta"},{"tr":"8","wo":"bard"}],"examples":[{"what":"noun","row":"a person who writes poems.","example":"The radio play became an art form in its own right and attracted novelists and poets as well as dramatists."}]}',
    ),
    array( // row #1 053
        'word' => 'beef', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wołowina"},{"tr":"8","wo":"wół"},{"tr":"8","wo":"siła"},{"tr":"8","wo":"krowa"}],"adjective":[{"tr":"24","wo":"wołowy"}],"examples":[{"what":"noun","row":"the flesh of a cow, bull, or ox, used as food.","example":"Tuck into steak, roast beef , venison and other red meat at least three times a week"},{"what":"verb","row":"complain.","example":"he was beefing about how the recession was killing the business"}]}',
    ),
    array( // row #1 054
        'word' => 'Chandler', 'pl_PL' => '{"noun":[{"tr":"16","wo":"kupiec"}],"examples":[{"what":"noun","row":"a city in south central Arizona, a suburb and resort southeast of Phoenix; population 247,140 (est. 2008).","example":null},{"what":"noun","row":"a dealer in supplies and equipment for ships and boats.","example":"As he was walking past a ship chandler \'s shop, he was shocked to see handcuffs, leg shackles, and thumbscrews in the window."}]}',
    ),
    array( // row #1 055
        'word' => 'variation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zmiana"},{"tr":"16","wo":"zmienność"},{"tr":"16","wo":"wariacja"},{"tr":"16","wo":"odchylenie"},{"tr":"8","wo":"mutacja"}],"examples":[{"what":"noun","row":"a change or difference in condition, amount, or level, typically with certain limits.","example":"regional variations in house prices"}]}',
    ),
    array( // row #1 056
        'word' => 'cream', 'pl_PL' => '{"noun":[{"tr":"24","wo":"krem"},{"tr":"16","wo":"śmietanka"},{"tr":"8","wo":"kwiat"},{"tr":"8","wo":"pasta do obuwia"}],"verb":[{"tr":"8","wo":"zbierać śmietankę"},{"tr":"8","wo":"dolewać śmietanki"},{"tr":"8","wo":"pienić się"}],"adjective":[{"tr":"8","wo":"śmietankowy"},{"tr":"8","wo":"bułany"}],"examples":[{"what":"noun","row":"the thick white or pale yellow fatty liquid that rises to the top when milk is left to stand and that can be eaten as an accompaniment to desserts or used as a cooking ingredient.","example":"strawberries and cream"},{"what":"verb","row":"work (butter, typically with sugar) to form a smooth soft paste.","example":"In another bowl she creamed the butter and sugar using the electric whisk Jack gave her, then added the eggs."}]}',
    ),
    array( // row #1 057
        'word' => 'Museum', 'pl_PL' => '{"noun":[{"tr":"24","wo":"muzeum"}],"examples":[{"what":"noun","row":"a building in which objects of historical, scientific, artistic, or cultural interest are stored and exhibited.","example":"Yet public interest in visiting such museums and historical sites is not always so keen."}]}',
    ),
    array( // row #1 058
        'word' => 'fishing', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"rybacki"},{"tr":"16","wo":"wędkarski"},{"tr":"16","wo":"rybny"}],"noun":[{"tr":"24","wo":"rybołówstwo"},{"tr":"24","wo":"wędkarstwo"},{"tr":"16","wo":"połów"},{"tr":"16","wo":"rybactwo"},{"tr":"16","wo":"łowienie ryb"},{"tr":"8","wo":"łów"},{"tr":"8","wo":"instrumentacja"}],"examples":[{"what":"noun","row":"the activity of catching fish, either for food or as a sport.","example":"The fact that humans are killing about 20 to 30 million sharks a year through commercial sport and fishing is also food for thought."},{"what":"verb","row":"catch or try to catch fish, typically by using a net or hook and line.","example":"he was fishing for bluefish"}]}',
    ),
    array( // row #1 059
        'word' => 'demonstrate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wykazać"},{"tr":"8","wo":"demonstrować"},{"tr":"8","wo":"okazać uczucia"},{"tr":"8","wo":"dowieść czegoś"},{"tr":"8","wo":"manifestować"},{"tr":"8","wo":"poszczycić się"},{"tr":"8","wo":"przeprowadzać manewr"}],"examples":[{"what":"verb","row":"clearly show the existence or truth of (something) by giving proof or evidence.","example":"their shameful silence demonstrates their ineptitude"}]}',
    ),
    array( // row #1 060
        'word' => 'survival', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przetrwanie"},{"tr":"24","wo":"przeżycie"},{"tr":"8","wo":"przeżytek"},{"tr":"8","wo":"ostanie się"},{"tr":"8","wo":"przetrzymanie"}],"examples":[{"what":"noun","row":"the state or fact of continuing to live or exist, typically in spite of an accident, ordeal, or difficult circumstances.","example":"the animal\'s chances of survival were pretty low"}]}',
    ),
    array( // row #1 061
        'word' => 'Missiles', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pocisk"}],"examples":[{"what":"noun","row":"an object that is forcibly propelled at a target, either by hand or from a mechanical weapon.","example":"The riot squad and two water cannons were deployed after missiles were thrown."}]}',
    ),
    array( // row #1 062
        'word' => 'collective', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kolektyw"},{"tr":"8","wo":"zespół"},{"tr":"8","wo":"społeczeństwo"}],"adjective":[{"tr":"24","wo":"zbiorowy"},{"tr":"16","wo":"wspólny"},{"tr":"16","wo":"kolektywny"},{"tr":"8","wo":"kolegialny"},{"tr":"8","wo":"zespołowy"},{"tr":"8","wo":"gremialny"},{"tr":"8","wo":"spółdzielczy"},{"tr":"8","wo":"społeczny"},{"tr":"8","wo":"gromadny"},{"tr":"8","wo":"komisyjny"}],"examples":[{"what":"adjective","row":"done by people acting as a group.","example":"a collective protest"},{"what":"noun","row":"a cooperative enterprise.","example":"And there will be an expensive and politically complicated process of consolidating numerous small collectives into productive big enterprises."}]}',
    ),
    array( // row #1 063
        'word' => 'promote', 'pl_PL' => '{"verb":[{"tr":"24","wo":"promować"},{"tr":"8","wo":"awansować"},{"tr":"8","wo":"popierać"},{"tr":"8","wo":"sprzyjać"},{"tr":"8","wo":"reklamować"},{"tr":"8","wo":"podżegać"},{"tr":"8","wo":"pobudzać do czegoś"},{"tr":"8","wo":"lansować"}],"examples":[{"what":"verb","row":"further the progress of (something, especially a cause, venture, or aim); support or actively encourage.","example":"some regulation is still required to promote competition"}]}',
    ),
    array( // row #1 064
        'word' => 'calendar', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kalendarz"},{"tr":"8","wo":"wokanda"}],"adjective":[{"tr":"24","wo":"kalendarzowy"}],"verb":[{"tr":"8","wo":"wciągać na listę"},{"tr":"8","wo":"porządkować"}],"examples":[{"what":"noun","row":"a chart or series of pages showing the days, weeks, and months of a particular year, or giving particular seasonal information.","example":"For the weather obsessed, the calendar features information on the average temperatures each month, the average rainfall and the cycles of the moon throughout the year."},{"what":"verb","row":"enter (something) in a calendar or timetable.","example":"Indeed, the recently calendared Scottish records indicate that Anna was âengaged in startling vigorous political activityâ from 1590 to 1603."}]}',
    ),
    array( // row #1 065
        'word' => 'Pa', 'pl_PL' => '{"noun":[{"tr":"8","wo":"tatuś"},{"tr":"8","wo":"ojczulek"}],"examples":[{"what":"abbreviation","row":"pascal; pascals.","example":null},{"what":"symbol","row":"the chemical element protactinium.","example":null},{"what":"noun","row":"father.","example":"my pa was no farmer"}]}',
    ),
    array( // row #1 066
        'word' => 'household', 'pl_PL' => '{"noun":[{"tr":"24","wo":"gospodarstwo domowe"},{"tr":"16","wo":"rodzina"},{"tr":"8","wo":"domownicy"},{"tr":"8","wo":"służba"}],"adjective":[{"tr":"16","wo":"domowy"},{"tr":"8","wo":"gospodarski"}],"examples":[{"what":"noun","row":"a house and its occupants regarded as a unit.","example":"the whole household was asleep"}]}',
    ),
    array( // row #1 067
        'word' => 'excitement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"podniecenie"},{"tr":"16","wo":"podekscytowanie"},{"tr":"8","wo":"zdenerwowanie"},{"tr":"8","wo":"denerwowanie"},{"tr":"8","wo":"emocja"},{"tr":"8","wo":"gorączka"},{"tr":"8","wo":"bieganina"},{"tr":"8","wo":"alteracja"},{"tr":"8","wo":"podnieta"},{"tr":"8","wo":"huczek"}],"examples":[{"what":"noun","row":"a feeling of great enthusiasm and eagerness.","example":"her cheeks were flushed with excitement"}]}',
    ),
    array( // row #1 068
        'word' => 'covers', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pokrywa"},{"tr":"24","wo":"okładka"},{"tr":"16","wo":"osłona"},{"tr":"16","wo":"pokrowiec"},{"tr":"16","wo":"obudowa"},{"tr":"16","wo":"pokrywka"},{"tr":"8","wo":"powłoka"},{"tr":"8","wo":"przykrycie"},{"tr":"8","wo":"wieko"},{"tr":"8","wo":"kapa"}],"verb":[{"tr":"16","wo":"pokryć"},{"tr":"16","wo":"przykryć"}],"examples":[{"what":"noun","row":"a thing that lies on, over, or around something, especially in order to protect or conceal it.","example":"a seat cover"},{"what":"verb","row":"put something such as a cloth or lid on top of or in front of (something) in order to protect or conceal it.","example":"the table had been covered with a checked tablecloth"}]}',
    ),
    array( // row #1 069
        'word' => 'Salvation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zbawienie"},{"tr":"16","wo":"salwowanie"},{"tr":"16","wo":"ratunek"},{"tr":"16","wo":"ocalenie"},{"tr":"8","wo":"salwa"}],"examples":[{"what":"noun","row":"deliverance from sin and its consequences, believed by Christians to be brought about by faith in Christ.","example":"Christ died for sin, but His death brings no salvation from sin apart from faith."}]}',
    ),
    array( // row #1 070
        'word' => 'awake', 'pl_PL' => '{"verb":[{"tr":"24","wo":"obudzić"},{"tr":"16","wo":"budzić"},{"tr":"16","wo":"ocknąć się"},{"tr":"8","wo":"zbudzić się"},{"tr":"8","wo":"budzić się"},{"tr":"8","wo":"wzbudzać"},{"tr":"8","wo":"uświadomić sobie"}],"adjective":[{"tr":"16","wo":"przebudzony"},{"tr":"16","wo":"czujny"},{"tr":"8","wo":"czuwający"}],"examples":[{"what":"adjective","row":"not asleep.","example":"the noise might keep you awake at night"},{"what":"verb","row":"stop sleeping; wake from sleep.","example":"she awoke to find the streets covered in snow"}]}',
    ),
    array( // row #1 071
        'word' => 'juniors', 'pl_PL' => '{"noun":[{"tr":"24","wo":"junior"}],"examples":[{"what":"noun","row":"a person who is a specified number of years younger than someone else.","example":"he\'s five years her junior"}]}',
    ),
    array( // row #1 072
        'word' => 'proportion', 'pl_PL' => '{"noun":[{"tr":"24","wo":"proporcja"},{"tr":"24","wo":"odsetek"},{"tr":"16","wo":"stosunek"},{"tr":"8","wo":"proporcjonalność"},{"tr":"8","wo":"ustosunkowanie"},{"tr":"8","wo":"procentowość"}],"verb":[{"tr":"8","wo":"dozować"},{"tr":"8","wo":"dostosować"},{"tr":"8","wo":"dawkować"}],"examples":[{"what":"noun","row":"a part, share, or number considered in comparative relation to a whole.","example":"the proportion of greenhouse gases in the atmosphere is rising"},{"what":"verb","row":"adjust or regulate (something) so that it has a particular or suitable relationship to something else.","example":"a life after death in which happiness can be proportioned to virtue"}]}',
    ),
    array( // row #1 073
        'word' => 'dancers', 'pl_PL' => '{"noun":[{"tr":"24","wo":"tancerz"},{"tr":"24","wo":"tancerka"}],"examples":[{"what":"noun","row":"a person who dances or whose profession is dancing.","example":"Even professional dancers have to go through a ballet class every day as a physical work out."}]}',
    ),
    array( // row #1 074
        'word' => 'wedding', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ślub"},{"tr":"24","wo":"wesele"},{"tr":"8","wo":"zaślubiny"},{"tr":"8","wo":"gody"}],"examples":[{"what":"noun","row":"a marriage ceremony, especially considered as including the associated celebrations.","example":"It is consumed almost exclusively by men in the evening or at celebrations such as weddings ."}]}',
    ),
    array( // row #1 075
        'word' => 'ROMANTIC', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"romantyczny"},{"tr":"8","wo":"nastrojowy"}],"noun":[{"tr":"16","wo":"romantyk"}],"examples":[{"what":"adjective","row":"inclined toward or suggestive of the feeling of excitement and mystery associated with love.","example":"a romantic candlelit dinner"},{"what":"noun","row":"a person with romantic beliefs or attitudes.","example":"I am an incurable romantic"}]}',
    ),
    array( // row #1 076
        'word' => 'apparatus', 'pl_PL' => '{"noun":[{"tr":"24","wo":"aparat"},{"tr":"24","wo":"aparatura"},{"tr":"8","wo":"przyrząd"},{"tr":"8","wo":"narząd"},{"tr":"8","wo":"narzędzia"}],"examples":[{"what":"noun","row":"the technical equipment or machinery needed for a particular activity or purpose.","example":"laboratory apparatus"}]}',
    ),
    array( // row #1 077
        'word' => 'Van', 'pl_PL' => '{"noun":[{"tr":"16","wo":"awangarda"},{"tr":"8","wo":"czoło"},{"tr":"8","wo":"wóz meblowy"},{"tr":"8","wo":"czołówka"}],"examples":[{"what":"noun","row":"a covered boxlike motor vehicle, typically having a rear door and sliding doors on the side panels, used for transporting goods or people.","example":"A team of nine scenes-of-crime officers were dispatched in a police van with blacked-out windows to search the couple\'s home last night."}]}',
    ),
    array( // row #1 078
        'word' => 'heading', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nagłówek"},{"tr":"24","wo":"rubryka"},{"tr":"16","wo":"dział"},{"tr":"8","wo":"przodek"}],"examples":[{"what":"noun","row":"a title at the head of a page or section of a book.","example":"chapter headings"},{"what":"verb","row":"be in the leading position on.","example":"the Palm Sunday procession was headed by the crucifer"}]}',
    ),
    array( // row #1 079
        'word' => 'magnitude', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wielkość"},{"tr":"16","wo":"ogrom"},{"tr":"8","wo":"ważność"},{"tr":"8","wo":"znaczenie"}],"examples":[{"what":"noun","row":"the great size or extent of something.","example":"they may feel discouraged at the magnitude of the task before them"}]}',
    ),
    array( // row #1 080
        'word' => 'constitute', 'pl_PL' => '{"verb":[{"tr":"24","wo":"stanowić"},{"tr":"8","wo":"ukonstytuować"},{"tr":"8","wo":"uformować"},{"tr":"8","wo":"wyłaniać"}],"examples":[{"what":"verb","row":"be (a part) of a whole.","example":"single parents constitute a great proportion of the poor"}]}',
    ),
    array( // row #1 081
        'word' => 'Mills', 'pl_PL' => '{"noun":[{"tr":"24","wo":"młyn"},{"tr":"16","wo":"młynek"},{"tr":"16","wo":"fabryka"},{"tr":"16","wo":"zakład"},{"tr":"8","wo":"wytwórnia"},{"tr":"8","wo":"rozdrabniarka"}],"verb":[{"tr":"24","wo":"wyfrezować"},{"tr":"8","wo":"frezować"},{"tr":"8","wo":"zemleć"},{"tr":"8","wo":"mleć"},{"tr":"8","wo":"przemleć"},{"tr":"8","wo":"walcować"},{"tr":"8","wo":"zwalcować"},{"tr":"8","wo":"spilśniać"},{"tr":"8","wo":"bić"},{"tr":"8","wo":"grzmocić"}],"examples":[{"what":"noun","row":"a building equipped with machinery for grinding grain into flour.","example":"At mills or bakeries, barley flour can be added to flours from other grains for baking."},{"what":"verb","row":"grind or crush (something) in a mill.","example":"hard wheats are easily milled into white flour"}]}',
    ),
    array( // row #1 082
        'word' => 'we\'d', 'pl_PL' => '{"verb":[{"tr":"16","wo":"poślubić"},{"tr":"16","wo":"zaślubić"},{"tr":"16","wo":"wziąć ślub"},{"tr":"16","wo":"brać za żonę"},{"tr":"16","wo":"połączyć"}],"examples":[{"what":"preposition","row":"we had.","example":"we\'d already been on board"},{"what":"verb","row":"get married to.","example":"he was to wed the king\'s daughter"}]}',
    ),
    array( // row #1 083
        'word' => 'prestige', 'pl_PL' => '{"noun":[{"tr":"24","wo":"prestiż"},{"tr":"8","wo":"powaga"}],"examples":[{"what":"noun","row":"widespread respect and admiration felt for someone or something on the basis of a perception of their achievements or quality.","example":"he experienced a tremendous increase in prestige following his victory"}]}',
    ),
    array( // row #1 084
        'word' => 'subsequent', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"kolejny"},{"tr":"16","wo":"późniejszy"},{"tr":"16","wo":"następny"},{"tr":"16","wo":"dalszy"},{"tr":"8","wo":"wynikły"},{"tr":"8","wo":"nastały"},{"tr":"8","wo":"subsekwentny"}],"examples":[{"what":"adjective","row":"coming after something in time; following.","example":"the theory was developed subsequent to the earthquake of 1906"}]}',
    ),
    array( // row #1 085
        'word' => 'splendid', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wspaniały"},{"tr":"16","wo":"znakomity"},{"tr":"8","wo":"genialny"},{"tr":"8","wo":"doskonały"},{"tr":"8","wo":"paradny"},{"tr":"8","wo":"piękny"},{"tr":"8","wo":"prześwietny"},{"tr":"8","wo":"przepyszny"},{"tr":"8","wo":"wyborny"},{"tr":"8","wo":"okazały"},{"tr":"8","wo":"kapitalny"},{"tr":"8","wo":"celny"},{"tr":"8","wo":"na schwał"}],"examples":[{"what":"adjective","row":"magnificent; very impressive.","example":"a splendid view of Windsor Castle"}]}',
    ),
    array( // row #1 086
        'word' => 'covering', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pokrycie"},{"tr":"24","wo":"nakrycie"},{"tr":"16","wo":"przykrycie"},{"tr":"8","wo":"pochwa"},{"tr":"8","wo":"okrywa"},{"tr":"8","wo":"powłoka"},{"tr":"8","wo":"nakrywa"},{"tr":"8","wo":"opona"},{"tr":"8","wo":"przykrywa"},{"tr":"8","wo":"czapka"},{"tr":"8","wo":"odzienie"}],"adjective":[{"tr":"8","wo":"pokrywowy"}],"examples":[{"what":"noun","row":"a thing used to cover something else, typically in order to protect or conceal it.","example":"a vinyl floor covering"}]}',
    ),
    array( // row #1 087
        'word' => 'circular', 'pl_PL' => '{"noun":[{"tr":"24","wo":"okólnik"},{"tr":"8","wo":"mimośród"}],"adjective":[{"tr":"24","wo":"okrągły"},{"tr":"24","wo":"kołowy"},{"tr":"16","wo":"kolisty"},{"tr":"8","wo":"kółkowy"},{"tr":"8","wo":"kołowaty"},{"tr":"8","wo":"okrężny"},{"tr":"8","wo":"okólny"},{"tr":"8","wo":"obwodowy"}],"examples":[{"what":"adjective","row":"having the form of a circle.","example":"the building features a circular atrium"},{"what":"noun","row":"a letter or advertisement that is distributed to a large number of people.","example":"Anyone who knows me well will know how much I loathe email circulars and chain letters."}]}',
    ),
    array( // row #1 088
        'word' => 'depending', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zależeć"},{"tr":"8","wo":"oglądać się"},{"tr":"8","wo":"liczyć na kogoś lub coś"}],"examples":[{"what":"verb","row":"be controlled or determined by.","example":"differences in earnings depended on a wide variety of factors"}]}',
    ),
    array( // row #1 089
        'word' => 'effectiveness', 'pl_PL' => '{"noun":[{"tr":"24","wo":"skuteczność"},{"tr":"8","wo":"efektowność"}],"examples":[{"what":"noun","row":"the degree to which something is successful in producing a desired result; success.","example":"the effectiveness of the treatment"}]}',
    ),
    array( // row #1 090
        'word' => 'remarked', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zauważyć"},{"tr":"8","wo":"spostrzec"},{"tr":"8","wo":"zrobić komentarz"}],"examples":[{"what":"verb","row":"say something as a comment; mention.","example":"âTom\'s looking peaked,â she remarked"}]}',
    ),
    array( // row #1 091
        'word' => 'loans', 'pl_PL' => '{"verb":[{"tr":"24","wo":"pożyczyć"}],"noun":[{"tr":"24","wo":"pożyczka"},{"tr":"8","wo":"zaliczka"},{"tr":"8","wo":"zapożyczenie"},{"tr":"8","wo":"pożyczony przedmiot"},{"tr":"8","wo":"wyraz zapożyczony"}],"examples":[{"what":"noun","row":"a thing that is borrowed, especially a sum of money that is expected to be paid back with interest.","example":"borrowers can take out a loan for $84,000"},{"what":"verb","row":"borrow (a sum of money or item of property).","example":"the word processor was loaned to us by the theater"}]}',
    ),
    array( // row #1 092
        'word' => 'long-term', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"długofalowy"},{"tr":"8","wo":"długoterminowy"},{"tr":"8","wo":"długookresowy"},{"tr":"8","wo":"wieloletni"}],"examples":[{"what":"adjective","row":"occurring over or relating to a long period of time.","example":"the long-term unemployed"}]}',
    ),
    array( // row #1 093
        'word' => 'awareness', 'pl_PL' => '{"noun":[{"tr":"24","wo":"świadomość"}],"examples":[{"what":"noun","row":"knowledge or perception of a situation or fact.","example":"we need to raise public awareness of the issue"}]}',
    ),
    array( // row #1 094
        'word' => 'concluded', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zakończyć"},{"tr":"16","wo":"wnioskować"},{"tr":"16","wo":"wywnioskować"},{"tr":"8","wo":"sfinalizować"},{"tr":"8","wo":"konkludować"},{"tr":"8","wo":"dokończyć"},{"tr":"8","wo":"finalizować"}],"examples":[{"what":"verb","row":"bring (something) to an end.","example":"they conclude their study with these words"}]}',
    ),
    array( // row #1 095
        'word' => 'gesture', 'pl_PL' => '{"noun":[{"tr":"24","wo":"gest"},{"tr":"16","wo":"ruch"}],"examples":[{"what":"noun","row":"a movement of part of the body, especially a hand or the head, to express an idea or meaning.","example":"Alex made a gesture of apology"},{"what":"verb","row":"make a gesture.","example":"she gestured meaningfully with the pistol"}]}',
    ),
    array( // row #1 096
        'word' => 'spots', 'pl_PL' => '{"noun":[{"tr":"8","wo":"grochy"}],"examples":[{"what":"noun","row":"a small round or roundish mark, differing in color or texture from the surface around it.","example":"ladybugs have black spots on their red wing covers"},{"what":"verb","row":"see, notice, or recognize (someone or something) that is difficult to detect or that one is searching for.","example":"Andrew spotted the ad in the paper"}]}',
    ),
    array( // row #1 097
        'word' => 'stroke', 'pl_PL' => '{"noun":[{"tr":"16","wo":"suw"},{"tr":"16","wo":"uderzenie"},{"tr":"8","wo":"cios"},{"tr":"8","wo":"sztos"},{"tr":"8","wo":"raz"},{"tr":"8","wo":"cięcie"},{"tr":"8","wo":"pociągnięcie pędzla"},{"tr":"8","wo":"takt"},{"tr":"8","wo":"przebłysk"},{"tr":"8","wo":"kreska ołówkiem"},{"tr":"8","wo":"atak"}],"verb":[{"tr":"8","wo":"pomuskać"}],"examples":[{"what":"noun","row":"an act of hitting or striking someone or something; a blow.","example":"he received three strokes of the cane"},{"what":"verb","row":"move one\'s hand with gentle pressure over (a surface, especially hair, fur, or skin), typically repeatedly; caress.","example":"he put his hand on her hair and stroked it"}]}',
    ),
    array( // row #1 098
        'word' => 'discussions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dyskusja"},{"tr":"16","wo":"omówienie"},{"tr":"16","wo":"debata"},{"tr":"16","wo":"omawianie"},{"tr":"8","wo":"przedyskutowanie"},{"tr":"8","wo":"dyskutowanie"}],"examples":[{"what":"noun","row":"the action or process of talking about something, typically in order to reach a decision or to exchange ideas.","example":"the proposals are not a blueprint but ideas for discussion"}]}',
    ),
    array( // row #1 099
        'word' => 'shouting', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"rozkrzyczany"}],"examples":[{"what":"adjective","row":"not available or in short supply.","example":"adequate resources and funds are both sadly lacking at present"}]}',
    ),
    array( // row #1 100
        'word' => 'lacking', 'pl_PL' => '{"verb":[{"tr":"8","wo":"nie posiadać"},{"tr":"8","wo":"nie dostawać"},{"tr":"8","wo":"cierpieć na brak czegoś"}],"examples":[{"what":"adjective","row":"not available or in short supply.","example":"adequate resources and funds are both sadly lacking at present"},{"what":"verb","row":"be without or deficient in.","example":"the novel lacks imagination"}]}',
    ),
    array( // row #1 101
        'word' => 'nest', 'pl_PL' => '{"noun":[{"tr":"24","wo":"gniazdo"},{"tr":"16","wo":"gniazdko"},{"tr":"8","wo":"siedlisko"},{"tr":"8","wo":"seria"},{"tr":"8","wo":"wyląg"}],"verb":[{"tr":"8","wo":"gniazdować"},{"tr":"8","wo":"gnieździć się"},{"tr":"8","wo":"budować gniazdo"},{"tr":"8","wo":"wkładać jedną rzecz w drugą"}],"examples":[{"what":"noun","row":"a structure or place made or chosen by a bird for laying eggs and sheltering its young.","example":"First, the flight trajectory will obviously depend on the way in which a bird will enter its nest site."},{"what":"verb","row":"(of a bird or other animal) use or build a nest.","example":"the owls often nest in barns"}]}',
    ),
    array( // row #1 102
        'word' => 'inadequate', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"nieodpowiedni"},{"tr":"16","wo":"niewystarczający"},{"tr":"8","wo":"niedostateczny"},{"tr":"8","wo":"nienależyty"},{"tr":"8","wo":"nieadekwatny"},{"tr":"8","wo":"lichy"}],"examples":[{"what":"adjective","row":"lacking the quality or quantity required; insufficient for a purpose.","example":"these labels prove to be wholly inadequate"}]}',
    ),
    array( // row #1 103
        'word' => 'Jess', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pęto"}],"examples":[{"what":"noun","row":"a short leather strap that is fastened around each leg of a hawk, usually also having a ring or swivel to which a leash may be attached.","example":"It has leather jesses on its legs, which are used by falconers and people who take the birds out to hunt."},{"what":"verb","row":"put jesses on (a hawk).","example":null}]}',
    ),
    array( // row #1 104
        'word' => 'pathology', 'pl_PL' => '{"noun":[{"tr":"24","wo":"patologia"}],"examples":[{"what":"noun","row":"the science of the causes and effects of diseases, especially the branch of medicine that deals with the laboratory examination of samples of body tissue for diagnostic or forensic purposes.","example":"Formaldehyde is used widely as a tissue preservative in pathology laboratories and embalming services."}]}',
    ),
    array( // row #1 105
        'word' => 'cape', 'pl_PL' => '{"noun":[{"tr":"24","wo":"peleryna"},{"tr":"24","wo":"przylądek"},{"tr":"8","wo":"narzutka"}],"examples":[{"what":"noun","row":"a sleeveless cloak, typically a short one.","example":"He wears a grey t-shirt underneath a plaid flannel shirt and short grey cape , jeans, runners, and a plain black mask."},{"what":"verb","row":"skin the head and neck of (an animal) to prepare a hunting trophy.","example":null}]}',
    ),
    array( // row #1 106
        'word' => 'chlorine', 'pl_PL' => '{"noun":[{"tr":"24","wo":"chlor"}],"adjective":[{"tr":"8","wo":"chlorowy"}],"examples":[{"what":"noun","row":"the chemical element of atomic number 17, a toxic, irritant, pale green gas.","example":"The blue was fading to a dull chlorine green, the fuchsia sprouting roots of over an inch."}]}',
    ),
    array( // row #1 107
        'word' => 'healthy', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zdrowy"},{"tr":"8","wo":"higieniczny"},{"tr":"8","wo":"zdrów"}],"examples":[{"what":"adjective","row":"in good health.","example":"I feel fit and healthy"}]}',
    ),
    array( // row #1 108
        'word' => 'Poland', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Polska"}],"examples":[{"what":"noun","row":"a country in central Europe with a coastline on the Baltic Sea; population 38,482,900 (est. 2009); capital, Warsaw; language, Polish (official).","example":null}]}',
    ),
    array( // row #1 109
        'word' => 'rector', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rektor"},{"tr":"24","wo":"proboszcz"},{"tr":"16","wo":"dyrektor"},{"tr":"8","wo":"proboszcz anglikański"}],"examples":[{"what":"noun","row":"(in the Episcopal Church) a member of the clergy who has charge of a parish.","example":"âThe font was used to baptise Dr Kathleen Lynn; her father was the Anglican rector of the parish in 1874,â pointed out a local."}]}',
    ),
    array( // row #1 110
        'word' => 'FALLING', 'pl_PL' => '{"noun":[{"tr":"24","wo":"spadanie"},{"tr":"8","wo":"opadnięcie"},{"tr":"8","wo":"wypadek"},{"tr":"8","wo":"incydent"}],"adjective":[{"tr":"8","wo":"spadający"}],"examples":[{"what":"noun","row":"a stable subatomic particle with a charge of negative electricity, found in all atoms and acting as the primary carrier of electricity in solids.","example":"The antiparticle of the electron is the positron; there are also antiquarks and antineutrinos."}]}',
    ),
    array( // row #1 111
        'word' => 'electron', 'pl_PL' => '{"noun":[{"tr":"24","wo":"elektron"}],"examples":[{"what":"noun","row":"a stable subatomic particle with a charge of negative electricity, found in all atoms and acting as the primary carrier of electricity in solids.","example":"The antiparticle of the electron is the positron; there are also antiquarks and antineutrinos."}]}',
    ),
    array( // row #1 112
        'word' => 'tragic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"tragiczny"},{"tr":"8","wo":"dramatyczny"}],"examples":[{"what":"adjective","row":"causing or characterized by extreme distress or sorrow.","example":"the shooting was a tragic accident"}]}',
    ),
    array( // row #1 113
        'word' => 'tent', 'pl_PL' => '{"noun":[{"tr":"24","wo":"namiot"},{"tr":"8","wo":"laminaria"}],"verb":[{"tr":"8","wo":"obozować"}],"examples":[{"what":"verb","row":"cover with or as if with a tent.","example":"the garden had been completely tented over for supper"}]}',
    ),
    array( // row #1 114
        'word' => 'namely', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"mianowicie"},{"tr":"8","wo":"więc"}],"examples":[{"what":"adverb","row":"that is to say; to be specific (used to introduce detailed information or a specific example).","example":"to me there is only one kind of rock, namely, loud rock"}]}',
    ),
    array( // row #1 115
        'word' => 'frontier', 'pl_PL' => '{"noun":[{"tr":"24","wo":"granica"}],"adjective":[{"tr":"8","wo":"pograniczny"},{"tr":"8","wo":"nadgraniczny"}],"examples":[{"what":"noun","row":"a line or border separating two countries.","example":"Two border guards patrolling the nearby frontier with Georgia have also been reported missing since Friday night."}]}',
    ),
    array( // row #1 116
        'word' => 'equation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"równanie"},{"tr":"8","wo":"wyrównywanie"},{"tr":"8","wo":"bilans"},{"tr":"8","wo":"adaptacja"}],"examples":[{"what":"noun","row":"a statement that the values of two mathematical expressions are equal (indicated by the sign =).","example":"It also contains continued fractions, quadratic equations , sums of power series and a table of sines."}]}',
    ),
    array( // row #1 117
        'word' => 'demonstrated', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wykazać"},{"tr":"16","wo":"demonstrować"},{"tr":"8","wo":"manifestować"},{"tr":"8","wo":"poszczycić się"},{"tr":"8","wo":"okazać uczucia"},{"tr":"8","wo":"dowieść czegoś"},{"tr":"8","wo":"przeprowadzać manewr"}],"examples":[{"what":"verb","row":"clearly show the existence or truth of (something) by giving proof or evidence.","example":"their shameful silence demonstrates their ineptitude"}]}',
    ),
    array( // row #1 118
        'word' => 'inevitable', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"nieunikniony"},{"tr":"24","wo":"nieuchronny"},{"tr":"8","wo":"pewny"}],"examples":[{"what":"adjective","row":"certain to happen; unavoidable.","example":"war was inevitable"},{"what":"noun","row":"a situation that is unavoidable.","example":"It takes courage and wisdom to make the best of an imperfect situation and accept the inevitable ."}]}',
    ),
    array( // row #1 119
        'word' => 'bundle', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wiązka"},{"tr":"24","wo":"pakiet"},{"tr":"16","wo":"zawiniątko"},{"tr":"16","wo":"tobołek"},{"tr":"16","wo":"pakunek"},{"tr":"8","wo":"tłumok"},{"tr":"8","wo":"węzełek"},{"tr":"8","wo":"paczka"},{"tr":"8","wo":"powięź"},{"tr":"8","wo":"snop"}],"verb":[{"tr":"16","wo":"zapakować"},{"tr":"8","wo":"zwijać się w kłębek"}],"examples":[{"what":"noun","row":"a collection of things, or a quantity of material, tied or wrapped up together.","example":"a thick bundle of envelopes"},{"what":"verb","row":"tie or roll up (a number of things) together as though into a parcel.","example":"she quickly bundled up her clothes"}]}',
    ),
    array( // row #1 120
        'word' => 'Symphony', 'pl_PL' => '{"noun":[{"tr":"24","wo":"symfonia"}],"examples":[{"what":"noun","row":"an elaborate musical composition for full orchestra, typically in four movements, at least one of which is traditionally in sonata form.","example":"He was a prolific composer, writing symphonies , concertos, sonatas, and dramatic works."}]}',
    ),
    array( // row #1 121
        'word' => 'dealers', 'pl_PL' => '{"noun":[{"tr":"16","wo":"kupiec"},{"tr":"16","wo":"sprzedawca"},{"tr":"8","wo":"rozdający karty"}],"examples":[{"what":"noun","row":"a person or business that buys and sells goods.","example":"a car dealer"}]}',
    ),
    array( // row #1 122
        'word' => 'crucial', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"istotny"},{"tr":"16","wo":"decydujący"},{"tr":"8","wo":"krytyczny"},{"tr":"8","wo":"pierwszoplanowy"},{"tr":"8","wo":"węzłowy"},{"tr":"8","wo":"rozstrzygający"},{"tr":"8","wo":"przełomowy"}],"examples":[{"what":"adjective","row":"decisive or critical, especially in the success or failure of something.","example":"negotiations were at a crucial stage"}]}',
    ),
    array( // row #1 123
        'word' => 'clock', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zegar"},{"tr":"8","wo":"strzałka"}],"verb":[{"tr":"8","wo":"zanotować czas trwania"}],"examples":[{"what":"noun","row":"a mechanical or electrical device for measuring time, indicating hours, minutes, and sometimes seconds, typically by hands on a round dial or by displayed figures.","example":"He watched the ticking on his bedside clock until the minute hand felt more like the hour hand."},{"what":"verb","row":"attain or register (a specified time, distance, or speed).","example":"Thomas has clocked up forty years service"}]}',
    ),
    array( // row #1 124
        'word' => 'massive', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"masywny"},{"tr":"8","wo":"belkowaty"},{"tr":"8","wo":"zwarty"},{"tr":"8","wo":"ciężki"},{"tr":"8","wo":"pełny"},{"tr":"8","wo":"solidny"},{"tr":"8","wo":"bryłowaty"}],"examples":[{"what":"adjective","row":"large and heavy or solid.","example":"a massive rampart of stone"}]}',
    ),
    array( // row #1 125
        'word' => 'alert', 'pl_PL' => '{"noun":[{"tr":"16","wo":"alarm"},{"tr":"8","wo":"pogotowie"}],"adjective":[{"tr":"16","wo":"czujny"},{"tr":"8","wo":"raźny"},{"tr":"8","wo":"żwawy"}],"examples":[{"what":"adjective","row":"quick to notice any unusual and potentially dangerous or difficult circumstances; vigilant.","example":"an alert police officer discovered a truck full of explosives"},{"what":"noun","row":"the state of being watchful for possible danger.","example":"security forces were placed on alert"},{"what":"verb","row":"warn (someone) of a danger, threat, or problem, typically with the intention of having it avoided or dealt with.","example":"he alerted people to the dangers of smoking"}]}',
    ),
    array( // row #1 126
        'word' => 'mercy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"miłosierdzie"},{"tr":"24","wo":"łaska"},{"tr":"16","wo":"litość"},{"tr":"8","wo":"szczęście"},{"tr":"8","wo":"dobrodziejstwo"}],"examples":[{"what":"noun","row":"compassion or forgiveness shown toward someone whom it is within one\'s power to punish or harm.","example":"the boy was screaming and begging for mercy"},{"what":"exclamation","row":"used in expressions of surprise or fear.","example":"âMercy me!â uttered Mrs. Garfield"}]}',
    ),
    array( // row #1 127
        'word' => 'envelope', 'pl_PL' => '{"noun":[{"tr":"24","wo":"koperta"},{"tr":"8","wo":"otoczka"},{"tr":"8","wo":"pokrywka"},{"tr":"8","wo":"pochwa"},{"tr":"8","wo":"powłoka"},{"tr":"8","wo":"obwiednia"}],"examples":[{"what":"noun","row":"a flat paper container with a sealable flap, used to enclose a letter or document.","example":"They are all instant communications that are far less bother than putting pen to paper, finding an envelope , licking the flap, sticking on a stamp and popping it in a post box."}]}',
    ),
    array( // row #1 128
        'word' => 'survive', 'pl_PL' => '{"verb":[{"tr":"24","wo":"przetrwać"},{"tr":"24","wo":"przeżyć"},{"tr":"8","wo":"ostać się"},{"tr":"8","wo":"ocaleć"},{"tr":"8","wo":"dotrwać"},{"tr":"8","wo":"przetrzymać"},{"tr":"8","wo":"uchować się"}],"examples":[{"what":"verb","row":"continue to live or exist, especially in spite of danger or hardship.","example":"against all odds the child survived"}]}',
    ),
    array( // row #1 129
        'word' => 'parked', 'pl_PL' => '{"verb":[{"tr":"24","wo":"parkować"}],"examples":[{"what":"verb","row":"bring (a vehicle that one is driving) to a halt and leave it temporarily, typically in a parking lot or by the side of the road.","example":"he parked his car outside her house"}]}',
    ),
    array( // row #1 130
        'word' => 'attempted', 'pl_PL' => '{"verb":[{"tr":"24","wo":"próbować"},{"tr":"8","wo":"usiłować"},{"tr":"8","wo":"pokusić się"},{"tr":"8","wo":"kusić się"},{"tr":"8","wo":"chcieć coś zrobić"},{"tr":"8","wo":"postarać się"}],"examples":[{"what":"verb","row":"make an effort to achieve or complete (something, typically a difficult task or action).","example":"she attempted a comeback in 1989"}]}',
    ),
    array( // row #1 131
        'word' => 'reveal', 'pl_PL' => '{"verb":[{"tr":"16","wo":"odsłonić"},{"tr":"16","wo":"ujawniać"},{"tr":"16","wo":"ukazać"},{"tr":"16","wo":"odkryć"},{"tr":"16","wo":"wykazać"},{"tr":"16","wo":"zdradzać"},{"tr":"16","wo":"objawiać"},{"tr":"8","wo":"wykryć"},{"tr":"8","wo":"wyjawiać"},{"tr":"8","wo":"uwidocznić"},{"tr":"8","wo":"przejawiać"},{"tr":"8","wo":"uzewnętrznić"}],"examples":[{"what":"verb","row":"make (previously unknown or secret information) known to others.","example":"Brenda was forced to reveal Robbie\'s whereabouts"},{"what":"noun","row":"(in a movie or television show) a final revelation of information that has previously been kept from the characters or viewers.","example":"the big reveal at the end of the movie answers all questions"}]}',
    ),
    array( // row #1 132
        'word' => 'presents', 'pl_PL' => '{"noun":[{"tr":"24","wo":"prezent"},{"tr":"24","wo":"teraźniejszość"},{"tr":"8","wo":"dar"},{"tr":"8","wo":"upominek"},{"tr":"8","wo":"podarunek"},{"tr":"8","wo":"podarek"},{"tr":"8","wo":"czas teraźniejszy"},{"tr":"8","wo":"charakter"}],"verb":[{"tr":"24","wo":"zaprezentować"},{"tr":"16","wo":"prezentować"},{"tr":"16","wo":"przedstawiać"},{"tr":"8","wo":"podarować"}],"examples":[{"what":"noun","row":"the period of time now occurring.","example":"they are happy and at peace, refusing to think beyond the present"},{"what":"verb","row":"give something to (someone) formally or ceremonially.","example":"a top executive will present an award to employees who built the F-150"}]}',
    ),
    array( // row #1 133
        'word' => 'nights', 'pl_PL' => '{"noun":[{"tr":"24","wo":"noc"},{"tr":"16","wo":"wieczór"},{"tr":"8","wo":"ciemność"}],"examples":[{"what":"adverb","row":"during the night; at night.","example":"investments that won\'t keep us awake nights with worry"},{"what":"noun","row":"the period of darkness in each twenty-four hours; the time from sunset to sunrise.","example":"a moonless night"}]}',
    ),
    array( // row #1 134
        'word' => 'artistic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"artystyczny"},{"tr":"8","wo":"plastyczny"},{"tr":"8","wo":"kunsztowny"}],"examples":[{"what":"adjective","row":"having or revealing natural creative skill.","example":"my lack of artistic ability"}]}',
    ),
    array( // row #1 135
        'word' => 'bride', 'pl_PL' => '{"noun":[{"tr":"24","wo":"panna młoda"},{"tr":"24","wo":"oblubienica"},{"tr":"24","wo":"narzeczona"}],"examples":[{"what":"noun","row":"a woman on her wedding day or just before and after the event.","example":"How do I prevent the all too familiar pre-wedding bloating experienced by so many brides on their wedding day?"}]}',
    ),
    array( // row #1 136
        'word' => 'classification', 'pl_PL' => '{"noun":[{"tr":"24","wo":"klasyfikacja"},{"tr":"8","wo":"sortowanie"},{"tr":"8","wo":"zaszeregowanie"}],"examples":[{"what":"noun","row":"an American Indian.","example":"Yet again Hollywood exploits another massacre, that of the Sioux Indians at Wounded Knee."}]}',
    ),
    array( // row #1 137
        'word' => 'Indians', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Indianin"},{"tr":"8","wo":"Hindus"}],"examples":[{"what":"noun","row":"an American Indian.","example":"Yet again Hollywood exploits another massacre, that of the Sioux Indians at Wounded Knee."}]}',
    ),
    array( // row #1 138
        'word' => 'garage', 'pl_PL' => '{"noun":[{"tr":"24","wo":"garaż"}],"verb":[{"tr":"8","wo":"garażować"}],"examples":[{"what":"noun","row":"a building or shed for housing a motor vehicle or vehicles.","example":"Ensure all doors and windows are secured and buildings like sheds, garages and outhouses have good quality locks and even alarms fitted."},{"what":"verb","row":"put or keep (a motor vehicle) in a garage.","example":"During the trial period the test car was not garaged , but exposed to moderately cold Michigan weather and one light snowfall."}]}',
    ),
    array( // row #1 139
        'word' => 'expert', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ekspert"},{"tr":"16","wo":"specjalista"},{"tr":"8","wo":"znawca"},{"tr":"8","wo":"fachowiec"},{"tr":"8","wo":"rzeczoznawca"},{"tr":"8","wo":"mistrz"}],"adjective":[{"tr":"8","wo":"fachowy"},{"tr":"8","wo":"umiejętny"},{"tr":"8","wo":"mistrzowski"}],"examples":[{"what":"adjective","row":"having or involving authoritative knowledge.","example":"he had received expert academic advice"},{"what":"noun","row":"a person who has a comprehensive and authoritative knowledge of or skill in a particular area.","example":"experts in child development"}]}',
    ),
    array( // row #1 140
        'word' => 'drill', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wiertło"},{"tr":"24","wo":"wiertarka"},{"tr":"16","wo":"świder"},{"tr":"8","wo":"musztra"},{"tr":"8","wo":"dryl"},{"tr":"8","wo":"musztrowanie"},{"tr":"8","wo":"ćwiczenie"},{"tr":"8","wo":"bruzda"},{"tr":"8","wo":"pawian"},{"tr":"8","wo":"drelich"}],"verb":[{"tr":"24","wo":"wiercić"},{"tr":"8","wo":"posiać"}],"examples":[{"what":"noun","row":"a hand tool, power tool, or machine with a rotating cutting tip or reciprocating hammer or chisel, used for making holes.","example":"Most of the project requires basic wood-working tools - a circular saw, a saber saw, an electric drill , a hammer, and a nail set."},{"what":"verb","row":"produce (a hole) in something by or as if by boring with a drill.","example":"drill holes through the tiles for the masonry pins"}]}',
    ),
    array( // row #1 141
        'word' => 'skirt', 'pl_PL' => '{"noun":[{"tr":"24","wo":"spódnica"},{"tr":"16","wo":"spódniczka"},{"tr":"8","wo":"kiecka"},{"tr":"8","wo":"brzeg"},{"tr":"8","wo":"kobieta"}],"verb":[{"tr":"8","wo":"przejść"},{"tr":"8","wo":"obiegać"}],"examples":[{"what":"noun","row":"a woman\'s outer garment fastened around the waist and hanging down around the legs.","example":"After a swim, put on the wrap skirt over your bikini or swim suit, and go for a drink."},{"what":"verb","row":"go around or past the edge of.","example":"he did not go through the city but skirted it"}]}',
    ),
    array( // row #1 142
        'word' => 'performances', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wydajność"},{"tr":"16","wo":"wykonanie"},{"tr":"16","wo":"występ"},{"tr":"16","wo":"spełnienie"},{"tr":"16","wo":"przedstawienie"},{"tr":"8","wo":"koncert"},{"tr":"8","wo":"osiągnięcie"},{"tr":"8","wo":"wykonawstwo"},{"tr":"8","wo":"dokonanie"},{"tr":"8","wo":"odtwarzanie"},{"tr":"8","wo":"wyczyn"},{"tr":"8","wo":"impreza"},{"tr":"8","wo":"produkcja"},{"tr":"8","wo":"seans"},{"tr":"8","wo":"odegranie"},{"tr":"8","wo":"odprawienie nabożeństwa"}],"examples":[{"what":"noun","row":"an act of staging or presenting a play, concert, or other form of entertainment.","example":"Don Giovanni had its first performance in 1787"}]}',
    ),
    array( // row #1 143
        'word' => 'shame', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wstyd"},{"tr":"16","wo":"hańba"},{"tr":"8","wo":"zawstydzenie"},{"tr":"8","wo":"sromota"},{"tr":"8","wo":"kompromitacja"},{"tr":"8","wo":"niesława"}],"verb":[{"tr":"16","wo":"zawstydzić"},{"tr":"16","wo":"wstydzić"}],"examples":[{"what":"noun","row":"a painful feeling of humiliation or distress caused by the consciousness of wrong or foolish behavior.","example":"she was hot with shame"},{"what":"verb","row":"(of a person, action, or situation) make (someone) feel ashamed.","example":"I tried to shame him into giving some away"}]}',
    ),
    array( // row #1 144
        'word' => 'Unfortunately', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"niestety"},{"tr":"16","wo":"na nieszczęście"},{"tr":"8","wo":"niefortunnie"}],"examples":[{"what":"adverb","row":"it is unfortunate that.","example":"unfortunately, we do not have the time to interview every applicant"}]}',
    ),
    array( // row #1 145
        'word' => 'package', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pakiet"},{"tr":"24","wo":"pakunek"},{"tr":"16","wo":"opakowanie"},{"tr":"16","wo":"paczka"},{"tr":"16","wo":"zestaw"},{"tr":"8","wo":"tobół"},{"tr":"8","wo":"paczkowanie"}],"verb":[{"tr":"24","wo":"zapakować"},{"tr":"8","wo":"opakować"},{"tr":"8","wo":"paczkować"}],"examples":[{"what":"noun","row":"an object or group of objects wrapped in paper or plastic, or packed in a box.","example":"Next to her place was a dry goods store where they still wrapped your packages in brown paper before sending you home."},{"what":"verb","row":"put into a box or wrapping, especially for sale.","example":"choose products that are packaged in recyclable materials"}]}',
    ),
    array( // row #1 146
        'word' => 'Rev', 'pl_PL' => '{"noun":[{"tr":"8","wo":"obrót silnika"}],"examples":[{"what":"abbreviation","row":"the book of Revelation.","example":null},{"what":"verb","row":"increase the running speed of (an engine) or the engine speed of (a vehicle) by pressing the accelerator, especially while the clutch is disengaged.","example":"he got into the car, revved up the engine and drove off"},{"what":"noun","row":"a revolution of an engine per minute.","example":"an engine speed of 1,750 revs"}]}',
    ),
    array( // row #1 147
        'word' => 'strictly', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"rygorystycznie"},{"tr":"16","wo":"dokładnie"},{"tr":"8","wo":"twardo"}],"examples":[{"what":"adverb","row":"in a way that involves rigid enforcement or that demands obedience.","example":"he\'s been brought up strictly"}]}',
    ),
    array( // row #1 148
        'word' => 'determining', 'pl_PL' => '{"verb":[{"tr":"16","wo":"ustalać"},{"tr":"8","wo":"decydować"},{"tr":"8","wo":"determinować"},{"tr":"8","wo":"zadecydować"},{"tr":"8","wo":"stanowić"},{"tr":"8","wo":"postanowić"},{"tr":"8","wo":"oznaczać"},{"tr":"8","wo":"rozstrzygać"},{"tr":"8","wo":"definiować"},{"tr":"8","wo":"skłonić"},{"tr":"8","wo":"czynić"}],"examples":[{"what":"verb","row":"cause (something) to occur in a particular way; be the decisive factor in.","example":"it will be her mental attitude that determines her future"}]}',
    ),
    array( // row #1 149
        'word' => 'pipe', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rura"},{"tr":"24","wo":"przewód"},{"tr":"16","wo":"fajka"},{"tr":"8","wo":"piszczałka"},{"tr":"8","wo":"rynna"},{"tr":"8","wo":"fujarka"},{"tr":"8","wo":"gwizdek"},{"tr":"8","wo":"fujara"},{"tr":"8","wo":"dudka"},{"tr":"8","wo":"beczka"}],"verb":[{"tr":"8","wo":"świstać"},{"tr":"8","wo":"skanalizować"}],"examples":[{"what":"noun","row":"a tube of metal, plastic, or other material used to convey water, gas, oil, or other fluid substances.","example":"Roads, bridges, utility lines, water and sewer pipes , and other supporting services have to be rebuilt."},{"what":"verb","row":"convey (water, gas, oil, or other fluid substances) through a pipe or pipes.","example":"water from the lakes is piped to several towns"}]}',
    ),
    array( // row #1 150
        'word' => 'harmony', 'pl_PL' => '{"noun":[{"tr":"24","wo":"harmonia"},{"tr":"24","wo":"zgoda"},{"tr":"8","wo":"zharmonizowanie"},{"tr":"8","wo":"zgodność"},{"tr":"8","wo":"zestrojenie"}],"examples":[{"what":"noun","row":"the combination of simultaneously sounded musical notes to produce chords and chord progressions having a pleasing effect.","example":"four-part harmony in the barbershop style"}]}',
    ),
    array( // row #1 151
        'word' => 'merchant', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"kupiecki"},{"tr":"8","wo":"handlowy"}],"noun":[{"tr":"24","wo":"kupiec"},{"tr":"8","wo":"handlowiec"},{"tr":"8","wo":"hurtownik"},{"tr":"8","wo":"facet"},{"tr":"8","wo":"gość"}],"examples":[{"what":"noun","row":"a person or company involved in wholesale trade, especially one dealing with foreign countries or supplying merchandise to a particular trade.","example":"the area\'s leading timber merchant"},{"what":"adjective","row":"of or relating to merchants, trade, or commerce.","example":"the growth of the merchant classes"}]}',
    ),
    array( // row #1 152
        'word' => 'carbon', 'pl_PL' => '{"noun":[{"tr":"24","wo":"węgiel"},{"tr":"8","wo":"węglik"},{"tr":"8","wo":"elektroda węglowa"}],"adjective":[{"tr":"16","wo":"węglowy"},{"tr":"8","wo":"pigmentowy"}],"examples":[{"what":"noun","row":"the chemical element of atomic number 6, a nonmetal that has two main forms (diamond and graphite) and that also occurs in impure form in charcoal, soot, and coal.","example":"Combustion, or burning, is a chemical process involving carbon , hydrogen and oxygen."}]}',
    ),
    array( // row #1 153
        'word' => 'branches', 'pl_PL' => '{"noun":[{"tr":"24","wo":"oddział"},{"tr":"24","wo":"gałąź"},{"tr":"16","wo":"filia"},{"tr":"16","wo":"odgałęzienie"},{"tr":"16","wo":"dziedzina"},{"tr":"8","wo":"odnoga"},{"tr":"8","wo":"konar"},{"tr":"8","wo":"ekspozytura"},{"tr":"8","wo":"dyscyplina"},{"tr":"8","wo":"agenda"}],"verb":[{"tr":"8","wo":"odgałęziać się"},{"tr":"8","wo":"rozdwajać się"}],"examples":[{"what":"noun","row":"a part of a tree that grows out from the trunk or from a bough.","example":"Of special interest are the bromeliads that grow on trunks and along branches of big trees."},{"what":"verb","row":"(of a road or path) divide into one or more subdivisions.","example":"In the centre of the village, a small side road branched away and climbed a steep brae beyond the houses and back gardens."}]}',
    ),
    array( // row #1 154
        'word' => 'classical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"klasyczny"}],"examples":[{"what":"adjective","row":"of or relating to ancient Greek or Latin literature, art, or culture.","example":"classical mythology"}]}',
    ),
    array( // row #1 155
        'word' => 'owner', 'pl_PL' => '{"noun":[{"tr":"24","wo":"właściciel"},{"tr":"8","wo":"posiadacz"},{"tr":"8","wo":"pryncypał"}],"examples":[{"what":"noun","row":"a person who owns something.","example":"the proud owner of a huge Dalmatian"}]}',
    ),
    array( // row #1 156
        'word' => 'Campus', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kampus"},{"tr":"8","wo":"miasteczko uniwersyteckie"},{"tr":"8","wo":"teren szkoły"},{"tr":"8","wo":"miejscowość"}],"examples":[{"what":"noun","row":"the grounds and buildings of a university or college.","example":"for the first year I had a room on campus"}]}',
    ),
    array( // row #1 157
        'word' => 'presentation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"prezentacja"},{"tr":"16","wo":"przedstawienie"},{"tr":"8","wo":"przedkładanie"},{"tr":"8","wo":"przedłożenie"},{"tr":"8","wo":"podarowanie"},{"tr":"8","wo":"ofiarowanie"},{"tr":"8","wo":"postrzeżenie"}],"examples":[{"what":"noun","row":"the proffering or giving of something to someone, especially as part of a formal ceremony.","example":"the presentation of certificates to new members"}]}',
    ),
    array( // row #1 158
        'word' => 'charter', 'pl_PL' => '{"noun":[{"tr":"24","wo":"czarter"},{"tr":"24","wo":"statut"},{"tr":"16","wo":"karta"},{"tr":"8","wo":"nadanie"}],"verb":[{"tr":"8","wo":"zakładać"},{"tr":"8","wo":"frachtować"}],"examples":[{"what":"noun","row":"a written grant by a country\'s legislative or sovereign power, by which an institution such as a company, college, or city is created and its rights and privileges defined.","example":"In 1794 the legislature granted the charter , creating one of the four earliest academies in New Hampshire."},{"what":"verb","row":"grant a charter to (a city, college, or other institution).","example":"the company was chartered in 1553"}]}',
    ),
    array( // row #1 159
        'word' => 'quarrel', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kłótnia"},{"tr":"24","wo":"spór"},{"tr":"16","wo":"sprzeczka"},{"tr":"8","wo":"zwada"},{"tr":"8","wo":"swara"},{"tr":"8","wo":"zatarg"},{"tr":"8","wo":"wojna"},{"tr":"8","wo":"handryczenie się"},{"tr":"8","wo":"niesnaski"},{"tr":"8","wo":"bełt"}],"verb":[{"tr":"16","wo":"kłócić się"},{"tr":"16","wo":"ujadać"}],"examples":[{"what":"noun","row":"an angry argument or disagreement, typically between people who are usually on good terms.","example":"he made the mistake of picking a quarrel with John"},{"what":"verb","row":"have an angry argument or disagreement.","example":"stop quarreling with your sister"}]}',
    ),
    array( // row #1 160
        'word' => 'Prince', 'pl_PL' => '{"noun":[{"tr":"24","wo":"książę"}],"examples":[{"what":"noun","row":"the son of a monarch.","example":"I was anticipating a marvelous story with a princess waiting for her prince in her royal castle."}]}',
    ),
    array( // row #1 161
        'word' => 'string', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"smyczkowy"},{"tr":"16","wo":"strunowy"}],"noun":[{"tr":"16","wo":"sznur"},{"tr":"16","wo":"struna"},{"tr":"8","wo":"powrózek"},{"tr":"8","wo":"linka"},{"tr":"8","wo":"cięciwa"},{"tr":"8","wo":"tasiemka"},{"tr":"8","wo":"żyła"}],"verb":[{"tr":"8","wo":"nanizać"},{"tr":"8","wo":"nawlec"},{"tr":"8","wo":"zawiązać"}],"examples":[{"what":"noun","row":"material consisting of threads of cotton, hemp, or other material twisted together to form a thin length.","example":"Mikki was threading lengths of string between four wooden pegs to mark out her chosen plot when the minibus arrived, half an hour later."},{"what":"verb","row":"hang (something) so that it stretches in a long line.","example":"lights were strung across the promenade"}]}',
    ),
    array( // row #1 162
        'word' => 'naval', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"morski"},{"tr":"8","wo":"marynarski"},{"tr":"8","wo":"okrętowy"}],"examples":[{"what":"adjective","row":"of, in, or relating to a navy or navies.","example":"a naval officer"}]}',
    ),
    array( // row #1 163
        'word' => 'fewer', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"nieliczni"}],"examples":[{"what":"adjective","row":"a small number of.","example":"may I ask a few questions?"}]}',
    ),
    array( // row #1 164
        'word' => 'decline', 'pl_PL' => '{"noun":[{"tr":"16","wo":"upadek"},{"tr":"16","wo":"zanik"},{"tr":"8","wo":"zanikanie"},{"tr":"8","wo":"ubytek"},{"tr":"8","wo":"utrata"},{"tr":"8","wo":"zniżka"},{"tr":"8","wo":"niemoc"},{"tr":"8","wo":"bezwład"}],"verb":[{"tr":"8","wo":"opadać"},{"tr":"8","wo":"słabnąć"},{"tr":"8","wo":"maleć"},{"tr":"8","wo":"biednieć"}],"examples":[{"what":"noun","row":"a gradual and continuous loss of strength, numbers, quality, or value.","example":"a serious decline in bird numbers"},{"what":"verb","row":"(typically of something regarded as good) become smaller, fewer, or less; decrease.","example":"the birth rate continued to decline"}]}',
    ),
    array( // row #1 165
        'word' => 'matching', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"pasujący"},{"tr":"8","wo":"dobrze dobrany"}],"noun":[{"tr":"16","wo":"dopasowywanie"},{"tr":"8","wo":"zrównanie"}],"examples":[{"what":"adjective","row":"corresponding in pattern, color, or design; complementary.","example":"a blue jacket and matching skirt"}]}',
    ),
    array( // row #1 166
        'word' => 'benefits', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zasiłek"},{"tr":"24","wo":"korzyść"},{"tr":"8","wo":"pożytek"},{"tr":"8","wo":"dobrodziejstwo"},{"tr":"8","wo":"benefis"},{"tr":"8","wo":"zapomoga"}],"examples":[{"what":"noun","row":"an advantage or profit gained from something.","example":"tenants bought their houses with the benefit of a discount"},{"what":"verb","row":"receive an advantage; profit; gain.","example":"areas that would benefit from regeneration"}]}',
    ),
    array( // row #1 167
        'word' => 'urgent', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pilny"},{"tr":"16","wo":"naglący"},{"tr":"8","wo":"natarczywy"},{"tr":"8","wo":"przynaglający"},{"tr":"8","wo":"gwałtowny"},{"tr":"8","wo":"piekący"},{"tr":"8","wo":"usilny"}],"examples":[{"what":"adjective","row":"(of a state or situation) requiring immediate action or attention.","example":"the situation is far more urgent than politicians are admitting"}]}',
    ),
    array( // row #1 168
        'word' => 'involving', 'pl_PL' => '{"verb":[{"tr":"16","wo":"angażować"},{"tr":"16","wo":"dotyczyć"},{"tr":"16","wo":"pociągać za sobą"},{"tr":"8","wo":"wciągać"},{"tr":"8","wo":"wmieszać"},{"tr":"8","wo":"uwikłać"},{"tr":"8","wo":"wplątać"},{"tr":"8","wo":"zwijać"},{"tr":"8","wo":"wikłać"},{"tr":"8","wo":"zamieszać"},{"tr":"8","wo":"wwikłać"},{"tr":"8","wo":"zadłużyć"}],"examples":[{"what":"verb","row":"(of a situation or event) include (something) as a necessary part or result.","example":"his transfer to another school would involve a lengthy assessment procedure"}]}',
    ),
    array( // row #1 169
        'word' => 'favorable', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"korzystny"},{"tr":"16","wo":"pozytywny"},{"tr":"16","wo":"przychylny"},{"tr":"16","wo":"pomyślny"},{"tr":"8","wo":"życzliwy"},{"tr":"8","wo":"łaskawy"},{"tr":"8","wo":"dodatni"}],"examples":[{"what":"adjective","row":"expressing approval.","example":"the book received highly favorable reviews"}]}',
    ),
    array( // row #1 170
        'word' => 'missing', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"brakujący"},{"tr":"8","wo":"nietrafny"},{"tr":"8","wo":"nieobecny"},{"tr":"8","wo":"przepadły"},{"tr":"8","wo":"zaginiony"}],"examples":[{"what":"adjective","row":"(of a thing) not able to be found because it is not in its expected place.","example":"a quantity of cash has gone missing"}]}',
    ),
    array( // row #1 171
        'word' => 'Thursday', 'pl_PL' => '{"noun":[{"tr":"24","wo":"czwartek"}],"examples":[{"what":"noun","row":"the day of the week before Friday and following Wednesday.","example":"the committee met on Thursday"},{"what":"adverb","row":"on Thursday.","example":"he called her up Thursday"}]}',
    ),
    array( // row #1 172
        'word' => 'rejected', 'pl_PL' => '{"verb":[{"tr":"24","wo":"odrzucać"},{"tr":"8","wo":"odepchnąć"},{"tr":"8","wo":"nie przyjąć"},{"tr":"8","wo":"eliminować"}],"examples":[{"what":"verb","row":"dismiss as inadequate, inappropriate, or not to one\'s taste.","example":"union negotiators rejected a 1.5 percent pay increase"}]}',
    ),
    array( // row #1 173
        'word' => 'succeeded', 'pl_PL' => '{"verb":[{"tr":"16","wo":"osiągnąć sukces"},{"tr":"8","wo":"powieść się"},{"tr":"8","wo":"udać się"},{"tr":"8","wo":"zdołać"},{"tr":"8","wo":"odziedziczyć"},{"tr":"8","wo":"następować po kimś czymś"},{"tr":"8","wo":"odnosić skutek"}],"examples":[{"what":"verb","row":"achieve the desired aim or result.","example":"a mission which could not possibly succeed"}]}',
    ),
    array( // row #1 174
        'word' => 'mature', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"dojrzały"},{"tr":"8","wo":"dorosły"},{"tr":"8","wo":"wytrawny"},{"tr":"8","wo":"gruntowny"},{"tr":"8","wo":"płatny"}],"verb":[{"tr":"24","wo":"dojrzeć"},{"tr":"8","wo":"wydorośleć"},{"tr":"8","wo":"gruntownie rozważyć"}],"examples":[{"what":"adjective","row":"fully developed physically; full-grown.","example":"she was now a mature woman"},{"what":"verb","row":"(of an organism) become physically mature.","example":"children mature at different ages"}]}',
    ),
    array( // row #1 175
        'word' => 'identical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"identyczny"},{"tr":"8","wo":"równobrzmiący"},{"tr":"8","wo":"bliźni"},{"tr":"8","wo":"bliźniaczy"}],"examples":[{"what":"adjective","row":"similar in every detail; exactly alike.","example":"four girls in identical green outfits"}]}',
    ),
    array( // row #1 176
        'word' => 'filed', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"wniesiony"},{"tr":"8","wo":"wycyzelowany"},{"tr":"8","wo":"wygładzony"},{"tr":"8","wo":"zaszlifowany"},{"tr":"8","wo":"wciągnięty do rejestru"}],"examples":[{"what":"verb","row":"(of a situation or event) include (something) as a necessary part or result.","example":"his transfer to another school would involve a lengthy assessment procedure"}]}',
    ),
    array( // row #1 177
        'word' => 'involve', 'pl_PL' => '{"verb":[{"tr":"16","wo":"angażować"},{"tr":"16","wo":"dotyczyć"},{"tr":"8","wo":"zwijać"},{"tr":"8","wo":"wikłać"},{"tr":"8","wo":"uwikłać"},{"tr":"8","wo":"wwikłać"},{"tr":"8","wo":"wplątać"},{"tr":"8","wo":"wmieszać"},{"tr":"8","wo":"zamieszać"},{"tr":"8","wo":"wciągać"},{"tr":"8","wo":"pociągać za sobą"},{"tr":"8","wo":"zadłużyć"}],"examples":[{"what":"verb","row":"(of a situation or event) include (something) as a necessary part or result.","example":"his transfer to another school would involve a lengthy assessment procedure"}]}',
    ),
    array( // row #1 178
        'word' => 'elected', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wybrany"},{"tr":"8","wo":"postanowiony"},{"tr":"8","wo":"obrany"}],"examples":[{"what":"noun","row":"the action of seizing someone to take into custody.","example":"I have a warrant for your arrest"},{"what":"verb","row":"seize (someone) by legal authority and take into custody.","example":"the police arrested him for possession of marijuana"}]}',
    ),
    array( // row #1 179
        'word' => 'arrest', 'pl_PL' => '{"verb":[{"tr":"24","wo":"aresztować"},{"tr":"16","wo":"zatrzymać"},{"tr":"16","wo":"zaaresztować"},{"tr":"8","wo":"przyciągać"}],"noun":[{"tr":"24","wo":"aresztowanie"},{"tr":"24","wo":"zatrzymanie"},{"tr":"24","wo":"areszt"},{"tr":"8","wo":"wstrzymanie"}],"examples":[{"what":"noun","row":"the action of seizing someone to take into custody.","example":"I have a warrant for your arrest"},{"what":"verb","row":"seize (someone) by legal authority and take into custody.","example":"the police arrested him for possession of marijuana"}]}',
    ),
    array( // row #1 180
        'word' => 'damn', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"cholerny"},{"tr":"16","wo":"przeklęty"},{"tr":"8","wo":"piekielny"}],"verb":[{"tr":"8","wo":"potępiać"},{"tr":"8","wo":"przeklinać"},{"tr":"8","wo":"krytykować"}],"noun":[{"tr":"8","wo":"przekleństwo"},{"tr":"8","wo":"anatema"}],"examples":[{"what":"verb","row":"(in Christian belief) be condemned by God to suffer eternal punishment in hell.","example":"be forever damned with Lucifer"},{"what":"adjective","row":"used for emphasis, especially to express anger or frustration.","example":"turn that damn thing off!"},{"what":"exclamation","row":"expressing anger, surprise, or frustration.","example":"Damn! I completely forgot!"}]}',
    ),
    array( // row #1 181
        'word' => 'measurement', 'pl_PL' => '{"noun":[{"tr":"16","wo":"pomiary"},{"tr":"8","wo":"mierzenie"},{"tr":"8","wo":"wymierzenie"},{"tr":"8","wo":"dozowanie"},{"tr":"8","wo":"miara"},{"tr":"8","wo":"wymiar"},{"tr":"8","wo":"objętość"},{"tr":"8","wo":"metraż"}],"examples":[{"what":"noun","row":"the action of measuring something.","example":"accurate measurement is essential"}]}',
    ),
    array( // row #1 182
        'word' => 'territory', 'pl_PL' => '{"noun":[{"tr":"24","wo":"terytorium"},{"tr":"24","wo":"obszar"},{"tr":"8","wo":"pole"}],"examples":[{"what":"noun","row":"an area of land under the jurisdiction of a ruler or state.","example":"the government was prepared to give up the nuclear weapons on its territory"}]}',
    ),
    array( // row #1 183
        'word' => 'possession', 'pl_PL' => '{"noun":[{"tr":"24","wo":"posiadanie"},{"tr":"8","wo":"własność"},{"tr":"8","wo":"władanie"},{"tr":"8","wo":"opanowanie"},{"tr":"8","wo":"opętanie"},{"tr":"8","wo":"zdobycz"},{"tr":"8","wo":"posesja"},{"tr":"8","wo":"spokój"}],"examples":[{"what":"noun","row":"the state of having, owning, or controlling something.","example":"are you in possession of any items over $500 in value?"}]}',
    ),
    array( // row #1 184
        'word' => 'finance', 'pl_PL' => '{"noun":[{"tr":"24","wo":"finanse"}],"verb":[{"tr":"24","wo":"finansować"},{"tr":"24","wo":"sfinansować"}],"examples":[{"what":"noun","row":"the management of large amounts of money, especially by governments or large companies.","example":"The finance department has also been developed to meet the needs of the bigger merged company."},{"what":"verb","row":"provide funding for (a person or enterprise).","example":"the city and county originally financed the project"}]}',
    ),
    array( // row #1 185
        'word' => 'telegraph', 'pl_PL' => '{"noun":[{"tr":"24","wo":"telegraf"}],"verb":[{"tr":"8","wo":"telegrafować"},{"tr":"8","wo":"zatelegrafować"},{"tr":"8","wo":"depeszować"}],"examples":[{"what":"noun","row":"a system for transmitting messages from a distance along a wire, especially one creating signals by making and breaking an electrical connection.","example":"news came from the outside world by telegraph"},{"what":"verb","row":"send (someone) a message by telegraph.","example":"I must go and telegraph Mom"}]}',
    ),
    array( // row #1 186
        'word' => 'pupil', 'pl_PL' => '{"noun":[{"tr":"24","wo":"uczeń"},{"tr":"24","wo":"źrenica"},{"tr":"8","wo":"uczennica"},{"tr":"8","wo":"wychowanek"},{"tr":"8","wo":"wychowaniec"},{"tr":"8","wo":"adept"},{"tr":"8","wo":"nieletni"}],"examples":[{"what":"noun","row":"a student in school.","example":"He told delegates the primary school pupil had attacked four teachers."}]}',
    ),
    array( // row #1 187
        'word' => 'findings', 'pl_PL' => '{"noun":[{"tr":"16","wo":"odkrycie"},{"tr":"16","wo":"wniosek"},{"tr":"8","wo":"rozstrzygnięcie"},{"tr":"8","wo":"areszt"}],"examples":[{"what":"noun","row":"the action of finding someone or something.","example":"a local doctor reported the finding of numerous dead rats"}]}',
    ),
    array( // row #1 188
        'word' => 'reasonably', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"rozsądnie"},{"tr":"8","wo":"sensownie"},{"tr":"8","wo":"godziwie"},{"tr":"8","wo":"dorzecznie"}],"examples":[{"what":"adverb","row":"in a fair and sensible way.","example":"he began to talk calmly and reasonably about his future"}]}',
    ),
    array( // row #1 189
        'word' => 'ugly', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"brzydki"},{"tr":"16","wo":"paskudny"},{"tr":"8","wo":"szpetny"},{"tr":"8","wo":"szkaradny"},{"tr":"8","wo":"groźny"}],"examples":[{"what":"adjective","row":"unpleasant or repulsive, especially in appearance.","example":"she thought she was ugly and fat"}]}',
    ),
    array( // row #1 190
        'word' => 'tends', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zmierzać"},{"tr":"8","wo":"pielęgnować"},{"tr":"8","wo":"paść"},{"tr":"8","wo":"mieć skłonność"},{"tr":"8","wo":"opiekować się"},{"tr":"8","wo":"kroić"}],"examples":[{"what":"verb","row":"regularly or frequently behave in a particular way or have a certain characteristic.","example":"written language tends to be formal"}]}',
    ),
    array( // row #1 191
        'word' => 'tools', 'pl_PL' => '{"noun":[{"tr":"8","wo":"przybory"},{"tr":"8","wo":"sprzęt fabryczny"},{"tr":"8","wo":"sprzęt wojenny"},{"tr":"8","wo":"naczynie"}],"examples":[{"what":"noun","row":"a device or implement, especially one held in the hand, used to carry out a particular function.","example":"gardening tools"},{"what":"verb","row":"impress a design on (leather, especially a leather book cover).","example":"volumes bound in green leather and tooled in gold"}]}',
    ),
    array( // row #1 192
        'word' => 'bent', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zgięty"},{"tr":"8","wo":"hakowaty"},{"tr":"8","wo":"zakrzywiony"},{"tr":"8","wo":"kolankowato zgięty"},{"tr":"8","wo":"kolanowy"},{"tr":"8","wo":"naciągnięty"}],"noun":[{"tr":"8","wo":"skłonność"},{"tr":"8","wo":"słabość"},{"tr":"8","wo":"żyłka"},{"tr":"8","wo":"atrakcja"},{"tr":"8","wo":"pociąg"},{"tr":"8","wo":"burzan"}],"examples":[{"what":"adjective","row":"sharply curved or having an angle.","example":"a piece of bent wire"},{"what":"noun","row":"a natural talent or inclination.","example":"a man of religious bent"}]}',
    ),
    array( // row #1 193
        'word' => 'openly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"otwarcie"},{"tr":"8","wo":"publicznie"},{"tr":"8","wo":"głośno"},{"tr":"8","wo":"wprost"},{"tr":"8","wo":"po prostu"}],"examples":[{"what":"adverb","row":"without concealment, deception, or prevarication, especially where these might be expected; frankly or honestly.","example":"he could no longer speak openly of his problems"}]}',
    ),
    array( // row #1 194
        'word' => 'laughter', 'pl_PL' => '{"noun":[{"tr":"24","wo":"śmiech"},{"tr":"8","wo":"śmianie się"}],"examples":[{"what":"noun","row":"the action or sound of laughing.","example":"he roared with laughter"}]}',
    ),
    array( // row #1 195
        'word' => 'dying', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"umierający"},{"tr":"16","wo":"śmierci"},{"tr":"8","wo":"konający"},{"tr":"8","wo":"przedśmiertny"}],"examples":[{"what":"adjective","row":"on the point of death.","example":"he visited his dying mother"}]}',
    ),
    array( // row #1 196
        'word' => 'consequences', 'pl_PL' => '{"noun":[{"tr":"24","wo":"konsekwencja"},{"tr":"24","wo":"skutek"},{"tr":"16","wo":"wynik"},{"tr":"8","wo":"wniosek"},{"tr":"8","wo":"waga"}],"examples":[{"what":"noun","row":"a result or effect of an action or condition.","example":"many have been laid off from work as a consequence of the administration\'s policies"}]}',
    ),
    array( // row #1 197
        'word' => 'tears', 'pl_PL' => '{"noun":[{"tr":"16","wo":"płacz"},{"tr":"8","wo":"płakanie"},{"tr":"8","wo":"spłakanie"}],"examples":[{"what":"noun","row":"a hole or split in something caused by it having been pulled apart forcefully.","example":"The photographs show tears in fabric pulled apart to look like wounds, or pieces of metal depicted so they seem organic."},{"what":"verb","row":"pull or rip (something) apart or to pieces with force.","example":"I tore up the letter"}]}',
    ),
    array( // row #1 198
        'word' => 'fallen', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"upadły"},{"tr":"8","wo":"opadły"},{"tr":"8","wo":"pokonany"},{"tr":"8","wo":"poległy"}],"examples":[{"what":"adjective","row":"subject to sin or depravity.","example":"fallen human nature"}]}',
    ),
    array( // row #1 199
        'word' => 'phrase', 'pl_PL' => '{"noun":[{"tr":"24","wo":"fraza"},{"tr":"24","wo":"wyrażenie"},{"tr":"24","wo":"zwrot"},{"tr":"8","wo":"powiedzenie"}],"verb":[{"tr":"8","wo":"wypowiadać"},{"tr":"8","wo":"frazować"}],"examples":[{"what":"noun","row":"a small group of words standing together as a conceptual unit, typically forming a component of a clause.","example":"Moreoever the rest of the lines explain and expand these references by using adjectival phrases and subordinate clauses which tell the reader to look for explanation within the poem itself."},{"what":"verb","row":"put into a particular form of words.","example":"it\'s important to phrase the question correctly"}]}',
    ),
    array( // row #1 200
        'word' => 'Catholics', 'pl_PL' => '{"noun":[{"tr":"24","wo":"katolik"}],"examples":[{"what":"adjective","row":"working or produced by machines or machinery.","example":"a mechanical device"},{"what":"noun","row":"the working parts of a machine, especially a car.","example":"The key ingredient of the VW-Bentley and the Ford-Jaguar remains the platform, the expensive below-the-waist mechanicals , so the more of them you make, the cheaper they are."}]}',
    ),
    array( // row #1 201
        'word' => 'mechanical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"mechaniczny"},{"tr":"16","wo":"maszynowy"},{"tr":"8","wo":"machinalny"},{"tr":"8","wo":"automatyczny"},{"tr":"8","wo":"techniczny"},{"tr":"8","wo":"bezwiedny"},{"tr":"8","wo":"mechanizmowy"}],"examples":[{"what":"adjective","row":"working or produced by machines or machinery.","example":"a mechanical device"},{"what":"noun","row":"the working parts of a machine, especially a car.","example":"The key ingredient of the VW-Bentley and the Ford-Jaguar remains the platform, the expensive below-the-waist mechanicals , so the more of them you make, the cheaper they are."}]}',
    ),
    array( // row #1 202
        'word' => 'trap', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pułapka"},{"tr":"24","wo":"trap"},{"tr":"8","wo":"potrzask"},{"tr":"8","wo":"sidła"},{"tr":"8","wo":"podstęp"},{"tr":"8","wo":"zasadzka"},{"tr":"8","wo":"matnia"},{"tr":"8","wo":"zapadnia"},{"tr":"8","wo":"instrumenty perkusyjne"},{"tr":"8","wo":"paść"}],"verb":[{"tr":"8","wo":"złapać w pułapkę"},{"tr":"8","wo":"zatrzasnąć"}],"examples":[{"what":"noun","row":"a device or enclosure designed to catch and retain animals, typically by allowing entry but not exit or by catching hold of a part of the body.","example":"All of us must have seen pictures of animals caught in traps , a horrible slow painful death."},{"what":"verb","row":"catch (an animal) in a trap.","example":"Once he dreamed he was trying to trap foxes but kept catching Dalmatians."}]}',
    ),
    array( // row #1 203
        'word' => 'LISTS', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lista"},{"tr":"24","wo":"wykaz"},{"tr":"24","wo":"spis"},{"tr":"8","wo":"tabela"},{"tr":"8","wo":"przechył"},{"tr":"8","wo":"listwa"},{"tr":"8","wo":"ewidencja"},{"tr":"8","wo":"inwentarz"},{"tr":"8","wo":"krajka"}],"verb":[{"tr":"8","wo":"życzyć sobie"},{"tr":"8","wo":"inwentaryzować"},{"tr":"8","wo":"zinwentaryzować"},{"tr":"8","wo":"katalogować"},{"tr":"8","wo":"mieć przechył"},{"tr":"8","wo":"podobać się"},{"tr":"8","wo":"słyszeć"}],"examples":[{"what":"noun","row":"a number of connected items or names written or printed consecutively, typically one below the other.","example":"consult the list of drugs on page 326"},{"what":"verb","row":"make a list of.","example":"I have listed four reasons below"}]}',
    ),
    array( // row #1 204
        'word' => 'Italy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Włochy"}],"examples":[{"what":"noun","row":"a country in southern Europe; population 58,126,200 (est. 2009); capital, Rome; official language, Italian. Italian name Italia.","example":null}]}',
    ),
    array( // row #1 205
        'word' => 'hunting', 'pl_PL' => '{"noun":[{"tr":"24","wo":"łowiectwo"},{"tr":"24","wo":"polowanie"},{"tr":"16","wo":"myślistwo"},{"tr":"8","wo":"łowienie"},{"tr":"8","wo":"łów"},{"tr":"8","wo":"obława"},{"tr":"8","wo":"strzelectwo"}],"examples":[{"what":"noun","row":"the activity of hunting wild animals or game, especially for food or sport.","example":"She was the goddess of hunting , wild animals, childbirth, nature, and the harvest."}]}',
    ),
    array( // row #1 206
        'word' => 'suitable', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"odpowiedni"},{"tr":"8","wo":"stosowny"},{"tr":"8","wo":"należyty"},{"tr":"8","wo":"dogodny"},{"tr":"8","wo":"właściwy"}],"examples":[{"what":"adjective","row":"right or appropriate for a particular person, purpose, or situation.","example":"these toys are not suitable for children under five"}]}',
    ),
    array( // row #1 207
        'word' => 'despair', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rozpacz"}],"verb":[{"tr":"16","wo":"rozpaczać"},{"tr":"8","wo":"desperować"},{"tr":"8","wo":"zwątpić"}],"examples":[{"what":"noun","row":"the complete loss or absence of hope.","example":"driven to despair , he throws himself under a train"},{"what":"verb","row":"lose or be without hope.","example":"we should not despair"}]}',
    ),
    array( // row #1 208
        'word' => 'swept', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zmieciony"},{"tr":"8","wo":"zamieciony"}],"examples":[{"what":"adjective","row":"able to be seen.","example":"the church spire is visible from miles away"}]}',
    ),
    array( // row #1 209
        'word' => 'visible', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"widoczny"},{"tr":"16","wo":"widzialny"},{"tr":"8","wo":"wyraźny"},{"tr":"8","wo":"dostrzegalny"},{"tr":"8","wo":"uchwytny"},{"tr":"8","wo":"widomy"}],"examples":[{"what":"adjective","row":"able to be seen.","example":"the church spire is visible from miles away"}]}',
    ),
    array( // row #1 210
        'word' => 'decades', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dekada"},{"tr":"16","wo":"dziesięciolecie"}],"examples":[{"what":"noun","row":"a period of ten years.","example":"he taught at the university for nearly a decade"}]}',
    ),
    array( // row #1 211
        'word' => 'border', 'pl_PL' => '{"noun":[{"tr":"24","wo":"granica"},{"tr":"24","wo":"obramowanie"},{"tr":"16","wo":"brzeg"},{"tr":"8","wo":"obwódka"},{"tr":"8","wo":"lamówka"},{"tr":"8","wo":"otoczka"},{"tr":"8","wo":"skraj"},{"tr":"8","wo":"listwa"},{"tr":"8","wo":"rabata"},{"tr":"8","wo":"szlak"},{"tr":"8","wo":"fryz"},{"tr":"8","wo":"obrzeżenie"}],"examples":[{"what":"noun","row":"a line separating two political or geographical areas, especially countries.","example":"the German border with Denmark"},{"what":"verb","row":"form an edge along or beside (something).","example":"a pool bordered by palm trees"}]}',
    ),
    array( // row #1 212
        'word' => 'temporary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"chwilowy"},{"tr":"24","wo":"tymczasowy"},{"tr":"16","wo":"czasowy"},{"tr":"16","wo":"przejściowy"},{"tr":"8","wo":"prowizoryczny"}],"examples":[{"what":"adjective","row":"lasting for only a limited period of time; not permanent.","example":"a temporary job"},{"what":"noun","row":"a person employed on a temporary basis, typically an office worker who finds employment through an agency.","example":"They\'re paying overtime to existing employees or hiring temporaries instead."}]}',
    ),
    array( // row #1 213
        'word' => 'duties', 'pl_PL' => '{"noun":[{"tr":"24","wo":"obowiązek"},{"tr":"24","wo":"cło"},{"tr":"16","wo":"podatek"},{"tr":"16","wo":"powinność"},{"tr":"8","wo":"służba"},{"tr":"8","wo":"dyżur"},{"tr":"8","wo":"ciężar"},{"tr":"8","wo":"funkcja"},{"tr":"8","wo":"asystowanie"},{"tr":"8","wo":"uszanowanie"}],"examples":[{"what":"noun","row":"a moral or legal obligation; a responsibility.","example":"it\'s my duty to uphold the law"}]}',
    ),
    array( // row #1 214
        'word' => 'autumn', 'pl_PL' => '{"noun":[{"tr":"24","wo":"jesień"}],"adjective":[{"tr":"24","wo":"jesienny"}],"examples":[{"what":"noun","row":"the third season of the year, when crops and fruits are gathered and leaves fall, in the northern hemisphere from September to November and in the southern hemisphere from March to May.","example":"the countryside is ablaze with color in autumn"}]}',
    ),
    array( // row #1 215
        'word' => 'crazy', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zwariowany"},{"tr":"16","wo":"pomylony"},{"tr":"8","wo":"oszalały"},{"tr":"8","wo":"wariacki"},{"tr":"8","wo":"obłąkany"},{"tr":"8","wo":"maniacki"},{"tr":"8","wo":"obłąkańczy"},{"tr":"8","wo":"dziki"},{"tr":"8","wo":"bzikowaty"},{"tr":"8","wo":"bezrozumny"},{"tr":"8","wo":"narwany"},{"tr":"8","wo":"postrzelony"},{"tr":"8","wo":"zamiłowany"}],"examples":[{"what":"adjective","row":"mentally deranged, especially as manifested in a wild or aggressive way.","example":"Stella went crazy and assaulted a visitor"},{"what":"noun","row":"a mentally deranged person.","example":"Was she the daughter of weirdos and crazies like the ones her father had claimed just now?"}]}',
    ),
    array( // row #1 216
        'word' => 'backward', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"wstecz"}],"adjective":[{"tr":"16","wo":"zacofany"},{"tr":"8","wo":"wsteczny"},{"tr":"8","wo":"uwsteczniony"},{"tr":"8","wo":"antypostępowy"},{"tr":"8","wo":"spóźniony"},{"tr":"8","wo":"niewczesny"},{"tr":"8","wo":"nierozwinięty"},{"tr":"8","wo":"ociągający się"},{"tr":"8","wo":"niechętny"}],"examples":[{"what":"adjective","row":"directed behind or to the rear.","example":"she left the room without a backward glance"},{"what":"adverb","row":"(of a movement) away from one\'s front; in the direction of one\'s back.","example":"he took a step backward"}]}',
    ),
    array( // row #1 217
        'word' => 'transition', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przejście"},{"tr":"8","wo":"przejście od czegoś do czegoś"},{"tr":"8","wo":"przeskok"},{"tr":"8","wo":"przemiana"},{"tr":"8","wo":"zmiana"}],"adjective":[{"tr":"24","wo":"przejściowy"}],"examples":[{"what":"noun","row":"the process or a period of changing from one state or condition to another.","example":"students in transition from one program to another"},{"what":"verb","row":"undergo or cause to undergo a process or period of transition.","example":"the network ought to be built by the federal government and then transitioned into private industry"}]}',
    ),
    array( // row #1 218
        'word' => 'tells', 'pl_PL' => '{"verb":[{"tr":"24","wo":"powiedzieć"},{"tr":"8","wo":"wiedzieć"},{"tr":"8","wo":"poznać"},{"tr":"8","wo":"powiadać"},{"tr":"8","wo":"wskazać"},{"tr":"8","wo":"kazać"},{"tr":"8","wo":"napleść"},{"tr":"8","wo":"zapewniać"},{"tr":"8","wo":"mówić komuś coś"}],"examples":[{"what":"verb","row":"communicate information, facts, or news to someone in spoken or written words.","example":"I told her you were coming"},{"what":"noun","row":"(especially in poker) an unconscious action that is thought to betray an attempted deception.","example":"But I think you could waste a poker lifetime looking for tells like those."}]}',
    ),
    array( // row #1 219
        'word' => 'soap', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mydło"}],"verb":[{"tr":"8","wo":"mydlić"},{"tr":"8","wo":"namydlić"},{"tr":"8","wo":"pomydlić"},{"tr":"8","wo":"zamydlać"}],"examples":[{"what":"noun","row":"a substance used with water for washing and cleaning, made of a compound of natural oils or fats with sodium hydroxide or another strong alkali, and typically having perfume and coloring added.","example":"a bar of soap"},{"what":"verb","row":"wash with soap.","example":"she soaped her face"}]}',
    ),
    array( // row #1 220
        'word' => 'roles', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rola"}],"examples":[{"what":"noun","row":"an actor\'s part in a play, movie, etc..","example":"Dietrich\'s role as a wife in war-torn Paris"}]}',
    ),
    array( // row #1 221
        'word' => 'crop', 'pl_PL' => '{"verb":[{"tr":"24","wo":"przyciąć"},{"tr":"16","wo":"obciąć"},{"tr":"8","wo":"oskubać"},{"tr":"8","wo":"uprawiać ziemię"},{"tr":"8","wo":"rodzić"}],"noun":[{"tr":"16","wo":"plon"},{"tr":"16","wo":"wole"},{"tr":"8","wo":"urodzaj"},{"tr":"8","wo":"pokos"},{"tr":"8","wo":"odwilżacz"},{"tr":"8","wo":"podgardlica"},{"tr":"8","wo":"biczysko"},{"tr":"8","wo":"harap"},{"tr":"8","wo":"skóra wygarbowana"},{"tr":"8","wo":"ostrzyżenie"},{"tr":"8","wo":"fryzura"}],"examples":[{"what":"noun","row":"a cultivated plant that is grown as food, especially a grain, fruit, or vegetable.","example":"the main crops were oats and barley"},{"what":"verb","row":"cut (something, especially a person\'s hair) very short.","example":"cropped blond hair"}]}',
    ),
    array( // row #1 222
        'word' => 'beer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"piwo"}],"examples":[{"what":"noun","row":"an alcoholic drink made from yeast-fermented malt flavored with hops.","example":"a pint of beer"}]}',
    ),
    array( // row #1 223
        'word' => 'folk', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ludowy"}],"noun":[{"tr":"24","wo":"lud"}],"examples":[{"what":"noun","row":"people in general.","example":"some folk will do anything for money"},{"what":"adjective","row":"of or relating to the traditional art or culture of a community or nation.","example":"a revival of interest in folk customs"}]}',
    ),
    array( // row #1 224
        'word' => 'worst', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"najgorszy"}],"adverb":[{"tr":"24","wo":"najgorzej"}],"verb":[{"tr":"8","wo":"pokonać"}],"examples":[{"what":"adjective","row":"of the poorest quality or the lowest standard; least good or desirable.","example":"the speech was the worst he had ever made"},{"what":"adverb","row":"most severely or seriously.","example":"manufacturing and mining are the industries worst affected by falling employment"},{"what":"verb","row":"get the better of; defeat.","example":"this was not the time for a deep discussionâshe was tired and she would be worsted"},{"what":"noun","row":"the most serious or unpleasant thing that could happen.","example":"when I saw the ambulance outside her front door, I began to fear the worst"}]}',
    ),
    array( // row #1 225
        'word' => 'patience', 'pl_PL' => '{"noun":[{"tr":"24","wo":"cierpliwość"},{"tr":"8","wo":"wytrzymałość"},{"tr":"8","wo":"pasjans"}],"examples":[{"what":"noun","row":"the capacity to accept or tolerate delay, trouble, or suffering without getting angry or upset.","example":"you can find bargains if you have the patience to sift through the dross"}]}',
    ),
    array( // row #1 226
        'word' => 'Metropolitan', 'pl_PL' => '{"noun":[{"tr":"24","wo":"metropolita"},{"tr":"8","wo":"mieszkaniec stolicy"}],"adjective":[{"tr":"24","wo":"metropolitalny"},{"tr":"8","wo":"stołeczny"}],"examples":[{"what":"adjective","row":"of, relating to, or denoting a metropolis, often inclusive of its surrounding areas.","example":"the Boston metropolitan area"},{"what":"noun","row":"a bishop having authority over the bishops of a province, in particular (in many Orthodox Churches) one ranking above archbishop and below patriarch.","example":"Specifically, the Board urges a revival of the oversight role of metropolitans , i.e., archbishops overseeing bishops in their province."}]}',
    ),
    array( // row #1 227
        'word' => 'owned', 'pl_PL' => '{"verb":[{"tr":"8","wo":"posiadać"},{"tr":"8","wo":"uznać"},{"tr":"8","wo":"wyznać"}],"examples":[{"what":"verb","row":"have (something) as one\'s own; possess.","example":"his father owns a restaurant"}]}',
    ),
    array( // row #1 228
        'word' => 'debate', 'pl_PL' => '{"noun":[{"tr":"24","wo":"debata"},{"tr":"16","wo":"dyskusja"},{"tr":"8","wo":"dysputa"},{"tr":"8","wo":"deliberacja"}],"verb":[{"tr":"16","wo":"debatować"},{"tr":"16","wo":"dyskutować"},{"tr":"8","wo":"spierać się"},{"tr":"8","wo":"zastanawiać się"},{"tr":"8","wo":"deliberować"},{"tr":"8","wo":"rozważać"},{"tr":"8","wo":"roztrząsać"},{"tr":"8","wo":"walczyć"}],"examples":[{"what":"noun","row":"a formal discussion on a particular topic in a public meeting or legislative assembly, in which opposing arguments are put forward.","example":"Watt committed himself to holding more public debates and discussions separate from council meetings."},{"what":"verb","row":"argue about (a subject), especially in a formal manner.","example":"the board debated his proposal"}]}',
    ),
    array( // row #1 229
        'word' => 'logical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"logiczny"},{"tr":"8","wo":"dorzeczny"}],"examples":[{"what":"adjective","row":"of or according to the rules of logic or formal argument.","example":"a logical impossibility"}]}',
    ),
    array( // row #1 230
        'word' => 'elaborate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"opracować"},{"tr":"16","wo":"wypracować"},{"tr":"8","wo":"zbadać"},{"tr":"8","wo":"przerobić"},{"tr":"8","wo":"podać szczegóły"}],"adjective":[{"tr":"16","wo":"skomplikowany"},{"tr":"16","wo":"wyszukany"},{"tr":"8","wo":"gruntowny"},{"tr":"8","wo":"wypracowany"}],"examples":[{"what":"adjective","row":"involving many carefully arranged parts or details; detailed and complicated in design and planning.","example":"elaborate security precautions"},{"what":"verb","row":"develop or present (a theory, policy, or system) in detail.","example":"the key idea of the book is expressed in the title and elaborated in the text"}]}',
    ),
    array( // row #1 231
        'word' => 'bold', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"śmiały"},{"tr":"16","wo":"odważny"},{"tr":"8","wo":"zuchwały"},{"tr":"8","wo":"łobuzerski"},{"tr":"8","wo":"stromy"},{"tr":"8","wo":"wyraźny"}],"examples":[{"what":"adjective","row":"(of a person, action, or idea) showing an ability to take risks; confident and courageous.","example":"a bold attempt to solve the crisis"},{"what":"noun","row":"a bold typeface or letter.","example":"difficult words and phrases are highlighted in bold"}]}',
    ),
    array( // row #1 232
        'word' => 'arrangement', 'pl_PL' => '{"noun":[{"tr":"24","wo":"układ"},{"tr":"24","wo":"rozmieszczenie"},{"tr":"16","wo":"umowa"},{"tr":"16","wo":"ułożenie"},{"tr":"8","wo":"rozłożenie"},{"tr":"8","wo":"układanie"},{"tr":"8","wo":"ustawienie"},{"tr":"8","wo":"uporządkowanie"},{"tr":"8","wo":"porządek"},{"tr":"8","wo":"załatwienie"},{"tr":"8","wo":"adaptacja"},{"tr":"8","wo":"konstrukcja"},{"tr":"8","wo":"aranżowanie"}],"examples":[{"what":"noun","row":"the action, process, or result of arranging or being arranged.","example":"the arrangement of the furniture in the room"}]}',
    ),
    array( // row #1 233
        'word' => 'thermal', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"termiczny"},{"tr":"24","wo":"cieplny"},{"tr":"16","wo":"termalny"},{"tr":"8","wo":"cieplicowy"}],"examples":[{"what":"noun","row":"an upward current of warm air, used by gliders, balloons, and birds to gain height.","example":"By using thermals , gliders can stay aloft for hours without using power."}]}',
    ),
    array( // row #1 234
        'word' => 'golf', 'pl_PL' => '{"noun":[{"tr":"24","wo":"golf"}],"verb":[{"tr":"8","wo":"grać w golfa"}],"examples":[{"what":"noun","row":"a game played on a large open-air course, in which a small hard ball is struck with a club into a series of small holes in the ground, the object being to use the fewest possible strokes to complete the course.","example":"A man was playing a game of golf , and on hole 16, he hit the ball right into a field of buttercups."},{"what":"verb","row":"play golf.","example":"a week\'s golfing"}]}',
    ),
    array( // row #1 235
        'word' => 'realistic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"realistyczny"}],"examples":[{"what":"adjective","row":"having or showing a sensible and practical idea of what can be achieved or expected.","example":"jobs are scarce at the moment, so you\'ve got to be realistic"}]}',
    ),
    array( // row #1 236
        'word' => 'Lee', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"zawietrzny"},{"tr":"8","wo":"osłonięty"}],"noun":[{"tr":"16","wo":"osłona"},{"tr":"8","wo":"strona zawietrzna"}],"examples":[{"what":"noun","row":"shelter from wind or weather given by a neighboring object, especially nearby land.","example":"we pitch our tents in the lee of a rock"}]}',
    ),
    array( // row #1 237
        'word' => 'currently', 'pl_PL' => '{"adverb":[{"tr":"8","wo":"bieżąco"}],"examples":[{"what":"adverb","row":"at the present time.","example":"the price is currently at a premium"}]}',
    ),
    array( // row #1 238
        'word' => 'stiff', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"sztywny"},{"tr":"8","wo":"oschły"},{"tr":"8","wo":"twardy"},{"tr":"8","wo":"zesztywniały"},{"tr":"8","wo":"skostniały"},{"tr":"8","wo":"odrętwiały"},{"tr":"8","wo":"trudny"},{"tr":"8","wo":"bezduszny"},{"tr":"8","wo":"kategoryczny"},{"tr":"8","wo":"nieukładny"},{"tr":"8","wo":"zaciekły"}],"noun":[{"tr":"8","wo":"umrzyk"}],"examples":[{"what":"adjective","row":"not easily bent or changed in shape; rigid.","example":"a stiff black collar"},{"what":"noun","row":"a dead body.","example":"When the bodies of various stiffs start disappearing from the local morgue, the police are baffled as to where they\'ve gone."},{"what":"verb","row":"cheat (someone) out of something, especially money.","example":"several workers were stiffed out of their pay"}]}',
    ),
    array( // row #1 239
        'word' => 'badly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"źle"},{"tr":"24","wo":"bardzo"},{"tr":"16","wo":"poważnie"},{"tr":"16","wo":"ciężko"},{"tr":"8","wo":"niedobrze"},{"tr":"8","wo":"kiepsko"},{"tr":"8","wo":"paskudnie"},{"tr":"8","wo":"licho"},{"tr":"8","wo":"krucho"},{"tr":"8","wo":"marnie"},{"tr":"8","wo":"dotkliwie"},{"tr":"8","wo":"fałszywie"}],"examples":[{"what":"adverb","row":"in an unsatisfactory, inadequate, or unsuccessful way.","example":"a badly managed company"},{"what":"adjective","row":"guilty or regretful.","example":"I felt badly about my unfriendliness of the previous evening"}]}',
    ),
    array( // row #1 240
        'word' => 'repair', 'pl_PL' => '{"noun":[{"tr":"24","wo":"naprawa"},{"tr":"16","wo":"naprawienie"},{"tr":"8","wo":"stan"},{"tr":"8","wo":"reperacja"}],"verb":[{"tr":"24","wo":"naprawiać"},{"tr":"8","wo":"uciec się"},{"tr":"8","wo":"pójść"},{"tr":"8","wo":"załatać"},{"tr":"8","wo":"reperować"},{"tr":"8","wo":"podreperować"},{"tr":"8","wo":"powetować"}],"examples":[{"what":"noun","row":"the action of fixing or mending something.","example":"the truck was beyond repair"},{"what":"verb","row":"fix or mend (a thing suffering from damage or a fault).","example":"faulty electrical appliances should be repaired by an electrician"}]}',
    ),
    array( // row #1 241
        'word' => 'reporters', 'pl_PL' => '{"noun":[{"tr":"24","wo":"reporter"},{"tr":"16","wo":"dziennikarz"},{"tr":"16","wo":"sprawozdawca"},{"tr":"16","wo":"dziennikarka"},{"tr":"8","wo":"referent"},{"tr":"8","wo":"sekretarz na zebraniu"},{"tr":"8","wo":"koreferent"}],"examples":[{"what":"noun","row":"a person who reports, especially one employed to report news or conduct interviews for newspapers or broadcasts.","example":"Two days later the news is official and reporters from the American press speed to Paris to interview a band that few of them have heard of."}]}',
    ),
    array( // row #1 242
        'word' => 'precise', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"precyzyjny"},{"tr":"16","wo":"dokładny"},{"tr":"8","wo":"ścisły"},{"tr":"8","wo":"określony"},{"tr":"8","wo":"skrupulatny"},{"tr":"8","wo":"punktualny"},{"tr":"8","wo":"akuratny"},{"tr":"8","wo":"staranny"}],"examples":[{"what":"adjective","row":"marked by exactness and accuracy of expression or detail.","example":"precise directions"}]}',
    ),
    array( // row #1 243
        'word' => 'ownership', 'pl_PL' => '{"noun":[{"tr":"24","wo":"własność"},{"tr":"16","wo":"prawo własności"},{"tr":"16","wo":"posiadanie"}],"examples":[{"what":"noun","row":"the act, state, or right of possessing something.","example":"the ownership of land"}]}',
    ),
    array( // row #1 244
        'word' => 'bigger', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"duży"},{"tr":"24","wo":"wielki"},{"tr":"16","wo":"cielna"},{"tr":"8","wo":"ważny"},{"tr":"8","wo":"znaczny"},{"tr":"8","wo":"gruby"},{"tr":"8","wo":"brzemienna"},{"tr":"8","wo":"kotna"},{"tr":"8","wo":"źrebna"},{"tr":"8","wo":"szczenna"}],"examples":[{"what":"adjective","row":"of considerable size, extent, or intensity.","example":"big hazel eyes"}]}',
    ),
    array( // row #1 245
        'word' => 'financing', 'pl_PL' => '{"verb":[{"tr":"24","wo":"finansować"},{"tr":"24","wo":"sfinansować"}],"examples":[{"what":"verb","row":"provide funding for (a person or enterprise).","example":"the city and county originally financed the project"}]}',
    ),
    array( // row #1 246
        'word' => 'exposed', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"narażony"},{"tr":"16","wo":"naświetlony"},{"tr":"16","wo":"wystawiony"},{"tr":"8","wo":"zdemaskowany"},{"tr":"8","wo":"ujawniony"},{"tr":"8","wo":"porzucony"},{"tr":"8","wo":"dekonspirowany"}],"examples":[{"what":"verb","row":"make (something) visible, typically by uncovering it.","example":"at low tide the sands are exposed"}]}',
    ),
    array( // row #1 247
        'word' => 'raising', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wychowywanie"}],"examples":[{"what":"verb","row":"lift or move to a higher position or level.","example":"she raised both arms above her head"}]}',
    ),
    array( // row #1 248
        'word' => 'Canada', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Kanada"}],"examples":[{"what":"noun","row":"a country in northern North America, the second largest country in the world; population 33,487,200 (est. 2009); capital, Ottawa; official languages, English and French.","example":null}]}',
    ),
    array( // row #1 249
        'word' => 'facing', 'pl_PL' => '{"noun":[{"tr":"16","wo":"okładzina"},{"tr":"8","wo":"wykładzina"},{"tr":"8","wo":"oblicówka"},{"tr":"8","wo":"wykładanie"},{"tr":"8","wo":"wyłogi"}],"adjective":[{"tr":"8","wo":"wykładzinowy"},{"tr":"8","wo":"okładzinowy"}],"examples":[{"what":"noun","row":"a layer of material covering part of a garment and providing contrast, decoration, or strength.","example":"Make the same adjustment on the underarm facing for a sleeveless garment."},{"what":"adjective","row":"positioned with the front toward a certain direction; opposite.","example":"a book with Italian and English lyrics printed on facing pages"}]}',
    ),
    array( // row #1 250
        'word' => 'Presidential', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"prezydencki"},{"tr":"8","wo":"prezydialny"},{"tr":"8","wo":"prezesowski"}],"examples":[{"what":"adjective","row":"of a more advanced age.","example":"he is 20 years senior to Leonard"},{"what":"noun","row":"a person who is a specified number of years older than someone else.","example":"she was only two years his senior"}]}',
    ),
    array( // row #1 251
        'word' => 'tied', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"związany"},{"tr":"8","wo":"uwiązany"},{"tr":"8","wo":"zawiązany"}],"examples":[{"what":"adjective","row":"of a more advanced age.","example":"he is 20 years senior to Leonard"},{"what":"noun","row":"a person who is a specified number of years older than someone else.","example":"she was only two years his senior"}]}',
    ),
    array( // row #1 252
        'word' => 'receiving', 'pl_PL' => '{"verb":[{"tr":"24","wo":"otrzymać"},{"tr":"16","wo":"odbierać"},{"tr":"16","wo":"uzyskać"},{"tr":"16","wo":"przyjąć"},{"tr":"8","wo":"dostać"},{"tr":"8","wo":"pobierać"},{"tr":"8","wo":"doznać"},{"tr":"8","wo":"zmieścić"},{"tr":"8","wo":"przyjąć gości"},{"tr":"8","wo":"dźwigać ciężar konstrukcji"},{"tr":"8","wo":"pomieścić w sobie"},{"tr":"8","wo":"przyjąć na siebie"},{"tr":"8","wo":"przystąpić do komunii świętej"},{"tr":"8","wo":"dopuszczać"},{"tr":"8","wo":"doświadczać"}],"examples":[{"what":"verb","row":"be given, presented with, or paid (something).","example":"most businesses will receive a tax cut"}]}',
    ),
    array( // row #1 253
        'word' => 'senior', 'pl_PL' => '{"noun":[{"tr":"24","wo":"senior"},{"tr":"8","wo":"nestor"},{"tr":"8","wo":"dziekan"}],"adjective":[{"tr":"24","wo":"starszy"}],"examples":[{"what":"adjective","row":"of a more advanced age.","example":"he is 20 years senior to Leonard"},{"what":"noun","row":"a person who is a specified number of years older than someone else.","example":"she was only two years his senior"}]}',
    ),
    array( // row #1 254
        'word' => 'shortly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"wkrótce"},{"tr":"16","wo":"niedługo"},{"tr":"16","wo":"zaraz"},{"tr":"8","wo":"niebawem"},{"tr":"8","wo":"wnet"}],"examples":[{"what":"adverb","row":"in a short time; soon.","example":"the new database will shortly be available for consultation"}]}',
    ),
    array( // row #1 255
        'word' => 'interview', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wywiad"},{"tr":"16","wo":"rozmowa kwalifikacyjna"},{"tr":"8","wo":"interwiew"},{"tr":"8","wo":"widzenie się"}],"verb":[{"tr":"8","wo":"przeprowadzać wywiad"}],"examples":[{"what":"noun","row":"a meeting of people face to face, especially for consultation.","example":"I tried having meetings, disciplinary interviews and discussing issues, but they still do nothing."},{"what":"verb","row":"hold an interview with (someone).","example":"he arrived to be interviewed by a local TV station about the level of unemployment"}]}',
    ),
    array( // row #1 256
        'word' => 'candidate', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kandydat"},{"tr":"8","wo":"amator"}],"examples":[{"what":"noun","row":"a person who applies for a job or is nominated for election.","example":"candidates applying for this position should be computer-literate"}]}',
    ),
    array( // row #1 257
        'word' => 'loyalty', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lojalność"},{"tr":"16","wo":"wierność"},{"tr":"8","wo":"oddanie"},{"tr":"8","wo":"prawomyślność"}],"examples":[{"what":"noun","row":"the quality of being loyal to someone or something.","example":"her loyalty to her husband of 34 years"}]}',
    ),
    array( // row #1 258
        'word' => 'aunt', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ciotka"},{"tr":"8","wo":"stryjenka"},{"tr":"8","wo":"wujenka"}],"examples":[{"what":"noun","row":"the sister of one\'s father or mother or the wife of one\'s uncle.","example":"Our girls need their mothers and fathers, their aunts and uncles, but they need their big sisters too."}]}',
    ),
    array( // row #1 259
        'word' => 'glory', 'pl_PL' => '{"noun":[{"tr":"24","wo":"chwała"},{"tr":"24","wo":"sława"},{"tr":"8","wo":"chluba"},{"tr":"8","wo":"zaszczyt"},{"tr":"8","wo":"wspaniałość"},{"tr":"8","wo":"nimb"},{"tr":"8","wo":"blask"},{"tr":"8","wo":"aureola"}],"verb":[{"tr":"8","wo":"chwalić się czymś"},{"tr":"8","wo":"chlubić się"},{"tr":"8","wo":"chełpić się"}],"examples":[{"what":"noun","row":"high renown or honor won by notable achievements.","example":"to fight and die for the glory of one\'s nation"},{"what":"verb","row":"take great pride or pleasure in.","example":"they were individuals who gloried in their independence"}]}',
    ),
    array( // row #1 260
        'word' => 'neat', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"schludny"},{"tr":"24","wo":"czysty"},{"tr":"16","wo":"zgrabny"},{"tr":"8","wo":"gustowny"},{"tr":"8","wo":"przyjemny"},{"tr":"8","wo":"staranny"},{"tr":"8","wo":"udatny"},{"tr":"8","wo":"wykwintny"},{"tr":"8","wo":"dosadny"},{"tr":"8","wo":"składny"},{"tr":"8","wo":"kształtny"},{"tr":"8","wo":"porządny"}],"noun":[{"tr":"8","wo":"bydło"}],"examples":[{"what":"adjective","row":"(of a place or thing) arranged in an orderly, tidy way.","example":"the books had been stacked up in neat piles"},{"what":"noun","row":"a bovine animal.","example":"I had a pretty dinner for them, viz. a brace of stewed carp, six roast chickens and a jowl of hot salmon for the first course; a tanzy and two neats \' tongues and cheese second."}]}',
    ),
    array( // row #1 261
        'word' => 'calculated', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"obliczony"},{"tr":"8","wo":"wyrachowany"},{"tr":"8","wo":"rozmyślny"}],"examples":[{"what":"adjective","row":"(of an action) done with full awareness of the likely consequences.","example":"a calculated decision"}]}',
    ),
    array( // row #1 262
        'word' => 'disappeared', 'pl_PL' => '{"verb":[{"tr":"16","wo":"znikać"},{"tr":"16","wo":"zanikać"},{"tr":"8","wo":"ustąpić"},{"tr":"8","wo":"zginąć"},{"tr":"8","wo":"zaginąć"},{"tr":"8","wo":"ginąć"},{"tr":"8","wo":"przepadać"},{"tr":"8","wo":"ulatniać się"},{"tr":"8","wo":"sczeznąć"},{"tr":"8","wo":"podziać"},{"tr":"8","wo":"poginąć"},{"tr":"8","wo":"zawieruszyć się"}],"examples":[{"what":"verb","row":"cease to be visible.","example":"he disappeared into the trees"}]}',
    ),
    array( // row #1 263
        'word' => 'symbolic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"symboliczny"}],"examples":[{"what":"adjective","row":"serving as a symbol.","example":"a repeating design symbolic of eternity"}]}',
    ),
    array( // row #1 264
        'word' => 'empire', 'pl_PL' => '{"noun":[{"tr":"24","wo":"imperium"},{"tr":"16","wo":"cesarstwo"}],"adjective":[{"tr":"8","wo":"imperialny"},{"tr":"8","wo":"empirowy"}],"examples":[{"what":"noun","row":"an extensive group of states or countries under a single supreme authority, formerly especially an emperor or empress.","example":"the Roman Empire"},{"what":"adjective","row":"denoting a style of furniture, decoration, or dress fashionable during the First or (less commonly) the Second Empire in France. The decorative style was neoclassical but marked by an interest in Egyptian and other ancient motifs probably inspired by Napoleon\'s Egyptian campaigns.","example":"It glories in its Louis XIV and Empire style, all marble, gilt and elaborate stucco."}]}',
    ),
    array( // row #1 265
        'word' => 'phenomenon', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zjawisko"},{"tr":"24","wo":"fenomen"}],"examples":[{"what":"noun","row":"a fact or situation that is observed to exist or happen, especially one whose cause or explanation is in question.","example":"glaciers are unique and interesting natural phenomena"}]}',
    ),
    array( // row #1 266
        'word' => 'instructions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"instrukcje"},{"tr":"8","wo":"kształcenie"},{"tr":"8","wo":"dyspozycje"},{"tr":"8","wo":"wskazania"}],"examples":[{"what":"adjective","row":"of, from, or like God or a god.","example":"heroes with divine powers"},{"what":"noun","row":"a cleric or theologian.","example":"There are also many references to contemporary natural sciences and a healthy smattering of Anglican divines , including Hooker, Andrewes, and Herbert."},{"what":"verb","row":"discover (something) by guesswork or intuition.","example":"his brother usually divined his ulterior motives"}]}',
    ),
    array( // row #1 267
        'word' => 'divine', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"boski"},{"tr":"8","wo":"boży"},{"tr":"8","wo":"niebiański"},{"tr":"8","wo":"niebieski"}],"verb":[{"tr":"8","wo":"przepowiadać"}],"noun":[{"tr":"8","wo":"duchowny"}],"examples":[{"what":"adjective","row":"of, from, or like God or a god.","example":"heroes with divine powers"},{"what":"noun","row":"a cleric or theologian.","example":"There are also many references to contemporary natural sciences and a healthy smattering of Anglican divines , including Hooker, Andrewes, and Herbert."},{"what":"verb","row":"discover (something) by guesswork or intuition.","example":"his brother usually divined his ulterior motives"}]}',
    ),
    array( // row #1 268
        'word' => 'producing', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wytwarzać"},{"tr":"24","wo":"produkować"},{"tr":"16","wo":"tworzyć"},{"tr":"16","wo":"przynieść"},{"tr":"8","wo":"okazać"},{"tr":"8","wo":"płodzić"},{"tr":"8","wo":"fabrykować"},{"tr":"8","wo":"naprodukować"},{"tr":"8","wo":"wystawiać na scenie"},{"tr":"8","wo":"inscenizować"},{"tr":"8","wo":"pokazać"},{"tr":"8","wo":"dać"}],"examples":[{"what":"verb","row":"make or manufacture from components or raw materials.","example":"the company has just produced a luxury version of the aircraft"}]}',
    ),
    array( // row #1 269
        'word' => 'washed', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"umyty"},{"tr":"8","wo":"wyprany"},{"tr":"8","wo":"uprany"},{"tr":"8","wo":"sprany"},{"tr":"8","wo":"skonany"}],"examples":[{"what":"adjective","row":"producing or capable of producing much noise; easily audible.","example":"they were kept awake by loud music"},{"what":"adverb","row":"with a great deal of volume.","example":"they shouted as loud as they could"}]}',
    ),
    array( // row #1 270
        'word' => 'loud', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"głośny"},{"tr":"16","wo":"donośny"},{"tr":"8","wo":"gromki"},{"tr":"8","wo":"hałaśliwy"},{"tr":"8","wo":"krzykliwy"},{"tr":"8","wo":"gwarny"},{"tr":"8","wo":"krzyczący"}],"adverb":[{"tr":"24","wo":"głośno"},{"tr":"8","wo":"hałaśliwie"},{"tr":"8","wo":"gwarno"}],"examples":[{"what":"adjective","row":"producing or capable of producing much noise; easily audible.","example":"they were kept awake by loud music"},{"what":"adverb","row":"with a great deal of volume.","example":"they shouted as loud as they could"}]}',
    ),
    array( // row #1 271
        'word' => 'isolated', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"odosobniony"},{"tr":"16","wo":"odizolowany"},{"tr":"8","wo":"sporadyczny"},{"tr":"8","wo":"bezludny"}],"examples":[{"what":"adjective","row":"far away from other places, buildings, or people; remote.","example":"isolated farms and villages"}]}',
    ),
    array( // row #1 272
        'word' => 'dignity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"godność"},{"tr":"8","wo":"dostojeństwo"},{"tr":"8","wo":"dostojność"},{"tr":"8","wo":"powaga"},{"tr":"8","wo":"dygnitarstwo"},{"tr":"8","wo":"ambicja"},{"tr":"8","wo":"honor"}],"examples":[{"what":"noun","row":"the state or quality of being worthy of honor or respect.","example":"a man of dignity and unbending principle"}]}',
    ),
    array( // row #1 273
        'word' => 'beam', 'pl_PL' => '{"noun":[{"tr":"24","wo":"belka"},{"tr":"16","wo":"promień"},{"tr":"8","wo":"balans"},{"tr":"8","wo":"balansjer"},{"tr":"8","wo":"bela"},{"tr":"8","wo":"ramię wagi"},{"tr":"8","wo":"dyszel"},{"tr":"8","wo":"pokładnik"},{"tr":"8","wo":"wiązka światła"},{"tr":"8","wo":"rygiel"},{"tr":"8","wo":"nawój"}],"verb":[{"tr":"8","wo":"nadać"}],"examples":[{"what":"noun","row":"a ray or shaft of light.","example":"a beam of light flashed in front of her"},{"what":"verb","row":"transmit (a radio signal or broadcast) in a specified direction.","example":"beaming a distress signal into space"}]}',
    ),
    array( // row #1 274
        'word' => 'adjustment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"regulacja"},{"tr":"24","wo":"dostosowanie"},{"tr":"8","wo":"rozstrzygnięcie"},{"tr":"8","wo":"przystosowanie"},{"tr":"8","wo":"akomodacja"},{"tr":"8","wo":"naregulowanie"},{"tr":"8","wo":"nastawienie"},{"tr":"8","wo":"zmontowanie"},{"tr":"8","wo":"naprostowanie"},{"tr":"8","wo":"poprawka"},{"tr":"8","wo":"uregulowanie"},{"tr":"8","wo":"adiustacja"},{"tr":"8","wo":"rektyfikacja"},{"tr":"8","wo":"rektyfikowanie"}],"examples":[{"what":"noun","row":"a small alteration or movement made to achieve a desired fit, appearance, or result.","example":"I\'ve made a few adjustments to my diet"}]}',
    ),
    array( // row #1 275
        'word' => 'output', 'pl_PL' => '{"noun":[{"tr":"16","wo":"wydajność"},{"tr":"16","wo":"produkcja"},{"tr":"8","wo":"wytwórczość"},{"tr":"8","wo":"urobek"},{"tr":"8","wo":"twórczość"},{"tr":"8","wo":"wydobycie"},{"tr":"8","wo":"przepustowość"},{"tr":"8","wo":"fedrunek"}],"examples":[{"what":"noun","row":"the amount of something produced by a person, machine, or industry.","example":"the diverse range of Liszt\'s output"},{"what":"verb","row":"produce, deliver, or supply (data) using a computer or other device.","example":"you can output the image directly to a video recording system"}]}',
    ),
    array( // row #1 276
        'word' => 'routine', 'pl_PL' => '{"noun":[{"tr":"16","wo":"rutyna"},{"tr":"8","wo":"algorytm"}],"adjective":[{"tr":"16","wo":"rutynowy"}],"examples":[{"what":"adjective","row":"performed as part of a regular procedure rather than for a special reason.","example":"the principal insisted that this was just a routine annual drill"},{"what":"noun","row":"a sequence of actions regularly followed; a fixed program.","example":"I settled down into a routine of work and sleep"},{"what":"verb","row":"organize according to a routine.","example":"all had been routined with smoothness"}]}',
    ),
    array( // row #1 277
        'word' => 'Presently', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"obecnie"},{"tr":"8","wo":"niebawem"},{"tr":"8","wo":"wkrótce"},{"tr":"8","wo":"zaraz"},{"tr":"8","wo":"wnet"}],"examples":[{"what":"adverb","row":"after a short time; soon.","example":"this will be examined in more detail presently"}]}',
    ),
    array( // row #1 278
        'word' => 'emotion', 'pl_PL' => '{"noun":[{"tr":"24","wo":"emocja"},{"tr":"16","wo":"uczucie"},{"tr":"16","wo":"wzruszenie"},{"tr":"8","wo":"afekt"},{"tr":"8","wo":"przejęcie"}],"examples":[{"what":"noun","row":"a natural instinctive state of mind deriving from one\'s circumstances, mood, or relationships with others.","example":"she was attempting to control her emotions"}]}',
    ),
    array( // row #1 279
        'word' => 'vary', 'pl_PL' => '{"verb":[{"tr":"16","wo":"różnić się"},{"tr":"16","wo":"zmieniać się"},{"tr":"8","wo":"urozmaicać"}],"examples":[{"what":"verb","row":"differ in size, amount, degree, or nature from something else of the same general class.","example":"the properties vary in price"}]}',
    ),
    array( // row #1 280
        'word' => 'Sciences', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nauka"},{"tr":"16","wo":"wiedza"},{"tr":"8","wo":"umiejętność"}],"examples":[{"what":"noun","row":"the intellectual and practical activity encompassing the systematic study of the structure and behavior of the physical and natural world through observation and experiment.","example":"the world of science and technology"}]}',
    ),
    array( // row #1 281
        'word' => 'eggs', 'pl_PL' => '{"noun":[{"tr":"24","wo":"jajko"},{"tr":"24","wo":"jajo"}],"examples":[{"what":"noun","row":"an oval or round object laid by a female bird, reptile, fish, or invertebrate, usually containing a developing embryo. The eggs of birds are enclosed in a chalky shell, while those of reptiles are in a leathery membrane.","example":"When most birds incubate eggs , the females often produce high levels of prolactin, a hormone involved in parental behavior."},{"what":"verb","row":"urge or encourage someone to do something, especially something foolish or risky.","example":"The man looked sick, but people around him were egging him on , encouraging him."}]}',
    ),
    array( // row #1 282
        'word' => 'certainty', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pewność"},{"tr":"16","wo":"pewnik"},{"tr":"8","wo":"pewniak"}],"examples":[{"what":"noun","row":"firm conviction that something is the case.","example":"she knew with absolute certainty that they were dead"}]}',
    ),
    array( // row #1 283
        'word' => 'grade', 'pl_PL' => '{"noun":[{"tr":"24","wo":"stopień"},{"tr":"16","wo":"gatunek"},{"tr":"8","wo":"nachylenie"},{"tr":"8","wo":"szczebel"},{"tr":"8","wo":"ranga"},{"tr":"8","wo":"klasa szkoły podstawowej"},{"tr":"8","wo":"krzyżowanie ras"},{"tr":"8","wo":"nota szkolna"}],"verb":[{"tr":"8","wo":"stopniować"},{"tr":"8","wo":"klasyfikować"},{"tr":"8","wo":"sortować"},{"tr":"8","wo":"krzyżować"},{"tr":"8","wo":"profilować drogę"},{"tr":"8","wo":"cieniować"}],"examples":[{"what":"noun","row":"a particular level of rank, quality, proficiency, intensity, or value.","example":"sea salt is usually available in coarse or fine grades"},{"what":"verb","row":"arrange in or allocate to grades; class or sort.","example":"they are graded according to thickness"}]}',
    ),
    array( // row #1 284
        'word' => 'penny', 'pl_PL' => '{"noun":[{"tr":"24","wo":"grosz"},{"tr":"24","wo":"pens"},{"tr":"8","wo":"szeląg"}],"examples":[{"what":"noun","row":"a one-cent coin equal to one hundredth of a dollar.","example":"To make things easier, the penny will also go up in value one cent each year until it is worth five cents."}]}',
    ),
    array( // row #1 285
        'word' => 'imitation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"imitacja"},{"tr":"24","wo":"naśladownictwo"},{"tr":"24","wo":"naśladowanie"},{"tr":"8","wo":"udawanie"},{"tr":"8","wo":"podróbka"},{"tr":"8","wo":"podrobienie"}],"examples":[{"what":"noun","row":"a thing intended to simulate or copy something else.","example":"an imitation diamond"}]}',
    ),
    array( // row #1 286
        'word' => 'bombs', 'pl_PL' => '{"noun":[{"tr":"24","wo":"bomba"}],"verb":[{"tr":"24","wo":"zbombardować"},{"tr":"24","wo":"bombardować"}],"examples":[{"what":"noun","row":"a container filled with explosive, incendiary material, smoke, gas, or other destructive substance, designed to explode on impact or when detonated by a time mechanism, remote-control device, or lit fuse.","example":"The second night attack, which used high explosive and incendiary bombs alternately, caused the first man-made firestorm which affected an area of 22sq.km."},{"what":"verb","row":"attack (a place or vehicle) with a bomb or bombs.","example":"London was bombed, night after night"}]}',
    ),
    array( // row #1 287
        'word' => 'jumped', 'pl_PL' => '{"verb":[{"tr":"24","wo":"skakać"},{"tr":"24","wo":"przeskoczyć"},{"tr":"8","wo":"podskoczyć"},{"tr":"8","wo":"wskakiwać"},{"tr":"8","wo":"rzucać"},{"tr":"8","wo":"przesadzić"},{"tr":"8","wo":"forsować"},{"tr":"8","wo":"fikać"},{"tr":"8","wo":"hycać"},{"tr":"8","wo":"kicać"},{"tr":"8","wo":"podsmażać"},{"tr":"8","wo":"drygać"}],"examples":[{"what":"verb","row":"push oneself off a surface and into the air by using the muscles in one\'s legs and feet.","example":"the cat jumped off his lap"}]}',
    ),
    array( // row #1 288
        'word' => 'solve', 'pl_PL' => '{"verb":[{"tr":"24","wo":"rozwiązać"},{"tr":"8","wo":"odgadnąć"},{"tr":"8","wo":"zgadnąć"}],"examples":[{"what":"verb","row":"find an answer to, explanation for, or means of effectively dealing with (a problem or mystery).","example":"the policy could solve the town\'s housing crisis"}]}',
    ),
    array( // row #1 289
        'word' => 'claimed', 'pl_PL' => '{"verb":[{"tr":"16","wo":"żądać"},{"tr":"16","wo":"dochodzić"},{"tr":"16","wo":"twierdzić"},{"tr":"16","wo":"domagać się"},{"tr":"8","wo":"pretendować"},{"tr":"8","wo":"rewindykować"},{"tr":"8","wo":"doprosić"},{"tr":"8","wo":"dopominać"},{"tr":"8","wo":"piszczeć"},{"tr":"8","wo":"rościć prawo"},{"tr":"8","wo":"zasłużyć"},{"tr":"8","wo":"wymagać"}],"examples":[{"what":"verb","row":"state or assert that something is the case, typically without providing evidence or proof.","example":"he claimed that he came from a wealthy, educated family"}]}',
    ),
    array( // row #1 290
        'word' => 'performed', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wykonać"},{"tr":"16","wo":"dokonać"},{"tr":"16","wo":"działać"},{"tr":"8","wo":"sprawować"},{"tr":"8","wo":"odtwarzać"},{"tr":"8","wo":"wystąpić na scenie"},{"tr":"8","wo":"dokonać czegoś"},{"tr":"8","wo":"dopełniać"},{"tr":"8","wo":"odegrać rolę"},{"tr":"8","wo":"odprawiać nabożeństwo"},{"tr":"8","wo":"dać"},{"tr":"8","wo":"uciąć"},{"tr":"8","wo":"zrobić"},{"tr":"8","wo":"odrobić"}],"examples":[{"what":"verb","row":"carry out, accomplish, or fulfill (an action, task, or function).","example":"I have my duties to perform"}]}',
    ),
    array( // row #1 291
        'word' => 'Virgin', 'pl_PL' => '{"noun":[{"tr":"16","wo":"Panna"}],"examples":[{"what":"adjective","row":"being, relating to, or appropriate for a virgin.","example":"his virgin bride"},{"what":"noun","row":"a person who has never had sexual intercourse.","example":"A myth in South Africa holds that sexual intercourse with a virgin can heal a man from HIV infection."}]}',
    ),
    array( // row #1 292
        'word' => 'genuine', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"prawdziwy"},{"tr":"16","wo":"oryginalny"},{"tr":"16","wo":"autentyczny"},{"tr":"8","wo":"niefałszywy"},{"tr":"8","wo":"realny"},{"tr":"8","wo":"szczery"},{"tr":"8","wo":"niekłamany"},{"tr":"8","wo":"niesztuczny"},{"tr":"8","wo":"rasowy"},{"tr":"8","wo":"rodzimy"},{"tr":"8","wo":"efektywny"},{"tr":"8","wo":"bezpretensjonalny"}],"examples":[{"what":"adjective","row":"truly what something is said to be; authentic.","example":"each book is bound in genuine leather"}]}',
    ),
    array( // row #1 293
        'word' => 'returning', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"powracający"},{"tr":"8","wo":"wyborczy"}],"examples":[{"what":"adjective","row":"fitting in well with a person\'s needs, activities, and plans.","example":"I phoned your office to confirm that this date is convenient"}]}',
    ),
    array( // row #1 294
        'word' => 'convenient', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wygodny"},{"tr":"16","wo":"dogodny"},{"tr":"8","wo":"niekłopotliwy"},{"tr":"8","wo":"sposobny"},{"tr":"8","wo":"poręczny"},{"tr":"8","wo":"bliski"}],"examples":[{"what":"adjective","row":"fitting in well with a person\'s needs, activities, and plans.","example":"I phoned your office to confirm that this date is convenient"}]}',
    ),
    array( // row #1 295
        'word' => 'dispute', 'pl_PL' => '{"verb":[{"tr":"24","wo":"kwestionować"},{"tr":"8","wo":"dyskutować"},{"tr":"8","wo":"spierać się"},{"tr":"8","wo":"dysputować"},{"tr":"8","wo":"handryczyć się"},{"tr":"8","wo":"rozprawiać"}],"noun":[{"tr":"24","wo":"spór"},{"tr":"8","wo":"scysja"},{"tr":"8","wo":"zatarg"},{"tr":"8","wo":"zwada"}],"examples":[{"what":"noun","row":"a disagreement, argument, or debate.","example":"a territorial dispute between the two countries"},{"what":"verb","row":"argue about (something); discuss heatedly.","example":"I disputed the charge on the bill"}]}',
    ),
    array( // row #1 296
        'word' => 'lumber', 'pl_PL' => '{"noun":[{"tr":"24","wo":"graty"},{"tr":"16","wo":"rupiecie"},{"tr":"16","wo":"budulec"},{"tr":"8","wo":"nadmierny tłuszcz"},{"tr":"8","wo":"tusza"}],"verb":[{"tr":"8","wo":"wyciąć"},{"tr":"8","wo":"poruszać się ociężale"}],"examples":[{"what":"noun","row":"timber sawn into rough planks or otherwise partly prepared.","example":"A total of six ships have put in here asking for both furs and lumber in the past two months."},{"what":"verb","row":"move in a slow, heavy, awkward way.","example":"a truck filled his mirror and lumbered past"}]}',
    ),
    array( // row #1 297
        'word' => 'retired', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"emerytowany"},{"tr":"8","wo":"odosobniony"},{"tr":"8","wo":"samotniczy"},{"tr":"8","wo":"ustronny"},{"tr":"8","wo":"spensjonowany"}],"examples":[{"what":"adjective","row":"having left one\'s job and ceased to work.","example":"a retired teacher"}]}',
    ),
    array( // row #1 298
        'word' => 'alternative', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"alternatywny"},{"tr":"8","wo":"zmienny"},{"tr":"8","wo":"inny"}],"noun":[{"tr":"24","wo":"alternatywa"},{"tr":"8","wo":"wybór"}],"examples":[{"what":"adjective","row":"(of one or more things) available as another possibility.","example":"the various alternative methods for resolving disputes"},{"what":"noun","row":"one of two or more available possibilities.","example":"audiocassettes are an interesting alternative to reading"}]}',
    ),
    array( // row #1 299
        'word' => 'wealth', 'pl_PL' => '{"noun":[{"tr":"24","wo":"bogactwo"},{"tr":"16","wo":"zasobność"},{"tr":"16","wo":"majątek"},{"tr":"8","wo":"majętność"},{"tr":"8","wo":"dostatek"},{"tr":"8","wo":"obfitość"},{"tr":"8","wo":"zamożność"},{"tr":"8","wo":"fortuna"}],"examples":[{"what":"noun","row":"an abundance of valuable possessions or money.","example":"he used his wealth to bribe officials"}]}',
    ),
    array( // row #1 300
        'word' => 'stores', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sklep"},{"tr":"16","wo":"zapas"},{"tr":"16","wo":"przechowalnia"},{"tr":"8","wo":"skład"},{"tr":"8","wo":"zasób"},{"tr":"8","wo":"składnica"},{"tr":"8","wo":"rezerwa"},{"tr":"8","wo":"interes"}],"verb":[{"tr":"24","wo":"przechować"},{"tr":"8","wo":"zaopatrywać"},{"tr":"8","wo":"składować"},{"tr":"8","wo":"magazynować"},{"tr":"8","wo":"zmagazynować"},{"tr":"8","wo":"gromadzić"},{"tr":"8","wo":"składać"},{"tr":"8","wo":"mieścić"}],"examples":[{"what":"noun","row":"a retail establishment selling items to the public.","example":"a health-food store"},{"what":"verb","row":"keep or accumulate (something) for future use.","example":"a small room used for storing furniture"}]}',
    ),
    array( // row #1 301
        'word' => 'sheep', 'pl_PL' => '{"noun":[{"tr":"24","wo":"owca"},{"tr":"16","wo":"owieczka"},{"tr":"8","wo":"baranek"},{"tr":"8","wo":"baran"}],"examples":[{"what":"noun","row":"a domesticated ruminant animal with a thick woolly coat and (typically only in the male) curving horns. It is kept in flocks for its wool or meat, and is proverbial for its tendency to follow others in the flock.","example":"Chickens and turkeys were kept both for their eggs and meat just as sheep provided wool and meat."}]}',
    ),
    array( // row #1 302
        'word' => 'vehicle', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pojazd"},{"tr":"8","wo":"środek lokomocji"},{"tr":"8","wo":"wehikuł"},{"tr":"8","wo":"środek"},{"tr":"8","wo":"narzędzie"},{"tr":"8","wo":"organ propagandy"},{"tr":"8","wo":"zaprząg"},{"tr":"8","wo":"przewodnik"},{"tr":"8","wo":"nosiciel"}],"examples":[{"what":"noun","row":"a thing used for transporting people or goods, especially on land, such as a car, truck, or cart.","example":"One part of the terminal is onshore, and land transport vehicles will be unloaded there."}]}',
    ),
    array( // row #1 303
        'word' => 'sequence', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sekwencja"},{"tr":"16","wo":"kolejność"},{"tr":"8","wo":"następstwo"},{"tr":"8","wo":"porządek rzeczy"},{"tr":"8","wo":"bieg wydarzeń"},{"tr":"8","wo":"sekwens"}],"examples":[{"what":"noun","row":"a particular order in which related events, movements, or things follow each other.","example":"the content of the program should follow a logical sequence"},{"what":"verb","row":"arrange in a particular order.","example":"trainee librarians decide how a set of misfiled cards could be sequenced"}]}',
    ),
    array( // row #1 304
        'word' => 'myth', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mit"},{"tr":"8","wo":"baśń"},{"tr":"8","wo":"postać mityczna"},{"tr":"8","wo":"mistyfikacja"}],"examples":[{"what":"noun","row":"a traditional story, especially one concerning the early history of a people or explaining some natural or social phenomenon, and typically involving supernatural beings or events.","example":"Another similar myth is the story of Cybele and Attis."}]}',
    ),
    array( // row #1 305
        'word' => 'nationalism', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nacjonalizm"}],"examples":[{"what":"noun","row":"patriotic feeling, principles, or efforts.","example":"Playing with a sense of loyalty, commitment, nationalism and pride."}]}',
    ),
    array( // row #1 306
        'word' => 'context', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kontekst"}],"examples":[{"what":"noun","row":"the circumstances that form the setting for an event, statement, or idea, and in terms of which it can be fully understood and assessed.","example":"the decision was taken within the context of planned cuts in spending"}]}',
    ),
    array( // row #1 307
        'word' => 'latest', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"najnowszy"},{"tr":"8","wo":"najpóźniejszy"}],"examples":[{"what":"noun","row":"a long seat for several people, typically made of wood or stone.","example":"Mr Buttery wants to make more of the site, now barely more than a couple of park benches and an engraved stone."},{"what":"verb","row":"exhibit (a dog) at a show.","example":"Affenpinschers and Afghans were benched side by side"}]}',
    ),
    array( // row #1 308
        'word' => 'bench', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ława"},{"tr":"24","wo":"ławka"},{"tr":"8","wo":"sądownictwo"},{"tr":"8","wo":"warsztat stolarski"},{"tr":"8","wo":"stopień"}],"verb":[{"tr":"8","wo":"wystawiać psa na pokaz"}],"examples":[{"what":"noun","row":"a long seat for several people, typically made of wood or stone.","example":"Mr Buttery wants to make more of the site, now barely more than a couple of park benches and an engraved stone."},{"what":"verb","row":"exhibit (a dog) at a show.","example":"Affenpinschers and Afghans were benched side by side"}]}',
    ),
    array( // row #1 309
        'word' => 'sounded', 'pl_PL' => '{"verb":[{"tr":"24","wo":"brzmieć"},{"tr":"16","wo":"zabrzmieć"},{"tr":"8","wo":"opukać"},{"tr":"8","wo":"rozbrzmiewać"},{"tr":"8","wo":"dźwięczeć"},{"tr":"8","wo":"wysondować"},{"tr":"8","wo":"badać"},{"tr":"8","wo":"wybadać"},{"tr":"8","wo":"odezwać się"},{"tr":"8","wo":"pobrzmiewać"},{"tr":"8","wo":"macać"},{"tr":"8","wo":"rozdźwięczeć się"}],"examples":[{"what":"verb","row":"emit or cause to emit sound.","example":"a loud buzzer sounded"}]}',
    ),
    array( // row #1 310
        'word' => 'Revenue', 'pl_PL' => '{"noun":[{"tr":"16","wo":"dochód"},{"tr":"8","wo":"urzędy skarbowe"}],"examples":[{"what":"noun","row":"income, especially when of a company or organization and of a substantial nature.","example":"It would allow De Cairos to keep control of the company and at the same time would allow it to raise substantial revenues ."}]}',
    ),
    array( // row #1 311
        'word' => 'accurate', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"dokładny"},{"tr":"16","wo":"ścisły"},{"tr":"8","wo":"trafny"},{"tr":"8","wo":"celny"},{"tr":"8","wo":"wierny"},{"tr":"8","wo":"staranny"},{"tr":"8","wo":"bezbłędny"},{"tr":"8","wo":"akuratny"},{"tr":"8","wo":"porządny"}],"examples":[{"what":"adjective","row":"(of information, measurements, statistics, etc.) correct in all details; exact.","example":"accurate information about the illness is essential"}]}',
    ),
    array( // row #1 312
        'word' => 'Harry', 'pl_PL' => '{"verb":[{"tr":"16","wo":"złupić"},{"tr":"16","wo":"dręczyć"},{"tr":"8","wo":"ograbić"}],"examples":[{"what":"verb","row":"persistently carry out attacks on (an enemy or an enemy\'s territory).","example":"The king\'s adoption of Danish tactics in the winter of 878, such as his use of strongholds and small mobile raiding parties to harry the lands of his enemies, was forced upon him by immediate circumstances."}]}',
    ),
    array( // row #1 313
        'word' => 'Wednesday', 'pl_PL' => '{"noun":[{"tr":"24","wo":"środa"}],"adjective":[{"tr":"16","wo":"środowy"}],"examples":[{"what":"noun","row":"the day of the week before Thursday and following Tuesday.","example":"a report goes before the councilors on Wednesday"},{"what":"adverb","row":"on Wednesday.","example":"see you Wednesday"}]}',
    ),
    array( // row #1 314
        'word' => 'September', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wrzesień"}],"adjective":[{"tr":"16","wo":"wrześniowy"}],"examples":[{"what":"noun","row":"the ninth month of the year, in the northern hemisphere usually considered the first month of autumn.","example":"sow the plants in early September"}]}',
    ),
    array( // row #1 315
        'word' => 'dare', 'pl_PL' => '{"verb":[{"tr":"24","wo":"odważyć się"},{"tr":"8","wo":"poważyć się"},{"tr":"8","wo":"śmieć"},{"tr":"8","wo":"ośmielać się"},{"tr":"8","wo":"ważyć się"},{"tr":"8","wo":"nie bać się"},{"tr":"8","wo":"prowokować"},{"tr":"8","wo":"podpuścić"}],"examples":[{"what":"noun","row":"a challenge, especially to prove courage.","example":"athletes who eat ground glass on a dare"},{"what":"verb","row":"have the courage to do something.","example":"a story he dare not write down"}]}',
    ),
    array( // row #1 316
        'word' => 'orange', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pomarańczowy"}],"noun":[{"tr":"24","wo":"pomarańcza"}],"examples":[{"what":"adjective","row":"reddish yellow, like a ripe orange in color.","example":"an orange glow in the sky"},{"what":"noun","row":"a round juicy citrus fruit with a tough bright reddish-yellow rind.","example":"Slice each orange into 5mm rounds, trying to reserve as much juice as you can."}]}',
    ),
    array( // row #1 317
        'word' => 'counties', 'pl_PL' => '{"noun":[{"tr":"24","wo":"hrabstwo"}],"examples":[{"what":"noun","row":"(in the US) a political and administrative division of a state, providing certain local governmental services.","example":"His spending blazed a new path through the county \'s usual political circuit."}]}',
    ),
    array( // row #1 318
        'word' => 'urged', 'pl_PL' => '{"verb":[{"tr":"16","wo":"nalegać"},{"tr":"16","wo":"namawiać"},{"tr":"8","wo":"przynaglać"},{"tr":"8","wo":"przekonać"},{"tr":"8","wo":"zapędzać"},{"tr":"8","wo":"przypilić"},{"tr":"8","wo":"przeć"},{"tr":"8","wo":"ganiać"},{"tr":"8","wo":"naglić"},{"tr":"8","wo":"cisnąć"}],"examples":[{"what":"verb","row":"try earnestly or persistently to persuade (someone) to do something.","example":"he urged her to come and stay with us"}]}',
    ),
    array( // row #1 319
        'word' => 'rush', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pośpiech"},{"tr":"16","wo":"gorączka"},{"tr":"8","wo":"sitowie"},{"tr":"8","wo":"tłok"},{"tr":"8","wo":"napływ"},{"tr":"8","wo":"nagły przypływ"},{"tr":"8","wo":"gwałtowne tempo"}],"verb":[{"tr":"16","wo":"rzucać się"},{"tr":"8","wo":"pognać"},{"tr":"8","wo":"śpieszyć się"},{"tr":"8","wo":"przynaglać"},{"tr":"8","wo":"zdzierać"}],"examples":[{"what":"noun","row":"a sudden quick movement toward something, typically by a number of people.","example":"there was a rush for the door"},{"what":"verb","row":"move with urgent haste.","example":"Jason rushed after her"}]}',
    ),
    array( // row #1 320
        'word' => 'Atlanta', 'pl_PL' => '{"noun":[{"tr":"24","wo":"Atlanta"}],"examples":[{"what":"noun","row":"the capital of the state of Georgia in the US, in northwest central Georgia; population 537,958 (est. 2008). It was burned by Union forces under Gen. William T. Sherman in 1864 during the Civil War.","example":null}]}',
    ),
    array( // row #1 321
        'word' => 'tape', 'pl_PL' => '{"noun":[{"tr":"24","wo":"taśma"},{"tr":"8","wo":"tasiemka"},{"tr":"8","wo":"sznurek"},{"tr":"8","wo":"wstążka"}],"examples":[{"what":"noun","row":"a narrow strip of material, typically used to hold or fasten something.","example":"a roll of tape"},{"what":"verb","row":"record (sound or pictures) on audio or videotape.","example":"it is not known who taped the conversation"}]}',
    ),
    array( // row #1 322
        'word' => 'over-all', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"ogólny"}],"noun":[{"tr":"16","wo":"kitel"},{"tr":"8","wo":"chałat"}],"adverb":[{"tr":"8","wo":"całkowicie"}],"examples":[{"what":"adjective","row":"taking everything into account.","example":"the overall effect is impressive"},{"what":"noun","row":"a garment consisting of trousers with a front flap over the chest held up by straps over the shoulders, made of sturdy material and worn especially as casual or working clothes.","example":"My green overalls and green shirt with my red jean jacket were my choice for today."},{"what":"adverb","row":"in all parts; taken as a whole.","example":"overall, 10,000 jobs will go"}]}',
    ),
    array( // row #1 323
        'word' => 'joke', 'pl_PL' => '{"noun":[{"tr":"24","wo":"żart"},{"tr":"24","wo":"dowcip"},{"tr":"24","wo":"kawał"},{"tr":"8","wo":"figiel"},{"tr":"8","wo":"psikus"},{"tr":"8","wo":"pośmiewisko"},{"tr":"8","wo":"koncept"}],"verb":[{"tr":"24","wo":"żartować"},{"tr":"16","wo":"zażartować"},{"tr":"16","wo":"pożartować"},{"tr":"8","wo":"dowcipkować"},{"tr":"8","wo":"drwinkować"},{"tr":"8","wo":"wyśmiać"}],"examples":[{"what":"noun","row":"a thing that someone says to cause amusement or laughter, especially a story with a funny punchline.","example":"she was in a mood to tell jokes"},{"what":"verb","row":"make jokes; talk humorously or flippantly.","example":"she could laugh and joke with her colleagues"}]}',
    ),
    array( // row #1 324
        'word' => 'BINOMIAL', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"dwumianowy"}],"noun":[{"tr":"24","wo":"dwumian"}],"examples":[{"what":"noun","row":"an algebraic expression of the sum or the difference of two terms.","example":"Al-Khwarizmi\'s concept of algebra can now be grasped with greater precision: it concerns the theory of linear and quadratic equations with a single unknown, and the elementary arithmetic of relative binomials and trinomials.â¦"},{"what":"adjective","row":"consisting of two terms.","example":"Cotes discovered an important theorem on the nth roots of unity, anticipated the method of least squares and discovered a method of integrating rational fractions with binomial denominators."}]}',
    ),
    array( // row #1 325
        'word' => 'dirty', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"brudny"},{"tr":"24","wo":"nieczysty"},{"tr":"8","wo":"sprośny"},{"tr":"8","wo":"bydlęcy"},{"tr":"8","wo":"czarny"},{"tr":"8","wo":"haniebny"},{"tr":"8","wo":"powalany"},{"tr":"8","wo":"utaplany"}],"verb":[{"tr":"8","wo":"morusać"},{"tr":"8","wo":"brudzić"},{"tr":"8","wo":"ubrudzić"},{"tr":"8","wo":"wybrudzić"}],"examples":[{"what":"adjective","row":"covered or marked with an unclean substance.","example":"a tray of dirty cups and saucers"},{"what":"verb","row":"make dirty.","example":"she didn\'t like him dirtying her nice clean towels"}]}',
    ),
    array( // row #1 326
        'word' => 'affect', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wpłynąć"},{"tr":"8","wo":"udać"},{"tr":"8","wo":"symulować"},{"tr":"8","wo":"kroić"},{"tr":"8","wo":"pozować"},{"tr":"8","wo":"przyjąć"},{"tr":"8","wo":"działać"},{"tr":"8","wo":"oddziaływać"},{"tr":"8","wo":"zadziałać"},{"tr":"8","wo":"dotyczyć"},{"tr":"8","wo":"obchodzić"},{"tr":"8","wo":"dotknąć"},{"tr":"8","wo":"tknąć"},{"tr":"8","wo":"rozczulać"},{"tr":"8","wo":"rozrzewniać"}],"noun":[{"tr":"8","wo":"afekt"}],"examples":[{"what":"noun","row":"emotion or desire, especially as influencing behavior or action.","example":"By triggering affect and emotion, intolerant behaviors are set in motion."},{"what":"verb","row":"have an effect on; make a difference to.","example":"the dampness began to affect my health"}]}',
    ),
    array( // row #1 327
        'word' => 'coating', 'pl_PL' => '{"noun":[{"tr":"24","wo":"powłoka"},{"tr":"8","wo":"warstwa"},{"tr":"8","wo":"okrywa"},{"tr":"8","wo":"płaszczówka"},{"tr":"8","wo":"polewa"},{"tr":"8","wo":"narzut"},{"tr":"8","wo":"nalot"}],"examples":[{"what":"noun","row":"a thin layer or covering of something.","example":"a coating of paint"}]}',
    ),
    array( // row #1 328
        'word' => 'Forty', 'pl_PL' => '{"aaaaaa":[{"tr":"24","wo":"czterdzieści"}],"noun":[{"tr":"8","wo":"czterdziestka"}],"examples":[{"what":"","row":"the number equivalent to the product of four and ten; ten less than fifty; 40.","example":"Troy was only forty miles away"}]}',
    ),
    array( // row #1 329
        'word' => 'symbols', 'pl_PL' => '{"noun":[{"tr":"24","wo":"symbolika"}],"examples":[{"what":"noun","row":"a tenant\'s regular payment to a landlord for the use of property or land.","example":"Rather than charge monthly rent , most landlords used to require tenants to put up huge cash deposits, often hundreds of thousands of dollars."},{"what":"verb","row":"pay someone for the use of (something, typically property, land, or a car).","example":"they rented a house together in Spain"}]}',
    ),
    array( // row #1 330
        'word' => 'Smiling', 'pl_PL' => '{"verb":[{"tr":"24","wo":"uśmiechać się"}],"examples":[{"what":"verb","row":"form one\'s features into a pleased, kind, or amused expression, typically with the corners of the mouth turned up and the front teeth exposed.","example":"she was smiling"}]}',
    ),
    array( // row #1 331
        'word' => 'variable', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zmienna"}],"adjective":[{"tr":"24","wo":"zmienny"},{"tr":"8","wo":"niestały"}],"examples":[{"what":"adjective","row":"not consistent or having a fixed pattern; liable to change.","example":"the quality of hospital food is highly variable"},{"what":"noun","row":"an element, feature, or factor that is liable to vary or change.","example":"there are too many variables involved to make any meaningful predictions"}]}',
    ),
    array( // row #1 332
        'word' => 'accuracy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dokładność"},{"tr":"24","wo":"celność"},{"tr":"16","wo":"trafność"},{"tr":"8","wo":"ścisłość"},{"tr":"8","wo":"porządność"},{"tr":"8","wo":"precyzja"},{"tr":"8","wo":"staranność"}],"examples":[{"what":"noun","row":"the quality or state of being correct or precise.","example":"we have confidence in the accuracy of the statistics"}]}',
    ),
    array( // row #1 333
        'word' => 'similarly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"podobnie"},{"tr":"8","wo":"jednakowo"}],"examples":[{"what":"adverb","row":"in a similar way.","example":"a similarly priced property"}]}',
    ),
    array( // row #1 334
        'word' => 'fault', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wina"},{"tr":"24","wo":"błąd"},{"tr":"16","wo":"usterka"},{"tr":"8","wo":"wada"},{"tr":"8","wo":"brak"},{"tr":"8","wo":"defekt"},{"tr":"8","wo":"mankament"},{"tr":"8","wo":"przywara"},{"tr":"8","wo":"karygodność"}],"examples":[{"what":"noun","row":"an unattractive or unsatisfactory feature, especially in a piece of work or in a person\'s character.","example":"my worst fault is impatience"},{"what":"verb","row":"criticize for inadequacy or mistakes.","example":"her colleagues and superiors could not fault her dedication to the job"}]}',
    ),
    array( // row #1 335
        'word' => 'dressed', 'pl_PL' => '{"verb":[{"tr":"24","wo":"ubierać"},{"tr":"16","wo":"ubierać się"},{"tr":"8","wo":"przebierać"},{"tr":"8","wo":"opatrywać"},{"tr":"8","wo":"uczesać"},{"tr":"8","wo":"bejcować"},{"tr":"8","wo":"odziać"},{"tr":"8","wo":"oporządzać"},{"tr":"8","wo":"zaprawiać"},{"tr":"8","wo":"przystrajać"},{"tr":"8","wo":"bandażować"},{"tr":"8","wo":"czesać"}],"examples":[{"what":"verb","row":"put on one\'s clothes.","example":"Graham showered and dressed quickly"}]}',
    ),
    array( // row #1 336
        'word' => 'scientists', 'pl_PL' => '{"noun":[{"tr":"24","wo":"naukowiec"},{"tr":"16","wo":"uczony"},{"tr":"8","wo":"przyrodnik"}],"examples":[{"what":"noun","row":"a person who is studying or has expert knowledge of one or more of the natural or physical sciences.","example":"As much as our scientists would love to study these things, people are in danger and we need to fight back."}]}',
    ),
    array( // row #1 337
        'word' => 'columns', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kolumna"},{"tr":"16","wo":"słup"},{"tr":"8","wo":"rubryka"},{"tr":"8","wo":"słupek"},{"tr":"8","wo":"szpalta"},{"tr":"8","wo":"filar"},{"tr":"8","wo":"dział"},{"tr":"8","wo":"łam"}],"examples":[{"what":"noun","row":"an upright pillar, typically cylindrical and made of stone or concrete, supporting an entablature, arch, or other structure or standing alone as a monument.","example":"Inside, the handsome structure with cast iron columns and jack arches was cleaned and repaired."}]}',
    ),
    array( // row #1 338
        'word' => 'shell', 'pl_PL' => '{"noun":[{"tr":"24","wo":"powłoka"},{"tr":"16","wo":"skorupa"},{"tr":"16","wo":"muszla"},{"tr":"16","wo":"muszelka"},{"tr":"8","wo":"łupina"},{"tr":"8","wo":"nabój"},{"tr":"8","wo":"granat"},{"tr":"8","wo":"pancerz owada"},{"tr":"8","wo":"garda"},{"tr":"8","wo":"małżowina"}],"verb":[{"tr":"8","wo":"wyłuskać"}],"adjective":[{"tr":"8","wo":"granatowy"}],"examples":[{"what":"noun","row":"the hard protective outer case of a mollusk or crustacean.","example":"cowrie shells"},{"what":"verb","row":"bombard with shells.","example":"the guns started shelling their positions"},{"what":"preposition","row":"she shall; she will.","example":"Regardless of the next stop for Sonja, she\'ll have no problems taking it all in stride."}]}',
    ),
    array( // row #1 339
        'word' => 'stored', 'pl_PL' => '{"verb":[{"tr":"24","wo":"przechować"},{"tr":"8","wo":"zaopatrywać"},{"tr":"8","wo":"składować"},{"tr":"8","wo":"magazynować"},{"tr":"8","wo":"zmagazynować"},{"tr":"8","wo":"gromadzić"},{"tr":"8","wo":"składać"},{"tr":"8","wo":"mieścić"}],"examples":[{"what":"verb","row":"keep or accumulate (something) for future use.","example":"a small room used for storing furniture"}]}',
    ),
    array( // row #1 340
        'word' => 'Spanish', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"hiszpański"}],"noun":[{"tr":"8","wo":"język hiszpański"},{"tr":"8","wo":"Hiszpan"},{"tr":"8","wo":"hiszpańszczyzna"}],"examples":[{"what":"adjective","row":"of or relating to Spain, its people, or its language.","example":"When you come to Spain we\'ll play Spanish music, we\'ll sing and we\'ll even dance."},{"what":"noun","row":"the people of Spain.","example":"The Dance of the Conquest recalls the victory of the Spanish over the Amerindians."}]}',
    ),
    array( // row #1 341
        'word' => 'ratio', 'pl_PL' => '{"noun":[{"tr":"24","wo":"stosunek"},{"tr":"24","wo":"współczynnik"},{"tr":"24","wo":"wskaźnik"},{"tr":"8","wo":"proporcja"},{"tr":"8","wo":"iloczyn"}],"examples":[{"what":"noun","row":"the quantitative relation between two amounts showing the number of times one value contains or is contained within the other.","example":"the ratio of men\'s jobs to women\'s is 8 to 1"}]}',
    ),
    array( // row #1 342
        'word' => 'bowl', 'pl_PL' => '{"noun":[{"tr":"24","wo":"miska"},{"tr":"16","wo":"misa"},{"tr":"16","wo":"miseczka"},{"tr":"16","wo":"czasza"},{"tr":"8","wo":"czara"},{"tr":"8","wo":"donica"},{"tr":"8","wo":"kielich"},{"tr":"8","wo":"flakon"},{"tr":"8","wo":"panew"},{"tr":"8","wo":"wazka"}],"verb":[{"tr":"8","wo":"zaserwować"},{"tr":"8","wo":"zagrać w bowls"},{"tr":"8","wo":"toczyć"}],"examples":[{"what":"noun","row":"a round, deep dish or basin used for food or liquid.","example":"a mixing bowl"},{"what":"verb","row":"roll (a ball or hoop) along the ground.","example":"she snatched her hat off and bowled it ahead of her like a hoop"}]}',
    ),
    array( // row #1 343
        'word' => 'conclusions', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wniosek"},{"tr":"16","wo":"konkluzja"},{"tr":"16","wo":"zakończenie"},{"tr":"8","wo":"rozstrzygnięcie"},{"tr":"8","wo":"wnioskowanie"},{"tr":"8","wo":"dokończenie"}],"examples":[{"what":"noun","row":"the end or finish of an event or process.","example":"the conclusion of World War Two"}]}',
    ),
    array( // row #1 344
        'word' => 'desirable', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pożądany"},{"tr":"8","wo":"wskazany"}],"examples":[{"what":"adjective","row":"wanted or wished for as being an attractive, useful, or necessary course of action.","example":"it is desirable to exercise some social control over technology"},{"what":"noun","row":"a desirable person, thing, or quality.","example":"In 1883, Francis Galton, a cousin of Charles Darwin, actually coined the term âEugenicsâ (good in birth) as a science dedicated to improving human stock by getting rid of so-called undesirables and increasing the number of desirables ."}]}',
    ),
    array( // row #1 345
        'word' => 'substantially', 'pl_PL' => '{"adverb":[{"tr":"16","wo":"istotnie"},{"tr":"8","wo":"namacalnie"},{"tr":"8","wo":"faktycznie"},{"tr":"8","wo":"mocno"},{"tr":"8","wo":"pokaźnie"}],"examples":[{"what":"adverb","row":"to a great or significant extent.","example":"profits grew substantially"}]}',
    ),
    array( // row #1 346
        'word' => 'passenger', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pasażer"},{"tr":"8","wo":"piąte koło u wozu"}],"adjective":[{"tr":"24","wo":"pasażerski"}],"examples":[{"what":"noun","row":"a traveler on a public or private conveyance other than the driver, pilot, or crew.","example":"The driver and his passengers escaped unhurt when the brick was thrown through a small side window."}]}',
    ),
    array( // row #1 347
        'word' => 'fortunate', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"szczęśliwy"},{"tr":"8","wo":"fortunny"},{"tr":"8","wo":"pomyślny"}],"examples":[{"what":"adjective","row":"favored by or involving good luck or fortune; lucky.","example":"she\'d been fortunate to escape more serious injury"}]}',
    ),
    array( // row #1 348
        'word' => 'outlook', 'pl_PL' => '{"noun":[{"tr":"24","wo":"perspektywy"},{"tr":"16","wo":"pogląd"},{"tr":"16","wo":"wygląd"},{"tr":"8","wo":"widoki"},{"tr":"8","wo":"czata"}],"examples":[{"what":"noun","row":"a person\'s point of view or general attitude to life.","example":"broaden your outlook on life"}]}',
    ),
    array( // row #1 349
        'word' => 'occupied', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"zajęty"},{"tr":"8","wo":"okupowany"}],"examples":[{"what":"adjective","row":"(of a building, seat, etc.) being used by someone.","example":"only the first floor is fully occupied"}]}',
    ),
    array( // row #1 350
        'word' => 'kinds', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rodzaj"},{"tr":"8","wo":"ród"},{"tr":"8","wo":"gatunek"},{"tr":"8","wo":"gust"},{"tr":"8","wo":"postać"},{"tr":"8","wo":"natura"},{"tr":"8","wo":"przyroda"},{"tr":"8","wo":"sposób"},{"tr":"8","wo":"jakość"},{"tr":"8","wo":"towar"}],"examples":[{"what":"noun","row":"a group of people or things having similar characteristics.","example":"all kinds of music"}]}',
    ),
    array( // row #1 351
        'word' => 'classic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"klasyczny"}],"noun":[{"tr":"24","wo":"klasyk"}],"examples":[{"what":"adjective","row":"judged over a period of time to be of the highest quality and outstanding of its kind.","example":"a classic novel"},{"what":"noun","row":"a work of art of recognized and established value.","example":"his books have become classics"}]}',
    ),
    array( // row #1 352
        'word' => 'managed', 'pl_PL' => '{"verb":[{"tr":"8","wo":"kierować"},{"tr":"8","wo":"gospodarować"},{"tr":"8","wo":"poradzić sobie"},{"tr":"8","wo":"potrafić"},{"tr":"8","wo":"administrować"},{"tr":"8","wo":"podołać"},{"tr":"8","wo":"zdołać"},{"tr":"8","wo":"władać"},{"tr":"8","wo":"pokierować czymś kimś"},{"tr":"8","wo":"wykierować"},{"tr":"8","wo":"dyrektorować"},{"tr":"8","wo":"dyrygować"},{"tr":"8","wo":"wykombinować"},{"tr":"8","wo":"obchodzić się"},{"tr":"8","wo":"udać się"}],"examples":[{"what":"verb","row":"be in charge of (a company, establishment, or undertaking); administer; run.","example":"their elder son managed the farm"}]}',
    ),
    array( // row #1 353
        'word' => 'equipped', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wyposażony"},{"tr":"8","wo":"zaopatrzony"},{"tr":"8","wo":"uzbrojony"},{"tr":"8","wo":"wyekwipowany"}],"examples":[{"what":"verb","row":"supply with the necessary items for a particular purpose.","example":"all bedrooms are equipped with a color TV"}]}',
    ),
    array( // row #1 354
        'word' => 'tip', 'pl_PL' => '{"noun":[{"tr":"24","wo":"napiwek"},{"tr":"24","wo":"wskazówka"},{"tr":"24","wo":"końcówka"},{"tr":"16","wo":"rada"},{"tr":"16","wo":"cynk"},{"tr":"16","wo":"koniuszek"},{"tr":"8","wo":"czub"},{"tr":"8","wo":"gratyfikacja"},{"tr":"8","wo":"śmietnik"},{"tr":"8","wo":"skórka"}],"verb":[{"tr":"16","wo":"przechylić"},{"tr":"8","wo":"dawać napiwek"}],"examples":[{"what":"noun","row":"the pointed or rounded end or extremity of something slender or tapering.","example":"George pressed the tips of his fingers together"},{"what":"verb","row":"attach to or cover the end or extremity of.","example":"mountains tipped with snow"}]}',
    ),
    array( // row #1 355
        'word' => 'crew', 'pl_PL' => '{"noun":[{"tr":"24","wo":"załoga"},{"tr":"16","wo":"ekipa"},{"tr":"8","wo":"obsada w kajaku"},{"tr":"8","wo":"obsługa"},{"tr":"8","wo":"zespół"},{"tr":"8","wo":"drużyna"},{"tr":"8","wo":"banda"}],"examples":[{"what":"noun","row":"a group of people who work on and operate a ship, boat, aircraft, spacecraft, or train.","example":"In addition to training the ship\'s crew , there\'s the matter of getting the air crews shipshape."},{"what":"verb","row":"provide (a craft or vehicle) with a group of people to operate it.","example":"normally the boat is crewed by 5 people"}]}',
    ),
    array( // row #1 356
        'word' => 'withdraw', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wycofać"},{"tr":"16","wo":"odstąpić"},{"tr":"16","wo":"wycofać się"},{"tr":"8","wo":"odwołać"},{"tr":"8","wo":"cofać"},{"tr":"8","wo":"podjąć"},{"tr":"8","wo":"oddalić"},{"tr":"8","wo":"ustąpić"},{"tr":"8","wo":"ujść"},{"tr":"8","wo":"odsunąć"},{"tr":"8","wo":"cofać się"},{"tr":"8","wo":"zabierać"}],"examples":[{"what":"verb","row":"remove or take away (something) from a particular place or position.","example":"slowly Ruth withdrew her hand from his"}]}',
    ),
    array( // row #1 357
        'word' => 'volt', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wolt"}],"examples":[{"what":"noun","row":"the SI unit of electromotive force, the difference of potential that would drive one ampere of current against one ohm resistance.","example":"They created electricity running at 10 volts with a milliamp current, enough to power a small lightbulb."},{"what":"verb","row":"make a quick movement to avoid a thrust.","example":"He strongly favours fencing along a straight line, disapproving of â volting â, crossing the legs, and all the tricks which were favoured with the ancients.â"}]}',
    ),
    array( // row #1 358
        'word' => 'vocabulary', 'pl_PL' => '{"noun":[{"tr":"24","wo":"słownictwo"},{"tr":"16","wo":"słownik"},{"tr":"8","wo":"słowniczek"}],"examples":[{"what":"noun","row":"the body of words used in a particular language.","example":"Just as the vocabulary of a language changes from age to age, so the vocabularies of different languages are distinct in their systems, uses, and references."}]}',
    ),
    array( // row #1 359
        'word' => 'violate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"naruszać"},{"tr":"8","wo":"pogwałcić"},{"tr":"8","wo":"zbezcześcić"},{"tr":"8","wo":"bezcześcić"},{"tr":"8","wo":"sprofanować"},{"tr":"8","wo":"gwałcić"},{"tr":"8","wo":"zgwałcić"}],"examples":[{"what":"verb","row":"break or fail to comply with (a rule or formal agreement).","example":"they violated the terms of a ceasefire"}]}',
    ),
    array( // row #1 360
        'word' => 'vibrate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wibrować"},{"tr":"16","wo":"drgać"},{"tr":"8","wo":"drżeć"},{"tr":"8","wo":"tętnić"},{"tr":"8","wo":"pulsować"},{"tr":"8","wo":"rezonować"},{"tr":"8","wo":"oscylować"},{"tr":"8","wo":"rozedrgać się"}],"examples":[{"what":"verb","row":"move or cause to move continuously and rapidly to and fro.","example":"the cabin started to vibrate"}]}',
    ),
    array( // row #1 361
        'word' => 'vertical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pionowy"},{"tr":"8","wo":"wertykalny"},{"tr":"8","wo":"wierzchołkowy"}],"noun":[{"tr":"8","wo":"pion"}],"examples":[{"what":"adjective","row":"at right angles to a horizontal plane; in a direction, or having an alignment, such that the top is directly above the bottom.","example":"the vertical axis"},{"what":"noun","row":"a vertical line or plane.","example":"the columns incline several degrees away from the vertical"}]}',
    ),
    array( // row #1 362
        'word' => 'verify', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zweryfikować"},{"tr":"16","wo":"weryfikować"},{"tr":"8","wo":"sprawdzać"},{"tr":"8","wo":"kontrolować"},{"tr":"8","wo":"potwierdzać"}],"examples":[{"what":"verb","row":"make sure or demonstrate that (something) is true, accurate, or justified.","example":"his conclusions have been verified by later experiments"}]}',
    ),
    array( // row #1 363
        'word' => 'utter', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wypowiadać"},{"tr":"16","wo":"wykrztusić"},{"tr":"8","wo":"wydać"},{"tr":"8","wo":"rzec"},{"tr":"8","wo":"wyrazić"},{"tr":"8","wo":"wyrzec słowo"},{"tr":"8","wo":"wymawiać"},{"tr":"8","wo":"wygłaszać"}],"adjective":[{"tr":"16","wo":"zupełny"},{"tr":"8","wo":"absolutny"},{"tr":"8","wo":"całkowity"},{"tr":"8","wo":"bezwzględny"}],"examples":[{"what":"adjective","row":"complete; absolute.","example":"Charles stared at her in utter amazement"},{"what":"verb","row":"make (a sound) with one\'s voice.","example":"he uttered an exasperated snort"}]}',
    ),
    array( // row #1 364
        'word' => 'utilize', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wykorzystać"},{"tr":"8","wo":"użytkować"},{"tr":"8","wo":"zużytkować"},{"tr":"8","wo":"spożytkować"},{"tr":"8","wo":"eksploatować"},{"tr":"8","wo":"utylizować"},{"tr":"8","wo":"zutylizować"}],"examples":[{"what":"verb","row":"make practical and effective use of.","example":"vitamin C helps your body utilize the iron present in your diet"}]}',
    ),
    array( // row #1 365
        'word' => 'usage', 'pl_PL' => '{"noun":[{"tr":"16","wo":"stosowanie"},{"tr":"8","wo":"traktowanie"},{"tr":"8","wo":"obchodzenie się z czymś"},{"tr":"8","wo":"używanie"},{"tr":"8","wo":"zwyczaj"}],"examples":[{"what":"noun","row":"the action of using something or the fact of being used.","example":"a survey of water usage"}]}',
    ),
    array( // row #1 366
        'word' => 'upsurge', 'pl_PL' => '{"noun":[{"tr":"16","wo":"nagły wzrost"},{"tr":"8","wo":"gwałtowny przypływ uczucia"}],"examples":[{"what":"noun","row":"an upward surge in the strength or quantity of something; an increase.","example":"an upsurge in violent crime"}]}',
    ),
    array( // row #1 367
        'word' => 'unduly', 'pl_PL' => '{"adverb":[{"tr":"24","wo":"nadmiernie"},{"tr":"16","wo":"zbytnio"},{"tr":"8","wo":"przesadnie"}],"examples":[{"what":"verb","row":"commit oneself to and begin (an enterprise or responsibility); take on.","example":"a firm of builders undertook the construction work"}]}',
    ),
    array( // row #1 368
        'word' => 'undertake', 'pl_PL' => '{"verb":[{"tr":"24","wo":"podjąć"},{"tr":"16","wo":"zobowiązać się"},{"tr":"8","wo":"przedsiębrać"},{"tr":"8","wo":"przyjąć"},{"tr":"8","wo":"imać"},{"tr":"8","wo":"podjąć się czegoś"},{"tr":"8","wo":"przyjąć na siebie"}],"examples":[{"what":"verb","row":"commit oneself to and begin (an enterprise or responsibility); take on.","example":"a firm of builders undertook the construction work"}]}',
    ),
    array( // row #1 369
        'word' => 'undergo', 'pl_PL' => '{"verb":[{"tr":"24","wo":"przejść"},{"tr":"16","wo":"podlegać"},{"tr":"8","wo":"odbyć"},{"tr":"8","wo":"przecierpieć"},{"tr":"8","wo":"doświadczać"},{"tr":"8","wo":"doznać"},{"tr":"8","wo":"zaznać"}],"examples":[{"what":"verb","row":"experience or be subjected to (something, typically something unpleasant, painful, or arduous).","example":"the baby underwent a life-saving brain operation"}]}',
    ),
    array( // row #1 370
        'word' => 'tropical', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"tropikalny"},{"tr":"8","wo":"tropikowy"},{"tr":"8","wo":"zwrotnikowy"},{"tr":"8","wo":"gorący"},{"tr":"8","wo":"namiętny"}],"examples":[{"what":"adjective","row":"of, typical of, or peculiar to the tropics.","example":"tropical countries"}]}',
    ),
    array( // row #1 371
        'word' => 'trivial', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"trywialny"},{"tr":"16","wo":"banalny"},{"tr":"8","wo":"błahy"},{"tr":"8","wo":"mało ważny"},{"tr":"8","wo":"nietreściwy"},{"tr":"8","wo":"nieważny"},{"tr":"8","wo":"znikomy"},{"tr":"8","wo":"bzdurny"},{"tr":"8","wo":"głupi"},{"tr":"8","wo":"marny"},{"tr":"8","wo":"nieważki"},{"tr":"8","wo":"powierzchowny"}],"examples":[{"what":"adjective","row":"of little value or importance.","example":"huge fines were imposed for trivial offenses"}]}',
    ),
    array( // row #1 372
        'word' => 'triangle', 'pl_PL' => '{"noun":[{"tr":"24","wo":"trójkąt"},{"tr":"16","wo":"trójbok"}],"examples":[{"what":"noun","row":"a plane figure with three straight sides and three angles.","example":"an equilateral triangle"}]}',
    ),
    array( // row #1 373
        'word' => 'transport', 'pl_PL' => '{"noun":[{"tr":"24","wo":"transport"},{"tr":"16","wo":"przewóz"},{"tr":"8","wo":"przywóz"},{"tr":"8","wo":"rozwóz"},{"tr":"8","wo":"odtransportowanie"},{"tr":"8","wo":"przetransportowanie"},{"tr":"8","wo":"przeprawienie"},{"tr":"8","wo":"przewoźnictwo"},{"tr":"8","wo":"poryw"},{"tr":"8","wo":"unoszenie się"}],"verb":[{"tr":"24","wo":"transportować"},{"tr":"16","wo":"przetransportować"}],"examples":[{"what":"noun","row":"a system or means of conveying people or goods from place to place by means of a vehicle, aircraft, or ship.","example":"many possess their own forms of transport"},{"what":"verb","row":"take or carry (people or goods) from one place to another by means of a vehicle, aircraft, or ship.","example":"the bulk of freight traffic was transported by truck"}]}',
    ),
    array( // row #1 374
        'word' => 'transparent', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"przezroczysty"},{"tr":"24","wo":"przejrzysty"},{"tr":"16","wo":"przeźroczysty"},{"tr":"8","wo":"ażurowy"},{"tr":"8","wo":"przeświecający"},{"tr":"8","wo":"zrozumiały"},{"tr":"8","wo":"transparentowy"},{"tr":"8","wo":"szczery"},{"tr":"8","wo":"grubymi nićmi szyty"}],"examples":[{"what":"adjective","row":"(of a material or article) allowing light to pass through so that objects behind can be distinctly seen.","example":"transparent blue water"}]}',
    ),
    array( // row #1 375
        'word' => 'transmit', 'pl_PL' => '{"verb":[{"tr":"16","wo":"przekazać"},{"tr":"16","wo":"transmitować"},{"tr":"8","wo":"doręczać"},{"tr":"8","wo":"przewodzić"},{"tr":"8","wo":"nadać"},{"tr":"8","wo":"przenieść"}],"examples":[{"what":"verb","row":"cause (something) to pass on from one place or person to another.","example":"knowledge is transmitted from teacher to student"}]}',
    ),
    array( // row #1 376
        'word' => 'transform', 'pl_PL' => '{"verb":[{"tr":"16","wo":"przekształcać"},{"tr":"8","wo":"przemieniać"},{"tr":"8","wo":"przeobrazić"},{"tr":"8","wo":"przerobić"},{"tr":"8","wo":"przetwarzać"},{"tr":"8","wo":"przeinaczać"},{"tr":"8","wo":"przeistaczać"},{"tr":"8","wo":"przepostaciować"},{"tr":"8","wo":"przerodzić"},{"tr":"8","wo":"transformować"},{"tr":"8","wo":"przetransformować"}],"examples":[{"what":"verb","row":"make a thorough or dramatic change in the form, appearance, or character of.","example":"lasers have transformed cardiac surgery"},{"what":"noun","row":"the product of a transformation.","example":"In the bottom portion of the figure, the logarithmic transform of power is presented."}]}',
    ),
    array( // row #1 377
        'word' => 'trait', 'pl_PL' => '{"noun":[{"tr":"24","wo":"cecha"},{"tr":"16","wo":"rys"},{"tr":"8","wo":"znamię"},{"tr":"8","wo":"przymiot"}],"examples":[{"what":"noun","row":"a distinguishing quality or characteristic, typically one belonging to a person.","example":"he was a letter-of-the-law man, a common trait among coaches"}]}',
    ),
    array( // row #1 378
        'word' => 'topic', 'pl_PL' => '{"noun":[{"tr":"24","wo":"temat"},{"tr":"8","wo":"kwestia"},{"tr":"8","wo":"topika"}],"examples":[{"what":"noun","row":"a matter dealt with in a text, discourse, or conversation; a subject.","example":"her favorite topic of conversation is her partner"}]}',
    ),
    array( // row #1 379
        'word' => 'tolerate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"tolerować"},{"tr":"24","wo":"znieść"},{"tr":"8","wo":"ścierpieć"}],"examples":[{"what":"verb","row":"allow the existence, occurrence, or practice of (something that one does not necessarily like or agree with) without interference.","example":"a regime unwilling to tolerate dissent"}]}',
    ),
    array( // row #1 380
        'word' => 'theorem', 'pl_PL' => '{"noun":[{"tr":"24","wo":"twierdzenie"},{"tr":"8","wo":"teoremat"}],"examples":[{"what":"noun","row":"a general proposition not self-evident but proved by a chain of reasoning; a truth established by means of accepted truths.","example":"Ideally the definitions would generate all the concepts from clear and distinct ideas, and the proofs would generate all the theorems from self-evident truths."}]}',
    ),
    array( // row #1 381
        'word' => 'theft', 'pl_PL' => '{"noun":[{"tr":"24","wo":"kradzież"},{"tr":"8","wo":"złodziejstwo"}],"examples":[{"what":"noun","row":"the action or crime of stealing.","example":"he was convicted of theft"}]}',
    ),
    array( // row #1 382
        'word' => 'texture', 'pl_PL' => '{"noun":[{"tr":"24","wo":"tekstura"},{"tr":"16","wo":"struktura"},{"tr":"8","wo":"budowa"},{"tr":"8","wo":"układ włókien"},{"tr":"8","wo":"błam"}],"examples":[{"what":"noun","row":"the feel, appearance, or consistency of a surface or a substance.","example":"skin texture and tone"},{"what":"verb","row":"give (a surface, especially of a fabric or wall covering) a rough or raised texture.","example":"wallcoverings which create a textured finish"}]}',
    ),
    array( // row #1 383
        'word' => 'terminology', 'pl_PL' => '{"noun":[{"tr":"24","wo":"terminologia"},{"tr":"8","wo":"nomenklatura"}],"examples":[{"what":"noun","row":"the body of terms used with a particular technical application in a subject of study, theory, profession, etc..","example":"the terminology of semiotics"}]}',
    ),
    array( // row #1 384
        'word' => 'tentative', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"niepewny"},{"tr":"16","wo":"orientacyjny"},{"tr":"16","wo":"próbny"},{"tr":"8","wo":"odwołalny"}],"noun":[{"tr":"8","wo":"próba"},{"tr":"8","wo":"sugestia"}],"examples":[{"what":"adjective","row":"not certain or fixed; provisional.","example":"a tentative conclusion"}]}',
    ),
    array( // row #1 385
        'word' => 'tense', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"napięty"}],"verb":[{"tr":"8","wo":"sprężać"}],"noun":[{"tr":"8","wo":"napięcie"},{"tr":"8","wo":"czas"}],"examples":[{"what":"adjective","row":"(especially of a muscle or someone\'s body) stretched tight or rigid.","example":"she tried to relax her tense muscles"},{"what":"verb","row":"become tense, typically through anxiety or nervousness.","example":"her body tensed up"},{"what":"noun","row":"a set of forms taken by a verb to indicate the time (and sometimes also the continuance or completeness) of the action in relation to the time of the utterance.","example":"the past tense"}]}',
    ),
    array( // row #1 386
        'word' => 'telescope', 'pl_PL' => '{"noun":[{"tr":"24","wo":"teleskop"},{"tr":"24","wo":"luneta"}],"examples":[{"what":"verb","row":"(with reference to an object made of concentric tubular parts) slide or cause to slide into itself, so that it becomes smaller.","example":"five steel sections that telescope into one another"}]}',
    ),
    array( // row #1 387
        'word' => 'synthetic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"syntetyczny"}],"noun":[{"tr":"8","wo":"syntetyk"}],"examples":[{"what":"adjective","row":"(of a substance) made by chemical synthesis, especially to imitate a natural product.","example":"synthetic rubber"},{"what":"noun","row":"a synthetic material or chemical, especially a textile fiber.","example":"Twentieth century technology has opened up a treasure of textures and materials from space age synthetics to hand-woven straws."}]}',
    ),
    array( // row #1 388
        'word' => 'symptom', 'pl_PL' => '{"noun":[{"tr":"24","wo":"objaw"},{"tr":"24","wo":"symptom"},{"tr":"16","wo":"przejaw"},{"tr":"8","wo":"symptomat"}],"examples":[{"what":"noun","row":"a physical or mental feature that is regarded as indicating a condition of disease, particularly such a feature that is apparent to the patient.","example":"dental problems may be a symptom of other illness"}]}',
    ),
    array( // row #1 389
        'word' => 'sustain', 'pl_PL' => '{"verb":[{"tr":"16","wo":"podtrzymywać"},{"tr":"16","wo":"ponieść"},{"tr":"8","wo":"przetrzymać coś"},{"tr":"8","wo":"dźwigać"},{"tr":"8","wo":"doznać"},{"tr":"8","wo":"odnieść"},{"tr":"8","wo":"doświadczać"},{"tr":"8","wo":"wypełniać należycie rolę"}],"examples":[{"what":"verb","row":"strengthen or support physically or mentally.","example":"this thought had sustained him throughout the years"},{"what":"noun","row":"an effect or facility on a keyboard or electronic instrument whereby a note can be sustained after the key is released.","example":"She has a decent voice, but it was her sustain on the more difficult notes that really impressed."}]}',
    ),
    array( // row #1 390
        'word' => 'suspend', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zawiesić"},{"tr":"16","wo":"wstrzymać"},{"tr":"8","wo":"podwiesić"}],"examples":[{"what":"verb","row":"temporarily prevent from continuing or being in force or effect.","example":"work on the dam was suspended"}]}',
    ),
    array( // row #1 391
        'word' => 'suppress', 'pl_PL' => '{"verb":[{"tr":"24","wo":"stłumić"},{"tr":"24","wo":"tłumić"},{"tr":"16","wo":"powstrzymać"},{"tr":"8","wo":"taić"},{"tr":"8","wo":"znieść"},{"tr":"8","wo":"zlikwidować"},{"tr":"8","wo":"przykrócić"},{"tr":"8","wo":"przydusić"},{"tr":"8","wo":"przyciszyć"},{"tr":"8","wo":"poskramiać"},{"tr":"8","wo":"ukrócić"},{"tr":"8","wo":"uśmierzać"},{"tr":"8","wo":"zatuszować"},{"tr":"8","wo":"ugasić"},{"tr":"8","wo":"utaić"},{"tr":"8","wo":"przełamać"}],"examples":[{"what":"verb","row":"forcibly put an end to.","example":"the uprising was savagely suppressed"}]}',
    ),
    array( // row #1 392
        'word' => 'superimpose', 'pl_PL' => '{"verb":[{"tr":"16","wo":"nakładać"},{"tr":"8","wo":"celować"}],"examples":[{"what":"verb","row":"place or lay (one thing) over another, typically so that both are still evident.","example":"the number will appear on the screen, superimposed on a flashing button"}]}',
    ),
    array( // row #1 393
        'word' => 'superficial', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"powierzchowny"},{"tr":"16","wo":"powierzchniowy"},{"tr":"8","wo":"zewnętrzny"},{"tr":"8","wo":"pobieżny"},{"tr":"8","wo":"płytki"},{"tr":"8","wo":"niegłęboki"},{"tr":"8","wo":"kwadratowy"}],"examples":[{"what":"adjective","row":"existing or occurring at or on the surface.","example":"the building suffered only superficial damage"}]}',
    ),
    array( // row #1 394
        'word' => 'subsidize', 'pl_PL' => '{"verb":[{"tr":"24","wo":"subsydiować"},{"tr":"24","wo":"dotować"},{"tr":"8","wo":"subwencjonować"}],"examples":[{"what":"verb","row":"support (an organization or activity) financially.","example":"it was beyond the power of a state to subsidize a business"}]}',
    ),
    array( // row #1 395
        'word' => 'subside', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zapadać"},{"tr":"8","wo":"cichnąć"},{"tr":"8","wo":"ubyć"},{"tr":"8","wo":"zapadać się"},{"tr":"8","wo":"osunąć się"},{"tr":"8","wo":"odchodzić"},{"tr":"8","wo":"przygasać"},{"tr":"8","wo":"ustać"},{"tr":"8","wo":"łagodnieć"},{"tr":"8","wo":"ucichać"},{"tr":"8","wo":"milknąć"},{"tr":"8","wo":"złagodnieć"}],"examples":[{"what":"verb","row":"become less intense, violent, or severe.","example":"I\'ll wait a few minutes until the storm subsides"}]}',
    ),
    array( // row #1 396
        'word' => 'subordinate', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"podrzędny"},{"tr":"24","wo":"zależny"},{"tr":"24","wo":"podległy"},{"tr":"16","wo":"podwładny"},{"tr":"16","wo":"podporządkowany"},{"tr":"8","wo":"podkomendny"}],"verb":[{"tr":"24","wo":"podporządkować"},{"tr":"8","wo":"uzależniać"}],"examples":[{"what":"adjective","row":"lower in rank or position.","example":"his subordinate officers"},{"what":"verb","row":"treat or regard as of lesser importance than something else.","example":"practical considerations were subordinated to political expediency"},{"what":"noun","row":"a person under the authority or control of another within an organization.","example":"The commander of any level is supposed to pay serious attention to work with his subordinates and organize control over their activities."}]}',
    ),
    array( // row #1 397
        'word' => 'subjective', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"subiektywny"},{"tr":"16","wo":"podmiotowy"}],"examples":[{"what":"adjective","row":"based on or influenced by personal feelings, tastes, or opinions.","example":"his views are highly subjective"},{"what":"noun","row":"the subjective case.","example":null}]}',
    ),
    array( // row #1 398
        'word' => 'strata', 'pl_PL' => '{"noun":[{"tr":"24","wo":"warstwa"}],"examples":[{"what":"verb","row":"demand or specify (a requirement), typically as part of a bargain or agreement.","example":"he stipulated certain conditions before their marriage"},{"what":"adjective","row":"(of a leaf or plant) having stipules.","example":"Both have woody trunks and woody roots as well as stipulate leaf bases."}]}',
    ),
    array( // row #1 399
        'word' => 'stipulate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zastrzec"},{"tr":"16","wo":"przewidywać"},{"tr":"8","wo":"żądać"},{"tr":"8","wo":"wymagać"},{"tr":"8","wo":"postulować"},{"tr":"8","wo":"obwarować"}],"adjective":[{"tr":"8","wo":"opatrzony przylistkami"}],"examples":[{"what":"verb","row":"demand or specify (a requirement), typically as part of a bargain or agreement.","example":"he stipulated certain conditions before their marriage"},{"what":"adjective","row":"(of a leaf or plant) having stipules.","example":"Both have woody trunks and woody roots as well as stipulate leaf bases."}]}',
    ),
    array( // row #1 400
        'word' => 'stimulate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"stymulować"},{"tr":"16","wo":"pobudzać"},{"tr":"8","wo":"podniecać"},{"tr":"8","wo":"rozbudzić"},{"tr":"8","wo":"ożywiać"},{"tr":"8","wo":"drażnić"},{"tr":"8","wo":"podłechtać"},{"tr":"8","wo":"poekscytować"},{"tr":"8","wo":"rozgrzać"},{"tr":"8","wo":"zdopingować"},{"tr":"8","wo":"animować"},{"tr":"8","wo":"zaanimować"}],"examples":[{"what":"verb","row":"raise levels of physiological or nervous activity in (the body or any biological system).","example":"the women are given fertility drugs to stimulate their ovaries"}]}',
    ),
    array( // row #1 401
        'word' => 'stereotype', 'pl_PL' => '{"noun":[{"tr":"24","wo":"stereotyp"},{"tr":"8","wo":"szablon"}],"verb":[{"tr":"8","wo":"stereotypować"}],"examples":[{"what":"noun","row":"a widely held but fixed and oversimplified image or idea of a particular type of person or thing.","example":"the stereotype of the woman as the carer"},{"what":"verb","row":"view or represent as a stereotype.","example":"the city is too easily stereotyped as an industrial wasteland"}]}',
    ),
    array( // row #1 402
        'word' => 'statistic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"statystyczny"}],"examples":[{"what":"noun","row":"a fact or piece of data from a study of a large quantity of numerical data.","example":"the statistics show that the crime rate has increased"}]}',
    ),
    array( // row #1 403
        'word' => 'stationary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"nieruchomy"},{"tr":"24","wo":"stacjonarny"},{"tr":"8","wo":"stały"},{"tr":"8","wo":"miejscowy"}],"examples":[{"what":"adjective","row":"not moving or not intended to be moved.","example":"a car collided with a stationary vehicle"}]}',
    ),
    array( // row #1 404
        'word' => 'starve', 'pl_PL' => '{"verb":[{"tr":"24","wo":"głodować"},{"tr":"16","wo":"głodzić"},{"tr":"8","wo":"głodzić się"},{"tr":"8","wo":"wygłodzić"},{"tr":"8","wo":"nagłodować się"},{"tr":"8","wo":"łaknąć"},{"tr":"8","wo":"marnieć"}],"examples":[{"what":"verb","row":"(of a person or animal) suffer severely or die from hunger.","example":"she left her animals to starve"}]}',
    ),
    array( // row #1 405
        'word' => 'spontaneous', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"spontaniczny"},{"tr":"8","wo":"nieprzymuszony"},{"tr":"8","wo":"odruchowy"},{"tr":"8","wo":"żywiołowy"}],"examples":[{"what":"adjective","row":"performed or occurring as a result of a sudden inner impulse or inclination and without premeditation or external stimulus.","example":"the audience broke into spontaneous applause"}]}',
    ),
    array( // row #1 406
        'word' => 'speculate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"spekulować"},{"tr":"8","wo":"przemyśliwać"}],"examples":[{"what":"verb","row":"form a theory or conjecture about a subject without firm evidence.","example":"my colleagues speculate about my private life"}]}',
    ),
    array( // row #1 407
        'word' => 'spectrum', 'pl_PL' => '{"noun":[{"tr":"24","wo":"widmo"}],"adjective":[{"tr":"8","wo":"widmowy"}],"examples":[{"what":"noun","row":"a band of colors, as seen in a rainbow, produced by separation of the components of light by their different degrees of refraction according to wavelength.","example":"If viewed through a prism, however, there is a decomposition of the light into the colors of the spectrum , each with different wavelengths."}]}',
    ),
    array( // row #1 408
        'word' => 'spatial', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"przestrzenny"}],"examples":[{"what":"adjective","row":"of or relating to space.","example":"the spatial distribution of population"}]}',
    ),
    array( // row #1 409
        'word' => 'solar', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"słoneczny"},{"tr":"16","wo":"solarny"}],"examples":[{"what":"adjective","row":"of, relating to, or determined by the sun.","example":"solar radiation"},{"what":"noun","row":"an upper chamber in a medieval house.","example":"I would hazard a guess that what he found were nail holes on part of the panelled screen commonly found in the better class of English medieval house between the hall and the solar ."}]}',
    ),
    array( // row #1 410
        'word' => 'sociology', 'pl_PL' => '{"noun":[{"tr":"24","wo":"socjologia"}],"examples":[{"what":"noun","row":"the study of the development, structure, and functioning of human society.","example":"Adorno is undoubtedly the most important figure in the development of the sociology of music in the 20th century."}]}',
    ),
    array( // row #1 411
        'word' => 'sketch', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szkic"},{"tr":"16","wo":"rysunek"},{"tr":"16","wo":"rys"},{"tr":"8","wo":"zarys"},{"tr":"8","wo":"obrys"},{"tr":"8","wo":"odrys"},{"tr":"8","wo":"narys"},{"tr":"8","wo":"plan"},{"tr":"8","wo":"skecz"},{"tr":"8","wo":"rzut"}],"verb":[{"tr":"24","wo":"naszkicować"},{"tr":"24","wo":"szkicować"},{"tr":"8","wo":"zarysować"},{"tr":"8","wo":"nakreślić"}],"examples":[{"what":"noun","row":"a rough or unfinished drawing or painting, often made to assist in making a more finished picture.","example":"a charcoal sketch"},{"what":"verb","row":"make a rough drawing of.","example":"as they talked, Modigliani began to sketch her"}]}',
    ),
    array( // row #1 412
        'word' => 'skeleton', 'pl_PL' => '{"noun":[{"tr":"24","wo":"szkielet"},{"tr":"16","wo":"kościec"},{"tr":"8","wo":"kościotrup"}],"examples":[{"what":"noun","row":"an internal or external framework of bone, cartilage, or other rigid material supporting or containing the body of an animal or plant.","example":"Despite the apparent differences produced by an internal versus an external skeleton , the control problems faced by the two groups are formally the same."}]}',
    ),
    array( // row #1 413
        'word' => 'simultaneous', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"jednoczesny"},{"tr":"16","wo":"równoczesny"}],"examples":[{"what":"adjective","row":"occurring, operating, or done at the same time.","example":"a simultaneous withdrawal of all troops"}]}',
    ),
    array( // row #1 414
        'word' => 'signify', 'pl_PL' => '{"verb":[{"tr":"24","wo":"oznaczać"},{"tr":"8","wo":"znaczyć"},{"tr":"8","wo":"wyrazić"}],"examples":[{"what":"verb","row":"be an indication of.","example":"this decision signified a fundamental change in their priorities"}]}',
    ),
    array( // row #1 415
        'word' => 'shrink', 'pl_PL' => '{"verb":[{"tr":"24","wo":"kurczyć"},{"tr":"16","wo":"kurczyć się"},{"tr":"8","wo":"zmaleć"},{"tr":"8","wo":"obumierać"},{"tr":"8","wo":"zbiec się"},{"tr":"8","wo":"zeschnąć się"},{"tr":"8","wo":"stopić się"},{"tr":"8","wo":"stopnieć"},{"tr":"8","wo":"dekatyzować materiał"}],"noun":[{"tr":"24","wo":"skurcz"}],"examples":[{"what":"noun","row":"a clinical psychologist, psychiatrist, or psychotherapist.","example":"you should see a shrink"},{"what":"verb","row":"become or make smaller in size or amount; contract or cause to contract.","example":"the workforce has shrunk to less than a thousand"}]}',
    ),
    array( // row #1 416
        'word' => 'segment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"segment"},{"tr":"16","wo":"odcinek"},{"tr":"8","wo":"wycinek"},{"tr":"8","wo":"wykrawek"},{"tr":"8","wo":"człon"},{"tr":"8","wo":"pierścień"}],"verb":[{"tr":"8","wo":"członkować"},{"tr":"8","wo":"rozczłonkować"}],"examples":[{"what":"noun","row":"each of the parts into which something is or may be divided.","example":"Its genome is made up of 100 million bases divided into six segments , or chromosomes."},{"what":"verb","row":"divide (something) into separate parts or sections.","example":"the unemployed are segmented into two groups"}]}',
    ),
    array( // row #1 417
        'word' => 'secrete', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wydzielać"}],"examples":[{"what":"verb","row":"(of a cell, gland, or organ) produce and discharge (a substance).","example":"insulin is secreted in response to rising levels of glucose in the blood"}]}',
    ),
    array( // row #1 418
        'word' => 'scalar', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"skalarny"}],"noun":[{"tr":"24","wo":"skalar"}],"examples":[{"what":"adjective","row":"(of a quantity) having only magnitude, not direction.","example":"However, mass is atypical scalar quantity and therefore its value will not depend on the polarization of the exciting light that is used to measure it."},{"what":"noun","row":"a scalar quantity.","example":"Together these three loci seem to fit the circumstances under which separate estimates of both mutation scalars and inheritance scalars can be obtained."}]}',
    ),
    array( // row #1 419
        'word' => 'saturate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"nasycić"},{"tr":"8","wo":"impregnować"},{"tr":"8","wo":"przepajać"},{"tr":"8","wo":"napuszczać"},{"tr":"8","wo":"przesycać"}],"examples":[{"what":"verb","row":"cause (something) to become thoroughly soaked with liquid so that no more can be absorbed.","example":"the soil is saturated"},{"what":"adjective","row":"saturated with moisture.","example":null},{"what":"noun","row":"a saturated fat.","example":"Biscuits, buns, cakes and pastries, puddings, and ice cream could be taxed if they raised cholesterol concentrations but exempt if the ratio of polyunsaturates to saturates were more favourable."}]}',
    ),
    array( // row #1 420
        'word' => 'satellite', 'pl_PL' => '{"noun":[{"tr":"16","wo":"satelita"}],"examples":[{"what":"noun","row":"an artificial body placed in orbit around the earth or moon or another planet in order to collect information or for communication.","example":"The crash was recorded by the US Space Command, which tracks around 8000 artificial satellites in Earth orbit."}]}',
    ),
    array( // row #1 421
        'word' => 'sanction', 'pl_PL' => '{"noun":[{"tr":"24","wo":"sankcja"},{"tr":"16","wo":"usankcjonowanie"},{"tr":"8","wo":"zatwierdzenie"},{"tr":"8","wo":"aprobata"},{"tr":"8","wo":"autoryzacja"},{"tr":"8","wo":"konfirmacja"}],"verb":[{"tr":"16","wo":"usankcjonować"},{"tr":"16","wo":"sankcjonować"},{"tr":"8","wo":"zatwierdzać"},{"tr":"8","wo":"aprobować"},{"tr":"8","wo":"konfirmować"}],"examples":[{"what":"noun","row":"a threatened penalty for disobeying a law or rule.","example":"a range of sanctions aimed at deterring insider abuse"},{"what":"verb","row":"give official permission or approval for (an action).","example":"only two treatments have been sanctioned by the Food and Drug Administration"}]}',
    ),
    array( // row #1 422
        'word' => 'saint', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"święty"}],"verb":[{"tr":"8","wo":"kanonizować"}],"examples":[{"what":"noun","row":"a person acknowledged as holy or virtuous and typically regarded as being in heaven after death.","example":"The paintings are scenes from the gospels, the apostles, the saints , images of heaven and hell and seven choirs of angels."},{"what":"verb","row":"formally recognize as a saint; canonize.","example":"In the previous government, there were many ministers who were members of the Opus Dei, which is a very fundamentalist Catholic sect that was created by a Spanish priest who was recently sainted by the Pope."}]}',
    ),
    array( // row #1 423
        'word' => 'rudimentary', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"prymitywny"},{"tr":"16","wo":"rudymentarny"},{"tr":"8","wo":"elementarny"}],"examples":[{"what":"adjective","row":"involving or limited to basic principles.","example":"he received a rudimentary education"}]}',
    ),
    array( // row #1 424
        'word' => 'rotate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"obracać"},{"tr":"24","wo":"obracać się"},{"tr":"8","wo":"krążyć"},{"tr":"8","wo":"okręcać"},{"tr":"8","wo":"wirować"}],"adjective":[{"tr":"8","wo":"kółkowy"}],"examples":[{"what":"verb","row":"move or cause to move in a circle around an axis or center.","example":"the wheel continued to rotate"}]}',
    ),
    array( // row #1 425
        'word' => 'rigor', 'pl_PL' => '{"noun":[{"tr":"24","wo":"rygor"},{"tr":"16","wo":"rygoryzm"},{"tr":"16","wo":"surowość"},{"tr":"16","wo":"rygorystyczność"},{"tr":"8","wo":"dreszcze"},{"tr":"8","wo":"trudy życia"},{"tr":"8","wo":"ostrość klimatu"},{"tr":"8","wo":"reżim"},{"tr":"8","wo":"twardość"},{"tr":"8","wo":"dokładność"}],"examples":[{"what":"noun","row":"the quality of being extremely thorough, exhaustive, or accurate.","example":"his analysis is lacking in rigor"}]}',
    ),
    array( // row #1 426
        'word' => 'revolve', 'pl_PL' => '{"verb":[{"tr":"24","wo":"obiec"},{"tr":"16","wo":"obracać się"},{"tr":"8","wo":"krążyć"},{"tr":"8","wo":"okręcać"},{"tr":"8","wo":"okrążać"},{"tr":"8","wo":"zawirować"}],"examples":[{"what":"verb","row":"move in a circle on a central axis.","example":"overhead, the fan revolved slowly"}]}',
    ),
    array( // row #1 427
        'word' => 'revolt', 'pl_PL' => '{"noun":[{"tr":"24","wo":"bunt"},{"tr":"24","wo":"rewolta"},{"tr":"8","wo":"buntowanie się"},{"tr":"8","wo":"zbuntowanie się"}],"verb":[{"tr":"16","wo":"buntować"},{"tr":"8","wo":"buntować się"},{"tr":"8","wo":"powstać"},{"tr":"8","wo":"zbuntować się"},{"tr":"8","wo":"oburzać się"},{"tr":"8","wo":"burzyć"},{"tr":"8","wo":"podburzać"},{"tr":"8","wo":"budzić odrazę"}],"examples":[{"what":"noun","row":"an attempt to put an end to the authority of a person or body by rebelling.","example":"a countrywide revolt against the central government"},{"what":"verb","row":"rise in rebellion.","example":"the insurgents revolted and had to be suppressed"}]}',
    ),
    array( // row #1 428
        'word' => 'revive', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wskrzesić"},{"tr":"16","wo":"ożywiać"},{"tr":"8","wo":"cucić"},{"tr":"8","wo":"podźwignąć"},{"tr":"8","wo":"ocucić"},{"tr":"8","wo":"wznawiać"},{"tr":"8","wo":"odświeżać"},{"tr":"8","wo":"odnawiać"},{"tr":"8","wo":"ożyć"},{"tr":"8","wo":"odżyć"},{"tr":"8","wo":"otrzeźwić"},{"tr":"8","wo":"odradzać"},{"tr":"8","wo":"regenerować"},{"tr":"8","wo":"odstawić"},{"tr":"8","wo":"reaktywować"}],"examples":[{"what":"verb","row":"restore to life or consciousness.","example":"both men collapsed, but were revived"}]}',
    ),
    array( // row #1 429
        'word' => 'revise', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zrewidować"},{"tr":"8","wo":"rewidować"},{"tr":"8","wo":"przejrzeć"},{"tr":"8","wo":"korygować"}],"examples":[{"what":"noun","row":"a proof including corrections made in an earlier proof.","example":"Amid the chaos sits old-timer Howard, the revise sub-editor, who still remembers the days when journalists knew that Woking wasn\'t in Kent and that battalion has two Ts."},{"what":"verb","row":"reconsider and alter (something) in the light of further evidence.","example":"he had cause to revise his opinion a moment after expressing it"}]}',
    ),
    array( // row #1 430
        'word' => 'reverse', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"odwrotny"},{"tr":"8","wo":"przeciwny"}],"noun":[{"tr":"16","wo":"odwrót"},{"tr":"16","wo":"rewers"},{"tr":"16","wo":"odwrotność"},{"tr":"8","wo":"przeciwieństwo"},{"tr":"8","wo":"przeciwność"},{"tr":"8","wo":"wsteczny bieg"},{"tr":"8","wo":"orzeł"},{"tr":"8","wo":"porażka"},{"tr":"8","wo":"wyłóg"}],"verb":[{"tr":"8","wo":"tańczyć"}],"examples":[{"what":"adjective","row":"going in or turned toward the direction opposite to that previously stated.","example":"the trend appears to be going in the reverse direction"},{"what":"noun","row":"a complete change of direction or action.","example":"the growth actuates a reverse of photosynthesis"},{"what":"verb","row":"move backward.","example":"the truck reversed into the back of a bus"}]}',
    ),
    array( // row #1 431
        'word' => 'reverberate', 'pl_PL' => '{"verb":[{"tr":"16","wo":"rozbrzmiewać"},{"tr":"8","wo":"odbić dźwięk, światło"},{"tr":"8","wo":"rozlec się"},{"tr":"8","wo":"odzyskać"}],"examples":[{"what":"verb","row":"(of a loud noise) be repeated several times as an echo.","example":"her deep booming laugh reverberated around the room"}]}',
    ),
    array( // row #1 432
        'word' => 'retard', 'pl_PL' => '{"verb":[{"tr":"24","wo":"opóźniać"},{"tr":"8","wo":"zwalniać"},{"tr":"8","wo":"hamować"},{"tr":"8","wo":"przewlec"},{"tr":"8","wo":"uwsteczniać"}],"examples":[{"what":"verb","row":"delay or hold back in terms of progress, development, or accomplishment.","example":"his progress was retarded by his limp"},{"what":"noun","row":"a mentally handicapped person (often used as a general term of abuse).","example":null}]}',
    ),
    array( // row #1 433
        'word' => 'retain', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zachować"},{"tr":"8","wo":"zatrzymać w miejscu"},{"tr":"8","wo":"angażować"},{"tr":"8","wo":"przechować"},{"tr":"8","wo":"pozostawać w posiadaniu"}],"examples":[{"what":"verb","row":"continue to have (something); keep possession of.","example":"built in 1830, the house retains many of its original features"}]}',
    ),
    array( // row #1 434
        'word' => 'restrict', 'pl_PL' => '{"verb":[{"tr":"24","wo":"ograniczać"},{"tr":"8","wo":"ścieśniać"},{"tr":"8","wo":"zwężać"}],"examples":[{"what":"verb","row":"put a limit on; keep under control.","example":"some roads may have to be closed at peak times to restrict the number of visitors"}]}',
    ),
    array( // row #1 435
        'word' => 'restore', 'pl_PL' => '{"verb":[{"tr":"16","wo":"przywracać"},{"tr":"16","wo":"odbudować"},{"tr":"8","wo":"zwracać mienie"},{"tr":"8","wo":"odzyskać coś straconego"},{"tr":"8","wo":"restytuować"},{"tr":"8","wo":"zrekonstruować"},{"tr":"8","wo":"odremontować"},{"tr":"8","wo":"odrestaurować"},{"tr":"8","wo":"wyrestaurować"},{"tr":"8","wo":"odświeżać"},{"tr":"8","wo":"odnawiać"},{"tr":"8","wo":"wznawiać"},{"tr":"8","wo":"wyleczyć"},{"tr":"8","wo":"odzyskać"},{"tr":"8","wo":"wykurować się"}],"examples":[{"what":"verb","row":"bring back (a previous right, practice, custom, or situation); reinstate.","example":"the government restored confidence in the housing market"}]}',
    ),
    array( // row #1 436
        'word' => 'residue', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pozostałość"},{"tr":"16","wo":"reszta"},{"tr":"16","wo":"osad"},{"tr":"8","wo":"produkt"},{"tr":"8","wo":"wywar"}],"examples":[{"what":"noun","row":"a small amount of something that remains after the main part has gone or been taken or used.","example":"Even when canned vegetables are rinsed small amounts of the residue remain."}]}',
    ),
    array( // row #1 437
        'word' => 'resident', 'pl_PL' => '{"noun":[{"tr":"16","wo":"rezydent"},{"tr":"8","wo":"stały mieszkaniec"}],"adjective":[{"tr":"8","wo":"przebywający stale"},{"tr":"8","wo":"zasiedziały"},{"tr":"8","wo":"osiadły"},{"tr":"8","wo":"przynależny"}],"examples":[{"what":"adjective","row":"living somewhere on a long-term basis.","example":"he has been resident in Brazil for a long time"},{"what":"noun","row":"a person who lives somewhere permanently or on a long-term basis.","example":"Citizens or permanent residents of other countries must have a valid passport and\\/or a valid visitor\'s visa."}]}',
    ),
    array( // row #1 438
        'word' => 'reservoir', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zbiornik"},{"tr":"16","wo":"rezerwuar"},{"tr":"8","wo":"basen"}],"examples":[{"what":"noun","row":"a large natural or artificial lake used as a source of water supply.","example":"Some hover above fresh water lakes or reservoirs ."}]}',
    ),
    array( // row #1 439
        'word' => 'repudiate', 'pl_PL' => '{"verb":[{"tr":"16","wo":"rozwodzić się"},{"tr":"16","wo":"odrzucać"},{"tr":"8","wo":"wypierać się"},{"tr":"8","wo":"nie uznać czyjejś władzy"},{"tr":"8","wo":"odżegnać się"},{"tr":"8","wo":"odtrącać"}],"examples":[{"what":"verb","row":"refuse to accept or be associated with.","example":"she has repudiated policies associated with previous party leaders"}]}',
    ),
    array( // row #1 440
        'word' => 'repress', 'pl_PL' => '{"verb":[{"tr":"24","wo":"stłumić"},{"tr":"8","wo":"pohamować"},{"tr":"8","wo":"poskramiać"}],"examples":[{"what":"verb","row":"subdue (someone or something) by force.","example":"the uprisings were repressed"}]}',
    ),
    array( // row #1 441
        'word' => 'rely', 'pl_PL' => '{"verb":[{"tr":"24","wo":"polegać"},{"tr":"8","wo":"polegać na kimś czymś"},{"tr":"8","wo":"zaufać"},{"tr":"8","wo":"wierzyć"},{"tr":"8","wo":"liczyć na kogoś lub coś"},{"tr":"8","wo":"zdać się"},{"tr":"8","wo":"oglądać się"},{"tr":"8","wo":"spuścić się"}],"examples":[{"what":"verb","row":"depend on with full trust or confidence.","example":"I know I can rely on your discretion"}]}',
    ),
    array( // row #1 442
        'word' => 'reluctance', 'pl_PL' => '{"noun":[{"tr":"24","wo":"niechęć"},{"tr":"8","wo":"wstręt"},{"tr":"8","wo":"ociąganie się"},{"tr":"8","wo":"oporność"}],"examples":[{"what":"noun","row":"unwillingness or disinclination to do something.","example":"she sensed his reluctance to continue"}]}',
    ),
    array( // row #1 443
        'word' => 'reject', 'pl_PL' => '{"verb":[{"tr":"24","wo":"odrzucać"},{"tr":"8","wo":"odepchnąć"},{"tr":"8","wo":"nie przyjąć"},{"tr":"8","wo":"eliminować"}],"noun":[{"tr":"8","wo":"odrzucony kandydat"},{"tr":"8","wo":"wybrakowany towar"},{"tr":"8","wo":"buble"}],"examples":[{"what":"noun","row":"a person or thing dismissed as failing to meet standards or satisfy tastes.","example":"some of the team\'s rejects have gone on to prove themselves in championships"},{"what":"verb","row":"dismiss as inadequate, inappropriate, or not to one\'s taste.","example":"union negotiators rejected a 1.5 percent pay increase"}]}',
    ),
    array( // row #1 444
        'word' => 'reinforce', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wzmacniać"},{"tr":"8","wo":"zasilać"},{"tr":"8","wo":"popierać"},{"tr":"8","wo":"wspierać"},{"tr":"8","wo":"podmurować"}],"examples":[{"what":"verb","row":"strengthen or support, especially with additional personnel or material.","example":"paratroopers were sent to reinforce the troops already in the area"}]}',
    ),
    array( // row #1 445
        'word' => 'reign', 'pl_PL' => '{"verb":[{"tr":"24","wo":"królować"},{"tr":"24","wo":"panować"},{"tr":"8","wo":"władać"},{"tr":"8","wo":"grasować"}],"noun":[{"tr":"24","wo":"rządy"},{"tr":"8","wo":"panowanie króla"},{"tr":"8","wo":"władanie"}],"examples":[{"what":"noun","row":"the period during which a sovereign rules.","example":"the original chapel was built in the reign of Charles I"},{"what":"verb","row":"hold royal office; rule as king or queen.","example":"Queen Elizabeth reigns over the UK"}]}',
    ),
    array( // row #1 446
        'word' => 'refute', 'pl_PL' => '{"verb":[{"tr":"24","wo":"obalić"},{"tr":"8","wo":"zbić"},{"tr":"8","wo":"odeprzeć zarzuty"},{"tr":"8","wo":"wykazać błędność twierdzeń"}],"examples":[{"what":"verb","row":"prove (a statement or theory) to be wrong or false; disprove.","example":"these claims have not been convincingly refuted"}]}',
    ),
    array( // row #1 447
        'word' => 'recur', 'pl_PL' => '{"verb":[{"tr":"16","wo":"powtarzać się"}],"examples":[{"what":"verb","row":"occur again, periodically, or repeatedly.","example":"when the symptoms recurred, the doctor diagnosed something different"}]}',
    ),
    array( // row #1 448
        'word' => 'rectangle', 'pl_PL' => '{"noun":[{"tr":"24","wo":"prostokąt"}],"examples":[{"what":"noun","row":"a plane figure with four straight sides and four right angles, especially one with unequal adjacent sides, in contrast to a square.","example":"The types of shapes for which the area is calculated include triangles, rectangles , circles, trapeziums."}]}',
    ),
    array( // row #1 449
        'word' => 'rebel', 'pl_PL' => '{"noun":[{"tr":"24","wo":"buntownik"},{"tr":"8","wo":"powstaniec"},{"tr":"8","wo":"rebeliant"}],"verb":[{"tr":"16","wo":"buntować się"},{"tr":"8","wo":"buntować kogoś"}],"adjective":[{"tr":"16","wo":"buntowniczy"},{"tr":"8","wo":"powstańczy"}],"examples":[{"what":"noun","row":"a person who rises in opposition or armed resistance against an established government or ruler.","example":"Tory rebels"},{"what":"verb","row":"rise in opposition or armed resistance to an established government or ruler.","example":"the Earl of Pembroke subsequently rebelled against Henry III"}]}',
    ),
    array( // row #1 450
        'word' => 'react', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zareagować"},{"tr":"8","wo":"oddziaływać"},{"tr":"8","wo":"przeciwdziałać"}],"examples":[{"what":"verb","row":"respond or behave in a particular way in response to something.","example":"he reacted angrily to the news of his dismissal"}]}',
    ),
    array( // row #1 451
        'word' => 'radius', 'pl_PL' => '{"noun":[{"tr":"24","wo":"promień"},{"tr":"16","wo":"zasięg"},{"tr":"8","wo":"kość promieniowa"}],"examples":[{"what":"noun","row":"a straight line from the center to the circumference of a circle or sphere.","example":"Thus, the area of a circle is equal to half of the product of the radius and the circumference."}]}',
    ),
    array( // row #1 452
        'word' => 'quote', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zacytować"},{"tr":"16","wo":"przytaczać"},{"tr":"16","wo":"cytować"},{"tr":"8","wo":"podać cenę"},{"tr":"8","wo":"notować kurs"},{"tr":"8","wo":"wymieniać"},{"tr":"8","wo":"powołać się"}],"examples":[{"what":"noun","row":"a quotation from a text or speech.","example":"a quote from Wordsworth"},{"what":"verb","row":"repeat or copy out (a group of words from a text or speech), typically with an indication that one is not the original author or speaker.","example":"he quoted a passage from the Psalms"}]}',
    ),
    array( // row #1 453
        'word' => 'publish', 'pl_PL' => '{"verb":[{"tr":"24","wo":"publikować"},{"tr":"24","wo":"opublikować"},{"tr":"8","wo":"ogłosić"},{"tr":"8","wo":"rozpisać"},{"tr":"8","wo":"wydać"},{"tr":"8","wo":"wydrukować"}],"examples":[{"what":"verb","row":"(of an author or company) prepare and issue (a book, journal, piece of music, or other work) for public sale.","example":"we publish practical reference books"}]}',
    ),
    array( // row #1 454
        'word' => 'psychology', 'pl_PL' => '{"noun":[{"tr":"24","wo":"psychologia"}],"examples":[{"what":"noun","row":"the scientific study of the human mind and its functions, especially those affecting behavior in a given context.","example":"He studied Jungian and transpersonal psychology and took a special interest in allergic diseases."}]}',
    ),
    array( // row #1 455
        'word' => 'prudence', 'pl_PL' => '{"noun":[{"tr":"24","wo":"roztropność"},{"tr":"24","wo":"ostrożność"},{"tr":"16","wo":"rozwaga"}],"examples":[{"what":"noun","row":"the quality of being prudent; cautiousness.","example":"we need to exercise prudence in such important matters"}]}',
    ),
    array( // row #1 456
        'word' => 'provoke', 'pl_PL' => '{"verb":[{"tr":"24","wo":"prowokować"},{"tr":"24","wo":"sprowokować"},{"tr":"16","wo":"powodować"},{"tr":"8","wo":"pobudzać"},{"tr":"8","wo":"jątrzyć"},{"tr":"8","wo":"doprowadzać"},{"tr":"8","wo":"drażnić"},{"tr":"8","wo":"rozdrażniać"},{"tr":"8","wo":"rozgniewać"},{"tr":"8","wo":"rozzłościć"},{"tr":"8","wo":"dociąć"},{"tr":"8","wo":"dosolić"},{"tr":"8","wo":"niecierpliwić"},{"tr":"8","wo":"spowodować"},{"tr":"8","wo":"inspirować"}],"examples":[{"what":"verb","row":"stimulate or give rise to (a reaction or emotion, typically a strong or unwelcome one) in someone.","example":"the decision provoked a storm of protest from civil rights organizations"}]}',
    ),
    array( // row #1 457
        'word' => 'province', 'pl_PL' => '{"noun":[{"tr":"24","wo":"województwo"},{"tr":"24","wo":"prowincja"},{"tr":"8","wo":"gubernatorstwo"},{"tr":"8","wo":"dziedzina"},{"tr":"8","wo":"dzielnica"},{"tr":"8","wo":"kraina"},{"tr":"8","wo":"zakres"},{"tr":"8","wo":"resort"},{"tr":"8","wo":"kompetencja"}],"examples":[{"what":"noun","row":"a principal administrative division of certain countries or empires.","example":"Chengdu, capital of Sichuan province"}]}',
    ),
    array( // row #1 458
        'word' => 'prosper', 'pl_PL' => '{"verb":[{"tr":"24","wo":"prosperować"},{"tr":"8","wo":"rozwijać się pomyślnie"},{"tr":"8","wo":"kwitnąć"},{"tr":"8","wo":"przynieść powodzenie"}],"examples":[{"what":"verb","row":"succeed in material terms; be financially successful.","example":"his business prospered"}]}',
    ),
    array( // row #1 459
        'word' => 'proprietor', 'pl_PL' => '{"noun":[{"tr":"24","wo":"właściciel"},{"tr":"8","wo":"posiadacz"}],"examples":[{"what":"noun","row":"the owner of a business, or a holder of property.","example":"Its proprietors have managed to fashion a sow\'s ear out of a silk purse."}]}',
    ),
    array( // row #1 460
        'word' => 'propensity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"skłonność"},{"tr":"8","wo":"pociąg do czegoś"},{"tr":"8","wo":"pociąg"},{"tr":"8","wo":"popęd"}],"examples":[{"what":"noun","row":"an inclination or natural tendency to behave in a particular way.","example":"a propensity for violence"}]}',
    ),
    array( // row #1 461
        'word' => 'propagate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"propagować"},{"tr":"16","wo":"rozprzestrzeniać"},{"tr":"8","wo":"rozkrzewiać"},{"tr":"8","wo":"rozmnażać"},{"tr":"8","wo":"mnożyć"},{"tr":"8","wo":"rozpowszechniać"},{"tr":"8","wo":"rozszerzać"},{"tr":"8","wo":"szerzyć"},{"tr":"8","wo":"spropagować"},{"tr":"8","wo":"rozsiewać"},{"tr":"8","wo":"rozmnażać się"},{"tr":"8","wo":"rozprzestrzeniać się"},{"tr":"8","wo":"rozradzać się"}],"examples":[{"what":"verb","row":"breed specimens of (a plant, animal, etc.) by natural processes from the parent stock.","example":"try propagating your own houseplants from cuttings"}]}',
    ),
    array( // row #1 462
        'word' => 'prohibit', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zakazać"},{"tr":"16","wo":"zabraniać"},{"tr":"8","wo":"przeszkadzać w zrobieniu czegoś"}],"examples":[{"what":"verb","row":"formally forbid (something) by law, rule, or other authority.","example":"laws prohibiting cruelty to animals"}]}',
    ),
    array( // row #1 463
        'word' => 'proclaim', 'pl_PL' => '{"verb":[{"tr":"24","wo":"głosić"},{"tr":"16","wo":"ogłosić"},{"tr":"16","wo":"proklamować"},{"tr":"8","wo":"obwieścić"},{"tr":"8","wo":"okrzyczeć"},{"tr":"8","wo":"trąbić"},{"tr":"8","wo":"oświadczać"},{"tr":"8","wo":"świadczyć"},{"tr":"8","wo":"stanowić"},{"tr":"8","wo":"wprowadzać ograniczenia prawne"}],"examples":[{"what":"verb","row":"announce officially or publicly.","example":"the joint manifesto proclaimed that imperialism would be the coalition\'s chief objective"}]}',
    ),
    array( // row #1 464
        'word' => 'proceed', 'pl_PL' => '{"verb":[{"tr":"24","wo":"postępować"},{"tr":"24","wo":"kontynuować"},{"tr":"16","wo":"przystąpić"},{"tr":"8","wo":"mówić dalej"},{"tr":"8","wo":"przechodzić"},{"tr":"8","wo":"przebiec"},{"tr":"8","wo":"iść naprzód"},{"tr":"8","wo":"zaskarżyć"},{"tr":"8","wo":"wydobyć się"}],"examples":[{"what":"verb","row":"begin or continue a course of action.","example":"we can proceed with our investigation"}]}',
    ),
    array( // row #1 465
        'word' => 'priority', 'pl_PL' => '{"noun":[{"tr":"24","wo":"priorytet"},{"tr":"24","wo":"pierwszeństwo"},{"tr":"8","wo":"starszeństwo"}],"examples":[{"what":"noun","row":"a thing that is regarded as more important than another.","example":"housework didn\'t figure high on her list of priorities"}]}',
    ),
    array( // row #1 466
        'word' => 'prevail', 'pl_PL' => '{"verb":[{"tr":"16","wo":"panować"},{"tr":"16","wo":"zapanować"},{"tr":"16","wo":"dominować"},{"tr":"8","wo":"zwyciężać"},{"tr":"8","wo":"tryumfować"},{"tr":"8","wo":"nakłaniać"},{"tr":"8","wo":"wymóc"},{"tr":"8","wo":"grasować"},{"tr":"8","wo":"królować"},{"tr":"8","wo":"rozpanoszyć się"},{"tr":"8","wo":"panoszyć się"},{"tr":"8","wo":"wpłynąć"}],"examples":[{"what":"verb","row":"prove more powerful than opposing forces; be victorious.","example":"it is hard for logic to prevail over emotion"}]}',
    ),
    array( // row #1 467
        'word' => 'presume', 'pl_PL' => '{"verb":[{"tr":"24","wo":"przypuszczać"},{"tr":"8","wo":"domyślać"},{"tr":"8","wo":"sądzić"},{"tr":"8","wo":"domniemać"},{"tr":"8","wo":"ośmielać się"},{"tr":"8","wo":"wykorzystać"}],"examples":[{"what":"verb","row":"suppose that something is the case on the basis of probability.","example":"I presumed that the man had been escorted from the building"}]}',
    ),
    array( // row #1 468
        'word' => 'preposition', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przyimek"},{"tr":"16","wo":"prepozycja"},{"tr":"8","wo":"pozór"}],"examples":[{"what":"noun","row":"a word governing, and usually preceding, a noun or pronoun and expressing a relation to another word or element in the clause, as in âthe man on the platform,â âshe arrived after dinner,â âwhat did you do it for ?â.","example":"It\'s quite different from English, too, in that it puts the verb at the end of the sentence and uses postpositions instead of prepositions ."}]}',
    ),
    array( // row #1 469
        'word' => 'premise', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przesłanka"}],"verb":[{"tr":"8","wo":"poprzedzać"}],"examples":[{"what":"noun","row":"a previous statement or proposition from which another is inferred or follows as a conclusion.","example":"if the premise is true, then the conclusion must be true"},{"what":"verb","row":"base an argument, theory, or undertaking on.","example":"the reforms were premised on our findings"}]}',
    ),
    array( // row #1 470
        'word' => 'precede', 'pl_PL' => '{"verb":[{"tr":"24","wo":"poprzedzać"},{"tr":"8","wo":"mieć pierwszeństwo"}],"examples":[{"what":"verb","row":"come before (something) in time.","example":"a gun battle had preceded the explosions"}]}',
    ),
    array( // row #1 471
        'word' => 'pragmatic', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pragmatyczny"},{"tr":"8","wo":"wścibski"},{"tr":"8","wo":"naprzykrzony"}],"examples":[{"what":"adjective","row":"dealing with things sensibly and realistically in a way that is based on practical rather than theoretical considerations.","example":"a pragmatic approach to politics"}]}',
    ),
    array( // row #1 472
        'word' => 'postulate', 'pl_PL' => '{"noun":[{"tr":"24","wo":"postulat"}],"verb":[{"tr":"24","wo":"postulować"},{"tr":"8","wo":"domagać się"}],"examples":[{"what":"noun","row":"a thing suggested or assumed as true as the basis for reasoning, discussion, or belief.","example":"perhaps the postulate of Babylonian influence on Greek astronomy is incorrect"},{"what":"verb","row":"suggest or assume the existence, fact, or truth of (something) as a basis for reasoning, discussion, or belief.","example":"his theory postulated a rotatory movement for hurricanes"}]}',
    ),
    array( // row #1 473
        'word' => 'pollution', 'pl_PL' => '{"noun":[{"tr":"16","wo":"skażenie"},{"tr":"8","wo":"skażenia przemysłowe"},{"tr":"8","wo":"plugawienie"},{"tr":"8","wo":"profanacja"},{"tr":"8","wo":"polucja"},{"tr":"8","wo":"zmaza nocna"}],"examples":[{"what":"noun","row":"the presence in or introduction into the environment of a substance or thing that has harmful or poisonous effects.","example":"the level of pollution in the air is rising"}]}',
    ),
    array( // row #1 474
        'word' => 'pole', 'pl_PL' => '{"noun":[{"tr":"24","wo":"biegun"},{"tr":"24","wo":"słup"},{"tr":"24","wo":"maszt"},{"tr":"8","wo":"tyczka"},{"tr":"8","wo":"żerdź"},{"tr":"8","wo":"drąg"},{"tr":"8","wo":"dyszel"}],"verb":[{"tr":"8","wo":"tyczyć"}],"examples":[{"what":"noun","row":"a long, slender, rounded piece of wood or metal, typically used with one end placed in the ground as a support for something.","example":"a tent pole"},{"what":"verb","row":"propel (a boat) by pushing a pole against the bottom of a river, canal, or lake.","example":"If, for example, after grounding the operator tries to power off instead of calling for assistance or poling the boat to deeper water, it will create a âblow holeâ in the grass bed about the size of the hull."}]}',
    ),
    array( // row #1 475
        'word' => 'plead', 'pl_PL' => '{"verb":[{"tr":"16","wo":"błagać"},{"tr":"8","wo":"orędować"},{"tr":"8","wo":"wstawić się za kimś"},{"tr":"8","wo":"podać jako usprawiedliwienie"},{"tr":"8","wo":"zasłaniać się"},{"tr":"8","wo":"bronić"}],"examples":[{"what":"verb","row":"make an emotional appeal.","example":"they pleaded with Carol to come home again"}]}',
    ),
    array( // row #1 476
        'word' => 'pest', 'pl_PL' => '{"noun":[{"tr":"16","wo":"plaga"},{"tr":"16","wo":"szkodnik"},{"tr":"16","wo":"zaraza"},{"tr":"8","wo":"pomór"},{"tr":"8","wo":"utrapienie"}],"examples":[{"what":"noun","row":"a destructive insect or other animal that attacks crops, food, livestock, etc..","example":"The biological control of insect pests by using spiders as predators is being studied in four districts of Kerala."}]}',
    ),
    array( // row #1 477
        'word' => 'persist', 'pl_PL' => '{"verb":[{"tr":"16","wo":"trwać"},{"tr":"8","wo":"wytrwać"},{"tr":"8","wo":"robić coś nieustannie"},{"tr":"8","wo":"upierać się"},{"tr":"8","wo":"obstawać przy czymś"}],"examples":[{"what":"verb","row":"continue firmly or obstinately in an opinion or a course of action in spite of difficulty, opposition, or failure.","example":"the minority of drivers who persist in drinking"}]}',
    ),
    array( // row #1 478
        'word' => 'perpetual', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"wieczny"},{"tr":"16","wo":"wieczysty"},{"tr":"8","wo":"nieustanny"},{"tr":"8","wo":"bezustanny"},{"tr":"8","wo":"ciągły"},{"tr":"8","wo":"permanentny"}],"examples":[{"what":"adjective","row":"never ending or changing.","example":"deep caves in perpetual darkness"}]}',
    ),
    array( // row #1 479
        'word' => 'perpetrate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"popełnić"},{"tr":"8","wo":"przeskrobać"}],"examples":[{"what":"verb","row":"carry out or commit (a harmful, illegal, or immoral action).","example":"a crime has been perpetrated against a sovereign state"}]}',
    ),
    array( // row #1 480
        'word' => 'perpendicular', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"prostopadły"},{"tr":"8","wo":"pionowy"}],"noun":[{"tr":"8","wo":"pion"},{"tr":"8","wo":"linia prostopadła"}],"examples":[{"what":"adjective","row":"at an angle of 90Â° to a given line, plane, or surface.","example":"dormers and gables that extend perpendicular to the main roofline"},{"what":"noun","row":"a straight line at an angle of 90Â° to a given line, plane, or surface.","example":"at each division, draw a perpendicular representing the surface line"}]}',
    ),
    array( // row #1 481
        'word' => 'pendulum', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wahadło"}],"examples":[{"what":"noun","row":"a weight hung from a fixed point so that it can swing freely backward and forward, especially a rod with a weight at the end that regulates the mechanism of a clock.","example":"If I then release the weight the pendulum begins to swing."}]}',
    ),
    array( // row #1 482
        'word' => 'peasant', 'pl_PL' => '{"noun":[{"tr":"24","wo":"chłop"},{"tr":"24","wo":"wieśniak"},{"tr":"16","wo":"rolnik"},{"tr":"8","wo":"włościanin"},{"tr":"8","wo":"prostak"}],"adjective":[{"tr":"8","wo":"włościański"}],"examples":[{"what":"noun","row":"a poor farmer of low social status who owns or rents a small piece of land for cultivation (chiefly in historical use or with reference to subsistence farming in poorer countries).","example":"As a result, poor peasants might find themselves paying their dues to a wealthy peasant, and never see the lord at all."}]}',
    ),
    array( // row #1 483
        'word' => 'passive', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pasywny"},{"tr":"16","wo":"bierny"},{"tr":"8","wo":"bezwolny"},{"tr":"8","wo":"bezprocentowy"}],"examples":[{"what":"adjective","row":"accepting or allowing what happens or what others do, without active response or resistance.","example":"the women were portrayed as passive victims"},{"what":"noun","row":"a passive form of a verb.","example":"It was thought to be characterized by a fairly high proportion of such features as subordinate clauses, adjectives, the pronoun I and passives ."}]}',
    ),
    array( // row #1 484
        'word' => 'parliament', 'pl_PL' => '{"noun":[{"tr":"24","wo":"parlament"}],"examples":[{"what":"noun","row":"(in the UK) the highest legislature, consisting of the sovereign, the House of Lords, and the House of Commons.","example":"the Secretary of State will lay proposals before Parliament"}]}',
    ),
    array( // row #1 485
        'word' => 'parenthesis', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nawias"},{"tr":"8","wo":"parenteza"}],"examples":[{"what":"noun","row":"a word, clause, or sentence inserted as an explanation or afterthought into a passage that is grammatically complete without it, in writing usually marked off by curved brackets, dashes, or commas.","example":"The practice in writing and print of using a set of marks to regulate texts and clarify their meanings, principally by separating or linking words, phrases, and clauses, and by indicating parentheses and asides."}]}',
    ),
    array( // row #1 486
        'word' => 'overlap', 'pl_PL' => '{"noun":[{"tr":"16","wo":"zakładka"},{"tr":"8","wo":"nasunięcie"},{"tr":"8","wo":"okap"},{"tr":"8","wo":"nasunięcie się warstw na siebie"}],"verb":[{"tr":"16","wo":"zachodzić"},{"tr":"8","wo":"zakładać się"}],"examples":[{"what":"noun","row":"a part or amount that overlaps.","example":"an overlap of about half an inch"},{"what":"verb","row":"extend over so as to cover partly.","example":"the canopy overlaps the house roof at one end"}]}',
    ),
    array( // row #1 487
        'word' => 'oscillate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"oscylować"},{"tr":"16","wo":"drgać"},{"tr":"8","wo":"balansować"},{"tr":"8","wo":"chodzić"}],"examples":[{"what":"verb","row":"move or swing back and forth at a regular speed.","example":"a pendulum oscillates about its lowest point"}]}',
    ),
    array( // row #1 488
        'word' => 'orbit', 'pl_PL' => '{"noun":[{"tr":"24","wo":"orbita"},{"tr":"8","wo":"oczodół"}],"verb":[{"tr":"16","wo":"orbitować"}],"examples":[{"what":"noun","row":"the curved path of a celestial object or spacecraft around a star, planet, or moon, especially a periodic elliptical revolution.","example":"He therefore accepted Kepler\'s theory of elliptical orbits for the planets and tested Kepler\'s laws by direct observation."},{"what":"verb","row":"(of a celestial object or spacecraft) move in orbit around (a star, planet, or moon).","example":"Mercury orbits the Sun"}]}',
    ),
    array( // row #1 489
        'word' => 'option', 'pl_PL' => '{"noun":[{"tr":"24","wo":"opcja"},{"tr":"8","wo":"wolny wybór"},{"tr":"8","wo":"alternatywa"},{"tr":"8","wo":"dowolność"}],"examples":[{"what":"noun","row":"a thing that is or may be chosen.","example":"choose the cheapest options for supplying energy"},{"what":"verb","row":"buy or sell an option on (something).","example":"his second script will have been optioned by the time you read this"}]}',
    ),
    array( // row #1 490
        'word' => 'odor', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zapach"},{"tr":"16","wo":"woń"},{"tr":"8","wo":"posmak"},{"tr":"8","wo":"ślad"},{"tr":"8","wo":"reputacja"}],"examples":[{"what":"noun","row":"a distinctive smell, especially an unpleasant one.","example":"the odor of cigarette smoke"}]}',
    ),
    array( // row #1 491
        'word' => 'occupy', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zająć"},{"tr":"16","wo":"okupować"},{"tr":"8","wo":"mieć w posiadaniu"},{"tr":"8","wo":"zamieszkać"},{"tr":"8","wo":"zaprzątać"}],"examples":[{"what":"verb","row":"reside or have one\'s place of business in (a building).","example":"the apartment she occupies in Manhattan"}]}',
    ),
    array( // row #1 492
        'word' => 'obsolete', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"przestarzały"},{"tr":"8","wo":"zarzucony"},{"tr":"8","wo":"niemodny"},{"tr":"8","wo":"przeżyty"},{"tr":"8","wo":"przedpotopowy"},{"tr":"8","wo":"zdezaktualizowany"},{"tr":"8","wo":"zeszłowieczny"},{"tr":"8","wo":"archaiczny"}],"examples":[{"what":"adjective","row":"no longer produced or used; out of date.","example":"the disposal of old and obsolete machinery"},{"what":"verb","row":"cause (a product or idea) to be or become obsolete by replacing it with something new.","example":"we\'re trying to stimulate the business by obsoleting last year\'s designs"}]}',
    ),
    array( // row #1 493
        'word' => 'oblige', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zobowiązać"},{"tr":"8","wo":"zmusić"},{"tr":"8","wo":"przymusić"},{"tr":"8","wo":"obowiązywać"},{"tr":"8","wo":"nakazać"},{"tr":"8","wo":"przysłużyć się"}],"examples":[{"what":"verb","row":"make (someone) legally or morally bound to an action or course of action.","example":"doctors are obliged by law to keep patients alive while there is a chance of recovery"}]}',
    ),
    array( // row #1 494
        'word' => 'nutrient', 'pl_PL' => '{"noun":[{"tr":"16","wo":"odżywka"}],"adjective":[{"tr":"8","wo":"pożywny"}],"examples":[{"what":"noun","row":"a substance that provides nourishment essential for growth and the maintenance of life.","example":"fish is a source of many important nutrients, including protein, vitamins, and minerals"}]}',
    ),
    array( // row #1 495
        'word' => 'norm', 'pl_PL' => '{"noun":[{"tr":"24","wo":"norma"},{"tr":"16","wo":"standard"},{"tr":"8","wo":"wzorzec"},{"tr":"8","wo":"normatyw"}],"examples":[{"what":"noun","row":"something that is usual, typical, or standard.","example":"this system has been the norm in Germany for decades"},{"what":"abbreviation","row":"normal.","example":null}]}',
    ),
    array( // row #1 496
        'word' => 'niche', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nisza"},{"tr":"16","wo":"wnęka"},{"tr":"8","wo":"komórka"},{"tr":"8","wo":"kąt"}],"examples":[{"what":"noun","row":"a shallow recess, especially one in a wall to display a statue or other ornament.","example":"Zeno built a tall wall with about 20 niches for statues of gods and goddesses behind the stage."},{"what":"verb","row":"place or position (something) in a niche.","example":"Honey is not as big as Essence, Heart & Soul is not as big as Essence, but a combined circulation of 500,000 is big enough where it has to be looked at, and it\'s also niched enough where advertisers can make more efficient buys for their targets."}]}',
    ),
    array( // row #1 497
        'word' => 'nerve', 'pl_PL' => '{"noun":[{"tr":"24","wo":"nerw"},{"tr":"16","wo":"tupet"},{"tr":"8","wo":"energia"},{"tr":"8","wo":"odwaga"},{"tr":"8","wo":"żyłka"},{"tr":"8","wo":"fibra"}],"adjective":[{"tr":"16","wo":"nerwowy"}],"verb":[{"tr":"8","wo":"ośmielać"}],"examples":[{"what":"noun","row":"(in the body) a whitish fiber or bundle of fibers that transmits impulses of sensation to the brain or spinal cord, and impulses from these to the muscles and organs.","example":"the optic nerve"},{"what":"verb","row":"brace oneself mentally to face a demanding situation.","example":"she nerved herself to enter the room"}]}',
    ),
    array( // row #1 498
        'word' => 'morphology', 'pl_PL' => '{"noun":[{"tr":"24","wo":"morfologia"}],"examples":[{"what":"noun","row":"the study of the forms of things, in particular.","example":null}]}',
    ),
    array( // row #1 499
        'word' => 'monarch', 'pl_PL' => '{"noun":[{"tr":"24","wo":"monarcha"},{"tr":"8","wo":"król"},{"tr":"8","wo":"panujący"}],"examples":[{"what":"noun","row":"a sovereign head of state, especially a king, queen, or emperor.","example":"Since then I have described the Queen as our monarch or sovereign, and the governor-general as our head of state."}]}',
    ),
    array( // row #1 500
        'word' => 'momentum', 'pl_PL' => '{"noun":[{"tr":"24","wo":"pęd"},{"tr":"16","wo":"impet"},{"tr":"16","wo":"rozmach"},{"tr":"8","wo":"rozpęd"}],"examples":[{"what":"noun","row":"the quantity of motion of a moving body, measured as a product of its mass and velocity.","example":"In contrast, the active medium in the mechanical laser is the intrinsic angular momenta of electrons and nuclei."}]}',
    ),
    array( // row #1 501
        'word' => 'molecule', 'pl_PL' => '{"noun":[{"tr":"24","wo":"cząsteczka"},{"tr":"16","wo":"molekuła"},{"tr":"8","wo":"drobina"}],"examples":[{"what":"noun","row":"a group of atoms bonded together, representing the smallest fundamental unit of a chemical compound that can take part in a chemical reaction.","example":"It works by affecting a molecule called nitric oxide, which expands blood vessels."}]}',
    ),
    array( // row #1 502
        'word' => 'moist', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wilgotny"},{"tr":"8","wo":"mokrawy"},{"tr":"8","wo":"zawilgły"}],"examples":[{"what":"adjective","row":"slightly wet; damp or humid.","example":"the air was moist and heavy"}]}',
    ),
    array( // row #1 503
        'word' => 'modify', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zmodyfikować"},{"tr":"24","wo":"modyfikować"},{"tr":"16","wo":"zmieniać"},{"tr":"8","wo":"przekształcać"},{"tr":"8","wo":"przeinaczać"},{"tr":"8","wo":"wyinaczać"},{"tr":"8","wo":"przeobrazić"},{"tr":"8","wo":"odmieniać"}],"examples":[{"what":"verb","row":"make partial or minor changes to (something), typically so as to improve it or to make it less extreme.","example":"she may be prepared to modify her views"}]}',
    ),
    array( // row #1 504
        'word' => 'migrate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"migrować"},{"tr":"8","wo":"wędrować"},{"tr":"8","wo":"emigrować"},{"tr":"8","wo":"koczować"}],"examples":[{"what":"verb","row":"(of an animal, typically a bird or fish) move from one region or habitat to another, especially regularly according to the seasons.","example":"as autumn arrives, the birds migrate south"}]}',
    ),
    array( // row #1 505
        'word' => 'microscope', 'pl_PL' => '{"noun":[{"tr":"24","wo":"mikroskop"}],"examples":[{"what":"noun","row":"an optical instrument used for viewing very small objects, such as mineral samples or animal or plant cells, typically magnified several hundred times.","example":"The paper shows that positrons can see defects better than either optical or electron beam microscopes ."}]}',
    ),
    array( // row #1 506
        'word' => 'metaphor', 'pl_PL' => '{"noun":[{"tr":"24","wo":"metafora"},{"tr":"8","wo":"przenośnia"}],"examples":[{"what":"noun","row":"a figure of speech in which a word or phrase is applied to an object or action to which it is not literally applicable.","example":"âI had fallen through a trapdoor of depression,â said Mark, who was fond of theatrical metaphors"}]}',
    ),
    array( // row #1 507
        'word' => 'metabolism', 'pl_PL' => '{"noun":[{"tr":"24","wo":"metabolizm"}],"examples":[{"what":"noun","row":"the chemical processes that occur within a living organism in order to maintain life.","example":"Altered carbohydrate, fat, and protein metabolism leads to a catabolic state."}]}',
    ),
    array( // row #1 508
        'word' => 'matrix', 'pl_PL' => '{"noun":[{"tr":"24","wo":"matryca"},{"tr":"8","wo":"macica"},{"tr":"8","wo":"macierzysta skała"},{"tr":"8","wo":"forma"}],"examples":[{"what":"noun","row":"an environment or material in which something develops; a surrounding medium or structure.","example":"free choices become the matrix of human life"}]}',
    ),
    array( // row #1 509
        'word' => 'maternal', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"macierzyński"},{"tr":"16","wo":"matczyny"},{"tr":"8","wo":"od strony matki"}],"examples":[{"what":"adjective","row":"of or relating to a mother, especially during pregnancy or shortly after childbirth.","example":"maternal age"}]}',
    ),
    array( // row #1 510
        'word' => 'margin', 'pl_PL' => '{"noun":[{"tr":"24","wo":"margines"},{"tr":"8","wo":"brzeg"},{"tr":"8","wo":"rezerwa"},{"tr":"8","wo":"swoboda"}],"verb":[{"tr":"8","wo":"zrobić margines"}],"examples":[{"what":"noun","row":"the edge or border of something.","example":"the eastern margin of the Indian Ocean"},{"what":"verb","row":"provide with an edge or border.","example":"its leaves are margined with yellow"}]}',
    ),
    array( // row #1 511
        'word' => 'manipulate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"manipulować"},{"tr":"8","wo":"zręcznie pokierować"},{"tr":"8","wo":"manewrować"},{"tr":"8","wo":"sfałszować"}],"examples":[{"what":"verb","row":"handle or control (a tool, mechanism, etc.), typically in a skillful manner.","example":"he manipulated the dials of the set"}]}',
    ),
    array( // row #1 512
        'word' => 'logic', 'pl_PL' => '{"noun":[{"tr":"24","wo":"logika"}],"adjective":[{"tr":"24","wo":"logiczny"},{"tr":"8","wo":"dorzeczny"}],"examples":[{"what":"noun","row":"reasoning conducted or assessed according to strict principles of validity.","example":"experience is a better guide to this than deductive logic"}]}',
    ),
    array( // row #1 513
        'word' => 'locomotion', 'pl_PL' => '{"noun":[{"tr":"24","wo":"lokomocja"}],"examples":[{"what":"noun","row":"movement or the ability to move from one place to another.","example":"the muscles that are concerned with locomotion"}]}',
    ),
    array( // row #1 514
        'word' => 'litigate', 'pl_PL' => '{"verb":[{"tr":"16","wo":"procesować się"},{"tr":"8","wo":"kwestionować"}],"examples":[{"what":"verb","row":"go to law; be a party to a lawsuit.","example":"It is not an abuse of process merely to require a litigant to litigate in a tribunal of a Convention country if that tribunal in fact has jurisdiction under the convention."}]}',
    ),
    array( // row #1 515
        'word' => 'liberate', 'pl_PL' => '{"verb":[{"tr":"16","wo":"uwalniać"},{"tr":"16","wo":"oswobodzić"},{"tr":"8","wo":"wydzielać"}],"examples":[{"what":"verb","row":"set (someone) free from a situation, especially imprisonment or slavery, in which their liberty is severely restricted.","example":"the serfs had been liberated"}]}',
    ),
    array( // row #1 516
        'word' => 'lens', 'pl_PL' => '{"noun":[{"tr":"24","wo":"obiektyw"},{"tr":"24","wo":"soczewka"},{"tr":"8","wo":"lupa"}],"examples":[{"what":"noun","row":"a piece of glass or other transparent substance with curved sides for concentrating or dispersing light rays, used singly (as in a magnifying glass) or with other lenses (as in a telescope).","example":"His first telescope was made from available lenses and gave a magnification of about four times."}]}',
    ),
    array( // row #1 517
        'word' => 'legitimate', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"prawowity"},{"tr":"8","wo":"ślubny"},{"tr":"8","wo":"słuszny"},{"tr":"8","wo":"prawnie uzasadniony"},{"tr":"8","wo":"usankcjonowany"}],"verb":[{"tr":"8","wo":"uznać ślubne pochodzenie"},{"tr":"8","wo":"wykazać ślubne pochodzenie"},{"tr":"8","wo":"usankcjonować"}],"examples":[{"what":"adjective","row":"conforming to the law or to rules.","example":"his claims to legitimate authority"},{"what":"verb","row":"make legitimate; justify or make lawful.","example":"the regime was not legitimated by popular support"}]}',
    ),
    array( // row #1 518
        'word' => 'lecture', 'pl_PL' => '{"noun":[{"tr":"24","wo":"wykład"},{"tr":"16","wo":"referat"},{"tr":"16","wo":"odczyt"},{"tr":"8","wo":"prelekcja"}],"verb":[{"tr":"24","wo":"wykładać"}],"examples":[{"what":"noun","row":"an educational talk to an audience, especially to students in a university or college.","example":"He gave a wonderful illustrated lecture on how to video a wedding."},{"what":"verb","row":"deliver an educational lecture or lectures.","example":"she was lecturing to her class of eighty students"}]}',
    ),
    array( // row #1 519
        'word' => 'layer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"warstwa"},{"tr":"8","wo":"instalator"},{"tr":"8","wo":"układacz"},{"tr":"8","wo":"nioska"},{"tr":"8","wo":"nawarstwienie"},{"tr":"8","wo":"pokrywa"},{"tr":"8","wo":"pokład"},{"tr":"8","wo":"odkład"},{"tr":"8","wo":"odrośl"},{"tr":"8","wo":"złoże"},{"tr":"8","wo":"zwał"}],"verb":[{"tr":"8","wo":"odkładać"}],"examples":[{"what":"noun","row":"a sheet, quantity, or thickness of material, typically one of several, covering a surface or body.","example":"bears depend on a layer of blubber to keep them warm in the water"},{"what":"verb","row":"arrange in a layer or layers.","example":"the current trend for layered clothes"}]}',
    ),
    array( // row #1 520
        'word' => 'launch', 'pl_PL' => '{"verb":[{"tr":"24","wo":"uruchomić"},{"tr":"8","wo":"cisnąć"},{"tr":"8","wo":"wystrzelić"},{"tr":"8","wo":"zapędzać się"},{"tr":"8","wo":"zadać"},{"tr":"8","wo":"miotać"},{"tr":"8","wo":"spuścić na wodę"},{"tr":"8","wo":"wodować"},{"tr":"8","wo":"wypuszczać"},{"tr":"8","wo":"rozpocząć coś"},{"tr":"8","wo":"lansować"}],"noun":[{"tr":"8","wo":"łódź motorowa"}],"examples":[{"what":"noun","row":"an act or an instance of launching something.","example":"the launch of a new campaign against drinking and driving"},{"what":"verb","row":"set (a boat) in motion by pushing it or allowing it to roll into the water.","example":"the town\'s lifeboat was launched to rescue the fishermen"}]}',
    ),
    array( // row #1 521
        'word' => 'kindred', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"krewni"},{"tr":"16","wo":"pokrewny"},{"tr":"8","wo":"pobratymczy"}],"noun":[{"tr":"16","wo":"pokrewieństwo"}],"examples":[{"what":"adjective","row":"similar in kind; related.","example":"books on kindred subjects"},{"what":"noun","row":"one\'s family and relations.","example":"Yet in all these instances family custom ensured some distribution of property to members of a property-owning kindred , and required the head of the family to make some provision for unfortunate kinsmen."}]}',
    ),
    array( // row #1 522
        'word' => 'judicial', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"sądowy"},{"tr":"8","wo":"sędziowski"},{"tr":"8","wo":"sprawiedliwy"}],"examples":[{"what":"adjective","row":"of, by, or appropriate to a court or judge.","example":"a judicial inquiry into the allegations"}]}',
    ),
    array( // row #1 523
        'word' => 'isolate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"izolować"},{"tr":"24","wo":"wyizolować"},{"tr":"16","wo":"odizolować"},{"tr":"16","wo":"odseparować"},{"tr":"8","wo":"osamotnić"},{"tr":"8","wo":"odosobnić"},{"tr":"8","wo":"wyosabniać"},{"tr":"8","wo":"separować"},{"tr":"8","wo":"odciąć"},{"tr":"8","wo":"oddzielać"},{"tr":"8","wo":"wydzielać"},{"tr":"8","wo":"wyobcować"},{"tr":"8","wo":"wyodrębniać"}],"examples":[{"what":"verb","row":"cause (a person or place) to be or remain alone or apart from others.","example":"a country that is isolated from the rest of the world"},{"what":"noun","row":"a person or thing that has been or become isolated.","example":"social isolates often become careless of their own welfare"}]}',
    ),
    array( // row #1 524
        'word' => 'irrigate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"nawadniać"},{"tr":"24","wo":"przepłukać"},{"tr":"8","wo":"nawodniać"},{"tr":"8","wo":"irygować"}],"examples":[{"what":"verb","row":"supply water to (land or crops) to help growth, typically by means of channels.","example":"While rainfall registers about 50 inches per year, growers often have to irrigate their crops during extended drought periods."}]}',
    ),
    array( // row #1 525
        'word' => 'investigate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zbadać"},{"tr":"16","wo":"badać"},{"tr":"16","wo":"prowadzić dochodzenie"},{"tr":"8","wo":"dochodzić"},{"tr":"8","wo":"rozpatrywać"},{"tr":"8","wo":"dociec"},{"tr":"8","wo":"wnikać"},{"tr":"8","wo":"prześledzić"}],"examples":[{"what":"verb","row":"carry out a systematic or formal inquiry to discover and examine the facts of (an incident, allegation, etc.) so as to establish the truth.","example":"police are investigating the alleged beating"}]}',
    ),
    array( // row #1 526
        'word' => 'invest', 'pl_PL' => '{"verb":[{"tr":"24","wo":"inwestować"},{"tr":"24","wo":"zainwestować"},{"tr":"8","wo":"otaczać"},{"tr":"8","wo":"owiać"},{"tr":"8","wo":"obdarzyć"},{"tr":"8","wo":"blokować"},{"tr":"8","wo":"lokować"},{"tr":"8","wo":"wkładać"},{"tr":"8","wo":"angażować"}],"examples":[{"what":"verb","row":"expend money with the expectation of achieving a profit or material result by putting it into financial schemes, shares, or property, or by using it to develop a commercial venture.","example":"getting workers to invest in private pension funds"}]}',
    ),
    array( // row #1 527
        'word' => 'inverse', 'pl_PL' => '{"noun":[{"tr":"24","wo":"odwrotność"}],"adjective":[{"tr":"24","wo":"odwrotny"}],"examples":[{"what":"adjective","row":"opposite or contrary in position, direction, order, or effect.","example":"the well-observed inverse relationship between disability and social contact"},{"what":"noun","row":"something that is the opposite or reverse of something else.","example":"his approach is the inverse of most research"}]}',
    ),
    array( // row #1 528
        'word' => 'invade', 'pl_PL' => '{"verb":[{"tr":"24","wo":"najechać"},{"tr":"8","wo":"najść"},{"tr":"8","wo":"wtargnąć"},{"tr":"8","wo":"napastować"},{"tr":"8","wo":"okupować"},{"tr":"8","wo":"naruszać"},{"tr":"8","wo":"ogarnąć"}],"examples":[{"what":"verb","row":"(of an armed force or its commander) enter (a country or region) so as to subjugate or occupy it.","example":"it was all part of a grander French plan to invade Ireland"}]}',
    ),
    array( // row #1 529
        'word' => 'intuitive', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"intuicyjny"},{"tr":"8","wo":"niedyskursywny"}],"examples":[{"what":"adjective","row":"using or based on what one feels to be true even without conscious reasoning; instinctive.","example":"I had an intuitive conviction that there was something unsound in him"}]}',
    ),
    array( // row #1 530
        'word' => 'intimacy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"intymność"},{"tr":"24","wo":"zażyłość"},{"tr":"16","wo":"bliskość"},{"tr":"8","wo":"konfidencja"}],"examples":[{"what":"noun","row":"close familiarity or friendship; closeness.","example":"the intimacy between a husband and wife"}]}',
    ),
    array( // row #1 531
        'word' => 'intervene', 'pl_PL' => '{"verb":[{"tr":"24","wo":"interweniować"},{"tr":"16","wo":"ingerować"},{"tr":"8","wo":"zainterweniować"},{"tr":"8","wo":"wdać się"},{"tr":"8","wo":"wmieszać się"},{"tr":"8","wo":"wkraczać"}],"examples":[{"what":"verb","row":"come between so as to prevent or alter a result or course of events.","example":"he acted outside his authority when he intervened in the dispute"}]}',
    ),
    array( // row #1 532
        'word' => 'interval', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przedział"},{"tr":"24","wo":"interwał"},{"tr":"16","wo":"przerwa"},{"tr":"8","wo":"rozstęp"},{"tr":"8","wo":"okres"},{"tr":"8","wo":"antrakt"},{"tr":"8","wo":"pauza"},{"tr":"8","wo":"odległość"},{"tr":"8","wo":"przestrzeń"}],"examples":[{"what":"noun","row":"an intervening time or space.","example":"after his departure, there was an interval of many years without any meetings"}]}',
    ),
    array( // row #1 533
        'word' => 'intersect', 'pl_PL' => '{"verb":[{"tr":"16","wo":"krzyżować"},{"tr":"8","wo":"przerznąć"},{"tr":"8","wo":"przeciąć się"}],"examples":[{"what":"verb","row":"divide (something) by passing or lying across it.","example":"occasionally the water table intersects the earth\'s surface, forming streams and lakes"}]}',
    ),
    array( // row #1 534
        'word' => 'interpret', 'pl_PL' => '{"verb":[{"tr":"24","wo":"interpretować"},{"tr":"24","wo":"zinterpretować"},{"tr":"16","wo":"tłumaczyć"},{"tr":"16","wo":"odczytać"},{"tr":"16","wo":"rozumieć"},{"tr":"8","wo":"objaśniać"}],"examples":[{"what":"verb","row":"explain the meaning of (information, words, or actions).","example":"the evidence is difficult to interpret"}]}',
    ),
    array( // row #1 535
        'word' => 'interlude', 'pl_PL' => '{"noun":[{"tr":"24","wo":"interludium"},{"tr":"16","wo":"przerwa"},{"tr":"16","wo":"intermedium"},{"tr":"8","wo":"okres przejściowy"},{"tr":"8","wo":"antrakt"},{"tr":"8","wo":"przejście"},{"tr":"8","wo":"wstawka"}],"examples":[{"what":"noun","row":"an intervening period of time.","example":"enjoying a lunchtime interlude"}]}',
    ),
    array( // row #1 536
        'word' => 'interlock', 'pl_PL' => '{"verb":[{"tr":"16","wo":"splatać"},{"tr":"8","wo":"szczepić"}],"examples":[{"what":"verb","row":"(of two or more things) engage with each other by overlapping or by the fitting together of projections and recesses.","example":"their fingers interlocked"},{"what":"noun","row":"a device or mechanism for connecting or coordinating the function of different components.","example":"We couldn\'t do this to both engines because a mechanical interlock prevents moving both condition levers to feather."}]}',
    ),
    array( // row #1 537
        'word' => 'interact', 'pl_PL' => '{"noun":[{"tr":"16","wo":"antrakt"}],"verb":[{"tr":"8","wo":"wzajemnie oddziaływać"}],"examples":[{"what":"verb","row":"act in such a way as to have an effect on another; act reciprocally.","example":"all the stages in the process interact"}]}',
    ),
    array( // row #1 538
        'word' => 'intellect', 'pl_PL' => '{"noun":[{"tr":"24","wo":"intelekt"},{"tr":"24","wo":"rozum"},{"tr":"16","wo":"umysł"},{"tr":"8","wo":"rozsądek"},{"tr":"8","wo":"mózg"},{"tr":"8","wo":"inteligencja"}],"examples":[{"what":"noun","row":"the faculty of reasoning and understanding objectively, especially with regard to abstract or academic matters.","example":"he was a man of action rather than of intellect"}]}',
    ),
    array( // row #1 539
        'word' => 'integrate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zintegrować"},{"tr":"16","wo":"integrować"},{"tr":"8","wo":"całkować"},{"tr":"8","wo":"scałkować"},{"tr":"8","wo":"skomasować"},{"tr":"8","wo":"integrować się"},{"tr":"8","wo":"przyłączać się"}],"adjective":[{"tr":"8","wo":"cały"}],"examples":[{"what":"verb","row":"combine (one thing) with another so that they become a whole.","example":"transportation planning should be integrated with energy policy"}]}',
    ),
    array( // row #1 540
        'word' => 'integer', 'pl_PL' => '{"noun":[{"tr":"24","wo":"liczba całkowita"},{"tr":"8","wo":"całość"}],"examples":[{"what":"noun","row":"a whole number; a number that is not a fraction.","example":"What about those integers in the continued fraction forms of the powers?"}]}',
    ),
    array( // row #1 541
        'word' => 'instruct', 'pl_PL' => '{"verb":[{"tr":"24","wo":"instruować"},{"tr":"24","wo":"polecić"},{"tr":"24","wo":"pouczać"},{"tr":"8","wo":"kształcić"},{"tr":"8","wo":"nauczać"},{"tr":"8","wo":"informować"},{"tr":"8","wo":"szkolić"},{"tr":"8","wo":"przeszkolić"},{"tr":"8","wo":"oświecać"},{"tr":"8","wo":"wtajemniczać"},{"tr":"8","wo":"zapoznać"}],"examples":[{"what":"verb","row":"direct or command someone to do something, especially as an official order.","example":"she instructed him to wait"}]}',
    ),
    array( // row #1 542
        'word' => 'instinct', 'pl_PL' => '{"noun":[{"tr":"24","wo":"instynkt"},{"tr":"8","wo":"pociąg do czegoś"}],"adjective":[{"tr":"8","wo":"tchnący"}],"examples":[{"what":"adjective","row":"imbued or filled with (a quality, especially a desirable one).","example":"these canvases are instinct with passion"},{"what":"noun","row":"an innate, typically fixed pattern of behavior in animals in response to certain stimuli.","example":"birds have an instinct to build nests"}]}',
    ),
    array( // row #1 543
        'word' => 'inspect', 'pl_PL' => '{"verb":[{"tr":"16","wo":"sprawdzać"},{"tr":"16","wo":"kontrolować"},{"tr":"8","wo":"badać"},{"tr":"8","wo":"lustrować"},{"tr":"8","wo":"dozorować"},{"tr":"8","wo":"nadzorować"},{"tr":"8","wo":"obchodzić"},{"tr":"8","wo":"zwiedzać"},{"tr":"8","wo":"wizytować"},{"tr":"8","wo":"rewidować"},{"tr":"8","wo":"zweryfikować"},{"tr":"8","wo":"doglądać"}],"examples":[{"what":"verb","row":"look at (someone or something) closely, typically to assess their condition or to discover any shortcomings.","example":"they were inspecting my outside paintwork for cracks and flaws"}]}',
    ),
    array( // row #1 544
        'word' => 'innovation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"innowacja"},{"tr":"8","wo":"nowinka"}],"examples":[{"what":"noun","row":"the action or process of innovating.","example":"An alliance allows its partners to speed up the processes of innovation and market expansion."}]}',
    ),
    array( // row #1 545
        'word' => 'innate', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wrodzony"},{"tr":"8","wo":"przyrodzony"}],"examples":[{"what":"adjective","row":"inborn; natural.","example":"her innate capacity for organization"}]}',
    ),
    array( // row #1 546
        'word' => 'injure', 'pl_PL' => '{"verb":[{"tr":"24","wo":"szkodzić"},{"tr":"24","wo":"zranić"},{"tr":"16","wo":"uszkodzić"},{"tr":"16","wo":"ranić"},{"tr":"8","wo":"psuć"},{"tr":"8","wo":"zepsuć"},{"tr":"8","wo":"kaleczyć"},{"tr":"8","wo":"okaleczyć"},{"tr":"8","wo":"pokaleczyć"},{"tr":"8","wo":"poranić"},{"tr":"8","wo":"rozbić"},{"tr":"8","wo":"krzywdzić"},{"tr":"8","wo":"naruszać"},{"tr":"8","wo":"obijać"},{"tr":"8","wo":"nadwyrężyć"}],"examples":[{"what":"verb","row":"do physical harm or damage to (someone).","example":"the explosion injured several people"}]}',
    ),
    array( // row #1 547
        'word' => 'inhibit', 'pl_PL' => '{"verb":[{"tr":"24","wo":"hamować"},{"tr":"8","wo":"zakazać"},{"tr":"8","wo":"powstrzymać"},{"tr":"8","wo":"utrudniać"}],"examples":[{"what":"verb","row":"hinder, restrain, or prevent (an action or process).","example":"cold inhibits plant growth"}]}',
    ),
    array( // row #1 548
        'word' => 'ingenious', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"pomysłowy"},{"tr":"16","wo":"sprytny"},{"tr":"8","wo":"dowcipny"},{"tr":"8","wo":"zmyślny"},{"tr":"8","wo":"wymyślny"},{"tr":"8","wo":"kunsztowny"},{"tr":"8","wo":"dzielny"}],"examples":[{"what":"adjective","row":"(of a person) clever, original, and inventive.","example":"he was ingenious enough to overcome the limited budget"}]}',
    ),
    array( // row #1 549
        'word' => 'inflation', 'pl_PL' => '{"noun":[{"tr":"24","wo":"inflacja"},{"tr":"8","wo":"nadymanie"},{"tr":"8","wo":"napompowanie"},{"tr":"8","wo":"nadmuchiwanie"},{"tr":"8","wo":"wzdęcie"},{"tr":"8","wo":"wydęcie"}],"examples":[{"what":"noun","row":"the action of inflating something or the condition of being inflated.","example":"the inflation of a balloon"}]}',
    ),
    array( // row #1 550
        'word' => 'inferior', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"gorszy"},{"tr":"16","wo":"niższy"},{"tr":"8","wo":"niższej rangi"},{"tr":"8","wo":"pośledni"},{"tr":"8","wo":"słaby"},{"tr":"8","wo":"podrzędny"},{"tr":"8","wo":"podwładny"},{"tr":"8","wo":"lichy"}],"examples":[{"what":"adjective","row":"lower in rank, status, or quality.","example":"schooling in inner-city areas was inferior to that in the rest of the country"},{"what":"noun","row":"a person lower than another in rank, status, or ability.","example":"her social and intellectual inferiors"}]}',
    ),
    array( // row #1 551
        'word' => 'infer', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wywnioskować"},{"tr":"8","wo":"wnieść"},{"tr":"8","wo":"wyciągać wnioski"},{"tr":"8","wo":"dedukować"},{"tr":"8","wo":"wydedukować"},{"tr":"8","wo":"indukować"},{"tr":"8","wo":"konkludować"}],"examples":[{"what":"verb","row":"deduce or conclude (information) from evidence and reasoning rather than from explicit statements.","example":"from these facts we can infer that crime has been increasing"}]}',
    ),
    array( // row #1 552
        'word' => 'induce', 'pl_PL' => '{"verb":[{"tr":"24","wo":"spowodować"},{"tr":"24","wo":"nakłaniać"},{"tr":"24","wo":"wywołać"},{"tr":"24","wo":"skłonić"},{"tr":"16","wo":"indukować"},{"tr":"16","wo":"prowokować"},{"tr":"8","wo":"namawiać"},{"tr":"8","wo":"pobudzać"},{"tr":"8","wo":"skusić"},{"tr":"8","wo":"wywnioskować"}],"examples":[{"what":"verb","row":"succeed in persuading or influencing (someone) to do something.","example":"the pickets induced many workers to stay away"}]}',
    ),
    array( // row #1 553
        'word' => 'indigenous', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"rodzimy"},{"tr":"8","wo":"tubylczy"},{"tr":"8","wo":"miejscowy"},{"tr":"8","wo":"krajowy"},{"tr":"8","wo":"autochtoniczny"},{"tr":"8","wo":"rodowity"}],"examples":[{"what":"adjective","row":"originating or occurring naturally in a particular place; native.","example":"the indigenous peoples of Siberia"}]}',
    ),
    array( // row #1 554
        'word' => 'inconsistent', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"niezgodny"},{"tr":"16","wo":"sprzeczny"},{"tr":"8","wo":"nielogiczny"},{"tr":"8","wo":"niekonsekwentny"}],"examples":[{"what":"adjective","row":"not staying the same throughout.","example":"police interpretation of the law was often inconsistent"}]}',
    ),
    array( // row #1 555
        'word' => 'incompatible', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"niezgodny"}],"examples":[{"what":"adjective","row":"(of two things) so opposed in character as to be incapable of existing together.","example":"cleverness and femininity were seen as incompatible"}]}',
    ),
    array( // row #1 556
        'word' => 'incline', 'pl_PL' => '{"verb":[{"tr":"24","wo":"skłonić"},{"tr":"16","wo":"nagiąć"},{"tr":"16","wo":"pochylać"},{"tr":"8","wo":"mieć nachylenie"},{"tr":"8","wo":"nachylić"},{"tr":"8","wo":"wychylać"},{"tr":"8","wo":"chylić"},{"tr":"8","wo":"skłonić się"},{"tr":"8","wo":"pogiąć"}],"noun":[{"tr":"16","wo":"pochyłość"},{"tr":"16","wo":"pochylnia"},{"tr":"8","wo":"ukos"}],"examples":[{"what":"noun","row":"an inclined surface or plane; a slope, especially on a road or railway.","example":"the road climbs a long incline through a forest"},{"what":"verb","row":"feel willing or favorably disposed toward (an action, belief, or attitude).","example":"he was inclined to accept the offer"}]}',
    ),
    array( // row #1 557
        'word' => 'incessant', 'pl_PL' => '{"adjective":[{"tr":"16","wo":"nieustanny"},{"tr":"16","wo":"nieprzerwany"},{"tr":"8","wo":"bezustanny"},{"tr":"8","wo":"ustawiczny"}],"examples":[{"what":"adjective","row":"(of something regarded as unpleasant) continuing without pause or interruption.","example":"the incessant beat of the music"}]}',
    ),
    array( // row #1 558
        'word' => 'incentive', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zachęta"},{"tr":"24","wo":"bodziec"},{"tr":"8","wo":"pobudka"},{"tr":"8","wo":"podnieta"},{"tr":"8","wo":"impuls"},{"tr":"8","wo":"sprężyna"}],"adjective":[{"tr":"8","wo":"pobudzający"}],"examples":[{"what":"noun","row":"a thing that motivates or encourages one to do something.","example":"there is no incentive for customers to conserve water"}]}',
    ),
    array( // row #1 559
        'word' => 'impress', 'pl_PL' => '{"noun":[{"tr":"24","wo":"piętno"},{"tr":"8","wo":"odbicie"},{"tr":"8","wo":"odcisk"},{"tr":"8","wo":"odciśnięcie"},{"tr":"8","wo":"wycisk"}],"verb":[{"tr":"24","wo":"imponować"},{"tr":"16","wo":"wywierać wrażenie"},{"tr":"8","wo":"odcisnąć odbicie"},{"tr":"8","wo":"odciskać"},{"tr":"8","wo":"wrazić komuś coś w pamięć"},{"tr":"8","wo":"wytłaczać"},{"tr":"8","wo":"zużytkować"},{"tr":"8","wo":"wpajać"},{"tr":"8","wo":"przemawiać"},{"tr":"8","wo":"frapować"},{"tr":"8","wo":"zarekwirować"}],"examples":[{"what":"noun","row":"an act of making an impression or mark.","example":"bluish marks made by the impress of his fingers"},{"what":"verb","row":"make (someone) feel admiration and respect.","example":"they immediately impressed the judges"}]}',
    ),
    array( // row #1 560
        'word' => 'impose', 'pl_PL' => '{"verb":[{"tr":"24","wo":"nakładać"},{"tr":"16","wo":"narzucać"},{"tr":"16","wo":"dyktować"},{"tr":"8","wo":"nakazać"},{"tr":"8","wo":"obłożyć"},{"tr":"8","wo":"podyktować"},{"tr":"8","wo":"przełamać"},{"tr":"8","wo":"wyświęcać"}],"examples":[{"what":"verb","row":"force (something unwelcome or unfamiliar) to be accepted or put in place.","example":"the decision was theirs and was not imposed on them by others"}]}',
    ),
    array( // row #1 561
        'word' => 'import', 'pl_PL' => '{"noun":[{"tr":"24","wo":"import"},{"tr":"24","wo":"przywóz"},{"tr":"8","wo":"znaczenie"},{"tr":"8","wo":"treść"},{"tr":"8","wo":"doniosłość"}],"verb":[{"tr":"24","wo":"importować"},{"tr":"8","wo":"znaczyć"}],"adjective":[{"tr":"8","wo":"importowy"},{"tr":"8","wo":"przywozowy"}],"examples":[{"what":"noun","row":"a commodity, article, or service brought in from abroad for sale.","example":"It could then export the surplus of this commodity in exchange for imports produced by other countries with respective comparative cost advantages."},{"what":"verb","row":"bring (goods or services) into a country from abroad for sale.","example":"Japan\'s reluctance to import more cars"}]}',
    ),
    array( // row #1 562
        'word' => 'imply', 'pl_PL' => '{"verb":[{"tr":"24","wo":"sugerować"},{"tr":"16","wo":"pociągać za sobą"},{"tr":"8","wo":"zakładać"},{"tr":"8","wo":"implikować"}],"examples":[{"what":"verb","row":"strongly suggest the truth or existence of (something not expressly stated).","example":"the salesmen who uses jargon to imply his superior knowledge"}]}',
    ),
    array( // row #1 563
        'word' => 'imperial', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"cesarski"},{"tr":"8","wo":"królewski"},{"tr":"8","wo":"dotyczący imperium"},{"tr":"8","wo":"majestatyczny"}],"noun":[{"tr":"16","wo":"imperiał"}],"examples":[{"what":"adjective","row":"of or relating to an empire.","example":"Britain\'s imperial era"},{"what":"noun","row":"a small pointed beard growing below the lower lip (associated with Napoleon III of France).","example":"The poet wore a luxuriant black moustache and imperial , and a slouched hat which shaded the forehead."}]}',
    ),
    array( // row #1 564
        'word' => 'illustrate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"zilustrować"},{"tr":"24","wo":"ilustrować"},{"tr":"16","wo":"zobrazować"},{"tr":"8","wo":"obrazować"},{"tr":"8","wo":"uzmysłowić"}],"examples":[{"what":"verb","row":"provide (a book, newspaper, etc.) with pictures.","example":"the guide is illustrated with full-color photographs"}]}',
    ),
    array( // row #1 565
        'word' => 'illuminate', 'pl_PL' => '{"verb":[{"tr":"16","wo":"oświetlać"},{"tr":"8","wo":"wyjaśniać"},{"tr":"8","wo":"iluminować"}],"examples":[{"what":"verb","row":"light up.","example":"a flash of lightning illuminated the house"}]}',
    ),
    array( // row #1 566
        'word' => 'ignore', 'pl_PL' => '{"verb":[{"tr":"24","wo":"ignorować"},{"tr":"24","wo":"zignorować"},{"tr":"8","wo":"pomijać"},{"tr":"8","wo":"zlekceważyć"},{"tr":"8","wo":"bagatelizować"},{"tr":"8","wo":"uchylać"}],"examples":[{"what":"verb","row":"refuse to take notice of or acknowledge; disregard intentionally.","example":"he ignored her outraged question"}]}',
    ),
    array( // row #1 567
        'word' => 'hypothesis', 'pl_PL' => '{"noun":[{"tr":"24","wo":"hipoteza"},{"tr":"8","wo":"przypuszczenie"}],"examples":[{"what":"noun","row":"a supposition or proposed explanation made on the basis of limited evidence as a starting point for further investigation.","example":"professional astronomers attacked him for popularizing an unconfirmed hypothesis"}]}',
    ),
    array( // row #1 568
        'word' => 'hostile', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wrogi"},{"tr":"8","wo":"nieprzyjazny"},{"tr":"8","wo":"antagonistyczny"},{"tr":"8","wo":"napastniczy"}],"examples":[{"what":"adjective","row":"unfriendly; antagonistic.","example":"a hostile audience"}]}',
    ),
    array( // row #1 569
        'word' => 'horror', 'pl_PL' => '{"noun":[{"tr":"24","wo":"przerażenie"},{"tr":"8","wo":"okropność"},{"tr":"8","wo":"zgroza"},{"tr":"8","wo":"okropieństwo"},{"tr":"8","wo":"ohyda"},{"tr":"8","wo":"poczwara"},{"tr":"8","wo":"pokraka"},{"tr":"8","wo":"brzydactwo"},{"tr":"8","wo":"brzydal"},{"tr":"8","wo":"dramatyczność"}],"examples":[{"what":"noun","row":"an intense feeling of fear, shock, or disgust.","example":"children screamed in horror"}]}',
    ),
    array( // row #1 570
        'word' => 'homogeneous', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"jednorodny"},{"tr":"16","wo":"homogeniczny"},{"tr":"16","wo":"jednolity"},{"tr":"8","wo":"zwarty"}],"examples":[{"what":"adjective","row":"of the same kind; alike.","example":"timbermen prefer to deal with homogeneous woods"}]}',
    ),
    array( // row #1 571
        'word' => 'hierarchy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"hierarchia"}],"examples":[{"what":"noun","row":"a system or organization in which people or groups are ranked one above the other according to status or authority.","example":"The most important thing in the election of the chairman was not professional competence in the field, but activity within the Party and a sufficiently high status in the political hierarchy ."}]}',
    ),
    array( // row #1 572
        'word' => 'heredity', 'pl_PL' => '{"noun":[{"tr":"24","wo":"dziedziczność"}],"examples":[{"what":"noun","row":"the passing on of physical or mental characteristics genetically from one generation to another.","example":"few scientists dispute that heredity can create a susceptibility to alcoholism"}]}',
    ),
    array( // row #1 573
        'word' => 'hemisphere', 'pl_PL' => '{"noun":[{"tr":"24","wo":"półkula"},{"tr":"16","wo":"hemisfera"}],"examples":[{"what":"noun","row":"a half of a sphere.","example":"The sculpture consists of an elliptical loop of steel, attached to which are spheres and hemispheres fashioned from strips of steel."}]}',
    ),
    array( // row #1 574
        'word' => 'gravity', 'pl_PL' => '{"noun":[{"tr":"16","wo":"powaga"},{"tr":"8","wo":"powaga oblicza"},{"tr":"8","wo":"spoważnienie"},{"tr":"8","wo":"ważkość"},{"tr":"8","wo":"siła ciężkości"},{"tr":"8","wo":"przyciąganie ziemskie"},{"tr":"8","wo":"ciężar gatunkowy"},{"tr":"8","wo":"namaszczenie"}],"examples":[{"what":"noun","row":"the force that attracts a body toward the center of the earth, or toward any other physical body having mass. For most purposes Newton\'s laws of gravity apply, with minor modifications to take the general theory of relativity into account.","example":"Certainly, every type of matter we have ever encountered feels the attractive force of gravity ."}]}',
    ),
    array( // row #1 575
        'word' => 'graph', 'pl_PL' => '{"noun":[{"tr":"24","wo":"diagram"},{"tr":"24","wo":"wykres"},{"tr":"8","wo":"powielacz"}],"examples":[{"what":"noun","row":"a diagram showing the relation between variable quantities, typically of two variables, each measured along one of a pair of axes at right angles.","example":"In fact, all the real values are already in the graph along the x axis also called the real axis."},{"what":"verb","row":"plot or trace on a graph.","example":"A frequency ranking of student graphing errors indicates that graphing problems are related to a combination of factors involving the software, the student, and the instruction."}]}',
    ),
    array( // row #1 576
        'word' => 'germ', 'pl_PL' => '{"noun":[{"tr":"24","wo":"zalążek"},{"tr":"24","wo":"zarodek"},{"tr":"24","wo":"bakteria"},{"tr":"16","wo":"zarazek"},{"tr":"8","wo":"zaczątek"},{"tr":"8","wo":"kiełek"},{"tr":"8","wo":"zaczyn"},{"tr":"8","wo":"bakcyl"},{"tr":"8","wo":"drobnoustrój"}],"examples":[{"what":"noun","row":"a microorganism, especially one that causes disease.","example":"But since pasteurisation kills not only germs but also useful bacteria, a culture is added to the milk in order to reintroduce all essential bacteria."}]}',
    ),
    array( // row #1 577
        'word' => 'geometry', 'pl_PL' => '{"noun":[{"tr":"24","wo":"geometria"}],"examples":[{"what":"noun","row":"the branch of mathematics concerned with the properties and relations of points, lines, surfaces, solids, and higher dimensional analogs.","example":"By spherical geometry, we mean geometry on the surface of a sphere, where the great circles are taken as lines."}]}',
    ),
    array( // row #1 578
        'word' => 'geography', 'pl_PL' => '{"noun":[{"tr":"24","wo":"geografia"}],"examples":[{"what":"noun","row":"the study of the physical features of the earth and its atmosphere, and of human activity as it affects and is affected by these, including the distribution of populations and resources, land use, and industries.","example":"For a work of economic geography , there are few maps, and none of them is very detailed."}]}',
    ),
    array( // row #1 579
        'word' => 'fulfill', 'pl_PL' => '{"verb":[{"tr":"24","wo":"spełniać"},{"tr":"8","wo":"pełnić"},{"tr":"8","wo":"urzeczywistniać"},{"tr":"8","wo":"dopełniać"},{"tr":"8","wo":"zadośćuczynić"},{"tr":"8","wo":"realizować"},{"tr":"8","wo":"wykonać"},{"tr":"8","wo":"odpowiadać"},{"tr":"8","wo":"dokonać"}],"examples":[{"what":"verb","row":"bring to completion or reality; achieve or realize (something desired, promised, or predicted).","example":"he wouldn\'t be able to fulfill his ambition to visit Naples"}]}',
    ),
    array( // row #1 580
        'word' => 'fuel', 'pl_PL' => '{"noun":[{"tr":"24","wo":"paliwo"},{"tr":"16","wo":"opał"}],"adjective":[{"tr":"16","wo":"paliwowy"},{"tr":"16","wo":"opałowy"}],"verb":[{"tr":"8","wo":"zaopatrywać w paliwo"},{"tr":"8","wo":"zaopatrywać się w paliwo"}],"examples":[{"what":"verb","row":"supply or power (an industrial plant, vehicle, or machine) with fuel.","example":"the plan includes a hydroelectric plant to fuel a paper factory"}]}',
    ),
    array( // row #1 581
        'word' => 'frustrate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"paraliżować"},{"tr":"16","wo":"zniweczyć"},{"tr":"16","wo":"udaremniać"},{"tr":"8","wo":"unicestwiać"},{"tr":"8","wo":"rozbić"},{"tr":"8","wo":"rozchwiać"},{"tr":"8","wo":"rozwiać nadzieje"},{"tr":"8","wo":"krzyżować"}],"examples":[{"what":"verb","row":"prevent (a plan or attempted action) from progressing, succeeding, or being fulfilled.","example":"his attempt to frustrate the merger"},{"what":"adjective","row":"frustrated.","example":null}]}',
    ),
    array( // row #1 582
        'word' => 'friction', 'pl_PL' => '{"noun":[{"tr":"24","wo":"tarcie"},{"tr":"8","wo":"nacieranie"},{"tr":"8","wo":"ucieranie"},{"tr":"8","wo":"spór"},{"tr":"8","wo":"frykcja"}],"examples":[{"what":"noun","row":"the resistance that one surface or object encounters when moving over another.","example":"a lubrication system that reduces friction"}]}',
    ),
    array( // row #1 583
        'word' => 'fraud', 'pl_PL' => '{"noun":[{"tr":"24","wo":"oszustwo"},{"tr":"8","wo":"oszukanie"},{"tr":"8","wo":"cygaństwo"},{"tr":"8","wo":"szalbierstwo"},{"tr":"8","wo":"matactwo"},{"tr":"8","wo":"nabranie"},{"tr":"8","wo":"kuglarstwo"},{"tr":"8","wo":"hochsztaplerstwo"},{"tr":"8","wo":"nieuczciwość"},{"tr":"8","wo":"oszust"},{"tr":"8","wo":"naciągacz"},{"tr":"8","wo":"kuglarz"},{"tr":"8","wo":"hochsztapler"},{"tr":"8","wo":"nieuczciwiec"}],"examples":[{"what":"noun","row":"wrongful or criminal deception intended to result in financial or personal gain.","example":"he was convicted of fraud"}]}',
    ),
    array( // row #1 584
        'word' => 'fraternal', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"braterski"}],"examples":[{"what":"adjective","row":"of or like a brother or brothers.","example":"his lack of fraternal feeling shocked me"}]}',
    ),
    array( // row #1 585
        'word' => 'fragment', 'pl_PL' => '{"noun":[{"tr":"24","wo":"fragment"},{"tr":"8","wo":"kawałeczek"},{"tr":"8","wo":"urywek"},{"tr":"8","wo":"ułamek"},{"tr":"8","wo":"ułomek"},{"tr":"8","wo":"odłamek"},{"tr":"8","wo":"skrawek"},{"tr":"8","wo":"kruszyna"},{"tr":"8","wo":"partia"}],"examples":[{"what":"noun","row":"a small part broken or separated off something.","example":"small fragments of pottery, glass, and tiles"},{"what":"verb","row":"break or cause to break into fragments.","example":"his followers fragmented into sects"}]}',
    ),
    array( // row #1 586
        'word' => 'fossil', 'pl_PL' => '{"noun":[{"tr":"24","wo":"skamieniałość"},{"tr":"16","wo":"skamielina"},{"tr":"8","wo":"odlew"}],"adjective":[{"tr":"16","wo":"kopalny"},{"tr":"8","wo":"skamieniały"},{"tr":"8","wo":"przedpotopowy"}],"examples":[{"what":"noun","row":"the remains or impression of a prehistoric organism preserved in petrified form or as a mold or cast in rock.","example":"Very few dinosaur fossils are actually found near this boundary."}]}',
    ),
    array( // row #1 587
        'word' => 'formulate', 'pl_PL' => '{"verb":[{"tr":"24","wo":"formułować"},{"tr":"8","wo":"redagować"},{"tr":"8","wo":"wypowiadać"},{"tr":"8","wo":"wyrazić"}],"examples":[{"what":"verb","row":"create or devise methodically (a strategy or a proposal).","example":"economists and statisticians were needed to help formulate economic policy"}]}',
    ),
    array( // row #1 588
        'word' => 'forgo', 'pl_PL' => '{"verb":[{"tr":"16","wo":"zrzec się"},{"tr":"8","wo":"obywać się bez czegoś"}],"examples":[{"what":"verb","row":"omit or decline to take (something pleasant or valuable); go without.","example":"she wanted to forgo the dessert and leave while they could"}]}',
    ),
    array( // row #1 589
        'word' => 'fluent', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"biegły"},{"tr":"16","wo":"płynny"},{"tr":"8","wo":"falisty"},{"tr":"8","wo":"zmienny"}],"examples":[{"what":"adjective","row":"(of a person) able to express oneself easily and articulately.","example":"a fluent speaker and writer on technical subjects"}]}',
    ),
    array( // row #1 590
        'word' => 'fluctuate', 'pl_PL' => '{"verb":[{"tr":"16","wo":"oscylować"},{"tr":"16","wo":"zmieniać się"},{"tr":"8","wo":"ulec wahaniom"}],"examples":[{"what":"verb","row":"rise and fall irregularly in number or amount.","example":"trade with other countries tends to fluctuate from year to year"}]}',
    ),
    array( // row #1 591
        'word' => 'finite', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"skończony"},{"tr":"16","wo":"ograniczony"},{"tr":"8","wo":"określony"}],"examples":[{"what":"adjective","row":"having limits or bounds.","example":"every computer has a finite amount of memory"}]}',
    ),
    array( // row #1 592
        'word' => 'fertile', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"płodny"},{"tr":"24","wo":"żyzny"},{"tr":"16","wo":"urodzajny"},{"tr":"8","wo":"chlebodajny"},{"tr":"8","wo":"plenny"},{"tr":"8","wo":"rodzajny"},{"tr":"8","wo":"rodzący"},{"tr":"8","wo":"rodny"},{"tr":"8","wo":"bujny"},{"tr":"8","wo":"mnożny"},{"tr":"8","wo":"rozwichrzony"}],"examples":[{"what":"adjective","row":"(of soil or land) producing or capable of producing abundant vegetation or crops.","example":"fields along the fertile flood plains of the river"}]}',
    ),
    array( // row #1 593
        'word' => 'feasible', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wykonalny"},{"tr":"16","wo":"realny"},{"tr":"8","wo":"prawdopodobny"},{"tr":"8","wo":"ziszczalny"}],"examples":[{"what":"adjective","row":"possible to do easily or conveniently.","example":"it is not feasible to put most finds from excavations on public display"}]}',
    ),
    array( // row #1 594
        'word' => 'fallacy', 'pl_PL' => '{"noun":[{"tr":"24","wo":"błędność"},{"tr":"16","wo":"przesąd"},{"tr":"16","wo":"fałszywe rozumowanie"},{"tr":"8","wo":"błąd"},{"tr":"8","wo":"mylność"},{"tr":"8","wo":"nieprawdziwość"},{"tr":"8","wo":"błędne mniemanie"},{"tr":"8","wo":"sofizmat"},{"tr":"8","wo":"wykrętność"}],"examples":[{"what":"noun","row":"a mistaken belief, especially one based on unsound argument.","example":"the notion that the camera never lies is a fallacy"}]}',
    ),
    array( // row #1 595
        'word' => 'faction', 'pl_PL' => '{"noun":[{"tr":"16","wo":"odłam"},{"tr":"8","wo":"wichrzenie"}],"examples":[{"what":"noun","row":"a small, organized, dissenting group within a larger one, especially in politics.","example":"the left-wing faction of the party"}]}',
    ),
    array( // row #1 596
        'word' => 'facilitate', 'pl_PL' => '{"verb":[{"tr":"16","wo":"ułatwiać"},{"tr":"8","wo":"udogodnić"}],"examples":[{"what":"verb","row":"make (an action or process) easy or easier.","example":"schools were located on the same campus to facilitate the sharing of resources"}]}',
    ),
    array( // row #1 597
        'word' => 'extract', 'pl_PL' => '{"noun":[{"tr":"24","wo":"ekstrakt"},{"tr":"24","wo":"wyciąg"},{"tr":"8","wo":"esencja"},{"tr":"8","wo":"wyjątek"},{"tr":"8","wo":"wypis"}],"verb":[{"tr":"16","wo":"ekstrahować"},{"tr":"16","wo":"wydobyć"},{"tr":"8","wo":"wytłaczać"},{"tr":"8","wo":"wyciągać wnioski"},{"tr":"8","wo":"czerpać"},{"tr":"8","wo":"wyciągać"},{"tr":"8","wo":"wypruć"}],"examples":[{"what":"noun","row":"a short passage taken from a piece of writing, music, or film.","example":"an extract from a historical film"},{"what":"verb","row":"remove or take out, especially by effort or force.","example":"the decayed tooth will have to be extracted"}]}',
    ),
    array( // row #1 598
        'word' => 'expose', 'pl_PL' => '{"noun":[{"tr":"24","wo":"expose"}],"verb":[{"tr":"24","wo":"narazić"},{"tr":"24","wo":"odsłonić"},{"tr":"16","wo":"eksponować"},{"tr":"16","wo":"uwidocznić"},{"tr":"8","wo":"wystawiać na pokaz"},{"tr":"8","wo":"nadstawiać"},{"tr":"8","wo":"narażać się na coś"},{"tr":"8","wo":"ujawniać"},{"tr":"8","wo":"demaskować"},{"tr":"8","wo":"dekonspirować"},{"tr":"8","wo":"naświetlać"},{"tr":"8","wo":"porzucić"}],"examples":[{"what":"verb","row":"make (something) visible, typically by uncovering it.","example":"at low tide the sands are exposed"}]}',
    ),
    array( // row #1 599
        'word' => 'export', 'pl_PL' => '{"noun":[{"tr":"24","wo":"eksport"},{"tr":"24","wo":"wywóz"}],"verb":[{"tr":"24","wo":"eksportować"}],"adjective":[{"tr":"16","wo":"eksportowy"},{"tr":"8","wo":"wywozowy"}],"examples":[{"what":"noun","row":"a commodity, article, or service sold abroad.","example":"wool and mohair were the principal exports"},{"what":"verb","row":"send (goods or services) to another country for sale.","example":"we exported $16 million worth of mussels to Japan"}]}',
    ),
    array( // row #1 600
        'word' => 'exponent', 'pl_PL' => '{"noun":[{"tr":"16","wo":"wykładnik potęgowy"},{"tr":"8","wo":"wyraziciel"},{"tr":"8","wo":"wykonawca utworów muzycznych"},{"tr":"8","wo":"przedstawiciel"},{"tr":"8","wo":"interpretator"}],"examples":[{"what":"noun","row":"a person who believes in and promotes the truth or benefits of an idea or theory.","example":"an early exponent of the teachings of Thomas Aquinas"}]}',
    ),
    array( // row #1 601
        'word' => 'exploit', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wykorzystać"},{"tr":"8","wo":"eksploatować kogoś lub coś"},{"tr":"8","wo":"wyzyskać"},{"tr":"8","wo":"użytkować"},{"tr":"8","wo":"zużytkować"}],"noun":[{"tr":"16","wo":"wyczyn"},{"tr":"8","wo":"czyn"}],"examples":[{"what":"noun","row":"a bold or daring feat.","example":"the most heroic and secretive exploits of the war"},{"what":"verb","row":"make full use of and derive benefit from (a resource).","example":"500 companies sprang up to exploit this new technology"}]}',
    ),
    array( // row #1 602
        'word' => 'expel', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wydalać"},{"tr":"8","wo":"wygnać"},{"tr":"8","wo":"wypędzać"},{"tr":"8","wo":"usunąć"},{"tr":"8","wo":"wykluczać"}],"examples":[{"what":"verb","row":"deprive (someone) of membership of or involvement in a school or other organization.","example":"she was expelled from school"}]}',
    ),
    array( // row #1 603
        'word' => 'expand', 'pl_PL' => '{"verb":[{"tr":"24","wo":"rozszerzać"},{"tr":"16","wo":"rozwijać"},{"tr":"8","wo":"rozprężać"},{"tr":"8","wo":"rozprzestrzeniać"},{"tr":"8","wo":"roztaczać"},{"tr":"8","wo":"rozdąć"},{"tr":"8","wo":"rozepchać"},{"tr":"8","wo":"rozeprzeć"},{"tr":"8","wo":"rozsunąć"},{"tr":"8","wo":"ciągnąć"},{"tr":"8","wo":"rozciągać"},{"tr":"8","wo":"rozpęcznieć"}],"examples":[{"what":"verb","row":"become or make larger or more extensive.","example":"their business expanded into other hotels and properties"}]}',
    ),
    array( // row #1 604
        'word' => 'exhaust', 'pl_PL' => '{"adjective":[{"tr":"24","wo":"wydechowy"},{"tr":"16","wo":"wylotowy"},{"tr":"8","wo":"wydmuchowy"}],"verb":[{"tr":"24","wo":"wyczerpać"},{"tr":"8","wo":"wyciągać"},{"tr":"8","wo":"wypuszczać"},{"tr":"8","wo":"wyjaławiać"},{"tr":"8","wo":"wyniszczać"},{"tr":"8","wo":"zmóc"},{"tr":"8","wo":"utrudzić"}],"noun":[{"tr":"16","wo":"wydech"},{"tr":"16","wo":"wyciąg"}],"examples":[{"what":"noun","row":"waste gases or air expelled from an engine, turbine, or other machine in the course of its operation.","example":"buses spewing out black clouds of exhaust"},{"what":"verb","row":"drain (someone) of their physical or mental resources; tire out.","example":"her day trip had exhausted her"}]}',
    ),
    array( // row #1 605
        'word' => 'exert', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wywierać"},{"tr":"8","wo":"stosować"},{"tr":"8","wo":"używać"},{"tr":"8","wo":"natężać"},{"tr":"8","wo":"forsować"},{"tr":"8","wo":"nabiegać się"}],"examples":[{"what":"verb","row":"apply or bring to bear (a force, influence, or quality).","example":"the moon exerts a force on the Earth"}]}',
    ),
    array( // row #1 606
        'word' => 'execute', 'pl_PL' => '{"verb":[{"tr":"24","wo":"wykonać"},{"tr":"8","wo":"przeprowadzać"},{"tr":"8","wo":"dopełniać"},{"tr":"8","wo":"wypełniać zarządzenia"},{"tr":"8","wo":"wyrabiać"},{"tr":"8","wo":"zrobić"},{"tr":"8","wo":"zrealizować"},{"tr":"8","wo":"odpracować"},{"tr":"8","wo":"odrobić"},{"tr":"8","wo":"egzekwować"},{"tr":"8","wo":"rozstrzelać"},{"tr":"8","wo":"nadać ważność"},{"tr":"8","wo":"stracić"}],"examples":[{"what":"verb","row":"carry out or put into effect (a plan, order, or course of action).","example":"the corporation executed a series of financial deals"}]}',
    ),
    array( // row #1 607
        'word' => 'exclude', 'pl_PL' => '{"verb":[{"tr":"16","wo":"wykluczać"},{"tr":"8","wo":"wyłączać"},{"tr":"8","wo":"eliminować"},{"tr":"8","wo":"wyeliminować"}],"examples":[{"what":"verb","row":"deny (someone) access to or bar (someone) from a place, group, or privilege.","example":"women had been excluded from many scientific societies"}]}',
    ),

);

DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 1, 400));
DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 401, 400));
DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 801, 400));
DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 1201, 400));
DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 1601, 400));
// DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 501, 500));
// DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 1001, 500));
// DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 1501, 500));
// DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 2001, 500));
// DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 2501, 500));
// DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 3001, 500));
// DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 3501, 500));
// DB::table('dictionary_en')->insert(array_slice ( $words_5000_eng_pol  , 4001, 500));
 
        Model::reguard();
 
    }
}
