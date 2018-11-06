// JavaScript Document

/**
 * @prop {string} membershipId: The customer's membership ID.
 * @return {number} The check digit.
 */

function checkDigit(membershipId) {
  
 console.log('createCheckDigit');
    var membershipIdtotal = new Number(0);
  for(i=0; i <= membershipId.length; i++){
    
    nstr = parseInt(membershipId.charAt(i));
    if(Number.isInteger(nstr)){
    n = new Number(nstr);
    
    membershipIdtotal = membershipIdtotal + n;
     
    }
  }
  console.log(' total=' + membershipIdtotal);
  console.log(' length=' +membershipIdtotal.toString().length);
  
    return membershipIdtotal;
}
function createCheckDigit(membershipId) {
  
 console.log('createCheckDigit');
    var membershipIdtotal = new Number(0);
  for(i=0; i <= membershipId.length; i++){
    
    nstr = parseInt(membershipId.charAt(i));
    if(Number.isInteger(nstr)){
    n = new Number(nstr);
    
    membershipIdtotal = membershipIdtotal + n;
     
    }
  }
  console.log(' total=' + membershipIdtotal);
  console.log(' length=' +membershipIdtotal.toString().length);

  while (membershipIdtotal.toString().length >= 2) {
    membershipIdtotal = checkDigit(membershipId.toString());
  }
  
  return membershipIdtotal;
  
}

console.log(createCheckDigit("55"));




/*


*/


/**
 * @prop {string} membershipId: The customer's membership ID.
 * @return {number} The check digit.
 */

function checkDigit(membershipId) {
  
 console.log('checkDigit');
    var membershipIdtotal = new Number(0);
  for(i=0; i <= membershipId.length; i++){
    
    nstr = parseInt(membershipId.charAt(i));
    if(Number.isInteger(nstr)){
    n = new Number(nstr);
    
    membershipIdtotal = membershipIdtotal + n;
     
    }
  }
  console.log(' total=' + membershipIdtotal);
  console.log(' length=' +membershipIdtotal.toString().length);
  
    return membershipIdtotal;
}
function createCheckDigit(membershipId) {
  
  
  while (membershipId.toString().length >= 2) {
    membershipId = checkDigit(membershipId.toString());
  }  
  return membershipId;  
}

console.log(createCheckDigit("2"));
