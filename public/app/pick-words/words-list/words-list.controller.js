(function () {

  angular
    .module('MyApp')
    .directive('thumbnail', [function() {
  return {
    restrict: 'CA',
    replace: false,
    transclude: false,
    scope: {
        words: '=words',
        // item: '=itemdata'
    },
    template: [

'<table class="table table-hover">',
'  <thead>',
'    <tr class="">',
'      <th>#</th>',
'      <th>WORD</th>',
'      <td class="text-center">',
'        <button ng-click="wordsList.selectAll()" type="button" class="btn btn-primary btn-sm">ALL</button>',
'        <button ng-click="wordsList.selectNone()" type="button" class="btn btn-primary btn-sm">NONE</button>',
'      </td>',
'    </tr>',
'  </thead>',
'  <tbody>',
'    <tr class="success ahawords" ng-repeat="word in wordsList.data.words">',
'      <td>{{word.id}}</th>',
'      <td>tree</td>',
'      <td class="text-center"><span style="font-size:18px" class="icon ion-android-happy"></span></td>',
'    </tr>',
'  </tbody>',
'</table>'
].join('')

    ,
    link: function(scope, elem, attrs) {
        console.log('attrs.words = ',attrs.words);

        elem.bind('click', function(e) {
            var aha = elem.find('tr.ahawords');
            console.log('e',e);
            console.log('elem.parent()', e.target.parentElement);
            // call your SmoothZoom here
            //angular.element(attrs.options).css({'background-image':'url('+ scope.item.src +')'});
        });
    }
}
}]);

})();


(function () {
  angular
    .module('MyApp')
    .controller('WordsListCtrl',WordsListCtrl);

    WordsListCtrl.$inject = ['$ngBootbox', '$state'];

    function WordsListCtrl ($ngBootbox, $state) {
		vm = this;
		vm.selectAll = selectAll; 
		vm.selectNone = selectNone;

        // pagination 
        // language
//  https://blog.kettle.io/dynamic-pagination-angularjs-laravel/

        // TODO: consider this <!-- http://www.memrise.com/course/250031/learn-5000-english-words/ -->

		vm.data = {
			//words : [{id:  '1', w:'word'},{id:  '2', w:'canal'},{id:  '3', w:'hoped'},{id:  '4', w:'phase'},{id:  '5', w:'hopes'},{id:  '6', w:'notebook'},{id:  '7', w:'stomach'},{id:  '8', w:'deceit'},{id:  '9', w:'parcel'},{id: '10', w:'brighten'},{id: '11', w:'moderation'},{id: '12', w:'Twelve'},{id: '13', w:'factor'},{id: '14', w:'punctual'},{id: '15', w:'hurrah'},{id: '16', w:'integration'},{id: '17', w:'sentence'},{id: '18', w:'constant'},{id: '19', w:'lipstick'},{id: '20', w:'perform'},{id: '21', w:'tired'},{id: '22', w:'uppermost'},{id: '23', w:'column'},{id: '24', w:'fatten'},{id: '25', w:'Mantle'},{id: '26', w:'supper'},{id: '27', w:'Charlie'},{id: '28', w:'conqueror'},{id: '29', w:'hindrance'},{id: '30', w:'shooting'},{id: '31', w:'cowardice'},{id: '32', w:'quietly'},{id: '33', w:'obedient'},{id: '34', w:'saucer'},{id: '35', w:'madden'},{id: '36', w:'via'},{id: '37', w:'scold'},{id: '38', w:'gift'},{id: '39', w:'missile'},{id: '40', w:'weekday'},{id: '41', w:'functions'},{id: '42', w:'rotten'},{id: '43', w:'disrespect'},{id: '44', w:'occasionally'},{id: '45', w:'widower'},{id: '46', w:'deafen'},{id: '47', w:'donkey'},{id: '48', w:'businesslike'},{id: '49', w:'personality'},{id: '50', w:'concrete'},{id: '51', w:'motherhood'},{id: '52', w:'precisely'},{id: '53', w:'sadden'},{id: '54', w:'exact'},{id: '55', w:'handshake'},{id: '56', w:'calculator'},{id: '57', w:'swung'},{id: '58', w:'headdress'},{id: '59', w:'seek'},{id: '60', w:'maintained'},{id: '61', w:'scissors'},{id: '62', w:'distant'},{id: '63', w:'drinking'},{id: '64', w:'translator'},{id: '65', w:'intelligence'},{id: '66', w:'possessor'},{id: '67', w:'shilling'},{id: '68', w:'observe'},{id: '69', w:'redden'},{id: '70', w:'motherly'},{id: '71', w:'cultivator'},{id: '72', w:'Hearst'},{id: '73', w:'sad'},{id: '74', w:'BONDS'},{id: '75', w:'homework'},{id: '76', w:'denied'},{id: '77', w:'electrician'},{id: '78', w:'bills'},{id: '79', w:'oar'},{id: '80', w:'bribery'},{id: '81', w:'employment'},{id: '82', w:'initial'},{id: '83', w:'sweeten'},{id: '84', w:'sow'},{id: '85', w:'sympathetic'},{id: '86', w:'traffic'},{id: '87', w:'FEARS'},{id: '88', w:'pronunciation'},{id: '89', w:'beak'},{id: '90', w:'Cuba'},{id: '91', w:'bone'},{id: '92', w:'plural'},{id: '93', w:'sold'},{id: '94', w:'clerk'},{id: '95', w:'fellowship'},{id: '96', w:'thousands'},{id: '97', w:'engaged'},{id: '98', w:'accident'},{id: '99', w:'provision'},{id:'100', w:'purchase'},{id:'101', w:'minimum'},{id:'102', w:'career'},{id:'103', w:'MOSCOW'},{id:'104', w:'violent'},{id:'105', w:'expansion'},{id:'106', w:'discuss'},{id:'107', w:'testimony'},{id:'108', w:'prior'},{id:'109', w:'substance'},{id:'110', w:'appropriate'},{id:'111', w:'lights'},{id:'112', w:'potential'},{id:'113', w:'impact'},{id:'114', w:'remarkable'},{id:'115', w:'surely'},{id:'116', w:'humor'},{id:'117', w:'shoot'},{id:'118', w:'Opera'},{id:'119', w:'Italian'},{id:'120', w:'singing'},{id:'121', w:'score'},{id:'122', w:'vacation'},{id:'123', w:'Models'},{id:'124', w:'boards'},{id:'125', w:'laugh'},{id:'126', w:'supplies'},{id:'127', w:'stairs'},{id:'128', w:'cell'},{id:'129', w:'concentration'},{id:'130', w:'Congregation'},{id:'131', w:'rolled'},{id:'132', w:'blame'},{id:'133', w:'capable'},{id:'134', w:'unknown'},{id:'135', w:'adequate'},{id:'136', w:'factory'},{id:'137', w:'movements'},{id:'138', w:'slave'},{id:'139', w:'wearing'},{id:'140', w:'tongue'},{id:'141', w:'essentially'},{id:'142', w:'refer'},{id:'143', w:'grave'},{id:'144', w:'periods'},{id:'145', w:'patterns'},{id:'146', w:'bus'},{id:'147', w:'damage'},{id:'148', w:'Lincoln'},{id:'149', w:'recommended'},{id:'150', w:'legislation'},{id:'151', w:'Georgia'},{id:'152', w:'meanwhile'},{id:'153', w:'site'},{id:'154', w:'bond'},{id:'155', w:'complicate'},{id:'156', w:'creation'},{id:'157', w:'burst'},{id:'158', w:'difficulties'},{id:'159', w:'atomic'},{id:'160', w:'benefit'},{id:'161', w:'shock'},{id:'162', w:'losses'},{id:'163', w:'weakness'},{id:'164', w:'contact'},{id:'165', w:'delight'},{id:'166', w:'hang'},{id:'167', w:'identified'},{id:'168', w:'net'},{id:'169', w:'domestic'},{id:'170', w:'assume'},{id:'171', w:'engineering'},{id:'172', w:'pm'},{id:'173', w:'root'},{id:'174', w:'threw'},{id:'175', w:'flight'},{id:'176', w:'partner'},{id:'177', w:'portion'},{id:'178', w:'dangerous'},{id:'179', w:'fund'},{id:'180', w:'award'},{id:'181', w:'internal'},{id:'182', w:'absolute'},{id:'183', w:'Wright'},{id:'184', w:'panels'},{id:'185', w:'seriously'},{id:'186', w:'shares'},{id:'187', w:'appeal'},{id:'188', w:'author'},{id:'189', w:'Chamber'},{id:'190', w:'corn'},{id:'191', w:'centuries'},{id:'192', w:'defeat'},{id:'193', w:'strip'},{id:'194', w:'electrical'},{id:'195', w:'fought'},{id:'196', w:'quantity'},{id:'197', w:'fiction'},{id:'198', w:'precision'},{id:'199', w:'artery'},{id:'200', w:'pencil'},{id:'201', w:'ocean'},{id:'202', w:'offices'},{id:'203', w:'profit'},{id:'204', w:'promised'},{id:'205', w:'furnish'},{id:'206', w:'residential'},{id:'207', w:'tube'},{id:'208', w:'vast'},{id:'209', w:'adopted'},{id:'210', w:'suspect'},{id:'211', w:'taxes'},{id:'212', w:'Africa'},{id:'213', w:'impression'},{id:'214', w:'recommend'},{id:'215', w:'sugar'},{id:'216', w:'feels'},{id:'217', w:'referred'},{id:'218', w:'Edward'},{id:'219', w:'text'},{id:'220', w:'arise'},{id:'221', w:'Calling'},{id:'222', w:'mud'},{id:'223', w:'Pennsylvania'},{id:'224', w:'witness'},{id:'225', w:'goal'},{id:'226', w:'Alexander'},{id:'227', w:'contract'},{id:'228', w:'task'},{id:'229', w:'cloud'},{id:'230', w:'charges'},{id:'231', w:'repeat'},{id:'232', w:'containing'},{id:'233', w:'target'},{id:'234', w:'chemical'},{id:'235', w:'includes'},{id:'236', w:'maintain'},{id:'237', w:'seldom'},{id:'238', w:'TV'},{id:'239', w:'mounted'},{id:'240', w:'technique'},{id:'241', w:'intended'},{id:'242', w:'qualities'},{id:'243', w:'fence'},{id:'244', w:'offers'},{id:'245', w:'February'},{id:'246', w:'prefer'},{id:'247', w:'admission'},{id:'248', w:'riding'},{id:'249', w:'Lucy'},{id:'250', w:'novel'},{id:'251', w:'percentage'},{id:'252', w:'Adams'},{id:'253', w:'expenditures'},{id:'254', w:'ultimate'},{id:'255', w:'Watson'},{id:'256', w:'ear'},{id:'257', w:'Ballet'},{id:'258', w:'cast'},{id:'259', w:'establish'},{id:'260', w:'remove'},{id:'261', w:'stuff'},{id:'262', w:'minor'},{id:'263', w:'stem'},{id:'264', w:'mold'},{id:'265', w:'burden'},{id:'266', w:'listed'},{id:'267', w:'meal'},{id:'268', w:'warning'},{id:'269', w:'considerably'},{id:'270', w:'mostly'},{id:'271', w:'amounts'},{id:'272', w:'admitted'},{id:'273', w:'errors'},{id:'274', w:'opinions'},{id:'275', w:'Asia'},{id:'276', w:'culture'},{id:'277', w:'virtue'},{id:'278', w:'coal'},{id:'279', w:'continuous'},{id:'280', w:'funeral'},{id:'281', w:'seeking'},{id:'282', w:'Acres'},{id:'283', w:'lunch'},{id:'284', w:'changing'},{id:'285', w:'courage'},{id:'286', w:'Orleans'},{id:'287', w:'hundreds'},{id:'288', w:'reflection'},{id:'289', w:'developments'},{id:'290', w:'arrive'},{id:'291', w:'fired'},{id:'292', w:'settle'},{id:'293', w:'Helping'},{id:'294', w:'colony'},{id:'295', w:'POUNDS'},{id:'296', w:'nearby'},{id:'297', w:'lies'},{id:'298', w:'reproduce'},{id:'299', w:'suffering'},{id:'300', w:'em'},{id:'301', w:'stretch'},{id:'302', w:'grain'},{id:'303', w:'slavery'},{id:'304', w:'driven'},{id:'305', w:'vital'},{id:'306', w:'spirits'},{id:'307', w:'ships'},{id:'308', w:'collected'},{id:'309', w:'climbed'},{id:'310', w:'pilot'},{id:'311', w:'academic'},{id:'312', w:'shoes'},{id:'313', w:'tables'},{id:'314', w:'evident'},{id:'315', w:'Adam'},{id:'316', w:'volumes'},{id:'317', w:'Manchester'},{id:'318', w:'Hans'},{id:'319', w:'conduct'},{id:'320', w:'slaves'},{id:'321', w:'reflect'},{id:'322', w:'washing'},{id:'323', w:'thickness'},{id:'324', w:'Mama'},{id:'325', w:'sacrifice'},{id:'326', w:'worker'},{id:'327', w:'wound'},{id:'328', w:'zero'},{id:'329', w:'liquor'},{id:'330', w:'customer'},{id:'331', w:'eastern'},{id:'332', w:'insisted'},{id:'333', w:'item'},{id:'334', w:'rural'},{id:'335', w:'bureau'},{id:'336', w:'explanation'},{id:'337', w:'huge'},{id:'338', w:'dealing'},{id:'339', w:'extraordinary'},{id:'340', w:'symbol'},{id:'341', w:'saved'},{id:'342', w:'transportation'},{id:'343', w:'create'},{id:'344', w:'reader'},{id:'345', w:'pace'},{id:'346', w:'recorded'},{id:'347', w:'suffered'},{id:'348', w:'flying'},{id:'349', w:'year-old'},{id:'350', w:'rice'},{id:'351', w:'negative'},{id:'352', w:'separated'},{id:'353', w:'dancing'},{id:'354', w:'lesson'},{id:'355', w:'medicine'},{id:'356', w:'Brothers'},{id:'357', w:'consists'},{id:'358', w:'warfare'},{id:'359', w:'investment'},{id:'360', w:'version'},{id:'361', w:'employee'},{id:'362', w:'reaching'},{id:'363', w:'grown'},{id:'364', w:'marketing'},{id:'365', w:'cow'},{id:'366', w:'resulting'},{id:'367', w:'shade'},{id:'368', w:'gentle'},{id:'369', w:'conflict'},{id:'370', w:'element'},{id:'371', w:'heads'},{id:'372', w:'identification'},{id:'373', w:'ie'},{id:'374', w:'hero'},{id:'375', w:'lifted'},{id:'376', w:'split'},{id:'377', w:'Mountains'},{id:'378', w:'recreation'},{id:'379', w:'readily'},{id:'380', w:'porch'},{id:'381', w:'contrary'},{id:'382', w:'darkness'},{id:'383', w:'achieve'},{id:'384', w:'emotions'},{id:'385', w:'supreme'},{id:'386', w:'holds'},{id:'387', w:'gay'},{id:'388', w:'waters'},{id:'389', w:'belt'},{id:'390', w:'uniform'},{id:'391', w:'unlike'},{id:'392', w:'harbor'},{id:'393', w:'replaced'},{id:'394', w:'swing'},{id:'395', w:'nineteenth'},{id:'396', w:'gentleman'},{id:'397', w:'mechanism'},{id:'398', w:'lots'},{id:'399', w:'crossed'},{id:'400', w:'institute'},{id:'401', w:'Hardy'},{id:'402', w:'Anne'},{id:'403', w:'excessive'},{id:'404', w:'tight'},{id:'405', w:'sand'},{id:'406', w:'wages'},{id:'407', w:'increasingly'},{id:'408', w:'mixture'},{id:'409', w:'card'},{id:'410', w:'regional'},{id:'411', w:'sufficiently'},{id:'412', w:'distinguished'},{id:'413', w:'fundamental'},{id:'414', w:'reflected'},{id:'415', w:'tiny'},{id:'416', w:'nowhere'},{id:'417', w:'reactions'},{id:'418', w:'FALSE'},{id:'419', w:'varying'},{id:'420', w:'varied'},{id:'421', w:'anxious'},{id:'422', w:'touched'},{id:'423', w:'guns'},{id:'424', w:'exists'},{id:'425', w:'editorial'},{id:'426', w:'seeds'},{id:'427', w:'cure'},{id:'428', w:'possibilities'},{id:'429', w:'civilization'},{id:'430', w:'pack'},{id:'431', w:'incident'},{id:'432', w:'particles'},{id:'433', w:'fed'},{id:'434', w:'Rachel'},{id:'435', w:'lock'},{id:'436', w:'Linda'},{id:'437', w:'opposed'},{id:'438', w:'altogether'},{id:'439', w:'customers'},{id:'440', w:'powder'},{id:'441', w:'modest'},{id:'442', w:'storage'},{id:'443', w:'representatives'},{id:'444', w:'asleep'},{id:'445', w:'societies'},{id:'446', w:'constantly'},{id:'447', w:'neighbors'},{id:'448', w:'removal'},{id:'449', w:'charm'},{id:'450', w:'communities'},{id:'451', w:'vice'},{id:'452', w:'weekend'},{id:'453', w:'Democrats'},{id:'454', w:'star'},{id:'455', w:'visited'},{id:'456', w:'absent'},{id:'457', w:'prize'},{id:'458', w:'spending'},{id:'459', w:'eager'},{id:'460', w:'Illinois'},{id:'461', w:'distinction'},{id:'462', w:'manage'},{id:'463', w:'FRANCISCO'},{id:'464', w:'grant'},{id:'465', w:'silver'},{id:'466', w:'Carl'},{id:'467', w:'arc'},{id:'468', w:'discipline'},{id:'469', w:'tea'},{id:'470', w:'comparable'},{id:'471', w:'jump'},{id:'472', w:'continues'},{id:'473', w:'deny'},{id:'474', w:'display'},{id:'475', w:'flower'},{id:'476', w:'downtown'},{id:'477', w:'pleased'},{id:'478', w:'institution'},{id:'479', w:'assumption'},{id:'480', w:'musicians'},{id:'481', w:'remaining'},{id:'482', w:'Pike'},{id:'483', w:'aspect'},{id:'484', w:'journey'},{id:'485', w:'participation'},{id:'486', w:'verse'},{id:'487', w:'virtually'},{id:'488', w:'pot'},{id:'489', w:'stepped'},{id:'490', w:'limits'},{id:'491', w:'odd'},{id:'492', w:'superior'},{id:'493', w:'involves'},{id:'494', w:'rarely'},{id:'495', w:'precious'},{id:'496', w:'peculiar'},{id:'497', w:'whereas'}]
            words : [{id:  '1', w:'word'},{id:  '2', w:'canal'}, {id:  '3', w:'hoped'}]
		};


function selectAll() {
    alert('selectAll');

}

function selectNone() {
    alert('selectNone');
}

    }

})();

