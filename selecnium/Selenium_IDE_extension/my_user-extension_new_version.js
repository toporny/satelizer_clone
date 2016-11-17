// Selenium PLugin for DNA testing 
// 01.2014 przemyslaw.rzeznik@3vcorporate.com
// 
// commands:
//   GetPin
//   GetProxyNumber
//   getFakeUser 
//   GetDnaLinkedCardPhonePassword (only for DNA)

// ========================================================================

Selenium.prototype.showAlerts = function(jsonObject) {
    alert_string = 'Selenium Bridge - 2014 Przemyslaw Rzeznik' + "\n\n";
    alert_string += 'status = '  + jsonObject.status + "\n";
    alert_string += 'message = '+ jsonObject.message + "\n";
    alert_string += 'project = '+ jsonObject.project + "\n";
    alert_string += 'env = '    + jsonObject.env + "\n";
    alert_string += 'action = ' + jsonObject.action + "\n";
    alert_string += 'value = '  + jsonObject.value + "\n";
    alert_string += 'debug = '  + jsonObject.debug + "\n";
    alert(alert_string);
}



Selenium.prototype.doGetFreeNumber = function(target, value){
  var xhReq = new XMLHttpRequest();
  data = "?action=selGetFreeNumber";
  data += "&project="+storedVars['project'];
  data += "&env="+storedVars['env'];
  data += "&value="+value;
  xhReq.open('GET', storedVars['ajax_path']+data, false);
  xhReq.send(null);
  var serverResponse = xhReq.responseText;
  var jsonObject = JSON.parse( serverResponse );
  if (jsonObject.status == -1) {
    this.showAlerts(jsonObject);
  }
  storedVars[target] = jsonObject.message;
}



Selenium.prototype.doGetProxyNumber = function(target, value){
  var xhReq = new XMLHttpRequest();
  data = "?action=selGetProxy";
  data += "&project="+storedVars['project'];
  data += "&env="+storedVars['env'];
  data += "&value="+value;
  xhReq.open('GET', storedVars['ajax_path']+data, false);
  xhReq.send(null);
  var serverResponse = xhReq.responseText;
  var jsonObject = JSON.parse( serverResponse );
  if (jsonObject.status == -1) {
    this.showAlerts(jsonObject);
  }
  storedVars[target] = serverResponse;
}


Selenium.prototype.doGetPin = function(target, value){
  var xhReq = new XMLHttpRequest();
  data = "?action=selGetPin";
  data += "&project="+storedVars['project'];
  data += "&env="+storedVars['env'];
  data += "&value="+value;
  //alert(storedVars['ajax_path']+data);
  xhReq.open('GET', storedVars['ajax_path']+data, false);
  xhReq.send(null);
  var serverResponse = xhReq.responseText;
  var jsonObject = JSON.parse( serverResponse );
  if (jsonObject.status == -1) {
    this.showAlerts(jsonObject);
  } else {
    storedVars[target] = jsonObject.message;
    storedVars[target+'1'] = jsonObject.message.substr(0,1);
    storedVars[target+'2'] = jsonObject.message.substr(1,1);
    storedVars[target+'3'] = jsonObject.message.substr(2,1);
    storedVars[target+'4'] = jsonObject.message.substr(3,1);
  }
}


// ========================================================================

Selenium.prototype.doGetFakeUser = function(target, value){
  var xhReq = new XMLHttpRequest();

  // if (storedVars[project] != '')
  switch (storedVars['project']) {
    case 'ORMB':
      xhReq.open('GET', 'http://alltic.home.pl/autoinstalator/3v_fake_data/orange.php', false);
      xhReq.send(null);
      var serverResponse = xhReq.responseText;
      var myObject = eval ("(" + serverResponse + ")"); 
      storedVars[target+'_id']              = myObject.id;
      storedVars[target+'_status']          = myObject.status;
      storedVars[target+'_gender']          = myObject.gender;
      storedVars[target+'_title']           = myObject.title;
      storedVars[target+'_givenname']       = myObject.givenname;
      storedVars[target+'_middleinitial']   = myObject.middleinitial;
      storedVars[target+'_surname']         = myObject.surname;
      storedVars[target+'_streetaddress']   = myObject.streetaddress;
      storedVars[target+'_city']            = myObject.city;
      storedVars[target+'_state']           = myObject.state;
      storedVars[target+'_zipcode']         = myObject.zipcode;
      storedVars[target+'_country']         = myObject.country;
      storedVars[target+'_countryfull']     = myObject.countryfull;
      storedVars[target+'_emailaddress']    = myObject.emailaddress;
      storedVars[target+'_username']        = myObject.username;
      storedVars[target+'_password']        = myObject.password;
      storedVars[target+'_telephonenumber'] = myObject.telephonenumber;
      storedVars[target+'_maidenname']      = myObject.maidenname;
      storedVars[target+'_birthday']        = myObject.birthday;
      storedVars[target+'_nationalid']      = myObject.nationalid;      
    break;

    case 'DNAMB': 
      xhReq.open('GET', 'http://alltic.home.pl/autoinstalator/3v_fake_data/dna.php', false);
      xhReq.send(null);
      var serverResponse = xhReq.responseText;
      var myObject = eval ("(" + serverResponse + ")"); 
      storedVars[target+'_id']              = myObject.id;
      storedVars[target+'_status']          = myObject.status;
      storedVars[target+'_gender']          = myObject.gender;
      storedVars[target+'_title']           = myObject.title;
      storedVars[target+'_givenname']       = myObject.givenname;
      storedVars[target+'_middleinitial']   = myObject.middleinitial;
      storedVars[target+'_surname']         = myObject.surname;
      storedVars[target+'_streetaddress']   = myObject.streetaddress;
      storedVars[target+'_city']            = myObject.city;
      storedVars[target+'_state']           = myObject.state;
      storedVars[target+'_zipcode']         = myObject.zipcode;
      storedVars[target+'_country']         = myObject.country;
      storedVars[target+'_countryfull']     = myObject.countryfull;
      storedVars[target+'_emailaddress']    = myObject.emailaddress;
      storedVars[target+'_username']        = myObject.username;
      storedVars[target+'_password']        = myObject.password;
      storedVars[target+'_telephonenumber'] = myObject.telephonenumber;
      storedVars[target+'_maidenname']      = myObject.maidenname;
      storedVars[target+'_birthday']        = myObject.birthday;
      storedVars[target+'_nationalid']      = myObject.nationalid;       
    break;

    case 'PSMB': 
      // database not prepared yet
    break;
  }


}

Selenium.prototype.doGetDnaLinkedCardPhonePassword = function(target, value){
  /*
  // this is not tested - not finished
  var xhReq = new XMLHttpRequest();
  data = "?action=selGetDnaLinkedCardPhonePassword";
  data += "&project="+storedVars['project'];
  data += "&env="+storedVars['env'];
  data += "&value="+value;
  xhReq.open('GET', storedVars['ajax_path']+data, false);
  xhReq.send(null);
  var serverResponse = xhReq.responseText;
  var jsonObject = JSON.parse( serverResponse );
  if (jsonObject.status == -1) {
    this.showAlerts(jsonObject);
  }
  storedVars[target] = serverResponse;
  */
}
